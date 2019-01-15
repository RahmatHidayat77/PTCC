<!DOCTYPE html>
<html>
<head>
	<?php 
	session_start();
	include 'cek.php';
	include 'config.php';
	?> 
	<title>TOKO KELONTONG "JOGJA"</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.js"></script>	
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="http:" class="navbar-brand">TOKO KELONTONG "JOGJA"</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">				
				<ul class="nav navbar-nav navbar-right">
					<li><a id="pesan_sedia" href="#" data-toggle="modal" data-target="#modalpesan">Pesan&nbsp;<span class='glyphicon glyphicon-comment'></span></a></li>
					<li><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Hello, <?php echo $_SESSION['uname']  ?>&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span></a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- modal input -->
	<div id="modalpesan" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Pesan Notification</h4>
				</div>
				<div class="modal-body">
					<?php 
					$periksa=mysqli_query($con, "select * from barang where jumlah <=3");
					while($q=mysqli_fetch_array($periksa)){	
						if($q['jumlah']<=3){			
							echo "<div style='padding:5px' class='alert alert-warning'><span class='glyphicon glyphicon-info-sign'></span> Stok  <a style='color:red'>". $q['nama']."</a> yang tersisa sudah kurang dari 3 . silahkan pesan lagi !!</div>";	
						}
					}
					?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>						
				</div>
				
			</div>
		</div>
	</div>

	<div class="col-md-2">
		<div class="row">
			<?php 
			$use=$_SESSION['uname'];
			$fo=mysqli_query($con, "select foto from admin where uname='$use'");
			// echo $fo;
			while($f=mysqli_fetch_array($fo)){
				?>				

				<div class="col-xs-6 col-md-12">
					<a class="thumbnail">
						<img class="img-responsive" src="foto/<?php echo $f['foto'];?>">
					</a>
				</div>
				<?php 
			}
			?>		
		</div>

		<div class="row"></div>
		<ul class="nav nav-pills nav-stacked">
			<li class=<?php if($currentPage =='index'){echo 'active';}?>><a href="index.php"><span class="glyphicon glyphicon-home"></span>  Dashboard</a></li>	
			<!-- <li class=<?php if($currentPage =='transaksi'){echo 'active';}?>><a href="transaksi.php"><span class="glyphicon glyphicon-briefcase"></span>  Transaksi</a></li> -->
			<li class=<?php if($currentPage =='barang'){echo 'active';}?>><a href="barang.php"><span class="glyphicon glyphicon-briefcase"></span>  Data Barang</a></li>
			<li class=<?php if($currentPage =='barang_laku'){echo 'active';}?>><a href="barang_laku.php"><span class="glyphicon glyphicon-briefcase"></span>  Entry Penjualan</a></li>
			<!-- <li class=<?php if($currentPage =='laporan'){echo 'active';}?>><a href="laporan.php"><span class="glyphicon glyphicon-briefcase"></span>  Laporan</a></li>        												 -->
			<li class=<?php if($currentPage =='ganti_foto'){echo 'active';}?>><a href="ganti_foto.php"><span class="glyphicon glyphicon-picture"></span>  Ganti Foto</a></li>
			<!-- <li class=<?php if($currentPage =='ganti_pass'){echo 'active';}?>><a href="ganti_pass.php"><span class="glyphicon glyphicon-lock"></span> Ganti Password</a></li> -->
			<li class=<?php if($currentPage =='logout'){echo 'active';}?>><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>			
		</ul>
	</div>
	<div class="col-md-10">