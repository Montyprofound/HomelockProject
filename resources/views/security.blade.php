@extends('layouts.app')

@section('title', 'Security Guards - Homelock Services')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="display-5 fw-bold mb-4">
                <i class="fas fa-user-shield text-primary me-3"></i>Security Guard Services
            </h1>
            
            <p class="lead mb-4">Comprehensive security solutions including guarding services, alarm backup, and specialized protection tailored to your needs.</p>
            
            <!-- Service Features -->
            <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-user-shield fa-2x text-primary"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="card-title">Manned Guards</h5>
                                    <p class="card-text">Professional security personnel for 24/7 property protection with comprehensive training and background checks.</p>
                                    <ul class="list-unstyled small text-muted">
                                        <li><i class="fas fa-check text-success me-1"></i>Licensed & Trained</li>
                                        <li><i class="fas fa-check text-success me-1"></i>Background Verified</li>
                                        <li><i class="fas fa-check text-success me-1"></i>24/7 Availability</li>
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
                                    <i class="fas fa-dog fa-2x text-primary"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="card-title">Dog Guards</h5>
                                    <p class="card-text">Trained security dogs with professional handlers for enhanced protection and deterrence.</p>
                                    <ul class="list-unstyled small text-muted">
                                        <li><i class="fas fa-check text-success me-1"></i>Professionally Trained</li>
                                        <li><i class="fas fa-check text-success me-1"></i>Enhanced Detection</li>
                                        <li><i class="fas fa-check text-success me-1"></i>Strong Deterrent</li>
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
                                    <i class="fas fa-route fa-2x text-primary"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="card-title">Patrol/Escort Services</h5>
                                    <p class="card-text">Mobile patrols and personal escort services for comprehensive area coverage.</p>
                                    <ul class="list-unstyled small text-muted">
                                        <li><i class="fas fa-check text-success me-1"></i>Mobile Coverage</li>
                                        <li><i class="fas fa-check text-success me-1"></i>Regular Reporting</li>
                                        <li><i class="fas fa-check text-success me-1"></i>Flexible Scheduling</li>
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
                                    <i class="fas fa-bell fa-2x text-primary"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="card-title">Alarm Backup Services</h5>
                                    <p class="card-text">Rapid response to alarm activations and security breaches with immediate dispatch.</p>
                                    <ul class="list-unstyled small text-muted">
                                        <li><i class="fas fa-check text-success me-1"></i>5-Minute Response</li>
                                        <li><i class="fas fa-check text-success me-1"></i>24/7 Monitoring</li>
                                        <li><i class="fas fa-check text-success me-1"></i>Police Coordination</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Why Choose Us -->
            <div class="bg-light p-4 rounded mb-4">
                <h4 class="mb-3">Why Choose Our Security Services?</h4>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-award text-primary me-2"></i>10+ Years Experience</li>
                            <li class="mb-2"><i class="fas fa-certificate text-primary me-2"></i>Fully Licensed & Insured</li>
                            <li class="mb-2"><i class="fas fa-clock text-primary me-2"></i>24/7 Emergency Response</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-users text-primary me-2"></i>Trained Professionals</li>
                            <li class="mb-2"><i class="fas fa-shield-check text-primary me-2"></i>Comprehensive Coverage</li>
                            <li class="mb-2"><i class="fas fa-handshake text-primary me-2"></i>Trusted by 500+ Clients</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="fas fa-clipboard-list me-2"></i>Request a Quote</h5>
                    <small>Get a personalized security solution</small>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    
                    <form action="{{ route('submit-request') }}" method="POST" id="quoteForm">
                        @csrf
                        <input type="hidden" name="service_type" value="security">
                        
                        <div class="mb-3">
                            <label class="form-label">Name *</label>
                            <input type="text" name="name" class="form-control" required>
                            <div class="invalid-feedback">Please provide your name.</div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Email *</label>
                            <input type="email" name="email" class="form-control" required>
                            <div class="invalid-feedback">Please provide a valid email.</div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Phone *</label>
                            <input type="tel" name="phone" class="form-control" required>
                            <div class="invalid-feedback">Please provide your phone number.</div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Company Name</label>
                            <input type="text" name="company_name" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Security Service Type</label>
                            <select class="form-control" name="security_type">
                                <option value="">Select service type</option>
                                <option value="manned_guards">Manned Guards</option>
                                <option value="dog_guards">Dog Guards</option>
                                <option value="patrol_services">Patrol Services</option>
                                <option value="alarm_backup">Alarm Backup</option>
                                <option value="multiple">Multiple Services</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Message *</label>
                            <textarea name="message" class="form-control" rows="4" placeholder="Tell us about your security needs, property size, hours of coverage needed..." required></textarea>
                            <div class="invalid-feedback">Please describe your security needs.</div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100">
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
                            <strong class="text-primary">$25/hour</strong>
                            <br><small class="text-muted">Manned Guards</small>
                        </div>
                        <div class="col-6">
                            <strong class="text-primary">$35/hour</strong>
                            <br><small class="text-muted">Dog Guards</small>
                        </div>
                    </div>
                    <small class="text-muted d-block mt-2">*Prices vary by location and requirements</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection