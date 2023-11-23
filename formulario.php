<?php
if(isset($_POST['submit']))
{
    //print_r($_POST['nome']); 
   // print_r('<br>');
    //print_r($_POST['email']);
    //print_r('<br>');
   //print_r($_POST['matricula']);
    //print_r('<br>');
    //print_r($_POST['senha']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $matricula = $_POST['matricula'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,matricula,senha)VALUES ('$nome','$email','$matricula','$senha')");

    if ($result) {
        header("Location: home.php"); // Replace 'home.php' with the actual URL of your home page.
        exit();
    }
}
 
?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-top-left-radius: 30px;
            border-bottom-right-radius: 70px;
            color: white;
        }
        fieldset{
            border-top-left-radius: 30px;
            border-bottom-right-radius: 50px;
            border: 3px solid dodgerblue;
            padding: 15px;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 5px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 10px;
        }
        .inputbox{
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
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput
        ,.inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #submit{
            white-space:white ;
            font-family: Arial, Helvetica, sans-serif;
            border: none;
            padding: 3px;
            width: 70%;
            border-radius: 10px;
            font-size: 15px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 15px;
            padding: 5px;
            border-top-right-radius: 5px;
            border-bottom-left-radius: 5px;
            background-color: dodgerblue;
      }
      a:hover{
        background-color: red;
        border: 6px solid red;
      }
    </style>
</head>
<body>
<a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulario do Atleta</b></legend>
                <br><div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div> <br>
                <br><div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput" >Email</label>    
                </div><br>
                <br><div class="inputbox">
                    <input type="text" name="esporte" id="esporte" class="inputUser" required>
                    <label for="esporte" class="labelInput">esporte</label>
                </div><br>
                <br><div class="inputbox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>

</body>
</html>