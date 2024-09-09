        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <img src="{{ asset('assets/img/kamerapojoklogos.png') }}" alt="" style="width: 200px;">
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Transaksi</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Laporan Transaksi</a>
                            <a href="typography.html" class="dropdown-item">Member</a>
                            <a href="element.html" class="dropdown-item">Inventory</a>
                        </div>
                    </div> --}}
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-shopping-cart me-2"></i>Transaksi</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-chart-line me-2"></i>Laporan Transaksi</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Member</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-archive me-2"></i>Inventory</a>
                </div>
                <div class="navbar-nav w-100 mt-5">
                    <a href="logout.html" class="nav-item nav-link text-danger">
                        <i class="fa fa-sign-out-alt me-2"></i>Logout
                    </a>
                </div>
            </nav>
        </div>
