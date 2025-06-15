<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saran</title>
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
            <p class="hidden-text"><strong>Saran</strong></p>
        </div>
    </div>

    <div class="radius" style="margin-top: -180px;">
        
        <div class="pembungkus mt-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data saran</h6>
            </div>
            <div class="hidden-card card-body">
                <div class="chart-area">
                <div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Lengkap</th>
								<th>Email</th>
								<th>Subjek</th>
								<th>Pesan</th>
								<th>Hapus</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($saran as $k => $v): ?>
								<tr>
									<td><?php echo $k + 1 ?></td>
									<td><?php echo $v['nama_lengkap']; ?></td>
									<td><?php echo $v['email']; ?></td>
									<td><?php echo $v['subjek']; ?></td>
									<td><?php echo $v['pesan']; ?></td>
									<td>
                                        <a href="<?php echo base_url("saran/hapus/".$v["id_saran"]) ?>" class="btn_hapus btn btn-sm btn-danger animate__animated" onmouseover="this.classList.add('animate__pulse')" onmouseout="this.classList.remove('animate__pulse')"><i class="bi bi-trash3"></i> Hapus</a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
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

</body>
</html>