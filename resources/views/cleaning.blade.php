@extends('layouts.app')

@section('title', 'Cleaning Services - Homelock Services')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-5 fw-bold mb-4">
                <i class="fas fa-broom text-success me-3"></i>Professional Cleaning Services
            </h1>
            
            <p class="lead mb-4">Complete property maintenance solutions including cleaning, fumigation, landscaping, and property management services.</p>
            
            <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-spray-can fa-2x text-success"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="card-title">Cleaning Services</h5>
                                    <p class="card-text">Professional cleaning for offices, homes, and commercial spaces with eco-friendly products.</p>
                                    <ul class="list-unstyled small text-muted">
                                        <li><i class="fas fa-check text-success me-1"></i>Daily/Weekly/Monthly</li>
                                        <li><i class="fas fa-check text-success me-1"></i>Eco-Friendly Products</li>
                                        <li><i class="fas fa-check text-success me-1"></i>Insured & Bonded</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-bug fa-2x text-success"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="card-title">Fumigation</h5>
                                    <p class="card-text">Comprehensive pest control and fumigation services for all property types.</p>
                                    <ul class="list-unstyled small text-muted">
                                        <li><i class="fas fa-check text-success me-1"></i>Safe Chemicals</li>
                                        <li><i class="fas fa-check text-success me-1"></i>Licensed Technicians</li>
                                        <li><i class="fas fa-check text-success me-1"></i>Follow-up Service</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-seedling fa-2x text-success"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="card-title">Landscaping</h5>
                                    <p class="card-text">Garden design, maintenance, and landscaping services to beautify your property.</p>
                                    <ul class="list-unstyled small text-muted">
                                        <li><i class="fas fa-check text-success me-1"></i>Design & Installation</li>
                                        <li><i class="fas fa-check text-success me-1"></i>Regular Maintenance</li>
                                        <li><i class="fas fa-check text-success me-1"></i>Irrigation Systems</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-building fa-2x text-success"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="card-title">Property Management</h5>
                                    <p class="card-text">Complete property management and maintenance solutions for peace of mind.</p>
                                    <ul class="list-unstyled small text-muted">
                                        <li><i class="fas fa-check text-success me-1"></i>24/7 Monitoring</li>
                                        <li><i class="fas fa-check text-success me-1"></i>Maintenance Coordination</li>
                                        <li><i class="fas fa-check text-success me-1"></i>Emergency Response</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="fas fa-clipboard-list me-2"></i>Request a Quote</h5>
                    <small>Get a customized cleaning solution</small>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    
                    <form action="{{ route('submit-request') }}" method="POST">
                        @csrf
                        <input type="hidden" name="service_type" value="cleaning">
                        
                        <div class="mb-3">
                            <label class="form-label">Name *</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Email *</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Phone *</label>
                            <input type="tel" name="phone" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Company Name</label>
                            <input type="text" name="company_name" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Service Type</label>
                            <select class="form-control" name="cleaning_type">
                                <option value="">Select service type</option>
                                <option value="office_cleaning">Office Cleaning</option>
                                <option value="residential_cleaning">Residential Cleaning</option>
                                <option value="fumigation">Fumigation</option>
                                <option value="landscaping">Landscaping</option>
                                <option value="property_management">Property Management</option>
                                <option value="multiple">Multiple Services</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Message *</label>
                            <textarea name="message" class="form-control" rows="4" placeholder="Describe your cleaning requirements, property size, frequency needed..." required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-success w-100">
                            <i class="fas fa-paper-plane me-2"></i>Submit Request
                        </button>
                        
                        <div class="text-center mt-3">
                            <small class="text-muted">
                                <i class="fas fa-clock me-1"></i>Response within 2 hours
                            </small>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Pricing Info -->
            <div class="card shadow mt-4">
                <div class="card-body text-center">
                    <h6 class="card-title">Starting Prices</h6>
                    <div class="row text-center">
                        <div class="col-6">
                            <strong class="text-success">$15/hour</strong>
                            <br><small class="text-muted">Office Cleaning</small>
                        </div>
                        <div class="col-6">
                            <strong class="text-success">$200+</strong>
                            <br><small class="text-muted">Fumigation</small>
                        </div>
                    </div>
                    <small class="text-muted d-block mt-2">*Prices vary by size and requirements</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection