<?php 
    session_start();
    // Atribui valores pra uma sessão
    // $_SESSION['nome'] = 'Gustavo';

    setcookie('nome', 'gustavo', time()+(60*60*24), '/');

    echo $_COOKIE['nome'];
?>