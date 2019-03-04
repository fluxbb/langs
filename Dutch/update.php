<?php

// Taaldefinities gebruikt in db_update.php

$lang_update = array(

'Update'						=>	'Update FluxBB',
'Update message'				=>	'Je FluxBB database is verouderd en moet worden bijgewerkt om verder te gaan, volg de volgende instructies om de upgrade te voltooien.',
'Note'							=>	'Nota:',
'Members message'				=>	'Dit proces is enkel voor beheerders. Als je een gebruiker bent is er niks waar je je zorgen over moet maken - het forum is later terug!',
'Administrator only'			=>	'Dit proces is enkel voor beheerders!',
'Database password info'		=>	'Om de database te updaten heeft FluxBB het wachtwoord van de database waar FluxBB op is geïnstalleerd nodig. Als je dit niet meer weet, kan je het wachtwoord vinden in \'config.php\' in de root van het forum.',
'Database password note'		=>	'Als je SQLite gebruikt (en je hebt dus geen database wachtwoord) geef je de database bestandsnaam op. Dit moet dezelfde zijn als het database bestand dat is opgegeven in \'config.php\'.',
'Database password'				=>	'Database wachtwoord',
'Maintenance'					=>	'Onderhoud',
'Maintenance message info'		=>	'Het bericht dat wordt weergegeven tijdens het update proces. Dit veld werkt niet als post-velden maar werkt met HTML',
'Maintenance message'		    =>	'Onderhoud',
'Next'							=>	'Volgende',

'You are running error'			=>	'Je gebruikt %1$s versie %2$s. FluxBB %3$s heeft minstens %1$s %4$s nodig om te werken. Je moet je %1$s installatie upgrade voor je verder kan gaan.',
'Version mismatch error'		=>	'Versie fout. De database \'%s\' lijkt niet te werken met een FluxBB schema dat wordt ondersteund door dit update script.',
'Invalid file error'			=>	'Fout database bestandsnaam. Als je SQLite gebruikt moet de database bestandsnaam overeen komen met de naam die je hebt gebruikt in \'%s\'',
'Invalid password error'		=>	'Fout database wachtwoord. Om FluxBB te updaten/upgraden moet je het database wachtwoord invullen dat je hebt gebruikt in \'%s\'',
'No password error'				=>	'Geen database wachtwoord opgegeven',
'Script runs error'				=>	'Het lijkt erop dat het update script al door iemand anders is uitgevoerd. Als dit niet het geval is kan je handmatig het bestand \'%s\' verwijderen en opnieuw proberen',
'No update error'				=>	'Je forum is al up-to-date tegenover dit script, dit script kan geen update of upgrade uitvoeren.',

'Intro 1'						=>	'Dit script zal je forum database updaten. De update kan enkele seconden tot uren duren, het is afhankelijk van de snelheid van de server en de grote van de forum database. Vergeet niet om een back-up te maken voordat je door gaat',
'Intro 2'						=>	'Heb je de update instructies gelezen in de FluxBB documentatie? Zo niet, raden we je aan dit eerst te doen.',
'No charset conversion'			=>	'<strong>BELANGRIJK!</strong> FluxBB heeft ontdekt dat de huidige configuratie van PHP het encoding mechanisme dat nodig is voor UTF-8 conversie van tekens naar ISO-8859-1 niet ondersteunt. Dit wil zeggen dat als de huidige tekenset niet ISO-8859-1 is, FluxBB niet in staat is om je database te converteren naar UTF-8 en je dit dus handmatig moet doen. Instructies om dit handmatig te doen vind je in de update instructies.',
'Enable conversion'				=>	'<strong>Conversie inschakelen:</strong> Als het update script klaar is met de aanpassingen aan de database zal het de huidige tekenset converteren naar UTF-8. Deze conversie is nodig als je wilt upgraden van versie 1.x.',
'Current character set'			=>	'<strong>Huidige tekenset:</strong> Als de huidige standaardtaal van je forum Engels is, kan je dit veld leeg laten. Voor andere talen moet je de tekenset van het gebruikte taalpakket infullen in dit veld. <em>Als dit fout is kan je database beschadigd raken, gok niet!</em> Nota: Dit is nodig, ook als je oude database werkt met UTF-8',
'Charset conversion'			=>	'Tekenset conversie',
'Enable conversion label'		=>	'<strong>Conversie inschakelen</strong> (database tekenset conversie uitvoeren).',
'Current character set label'	=>	'Huidige tekenset',
'Current character set info'	=>	'Standaard voor Engels, anders gebruik je de tekenset van het huidige standaard taalpakket.',
'Start update'					=>	'Start update',
'Error converting users'		=>	'Fout bij gebruikers converteren',
'Error info 1'					=>	'Er is een fout opgedreden bij het converteren van een of meerdere gebruikers. Dit kan voorkomen bij convertering van FluxBB 1.x als meerdere gebruikers hebben geregistreerd met een vergelijkbare gebruikersnaam, zoals "anne" en "anné".',
'Error info 2'					=>	'Onderstaande gebruikers konden niet worden geconverteerd. Kies een nieuwe gebruikersnaam voor ze. Gebruikers die in dit proces worden hernoemd krijgen automatisch een e-mail waarin ze op de hoogte gebracht worden van de aanpassing.',
'New username'					=>	'Nieuwe gebruikersnaam',
'Required'						=>	'(Verplicht)',
'Correct errors'				=>	'De volgende problemen moeten worden opgelost:',
'Rename users'					=>	'Hernoem gebruikers',
'Successfully updated'			=>	'Je forum database is met succes geüpdate. Je kan nu %s.',
'go to index'					=>	'naar de forum index gaan',

'Unable to lock error'			=>	'Kan update niet uitvoeren. Controleer of PHP toegang heeft tot de \'%s\' map en niemand anders dit update script uitvoerd.',

'Converting'					=>	'Converteren %s …',
'Converting item'				=>	'Converteren %1$s %2$s …',
'Preparsing item'				=>	'Voorbereiden %1$s %2$s …',
'Rebuilding index item'			=>	'Hermaken van index voor %1$s %2$s',

'ban'							=>	'ban',
'categories'					=>	'categoriën',
'censor words'					=>	'gecensureerde woorden',
'configuration'					=>	'configuratie',
'forums'						=>	'forums',
'groups'						=>	'groepen',
'post'							=>	'post',
'ranks'							=>	'rangen',
'report'						=>	'rapport',
'topic'							=>	'topic',
'user'							=>	'gebruiker',
'signature'						=>	'sigs',

'Username too short error'		=>	'Gebruikersnamen moeten minstens 2 tekens lang zijn. Kies een andere (langere) gebruikersnaam.',
'Username too long error'		=>	'Gebruikersnamen mogen maximaal 25 tekens lang zijn. Kies een andere (kortere) gebruikersnaam.',
'Username Guest reserved error'	=>	'De gebruikersnaam gast is gereserveerd, kies een andere gebruikersnaam.',
'Username IP format error'		=>	'Gebruikersnamen mogen niet in de vorm van een IP adres zijn. Kies een andere gebruikersnaam.',
'Username bad characters error'	=>	'Gebruikersnmaen mogen de tekens \', " en [ of ] niet bevatten. Kies een andere gebruikersnaam.',
'Username BBCode error'			=>	'Gebruikersnamen mogen geen BBCode bevatten die worden gebruikt in het forum. Kies een andere gebruikersnaam.',
'Username duplicate error'		=>	'Iemand is al geregistreerd met de gebruikersnaam %s. De gebruikersnaam die je hebt opgegeven lijkt te veel op deze. De gebruikersnaam moet verschillen doormiddel van minstens 1 alphanumeriek teken (a-z of 0-9). Kies een andere gebruikersnaam.',

);

