<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
    <link rel="stylesheet" href="./resources/css/bootstrap.css">
</head>
<body>

    <div class="bd-example-snippet bd-code-snippet">
        <div class="bd-example m-0 border-0">
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Фамилия</th>
                        <th scope="col">email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user) 
                    <tr>
                        <th scope="row">{{ $user->first_name }}</th>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

</body>

</html>