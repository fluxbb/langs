<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'Ažuriraj FluxBB',
'Update message'				=>	'Vaša FluxBB baza podataka je zastarela i mora biti nadograđena kako bi nastavili. Ako ste administrator foruma, molim Vas pratite instrukcije ispod kako bi ste završili nadogradǌu.',
'Note'							=>	'Beleška:',
'Members message'				=>	'Ovaj postupak je samo za administratore foruma. Ako ste administrator nema razloga za brigu - forum će biti dostupan uskoro!',
'Administrator only'			=>	'Ovaj korak je samo za administratore foruma!',
'Database password info'		=>	'Kako biste izvršili ažuriraǌe baze podataka molim Vas unesite šifru za bazu sa kojom je FluxBB bio instaliran. Ako ne možete da se setite šifre, ona je sačuvana u Vašem \'config.php\' fajlu.',
'Database password note'		=>	'Ako koristite SQLite (i zbog toga nemate šifru) molim Vas koristite ime fajla baze podataka umesto šifre. Ime fajla mora biti ono koje je navedeno u konfiguracijom fajlu.',
'Database password'				=>	'Šifra za bazu podataka',
'Maintenance'					=>	'Održavaǌe',
'Maintenance message info'		=>	'Ova poruka će se prikazati korisnicima u toku procesa ažuriraǌa. Tekst se ne neće prikazivati kao sto je slučaj sa običnim porukama i prema tome može sadržati HTML.',
'Maintenance message'		    =>	'Poruka održavaǌa',

'You are running error'			=>	'Vi koristite %1$s verziju %2$s. FluxBB %3$s zahteva najmaǌe %1$s %4$s da bi radio optimalno. Morate nadograditi Vašu %1$s instalaciju pre nego što nastavite.',
'Version mismatch error'		=>	'Verzija nije usklađena. Baza podataka \'%s\' izgleda da ne koristi FluxBB šemu baze podataka podržanu ovom skriptom za ažuriraǌe.',
'Invalid file error'			=>	'Ime fajla baze podataka nije ispravno. Kada koristite SQLite, ime fajla baze podataka mora biti uneto tačno onako kako je u Vašoj \'%s\'',
'Invalid password error'		=>	'Šifra za bazu podataka nije ispravna. Da biste ažurirali FluxBB morate uneti šifru za bazu podataka tačno onakvu kakva se pojavlǉuje u Vašem \'%s\'',
'No password error'				=>	'Nije uneta šifra za bazu podataka',
'Script runs error'				=>	'Izgleda da je skripta za ažuriraǌe već pokrenuta od nekog drugog. Ako ovo nije slučaj, molim Vas obrišite ručno fajl \'%s\' i probajte ponovo',
'No update error'				=>	'Vaš forum je već ažuriran na verziju na koju se ovom skriptom može ažurirati',

