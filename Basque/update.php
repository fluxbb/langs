<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'Eguneratu FluxBB',
'Update message'				=>	'Zure FluxBB datu-basea zaharkituta dago eta eguneratu behar da jarraitu ahal izateko. Foroetako administratzailea bazara, jarraitu beheko argibideak eguneraketa burutzeko.',
'Note'							=>	'Oharra:',
'Members message'				=>	'Prozesu hau soilik foroetako administratzaileentzat da. Foroko kide bat bazara ez duzu larritu beharrik - foroak laster izango dira erabilgarri!',
'Administrator only'			=>	'Urrats hau soilik foroetako administratzaileentzat da!',
'Database password info'		=>	'Datu-basea eguneratzeko sartu FluxBB instalatzerakoan erabilitako datu-basearen pasahitza. Ez baduzu gogoratzen \'config.php\' fitxategian dago.',
'Database password note'		=>	'SQLite etabiltzen baduzu (eta ondorioz datu-base pasahitzik ez baduzu) erabili datubasearen izena ordez. Hau konfigurazio fitxategian agertzen den datu-base izena izan bahe da zehatz mehatz.',
'Database password'				=>	'Datu-base pasahitza',
'Maintenance'					=>	'Mantentze lanak',
'Maintenance message info'		=>	'Mezua erabiltzaileei erakutsiko zaie eguneraketak dirauen bitarrtean. Testu honek HTMLa izan dezake.',
'Maintenance message'		    =>	'Mantentze lanen mezua',

'You are running error'			=>	'%1$s erabiltzen duzu %2$s bertsioan. FluxBB %3$s gutxienez %1$s %4$s behar du behar bezala ibiltzekoy. Zure %1$s instalazioa eguneratu behar duzu aurrera egin ahal izateko.',
'Version mismatch error'		=>	'Bertsioak ez datoz bat.\'%s\' datu-basea ez du antza eguneraketa script honek onartzen duen FluxBB datu-base eskema bat erabiltzen.',
'Invalid file error'			=>	'Baliogabeko datu-base izena. SQLite erabioltzean datu-base izena zure \'%s\' fitxategian agertzen den moduan sartu behar duzu zehatz mehatz',
'Invalid password error'		=>	'Baliogabeko datu-base pasahitza. FluxBB eguneratzeko datu-basearen pasahitza zure \'%s\' fitxategian agertzen den moduan sartu behar duzu zehatz mehatz',
'No password error'				=>	'Ez da datu-base pasahitzik eman',
'Script runs error'				=>	'Badirudi neste norbait ari dela eguneraketa script hau erabiltzen. Hau ez bada horrela, eskuz ezabatu \'%s\' fitxategia eta berriro saiatu',
'No update error'				=>	'Zure foroa badago egunean Script honi dagokiola',

