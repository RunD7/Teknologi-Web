<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/sidebar.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .content {
            margin-left: 220px;
            padding: 17px;
        }

        .card {
            margin: 17px 0;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            width: 140px;
            height: 140px;
            object-fit: cover;
            margin: 0 auto;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <main>
        <div id="mysidebar" class="sidebar">
            <ul class="sidebar-navlink">
                <li>
                    <a href="<?= base_url('index.php/tiketkereta/dashboard'); ?>">
                        <i class="fa-solid fa-house"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('index.php/tiketkereta/jadwalkereta'); ?>">
                        <i class="fa-solid fa-calendar-days"></i>
                        <span>Jadwal Kereta</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('index.php/tiketkereta/pemesanantiket'); ?>">
                        <i class="fa-solid fa-ticket"></i>
                        <span>Pesan Tiket</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('index.php/tiketkereta/about'); ?>">
                        <i class="fa-solid fa-list-check"></i>
                        <span>About</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('index.php/auth'); ?>">
                        <i class="fa-solid fa-users"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <section>
            <div onclick="toggleDark()" class="toggle-dark-theme">
                <button>
                    <div class="sun icon"></div>
                </button>
            </div>
            <div class="content-page">
                <section class="jumbotron text-center">
                    <h1 class="text-center text-warning">Kelompok 1</h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="<?= base_url('assets/image/profile.jpg'); ?>" class="card-img-top" alt="Member 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Erwin Maulana</h5>
                                        <p class="card-text">3411211047</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="<?= base_url('assets/image/profile.jpg'); ?>" class="card-img-top" alt="Member 2">
                                    <div class="card-body">
                                        <h5 class="card-title">M. Randy Kurniawan</h5>
                                        <p class="card-text">3411211073</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="<?= base_url('assets/image/profile.jpg'); ?>" class="card-img-top" alt="Member 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Wafa Subaga</h5>
                                        <p class="card-text">3411211074</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="<?= base_url('assets/image/profile.jpg'); ?>" class="card-img-top" alt="Member 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Maulana Anjasoro Kambali</h5>
                                        <p class="card-text">3411211084</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="<?= base_url('assets/image/profile.jpg'); ?>" class="card-img-top" alt="Member 5">
                                    <div class="card-body">
                                        <h5 class="card-title">Priftama Sidik Tanjung</h5>
                                        <p class="card-text">3411211087</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>

    <script src="<?= base_url('assets/js/Theme.js'); ?>"></script>

</body>

</html>