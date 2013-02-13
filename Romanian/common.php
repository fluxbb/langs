<?php

/* Translation Notice:
	Copyright Kaeden
   Last revision: 7th of December 2012 */
   

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'ro',

// Number formatting
'lang_decimal_point'				=>	',',
'lang_thousands_sep'				=>	'.',

// Notices
'Bad request'						=>	'Cerere eronată. Adresa pe care ai urmat-o este incorectă sau învechită.',
'No view'							=>	'Nu ai permisiunea să vizualizezi aceste forumuri.',
'No permission'						=>	'Nu ai permisiunea să accesezi această pagină.',
'Bad referrer'						=>	'Parametru HTTP_REFERER eronat. Ai fost direcționat pe această pagină de către o sursă neautorizată. Dacă problema persistă te rugăm să te asiguri că \'URL Principal\' este setat corect în opțiunile de administrare și că navighezi forumul folosind acea adresă. Mai multe detalii legate de această verificare poți găsi în documentația FluxBB.',
'No cookie'							=>	'Te-ai autentificat cu succes, cu toate acestea un fișier cookie nu a putut fi creat. Te rugăm să verifici setările și să activezi cookies pentru acest site, dacă este posibil.',
'Pun include extension'  			=>	'Nu s-a putut procesa includerea %s cerută de utilizator din șablonul %s. "%s" fișier(e) inaccesibil(e).',
'Pun include directory'				=>	'Nu s-a putut procesa includerea %s cerută de utilizator din șablonul %s. Traversarea directorului nu este permisă.',
'Pun include error'					=>	'Nu s-a putut procesa includerea %s cerută de utilizator din șablonul %s. Nu există vreun asemenea fișier nici în directorul șabloanelor nici în directorul de includere.',


