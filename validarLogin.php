<?php
$login = $_POST['user'];
$senha = $_POST['pwd'];

if (($login == 'adm') && ($senha == '1234')) {
    session_start();
    $_SESSION['sessao-login'] = $login;
    $_SESSION['sessao-senha'] = $senha;
    header("Location: ./area-restrita/index-restrita.php");
} else {

    echo('
     
        
    <body>
    <form action="validarLogin.php" method="post">
        <label>
            Usuário
        </label>
        <input type="text" name="user" id="user">
        <br>
        <br>
        <label>
            Senha
        </label>
        <input type="password" name="pwd" id="pwd">
        <br>
        
        <button type="submit">Login</button>
    </form>
    <h2>USUÁRIO OU SENHA INCORRETOS</h2>
</body>

    
    ');
}
?>
