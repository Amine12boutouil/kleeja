<?php
// Turkish
// Kleeja Türkçe dil dosyası
//  By:CEZALAND || rapper_cezaland@hotmail.com
// www.ForumVakti.net
//

if (!defined('IN_COMMON'))
	exit;

if (empty($lang) || !is_array($lang))
	$lang = array();



$lang = array_merge($lang, array(
	//language inforamtion
	// 18 mayıs 2010 saat 17:11 Türkçeleştirme çalışmaları başladı CEZALAND || emeğe saygı...
	// Çeviri hatalarını lütfen bildirin yeni versiyonda güncelleyelim ... e-mail: rapper_cezaland@hotmail.com & cezaland@gmail.com
	'DIR' 					=> 'ltr',
	'LANG_SMALL_NAME'		=> 'turkce-tr',

	'HOME' 					=> 'Anasayfa',
	'INDEX' 				=> 'Anasayfa',
	'SITE_CLOSED' 			=> 'Sitemiz kapalı.',
	'STOP_FOR_SIZE' 		=> 'Servis durduruldu.',
	'SIZES_EXCCEDED' 		=> 'Boş alanı doldurduk ... çok yakında tekrar deneyin.',
	'ENTER_CODE_IMG' 		=> 'Doğrulama kodunu gir.',
	'SAFE_CODE' 			=> 'indirmek için güvenlik kodunu aç',
	'LAST_VISIT' 			=> 'Son ziyaretiniz',
	'FLS_LST_VST_SEARCH' 	=> 'Son ziyaretinizden bu yana yüklenen dosyalar ?',
	'IMG_LST_VST_SEARCH' 	=> 'Son ziyaretinizden bu yana yüklenen resimler ?',
	'NEXT' 					=> 'Ileri &raquo;',
	'PREV' 					=> '&laquo; Geri',
	'INFORMATION' 			=> 'Bilgi',
	'WELCOME' 				=> 'Hoşgeldin',
	'KLEEJA_VERSION' 		=> 'Kleeja versiyon',
	'NUMBER_ONLINE' 		=> 'Online kullanıcılar',
	'NUMBER_UONLINE' 		=> 'kullanıcı',
	'NUMBER_VONLINE' 		=> 'misafir',
	'USERS_SYSTEM' 			=> 'Kullanıcı hatası',
	'ERROR_NAVIGATATION' 	=> 'Yönlendirme hatası ..',
	'LOGIN' 				=> 'Giriş',
	'USERNAME' 				=> 'Kullanıcı adı',
	'PASSWORD' 				=> 'Şifre',
	'EMPTY_USERNAME'		=> 'Lütfen kullanıcı adınızı girin',
	'EMPTY_PASSWORD' 		=> 'Lütfen şifrenizi girin',
	'LOSS_PASSWORD' 		=> 'Şifremi unuttum?',
	'LOGINED_BEFORE' 		=> 'Zaten giriş yapmışsınız.',
	'LOGOUT' 				=> 'Çıkış ',
	'EMPTY_FIELDS' 			=> 'HATA ... Eksik alanlar!',
	'LOGIN_SUCCESFUL' 		=> 'Başarıyla giriş yaptınız.',
	'LOGIN_ERROR' 			=> 'Hata ... giriş başarısız!',
	'REGISTER_CLOSED' 		=> 'Uzgünüm, kayıt olma şimdilik kapalı.',
	'PLACE_NO_YOU' 			=> 'Özel Arena',
	'REGISTERED_BEFORE' 	=> 'Zaten üyesin',
	'REGISTER' 				=> 'Kayıt ol',
	'EMAIL' 				=> 'Email',
	'VERTY_CODE' 			=> 'Güvenlik kodu',
	'WRONG_EMAIL' 			=> 'Hatalı email adresi!',
	'WRONG_NAME' 			=> 'Kullanıcı adınız 4karakterden uzun olmalı!',
	'WRONG_LINK' 			=> 'Hatalı bağlantı ..',
	'EXIST_NAME' 			=> 'Bu kullanıcı adı kullanılıyor!',
	'EXIST_EMAIL' 			=> 'Bu e-mail adresi kullanılıyor!',
	'WRONG_VERTY_CODE' 		=> 'Hatalı güvenlik kodu!',
	'CANT_UPDATE_SQL' 		=> 'Database güncellenemedi!',
	'CANT_INSERT_SQL' 		=> 'Bilgiler database\'ye girilemedi!',
	'REGISTER_SUCCESFUL' 	=> 'Kayıt olduğunuz için teşekkürler.ً',
	'LOGOUT_SUCCESFUL' 		=> 'Başarıyla çıkış yaptınız.',
	'LOGOUT_ERROR' 			=> 'Çıkış Hatalı!',
	'FILECP' 				=> 'Dosyalarını Yönet',
	'DEL_SELECTED' 			=> 'Seçilenleri sil',
	'EDIT_U_FILES' 			=> 'Dosyaları güncelle',
	'FILES_UPDATED' 		=> 'Dosya başarıyla güncellendi.',
	'PUBLIC_USER_FILES' 	=> 'Kullanıcı Klasörü',
	'FILEUSER' 				=> 'Kullanıcı Klasörü',
	'GO_FILECP' 			=> 'Buraya tıkla ve bu dosyaları düzenle',
	'YOUR_FILEUSER' 		=> 'Klasörüm',
	'COPY_AND_GET_DUD' 		=> 'Dosyalarınızı paylaşabilmek için URL\'yi kopyalayın ve Arkadaşlarınıza yollayın ',
	'CLOSED_FEATURE' 		=> 'Kapalı özellik',
	'USERFILE_CLOSED' 		=> 'Kullanıcı Klasörü özelliği kapalı !',
	'PFILE_4_FORUM' 		=> 'Profiliniz\'e gidin ve bilgilerinizi değiştirin',
	'USER_PLACE' 			=> 'Kullanıcı Bölgesi',
	'PROFILE' 				=> 'Profiliniz',
	'EDIT_U_DATA' 			=> 'Bilgilerini güncelle',
	'PASS_ON_CHANGE' 		=> 'Şifreniz (Eğer değiştiricekseniz).',
	'OLD' 					=> 'Eski',
	'NEW' 					=> 'Yeni',
	'NEW_AGAIN' 			=> 'Onayla',
	'UPDATE' 				=> 'Güncelle',
	'PASS_O_PASS2' 			=> 'Eski şifreniz gerekli, ve yeni şifrenizide hatasız girmelisiniz.',
	'DATA_CHANGED_O_LO' 	=> 'Bilgileriniz Güncellendi.',
	// Tarih 18 Mayıs 2010 saat 17:30 common.php'de 1/4 tamamlandı... CEZALAND || Emeğe saygı || Eksiklikleri, çeviri hatalarını, bize bildirin : rapper_cezaland@hotmail.com  & cezaland@gmail.com
	'DATA_CHANGED_NO' 		=> 'Yeni bilgi girilmedi.',
	'LOST_PASS_FORUM' 		=> 'Bilgilerini forum\'a gidip değiştirmek istermisin ?',
	'GET_LOSTPASS' 			=> 'Şifreni iste',
	'E_GET_LOSTPASS' 		=> 'Şifrenizi isteyebilmek için email adresinizi girmelisiniz.',
	'WRONG_DB_EMAIL' 		=> 'Girilen email adresi database\'de bulunamadı!',
	// 1 günlük aradan sonra saat 11:35'te Türkçe'leştirme çalışmaları başladı
	'GET_LOSTPASS_MSG' 		=> "Şifrenizi resetlememizi istediniz, bunun için link\'e tıklayın ve onaylayın : \r\n %1\$s \r\n Yeni Şifreniz : %2\$s",
	'CANT_SEND_NEWPASS' 	=> 'Hata... yeni şifreniz yollanamadı!',
	'OK_SEND_NEWPASS' 		=> 'Yeni şifrenizi yolladdık',
	'OK_APPLY_NEWPASS' 		=> 'Yeni şifreniz düzenlendi. şimdi hesabınıza giriş yapabilirsiniz.',
	'GUIDE' 				=> 'Dosya uzantıları',
	'GUIDE_VISITORS' 		=> 'Ziyaretçiler için izin verilen dosya uzantıları',
	'GUIDE_USERS' 			=> 'Kullanıcılar için izin verilen dosya uzantıları:',
	'EXT' 					=> 'Uzantı',
	'SIZE' 					=> 'Boyut',
	'REPORT' 				=> 'Rapor et',
	'YOURNAME' 				=> 'Ismınız',
	'URL' 					=> 'Bağlantı',
	'REASON' 				=> 'Sebep',
	'NO_ID' 				=> 'Dosya seçilmedi ..!!',
	'NO_ME300RES' 			=> 'Sebep kutusu 300karakterden fazla olamaz!!',
	'THNX_REPORTED' 		=> 'Raporunuzu aldık, Teşekkürler.',
	'RULES' 				=> 'Kurallar',
	'NO_RULES_NOW' 			=> 'Şuan için kurallar belirlenmedi.',
	'E_RULES' 				=> 'Bunlar bizim servisimizin kuralları',
	'CALL' 					=> 'Iletişime Geç',
	'SEND' 					=> 'Gönder',
	'TEXT' 					=> 'Yorumunuz',
	'NO_ME300TEXT' 			=> 'Yorumunuz 300karakterden fazla olamaz!!',
	'THNX_CALLED' 			=> 'Gönderildi ... En kısa sürede yanıt alıcaksınız.',
	'NO_DEL_F' 				=> 'Üzgünüm, dosya silme Linki admin tarafından kapatılmış',
	'E_DEL_F' 				=> 'Dosya silme Linki',
	'WRONG_URL' 			=> 'Hatalı link ..',
	'CANT_DEL_F' 			=> 'Hata: Dosya silinemedi .. Zaten silinmiş!',
	'CANT_DELETE_SQL' 		=> 'Database\'den siinemedi!',
	'DELETE_SUCCESFUL' 		=> 'Başarıyla silindi.',
	'STATS' 				=> 'Istatistikler',
	'STATS_CLOSED' 			=> 'The statistics page is closed by the administrator.',
	'FILES_ST' 				=> 'Yüklendi',
	'FILE' 					=> 'Dosya',
	'USERS_ST' 				=> 'Toplam Üye',
	'USER' 					=> 'üye',
	'SIZES_ST' 				=> 'Yüklenen dosyaların toplam boyutu',
	'LSTFLE_ST' 			=> 'En yeni yüklenen',
	'LSTDELST' 				=> 'Indırılmemiş dosyalar için son kontrol',
	'S_C_T' 				=> 'Bugün ziyaretçiler',
	'S_C_Y' 				=> 'Dün ziyaretçiler',
	'S_C_A' 				=> 'Toplam ziyaretçi sayısı',
	'LAST_1_H' 				=> 'Istatistikler son 1 saat için',
	'DOWNLAOD' 				=> 'Indir',
	'FILE_FOUNDED' 			=> 'Dosya Bulundu .. ',
	'WAIT' 					=> 'Lütfen Bekleyin ..',
	'CLICK_DOWN' 			=> 'Buraya tıkla ve indir',
	'JS_MUST_ON' 			=> 'Tarayıcınızda javascript uygulamasına izin verin!',
	'FILE_INFO' 			=> 'Dosya Bilgileri',
	'FILENAME' 				=> 'Dosya ismi',
	'FILESIZE' 				=> 'Dosya Boyutu',
	'FILETYPE' 				=> 'Dosya tipi',
	'FILEDATE' 				=> 'Yüklenme tarihi',
	'FILEUPS' 				=> 'Indirilme sayısı',
	'FILEREPORT' 			=> 'Kurallara haykırı dosyayı ihbar et',
	'FILE_NO_FOUNDED' 		=> 'Dosya Bulunamadı ..!!',
	'IMG_NO_FOUNDED' 		=> 'Resim Bulunamadı ..!!',
	'NOT_IMG' 				=> 'Bu bir resim değil !!',
	'MORE_F_FILES' 			=> 'This is the final limit for input fields',
	'DOWNLOAD_F' 			=> '[ Dosya Yükle ]',
	'DOWNLOAD_T' 			=> '[ Dosyayı link\'ten yükle ]',
	'PAST_URL_HERE' 		=> '[ Link\'i buraya yapıştırın ]',
	'SAME_FILE_EXIST' 		=> 'Dosya "%s" zaten var, Ismini değiştirin ve tekrar deneyin.',
	'NO_FILE_SELECTED' 		=> 'Önce dosya seçmelisin !!',
	'WRONG_F_NAME' 			=> 'Dosya ismi "%s" izin verilmeyen karakterler içeriyor.',
	'FORBID_EXT' 			=> 'Uzantı "%s" desteklenmiyor. Lütfen bizimle iletişime geçin',
	'SIZE_F_BIG' 			=> 'Dosya boyutu "%1$s" , %2$s\'dan küçük olmalı .',
	'CANT_CON_FTP' 			=> 'Bağlantı yapılamadı ',
	'URL_F_DEL' 			=> 'Dosyayı silmek için bağlantı',
	'URL_F_THMB' 			=> 'Dosya önizlemesi için bağlantı',
	'URL_F_FILE' 			=> 'Dosya için bağlantı',
	'URL_F_IMG' 			=> 'Resim için bağlantı',
	'URL_F_BBC' 			=> 'Forumlar için bağlantı',
	'IMG_DOWNLAODED' 		=> 'Resim başarıyla yüklendi.',
	//Tarih 19 Mayıs 2010 saat 12:46 Türkçeleştirme çalışmaları devam ediyor... CEZALAND || Emeğe saygı
	'FILE_DOWNLAODED' 		=> 'Dosya başarıyla yüklendi.',
	'CANT_UPLAOD' 			=> 'Hata: dosya "%s" BİLİNMEYEN bir sebepten dolayı yüklenemedi!',
	'NEW_DIR_CRT' 			=> 'Yeni klasör oluşturuldu',
	'PR_DIR_CRT' 			=> 'Klasörün CHMOD ayarı yapılmadı',
	'CANT_DIR_CRT' 			=> 'Klasör otomatik olarak yaratılamadı, bunu elle yapmalısınız.',
	'AGREE_RULES' 			=> 'Kuralları okudum onayladım',
	'CHANG_TO_URL_FILE' 	=> 'Yükleme metodunu değiştir',
	'URL_CANT_GET' 			=> 'Dosyayı linkten alma sırasında hata..',
	'ADMINCP' 				=> 'Admin Kontrol Paneli',
	'JUMPTO' 				=> 'Buraya zıpla',
	'GO_BACK_BROWSER' 		=> 'Geri git',
	'U_R_BANNED' 			=> 'IP\'niz banlandı.',
	'U_R_FLOODER' 			=> 'Bu flood koruma sistemidirs ...',
	'U_NOT_ADMIN' 			=> 'Admin yetkilerine sahip değilsin',
	'UPDATE_CONFIG' 		=> 'Ayarları güncelle',
	'YES' 					=> 'Evet',
	'NO' 					=> 'Hayır',
	'NO_CHANGE' 			=> 'Değişim yok',
	'CHANGE_MD5' 			=> 'MD5 Kullanarak değiştir',
	'CHANGE_TIME' 			=> 'TIME Kullanarak değiştir',
	'SITENAME' 				=> 'Site ismi',
	'SITEMAIL' 				=> 'Email addresiniz',
	'SITEMAIL2' 			=> 'Raporlar için email adresiniz',
	'SITEURL' 				=> 'Site adresi',
	'FOLDERNAME' 			=> 'Yüklenen dosyalar için klasör ismi',
	'PREFIXNAME' 			=> 'Dosya öneki <small>( {rand:4} yada {date:d_Y} kullanabilirsiniz)</small>',
	'FILESNUM' 				=> 'Aynı anda en fazla yükleme',
	'FILESNUM_SHOW' 		=> 'Tüm dosya yükleme kutularını göster<small>(önermiyorum)</small>',
	'SITECLOSE' 			=> 'Siteyi kapat',
	'CLOSEMSG' 				=> 'Site kapalı durum mesajı',
	'LANGUAGE' 				=> 'Dil',
	'DECODE' 				=> 'Dosya ismini değiş',
	'STYLE' 				=> 'Servis stili',
	'SEC_DOWN' 				=> 'X Saniye sonra indirme başlar<small><p>(Kaç saniye sonra indirme işlemi başlasın)</p></small>',
	'STATFOOTER' 			=> 'Footer\'da sayfa istatistikleri',
	'GZIP' 					=> 'gzip kullan',
	'GOOGLEANALYTICS' 		=> '<a href="http://www.google.com/analytics" target="_kleeja"><span style="color:orange">Google</span> Analytics</a>',
	'WELCOME_MSG' 			=> 'Hoşgeldin Mesajı',
	'USER_SYSTEM' 			=> 'Üye Sistemi<small>(Denemek için değiştirmeyin!)</small>',
	'NORMAL' 				=> 'Normal',
	'W_PHPBB' 				=> 'phpbb ile bağdaştır',
	'W_MYSBB' 				=> 'MySmartBB ile bağdaştır',
	'W_VBB' 				=> 'vBulletin ile bağdaştır',
	'ENAB_REG' 				=> 'Kayıt olmayı aç kapa',
	'TOTAL_SIZE' 			=> 'Maksimum servis boyutu[Megabayt]',
	'THUMBS_IMGS' 			=> 'Resim önizlemelerini aç',
	'WRITE_IMGS' 			=> 'Resimlere sitenin küçük resmini eklemeyi aç',
	'ID_FORM' 				=> 'Id form',
	'IDF' 					=> 'Databasedeki dosya ıd\'si',
	'IDFF' 					=> 'Dosya ismi',
	'IDFD' 					=> 'Direk',
	'DEL_URL_FILE' 			=> 'Dosya silme linki özelliğini aç',
	'WWW_URL' 				=> 'URL\'den dosya yükleme özelliğini aç',
	'ALLOW_STAT_PG' 		=> 'Sayfa istatistiklerini aç',
	'ALLOW_ONLINE' 			=> 'Kimler online\'yi aç',
	'MOD_WRITER' 			=> 'Yeniden yazma modu',
	'MOD_WRITER_EX' 		=> 'HTML linkler..',
	'DEL_F_DAY' 			=> 'Indirilmeyen dosyaları x gün içerisinde sil<small>(0 önerilir size kalmış)</small>',
	'NUMFIELD_S' 			=> 'Bazı alanlarda sadece rakam kullanabilirsin !!',
	'CONFIGS_UPDATED' 		=> 'Ayarlar başarıyla güncellendi.',
	'UPDATE_EXTS' 			=> 'Uzantıları Güncelle',
	'GROUP' 				=> 'Kategori',
	'SIZE_G' 				=> 'Boyut [ <font style="color:red">Ziyaretçiler için</font> ]',
	'SIZE_U' 				=> 'Boyut [ <font style="color:green">Üyeler için</font> ]',
	'ALLOW_G' 				=> 'Izinli <br />[Ziyaretçi]',
	'ALLOW_U' 				=> 'Izinli <br />[Üyeye]',
	'E_EXTS' 				=> 'Not : Boyutlar kilobayt üzerinden hesaplanmakta .</i>',
	'UPDATED_EXTS' 			=> 'Uzantılar başarıyla güncellendi.',
	'UPDATE_FILES' 			=> 'Dosyaları güncelle',
	'BY' 					=> 'By',
	'FILDER' 				=> 'Klasör',
	'DELETE' 				=> 'Sil',
	'GUST' 					=> 'Ziyaretçi',
	'UPDATE_REPORTS' 		=> 'Raporları güncelle',
	'NAME' 					=> 'Isim',
	'CLICKHERE' 			=> 'Buraya Tıkla',
	'TIME' 					=> 'Zaman',
	'E_CLICK' 				=> 'Burada görüntülemek için bir tane seçin',
	'IP' 					=> 'IP',
	'REPLY' 				=> '[ Cevapla ]',
	'REPLY_REPORT' 			=> 'Rapor üzerinden cevapla',
	'U_REPORT_ON' 			=> 'Raporun hakkında ',
	'BY_EMAIL' 				=> 'email ile ',
	'ADMIN_REPLIED' 		=> 'Admin cevapladı',
	'CANT_SEND_MAIL' 		=> 'email ile cevap yollanamıyor',
	'IS_SEND_MAIL' 			=> 'Cevap yollandı.',
	'REPORTS_UPDATED' 		=> 'Raporlar güncellendi.',
	'UPDATE_CALSS' 			=> 'Yorumları güncelle',
	'REPLY_CALL' 			=> 'Yorumu cevapla',
	'REPLIED_ON_CAL' 		=> 'Yorumunuz hakkında ',
	'CALLS_UPDATED' 		=> 'Yorumlar başarıyla güncellendi.',
	'IS_ADMIN' 				=> 'Admin',
	'UPDATE_USERS' 			=> 'Üyeleri Güncelle',
	'USERS_UPDATED' 		=> 'Üyeler başarıyla güncellendi.',
	'E_BACKUP' 				=> 'Yedeklemek istediğiniz tabloları seçin:',
	'TAKE_BK' 				=> 'Yedekle',
	'REPAIRE_TABLE' 		=> '[Tablolar] Onarıldı. ',
	'REPAIRE_F_STAT' 		=> '[istatistik] total number of files has been recounted.',
	'REPAIRE_S_STAT' 		=> '[stats] total size of files has been recounted.',
	'REPAIRE_CACHE' 		=> '[Çerez] temizlendi  ..',
	'KLEEJA_CP' 			=> '[ Kleeja ] Yönetim Paneli',
	'GENERAL_STAT' 			=> 'Genel Istatistikler',
	'OTHER_INFO' 			=> 'Diğer Bilgiler',
	'AFILES_NUM' 			=> 'Toplam dosya sayısı',
	'AFILES_SIZE' 			=> 'Dosyaların toplam boyutu',
	'AFILES_SIZE_SPACE' 	=> 'Dosyaların kullandığı toplam alan',
	'AUSERS_NUM' 			=> 'Toplam üye',
	'LAST_GOOGLE' 			=> 'Google\'ye son ziyaret',
	'GOOGLE_NUM' 			=> 'Google ziyaretleri',
	'LAST_YAHOO' 			=> 'Yahoo\'ya son ziyaret!',
	'YAHOO_NUM' 			=> 'Yahoo! ziyaretleri',
	'KLEEJA_CP_W' 			=> 'Selam  [ %s ] ,  <b>Kleeja</b> Yönetim paneline Hoşgeldin',
	'PHP_VER' 				=> 'php versiyon',
	'MYSQL_VER' 			=> 'mysql versiyon',
	'N_IMGS' 				=> 'Resimler',
	'N_ZIPS' 				=> 'ZIP Dosyaları',
	'N_TXTS' 				=> 'TXT Dosyaları',
	'N_DOCS' 				=> 'Belgeler',
	'N_RM' 					=> 'RealMedia',
	'N_WM' 					=> 'WindowsMedia',
	'N_SWF' 				=> 'Flash Dosyaları',
	'N_QT' 					=> 'QuickTime',
	'N_OTHERFILE' 			=> 'Diğer Dosyalar',
	'LOGOUT_CP_OK' 			=> 'Admin olarak oturumunuz temizlendi, çıkış yaptınız ..',
	'RETURN_HOME' 			=> 'Siteye Dön',
	'R_CONFIGS' 			=> 'Genel Ayarlar',
	'R_CPINDEX' 			=> 'Admin AnaSayfası',
	'R_EXTS' 				=> 'Uzantı Ayarları',
	'R_FILES' 				=> 'Dosya Kontrolü',
	'R_REPORTS' 			=> 'Raporlar',
	'R_CALLS' 				=> 'Mesajlar',
	'R_USERS' 				=> 'Üye Kontrol',
	'R_BCKUP' 				=> 'Yedekleme',
	'R_REPAIR' 				=> 'Tabloları Onar',
	'R_LGOUTCP' 			=> 'Oturumu Temizle',
	'R_BAN' 				=> 'Ban Kontrolü',
	// 19 Mayıs 2010 Saat: 13:43 Türkçeleştirme Çalışmaları Devam ediyor... || CEZALAND || Emeğe Saygı Lütfen...
	'BAN_EXP1' 				=> 'Banlanan IP\'leri düzenle ve burdan yenilerini ekle ..',
	'BAN_EXP2' 				=> 'Yıldız (*) sembolünü toplu ban atmak için kullanabilirsiniz.... ve IP\'leri ayırırken (|)\'i kullanabilirsiniz',
	'UPDATE_BAN' 			=> 'Kaydet',
	'BAN_UPDATED' 			=> 'Değişimler başarıyla kaydedildi.',
	'R_RULES' 				=> 'Kurallar',
	'RULES_EXP' 			=> 'Buradan servis kurallarını düzenleyebilirsin',
	'UPDATE_RULES' 			=> 'Güncelle',
	'RULES_UPDATED' 		=> 'Kurallar başarıyla güncellendi ..',
	'R_SEARCH' 				=> 'Gelişmiş arama',
	'SEARCH_FILES' 			=> 'Dosyalarda ara',
	'SEARCH_SUBMIT' 		=> 'Yeni ara',
	'LAST_DOWN' 			=> 'Son indirilen',
	'TODAY' 				=> 'Bugün',
	'DAYS' 					=> 'Gün',
	'WAS_B4' 				=> 'den beri',
	'BITE' 					=> 'bayt',
	'SEARCH_USERS' 			=> 'Üyelerde ara',
	'R_IMG_CTRL' 			=> 'Resim kontrol',
	'ENABLE_USERFILE' 		=> 'Kullanıcı dosyalarını aç',
	'R_EXTRA' 				=> 'Ekstra Templateler',
	'EX_HEADER_N' 			=> 'Ekstra header ... orjinal header\'ın üzerinde görünür',
	'EX_FOOTER_N' 			=> 'Ekstra footer ... orjinal footer\'in üzerinde görünür',
	'UPDATE_EXTRA' 			=> 'Template eklemelerini kaydet',
	'EXTRA_UPDATED' 		=> 'Template eklemeleri kaydedildi',
	'R_STYLES' 				=> 'Stiller',
	'STYLES_EXP' 			=> 'Silmek yada düzenlemek için stil seçin',
	'SHOW_TPLS' 			=> 'Templateleri göster',
	'SUBMIT' 				=> 'Gönder',
	'EDIT' 					=> 'Düzenle',
	'TPL_UPDATED' 			=> 'Template güncellendi...',
	'TPL_DELETED' 			=> 'Template silindi ...',
	//Saat 14:16 Türkçeleştirme çabaları devam ediyor... Emeğe Saygı .... CEZALAND
	'NO_TPL_SHOOSED' 		=> 'Herhangi bir template seçmemişsiniz!',
	'NO_TPL_NAME_WROTE' 	=> 'Template\'ye isim girin!',
	'ADD_NEW_STYLE' 		=> 'Yeni stil yarat',
	'EXPORT_AS_XML' 		=> 'xml olarak çıkart',
	'NEW_STYLES_EXP' 		=> 'XML dosyasından stil yükle',
	'NEW_STYLE_ADDED' 		=> 'Stil başarıyla eklendi',
	
	'ERR_IN_UPLOAD_XML_FILE' 		=> 'Yüklerken Hata...',
	'ERR_UPLOAD_XML_FILE_NO_TMP' 	=> 'Yüklerken Hata...',
	'ERR_UPLOAD_XML_NO_CONTENT' 	=> 'Seçilen dosya boş!',
	'ERR_XML_NO_G_TAGS' 			=> 'Bazı gerekli etiketler dosyada bulunamadı!',
	'STYLE_DELETED' 				=> 'Stil başarıyla kaldırıldı',
	'STYLE_1_NOT_FOR_DEL' 			=> 'Default stili silemezsiniz!',
	'ADD_NEW_TPL' 					=> 'Yeni template ekle',
	'ADD_NEW_TPL_EXP' 				=> 'Yeni template için bir isim girin',
	'TPL_CREATED' 					=> 'Yeni template başarıyla oluşturuldu...',
	'R_LANGS' 						=> 'Kelimeler ve Cümleler',
	'WORDS_UPDATED' 				=> 'Kelimeler başarıyla güncellendi...',
	
	/* //deprecated, removed from rc6+
	'LANGS_EXP' => 'Kelime silme ve güncelleme işlemini devamında yapabilirsiniz',
	'SHOW_WORDS' => 'Kelime ve Cümleleri görüntüle',
	'ADD_NEW_LANG' => 'Yeni dil ekle',
	'NEW_LANG_EXP' => 'Alternatif dil yükle',
	'SHOW_WORDS_EXP' => 'Dildeki değişkenleri gör bunları düzenle yada sil....',
	'ADD_NEW_WORD' => 'Yeni dil yarat',
	'ADD_NEW_WORD_EXP' => 'Yeni dil yarat. ve bunun çevirisini yap',
	'LANG_DELETED' => 'Dil silindi...',
	'LANG_1_NOT_FOR_DEL' => 'Default dil\'i silemezsiniz',
	'NEW_LANG_ADDED' => 'Yeni dil eklendi..',
	'NO_WORD_SHOOSED' => 'Kelime seçmediniz!',
	'WORD_DELETED' => 'Kelime başarıyla silindi...',
	'WORD_CREATED' => 'Kelime başarıyla eklendi...',
	*/
	'PLUGINS' 					=> 'Eklentiler',
	'PLUGINS_EX' 				=> 'Silinmiş yada güncellenmiş eklentiler burada...',
	'DISABLE' 					=> 'Kapalı',
	'ENABLE' 					=> 'Açık',
	'ADD_NEW_PLUGIN' 			=> 'Eklenti ekle',
	'ADD_NEW_PLUGIN_EXP' 		=> 'XML dosyasından eklenti yükle',
	'PLUGIN_DELETED' 			=> 'Eklenti silindi...',
	'PLGUIN_DISABLED_ENABLED' 	=> 'Eklenti Açıldı / Kapatıldı',
	'NO_PLUGINS' 				=> 'Eklenti bulunamadı',
	'NEW_PLUGIN_ADDED' 			=> 'Eklenti eklendi ... <br /> Not: bazı eklentiler ekstra dosyalar gerektirir , bu dosyaları Kleeja\'yı yüklediğiniz ana dizine atmalısınız.',
	'PLUGIN_EXISTS_BEFORE' 		=> 'Bu eklenti zaten yüklü, ve güncellenmeye ihtiyacı yok!.',
	'PLUGIN_UPDATED_SUCCESS' 	=> 'Eklenti başarıyla güncellendi...',
	'R_CHECK_UPDATE' 			=> 'Güncellemeleri kontrol et',
	'ERROR_CHECK_VER' 			=> 'Hata: Güncelleme bilgisi alınamadı , daha sonra tekrar deneyin !',
	'UPDATE_KLJ_NOW' 			=> 'Şimdi versiyonunuzu güncelleyebilirsiniz!. Daha fazla bilgi için Kleeja.com\'u ziyaret edin',
	'U_LAST_VER_KLJ' 			=> 'Kleeja\'nın son versiyonunu kullanıyorsunuz...',
	
	//Bir kaç arapça yer var aşağılarda yeni sürümlerde onlar ingilizceye çevrildikçe bende sizlere Türkçeye çevireceğim.... CEZALAND
	//rc6
	'U_USE_PRE_RE' 				=> 'Şuan tam sürümden önceki beta sürümünü test ediyorsunuz, <a href="http://www.kleeja.com/bugs/">Buraya tıklayın</a> ve bize hataları ve açıkları bildirin.',
	'STYLE_IS_DEFAULT'			=> 'Default stil',
	'MAKE_AS_DEFAULT'			=> 'Default olarak ayarla',
	'TPLS_RE_BASIC'				=>	'Basit Templateler', 
	'TPLS_RE_MSG'				=>	'Uyarı Templateleri', 
	'TPLS_RE_USER'				=>	'Kullanıcı Templateleri', 
	'TPLS_RE_OTHER'				=>	'Diğer Templateler',
	'STYLE_NOW_IS_DEFAULT' 		=> 'Stil "%s" default stil olarak atandı',
	'STYLE_DIR_NOT_WR'			=>	'Stil yolu %s yazılabilir değil,  CHMOD\'u 777 yapmadan bu stildeki templateleri düzenleyemezsiniz.',
	'TPL_PATH_NOT_FOUND' 		=> 'Template %s bulunamadı !',
	'NO_CACHED_STYLES'			=> 'Önbelleğe alınmış stil yok !',
	'OPEN'						=> 'Açık',
	'SEARCH_FOR'				=> 'Bunu ara',
	'REPLACE_WITH'				=> 'Bunla değiştir',
	'REPLACE_TO_REACH'			=> 'Until you reach the next code',
	'ADD_AFTER'					=> 'Sonrasına ekle',
	'ADD_AFTER_SAME_LINE'		=> 'Aynı satırda sonrasına ekle',
	'ADD_BEFORE'				=> 'Öncesine ekle',
	'ADD_BEFORE_SAME_LINE'		=> 'Aynı satırda öncesine ekle',
	'ADD_IN'					=> 'Add in it after created',
	'CACHED_STYLES_DELETED'		=>'ÖnBelleklenmiş stiller silindi.',
	'CACHED_STYLES'				=>' ÖnBelleklenmiş stiller',
	'DELETE_CACHED_STYLES'		=>'Delete cached styles',
	'CACHED_STYLES_DISC'		=>	'The stored templates are the remaining modifications from additions that were not applied either because of the permissions or the lack of a suitable search keyword therefore, it needs to be set manually %s .',
	'UPDATE_NOW_S'				=>	'Kleeja\'nın eski versiyonunu kullanıyorsunuz. Şimdi güncelleyin. Şu anki versiyonunuz: %1$s en son çıkan versiyon: %2$s',
	'ADD_NEW_EXT'				=> 'Yeni uzantı ekle',
	'ADD_NEW_EXT_EXP'			=> 'Uzantı\'yı gir ve Kategori seç',
	'EMPTY_EXT_FIELD'			=>	'Uzantı alanı boş!', 
	'NEW_EXT_ADD'				=>	'Yeni uzantı eklendi. ',
	'NEW_EXT_EXISTS_B4'			=>	'%s Uzantısı zaten var!.',
	'KILOBYTE'					=>	'Kilobayt',
	'NOT_SAFE_FILE'				=> 'Dosya "%s" güvenilir gözükmüyor !',
	'CONFIG_WRITEABLE'			=> 'config.php dosyası şuan yazılabilir durumdda güvenliğiniz için, Dosya izinlerini 640 yada 644 yapınız.',
	'NOTE'						=>	'Not',
	'WARN'						=>	'Uyarı',
	'NO_KLEEJA_COPYRIGHTS'		=> 'you seem to have accidentally removed the copyrights from the footer, please put it back on so we can continue to develop Kleeja free of charge, you can buy a copyright removal license %s .',
	'USERS_NOT_NORMAL_SYS'		=> 'The current users system is not the normal one, which means that the current users cannot be edited from here but from the script that was integrated with Kleeja, those users use the normal membership system.',
	'ARE_YOU_SURE_DO_THIS'		=> 'Bunu yapmak istediğine eminmisin?',
	'SITE_FOR_MEMBER_ONLY'		=> 'Burası sadece üyelere özel, Dosya yükleyebilmek için kayıt olun yada giriş yapın.',
	'DIMENSIONS_THMB'			=> 'Küçük resmin boyutu',
	'AUTH_INTEGRATION_N_UTF8_T'	=> '%s bu utf8 değil',
	'AUTH_INTEGRATION_N_UTF8' 	=> '%s database\'sinin Kleeja ile entegre olabilmesi için utf8 olması gerekiyor !.',
	'SCRIPT_AUTH_PATH_WRONG'	=> 'Hedef %s doğru değil, bunu şimdi değiştirin.',
	'SHOW_MY_FILECP'			=> 'Dosyalarımı Göster',
	'PASS_ON_CHANGE'			=> 'Şifrenizi Değiştirin',
	'MOST_EVER_ONLINE'			=> 'Üyelerden en çok online olan',
	'ON'						=> 'online',
	'LAST_REG'					=> 'En yeni üye',
	'NEW_USER'					=> 'Yeni üye',
	'LIVEXTS'					=> 'Canlı uzantılar',
	
	'ADD_UPLAD_A'				=> 'Daha fazla alan ekle',
	'ADD_UPLAD_B'				=> 'Alan sil',
	'COPYRIGHTS_X'				=> 'Tüm hakları saklıdır',
	'ADMIN_DELETE_FILE_ERR'		=> 'Kullanıcı dosyalarını silmeye çalışırken hata oluştu . Yeniden deneyin ',
	'ADMIN_DELETE_FILE_OK'		=> 'Bitti ! ',
	'ADMIN_DELETE_FILES'		=> 'Tüm kullanıcı dosyalarını silin',
	
	'KLJ_MORE_PLUGINS'			=> array('Daha fazla eklenti edinebilmek için Kleeja\'nın eklenti merkezine gidin ,<a target="_blank" href="http://www.kleeja.com/plugins/">Eklenti Merkezi</a> .',
								'Kleeja için yapılan eklentileri görmek istermisin? Kimbilir belki bir kaçı tam sana göredir. O zaman hemen <a target="_blank" href="http://www.kleeja.com/plugins/">Kleeja\'nın Eklenti Merkezi</a>\'ne Git. ',
								),
	'KLJ_MORE_STYLES'			=> array('Daha fazla stilemi ihtiyacın var? Kleeja\'nın stil galerisi işine yarayabilir , Hemen <a target="_blank" href="http://www.kleeja.com/styles/">Kleeja\'nın Stil Merkezi</a>\'ne Git .',
								'Sen tasarımcımısın? Daha fazla stil için Kleeja\'nın stil galerisine uğramaya ne dersin? <a target="_blank" href="http://www.kleeja.com/styles/">Kleeja\'nın Stil Galerisi</a> .',
								),
							 
	'CHECK_ALL'	 				=> 'Hepsini seç',
	'BCONVERTER' 				=> 'Bayt Çevirici',
	'NO_HTACCESS_DIR_UP'		=> '.htaccess dosyası "%s" klasöründe bulunamadı, Bunun anlamı hackerlar dosyaya virüs enjekte ederek sitenize zarar verebilir!',
	'NO_HTACCESS_DIR_UP_THUMB'	=> '.htaccess dosyası resimlerin önizlemelerinin olduğu klasör "%s" \'de bulunamadı, Bunun anlamı hackerlar resimlere virüs yerleştirerek sitenize zarar verebilir!',
	//%85 oranında bitmiş durumda Tarih: 19 Mayıs 2010 Saat 15:00 by CEZALAND || Emeğe saygı
	'COOKIE_DOMAIN' 			=> 'Domain çerezi',
	'COOKIE_NAME' 				=> 'Çerez öneki',
	'COOKIE_PATH' 				=> 'Çerez adresi',
	'COOKIE_SECURE'				=> 'Çerez güvenliği',
	'BROSWERF'					=> 'Kullanıcı Dosyaları',
	'REMME'						=> 'Beni Hatırla',
	'HOUR'						=> '1 saat',
	'5HOURS'					=> '5 saat',
	'DAY'						=> '1 gün',
	'WEEK'						=> '1 hafta',
	'MONTH'						=> '1 ay',
	'YEAR'						=> '1 yıl',
	'ADMINISTRATORS'			=> 'Adminler',
	'INVALID_FORM_KEY'			=> 'Hatalı form, yada oturumunuz zaman aşımına uğradı',
	'REFRESH_CAPTCHA'			=> 'Buraya tıkla ve	CAPTCHA resmini yenile',
	'CHOSE_F'					=> 'Lütfen bir dosya seçin',
	'NO_REPEATING_UPLOADING'	=> 'Bu sayfa yüklemeden sonra yenilenemez!.',
	'NOTE_CODE' 				=> 'Resimde gördüğünüz karakterleri yazın',
	'USER_LOGIN'				=> ' Giriş + Sadece Üyeler ',
	'FILES_DELETED' 			=> 'Dosyalar Başarıyla silindi.',
	'GUIDE_GROUPS' 			    => 'Grup',
	'ALL_FILES' 			    => 'Hesabınızdaki dosya sayısı',
	'NO_FILE_USER'				=> 'Hesabınızda dosya bulunamadı!',
	'SHOWFILESBYIP'				=> 'Dosyaları IP\'ye göre görüntüle', 
	'DELETEALLRES'				=> 'Tüm sonuçları sil',
	'ADMIN_DELETE_FILES_OK'     => 'Dosya %s başarıyla silindi',
	'ADMIN_DELETE_FILES_NOF'	=> 'Silinecek dosya yok',
	'NOT_EXSIT_USER'			=> 'Üzgünüm, görünüşe göre bu üye database\'de yok... Silinen üyeyle uğraşmadığından emin ol !!!!',
	'ADMIN_DELETE_NO_FILE'		=> 'Bu kullanıcının silinecek dosyası yok ! .',
	'WAIT_LOADING'				=> 'Lütfen bekleyin, dosyalarınız serverımıza yükleniyor...',
	'NOTICECLOSED'				=> 'Duyuru: Sitemiz Şuanda Kapalı',
	'CONFIG_KLJ_MENUS_OTHER'	=> 'Diğer Ayarlar',
	'CONFIG_KLJ_MENUS_GENERAL'	=> 'Genel Ayarlar',
	'CONFIG_KLJ_MENUS_ALL'		=> 'Tüm Ayarları görüntüle',
	'CONFIG_KLJ_MENUS_UPLOAD'	=> 'Yüklleme ayarları',
	'CONFIG_KLJ_MENUS_INTERFACE'=> 'Arayüz ve tasarım ayarları',
	'CONFIG_KLJ_MENUS_ADVANCED' => 'Gelişmiş Ayarlar',
	'DELF_CAUTION'				=> '<span class="delf_caution">Uyarı: bu fonksiyonda küçük rakamlar kullanmalısınız .</span>',
	'PLUGIN_N_CMPT_KLJ'			=> 'Bu eklenti Kleeja\'nın bu versiyonu ile uyumlu değil.',
	'PHPINI_FILESIZE_SMALL'		=> 'Servisiniz için ayarlanan maksimum dosya boyutu "%1$s" PHP ayarlarınızdan upload_max_size\'yi "%2$s" istediğiniz boyut ile değiştirmelisiniz.',
	'PHPINI_MPOSTSIZE_SMALL'	=> 'Bu dosyaları yükleyebilmek için "%1$s" öncelikle,  post_max_size\'ye PHP ayarlarından daha yüksek bir değer vermelisin, BAzen "%2$s" iyi bir performans verebilir.',
	'NUMPER_REPORT' 			=> 'Raporların sayısı',
	'NO_UP_CHANGE_S'			=> 'Değişen bişi yok ...',
	'ADD_HEADER_EXTRA' 			=> 'Ekstra Header',
	'ADD_FOOTER_EXTRA' 			=> 'Ekstra footer',
	'ADMIN_USING_IE6'			=> 'InternetExplorer6 Kullanıyorsunuz , Lütfen tarayıcınızı şimdi FireFox\'a Güncelleyin!!!',
	'FOOTER_TXTS'				=> array('PLUGINS'=> 'Plugins', 'STYLES'=>'Styles', 'BUGS'=>'Bug report'),
	'T_ISNT_WRITEABLE'			=> ' <strong>%s</strong> template\'si düzenlenemedi. (Yazılabilir değil)',
	'UNKNOWN'					=> 'Bilinmeyen',
	'T_CLEANING_FILES_NOW'		=> 'Geçici dosyalar siliniyor, Bu işlem sırasında başka bir işlem yapmayın.',
	'WE_UPDATING_KLEEJA_NOW'	=> 'Bakım için kapalıyız, Çok yakında tekrar gelin...',
	'HOW_UPDATE_KLEEJA'			=> 'Kleeja\'yı Nasıl Güncellerim?',
	'HOW_UPDATE_KLEEJA_STEP1'	=> 'Kleeja\'nın kendi sitesine girin <a target="_blank" href="http://www.kleeja.com/">Kleeja.com</a> ordan indirme sayfasına giderek, Kleeja\'nın en son versiyonu indirin yada mevcutsa güncelleme kopyasını.',
	'HOW_UPDATE_KLEEJA_STEP2'	=> 'Dosyaları Arşivden çıkartın ve sitedeki dosyalar ile değiştirin(üzerine yazın) <b>config.php\'yi düzenleyin</b>.',
	'HOW_UPDATE_KLEEJA_STEP3'	=> 'Bitti, takip eden bağlantıya girerek güncellemeyi tamamlayın.',
	'RETURN_TEMPLATE_BK'		=> 'Herhangi bir yedek templatesini kullan',
	'RETURN_TEMPLATE_BK_EXP'	=> 'Yedek dosyasını orjinal dosya ile değiştirmek için seçin, bu varsayılan temadaki template ile alakalıdır.',
	'TPL_BK_RETURNED'			=> 'Yedek kopyası %s stili için düzenlendi.',
	'ERROR_TRY_AGAIN'			=> 'Hata, tekrar deneyin.',
	'VIEW'						=> 'Görüntüle',
	'REPLACE_WHOLW_TPL'			=> 'Bu template ile değiştir',
	'DEPEND_ON_NO_STYLE_ERR'	=> 'Bu stil "%s" üzerinde yapıldı ve bir hata görülmedi', 
	'PLUGINS_REQ_NO_STYLE_ERR'	=> 'هذا الستايل يتطلب ان تكون الاضافه/الاضافات [ %s ] مثبته لديك , ثبتها وحاول من جديد !.', 
	'PLUGIN_REQ_BY_STYLE_ERR'	=> 'الستايل الافتراضي الحالي يتطلب هذه الاضافه , لتستطيع ازالتها او تعطيلها يجب اولا تغيير الستايل.', 
	'KLJ_VER_NO_STYLE_ERR'		=> 'Bu stil Kleeja\'nın %s versiyonunu yada daha yenisini istiyor',
	'KLJ_STYLE_INFO'			=> 'Stil bilgisi',
	'STYLE_NAME'				=> 'Stil ismi',
	'STYLE_COPYRIGHT'			=> 'Copyright',
	'STYLE_VERSION'				=> 'Stil versiyonu',
	'STYLE_DEPEND_ON'			=> 'Üzerinde Yapıldı',
	'NONE'						=> 'Yok',
	'MESSAGE_NONE'				=> 'Mesaj Yok ...',
	'KLEEJA_TEAM'				=> 'Kleeja Yapım Takımı',
	'USER_STAT'					=> 'Kullanıcı istatistikleri',
	'SEARCH_STAT' 				=> 'Bot istatistiklerinde ara',
	'ERR_SEND_MAIL'				=> 'Mail yollama hatası, sonra tekrar deneyin !',
	'NOTHING'					=> 'Yeni dosya yada resim bulunamadı .. !!',
	'FIND_IP_FILES' 			=> 'Bulundu',
	'ALPHABETICAL_ORDER_FILES'	=> 'Dosyaları alfabetik sıraya sok', 
	'ORDER_SIZE'				=> 'Dosyaları en büyükten en küçüğe doğru sırala',
	'ORDER_TOTAL_DOWNLOADS'		=> 'Dosyaları indirilme sayısına göre sırala', 
	'COMMA_X'					=> '<p class="live_xts">separate by comma (<font style="font-size:large"> , </font>)</p>',
	'NO_SEARCH_WORD'			=> 'You didn\'t type anything in the search form !',
	'GUESTSECTOUPLOAD'			=> 'Ziyaretçiler yükleme işleminden sonra yeniden yükleyebilmek için kaç saniye bekleyecek',
	'USERSECTOUPLOAD'			=> 'Üyeler yükleme işleminden sonra yeniden yükleyebilmek için kaç saniye bekleyecek',
	'YOU_HAVE_TO_WAIT'			=> '%s saniye bekleyin .. sonra dosyalarınızı tekrar yüklemeyi deneyin',
	'ADM_UNWANTED_FILES'		=> 'يبدوا انك قمت بالترقيه من نسخه لاحقه وبسبب اختلاف اسماء بعض الملفات ستلاحظ وجود ازرار متكرره بلوحة التحكم . <br /> لحل المشكلة قم بإزالة كافة الملفات في المسار "includes/adm" واعادة رفعها من جديد.',
	'ADVANCED_SETTINGS_CATUION' => 'Uyarı : Bunları düzenlemeden önce ne olduklarını bilmelisiniz!',
	'HTML_URLS_ENABLED_NO_HTCC'	=> 'لقد قمت بتفعيل روابط الهتمل ولكنك اهملت نقل ملف الضبط الموجود في مجلد docs/.htaccess.txt لمجلد كليجا الرئيسي واعادة تسميته بـ ".htaccess". اذا لم تفهم شيئاً من هذا الكلام قم بالسؤال في الدعم الفني لكليجا او قم بتعطيل روابط الهتمل .',	
	'PLUGIN_FTP_EXP'			=> 'لا نستطيع التعديل على الملفات حالياً بدون تصريح الدخول للـ FTP, لذا قم بكتابتهم بالاسفل لنستطيع تثبيت الاضافه',
	'PLUGIN_FTP_HOST'			=> 'خادم الـ FTP',
	'PLUGIN_FTP_USER'			=> 'اسم المستخدم لـ FTP',
	'PLUGIN_FTP_PASS'			=> 'كلمة المرور لـ FTP',
	'PLUGIN_FTP_PATH'			=> 'مسار السكربت على الـ FTP',
	'PLUGIN_FTP_PORT'			=> 'منفذ الـ FTP <small>(غالبا هو 21 لذا ان كنت غير متأكد دعه كما هو.)</small>',
	'PLUGIN_CONFIRM_ADD'		=> 'انتبه, الاضافات هي تعديلات برمجيه على السكربت و قد تكون ضاره احيانا , لذا ان كنت غير متأكد من مصدر الاضافه ولم تقم بتحميلها من موقع كليجا فالافضل ان تراجع نفسك الآن . هل حقا تريد التثبيت ؟',
	'PLUGIN_ADDED_ZIPPED'		=> 'لقد تم تثبيت الاضافه, لاكمال عملية التثبيت قم %1$sبتحميل%2$s الملفات المعدلة و استبدالها يدوياً. عدم استبدال الملفات المعدله يعني عدم تركيب الاضافه بشكل جيد.',
	'PLUGIN_ADDED_ZIPPED_INST'	=> 'لقد تم تثبيت الاضافه, لاكمال عملية التثبيت قم %1$sبتحميل%2$s الملفات المعدلة و استبدالها يدوياً. عدم استبدال الملفات المعدله يعني عدم تركيب الاضافه بشكل جيد. <br /> ايضا يجب ان تقوم بـ %3$sقراءة%4$s تعليمات الاضافه لمعلومات اكثر. تعليمات الاضافة يمكن قراءتها لاحقاً من صفحة الاضافات.',
	'PLUGIN_DELETED_ZIPPED'		=> 'لقد تم حذف الاضافة, ليكتمل الحذف قم بـ%1$sتحميل%2$s الملفات المعدله واستبدالها يدوياً.', 
	'LOAD_IS_HIGH_NOW'			=> 'Our website facing very high load right now !, please wait and try refresh this page again.',

	//last line of this file ...					 
	'S_TRANSLATED_BY' 			=> '<b>Çeviri yapan</b>       <a href="http://www.forumvakti.net/">CEZALAND</a>',
	
));

#<-- EOF
/// Tarih: 19 Mayıs 2010 Saat 15:23 Çeviri başarıyla tamamlanmış bulunmakta. Yukarıdada belirttiğim gibi bir kaç arapça kelime var karşıma daha sitede çıkmadı ama script güncellendiğinde arapça kelimeler ingilizceye çevrildiğinde
///  bende sizler için Türkçeye çevireceğim
/// Türkçe Çeviri yapan CEZALAND ||| www.ForumVakti.net ||| Emeğe Saygı ||| Yiğidi öldür Hakkını yeme ! 
/// Turkish translation by CEZALAND || www.ForumVakti.net |||
