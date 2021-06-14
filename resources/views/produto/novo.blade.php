<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <title>Inserir novo produto</title>
</head>

<body>
  <div class="container">
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
    <h1>Inserir novo produto</h1>
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
      <div class="col-1">
        <input class="btn btn-success" type="submit" value="Gravar">
      </div>
      <div class="col-1">
        <a href="/produto" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Voltar</a>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
</body>

</html>