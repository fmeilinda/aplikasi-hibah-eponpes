-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Agu 2022 pada 10.17
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ponpes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akta`
--

CREATE TABLE `akta` (
  `id_akta` int(5) NOT NULL,
  `akta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akta`
--

INSERT INTO `akta` (`id_akta`, `akta`) VALUES
(1, ' Ya, dapat ditunjukkan'),
(2, 'Ya, tidak dapat ditunjukkan'),
(3, 'Tidak memiliki'),
(4, 'Tidak Tahu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alasan_masuk_panti`
--

CREATE TABLE `alasan_masuk_panti` (
  `id_alasan` int(5) NOT NULL,
  `alasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alasan_masuk_panti`
--

INSERT INTO `alasan_masuk_panti` (`id_alasan`, `alasan`) VALUES
(1, 'Yatim/piatu'),
(2, 'Ditelantarkan/ditelantarkan'),
(3, 'Miskin/tidak mampu'),
(4, 'Sulit diatur/tidak disiplin'),
(5, 'Cacat/cacat'),
(6, 'Korban/kekerasan'),
(7, 'Korban/konflik'),
(8, 'Korban/alam'),
(9, 'Putusan/pengadilan'),
(10, 'Pendidikan/pendidikan'),
(11, 'Pendidikan/Agama\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `tanggal`, `image`) VALUES
(5, 'Sambutan Pondok Pesantren', '<p><strong>Pondok Pesantren Riyadus Sholihin</strong> adalah PonPes Putra dan Putri, yang merupakan PonPes yang menganut sistem pembelajaran modern atau dikenal &ldquo;Pondok Pesantren perpadauan metodologi belajar menggabungkan dari Salaf dan Khalaf&rdquo;. Hafalan menggunakan pelajaran modern 2021 seperti ceramah, diskusi, presentasi serta memanfaatkan teknologi untuk menunjang proses belajar.<br><br>Dibangun di atas pondasi TAQWA dengan Asas Al-Quran dan Sunnah, berupaya mengembalikan masyarakat iman islam kepada ajaran Islam yang sesungguhnya yang datang dari Alloh dan Rasul-Nya serta berupaya mendidik dan membekali kader dakwah dengan Aqidah Sholihah, Ibadah, Adab dan Akhlak dan Mu&rsquo;amalah berdasarkan Al-Quran dan Sunnah dengan Manhaj Salafus Sholeh, Ahlus Sunnah wal Jama&rsquo;ah serta ditambah materi khusus Hafalan Al-Qur&rsquo;an juga dipadu dengan keilmuan umum dan keterampilan yang diimbangi oleh tenaga pengajar professional dibidangnya.</p>', '2022-08-15', 'Foto_User220815-a402fc4a6b.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_tamu` int(5) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `no_hp_tamu` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_tamu` date NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `penerima_tamu` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_tamu`, `nama_tamu`, `no_hp_tamu`, `alamat`, `tgl_tamu`, `keperluan`, `penerima_tamu`, `id_user`) VALUES
(124, 'Ibu Dinar', '-', 'Griya Pangkah', '2017-03-27', 'Buka Puasa Bersama', 'Anak Panti', 25),
(125, 'Moh Rochis', '087776860181', 'Kajen- Talang - Kabupaten Tegal', '2017-03-31', 'Jenguk Anak', 'Hani Latifah', 25),
(126, 'Bapak Drajat Bank Jateng Slawi', '08157622283', 'Jl Waringin Pangkah', '2017-04-17', 'Atar Sembako 6 Dus Mie instant , Beras 2 kg', 'Pengurus Panti', 25),
(127, 'Rofiq Anwar', '08574255309', 'Dukuhringin -Slawi', '2017-04-17', 'Infaq', 'Pengurus Panti', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_donatur`
--

CREATE TABLE `data_donatur` (
  `id_donatur` int(5) NOT NULL,
  `tgl_donatur` date NOT NULL,
  `nama_donatur` varchar(50) NOT NULL,
  `alamat_donatur` varchar(100) NOT NULL,
  `no_hp_donatur` varchar(13) NOT NULL,
  `kategori` char(1) NOT NULL,
  `id_user` int(5) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_donatur`
--

INSERT INTO `data_donatur` (`id_donatur`, `tgl_donatur`, `nama_donatur`, `alamat_donatur`, `no_hp_donatur`, `kategori`, `id_user`, `keterangan`) VALUES
(4, '2020-06-16', 'Ibu Fani', 'Dukuhturi', '085789632565', '2', 25, 'Beras 25 Kg'),
(6, '2020-07-13', 'Ibu Daroh', 'Dukuhsembung', '089632587956', '2', 0, 'Beras 50 kg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_guru`
--

CREATE TABLE `data_guru` (
  `id_pengurus` int(5) NOT NULL,
  `nik_pengurus` varchar(16) NOT NULL,
  `nama_pengurus` varchar(50) NOT NULL,
  `jk_pengurus` varchar(1) NOT NULL,
  `tempat_lahir_pengurus` varchar(50) NOT NULL,
  `tgl_lahir_pengurus` date NOT NULL,
  `mulai_kerja` date NOT NULL,
  `telp_pengurus` varchar(15) NOT NULL,
  `jabatan` char(2) NOT NULL,
  `status` char(1) NOT NULL,
  `pendidikan` char(1) NOT NULL,
  `foto_pengurus` varchar(50) DEFAULT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_guru`
--

INSERT INTO `data_guru` (`id_pengurus`, `nik_pengurus`, `nama_pengurus`, `jk_pengurus`, `tempat_lahir_pengurus`, `tgl_lahir_pengurus`, `mulai_kerja`, `telp_pengurus`, `jabatan`, `status`, `pendidikan`, `foto_pengurus`, `id_user`) VALUES
(10, '332810010503004', 'Andika Tulus Pangestu', 'L', 'Tegal', '2003-05-01', '2022-08-28', '081326036865', '10', '3', '2', 'Foto_Pengurus220828-11cc52d731.jpg', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_santri`
--

CREATE TABLE `data_santri` (
  `id_anak` int(5) NOT NULL,
  `nama_anak` varchar(50) NOT NULL,
  `jk_anak` varchar(1) NOT NULL,
  `tempat_lahir_anak` varchar(50) NOT NULL,
  `tgl_lahir_anak` date NOT NULL,
  `nama_ibu_kandung` varchar(50) NOT NULL,
  `nama_bapak_kandung` varchar(50) NOT NULL,
  `pekerjaan_orangtua` text NOT NULL,
  `agama` char(1) NOT NULL,
  `pendidikan` char(1) NOT NULL,
  `kelas` char(1) NOT NULL,
  `foto_anak` varchar(50) NOT NULL,
  `tahun_masuk` char(4) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat` text NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nik_anak` varchar(16) NOT NULL,
  `status` char(1) NOT NULL,
  `scan_ijasah` varchar(250) NOT NULL,
  `scan_kk` varchar(250) NOT NULL,
  `scan_akte` varchar(250) NOT NULL,
  `scan_ktp` text NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_santri`
--

INSERT INTO `data_santri` (`id_anak`, `nama_anak`, `jk_anak`, `tempat_lahir_anak`, `tgl_lahir_anak`, `nama_ibu_kandung`, `nama_bapak_kandung`, `pekerjaan_orangtua`, `agama`, `pendidikan`, `kelas`, `foto_anak`, `tahun_masuk`, `umur`, `alamat`, `id_user`, `id_kelas`, `nik_anak`, `status`, `scan_ijasah`, `scan_kk`, `scan_akte`, `scan_ktp`, `email`, `no_hp`) VALUES
(37, 'Wafiq Azizah', 'P', 'Tegal', '2000-07-27', 'Ria Angelina', 'Nazril Ilham', 'Wiraswasta', '1', '4', '2', 'Foto_Anak220828-804b8c2054.png', '', '', 'Jl. Bintang di Langit, No.4 ', 0, 0, '33281001060003', '1', 'bit.ly/ijasah', 'bit.ly/kartukeluarga', 'bit.ly/akta', 'bit.ly/ktp', 'wafiqazizah@gmail.com', '088807867654'),
(38, 'Arvano Salma Fatimatus Zahra', 'P', 'Jakarta', '2002-09-09', 'Narova Morina Sinaga', 'Akhdiyat Duta Modjo', 'Wiraswasta', '1', '4', '', 'Foto_Anak220828-f472e2829a.png', '', '', 'Jl.Cendrawasih, No 45', 0, 0, '33281001060002', '3', 'bit.ly/ijasah', 'bit.ly/kartukeluarga', 'bit.ly/akta', '', 'andhikatuluspangestu@gmail.com', ''),
(39, 'Hilman Maulana', 'L', 'Tegal', '2004-06-01', 'Zaskia Putri Tanjung', 'Reza Aditya Harlan', 'Wiraswasta', '1', '3', '', 'Foto_Anak220828-4a4b8cfe94.png', '', '', 'Jl. Damai, No.23', 0, 0, '33281001020067', '4', 'bit.ly/ijasah', 'bit.ly/kartukeluarga', 'bit.ly/akta', '', 'hilmanmaulana@gmail.com', '088807867842');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_santri`
--

CREATE TABLE `detail_santri` (
  `nik_anak` varchar(16) NOT NULL,
  `jenis_masalah` char(1) NOT NULL,
  `keadaan_saat_ini` char(1) NOT NULL,
  `akta` char(1) NOT NULL,
  `tempat_tinggal` varchar(100) NOT NULL,
  `wali` varchar(50) NOT NULL,
  `alasan_masuk_panti` char(1) NOT NULL,
  `masuk_dtks` char(1) NOT NULL,
  `jenis_bantuan` char(1) NOT NULL,
  `tahun_bantuan` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_santri`
--

INSERT INTO `detail_santri` (`nik_anak`, `jenis_masalah`, `keadaan_saat_ini`, `akta`, `tempat_tinggal`, `wali`, `alasan_masuk_panti`, `masuk_dtks`, `jenis_bantuan`, `tahun_bantuan`) VALUES
('12345678777', '1', '1', '1', '-', '-', '1', '1', '1', '-'),
('123456789977', '1', '1', '1', '-', '-', '1', '1', '1', '-'),
('12345678999', '7', '7', '1', 'tegal', '-', '1', '2', '5', '-'),
('3173075209010002', '2', '3', '1', 'Ds. Bogares Kidul Rt. 08/02 Kec. Pangkah Kab. Tegal', 'orangtua', '1', '2', '5', '-'),
('3173076110031002', '2', '3', '1', 'Ds. Bogares Kidul Rt. 08/02 Kec. Pangkah Kab. Tegal', 'Orang tua', '1', '2', '5', '-'),
('33281001020067', '8', '1', '1', 'Tegal', 'Ryan Pangestu', '1', '2', '5', '-'),
('33281001060002', '8', '1', '1', 'Tegal', 'Tsandi Rizal Adi Pradana', '1', '2', '5', '-'),
('33281001060003', '7', '1', '1', 'Tegal', 'Tsandi Rizal Adi Pradana', '1', '2', '5', '-'),
('3328124312010004', '2', '1', '1', 'Ds. Getas Kerep Rt. 15/03 Kec. Talang Kab. Tegal', 'orang tua', '3', '2', '5', '-'),
('3328134504040005', '2', '3', '1', 'Ds. Kademangaran Rt. 07/01 Kec. Dukuhturi Kab. Tegal', 'Ibu', '3', '1', '4', '2020'),
('3328164607030003', '2', '1', '1', 'Ds. Kertasari Rt. 02/01 Kec. Suradadi Kab. Tegal', 'Orang Tua', '3', '2', '5', '-'),
('3328165202040006', '2', '3', '1', 'Ds. Suradadi Rt. 01/17 Kec. Suradadi Kab. Tegal', 'Ibu', '3', '1', '4', '2020'),
('3328167012030005', '2', '1', '1', 'Ds. Gembongdadi Rt. 10/01 Kec. Suradadi Kab. Tegal', 'Orang Tua', '3', '2', '5', '-'),
('3328809521104000', '2', '1', '1', 'Ds. Bogares Kidul Rt. 15/03 Kec. Pangkah Kab. Tegal', 'Orang Tua', '3', '1', '4', '2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `judul` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `image`, `judul`) VALUES
(3, 'Foto_User220815-2feb2d5d03.jpeg', 'Sholat Berjamaah'),
(4, 'Foto_User220815-3477d8be67.jpg', 'Santri menuju Sholat Jum\'at');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `id_barang` int(5) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `identitas_barang` varchar(50) NOT NULL,
  `tgl_terima` date NOT NULL,
  `keadaan` varchar(50) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL,
  `kode_barang` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`id_barang`, `nama_barang`, `identitas_barang`, `tgl_terima`, `keadaan`, `jumlah`, `asal`, `id_user`, `kode_barang`) VALUES
(1, 'Laptop', 'Merk Toshiba Intel Premium Ram 2 GB HDD 500 GB', '2019-05-07', '1', 1, 'Panti Asuhan', 25, 'PA1905001'),
(2, 'Printer ', 'Merk Canon MP287', '2019-05-07', '1', 1, 'Hibah', 25, 'PA1905002'),
(3, 'Kipas Angin', 'Merk Cosmos', '2019-05-07', '1', 1, 'Panti Asuhan', 25, 'PA1905003'),
(4, 'Buffet', 'Kayu jati asli', '2019-06-01', '1', 1, 'Panti Asuhan', 25, 'PA1906004'),
(5, 'Lemari', 'Kayu jati asli', '2019-06-01', '1', 1, 'Panti Asuhan', 25, 'PA1906005'),
(6, 'Kursi Lipat', '-', '2019-06-01', '1', 4, 'Panti Asuhan', 25, 'PA1906006'),
(7, 'Buffet (2)', 'Kayu jati asli', '2019-07-01', '1', 4, 'Hibah', 25, 'PA1907007'),
(8, 'Papan Visi Misi', '-', '2019-07-01', '1', 1, 'Panti Asuhan', 25, 'PA1907008'),
(9, 'Papan Data Anak', '-', '2019-07-11', '1', 2, 'Panti Asuhan', 25, 'PA1907009'),
(10, 'Struktur Data Pengurus', '-', '2019-01-01', '1', 1, 'Panti Asuhan', 25, 'PA1907010');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_bantuan`
--

CREATE TABLE `jenis_bantuan` (
  `id_bantuan` int(5) NOT NULL,
  `bantuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_bantuan`
--

INSERT INTO `jenis_bantuan` (`id_bantuan`, `bantuan`) VALUES
(1, 'PKSA/PROGRESA'),
(2, 'PKH'),
(3, 'KIP'),
(4, 'KIS\r\n'),
(5, 'Tidak Ada\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_masalah`
--

CREATE TABLE `jenis_masalah` (
  `id_jenis_masalah` int(5) NOT NULL,
  `jenis_masalah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_masalah`
--

INSERT INTO `jenis_masalah` (`id_jenis_masalah`, `jenis_masalah`) VALUES
(1, 'Balita Terlantar'),
(2, 'Anak Terlantar'),
(3, 'Anak Jalanan'),
(4, 'Anak Berhadapan Hukum'),
(5, 'Remaja Rentan'),
(6, 'Anak Penyandang Disabilias'),
(7, 'Anak Memerlukan Perlindungan Khusus'),
(8, 'tidak ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keadaan_saat_ini`
--

CREATE TABLE `keadaan_saat_ini` (
  `id_keadaan` int(5) NOT NULL,
  `keadaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keadaan_saat_ini`
--

INSERT INTO `keadaan_saat_ini` (`id_keadaan`, `keadaan`) VALUES
(1, 'Kedua Orang Tua Masih Hidup'),
(2, 'Yatim Piatu'),
(3, 'Yatim '),
(4, 'Piatu'),
(5, 'Keadaan Orang Tua Tidak Diketahui'),
(6, 'Keadaan Ayah Tidak Diketahui'),
(7, 'Keadaan Ibu Tidak Diketahui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuangan`
--

CREATE TABLE `keuangan` (
  `id_saldo` int(5) NOT NULL,
  `tgl_keuangan` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jumlah_uang` float NOT NULL,
  `type` char(1) NOT NULL,
  `pemasukan` float DEFAULT NULL,
  `pengeluaran` float DEFAULT NULL,
  `saldo` float DEFAULT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keuangan`
--

INSERT INTO `keuangan` (`id_saldo`, `tgl_keuangan`, `keterangan`, `jumlah_uang`, `type`, `pemasukan`, `pengeluaran`, `saldo`, `id_user`) VALUES
(26, '2020-05-01', 'Saldo Awal', 53800000, '1', 53800000, NULL, 53800000, 25),
(27, '2020-07-02', 'Honor Zaki', 1500000, '2', NULL, 1500000, 52300000, 25),
(28, '2020-07-02', 'Uang Transport', 200000, '2', NULL, 200000, 52100000, 25),
(29, '2020-07-05', 'Donasi Hamba Allah', 700000, '1', 700000, NULL, 52800000, 25),
(30, '2020-07-06', 'Fotocopy bulan maret-juni', 250000, '2', NULL, 250000, 52550000, 25),
(31, '2020-07-08', 'Donasi Bapak Rohudi', 500000, '1', 500000, NULL, 53050000, 25),
(32, '2020-07-10', 'Donasi Dari Bu Masturoh', 500000, '1', 500000, NULL, 53550000, 25),
(33, '2020-07-12', 'donasi dari mas budi', 150000, '1', 150000, NULL, 53700000, 25),
(34, '2020-07-15', 'Honor Ainun', 600000, '2', NULL, 600000, 53100000, 25),
(35, '2020-07-16', 'Donasi Ibu Hj Sunarto', 1000000, '1', 1000000, NULL, 54100000, 25),
(36, '2020-07-16', 'Donasi Pak Trisno Jakarta', 2000000, '1', 2000000, NULL, 56100000, 25),
(37, '2020-07-12', 'Donasi dari Bapak Ipang', 250000, '1', 250000, NULL, 56350000, 25),
(38, '2022-08-28', 'Donasi', 50000000, '1', 50000000, NULL, 106350000, 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mpl` int(11) NOT NULL,
  `nama_mata_pelajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pendaftaran_awal` date NOT NULL,
  `batas_akhir` date NOT NULL,
  `periode` varchar(100) NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `instagram` text NOT NULL,
  `facebook` text NOT NULL,
  `youtube` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `no_hp`, `email`, `pendaftaran_awal`, `batas_akhir`, `periode`, `whatsapp`, `instagram`, `facebook`, `youtube`) VALUES
(1, '085842222585', 'ppsriyadussholihin@gmail.com', '2022-07-06', '2022-08-30', '2022/2023', '085842222585', 'https://www.instagram.com', 'https://www.facebook.com', 'https://www.youtube.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_kel` int(5) NOT NULL,
  `nomor_surat_kel` varchar(20) NOT NULL,
  `tgl_surat_kel` date NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `upload_file` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL,
  `pengirim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat_kel`, `nomor_surat_kel`, `tgl_surat_kel`, `tujuan`, `perihal`, `upload_file`, `id_user`, `pengirim`) VALUES
(1, '10/PAPAS/VI/2019', '2019-06-27', 'Pengurus Panti', 'Undangan Pertemuan Rutin', '', 25, 'Panti Asuhan'),
(2, 'II/PAPAS/VII/2019', '2019-07-18', 'Kepala Dinas Sosial Kabupaten Tegal', 'Permohonan Rekomendasi', 'Surat_Keluar200713-b7799d0004.pdf', 25, 'Panti Asuhan'),
(3, '12/PAPAS/VII/2019', '2019-07-18', 'Kepala Dinas Sosial Jawa Tengah', 'Perhomohan Rekomendasi', 'Surat_Keluar200713-a1231cf8c0.pdf', 25, 'Panti Asuhan'),
(4, '20/PAPAS/XII/2019', '2019-12-11', 'Pengurus Panti', 'Undangan Pertemuan Rutin', 'Surat_Keluar200713-3a95790514.pdf', 25, 'Panti Asuhan'),
(5, '01/PAPAS/II/2020', '2020-02-15', 'Pengurus Panti', 'Undangan Pertemuan Panti', 'Surat_Keluar200713-b597460c50.pdf', 25, 'Panti Asuhan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat` int(5) NOT NULL,
  `tgl_terima` date NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `upload_file` varchar(50) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat`, `tgl_terima`, `nomor_surat`, `tgl_surat`, `perihal`, `pengirim`, `upload_file`, `penerima`, `id_user`) VALUES
(1, '2019-05-20', 'A.1/028/MPS/JTG/V/20', '2019-05-20', 'Undangan Rekornas MPS ', 'MPS PWM JATENG', 'Surat_Keluar200713-452bf208bf.pdf', 'Panti Asuhan', 25),
(2, '2019-05-14', '126/III/.4.A.u/A/201', '2019-05-14', 'Undangan  Buka Bersama', 'Ponpes Ahmad Dahlan', 'Surat_Keluar200713-0ef037ce94.pdf', 'Panti Asuhan', 25),
(3, '2019-05-17', '429/III/8.Au/2019', '2019-05-17', 'Undangan', 'BMT Artha Surya', 'Surat_Keluar200713-feddfedc98.pdf', 'Panti Asuhan', 25),
(4, '2020-01-25', '02/Pan.MTQ/XII/2019', '2020-01-25', 'Undangan Mutsabaqoh', 'LKSA Bina Insan Mulia Tegal', 'Surat_Keluar200713-6878fea7a9.pdf', 'Panti Asuhan', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` char(1) NOT NULL COMMENT '0:Master Admin, 1:Pengurus, 2:Keuangan',
  `img_user` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `password`, `role`, `img_user`, `email`) VALUES
(25, 'Admin', '21232f297a57a5a743894a0e4a801fc3', '0', 'Foto_User220815-79d6b27af5.png', 'adm.eponpes@gmail.com'),
(26, 'Pengurus', 'ef4113dcac30d9fea0cd4ed7caa66ee8', '1', 'Foto_User220815-aff2cf4f25.png', 'pengurus@gmail.com'),
(27, 'Bendahara', 'c9ccd7f3c1145515a9d3f7415d5bcbea', '2', 'Foto_User220815-c88741d444.png', 'example@gmail.com'),
(30, 'Administrator', '21232f297a57a5a743894a0e4a801fc3', '0', 'Foto_User220815-66e5e234bc.png', 'husni.hnf@bsi.ac.id'),
(31, 'Andika Tulus Pangestu', '9fc42c9730420cfec946f013e8ea94ae', '1', 'Foto_User220815-59b05b8a95.png', 'andhikatuluspangestu@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `token_id` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akta`
--
ALTER TABLE `akta`
  ADD PRIMARY KEY (`id_akta`);

--
-- Indeks untuk tabel `alasan_masuk_panti`
--
ALTER TABLE `alasan_masuk_panti`
  ADD PRIMARY KEY (`id_alasan`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_tamu`),
  ADD KEY `nik_pengurus` (`id_user`),
  ADD KEY `nik_pengurus_2` (`id_user`);

--
-- Indeks untuk tabel `data_donatur`
--
ALTER TABLE `data_donatur`
  ADD PRIMARY KEY (`id_donatur`);

--
-- Indeks untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indeks untuk tabel `data_santri`
--
ALTER TABLE `data_santri`
  ADD PRIMARY KEY (`id_anak`),
  ADD KEY `nik_pengurus` (`id_user`);

--
-- Indeks untuk tabel `detail_santri`
--
ALTER TABLE `detail_santri`
  ADD PRIMARY KEY (`nik_anak`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `nik_pengurus` (`id_user`),
  ADD KEY `nik_pengurus_2` (`id_user`);

--
-- Indeks untuk tabel `jenis_bantuan`
--
ALTER TABLE `jenis_bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indeks untuk tabel `jenis_masalah`
--
ALTER TABLE `jenis_masalah`
  ADD PRIMARY KEY (`id_jenis_masalah`);

--
-- Indeks untuk tabel `keadaan_saat_ini`
--
ALTER TABLE `keadaan_saat_ini`
  ADD PRIMARY KEY (`id_keadaan`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id_saldo`),
  ADD KEY `nik_pengurus` (`id_user`),
  ADD KEY `nik_pengurus_2` (`id_user`);

--
-- Indeks untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mpl`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_kel`),
  ADD KEY `nik_pengurus` (`id_user`),
  ADD KEY `nik_pengurus_2` (`id_user`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akta`
--
ALTER TABLE `akta`
  MODIFY `id_akta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `alasan_masuk_panti`
--
ALTER TABLE `alasan_masuk_panti`
  MODIFY `id_alasan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id_tamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT untuk tabel `data_donatur`
--
ALTER TABLE `data_donatur`
  MODIFY `id_donatur` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id_pengurus` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_santri`
--
ALTER TABLE `data_santri`
  MODIFY `id_anak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jenis_bantuan`
--
ALTER TABLE `jenis_bantuan`
  MODIFY `id_bantuan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jenis_masalah`
--
ALTER TABLE `jenis_masalah`
  MODIFY `id_jenis_masalah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `keadaan_saat_ini`
--
ALTER TABLE `keadaan_saat_ini`
  MODIFY `id_keadaan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id_saldo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mpl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_kel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
