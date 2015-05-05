<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'en',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'Stranica ne postoji. Link je neispravan ili zastareo.',
'No view'							=>	'Nemate dozvolu za pregled ovih foruma.',
'No permission'						=>	'Nemate dozvolu da pristupite ovoj stranici.',
'Bad referrer'						=>	'Loš HTTP_REFERER. Izvor koji vas je doveo na ovu stranicu nema neophodne privilegije. Ako se problem ponovi, proverite da je \'Base URL\' ispravno podešen u Admin/Opcije i da pristupate forumu preko navedenog URL-a. Više informacija o "referrer" proveri se može pronaći u FluxBB dokumentaciji.',
'No cookie'							=>	'Izgleda da ste se uspešno prijavili, ali kolačić nije dostupan. Proverite vaša podešavanja i omogućite kolačiće za ovaj portal.',
'Pun include extension'  			=>	'Nije moguće obraditi korisničku biblioteku %s iz šablona %s. "%s" datoteke nisu dozvoljene',
'Pun include directory'				=>	'Nije moguće obraditi korisničku biblioteku %s iz šablona %s. Pristup "parent" direktorijumima nije dozvoljen',
'Pun include error'					=>	'Nije moguće obraditi korisničku biblioteku %s iz šablona %s.. Bibilioteka ne postoji ni u direktorijumu šablona, ni u korisničkom direktorijumu',

