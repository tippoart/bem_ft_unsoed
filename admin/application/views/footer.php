<style>
    .row {
        margin-left: 100px;
        margin-right: 100px;
        padding-top: 20px;
    }

    .bagian2 {
        float: right;
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
        gap: 4px;
    }

    .icon a {
        text-decoration: none;
        color: white;
        margin: 5px;
    }

    @media (max-width: 768px){
        .row {
            margin-left: 0;
            margin-right: 0;
            padding-top: 20px;
        }

        .bagian2 {
            float: left;
        }

        .tengah {
            display: flex;
            align-items: left;
            justify-content: left;
        }

        .sosial_media {
            text-align: left;
        }

        .icon {
            direction: none;
            text-align: left;
            display: flex;
        }

        .icon a {
            text-decoration: none;
            color: white;
            margin: 0;
        }
    }
</style>

<div style="background: linear-gradient(45deg, #2A0E6A, #521BD0);">
    <div class="row text-light">
        <!-- <div class="bagian1 col-md-4 mt-5">
            <div style="margin-bottom: 10px;">
                <img src="<?php echo base_url('assets/LOGO.png'); ?>" alt="" style="width: 150px;">
            </div>
            <p>Jl. Raya Mayjen Sungkono No.KM 5, Dusun 2, Blater,
            Kec. Kalimanah, Kabupaten Purbalingga, Jawa Tengah 53371</p>
            <p><i class="bi bi-envelope-fill"></i> jenderal.software@gmail.com</p>
            <p><i class="bi bi-telephone-fill"></i> 0895-3303-44557</p>
        </div>
        <div class="bagian2 col-md-4 mt-5">
            <div class="tengah">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: left;">Beranda</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Profil</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Event</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Media</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Layanan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="bagian3 col-md-4 mt-5">
            <div>
                <p class="sosial_media">Sosial Media</p>
                
                <div class="icon">
                    <a href="#"><p><i style="font-size: 32px;" class="bi bi-instagram"></i></p></a>
                    <a href="#"><p><i style="font-size: 32px;" class="bi bi-facebook"></i></p></a>
                    <a href="#"><p><i style="font-size: 32px;" class="bi bi-twitter"></i></p></a>
                    <a href="#"><p><i style="font-size: 32px;" class="bi bi-youtube"></i></p></a>
                    <a href="#"><p><i style="font-size: 32px;" class="bi bi-tiktok"></i></p></a>
                </div>
    
            </div>
        </div> -->
        <!-- <hr style="height: 3px; background-color: white; border: none;"> -->
        <p class="text-center copyright">Copyright &copy; 2025 BEM FAKULTAS TEKNIK UNSOED</p>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>