<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
        .kembali {
            display: none;
        }
        .logout {
            display: none;
        }
        .row {
            margin-bottom: 20px;
        }
        .logo {
            height: 100%;
            border-radius: 10px;
            background: rgb(106,27,208);
            background: linear-gradient(90deg, rgba(106,27,208,1) 0%, rgba(106,100,14,1) 100%);
        }
        .icon-person {
            font-size: 250px;
            color: rgba(255, 255, 255, 0.5);
        }
        @media (max-width: 768px) {
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
            .logout {
                display: flex;
                width: 80px;
            }
            .logo {
                height: 30vh;
                border-radius: 10px;
                background: rgb(106,27,208);
                background: linear-gradient(90deg, rgba(106,27,208,1) 0%, rgba(106,100,14,1) 100%);
            }
            .icon-person {
                font-size: 170px;
                color: rgba(255, 255, 255, 0.5);
            }
        }
    </style>
</head>
<body>
    <div class="kembali bg-light" style="width: 100%; padding: 15px 20px;"><a style="text-decoration: none; color: black;" href="<?php echo base_url('home'); ?>"><i style="font-size: 20px;" class="bi bi-arrow-left"></i></a></div>
    <div class="container">
        <div class="row">
                <div class="logo col-md-6 d-flex justify-content-center align-items-center">
                    <i class="icon-person bi bi-person-lines-fill"></i>
                </div>

            <div class="col-md-6 my-3">
                <div>
                    <p class="fw-bold">Username</p>
                    <p style="padding: 5px 10px; border-radius: 5px; border: 1px solid black;"><?php echo $this->session->userdata('username'); ?></p>
                    <p class="fw-bold">Nama</p>
                    <p style="padding: 5px 10px; border-radius: 5px; border: 1px solid black;"><?php echo $this->session->userdata('nama'); ?></p>
                    <p class="fw-bold">E-mail</p>
                    <p style="padding: 5px 10px; border-radius: 5px; border: 1px solid black;"><?php echo $this->session->userdata('email'); ?></p>
                    <p class="fw-bold">Password</p>
                    <p style="padding: 5px 10px; border-radius: 5px; border: 1px solid black;">********</p>
                </div>
                <a class="logout btn btn-danger mt-2" style="text-decoration: none; color: white;" href="<?php echo base_url('logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>