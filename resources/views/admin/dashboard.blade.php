@extends('layouts.admin')

@section('title', 'Dashboard - Admin Panel')

@section('content')
<div class="py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h2 mb-1">Dashboard</h1>
            <p class="text-muted mb-0">Welcome back! Here's what's happening with your business.</p>
        </div>
        <div class="text-end">
            <small class="text-muted">Last updated: {{ now()->format('M d, Y h:i A') }}</small>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="mb-1">{{ $totalRequests }}</h4>
                            <p class="mb-0 small">Total Requests</p>
                        </div>
                        <i class="fas fa-envelope fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card bg-success text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="mb-1">{{ $recentRequests->count() }}</h4>
                            <p class="mb-0 small">Recent Requests</p>
                        </div>
                        <i class="fas fa-clock fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card bg-info text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="mb-1">24/7</h4>
                            <p class="mb-0 small">Service Hours</p>
                        </div>
                        <i class="fas fa-shield-alt fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card bg-warning text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="mb-1">500+</h4>
                            <p class="mb-0 small">Happy Clients</p>
                        </div>
                        <i class="fas fa-users fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Requests -->
    <div class="card shadow-sm">
        <div class="card-header bg-white border-bottom">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0"><i class="fas fa-list me-2 text-primary"></i>Recent Requests</h5>
                <a href="{{ route('admin.requests') }}" class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-external-link-alt me-1"></i>View All
                </a>
            </div>
        </div>
        <div class="card-body">
            @if($recentRequests->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="border-0">Client</th>
                                <th class="border-0">Service</th>
                                <th class="border-0">Date</th>
                                <th class="border-0">Status</th>
                                <th class="border-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentRequests as $request)
                            <tr>
                                <td>
                                    <div>
                                        <strong>{{ $request->name }}</strong>
                                        <br><small class="text-muted">{{ $request->email }}</small>
                                    </div>
                                </td>
                                <td>
                                    @php
                                        $serviceColors = [
                                            'security' => 'primary',
                                            'cleaning' => 'success', 
                                            'fire_extinguisher' => 'danger',
                                            'contact' => 'info'
                                        ];
                                        $color = $serviceColors[$request->service_type] ?? 'secondary';
                                    @endphp
                                    <span class="badge bg-{{ $color }}">{{ $request->service_display }}</span>
                                </td>
                                <td>
                                    <small>{{ $request->created_at->format('M d, Y') }}<br>
                                    {{ $request->created_at->format('h:i A') }}</small>
                                </td>
                                <td>
                                    <span class="badge bg-warning">Pending</span>
                                </td>
                                <td>
                                    <a href="{{ route('admin.request-details', $request->id) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye me-1"></i>View
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-5">
                    <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                    <h6 class="text-muted">No requests yet</h6>
                    <p class="text-muted small">New client requests will appear here</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection