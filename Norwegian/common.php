<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'						=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'en',

// Number formatting
'lang_decimal_point'					=>	'.',
'lang_thousands_sep'					=>	',',

// Notices
'Bad request'						=>	'Feil spørring. Linken du fulgte er feil eller utdatert.',
'No view'							=>	'Du har ikke tillatelse til å se disse forumene.',
'No permission'						=>	'Du har ikke tillatelse til å åpne denne siden.',
'Bad referrer'						=>	'Feil HTTP_REFERER. Du ble henvist til denne siden fra en uautorisert kilde. Hvis problemet vedvarer må du kontrollere at \'Base URL\' er riktig innstilt i admin/Valg og at du besøker forumet ved å navigere til den aktuelle nettadressen. Mer informasjon om sjekk av URL-henvisning finnes i FluxBB-dokumentasjonen.',
'No cookie'							=>	'Du synes å ha logget inn på riktig måte, men en cookie synes ikke å være satt. Vennligst sjekk innstillingene i din nettleser og eventuelt aktiver cookies for dette nettstedet.',
'Pun include extension'  			=>	'Unable to process user include %s from template %s. "%s" files are not allowed',
'Pun include directory'				=>	'Kunne ikke behandle bruker-inkludering av %s fra mal %s. "%s" filene ikke er tillatt.',
'Pun include error'					=>	'Kunne ikke behandle bruker-inkludering av %s fra mal %s. Det er ingen slik fil i verken templat-katalogen eller i katalogen inkludert av brukeren.',

