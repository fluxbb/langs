<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'it',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'Richiesta non valida. Il link che hai seguito non è valido oppure è scaduto.',
'No view'							=>	'Non hai il permesso di visualizzare questo forum.',
'No permission'						=>	'Non hai il permesso di accere a questa pagina.',
'Bad referrer'						=>	'HTTP_REFERER non valido. Sei stato indirizzato a questa pagina da una fonte non autorizzata. Se il problema persiste per favore assicurati che l\'indirizzo di base\' sia correttamente impostato nelle Amministrazione/Opzioni e che tu stia navigando nel forum con quell\'URL. Altre informazioni al riguardo possono essere reperite nella documentazione di FluxBB.',
'No cookie'							=>	'Hai eseguito correttamente l\'accesso, ma non è stato creato alcun cookie. Perfavore controlla le tue impostazioni e se possibile, abilita i cookie per questo sito.',
'Pun include error'					=>	'Unable to process user include %s from template %s. There is no such file in neither the template directory nor in the user include directory.',

// Miscellaneous
'Announcement'						=>	'Annuncio',
'Options'							=>	'Opzioni',
'Submit'							=>	'Invia', // "Name" of submit buttons
'Ban message'						=>	'Sei stato interdetto da questo forum.',
'Ban message 2'						=>	'L\'interdizione scadrà alla fine di',
'Ban message 3'						=>	'L\'amministratore o il moderatore che ti hanno interdetto ha lasciato il seguente messaggio:',
'Ban message 4'						=>	'Please direct any inquiries to the forum administrator at',
'Never'								=>	'Mai',
'Today'								=>	'Oggi',
'Yesterday'							=>	'Ieri',
'Info'								=>	'Info', // A common table header
'Go back'							=>	'Torna indietro',
'Maintenance'						=>	'Manutenzione',
'Redirecting'						=>	'Reindirizzamento',
'Click redirect'					=>	'Clicca qui se non vuoi più aspettare (o se il tuo browser non ti indirizza automaticamente)',
'on'								=>	'attivato', // As in "BBCode is on"
'off'								=>	'disattivato',
'Invalid email'						=>	'L\'indirizzo e-mail che hai inserito non è valido.',
'Required'							=>	'(Richiesto)',
'required field'					=>	'è richiesto in questo forum.', // For javascript form validation
'Last post'							=>	'Ultimo messaggio',
'by'								=>	'di', // As in last post by someuser
'New posts'							=>	'Nuovi messaggi', // The link that leads to the first new post
'New posts info'					=>	'Vai al primo nuovo messaggio di questa discussione.', // The popup text for new posts links
'Username'							=>	'Nome utente',
'Password'							=>	'Password',
'Email'								=>	'E-mail',
'Send email'						=>	'Invia e-mail',
'Moderated by'						=>	'Moderato da',
'Registered'						=>	'Registrato',
'Subject'							=>	'Oggetto',
'Message'							=>	'Messaggio',
'Topic'								=>	'Argomento',
'Forum'								=>	'Categoria',
'Posts'								=>	'Messaggi',
'Replies'							=>	'Risposte',
'Pages'								=>	'Pagine:',
'Page'								=>	'Pagina %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'img tag'							=>	'tag [img]:',
'Smilies'							=>	'Faccine:',
'and'								=>	'e',
'Image link'						=>	'immagine', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'ha scritto:', // For [quote]'s
'Mailer'							=>	'Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Informazione importante',
'Write message legend'				=>	'Scrivi il tuo messaggio ed invia',
'Previous'							=>	'Precedente',
'Next'								=>	'Successivo',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Titolo',
'Member'							=>	'Membro', // Default title
'Moderator'							=>	'Moderatore',
'Administrator'						=>	'Amministratore',
'Banned'							=>	'Interdetto',
'Guest'								=>	'Ospite',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] è stato trovato senza il corrispondente [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] è stato aperto all\'interno di [%2$s], questo non è consentito',
'BBCode error invalid self-nesting'	=>	'[%s] è stato aperto all\'interno di se stesso, questo non è consentito',
'BBCode error no closing tag'		=>	'[%1$s] è stato trovato senza il corrispondente [/%1$s]',
'BBCode error empty attribute'		=>	'Il tag [%s] è una sezione vuota',
'BBCode code problem'				=>	'C\'è un problema con i tags [code]',
'BBCode list size error'			=>	'La tua lista era troppo lunga da analizzare, perfavore accorciala!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Indice',
'User list'							=>	'Lista utenti',
'Rules'								=>	'Regole',
'Search'							=>	'Cerca',
'Register'							=>	'Registrati',
'Login'								=>	'Accedi',
'Not logged in'						=>	'Non hai eseguito l\'accesso.',
'Profile'							=>	'Profilo',
'Logout'							=>	'Esci',
'Logged in as'						=>	'Connesso come',
'Admin'								=>	'Amministra',
'Last visit'						=>	'Ultima visita: %s',
'Show new posts'					=>	'Mostra i nuovi messaggi dall\'ultima visita',
'Mark all as read'					=>	'Imposta tutti i topic come letti',
'Mark forum read'					=>	'Segna questa discussione come letta',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Footer forum',
'Search links'						=>	'Cerca collegamenti',
'Show recent posts'					=>	'Mostra i messaggi recenti',
'Show unanswered posts'				=>	'Mostra i messaggi senza risposta',
'Show your posts'					=>	'Mostra i tuoi ultimi messaggi',
'Show subscriptions'				=>	'Mostra le discussione sottoscritte',
'Jump to'							=>	'Salta a',
'Go'								=>	' Vai ', // Submit button in forum jump
'Moderate topic'					=>	'Modera discussione',
'Move topic'						=>	'Sposta discussione',
'Open topic'						=>	'Apri discussione',
'Close topic'						=>	'Chiudi discussione',
'Unstick topic'						=>	'Disevidenzia discussione',
'Stick topic'						=>	'Evidenzia discussione',
'Moderate forum'					=>	'Modera categoria',
'Powered by'						=>	'Powered by %s',

