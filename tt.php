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
				echo "<th></tr>"; 
			}	

?>
    </tbody>
</table>
<a href="index.php"><i class="glyphicon glyphicon-arrow-left"></i> BACK</a>