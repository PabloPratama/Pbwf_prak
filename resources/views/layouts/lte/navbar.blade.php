<nav class="main-header navbar navbar-expand navbar-dark">

    <!-- Left navbar -->
    <ul class="navbar-nav">

        <!-- Pushmenu button -->
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#">
                <i class="fas fa-bars"></i>
            </a>
        </li>

        <!-- Tombol Home menuju halaman utama -->
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
        </li>

        <!-- Contact (opsional bisa kamu ganti nanti) -->
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>

    </ul>

    <!-- Search -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Fullscreen -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        <!-- Control Sidebar -->
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#">
                <i class="fas fa-th-large"></i>
            </a>
        </li>

    </ul>
</nav>