// Miscellaneous
'Announcement'						=>	'Najave',
'Options'							=>	'Opcije',
'Submit'							=>	'Potvrdi', // "Name" of submit buttons
'Ban message'						=>	'Zabraǌeni ste na ovom forumu.',
'Ban message 2'						=>	'Zabrana ističe',
'Ban message 3'						=>	'Administrator ili moderator koji Vas je zabranio, ostavio Vam je sledeću poruku:',
'Ban message 4'						=>	'Sve upite prosledite administratoru foruma na:',
'Never'								=>	'Nikad',
'Today'								=>	'Danas',
'Yesterday'							=>	'Juče',
'Info'								=>	'Informacije', // A common table header
'Go back'							=>	'Idi nazad',
'Maintenance'						=>	'Održavanje',
'Redirecting'						=>	'Preusmeravam...',
'Click redirect'					=>	'Kliknite ovde ukoliko ne želite više da čekate (ili ako vas pregledač automatski ne preusmeri)',
'on'								=>	'uključen', // As in "BBCode is on"
'off'								=>	'isključen',
'Invalid email'						=>	'Email adresa koju ste uneli nije ispravna.',
'Required'							=>	'(Obavezno)',
'required field'					=>	'je obavezno polje u ovoj formi.', // For javascript form validation
'Last post'							=>	'Zadnja poruka',
'by'								=>	'od', // As in last post by some user
'New posts'							=>	'Nove poruke', // The link that leads to the first new post
'New posts info'					=>	'Idi na prvu novu poruku u ovoj temi.', // The popup text for new posts links
'Username'							=>	'Korisničko ime',
'Password'							=>	'Lozinka',
'Email'								=>	'Email',
'Send email'						=>	'Pošalji email',
'Moderated by'						=>	'Moderator:',
'Registered'						=>	'Registrovan',
'Subject'							=>	'Naslov',
'Message'							=>	'Poruka',
'Topic'								=>	'Tema',
'Forum'								=>	'Forum',
'Posts'								=>	'Poruka',
'Replies'							=>	'Odgovor',
'Pages'								=>	'Stranice:',
'Page'								=>	'Stranica %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'[url] oznaka:',
'img tag'							=>	'[img] oznaka:',
'Smilies'							=>	'Smajliji:',
'and'								=>	'i',
'Image link'						=>	'Slika', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'napisao:', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Važne informacije',
'Write message legend'				=>	'Napišite i pošaljite poruku',
'Previous'							=>	'Prethodna',
'Next'								=>	'Sledeća',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Naslov',
'Member'							=>	'Član', // Default title
'Moderator'							=>	'Moderator',
'Administrator'						=>	'Administrator',
'Banned'							=>	'Banovan',
'Guest'								=>	'Gost',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] je pronađen bez uparenog [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] je otvoren unutar [%2$s], to nije dozvoljeno',
'BBCode error invalid self-nesting'	=>	'[%s] je otvoren unutar sebe samog, to nije dozvoljeno',
'BBCode error no closing tag'		=>	'[%1$s] je pronađen bez uparenog [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] oznaka ima praznu sekciju sa atributima',
'BBCode error tag not allowed'		=>	'Nije dozvoljeno korišćenje [%s] oznaka',
'BBCode error tag url not allowed'	=>	'Nije Vam dozvoljeno da kačite linkove',
'BBCode list size error'			=>	'Vaša lista je predugačka za obradu, smanjite je!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Indeks',
'User list'							=>	'Lista korisnika',
'Rules'								=>	'Pravila',
'Search'							=>	'Pretraga',
'Register'							=>	'Registrujte se',
'Login'								=>	'Prijavite se',
'Not logged in'						=>	'Nije Vam dozvoljena prijava.',
'Profile'							=>	'Profil',
'Logout'							=>	'Odjava',
'Logged in as'						=>	'Prijavljeni ste kao',
'Admin'								=>	'Administracija',
'Last visit'						=>	'Zadnja poseta: %s',
'Topic searches'					=>	'Teme:',
'New posts header'					=>	'Nove',
'Active topics'						=>	'Aktivne',
'Unanswered topics'					=>	'Neodgovorene',
'Posted topics'						=>	'Poslate',
'Show new posts'					=>	'Prikaži teme sa novim porukama od vaše zadnje prijave.',
'Show active topics'				=>	'Prikaži aktivne teme.',
'Show unanswered topics'			=>	'Prikaži teme bez odgovora.',
'Show posted topics'				=>	'Prikaži teme u kojima sam učestvovao.',
'Mark all as read'					=>	'Označi sve teme kao pročitane',
'Mark forum read'					=>	'Označi ovaj forum kao pročitan',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Podnožje foruma',
'Jump to'							=>	'Skoči na',
'Go'								=>	' Idi ', // Submit button in forum jump
'Moderate topic'					=>	'Moderacija teme',
'All'					=>	'Svi',
'Move topic'						=>	'Pomeri temu',
'Open topic'						=>	'Otvori temu',
'Close topic'						=>	'Zatvori temu',
'Unstick topic'						=>	'Odlepi temu',
'Stick topic'						=>	'Zalepi temu',
'Moderate forum'					=>	'Moderacija foruma',
'Powered by'						=>	'Pokreće me %s',

// Debug information
'Debug table'						=>	'Debug informacije',
'Querytime'							=>	'Generisano za %1$s sekundi, %2$s izvršena upita',
'Memory usage'						=>	'Utrošak memorije: %1$s',
'Peak usage'						=>	'(Vrh: %1$s)',
'Query times'						=>	'Vreme',
'Query'								=>	'Upit',
'Total query time'					=>	'Ukupno vreme trajanja upita: %s',

// For extern.php RSS feed
'RSS description'					=>	'Najnovija tema na %s.',
'RSS description topic'				=>	'Najnovije poruke na %s.',
'RSS reply'							=>	'Odgovor: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'Aktivne teme - RSS feed',
'Atom active topics feed'			=>	'Aktivne teme - RSS feed',
'RSS forum feed'					=>	'RSS feed foruma',
'Atom forum feed'					=>	'Atom feed foruma',
'RSS topic feed'					=>	'RSS feed teme',
'Atom topic feed'					=>	'Atom feed teme',

// Admin related stuff in the header
'New reports'						=>	'Ima novih izveštaja',
'Maintenance mode enabled'			=>	'Režim za održavanje je aktivan!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
