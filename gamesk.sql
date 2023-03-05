-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Mar 2023 pada 21.05
-- Versi server: 10.3.37-MariaDB-cll-lve
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adriansa_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` enum('On','Off') NOT NULL,
  `permission` varchar(200) NOT NULL,
  `date_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`, `permission`, `date_create`) VALUES
(5, 'admin', '$2y$10$4.UnWxxP9DGJnDmLUvsTWeEXLzl4af36HQBWlj7.xHK1Zgm6SIlIG', 'On', 'Konfigurasi,Admin,Games,Kategori,Produk,Pesanan,Topup,Metode,Pengguna,Sosmed', '2022-11-17 10:56:51'),
(10, 'renaldi', '$2y$10$Nz5WW.HoTK23HBZIBrab8ed35IAMS4lrqGVuQztJ0pgrPsEvDJLHq', 'On', 'Konfigurasi,Admin,Games,Kategori,Produk,Pesanan,Topup,Metode,Pengguna,Sosmed', '2022-12-24 23:52:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id`, `image`) VALUES
(1, '1677649336_236ac5535bf632c36a70.png'),
(2, '1677649355_538691a77f97620056bd.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `callback`
--

CREATE TABLE `callback` (
  `id` int(11) NOT NULL,
  `data` mediumtext DEFAULT NULL,
  `signature` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `callback`
--

INSERT INTO `callback` (`id`, `data`, `signature`) VALUES
(3, '{\"reference\":\"DEV-T1092776305YN0UQ\",\"merchant_ref\":\"TP202301284648\",\"payment_method\":null,\"payment_method_code\":null,\"amount_received\":0,\"fee_merchant\":0,\"fee_customer\":0,\"total_amount\":0,\"is_closed_payment\":1,\"status\":\"PAID\",\"paid_at\":null,\"note\":null,\"total_fee\":0}', 'Signature Success'),
(4, '{\"reference\":\"DEV-T1092776318PONC1\",\"merchant_ref\":\"TP202301289065\",\"payment_method\":null,\"payment_method_code\":null,\"amount_received\":0,\"fee_merchant\":0,\"fee_customer\":0,\"total_amount\":0,\"is_closed_payment\":1,\"status\":\"PAID\",\"paid_at\":null,\"note\":null,\"total_fee\":0}', 'Signature Success'),
(5, '{\"reference\":\"DEV-T1092776318PONC1\",\"merchant_ref\":\"TP202301289065\",\"payment_method\":null,\"payment_method_code\":null,\"amount_received\":0,\"fee_merchant\":0,\"fee_customer\":0,\"total_amount\":0,\"is_closed_payment\":1,\"status\":\"PAID\",\"paid_at\":null,\"note\":null,\"total_fee\":0}', 'Signature Success'),
(6, '{\"reference\":\"DEV-T1092776318PONC1\",\"merchant_ref\":\"TP202301289065\",\"payment_method\":null,\"payment_method_code\":null,\"amount_received\":0,\"fee_merchant\":0,\"fee_customer\":0,\"total_amount\":0,\"is_closed_payment\":1,\"status\":\"PAID\",\"paid_at\":null,\"note\":null,\"total_fee\":0}', 'Signature Success');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `category` varchar(250) NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `icon`, `category`, `sort`) VALUES
(27, 'fas fa-regular fa-fire', 'Populer', 1),
(29, 'fas fa-regular fa-gamepad', 'Proses Manual', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `games` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `category` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `target` varchar(100) NOT NULL,
  `sort` int(11) NOT NULL,
  `konten` longtext NOT NULL,
  `status` enum('On','Off') NOT NULL,
  `check_status` enum('Y','N') NOT NULL,
  `check_code` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `games`
--

INSERT INTO `games` (`id`, `games`, `subtitle`, `category`, `image`, `slug`, `target`, `sort`, `konten`, `status`, `check_status`, `check_code`) VALUES
(1, 'Mobile Legends', 'Otomatis', 'Populer', '1677652960_0ee75c5fdf7139e91856.png', 'mobile-legends', 'ml', 1, '<ol>\r\n	<li>Masukkan ID dan Server Kamu.</li>\r\n	<li>Pilih Nominal Diamonds</li>\r\n	<li>Pilih pembayaran</li>\r\n	<li>Isi nomor telepon / whatsapp</li>\r\n	<li>Selesaikan pembayaran</li>\r\n	<li>Diamonds akan ditambahkan ke akun Mobile Legends kamu</li>\r\n</ol>', 'On', 'Y', 'mobilelegends'),
(2, 'Free Fire', 'Otomatis', 'Populer', '1677652946_7d33cd5b796e74157729.png', 'free-fire', 'default', 2, '', 'On', 'Y', 'Free Fire'),
(3, 'PUBG Mobile', '', 'Populer', '1677652931_cb1e6b7973f3288fd720.png', 'pubg-mobile', 'default', 3, '', 'On', 'N', ''),
(4, 'Genshin Impact', 'Otomatis', 'Populer', '1677653000_74d451d7e5191a1cffbc.png', 'genshin-impact', 'gi', 4, '', 'On', 'Y', 'gensin'),
(5, 'Apex Legends', '', 'Populer', '1677652907_3a657313e7c591ba441e.png', 'apex-legends-mobile', 'default', 5, '', 'On', 'Y', ''),
(6, 'Call Of Duty Mobile', '', 'Populer', '1677652896_8fe9a7fbb1bbffad961e.png', 'call-of-duty-mobile', 'default', 6, '', 'On', 'Y', ''),
(7, 'Dragon Raja', '', 'Populer', '1677652880_674fa1ff8d83e4767b9a.png', 'dragon-raja', 'default', 7, '', 'On', 'Y', ''),
(8, 'Higgs Domino', 'Poker City', 'Populer', '1677652871_1709b4eae1f8463dd250.png', 'higgs-domino', 'default', 8, '', 'On', 'Y', ''),
(9, 'Life After', '', 'Populer', '1677652850_997846b96c45972af096.png', 'life-after', 'default', 9, '', 'On', 'Y', ''),
(10, 'Sausage Man', '', 'Populer', '1677652822_b2a4b5156fc02c4bda26.png', 'sausage-man', 'default', 10, '', 'On', 'Y', ''),
(11, 'Tower Of Fantasy', '', 'Populer', '1677652811_7d0b62ad7debf4f68b86.png', 'tower-of-fantasy', 'default', 11, '', 'On', 'Y', ''),
(12, 'Omega Legends', '', 'Populer', '1677652801_221c7aafdebb409b7edd.png', 'omega-legends', 'default', 12, '', 'On', 'Y', ''),
(14, 'Gift Skin', '', 'Proses Manual', '1677652776_df6086fe02f1a5eb76ee.png', 'gift-skin', 'ml', 8, '', 'On', 'Y', 'Mobile Legends'),
(15, 'Promo Khusus', '', 'Proses Manual', '1677652763_f3912456df0c2ebd07ae.png', 'promo-khusus-1212', 'default', 1, '', 'On', 'Y', ''),
(16, 'Joki Rank Fast', '', 'Proses Manual', '1677652748_d56c96a42dcc62b07768.png', 'joki-rank-fast', 'joki', 7, '<p><strong>Catatan Penting :</strong><br />\r\n<br />\r\n1. Matikan Verifikasi Akun untuk mempermudah Penjoki Login.<br />\r\n2. Jika akun di login tanpa Izin , maka proses Joki akan dibatalkan dan Uang Pembeli akan hangus.<br />\r\n3. Dimohon Menunggu Sesuai Estimasi Proses Dan Jangan Spam Admin.<br />\r\n4. Jika ada Problem saat login ke Akun, maka akan segera di Hubungi oleh Admin.<br />\r\n5. Jika Akun belum di Proses selama 6 Jam harap Hubungi Admin.<br />\r\n6. Jika Proses Joki sudah selesai maka akan dihubungi Oleh Admin.<br />\r\n<br />\r\n<strong>Jika Butuh Bantuan Harap Hubungi Admin CGames,<br />\r\nTerimakasih.</strong></p>', 'On', 'N', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `game_populer`
--

CREATE TABLE `game_populer` (
  `id` int(11) NOT NULL,
  `game_name` varchar(100) NOT NULL,
  `game_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `game_populer`
--

INSERT INTO `game_populer` (`id`, `game_name`, `game_id`) VALUES
(17, '', 1),
(18, '', 2),
(19, '', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `level_name` varchar(200) NOT NULL,
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id`, `level_name`, `price`) VALUES
(1, 'Member', 30000),
(2, 'Reseller', 50000),
(3, 'VIP', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_upgrade`
--

CREATE TABLE `level_upgrade` (
  `id` int(11) NOT NULL,
  `code` varchar(128) NOT NULL,
  `level_id` int(11) NOT NULL,
  `level_name` varchar(128) NOT NULL,
  `price` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `method_id` int(11) NOT NULL,
  `method_name` varchar(128) NOT NULL,
  `payment_code` varchar(500) NOT NULL,
  `status` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `level_upgrade`
--

INSERT INTO `level_upgrade` (`id`, `code`, `level_id`, `level_name`, `price`, `user_id`, `method_id`, `method_name`, `payment_code`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(25, 'UM20230121225638150208', 2, 'Reseller', 50000, 33, 78, 'BRIVA IpayMu', '578893000182235', 'Success', '2023-01-21 22:56:41', '2023-01-21 22:58:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `method`
--

CREATE TABLE `method` (
  `id` int(11) NOT NULL,
  `method` varchar(55) NOT NULL,
  `image` varchar(250) NOT NULL,
  `uniq` enum('Y','N') NOT NULL,
  `provider` varchar(100) NOT NULL,
  `code` varchar(55) NOT NULL,
  `rek` varchar(250) NOT NULL,
  `instruksi` longtext NOT NULL,
  `status` enum('On','Off') NOT NULL,
  `category` enum('Saldo','E-Wallet','Bank Transfer','Virtual Account','Convenience Store') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `method`
--

INSERT INTO `method` (`id`, `method`, `image`, `uniq`, `provider`, `code`, `rek`, `instruksi`, `status`, `category`) VALUES
(38, 'QRIS', '1670119336_94c92cc380565dfbd164.png', 'N', 'Tripay', 'QRISC', '', '&lt;p&gt;&lt;strong&gt;Pembayaran via QRIS&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;1. Masuk ke aplikasi E-Wallet atau M-Banking Anda yang telah mendukung QRIS,&lt;br /&gt;\r\n2. Pindai/Scan QR Code yang tersedia,&lt;br /&gt;\r\n3. Akan muncul detail transaksi lalu pastikan data transaksi sudah sesuai,&lt;br /&gt;\r\n4. Selesaikan proses pembayaran Anda,&lt;br /&gt;\r\n5. Transaksi selesai dan&amp;nbsp;simpan bukti pembayaran Anda.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Pembayaran via QRIS (Mobile)&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;1. Download/Screenshot QR Code pada invoice,&lt;br /&gt;\r\n2. Masuk ke aplikasi E-Wallet atau M-Banking Anda yang telah mendukung QRIS,&lt;br /&gt;\r\n3. Upload QR Code yang telah di download/screenshot tadi,&lt;br /&gt;\r\n4. Akan muncul detail transaksi lalu pastikan data transaksi sudah sesuai,&lt;br /&gt;\r\n5. Selesaikan proses pembayaran Anda,&lt;br /&gt;\r\n6. Transaksi selesai dan simpan bukti pembayaran Anda.&lt;/p&gt;', 'On', 'E-Wallet'),
(62, 'BRI VA', '1670119327_36005ac386622f5c7c76.png', 'N', 'Tripay', 'BRIVA', '', '&lt;p&gt;&lt;strong&gt;Internet Banking&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;1. Login ke internet banking Bank BRI Anda,&lt;br /&gt;\r\n2. Pilih menu&amp;nbsp;&lt;strong&gt;Pembayaran&lt;/strong&gt;&amp;nbsp;lalu klik menu&amp;nbsp;&lt;strong&gt;BRIVA,&lt;/strong&gt;&lt;br /&gt;\r\n3. Pilih rekening sumber dan masukkan &lt;strong&gt;Kode Bayar&lt;/strong&gt;&amp;nbsp;lalu klik&amp;nbsp;&lt;strong&gt;Kirim,&lt;/strong&gt;&lt;br /&gt;\r\n4. Detail transaksi akan ditampilkan, pastikan data sudah sesuai&lt;br /&gt;\r\n5. Klik&amp;nbsp;&lt;strong&gt;Lanjutkan,&lt;/strong&gt;&lt;br /&gt;\r\n6. Masukkan kata sandi ibanking lalu klik&amp;nbsp;&lt;strong&gt;Request&lt;/strong&gt;&amp;nbsp;untuk mengirim m-PIN ke nomor HP Anda,&lt;br /&gt;\r\n7. Periksa HP Anda dan masukkan m-PIN yang diterima lalu klik&amp;nbsp;&lt;strong&gt;Kirim,&lt;/strong&gt;&lt;br /&gt;\r\n8. Transaksi sukses, simpan bukti transaksi Anda.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Aplikasi BRImo&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;1. Login ke aplikasi BRImo Anda,&lt;br /&gt;\r\n2. Pilih menu&amp;nbsp;&lt;strong&gt;BRIVA,&lt;/strong&gt;&lt;br /&gt;\r\n3. Pilih sumber dana dan masukkan &lt;strong&gt;Nomor Pembayaran&lt;/strong&gt;&amp;nbsp;lalu klik&amp;nbsp;&lt;strong&gt;Lanjut,&lt;/strong&gt;&lt;br /&gt;\r\n4. Klik&amp;nbsp;&lt;strong&gt;Lanjut,&lt;/strong&gt;&lt;br /&gt;\r\n5. Detail transaksi akan ditampilkan, pastikan data sudah sesuai,&lt;br /&gt;\r\n6. Klik&amp;nbsp;&lt;strong&gt;Lanjutkan,&lt;/strong&gt;&lt;br /&gt;\r\n7. Klik&amp;nbsp;&lt;strong&gt;Konfirmasi,&lt;/strong&gt;&lt;br /&gt;\r\n8. Klik&amp;nbsp;&lt;strong&gt;Lanjut,&lt;/strong&gt;&lt;br /&gt;\r\n9. Masukkan kata sandi ibanking Anda,&lt;br /&gt;\r\n10. Klik&amp;nbsp;&lt;strong&gt;Lanjut,&lt;/strong&gt;&lt;br /&gt;\r\n11. Transaksi sukses lalu simpan bukti transaksi Anda.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;ATM BRI&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;1. Lakukan pembayaran melalui ATM Bank BRI,&lt;br /&gt;\r\n2. Pilih menu&amp;nbsp;&lt;strong&gt;Transaksi Lain &amp;gt; Pembayaran &amp;gt; Lainnya &amp;gt; Pilih BRIVA,&lt;/strong&gt;&lt;br /&gt;\r\n3. Masukkan Nomor VA,&lt;br /&gt;\r\n4. Pilih&amp;nbsp;&lt;strong&gt;Ya&lt;/strong&gt;&amp;nbsp;untuk memproses pembayaran.&lt;/p&gt;', 'On', 'Virtual Account'),
(63, 'Mandiri VA', '1670119315_f2d1a4a5ee6634cfd7b9.png', 'N', 'Tripay', 'MANDIRIVA', '', '&lt;p&gt;&lt;strong&gt;Internet Banking Livin Biru&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;1. Login ke internet banking Anda,&lt;br /&gt;\r\n2. Pilih menu&amp;nbsp;&lt;strong&gt;Pembayaran&lt;/strong&gt;&amp;nbsp;lalu klik menu&amp;nbsp;&lt;strong&gt;Multipayment,&lt;/strong&gt;&lt;br /&gt;\r\n3. Pilih&amp;nbsp;&lt;strong&gt;Penyedia Jasa&lt;/strong&gt;:&amp;nbsp;&lt;strong&gt;Bimasakti (70000),&lt;/strong&gt;&lt;br /&gt;\r\n4. Masukkan Nomor VA,&lt;br /&gt;\r\n5. Masukkan Nominal,&lt;br /&gt;\r\n6. Detail transaksi akan ditampilkan, pastikan data sudah sesuai,&lt;br /&gt;\r\n7. Klik tombol&amp;nbsp;&lt;strong&gt;Konfirmasi,&lt;/strong&gt;&lt;br /&gt;\r\n8. Periksa aplikasi Mandiri Online di ponsel Anda untuk menyelesaikan persetujuan transaksi,&lt;br /&gt;\r\n9. Transaksi sukses, simpan bukti transaksi Anda.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Internet Banking Livin Kuning&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;1. Login ke internet banking Anda,&lt;br /&gt;\r\n2. Pilih menu&amp;nbsp;&lt;strong&gt;Bayar&lt;/strong&gt;&amp;nbsp;lalu klik menu&amp;nbsp;&lt;strong&gt;E-Commerce,&lt;/strong&gt;&lt;br /&gt;\r\n3. Masukkan Kode&amp;nbsp;&lt;strong&gt;70000 (Bimasakti),&lt;/strong&gt;&lt;br /&gt;\r\n4. Masukkan Nomor VA,&lt;br /&gt;\r\n5. Masukkan Nominal,&lt;br /&gt;\r\n6. Detail transaksi akan ditampilkan, pastikan data sudah sesuai,&lt;br /&gt;\r\n7. Klik tombol&amp;nbsp;&lt;strong&gt;Konfirmasi,&lt;/strong&gt;&lt;br /&gt;\r\n8. Periksa aplikasi Mandiri Online di ponsel Anda untuk menyelesaikan persetujuan transaksi,&lt;br /&gt;\r\n9. Transaksi sukses lalu simpan bukti transaksi Anda.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;ATM Mandiri&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;1. Masukkan kartu ATM &amp;amp; isi PIN ATM Anda,&lt;br /&gt;\r\n2. Pilih menu&amp;nbsp;&lt;strong&gt;Bayar/Beli&lt;/strong&gt;&amp;nbsp;lalu pilih menu&amp;nbsp;&lt;strong&gt;Lainnya,&lt;/strong&gt;&lt;br /&gt;\r\n3. Pilih lagi menu&amp;nbsp;&lt;strong&gt;Lainnya,&lt;/strong&gt;&lt;br /&gt;\r\n4. Pilih menu&amp;nbsp;&lt;strong&gt;Multi Payment,&lt;/strong&gt;&lt;br /&gt;\r\n5. Masukkan kode&amp;nbsp;&lt;strong&gt;70000 (Bimasakti)&lt;/strong&gt;&amp;nbsp;lalu tekan&amp;nbsp;&lt;strong&gt;Benar,&lt;/strong&gt;&lt;br /&gt;\r\n6. Masukkan Nomor VA,&lt;br /&gt;\r\n7. Detail transaksi akan ditampilkan, pastikan data sudah sesuai,&lt;br /&gt;\r\n8. Tekan&amp;nbsp;&lt;strong&gt;1&lt;/strong&gt;&amp;nbsp;lalu tekan&amp;nbsp;&lt;strong&gt;YA,&lt;/strong&gt;&lt;br /&gt;\r\n9. Transaksi sukses, simpan bukti transaksi Anda.&lt;/p&gt;', 'On', 'Virtual Account'),
(64, 'BNI VA', '1670119302_a490f6d221a6d375e1a7.png', 'N', 'Tripay', 'BNIVA', '', '&lt;p&gt;&lt;strong&gt;Internet Banking&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;1. Login ke internet banking Bank BNI Anda,&lt;br /&gt;\r\n2. Pilih menu&amp;nbsp;&lt;strong&gt;Transaksi&lt;/strong&gt;&amp;nbsp;lalu klik menu&amp;nbsp;&lt;strong&gt;Virtual Account Billing,&lt;/strong&gt;&lt;br /&gt;\r\n3. Masukkan Nomor VA&amp;nbsp;lalu pilih&amp;nbsp;&lt;strong&gt;Rekening Debit,&lt;/strong&gt;&lt;br /&gt;\r\n4. Detail transaksi akan ditampilkan, pastikan data sudah sesuai,&lt;br /&gt;\r\n5. Masukkan respon key BNI appli 2,&lt;br /&gt;\r\n6. Transaksi sukses, simpan bukti transaksi Anda.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;ATM BNI&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;1. Masukkan kartu Anda,&lt;br /&gt;\r\n2. Pilih Bahasa,&lt;br /&gt;\r\n3. Masukkan PIN ATM Anda,&lt;br /&gt;\r\n4. Kemudian, pilih&amp;nbsp;&lt;strong&gt;Menu Lainnya,&lt;/strong&gt;&lt;br /&gt;\r\n5. Pilih&amp;nbsp;&lt;strong&gt;Transfer&lt;/strong&gt;&amp;nbsp;dan pilih jenis rekening yang akan digunakan (Contoh: Dari rekening Tabungan),&lt;br /&gt;\r\n6. Pilih&amp;nbsp;&lt;strong&gt;Virtual Account Billing&lt;/strong&gt;. Masukkan Nomor VA,&lt;br /&gt;\r\n7. Tagihan yang harus dibayarkan akan muncul pada layar konfirmasi,&lt;br /&gt;\r\n8. Konfirmasi, apabila telah selesai, lanjutkan transaksi,&lt;br /&gt;\r\n9. Transaksi Anda telah selesai.&lt;/p&gt;', 'On', 'Virtual Account'),
(72, 'Indomaret', '1668942423_049c24545e1d51666e21.jpg', 'N', 'Tripay', 'INDOMARET', '', '&lt;p&gt;&lt;strong&gt;Pembayaran via INDOMARET&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;1. Datang ke gerai Indomaret,&lt;br /&gt;\r\n2. Sampaikan ke kasir ingin melakukan pembayaran&amp;nbsp;&lt;strong&gt;Linkita&lt;/strong&gt;,&lt;br /&gt;\r\n3. Berikan kode bayar&amp;nbsp;ke kasir,&lt;br /&gt;\r\n4. Bayar sesuai jumlah yang diinfokan oleh kasir,&lt;br /&gt;\r\n5. Simpan struk bukti pembayaran Anda.&lt;/p&gt;', 'On', 'Convenience Store'),
(75, 'BCA', '1670119281_ed4301dd44b4cae090a1.png', 'Y', 'Manual', 'bca', '4330544827', '&lt;p&gt;&lt;strong&gt;WAJIB DI BACA ! :&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li&gt;&amp;nbsp;Lakukan Pembayaran sesuai dengan Nominal, Jika tidak pesanan tidak akan diproses&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;Pesanan akan otomatis diproses seetelah pembayaran&lt;/li&gt;\r\n	&lt;li&gt;&amp;nbsp;Untuk Top Up saldo jika sudah melakukan pembayaran harap kontak admin di bawah kanan website logo Customer Service&lt;/li&gt;\r\n&lt;/ol&gt;', 'On', 'Bank Transfer'),
(76, 'BSI VA', '1670119258_27b3f4ae57eccf7ef230.png', 'N', 'Tripay', 'BSIVA', 'BSIVA', '', 'On', 'Virtual Account'),
(77, 'Permata VA', '1671950746_4d78be8f04a75d811a67.png', 'N', 'Tripay', 'PERMATAVA', '', '', 'On', 'Virtual Account'),
(78, 'BRIVA IpayMu', '1674286049_c4ff7b5a3631313931ea.jpg', 'N', 'iPaymu', 'va.bri', '', '', 'Off', 'Virtual Account'),
(79, 'Mandiri', '1674356626_2790577fc61d86084c3f.jpg', 'Y', 'Manual', 'mandiri', '2134567890', '', 'Off', 'Bank Transfer'),
(80, 'OVO', '1677640684_41b96929c3e78661076d.png', 'N', 'Manual', 'OVO', '085293026542', '', 'On', 'E-Wallet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `username` varchar(55) NOT NULL,
  `wa` varchar(250) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product` varchar(250) NOT NULL,
  `price` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `zone_id` varchar(250) NOT NULL,
  `nickname` varchar(250) NOT NULL,
  `method_id` int(11) NOT NULL,
  `method` varchar(100) NOT NULL,
  `expired_time` varchar(128) DEFAULT NULL,
  `payment_status` varchar(128) DEFAULT NULL,
  `games_id` int(11) NOT NULL,
  `games` varchar(100) NOT NULL,
  `status` enum('Pending','Processing','Success','Canceled','Expired') NOT NULL,
  `ket` longtext NOT NULL,
  `payment_code` mediumtext NOT NULL,
  `provider` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_process` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `username`, `wa`, `product_id`, `product`, `price`, `quantity`, `user_id`, `zone_id`, `nickname`, `method_id`, `method`, `expired_time`, `payment_status`, `games_id`, `games`, `status`, `ket`, `payment_code`, `provider`, `date`, `date_create`, `date_process`) VALUES
(178, 'TP202301214413', 'usertesting', '098765456789', 283, '86 Diamonds', 21000, 1, '1289651039', '15472', 'Timoty^581', 78, 'BRIVA IpayMu', '1582855837', 'Paid', 1, 'Mobile Legends', 'Pending', 'SKU tidak di temukan atau Non-Aktif', '578893000182237', 'AG', '2023-01-21', '2023-01-21 23:03:30', '2023-01-21 23:03:30'),
(179, 'TP202301216666', 'usertesting', '09876543456', 283, '86 Diamonds', 21000, 1, '1289651039', '15472', 'Timoty^581', 62, 'BRI Virtual Account', '', '', 1, 'Mobile Legends', 'Canceled', 'SKU tidak di temukan atau Non-Aktif', '664043527062536', 'AG', '2023-01-21', '2023-01-21 23:12:02', '2023-01-21 23:12:02'),
(180, 'TP202301259512', '', '085320148791', 283, '86 Diamonds', 22000, 1, '1289651039', '15472', 'Timoty^581', 62, 'BRI Virtual Account', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', '247788228761951', 'AG', '2023-01-25', '2023-01-25 17:38:47', '2023-01-25 17:38:47'),
(181, 'TP202301251415', '', '085320148791', 283, '86 Diamonds', 22000, 1, '1289651039', '15472', 'Timoty^581', 62, 'BRI Virtual Account', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', '840014834244682', 'AG', '2023-01-25', '2023-01-25 17:40:49', '2023-01-25 17:40:49'),
(182, 'TP20230125794', '', '085320148791', 283, '86 Diamonds', 22000, 1, '1289651039', '15472', 'Timoty^581', 62, 'BRI Virtual Account', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', '497253211076050', 'AG', '2023-01-25', '2023-01-25 17:42:16', '2023-01-25 17:42:16'),
(183, 'TP202301267601', '', '085134567890', 284, '172 Diamonds', 45031, 1, '1289651039', '15472', 'Timoty^581', 75, 'BCA', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', '4330544827', 'DF', '2023-01-26', '2023-01-26 14:04:42', '2023-01-26 14:04:42'),
(184, 'TP202301263438', '', '085134567890', 284, '172 Diamonds', 45320, 1, '1289651039', '15472', 'Timoty^581', 75, 'BCA', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', '4330544827', 'DF', '2023-01-26', '2023-01-26 14:04:55', '2023-01-26 14:04:55'),
(185, 'TP202301262691', '', '085134567890', 284, '172 Diamonds', 45010, 1, '1289651039', '15472', 'Timoty^581', 75, 'BCA', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', '4330544827', 'DF', '2023-01-26', '2023-01-26 14:05:46', '2023-01-26 14:05:46'),
(186, 'TP202301269163', '', '085134567890', 284, '172 Diamonds', 45434, 1, '1289651039', '15472', 'Timoty^581', 75, 'BCA', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', '4330544827', 'DF', '2023-01-26', '2023-01-26 14:05:59', '2023-01-26 14:05:59'),
(187, 'TP202301266762', '', '085134567890', 284, '172 Diamonds', 45644, 1, '1289651039', '15472', 'Timoty^581', 75, 'BCA', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', '4330544827', 'DF', '2023-01-26', '2023-01-26 14:06:36', '2023-01-26 14:06:36'),
(188, 'TP202301264605', '', '085320148791', 284, '172 Diamonds', 45000, 1, '1289651039', '15472', 'Timoty^581', 63, 'Mandiri Virtual Account', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', '291694985815183', 'DF', '2023-01-26', '2023-01-26 14:08:37', '2023-01-26 14:08:37'),
(189, 'TP202301269179', 'usertesting', '085320148791', 284, '172 Diamonds', 43000, 1, '1289651039', '15472', 'Timoty^581', 63, 'Mandiri Virtual Account', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', '211414929582271', 'DF', '2023-01-26', '2023-01-26 14:13:18', '2023-01-26 14:13:18'),
(190, 'TP202301269351', 'usertesting', '085320148791', 284, '172 Diamonds', 43000, 1, '1289651039', '15472', 'Timoty^581', 63, 'Mandiri Virtual Account', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', '999646948779570', 'DF', '2023-01-26', '2023-01-26 14:13:35', '2023-01-26 14:13:35'),
(191, 'TP202301262957', 'usertesting', '085320148791', 284, '172 Diamonds', 43000, 1, '1289651039', '15472', 'Timoty^581', 63, 'Mandiri Virtual Account', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', '694465966252284', 'DF', '2023-01-26', '2023-01-26 14:13:49', '2023-01-26 14:13:49'),
(192, 'TP202301272570', 'usertesting', '085320148791', 284, '172 Diamonds', 43000, 1, '473661118', '3258', 'R5.', 63, 'Mandiri Virtual Account', '', '', 1, 'Mobile Legends', 'Canceled', 'SKU tidak di temukan atau Non-Aktif', '869799156326522', 'DF', '2023-01-27', '2023-01-27 16:07:45', '2023-01-27 16:07:45'),
(193, 'TP202301272172', '', '085320148791', 291, '5 Diamond', 1800, 1, '473661118', '3258', 'R5.', 38, 'QRIS (E-Wallet dan Banking)', '', '', 1, 'Mobile Legends', 'Success', 'Transaksi Sukses', 'https://tripay.co.id/qr/DEV-T1092776186YJTGL', 'DF', '2023-01-27', '2023-01-27 21:03:44', '2023-01-27 21:03:44'),
(195, 'TP202301273617', 'usertesting', '085320148791', 291, '5 Diamond', 2278, 1, '473661118', '3258', 'R5.', 80, 'QRIS IPaymu', '', '', 1, 'Mobile Legends', 'Success', 'Transaksi Sukses', '00020101021226670016COM.NOBUBANK.WWW01189360050300000488870214041800000314060303UMI51440014ID.CO.QRIS.WWW0215ID20200814001730303UMI520454995303360540422785802ID5913Dadan Abdilah6008Denpasar61051581162730114012700000750690520202301272129053779100620202301272129053779100703A016304FCE1', 'DF', '2023-01-27', '2023-01-27 21:29:05', '2023-01-27 21:29:05'),
(196, 'TP202301284648', 'usertesting', '085320148791', 291, '5 Diamond', 1800, 1, '95821636', '2506', 'iyaaaa♡', 38, 'QRIS (E-Wallet dan Banking)', '', '', 1, 'Mobile Legends', 'Processing', 'SKU tidak di temukan atau Non-Aktif', 'https://tripay.co.id/qr/DEV-T1092776305YN0UQ', 'DF', '2023-01-28', '2023-01-28 16:42:57', '2023-01-28 16:42:57'),
(197, 'TP202301288922', 'usertesting', '085320148791', 291, '5 Diamond', 1000, 1, '95821636', '2506', 'iyaaaa♡', 38, 'QRIS (E-Wallet dan Banking)', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', 'https://tripay.co.id/qr/DEV-T1092776310AG5GO', 'AG', '2023-01-28', '2023-01-28 16:49:21', '2023-01-28 16:49:21'),
(198, 'TP202301289065', 'usertesting', '085320148791', 287, '50 Diamond', 1000, 1, '6211264147', '1', 'ArnasAr1214P', 38, 'QRIS (E-Wallet dan Banking)', '', '', 2, 'Free Fire', 'Pending', 'invalid key: illegal base32 data at input byte 2', 'https://tripay.co.id/qr/DEV-T1092776318PONC1', 'AG', '2023-01-28', '2023-01-28 17:24:08', '2023-01-28 17:24:08'),
(199, 'TP202302063613', '', '085320148791', 291, '5 Diamond', 1000, 1, '1289651039', '15472', 'Timoty^581', 38, 'QRIS (E-Wallet dan Banking)', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', 'https://tripay.co.id/qr/DEV-T1092777763GJWGU', 'AG', '2023-02-06', '2023-02-06 19:03:59', '2023-02-06 19:03:59'),
(200, 'TP202302063069', '', '085320148791', 291, '5 Diamond', 1000, 1, '1289651039', '15472', 'Timoty^581', 38, 'QRIS (E-Wallet dan Banking)', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', 'https://tripay.co.id/qr/DEV-T1092777764DNNG7', 'AG', '2023-02-06', '2023-02-06 19:11:47', '2023-02-06 19:11:47'),
(201, 'TP202302069626', '', '085320148791', 291, '5 Diamond', 1000, 1, '1289651039', '15472', 'Timoty^581', 38, 'QRIS (E-Wallet dan Banking)', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', 'https://tripay.co.id/qr/DEV-T10927777656Z7QG', 'AG', '2023-02-06', '2023-02-06 19:12:15', '2023-02-06 19:12:15'),
(202, 'TP202302068304', '', '085320148791', 291, '5 Diamond', 1000, 1, '1289651039', '15472', 'Timoty^581', 38, 'QRIS (E-Wallet dan Banking)', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', 'https://tripay.co.id/qr/DEV-T1092777766ILOZQ', 'AG', '2023-02-06', '2023-02-06 19:16:40', '2023-02-06 19:16:40'),
(203, 'TP20230206955', '', '085320148791', 291, '5 Diamond', 1000, 1, '1289651039', '15472', 'Timoty^581', 38, 'QRIS (E-Wallet dan Banking)', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', 'https://tripay.co.id/qr/DEV-T1092777767Z0XYT', 'AG', '2023-02-06', '2023-02-06 19:17:11', '2023-02-06 19:17:11'),
(204, 'TP202302066009', '', '085320148791', 291, '5 Diamond', 1000, 1, '1289651039', '15472', 'Timoty^581', 38, 'QRIS (E-Wallet dan Banking)', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', 'https://tripay.co.id/qr/DEV-T1092777768PPWOQ', 'AG', '2023-02-06', '2023-02-06 19:18:47', '2023-02-06 19:18:47'),
(205, 'TP202302069746', '', '098765435456', 283, '86 Diamonds', 22000, 1, '1289651039', '15472', 'Timoty^581', 38, 'QRIS (E-Wallet dan Banking)', '', '', 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', 'https://tripay.co.id/qr/DEV-T1092777769WXKKJ', 'AG', '2023-02-06', '2023-02-06 19:19:44', '2023-02-06 19:19:44'),
(206, 'TP202302085413', 'usertesting', '085320148791', 291, '5 Diamond', 1000, 1, '128965103', '15472', 'ID Akun tidak ditemukan', 38, 'QRIS (E-Wallet dan Banking)', '', '', 1, 'Mobile Legends', 'Expired', 'Menunggu Pembayaran', 'https://tripay.co.id/qr/DEV-T1092778151N66BB', 'AG', '2023-02-08', '2023-02-08 17:48:56', '2023-02-08 17:48:56'),
(207, 'TP202302124259', 'usertesting', '0986578967', 291, '5 Diamond', 1000, 1, '1289651039', '15472', 'Timoty^581', 10001, 'Saldo Akun', '', '', 1, 'Mobile Legends', 'Processing', 'IP Not Allowed, IP=36.73.32.50', 'Saldo Akun', 'AG', '2023-02-12', '2023-02-12 13:37:27', '2023-02-12 13:37:27'),
(208, 'TP202303019008', '', '085293026542', 283, '86 Diamonds', 22000, 1, '920643609', '12646', 'l a z y', 80, 'OVO', NULL, NULL, 1, 'Mobile Legends', 'Pending', 'Menunggu Pembayaran', '085293026542', 'AG', '2023-03-01', '2023-03-01 09:06:34', '2023-03-01 09:06:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `method_id` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `reseller_price` bigint(20) NOT NULL,
  `vip_price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `price`
--

INSERT INTO `price` (`id`, `product_id`, `method_id`, `price`, `reseller_price`, `vip_price`) VALUES
(1, 16, 20, 10000, 0, 0),
(2, 2, 10001, 1000, 0, 0),
(3, 41, 10001, 67500, 0, 0),
(4, 42, 10001, 134000, 0, 0),
(5, 45, 10001, 335000, 0, 0),
(6, 43, 1, 204000, 0, 0),
(7, 44, 10001, 268000, 0, 0),
(8, 35, 10001, 92400, 0, 0),
(9, 34, 10001, 65520, 0, 0),
(10, 33, 10001, 55440, 0, 0),
(11, 32, 10001, 46200, 0, 0),
(12, 31, 10001, 36960, 0, 0),
(13, 30, 10001, 27720, 0, 0),
(14, 29, 10001, 18480, 0, 0),
(15, 28, 10001, 13440, 0, 0),
(16, 27, 10001, 9240, 0, 0),
(17, 26, 10001, 6720, 0, 0),
(18, 25, 10001, 2800, 0, 0),
(19, 24, 10001, 840, 0, 0),
(20, 41, 2, 7000, 0, 0),
(21, 68, 2, 66500, 0, 0),
(22, 68, 1, 66500, 0, 0),
(23, 68, 10001, 64500, 0, 0),
(24, 67, 10001, 37500, 0, 0),
(25, 66, 10001, 30000, 0, 0),
(26, 65, 10001, 22500, 0, 0),
(27, 64, 10001, 15000, 0, 0),
(28, 63, 10001, 7500, 0, 0),
(29, 79, 20, 25000, 0, 0),
(30, 79, 19, 25000, 0, 0),
(31, 79, 18, 25000, 0, 0),
(32, 79, 17, 25000, 0, 0),
(33, 79, 11, 21500, 0, 0),
(34, 79, 10, 25000, 0, 0),
(35, 79, 9, 25000, 0, 0),
(36, 79, 8, 25000, 0, 0),
(37, 79, 5, 25000, 0, 0),
(38, 79, 4, 25000, 0, 0),
(39, 80, 11, 1000, 0, 0),
(40, 80, 10, 1000, 0, 0),
(41, 80, 9, 1000, 0, 0),
(42, 80, 8, 1000, 0, 0),
(43, 80, 5, 1000, 0, 0),
(44, 80, 4, 1000, 0, 0),
(45, 80, 10001, 1000, 0, 0),
(46, 79, 37, 21300, 0, 0),
(47, 79, 36, 21300, 0, 0),
(48, 79, 35, 26600, 0, 0),
(49, 79, 34, 24100, 0, 0),
(50, 79, 33, 26600, 0, 0),
(51, 79, 32, 24900, 0, 0),
(52, 79, 31, 24900, 0, 0),
(53, 79, 30, 24900, 0, 0),
(54, 79, 29, 24900, 0, 0),
(55, 79, 28, 24900, 0, 0),
(56, 79, 27, 24900, 0, 0),
(57, 79, 26, 24900, 0, 0),
(58, 79, 25, 24900, 0, 0),
(59, 79, 24, 24900, 0, 0),
(60, 79, 23, 24900, 0, 0),
(61, 79, 10001, 20600, 0, 0),
(62, 79, 53, 26600, 0, 0),
(63, 79, 52, 26600, 0, 0),
(64, 79, 51, 24100, 0, 0),
(65, 79, 50, 24900, 0, 0),
(66, 79, 49, 24900, 0, 0),
(67, 79, 48, 24900, 0, 0),
(68, 79, 47, 24900, 0, 0),
(69, 79, 46, 24900, 0, 0),
(70, 79, 45, 24900, 0, 0),
(71, 79, 44, 24900, 0, 0),
(72, 79, 43, 24900, 0, 0),
(73, 79, 42, 24900, 0, 0),
(74, 79, 41, 24900, 0, 0),
(75, 79, 40, 20600, 0, 0),
(76, 79, 39, 21300, 0, 0),
(77, 81, 53, 46900, 0, 0),
(78, 81, 52, 46900, 0, 0),
(79, 81, 51, 44400, 0, 0),
(80, 81, 50, 45100, 0, 0),
(81, 81, 49, 45100, 0, 0),
(82, 81, 48, 45100, 0, 0),
(83, 81, 47, 45100, 0, 0),
(84, 81, 46, 45100, 0, 0),
(85, 81, 45, 45100, 0, 0),
(86, 81, 44, 45100, 0, 0),
(87, 81, 43, 45100, 0, 0),
(88, 81, 42, 45100, 0, 0),
(89, 81, 41, 45100, 0, 0),
(90, 81, 40, 40900, 0, 0),
(91, 81, 39, 42100, 0, 0),
(92, 81, 38, 40900, 0, 0),
(93, 79, 38, 20600, 0, 0),
(94, 82, 53, 67400, 0, 0),
(95, 82, 52, 67400, 0, 0),
(96, 82, 51, 64900, 0, 0),
(97, 82, 50, 65700, 0, 0),
(98, 82, 49, 65700, 0, 0),
(99, 82, 48, 65700, 0, 0),
(100, 82, 47, 65700, 0, 0),
(101, 82, 46, 65700, 0, 0),
(102, 82, 45, 65700, 0, 0),
(103, 82, 44, 65700, 0, 0),
(104, 82, 43, 65700, 0, 0),
(105, 82, 42, 65700, 0, 0),
(106, 82, 41, 65700, 0, 0),
(107, 82, 40, 61400, 0, 0),
(108, 82, 39, 63300, 0, 0),
(109, 82, 38, 61400, 0, 0),
(110, 83, 53, 87700, 0, 0),
(111, 83, 52, 87700, 0, 0),
(112, 83, 51, 85200, 0, 0),
(113, 83, 50, 85900, 0, 0),
(114, 83, 49, 85900, 0, 0),
(115, 83, 48, 85900, 0, 0),
(116, 83, 47, 85900, 0, 0),
(117, 83, 46, 85900, 0, 0),
(118, 83, 45, 85900, 0, 0),
(119, 83, 44, 85900, 0, 0),
(120, 83, 43, 85900, 0, 0),
(121, 83, 42, 85900, 0, 0),
(122, 83, 41, 85900, 0, 0),
(123, 83, 40, 81700, 0, 0),
(124, 83, 39, 84100, 0, 0),
(125, 83, 38, 81700, 0, 0),
(126, 84, 53, 108300, 0, 0),
(127, 84, 52, 108300, 0, 0),
(128, 84, 51, 105800, 0, 0),
(129, 84, 50, 106500, 0, 0),
(130, 84, 49, 106500, 0, 0),
(131, 84, 48, 106500, 0, 0),
(132, 84, 47, 106500, 0, 0),
(133, 84, 46, 106500, 0, 0),
(134, 84, 45, 106500, 0, 0),
(135, 84, 44, 106500, 0, 0),
(136, 84, 43, 106500, 0, 0),
(137, 84, 42, 106500, 0, 0),
(138, 84, 41, 106500, 0, 0),
(139, 84, 40, 102300, 0, 0),
(140, 84, 39, 105300, 0, 0),
(141, 84, 38, 102300, 0, 0),
(142, 85, 53, 128800, 0, 0),
(143, 85, 52, 128800, 0, 0),
(144, 85, 51, 126300, 0, 0),
(145, 85, 50, 127100, 0, 0),
(146, 85, 49, 127100, 0, 0),
(147, 85, 48, 127100, 0, 0),
(148, 85, 47, 127100, 0, 0),
(149, 85, 46, 127100, 0, 0),
(150, 85, 45, 127100, 0, 0),
(151, 85, 44, 127100, 0, 0),
(152, 85, 43, 127100, 0, 0),
(153, 85, 42, 127100, 0, 0),
(154, 85, 41, 127100, 0, 0),
(155, 85, 40, 122800, 0, 0),
(156, 85, 39, 126500, 0, 0),
(157, 85, 38, 122800, 0, 0),
(158, 86, 53, 149400, 0, 0),
(159, 86, 52, 149400, 0, 0),
(160, 86, 51, 146700, 0, 0),
(161, 86, 50, 147600, 0, 0),
(162, 86, 49, 147600, 0, 0),
(163, 86, 48, 147600, 0, 0),
(164, 86, 47, 147600, 0, 0),
(165, 86, 46, 147600, 0, 0),
(166, 86, 45, 147600, 0, 0),
(167, 86, 44, 147600, 0, 0),
(168, 86, 43, 147600, 0, 0),
(169, 86, 42, 147600, 0, 0),
(170, 86, 41, 147600, 0, 0),
(171, 86, 40, 143400, 0, 0),
(172, 86, 39, 147700, 0, 0),
(173, 86, 38, 143400, 0, 0),
(174, 87, 53, 169900, 0, 0),
(175, 87, 52, 169900, 0, 0),
(176, 87, 51, 167400, 0, 0),
(177, 87, 50, 168200, 0, 0),
(178, 87, 49, 168200, 0, 0),
(179, 87, 48, 168200, 0, 0),
(180, 87, 47, 168200, 0, 0),
(181, 87, 46, 168200, 0, 0),
(182, 87, 45, 168200, 0, 0),
(183, 87, 44, 168200, 0, 0),
(184, 87, 43, 168200, 0, 0),
(185, 87, 42, 168200, 0, 0),
(186, 87, 41, 168200, 0, 0),
(187, 87, 40, 164000, 0, 0),
(188, 87, 39, 168900, 0, 0),
(189, 87, 38, 164000, 0, 0),
(190, 88, 53, 190500, 0, 0),
(191, 88, 52, 190500, 0, 0),
(192, 88, 51, 188000, 0, 0),
(193, 88, 50, 188800, 0, 0),
(194, 88, 49, 188800, 0, 0),
(195, 88, 48, 188800, 0, 0),
(196, 88, 47, 188800, 0, 0),
(197, 88, 46, 188800, 0, 0),
(198, 88, 45, 188800, 0, 0),
(199, 88, 44, 188800, 0, 0),
(200, 88, 43, 188800, 0, 0),
(201, 88, 42, 188800, 0, 0),
(202, 88, 41, 188800, 0, 0),
(203, 88, 40, 184500, 0, 0),
(204, 88, 39, 190000, 0, 0),
(205, 88, 38, 184500, 0, 0),
(206, 89, 53, 210800, 0, 0),
(207, 89, 52, 210800, 0, 0),
(208, 89, 51, 208300, 0, 0),
(209, 89, 50, 209000, 0, 0),
(210, 89, 49, 209000, 0, 0),
(211, 89, 48, 209000, 0, 0),
(212, 89, 47, 209000, 0, 0),
(213, 89, 46, 209000, 0, 0),
(214, 89, 45, 209000, 0, 0),
(215, 89, 44, 209000, 0, 0),
(216, 89, 43, 209000, 0, 0),
(217, 89, 42, 209000, 0, 0),
(218, 89, 41, 209000, 0, 0),
(219, 89, 40, 204800, 0, 0),
(220, 89, 39, 210900, 0, 0),
(221, 89, 38, 204800, 0, 0),
(222, 90, 53, 231300, 0, 0),
(223, 90, 52, 231300, 0, 0),
(224, 90, 51, 228800, 0, 0),
(225, 90, 50, 229600, 0, 0),
(226, 90, 49, 229600, 0, 0),
(227, 90, 48, 229600, 0, 0),
(228, 90, 47, 229600, 0, 0),
(229, 90, 46, 229600, 0, 0),
(230, 90, 45, 229600, 0, 0),
(231, 90, 44, 229600, 0, 0),
(232, 90, 43, 229600, 0, 0),
(233, 90, 42, 229600, 0, 0),
(234, 90, 41, 229600, 0, 0),
(235, 90, 40, 225300, 0, 0),
(236, 90, 39, 232100, 0, 0),
(237, 90, 38, 225300, 0, 0),
(238, 91, 53, 251600, 0, 0),
(239, 91, 52, 251600, 0, 0),
(240, 91, 51, 249100, 0, 0),
(241, 91, 50, 249800, 0, 0),
(242, 91, 49, 249800, 0, 0),
(243, 91, 48, 249800, 0, 0),
(244, 91, 47, 249800, 0, 0),
(245, 91, 46, 249800, 0, 0),
(246, 91, 45, 249800, 0, 0),
(247, 91, 44, 249800, 0, 0),
(248, 91, 43, 249800, 0, 0),
(249, 91, 42, 249800, 0, 0),
(250, 91, 41, 249800, 0, 0),
(251, 91, 40, 245600, 0, 0),
(252, 91, 39, 252900, 0, 0),
(253, 91, 38, 245600, 0, 0),
(254, 92, 53, 292700, 0, 0),
(255, 92, 52, 292700, 0, 0),
(256, 92, 51, 290200, 0, 0),
(257, 92, 50, 290900, 0, 0),
(258, 92, 49, 290900, 0, 0),
(259, 92, 48, 290900, 0, 0),
(260, 92, 47, 290900, 0, 0),
(261, 92, 46, 290900, 0, 0),
(262, 92, 45, 290900, 0, 0),
(263, 92, 44, 290900, 0, 0),
(264, 92, 43, 290900, 0, 0),
(265, 92, 42, 290900, 0, 0),
(266, 92, 41, 290900, 0, 0),
(267, 92, 40, 286700, 0, 0),
(268, 92, 39, 295300, 0, 0),
(269, 92, 38, 286700, 0, 0),
(270, 93, 53, 333800, 0, 0),
(271, 93, 52, 333800, 0, 0),
(272, 93, 51, 331300, 0, 0),
(273, 93, 50, 332100, 0, 0),
(274, 93, 49, 332100, 0, 0),
(275, 93, 48, 332100, 0, 0),
(276, 93, 47, 332100, 0, 0),
(277, 93, 46, 332100, 0, 0),
(278, 93, 45, 332100, 0, 0),
(279, 93, 44, 332100, 0, 0),
(280, 93, 43, 332100, 0, 0),
(281, 93, 42, 332100, 0, 0),
(282, 93, 41, 332100, 0, 0),
(283, 93, 40, 327800, 0, 0),
(284, 93, 39, 337600, 0, 0),
(285, 93, 38, 327800, 0, 0),
(286, 94, 53, 498300, 0, 0),
(287, 94, 52, 498300, 0, 0),
(288, 94, 51, 495800, 0, 0),
(289, 94, 50, 496600, 0, 0),
(290, 94, 49, 496600, 0, 0),
(291, 94, 48, 496600, 0, 0),
(292, 94, 47, 496600, 0, 0),
(293, 94, 46, 496600, 0, 0),
(294, 94, 45, 496600, 0, 0),
(295, 94, 44, 496600, 0, 0),
(296, 94, 43, 496600, 0, 0),
(297, 94, 42, 496600, 0, 0),
(298, 94, 41, 496600, 0, 0),
(299, 94, 40, 492300, 0, 0),
(300, 94, 39, 507100, 0, 0),
(301, 94, 38, 492300, 0, 0),
(302, 95, 53, 656200, 0, 0),
(303, 95, 52, 656200, 0, 0),
(304, 95, 51, 656200, 0, 0),
(305, 95, 50, 656200, 0, 0),
(306, 95, 49, 656200, 0, 0),
(307, 95, 48, 656200, 0, 0),
(308, 95, 47, 656200, 0, 0),
(309, 95, 46, 656200, 0, 0),
(310, 95, 45, 656200, 0, 0),
(311, 95, 44, 656200, 0, 0),
(312, 95, 43, 656200, 0, 0),
(313, 95, 42, 656200, 0, 0),
(314, 95, 41, 656200, 0, 0),
(315, 95, 40, 656200, 0, 0),
(316, 95, 39, 675900, 0, 0),
(317, 95, 38, 656200, 0, 0),
(318, 96, 53, 697000, 0, 0),
(319, 96, 52, 697000, 0, 0),
(320, 96, 51, 697000, 0, 0),
(321, 96, 49, 697000, 0, 0),
(322, 96, 48, 697000, 0, 0),
(323, 96, 47, 697000, 0, 0),
(324, 96, 46, 697000, 0, 0),
(325, 96, 45, 697000, 0, 0),
(326, 96, 44, 697000, 0, 0),
(327, 96, 43, 697000, 0, 0),
(328, 96, 42, 697000, 0, 0),
(329, 96, 41, 697000, 0, 0),
(330, 96, 40, 697000, 0, 0),
(331, 96, 39, 717900, 0, 0),
(332, 96, 38, 697000, 0, 0),
(333, 96, 50, 697000, 0, 0),
(334, 97, 53, 821300, 0, 0),
(335, 97, 52, 821300, 0, 0),
(336, 97, 51, 821300, 0, 0),
(337, 97, 50, 821300, 0, 0),
(338, 97, 49, 821300, 0, 0),
(339, 97, 48, 821300, 0, 0),
(340, 97, 47, 821300, 0, 0),
(341, 97, 46, 821300, 0, 0),
(342, 97, 45, 821300, 0, 0),
(343, 97, 44, 821300, 0, 0),
(344, 97, 43, 821300, 0, 0),
(345, 97, 42, 821300, 0, 0),
(346, 97, 41, 821300, 0, 0),
(347, 97, 40, 821300, 0, 0),
(348, 97, 39, 846000, 0, 0),
(349, 97, 38, 821300, 0, 0),
(350, 98, 53, 985200, 0, 0),
(351, 98, 52, 985200, 0, 0),
(352, 98, 51, 985200, 0, 0),
(353, 98, 50, 985200, 0, 0),
(354, 98, 49, 985200, 0, 0),
(355, 98, 48, 985200, 0, 0),
(356, 98, 47, 985200, 0, 0),
(357, 98, 46, 985200, 0, 0),
(358, 98, 45, 985200, 0, 0),
(359, 98, 44, 985200, 0, 0),
(360, 98, 43, 985200, 0, 0),
(361, 98, 42, 985200, 0, 0),
(362, 98, 41, 985200, 0, 0),
(363, 98, 40, 985200, 0, 0),
(364, 98, 39, 1014800, 0, 0),
(365, 98, 38, 985200, 0, 0),
(366, 99, 53, 1232600, 0, 0),
(367, 99, 52, 1232600, 0, 0),
(368, 99, 51, 1232600, 0, 0),
(369, 99, 50, 1232600, 0, 0),
(370, 99, 49, 1232600, 0, 0),
(371, 99, 48, 1232600, 0, 0),
(372, 99, 47, 1232600, 0, 0),
(373, 99, 46, 1232600, 0, 0),
(374, 99, 45, 1232600, 0, 0),
(375, 99, 44, 1232600, 0, 0),
(376, 99, 43, 1232600, 0, 0),
(377, 99, 42, 1232600, 0, 0),
(378, 99, 41, 1232600, 0, 0),
(379, 99, 40, 1232600, 0, 0),
(380, 99, 39, 1269600, 0, 0),
(381, 99, 38, 1232600, 0, 0),
(382, 100, 53, 1396500, 0, 0),
(383, 100, 52, 1396500, 0, 0),
(384, 100, 51, 1396500, 0, 0),
(385, 100, 50, 1396500, 0, 0),
(386, 100, 49, 1396500, 0, 0),
(387, 100, 48, 1396500, 0, 0),
(388, 100, 47, 1396500, 0, 0),
(389, 100, 46, 1396500, 0, 0),
(390, 100, 45, 1396500, 0, 0),
(391, 100, 44, 1396500, 0, 0),
(392, 100, 43, 1396500, 0, 0),
(393, 100, 42, 1396500, 0, 0),
(394, 100, 41, 1396500, 0, 0),
(395, 100, 40, 1396500, 0, 0),
(396, 100, 39, 1438400, 0, 0),
(397, 100, 38, 1396500, 0, 0),
(398, 101, 53, 1724900, 0, 0),
(399, 101, 52, 1724900, 0, 0),
(400, 101, 51, 1724900, 0, 0),
(401, 101, 50, 1724900, 0, 0),
(402, 101, 49, 1724900, 0, 0),
(403, 101, 48, 1724900, 0, 0),
(404, 101, 47, 1724900, 0, 0),
(405, 101, 46, 1724900, 0, 0),
(406, 101, 45, 1724900, 0, 0),
(407, 101, 44, 1724900, 0, 0),
(408, 101, 43, 1724900, 0, 0),
(409, 101, 42, 1724900, 0, 0),
(410, 101, 41, 1724900, 0, 0),
(411, 101, 40, 1724900, 0, 0),
(412, 101, 39, 1776600, 0, 0),
(413, 101, 38, 1724900, 0, 0),
(414, 102, 53, 2050000, 0, 0),
(415, 102, 52, 2050000, 0, 0),
(416, 102, 51, 2050000, 0, 0),
(417, 102, 50, 2050000, 0, 0),
(418, 102, 49, 2050000, 0, 0),
(419, 102, 48, 2050000, 0, 0),
(420, 102, 47, 2050000, 0, 0),
(421, 102, 46, 2050000, 0, 0),
(422, 102, 45, 2050000, 0, 0),
(423, 102, 44, 2050000, 0, 0),
(424, 102, 43, 2050000, 0, 0),
(425, 102, 42, 2050000, 0, 0),
(426, 102, 41, 2050000, 0, 0),
(427, 102, 40, 2050000, 0, 0),
(428, 102, 39, 2111500, 0, 0),
(429, 102, 38, 2050000, 0, 0),
(430, 168, 72, 21000, 0, 0),
(431, 168, 64, 21000, 0, 0),
(432, 168, 63, 21000, 0, 0),
(433, 168, 61, 21000, 0, 0),
(434, 168, 60, 23500, 0, 0),
(435, 168, 38, 21000, 0, 0),
(436, 169, 72, 44500, 0, 0),
(437, 169, 64, 41000, 0, 0),
(438, 169, 63, 41000, 0, 0),
(439, 169, 61, 41000, 0, 0),
(440, 169, 60, 41000, 0, 0),
(441, 169, 38, 41000, 0, 0),
(442, 171, 72, 62000, 0, 0),
(443, 171, 64, 62000, 0, 0),
(444, 171, 63, 62000, 0, 0),
(445, 171, 61, 62000, 0, 0),
(446, 171, 60, 62000, 0, 0),
(447, 171, 38, 62000, 0, 0),
(448, 172, 72, 83000, 0, 0),
(449, 172, 64, 83000, 0, 0),
(450, 172, 63, 83000, 0, 0),
(451, 172, 61, 83000, 0, 0),
(452, 172, 60, 83000, 0, 0),
(453, 172, 38, 83000, 0, 0),
(454, 173, 72, 103000, 0, 0),
(455, 173, 64, 103000, 0, 0),
(456, 173, 63, 103000, 0, 0),
(457, 173, 61, 103000, 0, 0),
(458, 173, 60, 103000, 0, 0),
(459, 173, 38, 103000, 0, 0),
(460, 174, 72, 125000, 0, 0),
(461, 174, 64, 125000, 0, 0),
(462, 174, 63, 125000, 0, 0),
(463, 174, 61, 125000, 0, 0),
(464, 174, 60, 125000, 0, 0),
(465, 174, 38, 125000, 0, 0),
(466, 175, 72, 146000, 0, 0),
(467, 175, 64, 146000, 0, 0),
(468, 175, 63, 146000, 0, 0),
(469, 175, 61, 146000, 0, 0),
(470, 175, 60, 146000, 0, 0),
(471, 175, 38, 146000, 0, 0),
(472, 176, 72, 167000, 0, 0),
(473, 176, 64, 167000, 0, 0),
(474, 176, 63, 167000, 0, 0),
(475, 176, 61, 167000, 0, 0),
(476, 176, 60, 167000, 0, 0),
(477, 176, 38, 167000, 0, 0),
(478, 177, 72, 188000, 0, 0),
(479, 177, 64, 188000, 0, 0),
(480, 177, 63, 188000, 0, 0),
(481, 177, 61, 188000, 0, 0),
(482, 177, 60, 188000, 0, 0),
(483, 177, 38, 188000, 0, 0),
(484, 178, 72, 207000, 0, 0),
(485, 178, 64, 207000, 0, 0),
(486, 178, 63, 207000, 0, 0),
(487, 178, 61, 207000, 0, 0),
(488, 178, 60, 207000, 0, 0),
(489, 178, 38, 207000, 0, 0),
(490, 179, 72, 229000, 0, 0),
(491, 179, 64, 229000, 0, 0),
(492, 179, 63, 229000, 0, 0),
(493, 179, 61, 229000, 0, 0),
(494, 179, 60, 229000, 0, 0),
(495, 179, 38, 229000, 0, 0),
(496, 180, 72, 250000, 0, 0),
(497, 180, 64, 250000, 0, 0),
(498, 180, 63, 250000, 0, 0),
(499, 180, 61, 250000, 0, 0),
(500, 180, 60, 252500, 0, 0),
(501, 180, 38, 250000, 0, 0),
(502, 181, 72, 292000, 0, 0),
(503, 181, 64, 292000, 0, 0),
(504, 181, 63, 292000, 0, 0),
(505, 181, 61, 294500, 0, 0),
(506, 181, 60, 292000, 0, 0),
(507, 181, 38, 292000, 0, 0),
(508, 182, 72, 332000, 0, 0),
(509, 182, 64, 332000, 0, 0),
(510, 182, 63, 332000, 0, 0),
(511, 182, 61, 332000, 0, 0),
(512, 182, 60, 334500, 0, 0),
(513, 182, 38, 332000, 0, 0),
(514, 168, 76, 21000, 0, 0),
(515, 168, 62, 21000, 0, 0),
(516, 169, 76, 41000, 0, 0),
(517, 169, 62, 41000, 0, 0),
(518, 171, 76, 62000, 0, 0),
(519, 171, 62, 62000, 0, 0),
(520, 172, 76, 83000, 0, 0),
(521, 172, 62, 83000, 0, 0),
(522, 173, 76, 103000, 0, 0),
(523, 173, 62, 103000, 0, 0),
(524, 174, 76, 125000, 0, 0),
(525, 174, 62, 125000, 0, 0),
(526, 175, 76, 146000, 0, 0),
(527, 175, 62, 146000, 0, 0),
(528, 176, 76, 167000, 0, 0),
(529, 176, 62, 167000, 0, 0),
(530, 177, 76, 188000, 0, 0),
(531, 177, 62, 188000, 0, 0),
(532, 178, 76, 207000, 0, 0),
(533, 178, 62, 207000, 0, 0),
(534, 179, 76, 229000, 0, 0),
(535, 179, 62, 229000, 0, 0),
(536, 180, 76, 250000, 0, 0),
(537, 180, 66, 0, 0, 0),
(538, 180, 62, 250000, 0, 0),
(539, 181, 76, 292000, 0, 0),
(540, 181, 62, 292000, 0, 0),
(541, 182, 76, 332000, 0, 0),
(542, 182, 62, 332000, 0, 0),
(543, 183, 76, 490000, 0, 0),
(544, 183, 72, 490000, 0, 0),
(545, 183, 64, 490000, 0, 0),
(546, 183, 63, 490000, 0, 0),
(547, 183, 62, 490000, 0, 0),
(548, 183, 38, 490000, 0, 0),
(549, 184, 76, 820000, 0, 0),
(550, 184, 72, 820000, 0, 0),
(551, 184, 64, 820000, 0, 0),
(552, 184, 63, 820000, 0, 0),
(553, 184, 62, 820000, 0, 0),
(554, 184, 38, 820000, 0, 0),
(555, 185, 76, 1015000, 0, 0),
(556, 185, 72, 1015000, 0, 0),
(557, 185, 64, 1015000, 0, 0),
(558, 185, 63, 1015000, 0, 0),
(559, 185, 62, 1015000, 0, 0),
(560, 185, 38, 1015000, 0, 0),
(561, 186, 76, 1230000, 0, 0),
(562, 186, 72, 1230000, 0, 0),
(563, 186, 64, 1230000, 0, 0),
(564, 186, 63, 1230000, 0, 0),
(565, 186, 62, 1230000, 0, 0),
(566, 186, 38, 1230000, 0, 0),
(567, 187, 76, 1390000, 0, 0),
(568, 187, 72, 1390000, 0, 0),
(569, 187, 64, 1390000, 0, 0),
(570, 187, 63, 1390000, 0, 0),
(571, 187, 62, 1390000, 0, 0),
(572, 187, 38, 1390000, 0, 0),
(573, 188, 76, 1700000, 0, 0),
(574, 188, 72, 1700000, 0, 0),
(575, 188, 64, 1700000, 0, 0),
(576, 188, 63, 1700000, 0, 0),
(577, 188, 62, 1700000, 0, 0),
(578, 188, 38, 1700000, 0, 0),
(579, 189, 76, 13000, 0, 0),
(580, 189, 72, 13000, 0, 0),
(581, 189, 64, 13000, 0, 0),
(582, 189, 63, 13000, 0, 0),
(583, 189, 62, 13000, 0, 0),
(584, 189, 38, 13000, 0, 0),
(585, 190, 76, 43000, 0, 0),
(586, 190, 72, 43000, 0, 0),
(587, 190, 64, 43000, 0, 0),
(588, 190, 63, 43000, 0, 0),
(589, 190, 62, 43000, 0, 0),
(590, 190, 38, 43000, 0, 0),
(591, 191, 76, 68000, 0, 0),
(592, 191, 72, 68000, 0, 0),
(593, 191, 64, 68000, 0, 0),
(594, 191, 63, 68000, 0, 0),
(595, 191, 62, 68000, 0, 0),
(596, 191, 38, 68000, 0, 0),
(597, 192, 76, 133000, 0, 0),
(598, 192, 72, 133000, 0, 0),
(599, 192, 64, 133000, 0, 0),
(600, 192, 63, 133000, 0, 0),
(601, 192, 62, 133000, 0, 0),
(602, 192, 38, 133000, 0, 0),
(603, 193, 76, 260000, 0, 0),
(604, 193, 72, 260000, 0, 0),
(605, 193, 64, 260000, 0, 0),
(606, 193, 63, 260000, 0, 0),
(607, 193, 62, 260000, 0, 0),
(608, 193, 38, 260000, 0, 0),
(609, 194, 76, 420000, 0, 0),
(610, 194, 72, 420000, 0, 0),
(611, 194, 64, 420000, 0, 0),
(612, 194, 63, 420000, 0, 0),
(613, 194, 62, 420000, 0, 0),
(614, 194, 38, 420000, 0, 0),
(615, 195, 76, 650000, 0, 0),
(616, 195, 72, 650000, 0, 0),
(617, 195, 64, 650000, 0, 0),
(618, 195, 63, 650000, 0, 0),
(619, 195, 62, 650000, 0, 0),
(620, 195, 38, 650000, 0, 0),
(621, 196, 76, 1300000, 0, 0),
(622, 196, 72, 1300000, 0, 0),
(623, 196, 64, 1300000, 0, 0),
(624, 196, 63, 1300000, 0, 0),
(625, 196, 62, 1300000, 0, 0),
(626, 196, 38, 1300000, 0, 0),
(627, 197, 76, 32000, 0, 0),
(628, 197, 72, 32000, 0, 0),
(629, 197, 64, 32000, 0, 0),
(630, 197, 63, 32000, 0, 0),
(631, 197, 62, 32000, 0, 0),
(632, 197, 38, 32000, 0, 0),
(633, 198, 76, 64000, 0, 0),
(634, 198, 72, 64000, 0, 0),
(635, 198, 64, 64000, 0, 0),
(636, 198, 63, 64000, 0, 0),
(637, 198, 62, 64000, 0, 0),
(638, 198, 38, 64000, 0, 0),
(639, 199, 76, 114000, 0, 0),
(640, 199, 72, 114000, 0, 0),
(641, 199, 64, 114000, 0, 0),
(642, 199, 63, 114000, 0, 0),
(643, 199, 62, 114000, 0, 0),
(644, 199, 61, 11000, 0, 0),
(645, 199, 38, 114000, 0, 0),
(646, 200, 76, 130000, 0, 0),
(647, 200, 72, 130000, 0, 0),
(648, 200, 64, 130000, 0, 0),
(649, 200, 63, 130000, 0, 0),
(650, 200, 62, 130000, 0, 0),
(651, 200, 38, 130000, 0, 0),
(652, 201, 76, 164000, 0, 0),
(653, 201, 72, 164000, 0, 0),
(654, 201, 64, 164000, 0, 0),
(655, 201, 63, 164000, 0, 0),
(656, 201, 62, 164000, 0, 0),
(657, 201, 38, 164000, 0, 0),
(658, 202, 76, 229000, 0, 0),
(659, 202, 72, 229000, 0, 0),
(660, 202, 64, 229000, 0, 0),
(661, 202, 63, 229000, 0, 0),
(662, 202, 62, 229000, 0, 0),
(663, 202, 38, 229000, 0, 0),
(664, 203, 76, 278000, 0, 0),
(665, 203, 72, 278000, 0, 0),
(666, 203, 64, 278000, 0, 0),
(667, 203, 63, 278000, 0, 0),
(668, 203, 62, 278000, 0, 0),
(669, 203, 38, 278000, 0, 0),
(670, 204, 76, 323000, 0, 0),
(671, 204, 72, 323000, 0, 0),
(672, 204, 64, 323000, 0, 0),
(673, 204, 63, 323000, 0, 0),
(674, 204, 62, 323000, 0, 0),
(675, 204, 38, 323000, 0, 0),
(676, 205, 76, 434000, 0, 0),
(677, 205, 72, 434000, 0, 0),
(678, 205, 64, 434000, 0, 0),
(679, 205, 63, 434000, 0, 0),
(680, 205, 62, 434000, 0, 0),
(681, 205, 38, 434000, 0, 0),
(682, 206, 76, 479000, 0, 0),
(683, 206, 72, 479000, 0, 0),
(684, 206, 64, 479000, 0, 0),
(685, 206, 63, 479000, 0, 0),
(686, 206, 62, 479000, 0, 0),
(687, 206, 38, 479000, 0, 0),
(688, 207, 76, 800000, 0, 0),
(689, 207, 72, 80000, 0, 0),
(690, 207, 64, 800000, 0, 0),
(691, 207, 63, 800000, 0, 0),
(692, 207, 62, 800000, 0, 0),
(693, 207, 38, 800000, 0, 0),
(694, 208, 76, 19250, 0, 0),
(695, 208, 72, 18500, 0, 0),
(696, 208, 64, 19250, 0, 0),
(697, 208, 63, 19250, 0, 0),
(698, 208, 62, 19250, 0, 0),
(699, 208, 38, 15855, 0, 0),
(700, 209, 76, 49250, 0, 0),
(701, 209, 72, 48500, 0, 0),
(702, 209, 64, 49250, 0, 0),
(703, 209, 63, 49250, 0, 0),
(704, 209, 62, 49250, 0, 0),
(705, 209, 38, 46065, 0, 0),
(706, 210, 76, 74250, 0, 0),
(707, 210, 72, 73500, 0, 0),
(708, 210, 64, 74250, 0, 0),
(709, 210, 63, 74250, 0, 0),
(710, 210, 62, 74250, 0, 0),
(711, 210, 38, 71240, 0, 0),
(712, 211, 76, 139250, 0, 0),
(713, 211, 72, 138500, 0, 0),
(714, 211, 64, 139250, 0, 0),
(715, 211, 63, 139250, 0, 0),
(716, 211, 62, 139250, 0, 0),
(717, 211, 38, 136695, 0, 0),
(718, 212, 76, 324250, 0, 0),
(719, 212, 72, 323500, 0, 0),
(720, 212, 64, 324250, 0, 0),
(721, 212, 63, 324250, 0, 0),
(722, 212, 62, 324250, 0, 0),
(723, 212, 38, 322990, 0, 0),
(724, 213, 76, 624250, 0, 0),
(725, 213, 72, 623500, 0, 0),
(726, 213, 64, 624250, 0, 0),
(727, 213, 63, 624250, 0, 0),
(728, 213, 62, 624250, 0, 0),
(729, 213, 38, 625090, 0, 0),
(730, 214, 76, 20000, 0, 0),
(731, 214, 72, 20000, 0, 0),
(732, 214, 63, 20000, 0, 0),
(733, 214, 62, 20000, 0, 0),
(734, 214, 38, 20000, 0, 0),
(735, 215, 76, 65000, 0, 0),
(736, 215, 72, 65000, 0, 0),
(737, 215, 64, 65000, 0, 0),
(738, 215, 63, 65000, 0, 0),
(739, 215, 62, 65000, 0, 0),
(740, 215, 38, 65000, 0, 0),
(741, 216, 76, 115000, 0, 0),
(742, 216, 72, 115000, 0, 0),
(743, 216, 64, 115000, 0, 0),
(744, 216, 63, 115000, 0, 0),
(745, 216, 62, 115000, 0, 0),
(746, 216, 38, 115000, 0, 0),
(747, 217, 76, 205000, 0, 0),
(748, 217, 72, 205000, 0, 0),
(749, 217, 64, 205000, 0, 0),
(750, 217, 63, 205000, 0, 0),
(751, 217, 62, 205000, 0, 0),
(752, 217, 38, 205000, 0, 0),
(753, 218, 76, 300000, 0, 0),
(754, 218, 72, 300000, 0, 0),
(755, 218, 64, 300000, 0, 0),
(756, 218, 63, 300000, 0, 0),
(757, 218, 62, 300000, 0, 0),
(758, 218, 38, 300000, 0, 0),
(759, 219, 76, 510000, 0, 0),
(760, 219, 72, 510000, 0, 0),
(761, 219, 64, 510000, 0, 0),
(762, 219, 63, 510000, 0, 0),
(763, 219, 62, 510000, 0, 0),
(764, 219, 38, 510000, 0, 0),
(765, 220, 76, 1100000, 0, 0),
(766, 220, 72, 1100000, 0, 0),
(767, 220, 64, 1100000, 0, 0),
(768, 220, 63, 1100000, 0, 0),
(769, 220, 62, 1100000, 0, 0),
(770, 220, 38, 1100000, 0, 0),
(771, 221, 76, 20000, 0, 0),
(772, 221, 72, 20000, 0, 0),
(773, 221, 64, 20000, 0, 0),
(774, 221, 63, 20000, 0, 0),
(775, 221, 62, 20000, 0, 0),
(776, 221, 38, 20000, 0, 0),
(777, 222, 76, 70000, 0, 0),
(778, 222, 72, 70000, 0, 0),
(779, 222, 64, 70000, 0, 0),
(780, 222, 63, 70000, 0, 0),
(781, 222, 62, 70000, 0, 0),
(782, 222, 38, 70000, 0, 0),
(783, 223, 76, 220000, 0, 0),
(784, 223, 72, 220000, 0, 0),
(785, 223, 64, 220000, 0, 0),
(786, 223, 63, 220000, 0, 0),
(787, 223, 62, 220000, 0, 0),
(788, 223, 38, 220000, 0, 0),
(789, 285, 10001, 65000, 0, 0),
(790, 287, 77, 1000, 9500, 8000),
(791, 287, 10001, 100, 900, 900),
(792, 287, 62, 0, 950, 0),
(793, 291, 10001, 1700, 1400, 900);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `games_id` int(11) NOT NULL,
  `product` varchar(250) NOT NULL,
  `price` bigint(20) NOT NULL,
  `vip_price` bigint(20) NOT NULL,
  `reseller_price` bigint(20) NOT NULL,
  `provider` varchar(250) NOT NULL,
  `sku` varchar(250) NOT NULL,
  `status` enum('On','Off') NOT NULL,
  `check_status` enum('Y','N') NOT NULL,
  `check_code` varchar(55) NOT NULL,
  `logo_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `games_id`, `product`, `price`, `vip_price`, `reseller_price`, `provider`, `sku`, `status`, `check_status`, `check_code`, `logo_url`) VALUES
(283, 1, '86 Diamonds', 22000, 20000, 21000, 'AG', 'UPMBL85', 'On', 'Y', 'gensin', 'https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/150orMore_MLBB_Diamonds.png'),
(284, 1, '172 Diamonds', 45000, 42000, 43000, 'DF', 'ML172', 'Off', 'Y', '', 'https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/150orMore_MLBB_Diamonds.png'),
(285, 1, '304 Diamonds', 75000, 71000, 72000, 'DF', 'ML304', 'Off', 'Y', '', 'https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/150orMore_MLBB_Diamonds.png'),
(286, 16, 'Epic', 5000, 0, 0, 'Manual', 'EPIC', 'On', 'Y', '', ''),
(287, 2, '50 Diamond', 1000, 1000, 1000, 'AG', 'FF5', 'On', 'Y', '', ''),
(289, 4, '80 Diamond', 15000, 11000, 12000, 'DF', 'gensin', 'On', 'Y', '', ''),
(291, 1, '50 Diamonds', 1800, 1000, 1500, 'AG', 'FF5', 'On', 'Y', '', 'https://cdn1.codashop.com/S/content/common/images/denom-image/MLBB/100x100/150orMore_MLBB_Diamonds.png'),
(293, 16, 'jkl', 7, 78, 678, 'DF', '56789', 'On', 'Y', '', 'http://www.google.com'),
(294, 16, 'http://www.google.com', 3456, 56789, 43567, 'DF', 'fghj', 'On', 'Y', '', 'http://www.google.com'),
(295, 16, 'hghj', 5678, 5467, 5678, 'DF', '5678', 'On', 'Y', '', 'http://www.google.com'),
(296, 12, 'ghjkl', 789, 7890, 7890, 'DF', 'hjkl;', 'On', 'Y', '', 'http://www.google.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosmed`
--

CREATE TABLE `sosmed` (
  `id` int(11) NOT NULL,
  `link` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sosmed`
--

INSERT INTO `sosmed` (`id`, `link`, `image`) VALUES
(5, 'https://wa.me/6285293026542', '1671857163_bf68a6b5428b25c15094.png'),
(7, 'https://instagram.com', '1671857194_16dc07e9d16ac4218241.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `topup`
--

CREATE TABLE `topup` (
  `id` int(11) NOT NULL,
  `topup_id` varchar(55) NOT NULL,
  `username` varchar(250) NOT NULL,
  `method_id` int(11) NOT NULL,
  `method` varchar(250) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `status` enum('Pending','Success','Canceled') NOT NULL,
  `payment_code` varchar(500) NOT NULL,
  `date_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `topup`
--

INSERT INTO `topup` (`id`, `topup_id`, `username`, `method_id`, `method`, `amount`, `status`, `payment_code`, `date_create`) VALUES
(28, 'DS202301218112', 'usertesting', 78, 'BRIVA IpayMu', 500000, 'Pending', '578893000182236', '2023-01-21 23:01:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(250) NOT NULL,
  `balance` bigint(20) NOT NULL,
  `wa` varchar(100) NOT NULL,
  `status` enum('On','Off') NOT NULL,
  `level_id` int(11) NOT NULL,
  `date_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `balance`, `wa`, `status`, `level_id`, `date_create`) VALUES
(18, 'member', '$2y$10$VYk72yPTYKKJwPAx2MSCqOTg9bX6J5ZYyskVTs9I40glLfjqFGiiG', 10000, '085293026542', 'On', 2, '2022-12-04 09:04:47'),
(20, 'jhonwick', '$2y$10$LkhQKTv2UWXbpPtkvb/ozexG2qZYK2MlxJT5AkOdjlsNBsrkIDV3y', 0, '085293026542', 'On', 1, '2022-12-25 14:00:17'),
(21, 'Akugustiii1408@gmail.com', '$2y$10$pVtIjR/E2HPrmBwYNmWKnO3a8UoFRQsZWOQJ6DT14sCYYMq.mkEjy', 0, '081363179584', 'On', 1, '2022-12-26 15:09:44'),
(22, 'Djoekiinstore', '$2y$10$JtYPcaYoTqRaml5k3DAPTOzGe8Sc65l/HCRQ80nRfUz.l92Ccp8xK', 0, '081363179584', 'On', 1, '2022-12-26 15:12:29'),
(23, 'Gamestore', '$2y$10$xHKm4C9DsX4AJwp5a6B3dOlf6pLhexNULX33Z81zr1/LJM2366wPO', 0, '082172600745', 'On', 1, '2022-12-26 15:14:07'),
(24, 'Vinkent', '$2y$10$go6.2bd05Ohfq/mrZuPtUOs2kdvs3XVP41TcCRFb2uxBQVJhUebkO', 0, '081291447540', 'On', 1, '2022-12-27 13:58:31'),
(25, 'Sudrajat', '$2y$10$e6WPB9BOJXMwl3Z8rL.qMeSWz0SFmZcGY1HE7d0ijn//wZLML20rK', 0, '089505596902', 'On', 1, '2022-12-31 18:40:12'),
(26, 'admin1234', '$2y$10$svYnngQSzKGNoP23HDJ2muFfs8v0JEMimGPemJ98Bd5sdXpmwkKUq', 0, '085721735763', 'On', 1, '2023-01-03 09:58:53'),
(27, 'barusbarus', '$2y$10$5GphkIcOEBGrnqrsvZibG.7YMK2QN7Ownf3jLrp3vw022GM99XcvS', 0, '085172178696', 'On', 1, '2023-01-04 10:02:48'),
(28, 'sexykios', '$2y$10$mDwwH.H.zC6v9cRvgJJ9NuKkjvkTH5X0Mvwz4yiZYT884gqV8pJ7i', 0, '0895370784147', 'On', 1, '2023-01-06 03:16:54'),
(29, 'sexykios666', '$2y$10$cmUW/vy/Nwhx8wrcVCT1Au/QnGZt6bB9LTKGRtoHQih2ovwEnxLhq', 0, '0895370784147', 'On', 1, '2023-01-06 03:19:37'),
(30, 'Ardiasa', '$2y$10$w/LJPs704PmQgZ8zZAmO/eBkbppidR2lbaXmXeNCsey85H2up1aXe', 0, '081225927594', 'On', 1, '2023-01-07 11:23:32'),
(31, 'test123', '$2y$10$WU8tW/6cUlk8KvWgpEslrOkj0lT6YMnArrIaR3e9FkpLwLqzg0ZrK', 0, '087361274666', 'On', 1, '2023-01-08 00:39:14'),
(32, 'test002', '$2y$10$xD.kAMA3rZxtqX/oul9F3uF42spwNfTVGeWs3Pp6QQWTz5CzqXte.', 0, '08128717358', 'On', 1, '2023-01-08 00:39:57'),
(33, 'usertesting', '$2y$10$iRQs9f52AcpljtIK3QGVtuB/qZs.ZHFcefh.usb/PxCqX4ZWJpX62', 2853782, '08656454545', 'On', 3, '2023-01-10 08:01:33'),
(34, 'cobacoba', '$2y$10$6kfvHH0rBqLn5tVYEVxCu.6G.hrrEmSDN/C.PoIuYgYhPvKkejOnu', 0, '0987657890', 'On', 1, '2023-01-18 19:37:39'),
(35, 'Gaming', '$2y$10$zrXxHYjzQMp/AQ1EwTCGEuw.dqdQuBDUqGWjJDNwQoWUtSMYChofC', 0, '087772233354', 'On', 1, '2023-03-01 20:57:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `utility`
--

CREATE TABLE `utility` (
  `id` int(11) NOT NULL,
  `u_key` varchar(250) NOT NULL,
  `u_value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `utility`
--

INSERT INTO `utility` (`id`, `u_key`, `u_value`) VALUES
(1, 'web-title', 'Games K’'),
(2, 'web-name', 'Powered By Kiosweb.id'),
(3, 'web-logo', '1677420974_f7714882a1808e6919d3.png'),
(4, 'web-keywords', 'Top up game'),
(5, 'web-description', '<p>Website top up games termurah, tercepat dan terlengkap #1 Indonesia.</p>\r\n'),
(6, 'tripay-key', ''),
(7, 'tripay-private', ''),
(8, 'tripay-merchant', ''),
(9, 'digi-user', ''),
(10, 'digi-key', ''),
(11, 'ag-merchant', ''),
(12, 'ag-secret', ''),
(13, 'kiosweb-license', 'af7ea1c8479e477'),
(14, 'sm-wa', 'https://instagram.com/kiosweb.id/'),
(15, 'sm-ig', 'https://instagram.com/kiosweb.id/'),
(16, 'sm-tele', ''),
(17, 'sm-tw', 'https://instagram.com/kiosweb.id/'),
(18, 'sm-fb', 'https://instagram.com/kiosweb.id/'),
(19, 'pay_balance', 'Y'),
(20, 'page_sk', '<h2><strong>Terms and Conditions</strong></h2>\r\n\r\n<p>Welcome to CGames!</p>\r\n\r\n<p>These terms and conditions outline the rules and regulations for the use of CGames&#39;s Website, located at https://cgames.com</p>\r\n\r\n<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use CGames if you do not agree to take all of the terms and conditions stated on this page.</p>\r\n\r\n<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: &quot;Client&quot;, &quot;You&quot; and &quot;Your&quot; refers to you, the person log on this website and compliant to the Company&rsquo;s terms and conditions. &quot;The Company&quot;, &quot;Ourselves&quot;, &quot;We&quot;, &quot;Our&quot; and &quot;Us&quot;, refers to our Company. &quot;Party&quot;, &quot;Parties&quot;, or &quot;Us&quot;, refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client&rsquo;s needs in respect of provision of the Company&rsquo;s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>\r\n\r\n<h3><strong>Cookies</strong></h3>\r\n\r\n<p>We employ the use of cookies. By accessing CGames, you agreed to use cookies in agreement with the CGames&#39;s Privacy Policy.</p>\r\n\r\n<p>Most interactive websites use cookies to let us retrieve the user&rsquo;s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>\r\n\r\n<h3><strong>License</strong></h3>\r\n\r\n<p>Unless otherwise stated, CGames and/or its licensors own the intellectual property rights for all material on CGames. All intellectual property rights are reserved. You may access this from MGames for your own personal use subjected to restrictions set in these terms and conditions.</p>\r\n\r\n<p>You must not:</p>\r\n\r\n<ul>\r\n	<li>Republish material from CGames</li>\r\n	<li>Sell, rent or sub-license material from CGames</li>\r\n	<li>Reproduce, duplicate or copy material from CGames</li>\r\n	<li>Redistribute content from CGames</li>\r\n</ul>\r\n\r\n<p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the <a href=\"https://www.termsfeed.com/terms-conditions-generator/\">TermsFeed Free Terms and Conditions Generator</a>.</p>\r\n\r\n<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. CGames does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of CGames,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, MGames shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>\r\n\r\n<p>CGames reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>\r\n\r\n<p>You warrant and represent that:</p>\r\n\r\n<ul>\r\n	<li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>\r\n	<li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>\r\n	<li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>\r\n	<li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>\r\n</ul>\r\n\r\n<p>You hereby grant CGames a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>\r\n\r\n<h3><strong>Hyperlinking to our Content</strong></h3>\r\n\r\n<p>The following organizations may link to our Website without prior written approval:</p>\r\n\r\n<ul>\r\n	<li>Government agencies;</li>\r\n	<li>Search engines;</li>\r\n	<li>News organizations;</li>\r\n	<li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>\r\n	<li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>\r\n</ul>\r\n\r\n<p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party&rsquo;s site.</p>\r\n\r\n<p>We may consider and approve other link requests from the following types of organizations:</p>\r\n\r\n<ul>\r\n	<li>commonly-known consumer and/or business information sources;</li>\r\n	<li>dot.com community sites;</li>\r\n	<li>associations or other groups representing charities;</li>\r\n	<li>online directory distributors;</li>\r\n	<li>internet portals;</li>\r\n	<li>accounting, law and consulting firms; and</li>\r\n	<li>educational institutions and trade associations.</li>\r\n</ul>\r\n\r\n<p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of CGames; and (d) the link is in the context of general resource information.</p>\r\n\r\n<p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party&rsquo;s site.</p>\r\n\r\n<p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to CGames. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>\r\n\r\n<p>Approved organizations may hyperlink to our Website as follows:</p>\r\n\r\n<ul>\r\n	<li>By use of our corporate name; or</li>\r\n	<li>By use of the uniform resource locator being linked to; or</li>\r\n	<li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party&rsquo;s site.</li>\r\n</ul>\r\n\r\n<p>No use of CGames logo or other artwork will be allowed for linking absent a trademark license agreement.</p>\r\n\r\n<h3><strong>iFrames</strong></h3>\r\n\r\n<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>\r\n\r\n<h3><strong>Content Liability</strong></h3>\r\n\r\n<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>\r\n\r\n<h3><strong>Your Privacy</strong></h3>\r\n\r\n<p>Please read Privacy Policy</p>\r\n\r\n<h3><strong>Reservation of Rights</strong></h3>\r\n\r\n<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it&rsquo;s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>\r\n\r\n<h3><strong>Removal of links from our website</strong></h3>\r\n\r\n<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>\r\n\r\n<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>\r\n\r\n<h3><strong>Disclaimer</strong></h3>\r\n\r\n<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>\r\n\r\n<ul>\r\n	<li>limit or exclude our or your liability for death or personal injury;</li>\r\n	<li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>\r\n	<li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>\r\n	<li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>\r\n</ul>\r\n\r\n<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>\r\n\r\n<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>\r\n'),
(21, 'cm_key', ''),
(22, 'cm_sign', ''),
(23, 'ip_va', ''),
(24, 'ip_secret', ''),
(25, 'sm-yt', 'https://instagram.com/kiosweb.id/'),
(26, 'fonnte-token', ''),
(27, 'modal-img', '1677679485_2cda0bb6614eec1b2e6a.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `whatsapp`
--

CREATE TABLE `whatsapp` (
  `id` int(11) NOT NULL,
  `template` mediumtext NOT NULL,
  `type` enum('Order Pending','Order Processing','Order Success','Order Canceled') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `whatsapp`
--

INSERT INTO `whatsapp` (`id`, `template`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hallo #username# berikut adalah detail pesanan anda :\r\nOrder id #orderid# \r\nStatus order #status#\r\nProduk #produk#\r\nTotal bayar #totalbayar#\r\nMetode bayar #metodebayar#\r\n\r\n', 'Order Pending', '2023-01-22 14:01:46', '2023-01-22 14:01:46', '2023-01-22 14:01:46'),
(2, 'Hallo #username# berikut adalah detail pesanan anda :\r\nOrder id #orderid# \r\nStatus order #status#\r\nProduk #produk#\r\nTotal bayar #totalbayar#\r\nMetode bayar #metodebayar#\r\n\r\n', 'Order Processing', '2023-01-22 14:03:01', '2023-01-22 14:03:01', '2023-01-22 14:03:01'),
(3, 'Hallo #username# berikut adalah detail pesanan anda :\r\nOrder id #orderid# \r\nStatus order #status#\r\nProduk #produk#\r\nTotal bayar #totalbayar#\r\nMetode bayar #metodebayar#\r\n\r\n', 'Order Success', '2023-01-22 14:03:59', '2023-01-22 14:03:59', '2023-01-22 14:03:59'),
(4, 'Hallo #username# berikut adalah detail pesanan anda :\r\nOrder id #orderid# \r\nStatus order #status#\r\nProduk #produk#\r\nTotal bayar #totalbayar#\r\nMetode bayar #metodebayar#\r\n\r\n', 'Order Canceled', '2023-01-22 14:04:23', '2023-01-22 14:04:23', '2023-01-22 14:04:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `callback`
--
ALTER TABLE `callback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `game_populer`
--
ALTER TABLE `game_populer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_id` (`game_id`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `level_upgrade`
--
ALTER TABLE `level_upgrade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `users_id` (`user_id`),
  ADD KEY `method_id` (`method_id`);

--
-- Indeks untuk tabel `method`
--
ALTER TABLE `method`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `topup`
--
ALTER TABLE `topup`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_level` (`level_id`);

--
-- Indeks untuk tabel `utility`
--
ALTER TABLE `utility`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `whatsapp`
--
ALTER TABLE `whatsapp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `callback`
--
ALTER TABLE `callback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `game_populer`
--
ALTER TABLE `game_populer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `level_upgrade`
--
ALTER TABLE `level_upgrade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `method`
--
ALTER TABLE `method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT untuk tabel `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=794;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `topup`
--
ALTER TABLE `topup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `utility`
--
ALTER TABLE `utility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `whatsapp`
--
ALTER TABLE `whatsapp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
