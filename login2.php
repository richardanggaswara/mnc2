<?php
session_start(); //kuncinya ada disini, tulis diawal script sebelum menulis yang lain
require 'dbconnect.php';
 
/* Ambil variabel */
$username = $_REQUEST['userlog'];
$password = $_REQUEST['passlog'];
 
/* Validasi */
$error = 0;
if( empty( $username ) || empty( $password ) ) {
 echo 'Tidak boleh ada kolom yang kosong.<br>';
 $error++;
} else {
 $sql = 'select * from members where username="' . $username . '"';
 $query = mysql_query( $sql );
 $row = mysql_fetch_row( $query );
 
 if( empty( $row[0] ) ) {
  echo 'User tidak dikenal.<br>';
  $error++;
 } else {
  if( $row[1] != $password ) {
  echo 'Password salah.<br>';
  $error++;
 } else {
  /*Daftarkan ke server sbg variabel global*/
  /* session_register() Sebaiknya tdk digunakan (Deprecated Function)
  session_register( 'ID', 'PASS' );
  */
  $_SESSION['ID'] = $username;
  $_SESSION['PASS'] = $password;
 } //end else
 } //end else
}
 
if( $error == 0 ) {
 /* Redirect jika tidak ada error */
 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=that.php">';
 exit();
} else {
 echo '<a href="index.php">Kembali</a>';
 exit();
}
?>