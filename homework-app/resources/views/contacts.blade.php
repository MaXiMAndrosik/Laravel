@extends('layouts.default')

@section('content')

@isset($contacts)
<div class="bd-example-snippet bd-code-snippet container w-50">
    <div class="bd-example m-0 border-0">
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th scope="col">Address: </th>
                    <th scope="col">Post code: </th>
                    <th scope="col">Email: </th>
                    <th scope="col">Phone: </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                <tr>
                    <th scope="col">{{ $contact['address'] }}</th>
                    <th scope="col">{{ $contact['post_code'] }}</th>
                    @if ( $contact['email'] != '')
                        <th scope="col">{{ $contact['email'] }}</th>
                    @else
                        <th>Адрес электронной почты не указан</th>
                    @endif
                    <th scope="col">{{ $contact['phone'] }}</th>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</div>
@endisset

@endsection