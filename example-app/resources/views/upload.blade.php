<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4 w-25">

        <div class="card">

            <div class="card-header text-center">
                File Upload
            </div>

            <div class="card-body text-center font-bold">

                <form name="add-new-book" id="add-new-book" method="post" enctype="multipart/form-data" action="{{ route('upload-file')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="file-name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="file-name" name="file-name">
                        <input type="file" name="uploaded_file">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>

        </div>

    </div>

</body>

</html>