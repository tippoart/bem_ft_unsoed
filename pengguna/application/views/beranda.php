<style>

    body {

        font-family: 'Poppins', sans-serif;

        background: linear-gradient(45deg, #2A0E6A, #521BD0);

    }
    .parent1 {

        display: grid;

        grid-template-columns: repeat(2, 1fr);

        grid-template-rows: repeat(2, 1fr);

        gap: 25px;

    }
    .radius {

        background-color: white;

        border-top-left-radius: 2rem;

        border-top-right-radius: 2rem;

        padding: 1rem;

    }
    .img_kegiatan {

        width: 100%;

        border-radius: 15px;

    }
    .img2 {

        width: 522px;

    }
    .jrnl {

        margin-top: 70px;

    }
    .btnkabinet {

        text-decoration: none;

        color: white;

        border: 1px solid white;

        border-radius: 15px;

        padding: 2px 25px;

        background-color: transparent;

        transition: background-color 0.3s ease-in-out;

    }
    .btnkabinet:hover {

        background-color: #2A0E6A;

    }
    .hidden-text {

        opacity: 0;

        transform: translateX(-50px);

        transition: opacity 0.5s ease-out, transform 0.5s ease-out;

    }
    .show-text {

        opacity: 1;

        transform: translateX(0);

    }
    .hidden-image {

        opacity: 0;

        transform: translateX(50px);

        transition: opacity 0.5s ease-out, transform 0.5s ease-out;

    }
    .show-image {

        opacity: 1;

        transform: translateX(0);

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
    .hidden-intro {

        opacity: 0;

        transform: translateY(50px);

        transition: opacity 0.5s ease-out, transform 0.5s ease-out;

    }
    .show-intro {

        opacity: 1;

        transform: translateY(0);

    }
    .jrnl {

        margin-top: 70px;

    }
    .btnkabinet {

        text-decoration: none;

        color: white;

        border: 1px solid white;

        border-radius: 15px;

        padding: 2px 25px;

        background-color: transparent;

        transition: background-color 0.3s ease-in-out;

    }
    .btnkabinet:hover {

        background-color: #2A0E6A;

    }
    .hidden-text {

        opacity: 0;

        transform: translateX(-50px);

        transition: opacity 0.5s ease-out, transform 0.5s ease-out;

    }
    .show-text {

        opacity: 1;

        transform: translateX(0);

    }
    .hidden-image {

        opacity: 0;

        transform: translateX(50px);

        transition: opacity 0.5s ease-out, transform 0.5s ease-out;

    }
    .show-image {

        opacity: 1;

        transform: translateX(0);

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
    .hidden-intro {

        opacity: 0;

        transform: translateY(50px);

        transition: opacity 0.5s ease-out, transform 0.5s ease-out;

    }
    .show-intro {

        opacity: 1;

        transform: translateY(0);

    }
    .navbar-mobile {

        display: none;

    }
    .img-edisi-majalah:hover {

        transform: scale(1.05);

    }
    .parent2 {

        display: flex;

        flex-wrap: wrap;

        gap: 20px;

        justify-content: center;

    }
    .parent2 a {

        position: relative;

        display: block;

        text-decoration: none;

        color: black;

        width: 100%;

        max-width: 300px;

        text-align: center;

    }
    .parent2 a div {

        position: relative;

        overflow: hidden;

    }
    .parent2 a img.img-edisi-majalah {

        width: 100%;

        display: block;

        transition: transform 0.3s ease-in-out;

    }
    .parent2 a:hover img.img-edisi-majalah {

        transform: scale(1.1);

    }
    .parent2 a p {

        margin-top: 10px;

        font-size: 16px;

        color: black;

        background: rgba(255, 255, 255, 0.8);

        padding: 5px;

        border-radius: 5px;

        display: inline-block;

    }

.teknik {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: repeat(1, 1fr);
    gap: 8px;
}










    @media (max-width: 768px) {
	.body {
		max-width: 100%;
  		overflow-x: hidden;

	}

        .img_kegiatan {

            width: 100%;

            border-radius: 5px;

        }
        .img2 {

            width: 100%;
  max-width: 100%;
  height: auto;
  display: block;
margin-top: 30px;
        }
        .jrnl {

            margin-top: 30px;

        }
        .parent2 {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            grid-template-rows: repeat(1, 1fr);

            gap: 8px;

        }
        .container {

            padding-top: 20px;

        }
        .nav-mobile-card {

            background: linear-gradient(180deg, #2A0E6A, #521BD0);

            border-radius: 20px;

            padding: 1.2rem;

            width: 3.5rem;

            height: 4rem;
        }
        .nav-mobile-link {

            color: #2A0E6A;

            font-size: 11px;

            font-weight: bold;

            text-align: center;

            display: inline-block;

            width: 4rem;
        }        
	.navbar-mobile {

            display: flex;

            flex-direction: row;

            gap: 0.3rem;

            justify-content: center;
        }
        .selengkapnya {

            font-size: 12px;
        }
	.parent1 {

        	display: grid;

        	grid-template-columns: repeat(1, 1fr);

        	grid-template-rows: repeat(2, 1fr);

        	gap: 25px;

    	}
.bungkus1 {
width: 100%;
overflow-x: hidden;
}
.bungkus2 {
width: 100%;
  overflow-x: hidden;
  box-sizing: border-box;
}
.link {
    word-break: break-word;
    overflow-wrap: break-word;
}
.teknik {
width: 100%;
  max-width: 100vw;
  overflow-x: hidden;
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  gap: 8px;}

    }



</style>

<div class="text-center hidden-intro" style="padding: 70px 0;">

    <div style="color: white;">

        <h1><strong>BEM FT UNSOED 2025</strong></h1>

        <h5>Bersama, Bergerak, Berdampak</h5>

    </div>

    <div class="mt-4">

        <a class="btnkabinet" href="Profil" style="text-decoration: none; color: white; border: 1px solid white; border-radius: 15px; padding: 2px 25px;">

            Profil Kabinet

        </a>

    </div>

</div>



<div class="radius">



    <div class="navbar-mobile">
        <div class="d-flex flex-column gap-1 align-items-center">
            <div class="nav-mobile-card d-flex justify-content-center align-items-center">
                <a href="<?php echo base_url("Profil/Geloracipta"); ?>" class="text-decoration-none">
                    <i class="bi bi-megaphone-fill text-white fs-5"></i>
                </a>
            </div>
            <a href="<?php echo base_url("Profil/Geloracipta"); ?>" class="text-decoration-none nav-mobile-link text-center">Gelora Cipta</a>
        </div>
        <div class="d-flex flex-column gap-1 align-items-center">
            <div class="nav-mobile-card d-flex justify-content-center align-items-center">
                <a href="<?php echo base_url("Profil"); ?>" class="text-decoration-none">
                    <i class="bi bi-people-fill text-white fs-5"></i>
                </a>
            </div>
            <a href="<?php echo base_url("Profil"); ?>" class="text-decoration-none nav-mobile-link text-center">Profile Kabinet</a>
        </div>
        <div class="d-flex flex-column gap-1 align-items-center">
            <div class="nav-mobile-card d-flex justify-content-center align-items-center">
                <a href="<?php echo base_url("Kegiatan"); ?>" class="text-decoration-none">
                    <i class="bi bi-calendar3 text-white fs-5"></i>
                </a>
            </div>
            <a href="<?php echo base_url("Kegiatan"); ?>" class="text-decoration-none nav-mobile-link text-center">Kegiatan</a>
        </div>
        <div class="d-flex flex-column gap-1 align-items-center">
            <div class="nav-mobile-card d-flex justify-content-center align-items-center">
                <a href="<?php echo base_url("Media"); ?>" class="text-decoration-none">
                    <i class="bi bi-journal-bookmark-fill text-white fs-5"></i>
                </a>
            </div>
            <a href="<?php echo base_url("Media"); ?>" class="text-decoration-none nav-mobile-link text-center">E-Magz 2024</a>
        </div>
        <div class="d-flex flex-column gap-1 align-items-center">
            <div class="nav-mobile-card d-flex justify-content-center align-items-center">
                <a href="<?php echo base_url("Media/KajianTeknik"); ?>" class="text-decoration-none">
                    <i class="bi bi-pencil-fill text-white fs-5"></i>
                </a>
            </div>
            <a href="<?php echo base_url("Media/KajianTeknik"); ?>" class="text-decoration-none nav-mobile-link text-center">Kajian Teknik</a>
        </div>
    </div>







    <div class="container">

        <div class="text-center">

            <p style="text-align: left;"><strong>Kegiatan</strong></p>

            <div class="parent1">

                <?php

                $max_display = 4;

                $count = 0;

                foreach ($kegiatan as $k => $v):

                    if ($count >= $max_display) break;

                ?>

                    <div class="hidden-kegiatan" style="text-align: left;">

                        <img class="img_kegiatan" src="<?php echo $this->config->item('url_kegiatan') . $v['foto_kegiatan']; ?>" alt="">

                        <p style="margin-top: 10px;">

                            <?php echo $v['judul_kegiatan']; ?><br>

                            <a class="selengkapnya" href="<?php echo base_url('DetailKegiatan/index/' . $v['id_kegiatan']); ?>">Baca Selengkapnya...</a>

                        </p>

                    </div>

                <?php

                    $count++;

                endforeach;

                ?>

            </div>

        </div>



        <div class="mt-5">

            <div class="teknik">

                <div class="bungkus1 hidden-text">

                    <p style="font-size: 32px; color: #2A0E6A;">

                        <strong>Database<br><span style="color: #FFC106;">Teknik</span> Bangga</strong>

                    </p>



                    <p style="font-size: 18px;">Hallo KBMFT !!!</p>

                    <p style="font-size: 18px;">

                        Dengan bangga kami ucapkan selamat kepada

                        mahasiswa yang telah berprestasi dan berkompetisi.

                        Semoga dengan ini dapat memotivasi seluruh KBMFT

                        dalam meraih prestasi di kemudian hari. Database

                        teknik bangga dapat diakses disini.</p>



                    <p style="font-size: 18px;">

                        Teruntuk KBMFT yang berprestasi pada bidang

                        akademik maupun non-akademik, kami dari

                        Kementerian Media Kreatif, Komunikasi dan Informasi

                        melakukan Open Submition Ruang Apresiasi : Teknik

                        Bangga yang dapat di akses melalui link :</p>



                    <a class="link" href="https://forms.gle/qUrYGC4npuhfFpnu6" style="font-size: 18px;">https://forms.gle/qUrYGC4npuhfFpnu6</a>

                </div>

                <div class="bungkus2 hidden-image">

                    <img class="img2" src="<?php echo base_url('assets/image 2.png'); ?>" alt="">

                </div>

            </div>

        </div>



        <div class="jrnl">

            <div class="text-center">

                <p style="font-size: 25px; color: #2A0E6A;">

                    <strong>E-MAGZ <span style="color: #FFC106;">2024</span><br><span style="font-size: 20px;">Konten Kreatif Jurnalistik Seputar FT Unsoed</span></strong>

                </p>



                <div class="parent2">

                    <?php $counter = 0; ?>

                    <?php foreach ($majalah as $k => $v): ?>

                        <?php if ($counter >= 4) break; ?>

                        <a class="mb-4" href="<?php echo $v['link']; ?>" target="_blank" style="position: relative; display: block; text-decoration: none; color: black;">

                            <div>

                                <img class="img-edisi-majalah" src="<?php echo $this->config->item('url_majalah') . $v['cover']; ?>" alt="" style="width: 100%;">

                            </div>

                            <p style="margin-top: 10px;">EDISI <strong><?php echo $v['judul_majalah']; ?></strong></p>

                        </a>

                        <?php $counter++; ?>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</div>











<script>

    document.addEventListener("DOMContentLoaded", function() {

        const links = document.querySelectorAll(".parent2 a");



        links.forEach(link => {

            const mainImg = link.querySelector("img:not(.hover-img)");

            const hoverImg = link.querySelector(".hover-img");



            link.addEventListener("mouseenter", function() {

                hoverImg.style.opacity = "1";

            });



            link.addEventListener("mouseleave", function() {

                hoverImg.style.opacity = "0";

            });

        });

    });

</script>





<script>

    document.addEventListener("DOMContentLoaded", function() {

        const hiddenText = document.querySelector(".hidden-text");



        function checkVisibility() {

            const rect = hiddenText.getBoundingClientRect();

            const windowHeight = window.innerHeight || document.documentElement.clientHeight;



            if (rect.top <= windowHeight * 0.75) {

                hiddenText.classList.add("animate__animated", "animate__fadeInLeft", "show-text");

            }

        }



        window.addEventListener("scroll", checkVisibility);

        checkVisibility();

    });

</script>



<script>

    document.addEventListener("DOMContentLoaded", function() {

        const hiddenImage = document.querySelector(".hidden-image");



        function checkVisibility() {

            const rect = hiddenImage.getBoundingClientRect();

            const windowHeight = window.innerHeight || document.documentElement.clientHeight;



            if (rect.top <= windowHeight * 0.75) {

                hiddenImage.classList.add("animate__animated", "animate__fadeInRight", "show-text-right");

            }

        }



        window.addEventListener("scroll", checkVisibility);

        checkVisibility();

    });

</script>



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