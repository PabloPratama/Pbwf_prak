<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">RSHP</span>
    </a>

    <div class="sidebar">

        <!-- User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ session('user_name') }}</a>
            </div>
        </div>

        <!-- Menu Sidebar -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard Admin</p>
                    </a>
                </li>

                <li class="nav-header">MASTER DATA</li>

                <li class="nav-item">
                    <a href="{{ route('admin.jenis-hewan.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-paw"></i>
                        <p>Jenis Hewan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.pemilik.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Pemilik Hewan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.user.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>User</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.role.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>Role</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.pet.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-dog"></i>
                        <p>Pet</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.ras-hewan.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-cat"></i>
                        <p>Ras Hewan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.kategori.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Kategori</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.kategori-klinis.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-vials"></i>
                        <p>Kategori Klinis</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.tindakan-terapi.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-notes-medical"></i>
                        <p>Tindakan Terapi</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.temu-dokter.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>Temu Dokter</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.rekam-medis.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-medical"></i>
                        <p>Rekam Medis</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.detail-rekam-medis.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-medical-alt"></i>
                        <p>Detail Rekam Medis</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>

</aside>
