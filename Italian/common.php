<?php

// Definizioni di lingua usate usate frequentemente
/* Traduzione di: Oscon.it */

$lang_common = array(

// Orientamento dei testi e codifica
'lang_direction'					=>	'ltr', // ltr (sinistra verso destra, left-to-right) o rtl (destra verso sinistra, right-to-left)
'lang_identifier'					=>	'it',

// Formattazione numeri
'lang_decimal_point'				=>	',',
'lang_thousands_sep'				=>	'\'',

// Note
'Bad request'						=>	'Errore. Il link &egrave; errato o non pi&ugrave; valido.',
'No view'							=>	'Non si dispone dei permessi per visualizzare questo forum.',
'No permission'						=>	'Non si dispone dei permessi per visualizzare questa pagina.',
'Bad referrer'						=>	'HTTP_REFERER non valido. Si proviene da una fonte non autorizzata. Se il problema persiste controllare che il \'Base URL\' sia correttamente impostato in "Amministrazione -> Opzioni" e di non avere l\'invio del <em>referer</em> disattivato nel proprio browser. Ulteriori informazioni sono disponibili nella documentazione online di FluxBB.',
'No cookie'							=>	'L\'accesso &egrave; avvenuto correttamente, tuttavia i cookie sembrano disattivati. Verificare le impostazioni del proprio browser e abilitare i cookie per questo sito.',
'Pun include extension'             =>  'Impossibile includere %s dal template %s. I file "%s" non sono permessi',
'Pun include directory'             =>  'Impossibile includere %s dal template %s. L\'attraversamento delle cartelle (<em>directory traversal</em>) non &egrave; permesso',
'Pun include error'					=>	'Impossibile includere %s dal template %s. Il file non esiste n&eacute; nella cartella template, n&eacute; nella cartella include.',

// Varie
'Announcement'						=>	'Annuncio',
'Options'							=>	'Opzioni',
'Submit'							=>	'Invia', // Testo sul pulsante di invio
'Ban message'						=>	'Sei stato interdetto da questo forum.',
'Ban message 2'						=>	'L\'interdizione scadr&agrave; alla fine di',
'Ban message 3'						=>	'L\'amministratore o il moderatore che ti ha interdetto ha lasciato il seguente messaggio:',
'Ban message 4'						=>	'Per dubbi puoi contattare l\'amministratore',
'Never'								=>	'Mai',
'Today'								=>	'Oggi',
'Yesterday'							=>	'Ieri',
'Info'								=>	'Info', // Intestazione comune per tabelle
'Go back'							=>	'Indietro',
'Maintenance'						=>	'Manutenzione',
'Redirecting'						=>	'Reindirizzamento',
'Click redirect'					=>	'Cliccare per non attendere oltre (o se il browser non reindirizza automaticamente)',
'on'								=>	'attivo', // esempio: "BBCode è: attivo"
'off'								=>	'disattivato',
'Invalid email'						=>	'L\'indirizzo email inserito &egrave; errato.',
'Required'							=>	'(Richiesto)',
'required field'					=>	'è un campo richiesto.', // Per la validazione javascript
'Last post'							=>	'Pi&ugrave; recente',
'by'								=>	'di', // Usato per "ultimo messaggio di [...]"
'New posts'							=>	'Nuovo messaggio', // Il link al primo nuovo messagggio
'New posts info'					=>	'Al primo nuovo messaggio in questa discussione.', // Il testo popup per collegamenti a nuovi messaggi
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
'BBCode'							=>	'BBCode:',
'url tag'                           =>  '[url]:',
'img tag'							=>	'[img]:',
'Smilies'							=>	'Emoticon:',
'and'								=>	'e',
'Image link'						=>	'immagine', // Mostrato (<immagine>) quando la visualizzazione immagini è disabilitata nel profilo
'wrote'								=>	'ha scritto:', // In caso di citazione
'Mailer'							=>	'Mailer %s', // Come in: "MyForums Mailer" nella firma delle email automatiche
'Important information'				=>	'Informazione importante',
'Write message legend'				=>	'Scrivere il messaggio e inviare',
'Previous'							=>	'Indietro',
'Next'								=>	'Avanti',
'Spacer'							=>	'&hellip;', // Puntini per la paginazione

// Denominazione
'Title'								=>	'Denominazione',
'Member'							=>	'Utente', // Denominazione predefinita
'Moderator'							=>	'Moderatore',
'Administrator'						=>	'Amministratore',
'Banned'							=>	'Interdetto',
'Guest'								=>	'Ospite',

// Testi per include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] &egrave; stato trovato senza un rispettivo [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] &egrave; stato aperto dentro a [%2$s], ci&ograve; non &egrave; consentito',
'BBCode error invalid self-nesting'	=>	'[%s] &egrave; stato aperto dentro s&eacute; stesso, ci&ograve; non &egrave; consentito',
'BBCode error no closing tag'		=>	'[%1$s] &egrave; stato trovato senza un rispettivo [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] ha un attributo sezione vuoto',
'BBCode error tag not allowed'      =>  'Non &egrave; permesso l\'utilizzo dei tag [%s]',
'BBCode error tag url not allowed'  =>  'Non &egrave; permessa la pubblicazione di link',
'BBCode list size error'			=>	'La lista &egrave; troppo lunga per essere elaborata, si prega di riprovare!',

// Barra di navigazione (in cima a ogni pagina)
'Index'								=>	'Indice',
'User list'							=>	'Lista utenti',
'Rules'								=>	'Regole',
'Search'							=>	'Cerca',
'Register'							=>	'Registrati',
'Login'								=>	'Entra',
'Not logged in'						=>	'Ciao! Non hai effettuato l\'accesso.',
'Profile'							=>	'Profilo',
'Logout'							=>	'Esci',
'Logged in as'						=>	'Ciao', // Connesso come:
'Admin'								=>	'Amministrazione',
'Last visit'						=>	'Ultima visita: %s',
'Topic searches'                    =>  'Discussioni:',
'New posts header'                  =>  'Nuove',
'Active topics'                     =>  'Attive',
'Unanswered topics'                 =>  'Senza risposta',	
'Posted topics'                     =>  'Proprie',
'Show new posts'     			    =>  'Mostra discussioni con nuovi messaggi dall\'ultima visita.',
'Show active topics'     		    =>  'Mostra discussioni con messaggi recenti.',
'Show unanswered topics'      		=>  'Mostra discussioni senza risposta.',
'Show posted topics'                =>  'Mostra discussioni con proprie risposte.',
'Mark all as read'					=>	'Marca discussioni come lette',
'Mark forum read'					=>	'Marca questo forum come letto',
'Title separator'					=>	' / ',

// Pié di pagina
'Board footer'						=>	'Pi&egrave; di pagina',
'Jump to'							=>	'Vai a',
'Go'								=>	' Vai ', // Testo pulsante per "vai a"
'Moderate topic'					=>	'Modera discussione',
'All'                   => 'tutta', // Moderazione di tutta la discussione e non solo dei messaggi nella pagina attuale
'Move topic'						=>	'Sposta discussione',
'Open topic'						=>	'Apri discussione',
'Close topic'						=>	'Chiudi discussione',
'Unstick topic'						=>	'Disevidenzia discussione',
'Stick topic'						=>	'Evidenzia discussione',
'Moderate forum'					=>	'Modera forum',
'Powered by'						=>	'Powered by %s',

// Informazioni per la risoluzione problemi (debug)
'Debug table'						=>	'Informazioni sui problemi',
'Querytime'							=>	'Generato in %1$ secondi, %2$ interrogazioni eseguite',
'Memory usage'						=>	'Uso memoria: %1$s',
'Peak usage'						=>	'(Picco: %1$)',
'Query times'						=>	'Tempo (s)',
'Query'								=>	'Interrogazione',
'Total query time'					=>	'Tempo totale di interrogazione: %s',

// Per i feed in extern.php
'RSS description'					=>	'Discussioni pi&grave; recenti in %s.',
'RSS description topic'				=>	'Messaggi pi&grave; recenti in %s.',
'RSS reply'							=>	'Re: ', // Il titolo della discussione sarà inserito dopo questo testo (risposta)
'RSS active topics feed'			=>	'RSS discussioni',
'Atom active topics feed'			=>	'Atom discussioni',
'RSS forum feed'					=>	'RSS forum',
'Atom forum feed'					=>	'Atom forum',
'RSS topic feed'					=>	'RSS discussione',
'Atom topic feed'					=>	'Atom discussione',

// Testi per l'amministrazione in cima alla pagina
'New reports'						=>	'C\'&egrave; una nuova segnalazione',
'Maintenance mode enabled'			=>	'Il forum &egrave; in manutenzione!',

// Units for file sizes
'Size unit B'                       =>  '%s B',
'Size unit KiB'                     =>  '%s KiB',
'Size unit MiB'                     =>  '%s MiB',
'Size unit GiB'                     =>  '%s GiB',
'Size unit TiB'                     =>  '%s TiB',
'Size unit PiB'                     =>  '%s PiB',
'Size unit EiB'                     =>  '%s EiB',

);
