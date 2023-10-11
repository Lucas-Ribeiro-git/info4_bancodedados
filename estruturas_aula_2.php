<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 </title>
</head>
<body>
    <?php   

    /*    
        ESTRUTURAS CONDICIONAIS 
        - IF 
        - IF ...ELSE

    
    */ 

    // CÓDIGO PRA SABER SE UM NUMERO É POSITIVO 

    $numero = 10 ;
    if ($numero>0){ 
        echo "<p> O Numero $numero positivo </p>";
    }  

    echo "<p> ------------------------------------ </p>"; 

    // código para saber se positivo ou negativo

    if ($numero>0) { 
        echo "<p>  Numero positivo </p>";
    }else{ 
        echo "<p> Numero negativo </p>"; 
    } 

    echo "<p> ------------------------------------ </p>"; 

    // código para saber se positivo, zero ou negativo

    if ($numero>0){ 
        echo "<p> O Numero $numero positivo </p>";
    }else{ 
        if($numero == 0){  
            echo "<p> O Numero $numero é igual a zero </p>";

        }else { 
            echo "<p> O Numero $numero é negativo </p>";
        }
    } 

    // Esse jeito fica melhor para o sistema pois quando se usa IF e ELSE assim que ele encontrar um verdadeiro ele não ira executar o resto 
    // pois caso invs de usar só IF 

    echo "<p> ------------------------------------ </p>";    

    // O FOR tem 3 areas e uma variavel de controle conhecida como $i

    /*  Estruturas condicionais 
    - FOR 
    - WHILE 
    - DO...WHILE 

    */  

    // código usando for para repetir os números de 1 a 10

    for ($i=1; $i<=10 ;$i++) { 
        echo "<p> $i </p>";
    }  

    echo "<p> ------------------------------------ </p>";  

    $j = 1; 
    while($j <= 10){  
        echo "<p> $j </p>"; 
        $j++;

    }

    


    ?>
</body>
</html>