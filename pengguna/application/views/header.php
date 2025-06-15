<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>BEM FT UNSOED</title>



  <!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

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



    .dropdown-menu {

      display: none;

      opacity: 0;

      transform: translateY(-10px);

      transition: opacity 0.3s ease, transform 0.3s ease;

    }



    .dropdown.show .dropdown-menu {

      display: block;

      opacity: 1;

      transform: translateY(0);

    }



    .nav-mobile {

      display: none;

    }



    @media screen and (max-width: 768px) {

      .nav-hidden {

        display: none;

      }



      .nav-mobile {

        display: block;

        background-color: #FFC106;

        padding: 0.5rem;

        border-radius: 10px;

        text-decoration: none;

        color: #2A0E6A;

        font-size: 12px;



      }



      .navbar-toggler {

        display: none;

      }



      .nav-hubungi-faq{

        position: relative;

        left: 2%;

      }

    }

  </style>



</head>



<body>

  <?php

  $current_page = $this->uri->segment(1);

  ?>



  <nav class="navbar navbar-expand-lg bg-body-tertiary">

    <div class="container">

      <a class="navbar-brand" href="#">

        <img src="<?php echo base_url('assets/LOGOatas.png'); ?>" alt="Logo" style="width: 150px;">

      </a>



      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">

        <span class="navbar-toggler-icon"></span>

      </button>



      <a href="<?php echo base_url('Layanan'); ?>" class="nav-hubungi-faq nav-mobile">FAQ</a>

      <a href="<?php echo base_url('Hubungi'); ?>" class="nav-hubungi-kami nav-mobile">Hubungi Kami</a>



      <div class="collapse navbar-collapse" id="navbarSupportedContent">





        </ul>

        <ul class="navbar-nav mx-auto nav-hidden">

          <li class="nav-item">

            <a class="nav-link <?php echo ($current_page == 'beranda' || $current_page == '') ? 'active' : ''; ?>" href="<?php echo base_url('beranda'); ?>">Beranda</a>

          </li>









          <!-- Dropdown Profil -->

          <li class="nav-item dropdown">

            <a class="nav-link menudropdown <?php echo ($current_page == 'Profil') ? 'active' : ''; ?> " href="#" id="profilDropdown">

              Profil <i class="bi bi-chevron-down icon-rotate"></i>

            </a>

            <ul class="dropdown-menu">



              <li><a class="dropdown-item nav-link" href="<?php echo base_url('Profil/Geloracipta'); ?>">Gelora Cipta</a></li>

              <li><a class="dropdown-item nav-link" href="<?php echo base_url('Profil'); ?>">Profil Kabinet</a></li>

            </ul>

          </li>



          <li class="nav-item">

            <a class="nav-link <?php echo ($current_page == 'kegiatan') ? 'active' : ''; ?>" href="<?php echo base_url('kegiatan'); ?>">Kegiatan</a>

          </li>





          <li class="nav-item dropdown">

            <a class="nav-link menudropdown <?php echo ($current_page == 'Media') ? 'active' : ''; ?> " href="#" id="profilDropdown">

              Media <i class="bi bi-chevron-down icon-rotate"></i>

            </a>

            <ul class="dropdown-menu">



              <li><a class="dropdown-item nav-link" href="<?php echo base_url('Media'); ?>">E-MAGZ 2024</a></li>

              <li><a class="dropdown-item nav-link" href="<?php echo base_url('Media/KajianTeknik'); ?>">Kajian Teknik</a></li>

            </ul>

          </li>



          <li class="nav-item">

            <a class="nav-link <?php echo ($current_page == 'Layanan') ? 'active' : ''; ?>" href="<?php echo base_url('Layanan'); ?>">Layanan</a>

          </li>

          <li class="nav-item">

            <a class="nav-link <?php echo ($current_page == 'Hubungi') ? 'active' : ''; ?>" href="<?php echo base_url('Hubungi'); ?>">Hubungi Kami</a>

          </li>

        </ul>

      </div>

    </div>

  </nav>



  



  <!-- Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>





  <script>

    document.addEventListener("DOMContentLoaded", function() {

      let dropdowns = document.querySelectorAll(".menudropdown");



      dropdowns.forEach(function(dropdown) {

        let icon = dropdown.querySelector(".icon-rotate");



        dropdown.addEventListener("click", function(event) {

          event.preventDefault();

          event.stopPropagation();



          let isOpen = dropdown.parentElement.classList.contains("show");



          // Tutup semua dropdown lainnya

          document.querySelectorAll(".dropdown").forEach(function(el) {

            el.classList.remove("show");

            let otherIcon = el.querySelector(".icon-rotate");

            if (otherIcon) {

              otherIcon.style.transform = "rotate(0deg)";

            }

          });



          // Toggle dropdown yang diklik

          dropdown.parentElement.classList.toggle("show", !isOpen);



          // Putar ikon jika dropdown dibuka

          if (!isOpen) {

            icon.style.transform = "rotate(180deg)";

          } else {

            icon.style.transform = "rotate(0deg)";

          }

        });

      });



      // Tutup dropdown saat klik di luar

      document.addEventListener("click", function(event) {

        dropdowns.forEach(function(dropdown) {

          if (!dropdown.parentElement.contains(event.target)) {

            dropdown.parentElement.classList.remove("show");

            let icon = dropdown.querySelector(".icon-rotate");

            if (icon) {

              icon.style.transform = "rotate(0deg)";

            }

          }

        });

      });

    });

  </script>