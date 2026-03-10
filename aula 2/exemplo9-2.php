<?php
     $a = 10;
     $b = 5;
     
     $soma = $a +$b;

     echo "A soma: $soma";

     echo "<hr>";

    if ($b > $a) {
        echo "B e maior que A"; 
    }
    else {
        echo"B nao e maior que A";
    }
    echo "<hr>";

    $n1 = 4;
    $n2 = 5;
    $n3 = 6;
    $media = ($n1 + $n2 + $n3) / 3;
    
    echo "SUA MÉDIA É: $media : ";

    if ($media > 5 ) {
        echo"aprovado";
    }else {
       if ($media < 4 ) {
        echo"reprovado";
     } else {
        echo"recuperação";
    }

    }

    echo "<hr>";

    $dia = 2;

    switch ($dia) {
        case 1:
            echo"domingo";
        break;
        case 2:
            echo"segunda feira";
        break;
        case 3:
            echo"terça feira";
            break;
        case 4:   
            echo"quarta feira";
            break;
        case 5:
            echo"quinta feira";
            break;
        case 6:
            echo"sexta feira";
            break;
        case 7:
            echo"sabado";
            break;
        
        default:
            echo "numero invalido";
            break;
    }

    echo"<hr>";

    for ($i=1; $i <= 10; $i++) { 
        echo"$i - ";
    }

    echo"<hr>";

    $a= 1;
    while ($a <= 10) {
        echo"$a - ";
        $a++;
    }

    echo"<hr>";

    $x = 1;
    do {
        echo"$x - ";
        $x++;
    } while ($x <= 10);

    echo"<hr>";

    $nomes = ['FULANO','BELTRANO','CICLANO','ANDERSON'];
    $qtde = count($nomes);
    foreach ($nomes as $nome) {
        echo "Nome e: $nome<br> ";
    }

    echo"<hr>";


    


     ?>

    