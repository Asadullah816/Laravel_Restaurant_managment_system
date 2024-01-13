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
                <h6 class="mb-4">Add Food Menu</h6>
                <form action="{{ route('foodUpdate', $food->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 form-floating">
                        <input type="text" class="form-control" value="{{ $food->title }}" name="title"
                            id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="number" name="price" value="{{ $food->price }}" class="form-control"
                            id="floatingPassword" placeholder="Price" required>
                        <label for="floatingPassword">Price</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Add Food Image </label>
                        <input type="file" name="image" value="{{ $food->image }}"
                            class="form-control form-control-sm bg-dark" id="formFileSm">

                        <img class="food-image-admin" src="{{ asset('storage/' . $food->image) }}" alt="">
                    </div>
                    <div class="form-floating">
                        <input class="form-control" value="{{ $food->description }}" name="description"
                            placeholder="Discription" id="floatingTextarea" required>
                        <label for="floatingTextarea">Discription</label>
                    </div>
                    <button type="submit" class="m-2 prevent-btn btn btn-outline-success">Add Menu</button>
                </form>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

@include('adminlayout.script')
