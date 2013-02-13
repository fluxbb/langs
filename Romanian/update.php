<?php

/* Translation Notice:
	Copyright Kaeden
   Last revision: 8th of May 2012 */
   

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'Actualizare FluxBB',
'Update message'				=>	'Baza de date a forumului tău FluxBB este învechită și trebuie actualizată înainte de a putea continua. Dacă ești administratorul acestui forum, te rugăm să urmezi instrucțiunile de mai jos pentru a realiza actualizarea.',
'Note'							=>	'Notă:',
'Members message'				=>	'Acest procedeu trebuie efectuat doar de administratorii forumului. Dacă ești un simplu utilizator, nu trebuie să te îngrijorezi - forumul se va redeschide în scurtă vreme!',
'Administrator only'			=>	'Acest pas este doar pentru administratorul forumului!',
'Database password info'		=>	'Pentru actualizarea bazei de date, completează parola cu care a fost instalat FluxBB. Dacă nu ți-o poți aminti, aceasta este salvată în fișierul \'config.php\'.',
'Database password note'		=>	'Dacă utilizezi SQLite (și prin urmare, nu ai o parolă pentru baza de date) te rugăm să completezi numele fișierului care conține baza de date. Acesta trebuei să fie identic cu numele folosit în fișierul de configurare.',
'Database password'				=>	'Parolă bază date',
'Maintenance'					=>	'Întreținere',
'Maintenance message info'		=>	'Mesajul ce va fi afișat utilizatorilor pe parcursul etapei de actualizare. Acest text poate conține și etichete HTML.',
'Maintenance message'		    =>	'Mesaj întreținere',
'Next'							=>	'Pasul următor',

'You are running error'			=>	'Momentan folosești %1$s versiunea %2$s. FluxBB %3$s necesită cel puțin %1$s %4$s pentru a funcționa corespunzător. Trebuie să actualizezi instalarea %1$s pentru a putea continua.',
'Version mismatch error'		=>	'Eroare versiune. Baza de date \'%s\' nu pare să utilizeze structura FluxBB necesară acestui utiliar de actualizare.',
'Invalid file error'			=>	'Fișier bază date nevalid. Când utilizezi numele fișierului bazei de date SQLite, trebuie să completezi numele așa cum apare în \'%s\'',
'Invalid password error'		=>	'Invalid database password. To upgrade FluxBB you must enter your database password exactly as it appears in your \'%s\'',
'No password error'				=>	'Nu ai completat parola bazei de date',
'Script runs error'				=>	'Se pare că utiliarul de actualizare este deja executat de altcineva. Dacă nu acesta este cazul, te rugăm să ștergi manual fișierul \'%s\' și să încerci din nou.',
'No update error'				=>	'Forumul tău este deja actualizat la versiunea la care îl poate aduce acest utilitar',

