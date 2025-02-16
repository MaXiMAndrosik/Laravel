@extends('layouts.default_users')

@section('content')

<div class="container mt-4 w-25">

    <div class="card">

        <div class="card-header text-center">
            Input User Data
        </div>

        <div class="card-body text-center font-bold">

            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('store-user')}}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="@if($user) {{$user['name']}} @endif" required>
                    <div class="invalid-feedback d-block">
                        @error('name') {{ $message }} @enderror
                    </div>
                </div>


                <div class="mb-3">
                    <label for="surname" class="form-label">Surname</label>
                    <input type="text" class="form-control" id="surname" name="surname" value="@if($user) {{$user['surname']}} @endif" required>
                    <div class="invalid-feedback d-block">
                        @error('surname') {{ $message }} @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="@if($user) {{$user['email']}} @endif" required>
                    <div class="invalid-feedback d-block">
                        @error('email') {{ $message }} @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>

    </div>

</div>

@endsection