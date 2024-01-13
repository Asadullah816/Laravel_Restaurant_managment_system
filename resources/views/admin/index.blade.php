@include('adminlayout.master')
<div class="p-0 container-fluid position-relative d-flex">
    @include('adminlayout.preloader')
    @include('adminlayout.sidebar')
    <div class="content">
        @include('adminlayout.header')
        <div class="px-4 pt-4 container-fluid">
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3">

                    <div class="p-4 rounded bg-secondary d-flex align-items-center justify-content-between">
                        <i class="fa fa-chart-line fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Total Chef</p>
                            <h6 class="mb-0">{{$chef}}</h6>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="p-4 rounded bg-secondary d-flex align-items-center justify-content-between">
                        <i class="fa fa-chart-bar fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Total Customers</p>
                            <h6 class="mb-0">{{$users}}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="p-4 rounded bg-secondary d-flex align-items-center justify-content-between">
                        <i class="fa fa-chart-area fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Today Reservations</p>
                            <h6 class="mb-0">{{$res}}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="p-4 rounded bg-secondary d-flex align-items-center justify-content-between">
                        <i class="fa fa-chart-pie fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Total Food Menu</p>
                            <h6 class="mb-0">{{$food}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@include('adminlayout.script')
