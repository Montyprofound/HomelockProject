<?php

namespace App\Http\Controllers;

use App\Models\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewRequestNotification;

class AppController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function security()
    {
        return view('security');
    }

    public function cleaning()
    {
        return view('cleaning');
    }

    public function fireExtinguishers()
    {
        // Sample fire extinguisher products
        $products = [
            ['name' => 'ABC Dry Powder 6kg', 'description' => 'Multi-purpose fire extinguisher suitable for Class A, B, and C fires'],
            ['name' => 'CO2 5kg', 'description' => 'Carbon dioxide extinguisher ideal for electrical fires'],
            ['name' => 'Foam 9L', 'description' => 'Foam extinguisher perfect for Class A and B fires'],
            ['name' => 'Water 9L', 'description' => 'Water extinguisher for Class A fires only']
        ];
        
        return view('fire-extinguishers', compact('products'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitRequest(HttpRequest $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'service_type' => 'required|in:security,cleaning,fire_extinguisher,contact',
            'message' => 'required|string',
            'product_interest' => 'nullable|string|max:255'
        ]);

        $newRequest = Request::create($validated);

        // Send email notification to admin
        Mail::to(env('ADMIN_EMAIL'))->send(new NewRequestNotification($newRequest));

        return back()->with('success', 'Your request has been submitted successfully! We will contact you soon.');
    }
}