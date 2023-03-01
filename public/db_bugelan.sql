-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 03:38 AM
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
(1, 1, 'Siswa', '2021', 'Ade N', '2023-02-28', 1, 1, 1, 1, 0, '', ''),
(2, 5, 'Siswa', '2021', 'Fatem', '2023-02-28', 1, 0, 0, 0, 0, '', ''),
(3, 7, 'Siswa', '2021', 'Herna', '2023-02-28', 0, 0, 0, 0, 0, 'i', ''),
(4, 6, 'Siswa', '2021', 'Fuad ', '2023-02-28', 0, 0, 0, 0, 0, 'a', ''),
(5, 4, 'Siswa', '2021', 'Anggr', '2023-02-28', 1, 1, 1, 1, 1, '', ''),
(6, 8, 'Siswa', '2021', 'Husnu', '2023-02-28', 0, 0, 0, 0, 0, 's', ''),
(7, 9, 'Siswa', '2021', 'Jelit', '2023-02-28', 0, 0, 0, 0, 0, 's', ''),
(8, 10, 'Siswa', '2021', 'Livia', '2023-02-28', 1, 1, 1, 0, 0, '', ''),
(9, 11, 'Siswa', '2021', 'Nurma', '2023-02-28', 1, 1, 1, 1, 1, '', ''),
(10, 12, 'Siswa', '2021', 'Piki ', '2023-02-28', 1, 1, 1, 1, 1, '', ''),
(11, 13, 'Siswa', '2021', 'Raiha', '2023-02-28', 1, 1, 0, 1, 1, '', ''),
(12, 14, 'Siswa', '2021', 'Restu', '2023-02-28', 1, 1, 1, 1, 1, '', ''),
(13, 15, 'Siswa', '2021', 'Rizki', '2023-02-28', 1, 1, 0, 0, 1, '', ''),
(14, 16, 'Siswa', '2021', 'Syifa', '2023-02-28', 1, 1, 1, 0, 0, '', ''),
(15, 17, 'Siswa', '2021', 'Vivia', '2023-02-28', 1, 1, 1, 1, 1, '', ''),
(16, 18, 'Siswa', '2021', 'Wafa ', '2023-02-28', 1, 1, 1, 0, 0, '', ''),
(17, 19, 'Siswa', '2021', 'Wafi ', '2023-02-28', 1, 1, 1, 1, 0, '', ''),
(18, 20, 'Siswa', '2021', 'Zaki ', '2023-02-28', 1, 1, 1, 1, 1, '', ''),
(19, 62, 'Siswa', '2021', 'Adi B', '2023-02-28', 0, 0, 0, 0, 0, 'a', ''),
(20, 21, 'Siswa', '2020', 'Ade T', '2023-02-28', 0, 0, 0, 0, 0, 'a', '');

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
(1, 'abu.kafa', '$2y$10$6J.gtIwGc4svpgxJtLWSNOqxvpN3aG.XpG9.Vz6e6VEryUxgDPGfW', 85, 'Abdul Aziz, S.Pd.I', 'Programmer', 'Office', ''),
(32, 'adm01', '$2y$10$C9E0QZnpdxTur6ZoXPpRMeqE8xnhM3JsNRi5JeKXGNhpjJCw4MuzW', 62, 'Adi Bayu Maulana Putra', 'Administrator', 'Absensi', ''),
(33, 'adm02', '$2y$10$t4d51VYeOcCTIN.7AoQN6.s4fnf/iPEn5ENP8X3U3SayguyR.eFIe', 1, 'Ade Nurafni', 'Administrator', 'Absensi, Blog', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` bigint(20) UNSIGNED NOT NULL,
  `ni` bigint(20) UNSIGNED NOT NULL,
  `autor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` timestamp NULL DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `kategori`, `ni`, `autor`, `judul`, `slug`, `image`, `excerpt`, `body`, `published`, `created`, `updated`) VALUES
(1, 3, 5, '', 'Hic aliquam harum veritatis non harum et earum iste cumque.', 'earum-et-aut-suscipit-quia-aliquam-dolorum-excepturi', NULL, 'Illo explicabo quos non qui ab maiores autem. Odio voluptas saepe eos voluptatem.', '<p>Dolore nemo recusandae sit non. Est eum ex nesciunt inventore mollitia omnis saepe omnis. Saepe sunt sit ipsum consequatur non veritatis.</p><p>Molestiae cum aspernatur aut illum deserunt ipsa voluptatem minima. Aut possimus officiis aliquam ipsa suscipit deserunt. Ab assumenda et deserunt officiis totam. Aut pariatur id aliquid asperiores excepturi.</p><p>Libero ut repellat placeat aut esse nesciunt omnis. Consequatur autem eos molestiae. Libero voluptatibus ipsa nemo inventore aut maiores et. Non sunt voluptatem in consequatur dolores numquam voluptatum.</p><p>Autem nesciunt voluptates officiis architecto doloremque iusto. Qui deleniti eius sint saepe aperiam culpa. Molestiae aut necessitatibus explicabo ipsum illum.</p><p>Animi dolorem dolor voluptatibus nesciunt. Qui tempora omnis veritatis aspernatur expedita vero tempora. Quis aliquam itaque est aliquid hic qui ipsum. Nobis rerum suscipit repellat quisquam officia dolor autem.</p>', NULL, '2022-05-21 18:33:44', '2022-05-21 18:33:44'),
(2, 2, 1, '', 'Et possimus est.', 'et-unde-voluptas-eum-cumque-velit-sed-ut', NULL, 'Qui illo ut vero nam atque quia vel deleniti. Perferendis ut animi consequuntur molestiae. Molestias vel possimus velit. Molestias ut a non provident odio.', '<p>Omnis repellendus nemo ab suscipit debitis harum. Quasi fuga et minus possimus porro ex. Omnis architecto velit delectus quis est. Veritatis expedita aspernatur aut consequatur aut aut et.</p><p>Commodi eius id perspiciatis. Doloribus cumque amet voluptates voluptatem qui. Nesciunt ut iure commodi rerum. Quidem temporibus nisi et hic sit dicta. Tempora odio facere nihil alias autem.</p><p>Assumenda aperiam qui voluptates incidunt assumenda. Omnis rem necessitatibus quis officiis atque voluptates error. Perferendis et eos sunt sapiente voluptatum rerum.</p><p>Tempora necessitatibus accusamus omnis eos voluptate. Magni qui quis placeat hic accusantium voluptatem sed mollitia.</p><p>Cumque nihil at quam quia sunt. Aliquam voluptatum est ut eos dolor. Nulla voluptatem reiciendis eos cum.</p>', NULL, '2022-05-21 18:33:44', '2022-05-21 18:33:44'),
(3, 3, 3, '', 'Perspiciatis error exercitationem aperiam qui qui unde.', 'eos-animi-vel-quibusdam-a', NULL, 'Officia consectetur odio ea sit eaque nulla. Voluptates voluptas exercitationem rerum a aperiam porro quos. Reprehenderit repellat tempore dolore voluptas sit saepe sed. Quam iste corporis sed facere.', '<p>Sapiente assumenda dolor totam aperiam quibusdam quaerat. Illum eum expedita quisquam eligendi vero aut facere. Dolorem dolore perferendis odit aliquid.</p><p>Facilis tempore earum at iste voluptatem facilis. Distinctio minus maiores veritatis illo est excepturi. Aliquid earum at consectetur id sit.</p><p>Cumque rem autem sint qui quia odio modi. Dolor nam non sed molestiae culpa.</p><p>Aut consequatur voluptates sint cupiditate. Ut est voluptates ut ipsam. Fuga molestiae est quia asperiores reprehenderit non doloremque quidem. Rerum qui natus voluptatum consequatur. Ipsa beatae ipsa similique ab eum.</p><p>Ullam neque ad et repellat distinctio. Qui ab dignissimos et. Et et impedit nihil in optio.</p><p>Voluptatibus vel omnis consequatur aut incidunt magni est. Tenetur itaque at aperiam. Magnam id occaecati et eligendi dolorum deleniti.</p>', NULL, '2022-05-21 18:33:44', '2022-05-21 18:33:44'),
(4, 1, 1, '', 'Dolores suscipit quod.', 'laboriosam-est-deserunt-velit-veniam-voluptatem-delectus-voluptas', NULL, 'Omnis tenetur eos quidem qui distinctio aut atque. Mollitia minima blanditiis qui. Nemo aspernatur enim voluptatem at cumque sed vel.', '<p>Quia nobis laudantium est. Et nobis laborum maiores ut et sed. Reiciendis officiis qui voluptas corrupti laudantium cupiditate ut facilis.</p><p>Beatae sint quia ut non consequatur nihil ullam. Blanditiis qui similique autem beatae excepturi porro. Dicta maiores sequi nobis hic aut aut sunt. Laboriosam aut sapiente sint a quidem molestias doloremque voluptas.</p><p>Blanditiis consequatur in nam neque et. Perspiciatis voluptate tenetur in voluptatem. Aspernatur beatae quas nam aspernatur ipsa.</p><p>Est quod nisi ipsum et mollitia sequi exercitationem. Alias dolor id autem. Eum quam accusamus occaecati minus autem architecto assumenda quis.</p><p>Provident est aut expedita quisquam fuga et. Velit praesentium assumenda laboriosam numquam id minus.</p><p>Animi nihil iusto animi ea natus accusantium. Quaerat sit quo officiis. Neque omnis numquam rerum qui dolores id totam.</p><p>Eligendi vero dignissimos facilis vel. Est earum est et natus est.</p><p>Nemo quia magni inventore saepe necessitatibus quo. Quisquam explicabo temporibus quia omnis. Aut fugit omnis voluptatem earum ea earum. Rerum aut exercitationem ut.</p><p>Mollitia sed laborum et explicabo ipsa repellendus et. Neque est sed amet et in temporibus officia.</p><p>Eum eum accusantium temporibus dolore. Fugiat ea ullam dolorum. Aut enim quia sit ipsam.</p>', NULL, '2022-05-21 18:33:44', '2022-05-21 18:33:44'),
(5, 2, 3, '', 'Autem quo hic quia repudiandae vel.', 'dignissimos-deserunt-unde-nostrum-nihil-minima-nostrum', NULL, 'Aliquid voluptatem culpa voluptates qui et et tenetur. Corporis qui tempora animi molestias et. Maiores qui ut fugiat id.', '<p>Voluptatem eum reiciendis excepturi. Ipsam enim est occaecati aut aut. Iusto aperiam et amet voluptates consequatur consequatur.</p><p>Est ut cupiditate illum sit voluptatem iusto voluptatum. Qui aperiam voluptatibus est exercitationem ea aut.</p><p>Excepturi omnis et ipsa ut. Quos ratione earum amet non. Est et ratione et quo est voluptatibus.</p><p>Qui facere rerum sint eum alias natus et esse. Quisquam et exercitationem corporis officia neque.</p><p>Sed praesentium modi atque impedit sunt neque nulla omnis. Tenetur dolor a velit quo sapiente architecto. Modi quidem est placeat. Voluptates omnis est inventore dignissimos quia.</p><p>Earum vero eos esse et enim enim nihil aliquid. Qui ut quidem et distinctio iste eveniet. Numquam iusto ullam nihil minima quam suscipit. Blanditiis fugiat ipsum voluptas esse reprehenderit voluptatibus blanditiis.</p>', NULL, '2022-05-21 18:33:44', '2022-05-21 18:33:44'),
(6, 1, 4, '', 'Deleniti eum fugit.', 'molestias-tenetur-consectetur-dolore', NULL, 'Voluptatem illum animi libero optio rerum eveniet asperiores. Itaque earum necessitatibus mollitia ut placeat tempore. Odio qui facere eum reprehenderit magnam. Expedita iste qui ratione ut repudiandae natus. Corrupti iure rerum ab corrupti consequuntur.', '<p>Voluptatem corporis similique voluptas recusandae consequatur sed delectus. Nostrum quibusdam dolorum reiciendis temporibus. Laboriosam dolor voluptatem et eaque sint ab.</p><p>Reprehenderit eum et fuga odio ut. Repellendus dolore quasi et occaecati voluptates consequatur.</p><p>Sunt qui aspernatur excepturi suscipit ad iusto. Cumque est et blanditiis id. Asperiores praesentium nostrum est quod repellat. Voluptate non blanditiis ut incidunt facilis.</p><p>Accusantium doloribus consequatur sint eveniet. Ipsam perspiciatis repellendus et unde. Expedita enim architecto cupiditate consequatur voluptas et. Nihil aliquam omnis illum et laboriosam. Accusantium libero excepturi dolorum facilis ea voluptatem cum.</p><p>Omnis sit enim omnis debitis aut. Ut incidunt deleniti quia quo. Quod debitis consequuntur voluptas sed tempore.</p><p>Sunt voluptates ratione beatae autem temporibus. Dolorem esse accusantium et ipsam consequatur explicabo. Laudantium tempora et voluptates ducimus voluptatibus quia aut.</p><p>Aspernatur numquam laboriosam id praesentium praesentium rerum neque. Minima ut sit sit saepe iure eum commodi. Commodi animi consequatur voluptatem repudiandae molestiae. Qui possimus saepe ut fugit totam. Atque quae aut explicabo quis qui praesentium hic.</p><p>Nulla quam atque error consequatur et. Odit laborum minima libero voluptatibus sit sit. Vel eaque optio esse occaecati numquam doloremque.</p>', NULL, '2022-05-21 18:33:44', '2022-05-21 18:33:44'),
(7, 3, 1, '', 'Aspernatur est consequuntur eos voluptas.', 'atque-harum-vitae-ullam-qui-et-laboriosam-sapiente', NULL, 'Et illum placeat ipsam et dolores odio corporis. Aliquid eveniet qui totam architecto sit autem ea. Deserunt odit temporibus voluptatum et non ut quis. Totam dolorem sunt aspernatur.', '<p>Laudantium ut nostrum quis aut expedita ut. Dolor voluptas dolor nihil sed qui. Ut voluptatum tenetur fugiat ut veniam culpa.</p><p>Veniam eum voluptatem omnis laudantium quia quae rerum. Ipsam eius quae qui et.</p><p>In iste nihil et. Et excepturi soluta facere ut numquam. Id rem sed et ducimus.</p><p>Sit aut sit debitis nobis consequuntur non. Quis accusamus repellendus fugiat. Ut deserunt sed aut soluta et. Quo illum id placeat suscipit illum. Enim incidunt molestias impedit omnis blanditiis labore sint.</p><p>Voluptatum harum animi voluptatem non odit. Est sequi alias magni magnam eaque. Ut iure dignissimos consequatur consequatur. Cum est velit est rem ab.</p><p>Veniam vel eum placeat accusamus distinctio. Velit repellendus nemo minus nihil. Et molestias fugiat sed eum corporis rem nihil dicta. Deserunt nam rerum distinctio id omnis consectetur molestiae.</p><p>Et architecto id repudiandae culpa quaerat ea quia sed. Saepe totam rerum iusto corrupti odit doloremque quidem. Deleniti ratione iusto esse modi quasi.</p>', NULL, '2022-05-21 18:33:44', '2022-05-21 18:33:44'),
(8, 1, 5, '', 'Eius excepturi adipisci odio eius.', 'magni-ut-et-excepturi-non-est-illum', NULL, 'Sed assumenda nisi molestias debitis. Error ut magni at. Eos rerum numquam quibusdam molestiae incidunt at. Nesciunt quia fugit cum error ab ut repellendus perferendis.', '<p>Qui ut itaque eos error voluptas consequatur. Impedit vel ullam aliquam reprehenderit omnis. Est provident ipsa quae dicta eligendi impedit.</p><p>Nobis voluptate voluptas aut quisquam sequi voluptatum. Vero enim magnam quasi veniam neque facere. Repellendus nam dolores sequi voluptatem repellendus amet ut possimus. Amet et enim sunt eius.</p><p>Esse sequi necessitatibus quis temporibus quis. Excepturi quia molestias aut amet corrupti. Saepe illum enim inventore architecto quibusdam qui.</p><p>Voluptatum molestiae quae sed distinctio voluptatem distinctio. Id omnis assumenda et nulla id.</p><p>Quidem sit soluta laboriosam aut aperiam. Qui explicabo id est perspiciatis est et facilis quia. Ut voluptatibus et at eligendi ad. Nemo odio voluptatem quo fugiat.</p><p>Harum corporis consequatur sunt alias qui iure fuga. Officia eos quis voluptatum quia. Neque numquam porro velit voluptatum totam.</p>', NULL, '2022-05-21 18:33:44', '2022-05-21 18:33:44'),
(9, 3, 2, '', 'Est quia magni est nulla omnis sint.', 'at-aut-architecto-rem-ut-qui', NULL, 'Velit tempora eligendi est. Distinctio numquam expedita non eos consequatur quos accusantium. Nemo ea totam autem iusto ipsum voluptatem. Cumque quo animi autem omnis.', '<p>Hic iusto nesciunt rerum eum praesentium similique dicta. Odit neque voluptates fugiat et dolor rerum. Et possimus provident explicabo et ipsa ea. Unde quia nihil pariatur asperiores incidunt dolores.</p><p>Sint magni dolores saepe sit odit. Ab temporibus dignissimos recusandae voluptate molestiae eum voluptate dolorum. Qui laudantium ipsum voluptatem et.</p><p>Vel pariatur occaecati voluptatum repellendus. Velit ipsam vel aut. Earum mollitia ex hic et. Rerum numquam alias totam distinctio.</p><p>Nulla aliquam sunt ut unde et placeat. Assumenda quos quia eius et sint provident et consequatur. Neque enim optio vel. Earum sit fugit necessitatibus accusamus.</p><p>Perferendis consequatur velit perferendis. Labore eum qui soluta fugit molestiae magni illum. Quo optio enim excepturi minima.</p><p>Veritatis nulla est est inventore dolores quidem doloribus. Ut dolor omnis sint inventore. Vel hic dolor nostrum quas et consequatur. Omnis molestiae possimus incidunt dolor repudiandae.</p>', NULL, '2022-05-21 18:33:45', '2022-05-21 18:33:45'),
(10, 1, 4, '', 'Placeat dolore enim atque libero et laudantium aut.', 'minus-perspiciatis-voluptatem-et-aut-sunt-et', NULL, 'Quia dicta unde quam voluptates. Autem expedita voluptatum voluptatem explicabo distinctio consequatur. Ut enim omnis id a accusamus.', '<p>Officiis reiciendis quia repellendus itaque. Quas sed quia eum temporibus. Ratione quia suscipit quos. Earum eaque fugiat nisi repellendus repudiandae praesentium.</p><p>Aliquam aut autem molestiae tempora. Delectus corrupti natus et eum facilis quo. Consequuntur molestiae ea porro sunt qui velit. Labore accusantium consequatur explicabo neque et quia.</p><p>Dolore atque similique beatae debitis qui maxime voluptates minima. Id ea rem et aliquam distinctio praesentium consequatur repellendus.</p><p>Pariatur qui non velit adipisci libero nam quo. Aut necessitatibus qui dolores adipisci. Amet sunt dolorem voluptas.</p><p>Velit non qui quasi ea asperiores cupiditate. Vero adipisci culpa est quidem voluptas voluptatibus. Corporis consequatur delectus atque consequuntur quaerat.</p><p>Repudiandae cum voluptatem incidunt sit. Reprehenderit illo vel rem voluptatem maiores dolores. Magni error officia nisi illum ullam mollitia.</p><p>Sunt id tempore aspernatur error. Sed dolore corrupti non ut sed et ut. Voluptatem aspernatur delectus assumenda assumenda. Facilis consequuntur totam mollitia nisi.</p>', NULL, '2022-05-21 18:33:45', '2022-05-21 18:33:45'),
(11, 3, 4, '', 'Dolorem ratione quia ex aut voluptas unde.', 'mollitia-hic-consequuntur-quia-accusamus', NULL, 'Libero est omnis deleniti qui. Rerum minima animi vel asperiores dolor dolores. Eos quaerat voluptatibus ducimus deserunt voluptas corrupti.', '<p>Aspernatur esse non qui vero voluptas et. Nam voluptatum porro perspiciatis voluptates dolorum iure perspiciatis repellat. Esse cumque et ipsum sunt quos vitae libero. Dolores quasi totam ut ipsum.</p><p>Ut laboriosam et error exercitationem ipsam laboriosam excepturi. Ullam consequatur illo quam illum quis sunt cupiditate suscipit. Soluta nostrum aliquam ut fuga esse est delectus. Voluptatem corrupti et tempore corrupti.</p><p>Molestiae ullam provident quidem autem facilis quae. Possimus aut neque fuga numquam sint eveniet. Et incidunt provident nisi in occaecati. Reiciendis quae vel quia itaque nobis quasi eos.</p><p>At quaerat ipsa fugiat qui et amet sunt dignissimos. Incidunt eos eaque consectetur voluptates tenetur. Delectus laudantium molestias neque ut. Accusantium eos hic quo magni ut quo in.</p><p>Repellat sapiente magnam cum voluptatem dolor. Minima assumenda facere provident dolores repellendus voluptatem eaque. Voluptas nemo eligendi incidunt et necessitatibus earum qui. Consequuntur deleniti impedit repellendus totam.</p><p>Est veritatis doloremque voluptas maiores. Voluptatem est dolor ducimus dicta excepturi quam molestias. Est molestiae quidem earum commodi quisquam deleniti asperiores impedit. Ad beatae voluptate veritatis occaecati expedita quod.</p><p>Autem eos et et illo. Vel vel explicabo minus provident autem corporis molestias. Magnam repudiandae qui et ut. Est nihil sit laborum autem molestias.</p><p>Perspiciatis quod repellat aut molestias sit tempora quam. Sed doloribus et qui explicabo hic et. Neque perferendis repudiandae repellendus ipsa.</p><p>Neque laborum quam fuga similique unde est. Molestiae nulla rerum delectus sit omnis. Et amet fuga molestiae. Et vel sed sit numquam voluptates non dolorum.</p>', NULL, '2022-05-21 18:33:45', '2022-05-21 18:33:45'),
(12, 3, 3, '', 'Est quaerat minus quia.', 'suscipit-saepe-dolor-ab-similique', NULL, 'Ducimus ad iusto rerum impedit non. Quod doloribus illum vel quasi. Sed dolorem quae laudantium. Necessitatibus omnis sed pariatur nostrum at.', '<p>Quia cum voluptatem aut illum animi. Mollitia distinctio sit commodi sint. Et aut qui quae velit corporis consequuntur et. Tempore quod fugit sunt non nihil.</p><p>Totam incidunt reiciendis deleniti eveniet pariatur ratione. Et quia quis ea est qui non quidem illum. Minima sequi explicabo enim quas adipisci qui doloremque.</p><p>Molestias ut iste tempora placeat quis placeat. Consequatur commodi fugiat fuga consequatur magnam earum. Ea fuga dicta facilis velit qui repudiandae corporis.</p><p>Adipisci recusandae id officiis odio maiores. Officia amet voluptas cumque natus in. Ratione alias corrupti asperiores eum corrupti laborum sint. Aspernatur mollitia aliquam delectus iusto unde necessitatibus laborum. Quae non ea quas culpa ut.</p><p>Est molestiae illo reiciendis sed sit. Consectetur sit minus consequuntur voluptatem. Iure et quis et. Voluptas impedit architecto animi recusandae ut animi autem.</p><p>Molestiae aspernatur aliquam quibusdam ipsa voluptas voluptatem ipsa. Est voluptas sit distinctio. Minima voluptate aut fuga quis repellendus suscipit temporibus aliquid. Maiores ut aut mollitia qui odio enim ea reprehenderit.</p><p>Inventore dolores atque tenetur ratione ea commodi accusantium. Quo sapiente dolorem possimus beatae delectus sit. Mollitia voluptates laborum commodi aut.</p>', NULL, '2022-05-21 18:33:45', '2022-05-21 18:33:45'),
(13, 2, 3, '', 'Dicta quidem aut optio molestias ut vel.', 'eos-aut-qui-corporis-et-nostrum-illo-quibusdam-quaerat', NULL, 'Sit et voluptas laboriosam nesciunt iusto velit quasi perferendis. Tempore omnis rerum est. Non ad facere iure omnis.', '<p>Ut magni iusto consequuntur et velit quia temporibus rem. Omnis reprehenderit eos tenetur voluptatem. Qui sit similique placeat repellat eum dolor sed consequuntur. Ipsum quas esse animi optio.</p><p>Dignissimos eos alias voluptatem perferendis voluptates et. Sed reprehenderit blanditiis magni. Minus molestiae eos aut vitae.</p><p>Sequi quasi praesentium ut eius ea culpa provident dolore. Eaque rem dolorem nostrum illum voluptatem modi et. Mollitia amet mollitia enim officia et repudiandae aut. Et est sit labore ipsam distinctio porro minus magnam. Aut odit nostrum est aut est.</p><p>Molestiae occaecati tempore aut voluptatum dolore. Iure voluptatem dolores mollitia sunt veniam. Beatae autem exercitationem earum ea nisi. Delectus hic voluptas quis enim ea.</p><p>Incidunt minus iure ut ab et id. Delectus libero quam quo ad. Quis illum voluptates voluptate aliquid. Similique cupiditate ut et. Aut doloremque ut doloremque unde illum.</p><p>Sit quae veritatis hic ea et. Aspernatur eos accusantium nesciunt. Dolore doloribus voluptas odio mollitia sunt incidunt unde.</p><p>Exercitationem culpa facilis quis. Eius hic sunt exercitationem eos. Quasi tempore eveniet impedit animi tempore. Nemo facilis sit quis nihil corporis vel.</p><p>Adipisci eius non eos pariatur fugit nobis vero ipsam. At cumque explicabo et ea quia omnis. Earum dolores vero voluptas tenetur rem quam maxime qui.</p><p>Natus beatae est accusantium. Necessitatibus eius laudantium modi itaque repellendus. Beatae ut ad libero aperiam. Dolorem sunt odio ipsa nulla accusamus est praesentium.</p><p>Eos doloremque dicta ut deserunt id. Molestiae quis dolor exercitationem tenetur est quidem. Unde eius voluptas odio qui est impedit. Dolores explicabo minima nemo aut sed corrupti iusto. Aspernatur possimus et praesentium dignissimos nemo beatae.</p>', NULL, '2022-05-21 18:33:45', '2022-05-21 18:33:45'),
(14, 2, 2, '', 'Adipisci ex dolorum.', 'voluptate-nulla-et-culpa-autem-veritatis-eum-porro', NULL, 'Ea voluptatem dolor architecto consectetur assumenda non. Blanditiis explicabo ab voluptatem laboriosam velit ullam. Quia quaerat ea voluptatem magni. Autem commodi quos sunt et aliquid voluptatem aut.', '<p>Aliquam laboriosam voluptatem accusamus ratione consectetur dicta pariatur. Ducimus aut ea aut fugit tempora quo aut. Provident esse ut quis animi corrupti excepturi. Ipsa unde qui in excepturi.</p><p>Non molestiae quis aut nam nihil. Et sit rerum commodi eveniet est aut magni. Dolor consequatur sunt hic consectetur omnis. Fuga eum est vero aut deserunt.</p><p>Dolor architecto et maiores necessitatibus voluptas sapiente. Iure dolore ut non ducimus ab. Aliquid porro non quae cum deserunt unde qui et. Dolorem eaque at esse aspernatur.</p><p>Repellat sed impedit accusantium facere corrupti. Vero excepturi laborum neque accusamus unde consequatur. Officia ratione vel perspiciatis qui. Voluptatem qui voluptatem porro et non. Velit corporis eveniet ab ipsum id.</p><p>Dicta distinctio repellendus vero consequatur expedita excepturi. Ut dolores laborum facilis velit harum. Ut delectus suscipit beatae quis aut laborum explicabo.</p><p>Minima voluptatem et qui modi doloremque sit voluptatibus. Porro ea eos ut quibusdam sed distinctio rem. Cupiditate eos rerum distinctio deserunt iure. Quis quam qui consequatur ut laudantium deserunt quia. Culpa culpa numquam praesentium voluptas necessitatibus vel.</p><p>Unde sint quidem iusto debitis minus est soluta soluta. Accusantium illo cum magnam est quia. Sint dolor dolores aut ut fuga voluptatem nemo nemo. Aut impedit dolorem fugiat ea.</p><p>Voluptates repudiandae sit enim tempora natus non. Incidunt ex et excepturi amet quo voluptas. Et molestiae quasi dicta quod est eos optio. Ipsum aut ut id. Et labore aut ipsa sed est eligendi.</p><p>Asperiores corrupti voluptatem repudiandae eum voluptatibus alias et. Sunt aliquam voluptatibus neque eveniet assumenda suscipit.</p>', NULL, '2022-05-21 18:33:45', '2022-05-21 18:33:45'),
(15, 1, 2, '', 'Sit voluptate nihil sunt.', 'corrupti-incidunt-necessitatibus-sint-et-alias-aut-quis', NULL, 'Sit iusto commodi architecto ullam quos laudantium. Praesentium eveniet voluptatem est et. Delectus rerum nisi architecto maxime earum. Sed aperiam est doloribus eius. Porro sint iste tenetur harum.', '<p>Nostrum id dolorem dignissimos voluptas similique autem. Rerum ipsa consequuntur illo sequi sunt temporibus aut. Quisquam error libero dolor est voluptatibus.</p><p>Modi hic possimus omnis nulla quo est. Architecto modi eum soluta ex. Vitae nihil aspernatur et culpa laborum vero id. Sit ea consectetur consequuntur est rerum illum non. Est praesentium praesentium earum nihil consequatur natus.</p><p>Voluptas quaerat nulla magnam saepe quidem harum molestias. Numquam maiores eum laborum quis repudiandae eos dolorem. Qui deleniti et est iusto incidunt ut quo.</p><p>Nihil deserunt fugit et in molestias. Et sed ullam ut magni. Cum nihil rerum sunt assumenda assumenda commodi error.</p><p>Facilis tenetur vel enim est impedit minima in. Esse praesentium aut sequi nihil architecto autem eum. Atque magnam ducimus sint. Sunt quidem velit rem placeat molestiae.</p><p>Neque explicabo voluptatem minima nostrum et. Ipsa autem est tenetur beatae sit iure pariatur aut. Sunt necessitatibus autem facere nihil. Dignissimos dolores nobis voluptatibus nam deleniti aspernatur et.</p>', NULL, '2022-05-21 18:33:45', '2022-05-21 18:33:45'),
(16, 1, 1, '', 'Quibusdam consequatur repellendus.', 'ullam-voluptatem-quibusdam-quae-officia', NULL, 'Saepe odit perferendis commodi dolorem maxime dolores. Fugit dolor possimus facere dolore molestiae delectus laudantium. Et excepturi exercitationem ipsam delectus.', '<p>Sint aperiam non animi cum. Soluta repellendus sint aliquam non qui deleniti. Doloribus ipsum aut est tempore quia. Quis natus corrupti ut neque.</p><p>Esse vel perferendis ea consequuntur quae. Velit quidem illo accusamus sint saepe et ut quibusdam. Sunt sapiente occaecati voluptatem qui nobis perspiciatis. Consequatur delectus aut ratione perferendis voluptatem recusandae voluptate esse.</p><p>Qui quis ea minima nostrum. Ipsam id est aliquam maxime. Est reprehenderit ab nam. Quasi a mollitia sint voluptatem cumque.</p><p>Voluptatem ut nihil ad. Omnis hic dolorum adipisci fugiat repellendus saepe et. Explicabo unde est exercitationem magnam.</p><p>Nostrum vel id et molestiae explicabo ut et. Itaque laudantium molestias aut sequi modi quam nobis dolor. Dolores non quo voluptatem vero. Dignissimos in fugiat nihil voluptates.</p><p>Consequatur eum necessitatibus tempore a enim voluptatem deserunt. Sed aut molestias doloremque temporibus eos vel. Nihil sed sed velit enim sunt.</p><p>Cupiditate autem quidem odio qui. Repellendus similique ut inventore voluptas totam modi. Sint consequatur doloremque officia fuga.</p><p>Ipsa velit saepe tempore laboriosam animi quis atque. Similique dicta officiis accusantium. Ut sapiente dolores in quis distinctio odio.</p>', NULL, '2022-05-21 18:33:45', '2022-05-21 18:33:45'),
(17, 1, 2, '', 'Suscipit aliquam qui inventore sunt est asperiores sit odio.', 'reprehenderit-quia-distinctio-animi-quod', NULL, 'Consequatur cupiditate et iure commodi quis. Animi voluptatem necessitatibus inventore tempora. Porro neque veniam porro totam fugiat.', '<p>Iusto non veniam rerum eum. Quis at officia sint dolor. Et suscipit qui velit eum. Voluptatem fugiat culpa odit ut nihil.</p><p>Odio distinctio nihil voluptatem sapiente labore architecto. Commodi ipsum perspiciatis eaque mollitia eius maxime deserunt. Quia et est quis quaerat. Beatae unde voluptas minus rem distinctio saepe. Eius odio voluptatibus laudantium omnis nihil voluptatem tempora.</p><p>Cumque qui mollitia quia animi. Et odio totam quae porro. Ut veritatis est temporibus dolor beatae id.</p><p>Tempore beatae similique at ex sapiente nisi itaque. Pariatur quisquam sint id beatae ut tenetur. Et dolores quisquam eum totam officiis.</p><p>Est consectetur non dolores labore. Praesentium consectetur dicta quidem debitis incidunt earum. Ipsam sunt nobis molestiae ut voluptatem consequatur.</p><p>Asperiores sed explicabo corrupti ratione tempora ipsam at et. Ut voluptatem sed omnis blanditiis dolor. Qui itaque ut eligendi ea. Velit facilis ipsa eius placeat dolor alias.</p><p>In autem rem vel perspiciatis optio. Earum rem veritatis quam aut reprehenderit veniam. Placeat deleniti aut rerum esse quo quibusdam natus.</p><p>Et ea totam eligendi placeat impedit. Quaerat ut quidem eos repudiandae facere sed voluptatem nam. At enim distinctio aut voluptatem quis. Earum eius qui et.</p>', NULL, '2022-05-21 18:33:45', '2022-05-21 18:33:45'),
(18, 1, 3, '', 'Quo temporibus soluta iusto.', 'sint-adipisci-voluptas-aut-laborum-consequatur-ut', NULL, 'Sunt qui sit et quis consequatur laboriosam. Eveniet ex et nam voluptas optio fuga. Ut quis ad reiciendis repellat magnam et consequatur. Rem nisi maxime consectetur iusto facere quo omnis.', '<p>Dignissimos non id ipsum deleniti inventore atque dicta dolores. Pariatur nostrum reiciendis veritatis maiores quis aliquam dignissimos. Libero magni et vero sunt mollitia. Facilis iste eius alias qui.</p><p>Quaerat quae inventore voluptas officiis. Consequatur aut itaque temporibus natus. Aut autem rerum dolore. Sit quas perspiciatis dolores quia dolor sint adipisci recusandae.</p><p>Molestiae illum labore est tenetur. Est reiciendis similique explicabo ad sapiente incidunt sed. Odio adipisci minima ut iure aut et et.</p><p>Assumenda repellat quaerat soluta molestiae molestiae dolorum facere. Ea illum velit nulla.</p><p>Illum architecto ut consequatur magni. Corrupti cupiditate assumenda soluta molestiae quo. Suscipit ut doloribus inventore similique. Quia rerum quibusdam sit ut architecto et. Dicta ut temporibus voluptas nulla perferendis sit quo.</p><p>Atque qui repudiandae tenetur incidunt non quo. Quo ea quibusdam aut.</p><p>Quos error a consectetur adipisci exercitationem occaecati reiciendis. Excepturi magnam blanditiis delectus quia qui. Autem at fuga nostrum corporis laudantium laborum. Non vero adipisci quasi beatae delectus.</p><p>Officia aut aut quod rem. Molestiae culpa non nihil sint voluptate occaecati. Ea corrupti excepturi tempore veritatis temporibus. Omnis quae sunt est laborum dolor animi rem eos.</p><p>Sit quod animi qui incidunt commodi qui dolorem consequatur. Maiores temporibus omnis id enim. Consequuntur nihil et quos. Cum est eos quasi.</p>', NULL, '2022-05-21 18:33:45', '2022-05-21 18:33:45'),
(19, 3, 4, '', 'Qui a sapiente nostrum mollitia illum.', 'perspiciatis-non-deserunt-aut-porro', NULL, 'Quia error rerum nesciunt. Accusantium corrupti ut aspernatur et. Voluptatem nam maxime quibusdam. Fugit optio placeat eum laboriosam.', '<p>Nesciunt labore laudantium tenetur. Magnam sapiente provident dolor qui animi quia. Expedita iste quibusdam nostrum in.</p><p>Officia inventore consequatur modi similique. Facere exercitationem saepe aut explicabo nihil dicta culpa. Perferendis incidunt aperiam nihil fuga ducimus quia. Dolorum ad dolorum mollitia hic enim vitae nemo.</p><p>Fugiat nemo saepe provident vel deserunt labore. Totam eveniet facilis debitis. Cum voluptate eos autem aspernatur explicabo itaque veritatis. Animi molestiae reprehenderit est quam. Totam nulla itaque ratione qui qui laboriosam fugiat.</p><p>Voluptatibus aperiam consequatur tempore. Quos consectetur natus qui quibusdam sunt. Culpa consequatur eveniet beatae voluptas. Et est tempora nisi quia ab rem.</p><p>Possimus natus tempora repudiandae est ab maiores velit. Reiciendis quibusdam dolorum dolorem ut dolorem dolores quia. Similique voluptatibus blanditiis qui. Cum quia harum eaque alias facere.</p><p>Autem nam consequatur minus rerum in hic. Sint quo aut et quia suscipit id iure. Itaque repellendus ut sapiente praesentium ut ratione pariatur optio. Nulla ut et voluptatem perspiciatis est deserunt necessitatibus veritatis.</p>', NULL, '2022-05-21 18:33:45', '2022-05-21 18:33:45'),
(20, 1, 3, '', 'Molestiae aliquid placeat sint qui ea dolores harum.', 'officia-deserunt-quaerat-voluptas-adipisci-nihil-asperiores-sed', NULL, 'Sit quia sit ex ut earum doloremque ut. At error nam occaecati adipisci quaerat. Quibusdam culpa repellendus ratione tenetur totam et. Cumque laborum nesciunt doloremque repellendus natus nihil.', '<p>Perspiciatis temporibus unde numquam. Quod maxime enim assumenda culpa aut quis ea dolorem. Commodi qui voluptatem iusto saepe cumque. Voluptates et blanditiis sed voluptatem.</p><p>Sit est accusantium recusandae nihil dignissimos. Dolores quasi sunt suscipit. Ipsum modi ut inventore aut quod accusantium ea.</p><p>Placeat voluptatem possimus architecto aut. Excepturi consequuntur aut beatae et rerum vel odio voluptas. Laboriosam eveniet quia recusandae mollitia quos et. Doloremque saepe temporibus quo eum.</p><p>Dolores et et consectetur. Dolorem labore error consequatur molestiae voluptatum nihil excepturi. Culpa voluptatem iusto impedit et.</p><p>Et totam architecto quisquam ipsum dolores unde. Aut minus temporibus natus modi nobis id sed at. Dolore tempora quod sed dolorum molestias nam laudantium. Ab vel aspernatur autem occaecati. Aut rem cum architecto quia impedit.</p><p>Iusto facere rerum in non ab unde dolore. Quas veritatis at qui deserunt. Voluptas quibusdam reprehenderit veniam temporibus nostrum. Consequuntur quia excepturi et aliquam quae dignissimos.</p><p>Quisquam consequatur soluta cupiditate. Commodi ut debitis blanditiis dolores autem velit ut. Maiores iure quis aliquam natus.</p><p>Sed autem ut laboriosam asperiores nulla quia explicabo necessitatibus. Odit quia illo omnis ab deleniti ut maiores aut. Voluptas a sapiente omnis vel et. Nihil omnis quia illum et quo nemo quo. Dignissimos animi corrupti nobis qui ipsa.</p><p>Asperiores odit dolor temporibus quidem libero aut. Et nihil nisi ipsa sit ipsa eos. Commodi quidem libero maxime natus dicta. Eum sunt corporis tenetur cupiditate excepturi et minus.</p>', NULL, '2022-05-21 18:33:45', '2022-05-21 18:33:45'),
(21, 3, 4, '', 'Membuat wibesite menggunakan Laravel', 'membuat-wibesite-menggunakan-laravel', 'post-image/oU2HdcNeem9gwl5GV1NM48B05FbEoHFzDrw4MypU.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing...', '<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores id dicta, quos vel magni similique libero, quasi corporis perspiciatis molestiae quis officiis maiores quaerat expedita modi maxime fuga sint hic in repellendus explicabo! Maxime magni adipisci ad non, veniam cum repellat necessitatibus quos alias, fuga delectus. Facere libero unde vel quia nobis facilis! Velit enim repellat, quis qui vitae illum assumenda quia, eveniet eaque, cum quas pariatur! Quo amet dolores explicabo qui porro, commodi libero sint accusantium reiciendis tempore velit, veniam, similique impedit veritatis. Quaerat, adipisci asperiores, optio ducimus provident culpa fuga suscipit iure illo impedit nam sapiente nemo perferendis nesciunt, molestias alias eum soluta dicta sed tempora et. Eligendi esse aut, tempore nulla commodi molestias animi placeat, sed a eius necessitatibus natus, cumque optio quis autem totam tempora pariatur. Amet temporibus, doloribus suscipit, provident dolorem modi voluptates libero harum laborum mollitia velit possimus omnis consectetur eum laudantium quo. Odio distinctio officiis sunt velit incidunt cupiditate optio, architecto quod aspernatur eos deserunt? Enim praesentium quo qui explicabo minus excepturi corporis dicta, quisquam a sit dolorum exercitationem ex animi saepe cupiditate error velit reprehenderit numquam maxime. Quisquam expedita, aperiam laborum quae qui, modi tempora molestiae nobis temporibus quis ducimus vel enim excepturi id adipisci et! Incidunt obcaecati voluptatum quis sed, eum officiis quasi repudiandae nulla deleniti, autem asperiores pariatur eligendi praesentium corrupti eos enim delectus aliquam sequi odio mollitia laudantium illo voluptatibus assumenda ex. Eveniet dolor quia ut esse dolorem nostrum placeat numquam ad, perferendis voluptas aut? Vitae quibusdam tenetur quae voluptatum fugit est suscipit nobis vel at sint, sequi eum aspernatur velit pariatur illo? Facilis quibusdam aspernatur praesentium qui excepturi porro quam temporibus inventore culpa tenetur? Et delectus error esse, non quos placeat cum modi, laboriosam, ducimus architecto facilis laudantium a expedita? Sapiente quasi possimus quos eius nesciunt, ratione esse.</div>', NULL, '2022-05-21 18:52:57', '2022-05-21 22:27:31'),
(23, 3, 4, '', 'Computer Sciences', 'computer-sciences', 'post-image/nKCTZUZymenuTeWyPRXoGywvlGo1dU9tJItyKjZM.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing...', '<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus id nam ea itaque harum quidem suscipit dolorum fugiat, repudiandae nostrum adipisci laudantium explicabo necessitatibus, error maxime, ad incidunt quasi molestias? Delectus, doloremque dolor est, cupiditate fugiat tempore quas atque labore saepe ullam in quibusdam, tenetur officiis voluptatum ad ducimus repellat natus eligendi assumenda dolore quam inventore laudantium rerum distinctio. Quibusdam dicta laudantium nemo doloribus velit rerum? Explicabo dolorem ex similique? Minima voluptatibus delectus, et in corrupti nobis aliquid molestiae doloremque, cumque modi nulla porro eveniet fuga perferendis nemo rem id eaque reprehenderit ea ratione quo. Sed earum eum quas atque dolorum iure pariatur ratione itaque, illum consequuntur vitae. Provident in earum minus quaerat odit, ipsa quibusdam itaque voluptatem praesentium explicabo tempora quia inventore quis cupiditate nulla! Ipsum a voluptates, iusto ratione earum perferendis quas vel hic quo accusamus aperiam adipisci perspiciatis blanditiis, inventore id! Iste nulla hic voluptate, accusamus dolore deserunt magnam sequi dicta, ipsam, officia maiores. Tempore cumque accusantium autem numquam ea similique sequi ipsam qui dolor molestias. Natus numquam cum sunt in dolore nihil, possimus fugiat? Et unde aliquid doloremque optio est sed, sapiente debitis vel a, earum voluptatibus at temporibus, corrupti culpa dolore quam voluptatem ab nam.</div>', NULL, '2022-05-21 21:44:31', '2022-05-21 22:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` bigint(20) UNSIGNED NOT NULL,
  `ni` bigint(20) UNSIGNED NOT NULL,
  `autor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` timestamp NULL DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2023-02-09', '2023-05-13', 1, 'Yayasan Bugelan', 'asd', 'asdfasdfasdfasdf', '');

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
(72, 'BGL202202', 'Urfah Hidayah, S. Pd', 'Urfah', 'P', 'Tasikmalaya', '1928-08-08', '', '', 'Kp. Bugelan', '02', '16', 'Kel. Gn Tandala', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', ''),
(73, 'BGL202203', 'Ai Mala Nurmala, S. Pd', 'Ai Ma', 'P', 'Tasikmalaya', '2022-08-03', '', '', 'Kp. Bugelan', '01', '016', 'Kel. Gn Tandala', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', ''),
(74, 'BGL202204', 'Ai Pristianti, S. Pd', 'Ai Pr', 'P', 'Tasikmalaya', '1915-12-28', '', '', 'Kp. Cianjur wetan', '01', '08', 'Kel. Gn Tandala', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', ''),
(76, 'BGL202206', 'Sova Patrotul Alawaiyah, S. Pd', 'Sova ', 'P', 'Tasikmalaya', '1917-08-14', '', '', 'Kp. Pagaden', '02', '01', 'Kel. Gn Tandala', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', ''),
(77, 'BGL202207', 'Meida Gunaningsih, S. Pd', 'Meida', 'P', 'Tasikmalaya', '1907-01-07', '', '', 'Kp. Cicariang', '02', '09', 'Kel. Karsamenak', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', ''),
(78, 'BGL202208', 'Dede Siti Sobariah, S. Pd', 'Dede ', 'P', 'Tasikmalaya', '1914-02-10', '', '', 'Kp. Gunung Waru', '04', '015', 'Kel. Karsamenak', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', ''),
(79, 'BGL202209', 'Andi Purnamasari, S. Pd', 'Andi ', 'P', 'Tasikmalaya', '1934-01-25', '', '', 'Kp. Pelang', '03', '06', 'Kel. Sukamanah', 'Cipedes', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', ''),
(81, 'BGL202211', 'Muhamad Sodik, A. md Kom', 'Muham', 'L', 'Tasikmalaya', '2022-08-15', '', '', 'Kp. Legok Oncom,', '01', '07', 'Desa Sukamulya', 'Singaparna', 'Kab. Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', ''),
(82, 'BGL202212', 'Parhan Mulyana, S. Pd', 'Parha', '', 'Tasikmalaya', '1913-02-17', '', '', 'Kp. Cibuluh', '04', '11', 'Kel. Karanganyar', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Staff', '', '', ''),
(83, 'BGL202213', 'Suci Nur Amanatillah', 'Suci ', '', 'Tasikmalaya', '1915-08-05', '', '', 'Kp. Cibogo', '02', '05', 'Kel. Cibeuti', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Staff', '', '', ''),
(84, 'BGL202214', 'Fitria Adi Rahayu, S. ST', 'Fitri', 'P', 'Jakarta', '2022-08-23', '', '', 'Kp. Bugelan', '04', '06', 'Kel. Gn Tandala', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', ''),
(85, 'BGL202215', 'Abdul Aziz, S.Pd.I', 'Abdul', '', 'Bandung', '1934-01-30', '', '', 'Kp. Karangsari', '05', '05', 'Desa Kujang', 'Cikoneng', 'Kab. Ciamis', '', '', '', '', '', '', '', '', '', '', '', '', 'Guru', '', '', 'Wali Kelas 9,Kesiswaan,TIK'),
(86, 'BGL202216', 'Acep Helmi, S. Pd. I', 'Acep ', '', 'Tasikmalaya', '2022-08-15', '', '', 'Kp. Bugelan', '03', '016', 'Kel. Gn Tandala', 'Kawalu', 'Kota Tasikmalaya', '', '', '', '', '', '', '', '', '', '', '', '', 'Pengurus', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengantar`
--

CREATE TABLE `pengantar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` bigint(20) UNSIGNED NOT NULL,
  `ni` bigint(20) UNSIGNED NOT NULL,
  `autor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` timestamp NULL DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, 'SMP Terpadu Bugelan', '', 'Yayasan Bugelan', '5.3/0575/SK-PEND/DPMPTSP/2022', 'Bugelan, Gunungtandala, Kec. Kawalu, Kab. Tasikmalaya, Jawa Barat 46182', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.5795261836697!2d108.21595821528517!3d-7.40091927492719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65f93c35b67209%3A0x6071526de8e0ade1!2sSMP%20Terpadu%20Bugelan!5e0!3m2!1sen!2sid!4v1676433713981!5m2!1sen!2sid', '(0812) 9000 4840', 'bugelan.smpt@gmail.com', 'Impian tidak akan terwujud dengan sendirinya. Kamu harus segera bangun dan berupaya untuk mewujudkannya', '2022', 'Asep Irfan Helmi, S.T.', '', '', '');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
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
-- Indexes for table `pengantar`
--
ALTER TABLE `pengantar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kalender`
--
ALTER TABLE `kalender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kompetensi`
--
ALTER TABLE `kompetensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `pengantar`
--
ALTER TABLE `pengantar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
