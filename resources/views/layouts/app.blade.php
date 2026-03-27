<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketing Test</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        nav { margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        .alert { padding: 10px; margin-bottom: 15px; background: #eef; }
        .error { color: #c00; font-size: 14px; }
        form.inline { display: inline; }
        .actions a { margin-right: 10px; }
    </style>
</head>
<body>
    <nav>
        @auth
            <a href="{{ route('tickets.index') }}">Tickets</a> |
            <a href="{{ route('tickets.create') }}">Create Ticket</a> |
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @endauth
    </nav>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    @yield('content')
</body>
</html>
