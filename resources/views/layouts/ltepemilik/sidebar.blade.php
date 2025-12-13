<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}"
            class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">RSHP Pemilik</span>
    </a>

    <div class="sidebar">

        <!-- User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}"
                    class="img-circle elevation-2">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ session('user_name') }}</a>
            </div>
        </div>

        <!-- Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">

                <li class="nav-item">
                    <a href="{{ route('pemilik.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard Pemilik</p>
                    </a>
                </li>

                <li class="nav-header">LAYANAN SAYA</li>

                <li class="nav-item">
                    <a href="{{ route('pemilik.pet.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-dog"></i>
                        <p>Data Pet</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pemilik.rekam-medis.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-medical"></i>
                        <p>Rekam Medis</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pemilik.temu-dokter.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>Temu Dokter</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pemilik.pemilik.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Data Pemilik</p>
                    </a>
                </li>

            </ul>
        </nav>

    </div>
</aside>
