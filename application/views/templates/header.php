<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem Informasi Arsip Surat</title>

    <link rel="icon" href="<?php echo base_url();?>assets/email.png" type="image/x-icon">

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url();?>assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- link css untuk wave effect -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>css/sb-admin.css" rel="stylesheet">
<style type="text/css">
  tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
  
  
</style>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Sistem Informasi Arsip Surat</a>


    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        </a>
        <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="<?php echo base_url('login/logout')?>" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">         
        </a>        
        </li>
        </ul>
  </nav>


  <div id="wrapper">
<!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>arsip">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Arsip Surat Masuk</span>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Kategori Surat Masuk</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header" href="<?php echo base_url(); ?>">List Surat Masuk:</h6>

          <a class="dropdown-item" href="<?php echo base_url(); ?>arsip/surat_edaran">Surat Edaran</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>arsip/surat_pemberitahuan">Surat Pemberitahuan</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>arsip/surat_pengadaan">Surat Pengadaan</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>arsip/surat_pengantar">Surat Pengantar</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>arsip/surat_pengumuman">Surat Pengumuman</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>arsip/surat_permintaan">Surat Permintaan</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>arsip/surat_permohonan">Surat Permohonan</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>arsip/surat_undangan">Surat Undangan</a>
          </div>
          </li>

      <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>arsip_keluar">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Arsip Surat Keluar</span>
              </a>
            </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Kategori Surat Keluar</span>
        </a>

        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header" href="<?php echo base_url(); ?>">List Surat Keluar:</h6>

          <a class="dropdown-item" href="<?php echo base_url(); ?>arsip_keluar/keluar_edaran">Surat Edaran</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>arsip_keluar/keluar_pemberitahuan">Surat Pemberitahuan</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>arsip_keluar/keluar_pengadaan">Surat Pengadaan</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>arsip_keluar/keluar_pengantar">Surat Pengantar</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>arsip_keluar/keluar_pengumuman">Surat Pengumuman</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>arsip_keluar/keluar_permintaan">Surat Permintaan</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>arsip_keluar/keluar_permohonan">Surat Permohonan</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>arsip_keluar/keluar_undangan">Surat Undangan</a>
        </div>
      </li>
      
    </ul>