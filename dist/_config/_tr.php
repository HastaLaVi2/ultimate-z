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

if (strpos("$_SERVER[REQUEST_URI]", "_tr.php") !== false) {
    header("location: index.php");
}

# INFORMATION DESK
$lang["Connection is successful."] = "Veritabanı bağlantısı başarılı.";
$lang["Cannot connect to database."] = "Veritabanına ulaşılamıyor.";
$lang["Operation failed while trying to login."] = "Giriş yapılmaya çalışırken işlem iptal edildi.";
$lang["The information is missing."] = "Bazı bilgiler eksik.";
$lang["Passwords do not match."] = "Şifreler eşleşmiyor.";
$lang["A user with the exact name provided already exists."] = "Bu isme sahip bir kullanıcı zaten mevcut.";
$lang["A site with the exact name provided already exists."] = "Bu isme sahip bir site zaten mevcut.";
$lang["The user does not exists."] = "Kullanıcı mevcut değil.";
$lang["Please enter a name."] = "Lütfen bir ad girin.";
$lang["Please enter a surname."] = "Lütfen bir soyad girin.";
$lang["Please enter an email."] = "Lütfen bir eposta girin.";
$lang["Please enter a password."] = "Lütfen bir şifre girin.";
$lang["Please enter password again."] = "Lütfen şifrenizi tekrar girin.";
$lang["Please enter a site name."] = "Lütfen bir site adı girin.";
$lang["Please choose a rank."] = "Lütfen bir rütbe seçin.";
$lang["Wrong password."] = "Yanlış şifre.";
$lang["Your message was sent, we will be back to you on that shortly."] = "Mesajınız iletildi, kısa sürede size dönüş yapacağız.";
$lang["Change has failed."] = "Değişiklik başarısız oldu.";
$lang["Change has been made."] = "Değişiklik yapıldı.";
$lang["Please refresh the page."] = "Lütfen sayfayı yenileyin.";
$lang["Page created."] = "Sayfa oluşturuldu.";
$lang["Page deleted."] = "Sayfa silindi.";
$lang["Category created."] = "Kategori oluşturuldu.";
$lang["Category deleted."] = "Kategori silindi.";

# MEDIA ISSUES
$lang["File is not an image nor a video."] = "Dosya bir fotoğraf veya video değil.";
$lang["Sorry, your file is too large."] = "Üzgünüz, dosyanızın boyutu çok büyük.";
$lang["Sorry, only JPG, JPEG, PNG, GIF, MP4 & M4V files are allowed."] = "Üzgünüz, yalnızca JPG, JPEG, PNG, GIF, MP4 & M4V dosyaları desteklenmektedir.";
$lang["There was an error uploading your file."] = "Dosyanızı yüklerken bir hata oluştu.";
$lang["File has been deleted."] = "Dosya silindi.";
$lang["There was an error deleting your file."] = "Dosya silinirken bir hata oluştu.";
$lang["Delete File"] = "Dosyayı Sil";
$lang["Are you sure you want to delete this file?"] = "Bu dosyayı silmek istediğinize emin misiniz?";

# GENERAL
$lang["Hello"] = "Merhaba";
$lang["All"] = "Hepsi";
$lang["Menu"] = "Menü";
$lang["Layouts"] = "Düzen";
$lang["Error"] = "Hata";
$lang["View"] = "Görüntüle";
$lang["Advanced"] = "İleri Düzey";
$lang["Button"] = "Buton";
$lang["Link"] = "Bağlantı";

# zSETUP
$lang["or"] = "veya";
$lang["Setup."] = "Kurulum.";
$lang["Choose a language to start."] = "Başlamak için bir dil seçin.";
$lang["Input your data to create your own control panel."] = "Kendi kontrol panelini oluşturmak için bilgilerini girin.";
$lang["Thanks for choosing"] = "Bizi seçtiğiniz için teşekkürler";
$lang["ultimate Z."] = "ultimate Z.";
$lang["Test your database connection."] = "Veritabanı bağlantınızı test edin.";
$lang["I have a database"] = "Bir veritabanım var";
$lang["I do not have a database"] = "Bir veritabanım yok";
$lang["Go Back"] = "Geri Dön";
$lang["Continue"] = "Devam Et";
$lang["Database created."] = "Veritabanı oluşturuldu.";
$lang["Database could not created."] = "Veritabanı oluşturulamadı.";
$lang["Create tables."] = "Tabloları oluştur.";
$lang["Tables created."] = "Tablolar oluşturuldu.";
$lang["Tables could not created."] = "Tablolar oluşturulamadı.";
$lang["Enter a database name."] = "Bir veritabanı adı girin.";
$lang["Database already exists."] = "Veritabanı zaten mevcut.";
$lang["Connection cannot be established with this user."] = "Bu kullanıcıyla bağlantı kurulamadı.";
$lang["Site created."] = "Site oluşturuldu.";

