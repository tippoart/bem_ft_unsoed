<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM FT UNSOED</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Poppins', sans-serif;
      }
      .nav-link {
          color: #2A0E6A;
          font-weight: normal;
          transition: font-weight 0.3s ease;
      }

      .nav-link.active {
          font-weight: bold;
      }

      @media (max-width: 768px) {
            .navbar {
                display: none !important;
            }
        }
    </style>
</head>
<body>
<?php 
  $current_page = $this->uri->segment(1);
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid" style="padding-left: 50px; padding-right: 50px;">
    <a class="navbar-brand" href="#">
      <img src="<?php echo base_url('assets/LOGOatas.png'); ?>" alt="Logo" style="width: 150px;">
    </a>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto d-flex gap-3">
        <li class="nav-item">
          <a class="nav-link animate__animated <?php echo ($current_page == 'home' || $current_page == '') ? 'active' : ''; ?>" href="<?php echo base_url('home'); ?>" onmouseover="this.classList.add('animate__pulse')" onmouseout="this.classList.remove('animate__pulse')">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link animate__animated <?php echo ($current_page == 'kegiatan') ? 'active' : ''; ?>" href="<?php echo base_url('kegiatan'); ?>" onmouseover="this.classList.add('animate__pulse')" onmouseout="this.classList.remove('animate__pulse')">Kegiatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link animate__animated <?php echo ($current_page == 'majalah') ? 'active' : ''; ?>" href="<?php echo base_url('majalah'); ?>" onmouseover="this.classList.add('animate__pulse')" onmouseout="this.classList.remove('animate__pulse')">Majalah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link animate__animated <?php echo ($current_page == 'saran') ? 'active' : ''; ?>" href="<?php echo base_url('saran'); ?>" onmouseover="this.classList.add('animate__pulse')" onmouseout="this.classList.remove('animate__pulse')">Saran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link animate__animated <?php echo ($current_page == 'profil') ? 'active' : ''; ?>" href="<?php echo base_url('profil'); ?>" onmouseover="this.classList.add('animate__pulse')" onmouseout="this.classList.remove('animate__pulse')">Profil</a>
        </li>
      </ul>
      <a style="padding: 5px 15px; width: 100px; color: #FFFFFF; background-color: red; border-radius: 10px;" class="nav-link text-center animate__animated" href="<?php echo base_url('logout'); ?>" onmouseover="this.classList.add('animate__pulse')" onmouseout="this.classList.remove('animate__pulse')">Logout</a>
    </div>
  </div>
</nav>
