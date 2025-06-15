<style>
    .layanan-head {
        background:
            linear-gradient(135deg, rgba(81, 27, 208, 0.48), rgba(42, 14, 106, 0.57)),
            url('./assets/LAYANAN.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        height: 20rem;
        width: 100%;
    }


    .layanan-head h1 {
        font-size: 4rem;
    }


    .layanan-content {
        padding: 4rem;
        background-color: white;
        position: relative;
        bottom: 3rem;
        border-top-left-radius: 2rem;
        border-top-right-radius: 2rem;

    }

    .faq {
        color: #2A0E6A;
    }

    .ukt {
        color: #2A0E6A;
    }

    .misi {
        color: #FFC106;
    }

    .perhitungan-ukt-body {
        border: 1.4px solid #2A0E6A;
        padding: 2rem;
        border-radius: 10px;

    }

    .accordion-item {
        border-bottom: 1.4px solid #2A0E6A;
        border-left: 1.4px solid #2A0E6A;
        border-right: 1.4px solid #2A0E6A;
    }

    .accordion-item-test {
        border-top: 1.4px solid #2A0E6A;
    }


    .accordion-button:not(.collapsed) {
        background-color: transparent !important;
        box-shadow: none !important;
        color: #000 !important;

    }

    .accordion-header {
        border-radius: 10px !important;
    }

    .layanan-title {
        font-size: 5rem;
    }

    @media screen and (max-width: 768px) {

        .layanan-head {

            height: 15rem;
            width: 100%;
        }

        .layanan-content {
            padding: 1.7rem;
        }

        .layanan-title {
            font-size: 2.5rem;
        }
    }
</style>

<div class="layanan-head d-flex justify-content-center align-items-center">
    <p class="fw-bold text-white layanan-title ">LAYANAN</p>

</div>
<div class="layanan-content">
    <h1 class="faq text-center fw-bold">FAQ</h1>


    <div class="accordion" id="faqAccordion">
        <!-- FAQ 1 -->
        <h5 class="fw-bold ukt">UKT</h5>
        <div class="accordion-item accordion-item-test">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    Kak, kalau orang tua sudah pensiun slip gajinya gimana ya?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse " data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Untuk orang tua yang sudah pensiun bisa melampirkan surat keterangan pensiun beserta slip gaji pensiunnya ya.
                </div>
            </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion-item ">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    Kalau orang tua sudah tidak bekerja bagaimana kak?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Kalau memang orang tua kalian tidak bekerja, maka kalian bisa meminta surat keterangan tidak bekerja ke pihak kelurahan. Tetapi, harus tetap diisikan slip gaji yang membiayai kalian selama kalian berkuliah nanti.
                </div>
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                    Kalau gaji orang tua tidak menentu atau gak punya slip gaji dari perusahaan gimana kak?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Kalian bisa membuat rata-rata dari pendapatan orang tua 3 bulan terakhir. lalu minta surat keterangan gaji ke RT/RW dengan membuat pernyataan bahwa yang bersangkutan memiliki pendapatan sekian dan disertai tanda tangan diatas materai. Kemudian dibawa ke kelurahan.
                </div>
            </div>
        </div>
    </div>

    <div class="accordion mt-5" id="faqAccordion">
        <!-- FAQ 1 -->
        <h5 class="fw-bold ukt">Bidik <span class="misi">Misi</span></h5>
        <!-- FAQ 3 -->
        <div class="accordion-item accordion-item-test">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                    Kak, kalau bidikmisi (KIP-K) berkas yang harus disiapin apa aja?
                </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Berkasnya sama seperti yang lain seperti slip gaji atau surat keterangan gaji orang tua, fotokopi kartu keluarga, fotokopi PBB, struk listrik terakhir dan sebagainya. Namun, ada tambahan untuk menyiapkan surat keterangan tidak mampu yang dikeluarkan oleh kelurahan desa masing-masing serta melampirkan surat keterangan calon penerima beasiswa bidikmisi yang didapat setelah melakukan finalisasi data pada website bidikmisi (KIP-K).
                </div>
            </div>
        </div>
    </div>


    <div>
        <h5 class=" fw-bold ukt mt-5">Cara <span class="misi">Perhitungan</span> UKT</h5>

        <div class="perhitungan-ukt-body">
            <p>
                Karena sistem perhitungan UKT berbeda dengan SPP yaitu dengan melihat kondisi ekonomi
                keluarga, maka besaran UKT setiap mahasiswa memiliki level/kelompok yang berbeda-beda.
                Perlu diketahui hampir semua UKT di seluruh PTN di Indonesia itu memiliki kriteria penggolongan
                UKT yang berbeda-beda, jadi setiap universitas memiliki kewenangan untuk menentukan besaran
                UKT di kampus masing-masing. Lalu bagaimana dengan Unsoed? UKT di Unsoed memiliki
                beberapa faktor yang dapat mempengaruhi besar kecil UKT mahasiswa.
            </p>

            <ul>
                <li>Pertama, kita perlu menghitung pendapatan perkapita orang tua dengan cara membagi
                    pendapatan kotor orang tua / wali dibagi dengan jumlah anggota keluarga dalam KK.</li>
                <li>Setelah pendapatan perkapita diketahui, kita perlu menarik hasil pendapatan perkapita ke
                    tabel-tabel kriteria penentuan kelompok UKT sesuai jurusam mahasiswa yang bersangkutan.
                    Kalian bisa melihat masuk ke level berapa, setelah mengetahui level kemudian lihat pada tabel
                    kelompok UKT, sesuaikan jurusan dan level yang sudah kalian dapat sebelumnya. Maka itulah
                    besar UKT yang kamu dapat!</li>
            </ul>
        </div>
    </div>
</div>

