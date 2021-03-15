<?php

$datos = array(
    array(
        "departamento" => "RRHH",
        "empleado" =>"Margarita Linares",
        "salario" => 3500
    ),
    array(
        "departamento" => "Contabilidad",
        "empleado" =>"Alberto Canizales",
        "salario" => 2000
    ),
    array(
        "departamento" => "Finanzas",
        "empleado" =>"Maria Gomez",
        "salario" => 2500
    ),
    array(
        "departamento" => "Gerencia",
        "empleado" =>"Anastacia Rivera",
        "salario" => 3000
    ),
    array(
        "departamento" => "Finanzas",
        "empleado" =>"Bladimir Romero",
        "salario" => 1000
    ),
    array(
        "departamento" => "Contabilidad",
        "empleado" =>"Andrea Robles",
        "salario" => 3000
    ),
    array(
        "departamento" => "RRHH",
        "empleado" =>"Carmen Rosales",
        "salario" => 1500
    )
    
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
    <th>Depart</th>
    <th>Empleado</th>
    <th>Salario</th>
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

<tr>
    <td>Salario Promedio</td>
    <td colspan="2">

<?php
@$total_salarios = 0;
    foreach($datos as $item=>$valor_item)
    {
        $total_salarios += $valor_item['salario'];
    
    }
    echo $total_salarios / count($datos);
?>

    </td>
</tr>
<tr>
    <td>Numero Empleados</td>
    <td colspan="2">
        <?php
    echo count($datos);
    ?>
    </td>
</tr>
  
    </table>
</body>
</html>