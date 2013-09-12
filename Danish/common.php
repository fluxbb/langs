<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'dk',

// Number formatting
'lang_decimal_point'				=>	',',
'lang_thousands_sep'				=>	'.',

// Notices
'Bad request'						=>	'Bad request. Det link, du fulgte, er forkert eller forældet.',
'No view'							=>	'Du har ikke tilladelse til at se disse fora.',
'No permission'						=>	'Du har ikke adgang til denne side.',
'Bad referrer'						=>	'Bad HTTP_REFERER. Du blev henvist til denne side fra en uautoriseret kilde. Hvis problemet fortsætter, kan du sørge for, at \'Base-URL\' er indstillet korrekt i admin / Indstillinger, og at du besøger dette forum ved at navigere til den pågældende webadresse. Yderligere oplysninger om henvisende check kan findes i FluxBB dokumentationen.',
'No cookie'							=>	'Det ser ud til at du har logget ind succesfuldt, men en cookie er ikke blevet indstillet. Tjek venligst dine indstillinger og eventuelt aktivere cookies for denne hjemmeside.',
'Pun include error'					=>	'Kunne ikke behandle bruger omfatter %s fra skabelon %s. Der er ingen sådan fil i hverken skabelon bibliotek eller i brugerens bibliotek.',

// Miscellaneous
'Announcement'						=>	'Meddelelse',
'Options'							=>	'Indstillinger',
'Submit'							=>	'Send', // "Name" of submit buttons
'Ban message'						=>	'Du er udelukket fra dette forum.',
'Ban message 2'						=>	'Forbuddet udløber ved udgangen af',
'Ban message 3'						=>	'Administratoren eller moderator der banlyste dig efterlod den følgende meddelelse:',
'Ban message 4'						=>	'Eventuelle henvendelser bedes rettet til forum administratoren på',
'Never'								=>	'Aldrig',
'Today'								=>	'I dag',
'Yesterday'							=>	'I går',
'Info'								=>	'Info', // A common table header
'Go back'							=>	'Gå tilbage',
'Maintenance'						=>	'Vedligeholdelse',
'Redirecting'						=>	'Omdirigerer',
'Click redirect'					=>	'Klik her, hvis du ikke ønsker at vente længere (eller hvis din browser ikke automatisk sende dig)',
'on'								=>	'tændt', // As in "BBCode is on"
'off'								=>	'slukket',
'Invalid email'						=>	'Den e-mail-adresse, du har indtastet, er ugyldig.',
'Required'							=>	'(Påkrævet)',
'required field'					=>	'er et obligatorisk felt i denne form.', // For javascript form validation
'Last post'							=>	'Sidste indlæg',
'by'								=>	'af', // As in last post by someuser
'New posts'							=>	'Nye indlæg', // The link that leads to the first new post
'New posts info'					=>	'Gå til første nye indlæg i dette emne.', // The popup text for new posts links
'Username'							=>	'Brugernavn',
'Password'							=>	'Kodeord',
'Email'								=>	'Email',
'Send email'						=>	'Send email',
'Moderated by'						=>	'Modereret af',
'Registered'						=>	'Registreret',
'Subject'							=>	'Emne',
'Message'							=>	'Besked',
'Topic'								=>	'Emne',
'Forum'								=>	'Forum',
'Posts'								=>	'Indlæg',
'Replies'							=>	'Svar',
'Pages'								=>	'Sider:',
'Page'								=>	'Side %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'[url] tag:',
'img tag'							=>	'[img] tag:',
'Smilies'							=>	'Smilies:',
'and'								=>	'og',
'Image link'						=>	'billede', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'skrev:', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Vigtige oplysninger',
'Write message legend'				=>	'Skriv din besked og send',
'Previous'							=>	'Forrige',
'Next'								=>	'Næste',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Titel',
'Member'							=>	'Medlem', // Default title
'Moderator'							=>	'Moderator',
'Administrator'						=>	'Administrator',
'Banned'							=>	'Banlyst',
'Guest'								=>	'Gæst',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] blev fundet uden en matchende [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] blev åbnet i [%2$s], dette er ikke tilladt',
'BBCode error invalid self-nesting'	=>	'[%s] blev åbnet i sig selv, er dette ikke tilladt',
'BBCode error no closing tag'		=>	'[%1$s] blev fundet uden et matchende [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] tag havde en tom attribut sektion',
'BBCode error tag not allowed'		=>	'Du har ikke tilladelse til at bruge [%s] tags',
'BBCode error tag url not allowed'	=>	'Du har ikke tilladelse til at bruge links i indlæg',
'BBCode code problem'				=>	'Der er et problem med din [code] tags',
'BBCode list size error'			=>	'Din liste var for lang til at parse, skal du gøre det mindre!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Indeks',
'User list'							=>	'Brugerliste',
'Rules'								=>	'Regler',
'Search'							=>	'Søg',
'Register'							=>	'Registrer',
'Login'								=>	'Login',
'Not logged in'						=>	'Du er ikke logget ind.',
'Profile'							=>	'Profil',
'Logout'							=>	'Logud',
'Logged in as'						=>	'Logget ind som',
'Admin'								=>	'Administration',
'Last visit'						=>	'Sidste besøg: %s',
'Topic searches'					=>	'Emner:',
'New posts header'					=>	'Ny',
'Active topics'						=>	'Aktiv',
'Unanswered topics'					=>	'Ubesvaret',
'Posted topics'						=>	'Sendt',
'Show new posts'					=>	'Find emner med nye indlæg siden dit sidste besøg.',
'Show active topics'				=>	'Find emner med seneste indlæg.',
'Show unanswered topics'			=>	'Find emner uden nogen svar.',
'Show posted topics'				=>	'Find emner, som du har indlæg i.',
'Mark all as read'					=>	'Marker alle emner som læst',
'Mark forum read'					=>	'Marker dette forum som læst',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Board footer',
'Jump to'							=>	'Gå til',
'Go'								=>	' Gå ', // Submit button in forum jump
'Moderate topic'					=>	'Moderer emne',
'Move topic'						=>	'Flyt emne',
'Open topic'						=>	'Åben emne',
'Close topic'						=>	'luk emne',
'Unstick topic'						=>	'Lås emne op',
'Stick topic'						=>	'Lås emne',
'Moderate forum'					=>	'Moderer forum',
'Powered by'						=>	'Powered by %s',

// Debug information
'Debug table'						=>	'Debug information',
'Querytime'							=>	'Genereret på %1$s sekunder, %2$s afviklet forespørgsler',
'Memory usage'						=>	'Memory brugt: %1$s',
'Peak usage'						=>	'(Peak: %1$s)',
'Query times'						=>	'Tid (s)',
'Query'								=>	'Forespørgsel',
'Total query time'					=>	'Total forespørgselstid: %s',

// For extern.php RSS feed
'RSS description'					=>	'De seneste emner på %s.',
'RSS description topic'				=>	'De seneste stillinger i %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS aktiv emne-feed',
'Atom active topics feed'			=>	'Atom aktiv emne-feed',
'RSS forum feed'					=>	'RSS forum feed',
'Atom forum feed'					=>	'Atom forum feed',
'RSS topic feed'					=>	'RSS topic feed',
'Atom topic feed'					=>	'Atom topic feed',

// Admin related stuff in the header
'New reports'						=>	'Der er nye rapporter',
'Maintenance mode enabled'			=>	'Vedligeholdelse er aktiveret!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
