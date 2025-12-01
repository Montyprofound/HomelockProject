<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Request as ServiceRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ApiController extends Controller
{
    public function services()
    {
        return response()->json([
            'services' => [
                [
                    'id' => 'security',
                    'name' => 'Security Services',
                    'description' => 'Professional security guard services',
                    'icon' => 'shield-alt'
                ],
                [
                    'id' => 'cleaning',
                    'name' => 'Cleaning Services', 
                    'description' => 'Commercial and residential cleaning',
                    'icon' => 'broom'
                ],
                [
                    'id' => 'fire_extinguisher',
                    'name' => 'Fire Extinguishers',
                    'description' => 'Fire safety equipment sales',
                    'icon' => 'fire-extinguisher'
                ]
            ]
        ]);
    }

    public function storeRequest(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'service_type' => 'required|string|in:security,cleaning,fire_extinguisher,contact',
            'message' => 'required|string',
            'product_interest' => 'nullable|string|max:255'
        ]);

        $serviceRequest = ServiceRequest::create($validated);

        return response()->json([
            'message' => 'Request submitted successfully',
            'request_id' => $serviceRequest->id
        ], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Invalid credentials']
            ]);
        }

        $token = $user->createToken('mobile-app')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token
        ]);
    }

    public function getRequests()
    {
        $requests = ServiceRequest::orderBy('created_at', 'desc')->get();
        
        return response()->json(['requests' => $requests]);
    }

    public function getRequest($id)
    {
        $request = ServiceRequest::findOrFail($id);
        
        return response()->json(['request' => $request]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        
        return response()->json(['message' => 'Logged out successfully']);
    }
}