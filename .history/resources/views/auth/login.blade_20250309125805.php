<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center">Login</h1>
        
        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            <input type="email" name="email" placeholder="Email" required 
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <input type="password" name="password" placeholder="Password" required 
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit" class="w-full p-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                Login
            </button>
        </form>
        
        <div class="text-center">
            <a href="{{ route('login.google') }}" class="flex items-center justify-center w-full p-3 border rounded-lg hover:bg-gray-100">
                <img src="{{ asset('storage/assets/google.png') }}" alt="Google Logo" class="w-5 h-5 mr-2">
                <span>Login with Google</span>
            </a>
        </div>
        
        <div class="text-center">
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register</a>
        </div>
    </div>
</body>
</html>