'Intro 1'						=>	'Script honek zure foroetako datu-basea eguneratuko du. Eguneraketa prozesuak segundo bat eta hainbat ordu bitartean iraun dezake zerbitzariaren abiadura eta foroen datu-basearen tamainaren arabera. Ez ahaztu datu-basearen segurtasun kopia bat egitea jarraitu aurretik.',
'Intro 2'						=>	'Eguneraketa argibideak irakurri dituzu dokumentazioan? Hala ez bada hasi zaitez hortik.',
'No charset conversion'			=>	'<strong>GARRATZITSUA!</strong> FluxBBk antzemak du PHP ingurune honek ez dituela ISO-8859-1 ez diren kodeketatik UTF-8ra bihurketa egiteko beharrezkoak diren mekanismoak. Honek esan nahi du oraingo kodeketa ISO-8859-1 ez bada, FluxBB ezin izango duela zure datu-basea UTF-8ra bihurtu eta eskuz egin beharko duzula. Testu kodeketa eskuz egiteko argibideak aurkituko dituzu dokumentazioko eguneraketa argibideetan.',
'Enable conversion'				=>	'<strong>Gaitu bihurketa:</strong> Gaituta dagoenean script honek, datu baseari egin beharreko estruktura aldaketak egin eta gero, datu-baseko testu guztiak UTF-8 kodeketara bihurtuko ditu. Bihurketa hau ezinbestekoa da 1.2 bertsiotik eguneratzen bazaude',
'Current character set'			=>	'<strong>Oraingo testu kodeketa:</strong> Zure foroko lehenetsitako hizkuntza ingelesa bada , lehenetsitako balioan utzi dezakezu. Baina foroa igelesa ez den beste hizkuntza batean badago foroan erabilitako hizkuntza nagusiaren testu kodeketa erabili beharko zenuke. <em>Hau gaizki egiteak datu-basea hondatu dezake ez saiatu asmatzen besterik gabe!</em> Note: Hau beharrrezkoa da datu-base zaharra UTF-8 kodeketa badu ere.',
'Charset conversion'			=>	'Test kodeketaren bihurketa',
'Enable conversion label'		=>	'<strong>Gaitu bihurketa</strong> (burutu datu-basearen testu kodeketa bihurketa).',
'Current character set label'	=>	'Oraingo testu kodeketat',
'Current character set info'	=>	'Onartu lehenetsia Ingelesez dauden foroetarako, bestela aukeratu hizkuntza nagusiaren testu kodeketa.',
'Start update'					=>	'Hasi eguneraketa',
'Error converting users'		=>	'Errorea erabiltzaileak bihurtzean',
'Error info 1'					=>	'Errore bat gertatu da erabiltzaile batzuk bihurtzean. Hau FluxBB v1.2tik eguneratzean gertatu daiteke hainbat erabiltzailek antzeko izenak badituzte, adibidez "bob" eta "böb".',
'Error info 2'					=>	'Behean bihurtu ezin izan diren erabiltzaile zerrenda bat dago. Aukeratu izen berri bat bakoitzarentzat. Erabiltzaileek automatikoki posta elektroniko mezu bat jasoko dute aldaketaren berri emanez.',
'New username'					=>	'Erabiltzaile izen berria',
'Required'						=>	'(Ezinbestekoa)',
'Correct errors'				=>	'Hurrengo erroreak ezin izan dira konpondu:',
'Rename users'					=>	'Aldatu erabiltzaileen izena',
'Successfully updated'			=>	'Zurue foroaren datu-basea ondo eguneratu da. Orain %s.',
'go to index'					=>	'zoaz foraren hasierara',

'Unable to lock error'			=>	'Ezin izan da eguneraketa blokeoa idatzi. Egiaztatu PHPk \'%s\' direktorioan idazteko baimena duela eta ez dagoela beste inor eguneraketa script hau erabiltzen.',

'Converting'					=>	'Bihurtzen %s …',
'Converting item'				=>	'Bihurtzen %1$s %2$s …',
'Preparsing item'				=>	'Aurreaztertzen %1$s %2$s …',
'Rebuilding index item'			=>	'Indizea berreraikitzen %1$s %2$s',

'ban'							=>	'debekatu',
'categories'					=>	'kategoriak',
'censor words'					=>	'zentsuratu hitzak',
'configuration'					=>	'konfigurazioa',
'forums'						=>	'foroak',
'groups'						=>	'taldeak',
'post'							=>	'bidali',
'report'						=>	'salatu',
'topic'							=>	'gaia',
'user'							=>	'erabiltzailea',
'signature'						=>	'sinadura',

'Username too short error'		=>	'Erabiltzaile izenek gutxienez 2 karaktere izan behar dituzte. Aukeratu izen luzeago bat.',
'Username too long error'		=>	'Erabiltzaile izenek gehienez 25 karaktere izan behar dituzte. Aukeratu izen laburrago bat.',
'Username Guest reserved error'	=>	'guest erabiltzaile izena erreserbatuta dago. Aukeratu beste erabiltzaile izen bat.',
'Username IP format error'		=>	'Erabiltzaile izenek ezin dute IP helbide itzura izan. Aukeratu beste erabiltzaile izen bat.',
'Username bad characters error'	=>	'Erabiltzaile izenek ezin dituzte \', " eta [ edo ] karaktereak aldi berean izan. Aukeratu beste erabiltzaile izen bat.',
'Username BBCode error'			=>	'Erabiltzaile izenek ezin dituzte foroan erabilitako formatu etiketak izan (BBCode). Aukeratu beste erabiltzaile izen bat.',
'Username duplicate error'		=>	'Badago beste inor %s izenarekin. Sartu duzun izenak antza gehiegi dauka. Erabiltzaile izena gutxienez karaktere alfanumeriko bateko desberdintasuna izan behar du (a-z or 0-9).Aukeratu beste erabiltzaile izen bat.',

);
