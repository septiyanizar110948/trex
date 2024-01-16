@extends('admin.admin_master')

@section('index')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item active">List User</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">List User</h5>

            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Title</td>
                        <td>Slug</td>
                        <td>Location</td>
                        <td>About</td>
                        <td>featured_event</td>
                        <td>language</td>
                        <td>foods</td>
                        <td>departure_date</td>
                        <td>duration</td>
                        <td>type</td>
                        <td>price</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($travel as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->title }}</td>
                            <td>{{ $row->slug }}</td>
                            <td>{{ $row->location }}</td>
                            <td>{{ $row->about }}</td>
                            <td>{{ $row->featured_event }}</td>
                            <td>{{ $row->language }}</td>
                            <td>{{ $row->foods }}</td>
                            <td>{{ $row->departure_date }}</td>
                            <td>{{ $row->duration }}</td>
                            <td>{{ $row->type }}</td>
                            <td>{{ $row->price }}</td>
                            <td>
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Action</h6>
                                        </li>
                                        <form action="{{ route('user.destroy', $row->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <li><button class="dropdown-item" type="submit">Hapus</button></li>
                                            <li><a class="dropdown-item" href="{{ route('user.edit', $row->id) }}">Edit</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('user.show', $row->id) }}">Detail</a></li>
                                        </form>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
