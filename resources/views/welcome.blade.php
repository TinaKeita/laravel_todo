<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<x-navigation></x-navigation>
    @auth
        <h1>Sveiks, {{ Auth::user()->first_name}}</h1>
        <form method="POST" action="/logout">
            @csrf
            @method("DELETE")
            <button>Logout</button>
        </form> 

    @endauth

    @guest
        <h1>Sveiks, viesi!</h1>

    @endguest

</body>
</html>