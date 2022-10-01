-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Okt 2022 pada 05.08
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

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
(1, 'Pendidikan/Agama'),
(2, 'Ditelantarkan/ditelantarkan'),
(3, 'Miskin/tidak mampu'),
(4, 'Sulit diatur/tidak disiplin'),
(5, 'Cacat/cacat'),
(6, 'Korban/kekerasan'),
(7, 'Korban/konflik'),
(8, 'Korban/alam'),
(9, 'Putusan/pengadilan'),
(10, 'Pendidikan/pendidikan'),
(11, 'Yatim/piatu\r\n');

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
(1, 'Doa Rutin 1 Muharram 1444 H', '<div class=\"m8h3af8h l7ghb35v kjdc1dyq kmwttqpk gh25dzvf n3t5jt4f\">\r\n<div dir=\"auto\">Umat Islam Indonesia hari ini, Jumat (29/7/2022), telah memasuki akhir bulan Dzulhijjah, tepatnya tanggal 29 Dzulhijjah 1443 H. Ini sekaligus sebagai tanda bakal memasuki akhir tahun. Jika hilal pada sore ini terlihat, dapat dipastikan lusa, Sabtu (30/7/2022) sudah masuk tahun baru, 1 Muharram 1444 H.</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Ketika menemui akhir dan awal tahun dianjurkan untuk membaca doa begitu juga santri PONDOK PESANTREN RIYADUS SHOLIHIN PUTRA.</div>\r\n<div dir=\"auto\">Doa akhir tahun dibaca selepas shalat Ashar pada Jumat sore. Doa akhir tahun ini dibaca sebanyak 3 kali.</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Berikut doa akhir tahun dan artinya:</div>\r\n<div dir=\"auto\">اَللّٰهُمَّ مَا عَمِلْتُ مِنْ عَمَلٍ فِي هٰذِهِ السَّنَةِ مَا نَهَيْتَنِي عَنْهُ وَلَمْ أَتُبْ مِنْهُ وَحَلُمْتَ فِيْها عَلَيَّ بِفَضْلِكَ بَعْدَ قُدْرَتِكَ عَلَى عُقُوْبَتِيْ وَدَعَوْتَنِيْ إِلَى التَّوْبَةِ مِنْ بَعْدِ جَرَاءَتِيْ عَلَى مَعْصِيَتِكَ فَإِنِّي اسْتَغْفَرْتُكَ فَاغْفِرْلِيْ وَمَا عَمِلْتُ فِيْهَا مِمَّا تَرْضَى وَوَعَدْتَّنِي عَلَيْهِ الثَّوَابَ فَأَسْئَلُكَ أَنْ تَتَقَبَّلَ مِنِّيْ وَلَا تَقْطَعْ رَجَائِيْ مِنْكَ يَا كَرِيْمُ</div>\r\n<div dir=\"auto\">Artinya: &ldquo;Tuhanku, aku meminta ampun atas perbuatanku di tahun ini yang termasuk Kau larang-sementara aku belum sempat bertobat, perbuatanku yang Kau maklumi karena kemurahan-Mu-sementara Kau mampu menyiksaku, dan perbuatan (dosa) yang Kau perintahkan untuk tobat-sementara aku menerjangnya yang berarti mendurhakai-Mu. Tuhanku, aku berharap Kau menerima perbuatanku yang Kau ridhai di tahun ini dan perbuatanku yang terjanjikan pahala-Mu. Janganlah kau membuatku putus asa. Wahai Tuhan Yang Maha Pemurah.&rdquo;</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Berikut doa awal tahun dan artinya:</div>\r\n<div dir=\"auto\">اَللّٰهُمَّ أَنْتَ الأَبَدِيُّ القَدِيمُ الأَوَّلُ وَعَلَى فَضْلِكَ العَظِيْمِ وَكَرِيْمِ جُوْدِكَ المُعَوَّلُ، وَهٰذَا عَامٌ جَدِيْدٌ قَدْ أَقْبَلَ، أَسْأَلُكَ العِصْمَةَ فِيْهِ مِنَ الشَّيْطَانِ وَأَوْلِيَائِهِ، وَالعَوْنَ عَلَى هٰذِهِ النَّفْسِ الأَمَّارَةِ بِالسُّوْءِ، وَالاِشْتِغَالَ بِمَا يُقَرِّبُنِيْ إِلَيْكَ زُلْفَى يَا ذَا الجَلَالِ وَالإِكْرَامِ</div>\r\n<div dir=\"auto\">Artinya: &ldquo;Tuhanku, Kau yang Abadi, Qadim, dan Awal. Atas karunia-Mu yang besar dan kemurahan-Mu yang mulia, Kau menjadi pintu harapan. Tahun baru ini sudah tiba. Aku berlindung kepada-Mu dari bujukan Iblis dan para walinya di tahun ini. Aku pun mengharap pertolongan-Mu dalam mengatasi nafsu yang kerap mendorongku berlaku jahat. Kepada-Mu, aku memohon bimbingan agar aktivitas keseharian mendekatkanku pada rahmat-Mu. Wahai Tuhan Pemilik Kebesaran dan Kemuliaan</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Karangmangu, Jum\'at 29 Juli 2022</div>\r\n<div dir=\"auto\">Follow ig: @rish_putra</div>\r\n<div dir=\"auto\">Fanspage: pondok pesantren riyadus sholihin putra</div>\r\n<div dir=\"auto\">Email: rish.presputra@gmail.com</div>\r\n<div dir=\"auto\">_____</div>\r\n<div dir=\"auto\">Alamat lengkap</div>\r\n<div dir=\"auto\">Ponpes Riyadus Sholihin Putra jl.lokajaya RT. 09 Rw. 02 karangmangu kec Tarub Kab Tegal 52184</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Nomer rekening</div>\r\n<div dir=\"auto\">7685-01-013722-53-3</div>\r\n<div dir=\"auto\">An. Pp riyadus sholihin putra</div>\r\n<div dir=\"auto\">Kontak person</div>\r\n<div dir=\"auto\">+62 838-9634-0565</div>\r\n<div dir=\"auto\">+62 831-5963-5237</div>\r\n</div>', '2022-07-24', 'Foto_User220922-b51b37319f.jpg'),
(3, 'Gebyar Muharram Pondok Pesantren riyadush sholihin Tarub', '<div class=\"m8h3af8h l7ghb35v kjdc1dyq kmwttqpk gh25dzvf n3t5jt4f\">\r\n<div dir=\"auto\">Gebyar Muharram Ponpes Pesantren Riyadus Sholihin Putri dalam rangka Memperingati Tahun Baru Islam 1444 H dan HUT Kemerdekaan Indonesia ke 77</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">____</div>\r\n<div dir=\"auto\">Twibbon HUT RI ke 77</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\"><a class=\"qi72231t nu7423ey n3hqoq4p r86q59rh b3qcqh3k fq87ekyn bdao358l fsf7x5fv rse6dlih s5oniofx m8h3af8h l7ghb35v kjdc1dyq kmwttqpk srn514ro oxkhqvkx rl78xhln nch0832m cr00lzj9 rn8ck1ys s3jn8y49 icdlwmnq cxfqmxzd ezidihy3\" tabindex=\"0\" role=\"link\" href=\"https://l.facebook.com/l.php?u=https%3A%2F%2Ftwb.nz%2Frisputri77%3Ffbclid%3DIwAR30VIq9NAITG-REHRnQMKW4jXKaGRHKCHHYK7LXUGK-JfG-fZKQzk0muXs&amp;h=AT1yi-ArcrE_1q_9OvSPIv3n6AJ1sF-DDEYt-rRxmCn5j4aXA0h-x6hT8DhRwmI0fpoj4u1CfK6mml29gkygAfRi5S92nBmzlc9PJz7EzKjwjFPyG4EySrU1xBn8FoRSkKsM&amp;__tn__=-UK-R&amp;c[0]=AT2PHsxEwS2oPQSOs8ZS6pZXO4na-bpxGt8Z7083zKDE_w9AO6ux8uMoTgyac0K705Qi-dWEr8upWiWr7tmee9SBAb736ar8HPcBY1iqA1Yp8M4qZkeDXnKwwfxkiC0vECbs6r_NkVmzZjjffuC_wGFRPkpGONs5EBVwq320VBV7vhjvGwEijAcmTq3o89Y_R8IbkFLa\" target=\"_blank\" rel=\"nofollow noopener\">https://twb.nz/risputri77</a></div>\r\n<div dir=\"auto\">Ponpes putri</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\"><a class=\"qi72231t nu7423ey n3hqoq4p r86q59rh b3qcqh3k fq87ekyn bdao358l fsf7x5fv rse6dlih s5oniofx m8h3af8h l7ghb35v kjdc1dyq kmwttqpk srn514ro oxkhqvkx rl78xhln nch0832m cr00lzj9 rn8ck1ys s3jn8y49 icdlwmnq cxfqmxzd ezidihy3\" tabindex=\"0\" role=\"link\" href=\"https://l.facebook.com/l.php?u=https%3A%2F%2Ftwb.nz%2Fppsrisputra01%3Ffbclid%3DIwAR2oemjR3dpblwYB5OC51i_ZWoJh4PT9DyMDC2-qzH8syBbwTXCfM7H9dcM&amp;h=AT2p-SW7V1E2---K0saKZM4vvKIq0wVNvWYYodEh0jN_ePyUvLgOnnJqjZ8j-5os5PkhdUP4TD3izfXugSReeSaby-fqP0Y2KkRiYqDidLN_ScJn7XGm1rGyTBH5QW-Tyu64&amp;__tn__=-UK-R&amp;c[0]=AT2PHsxEwS2oPQSOs8ZS6pZXO4na-bpxGt8Z7083zKDE_w9AO6ux8uMoTgyac0K705Qi-dWEr8upWiWr7tmee9SBAb736ar8HPcBY1iqA1Yp8M4qZkeDXnKwwfxkiC0vECbs6r_NkVmzZjjffuC_wGFRPkpGONs5EBVwq320VBV7vhjvGwEijAcmTq3o89Y_R8IbkFLa\" target=\"_blank\" rel=\"nofollow noopener\">https://twb.nz/ppsrisputra01</a></div>\r\n<div dir=\"auto\">Ponpes putra</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Karangmangu, Selasa 16 Agustus 2022</div>\r\n<div dir=\"auto\">Follow ig: @rish_putra</div>\r\n<div dir=\"auto\">Fanspage: pondok pesantren riyadus sholihin putra</div>\r\n<div dir=\"auto\">Email: rish.presputra@gmail.com</div>\r\n<div dir=\"auto\">_____</div>\r\n<div dir=\"auto\">Alamat lengkap</div>\r\n<div dir=\"auto\">Ponpes Riyadus Sholihin Putra jl.lokajaya RT. 09 Rw. 02 karangmangu kec Tarub Kab Tegal 52184</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Nomer rekening</div>\r\n<div dir=\"auto\">7685-01-013722-53-3</div>\r\n<div dir=\"auto\">An. Pp riyadus sholihin putra</div>\r\n<div dir=\"auto\">Kontak person</div>\r\n<div dir=\"auto\">+62 838-9634-0565</div>\r\n<div dir=\"auto\">+62 831-5963-5237</div>\r\n</div>', '2022-07-27', 'Foto_User220922-2f7a8bb0b8.jpg'),
(4, 'Hari Sambangan Pondok pesantren riyadush', '<div class=\"m8h3af8h l7ghb35v kjdc1dyq kmwttqpk gh25dzvf n3t5jt4f\">\r\n<div dir=\"auto\">Di antara kebahagiaan seorang santri di pondok adalah saat orang tua mereka berkunjung ke pesantren untuk menjenguk yang diistilahkan dengan sambangan. Pada momen itulah para santri bisa melepas rindu dengan keluarga dan terlebih bisa mendapat kiriman dan oleh-oleh, diawali dengan istighosah bersama seluruh santri dan keluarga wali santri / orang tua santri.</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Karangmangu, Ahad 4 September 2022</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Link YouTube</div>\r\n<div dir=\"auto\"><a class=\"qi72231t nu7423ey n3hqoq4p r86q59rh b3qcqh3k fq87ekyn bdao358l fsf7x5fv rse6dlih s5oniofx m8h3af8h l7ghb35v kjdc1dyq kmwttqpk srn514ro oxkhqvkx rl78xhln nch0832m cr00lzj9 rn8ck1ys s3jn8y49 icdlwmnq cxfqmxzd ezidihy3\" tabindex=\"0\" role=\"link\" href=\"https://youtube.com/channel/UCga3bFp7THGcihvaH47xMlQ?fbclid=IwAR2qtohgjyBOL1de1lMDpwRN88tu-EpSq5JjocPCZfoVVfOX4fIWRZAaT7c\" target=\"_blank\" rel=\"nofollow noopener\">https://youtube.com/channel/UCga3bFp7THGcihvaH47xMlQ</a></div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Link Instagram</div>\r\n<div dir=\"auto\"><a class=\"qi72231t nu7423ey n3hqoq4p r86q59rh b3qcqh3k fq87ekyn bdao358l fsf7x5fv rse6dlih s5oniofx m8h3af8h l7ghb35v kjdc1dyq kmwttqpk srn514ro oxkhqvkx rl78xhln nch0832m cr00lzj9 rn8ck1ys s3jn8y49 icdlwmnq cxfqmxzd ezidihy3\" tabindex=\"0\" role=\"link\" href=\"https://www.instagram.com/tv/ChPhw4DFZMf/?igshid=YmMyMTA2M2Y%3D&amp;fbclid=IwAR07XYOw0PYimwemNq2q9WdqK54Tft_SQnPOJSZF2IoFXRzj1ZlC3Q28WXU\" target=\"_blank\" rel=\"nofollow noopener\">https://www.instagram.com/tv/ChPhw4DFZMf/?igshid=YmMyMTA2M2Y=</a></div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Link Facebook</div>\r\n<div dir=\"auto\"><a class=\"qi72231t nu7423ey n3hqoq4p r86q59rh b3qcqh3k fq87ekyn bdao358l fsf7x5fv rse6dlih s5oniofx m8h3af8h l7ghb35v kjdc1dyq kmwttqpk srn514ro oxkhqvkx rl78xhln nch0832m cr00lzj9 rn8ck1ys s3jn8y49 icdlwmnq cxfqmxzd pbevjfx6 innypi6y\" tabindex=\"0\" role=\"link\" href=\"https://web.facebook.com/profile.php?id=100083387076652&amp;__cft__[0]=AZXXOx9eoN64sqScnkwFcRISD4tVjFOx2Vjo6gMlD4Iab5xsxPuUGuByzpPKwSdXP9sf8yfN2WsOUaqSmbBjXWTm-KS9gU0nUVIfaB2vFCL-XvziZM916KlUW72lOctLbBKVWw6Lpt5e370SprEGnSxzJ6OUo8kO92UTyLUw8Bl6ng&amp;__tn__=-UK-R\">https://www.facebook.com/profile.php?id=100083387076652</a></div>\r\n<div dir=\"auto\">_____</div>\r\n<div dir=\"auto\">Alamat lengkap</div>\r\n<div dir=\"auto\">Ponpes Riyadus Sholihin Putra jl.lokajaya RT. 09 Rw. 02 karangmangu kec Tarub Kab Tegal 52184</div>\r\n</div>\r\n<div class=\"l7ghb35v kjdc1dyq kmwttqpk gh25dzvf jikcssrz n3t5jt4f\">\r\n<div dir=\"auto\">Nomer rekening</div>\r\n<div dir=\"auto\">7685-01-013722-53-3</div>\r\n<div dir=\"auto\">An. Pp riyadus sholihin putra</div>\r\n<div dir=\"auto\">Kontak person</div>\r\n<div dir=\"auto\">+62 838-9634-0565</div>\r\n<div dir=\"auto\">+62 831-5963-5237</div>\r\n</div>', '2022-07-26', 'Foto_User220922-67e8510080.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `brosur`
--

CREATE TABLE `brosur` (
  `id_brosur` int(11) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `brosur`
--

INSERT INTO `brosur` (`id_brosur`, `image`) VALUES
(1, 'Foto_brosur220922-57086e155e.png');

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
-- Struktur dari tabel `data_assatidz`
--

CREATE TABLE `data_assatidz` (
  `id_assatidz` int(5) NOT NULL,
  `gol_assatidz` char(1) NOT NULL,
  `nik_assatidz` varchar(16) NOT NULL,
  `nama_assatidz` varchar(50) NOT NULL,
  `jk_assatidz` varchar(1) NOT NULL,
  `tempat_lahir_assatidz` varchar(50) NOT NULL,
  `tgl_lahir_assatidz` date NOT NULL,
  `mulai_kerja` date NOT NULL,
  `pendidikan` char(1) NOT NULL,
  `pelatihan` text NOT NULL,
  `foto_assatidz` varchar(50) NOT NULL,
  `id_user` int(5) NOT NULL,
  `telp_assatidz` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_assatidz`
--

INSERT INTO `data_assatidz` (`id_assatidz`, `gol_assatidz`, `nik_assatidz`, `nama_assatidz`, `jk_assatidz`, `tempat_lahir_assatidz`, `tgl_lahir_assatidz`, `mulai_kerja`, `pendidikan`, `pelatihan`, `foto_assatidz`, `id_user`, `telp_assatidz`) VALUES
(2, '1', '973957959995', 'Laila', 'P', 'Klaten', '2022-09-13', '2022-09-15', '3', '', 'Foto_assatidz220919-b53e19cc3c.jpeg', 25, '085325329090'),
(3, '2', '123', 'bbb', 'L', 'tegal', '2022-09-01', '2022-09-01', '1', '', 'Foto_assatidz220927-54296ac609.png', 25, '09987777');

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
  `jabatan` char(1) NOT NULL,
  `status` char(1) NOT NULL,
  `pendidikan` char(1) NOT NULL,
  `pelatihan` text NOT NULL,
  `foto_pengurus` varchar(50) DEFAULT NULL,
  `id_user` int(5) NOT NULL,
  `telp_pengurus` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_guru`
--

INSERT INTO `data_guru` (`id_pengurus`, `nik_pengurus`, `nama_pengurus`, `jk_pengurus`, `tempat_lahir_pengurus`, `tgl_lahir_pengurus`, `mulai_kerja`, `jabatan`, `status`, `pendidikan`, `pelatihan`, `foto_pengurus`, `id_user`, `telp_pengurus`) VALUES
(10, '979796888', 'Irvanto', 'L', 'Klaten', '2022-09-19', '2022-09-19', '2', '1', '1', '', 'Foto_Pengurus220919-92a5aac809.jpeg', 25, '083852746900');

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
  `pekerjaan_ayah` varchar(200) NOT NULL,
  `pekerjaan_ibu` varchar(200) NOT NULL,
  `agama` char(1) NOT NULL,
  `pendidikan` char(1) NOT NULL,
  `foto_anak` varchar(50) NOT NULL,
  `tahun_masuk` char(4) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nik_anak` varchar(16) NOT NULL,
  `status` char(1) NOT NULL,
  `scan_ijasah` varchar(250) NOT NULL,
  `scan_kk` varchar(250) NOT NULL,
  `scan_akte` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `ktp` varchar(250) NOT NULL,
  `umur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_santri`
--

INSERT INTO `data_santri` (`id_anak`, `nama_anak`, `jk_anak`, `tempat_lahir_anak`, `tgl_lahir_anak`, `nama_ibu_kandung`, `nama_bapak_kandung`, `pekerjaan_ayah`, `pekerjaan_ibu`, `agama`, `pendidikan`, `foto_anak`, `tahun_masuk`, `id_user`, `id_kelas`, `nik_anak`, `status`, `scan_ijasah`, `scan_kk`, `scan_akte`, `alamat`, `no_hp`, `ktp`, `umur`) VALUES
(74, 'elok saputri', 'P', 'tegal', '2013-02-01', 'ropiah', 'ropiin', 'petani', 'dokter', '1', '3', 'Foto_Anak220928-94ea0e4654.jpg', '2022', 0, 1, '13456677', '4', 'Scan_Ijasah220928-3ae83b9756.png', 'Scan_Kartu_Keluarga220928-f0fb53e041.png', 'Scan_Kartu_Akte_Kelahiran220928-a9f8c3ed04.png', 'kota tegal ', '0764367888', 'KTP_Orang_Tua220928-e2cd519881.png', 10),
(75, 'ainun', 'P', 'tegal', '2013-10-01', 'hana', 'dwi romat', 'petani', 'dokter', '1', '2', 'Foto_Anak220928-543713d86d.jpg', '2022', 0, 0, '1789990', '4', 'Scan_Ijasah220928-05fbdbd085.png', 'Scan_Kartu_Keluarga220928-46a2c3b37d.png', 'Scan_Kartu_Akte_Kelahiran220928-8b5bd00409.png', 'kota tegal', '0897777', 'KTP_Orang_Tua220928-a668961a11.png', 9),
(76, 'ayu', 'P', 'tegal', '2012-09-10', 'tumirah', 'tukira', 'petani', 'petani', '1', '1', 'Foto_Anak220928-e3b71a5b83.jpg', '2022', 0, 0, '1239', '4', '', 'Scan_Kartu_Keluarga220928-4b6feb6c95.png', 'Scan_Kartu_Akte_Kelahiran220928-3489f92a99.png', 'kabupaten tegal', '087654333333', 'KTP_Orang_Tua220928-89f6a6d16f.png', 9);

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
('1239', '', '', '', '', '', '', '', '', ''),
('13456677', '', '', '', '', '', '', '', '', ''),
('1789990', '', '', '', '', '', '', '', '', ''),
('3173075209010002', '2', '3', '1', 'Ds. Bogares Kidul Rt. 08/02 Kec. Pangkah Kab. Tegal', 'orangtua', '1', '2', '5', '-'),
('3173076110031002', '2', '3', '1', 'Ds. Bogares Kidul Rt. 08/02 Kec. Pangkah Kab. Tegal', 'Orang tua', '1', '2', '5', '-'),
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
(1, 'Foto_User220922-48e852000c.jpg', 'gebyar muharram'),
(2, 'Foto_User220726-dd59985f13.png', 'Memancing');

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
(37, '2020-07-12', 'Donasi dari Bapak Ipang', 250000, '1', 250000, NULL, 56350000, 25);

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
  `youtube` text NOT NULL,
  `fasilitas` text NOT NULL,
  `nama_kepala_ponpes` varchar(150) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `no_hp`, `email`, `pendaftaran_awal`, `batas_akhir`, `periode`, `whatsapp`, `instagram`, `facebook`, `youtube`, `fasilitas`, `nama_kepala_ponpes`, `image`) VALUES
(1, '0858422225857', 'ppsriyadussholihintarub@gmail.com', '2022-07-06', '2022-08-30', '2022/2023', '085842222585', 'https://www.instagram.com', 'https://www.facebook.com', 'https://www.youtube.com', '<p>Gedung Asrama untuk Putra &amp; Putri, Masjid, Aula Klinik Kesehatan, Kantin dan sarana olahraga.&nbsp;</p>', 'Lutful Hakim, M.Pd.I', 'Foto_User220928-fcb6f24a4e.png');

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
(25, 'Admin', '21232f297a57a5a743894a0e4a801fc3', '0', 'Foto_User200818-070ffad3c0.png', 'adm.eponpes@gmail.com'),
(26, 'Pengurus', 'ef4113dcac30d9fea0cd4ed7caa66ee8', '1', 'Foto_User200708-d79f7940be.png', ''),
(27, 'Bendahara', 'c9ccd7f3c1145515a9d3f7415d5bcbea', '2', 'Foto_User200708-fe373c957b.png', ''),
(30, 'adm', '21232f297a57a5a743894a0e4a801fc3', '0', '', 'husni.hnf@bsi.ac.id');

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
-- Indeks untuk tabel `brosur`
--
ALTER TABLE `brosur`
  ADD PRIMARY KEY (`id_brosur`);

--
-- Indeks untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_tamu`),
  ADD KEY `nik_pengurus` (`id_user`),
  ADD KEY `nik_pengurus_2` (`id_user`);

--
-- Indeks untuk tabel `data_assatidz`
--
ALTER TABLE `data_assatidz`
  ADD PRIMARY KEY (`id_assatidz`);

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
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

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
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `brosur`
--
ALTER TABLE `brosur`
  MODIFY `id_brosur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id_tamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT untuk tabel `data_assatidz`
--
ALTER TABLE `data_assatidz`
  MODIFY `id_assatidz` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id_anak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id_saldo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mpl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
