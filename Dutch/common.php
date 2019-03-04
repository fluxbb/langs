<?php



// Taaldefinities gebruikt in verschillende bestanden

$lang_common = array(



// Text oriëntatie

'lang_direction'					=>	'ltr',
'lang_identifier'					=>	'nl',


// Nummer formaat

'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',


// Nota's

'Bad request'						=>	'Foute aanvraag, de link die je volgt is fout of verouderd.',
'No view'							=>	'U dient geregistreerd te zijn om toegang te krijgen tot dit forum.<br>Leden kunnen <a style="font-weight:bold" href="login.php">inloggen</a> of zich hier <a style="font-weight:bold" href="register.php">registreren</a>.',
'No permission'						=>	'Je hebt niet de permissie om deze pagina te bekijken.',
'Bad referrer'						=>	'Fout HTTP_REFERER. Je bent naar deze pagina gestuurd door een ongeïndentificeerde bron. De URL die je volgde leidt naar een Beheerder/Opties pagina en je hebt niet de permissie om verder te gaan. Meer informatie vind je in de FluxBB documentatie.',
'No cookie'							=>	'Je bent met succes ingelogd, maar de website kan geen coockie aanmaken. Controleer je instellingen en zorg ervoor dat cookies van deze website worden toegestaan.',
'Pun include error'					=>	'Kan geen user includes %s van template %s. Er is geen bestand gevonden dat kan worden gebruikt.',


// Algemeen

'Announcement'						=>	'Aankondigingen',
'Options'							=>	'Opties',
'Submit'							=>	'Verzenden',
'Ban message'						=>	'Je bent verbannen van dit forum.',
'Ban message 2'						=>	'De ban verloopt op',
'Ban message 3'						=>	'De admin of mod die je heeft verbanen liet het volgende bericht achter:',
'Ban message 4'						=>	'Je kan vragen stellen aan de forum-beheerder op',
'Never'								=>	'Nooit',
'Today'								=>	'Vandaag',
'Yesterday'							=>	'Gisteren',
'Info'								=>	'Info',
'Go back'							=>	'Terug',
'Maintenance'						=>	'Onderhoud',
'Redirecting'						=>	'Doorverwijzen',
'Click redirect'					=>	'Klik hier als je niet langer wil wachten (of je browser je niet automatisch doorstuurt).',
'on'								=>	'aan',
'off'								=>	'uit',
'Invalid email'						=>	'Het e-mailadres dat je hebt opgegeven klopt niet.',
'Required'							=>	'(Verplicht)',
'required field'					=>	'is een verplicht veld in dit formulier.',
'Last post'							=>	'Laatste post',
'by'								=>	'door',
'New posts'							=>	'Nieuwe posts',
'New posts info'					=>	'Ga naar de nieuwste post in dit topic.',
'Username'							=>	'Gebruikersnaam',
'Password'							=>	'Wachtwoord',
'Email'								=>	'Mail',
'Send email'						=>	'Verzend mail',
'Moderated by'						=>	'Gemodereerd door',
'Registered'						=>	'Geregisteerd',
'Subject'							=>	'Onderwerp',
'Message'							=>	'Bericht',
'Topic'								=>	'Topic',
'Forum'								=>	'Forum',
'Posts'								=>	'Posts',
'Replies'							=>	'Reacties',
'Pages'								=>	'Pagina\'s:',
'Page'								=>	'Pagina %s',
'BBCode'							=>	'BBCode:',
'url tag'							=>	'[url] tag:',
'img tag'							=>	'[img] tag:',
'Smilies'							=>	'Emoticons:',
'and'								=>	'en',
'Image link'						=>	'afbeelding',
'wrote'								=>	'geschreven:',
'Mailer'							=>	'%s Mailer',
'Important information'				=>	'Belangrijke informatie',
'Write message legend'				=>	'Schrijf je bericht en verzend',
'Previous'							=>	'Vorige',
'Next'								=>	'Volgende',
'Spacer'							=>	'…', // Ellipsis for paginate



// Titel

'Title'								=>	'Titel',
'Member'							=>	'Gebruiker',
'Moderator'							=>	'Moderator',
'Administrator'						=>	'Beheerder',
'Banned'							=>	'Verbannen',
'Guest'								=>	'Gast',


// include/parser.php

'BBCode error no opening tag'		=>	'[/%1$s] is gesloten maar niet geopend met [%1$s].',
'BBCode error invalid nesting'		=>	'[%1$s] is geopend en gevolgd door [%2$s], dit mag niet, sluit de tag eerst.',
'BBCode error invalid self-nesting'	=>	'[%s] is geopend binnen zichzelf, dit mag niet.',
'BBCode error no closing tag'		=>	'[%1$s] is geopend maar niet meer gesloten met [/%1$s]',
'BBCode error empty attribute'		=>	'De kenmerksectie van de tag [%s] is leeg!',
'BBCode error tag not allowed'    	=>  'Je hebt niet de permissie om de [%s] tags te gebruiken', 

+'BBCode error tag url not allowed' =>  'Je hebt niet de permissie om links te posten', 

'BBCode code problem'				=>	'Er is een probleem met je gebruikte [code] tags',
'BBCode list size error'			=>	'Je lijst is te lang om te parsen, maak hem korter!',


// Navigatie

'Index'								=>	'Index',
'User list'							=>	'Gebruikerslijst',
'Rules'								=>	'Regels',
'Search'							=>	'Zoeken',
'Register'							=>	'Registreren',
'Login'								=>	'Log in',
'Not logged in'						=>	'U bent niet ingelogd.',
'Profile'							=>	'Profiel',
'Logout'							=>	'Log uit',
'Logged in as'						=>	'Ingelogd als',
'Admin'								=>	'Beheer',
'Last visit'						=>	'Laatste bezoek op: %s',
'Topic searches'					=>	'Topics:',
'New posts header'					=>	'Nieuw',
'Active topics'						=>	'Actief',
'Unanswered topics'					=>	'Onbeantwoord',
'Posted topics'						=>	'Posts',
'Show new posts'					=>	'Vind topics met nieuwe posts sinds je laatste bezoek.',
'Show active topics'				=>	'Vind recente topics.',
'Show unanswered topics'			=>	'Vind topics zonder reactie.',
'Show posted topics'				=>	'Vind topics die ook jij hebt gepost.',
'Mark all as read'					=>	'Markeer alle topics als gelezen',
'Mark forum read'					=>	'Markeer forum als gelezen',
'Title separator'					=>	' / ',


// Footer

'Board footer'						=>	'Forum footer',
'Jump to'							=>	'Ga naar',
'Go'								=>	' Ga ', // Submit button in forum jump

'Moderate topic'					=>	'Modereer topic',
'Move topic'						=>	'Verplaats topic',
'Open topic'						=>	'Open topic',
'Close topic'						=>	'Sluit topic',
'Unstick topic'						=>	'Unsticky topic',
'Stick topic'						=>	'Sticky topic',
'Moderate forum'					=>	'Modereer forum',
'Powered by'						=>	'Powered by %s',


// Debug informatie

'Debug table'						=>	'Debug informatie',
'Querytime'							=>	'Gegenereerd in %1$s seconden, %2$s queries uitgevoerd',
'Memory usage'						=>	'Geheugen gebruik: %1$s',
'Peak usage'						=>	'(Peak: %1$s)',
'Query times'						=>	'Tijd (s)',
'Query'								=>	'Query',
'Total query time'					=>	'Totaal query tijd: %s',


// Voor extern.php RSS Feed

'RSS description'					=>	'De meest recente topics in %s.',
'RSS description topic'				=>	'De meest recente posts in %s.',
'RSS reply'							=>	'Re: ',
'RSS active topics feed'			=>	'RSS active topics feed',
'Atom active topics feed'			=>	'Atom active topics feed',
'RSS forum feed'					=>	'RSS forum feed',
'Atom forum feed'					=>	'Atom forum feed',
'RSS topic feed'					=>	'RSS topic feed',
'Atom topic feed'					=>	'Atom topic feed',


// Admin gerelateerd

'New reports'						=>	'Er zijn nieuwe rapporten',
'Maintenance mode enabled'			=>	'Onderhoud modus staat aan!',


// Bestandgrote

'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
