<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('/register') }}">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit">Register</button>
    </form>
</body>
</html>