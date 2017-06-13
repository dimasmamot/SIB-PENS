<?php
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Dashboard</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="fixed-sn mdb-skin">

    <!-- Double navigation -->
    <header>
        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed custom-scrollbar">

            <!-- Header & Logo -->
            <li>
                <div class="logo-wrapper sn-ad-avatar-wrapper">
                    <img src="http://mdbootstrap.com/images/avatars/img%20(9)" class="img-fluid rounded-circle">
                    <div class="rgba-stylish-strong">
                        <p class="user white-text">Email : <br><?php echo $_SESSION["email"]?></p>
                    </div>
                </div>
            </li>

            <!-- Daftar Link -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <?php 
                    if($_SESSION["role"] == 'admin'){ ?>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-table"></i> Administrasi <i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">User</a></li>
                                <li><a href="#" class="waves-effect">Daftar Beasiswa</a></li>
                                <li><a href="#" class="waves-effect">Riwayat Apply</a></li>
                                <li><a href="#" class="waves-effect">Riwayat Apply Beasiswa</a></li>
                                <li><a href="#" class="waves-effect">Riwayat Dokumen</a></li>
                            </ul>
                        </div>
                    </li>
                    <?php } ?>

                    <?php
                    if($_SESSION["role"] == 'admin'){ ?>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-money"></i> Pendonor <i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Daftar Pendonor</a></li>
                                <li><a href="#" class="waves-effect">Pending Request</a></li>
                            </ul>
                        </div>
                    </li>
                    <?php } ?>

                    <?php
                    if($_SESSION["role"] == 'baak'){ ?>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-briefcase"></i> Dokumen <i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Dokumen Pending</a></li>
                                <li><a href="#" class="waves-effect">Dokumen Terlayani</a></li>
                            </ul>
                        </div>
                    </li>
                    <?php } ?>

                    <?php
                    if($_SESSION["role"] == 'pendonors'){ ?>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-users"></i> Pendaftar Beasiswa <i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Beasiswa Aktif</a></li>
                                <li><a href="#" class="waves-effect">Beasiswa Selesai</a></li>
                            </ul>
                        </div>
                    </li>
                    <?php } ?>

                    <?php
                    if($_SESSION["role"] == 'pendonor'){ ?>
                    <li>
                        <a class="waves-effect" id="btnBeasiswaPendonor"><i class="fa fa-mortar-board"></i> Beasiswa </a>
                    </li>
                    <?php } ?>

                    <?php
                    if($_SESSION["role"] == 'admin' || $_SESSION["role"] == 'baak'){ ?>
                    <li>
                        <a class="waves-effect" href="#"><i class="fa fa-bar-chart"></i> Stastik </a>
                    </li>
                    <?php } ?>

                    <?php
                    if($_SESSION["role"] == 'mahasiswa'){ ?>
                    <li>
                        <a class="waves-effect" id="btnListBeasiswaMahasiswa"><i class="fa fa-graduation-cap"></i> Daftar Beasiswa</a>
                    </li>
                    <?php } ?>

                    <?php
                    if($_SESSION["role"] == 'mahasiswas'){ ?>
                    <li>
                        <a class="waves-effect" href="#"><i class="fa fa-file-text"></i> Request Dokumen</a>
                    </li>
                    <?php } ?>

                    <?php
                    if($_SESSION["role"] == 'mahasiswas'){ ?>
                    <li>
                        <a class="waves-effect" href="#"><i class="fa fa-files-o"></i> Daftar Dokumen</a>
                    </li>
                    <?php } ?>

                    <?php
                    if($_SESSION["role"] == 'mahasiswas'){ ?>
                    <li>
                        <a class="waves-effect" href="#"><i class="fa fa-institution"></i> Applied Beasiswa</a>
                    </li>
                    <?php } ?>
                </ul>
            </li>

        </ul>

        <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">
            <div class="float-xs-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>

            <div class="breadcrumb-dn">
                <p>SIB-DASHBOARD</p>
            </div>

            <ul class="nav navbar-nav float-xs-right">
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Pemberitahuan</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Request Dokumen</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-history"></i> <span class="hidden-sm-down">Riwayat Dokumen</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="hidden-sm-down">Profil</span></a>
                    <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item" id="btnLogout">Keluar</a>
                        <a class="dropdown-item" href="#">Akun</a>                  
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <!--Main layout-->
    <main>
        <div class="container-fluid" id="mainContent">

        </div>
    </main>
    <!--/Main layout-->

    <?php if($_SESSION["role"] == 'pendonor'){ ?>
    <div class="fixed-action-btn" style="bottom: 45px; right:24px;">
        <a class="btn-floating btn-large red" id="fixedBtn" data-toggle="modal" data-target="#modalRegister">
            <i class="fa fa-plus"></i>
        </a>
    </div>
    <?php } ?>

    <!--Modal: Register Form-->
    <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Header-->
                <div class="modal-header light-blue darken-3 white-text">
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="title"><i class="fa fa-user-plus"></i> Tambah Beasiswa</h4>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <form action="" id="tambahBeasiswa">
                        <div class="md-form form-sm">
                            <input type="text" id="namaBeasiswa" class="form-control">
                            <label for="namaBeasiswa">Nama Beasiswa</label>
                        </div>

                        <div class="md-form form-sm">
                            <input type="text" id="deadlineBeasiswa" class="form-control">
                            <label for="deadlineBeasiswa">Deadline Beasiswa</label>
                        </div>

                        <div class="md-form form-sm">
                            <input type="text" id="persyaratan" class="form-control">
                            <label for="persyaratan">Persyaratan Dokumen</label>
                        </div>

                        <div class="md-form form-sm">
                            <input type="text" id="kontakEmail" class="form-control">
                            <label for="kontakEmail">Kontak Email</label>
                        </div>

                        <div class="md-form form-sm">
                            <input type="text" id="kontakTelepon" class="form-control">
                            <label for="kontakTelepon">Kontak Telepon</label>
                        </div>

                        <div class="md-form form-sm">
                            <input type="text" id="deskrispiBeasiswa" class="form-control">
                            <label for="deskrispiBeasiswa">Deskripsi Beasiswa</label>
                        </div>

                        <div class="md-form form-sm">
                            <input type="text" id="jenisBeasiswa" class="form-control">
                            <label for="jenisBeasiswa">Jenis Beasiswa</label>
                        </div>

                        <div class="md-form form-sm">
                            <input type="text" id="jurusan" class="form-control">
                            <label for="jurusan">Target Jurusan</label>
                        </div>

                        <div class="md-form form-sm">
                            <input type="text" id="prodi" class="form-control">
                            <label for="prodi">Target Prodi</label>
                        </div>

                        <div class="md-form form-sm">
                            <input type="text" id="semester" class="form-control">
                            <label for="semester">Target Semester</label>
                        </div>

                        <div class="text-center mt-2">
                            <button class="btn btn-info">Tambahkan Beasiswa</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--Modal: Register Form-->

    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        $(".button-collapse").sideNav();
        var el = document.querySelector('.custom-scrollbar');
        Ps.initialize(el);
    </script>

    <script>
        new WOW().init();
    </script>

    <script>
        $(document).ready(function(){
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

            $('#btnBeasiswaPendonor').click(function(){
                var url = 'loadBeasiswaPendonor.php';
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: url,
                    success: function(data){
                        console.log(data);
                        console.log(data.length);
                        console.log(data[0]);
                        $('#mainContent').append("<div class='row'>");
                        for(var i = 0; i<data.length; i++){
                            $('#mainContent').append('<div class="col-lg-4">'+
                                '<div class="card wow fadeIn" data-wow-delay="0.2s">'+
                                '<div class="view overlay hm-white-slight">'+
                                '<img src="http://mdbootstrap.com/img/photos/Horizontal/Nature/4-col/img%20(120).jpg" class="img-fluid" alt="">'+
                                '<a href="#">'+
                                '<div class="mask"></div>'+
                                '</a>'+
                                '</div>'+

                                '<div class="card-block">'+
                                '<h4 class="card-title">'+data[i].NAMA_BEASISWA+'</h4>'+
                                '<p class="card-text">'+data[i].DESKRIPSI_BEASISWA+'</p>'+
                                '<a href="detailbeasiswa.php?nama='+data[i].NAMA_BEASISWA+'&deskripsi='+data[i].DESKRIPSI_BEASISWA+
                                '$deadline='+data[i].DEADLINE_BEASISWA+'$jurusan='+data[i].TARGET_JURUSAN+'$prodi='+data[i].TARGET_PRODI+
                                '$semester='+data[i].TARGET_SEMESTER+'$kontak='+data[i].CONTACT_PERSON_TELEPON+'$status='+data[i].STATUS_BEASISWA+
                                '$persyaratan='+data[i].PERSYARATAN_DOKUMEN+
                                '" class="btn btn-info">Info Selengkapnya</a>'+
                                '</div>'+

                                '<div class="card-data">'+
                                '<ul>'+
                                '<li><i class="fa fa-clock-o"></i> '+data[i].DEADLINE_BEASISWA+' </li>'+
                                '<li><i class="fa fa-user"></i> '+data[i].PENDAFTAR_BEASISWA+'</li>'+
                                '</ul>'+
                                '</div>'+
                                '</div>'+
                                '</div>');
                        }
                        $('#mainContent').append('</div>');
                    },
                    error: function(jqXHR, status, err){
                        alert("Load Beasiswa Pendonor Gagal");
                        console.log("jqXHR : "+jqXHR);
                        console.log("status : "+status);
                        console.log("err : "+err);
                    }
                });
            });

            $("#btnListBeasiswaMahasiswa").click(function(){
                var url = 'loadBeasiswaMahasiswa.php';
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: url,
                    success: function(data){
                        console.log(data);
                        console.log(data.length);
                        console.log(data[0]);
                        $('#mainContent').append("<div class='row'>");
                        for(var i = 0; i<data.length; i++){
                            $('#mainContent').append('<div class="col-lg-4">'+
                                '<div class="card wow fadeIn" data-wow-delay="0.2s">'+
                                '<div class="view overlay hm-white-slight">'+
                                '<img src="http://mdbootstrap.com/img/photos/Horizontal/Nature/4-col/img%20(120).jpg" class="img-fluid" alt="">'+
                                '<a href="#">'+
                                '<div class="mask"></div>'+
                                '</a>'+
                                '</div>'+

                                '<div class="card-block">'+
                                '<h4 class="card-title">'+data[i].NAMA_BEASISWA+'</h4>'+
                                '<p class="card-text">'+data[i].DESKRIPSI_BEASISWA+'</p>'+
                                '<a href="detailbeasiswa.php?nama='+data[i].NAMA_BEASISWA+'&deskripsi='+data[i].DESKRIPSI_BEASISWA+
                                '&deadline='+data[i].DEADLINE_BEASISWA+'&jurusan='+data[i].TARGET_JURUSAN+'&prodi='+data[i].TARGET_PRODI+
                                '&semester='+data[i].TARGET_SEMESTER+'&kontak='+data[i].CONTACT_PERSON_TELEPON+'&status='+data[i].STATUS_BEASISWA+
                                '&persyaratan='+data[i].PERSYARATAN_DOKUMEN+
                                '" class="btn btn-info">Info Selengkapnya</a>'+
                                '</div>'+

                                '<div class="card-data">'+
                                '<ul>'+
                                '<li><i class="fa fa-clock-o"></i> '+data[i].DEADLINE_BEASISWA+' </li>'+
                                '<li><i class="fa fa-user"></i> '+data[i].PENDAFTAR_BEASISWA+' </li>'+
                                '</ul>'+
                                '</div>'+
                                '</div>'+
                                '</div>');
                        }
                        $('#mainContent').append('</div>');
                    },
                    error: function(jqXHR, status, err){
                        alert("Load Beasiswa Pendonor Gagal");
                        console.log("jqXHR : "+jqXHR);
                        console.log("status : "+status);
                        console.log("err : "+err);
                    }
                });
            });

            $("#fixedBtn").click(function(){
                console.log("open");
                $('#modalRegister').modal('toggle');
                $('#modalRegister').on('shown.bs.modal', function(){
                    console.log("open");
                    $('#namaBeasiswa').focus();
                });
            });
        });
    </script>

</body>

</html>
