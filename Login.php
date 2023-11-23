<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .tela-login{
            background-color: rgba(0, 0, 0, 0.7);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 30px;
            border-top-left-radius: 30px;
            border-bottom-right-radius: 70px;
        }
        h1{
            color: white;
        }
        input{
            padding: 5px;
            border: none;
            border-top-left-radius: 10px;
            border-bottom-right-radius: 10px;
            outline: none;
        }
       .tela-login{
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
        .labelInput{
            position: absolute;
            top: 10px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        #submit{
            white-space: white;
            font-family: Arial, Helvetica, sans-serif;
            border: none;
            padding: 3px;
            width: 70%;
            border-radius: 10px;
            font-size: 15px;
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
        input{
            border-top-left-radius: 30px;
            border-bottom-right-radius: 50px;
            border: 3px solid;
        }
        fieldset{
            border-top-left-radius: 30px;
            border-bottom-right-radius: 50px;
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 5px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 10px;
        }
        .enviar{
            white-space:white ;
            font-family: Arial, Helvetica, sans-serif;
            border: none;
            padding: 3px;
            width: 70%;
            border-radius: 10px;
            font-size: 15px;
        }
        .submit:hover{
            background-color: dodgerblue;
            border: 6px;
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
<div class="tela-login">
    <fieldset> 
        <legend>Eagle</legend>
        <h2>Login</h2>
        <form action="testeLogin.php" method="POST">
        <div class="inputbox">
            <input type="text" name="nome" id="nome" placeholder="nome"><br>
            <br>
            <div class="inputbox">
                <input type="text" name="esporte" id="esporte" placeholder="esporte">
            </div><br>
            <div class="inputbox">
                <input type="password" name="senha" id="senha" placeholder="senha">
            </div><br>
            <input class="enviar" type="submit" name="submit" value="enviar">
        </div>
    </fieldset>
</div>  
</form>
</body>
</html>