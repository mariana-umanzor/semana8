<?php

$datos = array(
    array(
        "nombre" => "juan",
        "n1" =>5,
        "n2" => 4,
        "n3" => 5
    ),
    array(
        "nombre" => "maria",
        "n1" =>9,
        "n2" => 8,
        "n3" => 9
    ),


    array(
        "nombre" => "ana",
        "n1" =>5,
        "n2" => 4,
        "n3" => 5
    ),
    array(
        "nombre" => "raul",
        "n1" =>9,
        "n2" => 8,
        "n3" => 9
    ),

    array(
        "nombre" => "oscar",
        "n1" =>5,
        "n2" => 4,
        "n3" => 5
    ),
    array(
        "nombre" => "luisa",
        "n1" =>9,
        "n2" => 8,
        "n3" => 9
    ),

    array(
        "nombre" => "martha",
        "n1" =>5,
        "n2" => 4,
        "n3" => 5
    ),
    array(
        "nombre" => "esteban",
        "n1" =>9,
        "n2" => 8,
        "n3" => 9
    ),

    array(
        "nombre" => "ricardo",
        "n1" =>5,
        "n2" => 4,
        "n3" => 5
    ),
    array(
        "nombre" => "mateo",
        "n1" =>9,
        "n2" => 8,
        "n3" => 9
    ),
);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 15px;
}
        </style>
</head>
<body>
    <table>
    <tr>
    <th>nombre</th>
    <th>nota 1</th>
    <th>nota 2</th>
    <th>nota 3</th>
    <th>Promedio</th>
    <th>Resultado</th>
  </tr>
<?php

foreach($datos as $item=>$valor_item)
{
    echo "<tr>";
    $promerdio = ($valor_item['n1'] + $valor_item['n2'] +$valor_item['n3'] ) /3;
    $prom = round($promerdio, 2);
    $estado = $prom > 7 ? 'Aprobado' : 'Necesita mejorar';
    foreach($valor_item as $cell)
    {
        echo "<td>".$cell."</td>";
    }
    echo "<td>$prom</td>";
    echo "<td>$estado</td>";
    echo "</tr>";

}


?>


  
    </table>
</body>
</html>