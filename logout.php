<?php
    session_start();
    unset($_SESSION['sessao-login']);
    unset($_SESSION['sessao-senha']);
    session_destroy();
    header("Location: index.php");
    ?>