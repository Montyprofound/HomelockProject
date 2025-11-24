<?php

namespace App\Http\Controllers;

use App\Models\Request;
use Illuminate\Http\Request as HttpRequest;

class ApiController extends Controller
{
    public function getServices()
    {
        return response()->json([
            'services' => [
                ['id' => 'security', 'name' => 'Security Guards', 'description' => 'Professional security guard services'],
                ['id' => 'cleaning', 'name' => 'Cleaning Services', 'description' => 'Commercial and residential cleaning'],
                ['id' => 'fire_extinguisher', 'name' => 'Fire Extinguishers', 'description' => 'Fire safety equipment sales']
            ]
        ]);
    }

    public function getProducts()
    {
        return response()->json([
            'products' => [
                ['name' => 'ABC Dry Powder 6kg', 'description' => 'Multi-purpose fire extinguisher suitable for Class A, B, and C fires'],
                ['name' => 'CO2 5kg', 'description' => 'Carbon dioxide extinguisher ideal for electrical fires'],
                ['name' => 'Foam 9L', 'description' => 'Foam extinguisher perfect for Class A and B fires'],
                ['name' => 'Water 9L', 'description' => 'Water extinguisher for Class A fires only']
            ]
        ]);
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

        $serviceRequest = Request::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Request submitted successfully',
            'request_id' => $serviceRequest->id
        ]);
    }
}