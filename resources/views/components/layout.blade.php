<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>

    @vite('resources/css/app.css')
</head>
<body>

    @if(session('success'))
    <div class="p-4 text-center bg-green-50 text-green-500 font-bold">
        {{ session('success') }}
    </div>
    @endif

    <header>
        <nav>
            <h1>Ninja Network</h1>
            <a href="{{ route('ninjas.index') }}">All Ninjas</a>
            <a href="{{ route('ninjas.create') }}">Create Ninja</a>
        </nav>
    </header>

    <main class="container">
        {{-- Content will be injected here --}}
        {{ $slot }}
    </main>

</body>
</html>
