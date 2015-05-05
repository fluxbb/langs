<?php

// Sprachdefinitionen, die in der db_update.php verwendet werden

$lang_update = array(

'Update'						=>	'FluxBB aktualisieren',
'Update message'				=>	'Deine FluxBB-Datenbank ist nicht mehr aktuell und muss aktualisiert werden, um damit weiterarbeiten zu können. Wenn du der Administrator bist, folge bitte der Anleitung, um die Aktualisierung abzuschließen.',
'Note'							=>	'Hinweis:',
'Members message'				=>	'Der aktuell laufende Prozess ist nur für Administratoren. Wenn du nur ein Mitglied bist, musst du nichts befürchten - das Forum wird in Kürze zurück sein!',
'Administrator only'			=>	'Dieser Schritt kann nur durch Administratoren ausgeführt werden!',
'Database password info'		=>	'Um die Datenbank-Aktualisierung durchführen zu können, musst du das Datenbank-Passwort eingeben, mit dem FluxBB installiert wurde. Falls du dich nicht mehr erinnern kannst, es wurde auch in der Datei \'config.php\' gespeichert.',
'Database password note'		=>	'Wenn du SQLite verwendest (und demzufolge kein Datenbank-Passwort hast), verwende anstatt dessen den Dateinamen der Datenbank. Dieser muss GENAU mit dem Dateinamen der Datenbank übereinstimmen, wie er in deiner Konfigurationsdatei angegeben wurde.',
'Database password'				=>	'Datenbank-Passwort',
'Maintenance'					=>	'Wartung',
'Maintenance message info'		=>	'Diese Nachricht wird dem Nutzer während der Aktualisierung angezeigt. Der Text wird nicht wie reguläre Beiträge interpretiert und darf daher HTML enhalten.',
'Maintenance message'		    =>	'Wartungs-Nachricht',

'You are running error'			=>	'Du verwendest %1$s Version %2$s. FluxBB %3$s benötigt für seine volle Funktionsfähigkeit mindestens %1$s %4$s. Bevor du weitermachen kannst, musst du zunächst deine %1$s Installation aktualisieren.',
'Version mismatch error'		=>	'Versionsfehler. Die Datenbank \'%s\' scheint kein FluxBB-Datenbank-Schema zu verwenden, welches von diesem Aktualisierungs-Script unterstützt wird.',
'Invalid file error'			=>	'Ungültiger Datenbank-Dateiname. Wenn du SQLite verwendest, dann musst du die Datenbank-Datei haargenau so angeben wie in deiner \'%s\'',
'Invalid password error'		=>	'Ungültiges Datenbank-Passwort. Um FluxBB aktualisieren zu können, musst du das Datenbank-Passwort haargenau so angeben wie in deiner \'%s\'',
'No password error'				=>	'Es wurde kein Datenbank-Passwort angegeben',
'Script runs error'				=>	'Es scheint, als ob die Aktualisierung bereits von jemand anderem ausgeführt wird. Falls das nicht zutrifft, lösche einfach die Datei \'%s\' manuell und versuch es dann noch einmal',
'No update error'				=>	'Dein Forum ist bereits aktueller als das Script es machen kann',

'Intro 1'						=>	'Dieses Script wird die Foren-Datenbank aktualisieren. In Abhängigkeit von der Geschwindigkeit des Servers und der Größe der Foren-Datenbank kann dies längere Zeit in Anspruch nehmen. Bitte vergiss nicht, zuvor eine Sicherheitskopie der Datenbank zu erstellen, bevor du weitermachst.',
'Intro 2'						=>	'Hast du die Informationen zur Systemaktualisierung in der Dokumentation gelesen? Falls nicht, beginne hier.',
'No charset conversion'			=>	'<strong>ACHTUNG!</strong> FluxBB hat erkannt, dass deine PHP-Umgebung keine andere Zeichensatz-Konvertierung als von ISO-8859-1 nach UTF-8 unterstützt. Das bedeutet, dass FluxBB die Forendatenbank nicht nach UTF-8 konvertieren kann, falls der aktuelle Zeichensatz nicht ISO-8859-1 ist. Du musst dies daher manuell vornehmen. Eine Anleitung zur manuellen Konvertierung der Zeichensätze findest du in den Aktualisierungs-Informationen.',
'Enable conversion'				=>	'<strong>Konvertierung aktivieren:</strong> Wird dies aktiviert, wird das Aktualisierungs-Script nach den erforderlichen strukturellen Änderungen an der Datenbank alle in der Datenbank vorhandenen Texte vom aktuellen Zeichensatz nach UTF-8 konvertieren. Diese Konvertierung ist erforderlich, wenn von FluxBB Version 1.2 aktualisiert wird.',
'Current character set'			=>	'<strong>Aktueller Zeichensatz:</strong> Falls die in deinem Forum hauptsächlich verwendete Sprache Englisch ist, musst du keine Änderungen an den voreingestellten Werten vornehmen. Falls dein Forum jedoch kein Englisch verwendet, solltest du den Zeichensatz des primären, im Forum verwendeten Sprachpakets eingeben. <em>Mit einer falschen Eingabe kann die Datenbank beschädigt werden!</em> Hinweis: Dies ist nur dann erforderlich, wenn die alte Datenbank UTF-8 ist.',
'Charset conversion'			=>	'Zeichensatz-Konvertierung',
'Enable conversion label'		=>	'<strong>Konvertierung aktivieren</strong> (führt eine Umwandlung des Datenbank-Zeichensatzes aus).',
'Current character set label'	=>	'Aktueller Zeichensatz',
'Current character set info'	=>	'Die Voreinstellung für englische Foren akzeptieren, anderenfalls den Zeichensatz des primären Sprachpakets eingeben.',
'Start update'					=>	'Aktualisierung starten',
'Error converting users'		=>	'Fehler bei der Konvertierung von Mitgliedern',
'Error info 1'					=>	'Beim Konvertieren einiger Mitglieder ist ein Fehler aufgetreten. Dieser Fehler kann bei der Aktualisierung von FluxBB 1.2 auftreten, wenn sich mehrere Mitglieder mit ähnlichen Namen registriert haben, wie zum Beispiel "Bob" and "Böb".',
'Error info 2'					=>	'Nachfolgend findest du eine Liste der Mitglieder, die nicht umgewandelt werden konnten. Bitte wähle einen neuen Mitgliedsnamen für jedes Mitglied. Die umbenamsten Mitglieder werden automatisch über diese Änderung via Email informiert.',
'New username'					=>	'Neuer Mitgliedsname',
'Required'						=>	'(Pflichtfeld)',
'Correct errors'				=>	'Die folgenden Fehler müssen behoben werden:',
'Rename users'					=>	'Mitglieder umbenennen',
'Successfully updated'			=>	'Deine Forendatenbank wurde aktualisiert. Du kannst jetzt %s.',
'go to index'					=>	'Gehe zum Foren-Index',

'Unable to lock error'			=>	'Konnte die Schreibrechte nicht setzen. Bitte stelle sicher, dass PHP Schreibzugriff auf das Verzeichnis \'%s\' und niemand sonst gerade das Aktualisierungs-Script ausführt.',

'Converting'					=>	'Konvertiere %s …',
'Converting item'				=>	'Konvertiere %1$s %2$s …',
'Preparsing item'				=>	'Verarbeite %1$s %2$s …',
'Rebuilding index item'			=>	'Erstelle den Index für %1$s %2$s neu',

'ban'							=>	'Mitgliedssperre',
'categories'					=>	'Kategorien',
'censor words'					=>	'Zensierte Wörter',
'configuration'					=>	'Konfiguration',
'forums'						=>	'Foren',
'groups'						=>	'Gruppen',
'post'							=>	'Beitrag',
'report'						=>	'Berichte',
'topic'							=>	'Themen',
'user'							=>	'Mitglied',
'signature'						=>	'Signatur',

'Username too short error'		=>	'Der Mitgliedsname muss mindestens 2 Zeichen lang sein. Bitte wähle einen anderen (längeren) Mitgliedsnamen.',
'Username too long error'		=>	'Mitgliedsnamen dürfen nicht länger als 25 Zeichen lang sein. Bitte wähle einen anderen (kürzeren) Mitgliedsnamen.',
'Username Guest reserved error'	=>	'Der Mitgliedsname Gast ist reserviert. Bitte wähle einen anderen Mitgliedsnamen.',
'Username IP format error'		=>	'Der Mitgliedsname darf nicht die Form einer IP-Adresse haben. Bitte wähle einen anderen Mitgliedsnamen.',
'Username bad characters error'	=>	'Mitgliedsnamen dürfen nicht die Zeichen \', " und [ oder ] enthalten. Bitte wähle einen anderen Mitgliedsnamen.',
'Username BBCode error'			=>	'Mitgliedsnamen dürfen keine (vom Forum verwendeten) Formatierungs-Tags enthalten (BBCode). Bitte wähle einen anderen Mitgliedsnamen.',
'Username duplicate error'		=>	'Es hat sich bereits ein Mitglied mit dem Namen %s registriert. Der eingegebene Mitgliedsname ist zu ähnlich. Der Mitgliedsname muss mindestens um ein alphanumerisches Zeichen davon abweichen (a-z oder 0-9). Bitte wähle einen anderen Mitgliedsnamen.',

);
