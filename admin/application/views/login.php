<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Marketplace</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
	<style>
		body {
			width: 100%;
            height: 100vh;
    		font-family: 'Poppins', sans-serif;
            background-image: url('assets/background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
		}

		.pembungkus {
			margin: 0;
			display: flex;
			justify-content: center;
            align-items: center;
			width: 100%;
			height: 100%;
            background: rgba(255, 255, 255, 0.5);
		}

		.container {
			padding-left: 250px;
			padding-right: 250px;
		}

		.card {
			width: 100%;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
			padding: 30px 50px;
			
		}

		@media (max-width: 768px) {
			body {
				width: 100%;
				height: 100vh;
				font-family: 'Poppins', sans-serif;
				background-image: url('assets/background.jpg');
				background-size: cover;
				background-position: center;
				background-repeat: no-repeat;
			}
			.card {
				width: 100%;
				background: rgba(255, 255, 255, 0.7);
				border-radius: 10px;
				padding: 30px 50px;
				
			}
			.container {
				padding-left: 25px;
				padding-right: 25px;
			}
		}
	</style>
</head>
<body>
<div class="pembungkus">
	<div class="container">
		<div class="text-center card shadow">
			<form method="post">
				<h2 class="mb-5"><strong>LOGIN ADMIN</strong></h2>
				<div class="mb-3" style="text-align: left;">
					<label class="mb-2"><strong>Username</strong></label>
					<input type="text" name="username" class="form-control" value="<?php echo set_value("username") ?>">
					<div class="text-danger small">
						<?php echo form_error("username") ?>
					</div>
				</div>
				<div class="mb-3" style="text-align: left; position: relative;">
					<label class="mb-2"><strong>Password</strong></label>
					<div class="input-group">
						<input type="password" name="password" id="password" class="form-control" value="<?php echo set_value("password") ?>">
						<button type="button" class="btn btn-outline-secondary" id="togglePassword">
							<i class="bi bi-eye-slash"></i>
						</button>
					</div>
					<div class="text-danger small">
						<?php echo form_error("password") ?>
					</div>
				</div>
					<button class="btn btn-warning text-dark"><strong>Login</strong></button>
			</form>
		</div>
	</div>
</div>

<script>
    document.getElementById("togglePassword").addEventListener("click", function() {
        var passwordInput = document.getElementById("password");
        var icon = this.querySelector("i");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.classList.remove("bi-eye-slash");
            icon.classList.add("bi-eye");
        } else {
            passwordInput.type = "password";
            icon.classList.remove("bi-eye");
            icon.classList.add("bi-eye-slash");
        }
    });
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if ($this->session->flashdata("pesan_sukses")): ?>
    	<script>swal("Sukses!", "<?php echo $this->session->flashdata("pesan_sukses") ?>", "success");</script>
    <?php endif ?>

    <?php if ($this->session->flashdata("pesan_gagal")): ?>
    	<script>swal("Gagal!", "<?php echo $this->session->flashdata("pesan_gagal") ?>", "error");</script>
    <?php endif ?>
</body>
</html>