<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoEasy | Beli Tiket</title>
  <!-- Boostrap5 CSS -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/bootstrap/css/carousel.css">
  <!-- End Boostrap5 CSS -->
</head>

<body>
  <!-- Form Tiket -->
  <form action="checkout.php" style="font-family: comic-sans-bold;" class="p-4 shadow p-3 mb-5 bg-body rounded border border-5 border-secondary position-absolute start-50 top-50 translate-middle" method="post">
    <h3 class="pb-3">Form Pemesanan</h3>

    <!-- Kolom Input -->
    <div class="mb-3 row">
      <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
      <div class="col-sm-6">
        <input type="text" class="form-control border border-dark border-1" id="nama" required name="nama">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="nik" class="col-sm-4 col-form-label">Nomor Identitas</label>
      <div class="col-sm-6">
        <input type="text" class="form-control border border-dark border-1" id="nik" minlength="16" required name="nik">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="hp" class="col-sm-4 col-form-label">No. Hp</label>
      <div class="col-sm-6">
        <input type="text" class="form-control border border-dark border-1" id="hp" name="hp" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="lokasiWisata" class="col-sm-4 col-form-label">Tempat Wisata</label>
      <div class="col-sm-6">
        <select name="lokasiWisata" id="lokasiWisata" class="form-select border border-dark border-1" aria-label="Default select example" required>
          <option selected>Pilih paket wisata</option>
          <option value="1 day">1 day</option>
          <option value="2 days">2 days</option>
          <option value="3 days">3 days</option>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Kunjungan</label>
      <div class="col-sm-6">
        <input type="date" class="form-control border border-dark border-1" name="tanggal" id="tanggal" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="jumlahPengunjung" class="col-sm-4 col-form-label">Jumlah Pengunjung</label>
      <div class="col-sm-6">
        <select name="jumlahPengunjung" id="jumlahPengunjung" class="form-select border border-dark border-1" aria-label="Default select example" required>
          <option value="" selected>Berapa orang</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="jumlahAnak" class="col-sm-4 col-form-label">Pengunjung Anak-Anak <br> <sub class="">Usia di bawah 12 tahun</sub> </label>
      <div class="col-sm-6">
        <select name="jumlahAnak" id="jumlahAnak" class="form-select border border-dark border-1" aria-label="Default select example" required>
          <option value="" selected>Berapa orang</option>
          <option value="o">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      </div>
    </div>
    <!-- End Kolom Input -->

    <!-- Harga Total -->
    <div class="mb-3 row">
      <label for="totalHarga" class="col-sm-4 col-form-label">Total Bayar</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" id="totalHarga" value="">
      </div>
    </div>
    </div>
    <!-- End Harga Total -->

    <!-- Checklist -->
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="persetujuan" required="">
      <label class="form-check-label col-sm-10" for="persetujuan">
        Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan
      </label>
    </div>
    <!-- End Checklist -->

    <!-- Button -->
    <div class="text-center mt-3">
      <button id="hitung" type="submit" class="btn btn-dark">Hitung total bayar</button>
      <button class="btn btn-dark col-sm-2">Pesan Tiket</button>
      <a href="index.php" class="btn btn-dark col-sm-2">Batal</a>
    </div>
    <!-- End Button -->
  </form>
  <!-- End Form Tiket -->

  <!-- Boostrap5 JS -->
  <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
  <!-- End Boostrap5 JS -->

  <script>
    document.getElementById("hitung").onclick = function() {
      hitungTotalHarga()
    };

    function formatHarga(harga) {
      return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0,
      }).format(harga);
    }

    function hitungTotalHarga() {

      // Ambil Data Dari Input
      nama = document.getElementById("nama").value;
      nik = document.getElementById("nik").value;
      hp = document.getElementById("hp").value;
      lokasiWisata = document.getElementById("lokasiWisata").value;
      tanggal = document.getElementById("tanggal").value;
      jumlahPengunjung = document.getElementById("jumlahPengunjung").value;
      jumlahAnak = document.getElementById("jumlahAnak").value;

      // Harga Tiket
      hargaTiket = 0;
      if (lokasiWisata == "Pulau Pahawang")
        hargaTiket = 40000;
      else if (lokasiWisata == "Pulau Sari Ringgung")
        hargaTiket = 20000;
      else if (lokasiWisata == "Pulau Wartawan")
        hargaTiket = 10000;
      else if (lokasiWisata == "Puncak Mas")
        hargaTiket = 10000;
      else if (lokasiWisata == "Pantai Pasir Putih")
        hargaTiket = 25000;
      else if (lokasiWisata == "Pantai Batu Lapis")
        hargaTiket = 30000;
      else if (lokasiWisata == "Bukit Batu Tumpang")
        hargaTiket = 40000;
      else if (lokasiWisata == "Danau Biru Tambang")
        hargaTiket = 25000;
      else if (lokasiWisata == "Danau Bekri")
        hargaTiket = 20000;
      else if (lokasiWisata == "1 day")
        hargaTiket = 250000;
      else if (lokasiWisata == "2 days")
        hargaTiket = 800000;
      else if (lokasiWisata == "3 days")
        hargaTiket = 1500000;

      // Hitung Total Harga
      hargaTiket = hargaTiket;
      total = hargaTiket * (parseInt(jumlahAnak) + parseInt(jumlahPengunjung));
      totalHarga = hargaTiket * jumlahPengunjung;
      diskon = hargaTiket * jumlahAnak;

      document.getElementById("totalHarga").value = formatHarga(totalHarga);
    }
  </script>
</body>

</html>