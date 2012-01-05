<?php

// Language definitions used in admin_bans.php
// Untranslated: 32
// Czech (UTF-8 v1.4.5); Translated by MartinR [martin.ruzicka.cz(at)gmail.com]
// Contributors: Martin Ruzicka, based on czech language files FluxBB 1.2
$lang_admin_bans = array(

'No user message'			=>	'Uživatel se zadaným uživatelským jménem není registrován. Pokud chcete zakázat určené uživatelské jméno, ponechte pole prázdné..',
'No user ID message'		=>	'Žádný uživatel s&nbsp;tímto ID není registrován.',
'User is admin message'				=>	'The user %s is an administrator and can\'t be banned. If you want to ban an administrator, you must first demote him/her.',
'User is mod message'				=>	'The user %s is a moderator and can\'t be banned. If you want to ban a moderator, you must first demote him/her.',
'Must enter message'				=>	'You must enter either a username, an IP address or an email address (at least).',
'Cannot ban guest message'			=>	'The guest user cannot be banned.',
'Invalid IP message'				=>	'You entered an invalid IP/IP-range.',
'Invalid e-mail message'			=>	'The email address (e.g. user@domain.com) or partial email address domain (e.g. domain.com) you entered is invalid.',
'Invalid date message'				=>	'You entered an invalid expire date.',
'Invalid date reasons'				=>	'The format should be YYYY-MM-DD and the date must be at least one day in the future.',
'Ban added redirect'		=>	'Zákaz přidán. Přesměrování…' ,
'Ban edited redirect'		=>	'Zákaz upraven. Přesměrování…',
'Ban removed redirect'		=>	'Zákaz odebrán. Přesměrování…',

'New ban head'				=>	'Nový zákaz',
'Add ban subhead'			=>	'Přidat zákaz',
'Username label'			=>	'Uživatelské jméno',
'Username help'						=>	'The username to ban (case-insensitive).',
'Username advanced help'			=>	'The username to ban (case-insensitive). The next page will let you enter a custom IP and email. If you just want to ban a specific IP/IP-range or email just leave it blank.',

'Ban search head'					=>	'Ban search',
'Ban search subhead'				=>	'Enter search criteria',
'Ban search info'					=>	'Search for bans in the database. You can enter one or more terms to search for. Wildcards in the form of asterisks (*) are accepted. To show all bans leave all fields empty.',
'Date help'					=>	'(rrrr-mm-dd)',
'Message label'				=>	'Zpráva',
'Expire after label'				=>	'Expire after',
'Expire before label'				=>	'Expire before',
'Order by label'			=>	'Řadit podle',
'Order by username'			=>	'Uživatelské jméno',
'Order by ip'				=>	'IP',
'Order by e-mail'			=>	'E-mail',
'Order by expire'					=>	'Expire date',
'Ascending'					=>	'Vzestupně',
'Descending'				=>	'Sestupně',
'Submit search'						=>	'Submit search',

'E-mail label'				=>	'E-mail',
'E-mail help'						=>	'The email or email domain you wish to ban (e.g. someone@somewhere.com or somewhere.com). See "Allow banned email addresses" in Permissions for more info.',
'IP label'							=>	'IP address/IP-ranges',
'IP help'							=>	'The IP address or IP-ranges you wish to ban (e.g. 150.11.110.1 or 150.11.110). Separate addresses with spaces. If an IP is entered already it is the last known IP of this user in the database.',
'IP help link'						=>	'Click %s to see IP statistics for this user.',
'Ban advanced head'					=>	'Ban advanced settings',
'Ban advanced subhead'				=>	'Supplement ban with IP and email',
'Ban message label'					=>	'Ban message',
'Ban message help'					=>	'A message that will be displayed to the banned user when he/she visits the board.',
'Message expiry subhead'			=>	'Ban message and expiry',
'Ban IP range info'					=>	'You should be very careful when banning an IP-range because of the possibility of multiple users matching the same partial IP.',
'Expire date label'					=>	'Expire date',
'Expire date help'			=>	'Datum, kdy bude zákaz automaticky odstraněn (formát: RRRR-MM-DD). Nezadáte-li, můžete zákaz odebrat kdykoliv ručně.',

'Results head'				=>	'Výsledky hledání',
'Results username head'		=>	'Uživatelské jméno',
'Results e-mail head'		=>	'E-mail',
'Results IP address head'			=>	'IP/IP-ranges',
'Results expire head'				=>	'Expires',
'Results message head'		=>	'Zpráva',
'Results banned by head'	=>	'Zakázal',
'Results actions head'		=>	'Akce',
'No match'							=>	'No match',
'Unknown'							=>	'Unknown',

);
