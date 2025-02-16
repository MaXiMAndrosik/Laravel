@extends('layouts.default_users')

@section('content')

@isset($users)
<div class="bd-example-snippet bd-code-snippet container w-75">

    <div class="container w-50">
        <h1 class="text-muted">All Users information</h1>
        <br />
    </div>

    <div class="bd-example m-0 border-0">
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name </th>
                    <th scope="col">Surname </th>
                    <th scope="col">Email </th>
                    <th scope="col">Get More information </th>
                    <th scope="col">Get User Data </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="col">{{ $user['name'] }}</th>
                    <th scope="col">{{ $user['surname'] }}</th>
                    <th scope="col">{{ $user['email'] }}</th>
                    <th scope="col"><a href="/user/{{ $user['id'] }}" class="btn btn-outline-secondary">More information</a></th>
                    <th scope="col"><a href="/resume/{{ $user['id'] }}" class="btn btn-outline-secondary">User Data</a></th>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</div>
@endisset

@endsection