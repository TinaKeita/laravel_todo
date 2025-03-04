<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mana dienasgrāmata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div><h1>Visi dienasgrāmatas ieraksti</h1></div>

    <div><ul>
        @foreach ($diaries as $diary)
            <li>{{ $diary->title }} - {{ $diary->date }} - {{ $diary->body }}</li>
        @endforeach
    </ul></div>
    
    </div>
</body>
</html>