<?php

// Sprachdefinitionen, die in der db_update.php verwendet werden

$lang_update = array(

'Update'						=>	'FluxBB aktualisieren',
'Update message'				=>	'Ihre FluxBB-Datenbank ist nicht mehr aktuell und muss aktualisiert werden. Wenn Sie dieses Forum administrieren, folgen Sie bitte der Anleitung, um die Aktualisierung abzuschließen.',
'Note'							=>	'Hinweis:',
'Members message'				=>	'Der derzeit laufende Prozess ist nur für Administratoren wichtig. Wenn Sie ein Mitglied sind, müssen Sie nichts befürchten - das Forum wird in Kürze zurück sein!',
'Administrator only'			=>	'Dieser Schritt kann nur von Administratoren ausgeführt werden!',
'Database password info'		=>	'Um die Datenbank-Aktualisierung durchführen zu können, müssen Sie das Datenbank-Passwort eingeben, mit dem FluxBB installiert wurde. Falls Sie sich nicht mehr erinnern können, sehen Sie in der Datei \'config.php\' nach.',
'Database password note'		=>	'Wenn Sie SQLite verwenden (und demzufolge kein Datenbank-Passwort haben), verwenden Sie anstatt dessen den Dateinamen der Datenbank. Dieser muss GENAU mit dem Dateinamen der Datenbank übereinstimmen, wie er in der Konfigurationsdatei angegeben wurde.',
'Database password'				=>	'Datenbank-Passwort',
'Maintenance'					=>	'Wartung',
'Maintenance message info'		=>	'Diese Nachricht wird den Nutzern während der Aktualisierung angezeigt. Der Text wird nicht wie ein regulärer Beitrage interpretiert und darf daher HTML enhalten.',
'Maintenance message'		    =>	'Wartungs-Nachricht',
'Next'							=>	'Weiter',

'You are running error'			=>	'Sie verwenden %1$s Version %2$s. FluxBB %3$s benötigt für seine volle Funktionsfähigkeit mindestens %1$s %4$s. Bevor Sie weitermachen können, müssen Sie zunächst die %1$s Installation aktualisieren.',
'Version mismatch error'		=>	'Versionsfehler. Die Datenbank \'%s\' scheint kein FluxBB-Datenbank-Schema zu verwenden, wie es von diesem Aktualisierungs-Script unterstützt wird.',
'Invalid file error'			=>	'Ungültiger Datenbank-Dateiname. Wenn Sie SQLite verwenden, dann müssen Sie die Datenbank-Datei genau so angeben wie in Ihrer \'%s\'',
'Invalid password error'		=>	'Ungültiges Datenbank-Passwort. Um FluxBB aktualisieren zu können, müssen Sie das Datenbank-Passwort genau so angeben wie in Ihrer \'%s\'',
'No password error'				=>	'Es wurde kein Datenbank-Passwort angegeben',
'Script runs error'				=>	'Es scheint, als ob die Aktualisierung bereits ausgeführt wird. Falls das nicht zutrifft, löschen Sie einfach die Datei \'%s\' manuell und versuchen Sie es dann noch einmal',
'No update error'				=>	'Dieses Forum ist bereits aktueller als das Script es machen kann',

'Intro 1'						=>	'Dieses Script wird die Foren-Datenbank aktualisieren. In Abhängigkeit von der Geschwindigkeit des Servers und der Größe der Foren-Datenbank kann dies längere Zeit in Anspruch nehmen. Bitte vergessen Sie nicht, <strong>vor</strong> der Aktualisierung eine Sicherheitskopie der Datenbank zu erstellen.',
'Intro 2'						=>	'Haben Sie die Informationen zur Systemaktualisierung in der Dokumentation gelesen? Falls nicht, beginnen Sie hier.',
'No charset conversion'			=>	'<strong>ACHTUNG!</strong> FluxBB hat erkannt, dass die PHP-Umgebung keine andere Zeichensatz-Konvertierung als von ISO-8859-1 nach UTF-8 unterstützt. Das bedeutet, dass FluxBB die Forendatenbank nicht nach UTF-8 konvertieren kann, falls der aktuelle Zeichensatz nicht ISO-8859-1 ist. Sie müssen dies daher manuell vornehmen. Eine Anleitung zur manuellen Konvertierung der Zeichensätze finden Sie in den Aktualisierungs-Informationen.',
'Enable conversion'				=>	'<strong>Konvertierung aktivieren:</strong> Wird dies aktiviert, wird das Aktualisierungs-Script nach den notwendigen strukturellen Änderungen an der Datenbank alle in der Datenbank vorhandenen Texte vom aktuellen Zeichensatz nach UTF-8 konvertieren. Diese Konvertierung ist notwendig, wenn von FluxBB Version 1.2 aktualisiert wird.',
'Current character set'			=>	'<strong>Aktueller Zeichensatz:</strong> Falls die in diesem Forum hauptsächlich verwendete Sprache Englisch ist, müssen Sie keine Änderungen an den voreingestellten Werten vornehmen. Falls das Forum jedoch kein Englisch verwendet, sollten Sie den Zeichensatz des primären, im Forum verwendeten Sprachpakets eingeben. <em>Mit einer falschen Eingabe kann die Datenbank beschädigt werden!</em> Hinweis: Dies ist nur dann notwendig, wenn die alte Datenbank UTF-8 ist.',
'Charset conversion'			=>	'Zeichensatz-Konvertierung',
'Enable conversion label'		=>	'<strong>Konvertierung aktivieren</strong> (führt eine Umwandlung des Datenbank-Zeichensatzes aus).',
'Current character set label'	=>	'Aktueller Zeichensatz',
'Current character set info'	=>	'Die Voreinstellung für englische Foren akzeptieren, anderenfalls den Zeichensatz des primären Sprachpakets eingeben.',
'Start update'					=>	'Aktualisierung starten',
'Error converting users'		=>	'Fehler bei der Konvertierung von Mitgliedern',
'Error info 1'					=>	'Beim Konvertieren einiger Mitglieder ist ein Fehler aufgetreten. Dieser Fehler kann bei der Aktualisierung von FluxBB 1.2 auftreten, wenn sich mehrere Mitglieder mit ähnlichen Namen registriert haben, wie zum Beispiel "Bob" and "Böb".',
'Error info 2'					=>	'Nachfolgend finden Sie eine Liste der Mitglieder, die nicht umgewandelt werden konnten. Bitte wählen Sie einen neuen Mitgliedsnamen für jedes Mitglied. Die umbenannten Mitglieder werden automatisch über diese Änderung via E-Mail informiert.',
'New username'					=>	'Neuer Mitgliedsname',
'Required'						=>	'(Pflichtfeld)',
'Correct errors'				=>	'Die folgenden Fehler müssen behoben werden:',
'Rename users'					=>	'Mitglieder umbenennen',
'Successfully updated'			=>	'Ihre Forendatenbank wurde aktualisiert. Sie können jetzt %s.',
'go to index'					=>	'Gehen Sie zum Foren-Index',

'Unable to lock error'			=>	'Schreibrechte konnten nicht gesett werden. Bitte stellen Sie sicher, dass PHP Schreibzugriff auf das Verzeichnis \'%s\' und niemand sonst gerade das Aktualisierungs-Script ausführt.',

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
'ranks'							=>	'Ränge',
'report'						=>	'Berichte',
'topic'							=>	'Themen',
'user'							=>	'Mitglied',
'signature'						=>	'Signatur',

'Username too short error'		=>	'Der Mitgliedsname muss mindestens zwei Zeichen lang sein. Bitte wählen Sie einen anderen (längeren) Mitgliedsnamen.',
'Username too long error'		=>	'Mitgliedsnamen dürfen nicht länger als 25 Zeichen lang sein. Bitte wählen Sie einen anderen (kürzeren) Mitgliedsnamen.',
'Username Guest reserved error'	=>	'Der Mitgliedsname Gast ist reserviert. Bitte wählen Sie einen anderen Mitgliedsnamen.',
'Username IP format error'		=>	'Der Mitgliedsname darf nicht die Form einer IP-Adresse haben. Bitte wählen Sie einen anderen Mitgliedsnamen.',
'Username bad characters error'	=>	'Mitgliedsnamen dürfen nicht die Zeichen \', " und [ oder ] enthalten. Bitte wählen Sie einen anderen Mitgliedsnamen.',
'Username BBCode error'			=>	'Mitgliedsnamen dürfen keine (vom Forum verwendeten) Formatierungs-Tags enthalten (BBCode). Bitte wählen Sie einen anderen Mitgliedsnamen.',
'Username duplicate error'		=>	'Es hat sich bereits ein Mitglied mit dem Namen %s registriert. Der eingegebene Mitgliedsname ist zu ähnlich. Der Mitgliedsname muss mindestens um ein alphanumerisches Zeichen davon abweichen (a-z oder 0-9). Bitte wählen Sie einen anderen Mitgliedsnamen.',

);