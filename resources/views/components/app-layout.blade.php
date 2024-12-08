<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="">
    <main>
        <x-nav.nav-layout></x-nav.nav-layout>
        <div class="mx-auto ">
            {{ $slot }}
        </div>
    </main>
</body>

</html>
