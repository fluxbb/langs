<?php

// Sprachdefinitionen für häufig benötigte Zeichenketten
$lang_common = array(

// Textorientierung und Kodierung
'lang_direction'					=>	'ltr', // ltr (von links nach rechts) oder rtl (von rechts nach links)
'lang_identifier'					=>	'de',

// Zahlenformatierung
'lang_decimal_point'				=>	',',
'lang_thousands_sep'				=>	'.',

// Hinweise
'Bad request'						=>	'Ungültige Anfrage. Der Link, dem du gefolgt bist, ist ungültig oder veraltet.',
'No view'							=>	'Du hast keine Berechtigung, diese Foren zu betrachten.',
'No permission'						=>	'Du hast keine Berechtigung für den Zugriff auf diese Seite.',
'Bad referrer'						=>	'Ungültiger HTTP_REFERER. Du wurdest von einer ungültigen Quelle auf diese Seite weitergeleitet. Bitte gehe zurück und versuche es noch einmal. Wenn dieses Problem weiterhin besteht, kontrolliere bitte die \'Base URL\'-Variable unter Administration / Optionen und stelle sicher, dass du dieses Forum tatsächlich über die eingestellte URL ansteuerst. Weitere Informationen über den Referrer-Check kannst du der FluxBB-Dokumentation entnehmen.',
'No cookie'							=>	'Du scheinst dich erfolgreich angemeldet zu haben, es konnte jedoch kein Cookie gesetzt werden. Bitte überprüfe die Einstellungen deines Browsers und aktiviere die Verwendung von Cookies für diese Webseite (wenn möglich).',
'Pun include extension'  			=>	'Konnte User-Include %s von Template %s nicht verarbeiten. "%s" Dateien sind nicht erlaubt',
'Pun include directory'				=>	'Konnte User-Include %s von Template %s nicht verarbeiten. Verzeichnis-Wechsel sind nicht erlaubt',
'Pun include error'					=>	'Das benutzerdefinierte Include %s im Template %s konnte nicht verarbeitet werden. Die zu inkludierende Datei konnte weder im Template-Verzeichnis noch im User-Include-Verzeichnis gefunden werden.',

// Verschiedenes
'Announcement'						=>	'Ankündigung',
'Options'							=>	'Beitragsoptionen',
'Submit'							=>	'Absenden', // Beschriftung des Submit-Buttons
'Ban message'						=>	'Du wurdest in diesem Forum gesperrt.',
'Ban message 2'						=>	'Die Sperre endet am',
'Ban message 3'						=>	'Der Administrator oder Moderator, der dich gesperrt hat, hat folgende Nachricht hinterlassen:',
'Ban message 4'						=>	'Bei Fragen kontaktiere bitte den Foren-Administrator unter',
'Never'								=>	'Niemals',
'Today'								=>	'Heute',
'Yesterday'							=>	'Gestern',
'Info'								=>	'Info', // Die allgemeine Tabellenkopfzeile
'Go back'							=>	'Zurück',
'Maintenance'						=>	'Wartung',
'Redirecting'						=>	'Weiterleitung',
'Click redirect'					=>	'Klicke hier, wenn du nicht länger warten willst (oder dein Browser dich nicht automatisch weiterleitet)',
'on'								=>	'an', // erscheint z.Bsp. in "BBCode ist an"
'off'								=>	'aus',
'Invalid email'						=>	'Die angegebene E-Mail-Adresse ist ungültig.',
'Required'							=>	'(Pflichtfeld)',
'required field'					=>	'ist in diesem Formular ein Pflichtfeld.', // für die Formularprüfung via Javascript
'Last post'							=>	'Letzter Beitrag',
'by'								=>	'von', // erscheint z.Bsp. in "Letzter Beitrag von" (irgend einem Mitglied)
'New posts'							=>	'Neue Beiträge', // der Link, der zum neuen Thema/Beitrag führt
'New posts info'					=>	'Zum ersten neuen Beitrag dieses Themas gehen.', // der Popup-Text für die Links neuer Beiträge
'Username'							=>	'Mitgliedsname',
'Password'							=>	'Passwort',
'Email'								=>	'E-Mail',
'Send email'						=>	'E-Mail senden',
'Moderated by'						=>	'Moderiert von',
'Registered'						=>	'Registriert',
'Subject'							=>	'Betreff',
'Message'							=>	'Beitrag',
'Topic'								=>	'Thema',
'Forum'								=>	'Forum',
'Posts'								=>	'Beiträge',
'Replies'							=>	'Antworten',
'Pages'								=>	'Seiten:',
'Page'								=>	'Seite %s',
'BBCode'							=>	'BBCode:', // Das sollten Sie möglichst nicht ändern
'url tag'							=>	'[url] Tag:',
'img tag'							=>	'[img] Tag:',
'Smilies'							=>	'Smilies:',
'and'								=>	'und',
'Image link'						=>	'Bild', // Dieses Bild wird angezeigt, wenn im Profil die Option "Bilder anzeigen" deaktiviert ist
'wrote'								=>	'schrieb:', // für Zitate (quote)
'Mailer'							=>	'Mailer', // Die Signatur der ausgehenden Emails des "MyForum-Mailers"
'Important information'				=>	'Wichtige Information',
'Write message legend'				=>	'Schreibe deinen Beitrag und versende ihn',
'Previous'							=>	'Vorherige',
'Next'								=>	'Nächste',
'Spacer'							=>	'…', // Ellipse für den Seitentrenner

// Titel
'Title'								=>	'Titel',
'Member'							=>	'Mitglied', // Voreingestellter Titel
'Moderator'							=>	'Moderator',
'Administrator'						=>	'Administrator',
'Banned'							=>	'Gesperrt',
'Guest'								=>	'Gast',

// Sprachstrings für include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] wurde ohne den öffnenden Tag [%1$s] gefunden',
'BBCode error invalid nesting'		=>	'[%1$s] wurde innerhalb [%2$s] geöffnet, dies ist nicht erlaubt',
'BBCode error invalid self-nesting'	=>	'[%s] wurde innerhalb sich selbst geöffnet, dies ist nicht erlaubt',
'BBCode error no closing tag'		=>	'[%1$s] wurde ohne den schließenden Tag [/%1$s] gefunden',
'BBCode error empty attribute'		=>	'Der [%s]-Tag wurde ohne die erforderlichen Parameter verwendet',
'BBCode error tag not allowed'		=>	'Du darfst keine [%s] Tags verwenden',
'BBCode error tag url not allowed'	=>	'Du darfst keine Links absenden',
'BBCode code problem'				=>	'Es gibt ein Problem innerhalb deines [code]-Tags',
'BBCode list size error'			=>	'Deine Liste ist für eine Verarbeitung zu lang, bitte kürze die Liste!',

// Links, die sich in der Navigation befinden (oben auf jeder Seite)
'Index'								=>	'Übersicht',
'User list'							=>	'Mitglieder',
'Rules'								=>	'Nutzungsbedingungen',
'Search'							=>	'Suche',
'Register'							=>	'Registrieren',
'Login'								=>	'Anmelden',
'Not logged in'						=>	'Du bist nicht angemeldet.',
'Profile'							=>	'Profil',
'Logout'							=>	'Abmelden',
'Logged in as'						=>	'Angemeldet als:',
'Admin'								=>	'Administration',
'Last visit'						=>	'Dein letzter Besuch: %s',
'Topic searches'					=>	'Themen:',
'New posts header'					=>	'Neu',
'Active topics'						=>	'Aktiv',
'Unanswered topics'					=>	'Unbeantwortet',
'Posted topics'						=>	'Beantwortet',
'Show new posts'					=>	'Alle Themen mit neuen Beiträge seit deinem letzten Besuch anzeigen',
'Show active topics'				=>	'Themen mit aktuellen Beiträgen anzeigen',
'Show unanswered topics'			=>	'Unbeantwortete Themen anzeigen',
'Show posted topics'				=>	'Themen anzeigen, auf die du geantwortet hast',
'Mark all as read'					=>	'Alle Themen als gelesen markieren',
'Mark forum read'					=>	'Dieses Forum als gelesen markieren',
'Title separator'					=>	' / ',

// Links, die sich in der Fusszeile der Seite befinden
'Board footer'						=>	'Fußzeile des Forums',
'Jump to'							=>	'Wechseln zu',
'Go'								=>	' Los ', // Der Absende-Button zum Sprung ins Forum
'Moderate topic'					=>	'Thema moderieren',
'Move topic'						=>	'Thema verschieben',
'Open topic'						=>	'Thema öffnen',
'Close topic'						=>	'Thema schließen',
'Unstick topic'						=>	'Themenfixierung lösen',
'Stick topic'						=>	'Thema fixieren',
'Moderate forum'					=>	'Forum moderieren',
'Powered by'						=>	'Powered by %s', // Denglisch

// Informationen zur Fehlersuche
'Debug table'						=>	'Debug-Informationen',
'Querytime'							=>	'Erstellt in %1$s Sekunden, %2$s Datenbank-Abfragen ausgeführt',
'Memory usage'						=>	'Speichernutzung: %1$s',
'Peak usage'						=>	'(Maximum: %1$s)',
'Query times'						=>	'Zeit in Sekunden',
'Query'								=>	'Datenbank-Abfrage',
'Total query time'					=>	'Gesamtzeit der Datenbankabfragen: %s',

// Für den RSS-Feed der extern.php
'RSS description'					=>	'Die aktuellsten Themen aus %s.',
'RSS description topic'				=>	'Die aktuellsten Beiträge in %s.',
'RSS reply'							=>	'Re: ', // Dem Betreff des Themas wird diese Zeichenkette vorangestellt (um eine Antwort zu kennzeichnen)
'RSS active topics feed'			=>	'RSS - aktiver Themen-Feed',
'Atom active topics feed'			=>	'Atom - aktiver Themen-Feed',
'RSS forum feed'					=>	'RSS-Foren-Feed',
'Atom forum feed'					=>	'Atom-Foren-Feed',
'RSS topic feed'					=>	'RSS-Themen-Feed',
'Atom topic feed'					=>	'Atom-Themen-Feed',

// Teile aus dem Kopfbereich der Administration
'New reports'						=>	'Es sind neue Berichte eingegangen',
'Maintenance mode enabled'			=>	'Der Wartungs-Modus wurde aktiviert!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
