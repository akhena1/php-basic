<?php 

    sleep(3);
    
    echo '1 ';

    $nome = 'gustavo';

    if($nome == 'joao') {
        echo 'deu tudo certo';
    }else {
        die('O script parou de ser executado');
    }

    echo 'Nao vai chegar aqui';

?>