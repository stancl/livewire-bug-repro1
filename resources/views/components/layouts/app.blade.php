<html>
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body>
        <x-header />
        <main class="p-8">
            {{ $slot }}
        </main>
    </body>
</html>
