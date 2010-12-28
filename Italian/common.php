<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'it',

// Number formatting
'lang_decimal_point'				=>	',',
'lang_thousands_sep'				=>	'\'',

// Notices
'Bad request'						=>	'Errore. Il link &egrave; errato o non pi&ugrave; valido.',
'No view'							=>	'Non si dispone dei permessi per visualizzare questo forum.',
'No permission'						=>	'Non si dispone dei permessi per visualizzare questa pagina.',
'Bad referrer'						=>	'HTTP_REFERER non valido. Si proviene da una fonte non autorizzata. Se il problema persiste controllare che il \'Base URL\' sia correttamente impostato in "Amministrazione -> Opzioni" e di non avere il Referer disattivato nel proprio browser. Ulteriori informazioni sono disponibili nella documentazione online di FluxBB.',
'No cookie'							=>	'L\'accesso &egrave; avvenuto correttamente, tuttavia i cookie sembrano disattivati. Verificare le impostazioni del browser e abilitare i cookie per questo sito.',
'Pun include error'					=>	'Impossibile includere %s dal template %s. Non esiste tale file n&eacute; nella cartella template, n&eacute; nella cartella include.',

// Miscellaneous
'Announcement'						=>	'Annuncio',
'Options'							=>	'Opzioni',
'Submit'							=>	'Invia', // "Name" of submit buttons
'Ban message'						=>	'Sei stato interdetto da questo forum.',
'Ban message 2'						=>	'L\'interdizione scadr&agrave; alla fine di',
'Ban message 3'						=>	'L\'amministratore o il moderatore che ti ha interdetto ha lasciato il seguente messaggio:',
'Ban message 4'						=>	'Per dubbi puoi contattare l\'amministratore',
'Never'								=>	'Mai',
'Today'								=>	'Oggi',
'Yesterday'							=>	'Ieri',
'Info'								=>	'Info', // A common table header
'Go back'							=>	'Indietro',
'Maintenance'						=>	'Manutenzione',
'Redirecting'						=>	'Reindirizzamento',
'Click redirect'					=>	'Cliccare per non attendere oltre (o nel caso di incompatibilit&agrave; del browser)',
'on'								=>	'attivo', // As in "BBCode is on"
'off'								=>	'disattivo',
'Invalid email'						=>	'L\'indirizzo email inserito &egrave; errato.',
'Required'							=>	'(Richiesto)',
'required field'					=>	'&egrave; un campo richiesto.', // For javascript form validation
'Last post'							=>	'Messaggio pi&ugrave; recente',
'by'								=>	'di', // As in last post by someuser
'New posts'							=>	'Nuovo messaggio', // The link that leads to the first new post
'New posts info'					=>	'Al primo nuovo messaggio in questa discussione.', // The popup text for new posts links
'Username'							=>	'Nome utente',
'Password'							=>	'Password',
'Email'								=>	'Email',
'Send email'						=>	'Invia email',
'Moderated by'						=>	'Moderato da',
'Registered'						=>	'Data di registrazione',
'Subject'							=>	'Oggetto',
'Message'							=>	'Messaggio',
'Topic'								=>	'Argomento',
'Forum'								=>	'Categoria',
'Posts'								=>	'Messaggi',
'Replies'							=>	'Risposte',
'Pages'								=>	'Pagine:',
'Page'								=>	'Pagina %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'img tag'							=>	'Marcatore [img]:',
'Smilies'							=>	'Emoticon:',
'and'								=>	'e',
'Image link'						=>	'immagine', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'ha scritto:', // For [quote]'s
'Mailer'							=>	'Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Informazione importante',
'Write message legend'				=>	'Scrivere il messaggio e inviare',
'Previous'							=>	'Indietro',
'Next'								=>	'Avanti',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Titolo',
'Member'							=>	'Membro', // Default title
'Moderator'							=>	'Moderatore',
'Administrator'						=>	'Amministratore',
'Banned'							=>	'Interdetto',
'Guest'								=>	'Ospite',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] &egrave; stato trovato senza un rispettivo [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] &egrave; stato aperto dentro a [%2$s], ci&ograve; non &grave; consentito',
'BBCode error invalid self-nesting'	=>	'[%s] &egrave; stato aperto dentro s&eacute; stesso, ci&ograve; non &grave; consentito',
'BBCode error no closing tag'		=>	'[%1$s] &egrave; stato trovato senza un rispettivo [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] ha un attributo sezione vuoto',
'BBCode code problem'				=>	'Si &egrave; verificato un problema col marcatore [code]',
'BBCode list size error'			=>	'La lista &egrave; troppo lunga per essere elaborata, si prega di riprovare!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Indice',
'User list'							=>	'Lista utenti',
'Rules'								=>	'Regole',
'Search'							=>	'Cerca',
'Register'							=>	'Registrati',
'Login'								=>	'Accedi',
'Not logged in'						=>	'Accesso non effettuato.',
'Profile'							=>	'Profilo',
'Logout'							=>	'Disconnetti',
'Logged in as'						=>	'Ciao', // Connesso come:
'Admin'								=>	'Amministrazione',
'Last visit'						=>	'Ultima visita: %s',
'Show new posts'					=>	'Nuovi messaggi dall\'ultima visita',
'Mark all as read'					=>	'Marca discussioni come lette',
'Mark forum read'					=>	'Marca questo forum come letto',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Pi&egrave; di pagina',
'Search links'						=>	'Cerca collegamenti',
'Show recent posts'					=>	'Messaggi recenti',
'Show unanswered posts'				=>	'Messaggi senza risposta',
'Show your posts'					=>	'I miei messaggi',
'Show subscriptions'				=>	'Le mie iscrizioni',
'Jump to'							=>	'Vai a',
'Go'								=>	' Vai ', // Submit button in forum jump
'Moderate topic'					=>	'Modera discussione',
'Move topic'						=>	'Sposta discussione',
'Open topic'						=>	'Apri discussione',
'Close topic'						=>	'Chiudi discussione',
'Unstick topic'						=>	'Disevidenzia discussione',
'Stick topic'						=>	'Evidenzia discussione',
'Moderate forum'					=>	'Modera forum',
'Powered by'						=>	'Powered by %s',

