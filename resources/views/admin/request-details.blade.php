@extends('layouts.admin')

@section('title', 'Request Details - Admin Panel')

@section('content')
<div class="py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">Request Details</h1>
        <a href="{{ route('admin.requests') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Back to Requests
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Request #{{ $request->id }}</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6>Contact Information</h6>
                    <table class="table table-borderless">
                        <tr>
                            <td><strong>Name:</strong></td>
                            <td>{{ $request->name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td>{{ $request->email }}</td>
                        </tr>
                        <tr>
                            <td><strong>Phone:</strong></td>
                            <td>{{ $request->phone }}</td>
                        </tr>
                        @if($request->company_name)
                        <tr>
                            <td><strong>Company:</strong></td>
                            <td>{{ $request->company_name }}</td>
                        </tr>
                        @endif
                    </table>
                </div>
                
                <div class="col-md-6">
                    <h6>Request Information</h6>
                    <table class="table table-borderless">
                        <tr>
                            <td><strong>Service Type:</strong></td>
                            <td><span class="badge bg-secondary">{{ $request->service_display }}</span></td>
                        </tr>
                        @if($request->product_interest)
                        <tr>
                            <td><strong>Product Interest:</strong></td>
                            <td>{{ $request->product_interest }}</td>
                        </tr>
                        @endif
                        <tr>
                            <td><strong>Date Submitted:</strong></td>
                            <td>{{ $request->created_at->format('M d, Y H:i A') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <hr>
            
            <h6>Message</h6>
            <div class="bg-light p-3 rounded">
                {{ $request->message }}
            </div>
        </div>
    </div>
</div>
@endsection