<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Data Anda</title>
    <link rel="stylesheet" href="style2.css">
    <form action="hasilparkir.php" method="post">
</head>
<body>

<h3>Masukan Data Kendaraan Anda</h3>

<div>
  <form action="/action_page.php">
    <label for="fname">Plat Nomor</label>
    <input type="text" name="platnomer" placeholder="Masukan">

    <label for="lname">Harga Perjam</label>
    <input type="text" name="perjam" placeholder="3000">

    <label for="Kendaraan">Jenis Kendaraan</label>
    <select id="Kendaraan" name="Kendaraan">
    <option value="Mobil">Mobil</option>
      <option value="Motor">Motor</option>
    </select>

</p>


<?php
    echo"Durasi Jam  :";
    echo"<select name = Durasi>";
    for ($Durasi= 1; $Durasi <= 24; $Durasi++)
    {
        echo "<option value=".$Durasi.">".$Durasi."</option>";
    }
    echo"</select>";
?>

</p>
<p>
    <button onclick="alert('Apakah data anda sudah benar?')">Submit</button>
</p>
</form>
</div>  

</body>
</html>