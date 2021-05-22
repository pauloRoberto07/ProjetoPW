<?php

session_start();
if (($_SESSION['sessao-login'] != 'adm') ||
    ($_SESSION['sessao-senha'] != '1234')
) {
    header("Location: ../index.php");
}
?>
