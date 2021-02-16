<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <meta property="og:image" content="<?= base_url('assets/img/') . $this->website['image']; ?>" />

    <meta property="og:type" content="organization" />
    <meta property="og:title" content="HMP TI UDB" />
    <meta property="og:description" content="Himpunan Mahasiswa TI Universitas Duta Bangsa">
    <meta property="og:url" content="<?= base_url() ?>" />
    <meta property="og:site_name" content="HMP TI UDB" />

    <title>HMP TI UDB - Home Page</title>

    <link rel="canonical" href="<?php echo base_url() ?>">


    <!-- ICON -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/<?php echo $this->website['image'] ?>"/>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome -->
    <link href="<?php echo base_url() ?>assets/fontawesome/css/all.css" rel="stylesheet">
    <!-- Custom css -->
    <link href="<?php echo base_url() ?>assets/widibaka.css?v1" rel="stylesheet">

    <style type="text/css">
      .custom_navbar{
        background-color: <?php echo $this->website['navbar_bg'] ?>;
      }
      .custom_navbar a.nav-link{
        color: <?php echo $this->website['navbar_text'] ?>;
      }
      .custom_navbar .navbar-toggler-icon i{
        color: <?php echo $this->website['navbar_text'] ?>;
      }
      .custom_navbar .search-btn{
        border-color: <?php echo $this->website['navbar_text'] ?>;
        color: <?php echo $this->website['navbar_text'] ?>;
        transition: background-color border-color ease 300ms; 
      }
      .custom_navbar .search-btn:hover{
        border-color: #1D9058;
        background-color: #1D9058;
        color: <?php echo $this->website['navbar_text'] ?>;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/bootstrap5/carousel.css" rel="stylesheet">
  </head>
  <body class="bg-gray-1">
    <header>
      <nav class="navbar navbar-expand-md fixed-top custom_navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img width="45" src="<?php echo base_url() ?>assets/img/<?php echo $this->website['image'] ?>">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="color: <?php echo $this->website['navbar_text'] ?>;">
            <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="<?php echo base_url() ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>p/struktur_organisasi">Struktur Organisasi</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Divisi
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php foreach ($this->all_divisi as $key => $divisi): ?>
                    <li><a class="dropdown-item" href="<?php echo base_url() ?>p/divisi/<?php echo $divisi['id_divisi'] ?>"><?php echo $divisi['nama_divisi'] ?></a></li>
                  <?php endforeach ?>
                  <!-- <li><hr class="dropdown-divider"></li> -->
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tentang Kami
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li></li>
                  <li><a class="dropdown-item" href="<?php echo base_url() ?>p/visi_misi">Visi & Misi</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>login">Login</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li> -->
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Cari event/orang ..." aria-label="Search">
              <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <main class="bg-transparent">