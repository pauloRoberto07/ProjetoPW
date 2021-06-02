<?php
$login = $_POST['user'];
$senha = $_POST['pwd'];

if (($login == 'adm') && ($senha == '1234')) {
    session_start();
    $_SESSION['sessao-login'] = $login;
    $_SESSION['sessao-senha'] = $senha;
    header("Location: ./area-restrita/index-restrita.php");
} 
else {
    setcookie('erro', 1, time()+1);
    header("Location: login.php");  
}
