-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2020 pada 18.03
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mikelas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sub_kelas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `kode`, `user_id`, `sub_kelas_id`) VALUES
(12, 'Bahasa Pemrograman II - SI01', 'QWERT', 1, 1),
(15, 'PCS', 'PYBQS', 1, 1),
(17, 'IPA', 'JPLDL', 2, 0),
(18, 'IPS', 'WCREP', 2, 0),
(19, 'Matematika', 'FKUSD', 2, 0),
(20, 'PKN', 'ZRAQH', 2, 0),
(21, 'TIK', 'WJPFW', 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_access`
--

CREATE TABLE `kelas_access` (
  `id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas_access`
--

INSERT INTO `kelas_access` (`id`, `kelas_id`, `user_id`) VALUES
(1, 14, 23),
(3, 1, 23),
(4, 12, 23),
(5, 1, 24),
(9, 17, 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `file` varchar(128) NOT NULL,
  `video` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `deskripsi`, `photo`, `file`, `video`, `user_id`, `kelas_id`) VALUES
(1, 'afsdfsfsdf', '', '', 'https://www.youtube.com/embed/3Tg_ZZEWXKU', 2, 1),
(5, 'Tugas 1', '', '', 'https://www.youtube.com/embed/3Tg_ZZEWXKU', 1, 12),
(6, 'Tugas 2', '', '', '', 1, 12),
(8, 'TUGAS 1', '', '', 'https://www.youtube.com/embed/3Tg_ZZEWXKU', 2, 1),
(18, 'aaa', 'asisten2.jpg', '', '', 2, 1),
(19, 'dfgdfg', 'asisten2.jpg', 'Soal.pdf', 'https://www.youtube.com/embed/3Tg_ZZEWXKU', 2, 1),
(20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris scelerisque leo ac lacus euismod, at molestie turpis efficitur. Integer eu consectetur odio. Proin vel urna id quam sagittis lobortis sit amet quis mauris. Nunc pulvinar ullamcorper justo a pellentesque. Nulla at risus sit amet nulla hendrerit elementum a in odio. Morbi viverra ex quis nisl porttitor, quis eleifend ligula mattis. Sed condimentum libero ac purus euismod, sit amet hendrerit ante sollicitudin. Maecenas ullamcorper arcu rhoncus luctus egestas. Cras nec turpis nulla. Nunc vel tincidunt enim. Nunc auctor, risus a euismod facilisis, sapien tellus eleifend dolor, vel pellentesque orci turpis vel ligula. Morbi iaculis malesuada est et fermentum.', 'Capture.PNG', 'Soal.pdf', 'https://www.youtube.com/embed/3Tg_ZZEWXKU', 2, 1),
(21, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed metus at enim semper ullamcorper. Vestibulum fringilla eros ut dui dapibus, in pharetra orci finibus. In at mauris vitae lectus consequat aliquet non id elit. Mauris consectetur felis vitae aliquam rutrum. In dictum vestibulum nisi id hendrerit. Suspendisse potenti. Nunc lobortis urna eu nisi luctus, id placerat velit vehicula. Vestibulum dui urna, efficitur ut justo ut, convallis rhoncus mauris. Duis aliquet lorem id orci viverra, non finibus ligula placerat. Phasellus non volutpat lectus. Aliquam aliquet sem ac euismod dapibus. Donec iaculis quis erat eget varius. Aenean placerat luctus mollis. Cras tempus justo sit amet euismod sodales. Maecenas lobortis justo nunc. Nam rhoncus odio vel odio aliquam, a viverra odio volutpat.\r\n\r\nOrci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In vestibulum sit amet arcu pharetra volutpat. Pellentesque habitant morbi tristique senectus et netus ', 'Capture1.PNG', '', '', 2, 14),
(22, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum dignissim metus. Nam sed fermentum nisi. Duis nec purus vel risus vulputate ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris fringilla purus eget scelerisque dictum. Pellentesque id risus vel nunc venenatis fringilla vitae in quam. In sagittis, ligula a finibus vulputate, odio lorem auctor velit, in commodo quam orci sed felis. Aenean condimentum vulputate condimentum. Nullam luctus eu metus a faucibus. Aliquam erat volutpat. Mauris elementum dignissim ligula at vestibulum.\r\n\r\nNullam turpis lectus, sagittis a rutrum at, fermentum sed nisl. Cras suscipit urna felis, vel semper odio ornare ac. Suspendisse et libero placerat, hendrerit augue eu, iaculis tellus. Vestibulum semper lacinia dui. Cras interdum dui mi, sit amet finibus mauris cursus volutpat. Sed turpis libero, iaculis ac enim a, ornare congue lectus. Fusce quis augue eu magna tincidunt viverra. Mor', 'Capture2.PNG', 'CodeIgniter-3_1_10.zip', 'https://www.youtube.com/embed/8ROgaHfLRq0', 2, 17),
(23, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum dignissim metus. Nam sed fermentum nisi. Duis nec purus vel risus vulputate ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris fringilla purus eget scelerisque dictum. Pellentesque id risus vel nunc venenatis fringilla vitae in quam. In sagittis, ligula a finibus vulputate, odio lorem auctor velit, in commodo quam orci sed felis. Aenean condimentum vulputate condimentum. Nullam luctus eu metus a faucibus. Aliquam erat volutpat. Mauris elementum dignissim ligula at vestibulum.\r\n\r\nNullam turpis lectus, sagittis a rutrum at, fermentum sed nisl. Cras suscipit urna felis, vel semper odio ornare ac. Suspendisse et libero placerat, hendrerit augue eu, iaculis tellus. Vestibulum semper lacinia dui. Cras interdum dui mi, sit amet finibus mauris cursus volutpat. Sed turpis libero, iaculis ac enim a, ornare congue lectus. Fusce quis augue eu magna tincidunt viverra. Morbi ut libero malesuada, tristique lacus vitae, venenatis est. Praesent malesuada dictum interdum.', 'Screenshot_(62).png', 'CodeIgniter-3_1_10.zip', '', 2, 17),
(24, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum dignissim metus. Nam sed fermentum nisi. Duis nec purus vel risus vulputate ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris fringilla purus eget scelerisque dictum. Pellentesque id risus vel nunc venenatis fringilla vitae in quam. In sagittis, ligula a finibus vulputate, odio lorem auctor velit, in commodo quam orci sed felis. Aenean condimentum vulputate condimentum. Nullam luctus eu metus a faucibus. Aliquam erat volutpat. Mauris elementum dignissim ligula at vestibulum.\r\n\r\nNullam turpis lectus, sagittis a rutrum at, fermentum sed nisl. Cras suscipit urna felis, vel semper odio ornare ac. Suspendisse et libero placerat, hendrerit augue eu, iaculis tellus. Vestibulum semper lacinia dui. Cras interdum dui mi, sit amet finibus mauris cursus volutpat. Sed turpis libero, iaculis ac enim a, ornare congue lectus. Fusce quis augue eu magna tincidunt viverra. Morbi ut libero malesuada, tristique lacus vitae, venenatis est. Praesent malesuada dictum interdum.', 'Screenshot_(1).png', '', '', 2, 17),
(25, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum dignissim metus. Nam sed fermentum nisi. Duis nec purus vel risus vulputate ultrices. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris fringilla purus eget scelerisque dictum. Pellentesque id risus vel nunc venenatis fringilla vitae in quam. In sagittis, ligula a finibus vulputate, odio lorem auctor velit, in commodo quam orci sed felis. Aenean condimentum vulputate condimentum. Nullam luctus eu metus a faucibus. Aliquam erat volutpat. Mauris elementum dignissim ligula at vestibulum.\r\n\r\nNullam turpis lectus, sagittis a rutrum at, fermentum sed nisl. Cras suscipit urna felis, vel semper odio ornare ac. Suspendisse et libero placerat, hendrerit augue eu, iaculis tellus. Vestibulum semper lacinia dui. Cras interdum dui mi, sit amet finibus mauris cursus volutpat. Sed turpis libero, iaculis ac enim a, ornare congue lectus. Fusce quis augue eu magna tincidunt viverra. Morbi ut libero malesuada, tristique lacus vitae, venenatis est. Praesent malesuada dictum interdum.', 'Screenshot_(41).png', '', 'https://www.youtube.com/embed/cb3-Cm3Al3c', 2, 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_assignment`
--

CREATE TABLE `materi_assignment` (
  `id` int(11) NOT NULL,
  `file` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `materi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materi_assignment`
--

INSERT INTO `materi_assignment` (`id`, `file`, `user_id`, `materi_id`) VALUES
(9, 'MuslimGoFIXBANGET.zip', 23, 19),
(11, 'MuslimGoFIXBANGET.zip', 23, 19),
(13, 'MuslimGoFIXBANGET.zip', 23, 19),
(15, 'MuslimGoFIXBANGET.zip', 23, 19),
(17, 'img0051.jpg', 24, 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_komentar`
--

CREATE TABLE `materi_komentar` (
  `id` int(11) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `materi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materi_komentar`
--

INSERT INTO `materi_komentar` (`id`, `komentar`, `user_id`, `materi_id`) VALUES
(1, 'halo', 23, 20),
(2, 'ioni error', 23, 20),
(3, 'apa wei', 24, 20),
(4, 'halo', 24, 19),
(5, 'ada pa ini bos', 2, 20),
(6, 'woy', 2, 20),
(7, 'halo', 24, 8),
(8, 'halo', 24, 21),
(9, 'apa wei', 2, 21),
(10, 'Halo test', 24, 25),
(11, 'pie bro', 2, 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_essay`
--

CREATE TABLE `soal_essay` (
  `id` int(11) NOT NULL,
  `soal` varchar(1000) NOT NULL,
  `jawaban` varchar(1000) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `ujian_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soal_essay`
--

INSERT INTO `soal_essay` (`id`, `soal`, `jawaban`, `gambar`, `ujian_id`) VALUES
(1, 'Jelaskan pengertian angin', 'aliran udara dalam jumlah yang besar diakibatkan oleh rotasi bumi dan juga karena adanya perbedaan tekanan udara di sekitarnya. Angin bergerak dari tempat bertekanan udara tinggi ke bertekanan udara rendah', '', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_pilgan`
--

CREATE TABLE `soal_pilgan` (
  `id` int(11) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `d` varchar(255) NOT NULL,
  `e` varchar(255) NOT NULL,
  `jawaban` varchar(1) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `ujian_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal_pilgan`
--

INSERT INTO `soal_pilgan` (`id`, `soal`, `a`, `b`, `c`, `d`, `e`, `jawaban`, `gambar`, `ujian_id`) VALUES
(1, 'Siapa Nama saya?', 'Yuswan', 'Edi', 'Eko', 'Dodi', 'Dimas', 'a', '', 2),
(2, 'Nama hewan herbivora?', 'Ular', 'Anjing', 'Serigala', 'Kucing', 'Sapi', 'e', '', 2),
(3, '1', '2', '3', '4', '5', '6', 'a', '', 2),
(4, '1', '2', '3', '4', '5', '6', 'a', '', 2),
(6, '123', '123', '123', '123', '123', '123', 'a', '', 2),
(7, '90', '90', '90', '90', '90', '90', 'b', '', 2),
(8, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'e', '', 2),
(9, 'Apa?', 'Gapapa', 'Ya', 'Gak', 'Apa', 'Gimana', 'd', '', 5),
(10, 'Habis 1 berapa?', '2', '3', '4', '5', '6', 'a', '', 5),
(11, 'Apa nama hewan yang tidak memiliki kaki?', 'Ayam', 'Ular', 'Katak', 'Semut', 'Laba laba', 'b', '', 8),
(12, 'Apa nama hewan karnivora?', 'Sapi', 'Kambing', 'Ayam', 'Kelinci', 'Kucing', 'e', '', 8),
(13, 'Simbiosis mutualisme ditunjukkan oleh', 'tali putri dengan teh-tehan', 'gulma dengan tanaman padi', 'anggrek dengan pohon besar', 'kerbau dengan burung jalak', 'gulma dengan tanaman padi', 'd', '', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian`
--

CREATE TABLE `ujian` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `score_min` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tipe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ujian`
--

INSERT INTO `ujian` (`id`, `judul`, `score_min`, `kelas_id`, `user_id`, `is_active`, `tipe_id`) VALUES
(1, 'Responsi UTS', 75, 1, 1, 1, 1),
(2, 'Responsi UAS', 70, 12, 1, 0, 1),
(3, 'Renponsi UTS', 75, 12, 1, 0, 2),
(5, 'Latihan 1', 70, 1, 2, 0, 1),
(6, 'Latihan 2', 75, 1, 2, 0, 1),
(8, 'Ulangan Harian IPA', 70, 17, 2, 1, 1),
(9, 'Ujian Tengah Semester IPA', 75, 17, 2, 1, 1),
(10, 'Ujian Akhir Semester IPA', 75, 17, 2, 0, 1),
(11, 'Essay IPA', 60, 17, 2, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian_nilai`
--

CREATE TABLE `ujian_nilai` (
  `id` int(11) NOT NULL,
  `benar` int(11) NOT NULL,
  `salah` int(11) NOT NULL,
  `kosong` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ujian_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ujian_nilai`
--

INSERT INTO `ujian_nilai` (`id`, `benar`, `salah`, `kosong`, `score`, `tanggal`, `keterangan`, `user_id`, `ujian_id`) VALUES
(6, 0, 0, 0, 60, 1578502716, 'Lulus', 24, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian_status`
--

CREATE TABLE `ujian_status` (
  `id` int(11) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ujian_status`
--

INSERT INTO `ujian_status` (`id`, `status`) VALUES
(1, 'Selesai'),
(2, 'Belum Dikerjakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian_tipe`
--

CREATE TABLE `ujian_tipe` (
  `id` int(11) NOT NULL,
  `tipe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ujian_tipe`
--

INSERT INTO `ujian_tipe` (`id`, `tipe`) VALUES
(1, 'Pilihan Ganda'),
(2, 'Essay');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `no_hp`, `alamat`, `tgl_lahir`, `role_id`, `is_active`, `date_created`, `image`) VALUES
(1, 'Burhan Yuswantyo', 'burhanyuswantyo', '$2y$10$JLnOrfXb5LFbArukWnjk0Og2ke2yNCfipYtf6y1vHKRAPXTx0WQHG', 'buswantyo@gmail.com', '089620756656', 'GTA', '1999-07-28', 1, 1, 1573960579, '20190511_181626-min1.jpg'),
(2, 'Sopo Jarwo', 'sopojarwo', '$2y$10$ATAg5KfQkIXjmvmYd4FXy.NIITIInOgyVpTbm9qEJS9gvuTfhtUOK', 'hanifandri140399@gmail.com', '089620756656', 'Jogja', '2019-11-30', 2, 1, 1573960649, '20190808_210707-min.jpg'),
(22, 'Burhan', 'burhan', '$2y$10$OdN7HrCVMnqo6a3Raz9RtuUcYHbgLQrdtAvcgHxrDC7kCEXRC1GO2', 'byuswantyo@gmail.com', '089620756656', 'GTA', '2019-11-30', 1, 1, 1574521921, 'default.jpg'),
(23, 'Joko', 'joko', '$2y$10$8F8uZ2iOpXPHsyirr9zFt.N1davV.B.ijH9kO/Xigno8pIwh.L4sG', 'burhanyuswantyo@ymail.com', '089620756656', 'GTA', '2019-11-25', 3, 1, 1574522890, 'asisten.jpg'),
(24, 'Doni', 'doni', '$2y$10$s9S14G7Lp0p74XYIQFlltOeHJR3iKCA6CaWohVdnYVhhmvJ8LyqUi', 'owlyuswan@gmail.com', '089620756656', 'GTA', '2019-11-10', 3, 1, 1574522981, 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 3, 3),
(36, 1, 3),
(37, 1, 2),
(38, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Teacher'),
(3, 'Student'),
(4, 'Menu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Teacher'),
(3, 'Student');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_kelas`
--

CREATE TABLE `user_sub_kelas` (
  `id` int(11) NOT NULL,
  `sub_menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_kelas`
--

INSERT INTO `user_sub_kelas` (`id`, `sub_menu_id`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_menu` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `sub_menu`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fa fa-dashboard', 1),
(2, 2, 'Kelas', 'teacher', 'fa fa-university', 1),
(3, 3, 'Kelas', 'student', 'fa fa-university', 1),
(4, 2, 'Ujian', 'teacher/ujian', 'fa fa-pencil-square-o', 1),
(5, 3, 'Ujian', 'student/ujian', 'fa fa-pencil-square-o', 1),
(6, 4, 'Menu Management', 'menu', 'fa fa-gears', 1),
(12, 1, 'Role', 'admin/role', 'fa fa-users', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_ujian`
--

CREATE TABLE `user_ujian` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ujian_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas_access`
--
ALTER TABLE `kelas_access`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi_assignment`
--
ALTER TABLE `materi_assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi_komentar`
--
ALTER TABLE `materi_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_essay`
--
ALTER TABLE `soal_essay`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_pilgan`
--
ALTER TABLE `soal_pilgan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ujian_nilai`
--
ALTER TABLE `ujian_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ujian_status`
--
ALTER TABLE `ujian_status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ujian_tipe`
--
ALTER TABLE `ujian_tipe`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_kelas`
--
ALTER TABLE `user_sub_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_ujian`
--
ALTER TABLE `user_ujian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `kelas_access`
--
ALTER TABLE `kelas_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `materi_assignment`
--
ALTER TABLE `materi_assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `materi_komentar`
--
ALTER TABLE `materi_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `soal_essay`
--
ALTER TABLE `soal_essay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `soal_pilgan`
--
ALTER TABLE `soal_pilgan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `ujian_nilai`
--
ALTER TABLE `ujian_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ujian_status`
--
ALTER TABLE `ujian_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ujian_tipe`
--
ALTER TABLE `ujian_tipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_sub_kelas`
--
ALTER TABLE `user_sub_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_ujian`
--
ALTER TABLE `user_ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
