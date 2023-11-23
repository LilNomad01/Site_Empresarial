<?php

//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['esporte']))
{
//acessa sistema
include_once('config.php');
$email = $_POST['email'];
$senha = $_POST['senha'];

//print_r('email: ' . $email);
//print_r('senha: ' . $senha);

$sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

$result = $conexao->query($sql);

//print_r($sql);
//print_r($result);

if(mysqli_num_rows($result) < 1)
{
   header('Location: Login.php');
}else
{
    header('Location: gerenciador.html');
}

 
}else
{
    //não acessa
    header('location: Login.php');
}
?>