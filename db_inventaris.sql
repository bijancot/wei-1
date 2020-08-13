-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2020 pada 18.52
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventaris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `barang_id` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `cara_perolehan` varchar(100) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`barang_id`, `nama_barang`, `harga`, `kategori_id`, `jumlah`, `gambar`, `satuan`, `cara_perolehan`, `kondisi`, `deskripsi`) VALUES
(9, 'Kursi', 12000, 6, 3, '15946397979.jpg', 'buah', 'Hibah', 'Baik', 'ini adalah kursi yang memiliki kualitas yang sangat bagus'),
(13, 'Tenda Regu', 13000, 1, 47, '158899637613.jpg', 'Buah', 'Menyewa', 'Baik', 'Tenda ini digunakan untuk berkemah dengan kapasitas beregu'),
(14, 'Tenda Pleton', 0, 1, 50, '159463985414.jpg', 'Buah', 'Menyewa', '', 'Tenda ini digunakan untuk berkemah dengan kapasitas pleton'),
(15, 'Tenda Durlap', 0, 1, 50, '', 'Buah', 'Menyewa', '', 'Tenda ini digunakan untuk durlap'),
(16, 'Tenda Serba Guna', 0, 1, 47, '', 'Buah', 'Menyewa', '', 'Tenda ini digunakan untuk berkemah dan dapat digunakan dalam apapun'),
(17, 'Tenda Komando', 0, 1, 30, '', 'Buah', 'Menyewa', '', 'Tenda ini digunakan untuk berkemah untuk mengomandoi suatu pasukan'),
(18, 'Tenda Kesehatan', 0, 1, 60, '', 'Buah', 'Menyewa', '', 'Tenda ini digunakan untuk keadaan darurat'),
(19, 'Tenda Dapur', 0, 1, 25, '', 'Buah', 'Menyewa', '', 'Tenda ini digunakan untuk memasak'),
(20, 'Tenda Kelompok', 0, 1, 60, '', 'Buah', 'Menyewa', '', 'Tenda ini digunakan untuk berkelompok'),
(21, 'Kompor Lapangan T-50', 0, 2, 20, '', 'Buah', 'Menyewa', '', 'Digunakan untuk memasak'),
(22, 'Meja Lapangan', 0, 4, 200, '', 'Buah', 'Menyewa', '', 'Digunakan untuk meja di outdor'),
(23, 'Kursi Lapangan', 0, 4, 150, '', 'Buah', 'Menyewa', '', 'Digunakan untuk kursi di outdor'),
(24, 'Velbed Rangka Aluminium', 0, 4, 50, '', 'Buah', 'Menyewa', '', 'Sebagai Ganti Alat Tidur'),
(25, 'Velbed Rangka Aluminium Loreng', 0, 4, 50, '', 'Buah', 'Menyewa', '', 'Sebagai Ganti Alat Tidur Berwarna Loreng'),
(26, 'Pacul Pick', 0, 3, 50, '', 'Buah', 'Menyewa', '', 'Sebagai alat membantu Berkebun'),
(27, 'Pacul Pick dan Sarung', 0, 3, 50, '', 'Buah', 'Menyewa', '', 'Digunakan untuk berkebun yang dilengkapi dengan sarung'),
(28, 'Digging Set', 0, 3, 25, '', 'Buah', 'Menyewa', '', 'Digunakan untuk berkebun yang sangat lengkap'),
(29, 'Reservoir / WC Lapangan ', 0, 5, 25, '', 'Buah', 'Menyewa', '', 'Yaitu WC darurat di lapangan'),
(30, 'Suku Cadang Helm 2in1', 0, 5, 100, '', 'Buah', 'Menyewa', '', 'Suku cadang helm'),
(31, 'Suku Cadang Interior Helm', 0, 5, 100, '', 'Buah', 'Menyewa', '', 'Suku cadang Interior helm'),
(32, 'Suku Cadang Kain Velbet Besi', 0, 5, 100, '', 'Buah', 'Menyewa', '', 'Tersedia suku cadang kain velbet dan rangka besi '),
(33, 'Suku Cadang Kain Velbet Aluminium', 0, 5, 100, '', 'Buah', 'Menyewa', '', 'Tersedia suku cadang kain velbet dan rangka Aluminium'),
(34, 'Meja Kursi Set', 0, 4, 200, '', 'Buah', 'Menyewa', '', 'Meja dan kursi satu set'),
(35, 'Kompor Pangkalan', 0, 2, 50, '', 'Buah', 'Menyewa', '', 'Digunakan untuk memasak di pangkalan'),
(36, 'Kompor Adurlap Regu', 0, 2, 50, '', 'Buah', 'Menyewa', '', 'Digunakan untuk memasak beregu '),
(37, 'Kompor Lapangan Serba Guna', 0, 2, 50, '', 'Buah', 'Menyewa', '', 'Digunakan untuk kebutuhan memasak dan berfungsi sebagai keinginan'),
(38, 'Lunchtray / Ompreng Stainlis', 0, 2, 138, '', 'Buah', 'Menyewa', '', 'Digunakan untuk nampan dalam makan berbentuk stainlis'),
(39, 'Lunchtray / Ompreng Aluminium', 0, 2, 200, '', 'Buah', 'Menyewa', '', 'Digunakan untuk nampan dalam makan Aluminium'),
(40, 'Jenderal', 15000, 4, 14, '14 jenderal.jpg', 'orang', 'beli', 'Baik', 'oyi slur'),
(41, 'Tenda Regu AA4', 12000, 1, 50, 'tes.jpg', 'Buah', 'Menyewa', 'Baik', 'Tenda ini digunakan untuk keadaan darurat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`kategori_id`, `nama_kategori`, `keterangan`) VALUES
(1, 'Berkemah', 'Seperti Tenda Pleton, Tenda Regu'),
(2, 'Peralatan Memasak', 'Seperti Kompor, wajan Dll '),
(3, 'Peralatan Berkebun', 'Seperti Pacul, Sekop Dll'),
(4, 'Peralatan Lapangan', 'Seperti Meja, Kursi Dll'),
(5, 'Suku Cadang', 'Seperti Suku cadang peralatan yang harus diganti apabila terjadi kerusakan'),
(6, 'Kayu', 'Berbahan kayu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `pinjam_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `jumlah_barang` int(15) NOT NULL,
  `tanggal_pengambilan` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`pinjam_id`, `barang_id`, `jumlah_barang`, `tanggal_pengambilan`, `tanggal_pengembalian`, `user_id`) VALUES
(82551947, 22, 19, '2020-07-24', '2020-08-15', 3),
(272114252, 26, 3, '2020-08-10', '2020-09-17', NULL),
(405093540, 17, 5, '2020-07-24', '2020-07-28', NULL),
(493993790, 16, 3, '2020-07-22', '2020-08-04', NULL),
(551262392, 35, 4, '2020-07-22', '2020-08-04', NULL),
(636631966, 24, 20, '2020-07-24', '2020-08-16', 2),
(774102919, 30, 6, '2020-07-22', '2020-07-26', NULL),
(816276303, 23, 18, '2020-07-24', '2020-08-10', 3),
(882936676, 23, 3, '2020-07-24', '2020-08-05', NULL),
(1265287461, 18, 7, '2020-07-29', '2020-08-14', 2),
(1271711253, 18, 50, '2020-07-21', '2020-07-29', 2),
(1350174439, 13, 2, '2020-07-22', '2020-08-19', 2),
(1416206584, 17, 5, '2020-07-24', '2020-07-31', NULL),
(1539532736, 29, 3, '2020-07-22', '2020-10-06', 2),
(1790733990, 26, 3, '2020-08-10', '2020-09-17', NULL),
(1804165430, 38, 12, '2020-07-22', '2020-07-23', NULL),
(1874261187, 27, 12, '2020-07-22', '2020-07-28', NULL),
(2057218961, 17, 5, '2020-07-05', '2020-07-31', NULL),
(2073655063, 23, 17, '2020-07-24', '2020-08-12', 0),
(2147483647, 13, 2, '2020-07-22', '2020-08-19', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `pinjam_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `alasan` text NOT NULL,
  `persetujuan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`transaksi_id`, `pinjam_id`, `user_id`, `alasan`, `persetujuan`) VALUES
(17, 1350174439, 2, 'bencana alam', 'selesai'),
(18, 2147483647, 2, 'bencana alam', 'selesai'),
(19, 1265287461, 2, 'bencana alam', 'selesai'),
(20, 1271711253, 2, 'bencana alam', 'selesai'),
(21, 1539532736, 2, 'bencana alam', 'selesai'),
(22, 1874261187, 2, 'bencana alam', 'selesai'),
(23, 493993790, 2, 'bencana alam', 'ya'),
(24, 1790733990, 2, 'bencana alam', 'selesai'),
(25, 272114252, 2, 'bencana alam', 'belum'),
(26, 1804165430, 2, 'bencana alam', 'ya'),
(27, 405093540, 3, 'bencana alam', 'belum'),
(28, 2057218961, 3, 'bencana alam', 'belum'),
(29, 1416206584, 3, 'bencana alam', 'belum'),
(30, 882936676, 3, 'bencana alam', 'belum'),
(32, 816276303, 3, 'keperlua durlap', 'belum'),
(33, 2147483647, 3, 'bencana alam', 'belum'),
(34, 82551947, 3, 'bencana alam', 'belum'),
(35, 636631966, 2, 'bencana alam', 'belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(1, 'admin', 'admin', 'Dicky', 'dickyyusron5@gmail.com', 'admin'),
(2, 'user', 'user', 'Okky', 'okky@gmail.com', 'user'),
(3, 'gran', 'gran', 'grandis', 'gran@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`barang_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`pinjam_id`),
  ADD KEY `barang_id` (`barang_id`),
  ADD KEY `id_user` (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `pinjam_id` (`pinjam_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `pinjam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `tb_kategori` (`kategori_id`);

--
-- Ketidakleluasaan untuk tabel `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD CONSTRAINT `tb_pinjam_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `tb_barang` (`barang_id`);

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`pinjam_id`) REFERENCES `tb_pinjam` (`pinjam_id`),
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
