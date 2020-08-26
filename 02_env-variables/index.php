<?php

    echo $_SERVER['SERVER_NAME'];

    /* Printa todas as variáveis dentro das variáveis */
    print_r($_SERVER); 
    
    /* Alinha o print de forma mais apresentável */
    echo '<pre>';
        print_r($_SERVER);
    echo '</pre>';

?>