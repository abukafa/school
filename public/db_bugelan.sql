-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 07:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bugelan`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `idm` int(11) NOT NULL,
  `akun` varchar(15) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `panggil` varchar(50) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `jam1` smallint(1) NOT NULL,
  `jam2` smallint(1) NOT NULL,
  `jam3` smallint(1) NOT NULL,
  `jam4` smallint(1) NOT NULL,
  `jam5` smallint(1) NOT NULL,
  `absen` varchar(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `idm`, `akun`, `tahun`, `panggil`, `tanggal`, `jam1`, `jam2`, `jam3`, `jam4`, `jam5`, `absen`, `ket`) VALUES
(1, 1, 'Siswa', '2021', 'Ade N', '2023-03-07', 1, 1, 1, 1, 1, '', '4'),
(2, 5, 'Siswa', '2021', 'Fatem', '2023-03-07', 1, 1, 1, 1, 0, '', '1'),
(3, 7, 'Siswa', '2021', 'Herna', '2023-03-07', 0, 0, 0, 0, 0, 'i', '0'),
(4, 6, 'Siswa', '2021', 'Fuad ', '2023-03-07', 0, 0, 0, 0, 0, 'i', ''),
(5, 4, 'Siswa', '2021', 'Anggr', '2023-03-07', 1, 1, 1, 1, 1, '', '3'),
(6, 8, 'Siswa', '2021', 'Husnu', '2023-03-07', 1, 1, 0, 0, 0, '', ''),
(8, 10, 'Siswa', '2021', 'Livia', '2023-03-07', 0, 0, 0, 0, 0, '', ''),
(10, 12, 'Siswa', '2021', 'Piki ', '2023-03-07', 1, 1, 1, 1, 1, '', '5'),
(11, 13, 'Siswa', '2021', 'Raiha', '2023-03-07', 1, 1, 0, 1, 1, '', '4'),
(12, 14, 'Siswa', '2021', 'Restu', '2023-03-07', 1, 1, 1, 1, 1, '', '5'),
(14, 16, 'Siswa', '2021', 'Syifa', '2023-03-07', 1, 1, 1, 0, 0, '', '3'),
(15, 17, 'Siswa', '2021', 'Vivia', '2023-03-07', 1, 1, 1, 1, 1, '', '5'),
(16, 18, 'Siswa', '2021', 'Wafa ', '2023-03-07', 1, 1, 1, 0, 0, '', '3'),
(17, 19, 'Siswa', '2021', 'Wafi ', '2023-03-07', 1, 1, 1, 1, 0, '', '4'),
(18, 20, 'Siswa', '2021', 'Zaki ', '2023-03-07', 1, 1, 1, 1, 1, '', '5'),
(19, 62, 'Siswa', '2021', 'Adi B', '2023-03-07', 0, 0, 0, 0, 0, 'a', '0'),
(20, 21, 'Siswa', '2020', 'Ade T', '2023-03-07', 0, 0, 0, 0, 0, 'a', '0'),
(22, 22, 'Siswa', '2020', 'Aulia', '2023-03-07', 0, 0, 0, 0, 0, 's', '0'),
(23, 23, 'Siswa', '2020', 'Fatma', '2023-03-07', 1, 1, 1, 1, 1, '', '5'),
(24, 24, 'Siswa', '2020', 'Hilda', '2023-03-07', 1, 1, 1, 1, 1, '', '5'),
(25, 25, 'Siswa', '2020', 'Hirsa', '2023-03-07', 1, 1, 1, 1, 1, '', '5'),
(26, 26, 'Siswa', '2020', 'Irgi ', '2023-03-07', 1, 1, 1, 1, 1, '', '5'),
(27, 27, 'Siswa', '2020', 'Laila', '2023-03-07', 1, 1, 1, 1, 1, '', '5'),
(28, 28, 'Siswa', '2020', 'Muham', '2023-03-07', 1, 1, 1, 1, 1, '', '5'),
(29, 29, 'Siswa', '2020', 'Nizar', '2023-03-07', 1, 1, 1, 1, 1, '', '5'),
(30, 30, 'Siswa', '2020', 'Nuri ', '2023-03-07', 1, 1, 1, 1, 1, '', '5'),
(31, 31, 'Siswa', '2020', 'Razif', '2023-03-07', 1, 1, 1, 1, 0, '', '4'),
(32, 32, 'Siswa', '2020', 'Rifat', '2023-03-07', 1, 1, 1, 1, 0, '', '4'),
(34, 34, 'Siswa', '2020', 'Rusma', '2023-03-07', 1, 1, 1, 1, 0, '', '4'),
(35, 35, 'Siswa', '2020', 'Syahd', '2023-03-07', 1, 1, 1, 1, 1, '', '5'),
(36, 36, 'Siswa', '2020', 'Winda', '2023-03-07', 1, 1, 1, 1, 1, '', '5'),
(37, 15, 'Siswa', '2021', 'Rizki', '2023-03-07', 0, 0, 0, 0, 0, 'i', ''),
(40, 11, 'Siswa', '2021', 'Nurma', '2023-03-07', 0, 0, 0, 0, 0, 'i', ''),
(41, 9, 'Siswa', '2021', 'Jelit', '2023-03-07', 1, 1, 1, 1, 1, '', ''),
(43, 41, 'Siswa', '2022', 'Aldi ', '2023-03-07', 0, 0, 0, 0, 0, 's', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` text NOT NULL,
  `pass` text NOT NULL,
  `idm` int(11) NOT NULL,
  `nama` text NOT NULL,
  `tipe` text NOT NULL,
  `akses` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`, `idm`, `nama`, `tipe`, `akses`, `ket`) VALUES
(1, 'abu.kafa', '$2y$10$6J.gtIwGc4svpgxJtLWSNOqxvpN3aG.XpG9.Vz6e6VEryUxgDPGfW', 85, 'Abdul Aziz, S.Pd.I', 'Programmer', 'Office,Absensi,Blog,Galeri,Informasi', ''),
(34, 'admin.afni', '$2y$10$IO.SUnDexItgwF7ogZrb3.rbERNKYTz9SKQrknPNvAHFqKR/Kwfny', 1, 'Ade Nurafni', 'Administrator', 'Absensi,Blog,Galeri,Informasi', ''),
(35, 'admin.fatema', '$2y$10$tkT2zDJoYP3llQQzoY.hPuKg7eokBq/nKd7lbNAPT9bxdMHPiV2zm', 5, 'Fatema Alzahra', 'Administrator', 'Absensi,Blog,Galeri,Informasi', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idm` int(11) NOT NULL,
  `autor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri` smallint(1) DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `publish` smallint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `kategori`, `idm`, `autor`, `judul`, `image`, `galeri`, `excerpt`, `body`, `created`, `publish`) VALUES
