<?php 

if(isset($_POST['submit']))
{
   // print_r('Nome: ' .$_POST['nome']);
   // print_r('<br>');
   // print_r('Email: ' .$_POST['email']);
   // print_r('<br>');
   // print_r('Telefone: ' .$_POST['telefone']);
   // print_r('<br>');
  //print_r('<br>');
   // print_r('Endereço: ' .$_POST['endereco']);

   include_once('concha.php');

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $endereco = $_POST['endereco'];

   $result = mysqli_query($conexao, "INSERT INTO bora(nome,email,telefone,endereco) VALUES( '$nome','$email','$telefone','$endereco')");
   

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right,rgb(20, 247,220),rgb(17, 54, 71));
        }
        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0.2, 0.5, 0.5, 0.2);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        
        }
        fieldset {
            border: 3px solid dodgerblue;
        }
        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox {
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelinput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~.labelinput,.inputUser:valid ~.labelinput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #submit {
            background-image: linear-gradient(to right,rgb(20, 247,220),rgb(17, 54, 71));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

    </style>
</head>
<body>
<a href="home.php">Voltar</a>
    <div class="box">
        <form action="carona.php" method="POST">
            <fieldset>
                <legend>Formulário Caronista</legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelinput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelinput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelinput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelinput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset> 
        </form>
    </div>
   
</body>
</html>