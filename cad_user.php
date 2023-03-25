<?php
echo"<pre>";
print_r($_POST);
echo"</pre>";

require('./conn.php');

$name_user = $_POST['name_user'];
$email_user = $_POST['email_user'];
$tel_user = $_POST['tel_user'];
$genero_user = $_POST['genero_user'];
$dtNasc__user = $_POST['dtNasc__user'];
$cidade_user = $_POST['cidade_user'];
$genero_user = $_POST['genero_user'];
$estado_user = $_POST['estado_user'];
$endereco_user = $_POST['endereco_user'];



if(empty($name_user)|| empty($email_user)|| empty($tel_user)|| empty($genero_user) || empty($dtNasc__user) || empty($cidade_user) || empty($estado_user) || empty($endereco_user)){

    echo "Os valores não podem ser vázios";

}else{
    $cad_user = $pdo->prepare("INSERT INTO tb_cadastros(nome_cad , email_cad , tel_cad , genero_cad, dtNasc__cad , cidade_cad , estado_cad , endereco_cad) 
    VALUES (:name_user , :email_user , :tel_user , :genero_user , :dtNasc__user , :cidade_user , :estado_user , :endereco_user)");
    $cad_user->execute(array(
        ':name_user'=> $name_user,
        ':email_user' => $email_user,
        ':tel_user'=>$tel_user,
        ':genero_user'=>$genero_user,
        ':dtNasc__user'=>$dtNasc__user,
        ':cidade_user'=>$cidade_user,
        ':estado_user'=>$estado_user,
        ':endereco_user'=>$endereco_user      
    ));

echo "Usuário Cadastrado";

}
?>
<!DOCTYPE HTML>
<br><br><br>
<html>
    <head>
        
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Cadastro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
       
        <body class="bodyDo-Cad-User">
            
            <div>
                <link rel="stylesheet" href="../styles.css">
                    <div class = 'botaoCadastrarTabela'>
                        <a href="../index.php" type="button" class="btn btn-primary float-end">Início</a>
                    </div>
                    <div class = 'botaoVoltarTabela'>
                        <a href="../cadastro.php" type="button" class="btn btn-danger float-end">Voltar</a>
                    </div>
            </div>

            
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        </body>
    </head>
</html>