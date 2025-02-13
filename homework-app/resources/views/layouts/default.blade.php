<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @include('includes.head')
</head>

<body>

    <div class="container">

        <header class="row">
            @include('includes.header')
        </header>

        <div id="main" class="row">
            @yield('content')
        </div>

        <footer class="row">
            @include('includes.footer')
        </footer>
        
    </div>

</body>

</html>