// Debug information
'Debug table'						=>	'Informationi di debug',
'Querytime'							=>	'Generato in %1$s secondi, %2$s query eseguite',
'Memory usage'						=>	'Utilizzo memoria: %1$s',
'Peak usage'						=>	'(Vetta: %1$s)',
'Query times'						=>	'Tempo (s)',
'Query'								=>	'Query',
'Total query time'					=>	'Tempo totale della query: %s',

// Email related notifications
'New user notification'				=>	'Avviso - Nuova registrazione',
'New user message'					=>	'L\utente \'%s\' si è registrato al forum il %s',
'Banned email notification'			=>	'Avviso - E-mail interdetta individuata',
'Banned email register message'		=>	'L\'utente \'%s\' si è registrato con un indirizzo interdetto: %s',
'Banned email change message'		=>	'L\'utente \'%s\' ha cambiat l\'e-mail con un\'e-mail interdetta: %s',
'Banned email post message'			=>	'L\'utente \'%s\' ha scritto utilizzando un indirizzo e-mail interdetto: %s',
'Duplicate email notification'		=>	'Avviso - Indirizzo e-mail duplicato rilevato',
'Duplicate email register message'	=>	'L\'utente \'%s\' si è registrato con un indirizzo e-mail che appartiene a: %s',
'Duplicate email change message'	=>	'L\'utente \'%s\' ha cambiato l\'indirizzo e-mail con uno che appartiene a: %s',
'Report notification'				=>	'Segnalazione(%d) - \'%s\'',
'Report message 1'					=>	'L\'utente \'%s\' ha riportato il seguente messaggio: %s',
'Report message 2'					=>	'Motivo: %s',

'User profile'						=>	'Profilo utente: %s',
'Post URL'							=>	'URL messaggio: %s',
'Email signature'					=>	'Inviato da'."\n".'(Non rispondere a questo messaggio)',

// For extern.php RSS feed
'RSS description'					=>	'Le discussioni recenti in %s.',
'RSS description topic'				=>	'I messaggi recenti in %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'Feed RSS discussioni attive',
'Atom active topics feed'			=>	'Feed Atom discussioni attive',
'RSS forum feed'					=>	'feed RSS categoria',
'Atom forum feed'					=>	'feed Atom categoria',
'RSS topic feed'					=>	'feed RSS discussione',
'Atom topic feed'					=>	'feed Atom discussione',

// Admin related stuff in the header
'New reports'						=>	'Ci sono nuove segnalazioni',
'Maintenance mode enabled'			=>	'Il forum è in manutenzione!',

);
