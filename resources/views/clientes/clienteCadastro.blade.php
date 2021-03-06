<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>CADASTRO DE CLIENTES</title>
</head>
<body>
<div class="container">
<form method="POST" action="/clientes/cadastroClientes/store">
<input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">NOME COMPLETO</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="NOME DO CLIENTE" name="nome" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">RG</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="RG DO CLIENTE" name="rg" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">CPF</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="CPF DO CLIENTE" name="cpf" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">DATA DE NASCIMENTO</label>
      <input type="date" class="form-control" id="validationCustom01" name="data_nascimento" required>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">USUARIO</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="SEU NOME DE USUARIO" name="usuario" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">SENHA</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="pass" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">ENDEREÇO</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="endereco" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">TELEFONE</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="TELEFONE 1" name="telefone_1" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">TELEFONE 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="TELEFONE 2" name="telefone_2" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">CIDADE</label>
      <select id="inputState" class="form-control" name="cidade_id">
        <option selected>ESCOLHA A CIDADE...</option>
        @foreach ($cidades as $cidade)
        <option label="{{$cidade->nome}}">{{$cidade->id}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">ESTADO</label>
      <select id="inputState" class="form-control">
        <option selected>ESCOLHA UM ESTADO...</option>
        @foreach ($estados as $estado)
            <option label="{{$estado->nome}}">{{$estado->id}}</option>
        @endforeach
      </select>
    </div>
  </div>
    <div class="form-group col-md-2">
      <label for="inputZip">FOTO</label>
      <input type="file" class="form-control" id="inputZip" name="imagem">
    </div>
  <button type="submit" class="btn btn-primary">CADASTRAR</button>
  <a class="btn btn-primary" href="/clientes">VOLTAR</a>
</form>
</div>
</body>
</html>