'Intro 1'						=>	'Ova skripta će ažurirati Vašu bazu podataka foruma. Ažuriraǌe može potrajati od par sekundi do nekoliko sati, što zavisi od brzine servera i veličine baze podataka foruma. Ne zaboravite da napravite rezervu baze podataka pre nego što nastavite.',
'Intro 2'						=>	'Da li ste pročitali instrukcije za ažuriraǌe u dokumentaciji? Ako niste, počnite ovde.',
'No charset conversion'			=>	'<strong>VAŽNO!</strong> FluxBB je otkrio da ovo PHP okružeǌe nema podršku za mehanizam šifrovaǌa koji se zahteva za UTF-8 konverziju kompleta karaktera koja nisu ISO-8859-1. Ovo znači da, ako trenutni karakter ne pripada kompletu znakova ISO-8859-1, FluxBB neće moći da konvertuje Vašu bazu podataka foruma u UTF-8 i Vi ćete morati da uradite to ručno. Instrukcije za ručnu konverziju karaktera se mogu pronaći u instrukcijama za ažuriraǌe.',
'Enable conversion'				=>	'<strong>Omogućite konverziju:</strong> Kada je omogućena, ova skripta za ažuriraǌe će, pošto napravi zahtevane strukturne promene u bazi podataka, konvertovati celokupan tekst u bazi podata od trenutnog kompleta karaktera u UTF-8. Ova konverzija je zahtevana ako ažurirate od verzije 1.2.',
'Current character set'			=>	'<strong>Trenutni komplet karaktera:</strong> Ako je osnovni jezik Vašeg foruma Engleski, možete ostaviti ovo kao podrazumevanu vrednost. Međutim, ako je Vaš forum ne-Engleski, Vi biste trebali da unesete komplet karaktera osnovnog jezika koji je korišćen na forumu. <em>Ako uradite ovo pogrešno, može doći do oštećeǌa Vaše baze podataka tako da nemojte da probate samo pogađaǌem!</em> Beleška: Ovo je zahtevano iako je stara baza podataka u UTF-8.',
'Charset conversion'			=>	'Konverzija kompleta karaktera',
'Enable conversion label'		=>	'<strong>Omogućite konverziju</strong> (izvrši konverziju karaktera baze podataka).',
'Current character set label'	=>	'Trenutni komplet karaktera',
'Current character set info'	=>	'Prihvati inicijalni komplet karaktera za Engleske forume, u suprotnom koristi komplet karaktera primarnog jezika.',
'Start update'					=>	'Počni ažuriraǌe',
'Error converting users'		=>	'Greška u konverziji korisnika',
'Error info 1'					=>	'Postojala je greška prilikom konverzije nekih korisnika. Ovo se može desiti prilikom konverzije od verzije FluxBB v1.2 ako su više korisnika registrovani sa sličnim korisničkim imenima, na primer "bob" and "böb".',
'Error info 2'					=>	'Ispod je lista korisnika gde je došlo do greške u konvertovaǌu. Molim Vas izaberite novo korisničko ime za svakog korisnika. Korisnici koji su preimenovani će biti automatski email-om upozoreni o promeni.',
'New username'					=>	'Novo korisničko ime',
'Required'						=>	'(Zahtevano)',
'Correct errors'				=>	'Sledeće greške moraju biti popravǉene:',
'Rename users'					=>	'Promeni ime korisnicima',
'Successfully updated'			=>	'Vaša baza podataka foruma je uspešno ažurirana. Sada možete %s.',
'go to index'					=>	'idi na index stranicu',

'Unable to lock error'			=>	'Nije moguće zakǉučati ažuriraǌe. Molim Vas ustavanovite da PHP ima prava upisivaǌa u direktorijum \'%s\' i niko drugi trenutno nije pokrenuo skriptu za ažuriraǌe.',

'Converting'					=>	'Konvertovaǌe %s …',
'Converting item'				=>	'Konvertovaǌe %1$s %2$s …',
'Preparsing item'				=>	'Predrasčlaǌivaǌe %1$s %2$s …',
'Rebuilding index item'			=>	'Novo kreiraǌe indeksa za %1$s %2$s',

'ban'							=>	'zabrana',
'categories'					=>	'kategorije',
'censor words'					=>	'cenzurisane reči',
'configuration'					=>	'konfiguracija',
'forums'						=>	'forumi',
'groups'						=>	'grupe',
'post'							=>	'objaviti',
'report'						=>	'izveštaj',
'topic'							=>	'tema',
'user'							=>	'korisnik',
'signature'						=>	'obeležje',

'Username too short error'		=>	'Korisničko ime mora biti najmanje 2 karaktera dužine. Molim Vas izaberite drugo (duže) korisničko ime.',
'Username too long error'		=>	'Korisničko ime ne sme biti duže od 25 karaktera. Molim Vas izaberite drugo (kraće) korisničko ime.',
'Username Guest reserved error'	=>	'Korisničko ime gosta je rezervisano. Molim Vas izaberite drugo korisničko ime.',
'Username IP format error'		=>	'Korisničko ime ne može biti u obliku IP adrese. Molim Vas izaberite drugo korisničko ime.',
'Username bad characters error'	=>	'Korisničko ime ne može sadržati karaktere \', " i [ ili ] od jednom. Molim Vas izaberite drugo korisničko ime.',
'Username BBCode error'			=>	'Korisničko ime ne može sadržati bilo koju oznaku za formatiraǌe tekst (BBCode) koju koristi forum. Molim Vas izaberite drugo korisničko ime.',
'Username duplicate error'		=>	'Neko se već registrovao sa ovim korisničkim imenom %s. Korisničko ime koje ste uneli je previše slično. Korisničko ime mora se razlikovati za najmaǌe jedan alfanumerički karakter (a-š or 0-9). Molim Vas izaberite drugo korisničko ime.',

);
