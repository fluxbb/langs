<?php

// Language definitions used in db_update.php
// Untranslated: 29
// Czech (UTF-8 v1.4.5): MartinR [martin.ruzicka.cz(at)gmail.com]

$lang_update = array(

'Update'						=>	'Aktualizace FluxBB',
'Update message'				=>	'Databáze FluxBB je out-of-date (zastaralá) a před pokračováním je nutné ji inovovat. Pokud jste administrátor, tak pro dokončení inovace postupujte podle níže uvedených pokynů.',
'Note'							=>	'Poznámka:',
'Members message'						=>	'This process is for board administators only. If you are a member there is nothing to worry about - the forums will be back shortly!',
'Administrator only'			=>	'Tento krok je pouze pro administrátora!',
'Database password info'				=>	'To perform the database update please enter the database password with which FluxBB was installed. If you cannot remember, this is stored in your \'config.php\' file.',
'Database password note'				=>	'If you are running SQLite (and hence have no database password) please use the database file name instead. This must exactly match the database file name given in your configuration file.',
'Database password'				=>	'Heslo databáze',
'Next'							=>	'Další',

'You are running error'					=>	'You are running %1$s version %2$s. FluxBB %3$s requires at least %1$s %4$s to run properly. You must upgrade your %1$s installation before you can continue.',
'Version mismatch error'				=>	'Version mismatch. The database \'%s\' doesn\'t seem to be running a FluxBB database schema supported by this update script.',
'Invalid file error'					=>	'Invalid database file name. When using SQLite the database file name must be entered exactly as it appears in your \'%s\'',
'Invalid password error'				=>	'Invalid database password. To upgrade FluxBB you must enter your database password exactly as it appears in your \'%s\'',
'No password error'						=>	'No database password provided',
'Script runs error'						=>	'It appears the update script is already being ran by someone else. If this is not the case, please manually delete the file \'%s\' and try again',
'No update error'						=>	'Your forum is already as up-to-date as this script can make it',

'Intro 1'								=>	'This script will update your forum database. The update procedure might take anything from a second to hours depending on the speed of the server and the size of the forum database. Don\'t forget to make a backup of the database before continuing.',
'Intro 2'								=>	'Did you read the update instructions in the documentation? If not, start there.',
'No charset conversion'					=>	'<strong>IMPORTANT!</strong> FluxBB has detected that this PHP environment does not have support for the encoding mechanisms required to do UTF-8 conversion from character sets other than ISO-8859-1. What this means is that if the current character set is not ISO-8859-1, FluxBB won\'t be able to convert your forum database to UTF-8 and you will have to do it manually. Instructions for doing manual charset conversion can be found in the update instructions.',
'Enable conversion'						=>	'<strong>Enable conversion:</strong> When enabled this update script will, after it has made the required structural changes to the database, convert all text in the database from the current character set to UTF-8. This conversion is required if you\'re upgrading from version 1.2.',
'Current character set'					=>	'<strong>Current character set:</strong> If the primary language in your forum is English, you can leave this at the default value. However, if your forum is non-English, you should enter the character set of the primary language pack used in the forum. <em>Getting this wrong can corrupt your database so don\'t just guess!</em> Note: This is required even if the old database is UTF-8.',
'Charset conversion'					=>	'Charset conversion',
'Enable conversion label'				=>	'<strong>Enable conversion</strong> (perform database charset conversion).',
'Current character set label'	=>	'Aktuální znaková sada',
'Current character set info'			=>	'Accept default for English forums otherwise the character set of the primary language pack.',
'Start update'					=>	'Spustit aktualizaci',
'Error converting users'		=>	'Chyba při převodu uživatelů',
'Error info 1'							=>	'There was an error converting some users. This can occur when converting from FluxBB v1.2 if multiple users have registered with very similar usernames, for example "bob" and "böb".',
'Error info 2'							=>	'Below is a list of users who failed to convert. Please choose a new username for each user. Users who are renamed will automatically be sent an email alerting them of the change.',
'New username'					=>	'Nové uživatelské jméno',
'Required'						=>	'(Povinné)',
'Correct errors'				=>	'Tyto chyby musí být opraveny:',
'Rename users'							=>	'Rename users',
'Successfully updated'					=>	'Your forum database was successfully updated. You may now %s.',
'go to index'							=>	'go to the forum index',

'Unable to lock error'					=>	'Unable to write update lock. Please make sure PHP has write access to the directory \'%s\' and no-one else is currently running the update script.',

'Converting'					=>	'Převod %s …',
'Converting item'				=>	'Převod %1$s %2$s …',
'Preparsing item'						=>	'Preparsing %1$s %2$s …',
'Rebuilding index item'					=>	'Rebuilding index for %1$s %2$s',

'ban'							=>	'ban (zákaz)',
'categories'					=>	'kategorie',
'censor words'					=>	'cenzurovaná slova',
'configuration'					=>	'konfigurace',
'forums'						=>	'fóra',
'groups'						=>	'skupiny',
'post'							=>	'příspěvek',
'ranks'							=>	'hodnosti',
'report'						=>	'hlášení',
'topic'							=>	'téma',
'user'							=>	'uživatel',
'signature'						=>	'podpis',

'Username too short error'		=>	'Uživatelská jména musí mít alespoň 2 znaky. Zvolte jiné (delší) uživatelské jméno.',
'Username too long error'		=>	'Uživatelská jména nesmí být delší než 25 znaků. Zvolte jiné (kratší) uživatelské jméno.',
'Username Guest reserved error'	=>	'Uživatelské jméno guest (host) je vyhrazeno. Zvolte jiné uživatelské jméno.',
'Username IP format error'		=>	'Uživatelská jména nesmí být ve formě IP adresy. Zvolte jiné uživatelské jméno.',
'Username bad characters error'			=>	'Usernames may not contain all the characters \', " and [ or ] at once. Zvolte jiné uživatelské jméno.',
'Username BBCode error'			=>	'Uživatelská jména nesmí obsahovat žádné značky (BBCode) pro formátování textu. Zvolte jiné uživatelské jméno.',
'Username duplicate error'				=>	'Someone is already registered with the username %s. The username you entered is too similar. The username must differ from that by at least one alphanumerical character (a-z or 0-9). Zvolte jiné uživatelské jméno.',

'JavaScript disabled'			=>	'Zdá se, že je JavaScript zakázán. %s.',
'Click here to continue'		=>	'Klikněte zde pro pokračování',
'Required field'						=>	'is a required field in this form.'

);
