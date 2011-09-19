<?php

// Language definitions for frequently used strings
// Untranslated: 36
// Czech (UTF-8 v1.4.5): MartinR [martin.ruzicka.cz(at)gmail.com]
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'cs',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'Chybný požadavek. Objekt, který jste požadovali, je nesprávný nebo starý.',
'No view'							=>	'Nemáte oprávnění prohlížet toto fórum.',
'No permission'						=>	'Nemáte oprávnění přístupu na stránku.',
'Bad referrer'						=>	'Špatný HTTP_REFERER. Byli jste přesměrováni na tuto stránku z neautorizovaného zdroje. Pokud problém přetrvává, prosím ověřte, zda \'Base URL\' je nastavená v Administrace/Options and a že jste navštívili fórum přes tuto adresu URL. Více informací o kontrole HTTP_REFERER naleznete v dokumentaci k FluxBB.',
'No cookie'									=>	'You appear to have logged in successfully, however a cookie has not been set. Please check your settings and if applicable, enable cookies for this website.',
'Pun include error'							=>	'Unable to process user include %s from template %s. There is no such file in neither the template directory nor in the user include directory.',

// Miscellaneous
'Announcement'						=>	'Oznámení',
'Options'							=>	'Možnosti',
'Submit'							=>	'Odeslat', // "Name" of submit buttons
'Ban message'						=>	'Máte ban (zákaz) pro toto fórum.',
'Ban message 2'						=>	'Ban (zákaz) vyprší:',
'Ban message 3'						=>	'Administrátor nebo moderátor, který vás zabanoval (zakázal) zanechal následující zprávu:',
'Ban message 4'						=>	'Jakékoliv dotazy směřujte na administrátora',
'Never'								=>	'Nikdy',
'Today'								=>	'Dnes',
'Yesterday'							=>	'Včera',
'Info'								=>	'Info', // A common table header
'Go back'							=>	'Zpět',
'Maintenance'						=>	'Údržba',
'Redirecting'						=>	'Přesměrování',
'Click redirect'					=>	'Klikněte sem pro rychlé přesměrování (nebo pokud vás prohlížeč automaticky nepřesměroval)',
'on'								=>	'zapnuto', // As in "BBCode is on"
'off'								=>	'vypnuto',
'Invalid email'						=>	'Zadaná e-mailová adresa není platná.',
'Required'							=>	'(Povinné)',
'required field'					=>	'je nutné vyplnit v tomto formuláři',	// for javascript form validation
'Last post'							=>	'Poslední příspěvek',
'by'								=>	'od', // As in last post by someuser
'New posts'							=>	'Nový&nbsp;příspěvek', // The link that leads to the first new post
'New posts info'					=>	'Zobrazit nejnovější příspěvek v tématu.',	// the popup text for new posts links
'Username'							=>	'Uživatelské jméno',
'Password'							=>	'Heslo',
'Email'								=>	'E-mail',
'Send email'						=>	'Poslat e-mail',
'Moderated by'						=>	'Moderuje',
'Registered'						=>	'Registrován',
'Subject'							=>	'Předmět',
'Message'							=>	'Zpráva',
'Topic'								=>	'Téma',
'Forum'								=>	'Fórum',
'Posts'								=>	'Příspěvky',
'Replies'							=>	'Odpovědi',
'Pages'								=>	'Stránky',
'Page'								=>	'Stránka %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'img tag'							=>	'Značka [img]:',
'Smilies'							=>	'Smajlíky:',
'and'								=>	'a',
'Image link'						=>	'obrázek', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'napsal:', // For [quote]'s
'Mailer'							=>	'Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Důležité informace',
'Write message legend'				=>	'Napište zprávu a odešlete',
'Previous'							=>	'Předchozí',
'Next'								=>	'Další',
'Forum index'						=>	'Forum index',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Titul',
'Member'							=>	'Člen', // Default title
'Moderator'							=>	'Moderátor',
'Administrator'						=>	'Administrátor',
'Banned'							=>	'Zablokovaný',
'Guest'								=>	'Host',

