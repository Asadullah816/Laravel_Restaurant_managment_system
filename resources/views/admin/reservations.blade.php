@include('adminlayout.master')
<div class="p-0 container-fluid position-relative d-flex">
    @include('adminlayout.preloader')
    @include('adminlayout.sidebar')
    <div class="content">
        @include('adminlayout.header')
        <div class="container mt-5">
            <div class="p-4 rounded bg-secondary h-100">
                <h6 class="mb-4">Reservations</h6>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Total Guests</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($resData as $data)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>

                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->guest }}</td>
                                <td>{{ $data->date }}</td>
                                <td>{{ $data->time }}</td>
                                <td>
                                    {{-- <a href="{{ route('foodupdate', $data->id) }}"
                                        class="m-2 btn btn-square btn-outline-success"><i
                                            class="bi bi-pencil-square"></i></a> --}}
                                    <a href="{{ route('resrDelete', $data->id) }}"
                                        class="m-2 btn btn-square btn-outline-primary"  onclick="return confirm('Are you Sure')"><i class="fa fa-trash"></i></a>
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
