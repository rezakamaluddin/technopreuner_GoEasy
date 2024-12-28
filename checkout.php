<?php
require_once 'koneksi.php';

// Ambil Input Form
$nama             = $_POST["nama"];
$nik              = $_POST["nik"];
$hp               = $_POST["hp"];
$lokasiWisata     = $_POST["lokasiWisata"];
$tanggal          = $_POST["tanggal"];
$jumlahPengunjung = $_POST["jumlahPengunjung"];
$jumlahAnak       = $_POST["jumlahAnak"];
                          
$hargaTiket = 0;
if ($lokasiWisata == "Pulau Pahawang")
  $hargaTiket = 40000;
else if ($lokasiWisata == "Pulau Sari Ringgung")
  $hargaTiket = 20000;
else if ($lokasiWisata == "Pulau Wartawan")
  $hargaTiket = 10000;
else if ($lokasiWisata == "Puncak Mas")
  $hargaTiket = 10000;
else if ($lokasiWisata == "Pantai Pasir Putih")
  $hargaTiket = 25000;
else if ($lokasiWisata == "Pantai Batu Lapis")
  $hargaTiket = 30000;
else if ($lokasiWisata == "Bukit Batu Tumpang")
  $hargaTiket = 40000;
else if ($lokasiWisata == "Danau Biru Tambang")
  $hargaTiket = 25000;
else if ($lokasiWisata == "1 day")
  $hargaTiket = 250000;
else if ($lokasiWisata == "2 days")
  $hargaTiket = 800000;
else if ($lokasiWisata == "3 days")
  $hargaTiket = 1500000;

// Hitung Total Harga
$total      = $hargaTiket * ($jumlahAnak + $jumlahPengunjung);
$diskon     = $hargaTiket * $jumlahAnak;
$totalHarga = $hargaTiket * $jumlahPengunjung;

if (isset($_POST['insert'])) {
  $table = "tb_pesanan";

  $nama             = $_POST["modal-nama"];
  $nik              = $_POST["modal-nik"];
  $hp               = $_POST["modal-hp"];
  $lokasiWisata     = $_POST["modal-lokasiWisata"];
  $tanggal          = $_POST["modal-tanggal"];
  $jumlahPengunjung = $_POST["modal-jumlahPengunjung"];
  $hargaTiket       = $_POST["modal-hargaTiket"];
  $total            = $_POST["modal-total"];
  $diskon           = $_POST["modal-diskon"];
  $totalHarga       = $_POST["modal-totalHarga"];

  // Insert Data
  $query  = "INSERT INTO `tb_pesanan` (`nama`, `nik`, `hp`, `lokasiWisata`, `tanggal`, `jumlahPengunjung`, `hargaTiket`, `total`, `diskon`, `totalHarga`) VALUES ('$nama', '$nik', '$hp', '$lokasiWisata', '$tanggal', '$jumlahPengunjung', '$hargaTiket', '$total', '$diskon', '$totalHarga') ";
  $result = $db->query($query);

  // BALIK KE HOME
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoEasy | Checkout</title>
  <!-- Boostrap5 CSS -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/bootstrap/css/carousel.css">
  <!-- End Boostrap5 CSS -->

</head>

<body>
  <!-- Form Checkout -->
  <form action="" method="post" accept-charset="utf-8" style="font-family: comic-sans-ms;" class="p-4 shadow p-3 mb-5 bg-body rounded border border-5 border-secondary position-absolute start-50 top-50 translate-middle">
    <h3 class="pb-3">Form Checkout</h3>
    <div class="mb-3 row">
      <label for="nama" class="col-sm-6 col-form-label">Nama Lengkap</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['nama'] ?>" name="modal-nama" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="nik" class="col-sm-6 col-form-label">Nomor Identitas</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['nik'] ?>" name="modal-nik" minlength="16" maxlength="16" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="hp" class="col-sm-6 col-form-label">No. Hp</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['hp'] ?>" name="modal-hp" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="lokasiWisata" class="col-sm-6 col-form-label">Tempat Wisata</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['lokasiWisata'] ?>" name="modal-lokasiWisata" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="tanggal" class="col-sm-6 col-form-label">Tanggal Kunjungan</label>
      <div class="col-sm-6">
        <input type="date" readonly class="form-control-plaintext" value="<?= $_POST['tanggal'] ?>" name="modal-tanggal" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="jumlahPengunjung" class="col-sm-6 col-form-label">Jumlah Pengunjung</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['jumlahPengunjung'] ?>" name="modal-jumlahPengunjung" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="jumlahAnak" class="col-sm-6 col-form-label">Pengunjung Anak-Anak</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['jumlahAnak'] ?>" name="modal-jumlahAnak" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="hargaTiket" class="col-sm-6 col-form-label">Harga Tiket</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="Rp. <?= $hargaTiket ?>" name="modal-hargaTiket" value="">
      </div>
    </div>

    <div class="mb-3 row">
      <label for="total" class="col-sm-6 col-form-label">Total</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="Rp. <?= $total ?>" name="modal-total" value="">
      </div>
    </div>

    <div class="mb-3 row">
      <label for="diskon" class="col-sm-6 col-form-label">Potongan Harga</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="Rp. <?= $diskon ?>" name="modal-diskon" value="">
      </div>
    </div>
    </fieldset>

    <div class="mb-3 row">
      <label for="totalHarga" class="col-sm-6 col-form-label">Total Bayar</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="Rp. <?= $totalHarga ?>" name="modal-totalHarga" value="">
      </div>
    </div>
    <div class="text-center">
      <a href="index.php" class="btn btn-dark">Batal</a>
      <input type="submit" class="btn btn-dark" id="bayar" name="insert" value="Bayar" onclick="berhasil()">
    </div>
  </form>
  <!-- End Form Checkout -->
</body>

</html>
<!-- Alert tombol Bayar -->
<script>
  function berhasil() {
    alert("Terima kasih telah membeli tiket bersama Nobikun Travelling!");
  }
</script>
<!-- End Alert tombol Bayar -->
<script src="assets/bootstrap/js/bootstrap.bundle.js"></script>