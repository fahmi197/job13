<html>
<head>
 <title>SHOW ROOM MOBIL</title>
</head>
<body bgcolor="green">
<center>
 <form method="post" action="" class="dealer">
 <table border="0">
 <tr>
  <td>Id_Mobil</td>
  <td>:</td>
  <td colspan="7"><input type="text" name="id_mobil" size="30"></td>
 </tr>
 <tr>
  <td>Merk</td>
  <td>:</td>
  <td colspan="7"><input type="text" name="merk" size="30"></td>
 </tr>
 <tr>
  <td>Model</td>
  <td>:</td>
  <td colspan="7"><input type="text" name="model" size="30"></td>
 </tr>
 <tr>
  <td>Tipe</td>
  <td>:</td>
  <td colspan="7"><input type="text" name="tipe" size="30"></td>
 </tr>
 <tr>
  <td>Pintu</td>
  <td>:</td>
  <td colspan="7"><input type="text" name="pintu" size="30"></td>
 </tr>
 <tr>
  <td>Tahun Produksi</td>
  <td>:</td>
  <td colspan="7"><input type="text" name="tahun_produksi" size="30"></td>
 </tr>
 <tr>
  <td>Negara Pembuat</td>
  <td>:</td>
  <td colspan="7"><input type="text" name="negara_pembuat" size="30"></td>
 </tr>
 <tr>
  <td>Jenis Produksi</td>
  <td>:</td>
  <td colspan="7"><input type="text" name="jenis_produksi" size="30"></td>
 </tr>
 <tr>
  <td><input type="submit" name="tambah" value="Tambah" href="tambah.php">
   <input type="submit" name="edit" value="Edit">
   <input type="submit" name="hapus" value="Hapus">
   <input type="submit" name="cari" value="Cari">
   <input type="submit" name="tampil" value="Tampil Data">
  </td>
 </tr> 

 </table>
 <hr>
<?php
error_reporting(1);
include "koneksi.php";
  $Id_Mobil = $_POST['Id_Mobil'];
  $Merk = $_POST['Merk'];
  $Model = $_POST['Model'];
  $Tipe = $_POST['Tipe'];
  $Pintu = $_POST['Pintu'];
  $Tahun_Produksi = $_POST['Tahun_Produksi'];
  $Negara_Pembuat = $_POST['Negara_Pembuat'];
  $Jenis_Produksi = $_POST['Jenis_Produksi'];

  if (isset($_POST['masuk'])) {
   $sql = "INSERT INTO showRoomMobil`(`Id_Mobil`,`Merk`, `Model`, `Tipe`, `Pintu`, `Tahun_Produksi`, `Negara_Pembuat`, `Jenis_Produksi`) VALUES ('$Id_Mobil','$Merk','$Model','$Tipe','$Pintu','$Tahun_Produksi','$Negara_Pembuat','$Jenis_Produksi')";
   $exe = mysql_query($sql);
  }elseif (isset($_POST['ubah'])) {
   $sql = "UPDATE ShowRoomMobil SET `Merk`='$Merk',`Model`='$Model',`Tipe`='$Tipe',`Pintu`='$pintu',`Tahun_Produksi`='$tahun_produksi',`Negara_Pembuat`='$Negara_Pembuat',`Jenis_Produksi`='$Jenis_Produksi' WHERE `Id_Mobil`='$Id_Mobil'";
   $exe = mysql_query($sql);
  }elseif (isset($_POST['hapus'])) {
   $sql = "DELETE FROM ShowRoomMobil WHERE `Id_Mobil`='$Id_Mobil'";
   $exe = mysql_query($sql);
  }elseif (isset($_POST['cari'])) {
   $sql = "SELECT * FROM ShowRoomMobil WHERE `Id_Mobil`='$Id_Mobil'";
   $exe = mysql_query($sql);
   echo "<table>\n";
   while($line = mysql_fetch_array($exe, MYSQL_NUM)){
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
     echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
   }
   echo "</table>\n";
  }
?>
</form>
</center>
</body>
</html>