'Intro 1'						=>	'Acest utilitar va actualiza baza de date a forumului tău. Procesul de actualizare poate dura între o secundă și câteva ore, în funcție de viteza serverului și mărimea bazei de date a forumului. Nu uita să creezi o copie de siguranță a bazei de date actuale înainte de a continua.',
'Intro 2'						=>	'Ai citit instrucțiunile de actualizare din documentație? Dacă nu, începe acolo.',
'No charset conversion'			=>	'<strong>IMPORTANT!</strong> FluxBB a detectat că această versiune PHP nu suportă mecanismele de convertire la versiunea UTF-8 pentru alte seturi de caractere în afară de ISO-8859-1. Aceasta înseamnă că dacă setul curent de caractere nu este ISO-8859-1, FluxBB nu va fi capabil să convertească baza de date a forumului tău la UTF-8 și va trebui să realizezi manual acest pas. Instrucțiuni pentru această situație pot fi găsite în indicațiile de actualizare.',
'Enable conversion'				=>	'<strong>Activează conversia:</strong> Odata activată, acest utiliar va converti tot conținutul de tip text din baza de date de la setul curent de caractere la UTF-8, după ce va fi făcut toate modificările structurale necesare bazei de date. Această conversie este necesară dacă actualizezi de la versiunea 1.2.',
'Current character set'			=>	'<strong>Setul curent de caractere:</strong> Dacă limba standard a forumului tău este Engleza, poți lăsa această opțiune la valoarea actuală. Cu toate acestea, dacă forumul tău nu este englezesc, este recomandat să selectezi setul de caractere corespunzător limbii utilizate. <em>Selecția incorectă poate afecta negativ baza de date așa că nu selecta pe ghicite!</em> Notă: Această selecție este necesară chiar dacă versiunea anterioară a bazei de date este UTF-8.',
'Charset conversion'			=>	'Conversie set caractere',
'Enable conversion label'		=>	'<strong>Activează conversia</strong> (realizează convertirea bazei de date).',
'Current character set label'	=>	'Set de caractere actual',
'Current character set info'	=>	'Acceptă valoarea standard pentru forum în Engleză sau selectează setul de caractere aferent limbii primare a forumului.',
'Start update'					=>	'Începe actualizarea',
'Error converting users'		=>	'Eroare la convertirea utilizatorilor',
'Error info 1'					=>	'S-a produs o eroare la convertirea unor utilizatori. Aceasta se poate întâmpla când conversia se realizează pornind de la FluxBB 1.2. dacă mai mulți utilizatori au nume foarte aproapiate ca scriere, de exemplu "bob" și "böb".',
'Error info 2'					=>	'Mai jos se regăsește o listă de utilizatori care nu au putut fi convertiți. Te rugăm să alegi un nou nume de utilizator pentru fiecare în parte. Utilizatorii redenumiți vor fi notificați automat printr-un e-mail de această modificare.',
'New username'					=>	'Nume utilizator nou',
'Required'						=>	'(Necesar)',
'Correct errors'				=>	'Următoarele erori trebuie corectate:',
'Rename users'					=>	'Redenumește utilizatorii',
'Successfully updated'			=>	'Baza de date a forumului tău a fost actualizată cu succes. Poți %s.',
'go to index'					=>	'merge la pagina principală a forumului',

'Unable to lock error'			=>	'Nu s-a putut suprascrie blocarea actualizării. Te rugăm să te asiguri că PHP are permisiunea să suprascrie directorul \'%s\' și că nimeni nu mai rulează acest utilitar în paralel.',

'Converting'					=>	'Convertire %s …',
'Converting item'				=>	'Convertire %1$s %2$s …',
'Preparsing item'				=>	'Pregatire %1$s %2$s …',
'Rebuilding index item'			=>	'Reconstruire index for %1$s %2$s',

'ban'							=>	'suspendări',
'categories'					=>	'categorii',
'censor words'					=>	'cuvinte cenzurate',
'configuration'					=>	'configurare',
'forums'						=>	'forumuri',
'groups'						=>	'grupuri',
'post'							=>	'răspunsuri',
'report'						=>	'raportări',
'topic'							=>	'subiecte',
'user'							=>	'utilizatori',
'signature'						=>	'semnaturi',

'Username too short error'		=>	'Numele de utilizator trebuie să conțină cel puțin 2 caractere. Te rugăm să completezi un nume de utilizator mai lung.',
'Username too long error'		=>	'Numele de utilizator nu trebuie să depășească 25 caractere. Te rugăm să alegi un nume de utilizator mai scurt.',
'Username Guest reserved error'	=>	'Numele de utilizator guest/vizitator este rezervat. Te rugăm să alegi un alt nume.',
'Username IP format error'		=>	'Numele de utilizator nu pot fi în formatul unei adrese IP. Te rugăm să alegi un alt nume de utilizator.',
'Username bad characters error'	=>	'Numele de utilizator nu pot conține toate caracterele \', " și [ or ] laolaltă. Te rugăm să alegi alt nume de utilizator.',
'Username BBCode error'			=>	'Numele de utilizator nu pot conține BBCode utilizat de forum. Te rugăm să alegi un alt nume de utilizator.',
'Username duplicate error'		=>	'Numele de utilizator %s este deja înregistrat. Numele de utilizator completat este mult prea similar cu un altul deja existent. Numele aleas trebuie să difere de acesta prin cel puțin un caracter alfanumeric (a-z sau 0-9). Te rugăm să alegi un alt nume de utilizator.',

);
