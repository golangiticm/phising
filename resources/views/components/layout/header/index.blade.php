<header>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <!-- Logo kiri -->
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('web/images/logo.png') }}" alt="DANA Logo">
                <span class="fw-bold text-primary">DANA</span>
            </a>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Nav menu -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('home')}}" id="personalDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Personal
                        </a>
                        <ul class="dropdown-menu custom-dropdown" aria-labelledby="personalDropdown">
                            <li>
                                <h6 class="dropdown-header text-primary fw-bold">Discover DANA ↗</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{route('home')}}">Digital Wallet</a></li>
                            <li><a class="dropdown-item" href="{{route('dorprize')}}">Financial Services</a></li>
                            <li><a class="dropdown-item" href="{{route('dorprize')}}">Lifestyle</a></li>
                        </ul>
                    </li>

                    <!-- Business -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('home')}}" id="businessDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Business
                        </a>
                        <ul class="dropdown-menu custom-dropdown" aria-labelledby="businessDropdown">
                            <li>
                                <h6 class="dropdown-header text-primary fw-bold">For Business ↗</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{route('home')}}">Payment Solutions</a></li>
                            <li><a class="dropdown-item" href="{{route('dorprize')}}">Merchant Services</a></li>
                            <li><a class="dropdown-item" href="{{route('dorprize')}}">Partnership Programs</a></li>
                        </ul>
                    </li>
                    <!-- Corporate -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('home')}}" id="corporateDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Corporate
                        </a>
                        <ul class="dropdown-menu custom-dropdown" aria-labelledby="corporateDropdown">
                            <li>
                                <h6 class="dropdown-header text-primary fw-bold">Corporate Info ↗</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{route('home')}}">Investor Relations</a></li>
                            <li><a class="dropdown-item" href="{{route('dorprize')}}">Company Profile</a></li>
                            <li><a class="dropdown-item" href="{{route('dorprize')}}">Careers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('dorprize')}}">Dorprize</a></li>
                </ul>



                <!-- kanan -->
                <div class="d-flex align-items-center">
                    <button class="btn btn-lang">EN 🌐</button>
                    <!-- Tombol di Navbar -->
                    <a href="#" class="btn btn-download" data-bs-toggle="modal" data-bs-target="#downloadModal">
                        Download DANA
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">

                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold" id="downloadModalLabel">Download now!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body text-center p-4">
                    <p class="text-muted mb-4">
                        Let’s transact with DANA <b>#BukanDompetBiasa</b>
                    </p>

                    <img src="{{ asset('web/images/qr.png') }}" alt="QR DANA" class="img-fluid mb-3"
                        style="max-width:180px;">

                    <div class="d-flex justify-content-center gap-3">
                        <a href="#"><img src="https://developer.android.com/images/brand/en_generic_rgb_wo_45.png"
                                height="45" alt="Google Play"></a>
                        <a href="#"><img
                                src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg"
                                height="45" alt="App Store"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
