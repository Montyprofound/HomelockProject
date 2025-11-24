@extends('layouts.app')

@section('title', 'Fire Extinguishers - Homelock Services')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">
            <i class="fas fa-fire-extinguisher text-danger me-3"></i>Fire Extinguisher Products
        </h1>
        <p class="lead">High-quality fire safety equipment to protect your property from fire hazards</p>
    </div>
    
    <div class="row g-4 mb-5">
        @foreach($products as $product)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm product-card">
                <div class="card-body text-center">
                    <div class="product-icon mb-3">
                        <i class="fas fa-fire-extinguisher fa-4x text-danger"></i>
                    </div>
                    <h5 class="card-title">{{ $product['name'] }}</h5>
                    <p class="card-text text-muted">{{ $product['description'] }}</p>
                    @if(isset($product['features']))
                        <ul class="list-unstyled small mb-3">
                            @foreach($product['features'] as $feature)
                                <li><i class="fas fa-check text-success me-1"></i>{{ $feature }}</li>
                            @endforeach
                        </ul>
                    @endif
                    @if(isset($product['price']))
                        <div class="mb-3">
                            <span class="h5 text-danger">{{ $product['price'] }}</span>
                        </div>
                    @endif
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-product="{{ $product['name'] }}">
                        <i class="fas fa-envelope me-1"></i>Inquire Now
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <!-- Why Choose Our Fire Extinguishers -->
    <div class="bg-light p-5 rounded mb-5">
        <div class="text-center mb-4">
            <h3>Why Choose Our Fire Safety Equipment?</h3>
        </div>
        <div class="row">
            <div class="col-md-3 text-center mb-3">
                <i class="fas fa-certificate fa-2x text-danger mb-2"></i>
                <h6>Certified Products</h6>
                <p class="small text-muted">All products meet safety standards</p>
            </div>
            <div class="col-md-3 text-center mb-3">
                <i class="fas fa-shipping-fast fa-2x text-danger mb-2"></i>
                <h6>Fast Delivery</h6>
                <p class="small text-muted">Quick installation and delivery</p>
            </div>
            <div class="col-md-3 text-center mb-3">
                <i class="fas fa-tools fa-2x text-danger mb-2"></i>
                <h6>Professional Installation</h6>
                <p class="small text-muted">Expert installation service</p>
            </div>
            <div class="col-md-3 text-center mb-3">
                <i class="fas fa-headset fa-2x text-danger mb-2"></i>
                <h6>24/7 Support</h6>
                <p class="small text-muted">Round-the-clock customer support</p>
            </div>
        </div>
    </div>
</div>

<!-- Inquiry Modal -->
<div class="modal fade" id="inquiryModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Product Inquiry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                
                <form action="{{ route('submit-request') }}" method="POST">
                    @csrf
                    <input type="hidden" name="service_type" value="fire_extinguisher">
                    <input type="hidden" name="product_interest" id="productInterest">
                    
                    <div class="mb-3">
                        <label class="form-label">Product of Interest</label>
                        <input type="text" id="productDisplay" class="form-control" readonly>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Name *</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email *</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Phone *</label>
                            <input type="tel" name="phone" class="form-control" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Company Name</label>
                            <input type="text" name="company_name" class="form-control">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Quantity Needed</label>
                        <select class="form-control" name="quantity">
                            <option value="">Select quantity</option>
                            <option value="1-5">1-5 units</option>
                            <option value="6-10">6-10 units</option>
                            <option value="11-20">11-20 units</option>
                            <option value="20+">20+ units</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Installation Required?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="installation" value="yes" id="installYes">
                            <label class="form-check-label" for="installYes">Yes, include installation</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="installation" value="no" id="installNo">
                            <label class="form-check-label" for="installNo">No, delivery only</label>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Message *</label>
                        <textarea name="message" class="form-control" rows="3" placeholder="Tell us about your requirements, building type, specific needs..." required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-danger w-100">
                        <i class="fas fa-paper-plane me-2"></i>Submit Inquiry
                    </button>
                    
                    <div class="text-center mt-3">
                        <small class="text-muted">
                            <i class="fas fa-clock me-1"></i>Response within 2 hours
                        </small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('inquiryModal');
    modal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const product = button.getAttribute('data-product');
        
        document.getElementById('productInterest').value = product;
        document.getElementById('productDisplay').value = product;
    });
});
</script>
@endsection