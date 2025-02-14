<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4 w-25">

        <div class="card">

            <div class="card-header text-center">
                Employee Validation
            </div>

            <div class="card-body text-center font-bold">

                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('post-validation')}}">
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label">Name</label>
                        <input type="text" class="form-control" id="username" name="username" @error('username') class="form-control is-invalid" @enderror>
                        <div class="invalid-feedback d-block">
                            @error('username') {{ $message }} @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" @error('password') class="form-control is-invalid" @enderror>
                        <div class="invalid-feedback d-block">
                            @error('password') {{ $message }} @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" @error('confirm_password') class="form-control is-invalid" @enderror>
                        <div class="invalid-feedback d-block">
                            @error('confirm_password') {{ $message }} @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>

            <div>
                @foreach ($errors->all() as $error)
                <div class="form-control is-invalid">
                    {{ $error }} <br>
                </div>
                @endforeach
            </div>

        </div>

    </div>

</body>

</html>