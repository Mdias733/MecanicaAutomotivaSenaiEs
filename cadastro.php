<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body class="bodyDo-Cadastro">
<form action="CRUD/cad_user.php" method="post">
    <div>
        <link rel="stylesheet" href="../styles.css">
            <div class="box">
                <form action="">
                    <fieldset>
                        <legend><b>Registro</b></legend>
                        <br>
                        <div class="inputBox">
                            <input type="text" name="name_user" id="" class="inputUser" required>
                            <label for="nome" class="labelInput">Nome completo</label>
                        </div>
                        <br><br>
                        <div class="inputBox">
                            <input type="text" name="email_user" id="" class="inputUser" required class="from-control">
                            <label for="email" class="labelInput">Email</label>
                        </div>
                        <br><br>
                        <div class="inputBox">
                            <input type="tel" name="tel_user" id="" class="inputUser" required  class="from-control">
                            <label for="telefone" class="labelInput">Telefone</label>
                        </div>
                        <p>Sexo:</p>
                        <input type="radio" id="" name="genero_user" value="feminino" required class="from-control">
                        <label for="feminino">Feminino</label>
                        <br>
                        <input type="radio" id="" name="genero_user" value="masculino" required class="from-control">
                        <label for="masculino">Masculino</label>
                        <br><br>
                        <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                        <input type="date" name="dtNasc__user" id="" required>
                        <br><br><br>
                        <div class="inputBox">
                            <input type="text" name="cidade_user" id="" class="inputUser" required class="from-control">
                            <label for="cidade" class="labelInput">Cidade</label>
                        </div>
                        <br><br>
                        <div class="inputBox">
                            <input type="text" name="estado_user" id="" class="inputUser" required class="from-control">
                            <label for="estado" class="labelInput">Estado</label>
                        </div>
                        <br><br>
                        <div class="inputBox">
                            <input type="text" name="endereco_user" id="" class="inputUser" required class="from-control">
                            <label for="endereco" class="labelInput">Endereço</label>
                        </div>
                        <br><br>


                        <br>
                        <div class="col-md-6">
                            <a href="index.php"><input type="button"  value= "Voltar"> </a>  
                            <div class='buttonFinalizar'>
                                <input type="submit" class="btn btn-success" value= "Finalizar cadastro">
                            </div>       
                        </div> 
                        
                    </fieldset>

                </form>
                
            </div>
    </div>

</body>
</html>