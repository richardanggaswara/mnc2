<?php
session_start(); 
?>
<html>
<head>
<title>Logout</title>
</head>
<body>
<?php
/*
session_is_registered() sebaiknya tidak digunakan (Deprecated Function)
if( session_is_registered( 'ID' ) || session_is_registered( 'PASS' ) )
*/
if( isset($_SESSION['ID']) || isset($_SESSION['PASS']) ) {
 //session_unregister( 'ID' ); Deprecated Function
 //session_unregister( 'PASS' ); Deprecated Function
 //unset( $ID, $PASS );
 
 // kembalikan variabel session ke kondisi null (kosong)
$_SESSION = array();
 
 // terakhir, hancurkan session
 session_destroy();
 
 echo '<script type="text/javascript">';
 echo 'alert("ANDA BERHASIL LOGOUT!")'; 
 echo '</script>';
 echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/index.php';\",1500);</script>";}

?>
</body>
</html>