-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 05:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `berita_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`berita_id`, `judul`, `gambar`, `tanggal_upload`, `penulis`, `isi_berita`, `created_at`, `updated_at`) VALUES
(2, 'Donor Darah IPFEST 2024: Membangun Solidaritas dan Kemanusiaan', 'images/20240614072346.jpeg', '2024-06-14', 'Najwa Shihab', 'Donor darah ini merupakan kolaborasi antara IPFEST dan Palang Merah Indonesia (PMI) Kota Bandung. Kegiatan diadakan pada Senin (12/2/2024) di Gedung Center for Research and Community Service (CRCS) ITB Kampus Ganesha.\r\n\r\nSebagai bagian dari misi IPFEST, kegiatan donor darah tidak hanya untuk menyatukan mahasiswa dalam kompetisi sebuah perminyakan, tetapi juga sebagai bentuk kontribusi kepada masyarakat.\r\n\r\nExecutive Director IPFEST 2024, Revino Raditya Rama (TM, 2021), mengatakan, \"Latar belakang dari acara ini adalah untuk memberikan manfaat kepada masyarakat di sekitar ITB, terutama di Bandung. IPFEST bukan hanya tentang kompetisi untuk mahasiswa, tetapi juga tentang bagaimana kita dapat berkontribusi kepada masyarakat,\" ujarnya.\r\n\r\nLebih dari 30 orang telah mendaftar untuk mendonorkan darahnya. Kerja sama dengan PMI Kota Bandung memastikan bahwa proses donor darah berjalan lancar dan aman bagi para peserta.\r\n\r\nSalah seorang donor, M. Adib Marsya Al Imamiy (TM, 21), mengatakan, \"Saya merasa senang bisa berpartisipasi dalam kegiatan donor darah ini. Selain mendukung acara IPFEST, saya juga merasa bahwa saya telah berkontribusi langsung dalam membantu sesama yang membutuhkan. Harapannya semoga kegiatan ini bisa memberikan kesempatan bagi sivitas akademika untuk bisa meresapi rasa kepedulian kepada sesama dan menjadi simbol itu sendiri atas kepedulian dan kebersamaan. Dan untuk teman-teman lain yang (juga mengikuti) donor (darah) semoga bisa memberikan manfaat untuk kita semua dan menjadi kebanggaan tersendiri bagi kita atas andil dalam menciptakan suasana yang saling peduli satu sama lain. Semoga lebih banyak juga kesempatan seperti ini hadir di lingkungan ITB,\" ujarnya.\r\n\r\nDonor darah IPFEST 2024 juga menjadi ajang bagi mahasiswa ITB untuk menunjukkan kepedulian dan solidaritas mereka terhadap masyarakat sekitar. Diharapkan melalui kegiatan seperti ini, antusiasme mahasiswa ITB untuk terlibat dalam kegiatan sosial dan kemanusiaan akan semakin meningkat.\r\n\r\nDonor darah IPFEST 2024 tidak hanya menjadi bagian dari persiapan menuju acara utama, tetapi juga menjadi momentum bagi mahasiswa untuk berbagi kasih dan membuktikan bahwa seluruh sivitas akademika ITB adalah agen perubahan yang peduli terhadap kemanusiaan.\r\n\r\nReporter: Iko Sutrisko Prakasa Lay (Matematika 2021)', '2024-06-14 00:23:46', '2024-06-14 00:23:46'),
(3, 'Info Stok Darah dan Lokasi Donor Darah di DIY Hari Ini, Jumat 29 Maret 2024', 'images/20240614072637.jpeg', '2024-06-14', 'Anies Baswedan', 'Jakarta (ANTARA) - Hari ini, Senin, 14 Juni 2024 seluruh negara kembali memperingati Hari Donor Darah Sedunia, termasuk Indonesia yang mengusung tema “Berikan darahmu, berikan plasmamu, bantu kehidupan, bantu sesama” sebagai wujud gerakan kemanusiaan modern.\r\n\r\nMomen bersejarah ini ditetapkan secara resmi sebagai peringatan tahunan pada 2005 oleh Organisasi Kesehatan Dunia (World Health Organization/WHO), setelah sebelumnya dideklarasikan oleh para menteri kesehatan di seluruh dunia sebagai wujud gerakan kemanusiaan modern pada medio 2004.\r\n\r\nDilansir dari laman WHO, dalam deklarasi tersebut para menteri kesehatan seluruh dunia bersepakat memilih tanggal 14 Juni karena merupakan hari kelahiran dari Karl Landstenir.\r\n\r\nKarl Lendstenir merupakan seorang dokter dan ahli biologi asal Austria yang berhasil menemukan sistem golongan darah manusia A, B, dan O pada tahun 1900. Atas penemuan tersebut Karl mendapat penghargaan Nobel Fisiologi, dan juga mempedomani penemuan-penemuan lainnya termasuk keamanan transfusi darah.\r\n\r\nBaca juga: Sejarah Hari Donor Darah Sedunia, momen peringatan membantu sesama\r\n\r\nBaca juga: Pangdam ikut donor darah jelang HUT Ke-66 Kodam XIII/Merdeka\r\n\r\nPemerintah Indonesia juga berpartisipasi memperingati Hari Donor Darah Sedunia melalui ragam kegiatan sosial sebagai wujud gerakan kemanusiaan modern.\r\n\r\nBahkan jauh sebelumnya, Kementerian Kesehatan Indonesia telah membuktikan komitmennya mendukung gerakan kemanusiaan dunia tersebut melalui pendirian Palang Merah Indonesia (PMI) pada tahun 1945.\r\n\r\nDengan semangat kemanusiaan dan bekal perkembangan ilmu pengetahuan itu pula Pemerintah Indonesia mendorong PMI untuk terus bertransformasi menyempurnakan upaya pemenuhan kebutuhan darah bagi masyarakat domestik, ataupun global hingga saat ini.\r\n\r\nBerdasarkan standar WHO kebutuhan darah minimal di suatu negara adalah 2 persen dari jumlah penduduk. Di Indonesia dengan populasi sekitar 280 juta jiwa maka kebutuhan darah minimal adalah 5,6 juta kantong per tahun.\r\n\r\nDari kebutuhan minimal tersebut diketahui berdasarkan data Kementerian kesehatan RI pada tahun 2023, jumlah produksi darah dan komponennya secara nasional telah berhasil mencapai 4,1 juta kantong dari 3,4 juta donasi.\r\n\r\nDengan segala sumber daya yang dimiliki saat ini maka, Ketua Umum PMI Jusuf Kalla mengatakan bahwa tahun ini pihaknya siap mulai mengembangkan pemanfaatan plasma darah.\r\n\r\nPMI saat ini setidaknya sudah berhasil mengumpulkan 100.000 liter plasma dari 18 Unit Donor Darah (UDD) yang siap di alih daya produksi ke fasilitas pembuatan obat atau toll-manufacturing untuk mengobati kondisi kronis langka, termasuk gangguan auto imun dan hemofhilia.\r\n\r\nDalam konteks global, pemberian layanan kesehatan keliling yang di dalamnya juga melangsungkan transfusi darah bagi para pengungsi Palestina, di Kamp Khan Younis, Jalur Gaza sejak Februari 2024, menjadi salah satu wujud eksistensi Pemerintah Indonesia melalui PMI dalam menegakkan nilai sosial-kemanusiaan di kancah dunia.\r\n\r\nSecara umum PMI menilai salah satu fokus peringatan Hari Donor Darah Sedunia tahun ini yakni meningkatkan peran serta pemerintah untuk berkomitmen dalam mencukupi kebutuhan darah dan produk darah yang aman, berkualitas dan berkelanjutan yang berasal dari 100 persen penyumbangan darah sukarela tanpa bayaran.*', '2024-06-14 00:26:37', '2024-06-14 00:26:37'),
(5, 'The Luxton Bandung dan PMI Kota Bandung Gelar Donor Darah untuk Kemanusiaan.', 'images/20240614191606.jpeg', '2024-06-15', 'Sule P', 'Home > Rejabar > News RejabarJumat 14 Jun 2024 17:23 WIB\r\nThe Luxton Bandung dan PMI Kota Bandung Gelar Donor Darah untuk Kemanusiaan.\r\nAcara ini mendapatkan partisipasi yang antusias.\r\n\r\nRed: Ahmad Fikri Noor\r\n    \r\nThe Luxton Bandung dan PMI Kota Bandung menggelar donor darah.Foto: Luxton  Bandung\r\nThe Luxton  Bandung dan PMI Kota Bandung menggelar donor darah.\r\nREPUBLIKA.CO.ID, BANDUNG – The Luxton Bandung dengan sukses mengadakan acara donor darah pada 12 Juni 2024, di Riviera Room - West Wing, dari pukul 09.00 hingga 12.00 WIB. Acara ini diselenggarakan bekerja sama dengan Palang Merah Indonesia (PMI) Kota Bandung.\r\n\r\n\r\nAcara ini mendapatkan partisipasi yang antusias dari staf hotel, tamu, dan masyarakat sekitar. Tujuan acara ini adalah untuk mendukung upaya kemanusiaan dan berkontribusi pada kebutuhan mendesak akan pasokan darah di rumah sakit di seluruh wilayah khususnya di kota Bandung.\r\n\r\nBaca Juga\r\nMenjaga Sholat Tepat Waktu: Jadwal Sholat Hari Ini di Bandung, 14 Juni 2024 Ibu dari Siswa SMK Korban Perundungan yang Meninggal di Bandung Barat Lapor Polisi Polisi Tembak Residivis Spesialisasi Curanmor di Bandung\r\nKerja sama antara The Luxton  Bandung dan Palang Merah Indonesia bertujuan untuk meningkatkan kesadaran tentang pentingnya donor darah secara rutin dan menumbuhkan rasa keterlibatan masyarakat dalam kegiatan kemanusiaan. Penyelenggara memastikan bahwa semua protokol kesehatan dan keselamatan yang diperlukan diikuti demi kesejahteraan semua pendonor dan staf. Darah yang terkumpul akan digunakan untuk membantu pasien yang membutuhkan transfusi, termasuk mereka yang menjalani operasi, perawatan dan keadaan darurat medis lainnya.\r\n\r\nThe Luxton  Bandung menyampaikan terima kasih kepada semua peserta dan relawan yang telah membuat acara ini sukses. Dengan bersatu untuk tujuan mulia ini, kita telah menunjukkan kekuatan semangat komunitas dan kepedulian, ujar Zamilah David selaku Marketing Communication Manager di The Luxton Bandung.', '2024-06-14 12:16:06', '2024-06-14 12:16:29'),
(8, 'Apa itu donor darah ?', 'images/20240615085847.jpeg', '2024-06-15', 'Muhaimin', 'Donor darah adalah tindakan yang mulia dan sangat penting dalam menyelamatkan nyawa. Di Surabaya, saat ini sedang terjadi krisis stok darah, terutama untuk golongan darah A dan O. Kelangkaan ini dipicu oleh tingginya permintaan dalam beberapa minggu terakhir. PMI Surabaya mengimbau masyarakat untuk mendonorkan darah mereka, khususnya mereka yang memiliki golongan darah yang sedang kekurangan.\r\n\r\nStok darah yang menipis tidak hanya menjadi masalah di Surabaya, tetapi juga di berbagai kota lainnya. Banyak faktor yang menyebabkan hal ini, termasuk musim liburan di mana biasanya jumlah donor menurun. PMI dan berbagai organisasi kesehatan lainnya selalu berusaha untuk menjaga ketersediaan darah dengan mengadakan acara donor darah di berbagai lokasi, termasuk kantor-kantor, pusat perbelanjaan, dan saat acara Car Free Day.\r\n\r\nSelain itu, dalam rangka memperingati Hari Donor Darah Sedunia pada 14 Juni 2024, kampanye bertema \"Donating Blood is an Act of Solidarity. Join the Effort and Save Lives\" digalakkan untuk meningkatkan kesadaran masyarakat akan pentingnya donor darah. Kampanye ini bertujuan untuk mengajak lebih banyak orang berpartisipasi dalam donor darah dan menyadari bahwa satu kantong darah dapat menyelamatkan hingga tiga nyawa.\r\n\r\nManfaat donor darah tidak hanya dirasakan oleh penerima, tetapi juga oleh pendonor itu sendiri. Donor darah dapat membantu meningkatkan kesehatan jantung, mengurangi risiko kanker, dan membantu pendonor dalam menjaga kadar zat besi dalam darah tetap seimbang. Selain itu, donor darah secara rutin juga bisa menjadi langkah preventif dalam memonitor kesehatan pendonor karena mereka akan menjalani pemeriksaan kesehatan sebelum mendonorkan darah.\r\n\r\nUntuk mendukung upaya tersebut, PMI membuka layanan donor darah setiap hari, termasuk hari libur dan tanggal merah, dari jam tujuh pagi hingga sembilan malam. Mereka juga melakukan jemput bola ke beberapa instansi dan acara publik untuk memudahkan masyarakat dalam berdonor darah. Semua golongan darah sangat dibutuhkan, dan PMI berharap masyarakat dapat meluangkan waktu untuk menyumbangkan darah mereka demi kebaikan bersama.\r\n\r\nDengan semangat solidaritas dan kepedulian, kita semua dapat berkontribusi dalam menjaga ketersediaan darah dan menyelamatkan nyawa orang lain. Donor darah adalah salah satu bentuk kebaikan yang dapat kita lakukan dengan mudah, namun memiliki dampak yang sangat besar bagi mereka yang membutuhkan.', '2024-06-15 01:58:47', '2024-06-15 01:59:07');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `merchandise_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `donor_id` bigint(20) UNSIGNED NOT NULL,
  `NIK` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `gol_darah` varchar(255) NOT NULL,
  `riwayat` text NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `tgl_donor` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`donor_id`, `NIK`, `nama`, `alamat`, `tgl_lahir`, `umur`, `berat_badan`, `gol_darah`, `riwayat`, `no_hp`, `tgl_donor`, `created_at`, `updated_at`) VALUES
