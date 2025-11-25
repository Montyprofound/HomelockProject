@extends('layouts.app')

@section('title', 'Home - Homelock Services')

@section('content')
<!-- Hero Section -->
<section class="hero-section text-white py-5" style="background: linear-gradient(135deg, #0f4c75 0%, #3282b8 50%, #bbe1fa 100%); position: relative; overflow: hidden;">

    <div class="container py-5 position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Professional Security & Services</h1>
                <p class="lead mb-4 text-light">Your trusted partner for security guards, cleaning services, and fire safety equipment. Protecting what matters most to you.</p>
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <a href="#services" class="btn btn-light btn-lg px-4">Our Services</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg px-4">Get Quote</a>
                </div>
                <div class="trust-indicators">
                    <small class="d-block mb-2 text-light">Trusted by 500+ clients</small>
                    <div>
                        <span class="trust-badge" style="background: rgba(255,255,255,0.2); color: white; border: 1px solid rgba(255,255,255,0.3);"><i class="fas fa-clock me-1"></i>24/7 Service</span>
                        <span class="trust-badge" style="background: rgba(255,255,255,0.2); color: white; border: 1px solid rgba(255,255,255,0.3);"><i class="fas fa-certificate me-1"></i>Licensed & Insured</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 300px; height: 300px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                        <img src="{{ asset('images/logo.png') }}" alt="Homelock Services" class="img-fluid" style="max-height: 200px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5" style="background: linear-gradient(45deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-3">
                <div class="stats-item">
                    <span class="stats-number" style="color: #0f4c75;">500+</span>
                    <small class="text-muted fw-medium">Properties Protected</small>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <div class="stats-item">
                    <span class="stats-number" style="color: #0f4c75;">24/7</span>
                    <small class="text-muted fw-medium">Response Time</small>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <div class="stats-item">
                    <span class="stats-number" style="color: #0f4c75;">10+</span>
                    <small class="text-muted fw-medium">Years Experience</small>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <div class="stats-item">
                    <span class="stats-number" style="color: #0f4c75;">100%</span>
                    <small class="text-muted fw-medium">Client Satisfaction</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Our Services</h2>
            <p class="lead">Comprehensive solutions for your security and maintenance needs</p>
        </div>
        
        <div class="row g-4">
            <!-- Security Guards -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-user-shield fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Security Services</h5>
                        <p class="card-text">Manned guards, dog guards, patrol services, and alarm backup protection.</p>
                        <a href="{{ route('security') }}" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            
            <!-- Cleaning Services -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-broom fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Cleaning & Property Services</h5>
                        <p class="card-text">Cleaning, fumigation, landscaping, and property management solutions.</p>
                        <a href="{{ route('cleaning') }}" class="btn btn-success">Learn More</a>
                    </div>
                </div>
            </div>
            
            <!-- Fire Extinguishers -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-fire-extinguisher fa-3x text-danger mb-3"></i>
                        <h5 class="card-title">Fire Extinguishers</h5>
                        <p class="card-text">High-quality fire safety equipment to protect your property from fire hazards.</p>
                        <a href="{{ route('fire-extinguishers') }}" class="btn btn-danger">View Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold">What Our Clients Say</h3>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="mb-3">"Excellent security service. Professional guards and reliable response times."</p>
                        <small class="text-muted">- Sarah Johnson, Property Manager</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="mb-3">"Their cleaning team is thorough and trustworthy. Highly recommend!"</p>
                        <small class="text-muted">- Mike Chen, Business Owner</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="mb-3">"Quick delivery and installation of fire safety equipment. Great service!"</p>
                        <small class="text-muted">- Lisa Rodriguez, Facility Manager</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="py-5" style="background: linear-gradient(135deg, #0f4c75 0%, #3282b8 100%); position: relative;">

    <div class="container text-center position-relative text-white">
        <h3 class="mb-3 fw-bold">Ready to Get Started?</h3>
        <p class="lead mb-4 text-light">Contact us today for a free consultation and quote</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-4">Get Free Quote</a>
            <a href="tel:+15551234567" class="btn btn-outline-light btn-lg px-4"><i class="fas fa-phone me-2"></i>Call Now</a>
        </div>
    </div>
</section>
@endsection