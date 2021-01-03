<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar aula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="nav navbar bg-dark">
        <a href="{{route('list.course')}}">Home</a>
        <a href="admin/create">Novo cadastro</a>
        <a href="#">About</a>
    </div>

    <main class="container">
        <form action="{{route('course.save')}}" method="post">
            @csrf
            <label for="name">Disciplina</label>
            <input type="text" name="name" id="name">
            <label for="subject">Matéria</label>
            <input type="text" name="subject">
            <label for="uri">Url</label>
            <input type="text" name="uri" id="uri">
            <button type="submit">Cadastrar</button>
        </form>
    </main>

    <header>    
    </header>
</body>
</html>