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
    
        if ($_POST["calc"] == "soma"){ 
            $result = $_POST["n1"] +  $_POST["n2"]; 
            echo "<p> O resultado é : " .$result."</p>";
        }else if ($_POST["calc"] == "subtra"){ 
            $result = $_POST["n1"] -  $_POST["n2"]; 
            echo "<p> O resultado é : " .$result."</p>"; 
        }  
        else if ($_POST["calc"] == "Multip"){ 
            $result = $_POST["n1"] *  $_POST["n2"]; 
            echo "<p> O resultado é : " .$result."</p>"; 
        }else if ($_POST["calc"] == "Divis"){ 
            $result = $_POST["n1"] /  $_POST["n2"]; 
            echo "<p> O resultado é : " .$result."</p>"; 
        }  

        $lista_disciplinas = $_POST ["discip"]; 

        foreach($lista_disciplinas as $discip) { 
            echo "<p> $discip </p>";
        }

    
    ?>
    
</body>
</html>