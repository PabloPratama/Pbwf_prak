<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">RSHP Dokter</span>
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
                    <a href="{{ route('dokter.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>Dashboard Dokter</p>
                    </a>
                </li>

                <li class="nav-header">MASTER DATA</li>

                <li class="nav-item">
                    <a href="{{ route('dokter.jenis-hewan.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-paw"></i>
                        <p>Jenis Hewan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dokter.ras-hewan.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-cat"></i>
                        <p>Ras Hewan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dokter.kategori.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Kategori</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dokter.kategori-klinis.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-vials"></i>
                        <p>Kategori Klinis</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dokter.tindakan.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-notes-medical"></i>
                        <p>Tindakan & Terapi</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dokter.pet.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-dog"></i>
                        <p>Data Pasien</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dokter.rekam-medis.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-medical"></i>
                        <p>Rekam Medis</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dokter.detail-rekam-medis.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-medical-alt"></i>
                        <p>Detail Rekam Medis</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dokter.dokter.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-medical-alt"></i>
                        <p>Data Dokter</p>
                    </a>
                </li>

            </ul>
        </nav>

    </div>

</aside>