(4, 'Dunia Islam', 85, 'Nama Penulis', 'Contoh Judul Blog Dunia Islam', '1678238941_b0f1660739637ab8f764.jpg', NULL, 'Aspernatur esse non qui vero voluptas et. Nam voluptatum porro perspiciatis voluptates dolorum iure perspiciatis repellat. Esse cumque et ipsum sunt quos vitae libero. Dolores quasi totam ut ipsum.Ut ', '<div>Aspernatur esse non qui vero voluptas et. Nam voluptatum porro perspiciatis voluptates dolorum iure perspiciatis repellat. Esse cumque et ipsum sunt quos vitae libero. Dolores quasi totam ut ipsum.<br><br></div><div><strong>Ut laboriosam et error exercitationem ipsam laboriosam excepturi. Ullam consequatur illo quam illum quis sunt cupiditate suscipit. Soluta nostrum aliquam ut fuga esse est delectus. Voluptatem corrupti et tempore corrupti.</strong><br><br></div><div>Molestiae ullam provident quidem autem facilis quae. Possimus aut neque fuga numquam sint eveniet. Et incidunt provident nisi in occaecati. Reiciendis quae vel quia itaque nobis quasi eos.<br><br></div><div>At quaerat ipsa fugiat qui et amet sunt dignissimos. Incidunt eos eaque consectetur voluptates tenetur. Delectus laudantium molestias neque ut. Accusantium eos hic quo magni ut quo in.<br><br></div><div>Repellat sapiente magnam cum voluptatem dolor. Minima assumenda facere provident dolores repellendus voluptatem eaque. Voluptas nemo eligendi incidunt et necessitatibus earum qui. Consequuntur deleniti impedit repellendus totam.<br><br></div><div>Est veritatis doloremque voluptas maiores. Voluptatem est dolor ducimus dicta excepturi quam molestias. Est molestiae quidem earum commodi quisquam deleniti asperiores impedit. Ad beatae voluptate veritatis occaecati expedita quod.<br><br></div><div>Autem eos et et illo. Vel vel explicabo minus provident autem corporis molestias. Magnam repudiandae qui et ut. Est nihil sit laborum autem molestias.<br><br></div><div>Perspiciatis quod repellat aut molestias sit tempora quam. Sed doloribus et qui explicabo hic et. Neque perferendis repudiandae repellendus ipsa.<br><br></div><div>Neque laborum quam fuga similique unde est. Molestiae nulla rerum delectus sit omnis. Et amet fuga molestiae. Et vel sed sit numquam voluptates non dolorum.</div>', '2022-05-21 18:33:44', 1),
(7, 'Pendidikan', 85, 'Penulis', 'Contoh Judul Blog Pendidikan', '1678240255_ddd254acd846bbced94d.jpg', 1, 'Aspernatur esse non qui vero voluptas et. Nam voluptatum porro perspiciatis voluptates dolorum iure perspiciatis repellat. Esse cumque et ipsum sunt quos vitae libero. Dolores quasi totam ut ipsum.Ut ', '<div>Aspernatur esse non qui vero voluptas et. Nam voluptatum porro perspiciatis voluptates dolorum iure perspiciatis repellat. Esse cumque et ipsum sunt quos vitae libero. Dolores quasi totam ut ipsum.<br><br></div><div>Ut laboriosam et error exercitationem ipsam laboriosam excepturi. Ullam consequatur illo quam illum quis sunt cupiditate suscipit. Soluta nostrum aliquam ut fuga esse est delectus. Voluptatem corrupti et tempore corrupti.<br><br></div><div>Molestiae ullam provident quidem autem facilis quae. Possimus aut neque fuga numquam sint eveniet. Et incidunt provident nisi in occaecati. Reiciendis quae vel quia itaque nobis quasi eos.<br><br></div><div>At quaerat ipsa fugiat qui et amet sunt dignissimos. Incidunt eos eaque consectetur voluptates tenetur. Delectus laudantium molestias neque ut. Accusantium eos hic quo magni ut quo in.<br><br></div><div>Repellat sapiente magnam cum voluptatem dolor. Minima assumenda facere provident dolores repellendus voluptatem eaque. Voluptas nemo eligendi incidunt et necessitatibus earum qui. Consequuntur deleniti impedit repellendus totam.<br><br></div><div>Est veritatis doloremque voluptas maiores. Voluptatem est dolor ducimus dicta excepturi quam molestias. Est molestiae quidem earum commodi quisquam deleniti asperiores impedit. Ad beatae voluptate veritatis occaecati expedita quod.<br><br></div><div>Autem eos et et illo. Vel vel explicabo minus provident autem corporis molestias. Magnam repudiandae qui et ut. Est nihil sit laborum autem molestias.<br><br></div><div>Perspiciatis quod repellat aut molestias sit tempora quam. Sed doloribus et qui explicabo hic et. Neque perferendis repudiandae repellendus ipsa.<br><br></div><div>Neque laborum quam fuga similique unde est. Molestiae nulla rerum delectus sit omnis. Et amet fuga molestiae. Et vel sed sit numquam voluptates non dolorum.</div>', '2022-05-21 18:33:44', 1),
(9, 'Organisasi', 85, 'Nama Penulis', 'Contoh Judul Blog Organisasi', '1678239046_272831500820639a2183.jpg', 1, 'Quia cum voluptatem aut illum animi. Mollitia distinctio sit commodi sint. Et aut qui quae velit corporis consequuntur et. Tempore quod fugit sunt non nihil.Totam incidunt reiciendis deleniti eveniet ', '<div>Quia cum voluptatem aut illum animi. Mollitia distinctio sit commodi sint. Et aut qui quae velit corporis consequuntur et. Tempore quod fugit sunt non nihil.<br><br></div><div><strong>Totam incidunt reiciendis deleniti eveniet pariatur ratione. Et quia quis ea est qui non quidem illum. Minima sequi explicabo enim quas adipisci qui doloremque.<br></strong><br></div><div>Molestias ut iste tempora placeat quis placeat. Consequatur commodi fugiat fuga consequatur magnam earum. Ea fuga dicta facilis velit qui repudiandae corporis.<br><br></div><div>Adipisci recusandae id officiis odio maiores. Officia amet voluptas cumque natus in. Ratione alias corrupti asperiores eum corrupti laborum sint. Aspernatur mollitia aliquam delectus iusto unde necessitatibus laborum. Quae non ea quas culpa ut.<br><br></div><div>Est molestiae illo reiciendis sed sit. Consectetur sit minus consequuntur voluptatem. Iure et quis et. Voluptas impedit architecto animi recusandae ut animi autem.<br><br></div><div>Molestiae aspernatur aliquam quibusdam ipsa voluptas voluptatem ipsa. Est voluptas sit distinctio. Minima voluptate aut fuga quis repellendus suscipit temporibus aliquid. Maiores ut aut mollitia qui odio enim ea reprehenderit.<br><br></div><div>Inventore dolores atque tenetur ratione ea commodi accusantium. Quo sapiente dolorem possimus beatae delectus sit. Mollitia voluptates laborum commodi aut.</div>', '2022-05-21 18:33:45', NULL),
(10, 'Kesehatan', 85, 'Nama Penulis', 'Contoh Judul Blog Kesehatan', '1678239091_b636dc3f2dcf3e22d5d5.jpg', 1, 'Officiis reiciendis quia repellendus itaque. Quas sed quia eum temporibus. Ratione quia suscipit quos. Earum eaque fugiat nisi repellendus repudiandae praesentium.Aliquam aut autem molestiae tempora. ', '<div>Officiis reiciendis quia repellendus itaque. Quas sed quia eum temporibus. Ratione quia suscipit quos. Earum eaque fugiat nisi repellendus repudiandae praesentium.<br><br></div><div>Aliquam aut autem molestiae tempora. Delectus corrupti natus et eum facilis quo. Consequuntur molestiae ea porro sunt qui velit. Labore accusantium consequatur explicabo neque et quia.<br><br></div><div>Dolore atque similique beatae debitis qui maxime voluptates minima. Id ea rem et aliquam distinctio praesentium consequatur repellendus.<br><br></div><div>Pariatur qui non velit adipisci libero nam quo. Aut necessitatibus qui dolores adipisci. Amet sunt dolorem voluptas.<br><br></div><div>Velit non qui quasi ea asperiores cupiditate. Vero adipisci culpa est quidem voluptas voluptatibus. Corporis consequatur delectus atque consequuntur quaerat.<br><br></div><div>Repudiandae cum voluptatem incidunt sit. Reprehenderit illo vel rem voluptatem maiores dolores. Magni error officia nisi illum ullam mollitia.<br><br></div><div>Sunt id tempore aspernatur error. Sed dolore corrupti non ut sed et ut. Voluptatem aspernatur delectus assumenda assumenda. Facilis consequuntur totam mollitia nisi.<br><br></div>', '2022-05-21 18:33:45', NULL),
(11, 'Kesehatan', 85, 'Penulis', 'Contoh Judul Blog', '1678240312_9b40157e47cb4d0c50cd.jpg', 1, 'Aspernatur esse non qui vero voluptas et. Nam voluptatum porro perspiciatis voluptates dolorum iure perspiciatis repellat. Esse cumque et ipsum sunt quos vitae libero. Dolores quasi totam ut ipsum.Ut ', '<div>Aspernatur esse non qui vero voluptas et. Nam voluptatum porro perspiciatis voluptates dolorum iure perspiciatis repellat. Esse cumque et ipsum sunt quos vitae libero. Dolores quasi totam ut ipsum.<br><br></div><div>Ut laboriosam et error exercitationem ipsam laboriosam excepturi. Ullam consequatur illo quam illum quis sunt cupiditate suscipit. Soluta nostrum aliquam ut fuga esse est delectus. Voluptatem corrupti et tempore corrupti.<br><br></div><div>Molestiae ullam provident quidem autem facilis quae. Possimus aut neque fuga numquam sint eveniet. Et incidunt provident nisi in occaecati. Reiciendis quae vel quia itaque nobis quasi eos.<br><br></div><div>At quaerat ipsa fugiat qui et amet sunt dignissimos. Incidunt eos eaque consectetur voluptates tenetur. Delectus laudantium molestias neque ut. Accusantium eos hic quo magni ut quo in.<br><br></div><div>Repellat sapiente magnam cum voluptatem dolor. Minima assumenda facere provident dolores repellendus voluptatem eaque. Voluptas nemo eligendi incidunt et necessitatibus earum qui. Consequuntur deleniti impedit repellendus totam.<br><br></div><div>Est veritatis doloremque voluptas maiores. Voluptatem est dolor ducimus dicta excepturi quam molestias. Est molestiae quidem earum commodi quisquam deleniti asperiores impedit. Ad beatae voluptate veritatis occaecati expedita quod.<br><br></div><div>Autem eos et et illo. Vel vel explicabo minus provident autem corporis molestias. Magnam repudiandae qui et ut. Est nihil sit laborum autem molestias.<br><br></div><div>Perspiciatis quod repellat aut molestias sit tempora quam. Sed doloribus et qui explicabo hic et. Neque perferendis repudiandae repellendus ipsa.<br><br></div><div>Neque laborum quam fuga similique unde est. Molestiae nulla rerum delectus sit omnis. Et amet fuga molestiae. Et vel sed sit numquam voluptates non dolorum.<br><br></div>', '2022-05-21 18:33:45', NULL),
(26, 'profil', 0, 'Abu Kafa', 'Profil SMP Terpadu Bugelan', '1678241185_1d28078c8127268d256d.jpeg', NULL, 'Sekolah ini berdiri tanggal 22 November 1985, SMP Negeri 2 Jaten terletak di jalan raya Solo-Sragen Km. 9, akses untuk mencapai sekolah ini sangat mudah baik bagi para siswa maupun orang tua siswa serta praktisi pendidikan. Dengan luas tanah 20.000m² SMP Negeri 2 Jaten adalah sekolah yang cukup luas dan memaksimalkan untuk menanam berbagai jenis tanaman yang cocok di daerah Jaten.SMP Negeri 2 Jaten terletak di Dusun Grumbul Sawit, Desa Sroyo, Kecamatan Jaten, Kabupaten Karanganyar, sebelah selatan sekolah berupa sawah, pabrik tekstil Kusuma Mulya, sebelah timur perkampungan yang salah satu penduduknya mempunyai usaha daur ulang drum, jrigen untuk tempat sampah, pot tanaman, tandon air, dan ada usaha las bubut. Sebelah utara sekolah terdapat pabrik tekstil Agung Tex yang lumayan besar produksinya dan sudah diekspor ke Luar Negeri, sebelah barat SMP ada showroom dan bengkel Nasmoco.SMP Negeri 2 Jaten pada tahun 2016 masuk juara 1 Adiwiyata tingkat Kabupaten. Pada tahun 2019 SMP Negeri 2 Jaten lolos juara 1 Adiwiyata tingkat Provinsi. Tahun 2021 SMP Negeri 2 Jaten masuk nominasi menjadi sekolah Adiwiyata tingkat Nasional dan sedang mempersiapkan agar bisa menjadi juara kembali.', '<div>Sekolah ini berdiri tanggal 22 November 1985, SMP Negeri 2 Jaten terletak di jalan raya Solo-Sragen Km. 9, akses untuk mencapai sekolah ini sangat mudah baik bagi para siswa maupun orang tua siswa serta praktisi pendidikan. Dengan luas tanah 20.000m² SMP Negeri 2 Jaten adalah sekolah yang cukup luas dan memaksimalkan untuk menanam berbagai jenis tanaman yang cocok di daerah Jaten.</div><div><br><br>SMP Negeri 2 Jaten terletak di Dusun Grumbul Sawit, Desa Sroyo, Kecamatan Jaten, Kabupaten Karanganyar, sebelah selatan sekolah berupa sawah, pabrik tekstil Kusuma Mulya, sebelah timur perkampungan yang salah satu penduduknya mempunyai usaha daur ulang drum, jrigen untuk tempat sampah, pot tanaman, tandon air, dan ada usaha las bubut. Sebelah utara sekolah terdapat pabrik tekstil Agung Tex yang lumayan besar produksinya dan sudah diekspor ke Luar Negeri, sebelah barat SMP ada showroom dan bengkel Nasmoco.</div><div><br><br>SMP Negeri 2 Jaten pada tahun 2016 masuk juara 1 Adiwiyata tingkat Kabupaten. Pada tahun 2019 SMP Negeri 2 Jaten lolos juara 1 Adiwiyata tingkat Provinsi. Tahun 2021 SMP Negeri 2 Jaten masuk nominasi menjadi sekolah Adiwiyata tingkat Nasional dan sedang mempersiapkan agar bisa menjadi juara kembali.</div>', '2023-03-08 02:03:25', 0),
(27, 'prakata', 0, 'Nama Penulis', 'Prakata Kepala Sekolah', '1678241284_d22f46d8f28b64b748c6.jpeg', NULL, 'SMP Negeri 2 Jaten, merupakan salah satu Sekolah Menengah Pertama Negeri yang ada di Kabupaten Karanganyar, Provinsi Jawa Tengah, Indonesia. SMP Negeri 02 Jaten adalah sekolah yang berwawasan lingkungan yaitu tempat dimana siswa-siswi mendapat segala ilmu pengetahuan, norma dan etika dalam kehidupan yang tidak lupa akan pentingnya tanggung jawab dalam penyelamatan lingkungan hidup. Sama dengan SMP pada umumnya di Indonesia, masa pendidikan sekolah di SMP Negeri 2 Jaten ditempuh dalam waktu tiga tahun pelajaran, mulai dari Kelas VII sampai Kelas IX. Sekolah ini memiliki karakteristik Sekolah yang berwawasan lingkungan dengan jargon yang terkenal yaitu berkibar, hijau, jaya. SMP Negeri 2 Jaten telah menapakkan jalan yang benar dan menjadi pionir awal dalam mendidik siswa memelihara lingkungan. Bahkan SMP Negeri 2 Bandar telah mendapat berbagai penghargaan di tingkat Kabupaten, Provinsi maupun tingkat Nasional seperti Green School Awards, dan Sekolah Adiwiyata Nasional pada tahun 2016.', '<div><strong>SMP Negeri 2 Jaten</strong>, merupakan salah satu Sekolah Menengah Pertama Negeri yang ada di Kabupaten Karanganyar, Provinsi Jawa Tengah, <a href=\"https://id.wikipedia.org/wiki/Indonesia\">Indonesia</a>. SMP Negeri 02 Jaten adalah sekolah yang berwawasan lingkungan yaitu tempat dimana siswa-siswi mendapat segala ilmu pengetahuan, norma dan etika dalam kehidupan yang tidak lupa akan pentingnya tanggung jawab dalam penyelamatan lingkungan hidup. Sama dengan SMP pada umumnya di Indonesia, masa pendidikan sekolah di SMP Negeri 2 Jaten ditempuh dalam waktu tiga tahun pelajaran, mulai dari Kelas VII sampai Kelas IX. Sekolah ini memiliki karakteristik Sekolah yang berwawasan lingkungan dengan jargon yang terkenal yaitu berkibar, hijau, jaya. SMP Negeri 2 Jaten telah menapakkan jalan yang benar dan menjadi pionir awal dalam mendidik siswa memelihara lingkungan. Bahkan SMP Negeri 2 Bandar telah mendapat berbagai penghargaan di tingkat Kabupaten, Provinsi maupun tingkat Nasional seperti Green School Awards, dan Sekolah Adiwiyata Nasional pada tahun 2016.</div>', '2023-03-08 02:03:04', 0),
(28, 'program', 0, 'Nama Penulis', 'Program Unggulan SMP Terpadu Bugelan', '1678241411_4b3b0897af2f3e7794de.jpeg', 1, '1. PerpustakaanPerpustakaan di SMPN N 2 Jaten memiliki beragam koleksi buku, baik buku siswa, buku bacaan, buku referensi, makalah, surat kabar dan seterusnya. Untuk fasilitas penunjang di perpustakaan SMPN N 2 Jaten terdiri dari komputer, ruang baca yang cukup luas , TV, VCD/ DVD Player.2. Laboratorium IPALaboratorium IPA merupakan salah satu laboratorium untuk praktik siswa di SMP N 2 Jaten dengan ditunjang dengan prasarana yang cukup memadai, alat praktikum fisika yang lengkap, alat penunjang Fisika, beragam jenis alat praktikum biologi, dan alat penujang biologi.3. Laboratorium MultimediaSemakin berkembangnya teknologi informasi, maka para siswa SMP N 2 Jaten dituntut untuk mempelajari dan mengembangkan bakat diri di bidang multimedia, untuk itu SMP N 2 Jaten memiliki Laboratorium Multimedia.4. KesenianWilayah karisidenan Surakarta identik dengan budayanya yang sangat kental, salah satunya adalah kesenian tradisional yaitu musik (Studio Musik) dan juga seni tari. SMP N 2 Jaten memiliki peralatan kesenian dan juga ruang khusu seni musk dan seni tari yang cukup luas bagi siswa SMP N 2 Jaten untuk praktik belajar kesenian musik dan seni tari. SMP N 2 Jaten juga menyediakan sarana dan prasarana untuk seni musik supaya para siswa dapat mengembangkan bakat diri di bidang seni olah vokal.5. Laboratorium KomputerPerkembangan teknologi informasi yang begitu pesat, menuntut semua sekolah termasuk SMP N 2 Jaten untuk memiliki Laboratorium Komputer.', '<div><strong><br>1. Perpustakaan</strong></div><div><br>Perpustakaan di SMPN N 2 Jaten memiliki beragam koleksi buku, baik buku siswa, buku bacaan, buku referensi, makalah, surat kabar dan seterusnya. Untuk fasilitas penunjang di perpustakaan SMPN N 2 Jaten terdiri dari komputer, ruang baca yang cukup luas , TV, VCD/ DVD Player.</div><div><strong><br>2. Laboratorium IPA</strong></div><div><br>Laboratorium IPA merupakan salah satu laboratorium untuk praktik siswa di SMP N 2 Jaten dengan ditunjang dengan prasarana yang cukup memadai, alat praktikum fisika yang lengkap, alat penunjang Fisika, beragam jenis alat praktikum biologi, dan alat penujang biologi.</div><div><strong><br>3. Laboratorium Multimedia</strong></div><div><br>Semakin berkembangnya teknologi informasi, maka para siswa SMP N 2 Jaten dituntut untuk mempelajari dan mengembangkan bakat diri di bidang multimedia, untuk itu SMP N 2 Jaten memiliki Laboratorium Multimedia.</div><div><strong><br>4. Kesenian</strong></div><div><br>Wilayah karisidenan Surakarta identik dengan budayanya yang sangat kental, salah satunya adalah kesenian tradisional yaitu musik (Studio Musik) dan juga seni tari. SMP N 2 Jaten memiliki peralatan kesenian dan juga ruang khusu seni musk dan seni tari yang cukup luas bagi siswa SMP N 2 Jaten untuk praktik belajar kesenian musik dan seni tari. SMP N 2 Jaten juga menyediakan sarana dan prasarana untuk seni musik supaya para siswa dapat mengembangkan bakat diri di bidang seni olah vokal.</div><div><strong><br>5. Laboratorium Komputer</strong></div><div><br>Perkembangan teknologi informasi yang begitu pesat, menuntut semua sekolah termasuk SMP N 2 Jaten untuk memiliki Laboratorium Komputer.</div>', '2023-03-08 02:03:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `tgl_awal` varchar(10) NOT NULL,
  `tgl_ahir` varchar(10) NOT NULL,
  `prioritas` smallint(1) NOT NULL,
  `bagian` varchar(25) NOT NULL,
  `tentang` text NOT NULL,
  `detail` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `tgl_awal`, `tgl_ahir`, `prioritas`, `bagian`, `tentang`, `detail`, `ket`) VALUES
