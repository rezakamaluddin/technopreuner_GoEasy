-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Apr 2022 pada 09.54
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `lokasiWisata` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlahPengunjung` varchar(255) NOT NULL,
  `hargaTiket` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `diskon` varchar(255) NOT NULL,
  `totalHarga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `nama`, `nik`, `hp`, `lokasiWisata`, `tanggal`, `jumlahPengunjung`, `hargaTiket`, `total`, `diskon`, `totalHarga`) VALUES
(7, 'Acmad Fadli Aditama', '1671012206980002', '082280729085', 'Danau Bekri', '2022-04-08', '1', '20000', '180000', '160000', '20000'),
(8, 'Acmad Fadli Aditama', '1671012206980002', '082280729085', 'Pulau Wartawan', '2022-04-11', '6', 'Rp. 10000', 'Rp. 120000', 'Rp. 60000', 'Rp. 60000'),
(9, 'Acmad Fadli Aditama', '1671012206980002', '082280729085', 'Puncak Mas', '2022-04-06', '2', 'Rp. 10000', 'Rp. 50000', 'Rp. 30000', '20000'),
(10, 'Acmad Fadli Aditama', '1671012206980002', '082280729085', 'Pulau Wartawan', '2022-04-07', '3', 'Rp. 10000', 'Rp. 60000', 'Rp. 30000', 'Rp. 30000'),
(13, 'Acmad Fadli Aditama', '1671012206980002', '082280729085', 'Pulau Wartawan', '2022-04-12', '4', 'Rp. 10000', 'Rp. 80000', 'Rp. 40000', 'Rp. 40000'),
(14, 'Acmad Fadli Aditama', '1671012206980002', '082280729085', 'Puncak Mas', '2022-04-08', '4', 'Rp. 10000', 'Rp. 60000', 'Rp. 20000', 'Rp. 40000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id` int(11) NOT NULL,
  `namaWisata` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_wisata`
--

INSERT INTO `tb_wisata` (`id`, `namaWisata`, `keterangan`, `harga`, `path`) VALUES
(1, 'Pulau Sari Ringgung', 'Pantai Sari Ringgung merupakan tempat wisata yang terletak di Kota Bandar Lampung.', '20000', 'assets/img/pantai-sari-ringgung.jpg'),
(2, 'Bukit Batu Tumpang', 'Bukit Batu Tumpang menjadi salah satu tempat wisata dengan daya tarik bukit yang unik, yaitu berupa batu yang tumpang tindih.', '40000', 'assets/img/bukit-batu-tumpang.jpg'),
(3, 'Pulau Pahawang', 'Pulau Pahawang menawarkan pesona bawah laut nan indah yang belum banyak diketahui.', '40000', 'assets/img/pahawang.jpg'),
(4, 'Danau Biru Tambang', 'Danau Biru Tambang Batu Kapur Padas Terletak di Desa Payung Mulya, Kecamatan Pubian, Kabupaten Lampung Tengah.', '25000', 'assets/img/Danau-Biru-Tambang.jpg'),
(5, 'Pantai Wartawan', 'Pantai Wartawan yang unik berasal dari profesi sang pengelola yang awalnya dikelola oleh warga lokal yang berprofesi sebagai penulis berita.', '10000', 'assets/img/pantai-wartawan.jpg'),
(6, 'Puncak Mas', 'Wisata Puncak Mas ini menjadi destinasi favorit muda-mudi dengan menyajikan pemandangan kota dari ketinggian, sangat cocok untuk dikunjungi saat sore atau malam hari.', '10000', 'assets/img/puncak-mas.jpg'),
(7, 'Pantai Pasir Putih', 'Pantai Pasir Putih menjadi salah satu destinasi populer di Lampung dengan pasir pantai yang putih dan lembut bergandengan dengan air laut yang biru nan jernih.', '25000', 'assets/img/pantai-pasir-putih.jpg'),
(8, 'Pantai Batu Lapis', 'Pantai Batu lapis yang unik dengan bukit batuan cantik berlapis namun masih jarang diketahui, terletak di Bojong, Rajabasa, Kabupaten Lampung Selatan.', '30000', 'assets/img/pantai-batu-lapis.jpg'),
(9, 'Danau Bekri', 'Danau Bekri merupakan salah satu wisata danau yang populer dan banyak yang dikunjungi, dengan keunikannya yang tedapat gundukan timbunan tanah yang meninggi mirip dengan pulau', '20000', 'assets/img/danau-bekri.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
