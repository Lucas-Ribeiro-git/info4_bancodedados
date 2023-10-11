<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Funções aula 2</title>
</head>
<body> 

    <?php  

        echo "<p> Functions aula 2 php </p>";    

        echo "<p> ------------------------------------ </p>";   

        /*   
        FUNÇÃO
        
        */ 

        // 

        function impressao(){ 
            echo "<h1> IFRN </h1>";
        } 


        impressao();  

        echo "<p> ------------------------------------ </p>";  

        function nome(){ 
            return "<h1> Canguaretama </h1>";
        } 

        echo nome(); 

        // Nessa função teve que colocar um echo para chamar a função pois no return não tinha o nome echo antes por isso ele veio depois 

        echo "<p> ------------------------------------ </p>";   

        function instituto($nome) { 
            echo $nome;
        } 

        instituto("<h2> IFPB </h2>") ;

        echo "<p> ------------------------------------ </p>";  

        function soma ($valor1, $valor2) { 
            return $valor1 + $valor2;
        }  

        echo "<p>" .soma(5,3)."</p>";
    
    
    ?>
    
</body>
</html>