// Debug information
'Debug table'						=>	'Informazioni sui problemi',
'Querytime'							=>	'Generato in %1$ secondi, %2$ interrogazioni eseguite',
'Memory usage'						=>	'Uso memoria: %1$s',
'Peak usage'						=>	'(Picco: %1$)',
'Query times'						=>	'Tempo (s)',
'Query'								=>	'Interrogazione',
'Total query time'					=>	'Tempo totale di interrogazione: %s',

// Email related notifications
'New user notification'				=>	'Avviso - Nuova registrazione',
'New user message'					=>	'L\'utente \'%s\' si &egrave; registrato al forum %s',
'Banned email notification'			=>	'Avviso - Individuata email interdetta',
'Banned email register message'		=>	'L\'utente \'%s\' si &egrave; con l\'indirizzo inderdetto: %s',
'Banned email change message'		=>	'L\'utente \'%s\' ha cambiato il proprio indirizzo nell\'indirizzo interdetto: %s',
'Banned email post message'			=>	'L\'utente \'%s\' ha scritto utilizzando l\'indirizzo interdetto: %s',
'Duplicate email notification'		=>	'Avviso - Individuata email duplicata',
'Duplicate email register message'	=>	'L\'utente \'%s\' si &egrave; registrato con un indirizzo gi&agrave; in uso da: %s',
'Duplicate email change message'	=>	'L\'utente \'%s\' ha cambiato il proprio indirizzo con un indirizzo gi&agrave; in uso da: %s',
'Report notification'				=>	'Segnalazione(%d) - \'%s\'',
'Report message 1'					=>	'L\'utente \'%s\' ha segnalato il seguente messaggio: %s',
'Report message 2'					=>	'Motivo: %s',

'User profile'						=>	'Profilo utente: %s',
'Post URL'							=>	'Indirizzo messaggio: %s',
'Email signature'					=>	'Inviato da '."\n".'(messaggio generato automaticamente)',

// For extern.php RSS feed
'RSS description'					=>	'Discussioni pi&grave; recenti in %s.',
'RSS description topic'				=>	'Messaggi pi&grave; recenti in %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS discussioni',
'Atom active topics feed'			=>	'Atom discussioni',
'RSS forum feed'					=>	'RSS forum',
'Atom forum feed'					=>	'Atom forum',
'RSS topic feed'					=>	'RSS discussione',
'Atom topic feed'					=>	'Atom discussione',

// Admin related stuff in the header
'New reports'						=>	'C\'&egrave; una nuova segnalazione',
'Maintenance mode enabled'			=>	'Il forum &egrave; in manutenzione!',

);
