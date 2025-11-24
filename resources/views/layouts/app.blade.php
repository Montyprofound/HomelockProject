<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Homelock Services')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="min-height: 70px;" id="mainNav">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                <i class="fas fa-shield-alt me-2"></i>Homelock Systems
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('security') }}">Security</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cleaning') }}">Cleaning</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('fire-extinguishers') }}">Fire Extinguishers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="btn btn-outline-light btn-sm" href="{{ route('contact') }}">Get Quote</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main style="padding-top: 70px;">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5><i class="fas fa-shield-alt me-2"></i>Homelock Systems</h5>
                    <p class="mb-3">Professional security and services for your peace of mind.</p>
                    <div class="trust-badges">
                        <span class="trust-badge"><i class="fas fa-certificate me-1"></i>Licensed</span>
                        <span class="trust-badge"><i class="fas fa-shield-check me-1"></i>Insured</span>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <h6>Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('security') }}" class="text-light text-decoration-none">Security Services</a></li>
                        <li><a href="{{ route('cleaning') }}" class="text-light text-decoration-none">Cleaning Services</a></li>
                        <li><a href="{{ route('fire-extinguishers') }}" class="text-light text-decoration-none">Fire Extinguishers</a></li>
                        <li><a href="{{ route('contact') }}" class="text-light text-decoration-none">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h6>Contact Info</h6>
                    <p class="mb-1"><i class="fas fa-phone me-2"></i>+1 (555) 123-4567</p>
                    <p class="mb-1"><i class="fas fa-envelope me-2"></i>info@homelockservices.com</p>
                    <p class="mb-3"><i class="fas fa-map-marker-alt me-2"></i>123 Business St, City, State</p>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">&copy; {{ date('Y') }} Homelock Services. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/forms.js') }}"></script>
    <script>
        // Sticky navigation
        window.addEventListener('scroll', function() {
            const nav = document.getElementById('mainNav');
            if (window.scrollY > 100) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
        
        // Form loading states
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function() {
                const submitBtn = form.querySelector('button[type="submit"]');
                if (submitBtn) {
                    submitBtn.classList.add('btn-loading');
                    submitBtn.disabled = true;
                }
            });
        });
    </script>
</body>
</html>