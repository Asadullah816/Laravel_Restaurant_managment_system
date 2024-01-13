@include('adminlayout.master')
<div class="p-0 container-fluid position-relative d-flex">
    @include('adminlayout.preloader')
    @include('adminlayout.sidebar')
    <div class="content">
        @include('adminlayout.header')
        <div class="container">

            <div class="p-4 rounded bg-secondary h-100">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <ul>
                            <li>{{ $error }}</li>
                        </ul>
                    @endforeach
                @endif
                <h6 class="mb-4">Add New Chef</h6>
                <form action="{{ route('chefAdd') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 form-floating">
                        <input type="text" class="form-control" name="name" id="floatingInput"
                            placeholder="name@example.com" required>
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="text" name="speciality" class="form-control" id="floatingPassword"
                            placeholder="Price" required>
                        <label for="floatingPassword">Speciality</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Chef Image </label>
                        <input type="file" name="image" class="form-control form-control-sm bg-dark"
                            id="formFileSm" required>
                    </div>
                    <button type="submit" class="m-2 prevent-btn btn btn-outline-success">Add Chef</button>
                </form>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

@include('adminlayout.script')
