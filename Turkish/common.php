<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'tr',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'Hatalı Talep. Takip ettiğiniz link yanlış veya güncel değil.',
'No view'							=>	'Bu forumları görmek için gerekli yetkiye sahip değilsiniz.',
'No permission'						=>	'Bu sayfaya erişmek için gerekli yetkiye sahip değilsiniz.',
'Bad referrer'						=>	'Bad HTTP_REFERER. You were referred to this page from an unauthorized source. If the problem persists please make sure that \'Base URL\' is correctly set in Admin/Options and that you are visiting the forum by navigating to that URL. More information regarding the referrer check can be found in the FluxBB documentation.',
'No cookie'							=>	'You appear to have logged in successfully, however a cookie has not been set. Please check your settings and if applicable, enable cookies for this website.',
'Pun include error'					=>	'Unable to process user include %s from template %s. There is no such file in neither the template directory nor in the user include directory.',

// Miscellaneous
'Announcement'						=>	'Duyuru',
'Options'							=>	'Seçenekler',
'Submit'							=>	'Onayla', // "Name" of submit buttons
'Ban message'						=>	'Bu forumdan yasaklandınız.',
'Ban message 2'						=>	'Yasak bitiş tarihi',
'Ban message 3'						=>	'Yasaklayan yönetici bu mesajı size bıraktı:',
'Ban message 4'						=>	'Forum yöneticisiyle iletişim geçmek için:',
'Never'								=>	'Asla',
'Today'								=>	'Bugün',
'Yesterday'							=>	'Dün',
'Info'								=>	'Bilgi', // A common table header
'Go back'							=>	'Geri git',
'Maintenance'						=>	'Bakım',
'Redirecting'						=>	'Yönlendirilyor',
'Click redirect'					=>	'Sayfaya hemen gitmek için buraya tıklayınız.(veya tarayıcınız sizi otomatik olarak yönlendirmiyorsa)',
'on'								=>	'Açık', // As in "BBCode is on"
'off'								=>	'Kapalı',
'Invalid email'						=>	'Girdiğiniz e-posta adresi geçerli değil.',
'Required'							=>	'(gerekli)',
'required field'					=>	'formda gerekli bir alandır.', // For javascript form validation
'Last post'							=>	'Son mesaj',
'by'								=>	'yazan', // As in last post by someuser
'New posts'							=>	'Yeni mesajlar', // The link that leads to the first new post
'New posts info'					=>	'Bu konudaki en yeni mesaja git.', // The popup text for new posts links
'Username'							=>	'Kullanıcı adı',
'Password'							=>	'Şifre',
'Email'								=>	'E-posta',
'Send email'						=>	'E-posta gönder',
'Moderated by'						=>	'Denetleyen',
'Registered'						=>	'Kayıtlı',
'Subject'							=>	'Başlık',
'Message'							=>	'Mesaj',
'Topic'								=>	'Konu',
'Forum'								=>	'Forum',
'Posts'								=>	'Mesaj',
'Replies'							=>	'Cevap',
'Pages'								=>	'Sayfa:',
'Page'								=>	'Sayfa %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'[url] etiketi:',
'img tag'							=>	'[img] etiketi:',
'Smilies'							=>	'Gülen yüzler:',
'and'								=>	've',
'Image link'						=>	'resim', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'yazdı:', // For [quote]'s
'Mailer'							=>	'%s Posta servisi', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Önemli Bilgi',
'Write message legend'				=>	'Mesajınızı yazıp onaylayın.',
'Previous'							=>	'Önceki',
'Next'								=>	'Sonraki',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Başlık',
'Member'							=>	'Üye', // Default title
'Moderator'							=>	'Denetmen',
'Administrator'						=>	'Yönetici',
'Banned'							=>	'Yasaklı',
'Guest'								=>	'Misafir',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] was found without a matching [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] was opened within [%2$s], this is not allowed',
'BBCode error invalid self-nesting'	=>	'[%s] was opened within itself, this is not allowed',
'BBCode error no closing tag'		=>	'[%1$s] was found without a matching [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] tag had an empty attribute section',
'BBCode error tag not allowed'		=>	'You are not allowed to use [%s] tags',
'BBCode error tag url not allowed'	=>	'You are not allowed to post links',
'BBCode code problem'				=>	'There is a problem with your [code] tags',
'BBCode list size error'			=>	'Your list was too long to parse, please make it smaller!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Anasayfa',
'User list'							=>	'Kullanıcılar',
'Rules'								=>	'Kurallar',
'Search'							=>	'Arama',
'Register'							=>	'Kayıt',
'Login'								=>	'Giriş',
'Not logged in'						=>	'Giriş yapmadınız.',
'Profile'							=>	'Profil',
'Logout'							=>	'Çıkış',
'Logged in as'						=>	'Giriş yapan',
'Admin'								=>	'Yönetim',
'Last visit'						=>	'Son ziyaret: %s',
'Topic searches'					=>	'Konular:',
'New posts header'					=>	'Yeni',
'Active topics'						=>	'Aktif',
'Unanswered topics'					=>	'Cevapsız',
'Posted topics'						=>	'Cevaplar',
'Show new posts'					=>	'Son ziyaretinizden beri olan yeni mesajları bul.',
'Show active topics'				=>	'Son mesajları içeren konuları bul.',
'Show unanswered topics'			=>	'Cevapsız konuları bul.',
'Show posted topics'				=>	'Cevapladığınız konuları bul.',
'Mark all as read'					=>	'Tüm konuları okundu olarak işaretle',
'Mark forum read'					=>	'Bu forumu okundu olarak işaretle',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Forum alt kısmı',
'Jump to'							=>	'Geçiş yap',
'Go'								=>	' Git ', // Submit button in forum jump
'Moderate topic'					=>	'Konuyu düzenle',
'Move topic'						=>	'Konuyu taşı',
'Open topic'						=>	'Konu aç',
'Close topic'						=>	'Konuyu kapat',
'Unstick topic'						=>	'Yapışkan olmaktan çıkar',
'Stick topic'						=>	'Yapışkan konu',
'Moderate forum'					=>	'Forumu düzenle',
'Powered by'						=>	'Uygulama %s',

// Debug information
'Debug table'						=>	'Debug information',
'Querytime'							=>	'Generated in %1$s seconds, %2$s queries executed',
'Memory usage'						=>	'Memory usage: %1$s',
'Peak usage'						=>	'(Peak: %1$s)',
'Query times'						=>	'Time (s)',
'Query'								=>	'Query',
'Total query time'					=>	'Total query time: %s',

// For extern.php RSS feed
'RSS description'					=>	'The most recent topics at %s.',
'RSS description topic'				=>	'The most recent posts in %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS active topics feed',
'Atom active topics feed'			=>	'Atom active topics feed',
'RSS forum feed'					=>	'RSS forum feed',
'Atom forum feed'					=>	'Atom forum feed',
'RSS topic feed'					=>	'RSS topic feed',
'Atom topic feed'					=>	'Atom topic feed',

// Admin related stuff in the header
'New reports'						=>	'Yeni rapor bildirimleri mevcut',
'Maintenance mode enabled'			=>	'Bakım modu etkinleştirildi!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
