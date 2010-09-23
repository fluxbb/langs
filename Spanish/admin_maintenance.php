<?php

// Language definitions used in admin_maintenance.php
$lang_admin_maintenance = array(

'Maintenance head'				=>	'Foro en mantenimiento',
'Rebuild index subhead'			=>	'Volver a generar índice de búsqueda',
'Rebuild index info'			=>	'Si ha añadido, editado o eliminado mensajes manualmente en la base de datos o si está teniendo problemas de búsqueda, debe reconstruir el índice de búsqueda. Para un mejor rendimiento, se debería poner el foro en %s durante la reconstrucción. <strong>Reconstruir el índice de búsqueda puede llevar mucho tiempo y aumentará la carga del servidor durante el proceso de reconstrucción!</strong>',
'Posts per cycle label'			=>	'Mensajes por ciclo',
'Posts per cycle help'			=>	'El número de mensajes a procesar por visitas de página. Ej. si fueran a entrar 300, trescientos mensajes se procesarían y luego se volvería a cargar la página. Esto es para prevenir el script de tiempo de espera durante el proceso de reconstrucción.',
'Starting post label'			=>	'ID mensaje inicial',
'Starting post help'			=>	'El ID del mensaje a empezar su recostrucción. El valor por defecto es el primer ID disponible en la base de datos. Normalmente no quieren que esto cambie.',
'Empty index label'				=>	'Indice vacio',
'Empty index help'				=>	'Seleccione esta opción si desea que el índice de búsqueda se vacíe antes de reconstruir (véase más adelante).',
'Rebuild completed info'		=>	'Una vez que haya terminado el proceso, se le redirige a la página. Es muy recomendable que haya habilitado JavaScript en su navegador durante la reconstrucción (para redirigir automáticamente cuando el ciclo ha terminado). Si te ves obligado a abortar el proceso de reconstrucción, tome nota de la identificación posterior procesada en último lugar y entre ese ID+1 en "Iniciar post ID" cuando quiera continuar ("índice de vacío" no debe ser seleccionado).',
'Rebuild index'					=>	'Reconstruir indice',
'Rebuilding search index'		=>	'Reconstruir indice de busqueda',
'Rebuilding index info'			=>	'Reconstruyendo indice. Esto podría ser un buen momento para tomar un poco de café :-)',
'Processing post'				=>	'Procesando mensaje <strong>%s</strong> …',
'Click here'					=>	'Pulse aquí',
'Javascript redirect failed'	=>	'Redireccionamiento de JavaScript sin éxito. %s para continuar …',

);
