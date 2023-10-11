<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 

    <form action="projeto_bd_cadstrar.php" method="post">  
    
        <p> 
            <label for="nome"> Nome: </label>
            <input type="text" name="nome" id="nome" />  
        </p>  

        <label for="nome"> Data de inicio: </label>
        <input type="date" name="data" id="data" />  
        

        <p>  

        <label for="nome"> valor: </label>
        <input type="number" name="valor" id="valor" step="0.01" /> 
            
        </p> 

    

        
        <input type="submit" value="Adicionar" /> 
        
        
    </form> 
        

</body>
</html>