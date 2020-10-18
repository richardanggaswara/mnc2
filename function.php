<?php
include 'dbconnect.php';
$function = new function_data();
if (isset($_POST['new_tiang']) && isset($_POST['status'])){
   $tiang = $_POST['new_tiang'];
   $id_fat = $_POST['fat'];
   $noport = $_POST['noport'];
   $id_port = $_POST['idcost'];
   $status = $_POST['status'];
   $function->tambah_data($tiang, $id_fat,$noport, $id_port, $status);
}
elseif (isset($_POST['old_tiang']) && isset($_POST['fat']) && isset($_POST['id'])){
   $tiang = $_POST['old_tiang'];
   $no = $_POST['id'];
   $id_fat = $_POST['fat'];
   $noport = $_POST['noport'];
   $id_port = $_POST['idcost'];
   $status = $_POST['status'];
   $function->edit_data($tiang, $id_fat, $noport, $id_port, $status, $no);

}
elseif (isset ($_POST['idHapus'])){
    $no = $_POST['idHapus'];
    mysql_query("delete from tb_data1 where no='$no'") or die (mysql_error());
    echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/data.php';\",1500);</script>";
}

else {
    echo '<script type="text/javascript">'; 
    echo 'alert("Access Denied")'; 
    echo '</script>';
    echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/data.php';\",1500);</script>";
      
}

class function_data {
    
    function tambah_data ($tiang, $id_fat, $noport, $id_port, $status){
        $query = "INSERT INTO tb_data1 (id_tiang, id_fat, no_port, id_port, status) VALUE ('$tiang', '$id_fat', '$noport', '$id_port', '$status')";
        $result = mysql_query($query);
        if ($result){
            echo '<script type="text/javascript">'; 
            echo 'alert("Data Berhasil Ditambahkan")'; 
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/data.php';\",500);</script>";    
        }
        else {
          echo '<script type="text/javascript">'; 
          echo 'alert("Data Gagal Dimasukan")'; 
          echo '</script>';
          echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/data.php';\",500);</script>";      
        }        
    }
    
    function edit_data ($tiang, $id_fat , $noport , $id_port, $status, $no){
        $query = "UPDATE tb_data1 SET id_tiang='$tiang',id_fat='$id_fat',no_port='$noport',id_port='$id_port',status='$status' WHERE no='$no'";
        $result = mysql_query($query);
        if ($result){
            echo '<script type="text/javascript">'; 
            echo 'alert("Data Berhasil Diperbaharui")'; 
            echo '</script>';
            echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/index.php';\",1000);</script>";
        }
        else {
          echo '<script type="text/javascript">'; 
          echo 'alert("Data Gagal Diperbaharui")'; 
          echo '</script>';
          echo "<script>setTimeout(\"location.href = 'http://malangmncplay.esy.es/data.php';\",1500);</script>";      
        }   
    }    
}