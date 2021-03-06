<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>ATUALIZAÇÃO DE PEÇAS</title>
</head>
<body>
<div class="container">
<form method="POST" action="{{"/pecas/editarPeca/{$peca->id}/update"}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">NOME</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="NOME DA PEÇA" name="nome" required value="{{$peca->nome}}">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">QUANTIDADE</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="QUANTIDADE DE PEÇAS" name="quantidade" required value="{{$peca->quantidade}}">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">VALOR</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="VALOR DA PEÇA" name="valor" required value="{{$peca->valor}}">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
<textarea name="descricao" id="descricao" cols="30" rows="10">{{$peca->descricao}}</textarea>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">FORNECEDOR</label>
      <select id="inputState" class="form-control" name="fornecedor_id">
        <option selected>ESCOLHA O FORNECEDOR...</option>
        @foreach ($fornecedores as $fornecedor)
        @if ($peca->fornecedor_id === $fornecedor->id)
        <option selected label="Registrada: {{$fornecedor->nome}}">{{$fornecedor->id}}</option>
        @else
        <option label="{{$fornecedor->nome}}">{{$fornecedor->id}}</option>
        @endif
        @endforeach
      </select>
    </div>
  </div>
    <div class="form-group col-md-2">
      <label for="inputZip">FOTO</label>
      <input type="file" class="form-control" id="inputZip" name="imagem">
    </div>
  <button type="submit" class="btn btn-primary">ATUALIZAR</button>
  <a class="btn btn-primary" href="/pecas">VOLTAR</a>
</form>
</div>
</body>
</html>