(13, '111111111111111', 'anggi', 'indonesia', '2024-06-15', 20, 50, 'A+', '-', '089999922718', '2024-06-16', '2024-06-15 01:33:27', '2024-06-15 01:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `form_donor`
--

CREATE TABLE `form_donor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merchandise`
--

CREATE TABLE `merchandise` (
  `merchandise_id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchandise`
--

INSERT INTO `merchandise` (`merchandise_id`, `nama_produk`, `gambar`, `harga`, `stock`, `created_at`, `updated_at`, `deskripsi`) VALUES
(2, 'kaos', 'images/20240614071848.jpeg', 200000.00, 4, '2024-06-14 00:18:48', '2024-06-14 00:18:48', '\"Kaos\" adalah kata dalam bahasa Indonesia yang merujuk pada pakaian yang biasanya digunakan untuk acara santai atau sehari-hari. Kaos memiliki ciri khas berupa desain tanpa kerah dan lengan yang pendek. Pakaian ini sering terbuat dari bahan katun atau bahan lain yang nyaman dipakai.'),
(3, 'cangkir', 'images/20240614071942.jpeg', 50000.00, 10, '2024-06-14 00:19:42', '2024-06-14 00:19:42', 'Cangkir adalah wadah kecil yang biasanya digunakan untuk minum minuman panas seperti teh atau kopi. Cangkir biasanya memiliki pegangan di satu sisi untuk memudahkan dalam memegangnya saat minuman di dalamnya panas. Bahan yang umum digunakan untuk membuat cangkir antara lain keramik, porselen, kaca, dan logam. Cangkir sering dipasangkan dengan piring kecil yang disebut tatakan atau piring cangkir untuk menangkap tetesan minuman dan memberikan dukungan tambahan.'),
(4, 'totebag', 'images/20240614072104.jpeg', 20000.00, 100, '2024-06-14 00:21:04', '2024-06-14 00:21:04', 'Totebag adalah jenis tas yang biasanya berukuran besar dan berbentuk persegi atau persegi panjang dengan dua pegangan sejajar di bagian atasnya. Totebag biasanya terbuat dari bahan yang kuat dan tahan lama seperti kanvas, kain katun, atau bahan sintetis lainnya. Totebag sering digunakan untuk berbagai keperluan, mulai dari membawa buku, belanja, hingga sebagai aksesori mode sehari-hari. Desainnya yang sederhana dan fungsional membuat totebag menjadi pilihan populer bagi banyak orang.'),
(5, 'mug', 'images/20240614191701.jpeg', 40000.00, 5, '2024-06-14 12:17:01', '2024-06-14 12:17:01', 'ini mug');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_01_154032_create_form_donor', 1),
(6, '2024_06_05_014634_create_berita_table', 1),
(7, '2024_06_07_024704_create_merchandise_table', 1),
(8, '2024_06_09_061528_create_donors_table', 1),
(9, '2024_06_09_065118_add_tgl_donor_to_donors_table', 1),
(10, '2024_06_11_014530_create_stocks_table', 1),
(11, '2024_06_11_115608_add_deskripsi_to_merchandise_table', 1),
(12, '2024_06_12_062052_add_role_to_users_table', 1),
(13, '2024_06_12_214511_create_carts_table', 1),
(14, '2024_06_13_004826_add_blood_type_to_users_table--table=users', 1),
(15, '2024_06_14_072824_create_orders_table', 2),
(16, '2024_06_14_074249_add_shipping_and_payment_to_orders_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `merchandise_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `shipping_method` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `proof_of_payment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `stock_id` bigint(20) UNSIGNED NOT NULL,
  `golongan_darah` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`stock_id`, `golongan_darah`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'A-', 100, '2024-06-13 12:58:16', '2024-06-14 12:13:42'),
(2, 'A+', 33, '2024-06-13 12:58:33', '2024-06-13 12:58:33'),
(3, 'B+', 10, '2024-06-14 00:12:53', '2024-06-14 00:12:53'),
(9, 'O+', 60, '2024-06-15 01:39:19', '2024-06-15 01:39:30'),
(10, 'B-', 25, '2024-06-15 01:57:52', '2024-06-15 01:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bloodType` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `bloodType`, `role`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admina@gmail.com', '$2y$12$jGEFlkN6O.vln427HBFFo./t6hfexE2cihZOtfbv78.VghDNi3wNK', 'A-', 'admin', NULL, '2024-06-15 05:01:38'),
(13, 'user', 'user@gmail.com', '$2y$12$UoNj09UgUQRWM3kAiMvdRe7RyFdQtUSgiCOk45.DSiZ0uXYlOgf3W', 'A+', 'user', '2024-06-15 02:17:02', '2024-06-15 02:17:02'),
(14, 'admin1', 'admin1@gmail.com', '$2y$12$na40ax71LYByao.fMzPBHuEAXFGzi1pOJUFQNtuJggTgj4IaeCU3y', 'A+', 'admin', '2024-06-15 05:02:14', '2024-06-15 05:02:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_merchandise_id_foreign` (`merchandise_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`donor_id`),
  ADD UNIQUE KEY `donors_nik_unique` (`NIK`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `form_donor`
--
ALTER TABLE `form_donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`merchandise_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_merchandise_id_foreign` (`merchandise_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `donor_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_donor`
--
ALTER TABLE `form_donor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchandise`
--
ALTER TABLE `merchandise`
  MODIFY `merchandise_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `stock_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_merchandise_id_foreign` FOREIGN KEY (`merchandise_id`) REFERENCES `merchandise` (`merchandise_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_merchandise_id_foreign` FOREIGN KEY (`merchandise_id`) REFERENCES `merchandise` (`merchandise_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
