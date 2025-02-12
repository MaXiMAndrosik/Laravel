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

                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('store_employee-data')}}">
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
                        <label for="position_held" class="form-label">Position held</label>
                        <input type="text" class="form-control" id="position_held" name="position_held" required="true">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required="true">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="email" class="form-control" id="description" name="description" required="true">
                    </div>

                    <div class="mb-3">
                        <label for="work_data" class="form-label">WorkData</label>
                        <input type="workdata" class="form-control" id="description" name="work_data" required="true">
                    </div>

                    <div class="mb-3">
                        <label for="json_data" class="form-label">JsonData</label>
                        <input type="text" class="form-control" id="json_data" name="json_data" required="true">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>

        </div>

    </div>

</body>

</html>