<?php 
    // $array1 = array("cor" => "vermelho", 2, 4);
    // $array2 = array("a", "b", "cor" => "verde", "forma" => "trapezoide", 4);
    // $result = array_merge($array1, $array2);
    // print_r($result);

    $array1 = array("chave1" => "valor1", "chave2" => "valor2");
    $array2 = array("chave1" => "valor3", "chave4" => "valor4");

        // retorna valores com a mesma chave em 2 ou mais arrays
    print_r(array_intersect_key($array1, $array2));

    $arr = ['Gustavo', 'Joao', 'Fabricio'];

    // Map serve para aplicar uma função em todos os valores do array
    print_r(array_map('strip_tags', $arr))
?>