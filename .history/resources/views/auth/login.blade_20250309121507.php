<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    
    <h1>this is login</h1>
    <a href="{{route ('register')}}">register</a>

    <a href="{{ route('login.google') }}" class="btn btn-google">
        <i class="fab fa-google"></i> Login with Google
    </a>
</body>
</html>