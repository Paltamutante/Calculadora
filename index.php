
<?php
if(isset($_POST['num1']) && isset($_POST['num2'])){
    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);
    
    if(isset($_POST['sumar'])){
        //$resultado=floatval($num1+$num2);    
    }
    if(isset($_POST['restar'])){
        //$resultado=floatval($num1-$num2);    
    }
    if(isset($_POST['multiplicar'])){
        //$resultado=floatval($num1*$num2);    
    }
    if(isset($_POST['dividir'])){
       //$resultado=floatval($num1/$num2);    
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Goolge Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet"> 
    
</head>
<body>
    <div class="contenido">
        <form method="POST">
            <h1>Calculadora</h1>

                <input type="text" name="num1" placeholder="ingrese un numero" value="">
                <input type="text" name="num2" placeholder="ingrese otro numero" value="">
               
                <input type="submit" name="sumar" class="sum" value="+">
                <input type="submit" name="restar" class="res" value="-"><br>
                <input type="submit" name="multiplicar" class="mul" value="*">
                <input type="submit" name="dividir" class= "div" value="/">

            <h1 name="recuadro"><?= "";?></h1>
        </form>
    </div>    
</body>



</html>