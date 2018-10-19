<?php
$titulo = "Cadastrar Boletim de Ocorrência";

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <title>
    <?= $titulo ?>
  </title>
</head>

<body>

  <form method="post" action="cadastrar_bo_salvar.php">
    <div class="form-group">
  <h2>Dados da Vítima</h2><p></p>
      <label for="nomevit">Nome da Vítima</label>
      <input type="text" class="form-control" name="nomevit" placeholder="Digite o nome da vítima">

    </div>

    <div class="form-group">
      <label for="sobrenomevit">Sobrenome da Vítima</label>
      <input type="text" class="form-control" name="sobrenomevit" placeholder="Digite o sobrenome da vítima">

    </div>

    <div class="form-group">
      <label for="idadevit">Idade da Vítma</label>
      <input type="number" class="form-control" name="idadevit" placeholder="Digite a idade da vítima">
    </div>

    <div class="form-group">
      <label for="enderecovit">Endereco da Vítima</label>
      <input type="text" class="form-control" name="enderecovit" placeholder="Digite o endereço da vítima">

    </div>

    <div class="form-group">
      <label for="telefonevit">Telefone da Vítima</label>
      <input type="number" class="form-control" name="telefonevit" placeholder="Digite o telefone da vítima">

    </div>

    <div class="form-group">
      <label for="´profissaovit">Profissão da Vítima</label>
      <input type="text" class="form-control" name="profissaovit" placeholder="Informe a profissão da vítima">

    </div>

    <div class="form-group">
      <p>
      <h2>Dados do Suspeito</h2></p>
      <label for="nomesusp">Nome do Suspeito</label>
      <input type="text" class="form-control" name="nomesusp" placeholder="Digite o nome do suspeito">

    </div>

    <div class="form-group">
      <label for="sobrenomesusp">Sobrenome do Suspeito</label>
      <input type="text" class="form-control" name="sobrenomesusp" placeholder="Digite o sobrenome do suspeito">

    </div>

    <div class="form-group">
      <label for="idadesusp">Idade do Suspeito</label>
      <input type="number" class="form-control" name="idadesusp" placeholder="Digite a idade do suspeito">
    </div>

    <div class="form-group">
      <label for="enderecosusp">Endereco do Suspeito</label>
      <input type="text" class="form-control" name="enderecosusp" placeholder="Digite o endereço do suspeito">

    </div>

    <div class="form-group">
      <label for="telefonesusp">Telefone do Suspeito</label>
      <input type="number" class="form-control" name="telefonesusp" placeholder="Digite o telefone do Suspeito">

    </div>

    <p>
    <h2>Outras Informações</h2></p>

    <div class="form-group">
      <label for="dataacon">Data do Ocorrido</label>
      <input type="date" class="form-control" name="dataacon" >

    </div>

    <div class="form-group">
       <label for="descricao">Descrição</label>
       <textarea rows="10" cols="30" class="form-control" name="descricao"  placeholder="Descreva o ocorrido com a maior quantidade de detalhes possíveis."></textarea>
    </div>

    <div class="form-group">
      <select class="form-control"name="motivo">
        <option>Qual o motivo da denuncia?</option>
        <option>Furto</option>
        <option>Estupro</option>
        <option>Roubo</option>
        <option>Homicídeo</option>


      </select>
    </div>





    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="consulta.php" class="btn btn-danger">Cancelar</a>


  </form>


  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>

</a>