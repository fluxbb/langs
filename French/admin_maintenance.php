<?php

// Language definitions used in admin_maintenance.php
$lang_admin_maintenance = array(

'Maintenance head'			=>	'Maintenance du forum',
'Rebuild index subhead'			=>	'Reconstruire l\'index de recherche',
'Rebuild index info'			=>	'Si vous avez ajouté, modifié ou supprimé des messages manuellement dans la base de données ou si vous rencontrez des problèmes lors des recherches, vous devriez reconstruire l\'index de recherche. Pour une performance optimale vous devriez placer le forum en %s lors de la reconstruction. <strong>La reconstruction de l\'index de recherche peut prendre du temps et provoquer une montée en charge du serveur durant le processus&#160;!</strong>',
'Posts per cycle label'			=>	'Messages par cycle',
'Posts per cycle help'			=>	'Le nombre de messages à afficher pour chaque page. Ex. : si vous indiquez 300, trois cents messages seront traités, ensuite la page sera réactualisée. Ceci évite que le script ne s\'interrompe durant le processus de reconstruction.',
'Starting post label'			=>	'ID du message de départ',
'Starting post help'			=>	'L\'ID du message de départ pour la reconstruction. La valeur pas défaut est le premier ID disponible dans la base de données. En principe, vous ne devriez pas avoir à changer cela.',
'Empty index label'			=>	'Effacer l\'index',
'Empty index help'			=>	'Choisissez cela si vous souhaitez que l\'index soit vidé avant de débuter la reconstruction (voir ci-dessous).',
'Rebuild completed info'		=>	'Une fois que le processus s\'est achevé vous serez redirigé vers cette page. L\'activation de Javascript dans votre navigateur est fortement recommandée durant la reconstruction (pour redirection automatique au terme d\'un cycle). Si vous êtes contraint(e) d\'interrompre le processus de reconstruction, notez l\'ID du message traité en dernier et indiquez la valeur ID+1 dans «&#160;ID du message de départ&#160;» lorsque/si vous souhaitez continuer («&#160;Effacer l\'index&#160;» ne doit pas être sélectionné).',
'Rebuild index'				=>	'Reconstruire l\'index',
'Rebuilding search index'		=>	'Reconstruction de l\'index de recherche',
'Rebuilding index info'			=>	'Reconstruction de l\'index. Il serait bon de se servir un café en attendant :-)',
'Processing post'			=>	'Traitement du message <strong>%s</strong>&#160;…',
'Click here'				=>	'Cliquez ici',
'Javascript redirect failed'		=>	'Échec de la redirection JavaScript. %s pour continuer&#160;…',

);