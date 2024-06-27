-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2024 pada 11.05
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata_tomohon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daerahs`
--

CREATE TABLE `daerahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_daerah` varchar(255) NOT NULL,
  `penjelasan_daerah` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `daerahs`
--

INSERT INTO `daerahs` (`id`, `nama_daerah`, `penjelasan_daerah`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'Kelurahan Kakaskasen', '<p>-</p>', '1704201832.jpg', '2023-05-30 22:07:18', '2024-05-16 12:13:08'),
(12, 'Kelurahan Kakaskasen 1', '<p>-</p>', '1711550146.jpg', '2023-12-22 06:43:20', '2024-05-16 12:13:25'),
(13, 'Kelurahan Kakaskasen 2', '<p>-</p>', '1704201389.jpg', '2023-12-22 06:50:08', '2024-05-16 12:13:35'),
(20, 'Kelurahan Kakaskasen 3', '<p>-</p>', '1704716001185.jpg', '2024-01-08 05:13:21', '2024-05-16 12:13:47'),
(21, 'Kelurahan Kayawu', '<p>-</p>', '1704718969222.jpg', '2024-01-08 06:02:49', '2024-05-16 12:14:00'),
(22, 'Kelurahan Kinilow', '<p>-</p>', '1704718999150.jpg', '2024-01-08 06:03:19', '2024-05-16 12:14:17'),
(24, 'Kelurahan Tinoor', '<p>-</p>', '1704719444742.jpg', '2024-01-08 06:10:44', '2024-05-16 12:14:51'),
(25, 'Kelurahan Tinoor Satu', '<p>Tinoor I merupakan salah satu kelurahan yang berada di kecamatan Tomohon Utara, Kota Tomohon, provinsi Sulawesi Utara, Indonesia</p>', '1704719465717.jpg', '2024-01-08 06:11:05', '2024-05-16 12:15:44'),
(26, 'Kelurahan Tinoor Dua', '<p>-</p>', '1704719515573.jpg', '2024-01-08 06:11:55', '2024-05-16 12:16:34'),
(27, 'Kelurahan Wailan', '<p>-</p>', '1704719539945.jpg', '2024-01-08 06:12:19', '2024-05-16 12:16:53'),
(28, 'Kelurahan Lansot', '<p>-</p>', '1704719616285.jpg', '2024-01-08 06:13:36', '2024-05-16 12:21:06'),
(29, 'Kelurahan Tumatangtang', '<p>-</p>', '1704719657695.jpg', '2024-01-08 06:14:17', '2024-05-16 12:20:51'),
(30, 'Kelurahan Tumatangtang Satu', '<p>-</p>', '1704719700249.jpg', '2024-01-08 06:15:00', '2024-05-16 12:20:29'),
(31, 'Kelurahan Kampung Jawa', '<p>-</p>', '1704719722536.jpg', '2024-01-08 06:15:22', '2024-05-16 12:19:10'),
(32, 'Kelurahan Pinaras', '<p>-</p>', '1704719745426.jpg', '2024-01-08 06:15:45', '2024-05-16 12:18:43'),
(33, 'Kelurahan Lahendong', '<p>-</p>', '1704719767958.jpg', '2024-01-08 06:16:07', '2024-05-16 12:18:19'),
(34, 'Kelurahan Tondangow', '<p>-</p>', '1704719797183.jpg', '2024-01-08 06:16:37', '2024-05-16 12:18:03'),
(35, 'Kelurahan Pangolombian', '<p>-</p>', '1704719823177.jpg', '2024-01-08 06:17:03', '2024-05-16 12:17:48'),
(36, 'Kelurahan Uluindano', '<p>-</p>', '1704719854947.jpg', '2024-01-08 06:17:34', '2024-05-16 12:17:20'),
(37, 'Kelurahan Walian', '<p>-</p>', '1704719897316.jpg', '2024-01-08 06:18:17', '2024-05-16 12:17:06'),
(38, 'Kelurahan Walian Satu', '<p>-</p>', '1704719914346.jpg', '2024-01-08 06:18:34', '2024-05-16 20:02:51'),
(39, 'Kelurahan Walian Dua', '<p>-</p>', '1704719939925.jpg', '2024-01-08 06:18:59', '2024-05-16 20:03:12'),
(40, 'Kelurahan Kamasi', '<p>-</p>', '1704723966365.jpg', '2024-01-08 07:26:06', '2024-05-16 20:03:32'),
(41, 'Kelurahan Kamasi Satu', '<p>-</p>', '1704724020567.jpg', '2024-01-08 07:27:00', '2024-05-16 20:03:51'),
(42, 'Kelurahan Kolongan', '<p>-</p>', '1704724048827.jpg', '2024-01-08 07:27:28', '2024-05-16 20:04:15'),
(43, 'Kelurahan Kolongan Satu', '<p>-</p>', '1704724075610.jpg', '2024-01-08 07:27:55', '2024-05-16 20:04:28'),
(44, 'Kelurahan Matani Satu', '<p>ssssssss</p>', '1704724109913.jpg', '2024-01-08 07:28:29', '2024-01-08 07:28:29'),
(45, 'Kelurahan Matani Dua', '<p>-</p>', '1704724135717.jpg', '2024-01-08 07:28:55', '2024-05-16 20:04:40'),
(46, 'Kelurahan Matani Tiga', '<p>-</p>', '1704724176524.jpg', '2024-01-08 07:29:36', '2024-05-16 20:05:02'),
(47, 'Kelurahan Talete Satu', '<p>-</p>', '1704724200602.jpg', '2024-01-08 07:30:00', '2024-05-16 20:05:14'),
(48, 'Kelurahan Talete Dua', '<p>-</p>', '1704724225471.jpg', '2024-01-08 07:30:25', '2024-05-16 20:05:28'),
(49, 'Kelurahan Paslaten Satu', '<p id=\"ugb-accordion-1__heading\" class=\"ugb-accordion__title\" style=\"text-align: justify;\" aria-controls=\"ugb-accordion-1__content\">Paslaten I merupakan salah satu kelurahan yang berada di kecamatan Tomohon Timur, Kota Tomohon, provinsi Sulawesi Utara, Indonesia</p>', '1704970061676.png', '2024-01-11 03:47:41', '2024-01-11 03:47:41'),
(50, 'Kelurahan Paslaten Dua', '<p style=\"text-align: justify;\">Paslaten II merupakan salah satu kelurahan yang berada di kecamatan Tomohon Timur, Kota Tomohon, provinsi Sulawesi Utara, Indonesia</p>', '1704970175108.png', '2024-01-11 03:49:35', '2024-01-11 03:49:35'),
(51, 'Kelurahan Rurukan', '<p style=\"text-align: justify;\">Rurukan merupakan salah satu kelurahan yang berada di kecamatan Tomohon Timur, Kota Tomohon, provinsi Sulawesi Utara, Indonesia</p>', '1704970217665.png', '2024-01-11 03:50:17', '2024-01-11 03:50:17'),
(52, 'Kelurahan Rurukan Satu', '<p>Rurukan I merupakan salah satu kelurahan yang berada di kecamatan Tomohon Timur, Kota Tomohon, provinsi Sulawesi Utara, Indonesia</p>', '1704970282256.png', '2024-01-11 03:51:22', '2024-01-11 03:51:22'),
(53, 'Kelurahan Kumelembuai', '<p style=\"text-align: justify;\">Kumelembuay merupakan salah satu kelurahan yang berada di kecamatan Tomohon Timur, Kota Tomohon, provinsi Sulawesi Utara, Indonesia</p>', '1704970357924.png', '2024-01-11 03:52:37', '2024-01-11 03:52:37'),
(54, 'Kelurahan Taratara', '<p style=\"text-align: justify;\">Taratara merupakan salah satu kelurahan yang berada di kecamatan Tomohon Barat, Kota Tomohon, provinsi Sulawesi Utara, Indonesia</p>', '1704970507596.jpg', '2024-01-11 03:55:07', '2024-01-11 03:55:07'),
(55, 'Kelurahan Taratara 1', '<p>Taratara I merupakan salah satu kelurahan yang berada di kecamatan Tomohon Barat, Kota Tomohon, provinsi Sulawesi Utara, Indonesia</p>', '1704970534734.jpg', '2024-01-11 03:55:34', '2024-01-11 03:55:34'),
(56, 'Kelurahan Taratara 2', '<p>Taratara II merupakan salah satu kelurahan yang berada di kecamatan Tomohon Barat, Kota Tomohon, provinsi Sulawesi Utara, Indonesia</p>', '1704970560350.jpg', '2024-01-11 03:56:00', '2024-01-11 03:56:00'),
(57, 'Kelurahan Taratara 3', '<p>Taratara III merupakan salah satu kelurahan yang berada di kecamatan Tomohon Barat, Kota Tomohon, provinsi Sulawesi Utara, Indonesia</p>', '1704970581180.jpg', '2024-01-11 03:56:21', '2024-01-11 03:56:21'),
(58, 'Kelurahan Woloan 1', '<p style=\"text-align: justify;\">Woloan I adalah salah satu kelurahan di Kecamatan Tomohon Barat, Kota Tomohon, Sulawesi Utara, Indonesia.</p>', '1704970628834.jpg', '2024-01-11 03:57:08', '2024-01-11 03:57:08'),
(59, 'Kelurahan Woloan 2', '<p>Woloan II adalah kelurahan di Kecamatan Tomohon Barat, Kota Tomohon, Provinsi Sulawesi Utara, Indonesia.</p>', '1704970699927.jpg', '2024-01-11 03:58:19', '2024-01-11 03:58:19'),
(60, 'Kelurahan Woloan 3', '<p>Woloan III adalah kelurahan di Kecamatan Tomohon Barat, Kota Tomohon, Provinsi Sulawesi Utara, Indonesia. Kelurahan ini terkenal antara lain karena minuman khas cap tikus yang dihasilkan melalui proses penyulingan dari olahan sadapan pohon enau.&nbsp;</p>', '1704970743483.jpg', '2024-01-11 03:59:03', '2024-01-11 03:59:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `fasilitas`, `created_at`, `updated_at`) VALUES
(1, 'Vila', '2023-02-02 04:37:01', '2023-02-02 04:38:02'),
(2, 'Toilet', '2023-02-02 07:46:45', '2023-02-02 07:46:45'),
(3, 'Tempat Parkir', '2023-02-02 07:46:56', '2023-02-02 07:46:56'),
(4, 'Resepsionis', '2023-02-02 07:47:06', '2023-02-02 07:47:06'),
(6, 'Tempat Mandi', '2023-05-30 22:02:55', '2023-05-30 22:02:55'),
(7, '-', '2024-02-24 09:25:32', '2024-02-24 09:25:32'),
(8, 'Rumah Makan/ Kantin', '2024-02-24 11:42:05', '2024-02-24 11:42:05'),
(9, 'Wifi', '2024-02-24 11:43:03', '2024-02-24 11:43:03'),
(10, 'Meja Piknik', '2024-05-16 11:36:53', '2024-05-16 11:36:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambars`
--

