<?php
/**
 * Copyright since 2021 the ultimate z and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@theultimatez.com so we can send you a copy immediately.
 *
 */

if (strpos("$_SERVER[REQUEST_URI]", "tables.php") !== false) {
    header("location: index.php");
}

$tables = "
DROP TABLE IF EXISTS `z`;
DROP TABLE IF EXISTS `zCategories`;
DROP TABLE IF EXISTS `zCategories_tr`;
DROP TABLE IF EXISTS `zHolders`;
DROP TABLE IF EXISTS `zHolders_tr`;
DROP TABLE IF EXISTS `zLanguages`;
DROP TABLE IF EXISTS `zPages`;
DROP TABLE IF EXISTS `zPages_tr`;
DROP TABLE IF EXISTS `zPagesCategories`;
DROP TABLE IF EXISTS `zPagesHolders`;
DROP TABLE IF EXISTS `zPagesHolders_tr`;
DROP TABLE IF EXISTS `zRanks`;
DROP TABLE IF EXISTS `zRanks_tr`;
DROP TABLE IF EXISTS `zTemplates`;
DROP TABLE IF EXISTS `zTemplates_tr`;
DROP TABLE IF EXISTS `zUsers`;
DROP TABLE IF EXISTS `zViewsPage`;
DROP TABLE IF EXISTS `zViewsPageByUser`;
DROP TABLE IF EXISTS `zViewsTotal`;";

// ////////////////////////////////////////////////////////

//
// Table structure for table `z`
//

$tables .= "CREATE TABLE `z` (
  `id_z` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cookie_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `error` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zCategories`
//

$tables .= "CREATE TABLE `zCategories` (
  `id_category` int AUTO_INCREMENT PRIMARY KEY
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zCategories_tr`
//

$tables .= "CREATE TABLE `zCategories_tr` (
  `id_category_tr` int AUTO_INCREMENT PRIMARY KEY,
  `id_category` int NOT NULL,
  `id_lang` int NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zHolders`
//

$tables .= "CREATE TABLE `zHolders` (
  `id_holder` int AUTO_INCREMENT PRIMARY KEY,
  `type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

//
// Dumping data for table `zHolders`
//

$tables .= "INSERT INTO `zHolders` (`id_holder`, `type`) VALUES
(1, 'text'),
(2, 'image'),
(3, 'categorylist'),
(4, 'input'),
(5, 'input;image;text');";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zHolders_tr`
//

$tables .= "CREATE TABLE `zHolders_tr` (
  `id_holder_tr` int AUTO_INCREMENT PRIMARY KEY,
  `id_holder` int NOT NULL,
  `id_lang` int NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

//
// Dumping data for table `zHolders_tr`
//

$tables .= "INSERT INTO `zHolders_tr` (`id_holder_tr`, `id_holder`, `id_lang`, `value`) VALUES
(1, 1, 1, 'Text'),
(2, 1, 2, 'Metin'),
(3, 2, 1, 'Image'),
(4, 2, 2, 'Görsel'),
(5, 3, 1, 'Category List'),
(6, 3, 2, 'Kategori Listesi'),
(7, 4, 1, 'Tag'),
(8, 4, 2, 'Etiket'),
(9, 5, 1, 'Slider'),
(10, 5, 2, 'Slayt');";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zLanguages`
//

$tables .= "CREATE TABLE `zLanguages` (
  `id_lang` int AUTO_INCREMENT PRIMARY KEY,
  `iso_code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `four_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `disabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

//
// Dumping data for table `zLanguages`
//

$tables .= "INSERT INTO `zLanguages` (`id_lang`, `iso_code`, `four_code`, `name`, `disabled`) VALUES
(1, 'en', 'en-EN', 'English', '0'),
(2, 'tr', 'tr-TR', 'Türkçe', '0');";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zPages`
//

$tables .= "CREATE TABLE `zPages` (
  `id_page` int AUTO_INCREMENT PRIMARY KEY,
  `url` text NOT NULL,
  `area` text NOT NULL,
  `id_template` int NOT NULL,
  `subpage` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

//
// Dumping data for table `zPages`
//

$tables .= "INSERT INTO `zPages` (`id_page`, `url`, `area`, `id_template`) VALUES
(1, '/_admin', 'back', 0, 0),
(2, '/_admin/login', 'back', 0, 0),
(3, '/_admin/forgot', 'back', 0, 0),
(4, '/_admin/layouts/pages/create', 'back', 0, 0),
(5, '/_admin/layouts/pages/edit', 'back', 0, 0),
(6, '/_admin/layouts/pages', 'back', 0, 0),
(7, '/_admin/layouts/categories/create', 'back', 0, 0),
(8, '/_admin/layouts/categories/edit', 'back', 0, 0),
(9, '/_admin/layouts/categories', 'back', 0, 0),
(10, '/_admin/preferences', 'back', 0, 0),
(11, '/_admin/profile', 'back', 0, 0),
(12, '/_admin/advanced/run-queries', 'back', 0, 0),
(13, '/_admin/advanced/database', 'back', 0, 0),
(14, '/_admin/advanced/database/table', 'back', 0, 0),
(15, '/_admin/users', 'back', 0, 0),
(16, '/_admin/media', 'back', 0, 0),
(17, '/_admin/layouts/design', 'back', 0, 0),
(18, '/_admin/layouts/design/favicon', 'back', 0, 0),
(1001, '/', 'front', 1, 0);";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zPages_tr`
//

$tables .= "CREATE TABLE `zPages_tr` (
  `id_page_tr` int AUTO_INCREMENT PRIMARY KEY,
  `id_page` int NOT NULL,
  `id_lang` int NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

//
// Dumping data for table `zPages_tr`
//

