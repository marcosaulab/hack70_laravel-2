<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Hello, world!</title>
</head>

<body>

    <x-navbar />



        {{ $slot }}



    <x-footer />

    
</body>

</html>