CREATE TABLE `gambars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_wisata` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gambars`
--

INSERT INTO `gambars` (`id`, `id_wisata`, `nama_file`, `created_at`, `updated_at`) VALUES
(1, 11, '169031917894.jpg', '2023-07-25 13:06:18', '2023-07-25 13:06:18'),
(2, 11, '16903191787.jpg', '2023-07-25 13:06:18', '2023-07-25 13:06:18'),
(3, 11, '169031917811.jpg', '2023-07-25 13:06:18', '2023-07-25 13:06:18'),
(9, NULL, 'Dashboard User.png', '2024-01-24 02:16:57', '2024-01-24 02:16:57'),
(12, 43, '170877680669.jpg', '2024-02-24 05:13:26', '2024-02-24 05:13:26'),
(13, 43, '170877681483.jpg', '2024-02-24 05:13:34', '2024-02-24 05:13:34'),
(14, 22, 'linow 1.jpg', '2024-02-27 00:00:00', '2024-02-27 00:00:00'),
(15, 22, 'linow 3.jfif', '2024-02-27 00:04:05', '2024-02-27 00:04:05'),
(16, 22, 'linow 2.jfif', '2024-02-27 00:04:05', '2024-02-27 00:04:05'),
(17, 31, 'WhatsApp Image 2024-05-17 at 11.38.25 (1).jpeg', '2024-05-16 22:14:46', '2024-05-16 22:14:46'),
(18, 31, 'WhatsApp Image 2024-05-17 at 11.38.25.jpeg', '2024-05-16 22:14:52', '2024-05-16 22:14:52'),
(19, 31, 'WhatsApp Image 2024-05-17 at 11.39.56.jpeg', '2024-05-16 22:14:53', '2024-05-16 22:14:53'),
(20, 31, 'WhatsApp Image 2024-05-17 at 11.39.57.jpeg', '2024-05-16 22:14:54', '2024-05-16 22:14:54'),
(21, 31, 'WhatsApp Image 2024-05-17 at 11.38.26.jpeg', '2024-05-16 22:14:55', '2024-05-16 22:14:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `hastag_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `hastag_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Wisata Alam', '#Alam', '2023-02-02 03:51:30', '2024-01-08 05:01:39'),
(2, 'Wisata Budaya', '#Budaya', '2023-05-30 22:01:03', '2024-01-08 05:02:05'),
(3, 'Wisata Buatan', '#Buatan', '2023-05-30 22:01:14', '2024-01-08 05:02:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_20_142953_create_table_zonasi', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_zonasi`
--

CREATE TABLE `table_zonasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_daerah` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `zone_collections` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `table_zonasi`
--

