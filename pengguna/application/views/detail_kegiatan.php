<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Kegiatan</title>

    <style>

        body {

            font-family: 'Poppins', sans-serif;

        }



        .gambar {

            width: 100%;

            height: 500px;

            background-image: url('<?php echo base_url("assets/KABINET.jpg"); ?>');

            background-size: cover;

            background-position: center;

            background-repeat: no-repeat;

        }

        .transparan {

            background-color: rgba(82, 27, 208, 0.5); 

            padding: 100px 0;

        }

        .radius {

	background-color: white;

        border-top-left-radius: 2rem;

        border-top-right-radius: 2rem;

        margin-top: -200px;

        }



        .hidden-intro {

            opacity: 0;

            transform: translateY(50px);

            transition: opacity 0.5s ease-out, transform 0.5s ease-out;

            font-size: 80px;

            color: white;

        }



        .show-intro {

            opacity: 1;

            transform: translateY(0);

        }



        .hidden-kegiatan {

            opacity: 0;

            transform: translateY(50px);

            transition: opacity 0.5s ease-out, transform 0.5s ease-out;

        }



        .show-kegiatan {

            opacity: 1;

            transform: translateY(0);

        }



        .container {

            padding-top: 20px;

        }



        @media (max-width: 768px) {

            .hidden-intro {

                font-size: 60px;

            }

            .transparan {

                background-color: rgba(82, 27, 208, 0.5); 

                padding: 80px 0;

            }

        }

        

    </style>

</head>

<body>

    <div class="gambar">

        <div class="transparan text-center" style="">

            <p class="hidden-intro"><strong>BEM FT UNSOED</strong></p>

        </div>

    </div>



    <div class="radius">

        <div class="container">

            <?php if ($kegiatan): ?>

                <img class="hidden-kegiatan" src="<?php echo $this->config->item("url_kegiatan").$kegiatan["foto_kegiatan"] ?>" alt="" style="width: 100%; border-radius: 15px;">

                <p class="my-3 hidden-kegiatan"><strong><?php echo $kegiatan['judul_kegiatan']; ?></strong></p>

                <p class="hidden-kegiatan"><?php echo $kegiatan['deskripsi_kegiatan']; ?></p>

            <?php else: ?>

                <p class="hidden-kegiatan" style="text-align: center; color: red;">Data kegiatan tidak ditemukan.</p>

            <?php endif; ?>

        </div>

    </div>



    <script>

        document.addEventListener("DOMContentLoaded", function () {

            const hiddenKegiatan = document.querySelectorAll(".hidden-kegiatan");



            function checkVisibility() {

                hiddenKegiatan.forEach((element) => {

                    const rect = element.getBoundingClientRect();

                    const windowHeight = window.innerHeight || document.documentElement.clientHeight;



                    if (rect.top <= windowHeight * 0.75) {

                        element.classList.add("animate__animated", "animate__fadeInUp", "show-kegiatan");

                    }

                });

            }



            window.addEventListener("scroll", checkVisibility);

            checkVisibility();

        });

    </script>



    <script>

        document.addEventListener("DOMContentLoaded", function () {

            const hiddenIntro = document.querySelectorAll(".hidden-intro");



            function checkVisibility() {

                hiddenIntro.forEach((element) => {

                    const rect = element.getBoundingClientRect();

                    const windowHeight = window.innerHeight || document.documentElement.clientHeight;



                    if (rect.top <= windowHeight * 0.75) {

                        element.classList.add("animate__animated", "animate__slideInUp", "show-intro");

                    }

                });

            }



            window.addEventListener("scroll", checkVisibility);

            checkVisibility();

        });

    </script>



</body>

</html>