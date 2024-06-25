<?php
$conn = mysqli_connect("localhost", "root", "", "tiket_kereta");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kereta</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/sidebar.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .content-page {
            margin: 0;
        }

        .table {
            margin: 35px auto;
            width: auto;
        }

        .table th,
        .table td {
            padding: 15px;
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
                    <h2 class="text-center text-warning">Jadwal Keberangkatan</h2>
                    <table class="table table-dark table-sm table-bordered border-light">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Rute Perjalanan</th>
                                <th scope="col">Kelas Kereta</th>
                                <th scope="col">Tiba</th>
                                <th scope="col">Keberangkatan</th>
                                <th scope="col">Kereta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM pesankereta";
                            $result = mysqli_query($conn, $query);
                            if (mysqli_num_rows($result) > 0) {
                                $no = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $no . "</td>";
                                    echo "<td>" . $row["stasiun_keberangkatan"] . " - " . $row["stasiun_tujuan"] . "</td>";
                                    echo "<td>" . $row["kelas"] . "</td>";
                                    echo "<td>" . $row["jam_kedatangan"] . "</td>";
                                    echo "<td>" . $row["jam_keberangkatan"] . "</td>";
                                    echo "<td>" . $row["kereta"] . "</td>";
                                    echo "</tr>";
                                    $no++;
                                }
                            } else {
                                echo "<tr><td colspan='6'>Tidak ada data ditemukan</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </section>
    </main>
</body>

<script src="<?= base_url('assets/js/Theme.js'); ?>"></script>

</html>

<?php
mysqli_close($conn);
?>