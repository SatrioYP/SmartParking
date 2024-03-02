<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Parkir</title>
    <!-- css -->
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <table border ="3" bgcolor ="FF8C32">
        <tr>
            <td colspan="5" align="center" width="50"><b>Data Parkir</b></td>
</tr>

<?php
$Kendaraan = $_POST['Kendaraan'];
$platnomer = $_POST['platnomer'];
$perjam = $_POST['perjam'];
$Durasi = $_POST['Durasi'];
?>

<?php if ($Kendaraan=="Mobil")
 {$harga_perjam=5000;}
elseif ($Kendaraan=="Motor")
 {$harga_perjam=3000;} ?>

<?php $harga_total=$perjam*$Durasi ?>

    <td>Jenis Kendaraan</td><td><?php echo $Kendaraan; ?></td>
</tr>
<tr>
    <td>Plat Nomer</td><td><?php echo $platnomer; ?></td>
</tr>
<tr>
    <td>Harga Perjam</td><td><?php echo $perjam; ?></td>
</tr>
<tr>
    <td>Total</td><td><?php echo $harga_total; ?></td>
</tr>
</table>

<a href="InputParkir.php">
    Kembali</a>
</body>
</html>