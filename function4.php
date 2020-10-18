<?php
include 'dbconnect.php';
$function = new function_data();
if (isset($_POST['newcos']) && isset($_POST['status'])){
   $tiang = $_POST['newcos'];
   $id_fat = $_POST['alamat'];
   $noport = $_POST['status'];
   $id_port = $_POST['remark'];
   $function->tambah_data($tiang, $id_fat,$noport, $id_port);
}
elseif (isset($_POST['old_idcos']) && isset($_POST['id'])){
   $tiang = $_POST['old_idcos'];
   $id_fat = $_POST['alamat'];
   $noport = $_POST['status'];
   $id_port = $_POST['remark'];
   $no = $_POST['id'];
   $function->edit_data($tiang, $id_fat, $noport, $id_port, $no);
}
elseif (isset ($_POST['idHapus'])){
    $no = $_POST['idHapus'];
    mysql_query("delete  from tb_pending where no='$no'") or die (mysql_error());
    echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/pendingwo.php';\",1500);</script>";
}

else {
    echo '<script type="text/javascript">'; 
    echo 'alert("Access Denied")'; 
    echo '</script>';
    echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/that.php';\",1500);</script>";
      
}

class function_data {
    
    function tambah_data ($tiang, $id_fat, $noport, $id_port){
        $query = "INSERT INTO tb_pending (idc, alamat, packet, remark) VALUE ('$tiang', '$id_fat', '$noport', '$id_port')";
        $result = mysql_query($query);
        if ($result){
            echo '<script type="text/javascript">'; 
            echo 'alert("Data Berhasil Ditambahkan")'; 
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/pendingwo.php';\",500);</script>";
    
        }
        else {
          echo '<script type="text/javascript">'; 
          echo 'alert("Data Gagal Dimasukan")'; 
          echo '</script>';
          echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/pendingwo.php';\",500);</script>";
      
        }
        
    }
    
    function edit_data ($tiang, $id_fat , $noport , $id_port, $no){
        $query = "UPDATE tb_pending SET idc='$tiang',alamat='$id_fat',packet='$noport',remark='$id_port' WHERE no='$no'";
        $result = mysql_query($query);
        if ($result){
            echo '<script type="text/javascript">'; 
            echo 'alert("Data Berhasil Diperbaharui")'; 
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/pendingwo.php';\",1000);</script>";
        }
        else {
          echo '<script type="text/javascript">'; 
          echo 'alert("Data Gagal Diperbaharui")'; 
          echo '</script>';
          echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/pendingwo.php';\",1500);</script>";
      
        }   
    }    
}