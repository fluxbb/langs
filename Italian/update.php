<?php

// Definizioni di lingua usate in db_update.php
/* Traduzione di: Oscon.it */

$lang_update = array(

'Update'						=> 'Aggiornamento FluxBB',
'Update message' 				=> 'Il database di FluxBB &egrave; obsoleto e deve essere aggiornato per proseguire. Se sei l\'amministratore, segui le istruzioni successive per completare l\'operazione.',
'Note' 							=> 'Nota:',
'Members message' 				=> 'Questa elaborazione &egrave; riservata agli amministratori del sistema. Se sei un utente non &egrave; necessario che tu faccia nulla: il forum sar&agrave; nuovamente attivo a breve, riprova piu&ugrave; tardi, grazie!',
'Administrator only' 			=> 'Operazione riservata agli amministratori!',
'Database password info' 		=> 'Per effettuare l\'aggiornamento inserire la password del database nel quale FluxBB &egrave; installato. In caso di incertezza &egrave; possibile ritrovarla modificando il \'config.php\'.',
'Database password note' 		=> 'Se si utilizza SQLite (e quindi non sono presenti password), inserire il nome del file del database. Deve corrispondere esattamente con quello presente nel documento di configurazione.',
'Database password' 			=> 'Password del database',
'Next' 							=> 'Avanti',

'You are running error' 		=> '&Egrave; attivo %1$s versione %2$s. FluxBB %3$s necessita almeno %1$s %4$s per funzionare correttamente. Effettuare l\'aggiornamento di %1$s prima di continuare.',
'Version mismatch error' 		=> 'Incompatibilit&agrave;. Il database \'%s\' non sembra utilizzare una struttura compatibile con questo aggiornamento.',
'Invalid file error' 			=> 'Nome del file del database errato. Usando SQLite il nome deve essere inserito esattamente come appare in \'%s\'',
'Invalid password error' 		=> 'Password del database errata. Per aggionrare FluxBB la password deve essere inserita esattamente come riportata in \'%s\'',
'No password error' 			=> 'Nessuna password inserita',
'Script runs error' 			=> 'L\'aggionrmento sembra gi&agrave; stato avviato. Se cos&igrave; non fosse, cancellare manualmente il file \'%s\' e riprovare, grazie',
'No update error' 				=> 'Il forum utilizza gi&agrave; gli aggiornamenti che si desiderano installare',

'Intro 1'						=> 'Questo script aggiorner&agrave; il database del forum. L\'elaborazione pu&ograve; durare un secondo cos&igrave; come alcune ore: dipende della dimensione dell\'archivio e della velocit&agave; del server. Effettuare un copia di sicurezza dell\'attuale database prima di continuare.',
'Intro 2' 						=> 'Sei a conoscenza delle istruzioni di aggiornamento?',
'No charset conversion' 		=> '<strong>IMPORTANTE!</strong> FluxBB ha rilevato che l\'ambiente PHP installato non dispone del supporto necessario a convertire alla codifica UTF-8 gruppi di caratteri diversi da ISO-8859-1. Ci&ograve; significa che se l\'attuale gruppo di caratteri non &egrave; ISO-8859-1, FluxBB non sar&agrave; in grado di convertire il database a UTF-8 e sar&agrave; necessario farlo manualmente. Indicazioni su come effettuare la conversione manuale sono presenti nelle istruzioni di aggiornamento.',
'Enable conversion' 			=> '<strong>Attiva conversione:</strong> Questo aggiornamento, dopo aver effettuato le necessarie modifiche strutturali al database, convertir&agrave; alla codifica UTF-8 tutti i testi presenti. Questa conversione &egrave; necessaria per aggiornamenti dalla versione 1.2.',
'Current character set' 		=> '<strong>Gruppo di caratteri (charset) attuale:</strong> Se il linguaggio predefinito nel forum &egrave; "English", &egrave; possibile mantenere il valore predefinito. Se il forum usa una lingua diversa, inserire il gruppo di caratteri corrispondente. Nota: questo &egrave; necessario anche se il precedente database &egrave; UTF-8. <em>Attenzione: commettere un errore in questo stadio dell\'aggiornamento, potrebbe corrompere il database, assicurarsi di ci&ograve; che si sta facendo!</em>',
'Charset conversion' 			=> 'Conversione del set caratteri',
'Enable conversion label' 		=> '<strong>Attiva conversione</strong> (esegue la conversione).',
'Current character set label' 	=> 'Attuale set caratteri',
'Current character set info' 	=> 'Accept default for English forums otherwise the character set of the primary language pack.',
'Start update' 					=> 'Inizia aggiornamento',
'Error converting users' 		=> 'Errore nella conversione utenti',
'Error info 1' 					=> 'Si &egrave; verificato un errore convertendo alcuni utenti. Ci&ograve; pu&ograve; accadere se la precedente versione di FluxBB 1.2 aveva utenti registrati con nomi molto simili, come per esempio: "bob" e "b&ouml;b".',
'Error info 2' 					=> 'Segue una lista degli utenti non convertiti. Scegliere un nuovo nome utente per ciascuno. Gli utenti rinominati riceveranno automaticamente un\'email per avvertirli del cambio.',
'New username' 					=> 'Nuovo nome utente',
'Required' 						=> '(Richiesto)',
'Correct errors' 				=> 'Correggere gli errori seguenti:',
'Rename users' 					=> 'Rinominare gli utenti',
'Successfully updated' 			=> 'Il database &egrave; stato aggiornato con successo! %s.',
'go to index' 					=> 'Tornare all\'indice del forum',

'Unable to lock error' 			=> 'Impossibile scrivere il blocco di aggiornamento (update lock). PHP deve disporre dei permessi di scrittura alla cartella \'%s\' e lo script di aggiornamento deve essere eseguito  l\'aggiornamento.',

'Converting' 					=> 'Conversione %s &hellip;',
'Converting item' 				=> 'Conversione %1$s %2$s &hellip;',
'Preparsing item' 				=> 'Verifica %1$s %2$s &hellip;',
'Rebuilding index item' 		=> 'Ricostruzione indice per %1$s %2$s',

'ban' 							=> 'interdizione',
'categories' 					=> 'categorie',
'censor words' 					=> 'testi oscurati',
'configuration' 				=> 'configurazione',
'forums' 						=> 'forum',
'groups' 						=> 'gruppi',
'post' 							=> 'messaggio',
'ranks' 						=> 'rango',
'report' 						=> 'segnalazione',
'topic' 						=> 'discussione',
'user' 							=> 'utente',
'signature' 					=> 'firma',

'Username too short error' 		=> 'Il nome utente deve essere composto da almeno 2 caratteri. Scegline un altro, grazie.',
'Username too long error' 		=> 'Il nome utente non pu&ograve; eccedere i 25 caratteri. Scegline un altro, grazie.',
'Username Guest reserved error' => 'Il nome utente scelto &egrave; riservato. Scegline un altro, grazie.',
'Username IP format error' 		=> 'Il nome utente non pu&ograve; essere un indirizzo IP. Scegline un altro, grazie.',
'Username bad characters error' => 'Il nome utente non pu&ograve; contenere i caratteri \', " e [ o ] insieme. Scegline un altro, grazie.',
'Username BBCode error' 		=> 'Il nome utente non pu&ograve; contenere BBCode. Scegline un altro, grazie.',
'Username duplicate error' 		=> 'Il nome utente %s &egrave; gi&agrave; registrato. Scegline un altro, grazie.',

'JavaScript disabled' 			=> 'JavaScript sembra essere disabilitato. %s.',
'Click here to continue' 		=> 'Cliccare qui per continuare',

);

?>