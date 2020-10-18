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
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
                <link href="asset/bootstrap/css/styles.css" rel="stylesheet">
                <script type="text/javascript" src="asset/jquery/jquery-1.9.1.js"></script>
                <script type="text/javascript" src="asset/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
if( !isset($_SESSION['ID']) || !isset($_SESSION['PASS']) ) {
 die( 'Illegal Acces' );
}
?>
<!-- Header -->
		<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
				<a class="navbar-brand" href="www.mncplaymedia.com"><marquee>MNC Play Media</marquee></a>
				</div>
			
			</div><!-- /container -->
		</div>
		<div class="col-md-1"> <!-- Kalau mau buat menu sampung kiri isi disini  -->   </div> 
		<div class="col-md-10">
		
    
        
<div id="contentdiv" class="contcustom"> 
  <h2><center>DATABASE FAT</center></h2>   
  <div>
  <div class="row">
    <div class="input-group"> <span class="input-group-addon">Cari</span>
		<input id="filter" type="text" class="form-control" style="width: 200px;" placeholder="Type here...">
	</div>
	<br>
	<div class="table-responsive">
<table class="table table-striped table-condensed table-responsive">
    <thead>
        <tr>
			<th>NO PORT</th>
            <th>ID COSTUMER</th>
            <th>STATUS</th>
        </tr>
    </thead>
	<tbody class='searchable'>
		<?php 
			include 'dbconnect.php';
			$name= $_POST['fat'];
			$query = "SELECT * FROM tb_data1 where id_fat like '%$name%'";
			$result = mysql_query($query);
			while ($row = mysql_fetch_array($result)){
				echo '<th>'.$row['no_port'].'</th>';
				echo '<th>'.$row['id_port'].'</th>';
				echo '<th>'.$row['status'].'</th>';
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
									<form method='post' action='function2.php'>
										<div class='form-group'>
											<label for='tiang'>ID</label>
											<input type='text' name='id' class='form-control' value='$row[no]' disabled>
											<input type='hidden' name='id' value='$row[no]'>
										</div>
									   <div class='form-group'>
											<label for='tiang'>tiang</label>
											<input type='text' name='old_tiang' class='form-control' value='$row[id_tiang]' disabled>
											<input type='hidden' name='old_tiang' value='$row[id_tiang]'>
										</div>
										<div class='form-group'>
											<label for='tiang'>no fat</label>
											<input type='text' name='fat' class='form-control' value='$row[id_fat]' disabled>
											<input type='hidden' name='fat' value='$row[id_fat]'>
										</div>
										<div class='form-group'>
											<label for='tiang'>NO PORT</label>
											<input type='text' name='noport' class='form-control' value='$row[no_port]' disabled>
											<input type='hidden' name='noport' value='$row[no_port]'>
										</div>
										<div class='form-group'>
											<label for='tiang'>ID COSTUMER</label>
											<input type='text' name='idcost' class='form-control'value='$row[id_port]'>
										</div>
										<div class='form-group'>
											<label for='tiang'>status</label>
											<select name='status' class='form-control'>
												<option>"?><?php echo $row['status'];?><?php echo "</option>
												<option value='OPEN'>open</option>
												<option value='ACTIVE'>ACTIVE</option>
												<option value='DISMANTLE'>dismantle</option>
											</select>
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
								 <form method='post' action='function2.php'>
									<div class='form-group'>
											<label for='tiang'>Anda yakin ingin menghapus $row[tiang] ?</label>
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
</body>
<script>
$(document).ready(function () {

    (function ($) {

        $('#filter').keyup(function () {
		
            var rex = new RegExp($(this).val(), 'i');
			//alert(rex);
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});
</script>
</html>