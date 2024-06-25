<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket Kereta</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/sidebar.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                    <img src="<?= base_url('assets/image/KAI.png'); ?>" width="300" class="">
                    <h1 class="text-center text-warning">Kereta Api Explore</h1>
                    <p class="text-center text-warning">Platform pemesanan Tiket Kereta Api</p>
                    <p class="text-center text-warning">“E-Tiket Kereta Api Explore”</p>
                    <a class="nav-link" href="<?= base_url('index.php/tiketkereta/pemesanantiket'); ?>">
                        <button type="button" class="btn btn-warning">Pesan Sekarang!</button>
                    </a>
                </section>
            </div>
        </section>
    </main>

    <script src="<?= base_url('assets/js/Theme.js'); ?>"></script>

</body>

</html>