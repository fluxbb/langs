<?php

// Language definitions used in admin_maintenance.php
$lang_admin_maintenance = array(

'Maintenance head'				=>	'Fòrum en manteniment',
'Rebuild index subhead'			=>	'Regenerar índex de cerca',
'Rebuild index info'			=>	'Si has afegit, editat o eliminat missatges de forma manual de la base de dades o si tens problemes amb les cerques, cal reconstruir-ne el seu índex. Per a un millor rendiment, caldria posar el fòrum en %s durant la reconstrucció. <strong>Reconstruïr l\'índex de cerca pot trigar bastant de temps i aumentarà la càrrega del servidor durant el procés de reconstrucció!</strong>',
'Posts per cycle label'			=>	'Missatges per cicle',
'Posts per cycle help'			=>	'El nombre de missatges a processar per visites de pàgina. Ex. Si fóssin a entrar 300, tres-cents missatges es processarien i després es tornaria a carregar la pàgina. Això és per a prevenir el script de temps d\'espera durant el procés de reconstrucció.',
'Starting post label'			=>	'ID missatge inicial',
'Starting post help'			=>	'L\'ID del missatge a començar la reconstrucció. El valor per defecte és el primer ID disponible a la base de dades. Per norma general no hauries de canviar-ho.',
'Empty index label'				=>	'Índex buit',
'Empty index help'				=>	'Selecciona aquesta opció si vols que l\'índex de cerca es buidi abans de reconstruir-se (veure més endavant).',
'Rebuild completed info'		=>	'Un cop hagi finalitzat el procés, es redirigeix a la pàgina. És molt recomanable que JavaScript estigui activat en el navegador durant la reconstrucció per a què pugui redirigir automàticament quan el cicle acabi. Si et veus obligat a avortar el procés de reconstrucció, pren nota de la identificació posterior processada en últim lloc i entre aquell ID+1 en "Iniciar post ID" quan vulguis continuar ("índex de buit no ha de ser seleccionat).',

'Rebuild index'					=>	'Reconstruïr l\'índex',
'Rebuilding search index'		=>	'Reconstruïr l\'índex de cerca',
'Rebuilding index info'			=>	'Reconstruïnt l\'índex … Ara seria un bon moment per a prendre\'t un cafè :-)',
'Processing post'				=>	'Processant missatge <strong>%s</strong> …',
'Click here'					=>	'Fes clic aquí',
'Javascript redirect failed'	=>	'Redireccionament JavaScript sense èxit. %s per a continuar …',
'Posts must be integer message'	=>	'Els missatges per cicle ha de ser un valor sencer positiu.',
'Days must be integer message'	=>	'Dies a podar ha de ser un valor sencer positiu.',
'No old topics message'			=>	'No hi ha temes que tinguin %s dies d\'antiguitat. Si us plau, redueix el valor de "dies d\'antiguitat" i torna-ho a intentar.',
'Posts pruned redirect'			=>	'Missatges podats. Redirigint …',
'Prune head'					=>	'Podar',
'Prune subhead'					=>	'Podar missatges antics',
'Days old label'				=>	'Dies d\'antiguitat',
'Days old help'					=>	'El nombre de dies d\'antiguitat cal especificar-lo per a la poda. Ex. Si hi posessis 30, cada tema que no contingui un missatge datat amb menys de 30 dies d\'antiguitat serà eliminat.',
'Prune sticky label'			=>	'Podar els temes ancorats',
'Prune sticky help'				=>	'Quan està habilitat, els temes ancorats també seran podats.',
'Prune from label'				=>	'Podar des del fòrum',
'All forums'					=>	'Tots els fòrums',
'Prune from help'				=>	'El fòrum des del qual vols podar-li temes.',
'Prune info'					=>	'Utilitza aquesta funcionalitat amb precaució. <strong>Els temes podats no podran recuperar-se mai més.</strong> Per a un millor rendiment, hauries de posar el fòrum en %s durant la poda.',
'Confirm prune subhead'			=>	'Confirmar la poda de temes',
'Confirm prune info'			=>	'Estas segur que vols podar tots els temes anteriors a %s dies des de %s (%s temes).',
'Confirm prune warn'			=>	'ADVERTÈNCIA! La poda de temes els esborra permanentment.',

);
