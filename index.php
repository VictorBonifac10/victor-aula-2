<?php

    echo "Meu Nome é Jonny"; //escreve na tela
    echo "<h1>Função Nativa echo <h1>";
    echo "<br>";
    echo "Bem vindo";

    echo "<h4></h4>";
    $nota1 = 3.5;
    $nota2 = 8;
    $texto = "Minha média é: ";
    $resultado = ($nota1 + $nota2)/2;

    $texto = $texto.$resultado; // o . "soma/acrescenta"
    echo $texto;

    if($resultado >= 6)
    {
        echo " Aprovado";
    }
    else if($resultado <6 && $resultado >=2)
    {
        echo " Tem chance de recuperar";
    }
    else
    {
        echo " Reprovado, perdido!";
    }

    //comentario
    /*bloco de comentario*/

    $contadora = 0;
    do{
        echo "<br>teste".$contadora;
        $contadora ++;
    }while($contadora < 10);
    /*
    echo "<br><br>while:<br><br>";
    //echo "<BR><BR>Degub:".$resultado."<BR><BR><br>";
    while($contadora < 150)
    {
        if($contadora % 2 == 0){
            echo $contadora." É número Par<br>";

        }else{
            echo "<p>" .$contadora. " É número Impar<br>";
        }
        $contadora++;
    }

    const teste = "oi";
    for($i = 0; $i< 1550; $i++)
    {
        echo "<h1>".$i."<br>";
    }
    //echo "<script>window.location.href = http://www.globo.com</script>"
    */
    echo "<table border='5' style='padding:5px'>";
    for ($i=0; $i < 25; $i++){
        echo "<tr>";
        echo "<td>Nome ".$i."</td>";
        echo "<td>Idade ".$i."</td>";
        echo "</tr>";
    }
    echo "</table>";
    

?>