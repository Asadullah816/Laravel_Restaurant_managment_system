@include('adminlayout.master')
<div class="p-0 container-fluid position-relative d-flex">
    @include('adminlayout.preloader')
    @include('adminlayout.sidebar')
    <div class="content">
        @include('adminlayout.header')
        <div class="container mt-5">
            <div class="p-4 rounded bg-secondary h-100">
                <h6 class="mb-4">Food Menu</h6>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($food as $data)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td><img class="food-image-admin" src="{{ asset('storage/' . $data->image) }}"
                                        alt=""></td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->price }}</td>
                                <td>{{ $data->description }}</td>
                                <td>
                                    <a href="{{ route('foodupdate', $data->id) }}"
                                        class="m-2 btn btn-square btn-outline-success"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <a href="{{ route('fooddelete', $data->id) }}"
                                        class="m-2 btn btn-square btn-outline-primary"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

@include('adminlayout.script')
