<style>
    .row {
        margin-left: 100px;
        margin-right: 100px;
    }

    .bagian2 {
        float: right;
        margin-top: 2rem;
    }

    .tengah {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sosial_media {
        text-align: right;
    }

    .icon {
        direction: rtl;
        text-align: right;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(3, 1fr);
        position: relative;
        width: 50%;
        left: 50%;

    }

    .icon a {
        text-decoration: none;
        color: white;
        margin: 5px;
    }

    .icon a i {

        font-size: 32px;
    }

    @media screen and (max-width: 768px) {
        .row {
            margin-left: 0;
            margin-right: 0;
        }

        .bagian2 {
            float: left;
            margin-top: 0;
        }

        .tengah {
            display: flex;
            align-items: left;
            justify-content: left;
            display: none;
        }

        .sosial_media {
            text-align: center;
        }

        .icon {
            direction: none;
            text-align: left;
            display: flex;
            justify-content: center;
            gap: 5%;
            left: 25%;

        }

        .icon a {
            text-decoration: none;
            color: white;
            margin: 0;

        }

        .icon a i {

            font-size: 25px;
        }

        .footer-bem {
            padding: 0.6rem;
        }
    }
</style>

<div class="footer-bem" style="background: linear-gradient(45deg, #2A0E6A, #521BD0);">
    <div class="row text-light">
        <div class="bagian1 col-md-4 mt-5">
            <div style="margin-bottom: 10px;">
                <img src="<?php echo base_url('assets/LOGO.png'); ?>" alt="" style="width: 150px;">
            </div>
            <p>Jl. Raya Mayjen Sungkono No.KM 5, Dusun 2, Blater,
                Kec. Kalimanah, Kabupaten Purbalingga, Jawa Tengah 53371</p>
            <p><i class="bi bi-envelope-fill"></i> jenderal.software@gmail.com</p>
            <p><i class="bi bi-telephone-fill"></i> 081217019084 (Narahubung)</p>
            <p><i class="bi bi-telephone-fill"></i> 089513209229 (Kritik & Saran)</p>
        </div>
        <div class="bagian2 col-md-4">
            
        </div>
        <div class="bagian3 col-md-4 mt-5">
            <div>
                <p class="sosial_media">Sosial Media</p>

                <div class="icon">
                    <a href="#">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="#">
                        <i class="bi bi-tiktok"></i>
                    </a>
                </div>

            </div>
        </div>
        <hr style="height: 3px; background-color: white; border: none;">
        <p class="text-center" style="color: white;">BEM FAKULTAS TEKNIK UNSOED 2025</p>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedAUMNZJWsHbEjh4u/1XLfQIljJf6VfGJ7aR7xLJvOW/SWwvJ3VgGtX4" crossorigin="anonymous"></script>

</body>

</html>