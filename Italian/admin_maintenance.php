<?php

// Definizioni di lingua usate in admin_maintenance.php
/* Traduzione di: Oscon.it */

$lang_admin_maintenance = array(

'Maintenance head'				=>	'Manutenzione forum',
'Rebuild index subhead'			=>	'Ricostruisci gli indici di ricerca',
'Rebuild index info'			=>	'Se sono stati aggiunti, modificati o cancellati messaggi manualmente nel database o se si stanno verificando problemi di ricerca, &egrave; necessario ricostruire gli indici. Impostare il sistema in %s durante la ricostruzione. <strong>L\'elaborazione pu&ograve; impegare tempo e incrementare il carico server!</strong>',
'Posts per cycle label'			=>	'Messaggi per ogni cicolo',
'Posts per cycle help'			=>	'Il numero di messaggi da elaborare per ogni visualizzazione di pagina. Esempio: impostando 300, ogni trecento messaggi elaborati la pagina sar&agrave; ricaricata. Questo limite serve per prevenire timeout durante l\'elaborazione.',
'Starting post label'			=>	'ID iniziale',
'Starting post help'			=>	'L\'ID del messaggio dal quale iniziare la ricostruzione. Il valore predefinito &egrave; il primo ID disponibile nel database. Generalmente non &egrave; necessario modificare questa impostazione.',
'Empty index label'				=>	'Svuotare indice',
'Empty index help'				=>	'Svuota l\'indice di ricerca prima della ricostruzione.',
'Rebuild completed info'		=>	'Terminata l\'elaborazione si torner&agrave; automaticamente a questa pagina. &Egrave; necessaria l\'abilitazione di JavaScript per permettere l\'aggiornamento automatico dopo ogni gruppo di messaggi elaborato. In caso di interruzione forzata del processo di riscrittura, annotare l\'ultimo ID elaborato e quindi inserire quell\'ID +1 nel campo "ID iniziale" per procedere nuovamente (il campo "Svuotare indice" non dovr&agrave; essere selezionato).',
'Rebuild index'					=>	'Ricostruzione indice',
'Rebuilding search index'		=>	'Ricostruzione indice di ricerca',
'Rebuilding index info'			=>	'Ricostruzione indice di ricerca. &Egrave; probabilmente il momento buono per prepararsi un buon caff&eacute; :-)',
'Processing post'				=>	'Elaborazione messaggio <strong>%s</strong> in corso …',
'Click here'					=>	'Cliccare qui',
'Javascript redirect failed'	=>	'Aggiornamento pagina via JavaScript non riuscito. %s per continuare …',
'Posts must be integer message' =>  'Il numero di discussioni per ogni ricaricamento deve essere un numero positivo intero.',

'Days must be integer message'  =>  'Il giorno indicato deve essere un numero positivo intero.',
'No old topics message'		    =>	'Non sono presenti discussioni vecchie di %s giorni. Diminuisci il valore "Giorni" e riprova.',
'Posts pruned redirect'		    =>	'Cancellazione vecchi messaggi effettuata. Reindirizzamento &hellip;',
'Prune head'				    =>	'Pulizia dai vecchi messaggi',
'Prune subhead'				    =>	'Effettua la pulizia dai vecchi messaggi (prune)',
'Days old label'			    =>	'Giorni di anzianit&agrave;',
'Days old help'				    =>	'I giorni minimi di anzianit&agrave; che una discussione deve avere per subire la pulizia. Esempio: inserendo 30, ogni discussione pi&ugrave; vecchia di trenta giorni che non contiene alcuna risposta sar&agrave; <strong>cancellata definitivamente</strong>.',
'Prune sticky label'		    =>	'Discussioni in evidenza',
'Prune sticky help'			    =>	'Effettua la pulizia anche nelle discussioni in evidenza.',
'Prune from label'			    =>	'Forum',
'All forums'				    =>	'Tutti i forum',
'Prune from help'			    =>	'I forum nei quali effettuare la pulizia.',
'Prune info'				    =>	'Utilizzare questa funzione con cautela. <strong>I messaggi cancellati non potranno essere recuperati.</strong> Per migliorare le prestazioni impostare il forum in %s durante l\'elaborazione.',
'Confirm prune subhead'		    =>	'Conferma pulizia dei messaggi',
'Confirm prune info'		    =>	'Sei sicuro di voler pulire (prune) le discussioni con %s giorni da %s (%s discussioni)?',
'Confirm prune warn'		    =>	'ATTENZIONE! L\'operazione non &egrave; reversibile.',

);
