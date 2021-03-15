<?php

    if( !empty( $_POST['n1']) && !empty( $_POST['n2']))
    {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $ope =$_POST['operacion'];

        switch ($ope) {
            case 'producto':
                echo 'El producto es: '.$n1 * $n2;
                break;
            case 'resta':
                echo 'La resta es: '.$n1 - $n2;
                break;
            
            default:
                echo 'La suma es: '.$n1 + $n2;
                break;
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
</head>
<body>
    <form action="enum_1.php" method="post" autocomplete="off">
        <p>Numero 1: <input type='text' id='n1' name='n1' required> </p>
        <p>Numero 2: <input type='text' id='n2' name='n2' required> </p>
        <p>Operacion: 
        <select id="operacion" name="operacion">
                <option value="suma" selected>suma</option>
                <option value="resta">resta</option>
                <option value="producto">producto</option>
                </select>
         </p>
        <input type='submit' value='Operar'>
    </form>
</body>
</html>