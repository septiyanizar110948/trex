@extends('admin.admin_master')

@section('title')
    Add Travel Pack
@endsection

@section('index')
    <div class="pagetitle">
        <h1>Add Travel Pack</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Travel Packages</li>
                <li class="breadcrumb-item active">Add Travel Pack</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add User</h5>

            @include('error.error')

            <!-- Floating Labels Form -->
            <form class="row g-3" method="POST" action="{{ route('travel.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <div class="form-floating">
                        <input value="{{ old('title') }}" name="title" type="text" class="form-control" id="title"
                            placeholder="Title">
                        <label for="title">Title</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input value="{{ old('slug') }}" name="slug" type="text" class="form-control" id="slug"
                            placeholder="Slug">
                        <label for="slug">Slug</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input value="{{ old('location') }}" name="location" type="text" class="form-control"
                            id="location" placeholder="Your Email">
                        <label for="location">Location</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input value="{{ old('featured_event') }}" name="featured_event" type="text" class="form-control"
                            id="featured_event" placeholder="Featured Event">
                        <label for="featured_event">Featured Event</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="about" placeholder="About" id="floatingTextarea" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">About</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input value="{{ old('language') }}" name="language" type="text" class="form-control"
                            id="language" placeholder="Language">
                        <label for="language">Language</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input value="{{ old('foods') }}" name="foods" type="text" class="form-control" id="foods"
                            placeholder="Foods">
                        <label for="foods">Foods</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                        <input value="{{ old('departure_date') }}" name="departure_date" type="date" class="form-control"
                            id="departure_date" placeholder="Departure Date">
                        <label for="departure_date">Departure Date</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                        <input value="{{ old('duration') }}" name="duration" type="text" class="form-control"
                            id="duration" placeholder="Duration">
                        <label for="duration">Duration</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating"></div>
                    <label for="exampleDataList" class="form-label">Datalist example</label>
                    <input name="type" class="form-control" list="datalistOptions" id="exampleDataList"
                        placeholder="Type...">
                    <datalist id="datalistOptions">
                        <option value="Economy">
                        <option value="Business">
                        <option value="Executive">
                        <option value="VIP">
                        <option value="VVIP">
                    </datalist>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                        <input value="{{ old('price') }}" name="price" type="number" class="form-control"
                            id="price" placeholder="Price">
                        <label for="price">Price</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" name="image" id="formFile">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- End floating Labels Form -->
        </div>
    </div>
@endsection
