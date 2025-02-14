<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4 w-25">

        <div class="card">

            <div class="card-header text-center">
                Book Form
            </div>

            <div class="card-body text-center font-bold">

                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('store-book')}}">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="@if($book) {{$book->title}} @endif" required>
                        <div class="invalid-feedback d-block">
                            @error('title') {{ $message }} @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" id="author" name="author"  value="@if($book) {{$book->author}} @endif" required>
                        <div class="invalid-feedback d-block">
                            @error('author') {{ $message }} @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="genre" class="form-label">Choose Genre:</label>
                        <select class="form-select" name="genre" aria-label="Default select example">
                            <option value="fantasy">Fantasy</option>
                            <option value="sci fi">Sci Fi</option>
                            <option value="mystery">Mystery</option>
                            <option value="drama">Drama</option>
                        </select>
                        <div class="invalid-feedback d-block">
                            @error('genre') {{ $message }} @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>

        </div>

    </div>

</body>

</html>