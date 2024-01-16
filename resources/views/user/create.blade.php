@extends('admin.admin_master')
@section('index')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item active">Add User</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add User</h5>

                            @include('error.error')

                            <!-- Floating Labels Form -->
                            <form class="row g-3" method="POST" action="{{ route('user.store') }}">
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="name"
                                            placeholder="Your Name">
                                        <label for="name">Name</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input value="{{ old('username') }}" name="username" type="text" class="form-control" id="username"
                                            placeholder="Your Name">
                                        <label for="username">Username</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="floatingEmail"
                                            placeholder="Your Email">
                                        <label for="floatingEmail">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="password" type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <select name="role" class="form-select" id="floatingSelect" aria-label="State">
                                            <option selected disabled>Select a Role</option>
                                            <option value="admin">Admin</option>
                                            <option value="staff">Staff</option>
                                            <option value="client">Client</option>
                                        </select>
                                        <label for="floatingSelect">Role</label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- End floating Labels Form -->
                        </div>
                    </div>





@endsection
