<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="nav navbar bg-dark">
        <a href="{{route('list.course')}}">Home</a>
        <a href="admin/create">Novo cadastro</a>
        <a href="#">About</a>
    </div>
    <div class="container">
        <h1>Todos os conteúdos</h1>
        <table class="table table-hover text-center">
            <thead>
                <tr class="table-dark">
                    <th>Disciplina</th>
                    <th>Matéria</th>
                    <th>Url</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>        
                @foreach($classes as $classe)
                <tr>
                    <td>{{ $classe->name }}</td>
                    <td>{{ $classe->subject }}</td>
                    <td>{{ $classe->uri }}</td>
                    <td><a href="{{route('course.edit', ['course' => $classe->id])}}" class="btn btn-primary">Editar</a></td>
                    <td><form action="{{route('course.delete', ['course' =>$classe->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="">
                            <input type="submit" value="Remover" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <header>
    </header>
</body>
</html>