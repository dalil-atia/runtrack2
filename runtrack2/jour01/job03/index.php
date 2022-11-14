<?php                      
$a = 1234;
$b = true;
$c = "scooter";
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
<table>
<tr>
<th>Type</th>
<th>Nom</th>
<th>Valeur</th>
</tr>
<tr>
<td>int</td>
<td>a</td>
<td><?php echo $a ?></td>
</tr>
<tr>
<td>boolean</td>
<td>b</td>
<td><?php echo $b ?></td>
</tr>
<tr>
<td>string</td>
<td>c</td>
<td><?php echo $c ?></td>
</tr>
</table>
</body>
</html>