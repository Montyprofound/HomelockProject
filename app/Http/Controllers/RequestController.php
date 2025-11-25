<?php

namespace App\Http\Controllers;

use App\Models\Request;
use App\Mail\RequestConfirmation;
use App\Mail\AdminNotification;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class RequestController extends Controller
{
    public function store(HttpRequest $request)
    {
        // Rate limiting
        $key = 'request-form:' . $request->ip();
        if (RateLimiter::tooManyAttempts($key, 3)) {
            return back()->withErrors(['error' => 'Too many requests. Please try again later.']);
        }
        RateLimiter::hit($key, 300); // 5 minutes

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'service_type' => 'required|in:security,cleaning,fire_extinguisher,contact',
            'message' => 'required|string|max:1000',
            'product_interest' => 'nullable|string|max:255',
            'security_type' => 'nullable|in:manned_guards,dog_guards,patrol_services,alarm_backup,multiple',
            'service_interest' => 'nullable|in:security,cleaning,fire_extinguisher,multiple,other'
        ]);

        // Sanitize input
        $validated['message'] = strip_tags($validated['message']);
        $validated['name'] = strip_tags($validated['name']);
        if (isset($validated['company_name']) && $validated['company_name']) {
            $validated['company_name'] = strip_tags($validated['company_name']);
        }
        if (isset($validated['product_interest']) && $validated['product_interest']) {
            $validated['product_interest'] = strip_tags($validated['product_interest']);
        }

        // Create request record
        $newRequest = Request::create($validated);

        // Send emails
        try {
            // Send confirmation to customer
            Mail::to($newRequest->email)->send(new RequestConfirmation($newRequest));
            
            // Send notification to admin
            $adminEmail = env('ADMIN_EMAIL', 'admin@homelockservices.com');
            Mail::to($adminEmail)->send(new AdminNotification($newRequest));
            
            Log::info('Emails sent successfully for request ID: ' . $newRequest->id);
        } catch (\Exception $e) {
            Log::error('Failed to send emails for request ID: ' . $newRequest->id . ' - ' . $e->getMessage());
            // Continue execution - don't fail the request if email fails
        }

        return back()->with('success', 'Your request has been submitted successfully! A confirmation email has been sent to you.');
    }
}