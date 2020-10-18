<?php
session_start();        
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">		
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                <link href="asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
				<link href="asset/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
                <link href="asset/bootstrap/css/styles.css" rel="stylesheet">
                <script type="text/javascript" src="asset/jquery/jquery-1.9.1.js"></script>
                <script type="text/javascript" src="asset/bootstrap/js/bootstrap.min.js"></script>
                
	</head>
	<body>
		<?php
/* cek udah login pa blun */
/*
session_is_registered() sebaiknya tidak digunakan (Deprecated Function)
if( !session_is_registered( 'ID' ) || !session_is_registered( 'PASS' ) )
*/
if( !isset($_SESSION['ID']) || !isset($_SESSION['PASS']) ) {
 die( 'Illegal Acces' );
}
?>
<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://www.mncplaymedia.com/"><marquee>MNC Play Media</marquee></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">

        <li><a href="logout.php"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
      </ul>
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->
<body>
   <div class="col-md-1"> <!-- Kalau mau buat menu sampung kiri isi disini  -->   </div> 
   <div class="col-md-10">
   
<a title="Tambah Pesanan" data-toggle="modal" href="#pesananModal" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Tambah DATA</a>

<div id="pesananModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Tambah Data</h3>
            </div>
            <div class="modal-body">
                <form method="post" action="function5.php">
                    <div class="form-group">
                        <label for="idcos">ID COSTUMER</label>
                        <input type="text" name="newcos" class="form-control">
                    </div>
					<div class="form-group">
                        <label for="idcos">NAMA</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
					<div class="form-group">
                        <label for="idcos">ALAMAT</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>
					<div class="form-group">
                        <label for="idcos">REMARK</label>
                        <input type="text" name="remark" class="form-control">
                    </div>
                    <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<div class="row">


    <div class="input-group"> <span class="input-group-addon">Cari</span>
		<input id="filter" type="text" class="form-control" style="width: 200px;" placeholder="Type here...">
	</div>
	<br>
    <div class="table-responsive">
<table class="table table-striped table-condensed table-responsive">
    <thead>
        <tr>
            <th>no</th>
            <th>id</th>
			<th>nama</th>
            <th>alamat</th>
            <th>remark</th>
        </tr>
    </thead>
    <tbody class='searchable'>
		<?php 
			include 'dbconnect.php';
			$query = "SELECT * FROM tb_tt";
			$result = mysql_query($query);
			while ($row = mysql_fetch_array($result)) {			
				echo '<th>'.$row['no'].'</th>';
				echo '<th>'.$row['idc'].'</th>';
				echo '<th>'.$row['nama'].'</th>';
				echo '<th>'.$row['alamat'].'</th>';
				echo '<th>'.$row['remark'].'</th>';
				echo "<th><a title='Edit' data-toggle='modal' href='#editModal$row[no]' class='btn btn-primary pull-right'><span class='glyphicon glyphicon-pencil'></span> Edit </a>";				echo"<th>
					<a title='Delete' data-toggle='modal' href='#delModal$row[no]' class='btn btn-danger pull-right'><span class='glyphicon glyphicon-trash'></span> Hapus </a>
					</th>
					</tr>";  
				echo "<div id='editModal$row[no]' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
						<div class='modal-dialog'>
							<div class='modal-content'>
								<div class='modal-header'>
									<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
									<h3 id='myModalLabel'>Edit</h3>
								</div>
								<div class='modal-body'>
									<form method='post' action='function5.php'>
										<div class='form-group'>
											<label for='idcos'>ID</label>
											<input type='text' name='id' class='form-control' value='$row[no]' disabled>
											<input type='hidden' name='id' value='$row[no]'>
										</div>
									   <div class='form-group'>
											<label for='idcos'>ID COSTUMER</label>
											<input type='text' name='old_idcos' class='form-control' value='$row[idc]' >
										</div>
										<div class='form-group'>
											<label for='idcos'>nama</label>
											<input type='text' name='nama' class='form-control' value='$row[nama]' >
										</div>
										<div class='form-group'>
											<label for='idcos'>alamat</label>
											<input type='text' name='alamat' class='form-control' value='$row[alamat]' >
										</div>
									
										<div class='form-group'>
											<label for='idcos'>remark</label>
											<input type='text' name='remark' class='form-control'value='$row[remark]'>
										</div>
										<div class='modal-footer'>
									<button class='btn' data-dismiss='modal' aria-hidden='true'>Close</button>
									<button class='btn btn-primary'>Save changes</button>
								</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>";
					
				echo "<div id='delModal$row[no]' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
						<div class='modal-dialog'>
							   <div class='modal-content'>
								<div class='modal-header'>
									<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
									<h3 id='myModalLabel'>Hapus Data</h3>
								</div>
								<div class='modal-body'>
								 <form method='post' action='function4.php'>
									<div class='form-group'>
											<label for='idcos'>Anda yakin ingin menghapus $row[idc] ?</label>
											<input type='hidden' value='$row[no]' name='idHapus'> 
									 </div>
								</div>
								<div class='modal-footer'>
									<button class='btn btn-primary' data-dismiss='modal' aria-hidden='true'>Batal</button>
									<button class='btn btn-danger'>Hapus</button>
								</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>";
			}	

?>
    </tbody>
</table>
<a href="that.php"><i class="glyphicon glyphicon-arrow-left"></i> BACK</a>