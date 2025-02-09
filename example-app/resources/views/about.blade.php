<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>

<body>
    <x-header text="About">
        <x-slot name="shape">
            <div style="background-color:red; width:50px; height:50px; display:block"></div>
        </x-slot>
        <x-slot name="line">
            <p>TEST</p>
        </x-slot>
    </x-header>
</body>

</html>