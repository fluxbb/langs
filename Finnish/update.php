<?php

// Language definitions used in db_update.php
// Finnish translation by Pauligrinder

$lang_update = array(

'Update'						=>	'Päivitä FluxBB',
'Update message'				=>	'FluxBB-tietokantasi on vanhentunut ja se täytyy päivittää ennen kuin voit jatkaa. Jos olet laudan ylläpitäjä, seuraa alla olevia ohjeita suorittaaksesi FluxBB:n päivitys.',
'Note'							=>	'Huomio:',
'Members message'				=>	'Tämä toiminto on ainoastaan laudan ylläpitäjää varten. Jos olet jäsen, sinun ei tarvitse murehtia - forumit palaavat hetken kuluttua!',
'Administrator only'			=>	'Tämä askel on ainoastaan laudan ylläpitäjää varten!',
'Database password info'		=>	'Päivittääksesi tietokanta, sinun täytyy antaa tietokannan salasana, jolla FluxBB on asennettu. Jos et muista, niin se löytyy \'config.php\' tiedostosta.',
'Database password note'		=>	'Jos käytössä on SQLite (eli ei salasanaa) kirjoita tähän tietokannan tiedoston nimi. Tämän täytyy olla tasan sama kuin configuraatiotiedostossa määritetty tiedoston nimi.',
'Database password'				=>	'Tietokannan salasana',
'Next'							=>	'Seuraava',

'You are running error'			=>	'Sinulla on %1$s versio %2$s. FluxBB %3$s vaatii vähintään %1$s %4$s toimiakseen kunnolla. Sinun täytyy päivittää %1$s asennuksesi ennen kuin voit jatkaa.',
'Version mismatch error'		=>	'Versiovirhe. Tietokanta \'%s\' ei näytä käyttävän tämän scriptin tukemaa tietokantamallia.',
'Invalid file error'			=>	'Virheellinen tietokantatiedoston nimi. Kun SQLite on käytössä, tiedoston nimen pitää olla tasan sama kuin \'%s\' tiedostossasi. ',
'Invalid password error'		=>	'Virheellinen tietokannan salasana. Päivittääksesi FluxBB:n salasanan pitää olla tasan sama kuin \'%s\' tiedostossasi.',
'No password error'				=>	'Et ilmoittanut tietokannan salasanaa',
'Script runs error'				=>	'Vaikuttaa siltä että joku suorittaa jo päivitysscriptiä. Jos näin ei ole, poista tiedosto \'%s\' manuaalisesti ja kokeile uudelleen',
'No update error'				=>	'Forumisi on jo niin ajantasalla kuin tämä scripti voi sen saada',

'Intro 1'						=>	'Tämä scripti päivittää tietokantasi. Päivitys voi kestää sekunnista moneen tuntiin riippuen palvelimesi nopeudesta ja tietokannan koosta. Älä unohda varmuuskopioida tietokantaa ennen päivitystä.',
'Intro 2'						=>	'Luitko päivitysohjeet dokumentaatiosta? Jos et lukenut, aloita siitä.',
'No charset conversion'			=>	'<strong>TÄRKEÄÄ!</strong> FluxBB on havainnut että tämä PHP-ympäristö ei tue UTF-8 muunnoksia muista kuin ISO-8859-1 koodatusta tekstistä. Tämä tarkoittaa sitä, että jos nykyinen koodaus ei ole ISO-8859-1, niin FluxBB ei pysty muuntamaan tietokantaasi UTF-8 muotoon, ja joudut tekemään sen manuaalisesti. Ohjeet tähän löytyvät päivitysohjeista.',
'Enable conversion'				=>	'<strong>Ota muunnosa käyttöön:</strong> Kun tämä on valittu, scripti muuntaa koko tietokannan UTF-8 muotoon tehtyään tarvittavat rakenteelliset muutokset. Tämä muunnosa vaaditaan jos päivität versio 1.2:sta.',
'Current character set'			=>	'<strong>Nykyinen merkkikoodaus:</strong> Jos pääkielesi on englanti, voit jättää tämän oletusarvoonsa. Jos forumisi kuitenkin on muun kuin englanninkielinen, sinun kannattaa valita käyttämäsi kielipaketin käyttämä merkkikoodaus. <em>Väärä asetus tässä kohdassa voi korruptoida koko tietokannan, joten ei kannata arvailla!</em> Huom: Tämä vaadittaan vaikka vanha tietokanta olisi UTF-8 muodossa.',
'Charset conversion'			=>	'Merkistön muunnos',
'Enable conversion label'		=>	'<strong>Ota muunnos käyttöön</strong> (Suorita tietokannan merkistön uudelleenkoodaus).',
'Current character set label'	=>	'Nykyinen merkistö',
'Current character set info'	=>	'Hyväksy oletus jos forumi on englanninkielinen, muussa tapauksessa valitse käyttämäsi kielipaketin merkistö.',
'Start update'					=>	'Aloita päivitys',
'Error converting users'		=>	'Virhe käyttäjien muuntamisessa',
'Error info 1'					=>	'Joidenkin käyttäjien muuntamisessa tapahtui virhe. Tämä voi tapahtua ku muunnetaan luxBB v1.2:sta kun monella käyttäjille on hyvin samankaltaiset nimet esim. "bob" ja "böb".',
'Error info 2'					=>	'Alla on lista käyttäjistä joiden muuntaminen epäonnistui. Valitse jokaiselle käyttäjälle uusi käyttäjänimi. Uudelleennimetyille käyttäjille ilmoitetaan automaattisesti sähköopostitse.',
'New username'					=>	'Uusi käyttäjänimi',
'Required'						=>	'(Pakollinen)',
'Correct errors'				=>	'Seuraavat virheet täytyy korjata:',
'Rename users'					=>	'Uudelleennimeä käyttäjät',
'Successfully updated'			=>	'Forumisi tietokanta päivitettiin. Nyt voit %s.',
'go to index'					=>	'siirtyä forumin pääsivulle',

'Unable to lock error'			=>	'Päivityslukkoa ei voitu kirjoittaa. Varmista että PHP:llä on oikeus kirjoittaa hakemistoon \'%s\' ja ettei kukaan muu suorita päivitysscriptiä samaan aikaan.',

'Converting'					=>	'Muunnetaan %s …',
'Converting item'				=>	'Muunnetaan %1$s %2$s …',
'Preparsing item'				=>	'Esijäsennellään %1$s %2$s …',
'Rebuilding index item'			=>	'Uudelleenrakennetaan sisällysluettelo kohdissa %1$s %2$s',

'ban'							=>	'bannit',
'categories'					=>	'luokat',
'censor words'					=>	'sensuroitavat sanat',
'configuration'					=>	'configuraatio',
'forums'						=>	'forumit',
'groups'						=>	'ryhmät',
'post'							=>	'kirjoitukset',
'ranks'							=>	'arvonimet',
'report'						=>	'raportit',
'topic'							=>	'otsikot',
'user'							=>	'käyttäjät',
'signature'						=>	'allekirjoitukset',

'Username too short error'		=>	'Käyttäjänimien täytyy olla vähintään 2 merkkiä pitkiä. Anna toinen (pidempi) käyttäjänimi.',
'Username too long error'		=>	'Käyttäjänimet eivät saa olla yli 25 merkkiä pitkiä. Valitse toinen (lyhyenmpi) käyttäjänimi.',
'Username Guest reserved error'	=>	'Käyttäjänimi guest on varattu. Valitse jokin muu käyttäjänimi.',
'Username IP format error'		=>	'Käyttäjänimet eivät saa olla IP-osoitteen muotoisia. Valitse jokin muu käyttäjänimi.',
'Username bad characters error'	=>	'Käyttäjänimet eivät saa sisältää merkkejä \', " ja [ tai ] samanaikaisesti. Valitse toinen käyttäjänimi.',
'Username BBCode error'			=>	'Käyttäjänimet eivät saa sisältää forumin käyttämiä BBCode-tageja. Valitse toinen käyttäjänimi.',
'Username duplicate error'		=>	'Joku on jo varannut nimen %s. Käyttäjänimesi on liian samankaltainen. Käyttäjänimen täytyy poiketa ainakan yhden kirjaimen verran (a-z tai 0-9). Valitse toinen käyttäjänimi.',

'JavaScript disabled'			=>	'JavaScript vaikuttaa olevan poissa käytöstä. %s.',
'Click here to continue'		=>	'Napsauta tästä jatkaaksesi',
'Required field'				=>	'on pakollinen kenttä tässä lomakkeessa.'

);
