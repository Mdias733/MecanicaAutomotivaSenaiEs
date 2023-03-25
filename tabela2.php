<?php
  require("conn.php");

  $tabela = $pdo->prepare("SELECT id_cad, nome_cad FROM tb_cadastros;");
  $tabelaEntrada = $pdo->prepare("SELECT dataEHoraEntrada FROM tb_entradas;");
  $tabelaSaida = $pdo->prepare("SELECT dataEHorasaida FROM tb_saidas;");

  $tabela->execute();
  $tabelaEntrada->execute();
  $tabelaSaida->execute();

  $rowTabela = $tabela->fetchAll();
  $rowtabelaEntrada = $tabelaEntrada->fetchAll();
  $rowtabelaSaida = $tabelaSaida->fetchAll();

  if (empty($rowTabela)){
    echo "<script>
        alert('Tabela Está Vazia!')
        </script>";
  };
?>

<!DOCTYPE HTML>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Cadastro Produtos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <h1 style="text-align:center;">Registro de Entrada e Saída</h1>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Data e Hora Entrada</th>
      <th scope="col">Data e Hora Saída</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($rowTabela as $linha){
      echo '<tr>';
      echo "<th scope='row'>".$linha['id_cad']."</th>";
      echo "<td>".$linha['nome_cad']."</td>";
      foreach($rowtabelaEntrada as $linha){
        echo "<td>".$linha['dataEHoraEntrada']."</td>";
        
      }
      foreach($rowtabelaSaida as $linha){
        echo "<td>".$linha['dataEHorasaida']."</td>";
      }
      echo '</tr>';
    }
    ?>
  </tbody>
  
</table>
<div>
  <link rel="stylesheet" href="styles.css">
    <div class = 'botaoCadastrarTabela'>
        <a href="cadastro.php" type="button" class="btn btn-primary float-end">Cadastrar Usuários</a>
    </div>
    <div class = 'botaoVoltarTabela'>
        <a href="index.php" type="button" class="btn btn-danger float-end">Voltar</a>
    </div>
</div>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Data e Hora Entrada</th>
      <th scope="col">Data e Hora Saída</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>