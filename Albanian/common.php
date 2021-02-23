<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'sq',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'Kërkesë e gabuar. Lidhja që ndoqët është e pasaktë ose e vjetruar.',
'No view'							=>	'S’keni leje të shihni këto forume.',
'No permission'						=>	'S’keni leje të hyni në këtë faqe.',
'Bad referrer'						=>	'HTTP_REFERER i gabuar. Këtë faqe jua referoi një burim i paautorizuar. Nëse problemi vazhdon, ju lutemi, sigurohuni se \'Base URL\' është ujdisur si duhet te Përgjegjës/Mundësi dhe se po e vizitoni forumin duke kaluar te ajo URL. Më tepër të dhëna lidhur me kontrollin e referuesit mund të gjeni te dokumentimi i FluxBB-së.',
'Bad csrf hash'						=>	'Hash CSRF i gabuar. Këtë faqe jua referoi një burim i paautorizuar.',
'No cookie'							=>	'Duket se keni bërë me sukses hyrjen, por ka një cookie që s’është ujdisur. Ju lutemi, kontrolloni rregullimet tuaja dhe, nëse ka vend, aktivizoni cookie-t për këtë sajt.',
'Pun include extension'  			=>	'S’arrihet të përpunohet drejtoria user include %s që nga gjedhe %s. Kartelat “%s” s’lejohen',
'Pun include directory'				=>	'S’arrihet të përpunohet drejtoria user include %s që nga gjedhe %s. Nuk lejohen akte “directory traversal”',
'Pun include error'					=>	'S’arrihet të përpunohet drejtoria user include %s që nga gjedhe %s. S’ka kartelë të tillë as te drejtoria e gjedheve, as te drejtoria user include',

