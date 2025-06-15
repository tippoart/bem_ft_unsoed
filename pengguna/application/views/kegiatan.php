<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    .gambar {
        width: 100%;
        height: 500px;
        background-image: url('assets/KABINET.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .transparan {
        background-color: rgba(82, 27, 208, 0.5);
        padding: 100px 0;
        height: 100%;
    }
    .radius {
        background-color: white;
        border-top-left-radius: 2rem;
        border-top-right-radius: 2rem;
        padding: 3rem;
    }
    .parent {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, 1fr);
        gap: 30px;
    }
    .hidden-intro {
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.5s ease-out, transform 0.5s ease-out;
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
    .img {
        width: 100%;
        border-radius: 15px;
    }
    .p-kegiatan{
        font-size: 80px;
    }
    @media screen and (max-width: 768px) {
        .img {
            width: 100%;
            border-radius: 5px;
        }
        .gambar{
            height: 400px;
            background-size: 180%;
            background-position-y: -4rem;
        }
        .p-kegiatan{
            font-size: 50px;
        }
        .radius{
            padding: 1.5rem;
        }
        .baca-selengkap{
            font-size: 10px;
        }
    }
</style>

    <div class="gambar">
        <div class="transparan text-center" >
            <p class="hidden-intro text-white p-kegiatan"><strong>KEGIATAN</strong></p>
        </div>
    </div>

    <div class="radius" style="margin-top: -180px;">
        <div class="container">
            <div class="parent">
                <?php foreach ($kegiatan as $v): ?>
                    <div class="div1 hidden-kegiatan">
                        <img class="img" src="<?php echo $this->config->item('url_kegiatan') . $v['foto_kegiatan']; ?>" alt="">
                        <p style="margin-top: 10px;">
                            <?php echo $v['judul_kegiatan']; ?><br>
                            <a href="<?php echo base_url('DetailKegiatan/index/' . $v['id_kegiatan']); ?>" class="baca-selengkap">Baca Selengkapnya...</a>
                        </p>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
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
        document.addEventListener("DOMContentLoaded", function() {
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

