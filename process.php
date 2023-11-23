<?php 
require_once './class/PHPMailer.php';

if(isset($_POST)){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $emp_invest = addslashes($_POST['emp_invest']);
    $mensagem = addslashes($_POST['mensagem']);
    $aceito = addslashes($_POST['aceito']);

    print $nome . '<br>';
    print $email . '<br>';
    print $telefone . '<br>';
    print $emp_invest . '<br>';
    print $mensagem . '<br>';
    print $aceito . '<br>';
    PHPMailer::sendEmail($nome,$email,$telefone,$emp_invest,$mensagem,$aceito);
}


// $('#nome').val('');
// $('#email').val('');
// $('#telefone').val('');
// $('#emp_invest').val('');
// $('#mensagem').val('');
// $('#aceito').val('');