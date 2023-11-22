<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-gray-100">

<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h1 class="text-2xl font-bold mb-6">Login</h1>
        <form action="{{ url('/login') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" name="email" id="email" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                <input type="password" name="password" id="password" class="w-full p-2 border rounded">
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Login</button>
        </form>
    </div>
</div>

</body>
</html>