# zFORM
$lang["Name"] = "Ad";
$lang["Surname"] = "Soyadı";
$lang["Email"] = "Eposta";
$lang["Password"] = "Şifre";
$lang["Confirm Password"] = "Tekrar Şifre";
$lang["Old Password"] = "Eski Şifre";
$lang["New Password"] = "Yeni Şifre";
$lang["Rank"] = "Rütbe";
$lang["Create"] = "Oluştur";
$lang["Keep me logged in"] = "Beni Hatırla";
$lang["Log in"] = "Giriş Yap";
$lang["Log out"] = "Çıkış Yap";
$lang["Site name"] = "Site adı";
$lang["Save"] = "Kaydet";
$lang["Send"] = "Gönder";
$lang["Reset"] = "Sıfırla";
$lang["Check"] = "Kontrol Et";
$lang["Accept"] = "Evet";
$lang["Close"] = "Kapat";
$lang["Submit"] = "Tamamla";
$lang["Category..."] = "Kategori...";
$lang["Choose..."] = "Seç...";
$lang["Search..."] = "Ara...";
$lang["Type your message"] = "Mesajınızı girin";
$lang["Forgot your password?"] = "Şifreni mi Unuttun?";
$lang["Remember your account?"] = "Hesabını Hatırlıyor musun?";
$lang["Host"] = "Host";
$lang["Database"] = "Veritabanı";
$lang["New Database"] = "Yeni Veritabanı";
$lang["Category"] = "Kategori";

# zLOGIN
$lang["Log in with your data that you entered during installation."] = "Kurulum sırasında girdiğiniz bildileri kullanarak giriş yapın.";

# zFORGOT
$lang["Forgot Password"] = "Şifremi Unuttum";
$lang["Input your email and we will send you reset password link."] = "Şifre sıfırlama bağlantısı için epostanızı girin.";

# zDASHBOARD
$lang["Welcome to the ultimate Z!"] = "ultimate Z'ye hoş geldiniz!";
$lang["Total Page Views"] = "Toplam Sayfa Görüntülenme";
$lang["Total Users"] = "Toplam Kullanıcı";
$lang["Total Pages"] = "Toplam Sayfa";
$lang["Visits"] = "Ziyaret";
$lang["Views by Pages"] = "Sayfalara Göre Ziyaretler";
$lang["Total Views by Period"] = "Zamana Göre Toplam Görüntülenme";

# zSETTINGS
$lang["Change Rank"] = "Rütbeyi Değiştir";
$lang["Change Name"] = "Adı Değiştir";
$lang["Change Password"] = "Şifre Değiştir";
$lang["Change Language"] = "Dili Değiştir";
$lang["Change Email"] = "Epostayı Değiştir";
$lang["Change Avatar"] = "Profili Değiştir";
$lang["Select Language"] = "Bir Dil Seç";
$lang["Site Settings"] = "Site Ayarları";
$lang["Site Name"] = "Site Adı";
$lang["Enable site"] = "Siteyi etkinleştir";
$lang["Disable site"] = "Siteyi devre dışı bırak";
$lang["This option will determine whether your website should be open to the internet or not. If this is disabled, the system will recognise your IP and let you see the website, but others will not."] = "Bu seçenek sitenizin internette erişime açık olup olmamasını belirler. Eğer devre dışı bırakırsanız, sistem sizin IP adresinizi saptayacak ve size sitenizi gösterecektir, fakat internette siteniz kapalı olacaktır.";
$lang["404 Error Page"] = "404 Hata Sayfası";
$lang["Enable 404 error page"] = "404 hata sayfasını etkinleştir";
$lang["Disable 404 error page"] = "404 hata sayfasını devre dışı bırak";
$lang["This option will determine whether your website should display a 404 error page, or redirect to homepage when an unknown url entered."] = "Bu seçenek var olmayan bir url girildiğinde bir 404 hata sayfasının mı görüntüleneceğini yoksa anasayfaya mı yönlendirileceğini belirler.";
$lang["Enable or Disable Languages on Frontend"] = "Frontend'de Dilleri Etkinleştir veya Devre Dışı Bırak";

