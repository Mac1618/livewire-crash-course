<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livewire</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        {{-- <livewire:bird-counter :counts="3" /> --}}

        {{-- communicate 2 components --}}
        <div class="p-4 ">
            <span>Send Event: <livewire:send-event /></span>
        </div>
        <div class="p-4 ">
            <span>Recieve Event: <livewire:recieve-event /></span>
        </div>
        
    </body>
</html>
