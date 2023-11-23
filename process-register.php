<?php 
require_once './class/PHPMailer.php';

if(isset($_POST))
{
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $senha = addslashes($_POST['senha']);
    PHPMailer::sendRegister($nome,$email,$telefone,$senha);
}