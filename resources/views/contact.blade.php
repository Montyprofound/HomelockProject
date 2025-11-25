@extends('layouts.app')

@section('title', 'Contact Us - Homelock Services')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bold">Contact Us</h1>
                <p class="lead">Get in touch with us for any inquiries or support</p>
            </div>
            
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-1"><i class="fas fa-envelope me-2"></i>Get In Touch</h4>
                    <p class="mb-0">We'd love to hear from you</p>
                </div>
                <div class="card-body p-5">
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
                    
                    <form action="{{ route('submit-request') }}" method="POST" id="contactForm">
                        @csrf
                        <input type="hidden" name="service_type" value="contact">
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Name *</label>
                                <input type="text" name="name" class="form-control" required>
                                <div class="invalid-feedback">Please provide your name.</div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email *</label>
                                <input type="email" name="email" class="form-control" required>
                                <div class="invalid-feedback">Please provide a valid email.</div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone *</label>
                                <input type="tel" name="phone" class="form-control" required>
                                <div class="invalid-feedback">Please provide your phone number.</div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Company Name</label>
                                <input type="text" name="company_name" class="form-control">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Service Interest</label>
                            <select class="form-control" name="service_interest">
                                <option value="">Select a service (optional)</option>
                                <option value="security">Security Services</option>
                                <option value="cleaning">Cleaning Services</option>
                                <option value="fire_extinguisher">Fire Extinguishers</option>
                                <option value="multiple">Multiple Services</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label">Message *</label>
                            <textarea name="message" class="form-control" rows="5" placeholder="How can we help you? Please provide details about your requirements..." required></textarea>
                            <div class="invalid-feedback">Please provide your message.</div>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                            </button>
                        </div>
                        
                        <div class="text-center mt-3">
                            <small class="text-muted">
                                <i class="fas fa-clock me-1"></i>We typically respond within 2 hours
                            </small>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-phone fa-lg"></i>
                            </div>
                            <h5 class="card-title">Call Us</h5>
                            <p class="card-text">+1 (555) 123-4567</p>
                            <a href="tel:+15551234567" class="btn btn-outline-primary btn-sm">Call Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-envelope fa-lg"></i>
                            </div>
                            <h5 class="card-title">Email Us</h5>
                            <p class="card-text">info@homelockservices.com</p>
                            <a href="mailto:info@homelockservices.com" class="btn btn-outline-primary btn-sm">Send Email</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-map-marker-alt fa-lg"></i>
                            </div>
                            <h5 class="card-title">Visit Us</h5>
                            <p class="card-text">123 Business St<br>City, State 12345</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Get Directions</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Business Hours -->
            <div class="card mt-4">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <h6><i class="fas fa-clock text-primary me-2"></i>Business Hours</h6>
                            <p class="mb-0">Monday - Friday: 8:00 AM - 6:00 PM<br>
                            Saturday: 9:00 AM - 4:00 PM<br>
                            Sunday: Emergency Only</p>
                        </div>
                        <div class="col-md-6">
                            <h6><i class="fas fa-shield-alt text-primary me-2"></i>Emergency Service</h6>
                            <p class="mb-0">24/7 Emergency Response<br>
                            Call: +1 (555) 123-4567<br>
                            <span class="text-success">Always Available</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection