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
				<a class="navbar-brand" href="http://www.mncplaymedia.com/"><marquee>MNC Play Media</marquee></a>
				</div>
			
			</div><!-- /container -->
		</div>
		<div class="col-md-1"> <!-- Kalau mau buat menu sampung kiri isi disini  -->   </div> 
		<div class="col-md-10">		
		
<div id="contentdiv" class="contcustom"> 
  <h2><center>DATABASE FAT</center></h2>   
  <div>
    <!--<form method="post" action="login2.php">
					<input id="userlog" name="userlog" type="text" placeholder="username">
					<input id="passlog" name="passlog" type="password" placeholder="password">
					<br>
					<a title='Login' value='login' href='login2.php' class='btn btn-primary pull-center'><span class='glyphicon glyphicon-ok'></span> Login </a>
				</form> -->
    <form action="login2.php" method="post">
      <br>
      <input id="userlog2" type="text" name="userlog" placeholder="username">
      <input id="passlog3" type="password" name="passlog" placeholder="password">
      <input name="submit" type="submit" class='btn btn-primary pull-center' value="Login">
	  <br> <h6>*)untuk input data
    </form>
	<hr align="center" color="#ff0000">
	</div>	
	<form name="formcari" method="post" action="tiang.php">
	<table width="330" border="0" align="left" cellpadding="0">
	<td height="25" colspan="3">
	</td>
	</tr>
	<tr> <td><h3>TIANG <h6> ex penulisan : TGW001</td>
	<td> <input type="text" name="name"> </td>
	</tr>
	<td></td>
	<td> <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="search" > </td>
	</tr>
	</table>
	</form>
	
	<form name="formcari" method="post" action="fat.php">
	<table width="330" border="0" align="left" cellpadding="0">
	<td height="25" colspan="3">
	<tr> <td><h3>FAT <h6> ex penulisan : TGW01.01.01.02</td>
	<td> <input type="text" name="fat"> </td>
	</tr>
	<td></td>
	<td> <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="search" > </td>
	</tr>
	</table>
	</form>
	
	<table width="330" border="0" align="right" cellpadding="0">
	<td height="25" colspan="3">
	</td>
	<tr> <td><a href="penwo.php"><span class="glyphicon glyphicon-plus-sign" align="center"></span> PENDING WO &nbsp &nbsp;:</a></td><td><?php echo $num_rows;?></td>
	</tr>
	<tr> <td><a href="tt.php"><span class="glyphicon glyphicon-plus-sign" align="center"></span> TT MT &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp; :</a></td>
	</tr>
	</table>
	
	</body>

</html>