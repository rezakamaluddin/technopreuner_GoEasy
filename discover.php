<?php
require_once 'koneksi.php';
$table = "tb_wisata";

// INSERT DATA
$query       = "SELECT * FROM $table";
$result      = $db->query($query);
$dataWisata  = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoEasy | Discover</title>

    <!-- Boostrap5 CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/carousel.css">
    <!-- End Boostrap5 CSS -->
</head>

<body>
    <!-- header -->
    <?php
        include('layout/header.php');
    ?>
    <!-- end header -->


    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Discover</h1>
                <p class="lead text-muted text-uppercase">dont miss out the wonderful lampung</p>
            </div>
        </div>
    </section>

    <!-- Daftar Harga Wisata -->
    <section>
        <div class="container p-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                for ($i = 0; $i < count($dataWisata); $i++) {
                ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="<?= $dataWisata[$i]['path'] ?>" width="100%" height="225">
                            <div class="card-body">
                                <h3><?= $dataWisata[$i]['namaWisata'] ?></h3>
                                <p class="card-text"><?= $dataWisata[$i]['keterangan'] ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="order.php" class="btn btn-sm btn-outline-secondary">Pesan Sekarang</a>
                                    </div>
                                    <small class="text-muted">Rp. <?= $dataWisata[$i]['harga'] ?>/orang.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- End Daftar Harga Wisata -->

    <!-- Footer -->
    <?php
    include('layout/footer.php');
    ?>
    <!-- end Footer -->

    <!-- Javascript -->
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <!-- End Javascript -->
</body>

</html>