// Miscellaneous
'Announcement'						=>	'Lajmërim',
'Options'							=>	'Mundësi',
'Submit'							=>	'Parashtroje', // "Name" of submit buttons
'Ban message'						=>	'Jeni dëbuar nga ky forum.',
'Ban message 2'						=>	'Dëbimi skadon në fund të',
'Ban message 3'						=>	'Përgjegjësi, ose moderatori që ju ka dëbuar, la mesazhin vijues:',
'Ban message 4'						=>	'Ju lutemi, çfarëdo pyetje apo ankese drejtojani përgjegjësi të forumit te',
'Never'								=>	'Kurrë',
'Today'								=>	'Sot',
'Yesterday'							=>	'Dje',
'Info'								=>	'Info', // A common table header
'Go back'							=>	'Shko mbrapsht',
'Maintenance'						=>	'Mirëmbajtje',
'Redirecting'						=>	'Po bëhet ridrejtim',
'Click redirect'					=>	'Klikoni këtu, nëse s’doni të prisni më gjatë (ose nëse shfletuesi juaj nuk ju përcjell vetvetiu)',
'on'								=>	'on', // As in "BBCode is on"
'off'								=>	'off',
'Invalid email'						=>	'Adresa email që dhatë është e pavlefshme.',
'Required'							=>	'(E domosdoshme)',
'required field'					=>	'është një fushë e domosdoshme në këtë formular.', // For javascript form validation
'Last post'							=>	'Postimi i fundit',
'by'								=>	'nga', // As in last post by some user
'New posts'							=>	'Postime të reja', // The link that leads to the first new post
'New posts info'					=>	'Kalo te postimi i parë i ri në këtë temë.', // The popup text for new posts links
'Username'							=>	'Emër përdoruesi',
'Password'							=>	'Fjalëkalim',
'Email'								=>	'Email',
'Send email'						=>	'Dërgoni email',
'Moderated by'						=>	'Moderuar nga',
'Registered'						=>	'Regjistruar më',
'Subject'							=>	'Subjekt',
'Message'							=>	'Mesazh',
'Topic'								=>	'Temë',
'Forum'								=>	'Forum',
'Posts'								=>	'Postime',
'Replies'							=>	'Përgjigje',
'Pages'								=>	'Faqe:',
'Page'								=>	'Faqe %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'Etiketë [url]:',
'img tag'							=>	'Etiketë [img]:',
'Smilies'							=>	'Emotikone:',
'and'								=>	'dhe',
'Image link'						=>	'figurë', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'shkroi:', // For [quote]'s
'Mailer'							=>	'Postuesi %s', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Informacion i rëndësishëm',
'Write message legend'				=>	'Shkruani mesazhin tuaj dhe parashtrojeni',
'Previous'							=>	'I mëparshmi',
'Next'								=>	'Pasuesi',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Titull',
'Member'							=>	'Anëtar', // Default title
'Moderator'							=>	'Moderator',
'Administrator'						=>	'Përgjegjës',
'Banned'							=>	'I dëbuar',
'Guest'								=>	'Mysafir',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] u gjet pa përputhje me [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] u hap brenda [%2$s], kjo nuk lejohet',
'BBCode error invalid self-nesting'	=>	'[%s] u hap brenda vetes, kjo nuk lejohet',
'BBCode error no closing tag'		=>	'[%1$s] u gjet pa përputhje me [/%1$s]',
'BBCode error empty attribute'		=>	'Etiketa [%s] pa një ndarje të zbrazët atributi',
'BBCode error tag not allowed'		=>	'S’keni leje të përdorni etiketa [%s]',
'BBCode error tag url not allowed'	=>	'S’keni leje të postoni lidhje',
'BBCode list size error'			=>	'Lista juaj qe shumë e gjatë për t’u përtypur, ju lutemi shkurtojeni ca!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Tregues',
'User list'							=>	'Listë përdoruesish',
'Rules'								=>	'Rregulla',
'Search'							=>	'Kërkim',
'Register'							=>	'Regjistrohuni',
'Login'								=>	'Hyrje',
'Not logged in'						=>	'S’keni bërë hyrjen.',
'Profile'							=>	'Profil',
'Logout'							=>	'Dalje',
'Logged in as'						=>	'I futur si',
'Admin'								=>	'Administrim',
'Last visit'						=>	'Vizita e fundit më: %s',
'Topic searches'					=>	'Tema:',
'New posts header'					=>	'Të reja',
'Active topics'						=>	'Aktive',
'Unanswered topics'					=>	'Pa përgjigje',
'Posted topics'						=>	'Ku keni postuar',
'Show new posts'					=>	'Gjeni tema me postime të reja që nga vizita juaj e fundit.',
'Show active topics'				=>	'Gjeni tema me postime së fundi.',
'Show unanswered topics'			=>	'Gjeni tema pa përgjigje.',
'Show posted topics'				=>	'Gjeni tema ku keni postuar.',
'Mark all as read'					=>	'Vëru shenjë krejt temave si të lexuara',
'Mark forum read'					=>	'Vëri shenjë këtij forumi si të lexuar',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Fundfaqe platforme',
'Jump to'							=>	'Kalo te',
'Go'								=>	' Shko ', // Submit button in forum jump
'Moderate topic'					=>	'Moderoni temë',
'All'					=>	'Krejt',
'Move topic'						=>	'Lëvizni temën',
'Open topic'						=>	'Hapni temë',
'Close topic'						=>	'Mbyllni temë',
'Unstick topic'						=>	'Hiqi fiksimin temës',
'Stick topic'						=>	'Fiksoje temën',
'Moderate forum'					=>	'Moderoni forumin',
'Powered by'						=>	'Ndërtuar me %s',

// Debug information
'Debug table'						=>	'Të dhëna diagnostikimi',
'Querytime'							=>	'Prodhuar për %1$s sekonda, u kryen %2$s kërkesa',
'Memory usage'						=>	'Përdorim kujtese: %1$s',
'Peak usage'						=>	'(Kulmim: %1$s)',
'Query times'						=>	'Kohë (s)',
'Query'								=>	'Kërkesë',
'Total query time'					=>	'Kohë kërkese gjithsej: %s',

// For extern.php RSS feed
'RSS description'					=>	'Temat më të freskëta te %s.',
'RSS description topic'				=>	'Postimet më të freskëta te %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'Prurje RSS për temat aktive',
'Atom active topics feed'			=>	'Prurje Atom për temat aktive',
'RSS forum feed'					=>	'Prurje RSS forumi',
'Atom forum feed'					=>	'Prurje Atom forumi',
'RSS topic feed'					=>	'Prurje RSS temash',
'Atom topic feed'					=>	'Prurje Atom temash',

// Admin related stuff in the header
'New reports'						=>	'Ka raportime të reja',
'Maintenance mode enabled'			=>	'Mënyra mirëmbajtje është e aktivizuar!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
