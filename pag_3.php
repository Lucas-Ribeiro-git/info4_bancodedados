<?php    

session_start(); 


if(isset($_POST['nome'])) { 
    $_SESSION["nome"] = $_POST['nome'];
}
if(isset($_POST['cpf'])) { 
    $_SESSION["cpf"] = $_POST['cpf'];
} 
echo "Seu cadastro foi salvo";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Salvar Sessão </title>
</head>
<body>  
    
<a href="pag_1.html"> Voltar </a> 






    
    
</body>
</html>