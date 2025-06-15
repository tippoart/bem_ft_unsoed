<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan</title>
    <style>
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
            padding: 110px 0;
        }
        .radius {
            background-color: white;
        }
        .parent {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 30px;
        }
        .pembungkus {
            padding: 20px 50px;
        }
        .hidden-text {
            font-size: 80px;
            color: white;
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }
        .show-text {
            opacity: 1;
            transform: translateX(0);
        }
        .hidden-card {
            opacity: 0;
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }
        .show-card {
            opacity: 1;
            transform: translateX(0);
        }
        .table-responsive img {
            cursor: pointer;
            transition: transform 0.3s;
        }
        .table-responsive img:hover {
            transform: scale(1.05);
        }
        .modal-body img {
            max-width: 100%;
            height: auto;
        }
        .kembali {
            display: none;
        }

        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
                display: block;
                white-space: nowrap;
            }
            .transparan {
                background-color: rgba(82, 27, 208, 0.5); 
                padding: 150px 0;
            }
            .hidden-text {
                font-size: 40px;
                color: white;
            }
            .kembali {
                display: flex;
                top: 0; 
                left: 0;
                width: 100%;
                padding: 15px 20px;
                background: white;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <div class="kembali bg-light" style="width: 100%; padding: 15px 20px;"><a style="text-decoration: none; color: black;" href="<?php echo base_url('home'); ?>"><i style="font-size: 20px;" class="bi bi-arrow-left"></i></a></div>
    <div class="gambar">
        <div class="transparan text-center" style="">
            <p class="hidden-text"><strong>KEGIATAN</strong></p>
        </div>
    </div>

    <div class="radius" style="margin-top: -180px;">
        
    <div class="pembungkus mt-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data kegiatan</h6>
            </div>
            <div class="hidden-card card-body">
                <div class="chart-area">
                <div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Deskripsi</th>
								<th>Foto</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($kegiatan as $k => $v): ?>
								<tr>
									<td><?php echo $k + 1 ?></td>
									<td><?php echo $v['judul_kegiatan']; ?></td>
									<td><button class="btn btn-sm btn-info animate__animated" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#modalDeskripsi"
                                                data-deskripsi="<?php echo htmlspecialchars($v['deskripsi_kegiatan'], ENT_QUOTES, 'UTF-8'); ?>"
                                                onclick="tampilkanDeskripsi(this)" onmouseover="this.classList.add('animate__pulse')" onmouseout="this.classList.remove('animate__pulse')">
                                            Lihat Detail Deskripsi
                                        </button></td>
									<td>
                                        <img src="<?php echo $this->config->item('url_kegiatan').$v['foto_kegiatan'] ?>" width="200" height="auto" data-bs-toggle="modal" data-bs-target="#modalFoto" onclick="tampilkanGambar(this.src)">            
									</td>
									<td>
									<button type="button" 
                                            class="btn btn-sm btn-warning animate__animated" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#ubah" 
                                            data-id="<?= $v['id_kegiatan'] ?>"
                                            data-nama="<?= $v['judul_kegiatan'] ?>"
                                            data-foto="<?= $this->config->item('url_kegiatan') . $v['foto_kegiatan'] ?>"
                                            onclick="setUbahData(this)" onmouseover="this.classList.add('animate__pulse')" onmouseout="this.classList.remove('animate__pulse')"><i class="bi bi-pencil-square"></i> Ubah</button>
                                        <a href="<?php echo base_url("kegiatan/hapus/".$v["id_kegiatan"]) ?>" class="btn_hapus btn btn-sm btn-danger animate__animated" onmouseover="this.classList.add('animate__pulse')" onmouseout="this.classList.remove('animate__pulse')"><i class="bi bi-trash3"></i> Hapus</a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
                    </div>
					<button type="button" class="btn btn-sm btn-success animate__animated" data-bs-toggle="modal" data-bs-target="#tambah" onmouseover="this.classList.add('animate__pulse')" onmouseout="this.classList.remove('animate__pulse')"><i class="bi bi-file-earmark-arrow-up-fill"></i> Tambah kegiatan</button>
    			</div>
			</div>
		</div>

        <!-- Modal untuk memperbesar gambar -->
        <div class="modal fade" id="modalFoto" tabindex="-1" aria-labelledby="modalFotoLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalFotoLabel">Foto Kegiatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img id="gambarModal" src="" class="img-fluid" alt="Gambar Kegiatan">
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Detail Deskripsi -->
        <div class="modal fade" id="modalDeskripsi" tabindex="-1" aria-labelledby="modalDeskripsiLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDeskripsiLabel">Detail Deskripsi Kegiatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p id="isiDeskripsi"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" style="border: 1px solid grey; color: grey; border-radius: 5px; padding: 3px 15px;" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- tambah -->
		<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah kegiatan</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form method="post" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="mb-3">
							<label for="judul_kegiatan" class="form-label">Judul kegiatan</label>
							<input type="text" class="form-control" name="judul_kegiatan" placeholder="masukkan judul kegiatan" required>
						</div>
                        <div class="mb-3">
							<label for="deskripsi_kegiatan" class="form-label">Deskripsi kegiatan</label>
                            <textarea style="height: 150px;" name="deskripsi_kegiatan" class="form-control" placeholder="masukkan deskripsi kegiatan" required></textarea>
						</div>
						<div class="mb-3">
							<label for="foto_kegiatan" class="form-label">Foto kegiatan</label>
							<input type="file" class="form-control" name="foto_kegiatan" id="fotoInput" onchange="previewFoto()" required>
                            <img style="width: 250px; margin-top: 10px;" id="fotoPreview" src="<?= base_url('assets_kegiatan/default.jpg') ?>" alt="">
						</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-sm btn-success">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>

    <!-- ubah -->
    <div class="modal fade" id="ubah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah kegiatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="<?= base_url('kegiatan/ubah') ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="id_kegiatan" id="ubah_id_kegiatan" value="<?php echo set_value('id_kegiatan'); ?>">
                        <div class="mb-3">
                            <label for="ubah_judul_kegiatan" class="form-label">Judul kegiatan</label>
                            <input type="text" class="form-control" name="judul_kegiatan" id="ubah_judul_kegiatan"
                                value="<?php echo set_value('judul_kegiatan'); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="ubah_deskripsi_kegiatan" class="form-label">Deskripsi kegiatan</label>
                            <textarea style="height: 150px;" name="deskripsi_kegiatan" id="ubah_deskripsi_kegiatan" class="form-control" value="<?php echo set_value('deskripsi_kegiatan'); ?>" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="ubah_foto_kegiatan" class="form-label">Foto kegiatan</label>
                            <input type="file" class="form-control" name="foto_kegiatan" id="ubah_fotoInput" onchange="previewFotoUbah()">
                            <img style="width: 250px; margin-top: 10px;" id="ubah_fotoPreview"
                                src="<?= base_url('assets_kegiatan/default.jpg') ?>" alt="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-sm btn-success">Ubah</button>
                    </div>
                </form>
            </div>
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

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const hiddenCard = document.querySelector(".hidden-card");
        function checkVisibility() {
            const rect = hiddenCard.getBoundingClientRect();
            const windowHeight = window.innerHeight || document.documentElement.clientHeight;
            if (rect.top <= windowHeight * 0.75) {
                hiddenCard.classList.add("animate__animated", "animate__fadeIn", "show-card");
            }
        }
        window.addEventListener("scroll", checkVisibility);
        checkVisibility();
    });