# zPAGE EDIT
$lang["View Page"] = "Sayfayı Görüntüle";
$lang["Page List"] = "Sayfa Listesi";
$lang["Name"] = "Ad";
$lang["Template"] = "Şablon";
$lang["Choose a Template"] = "Bir Şablon Seç";
$lang["Edit"] = "Düzenle";
$lang["Editing page:"] = "Bu sayfayı düzenliyorsunuz:";
$lang["Add New Page"] = "Yeni Sayfa Ekle";
$lang["Title"] = "Başlık";
$lang["Text"] = "Metin";
$lang["URL with / at start"] = "Başında / ifadesi olan bir URL girin";
$lang["Holders"] = "Tutucular";
$lang["Add a New Holder"] = "Yeni Bir Tutucu Ekle";
$lang["Delete"] = "Sil";
$lang["Delete Page"] = "Sayfayı Sil";
$lang["Seperate each category with comma"] = "Her bir kategoriyi virgül ile ayırın";
$lang["Are you sure you want to delete this page?"] = "Bu sayfayı silmek istediğinize emin misiniz?";
$lang["Delete Holder"] = "Tutucuyu Sil";
$lang["Are you sure you want to delete this holder?"] = "Bu tutucuyu silmek istediğinize emin misiniz?";
$lang["Meta Description"] = "Meta Açıklaması";
$lang["If you do not enter a meta description, the first text on the page will be used."] = "Eğer bir meta açıklaması girmezseniz, sayfadaki ilk bulunan metin geçerli olacaktır.";
$lang["Block"] = "Blok";

# zCATEGORY EDIT
$lang["Category List"] = "Kategori Listesi";
$lang["Add New Category"] = "Yeni Kategori Ekle";
$lang["Editing category:"] = "Bu kategoriyi düzenliyorsunuz:";
$lang["Delete Category"] = "Kategoriyi Sil";
$lang["Are you sure you want to delete this category?"] = "Bu kategoriyi silmek istediğinize emin misiniz?";

# zDATABASE
$lang["Table"] = "Tablo";
$lang["Number of Rows"] = "Satır Sayısı";

# zUSER
$lang["Add a User"] = "Yeni Bir Kullanıcı Ekle";
$lang["Delete User"] = "Kullanıcıyı Sil";
$lang["Are you sure you want to delete this user?"] = "Bu kullanıcıyı silmek istediğinize emin misiniz?";

# zFAVICON
$lang["Desktop Browsers"] = "Masaüstü Tarayıcıları";
$lang["Search Engines"] = "Arama Motorları";
$lang["Normal Theme"] = "Normal Tema";
$lang["Dark Theme"] = "Koyu Tema";
$lang["Use the original image."] = "Asıl resmi kullan.";
$lang["Add margins and background."] = "Boşluk ve arkaplan rengi ekle.";
$lang["Background"] = "Arkaplan Rengi";
$lang["Background Radius"] = "Arkaplan Pahı";
$lang["Image Size"] = "Resim Boyutu";
$lang["iOS Icon"] = "iOS İkonu";
$lang["iPhone and iPad users can pin your web site on their home screen. The link looks like a native app."] = "iPhone ve iPad kullanıcıları sitenizi ana ekranlarına sabitleyebilirler. Bu bağlantı herhangi bir uygulama gibi görünür.";
$lang["Android Chrome Icon"] = "Android Chrome İkonu";
$lang["Add to Homescreen is a also a feature of Android Chrome."] = "Ana ekrana ekleme özelliği aynı zamanda Android Chrome'un da bir özelliği.";
$lang["Apply a slight drop shadow."] = "Ufak bir gölge ekle.";
$lang["Windows 8 and 10 Icon"] = "Windows 8 ve 10 İkonu";
$lang["Windows 8 and 10 users can pin your web site on their start menu."] = "Windows 8 ve 10 kullanıcıları internet sitenizi başlat çubuğuna sabitleyebilirler.";
$lang["Preferably, choose one suggested for the Windows Metro UI."] = "Tercihen, Windows Metro arayüzü için önerilen bir renk seçin.";
$lang["Use white logo, for transparent background logos."] = "Arkaplanı transparan olan logolar için, beyaz logoya çevir.";
$lang["macOS Safari Icon"] = "macOS Safari İkonu";
$lang["Safari implements pinned tabs and takes advantage of the MacBook Touch Bar. This feature relies on an SVG icon."] = "Safari sabit sekmeler için uyarlama yapar ve MacBook'larda Touch Bar'ı kullanır. Bu özellik SVG ikonu ile çalışır.";
$lang["Pinned Tab, No Focus"] = "Sabit Sekme, Açılmamış";
$lang["Pinned Tab, With Focus"] = "Sabit Sekme, Açılmış";
$lang["Touch Bar"] = "Touch Bar";
$lang["Theme Color"] = "Tema Rengi";

# SCRIPT: simple-datatables
$lang["entries per page"] = "gösterilen öge sayısı";
$lang["Showing [start] to [end] of [rows] entries"] = "Toplam [rows] ögeden [start] ila [end] arası gösteriliyor";
$lang["No entries found"] = "Sonuç bulunamadı";
