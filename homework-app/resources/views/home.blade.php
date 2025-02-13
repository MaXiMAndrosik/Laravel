@extends('layouts.default')

@section('content')

@isset($users)
<div class="bd-example-snippet bd-code-snippet container w-50">
    <div class="bd-example m-0 border-0">
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name: </th>
                    <th scope="col">Age: </th>
                    <th scope="col">Position: </th>
                    <th scope="col">Address: </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="col">{{ $user['name'] }}</th>
                    @if ( $user['age'] > 18 )
                        <th scope="col">{{ $user['age'] }}</th>
                    @else
                        <th scope="col">Слишком молод</th>
                    @endif
                    <th scope="col">{{ $user['position'] }}</th>
                    <th scope="col">{{ $user['address'] }}</th>

                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</div>
@endisset

@endsection