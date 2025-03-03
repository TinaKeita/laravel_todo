<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veicamie uzdevumi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div><h1>Visi veicamie uzdevumi</h1></div>

    <div><ul>
        @foreach ($todos as $todo)
            <li>{{ $todo->content }}</li>
        @endforeach
    </ul></div>
    
    </div>
</body>
</html>