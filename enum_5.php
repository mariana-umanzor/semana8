<?php

if( !empty( $_POST['n1']))
{
    $n1 = $_POST['n1'];
    echo sumar($n1);
    
}


function sumar($numeros):int
{
    $valores = explode(",", $numeros);
    $suma = 0;
    foreach($valores as $item)
    {
        $suma += $item;
    }
    return $suma;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="enum_5.php" method="post" autocomplete="off">
        <p>Numeros separado por coma: <input type='text' id='n1' name='n1' required> </p>
        
         </p>
        <input type='submit' value='Sumarlos'>
    </form>
</body>
</html>