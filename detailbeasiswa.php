<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Detail Beasiswa</title>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">
		<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseContent">
			<i class="fa fa-bars"></i>
		</button>

		<div class="container">
			<!-- Konten yang di collapse -->
			<div class="collapse navbar-toggleable-xs" id="collapseContent">
				<a class="navbar-brand" href="#">
					<strong>SIB PENS</strong>
				</a>

				<ul class="nav navbar-nav smooth-scroll">
					<li class="nav-item active">
						<a class="nav-link" id="btnHome">Beranda <span class="sr-only">(aktif)</span></a>
					</li>
					<?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {?>
					<li class="nav-item">
						<a class="nav-link" id="btnDashboard">Dashboard</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="btnLogout">Keluar</a>
					</li>
					<?php } else {?>
					<li class="nav-item">
						<a class="nav-link" data-toggle="modal" data-target="#modalLogin">Masuk</a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</nav>
	<!--Navbar-->

	<!-- Konten badan -->
	
	<!-- Featured Image -->
	<div id="featuredImage" class="parallax-section">
		<div class="parallax-layer parallax-layer-base">
			<div class="full-bg-img flex-center">
				<ul>
					<li>
						<h1 class="h1-responsive wow fadeInDown" data-wow-delay="0.2s"><?php echo $_GET['nama']?></h1>							
					</li>
					<li>
						<p class="wow fadeIndDown" data-wow-delay="0.2s">
							Sub text kosong untuk menggantikan sub judul dari detail beasiswa
						</p>
					</li>
				</ul>
			</div>
		</div>

		<!-- Background parallax -->
		<div class="parallax-layer parallax-layer-back">

		</div>
	</div>

	<!-- Konten Detail Beasiswa -->
	<div class="container hm-black-strong" id="kontenDetail">
		<div class="container text-center pt-1 mb-3">
			<div class="row">
				<div class="col-md-12 text-center"> 
					<h1 class="mt-3 mb-3 h1-responsive">Detail Beasiswa</h1>
					<p><?php echo $_GET['deskripsi']?></p>
					<h5 class="mt-3 mb-3 h5-responsive">Deadline Beasiswa : <?php echo $_GET['deadline']?></h5>
					<h5 class="mt-3 mb-3 h5-responsive">Batasan Jurusan : <?php echo $_GET['jurusan']?></h5>
					<h5 class="mt-3 mb-3 h5-responsive">Batasan Prodi : <?php echo $_GET['prodi']?></h5>
					<h5 class="mt-3 mb-3 h5-responsive">Minimal Semester : <?php echo $_GET['semester']?></h5>
					<h5 class="mt-3 mb-3 h5-responsive">Contact Person : <?php echo $_GET['kontak']?></h5>
					<h5 class="mt-3 mb-3 h5-responsive">Status Beasiswa : <?php echo $_GET['status']?></h5>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-center">
					<h1 class="mt-3 mb-3 h1-responsive">Langkah - Langkah Apply #1</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum tempore laboriosam autem ratione adipisci dignissimos praesentium qui, repudiandae inventore, unde, officia at quam explicabo eveniet deserunt necessitatibus enim. Doloribus,
						inventore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore accusamus perspiciatis debitis quia porro aliquid magnam illum consequatur quaerat culpa in voluptates, adipisci assumenda consectetur quibusdam consequuntur
						officia harum earum.
					</p>
				</div>
				<div class="col-md-6 text-center">
					<h1 class="mt-3 mb-3 h1-responsive">Catatan Tambahan</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum tempore laboriosam autem ratione adipisci dignissimos praesentium qui, repudiandae inventore, unde, officia at quam explicabo eveniet deserunt necessitatibus enim. Doloribus,
						inventore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore accusamus perspiciatis debitis quia porro aliquid magnam illum consequatur quaerat culpa in voluptates, adipisci assumenda consectetur quibusdam consequuntur
						officia harum earum.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="streak streak-lg streak-photo" style="background-image:url('https://mdbootstrap.com/img/Photos/Horizontal/Things/full%20page/img%20(6).jpg')">
		<div class="flex-center white-text pattern-1">
			<ul>
				<li><h2 class="h2-responsive wow fadeIn"><i class="fa fa-quote-left" aria-hidden="true"></i> The people who are crazy enough to think they can change the world are the ones who do. <i class="fa fa-quote-right" aria-hidden="true"></i></h2></li>
				<li><h5 class="text-center font-italic wow fadeIn" data-wow-delay="0.2s">~ Steve Jobs</h5></li>
			</ul>
		</div>
	</div>

	<div id="kontenDetail2">
		<div class="container text-center pt-1 mb-3">
			<div class="row">
				<div class="col-md-12 text-center"> 
					<h1 class="mt-3 mb-3 h1-responsive">Persyaratan Dokumen</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum tempore laboriosam autem ratione adipisci dignissimos pr : 
					</p>
					<ul>
						<li><i class="fa fa-files-o"></i> <?php echo $_GET['persyaratan']?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- SCRIPTS -->

	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/tether.min.js"></script>

	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>

	<script>
		new WOW().init();
	</script>

	<script>
		$(document).ready(function(){
			$("#btnDashboard").click(function(){
				$(location).attr('href',"dashboard.php");
			});

			$('#btnLogout').click(function(){
                var url = 'destroy.php';
                $.ajax({
                    type: "POST",
                    url: url,
                    success: function(){
                        $(location).attr('href',"index.php");
                    },
                    error: function(jqXHR, status, err){
                        alert("Login gagal");
                        console.log("jqXHR : "+jqXHR);
                        console.log("status : "+status);
                        console.log("err : "+err);
                    }
                });
            });

            $("#btnHome").click(function(){
				$(location).attr('href',"index.php");
			});
		});
	</script>
</body>
</html>