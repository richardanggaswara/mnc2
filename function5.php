<?php
include 'dbconnect.php';
$function = new function_data();
if (isset($_POST['newcos']) && isset($_POST['nama'])){
   $tiang = $_POST['newcos'];
   $id_fat = $_POST['alamat'];
   $noport = $_POST['nama'];
   $id_port = $_POST['remark'];
   $function->tambah_data($tiang, $id_fat,$noport, $id_port);
}
elseif (isset($_POST['old_idcos']) && isset($_POST['id'])){
   $tiang = $_POST['old_idcos'];
   $id_fat = $_POST['alamat'];
   $noport = $_POST['nama'];
   $id_port = $_POST['remark'];
   $no = $_POST['id'];
   $function->edit_data($tiang, $id_fat, $noport, $id_port, $no);

}
elseif (isset ($_POST['idHapus'])){
    $no = $_POST['idHapus'];
    mysql_query("delete  from tb_tt where no='$no'") or die (mysql_error());
    echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/tt1.php';\",1500);</script>";
}

else {
    echo '<script type="text/javascript">'; 
    echo 'alert("Access Denied")'; 
    echo '</script>';
    echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/that.php';\",1500);</script>";
      
}

class function_data {
    
    function tambah_data ($tiang, $id_fat, $noport, $id_port){
        $query = "INSERT INTO tb_tt (idc, nama, alamat, remark) VALUE ('$tiang', '$noport', '$id_fat', '$id_port')";
        $result = mysql_query($query);
        if ($result){
            echo '<script type="text/javascript">'; 
            echo 'alert("Data Berhasil Ditambahkan")'; 
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/tt1.php';\",500);</script>";
    
        }
        else {
          echo '<script type="text/javascript">'; 
          echo 'alert("Data Gagal Dimasukan")'; 
          echo '</script>';
          echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/tt1.php';\",500);</script>";
      
        }
        
    }
    
    function edit_data ($tiang, $noport, $id_fat, $id_port, $no){
        $query = "UPDATE tb_tt SET idc='$tiang',nama='$id_fat',alamat='$noport',remark='$id_port' WHERE no='$no'";
        $result = mysql_query($query);
        if ($result){
            echo '<script type="text/javascript">'; 
            echo 'alert("Data Berhasil Diperbaharui")'; 
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/tt1.php';\",1000);</script>";
        }
        else {
          echo '<script type="text/javascript">'; 
          echo 'alert("Data Gagal Diperbaharui")'; 
          echo '</script>';
          echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/tt1.php';\",1500);</script>";
      
        }   
    }    
}