// Miscellaneous
'Announcement'						=>	'Anunț',
'Options'							=>	'Opțiune',
'Submit'							=>	'Trimite', // "Name" of submit buttons
'Ban message'						=>	'Contul tău este suspendat.',
'Ban message 2'						=>	'Suspendarea expiră:',
'Ban message 3'						=>	'Administratorul sau moderatorul care te-a sancționat a specificat următorul motiv:',
'Ban message 4'						=>	'Te rugăm să adresezi orice nelămuriri către administratorul forumului la',
'Never'								=>	'Niciodată',
'Today'								=>	'Astăzi',
'Yesterday'							=>	'Ieri',
'Info'								=>	'Informație', // A common table header
'Go back'							=>	'Înapoi',
'Maintenance'						=>	'Întreținere',
'Redirecting'						=>	'Redirecționare',
'Click redirect'					=>	'Apasă aici dacă nu dorești să mai aștepți (sau dacă navigatorul tău nu te redirecționează automat)',
'on'								=>	'Da', // As in "BBCode is on"
'off'								=>	'Nu',
'Invalid email'						=>	'Adresa e-mail introdusă nu este validă.',
'Required'							=>	'(Necesar)',
'required field'					=>	'este un câmp obligatoriu.', // For javascript form validation
'Last post'							=>	'Ultimul răspuns',
'by'								=>	'de', // As in last post by some user
'New posts'							=>	'Răspunsuri noi', // The link that leads to the first new post
'New posts info'					=>	'Mergi la primul răspuns necitit din acest subiect.', // The popup text for new posts links
'Username'							=>	'Nume utilizator',
'Password'							=>	'Parolă',
'Email'								=>	'E-mail',
'Send email'						=>	'Trimite e-mail',
'Moderated by'						=>	'Moderat de',
'Registered'						=>	'Dată înregistrare',
'Subject'							=>	'Subiect',
'Message'							=>	'Mesaj',
'Topic'								=>	'Subiect',
'Forum'								=>	'Forum',
'Posts'								=>	'Mesaje',
'Replies'							=>	'Răspunsuri',
'Pages'								=>	'Pagini:',
'Page'								=>	'Pagina %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'eticheta [url]:',
'img tag'							=>	'eticheta [img]:',
'Smilies'							=>	'Zâmbăreți:',
'and'								=>	'și',
'Image link'						=>	'imagine', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'a scris:', // For [quote]'s
'Mailer'							=>	'Poșta %s', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Informații importante',
'Write message legend'				=>	'Scrie mesajul tău și trimite-l',
'Previous'							=>	'Anterioară',
'Next'								=>	'Urmatoare',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Titlu',
'Member'							=>	'Membru', // Default title
'Moderator'							=>	'Moderator',
'Administrator'						=>	'Administrator',
'Banned'							=>	'Suspendat',
'Guest'								=>	'Vizitator',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] nu are o etichetă [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] a fost deschisă în [%2$s], nu este permis',
'BBCode error invalid self-nesting'	=>	'[%s] a fost deschisă în propriul conținut, nu este permis',
'BBCode error no closing tag'		=>	'[%1$s] nu are o etichetă [/%1$s]',
'BBCode error empty attribute'		=>	'Eticheta [%s] are un atribut necompletat',
'BBCode error tag not allowed'		=>	'Nu ai permisiunea să utilizezi etichetele [%s]',
'BBCode error tag url not allowed'	=>	'Nu ai permisiunea să postezi legături (links)',
'BBCode code problem'				=>	'Este o problemă cu etichetele [code] introduse',
'BBCode list size error'			=>	'Lista ta a fost prea lungă. Te rugăm să o micșorezi!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Pagina Principală',
'User list'							=>	'Listă Utilizatori',
'Rules'								=>	'Reguli',
'Search'							=>	'Căutare',
'Register'							=>	'Înregistrare',
'Login'								=>	'Autentificare',
'Not logged in'						=>	'Nu ești autentificat.',
'Profile'							=>	'Profil',
'Logout'							=>	'Deconectare',
'Logged in as'						=>	'Autentificat drept',
'Admin'								=>	'Administrare',
'Last visit'						=>	'Ultima vizită: %s',
'Topic searches'					=>	'Subiecte:',
'New posts header'					=>	'Noi',
'Active topics'						=>	'Active',
'Unanswered topics'					=>	'Fără răspuns',
'Posted topics'						=>	'Trimise',
'Show new posts'					=>	'Găsește subiectele cu răspunsuri noi de la ultima ta vizită.',
'Show active topics'				=>	'Găsește subiecte cu răspunsuri recente.',
'Show unanswered topics'			=>	'Găsește subiecte fără răspuns.',
'Show posted topics'				=>	'Găsește subiectele în care ai răspuns.',
'Mark all as read'					=>	'Marchează toate subiectele ca citite',
'Mark forum read'					=>	'Marchează forumul ca citit',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Subsol forum',
'Jump to'							=>	'Mergi la',
'Go'								=>	' &raquo; ', // Submit button in forum jump
'Moderate topic'					=>	'Moderează subiect',
'Move topic'						=>	'Mută subiect',
'Open topic'						=>	'Deschide subiect',
'Close topic'						=>	'Închide subiect',
'Unstick topic'						=>	'Demarchează ca important',
'Stick topic'						=>	'Marchează ca important',
'Moderate forum'					=>	'Moderează forum',
'Powered by'						=>	'Platforma %s',

// Debug information
'Debug table'						=>	'Informații depanare',
'Querytime'							=>	'Pagină generată în %1$s secunde, %2$s interogări executate',
'Memory usage'						=>	'Memorie utilizată: %1$s',
'Peak usage'						=>	'(Vârf: %1$s)',
'Query times'						=>	'Timp (i)',
'Query'								=>	'Interogare',
'Total query time'					=>	'Durată totală interogare: %s',

// For extern.php RSS feed
'RSS description'					=>	'Cele mai recente subiecte @ %s.',
'RSS description topic'				=>	'Cele mai recente răspunsuri în %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'Flux RSS Subiecte active',
'Atom active topics feed'			=>	'Flux Atom Subiecte active',
'RSS forum feed'					=>	'Flux RSS Forum',
'Atom forum feed'					=>	'Flux Atom Forum',
'RSS topic feed'					=>	'Flux RSS Subiecte',
'Atom topic feed'					=>	'Flux Atom Subiecte',

// Admin related stuff in the header
'New reports'						=>	'Există noi mesaje raportate!',
'Maintenance mode enabled'			=>	'Modul de întreținere este activat!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
