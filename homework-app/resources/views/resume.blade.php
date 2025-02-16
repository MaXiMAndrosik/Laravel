<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

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
                        <th scope="col">{{ $name }}</th>
                        <th scope="col">{{ $surname }}</th>
                        <th scope="col">{{ $email }}</th>
                    </tr>
                </tbody>

            </table>

        </div>

    </div>

</body>

</html>