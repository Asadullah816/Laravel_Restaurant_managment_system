        <!-- Sidebar Start -->
        <div class="pb-3 sidebar pe-4">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="mx-4 mb-3 navbar-brand">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="mb-4 d-flex align-items-center ms-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bottom-0 p-1 border border-white bg-success rounded-circle position-absolute end-0">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('dashboard') }}"
                        class="{{ Request::is('dashboard') ? 'active' : '' }} nav-item nav-link "><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{ route('users') }}"
                        class="{{ Request::is('dashboard/users') ? 'active' : '' }} nav-item nav-link"><i
                            class="fa fa-th me-2"></i>Users</a>
                    <div class="nav-item dropdown">
                        <a href=""
                            class="{{ Request::is('dashboard/food*') ? 'active' : '' }} nav-link dropdown-toggle "
                            data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Foods</a>
                        <div class="bg-transparent border-0 dropdown-menu">
                            <a href="{{ route('foodtable') }}" class="dropdown-item">Menu</a>
                            <a href="{{ route('foodadd') }}" class="dropdown-item">Add Foods</a>
                        </div>
                    </div>
                    <a href="{{ route('reservations') }}"
                        class="{{ Request::is('dashboard/reservations') ? 'active' : '' }} nav-item nav-link"><i
                            class="fa fa-th me-2"></i>Reservations</a>
                    <div class="nav-item dropdown">
                        <a href=""
                            class="{{ Request::is('dashboard/chef*') ? 'active' : '' }} nav-link dropdown-toggle "
                            data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Chefs</a>
                        <div class="bg-transparent border-0 dropdown-menu">
                            <a href="{{ route('cheftable') }}" class="dropdown-item">Chefs Table</a>
                            <a href="{{ route('chefadd') }}" class="dropdown-item">Add new Chef</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="far fa-file-alt me-2"></i>User pages</a>
                        <div class="bg-transparent border-0 dropdown-menu">
                            <a href="{{ route('home') }}" class="dropdown-item">Home</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
