<?php



// Taaldefinities gebruikt in admin-options.php

$lang_admin_options = array(



'Bad HTTP Referer message'			=>	'Verkeerde HTTP_REFERER. Als je dit forum van de ene plaats naar de andere hebt gezet of het domein hebt veranderd, moet je de Base URL handmatig aanpassen in de database (zoek naar o_base_url in de config tabel) en vervolgens verwijder je de cache door alle .php bestanden in de /cache map te wissen.',
'Must enter title message'			=>	'Je moet een titel opgeven.',
'Invalid e-mail message'			=>	'Het e-mailadres dat je hebt opgegeven is fout.',
'Invalid webmaster e-mail message'	=>	'Het e-mailadres dat je hebt opgegeven is fout.',
'SMTP passwords did not match'		=>	'Je moet het SMTP-adres 2 keer opgeven om een wijziging te mogen aanbrengen.',
'Enter announcement here'			=>	'Geef hier aankondigingen op.',
'Enter rules here'					=>	'Geef hier regels op.',
'Default maintenance message'		=>	'Dit forum is niet beschikbaar in verband met onderhoud. Probeer het later opnieuw.',
'Timeout error message'				=>	'De waarde van "Time-out online" moet kleiner zijn dan "Time-out bezoek".',
'Options updated redirect'			=>	'Opties bijgewerkt. Doorverwijzen…',
'Options head'						=>	'Opties',


// Algemeen

'Essentials subhead'				=>	'Algemeen',
'Board title label'					=>	'Titel',
'Board title help'					=>	'De titel van dit forum (te zien boven iedere pagina. Dit veld ondersteunt geen HTML).',
'Board desc label'					=>	'Beschrijving',
'Board desc help'					=>	'Een kort beschrijving van het forum, te zien onder de titel van je forum. Dit veld ondersteunt HTML.',
'Base URL label'					=>	'Root URL',
'Base URL help'						=>	'De volledige URL van het forum zonder "/" van achter (bv http://www.fluxbb.org/forum). Dit <strong>moet</strong> goed zijn, anders werken admin en moderator opties mogelijk niet. Als je errors als "Bad referer" krijgt is dit mogelijk verkeerd ingesteld.',
'Timezone label'					=>	'Standaard tijd zone',
'Timezone help'						=>	'De standaard tijd zone voor gasten en gebruikers die zich registreren.',
'DST label'							=>	'Aanpassing voor zomertijd',
'DST help'							=>	'Zet zomertijd aan of uit.',
'Language label'					=>	'Standaard taal',
'Language help'						=>	'De standaard taal voor gasten en gebruikers die dit niet hebben aangepast in hun profiel. Als je een taalpakket verwijdert moet je deze instelling controleren.',
'Default style label'				=>	'Standaard template',
'Default style help'				=>	'Het standaard template voor gasten en gebruikers die dit niet hebben aangepast in hun profiel.',


// Tijd zones

'UTC-12:00'					=>	'(UTC-12:00) Internationale Datum Lijn (West)',
'UTC-11:00'					=>	'(UTC-11:00) Niue, Samoa',
'UTC-10:00'					=>	'(UTC-10:00) Hawaï-Aleutian, Cook Eiland',
'UTC-09:30'					=>	'(UTC-09:30) Marquesas Eiland',
'UTC-09:00'					=>	'(UTC-09:00) Alaska, Gambier Eiland',
'UTC-08:30'					=>	'(UTC-08:30) Pitcairn Eiland',
'UTC-08:00'					=>	'(UTC-08:00) Pacific',
'UTC-07:00'					=>	'(UTC-07:00) Mountain',
'UTC-06:00'					=>	'(UTC-06:00) Centraal',
'UTC-05:00'					=>	'(UTC-05:00) Oost',
'UTC-04:00'					=>	'(UTC-04:00) Atlantica',
'UTC-03:30'					=>	'(UTC-03:30) Newfoundland',
'UTC-03:00'					=>	'(UTC-03:00) Amazon, Centraal Groenland',
'UTC-02:00'					=>	'(UTC-02:00) Midden-Atlantica',
'UTC-01:00'					=>	'(UTC-01:00) Azores, Cape Verde, Eastern Greenland',
'UTC'						=>	'(UTC) West Europa, Greenwich',
'UTC+01:00'					=>	'(UTC+01:00) Centraal Europa, West Afrika',
'UTC+02:00'					=>	'(UTC+02:00) Oost Europa, Centraal Afrika',
'UTC+03:00'					=>	'(UTC+03:00) Oost Afrika',
'UTC+03:30'					=>	'(UTC+03:30) Iran',
'UTC+04:00'					=>	'(UTC+04:00) Moskou, Gulf, Samara',
'UTC+04:30'					=>	'(UTC+04:30) Afghanistan',
'UTC+05:00'					=>	'(UTC+05:00) Pakistan',
'UTC+05:30'					=>	'(UTC+05:30) India, Sri Lanka',
'UTC+05:45'					=>	'(UTC+05:45) Nepal',
'UTC+06:00'					=>	'(UTC+06:00) Bangladesh, Bhutan, Yekaterinburg',
'UTC+06:30'					=>	'(UTC+06:30) Cocos Eiland, Myanmar',
'UTC+07:00'					=>	'(UTC+07:00) Indochina, Novosibirsk',
'UTC+08:00'					=>	'(UTC+08:00) Greater China, West Australië, Krasnoyarsk',
'UTC+08:45'					=>	'(UTC+08:45) Southeastern West Australië',
'UTC+09:00'					=>	'(UTC+09:00) Japan, Korea, Chita, Irkutsk',
'UTC+09:30'					=>	'(UTC+09:30) Centraal Australië',
'UTC+10:00'					=>	'(UTC+10:00) Oost Australië, Vladivostok',
'UTC+10:30'					=>	'(UTC+10:30) Lord Howe',
'UTC+11:00'					=>	'(UTC+11:00) Solomon Eiland, Vladivostok',
'UTC+11:30'					=>	'(UTC+11:30) Norfolk Eiland',
'UTC+12:00'					=>	'(UTC+12:00) Nieuw Zeeland, Fiji, Magdan',
'UTC+12:45'					=>	'(UTC+12:45) Chatham Eiland',
'UTC+13:00'					=>	'(UTC+13:00) Tonga, Phoenix Eiland, Kamchatka',
'UTC+14:00'					=>	'(UTC+14:00) Line Eiland',


// Time-out

'Timeouts subhead'					=>	'Tijd en time-out',
'Time format label'					=>	'Tijd weergave',
'PHP manual'						=>	'PHP handleiding',
'Time format help'					=>	'[Huidig formaat: %s]. Bekijk de %s voor mogelijke formaten.',
'Date format label'					=>	'Datum weergave',
'Date format help'					=>	'[Huidig formaat: %s]. Bekijk de %s voor mogelijke formaten.',
'Visit timeout label'				=>	'Bezoek time-out',
'Visit timeout help'				=>	'Aantal seconden dat een gebruiker inactief moet zijn voordat de laatste bezoek gegevens van deze persoon worden geüpdatet.',
'Online timeout label'				=>	'Online time-out',
'Online timeout help'				=>	'Aantal seconden dat een gebruiker inactief moet zijn voordat deze verdwijnt uit de gebruikers online lijst.',
'Redirect time label'				=>	'Tijd voor doorverwijzing',
'Redirect time help'				=>	'Aantal seconden dat een doorverwijspagina wordt getoond. Als dit op 0 staat, wordt deze pagina niet weergegeven. Let wel dat de gebruiker dan mogelijk nog een pagina te zien krijgt waar geen wijzigingen in zijn aangebracht.',


// Weergave

'Display subhead'					=>	'Weergave',
'Version number label'				=>	'Versie nummer',
'Version number help'				=>	'Laat het volledige versienummer van je FluxBB installatie zien in de footer.',
'Info in posts label'				=>	'Gebruiker info bij posts',
'Info in posts help'				=>	'Laat info zien van de gebruiker onder zijn gebruikersnaam. (plaats, registratie-datum, aantal posts en contact links)',
'Post count label'					=>	'Posts teller',
'Post count help'					=>	'Laat het aantal posts van een gebruiker zien. (heeft effect op topics, profielen en de gebruikerlijst)',
'Smilies label'						=>	'Emoticons in posts',
'Smilies help'						=>	'Verander emoticons in kleine icoontjes.',
'Smilies sigs label'				=>	'Emoticons in handtekeningen',
'Smilies sigs help'					=>	'Verander emoticons in kleine icoontjes in de handtekeningen van gebruikers.',
'Clickable links label'				=>	'Maak links klikbaar',
'Clickable links help'				=>	'Als dit aan staat zullen alle links automatisch worden vervangen door een klikbare versie ervan.',
'Topic review label'				=>	'Topic review',
'Topic review help'					=>	'Maximum aantal posts die worden weergegeven tijdens het posten. Zet dit op 0 om uit te schakelen.',
'Topics per page label'				=>	'Topics per pagina',
'Topics per page help'				=>	'De standaard aantal topics die per pagina worden weergegeven in een forum. Gebruikers kunnen deze instelling voor zichzelf wijzigen.',
'Posts per page label'				=>	'Posts per pagina',
'Posts per page help'				=>	'De standaard aantal posts die per pagina worden weergegeven in een topic. Gebruikers kunnen deze instelling voor zichzelf wijzigen.',
'Indent label'						=>	'Code grote',
'Indent help'						=>	'Maximale hoogte voordat er een scrol balk beschikbaar komt bij de [code]-tag.',
'Quote depth label'					=>	'Maximum [quote] diepte',
'Quote depth help'					=>	'Het maximum aantal keer dat een [quote]-tag in een [quote]-tag kan. Iedere laag dieper wordt verwijderd.',


// Features sectie

'Features subhead'					=>	'Functies',
'Quick post label'					=>	'Snel posten',
'Quick post help'					=>	'FluxBB zal een veld onderaan ieder topic toevoegen zodat gebruikers van daaruit een post kunnen plaatsen in dat topic.',
'Users online label'				=>	'Gebruikers online',
'Users online help'					=>	'Laat onderaan de index pagina zien hoeveel gasten en geregistreerde gebruikers het forum bezoeken.',
'Censor words label'				=>	'Censureer woorden',
'Censor words help'					=>	'Zet dit op "Ja" om woorden op dit forum te censureren. Zie %s voor meer informatie.',
'Signatures label'					=>	'Handtekening',
'Signatures help'					=>	'Geef gebruikers de mogelijkheid om onder hun berichten een handtekening te plaatsen.',
'User has posted label'				=>	'Gebruiker heeft eerder gepost',
'User has posted help'				=>	'Deze optie zorgt ervoor dat er een stip komt te staan voor topic in viewforum.php voor gebruikers die zijn ingelogd en al eerder hebben gepost in dat topic. Indien dit de server zwaar belast kan je dit beter uitschakelen.',
'Topic views label'					=>	'Topic weergave',
'Topic views help'					=>	'Houd het aantal keer dat een topic wordt bekeken bij. Schakel dit uit als er hoge server load optreed.',
'Quick jump label'					=>	'Ga naar',
'Quick jump help'					=>	'Schakel de "Ga naar" droplist onderaan iedere pagina in of uit.',
'GZip label'						=>	'GZip output',
'GZip help'							=>	'Als dit op aan staat zal FluxBB output die het verzent naar de browser sturen in gzip-formaat. Dit bespaart bandbreedte, maar heeft wel wat meer kracht van de CPU nodig. PHP moet geconfigureerd zijn met zlib (--with-zlib) om deze optie te kunnen gebruiken.',
'Search all label'					=>	'Alle forums doorzoeken',
'Search all help'					=>	'Als dit op "Nee" staat kan een zoekopdracht enkel binnen 1 forum worden gehouden per keer. Dit bespaard bandbreedte maar is niet echt gebruiksvriendelijk.',
'Menu items label'					=>	'Aangepaste menu items',
'Menu items help'					=>	'In dit tekst vak kan je HTML hyperlinks invullen die worden toegevoegd aan het hoofdmenu van het forum. Het formaat dat je moet aanhouden om nieuwe menu opties toe te voegen is X = &lt;a href="url"&gt;link&lt;/a&gt;, waarbij X de positie van de link bedraagt (bv. gebruik 0 om je link vooraan te plaatsen, gebruik 2 om je link achter "Gebruikerslijst" te plaatsen).',


// Feeds

'Feed subhead'						=>	'Feeds',
'Default feed label'				=>	'Standaard feed typen',
'Default feed help'					=>	'Selecteer welk feed type moet worden weergegeven. Let op: Als je voor "Geen" kiest worden feeds niet uitgeschakeld, maar zijn ze standaard enkel onzichtbaar.',
'None'								=>	'Geen',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'Duur voor cache feeds',
'Feed TTL help'						=>	'Feeds kunnen worden opgeslagen voor lager gebruik van de resources.',
'No cache'							=>	'Geen cache',
'Minutes'							=>	'%d minuten',


// Rapporteer

'Reports subhead'					=>	'Rapporten',
'Reporting method label'			=>	'Rapporteer methode',
'Internal'							=>	'Intern',
'By e-mail'							=>	'E-mail',
'Both'								=>	'Beide',
'Reporting method help'				=>	'Kies de manier waarop topic en posts gerapporteerd kunnen worden. Je kan ervoor kiezen om een rapport te laten behandelen door het ingebouwde rapporteer systeem, via e-mailadressen op de e-mail lijst (zie hieronder) of beide.',
'Mailing list label'				=>	'E-mail lijst',
'Mailing list help'					=>	'Met een komma kan je e-mailadressen splitsen, de gebruikers in deze lijst kunnen rapporten ontvangen.',


// Avatars

'Avatars subhead'					=>	'Avatars',
'Use avatars label'					=>	'Gebruik avatars',
'Use avatars help'					=>	'Als dit op "Ja" staat kunnen gebruikers avatars uploaden die onder hun titel komt te staan.',
'Upload directory label'			=>	'Upload map',
'Upload directory help'				=>	'De map waar geüploade avatars komen te staan (relatief naar de FluxBB root map). Zorg ervoor dat PHP toegang heeft om naar deze map te schrijven.',
'Max width label'					=>	'Maximum breedte',
'Max width help'					=>	'De maximale breedte die een avatar kan hebben (60 is standaard).',
'Max height label'					=>	'Maximum hoogte',
'Max height help'					=>	'De maximale lengte die een avatar kan hebben (60 is standaard).',
'Max size label'					=>	'Maximum grote',
'Max size help'						=>	'De maximale grote die een avatar kan hebben in bytes (10240 is standaard).',


// E-mail

'E-mail subhead'					=>	'E-mail',
'Admin e-mail label'				=>	'Beheerder e-mail',
'Admin e-mail help'					=>	'Het e-mailadres van de forum beheerder.',
'Webmaster e-mail label'			=>	'Webmaster e-mail',
'Webmaster e-mail help'				=>	'Dit is het e-mailadres waar alle berichten die het forum verzendt van zullen komen.',
'Forum subscriptions label'			=>	'Forum abonnee',
'Forum subscriptions help'			=>	'Laat gebruikers zich abonneren op forums (ontvang e-mail als iemand een nieuw onderwerp aanmaakt).',
'Topic subscriptions label'			=>	'Topic abonnee',
'Topic subscriptions help'			=>	'Laat gebruikers zich abonneren op topics (ontvang e-mail als iemand reageert).',
'SMTP address label'				=>	'SMTP server adres',
'SMTP address help'					=>	'Het adres van een externe SMTP server om e-mails mee te verzenden. Je kan een eigen poort nummer gebuiken als de SMTP server niet werkt met de standaard poort 25 (voorbeeld: mail.fluxbb.org:3580). Laat eeg om het standaard e-mail programma te gebruiken.',
'SMTP username label'				=>	'SMTP gebruikersnaam',
'SMTP username help'				=>	'Gebruikersnaam van de SMTP server. Gebruik alleen een gebruikersnaam als de SMTP server dit nodig heef (de meeste servers gebruiken <strong>geen</strong> authenticatie).',
'SMTP password label'				=>	'SMTP wachtwoord',
'SMTP change password help'			=>	'Vink aan als je het standaard opgeslagen wachtwoord wilt bewerken of verwijderen.',
'SMTP password help'				=>	'Wachtwoord voor de SMTP server. Gebruik alleen een wachtwoord als de SMTP server hier om vraagt (de meeste servers gebruiken <strong>geen</strong> authenticatie). Geef het wachtwoord 2 keer op om te bevestigen.',
'SMTP SSL label'					=>	'Encrypt SMTP met SSL',
'SMTP SSL help'						=>	'Encryp de verbinding met de SMTP server door middel van SSL. Gebruik dit alleen als je SMTP server dit vereist en je versie van PHP ondersteuning bied voor SSL.',


// Registratie

'Registration subhead'				=>	'Registratie',
'Allow new label'					=>	'Nieuwe registraties',
'Allow new help'					=>	'Bepaal of er nieuwe gebruikers zich kunnen registreren op dit forum.',
'Verify label'						=>	'Controleer registraties',
'Verify help'						=>	'Indien aan zullen gebruikers een willekeurig wachtwoord krijgen opgestuurd na hun registratie waarmee ze kunnen inloggen. Daarna kunnen ze het wachtwoord in hun profiel aanpassen. Dit wordt ook gebruikt om het e-mailadres te wijzigen. Dit is een effectieve manier om ervoor te zorgen dat gebruikers een correct e-mailadres gebruiken.',
'Report new label'					=>	'Rapporteer nieuwe registraties',
'Report new help'					=>	'Indien aan zal FluxBB een bericht sturen naar de e-mail lijst (zie "Rapporten" hier boven) als er een nieuwe gebruiker is geregistreerd.',
'Use rules label'					=>	'Forum regels',
'Use rules help'					=>	'Indien aan moeten gebruikers eerst de regels van dit forum accepteren (regels invullen kan hier onder). De regels zullen altijd bereikbaar zijn via een link die bovenaan iedere pagina in het menu zal verschijnen als dit veld wordt ingevuld.',
'Rules label'						=>	'Geef hier de regels op',
'Rules help'						=>	'Regels of andere informatie die de gebruikers van dit forum moeten weten en accepteren bij hun registratie. Vul hier de regels in als je bij de vorige optie voor "Ja" hebt gekozen. De tekst die je hier invult mag HTML bevatten.',
'E-mail default label'				=>	'Standaard e-mail instellingen',
'E-mail default help'				=>	'Kies de standaard privacy instelling voor nieuwe gebruikers.',
'Display e-mail label'				=>	'Gebruikers kunnen elkaars e-mailadres zien.',
'Hide allow form label'				=>	'E-mailadres verbergen, maar e-mail formulier weergeven.',
'Hide both label'					=>	'E-mailadres en e-mail formulier verbergen.',


// Aankondigingen

'Announcement subhead'				=>	'Aankondigingen',
'Display announcement label'		=>	'Aankondigingen weergeven',
'Display announcement help'			=>	'Kies "Ja" om onderstaande aankondiging bovenaan iedere pagina op het forum weer te geven.',
'Announcement message label'		=>	'Aankondiging',
'Announcement message help'			=>	'De tekst die je hier invult mag HTML bevatten.',


// Onderhoud

'Maintenance subhead'				=>	'Onderhoud',
'Maintenance mode label'			=>	'Onderhouds modus',
'Maintenance mode help'				=>	'Als dit op "Ja" staat zal het forum enkel beschikbaar zijn voor beheerders. Dit kan je gebruiken om het forum tijdelijk uit de lucht te halen voor onderhoud. <strong>WAARSCHUWING! Log niet uit tijdens de onderhouds modus!</strong> Je kan niet meer inloggen als het forum op onderhoud staat.',
'Maintenance message label'			=>	'Onderhoud bericht',
'Maintenance message help'			=>	'Het bericht dat bezoekers van het forum zijn als de onderhouds modus actief is. Als je dit veld leeg laat zal een standaard bericht worden weergegeven. De tekst die je hier invult mag HTML bevatten.',


);

