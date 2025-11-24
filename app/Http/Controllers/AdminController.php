<?php

namespace App\Http\Controllers;

use App\Models\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $recentRequests = Request::latest()->take(5)->get();
        $totalRequests = Request::count();
        
        return view('admin.dashboard', compact('recentRequests', 'totalRequests'));
    }

    public function requests()
    {
        $requests = Request::latest()->paginate(20);
        return view('admin.requests', compact('requests'));
    }

    public function showRequest($id)
    {
        // Only allow authenticated admin users
        if (!Auth::check()) {
            abort(403);
        }
        
        $request = Request::findOrFail($id);
        return view('admin.request-details', compact('request'));
    }
}