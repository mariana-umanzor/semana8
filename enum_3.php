<?php

$datos = array(
    array(
        "nombre" => "Francisco Garcia",
        "telefono" =>"5689741523",
        "correo" => "fgarciagmail.com"
    ),
    array(
        "nombre" => "Manuel Salinas",
        "telefono" =>"2584369721",
        "correo" => "msalinasgmail.com"
    ),
    array(
        "nombre" => "Johana Melara",
        "telefono" =>"9875147536",
        "correo" => "jmelara.com"
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
    <th>Nombre</th>
    <th>Telefono</th>
    <th>Correo</th>
  </tr>
<?php

foreach($datos as $item=>$valor_item)
{
    echo "<tr>";
    foreach($valor_item as $cell)
    {
        echo "<td>".$cell."</td>";
    }
    echo "</tr>";

}

?>


  
  
    </table>
</body>
</html>