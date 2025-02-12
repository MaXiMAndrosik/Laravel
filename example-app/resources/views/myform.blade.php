<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4 w-25">

        <div class="card">

            <div class="card-header text-center">
                My Form
            </div>

            <div class="card-body text-center font-bold">

                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('post_form')}}">
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label">Name</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="mb-3">
                        <label for="number" class="form-label">Number</label>
                        <input type="number" class="form-control" id="number" name="number" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="hidden" class="form-label">Hidden</label>
                        <input type="hidden" class="form-control" id="hidden" name="hidden" value="hidden">
                    </div>

                    <div class="mb-3">
                        <label for="male" class="form-label">Male</label>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="female" class="form-label">Female</label>
                        <input type="radio" id="female" name="gender" value="female">
                    </div>

                    <div class="mb-3">
                        <label for="boys" class="form-label">Boys</label>
                        <input type="checkbox" id="boys" name="checkbox[]" value="boys">
                        <label for="girls" class="form-label">Girls</label>
                        <input type="checkbox" id="girls" name="checkbox[]" value="girls">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>

        </div>

    </div>

</body>

</html>