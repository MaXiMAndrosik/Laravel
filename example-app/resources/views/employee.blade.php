<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4 w-25">

        <div class="card">

            <div class="card-header text-center">
                Employee Registration
            </div>

            <div class="card-body text-center font-bold">

                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('store-employee')}}">
                    @csrf

                    <div class="mb-3">
                        <label for="first_name" class="form-label">First name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="@if($employee) {{$employee->first_name}} @endif">
                    </div>

                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="@if($employee) {{$employee->last_name}} @endif">
                    </div>
                    <?php
                    // <select class="form-select" aria-label="Default select example" name="department">
                    //     <option selected>Choice department</option>
                    //     <option value="finance">Finance</option>
                    //     <option value="it">IT</option>
                    //     <option value="internal service">Internal service</option>
                    // </select>
                    ?>
                    <div class="form-check">
                        <label class="form-check-label">Department</label><br>
                        <input type="checkbox" value="finance" name="department[]" @if($employee && in_array('finance', unserialize($employee->department))) checked @endif>Finance</input>
                        <input type="checkbox" value="it" name="department[]" @if($employee && in_array('it', unserialize($employee->department))) checked @endif>IT</input>
                        <input type="checkbox" value="internal service" name="department[]" @if($employee && in_array('internal service', unserialize($employee->department))) checked @endif>Internal service</input>
                    </div>

                    <button type="submit" class="btn btn-primary">Store</button>

                </form>

            </div>

        </div>

    </div>

</body>

</html>