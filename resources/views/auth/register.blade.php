<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reģistrējies</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<x-navigation></x-navigation>
    <h1>Reģistrēties</h1>
    <form  method="POST">
    @csrf
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <label>First name:</label>
        <input name="first_name" value="{{ old('first_name') }}" required/><br><br>

        <label>Last name:</label>
        <input name="last_name" value="{{ old('last_name') }}" required/><br><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required/><br><br>

        <label>Password:</label>
        <input type="password" name="password" required/><br><br>

        <label>Password confirmation:</label>
        <input type="password" name="password_confirmation" required/><br><br>

        <button>Register</button>
    </form>
</body>
</html>