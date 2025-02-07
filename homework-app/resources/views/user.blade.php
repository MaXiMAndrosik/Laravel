<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User infirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container w-25">
        <h1 class="text-muted">User Information</h1>
        <br />
        <h2><small class="text-center">Привет, {{ $user['first_name'] }}!</small></h2>
        <br />
    </div>

    <div class="bd-example-snippet bd-code-snippet container w-50">
        <div class="bd-example m-0 border-0">
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th scope="col">First name: </th>
                        <th scope="col">Last name: </th>
                        <th scope="col">Email: </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">{{ $user['first_name'] }}</th>
                        <th scope="col">{{ $user['last_name'] }}</th>
                        <th scope="col">{{ $user['email'] }}</th>

                    </tr>
                </tbody>

            </table>

        </div>
    </div>

</body>

</html>