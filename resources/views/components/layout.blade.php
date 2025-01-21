<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $title ?? 'Laravel Auth' }}</title>
</head>
<body class="h-full">
    {{ $slot }}

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
