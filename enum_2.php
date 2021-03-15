<?php

$nombre = "Mariana Lisseth Umanzor";
$nacimiento="Pasaquina";
$departamento = "La Union";
$pais = "El Salvador";
$edad = "20";
$codigo="SMIS639719";


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
    <th>Concepto</th>
    <th>Valor</th>
  </tr>
  <tr>
    <td>Nombre completo:</td>
    <td><?php echo $nombre; ?></td>
  </tr>
  <tr>
    <td>Codigo:</td>
    <td><?php echo $codigo; ?></td>
  </tr>
  <tr>
    <td>Dept. Nac.:</td>
    <td><?php echo $departamento; ?></td>
  </tr>
  <tr>
    <td>Muni. Nac.:</td>
    <td><?php echo $nacimiento; ?></td>
  </tr>
  <tr>
    <td>Pais Nac.:</td>
    <td><?php echo $pais; ?></td>
  </tr>
  <tr>
    <td>Edad:</td>
    <td><?php echo $edad; ?></td>
  </tr>
    </table>
</body>
</html>