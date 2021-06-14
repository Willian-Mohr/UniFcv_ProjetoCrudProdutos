<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>{{ $produto->descricao }}</title>
</head>

<body>
    <div class="container">
        <p></p>
        <h1>{{ $produto->descricao }}</h1>
        <div class="table-responsive">
            <table class="table table-dark table-sm">
                <thead>
                    <tr>
                        <th scope="col-2">Id</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Quantiade</th>
                        <th scope="col">Tipo/Slug</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-active">
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>{{ $produto->valor }}</td>
                        <td>{{ $produto->quantidade }}</td>
                        <td>{{ $produto->slug }}</td>
                        <td class="table-active-dark col-sm-2 col-md-2 col-lg-2">
                            <a href="/produto/editar/{{ $produto->id }}" class="btn btn-outline-secondary btn-sm" tabindex="-1" role="button" aria-disabled="true">Editar</a>
                            <a href="/produto/apagar/{{ $produto->id }}" class="btn btn-outline-danger btn-sm" tabindex="-1" role="button" aria-disabled="true">Excluir</a>
                        </td>
                    </tr>

                </tbody>
            </table>
            <a href="/produto" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>