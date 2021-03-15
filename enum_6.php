<?php

if( !empty( $_POST['n1']) && !empty( $_POST['n2']))
{
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    echo 'El mayor es: '.mayor($n1,$n2);
    
}


function mayor($nm1, $nm2):int
{
    if($nm1 > $nm2)
    return $nm1;
    else
    return $nm2;

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
<form action="enum_6.php" method="post" autocomplete="off">
        <p>Numero 1: <input type='text' id='n1' name='n1' required> </p>
        <p>Numero 2: <input type='text' id='n2' name='n2' required> </p>
        
         </p>
        <input type='submit' value='Cual es mayor'>
    </form>
</body>
</html>