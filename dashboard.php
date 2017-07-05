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
                    <li>
                        <a class="waves-effect" id="btnDashboard"><i class="fa fa-home"></i> Dashboard</a>
                    </li>

                    <?php 
                    if($_SESSION["role"] == 'admin'){ ?>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-table"></i> Administrasi <i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a class="waves-effect" id="btnTbUser">Daftar User</a></li>
                                <li><a class="waves-effect" id="btnTbPendonor">Daftar Pendonor</a></li>
                                <li><a class="waves-effect" id="btnTbBeasiswa">Daftar Beasiswa</a></li>
                                <li><a class="waves-effect" id="btnTbApplyBeasiswa">Riwayat Apply Beasiswa</a></li>
                                <li><a class="waves-effect" id="btnTbDokumen">Dokumen</a></li>
                                <li><a class="waves-effect" id="btnTbRequestDokumen">Riwayat Request Dokumen</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="waves-effect" href="#"><i class="fa fa-bar-chart"></i> Stastik </a>
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
                    if($_SESSION["role"] == 'pendonor'){ ?>
                    <li>
                        <a class="waves-effect" id="btnBeasiswaPendonor"><i class="fa fa-mortar-board"></i> Beasiswa </a>
                    </li>
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
                    if($_SESSION["role"] == 'mahasiswa'){ ?>
                    <li>
                        <a class="waves-effect" id="btnListBeasiswaMahasiswa"><i class="fa fa-graduation-cap"></i> Daftar Beasiswa</a>
                    </li>
                    <li>
                        <a class="waves-effect" href="#"><i class="fa fa-file-text"></i> Request Dokumen</a>
                    </li>
                    <li>
                        <a class="waves-effect" href="#"><i class="fa fa-files-o"></i> Daftar Dokumen</a>
                    </li>
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
                    <a class="nav-link" id="btnModalTest" data-toggle="modal" data-target="#modalRequestDokumen" data><i class="fa fa-eye"></i> <span class="hidden-sm-down">Test Modal</span></a>
                </li>
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

    <!-- =======================================================================
                            KUMPULAN FLOATING BUTTON
    ======================================================================= -->


    <?php if($_SESSION["role"] == 'pendonor'){ ?>
    <div class="fixed-action-btn" style="bottom: 45px; right:24px;">
        <a class="btn-floating btn-large red" id="fixedBtn" data-toggle="modal" data-target="#modalRegister">
            <i class="fa fa-plus"></i>
        </a>
    </div>
    <?php } ?>

    <!-- ===================================================================
                            KUMPULAN MODAL
    =================================================================== -->

    <!--Modal: Register Beasiswa Form-->
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
    <!--Modal: Register Beasiswa Form-->

    <!-- Modal: Read Data Row User-->
    <div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="modalUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalUserLabel">Detail User ID : </h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">FOTO</div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-3">Nama Lenkap :</div>
                                    <div class="col-md-9" id="contNama">{{NAMANYA}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">Email :</div>
                                    <div class="col-md-9" id="contEmail">{{EMAILNYA}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">Role :</div>
                                    <div class="col-md-9" id="contRole">{{ROLENYA}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">Nomor Identitas :</div>
                                    <div class="col-md-9" id="contNomId">{{NRP/NIP}}</div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">Password (MD5 Hashes) :</div>
                            <div class="col-md-9" id="contPassword">{{PASSWORDNYA}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-1">Salt :</div>
                            <div class="col-md-3" id="contSalt">{{SALTNYA}}</div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2">Tanggal Buat :</div>
                            <div class="col-md-5" id="contTanggalPembuatan">{{TANGGALNYA}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Tanggal Lahir :</div>
                            <div class="col-md-3" id="contTanggalLahir">{{TANGGAL LAHIR}}</div>
                            <div class="col-md-2">Tempat :</div>
                            <div class="col-md-3" id="contTempatLahir">{{TEMPAT LAHIR}}</div>
                            <div class="col-md-1">Usia :</div>
                            <div class="col-md-1" id="contUsia">{{USIA}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Alamat :</div>
                            <div class="col-md-10" id="contAlamat">{{ALAMAT,KOTA,PROVINSI}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">Program Studi :</div>
                            <div class="col-md-3" id="contProdi">{{PRODI}}</div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2">Jurusan :</div>
                            <div class="col-md-3" id="contJurusan">{{JURUSAN}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Kelas :</div>
                            <div class="col-md-3" id="contKelas">{{KELAS, PRODI, PARAREL}}</div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2">Semester : 
                            </div>
                            <div class="col-md-3" id="contSemester">{{SEMESTER}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Tanggal Masuk :</div>
                            <div class="col-md-9" id="contTanggalMasuk">{{TANGGAL MASUK}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Terakhir Login :</div>
                            <div class="col-md-9" id="contTerakhirMasuk">{{TERAKHIR MASUK}}</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal: Read Data Row --> 

    <!-- Read Data Row Pendonor -->
    <div class="modal fade" id="modalPendonor" tabindex="-1" role="dialog" aria-labelledby="modalPendonorLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalPendonorLabel">Detail Pendonor ID : </h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 label"> Nama Pendonor :</div>
                            <div class="col-md-9" id="contNamaPendonor">{{NAMANYA}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Username :</div>
                            <div class="col-md-9" id="contUsernamePendonor">{{USERNAME}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">E-mail :</div>
                            <div class="col-md-9" id="contEmailPendonor">{{EMAIL}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Nomor Telepon :</div>
                            <div class="col-md-9" id="contNomTelpPendonor">{{NOMOR TELEPON}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">Password (MD5 Hashes) :</div>
                            <div class="col-md-9" id="contPasswordPendonor">{{PASSWORDNYA}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-1">Salt :</div>
                            <div class="col-md-3" id="contSaltPendonor">{{SALTNYA}}</div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2">Tanggal Buat :</div>
                            <div class="col-md-5" id="contTanggalPembuatanPendonor">{{TANGGALNYA}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Alamat :</div>
                            <div class="col-md-10" id="contAlamatPendonor">{{ALAMAT}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">Dokumen Legalisir :</div>
                            <div class="col-md-9" id="contDokumenLegalisir">{{LINK DOKUMEN LEGALISIR}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Penanggungjawab : </div>
                            <div class="col-md-9" id="contPenanggungjawab">{{NAMA PENANGGUNGJAWAB}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Status Akun :</div>
                            <div class="col-md-9" id="contStatusPendonor">{{STATUS AKUN}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Terakhir Login :</div>
                            <div class="col-md-9" id="contTerakhirMasukPendonor">{{TERAKHIR MASUK}}</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Read Data Row Pendonor -->

    <div class="modal fade" id="modalBeasiswa" tabindex="-1" role="dialog" aria-labelledby="modalBeasiswaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalBeasiswaLabel">Detail Beasiswa ID : </h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 label"> ID Pendonor :</div>
                            <div class="col-md-9" id="contIDPendonor">{{IDnya}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 label"> Asal Beasiswa :</div>
                            <div class="col-md-9" id="contAsalBeasiswa">{{ASAL BEASISWA}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Nama Beasiswa :</div>
                            <div class="col-md-9" id="contNamaBeasiswa">{{NAMA BEASISWA}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Status :</div>
                            <div class="col-md-9" id="contStatusBeasiswa">{{STATUS BEASISWA}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">CP Telepon :</div>
                            <div class="col-md-9" id="contCPTelpBeasiswa">{{CPTELEPON}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">CP Email :</div>
                            <div class="col-md-9" id="contCPEmailBeasiswa">{{CP Email}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Jenis Beasiswa :</div>
                            <div class="col-md-9" id="contJenisBeasiswa">{{JENIS BEASISWA}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Deskripsi :</div>
                            <div class="col-md-9" id="contDeskripsiBeasiswa">{{DESKRIPSI BEASISWA BEASISWA}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">Target Jurusan :</div>
                            <div class="col-md-9" id="contTargetJurusan">{{TARGET JURUSAN}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Target Prodi :</div>
                            <div class="col-md-9" id="contTargetProdi">{{TARGET PRODI}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Target Semester :</div>
                            <div class="col-md-9" id="contTargetSemester">{{TARGET SEMESTER}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Jumlah Pendaftar :</div>
                            <div class="col-md-9" id="contJumlahPendaftar">{{JUMLAH PENDAFTAR}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Persyaratan Dokumen :</div>
                            <div class="col-md-9" id="contPersyaratanDokumen">{{PERSYARATAN DOKUMEN}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">Link Foto Beasiswa:</div>
                            <div class="col-md-9" id="contLinkFotoBeasiswa">{{LINK FOTO FEATURED}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Link Foto Featured : </div>
                            <div class="col-md-9" id="contLinkFotoFeatured">{{LINK FEATURED}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Tanggal Dibuka :</div>
                            <div class="col-md-9" id="contTanggalDibuka">{{TANGGAL DIBUKA}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Deadline :</div>
                            <div class="col-md-9" id="contDeadlineBeasiswa">{{DEADLINE BEASISWA}}</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDokumen" tabindex="-1" role="dialog" aria-labelledby="modalDokumenLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalDokumenLabel">Dokumen ID : </h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 label"> ID Pemilik :</div>
                            <div class="col-md-9" id="contIDPemilikDokumen">{{IDnya}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 label"> Nama Dokumen :</div>
                            <div class="col-md-9" id="contNamaDokumen">{{NAMA DOKUMEN}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Jenis Dokumen :</div>
                            <div class="col-md-9" id="contJenisDokumen">{{JENIS DOKUMEN}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Link Dokumen :</div>
                            <div class="col-md-9" id="contLinkDokumen">{{LINK DOKUMEN}}</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>    

    <div class="modal fade" id="modalApplyBeasiswa" tabindex="-1" role="dialog" aria-labelledby="modalApplyBeasiswaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalApplyBeasiswaLabel">Riwayat Apply ID : </h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 label">ID Mahasiswa :</div>
                            <div class="col-md-9" id="contIDMahasiswaApply">{{IDnya Mahasiswa}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 label">ID Beasiswa :</div>
                            <div class="col-md-9" id="contIDBeasiswaApply">{{IDnya Beasiswa}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 label">Tanggal Apply :</div>
                            <div class="col-md-9" id="contTanggalApply">{{Tanggal Apply}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Status Penerimaan :</div>
                            <div class="col-md-9" id="contStatusPenerimaan">{{STATUS PENERIMAAN}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Status Dokumen :</div>
                            <div class="col-md-9" id="contStatusDokumen">{{STATUS DOKUMEN}}</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalRequestDokumen" tabindex="-1" role="dialog" aria-labelledby="modalRequestDokumenLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalRequestDokumenLabel">Riwayat Request Dokumen ID : </h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 label">ID Mahasiswa :</div>
                            <div class="col-md-9" id="contIDMahasiswaRequest">{{IDnya Mahasiswa}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 label">ID Dokumen :</div>
                            <div class="col-md-9" id="contIDDokumenRequest">{{IDnya Dokumen}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 label">Nama Dokumen :</div>
                            <div class="col-md-9" id="contNamaDokumenProses">{{Nama Dokumen}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 label">Jenis Dokumen :</div>
                            <div class="col-md-9" id="contJenisDokumenProses">{{Jenis Dokumen}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 label">Tanggal Request :</div>
                            <div class="col-md-9" id="contTanggalRequestDokumen">{{Tanggal Request}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Tanggal Diproses :</div>
                            <div class="col-md-9" id="contTanggalDiproses">{{Tanggal Diproses}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Status Request :</div>
                            <div class="col-md-9" id="contStatusRequest">{{Status Request}}</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Catatan Tambahan :</div>
                            <div class="col-md-9" id="contCatatanTambahan">{{Catatan Tambahan}}</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================================================================================= -->

    <div class="modal fade" id="modalDeleteUser" tabindex="-1" role="dialog" aria-labelledby="modalDeleteUserLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalDeleteUserLabel">Menghapus ID : </h4>
                </div>
                <!--Body-->
                <div class="modal-body">
                    Apakah anda benar-benar ingin menghapus record ini ? &nbsp<span id="idUserDihapus"></span>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-danger" id="btnDeleteUser" data-id="id">Hapus</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <div class="modal fade" id="modalDeletePendonor" tabindex="-1" role="dialog" aria-labelledby="modalDeletePendonorLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalDeletePendonorLabel">Menghapus ID : </h4>
                </div>
                <!--Body-->
                <div class="modal-body">
                    Apakah anda benar-benar ingin menghapus record ini ?&nbsp<span id="idPendonorDihapus"></span>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-danger" id="btnDeletePendonor" data-id="id">Hapus</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <div class="modal fade" id="modalDeleteBeasiswa" tabindex="-1" role="dialog" aria-labelledby="modalDeleteBeasiswaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalDeleteBeasiswaLabel">Menghapus ID : </h4>
                </div>
                <!--Body-->
                <div class="modal-body">
                    Apakah anda benar-benar ingin menghapus record ini ?&nbsp<span id="idBeasiswaDihapus"></span>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-danger" id="btnDeleteBeasiswa" data-id="id">Hapus</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <div class="modal fade" id="modalDeleteDokumen" tabindex="-1" role="dialog" aria-labelledby="modalDeleteDokumenLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalDeleteDokumenLabel">Menghapus ID : </h4>
                </div>
                <!--Body-->
                <div class="modal-body">
                    Apakah anda benar-benar ingin menghapus record ini ?&nbsp<span id="idDokumenDihapus"></span>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-danger" id="btnDeleteDokumen" data-id="id">Hapus</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <div class="modal fade" id="modalDeleteApplyBeasiswa" tabindex="-1" role="dialog" aria-labelledby="modalDeleteApplyBeasiswaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalDeleteApplyBeasiswaLabel">Menghapus ID : </h4>
                </div>
                <!--Body-->
                <div class="modal-body">
                    Apakah anda benar-benar ingin menghapus record ini ?&nbsp<span id="idApplyBeasiswaDihapus"></span>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-danger" id="btnDeleteApply" data-id="id">Hapus</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <div class="modal fade" id="modalDeleteRequestDokumen" tabindex="-1" role="dialog" aria-labelledby="modalDeleteRequestDokumenLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalDeleteRequestDokumenLabel">Menghapus ID : </h4>
                </div>
                <!--Body-->
                <div class="modal-body">
                    Apakah anda benar-benar ingin menghapus record ini ?&nbsp<span id="idRequestDokumenDihapus"></span>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-danger" id="btnDeleteRequestDokumen" data-id="id">Hapus</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <!-- ============================================================================================================================= -->

    <div class="modal fade modal-ext" id="modalCreateUser" tabindex="-1" role="dialog" aria-labelledby="modalCreateUserLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalCreateUserLabel">Create User</h4>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <div class="md-form">
                        <input type="text" id="inputNRP" name="nrp" class="form-control validate required" idField="NRP">
                        <label for="inputNRP" data-error="" data-success="">NRP *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputNIP" name="nip" class="form-control validate required" idField="NIP">
                        <label for="inputNIP" data-error="" data-success="">NIP *</label>
                    </div>
                    <div class="md-form">
                        <input type="email" id="inputEmailUser" name="emailUser" class="form-control validate required" idField="E-mail">
                        <label for="inputEmailUser" data-error="" data-success="">E-mail *</label>
                    </div>
                    <div class="md-form">
                        <input type="password" id="inputPasswordUser" name="passwordUser" class="form-control validate required" idField="Password">
                        <label for="inputPasswordUser" data-error="" data-success="">Password *</label>
                    </div>
                    <div class="md-form">
                        <h5>Role</h5>
                        <fieldset class="form-group">
                            <input name="radioRule" type="radio" class="with-gap" id="radioMahasiswa" value="mahasiswa">
                            <label for="radioMahasiswa">Mahasiswa</label>
                        </fieldset>
                        <fieldset class="form-group">
                            <input name="radioRule" type="radio" class="with-gap" id="radioAdmin" value="admin">
                            <label for="radioAdmin">Admin</label>
                        </fieldset>
                        <fieldset class="form-group">
                            <input name="radioRule" type="radio" class="with-gap" id="radioBaak" value="baak">
                            <label for="radioBaak">BAAK</label>
                        </fieldset>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputNamaLengkapUser" name="namaLengkapUser" class="form-control validate required" idField="Nama Lengkap">
                        <label for="inputNamaLengkapUser" data-error="" data-success="">Nama Lengkap *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputUsiaUser" name="usiaUser" class="form-control validate required" idField="Usia">
                        <label for="inputUsiaUser" data-error="" data-success="">Usia *</label>
                    </div>
                    <div class="md-form">
                        <h5>Jenis Kelamin</h5>
                        <fieldset class="form-group">
                            <input name="radioGender" type="radio" class="with-gap" id="radioPria" value="pria">
                            <label for="radioPria">Pria</label>
                        </fieldset>
                        <fieldset class="form-group">
                            <input name="radioGender" type="radio" class="with-gap" id="radioWanita" value="wanita">
                            <label for="radioWanita">Wanita</label>
                        </fieldset>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputProvinsi" name="provinsi" class="form-control validate required" idField="Provinsi">
                        <label for="inputProvinsi" data-error="" data-success="">Provinsi *</label>
                    </div>
                    <div class="md-form">
                        <textarea type="text" id="inputKota" name="kota" class="md-textarea validate required" idField="Kota"></textarea>
                        <label for="inputKota" data-error="" data-success="">Kota *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputAlamat" name="alamat" class="form-control validate required" idField="Alamat">
                        <label for="inputAlamat" data-error="" data-success="">Alamat *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputKelas" name="kelas" class="form-control validate required" idField="Kelas">
                        <label for="inputKelas" data-error="" data-success="">Kelas *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputProdi" name="prodi" class="form-control validate required" idField="Prodi">
                        <label for="inputProdi" data-error="" data-success="">Prodi *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputJurusan" name="jurusan" class="form-control validate required" idField="Jurusan">
                        <label for="inputJurusan" data-error="" data-success="">Jurusan *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputPararel" name="pararel" class="form-control validate required" idField="Pararel">
                        <label for="inputPararel" data-error="" data-success="">Pararel *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputSemester" name="semester" class="form-control validate required" idField="Semester">
                        <label for="inputSemester" data-error="" data-success="">Semester *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputTempatLahir" name="tempatLahir" class="form-control validate required" idField="Tempat Lahir">
                        <label for="inputTempatLahir" data-error="" data-success="">Tempat Lahir *</label>
                    </div>
                    <div class="md-form">
                        <input placeholder="Pilih Tanggal" type="text" id="datePickerTanggalLahir" class="form-control datepicker">
                        <label for="datePickerTanggalLahir">Tanggal Lahir</label>
                    </div>                    
                    <div class="md-form">
                        <input placeholder="Pilih Tanggal" type="text" id="datePickerTanggalMasuk" class="form-control datepicker">
                        <label for="datePickerTanggalMasuk">Tanggal Masuk</label>
                    </div>
                    <div class="md-form">
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm">
                                <span>Pilih Foto</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="pathFoto" placeholder="Upload Foto">
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="text-xs-center">
                        <button type="submit" class="btn btn-primary waves-effect waves-light submit">Create</button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <div class="modal fade modal-ext" id="modalCreatePendonor" tabindex="-1" role="dialog" aria-labelledby="modalCreatePendonorLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalCreatePendonorLabel">Create Pendonor</h4>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <div class="md-form">
                        <input type="text" id="inputUsername" name="usernamePendonor" class="form-control validate required" idField="Username">
                        <label for="inputUsername" data-error="" data-success="">Username *</label>
                    </div>
                    <div class="md-form">
                        <input type="email" id="inputEmailPendonor" name="emailPendonor" class="form-control validate required" idField="Email Pendonor">
                        <label for="inputEmailPendonor" data-error="" data-success="">E-mail *</label>
                    </div>
                    <div class="md-form">
                        <input type="password" id="inputPasswordPendonor" name="passwordPendonor" class="form-control validate required" idField="Password Pendonor">
                        <label for="inputPasswordPendonor" data-error="" data-success="">Password *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputNamaPendonor" name="namaPendonor" class="form-control validate required" idField="Nama Pendonor">
                        <label for="inputNamaPendonor" data-error="" data-success="">Nama Pendonor *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputNomorTelepon" name="nomorTelepon" class="form-control validate required" idField="Nomor Telepon">
                        <label for="inputNomorTelepon" data-error="" data-success="">Nomor Telepon *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputAlamatPendonor" name="alamatPendonor" class="form-control validate required" idField="Alamat Pendonor">
                        <label for="inputAlamatPendonor" data-error="" data-success="">Alamat *</label>
                    </div>
                    <div class="md-form">
                        <h5>Status</h5>
                        <fieldset class="form-group">
                            <input name="radioStatusPendonor" type="radio" class="with-gap" id="radioUnverified" value="unverified">
                            <label for="radioUnverified">Unverified</label>
                        </fieldset>
                        <fieldset class="form-group">
                            <input name="radioStatusPendonor" type="radio" class="with-gap" id="radioVerified" value="verified">
                            <label for="radioVerified">Admin</label>
                        </fieldset>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputPJPendonor" name="PJPendonor" class="form-control validate required" idField="PJ Pendonor">
                        <label for="inputPJPendonor" data-error="" data-success="">Nama Penanggungjawab *</label>
                    </div>
                    <div class="md-form">
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm">
                                <span>Pilih Dokumen Legalisir</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="pathFileLegalisir" placeholder="Upload Dokumen Legalisir">
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="text-xs-center">
                        <button type="submit" class="btn btn-primary waves-effect waves-light submit">Create</button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <div class="modal fade modal-ext" id="modalCreateBeasiswa" tabindex="-1" role="dialog" aria-labelledby="modalCreateBeasiswaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalCreateBeasiswaLabel">Create Beasiswa</h4>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <div class="md-form">
                        <select class="mdb-select" name="idPendonor" id="selectIdPendonor">
                            <option value="" disabled selected>Pilih ID Pendonor</option>
                            <option value="1">Pendonor ID 1</option>
                            <option value="2">Pendonor ID 2</option>
                        </select>
                        <label for="selectIdPendonor">ID Pendonor</label>
                    </div>
                    <div class="md-form"> <!-- Ini sebagai ganti ID nya -->
                        <input type="text" id="inputUsernamePendonor" name="usernamePendonor" class="form-control validate required" idField="Username Pendonor">
                        <label for="inputUsernamePendonor" data-error="" data-success="">Username Pendonor *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputNamaBeasiswa" name="namaBeasiswa" class="form-control validate required" idField="Nama Beasiswa">
                        <label for="inputNamaBeasiswa" data-error="" data-success="">Nama Beasiswa *</label>
                    </div>
                    <div class="md-form">
                        <input placeholder="Pilih Tanggal" type="text" id="datePickerTanggalDibuka" class="form-control datepicker">
                        <label for="datePickerTanggalDibuka">Tanggal Beasiswa Dibuka</label>
                    </div>
                    <div class="md-form">
                        <input placeholder="Pilih Tanggal" type="text" id="datePickerDeadlineBeasiswa" class="form-control datepicker">
                        <label for="datePickerDeadlineBeasiswa">Deadline Beasiswa</label>
                    </div>
                    <div class="md-form">
                        <h5>Status Beasiswa</h5>
                        <fieldset class="form-group">
                            <input name="radioStatusBeasiswa" type="radio" class="with-gap" id="radioSelesai" value="Selesai">
                            <label for="radioSelesai">Selesai</label>
                        </fieldset>
                        <fieldset class="form-group">
                            <input name="radioStatusBeasiswa" type="radio" class="with-gap" id="radioAktif" value="Aktif">
                            <label for="radioAktif">Aktif</label>
                        </fieldset>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputJmlPendaftar" name="jmlPendaftar" class="form-control validate required" idField="Jumlah Pendaftar">
                        <label for="inputPJPendonor" data-error="" data-success="">Jumlah Pendaftar *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputPersyaratanDokumen" name="persyaratanDokumen" class="form-control validate required" idField="Persyaratan Dokumen">
                        <label for="inputPersyaratanDokumen" data-error="" data-success="">Persyaratan Dokumen (Pisahkan dengan koma) *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputCPEmail" name="CPEmail" class="form-control validate required" idField="CP Email">
                        <label for="inputCPEmail" data-error="" data-success="">Contact Person E-mail *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputCPTelepon" name="CPTelepon" class="form-control validate required" idField="CP Telepon">
                        <label for="inputCPTelepon" data-error="" data-success="">Contact Person Telepon *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputAsalBeasiswa" name="asalBeasiswa" class="form-control validate required" idField="Asal Beasiswa">
                        <label for="inputAsalBeasiswa" data-error="" data-success="">Asal Beasiswa *</label>
                    </div>
                    <div class="md-form">
                        <textarea type="text" id="inputDeskripsi" class="md-textarea" name="deskripsiBeasiswa"></textarea>
                        <label for="inputDeskripsi">Deskripsi Beasiswa</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputJenisBeasiswa" name="jenisBeasiswa" class="form-control validate required" idField="Jenis Beasiswa">
                        <label for="inputJenisBeasiswa" data-error="" data-success="">Jenis Beasiswa *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputTargetJurusan" name="targetJurusan" class="form-control validate required" idField="Target Jurusan">
                        <label for="inputTargetJurusan" data-error="" data-success="">Target Jurusan *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputTargetProdi" name="targetProdi" class="form-control validate required" idField="Target Prodi">
                        <label for="inputTargetProdi" data-error="" data-success="">Target Prodi *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputTargetSemester" name="targetSemester" class="form-control validate required" idField="Target Semester">
                        <label for="inputTargetSemester" data-error="" data-success="">Target Semester *</label>
                    </div>
                    <div class="md-form">
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm">
                                <span>Pilih Foto Beasiswa</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="pathFotoBeasiswa" placeholder="Upload Foto Beasiswa">
                            </div>
                        </div>
                    </div>
                    <div class="md-form">
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm">
                                <span>Pilih Foto Featured</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="pathFotoFeatured" placeholder="Upload Foto Featured">
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="text-xs-center">
                        <button type="submit" class="btn btn-primary waves-effect waves-light submit">Create</button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <div class="modal fade modal-ext" id="modalCreateDokumen" tabindex="-1" role="dialog" aria-labelledby="modalCreateDokumenLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalCreateDokumenLabel">Create Dokumen</h4>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <div class="md-form">
                        <select class="mdb-select" name="idUploader" id="selectIdUploader">
                            <option value="" disabled selected>Pilih ID Uploader</option>
                            <option value="1">Uploader ID 1</option>
                            <option value="2">Uploader ID 2</option>
                        </select>
                        <label for="selectIdUploader">ID Uploader</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputEmailUploader" name="emailUploader" class="form-control validate required" idField="Email Pemilik Dokumen">
                        <label for="inputEmailUploader" data-error="" data-success="">Email Uploader *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputNamaDokumen" name="namaDokumen" class="form-control validate required" idField="Nama Dokumen">
                        <label for="inputNamaDokumen" data-error="" data-success="">Nama Dokumen *</label>
                    </div>
                    <div class="md-form">
                        <input type="text" id="inputJenisDokumen" name="jenisDokumen" class="form-control validate required" idField="Jenis Dokumen">
                        <label for="inputJenisDokumen" data-error="" data-success="">Jenis Dokumen *</label>
                    </div>
                    <div class="md-form">
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm">
                                <span>Pilih File Dokumen</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="pathDokumen" placeholder="Upload Dokumen">
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="text-xs-center">
                        <button type="submit" class="btn btn-primary waves-effect waves-light submit">Create</button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <div class="modal fade modal-ext" id="modalCreateApply" tabindex="-1" role="dialog" aria-labelledby="modalCreateApplyLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalCreateApplyLabel">Create Apply Beasiswa</h4>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <div class="md-form">
                        <select class="mdb-select" name="idUserApply" id="selectIdUserApply">
                            <option value="" disabled selected>Pilih ID USer</option>
                            <option value="1">User ID 1</option>
                            <option value="2">User ID 2</option>
                        </select>
                        <label for="selectIdUserApply">ID User Apply</label>
                    </div>
                    <div class="md-form">
                        <select class="mdb-select" name="idBeasiswaApply" id="selectIdBeasiswaApply">
                            <option value="" disabled selected>Pilih ID Beasiswa</option>
                            <option value="1">Beasiswa ID 1</option>
                            <option value="2">Beasiswa ID 2</option>
                        </select>
                        <label for="selectIdUploader">ID Beasiswa</label>
                    </div>
                    <div class="md-form">
                        <input placeholder="Pilih Tanggal" type="text" id="datePickerTanggalApply" class="form-control datepicker">
                        <label for="datePickerTanggalApply">Tanggal Apply Beasiswa</label>
                    </div>
                    <div class="md-form">
                        <h5>Status Penerimaan</h5>
                        <fieldset class="form-group">
                            <input name="radioStatusPenerimaan" type="radio" class="with-gap" id="radioDiterima" value="diterima">
                            <label for="radioDiterima">Diterima</label>
                        </fieldset>
                        <fieldset class="form-group">
                            <input name="radioStatusPenerimaan" type="radio" class="with-gap" id="radioTidakDiterima" value="tidak diterima">
                            <label for="radioAktif">Tidak Diterima</label>
                        </fieldset>
                        <fieldset class="form-group">
                            <input name="radioStatusPenerimaan" type="radio" class="with-gap" id="radioSeleksi" value="seleksi">
                            <label for="radioSeleksi">Seleksi</label>
                        </fieldset>
                    </div>
                    <div class="md-form">
                        <h5>Status Dokumen</h5>
                        <fieldset class="form-group">
                            <input name="radioStatusDokumen" type="radio" class="with-gap" id="radioDokumenVerified" value="sudah diverifikasi">
                            <label for="radioDokumenVerified">Sudah Diverifikasi</label>
                        </fieldset>
                        <fieldset class="form-group">
                            <input name="radioStatusDokumen" type="radio" class="with-gap" id="radioDokumenUnverified" value="belum diverifikasi">
                            <label for="radioDokumenUnverified">Belum Diverifikasi</label>
                        </fieldset>
                    </div>
                    <br><br>
                    <div class="text-xs-center">
                        <button type="submit" class="btn btn-primary waves-effect waves-light submit">Create</button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <div class="modal fade modal-ext" id="modalCreateRequest" tabindex="-1" role="dialog" aria-labelledby="modalCreateRequestLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalCreateRequestLabel">Create Request Dokumen</h4>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <div class="md-form">
                        <select class="mdb-select" name="idUserRequest" id="selectIdUserRequest">
                            <option value="" disabled selected>Pilih ID User</option>
                            <option value="1">User ID 1</option>
                            <option value="2">User ID 2</option>
                        </select>
                        <label for="selectIdUserRequest">ID User Request</label>
                    </div>
                    <div class="md-form">
                        <select class="mdb-select" name="idDokumenProses" id="selectIdDokumenProses">
                            <option value="" disabled selected>Pilih ID Dokumen Proses</option>
                            <option value="1">Dokumen Proses ID 1</option>
                            <option value="2">Dokumen Proses ID 2</option>
                        </select>
                        <label for="selectIdDokumenProses">ID Dokumen Proses</label>
                    </div>
                    <div class="md-form">
                        <input placeholder="Pilih Tanggal Request Dokumen" type="text" id="datePickerTanggalRequest" class="form-control datepicker">
                        <label for="datePickerTanggalRequest">Tanggal Request Dokumen</label>
                    </div>
                    <div class="md-form">
                        <input placeholder="Pilih Tanggal Request Dipenuhi" type="text" id="datePickerTanggalRequestDipenuhi" class="form-control datepicker">
                        <label for="datePickerTanggalRequestDipenuhi">Tanggal Request Dipenuhi</label>
                    </div>
                    <div class="md-form">
                        <h5>Status Request Dokumen</h5>
                        <fieldset class="form-group">
                            <input name="radioStatusRequestDokumen" type="radio" class="with-gap" id="radioSelesai" value="selesai">
                            <label for="radioSelesai">Selesai</label>
                        </fieldset>
                        <fieldset class="form-group">
                            <input name="radioStatusRequestDokumen" type="radio" class="with-gap" id="radioPending" value="pending">
                            <label for="radioPending">Pending</label>
                        </fieldset>
                        <fieldset class="form-group">
                            <input name="radioStatusRequestDokumen" type="radio" class="with-gap" id="radioProses" value="proses">
                            <label for="radioProses">Proses</label>
                        </fieldset>
                    </div>
                    <div class="md-form">
                        <textarea type="text" id="inputCatatanTambahan" class="md-textarea" name="catatanTambahan"></textarea>
                        <label for="inputCatatanTambahan">Catatan Tambahan</label>
                    </div>
                    
                    <br><br>
                    <div class="text-xs-center">
                        <button type="submit" class="btn btn-primary waves-effect waves-light submit">Create</button>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <!-- ===================================================================
                            KUMPULAN MODAL
    =================================================================== -->

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

    <script type="text/javascript" src="js/functionCRUD.js"></script>

    <script>
        $(document).ready(function(){
            dashboard();
            $('.datepicker').pickadate();
            $('.mdb-select').material_select();            

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
                        $('#mainContent').empty();
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
                        $('#mainContent').empty();
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