$tables .= "INSERT INTO `zPages_tr` (`id_page_tr`, `id_page`, `id_lang`, `value`, `meta`) VALUES
(1, 1, 1, 'Dashboard', ''),
(2, 1, 2, 'Gösterge Paneli', ''),
(3, 2, 1, 'Log in', ''),
(4, 2, 2, 'Giriş Yap', ''),
(5, 3, 1, 'Forgot Password', ''),
(6, 3, 2, 'Şifremi Unuttum', ''),
(7, 4, 1, 'Create Page', ''),
(8, 4, 2, 'Sayfa Oluştur', ''),
(9, 5, 1, 'Edit Page', ''),
(10, 5, 2, 'Sayfayı Düzenle', ''),
(11, 6, 1, 'Pages', ''),
(12, 6, 2, 'Sayfalar', ''),
(13, 7, 1, 'Create Category', ''),
(14, 7, 2, 'Kategori Oluştur', ''),
(15, 8, 1, 'Edit Category', ''),
(16, 8, 2, 'Kategoriyi Düzenle', ''),
(17, 9, 1, 'Categories', ''),
(18, 9, 2, 'Kategoriler', ''),
(19, 10, 1, 'Preferences', ''),
(20, 10, 2, 'Seçenekler', ''),
(21, 11, 1, 'Profile', ''),
(22, 11, 2, 'Profil', ''),
(23, 12, 1, 'Run Queries', ''),
(24, 12, 2, 'Sorgu Çalıştır', ''),
(25, 13, 1, 'Database', ''),
(26, 13, 2, 'Veritabanı', ''),
(27, 14, 1, 'Table', ''),
(28, 14, 2, 'Tablo', ''),
(29, 15, 1, 'Users', ''),
(30, 15, 2, 'Kullanıcılar', ''),
(31, 16, 1, 'Media', ''),
(32, 16, 2, 'Medya', ''),
(33, 17, 1, 'Design', ''),
(34, 17, 2, 'Tasarım', ''),
(35, 18, 1, 'Favicon', ''),
(36, 18, 2, 'Site Simgesi', ''),
(37, 1001, 1, 'Home', 'ultimate Z'),
(38, 1001, 2, 'Anasayfa', 'ultimate Z');";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zPagesCategories`
//

$tables .= "CREATE TABLE `zPagesCategories` (
  `id_page_category` int AUTO_INCREMENT PRIMARY KEY,
  `id_page` int NOT NULL,
  `id_category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zPagesHolders`
//

$tables .= "CREATE TABLE `zPagesHolders` (
  `id_page_holder` int AUTO_INCREMENT PRIMARY KEY,
  `id_holder` int NOT NULL,
  `id_page` int NOT NULL,
  `id_block` int NOT NULL,
  `order` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zPagesHolders_tr`
//

$tables .= "CREATE TABLE `zPagesHolders_tr` (
  `id_page_holder_tr` int AUTO_INCREMENT PRIMARY KEY,
  `id_page_holder` int NOT NULL,
  `id_partial` int NOT NULL,
  `id_lang` int NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zRanks`
//

$tables .= "CREATE TABLE `zRanks` (
  `id_rank` int AUTO_INCREMENT PRIMARY KEY
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

//
// Dumping data for table `zRanks`
//

$tables .= "INSERT INTO `zRanks` (`id_rank`) VALUES
(1),
(2);";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zRanks_tr`
//

$tables .= "CREATE TABLE `zRanks_tr` (
  `id_rank_tr` int AUTO_INCREMENT PRIMARY KEY,
  `id_rank` int NOT NULL,
  `id_lang` int NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

//
// Dumping data for table `zRanks_tr`
//

$tables .= "INSERT INTO `zRanks_tr` (`id_rank_tr`, `id_rank`, `id_lang`, `value`) VALUES
(1, 1, 1, 'Administrator'),
(2, 1, 2, 'Yönetici'),
(3, 2, 1, 'Editor'),
(4, 2, 2, 'Editör');";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zTemplates`
//

$tables .= "CREATE TABLE `zTemplates` (
  `id_template` int AUTO_INCREMENT PRIMARY KEY,
  `area` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blocks` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

//
// Dumping data for table `zTemplates`
//

$tables .= "INSERT INTO `zTemplates` (`id_template`, `area`) VALUES
(1, 'front', 1);";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zTemplates_tr`
//

$tables .= "CREATE TABLE `zTemplates_tr` (
  `id_template_tr` int AUTO_INCREMENT PRIMARY KEY,
  `id_template` int NOT NULL,
  `id_lang` int NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

//
// Dumping data for table `zTemplates_tr`
//

$tables .= "INSERT INTO `zTemplates_tr` (`id_template_tr`, `id_template`, `id_lang`, `value`) VALUES
(1, 1, 1, 'zHome'),
(2, 1, 2, 'zAna');";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zUsers`
//

$tables .= "CREATE TABLE `zUsers` (
  `id_user` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_rank` int NOT NULL,
  `id_picture` int NOT NULL,
  `id_lang` int NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zViewsPage`
//

$tables .= "CREATE TABLE `zViewsPage` (
  `id_views_page` int AUTO_INCREMENT PRIMARY KEY,
  `id_page` int NOT NULL,
  `value` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zViewsPageByUser`
//

$tables .= "CREATE TABLE `zViewsPageByUser` (
  `id_views_page_by_user` int AUTO_INCREMENT PRIMARY KEY,
  `id_page` int NOT NULL,
  `ip_user` text NOT NULL,
  `value` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

// ////////////////////////////////////////////////////////

//
// Table structure for table `zViewsTotal`
//

$tables .= "CREATE TABLE `zViewsTotal` (
  `id_views_total` int AUTO_INCREMENT PRIMARY KEY,
  `value` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
