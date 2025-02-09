<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    @php
        $greenUser = 2;
    @endphp

    <div class="bd-example-snippet bd-code-snippet">
        <div class="bd-example m-0 border-0">
            <table class="table table-sm table-bordered">
                @foreach ($usersList as $key => $user)
                <thead>
                    <tr>
                        @if ($key == $greenUser)
                        <th scope="col">Username: </th>
                        <th scope="col">{{ $key }}</th>
                        <th scope="col" style="background-color:green">{{ $user }}</th>
                        @elseif ($key == 3)
                        <th scope="col">Username: </th>
                        <th scope="col">{{ $key }}</th>
                        <th scope="col" style="background-color:blue">{{ $user }}</th>
                        @else
                        <th scope="col">Username: </th>
                        <th scope="col">{{ $key }}</th>
                        <th scope="col" style="background-color:aqua">{{ $user }}</th>
                        @endif
                    </tr>
                </thead>
                @endforeach
            </table>

        </div>
    </div>

</body>

</html>