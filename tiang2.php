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
<!-- Header -->
		<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
				<a class="navbar-brand" href="#"><marquee>MNC Play Media</marquee></a>
				</div>
			
			</div><!-- /container -->
		</div>
		<div class="col-md-1"> <!-- Kalau mau buat menu sampung kiri isi disini  -->   </div> 
   <div class="col-md-10">
		
    
        
<div id="contentdiv" class="contcustom"> 
  <h2><center>DATABASE FAT</center></h2>   
  <div>
	</div>
	<br></br>

<table class="table table-striped table-condensed table-responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th>FAT</th>
        </tr>
    </thead>
	
		<?php 
			include 'dbconnect.php';
			$name= $_POST['name'];
			$query = "SELECT * FROM tb_tiang where id_tiang like '%$name%' ";
			$result = mysql_query($query);
			while ($row = mysql_fetch_array($result)){
				echo '<th>'.$row['id_tiang'].'</th>';
				echo '<th>'.$row['id_fat'].'</th></tr>';}
		?>
</form> 
</div>
</table>
	</body>
<a href="that.php"><i class="glyphicon glyphicon-arrow-left"></i> BACK</a>
</html>