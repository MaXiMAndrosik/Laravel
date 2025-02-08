<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4 w-25">

        <div class="card">

            <div class="card-header text-center">
                Input Employee Data
            </div>

            <div class="card-body text-center font-bold">

                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('store_employee')}}">
                    @csrf

                    <div class="mb-3">
                        <label for="first_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name">
                    </div>

                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>

        </div>

    </div>

    <div class="container w-50">
        <h1 class="text-muted">Employees Information</h1>
        <br />
    </div>

    @isset($users)
    <div class="bd-example-snippet bd-code-snippet container w-50">
        <div class="bd-example m-0 border-0">
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th scope="col">First name: </th>
                        <th scope="col">Last name: </th>
                        <th scope="col">Age: </th>
                        <th scope="col">Email: </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <th scope="col">{{ $user['first_name'] }}</th>
                        <th scope="col">{{ $user['last_name'] }}</th>
                        <th scope="col">{{ $user['age'] }}</th>
                        <th scope="col">{{ $user['email'] }}</th>

                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>
    @endisset

</body>

</html>