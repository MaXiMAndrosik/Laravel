@extends('layouts.default_users')

@section('content')

@isset($user)
<div class="bd-example-snippet bd-code-snippet container w-50">

    <div class="container w-75">
        <h1 class="text-muted">User information</h1>
        <br />
    </div>

    <div class="bd-example m-0 border-0">
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name </th>
                    <th scope="col">Surname </th>
                    <th scope="col">Email </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col">{{ $user['name'] }}</th>
                    <th scope="col">{{ $user['surname'] }}</th>
                    <th scope="col">{{ $user['email'] }}</th>
                </tr>
            </tbody>

        </table>

    </div>

    <div class="container w-50">
        <a href="{{ url('users') }}"><button type="button" class="btn btn-outline-secondary">Back to users</button></a>
    </div>
    
</div>
@endisset

@endsection