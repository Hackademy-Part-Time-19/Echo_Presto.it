<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
      
</head>

<body style="background-color: #1C6F29">
    <x-navbar />
    <div style="min-height: 70vh;">
        {{ $slot }}
    </div>
    <x-footer />
</body>

</html>