// Miscellaneous
'Announcement'						=>	'Kunngjøring',
'Options'							=>	'Valg',
'Submit'								=>	'Send', // "Name" of submit buttons
'Ban message'						=>	'Du er utestengt fra dette forumet.',
'Ban message 2'						=>	'Utestengelsen utløper ved slutten av',
'Ban message 3'						=>	'Administratoren eller moderatoren som stengte deg ute du etterlot følgende melding:',
'Ban message 4'						=>	'Send eventuelle henvendelser til forumets administrator på',
'Never'								=>	'Aldri',
'Today'								=>	'I dag',
'Yesterday'							=>	'I går',
'Info'								=>	'Informasjon', // A common table header
'Go back'							=>	'Tilbake',
'Maintenance'						=>	'Vedlikehold',
'Redirecting'						=>	'Omdirigerer',
'Click redirect'						=>	'Klikk her hvis du ikke ønsker å vente lenger (eller hvis nettleseren ikke videresender deg automatisk)',
'on'									=>	'på', // As in "BBCode is on"
'off'								=>	'av',
'Invalid email'						=>	'E-postadressen du oppga er ugyldig.',
'Required'							=>	'(Påkrevd)',
'required field'						=>	'er et påkrevd felt i dette skjemaet.', // For javascript form validation
'Last post'							=>	'Siste innlegg',
'by'									=>	'av', // As in last post by some user
'New posts'							=>	'Nye innlegg', // The link that leads to the first new post
'New posts info'						=>	'Gå til det første nye innlegget i denne tråden.', // The popup text for new posts links
'Username'							=>	'Brukernavn',
'Password'							=>	'Passord',
'Email'								=>	'E-post',
'Send email'							=>	'Send e-post',
'Moderated by'						=>	'Moderert av',
'Registered'							=>	'Registrert',
'Subject'							=>	'Tittel',
'Message'							=>	'Tekst',
'Topic'								=>	'Tråd',
'Forum'								=>	'Forum',
'Posts'								=>	'Innlegg',
'Replies'							=>	'Svar',
'Pages'								=>	'Sider:',
'Page'								=>	'Side %s',
'BBCode'								=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'[url] tag:',
'img tag'							=>	'[img] tag:',
'Smilies'							=>	'Smilefjes:',
'and'								=>	'og',
'Image link'							=>	'bilde', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'skrev:', // For [quote]'s
'Mailer'								=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Viktig informasjon',
'Write message legend'				=>	'Skriv emelding og send',
'Previous'							=>	'Forrige',
'Next'								=>	'Neste',
'Spacer'								=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Tittel',
'Member'								=>	'Medlem', // Default title
'Moderator'							=>	'Moderator',
'Administrator'						=>	'Administrator',
'Banned'								=>	'Utestengt',
'Guest'								=>	'Gjest',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] ble funnet uten en matchende [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] ble åpnet innenfor [%2$s], dette er ikke tillatt',
'BBCode error invalid self-nesting'	=>	'[%s] ble åpnet innen seg selv, dette er ikke tillatt',
'BBCode error no closing tag'		=>	'[%1$s] ble funnet uten en matchende [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] tag hadde en tom attributt-seksjon',
'BBCode error tag not allowed'		=>	'Du har ikke lov til å bruke [%s] tagger',
'BBCode error tag url not allowed'	=>	'Du har ikke lov til å poste linker',
'BBCode code problem'				=>	'Det er ingen problem med dine [code] tagger',
'BBCode list size error'				=>	'Din liste var for lang til å kunne behandles, vennligst gjør den kortere!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Forside',
'User list'							=>	'Brukerliste',
'Rules'								=>	'Regler',
'Search'								=>	'Søk',
'Register'							=>	'Registrering',
'Login'								=>	'Logg inn',
'Not logged in'						=>	'Du er ikke innlogget.',
'Profile'							=>	'Profil',
'Logout'								=>	'Logg ut',
'Logged in as'						=>	'Logget inn som',
'Admin'								=>	'Administrasjon',
'Last visit'							=>	'Siste besøk: %s',
'Topic searches'						=>	'Tråd:',
'New posts header'					=>	'Nye',
'Active topics'						=>	'Aktive',
'Unanswered topics'					=>	'Ubesvarte',
'Posted topics'						=>	'Alle',
'Show new posts'						=>	'Finn tråder med nye innlegg siden siste besøk.',
'Show active topics'					=>	'Finn tråder med nye innlegg.',
'Show unanswered topics'				=>	'Finn ubesvarte tråder.',
'Show posted topics'					=>	'Finn tråder du har opprettet innlegg i.',
'Mark all as read'					=>	'Merk alle tråder som lest',
'Mark forum read'					=>	'Merk dette forumet som lest',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Tavlefot',
'Jump to'							=>	'Gå til',
'Go'									=>	' Gå ', // Submit button in forum jump
'Moderate topic'						=>	'Moderer tråd',
'Move topic'							=>	'Flytt tråd',
'Open topic'							=>	'Åpne tråd',
'Close topic'						=>	'Lukk tråd',
'Unstick topic'						=>	'Avmerk tråd',
'Stick topic'						=>	'Merk tråd',
'Moderate forum'						=>	'Moderer forum',
'Powered by'							=>	'Drevet av %s',

// Debug information
'Debug table'						=>	'Informasjon om feilsøk',
'Querytime'							=>	'Generert i løpet av %1$s sekunder, %2$s spørringer utført',
'Memory usage'						=>	'Minnebruk: %1$s',
'Peak usage'							=>	'(Topp: %1$s)',
'Query times'						=>	'Tid (s)',
'Query'								=>	'Spørring',
'Total query time'					=>	'Total spørretid: %s',

// For extern.php RSS feed
'RSS description'					=>	'Siste tråder i %s.',
'RSS description topic'				=>	'Siste innlegg i %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'				=>	'RSS Feed for tråder',
'Atom active topics feed'			=>	'Atom Feed for tråder',
'RSS forum feed'						=>	'RSS Feed for forum',
'Atom forum feed'					=>	'Atom Feed for forum',
'RSS topic feed'						=>	'RSS Feed for tråd',
'Atom topic feed'					=>	'Atom Feed for tråd',

// Admin related stuff in the header
'New reports'						=>	'Nye rapporter finnes',
'Maintenance mode enabled'			=>	'Vedlikeholdsmodus er aktivert!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