// Stuff for include/parser.php
'BBCode error no opening tag'				=>	'[/%1$s] was found without a matching [%1$s]',
'BBCode error invalid nesting'				=>	'[%1$s] was opened within [%2$s], this is not allowed',
'BBCode error invalid self-nesting'			=>	'[%s] was opened within itself, this is not allowed',
'BBCode error no closing tag'				=>	'[%1$s] was found without a matching [/%1$s]',
'BBCode error empty attribute'				=>	'[%s] tag had an empty attribute section',
'BBCode code problem'						=>	'There is a problem with your [code] tags',
'BBCode list size error'					=>	'Your list was too long to parse, please make it smaller!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Index',
'User list'							=>	'Seznam uživatelů',
'Rules'								=>	'Pravidla',
'Search'							=>	'Hledat',
'Register'							=>	'Registrace',
'Login'								=>	'Přihlásit',
'Not logged in'						=>	'Nejste přihlášeni',
'Profile'							=>	'Profil',
'Logout'							=>	'Odhlásit',
'Logged in as'						=>	'Přihlášen jako',
'Admin'								=>	'Administrace',
'Last visit'						=>	'Poslední návštěva: %s',
'Topic searches'					=>	'Témata:',
'New posts header'					=>	'Nová',
'Active topics'						=>	'Aktivní',
'Unanswered topics'					=>	'Nezodpovězená',
'Posted topics'						=>	'Zaslaná',
'Show new posts'					=>	'Vyhledá témata s novými příspěvky od vaší poslední návštěvy.',
'Show active topics'				=>	'Vyhledá témata s nedávnými příspěvky.',
'Show unanswered topics'			=>	'Vyhledá témata bez odpovědi.',
'Show posted topics'				=>	'Vyhledá témata s vaším příspěvkem.',
'Mark all as read'					=>	'Označit všechna témata za přečtená',
'Mark forum read'					=>	'Označit toto fórum za přečtené',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Zápatí',
'Jump to'							=>	'Přejít na',
'Go'								=>	'Přejít', // Submit button in forum jump
'Moderate topic'					=>	'Moderovat téma',
'Move topic'						=>	'Přesunout téma',
'Open topic'						=>	'Otevřít téma',
'Close topic'						=>	'Zavřít téma',
'Unstick topic'						=>	'Odepnout téma',
'Stick topic'						=>	'Připnout téma',
'Moderate forum'					=>	'Moderovat fórum',
'Powered by'						=>	'Technologie %s | <a href="http://fluxbb.cz">CZ a SK</a>',

// Debug information
'Debug table'						=>	'Ladící informace',
'Querytime'									=>	'Generated in %1$s seconds, %2$s queries executed',
'Memory usage'						=>	'Využití paměti: %1$s',
'Peak usage'								=>	'(Peak: %1$s)',
'Query times'								=>	'Time (s)',
'Query'										=>	'Query',
'Total query time'							=>	'Total query time: %s',

// Email related notifications
'New user notification'						=>	'Alert - New registration',
'New user message'							=>	'User \'%s\' registered in the forums at %s',
'Banned email notification'					=>	'Alert - Banned email detected',
'Banned email register message'				=>	'User \'%s\' registered with banned email address: %s',
'Banned email change message'				=>	'User \'%s\' changed to banned email address: %s',
'Banned email post message'					=>	'User \'%s\' posted with banned email address: %s',
'Duplicate email notification'				=>	'Alert - Duplicate email detected',
'Duplicate email register message'			=>	'User \'%s\' registered with an email address that also belongs to: %s',
'Duplicate email change message'			=>	'User \'%s\' changed to an email address that also belongs to: %s',
'Report notification'						=>	'Report(%d) - \'%s\'',
'Report message 1'							=>	'User \'%s\' has reported the following message: %s',
'Report message 2'					=>	'Důvod: %s',

'User profile'								=>	'User profile: %s',
'Post URL'									=>	'Post URL: %s',
'Email signature'							=>	'Forum Mailer'."\n".'(Do not reply to this message)',

// For extern.php RSS feed
'RSS description'							=>	'The most recent topics at %s.',
'RSS description topic'						=>	'The most recent posts in %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'					=>	'RSS aktivních témat',
'Atom active topics feed'					=>	'Atom aktivních témat',
'RSS forum feed'							=>	'RSS fóra',
'Atom forum feed'							=>	'Atom fóra',
'RSS topic feed'							=>	'RSS tématu',
'Atom topic feed'							=>	'Atom tématu',

// Admin related stuff in the header
'New reports'						=>	'Zde jsou nová hlášení',
'Maintenance mode enabled'			=>	'Režim údržby je aktivní!',

);
