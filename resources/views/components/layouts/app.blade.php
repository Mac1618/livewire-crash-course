<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <nav class="w-full flex justify-between items-center">
            <a href="/">Home</a>
            <a href="/bird-counter">Bird Counter</a>
            <a href="/counter">Counter</a>
            <a href="/lazy">Lazy</a>
        </nav>

        {{ $slot }}
    </body>
</html>
