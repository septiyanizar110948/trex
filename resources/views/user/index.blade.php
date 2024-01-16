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
                        <td>Name</td>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Role</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Action</h6>
                                        </li>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <li><button class="dropdown-item" type="submit">Hapus</button></li>
                                            <li><a class="dropdown-item" href="{{ route('user.edit', $user->id) }}">Edit</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('user.show', $user->id) }}">Detail</a></li>
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
