<style>
    .hubungi-content {
        background:
            linear-gradient(135deg, rgba(81, 27, 208, 0.48), rgba(42, 14, 106, 0.57)),
            url('./assets/HUBUNGI KAMI.jpg');
        height: 20rem;
        width: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: 0;
    }

    .hubungi-title {
        font-size: 4rem;
    }

    .hubungi-content-body {
        padding: 4rem;
        position: relative;
        bottom: 4rem;
        border-top-right-radius: 2rem;
        border-top-left-radius: 2rem;
        z-index: 1;
        background-color: white;
    }

    iframe {
        height: 714px;
        width: 472px;
        border-radius: 23px;
        border: 1px solid #2A0E6A;
    }

    .temukan {
        color: #2A0E6A;

    }

    .kami {
        color: #FFC106;
    }

    .form-control {
        border: 1.5px solid #2A0E6A;
    }

    .btn {
        float: right;
        background-color: #FFC106;
        color: white;
    }

    .btn:hover {
        background-color: #FFB300; /* Warna saat hover */
        transform: scale(1.05); /* Efek zoom ringan saat hover */
    }

    .card-body-con {
        display: flex;
    }

    @media screen and (max-width: 768px) {
        .hubungi-content {
            height: 15rem;
        }

        iframe {
            width: 100%;
            height: 20rem;
        }


        .hubungi-content-body {
            bottom: 2rem;
            padding: 2rem;
        }

        .hubungi-title {
            font-size: 2rem;
        }

        .card-body-con {
            flex-direction: column-reverse;
        }
    }
</style>

<div class="hubungi-content d-flex justify-content-center align-items-center">
    <p class="text-white fw-bold hubungi-title">HUBUNGI KAMI!</p>
</div>

<div class="hubungi-content-body">
    <div class=" gap-5 card-body-con">
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2041.3764813204077!2d109.24460999816601!3d-7.404565245987732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655efa9b11331f%3A0x13ecfa29476eb9bb!2sUniversitas%20Jenderal%20Soedirman!5e1!3m2!1sid!2sid!4v1743427121849!5m2!1sid!2sid"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="d-flex flex-column">
            <h3 class="fw-bold temukan">Temukan <span class="kami">Kami</span></h3>
            <p>Jl. Raya Mayjen Sungkono No.KM 5,
                Dusun 2, Blater, Kec. Kalimanah,
                Kabupaten Purbalingga,
                Jawa Tengah 53371</p>

            <div class="d-flex gap-2">
                <i class="bi bi-envelope-fill"></i>
                <p>jenderal.software@gmail.com</p>
            </div>
            <div class="d-flex gap-2">
                <i class="bi bi-telephone-fill"></i>
                <p>0895-3303-44557</p>
            </div>
            <form action="<?= base_url('hubungi/kirim') ?>" method="POST" class="mt-3">
                <h3 class="fw-bold temukan">Kirim <span class="kami">Pesan</span></h3>
                <p>Kirim pertanyaan atau kritik dan saran untuk BEM FT Unsoed yang lebih baik</p>
                <div class="mb-3 d-flex gap-2">
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" required>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="subjek" name="subjek" placeholder="subjek" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="pesan" name="pesan" rows="4" placeholder="Tulis Pesan..." required></textarea>
                </div>
                <button type="submit" class="btn ">Kirim Pesan</button>
            </form>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>