<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de cursos</title>
</head>
<body>
    @foreach($classes as $classe)
    <label for="">Nome:</label>
    {{ $classe->name }}
    {{ $classe->subject }}
    {{ $classe->uri }}
    @endforeach
</body>
</html>