 <?php
 error_reporting(E_ALL ^ E_DEPRECATED);
$hostmysql = "localhost:8080";
$username = "root";
$password = "";
$database = "dp_ftth";
$conn = mysql_connect("$hostmysql","$username","$password");
if (!$conn) die ("Gagal Melakukan Koneksi");
mysql_select_db($database,$conn) or die ("Database Tidak Diketemukan di Server"); 
?>