</script>

<script>
    function previewFoto() {
        var file = document.getElementById('fotoInput').files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('fotoPreview').src = e.target.result;
        }
        if (file) {
            reader.readAsDataURL(file);
        } else {
            document.getElementById('fotoPreview').src = '<?= base_url("assets_kegiatan/default.jpg") ?>';
        }
    }
</script>

<script>
function setUbahData(button) {
    var id = button.getAttribute("data-id");
    var nama = button.getAttribute("data-nama");
    var foto = button.getAttribute("data-foto");
    var deskripsi = button.getAttribute("data-deskripsi");

    document.getElementById("ubah_id_kegiatan").value = id;
    document.getElementById("ubah_judul_kegiatan").value = nama;
    document.getElementById("ubah_deskripsi_kegiatan").value = deskripsi;
    document.getElementById("ubah_fotoPreview").src = foto;
}

function previewFotoUbah() {
    var file = document.getElementById('ubah_fotoInput').files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('ubah_fotoPreview').src = e.target.result;
    }
    if (file) {
        reader.readAsDataURL(file);
    } else {
        document.getElementById('ubah_fotoPreview').src = '<?= base_url("assets_kegiatan/default.jpg") ?>';
    }
}
</script>

<script>
function tampilkanDeskripsi(button) {
    var deskripsi = button.getAttribute("data-deskripsi");
    
    document.getElementById("isiDeskripsi").innerText = deskripsi;
}
</script>

<script>
    function tampilkanGambar(src) {
        document.getElementById('gambarModal').src = src;
    }
</script>


    </div>
</body>
</html>