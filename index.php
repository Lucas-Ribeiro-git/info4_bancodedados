<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 

    <?php 
        echo "<p> Olá mundo </p>"; 

        // comentario em 1 linha 

        /* comentario em 
        varias linhas   
            */ 

        /* Variaveis 
        PHP é fracamente tipádo ou seja  , 
        não é preciso informar o tipo de 
        variavel (tipo de dado que será armazenado)

        - É necessario utilizar o  "$"  antes do nome da variavel.
        
        */

        $idade = 30 ;
        $nota = 8.5; 
        $intuito = "Canguaretama"; 
        $aprovado = TRUE; 

        echo "<p>"; 
        echo $idade; 
        echo "</p>"; 
 

        echo "<p> $idade </p>"; 
        echo "<p>". $idade. "</p>"; 

        /* OPERADORES ARITMÉTICO 
        
            + SOMA 
            - SUBTRAÇÃO 
            * MULTIPLICAÇÃO 
            / DIVISÃO
        
        */ 

        $nota1 = 80;  
        $nota2 = 70;  
        $media = ($nota1 + $nota2)/2; 
        echo "<p> A média é $media </p>"; 

        /* OPERADORES CONDICIONAIS/COMPARAÇÃO  
        
        > MAIOR 
        >= MAIOR OU IGUAL 
        < MENOR 
        <= MENOR OU IGUAL A 
        == IGUAL A 
        != DIFERENTE DE 

        */ 

        echo "<p>".(10 > 1). "</p>"; 
        echo "<p>".(5>=10). "</p>"; 
        echo "<p>".(5!=10). "</p>"; 

        // esse comando ira responder se é verdadeiro caso seja verdadeiro aparece 1 que quer dizer verdadeiro 

        /* OPERADORES LÓGICOS  
        ele fica entre 2 operações condicionais

        && e
        || ou 
        ! não 
        */   


        echo "<p>".((10>5)&&(5<4)). "</p>";  
        echo "<p>".((10>5)||(5<4)). "</p>";  
        echo "<p>".(!(10>5)). "</p>"; 




    ?>
    
</body>
</html>