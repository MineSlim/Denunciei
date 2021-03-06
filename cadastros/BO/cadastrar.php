<?php
//CONFIGURAÇÃO PADRÃO
include '../../padroes/default.php';

//SESSÃO
session_start();
if (isset($_SESSION["logado"]) && $_SESSION["logado"]) {
  $logado = true;
}
else{
  header('location:../../nao_logado.php');
}

//CONFIGURAÇÕES EDITÁVEIS
$pagina = 'Registrar Boletim de Ocorrência'; //Nome da página
$metodo = 'post'; //Método de envio de formulário
$acao = 'cadastrar_salvar.php'; //O que deve ser feito ao apertar o botão de envio
$salvar = 'Registrar B.O.'; //Texto do botão de envio
$cancelar_acao = '../../admin/index.php'; // O que deve ser feito ao apertar o botão de cancelamento
//FIM DAS CONFIGURAÇÕES EDITÁVEIS

// CONFIGURAÇÃO PADRÃO
$title = $sistema.' - '.$pagina;
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">

     <title><?= $title ?></title>
   </head>
   <body>
     <div class="topo">
       <h1 id="nomesite"><?= $sistema ?></h1>
       <p id="frase"><i><?= $frase ?></i></p>
     </div>

     <div class="titulopage">
       <h2 class=""><?= $pagina ?></h2>
     </div>

     <form method="<?= $metodo ?>" action="<?= $acao ?>">
       <div class="centro container">

         <!-- INÍCIO DA PARTE EDITÁVEL -->

         <h2 style="margin-top: 2px">Dados da Vítima</h2>

         <div class="form-group">
           <label for="nomevit">Nome</label>
           <input type="text" class="form-control" name="nomevit" placeholder="Digite o nome." required>
         </div>

         <div class="form-group">
           <label for="sobrenomevit">Sobrenome</label>
           <input type="text" class="form-control" name="sobrenomevit" placeholder="Digite o sobrenome." required>
         </div>

         <div class="form-group">
           <label for="datanvit">Data de Nascimento</label>
           <input type="date" class="form-control" name="datanvit" required >
         </div>

         <div class="form-group">
           <label for="enderecovit">Endereco</label>
           <input type="text" class="form-control" name="enderecovit" placeholder="Digite o endereço." required>
         </div>

         <div class="form-group">
           <label for="telefonevit">Telefone</label>
           <input type="number" class="form-control" name="telefonevit" placeholder="Digite o telefone." required>
         </div>

         <div class="form-group">
           <label for="´profissaovit">Profissão</label>
           <input type="text" class="form-control" name="profissaovit" placeholder="Informe a profissão." required>
         </div>

         <h2>Dados do Suspeito</h2>

         <div class="form-group">
           <label for="nomesusp">Nome</label>
           <input type="text" class="form-control" name="nomesusp" placeholder="Digite o nome.">
         </div>

         <div class="form-group">
           <label for="sobrenomesusp">Sobrenome</label>
           <input type="text" class="form-control" name="sobrenomesusp" placeholder="Digite o sobrenome.">
         </div>

         <div class="form-group">
           <label for="datansusp">Data do Nascimento</label>
           <input type="date" class="form-control" name="datansusp" >
         </div>

         <div class="form-group">
           <label for="enderecosusp">Endereco do suspeito</label>
           <input type="text" class="form-control" name="enderecosusp" placeholder="Digite o endereço.">
         </div>

         <div class="form-group">
           <label for="telefonesusp">Telefone do suspeito</label>
           <input type="number" class="form-control" name="telefonesusp" placeholder="Digite o telefone.">
         </div>

         <h2>Descrição</h2>

         <div class="form-group">
           <label for="dataacon">Data da Ocorrência</label>
           <input type="date" class="form-control" name="dataacon" required>
         </div>

         <div class="form-group">
           <label for="motivo">Motivo da denúncia</label>
           <select class="form-control" name="motivo" required>
             <option>Selecione o motivo da denúncia</option>
             <option>Furto</option>
             <option>Estupro</option>
             <option>Roubo</option>
             <option>Homicídio</option>
             <option>Outros</option>
           </select>
         </div>

         <div class="form-group">
           <label for="descricao">Descrição do caso </label>
           <textarea rows="10" cols="30" class="form-control" name="descricao" placeholder="Informe a descrição do caso." required></textarea>
         </div>


        <!-- FIM DA PARTE EDITÁVEL -->

      </div>
      <div class="buttonbar">
        <button type="submit" class="btn btn-primary"><?= $salvar ?></button>
        <a href="<?= $cancelar_acao ?>" class="btn btn-danger">Cancelar</a>
      </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!--<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script> -->
   </body>
 </html>
