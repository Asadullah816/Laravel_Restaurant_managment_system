<!-- Navbar Start -->
<nav class="px-4 py-0 navbar navbar-expand bg-secondary navbar-dark sticky-top">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="mb-0 text-primary"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="flex-shrink-0 sidebar-toggler">
        <i class="fa fa-bars"></i>
    </a>
    <form class="d-none d-md-flex ms-4">
        <input class="border-0 form-control bg-dark" type="search" placeholder="Search">
    </form>
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-envelope me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Message</span>
            </a>
            <div class="m-0 border-0 dropdown-menu dropdown-menu-end bg-secondary rounded-0 rounded-bottom">
                <a href="#" class="dropdown-item">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/user.jpg" alt=""
                            style="width: 40px; height: 40px;">
                        <div class="ms-2">
                            <h6 class="mb-0 fw-normal">Jhon send you a message</h6>
                            <small>15 minutes ago</small>
                        </div>
                    </div>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/user.jpg" alt=""
                            style="width: 40px; height: 40px;">
                        <div class="ms-2">
                            <h6 class="mb-0 fw-normal">Jhon send you a message</h6>
                            <small>15 minutes ago</small>
                        </div>
                    </div>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/user.jpg" alt=""
                            style="width: 40px; height: 40px;">
                        <div class="ms-2">
                            <h6 class="mb-0 fw-normal">Jhon send you a message</h6>
                            <small>15 minutes ago</small>
                        </div>
                    </div>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="text-center dropdown-item">See all message</a>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a href="#" class="res-relative nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-bell me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Notificatin</span>
            </a>

            <div class="m-0 border-0  dropdown-menu dropdown-menu-end bg-secondary rounded-0 rounded-bottom">
                <form action="{{ route('unread') }}" method="POST">
                    @csrf
                    @forelse ($unreadData as $data)
                        @if ($data->unread == 0)
                            <div class="dropdown-item">
                                <input type="hidden" name="{{ $data->id }}" value="{{ $data->id }}"
                                    id="">
                                <h6 class="mb-0 fw-normal">{{ $loop->index + 1 }} <button type="submit"
                                        class="border-0 bg-secondary fw-normal text-light">New Reservation</button></h6>
                                <small>{{ $data->created_at->diffForHumans() }}</small>
                            </div>
                            <hr class="dropdown-divider">
                        @endif
                    @empty
                    @endforelse
                </form>

                {{-- <a href="#" class="text-center dropdown-item">See all notifications</a> --}}
            </div>
            @if ($countdata)
                <span class="res-count">{{ $countdata }}</span>
            @endif
        </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                    style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex">John Doe</span>
            </a>
            <div class="m-0 border-0 dropdown-menu dropdown-menu-end bg-secondary rounded-0 rounded-bottom">
                <a href="#" class="dropdown-item">My Profile</a>
                <a href="#" class="dropdown-item">Settings</a>
                <a href="#" class="dropdown-item">Log Out</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->
