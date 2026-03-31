<?php
    $json_str = '{ "Nome" : "Jason Jones", "Idade" : 38, "Sexo" : "M" }';

    $obj = json_decode($json_str);

    echo '<pre>';
    var_dump($obj);
    echo '</pre>';

    echo '<hr>';

    echo "nome: $obj->Nome<br>";
    echo "idade: $obj->Idade<br>";
    echo "sexo: $obj->Sexo<br>";
?>