@include('adminlayout.master')
<div class="p-0 container-fluid position-relative d-flex">
    @include('adminlayout.preloader')
    <div class="content">
        @include('adminlayout.header')

        <div class="px-4 pt-4 container-fluid">
            <div class="mx-0 rounded row vh-100 bg-secondary align-items-center justify-content-center">
                <div class="p-4 text-center col-md-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1 fw-bold">403</h1>
                    <h1 class="mb-4">Only Admin can Access</h1>
                    <p class="mb-4">We’re sorry, the page you have looked for admin only in our website!
                        Maybe go to our home page or try to use a search?</p>
                    <a class="px-5 py-3 btn btn-primary rounded-pill" href="{{ route('home') }}">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

@include('adminlayout.script')
