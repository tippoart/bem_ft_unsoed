<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Admin</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .gambar {
            width: 100%;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('assets/KABINET.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .card {
            width: 60%;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            padding: 30px 50px;
            text-align: center;
        }
        .hidden-text {
            color: #2A0E6A;
            font-size: 50px;
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }
        .show-text {
            opacity: 1;
            transform: translateX(0);
        }
        .mobile-icons {
            display: none;
            margin-top: 20px;
        }   
        .parent {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 10px 20px;
        }
    
        
        @media (max-width: 768px) {
            .hidden-text {
                font-size: 40px;
            }
            .card {
                width: 70%;
                padding: 30px 30px;
            }
            .mobile-icons {
                display: flex;
                gap: 15px;
                background: linear-gradient(45deg, #2A0E6A, #521BD0);
                padding: 15px 50px;
                border-radius: 10px;
            }
            .mobile-icons a {
                font-size: 24px;
                background: rgba(255, 255, 255, 0.5);
                padding: 10px;
                border-radius: 5px;
                text-decoration: none;
            }
            .mobile-icons a i {
                color: white;
            }
        }
    </style>
</head>
<body>
    <div class="gambar text-center">
        <div class="container-content">
            <div class="card shadow">
                <p class="hidden-text"><strong>Selamat Datang <span style="color: #FFC106;">Admin!!</span></strong></p>
            </div>
            <div class="mobile-icons shadow">
                <div class="parent">
                    <a style="text-decoration: none; color: white; font-size: 13px;" class="shadow" href="<?php echo base_url('home'); ?>"><i style="font-size: 20px;" class="bi bi-house-door"></i><br>Beranda</a>
                    <a style="text-decoration: none; color: white; font-size: 13px;" class="shadow" href="<?php echo base_url('kegiatan'); ?>"><i style="font-size: 20px;" class="bi bi-calendar3"></i><br>Kegiatan</a>
                    <a style="text-decoration: none; color: white; font-size: 13px;" class="shadow" href="<?php echo base_url('majalah'); ?>"><i style="font-size: 20px;" class="bi bi-journals"></i><br>Majalah</a>
                    <a style="text-decoration: none; color: white; font-size: 13px;" class="shadow" href="<?php echo base_url('saran'); ?>"><i style="font-size: 20px;" class="bi bi-chat-dots"></i><br>Saran</a>
                    <a style="text-decoration: none; color: white; font-size: 13px;" class="shadow" href="<?php echo base_url('profil'); ?>"><i style="font-size: 20px;" class="bi bi-person"></i><br>Profil</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const hiddenText = document.querySelector(".hidden-text");

            function checkVisibility() {
                const rect = hiddenText.getBoundingClientRect();
                const windowHeight = window.innerHeight || document.documentElement.clientHeight;

                if (rect.top <= windowHeight * 0.75) {
                    hiddenText.classList.add("animate__animated", "animate__slideInUp", "show-text");
                }
            }

            window.addEventListener("scroll", checkVisibility);
            checkVisibility();
        });
    </script>
</body>
</html>
