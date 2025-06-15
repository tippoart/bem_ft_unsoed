<style>
    .geloracipta {
        background: linear-gradient(45deg, #521BD0, #2A0E6A);
        height: 20rem;
        width: 100%;
    }

    .img-gelora {
        object-fit: cover;
        width: 60%;
    }

    .kabinet-gelora {
        background-color: rgb(255, 255, 255);
        width: 100%;
        position: relative;
        bottom: 1.8rem;
        border-top-left-radius: 2rem;
        border-top-right-radius: 2rem;
        padding: 5rem;
    }

    .title-kabinet {
        color: #2A0E6A;

    }

    .title-kabinet span {
        color: #FFC106;
    }

    h3 {
        color: #2A0E6A;
    }

    ul {
        list-style-type: disc;

    }

    ol {
        color: #2A0E6A;
    }

    .gelora-p {
        color: #2A0E6A;
    }

    @media screen and (max-width: 768px) {
        .kabinet-gelora {
            padding: 2rem;
        }

        .geloracipta{
            height: 14rem;
        }
    }
</style>

<div class="geloracipta d-flex justify-content-center align-items-center">
    <img class="img-gelora" src="<?php echo base_url('assets/kabinet.png'); ?>" alt="">
</div>

<div class="kabinet-gelora">
    <h3 class=" fw-bold title-kabinet">Kabinet <span>Gelora Cipta</span></h3>

    <p class="gelora-p">Gelora Cipta terdiri dari Presiden, Wakil Presiden, 4 Menteri Koordinator, 13 Menteri dan 91 Staff.</p> <br>

    <h3 class="fw-bold">Visi</h3>
    <p class="gelora-p">Mewujudkan BEM FT Unsoed sebagai lembaga eksekutif yang berintegrasi dengan KBMFT Unsoed guna mencip-
        takan harmonisasi dan eksistensi Fakultas TEknik Unsoed yang berasaskan teknik "SOLID" (Solutif, Loyal, Inklusif,
        Dinamis).</p> <br>

    <h3 class="fw-bold">Misi</h3>
    <ol>
        <li class="mt-3">
            <strong>Meningkatkan Profesionalisme & Kepemimpinan</strong>
            <ul>
                <li>Mengadakan pelatihan kepemimpinan dan pengembangan diri bagi mahasiswa.</li>
                <li>Mendorong mahasiswa untuk aktif dalam organisasi dan kegiatan akademik.</li>
            </ul>
        </li>
        <li class="mt-3">
            <strong>Mewujudkan Inovasi & Kreativitas</strong>
            <ul>
                <li>Mempromosikan budaya inovasi dalam bidang teknik dan kewirausahaan.</li>
                <li>Menyelenggarakan kompetisi dan event yang mendorong kreativitas mahasiswa.</li>
            </ul>
        </li>
        <li class="mt-3">
            <strong>Memperkuat Solidaritas & Kolaborasi</strong>
            <ul>
                <li>Membangun hubungan erat antar mahasiswa, organisasi, dan alumni.</li>
                <li>Berkolaborasi dengan pihak eksternal untuk meningkatkan peluang mahasiswa.</li>
            </ul>
        </li>
        <li class="mt-3">
            <strong>Meningkatkan Kesejahteraan Mahasiswa</strong>
            <ul>
                <li>Menyediakan wadah advokasi untuk menyuarakan aspirasi mahasiswa.</li>
                <li>Mengadakan kegiatan sosial dan pendampingan akademik.</li>
            </ul>
        </li>
        <li class="mt-3">
            <strong>Menjaga Integritas & Transparansi</strong>
            <ul>
                <li>Mewujudkan tata kelola organisasi yang transparan dan akuntabel.</li>
                <li>Memastikan keterbukaan informasi dan partisipasi mahasiswa dalam pengambilan keputusan.</li>
            </ul>
        </li>
    </ol>

</div>