INSERT INTO `table_zonasi` (`id`, `id_daerah`, `id_wisata`, `zone_collections`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 12, 18, '[{\"lat\":1.3621763466641712,\"lng\":124.78408992833833},{\"lat\":1.3271670699311868,\"lng\":124.82290576939086},{\"lat\":1.3092385665451545,\"lng\":124.89353135397354},{\"lat\":1.2790338709510358,\"lng\":124.82420603637598},{\"lat\":1.2975686131995663,\"lng\":124.77341322942333}]', '2024-06-21 05:56:48', '2024-06-20 07:05:30', '2024-06-21 05:56:48'),
(2, 12, 18, '[{\"lat\":1.35440012616829,\"lng\":124.86189355539462},{\"lat\":1.3540253921526897,\"lng\":124.86154424788802},{\"lat\":1.3535427292923115,\"lng\":124.86116845140712},{\"lat\":1.352523774049424,\"lng\":124.86138319225336},{\"lat\":1.3515691734863327,\"lng\":124.86196299253812},{\"lat\":1.3512903013408815,\"lng\":124.86254279282295},{\"lat\":1.3513224788977503,\"lng\":124.86350912663093},{\"lat\":1.351794416349645,\"lng\":124.86453988269278},{\"lat\":1.3529313561979437,\"lng\":124.8651626311468},{\"lat\":1.354079021353457,\"lng\":124.86451840860815},{\"lat\":1.3547654750185814,\"lng\":124.86329438578471},{\"lat\":1.3548191042029751,\"lng\":124.8624998446537}]', NULL, '2024-06-21 05:56:36', '2024-06-21 05:56:36'),
(3, 12, 24, '[{\"lat\":1.354341469237646,\"lng\":124.83297164191983},{\"lat\":1.354336106318208,\"lng\":124.83303606417368},{\"lat\":1.3544433647048197,\"lng\":124.83304143269484},{\"lat\":1.3544540905432252,\"lng\":124.83298237896213}]', NULL, '2024-06-21 05:58:38', '2024-06-21 05:58:38'),
(4, 13, 20, '[{\"lat\":1.352056864481014,\"lng\":124.8226498738523},{\"lat\":1.3520783161788674,\"lng\":124.8228162980081},{\"lat\":1.3522499297549395,\"lng\":124.82280556096578},{\"lat\":1.3522284780585874,\"lng\":124.82262839976767}]', NULL, '2024-06-21 06:02:45', '2024-06-21 06:02:45'),
(5, 20, 19, '[{\"lat\":1.348930277492084,\"lng\":124.84949405765781},{\"lat\":1.3490321731863237,\"lng\":124.85010070054837},{\"lat\":1.3492681421460737,\"lng\":124.85028859878882},{\"lat\":1.3492249035173716,\"lng\":124.85073030405279},{\"lat\":1.349112281969269,\"lng\":124.85070890382443},{\"lat\":1.349010386278375,\"lng\":124.85052647668329},{\"lat\":1.3488712852461067,\"lng\":124.85026712470419},{\"lat\":1.3489463662861858,\"lng\":124.85012217463299},{\"lat\":1.348785143157056,\"lng\":124.85008123819307},{\"lat\":1.3486996714314674,\"lng\":124.84995575047718},{\"lat\":1.348764026613371,\"lng\":124.84954774286936},{\"lat\":1.3488551964514959,\"lng\":124.84947258357317}]', NULL, '2024-06-21 06:16:10', '2024-06-21 06:16:10'),
(6, 20, 21, '[{\"lat\":1.353435135683264,\"lng\":124.80999033147083},{\"lat\":1.354046173468125,\"lng\":124.81094806716271},{\"lat\":1.353590325217545,\"lng\":124.81169386898135},{\"lat\":1.3532849738782236,\"lng\":124.81129487800845},{\"lat\":1.3528237625617598,\"lng\":124.81074192032946}]', NULL, '2024-06-21 06:20:13', '2024-06-21 06:20:13'),
(7, 12, 24, '[{\"lat\":1.3543307433987444,\"lng\":124.83298242409651},{\"lat\":1.3543253804792936,\"lng\":124.83305221487156},{\"lat\":1.354432638866376,\"lng\":124.83304684635037},{\"lat\":1.3544487276240287,\"lng\":124.83297705557534}]', '2024-06-21 06:23:23', '2024-06-21 06:22:13', '2024-06-21 06:23:23'),
(8, 13, 29, '[{\"lat\":1.3511984612282737,\"lng\":124.84191121312121},{\"lat\":1.3514719704584979,\"lng\":124.84181999339596},{\"lat\":1.3517615684333852,\"lng\":124.84132640949343},{\"lat\":1.3523997564413068,\"lng\":124.84090797668084},{\"lat\":1.3526142733810766,\"lng\":124.84121921140161},{\"lat\":1.3529306858326244,\"lng\":124.84147131443025},{\"lat\":1.3534455263435325,\"lng\":124.8423672132725},{\"lat\":1.3541587947874314,\"lng\":124.84315572938222},{\"lat\":1.3539818184261787,\"lng\":124.84331130981447},{\"lat\":1.3535045184784449,\"lng\":124.84347745085464},{\"lat\":1.3531666544136975,\"lng\":124.84378870609098},{\"lat\":1.3524802002959548,\"lng\":124.84390132604463},{\"lat\":1.3521959653309605,\"lng\":124.8440140198545},{\"lat\":1.3519010044830582,\"lng\":124.84437896850868},{\"lat\":1.3519975371281314,\"lng\":124.84409980540858},{\"lat\":1.3519063674078777,\"lng\":124.84400858158018},{\"lat\":1.351681124554934,\"lng\":124.84400872518961},{\"lat\":1.3512360017126719,\"lng\":124.84389598624534},{\"lat\":1.3508726634290182,\"lng\":124.84390434031673},{\"lat\":1.3508069675706473,\"lng\":124.8435955870419},{\"lat\":1.3507908787888478,\"lng\":124.8433867481232},{\"lat\":1.351026847577891,\"lng\":124.84314499644303},{\"lat\":1.3512735421964979,\"lng\":124.84294672633847},{\"lat\":1.3512842680489232,\"lng\":124.84266236294539},{\"lat\":1.351214550007376,\"lng\":124.84230277870924}]', NULL, '2024-06-21 06:30:54', '2024-06-21 06:30:54'),
(9, 20, 37, '[{\"lat\":1.3512735421964979,\"lng\":124.8079704992155},{\"lat\":1.351214550007376,\"lng\":124.80813681258694},{\"lat\":1.3510647232478687,\"lng\":124.80832727161281},{\"lat\":1.3509521017849924,\"lng\":124.80879433295334},{\"lat\":1.3505606080876726,\"lng\":124.80875675330525},{\"lat\":1.350340392855207,\"lng\":124.80857680154665},{\"lat\":1.3503943573204062,\"lng\":124.80813937337236},{\"lat\":1.3503993850655494,\"lng\":124.80786854655102},{\"lat\":1.3505549099768792,\"lng\":124.80773970614645},{\"lat\":1.3507908787888478,\"lng\":124.80772898551662},{\"lat\":1.3509946700171038,\"lng\":124.80772914143542},{\"lat\":1.3512416998218624,\"lng\":124.80768304907416}]', NULL, '2024-06-21 06:37:51', '2024-06-21 06:37:51'),
(10, 20, 42, '[{\"lat\":1.3469030885833315,\"lng\":124.83795313470662},{\"lat\":1.3468652128485723,\"lng\":124.83808634203471},{\"lat\":1.3469406291340127,\"lng\":124.8382859830183},{\"lat\":1.3471176060080088,\"lng\":124.83823229780673},{\"lat\":1.3470532507825828,\"lng\":124.83794776618548}]', NULL, '2024-06-21 06:39:01', '2024-06-21 06:39:01'),
(11, 21, 17, '[{\"lat\":1.3655442467955528,\"lng\":124.80010628700258},{\"lat\":1.3659625525335966,\"lng\":124.79979521640685},{\"lat\":1.3661133839116548,\"lng\":124.79900266205875},{\"lat\":1.3656729562611583,\"lng\":124.79829299882103},{\"lat\":1.3649436025315638,\"lng\":124.79788489273817},{\"lat\":1.3635820969536705,\"lng\":124.79813296163155},{\"lat\":1.363012959238619,\"lng\":124.79879727052828},{\"lat\":1.3629921780003058,\"lng\":124.79972204389357},{\"lat\":1.3631309430398335,\"lng\":124.80039619535121},{\"lat\":1.3639246520977515,\"lng\":124.80047137926616},{\"lat\":1.364869192350019,\"lng\":124.80040921460146}]', NULL, '2024-06-21 06:40:59', '2024-06-21 06:40:59'),
(12, 32, 40, '[{\"lat\":1.2962332152800404,\"lng\":124.7806657099189},{\"lat\":1.296378017498139,\"lng\":124.7804832376434},{\"lat\":1.2964105309580187,\"lng\":124.7803194522324},{\"lat\":1.2960347825973366,\"lng\":124.78017204805701},{\"lat\":1.2955846219098637,\"lng\":124.78019060772465},{\"lat\":1.2952839560896812,\"lng\":124.7802150700825},{\"lat\":1.2950050776158801,\"lng\":124.78011826847359},{\"lat\":1.2948334600782874,\"lng\":124.7803168996532},{\"lat\":1.2950697693799573,\"lng\":124.78056640420554},{\"lat\":1.2952088734266665,\"lng\":124.78079448057039},{\"lat\":1.2954662996905701,\"lng\":124.78076761744899},{\"lat\":1.2958742264119618,\"lng\":124.78081872469984}]', NULL, '2024-06-21 06:44:10', '2024-06-21 06:44:10'),
(13, 33, 25, '[{\"lat\":1.2677162917250036,\"lng\":124.82036009618494},{\"lat\":1.2673998685105354,\"lng\":124.8202795683676},{\"lat\":1.2675661247805812,\"lng\":124.81976955885786},{\"lat\":1.267887911079393,\"lng\":124.82010777569064}]', NULL, '2024-06-21 06:45:17', '2024-06-21 06:45:17'),
(14, 33, 31, '[{\"lat\":1.284643648011971,\"lng\":124.82255613437279},{\"lat\":1.284402309863846,\"lng\":124.82273871743274},{\"lat\":1.2842896853869232,\"lng\":124.82299621360131},{\"lat\":1.2843057745982247,\"lng\":124.82324305889317},{\"lat\":1.283946784047162,\"lng\":124.82332136161864},{\"lat\":1.2835713690378716,\"lng\":124.8216893311874},{\"lat\":1.2847726968734852,\"lng\":124.821641014497},{\"lat\":1.2849335889514513,\"lng\":124.822505346403}]', NULL, '2024-06-21 06:47:13', '2024-06-21 06:47:13'),
(15, 33, 22, '[{\"lat\":1.2720564925103528,\"lng\":124.82910688889669},{\"lat\":1.2736010636949198,\"lng\":124.82872038819849},{\"lat\":1.2747751339319089,\"lng\":124.82755388958687},{\"lat\":1.2742660871143705,\"lng\":124.82586635368162},{\"lat\":1.2736868731780497,\"lng\":124.82535161573831},{\"lat\":1.2730003972330766,\"lng\":124.82485756407948},{\"lat\":1.272356825868681,\"lng\":124.82472906423433},{\"lat\":1.2715572777188047,\"lng\":124.82383887294728},{\"lat\":1.2706191823830582,\"lng\":124.82374094450415},{\"lat\":1.2701472296294893,\"lng\":124.8241060531802},{\"lat\":1.2691818714560323,\"lng\":124.8235261051829},{\"lat\":1.2679805363369612,\"lng\":124.82359075721182},{\"lat\":1.2674013209910315,\"lng\":124.82374151894174},{\"lat\":1.2668864627970027,\"lng\":124.82472876880928},{\"lat\":1.2668377480196018,\"lng\":124.82615807408645},{\"lat\":1.266650486090541,\"lng\":124.82801205524352},{\"lat\":1.266950820076851,\"lng\":124.82889178697543},{\"lat\":1.267572940366298,\"lng\":124.82968723079408},{\"lat\":1.270377396101725,\"lng\":124.82918592001812}]', NULL, '2024-06-21 06:48:42', '2024-06-21 06:48:42'),
(16, 38, 36, '[{\"lat\":1.2884839382236732,\"lng\":124.8353479519101},{\"lat\":1.2883924309829442,\"lng\":124.83520563922306},{\"lat\":1.288301258930288,\"lng\":124.8351306009132},{\"lat\":1.2881671823763388,\"lng\":124.8351573817007},{\"lat\":1.2881028256279485,\"lng\":124.83537198383891},{\"lat\":1.288215449936569,\"lng\":124.83558654467446},{\"lat\":1.288607288638235,\"lng\":124.83560564092559}]', NULL, '2024-06-21 07:07:21', '2024-06-21 07:07:21'),
(17, 46, 27, '[{\"lat\":1.3020256327248925,\"lng\":124.84722522477188},{\"lat\":1.3024654013902723,\"lng\":124.8458025666657},{\"lat\":1.3031196912138046,\"lng\":124.84624278540042},{\"lat\":1.3027979093546145,\"lng\":124.84730575258922}]', NULL, '2024-06-21 07:14:46', '2024-06-21 07:14:46'),
(18, 47, 32, '[{\"lat\":1.3251934928835045,\"lng\":124.8389769872433},{\"lat\":1.325214944816401,\"lng\":124.83863874579177},{\"lat\":1.3260197273519438,\"lng\":124.83869582062017},{\"lat\":1.32602509033339,\"lng\":124.83903940597412},{\"lat\":1.3256657705505426,\"lng\":124.83904477449525},{\"lat\":1.3255903536118798,\"lng\":124.83897685184017}]', NULL, '2024-06-21 07:16:20', '2024-06-21 07:16:20'),
(19, 47, 30, '[{\"lat\":1.32602509033339,\"lng\":124.8393865544739},{\"lat\":1.3260411792776776,\"lng\":124.83911812841613},{\"lat\":1.3259178307021764,\"lng\":124.83911275989499},{\"lat\":1.3258642008848394,\"lng\":124.83937581743162}]', NULL, '2024-06-21 07:17:25', '2024-06-21 07:17:25'),
(20, 48, 28, '[{\"lat\":1.3398504825655349,\"lng\":124.85479650009437},{\"lat\":1.3393359743679618,\"lng\":124.85490618511541},{\"lat\":1.3394807740800885,\"lng\":124.85545377427326},{\"lat\":1.3399148379806876,\"lng\":124.85532758158244}]', NULL, '2024-06-21 07:19:14', '2024-06-21 07:19:14'),
(21, 48, 26, '[{\"lat\":1.3372444699002235,\"lng\":124.84255490657603},{\"lat\":1.3371425737144862,\"lng\":124.84257099010385},{\"lat\":1.3371693885006144,\"lng\":124.84273718655841},{\"lat\":1.3372927365130556,\"lng\":124.84269965832674}]', NULL, '2024-06-21 07:21:48', '2024-06-21 07:21:48'),
(22, 52, 39, '[{\"lat\":1.3344774378890223,\"lng\":124.87936571988244},{\"lat\":1.3340913045174876,\"lng\":124.87884568581504},{\"lat\":1.3337802525907765,\"lng\":124.87915127284435},{\"lat\":1.3342146526844274,\"lng\":124.8796230563282}]', NULL, '2024-06-21 07:25:25', '2024-06-21 07:25:25'),
(23, 53, 35, '[{\"lat\":1.354003605289536,\"lng\":124.88000721617692},{\"lat\":1.3536064139807826,\"lng\":124.88073336689648},{\"lat\":1.3531026345310337,\"lng\":124.88002332174037},{\"lat\":1.3536228379264956,\"lng\":124.87952404927292}]', NULL, '2024-06-21 07:27:30', '2024-06-21 07:27:30'),
(24, 58, 41, '[{\"lat\":1.3288246129468675,\"lng\":124.81636667849739},{\"lat\":1.3286690866561695,\"lng\":124.81712796548267},{\"lat\":1.3283902119035158,\"lng\":124.81715477136241},{\"lat\":1.3281753097717937,\"lng\":124.81633363857438},{\"lat\":1.3287116073917729,\"lng\":124.81627998790991}]', NULL, '2024-06-21 07:30:39', '2024-06-21 07:30:39'),
(25, 58, 38, '[{\"lat\":1.3262500003574946,\"lng\":124.81293263644841},{\"lat\":1.3258155988618552,\"lng\":124.81334024792467},{\"lat\":1.3260140291841294,\"lng\":124.81351716348901},{\"lat\":1.3261856445851783,\"lng\":124.81350117398141},{\"lat\":1.3265667513999906,\"lng\":124.8135798369735},{\"lat\":1.326690099943152,\"lng\":124.81316646084454}]', NULL, '2024-06-21 07:32:06', '2024-06-21 07:32:06'),
(26, 59, 34, '[{\"lat\":1.3229034979795964,\"lng\":124.80381843777351},{\"lat\":1.322755848206337,\"lng\":124.8038835955162},{\"lat\":1.322224912286155,\"lng\":124.80359373802915},{\"lat\":1.3222731791926796,\"lng\":124.80344344155436},{\"lat\":1.3225306026783177,\"lng\":124.80317505499227},{\"lat\":1.3226861293546135,\"lng\":124.80334145466078},{\"lat\":1.322954278773603,\"lng\":124.80339513197318},{\"lat\":1.323056175545224,\"lng\":124.80343807382314},{\"lat\":1.323056175545224,\"lng\":124.80383528593502}]', NULL, '2024-06-21 07:33:56', '2024-06-21 07:33:56'),
(27, 59, 33, '[{\"lat\":1.3231544969807243,\"lng\":124.80428604695608},{\"lat\":1.322902436548044,\"lng\":124.80428604695608},{\"lat\":1.3228541696537452,\"lng\":124.80453833032448},{\"lat\":1.3231062300913492,\"lng\":124.80461884629308}]', NULL, '2024-06-21 07:35:10', '2024-06-21 07:35:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$jQ0Rym0VDmGyuOi/d0VtxuG0dXHPfeZNzv.qXeomh1.iIDtRFSuV.', NULL, '2023-01-03 11:39:51', '2023-01-03 11:39:51', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisatas`
--

CREATE TABLE `wisatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `alamat_wisata` varchar(150) NOT NULL,
  `kecamatan_wisata` varchar(100) NOT NULL,
  `daerah_wisata` bigint(20) UNSIGNED NOT NULL,
  `jam_buka` text NOT NULL,
  `deskripsi_tempat` text NOT NULL,
  `biaya_tiket` int(11) NOT NULL,
  `kategori` bigint(20) UNSIGNED DEFAULT NULL,
  `longitude` varchar(200) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `gambar_wisata` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fasilitas` varchar(255) DEFAULT NULL,
  `link_traveloka` varchar(255) DEFAULT NULL,
  `pengunjung` int(11) DEFAULT NULL,
  `warna_zonasi` varchar(45) DEFAULT '#FFFFFF'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wisatas`
--

INSERT INTO `wisatas` (`id`, `nama_wisata`, `alamat_wisata`, `kecamatan_wisata`, `daerah_wisata`, `jam_buka`, `deskripsi_tempat`, `biaya_tiket`, `kategori`, `longitude`, `latitude`, `gambar_wisata`, `created_at`, `updated_at`, `fasilitas`, `link_traveloka`, `pengunjung`, `warna_zonasi`) VALUES
(17, 'Gunung Lokon', 'Kayawu, Kec. Tomohon Utara, Kota Tomohon, Sulawesi Utara', 'Tomohon Utara', 21, '<p>-</p>', '<p style=\"text-align: justify;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',serif; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">Gunumg lokon adalah sebuah gunung berapi di dekat Kota Tomohon, Provinsi Sulawesi Utara. Gunung ini memiliki ketinggian 1.580 m dari permukaan laut. Sesuai Namanya, Gunung lokon berarti yang tertua dan terbesar. Pengertian lain ialah orang yang sudah tua atau tertua berbadan besar. Gunung lokon adalah salah satu gunung terbesar yang ada di Tomohon dan merupakan gunung berapi yang masih aktif. Mendaki lokon hanya butuh waktu sekitar dua jam, tidak harus menginap di perjalanan menuju puncak. Cocok untuk pemula dan untuk wisata singkat.</span></p>', 0, 1, '124.79921578637754', '1.364149893809754', '1704714260.jpg', '2023-12-26 20:57:29', '2024-06-21 06:10:26', '-', NULL, 95, '#00ff00'),
(18, 'Gunung Mahawu', 'Kakaskasen Satu, Kec. Tomohon Utara, Kota Tomohon, Sulawesi Utara', 'Tomohon Utara', 12, '<p>-</p>', '<p class=\"MsoListParagraph\" style=\"text-align: justify; line-height: 150%;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Gunung mahawu adalah gunung berapi stratovolcano. Gunung mahawu memiliki lebar 180 m dan kedalaman kawah 140 m dengan dua kerucut piroklastik di lereng utara, Gunung mahawu berada berlawanan arah dengan gunung lokon, memiliki lereng yang cukup landai dengan ketinggian 1.311 m. Memiliki pemandangan yang menakjubkan, dengan danau kawah berwana hijau dan dengan kuning belerang. </span></p>', 5000, 1, '124.86268384223482', '1.3529471097829047', '1704714992790.jpg', '2024-01-08 04:56:32', '2024-06-21 06:07:33', '-', NULL, 46, '#00ff00'),
(19, 'Bukit Doa Mahawu', 'kaskasen Tiga, Kec. Tomohon Utara, Kota Tomohon, Sulawesi Utara', 'Tomohon Utara', 20, '<p>Senin - Jumat :&nbsp;09.00-17.00</p>\r\n<p>Minggu :&nbsp;10.00-17.00</p>', '<div class=\"PbZDve \">\r\n<p class=\"ZqFyf \">Situs ibadah di kaki bukit dengan patung outdoor yang menggambarkan suasana Alkitab dan kapel mirip bunker.</p>\r\n</div>', 20000, 1, '124.85026358429943', '1.3492517181709343', '1704976013.png', '2024-01-08 05:08:28', '2024-06-21 06:07:47', 'Tempat Parkir, Rumah Makan/ Kantin, Toilet', NULL, 32, '#00ff00'),
(20, 'Show Window', 'Kakaskasen Dua, Kec. Tomohon Utara, Kota Tomohon, Sulawesi Utara', 'Tomohon Utara', 13, '<p>-</p>', '<p>Tempat pengembangan bunga kota Tomohon</p>', 0, 3, '124.8226241652455', '1.3520345450806694', '1704729927.png', '2024-01-08 05:23:46', '2024-06-21 06:08:09', 'Tempat Parkir, Toilet', NULL, 24, '#0000ff'),
(21, 'Taman Wisata Pelangi', 'Kakaskasen Tiga, Kec. Tomohon Utara, Kota Tomohon, Sulawesi Utara', 'Tomohon Utara', 20, '<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',serif; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">Buka setiap hari</span></p>\r\n<p><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',serif; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">jam 08.00-20.00</span></p>', '<p style=\"text-align: justify;\">View kota Tomohon &amp; Gunung Lokon. Taman bunga untuk merelaxkan&nbsp; mata.</p>', 10000, 1, '124.81005030299609', '1.3534718174170586', '1704729963.png', '2024-01-08 05:53:11', '2024-06-21 06:17:16', 'Tempat Parkir, Toilet, Rumah Makan/ Kantin, Wifi', NULL, 31, '#00ff00'),
(22, 'Danau Linow', 'Lahendong, Kec. Tomohon Selatan, Kota Tomohon, Sulawesi Utara', 'Tomohon Selatan', 33, '<p>Buka Setiap Hari</p>\r\n<p>Grand Linow 10.00-20.00</p>\r\n<p>Linow Cafe 10.00-18.00</p>', '<p style=\"text-align: justify;\">Danau Linouw adalah sebuah danau vulkanik yang terletak diluar Tomohon, dekat Manado, Indonesia. Beberapa lubang hidrotermal memuntahkan gas panas dari tepi dan kedalaman danau. Komposisi kimiawi yang berubah dari danau berarti warnanya sering berubah warna, mulai dari merah, hijau tua, dan bahkan biru gelap.</p>', 30000, 1, '124.82640252880496', '1.2707478967554326', '1709017682.jpg', '2024-01-08 06:24:10', '2024-06-21 06:08:35', '-', NULL, 40, '#00ff00'),
(24, 'Pusat Oleh-oleh Krisan', 'Jl. Raya Tomohon, Kakaskasen Satu, Kec. Tomohon Utara, Kota Tomohon, Sulawesi Utara', 'Tomohon Utara', 12, '<p>Senin-Sabtu</p>\r\n<p>10.00-22.00</p>\r\n<p>Minggu</p>\r\n<p>15.00-20.00</p>', '<p style=\"text-align: justify;\">Krysan Souvenir Shop &amp; Cafe menjadi Pusat Oleh-Oleh Kota Tomohon maupun khas Sulawesi Utara. Menyediakan Aneka Kue, Keripik, Abon dan Sambal, Ikan Kaleng, Minuman, Kacang-Kacangan, Batik, Kerajinan Kayu, Anyaman, dan Souvenir. Berlokasi di Kakaskasen Satu, Kecamatan Tomohon Utara, Kota Tomohon, di Provinsi Sulawesi Utara, Krysan Souvenir Shop &amp; Cafe buka operasional Senin-Sabtu jam 10 pagi hingga jam 9 malam. Khusus hari Minggu tutup.</p>', 0, 3, '124.83294153439135', '1.3543947632489792', '1704728448.jpg', '2024-01-08 06:36:25', '2024-06-21 06:09:26', 'Tempat Parkir', NULL, 26, '#0000ff'),
(25, 'Mah\'watu', 'Lahendong, Kec. Tomohon Selatan, Kota Tomohon, Sulawesi Utara', 'Tomohon Selatan', 33, '<p>Senin-Sabtu</p>\r\n<p>10.00-18.00</p>\r\n<p>Minggu</p>\r\n<p>12.00-18.00</p>', '<p style=\"text-align: justify;\"><strong>Mah&rsquo;watu</strong>&nbsp;ini dikenal juga dengan sungai belerang yang berada dekat dengan cafe tersebut, itu merupakan salah satu poin&nbsp;utama yang dipamerkan&nbsp; dari konsep cafe&nbsp;<strong>Mah&rsquo;watu</strong> ini.</p>', 10000, 1, '124.82026403822735', '1.267684308597389', '1704729601.png', '2024-01-08 06:47:01', '2024-06-21 06:09:37', 'Tempat Parkir, Rumah Makan/ Kantin', NULL, 25, '#00ff00'),
(26, 'Michinoeki Pakewa', 'Talete Dua, Kec. Tomohon Tengah, Kota Tomohon, Sulawesi Utara', 'Tomohon Tengah', 48, '<p>24 Jam</p>', '<p style=\"text-align: justify;\">Michi No Eki ini merupakan stasiun jalan atau rest area. Dimanfaatkan untuk tempat istirahat, tempat belanja souvenir, buah dan sayuran segar. Michi No Eki Pakewa Tomohon merupakan satu-satunya di Indonesia, berkat kerja sama Pemkot Tomohon dan Kota Minamibosho yang difasilitasi Japan International Coorporation Agency (JICA).</p>', 0, 3, '124.84276815543791', '1.337199926232126', '1704725253358.jfif', '2024-01-08 07:47:33', '2024-06-21 06:09:50', 'Tempat Parkir, Rumah Makan/ Kantin', NULL, 23, '#0000ff'),
(27, 'Narwastu Hills', 'Jl. Wawo, Matani Tiga, Kec. Tomohon Tengah, Kota Tomohon, Sulawesi Utara 95441', 'Tomohon Tengah', 46, '<p>-</p>', '<p class=\"_ap3a _aaco _aacu _aacx _aad6 _aade\" dir=\"auto\">Tempat wisata bukit dengan pemandangan gunung dan kota yang menakjubkan.</p>', 25000, 1, '124.84654066126431', '1.3024382510404477', '1704729234.png', '2024-01-08 07:58:56', '2024-06-21 06:09:59', 'Tempat Parkir', NULL, 27, '#00ff00'),
(28, 'Wale Ne Reideen', 'Talete Dua, Tomohon Tengah, Tomohon City, North Sulawesi', 'Tomohon Tengah', 48, '<p>Senin Tutup</p>\r\n<p>Selasa-Kamis</p>\r\n<p>10.00-18.00</p>\r\n<p>Jumat-Minggu</p>\r\n<p>09.00-20.00</p>', '<p style=\"text-align: justify;\">Wale Ne Reideen&nbsp;adalah salah satu destinasi wisata yang sangat hits di kalangan Tomohon. Alasannya adalah karena saat berada di sini, para wisatawan bisa berfoto dengan lebih leluasa dan hasil fotonya juga dijamin bagus dengan berbagai spot yang ada di dalamnya.</p>', 5000, 3, '124.8550580484258', '1.3397366036431648', '1704729004.png', '2024-01-08 08:15:07', '2024-06-21 06:10:11', 'Tempat Parkir', NULL, 24, '#0000ff'),
(29, 'Danau Kasewean (Kelong Garden)', 'Jl. Mahawu, Kakaskasen Dua, Kec. Tomohon Utara, Kota Tomohon, Sulawesi Utara', 'Tomohon Utara', 13, '<p>Senin-Minggu</p>\r\n<p>11.00-20.00</p>', '<p style=\"text-align: justify;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',serif; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">Selain mempumyai pemandangan yang indah serta spot foto yang menarik taman kelong juga menyediakan makanan dan minuman. Taman kelong juga menyewakan tempat untuk prewedding, wedding, event, party dsb. Untuk reservasi bisa menghubungi langsung pihak taman kelong di linktr.ee/kelonggarden.</span></p>', 25000, 1, '124.84240876199318', '1.351835392448664', '1704729350.png', '2024-01-08 08:27:50', '2024-06-21 06:10:39', 'Tempat Parkir, Toilet, Meja Piknik', NULL, 20, '#00ff00'),
(30, 'Gereja Sion Tomohon', 'Talete Satu, Kec. Tomohon Tengah, Kota Tomohon, Sulawesi Utara', 'Tomohon Tengah', 47, '<p>-</p>', '<p style=\"text-align: justify;\">Bukan sekadar tempat peribadatan saja, Gereja Sion Tomohon pula merupakan cagar budaya yang telah diresmikan pada tahun 2018 silam. Menjadi gereja pertama yang dinyatakan sebagai cagar budaya di Indonesia, destinasi ini menyimpan nilai sejarah yang patut diperhitungkan. Gaya arsitek bangunannya yang begitu khas pula menjadi daya tarik tersendiri bagi para wisatawannya.</p>', 0, 2, '124.839432801734', '1.325869228680261', '1704967662108.png', '2024-01-11 03:07:42', '2024-06-21 06:10:54', 'Tempat Parkir', NULL, 20, '#ff0000'),
(31, 'Hutan Pinus Lahendong', 'Jalan Lahendong, Lahendong, Kec. Tomohon Selatan, Kota Tomohon, Sulawesi Utara', 'Tomohon Selatan', 33, '<p>Buka Setiap Hari</p>\r\n<p>Jam 09.00-20.00</p>', '<p style=\"text-align: justify;\">Hutan Wisata Lahendong terkenal akan pemandian air panasnya yang berada di tengah hutan pinus. Berada tak jauh dari pusat kota, destinasi wisata ini memang kerap dijadikan sebagai tujuan para pelancong untuk menyegarkan pikiran dari rutinitas di perkotaan. Ditambah lagi, dengan adanya pepohonan pinus yang menjulang tinggi tentunya mampu membuat pikiran terasa lebih tenang. Pemandian yang berupa danau sumber mata air panas ini memiliki suhu yang mencapai 30 hingga 100 derajat Celcius. Keindahan berupa perpaduan antara pepohonan rindang yang hijau dengan tanah belerang, menjadikan pemandangan yang sungguh menakjubkan. Bila ingin berendam, terdapat beberapa bilik yang telah disediakan oleh pengelola untuk para pengunjungnya.</p>', 25000, 1, '124.82317202662824', '1.2840899948029214', '1715922937.jpeg', '2024-01-11 03:12:52', '2024-06-21 06:11:09', 'Tempat Parkir, Tempat Mandi, Toilet', NULL, 25, '#00ff00'),
(32, 'Menara Alfa Omega', 'Jl. Ps. Lama Tomohon, Talete Satu, Kec. Tomohon Tengah, Kota Tomohon, Sulawesi Utara', 'Tomohon Tengah', 47, '<p>24 Jam</p>', '<p style=\"text-align: justify;\">Alfa Omega Tower sebenarnya merupakan sebuah nama dari sebuah tower atau menara yang cukup populer di Kota Tomohon. Bangunan yang terbilang baru ini, telah menarik perhatian masyarakat sekitar lantaran gaya arsitekturnya. Jadi tidak mengherankan jika banyak orang yang memanfaatkan menara berestetika tinggi ini sebagai spot foto instagenik. Berlokasikan di tengah Kota Tomohon, Alfa Omega Tower selalu menjadi tujuan wisata para pelancong. Terlebih lagi ketika malam hari tiba, anda bisa menyaksikan keindahan panorama Kota Tomohon dengan gemerlap lampunya dari atas menara. Keindahan menara dikala malam hari pula menjadi keunikan tersendiri yang tak bisa dilewatkan.</p>', 0, 3, '124.83869786518231', '1.3254509160659214', '1704968866699.png', '2024-01-11 03:27:46', '2024-06-21 06:11:23', '-', NULL, 19, '#0000ff'),
(33, 'Kai\'santi Garden', 'Jl. Woloan Kayawu, Woloan Dua, Kec. Tomohon Barat, Kota Tomohon, Sulawesi Utara', 'Tomohon Barat', 59, '<p class=\"MsoListParagraphCxSpFirst\" style=\"text-align: justify; line-height: 150%;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Buka setiap hari</span></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"text-align: justify; line-height: 150%;\"><span lang=\"EN-US\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Dari jam 08.00-20.00</span></p>', '<p style=\"text-align: justify;\">Puncak Kai&rsquo; Santi berada di area perbukitan yang sejuk dan asri. Memang di Kota Tomohon ini masih banyak sekali tempat-tempat yang masih jauh dari polusi, sehingga sangat tepat untuk dijadikan tempat berlibur.</p>\r\n<p style=\"text-align: justify;\">Terletak di daerah Woloan Dua kecamatan Tomohon Barat, tempat ini digemari para wisatawan karena keindahan panorama alamnya. Bayangkan saja terdapat tempat yang memaparkan sawah yang hijau dan sejuk di depan Anda, pasti sangat menenangkan sekali. Untuk masuk ke tempat ini, Anda tidak akan dikenakan biaya yang mahal.</p>', 30000, 1, '124.80432808399202', '1.3227694232709795', '1704971273.png', '2024-01-11 04:04:20', '2024-06-21 06:11:38', 'Tempat Parkir, Meja Piknik, Toilet', NULL, 20, '#00ff00'),
(34, 'Valentine Hills Woloan Tomohon', 'Jl. Woloan Kayawu, Woloan Dua, Kec. Tomohon Barat, Kota Tomohon, Sulawesi Utara', 'Tomohon Barat', 59, '<p>Senin-Minggu</p>\r\n<p>10.00-17.00</p>', '<p style=\"text-align: justify;\">Valentine Hills merupakan tempat wisata yang tergolong cukup baru ini menawarkan keindahan pemandangan dari atas yang menawan. Tempat ini berada di Desa Woloan Dua, Kecamatan Tomohon Barat.</p>', 10000, 1, '124.8036842410121', '1.3227962382132856', '1704972957939.png', '2024-01-11 04:35:57', '2024-06-21 06:11:52', 'Tempat Parkir, Toilet, Rumah Makan/ Kantin', NULL, 21, '#00ff00'),
(35, 'Tuur Ma\'asering Kumelembuai Tomohon', 'Kumelembuay, Kec. Tomohon Timur., Kota Tomohon, Sulawesi Utara', 'Tomohon Timur', 53, '<p>Senin-Minggu</p>\r\n<p>10.00-20.00</p>', '<p style=\"text-align: justify;\">Tuur Maasering wisata yang dibuka pada tahun 2020 lalu ini berada di tengah hutan pohon aren atau seho, di sini pula merupakan tempat penyulingan air nira atau saguer. Kemudian dijadikan sebuah bangunan kafe yang berkonsep alam serta mengusung tema kearifan lokal. Semakin unik dengan ciri khas bangunan rumah kayu dan bambu.</p>', 15000, 1, '124.88007365529094', '1.3534562521863525', '1704973702605.png', '2024-01-11 04:48:22', '2024-06-21 06:12:31', 'Tempat Parkir, Rumah Makan/ Kantin, Toilet', NULL, 24, '#00ff00'),
(36, 'Rumah Budaya Nusantara - Wale Ma\'zani', 'Walian Satu, Kec. Tomohon Selatan, Kota Tomohon, Sulawesi Utara', 'Tomohon Selatan', 38, '<p>Senin-Sabtu</p>\r\n<p>09.00-17.00</p>', '<div>\r\n<div id=\"ChZDSUhNMG9nS0VJQ0FnSUN3eE9qUk53EAE\" class=\"MyEned\" lang=\"id\" tabindex=\"-1\"><span class=\"wiI7pd\">Pusat pengembangan seni dan budaya minahasa</span></div>\r\n</div>\r\n<div class=\"KtCyie\">&nbsp;</div>', 0, 3, '124.8352485838749', '1.2880652841906306', '1704977238296.png', '2024-01-11 05:47:18', '2024-06-21 06:12:43', 'Tempat Parkir, Toilet, Rumah Makan/ Kantin', NULL, 20, '#0000ff'),
(37, 'Taman Wisata Mahoni', 'Kakaskasen Tiga, Kec. Tomohon Utara, Kota Tomohon, Sulawesi Utara', 'Tomohon Utara', 20, '<p>Senin-Minggu</p>\r\n<p>08.00-19.00</p>', '<p style=\"text-align: justify;\">Salah satu tempat wisata yang sejuk dan penuh dengan nuansa alam. Terletak di kaki gunung Lokon</p>', 15000, 1, '124.80817966280678', '1.3506192651096876', '1704977893246.png', '2024-01-11 05:58:13', '2024-06-21 08:03:19', 'Tempat Parkir, Rumah Makan/ Kantin, Toilet', NULL, 31, '#00ff00'),
(38, 'Zanoleos', 'Woloan Satu Utara, Kota Tomohon, Sulawesi Utara', 'Tomohon Barat', 58, '<p>Senin-Minggu</p>\r\n<p>09.00-21.00</p>', '<p style=\"text-align: justify;\">Zano Leos adalah kolam air panas di Tomohon renang yang kini menjadi tempat wisata baru di dataran kaki Gunung Lokon itu. Kolam ini, berada kira-kira 4 Kilometer dari pusat Kota Tomohon, jika ditempuh dengan kendaraan roda empat. Dari pusat kota, sekitar 10 menit anda sudah bisa tiba di lokasi.</p>', 20000, 1, '124.81324907733062', '1.3262231854525663', '1704978583746.jpg', '2024-01-11 06:09:43', '2024-06-21 06:13:50', 'Tempat Parkir, Toilet, Rumah Makan/ Kantin', NULL, 23, '#00ff00'),
(39, 'Sparta Stable', 'Rurukan Satu, Kec. Tomohon Timur, Kota Tomohon, Sulawesi Utara', 'Tomohon Timur', 52, '<p>-</p>', '<p>salah satu tempat wisata yang ada di kota tomohon</p>', 5000, 1, '124.87946614482053', '1.334255661003025', '1704981298306.png', '2024-01-11 06:54:58', '2024-06-21 06:14:05', '-', NULL, 36, '#00ff00'),
(40, 'Air Terjun Tumimperas', 'Pinaras, Kec. Tomohon Selatan., Kota Tomohon, Sulawesi Utara', 'Tomohon Selatan', 32, '<p>24 Jam</p>', '<p>Salah satu wisata alam di Kota Tomohon</p>', 0, 1, '124.78087348892863', '1.2953256035033514', '1704982022768.jfif', '2024-01-11 07:07:02', '2024-06-21 06:14:18', '-', NULL, 58, '#00ff00'),
(41, 'Green Valley', 'Jl. Larus Rambing Jl. Tatow, Woloan Satu, Kec. Tomohon Barat, Kota Tomohon, Sulawesi Utara', 'Tomohon Barat', 58, '<p>-</p>', '<p>Tempatnya bagus, selain resto plus kolam pemancingan.</p>', 0, 1, '124.81684315279834', '1.328282569305097', '1704982996699.png', '2024-01-11 07:23:16', '2024-06-21 06:14:33', 'Tempat Parkir, Toilet, Rumah Makan/ Kantin', NULL, 27, '#00ff00'),
(42, 'Bangunan “Pagoda Ekayana” Vihara Buddhayana', 'Jl. Sunge No.57, Kakaskasen Tiga, Kec. Tomohon Utara, Kota Tomohon, Sulawesi Utara', 'Tomohon Utara', 20, '<p>Senin-Minggu</p>\r\n<p>09.00-17.00</p>', '<p style=\"text-align: justify;\">Pagoda Ekayana terletak di Jl Sungen, daerah Kakaskasen Dua, Tomohon Utara. Tempat ini sebenarnya merupakan tempat beribadah untuk umat Budha, namun karena bangunannya yang sangat artistik, tempat ini menarik para wisatawan. Nama sebenarnya dari tempat ini adalah Vihara Ekayana.</p>', 10000, 2, '124.83797907265206', '1.346951019822041', '1704983539278.png', '2024-01-11 07:32:19', '2024-06-21 06:14:45', 'Tempat Parkir, Toilet', NULL, 25, '#ff0000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daerahs`
--
ALTER TABLE `daerahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambars`
--
ALTER TABLE `gambars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `table_zonasi`
--
ALTER TABLE `table_zonasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`),
  ADD KEY `daerah_wisata` (`daerah_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daerahs`
--
ALTER TABLE `daerahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `gambars`
--
ALTER TABLE `gambars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `table_zonasi`
--
ALTER TABLE `table_zonasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  ADD CONSTRAINT `wisatas_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wisatas_ibfk_2` FOREIGN KEY (`daerah_wisata`) REFERENCES `daerahs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
