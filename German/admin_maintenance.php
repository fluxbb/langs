<?php

// Sprachdefinitionen, die in admin_maintenance.php verwendet werden
$lang_admin_maintenance = array(

'Maintenance head'				=>	'Foren-Wartung',
'Rebuild index subhead'			=>	'Suchindex neu erstellen',
'Rebuild index info'			=>	'Wenn Du in der Datenbank manuell Beiträge gelöscht, bearbeitet oder entfernt hast oder Probleme mit der Suche hast, solltest Du den Suchindex neu erstellen. Für eine optimale Performance solltest Du das Forum während der Neuerstellung des Suchindex in den Wartungsmodus versetzen. <strong>Die Neuerstellung des Suchindex kann längere Zeit in Anspruch nehmen und wird dabei die Auslastung des Servers erhöhen!</strong>',
'Posts per cycle label'			=>	'Beiträge pro Durchlauf',
'Posts per cycle help'			=>	'Die Anzahl der Beiträge, die pro Seitenansicht verarbeitet werden sollen. Wenn Du zum Beispiel 100 eingibst, werden die ersten einhundert Beiträge verarbeitet und dann die Seite neu geladen. Dies kann das Skript vor einem Zeitüberschreitungsfehler während der Neuindizierung bewahren.',
'Starting post label'			=>	'Mit Beitrags-ID beginnen',
'Starting post help'			=>	'Die Beitrags-ID, bei der mit der Neuerstellung des Suchindex begonnen werden soll. Der voreingestellte Wert ist die erste, in der Datenbank vorhandene ID. Normalerweise musst Du diesen Wert nicht ändern.',
'Empty index label'				=>	'Index leeren',
'Empty index help'				=>	'Aktiviere dieses Kontrollfeld, wenn der Suchindex vor dessen Neuerstellung geleert werden soll.',
'Rebuild completed info'		=>	'Wenn der Prozess abgeschlossen ist, wirst Du auf diese Seite weitergeleitet. Während der Neuindizierung solltest Du unbedingt JavaScript aktivieren (für die automatische Weiterleitung, wenn ein Durchlauf abgeschlossen wurde). Wenn Du die Neuindizierung abbrechen möchten, notieren Sie sich die zuletzt verarbeitete Themen-ID und geben diese ID+1 dann im Feld "Mit dieser Themen-ID beginnen" ein, wenn Sie die Neuindizierung fortgesetzt werden soll (Das Kontrollfeld "Index leeren" muss nicht aktiviert werden).',
'Rebuild index'					=>	'Index neu erstellen',
'Rebuilding search index'		=>	'Der Suchindex wird neu erstellt',
'Rebuilding index info'			=>	'Der Suchindex wird jetzt neu erstellt. Daher hast Du nun etwas Zeit für eine kleine Kaffeepause :-)',
'Processing post'				=>	'Der Beitrag <strong>%s</strong> im Thema <strong>%s</strong> wird verarbeitet',
'Click here'					=>	'Hier klicken',
'Javascript redirect failed'	=>	'Die JavaScript-Weiterleitung ist fehlgeschlagen. %s um weiterzumachen …',

);