(3, '2023-03-11', '2023-03-11', 0, 'Kesiswaan', 'Ekskul Pramuka', 'Ekstra Kurikuler Pramuka SMPT Bugelan', ''),
(4, '2023-03-25', '2023-03-25', 0, 'Kesiswaan', 'Ekskul Paskibra', 'Ekstrakurikuler Pelatihan Pasukan Pengibar Bendera', ''),
(5, '2023-03-18', '2023-03-18', 1, 'OSIS', 'Nonton Film Pahlawan Nasional', 'Nonton Bareng Film Pahlawan Nasional', ''),
(6, '2023-04-01', '2023-04-01', 0, 'Kesiswaan', 'Bimbingan Konseling', 'Sharing, Evaluasi, Bimbingan dan motivasi Belajar & Berorganisasi', '');

-- --------------------------------------------------------

--
-- Table structure for table `kalender`
--

CREATE TABLE `kalender` (
  `id` int(11) NOT NULL,
  `jenis` text NOT NULL,
  `tgl_awal` text NOT NULL,
  `tgl_ahir` text NOT NULL,
  `acara` text NOT NULL,
  `ket` text NOT NULL,
  `warna` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kalender`
--

INSERT INTO `kalender` (`id`, `jenis`, `tgl_awal`, `tgl_ahir`, `acara`, `ket`, `warna`) VALUES
(1, 'Penilaian Semester', '2023-05-01', '2023-05-13', 'PAS', 'Penilaian Ahir Semester', 'blue'),
(2, 'Libur Sekolah', '2023-02-07', '2023-03-04', 'LTS', 'Pemeriksaan Urine Lengkap', 'red'),
(5, 'Ulangan & Assesment', '2023-03-02', '2023-03-11', 'ANBK', 'Assessment Nasional', 'pink');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi`
--

CREATE TABLE `kompetensi` (
  `id` int(11) NOT NULL,
  `idm` text NOT NULL,
  `nama` text NOT NULL,
  `jenis` text NOT NULL,
  `tempat` text NOT NULL,
  `subjek` text NOT NULL,
  `hasil` text NOT NULL,
  `tgl_awal` varchar(11) NOT NULL,
  `tgl_ahir` varchar(11) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kompetensi`
--

INSERT INTO `kompetensi` (`id`, `idm`, `nama`, `jenis`, `tempat`, `subjek`, `hasil`, `tgl_awal`, `tgl_ahir`, `ket`) VALUES
(4, '85', 'Abdul Aziz, S.Pd.I', 'Pendidikan', 'MA Nurussalam', 'IPS', '3.2', '2023-02-09', '2023-05-13', ''),
(5, '85', 'Abdul Aziz, S.Pd.I', 'Non Formal', 'Udemy', 'Data Scientist', '8', '2023-02-26', '2023-03-08', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `ni` text NOT NULL,
  `nama` text NOT NULL,
  `panggil` text NOT NULL,
  `jk` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` text NOT NULL,
  `nik` text NOT NULL,
  `no_kk` text NOT NULL,
  `alamat` text NOT NULL,
  `rt` text NOT NULL,
  `rw` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `kode_pos` text NOT NULL,
  `telepon` text NOT NULL,
  `email` text NOT NULL,
  `tahun` text NOT NULL,
  `nama_ayah` text NOT NULL,
  `tl_ayah` text NOT NULL,
  `pekerjaan_ayah` text NOT NULL,
  `nama_ibu` text NOT NULL,
  `tl_ibu` text NOT NULL,
  `pekerjaan_ibu` text NOT NULL,
  `kesan` text NOT NULL,
  `pesan` text NOT NULL,
  `akun` varchar(10) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `arsip` varchar(100) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `ni`, `nama`, `panggil`, `jk`, `tempat_lahir`, `tanggal_lahir`, `nik`, `no_kk`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kabupaten`, `kode_pos`, `telepon`, `email`, `tahun`, `nama_ayah`, `tl_ayah`, `pekerjaan_ayah`, `nama_ibu`, `tl_ibu`, `pekerjaan_ibu`, `kesan`, `pesan`, `akun`, `pass`, `arsip`, `ket`) VALUES
(1, '0084508542', 'Ade Nurafni', 'Ade N', '', 'Tasikmalaya', '2008-05-16', '3278055605080002', '', 'Bugelan', '3', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2021', 'Nedi', '1969', 'Buruh', 'Mae', '1972', 'Ibu Rumah Tangga', '', '', 'Siswa', '123', '', ''),
(4, '0083140286', 'Anggraini Salsabillah', 'Anggr', 'P', 'Tasikmalaya', '2008-11-04', '3278054411080003', '', 'Bugelan', '2', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2021', 'Ishak', '1970', 'Buruh', 'Tuti Astuti', '1975', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(5, '0087709032', 'Fatema Alzahra', 'Fatem', 'P', 'Saudi Arabia', '2008-10-20', '3205196010080003', '', 'Perum Dano Asri', '0', '0', 'Cibodas', 'Kec. Cikajang', 'Kota Tasikmalaya', '44171', '', '', '2021', 'Ade Candra', '1966', 'Sudah Meninggal', 'Sri Rahayu', '1966', 'Pns/Tni/Polri', '', '', 'Siswa', '', '', ''),
(6, '0095932413', 'Fuad Hasyim', 'Fuad ', 'L', 'Malang', '2009-12-06', '3278050612090002', '', 'Bugelan', '4', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2021', 'Karom', '1975', 'Pedagang Kecil', 'Dede Entin Kartini', '1981', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(7, '0081947275', 'Herna Nurajijah', 'Herna', 'P', 'Tasikmalaya', '2008-12-09', '3278054912080004', '', 'Bugelan', '5', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2021', 'Ibad Nurul Badri', '1977', 'Buruh', 'Susi', '1983', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(8, '0081383079', 'Husnul Rizal', 'Husnu', 'L', 'Tasikmalaya', '2008-03-23', '3278052303080004', '', 'Bugelan', '2', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2021', 'Toni', '1984', 'Buruh', 'Reni Pitriani', '1989', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(9, '0093097618', 'Jelita Arkeylla Edgina', 'Jelit', 'P', 'Tasikmalaya', '2009-01-01', '3278054101090003', '3278052001100029', 'Kp. Pasir Datar', '3', '7', 'Gunung Gede', 'Kec. Kawalu', 'Kota Tasikmalaya', '', '', '', '2021', 'Agus Zamhur', '1979', 'Wiraswasta', 'Rani Nugraha', '0', 'Wiraswasta', '', '', 'Siswa', '', '', ''),
(10, '0082376651', 'Livia Anggraeni', 'Livia', 'P', 'Tasikmalaya', '2008-12-04', '3278054412080001', '', 'Bugelan', '5', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2021', 'Amas', '1965', 'Buruh', 'Diah', '1973', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(11, '0091550550', 'Nurmalasari', 'Nurma', 'P', 'Tasikmalaya', '2009-01-16', '3278055601090001', '', 'Sukasari', '2', '11', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2021', 'Misbahul Ulum', '1964', 'Wiraswasta', 'Hajar Rohayati', '1979', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(12, '0099909151', 'Piki Putra Pratama', 'Piki ', 'L', 'Tasikmalaya', '2009-06-22', '3278052206090001', '', 'Cibeas', '1', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2021', 'Yoyo', '1974', 'Buruh', 'Ani', '1980', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(13, '0086763978', 'Raihan Ihsan Ramdani', 'Raiha', 'L', 'Tasikmalaya', '2008-09-24', '3278052409080001', '', 'Bugelan', '2', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2021', 'Umar', '1970', 'Buruh', 'Itoh Masitoh', '1973', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(14, '0084323178', 'Restu Gumilar', 'Restu', 'L', 'Tasikmalaya', '2008-11-26', '3278052611080001', '', 'Bugelan', '3', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2021', 'Rasmana', '1971', 'Buruh', 'Ihat', '1983', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(15, '0095293438', 'Rizki Istiawan', 'Rizki', 'L', 'Bekasi', '2009-03-12', '3275091203090002', '', 'Jl. Bangka No 67 F Komp. Ppa', '3', '4', 'Jatirasa', 'Kec. Jatiasih', 'Kota Tasikmalaya', '17424', '', '', '2021', 'Nono Sutrisno', '1970', 'Wiraswasta', 'Eris', '1971', 'Pedagang Kecil', '', '', 'Siswa', '', '', ''),
(16, '0088322948', 'Syifa Rahmi Firmansyah', 'Syifa', 'P', 'Tasikmalaya', '2008-07-28', '3278056807080002', '', 'Bugelan', '3', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2021', 'Ayep Yayat P', '1982', 'Buruh', 'Epa Nurhayati', '1985', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(17, '0088301140', 'Vivian Attaufunnisa', 'Vivia', 'P', 'Tasikmalaya', '2008-12-02', '3278054212080001', '', 'Bugelan', '3', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2021', 'Yusup', '1975', 'Buruh', 'Eet Nurasiah', '1981', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(18, '0097704986', 'Wafa Nurfauzan', 'Wafa ', 'L', 'Tasikmalaya', '2009-01-25', '3278052501090002', '', 'Bugelan', '3', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2021', 'Hopid', '1972', 'Buruh', 'Atin Rustini', '1977', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(19, '0095061965', 'Wafi Nurfauziah', 'Wafi ', 'P', 'Tasikmalaya', '2009-01-25', '3278056501090005', '', 'Bugelan', '3', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2021', 'Hopid', '1972', 'Buruh', 'Atin Rustini', '1977', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(20, '0084941959', 'Zaki Muhammad Fauzi', 'Zaki ', 'L', 'Tasikmalaya', '2008-03-04', '3278050403080005', '', 'Bugelan', '3', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2021', 'Wawan Hermawan', '1960', 'Buruh', 'Romlah', '1968', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(21, '0075198228', 'Ade Tegar Maulana', 'Ade T', 'L', 'Tasikmalaya', '2007-05-11', '3278051105070005', '', 'Bugelan', '2', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2020', 'Maman', '1967', 'Buruh', 'Heni', '1972', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(22, '0075597303', 'Aulia Nurazizah', 'Aulia', 'P', 'Tasikmalaya', '2007-09-02', '3278054209070001', '', 'Bugelan', '3', '10', 'Gununggede', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2020', 'Yoyo  S', '1966', 'Buruh', 'Lela  Nurlela', '1977', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(23, '0082787492', 'Fatma Nuraliah', 'Fatma', 'P', 'Tasikmalaya', '2008-01-21', '3278056101080001', '', 'Bugelan', '3', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2020', 'Iin  R', '1976', 'Buruh', 'Epon Komariah', '1977', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(24, '0076319455', 'Hilda Khoirunissa', 'Hilda', 'P', 'Tasikmalaya', '2007-09-14', '3278055409070003', '', 'Bugelan', '3', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2020', 'Nono Sumarno', '1972', 'Buruh', 'Idah', '1974', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(25, '0089953396', 'Hirsa Nuraisyah', 'Hirsa', 'P', 'Tasikmalaya', '2008-03-04', '3278054403080002', '', 'Bugelan', '3', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2020', 'Idis', '1963', 'Buruh', 'Lela Nurlela', '1973', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(26, '0077304977', 'Irgi Faiz Nurramdhani', 'Irgi ', 'L', 'Tasikmalaya', '2007-09-20', '3278052009070002', '', 'Bugelan', '1', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2020', 'Uus', '1980', 'Buruh', 'Erma', '1987', 'Pedagang Kecil', '', '', 'Siswa', '', '', ''),
(27, '0088357804', 'Laila Azkia', 'Laila', 'P', 'Tasikmalaya', '2008-02-11', '3278055102080002', '', 'Bugelan', '4', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2020', 'Dudung', '1969', 'Buruh', 'Emay', '1976', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(28, '0078041399', 'Muhammad Arul Aulia', 'Muham', 'L', 'Tasikmalaya', '2007-02-25', '3278052502070001', '', 'Bugelan', '2', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2020', 'Iwan Rustiawan', '1984', 'Buruh', 'Yulianti', '1988', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(29, '0072504732', 'Nizar Al Ghifari', 'Nizar', 'L', 'Tasikmalaya', '2007-09-30', '3278053009070004', '', 'Bugelan', '3', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2020', 'Endang Kurnia', '1983', 'Buruh', 'Ai Ina Karlina', '1987', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(30, '0087611265', 'Nuri Alfiani', 'Nuri ', 'P', 'Tasikmalaya', '2008-01-12', '3278055201080001', '3278051801080003', 'Bugelan', '2', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2020', 'Toni', '1971', 'Buruh', 'Lasmini', '1982', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(31, '0071189319', 'Razif Alvian Sidiq', 'Razif', 'L', 'Tasikmalaya', '2007-07-24', '3278052407070003', '', 'Cibeas', '1', '10', 'Gununggede', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2020', 'Aep Saepulloh', '1975', 'Buruh', 'Yeni Yuliani', '1979', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(32, '0072607200', 'Rifat Abdul Azis', 'Rifat', 'L', 'Tasikmalaya', '2007-10-20', '3278052010070002', '', 'Bugelan', '4', '6', 'Bugelan', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2020', 'Jaja Miharja', '1981', 'Wiraswasta', 'Lina Herlina', '1998', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(33, '0082291638', 'Rizki Nugraha', 'Rizki', 'L', 'Tasikmalaya', '2008-03-13', '3278051303080003', '', 'Bugelan', '3', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2020', 'Dodi Supriyadi', '1989', 'Buruh', 'Elis', '1986', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(34, '0076382239', 'Rusmana', 'Rusma', 'L', 'Tasikmalaya', '2007-10-04', '3278050410070001', '', 'Bugelan', '5', '6', 'Gununggede', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2020', 'Cucu', '1965', 'Buruh', 'Maryam', '1971', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(35, '0073982934', 'Syahdan Hasbi Asidiqi', 'Syahd', 'L', 'Tasikmalaya', '2007-09-19', '3278051909070002', '', 'Bugelan', '2', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2020', 'Eni Rohaeni', '1975', 'Buruh', 'Lilis  Syamsiah', '1975', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(36, '0077428633', 'Winda Wahdatul Mukromah', 'Winda', 'P', 'Tasikmalaya', '2007-10-03', '3278054310070002', '', 'Bugelan', '4', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2020', 'Mamat', '1971', 'Buruh', 'Dede Suryani', '1973', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(37, '0064263229', 'Abdul Jamil Daris Salam', 'Abdul', 'L', 'Tasikmalaya', '2006-06-23', '32780523060600021', '', 'Bugelan', '3', '11', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Urip', '1981', 'Buruh', 'Kokom', '1986', 'Buruh', '', '', 'Siswa', '', '', ''),
(38, '0062676364', 'Abdul Muhamad Jarnuji Napis', 'Abdul', 'L', 'Tasikmalaya', '2006-08-09', '3206080908060001', '', 'Kp. Lemburgede', '', '', 'Wangunsari', 'Kec. Bantarkalong', 'Kota Tasikmalaya', '', '', '', '2019', 'Arip Rahman Hakim', '1976', 'Wiraswasta', 'Elin', '1984', 'Petani', '', '', 'Siswa', '', '', ''),
(39, '0066849244', 'Aidil Putra', 'Aidil', 'L', 'Tasikmalaya', '2006-10-24', '3278052410060003', '', 'Sukasari', '2', '11', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Aa Kurnia', '1976', 'Buruh', 'Titin', '1973', 'Buruh', '', '', 'Siswa', '', '', ''),
(40, '0067300166', 'Aldi Aryadi Pratama', 'Aldi ', 'L', 'Tasikmalaya', '2006-09-09', '3278050909060004', '3206010303160006', 'Neglasari', '1', '2', 'Pameutingan', 'Kec. Cipatujah', 'Kota Tasikmalaya', '46189', '', '', '2019', 'Heryaman', '1983', 'Wiraswasta', 'Sinta', '1987', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(41, '0068570440', 'Aldi Supriatna', 'Aldi ', 'L', 'Tasikmalaya', '2006-06-05', '3278050506060003', '', 'Cibeas', '1', '10', 'Gununggede', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2022', 'Asep Yudianto', '1980', 'Buruh', 'Ai Resti Andriani', '1984', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(42, '0138638524', 'Amri Abdul Aziz', 'Amri ', 'L', 'Tasikmalaya', '2006-03-06', '3278050603060004', '', 'Bugelan', '2', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Apep', '1977', 'Buruh', 'Kokom', '1983', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(43, '0074135424', 'Ana Silpia Apipah', 'Ana S', 'P', 'Tasikmalaya', '2007-08-08', '3278054808070001', '', 'Bugelan', '3', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Abdul Somad', '1972', 'Buruh', 'Tika', '1977', 'Lainnya', '', '', 'Siswa', '', '', ''),
(44, '0072406611', 'Andini Rahma Pebrianti', 'Andin', 'P', 'Tasikmalaya', '2007-02-07', '3278054702070001', '', 'Cibeas', '1', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Syarip Hidayatuloh', '1984', 'Buruh', 'Desi Susanti', '1987', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(45, '0052225485', 'Ayu Lestari Firmansyah', 'Ayu L', 'P', 'Tasikmalaya', '2006-09-05', '3278054509060007', '', 'Bugelan', '3', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Ayep Yayat P', '1982', 'Buruh', 'Epa Nurhayati', '1985', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(46, '0066453869', 'Azka Nugraha', 'Azka ', 'L', 'Tasikmalaya', '2006-03-30', '3278053003060002', '', 'Bugelan', '3', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Wawan ', '1969', 'Buruh', 'Omah', '1974', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(47, '0071034270', 'Dela Aulia Rahmah', 'Dela ', 'P', 'Tasikmalaya', '2007-01-24', '3278056401070001', '', 'Bugelan', '3', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Suparman', '1970', 'Pedagang Kecil', 'Adah', '1980', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(48, '0061334652', 'Gagan Nugraha', 'Gagan', 'L', 'Tasikmalaya', '2006-07-07', '3278050707060002', '', 'Bugelan', '2', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Mamad Rahmat', '1984', 'Buruh', 'Nina Marlina', '1990', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(49, '0062651111', 'Hilma Nurul Arofah', 'Hilma', 'P', 'Tasikmalaya', '2006-12-29', '3278056912060002', '', 'Bugelan', '3', '11', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Saipul Aripin', '1978', 'Wiraswasta', 'Ida Rosyidah', '1984', 'Pedagang Kecil', '', '', 'Siswa', '', '', ''),
(50, '0065437884', 'Indri Rahmawati', 'Indri', 'P', 'Tasikmalaya', '2006-06-24', '3278056406060003', '', 'Bugelan', '3', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Hoer Apandi', '1952', 'Buruh', 'Julaeha', '1965', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(51, '0074960870', 'Insan Kamil', 'Insan', 'L', 'Tasikmalaya', '2007-03-31', '3278063103070002', '', 'Bugelan', '1', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Yosi Ginanjar', '1979', 'Wiraswasta', 'Alis Solihah', '1986', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(52, '0068915077', 'Muhamad Ikbal', 'Muham', 'L', 'Tasikmalaya', '2006-12-07', '3278050712060004', '', 'Sukasari', '3', '11', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Dede Sukiman', '1971', 'Buruh', 'Sri Lestari', '1979', 'Buruh', '', '', 'Siswa', '', '', ''),
(53, '0067963913', 'Neng Teni', 'Neng ', 'P', 'Lebak', '2006-05-21', '3602106105060001', '', 'Kp Cijeruk Girang ', '5', '4', 'Cibeuti', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Kodir', '1982', 'Karyawan Swasta', 'Ida Maesaroh', '1977', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(54, '0051209869', 'Novan Alparizi', 'Novan', 'L', 'Tasikmalaya', '2005-11-20', '3278052011050001', '', 'Bugelan', '3', '10', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Eman', '1963', 'Pedagang Kecil', 'Engkoy', '1966', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(55, '0068415426', 'Parid Ridwan', 'Parid', 'L', 'Tasikmalaya', '2006-07-29', '3278052907060006', '', 'Bugelan', '3', '11', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Kindi', '1953', 'Buruh', 'Emin', '1962', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(56, '0076899596', 'Rifdayanti Zulfia', 'Rifda', 'P', 'Tasikmalaya', '2007-02-28', '32780568020700041', '', 'Bugelan', '2', '3', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Herman', '1968', 'Pedagang Kecil', 'Oon', '1972', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(57, '0214748364', 'Ripan Nugraha', 'Ripan', 'L', 'Tasikmalaya', '2006-11-15', '3206085511060003', '', 'Kp. Pencutkondang', '', '', 'Wakap', 'Kec. Bantarkalong', 'Kota Tasikmalaya', '', '', '', '2019', 'Ujun', '1974', 'Petani', 'Ujum', '0', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(59, '0072692889', 'Salma Zakiyah', 'Salma', 'P', 'Tasikmalaya', '2007-03-31', '3278057103070001', '', 'Bugelan', '2', '6', 'Gununggede', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Dian Haeroni', '1976', 'Buruh', 'Ani Sumarni', '1981', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(60, '0061730037', 'Sofi Sopiawati', 'Sofi ', 'P', 'Tasikmalaya', '2006-06-20', '3278056006060010', '', 'Bugeulan', '3', '6', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Entis Sutisna', '1967', 'Buruh', 'Ita', '1977', 'Lainnya', '', '', 'Siswa', '', '', ''),
(61, '0079798077', 'Yayu Purnamasari', 'Yayu ', 'P', 'Tasikmalaya', '2007-01-04', '3278054401070003', '3278050803070003', 'Bugelan', '2', '4', 'Gunung Tandala', 'Kec. Kawalu', 'Kota Tasikmalaya', '46182', '', '', '2019', 'Jojo', '1966', 'Buruh', 'Dede Uyum', '1972', 'Tidak Bekerja', '', '', 'Siswa', '', '', ''),
(62, '0083017635', 'Adi Bayu Maulana Putra', 'Adi B', 'L', 'Tasikmalaya', '2008-04-15', '', '', 'Kp. cisapi 001/007', '', '', '', '', 'Kota Tasikmalaya', '', '', '', '2021', '', '', '', '', '', '', '', '', 'Siswa', '', '', ''),
(71, 'BGL202201', 'Asep Irfan Helmi, S.T.', 'Asep ', '', 'Tasikmalaya', '2022-08-15', '', '', 'Kp. Bugelan', '03', '016', 'Kel. Gn Tandala', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Pengurus', '', '', 'Kepala Sekolah'),
(72, 'BGL202202', 'Urfah Hidayah, S. Pd', 'Urfah', '', 'Tasikmalaya', '1928-08-08', '', '', 'Kp. Bugelan', '02', '16', 'Kel. Gn Tandala', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', 'Bendahara,Wali Kelas 7,PAI'),
(73, 'BGL202203', 'Ai Mala Nurmala, S. Pd', 'Ai Ma', '', 'Tasikmalaya', '2022-08-03', '', '', 'Kp. Bugelan', '01', '016', 'Kel. Gn Tandala', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', 'Kurikulum,Wali Kelas 8,IPS'),
(74, 'BGL202204', 'Ai Pristianti, S. Pd', 'Ai Pr', '', 'Tasikmalaya', '1915-12-28', '', '', 'Kp. Cianjur wetan', '01', '08', 'Kel. Gn Tandala', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', 'PKN'),
(76, 'BGL202206', 'Sova Patrotul Alawaiyah, S. Pd', 'Sova ', 'P', 'Tasikmalaya', '1917-08-14', '', '', 'Kp. Pagaden', '02', '01', 'Kel. Gn Tandala', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', ''),
(77, 'BGL202207', 'Meida Gunaningsih, S. Pd', 'Meida', 'P', 'Tasikmalaya', '1907-01-07', '', '', 'Kp. Cicariang', '02', '09', 'Kel. Karsamenak', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', ''),
(78, 'BGL202208', 'Dede Siti Sobariah, S. Pd', 'Dede ', 'P', 'Tasikmalaya', '1914-02-10', '', '', 'Kp. Gunung Waru', '04', '015', 'Kel. Karsamenak', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', ''),
(79, 'BGL202209', 'Andi Purnamasari, S. Pd', 'Andi ', 'P', 'Tasikmalaya', '1934-01-25', '', '', 'Kp. Pelang', '03', '06', 'Kel. Sukamanah', 'Cipedes', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', ''),
(81, 'BGL202211', 'Muhamad Sodik, A. md Kom', 'Muham', 'L', 'Tasikmalaya', '2022-08-15', '', '', 'Kp. Legok Oncom,', '01', '07', 'Desa Sukamulya', 'Singaparna', 'Kab. Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', ''),
(82, 'BGL202212', 'Parhan Mulyana, S. Pd', 'Parha', '', 'Tasikmalaya', '1913-02-17', '', '', 'Kp. Cibuluh', '04', '11', 'Kel. Karanganyar', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Staff', '', '', ''),
(83, 'BGL202213', 'Suci Nur Amanatillah', 'Suci ', '', 'Tasikmalaya', '1915-08-05', '', '', 'Kp. Cibogo', '02', '05', 'Kel. Cibeuti', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Staff', '', '', ''),
(84, 'BGL202214', 'Fitria Adi Rahayu, S. ST', 'Fitri', 'P', 'Jakarta', '2022-08-23', '', '', 'Kp. Bugelan', '04', '06', 'Kel. Gn Tandala', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', ''),
(85, 'BGL202215', 'Abdul Aziz', 'Abdul', 'Laki-laki', 'Bandung', '1934-01-30', '3278051504080002', '9998051504080002', 'Jln. Raya Margaluyu NO. 301', '05', '05', 'Desa Kujang', 'Cikoneng', 'Ciamis', '46261', '+6287733807998', 'hikam.abukafa@gmail.com', '2022', '', '', '', '', '', '', 'Mengesankan', 'Rajinlah Belajar', 'Guru', 'memberbugelan', 'JADWAL LIFESKILL.pdf', 'Wali Kelas 9,TIK'),
(86, 'BGL202216', 'Acep Helmi, S. Pd. I', 'Acep ', 'Laki-laki', 'Tasikmalaya', '2022-08-15', '', '', 'Kp. Bugelan', '03', '016', 'Kel. Gn Tandala', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '2014', '', '', '', '', '', '', '', '', 'Pengurus', '', '', 'Kesiswaan');

-- --------------------------------------------------------

--
-- Table structure for table `pooling`
--

CREATE TABLE `pooling` (
  `id` int(11) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pooling`
--

INSERT INTO `pooling` (`id`, `jenis`, `pertanyaan`, `a`, `b`, `c`, `d`, `ket`) VALUES
(1, 'Siswa', 'Bagaimana Perkembangan Sikap Ananda selama belajar di SMPT Bugelan?', 2, 0, 1, 1, 'Sikap'),
(2, 'Siswa', 'Bagaimana Perkembangan Kecerdasan Ananda selama belajar di SMPT Bugelan?', 0, 2, 2, 0, 'Cerdas'),
(3, 'Siswa', 'Bagaimana Perkembangan Keterampilan Ananda selama belajar di SMPT Bugelan?', 0, 1, 1, 0, 'Terampil'),
(4, 'Guru', 'Bagaimana Kinerja Guru & Pengajar di SMPT Bugelan?', 0, 2, 0, 0, ''),
(5, 'KBM', 'Bagaimana Kegiatan Belajar Mengajar di SMPT Bugelan?', 1, 1, 0, 0, ''),
(6, 'Sekolah', 'Bagaimana Kontribusi Sekolah di Kp. Bugelan saat ini?', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `sekolah` text NOT NULL,
  `npsn` text NOT NULL,
  `yayasan` text NOT NULL,
  `no_izin` text NOT NULL,
  `alamat` text NOT NULL,
  `map` text NOT NULL,
  `telepon` text NOT NULL,
  `email` text NOT NULL,
  `motto` text NOT NULL,
  `periode` text NOT NULL,
  `kepala` text NOT NULL,
  `tema` text NOT NULL,
  `kontak` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `sekolah`, `npsn`, `yayasan`, `no_izin`, `alamat`, `map`, `telepon`, `email`, `motto`, `periode`, `kepala`, `tema`, `kontak`, `ket`) VALUES
(3, 'SMP Terpadu Bugelan', '', 'Yayasan Bugelan', '5.3/0575/SK-PEND/DPMPTSP/2022', 'Bugelan, Gunungtandala, Kec. Kawalu, Kab. Tasikmalaya, Jawa Barat 46182', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.5795261836697!2d108.21595821528517!3d-7.40091927492719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65f93c35b67209%3A0x6071526de8e0ade1!2sSMP%20Terpadu%20Bugelan!5e0!3m2!1sen!2sid!4v1676433713981!5m2!1sen!2sid', '(0812) 9000 4840', 'bugelan.smpt@gmail.com', 'Impian tidak akan terwujud dengan sendirinya. Kamu harus segera bangun dan berupaya untuk mewujudkannya', '2022', 'Asep Irfan Helmi, S.T.', '', '087733807998', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`) USING HASH;

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalender`
--
ALTER TABLE `kalender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nisn` (`ni`) USING HASH;

--
-- Indexes for table `pooling`
--
ALTER TABLE `pooling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kalender`
--
ALTER TABLE `kalender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kompetensi`
--
ALTER TABLE `kompetensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `pooling`
--
ALTER TABLE `pooling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
