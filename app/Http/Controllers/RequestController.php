<?php

namespace App\Http\Controllers;

use App\Models\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\RateLimiter;

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
            'product_interest' => 'nullable|string|max:255'
        ]);

        // Sanitize input
        $validated['message'] = strip_tags($validated['message']);
        $validated['name'] = strip_tags($validated['name']);
        if ($validated['company_name']) {
            $validated['company_name'] = strip_tags($validated['company_name']);
        }
        if ($validated['product_interest']) {
            $validated['product_interest'] = strip_tags($validated['product_interest']);
        }

        Request::create($validated);

        return back()->with('success', 'Your request has been submitted successfully! We will contact you soon.');
    }
}