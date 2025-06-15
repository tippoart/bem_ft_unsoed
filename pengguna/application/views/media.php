<style>
    .media-head {
        background:
            linear-gradient(135deg, rgba(81, 27, 208, 0.48), rgba(42, 14, 106, 0.57)),
            url('./assets/MEDIA.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        height: 20rem;
        width: 100%;
    }

    h1 {
        color: white;
        font-size: 4rem;
        font-weight: bold;
    }

    .parent1 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, 1fr);
        gap: 25px;
    }

    .parent2 {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(1, 1fr);
        gap: 8px;
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

        padding: 4rem;
    }

    .media-content {
        position: relative;
        bottom: 1.7rem;
        background-color: white;
        border-top-left-radius: 2rem;
        border-top-right-radius: 2rem;

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

    @media screen and (max-width: 768px) {
        .jrnl {

            padding: 1.5rem;
        }

        .media-head {
            height: 15rem;
        }


        .parent2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(1, 1fr);
            gap: 8px;
        }

        .media-title {
            font-size: 2.4rem;
        }

    }
</style>

<div class="media-head d-flex justify-content-center align-items-center">
    <h1 class="media-title">E-MAGZ 2024</h1>
</div>

<div class="media-content p-3">

    <div class="jrnl">
        <div class="text-center">

            <div class="parent2">
                <?php foreach ($majalah as $k => $v): ?>
                    <a class="mb-4" href="<?php echo $v['link']; ?>" target="_blank" style="position: relative; display: block; text-decoration: none; color: black;">
                        <div>
                            <img class="img-edisi-majalah" src="<?php echo $this->config->item('url_majalah').$v['cover'] ?>" alt="" style="width: 100%;">
                        </div>
                        <p style="margin-top: 10px;">EDISI <strong><?php echo $v['judul_majalah']; ?></strong></p>
                    </a>
                <?php endforeach ?>
            </div>

        </div>
    </div>

</div>