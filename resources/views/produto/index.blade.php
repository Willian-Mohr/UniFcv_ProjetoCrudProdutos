<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>CRUD Products</title>
</head>

<body>
  <div class="container">
    <p></p>
    @if(session('mensagem'))
    <div class="alert alert-success" role="alert">
      <p class=" text-center">{{ session('mensagem') }}</p>
    </div>
    @elseif(session('error'))
    <div class="alert alert-danger" role="alert">
      <p class=" text-center">{{ session('error') }}</p>
    </div>
    @endif
    <p></p>
    @if ($errors->any())
    <div>
      <ul>
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
          <p class=" text-center">{{ $error }}</p>
        </div>
        @endforeach
      </ul>
    </div>
    @endif
    <p></p>
    <!-- Botão para acionar modal de inserir novo produto-->
    <a type="button" class="btn btn-success" data-toggle="modal" data-target="#modalExemplo">Novo</a>
    <p></p>
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
        @foreach ($produtos as $produto)
        <tbody>
          <tr class="table-active">
            <td>{{ $produto->id }}</td>
            <td>{{ $produto->descricao }}</td>
            <td>{{ $produto->valor }}</td>
            <td>{{ $produto->quantidade }}</td>
            <td>{{ $produto->slug }}</td>
            <td class="table-active-dark col-sm-3 col-md-3 col-lg-3">
              <a href="/produto/{{ $produto->id }}" type="button" class="btn btn-outline-primary btn-sm">Visualizar</a>
              <a href="/produto/editar/{{ $produto->id }}" class="btn btn-outline-secondary btn-sm" tabindex="-1" role="button" aria-disabled="true">Editar</a>
              <a href="/produto/apagar/{{ $produto->id }}" class="btn btn-outline-danger btn-sm" tabindex="-1" role="button" aria-disabled="true">Excluir</a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="/produto/alimentar" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">Click aqui para gerar massa de dados</a>
    </div>
    <!-- Modal inserir novo produto-->
    <div class="modal fade " id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Inserir novo produto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/produto/salvar" method="post" class="row g-3 needs-validation" novalidate>
              @csrf
              <div class="col-md-12 position-relative">
                <label for="validationTooltip01" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Glock 9mm" required>
              </div>
              <div class="col-md-4 position-relative">
                <label for="validationTooltipUsername" class="form-label">Valor</label>
                <div class="input-group has-validation">
                  <span class="input-group-text">R$</span>
                  <input type="money_format" class="form-control" id="valor" name="valor" placeholder="399.90" aria-describedby="validationTooltipUsernamePrepend">
                </div>
              </div>
              <div class="col-md-4 position-relative">
                <label for="validationTooltipUsername" class="form-label">Quantiade</label>
                <div class="input-group has-validation">
                  <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="10" aria-describedby="validationTooltipUsernamePrepend">
                </div>
              </div>
              <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Tipo/Slug</label>
                <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Arma de fogo">
              </div>
              <div class="modal-footer col-12 mt-4">
                <a href="/produto" class="btn btn-secondary" data-dismiss="modal">Voltar</a>
                <input class="btn btn-success" type="submit" value="Gravar">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>