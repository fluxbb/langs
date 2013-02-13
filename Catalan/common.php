<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'ca_ES',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'Sol·licitud incorrecta. L\'enllaç seguit és incorrecte o està desactualitzat.',
'No view'							=>	'No disposes de permisos per veure aquests fòrums.',
'No permission'						=>	'No disposes de permisos per veure aquesta pàgina.',
'Bad referrer'						=>	'HTTP_REFERER inadecuat. Us heu referit a aquesta pàgina des d\'una font no autoritzada. Si el problema persisteix, si us plau, assegureu-vos de què \'Base URL\' està ben configurada a Admin / Opcions i que estàs visitant el fòrum a aquesta mateixa URL.',
'No cookie'							=>	'Sembla que has iniciat sessió correctament però una cookie no s\'ha establert. Si us plau, comprova la teva configuració i en tal cas, habilita les cookies per a aquest lloc web.',
'Pun include error'					=>	'No es pot processar el User Include %s des de la plantilla %s. No hi ha l\'arxiu ni al directori de plantilles ni al directori de l\'usuari include/user.',

// Miscellaneous
'Announcement'						=>	'Anunci',
'Options'							=>	'Opcions',
'Submit'							=>	'Enviar', // "Name" of submit buttons
'Ban message'						=>	'Estàs expulsat d\'aquest fòrum.',
'Ban message 2'						=>	'L\'expulsió expira a finals de',
'Ban message 3'						=>	'L\'administrador o moderador que t\'ha expulsat t\'ha deixat el següent missatge:',
'Ban message 4'						=>	'Si us plau, dirigeix qualsevol pregunta a l\'administrador del fòrum a',
'Never'								=>	'Mai',
'Today'								=>	'Avui',
'Yesterday'							=>	'Ahir',
'Info'								=>	'Informació', // A common table header
'Go back'							=>	'&#8592; Tornar',
'Maintenance'						=>	'Manteniment',
'Redirecting'						=>	'Redireccionant …',
'Click redirect'					=>	'Fes clic aquí si no vols esperar més temps (o si el teu navegador no continua automàticament)',
'on'								=>	'actiu', // As in "BBCode is on"
'off'								=>	'inactiu',
'Invalid email'						=>	'L\'adreça de correu electrònic no és vàlida.',
'Required'							=>	'(Requerit)',
'required field'					=>	'és un camp requerit d\'aquest formulari.', // For javascript form validation
'Last post'							=>	'Últim missatge',
'by'								=>	'per', // As in last post by someuser
'New posts'							=>	'Nous missatges', // The link that leads to the first new post
'New posts info'					=>	'Anar al primer missatge nou d\'aquest tema.', // The popup text for new posts links
'Username'							=>	'Usuari',
'Password'							=>	'Contrasenya',
'Email'								=>	'Correu electrònic',
'Send email'						=>	'Enviar email',
'Moderated by'						=>	'Moderat per',
'Registered'						=>	'Registrat',
'Subject'							=>	'Assumpte',
'Message'							=>	'Missatge',
'Topic'								=>	'Tema',
'Forum'								=>	'Fòrum',
'Posts'								=>	'Missatges',
'Replies'							=>	'Respostes',
'Pages'								=>	'Pàgines:',
'Page'								=>	'Pàgina %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'[url] etiqueta:',
'img tag'							=>	'[img] etiqueta:',
'Smilies'							=>	'Emoticones:',
'and'								=>	'i',
'Image link'						=>	'imatge', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'ha escrit:', // For [quote]'s
'Mailer'							=>	'L\'equip', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Informació important',
'Write message legend'				=>	'Escriu el teu missatge i envia\'l',
'Previous'							=>	'Anterior',
'Next'								=>	'Següent',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Títol',
'Member'							=>	'Membre', // Default title
'Moderator'							=>	'Moderador',
'Administrator'						=>	'Administrador',
'Banned'							=>	'Expulsat',
'Guest'								=>	'Convidat',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] sense un joc [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] sense [%2$s]. Això no està permés',
'BBCode error invalid self-nesting'	=>	'[%s] oberta en el seu interior. Això no està permés',
'BBCode error no closing tag'		=>	'[%1$s] sense un joc [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] etiqueta amb una secció buida atribuida',
'BBCode error tag not allowed'		=>	'Ús no permés de [%s] etiquetes',
'BBCode error tag url not allowed'	=>	'No està permesa la publicació d\'enllaços',
'BBCode code problem'				=>	'Hi ha un problema amb [code] de les etiquetes',
'BBCode list size error'			=>	'La llista és massa llarga per a analitzar-la. Si us plau, fes-la més petita!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Inici',
'User list'							=>	'Usuaris',
'Rules'								=>	'Regles',
'Search'							=>	'Cercar',
'Register'							=>	'Registrar-se',
'Login'								=>	'Entrar',
'Not logged in'						=>	'No estàs registrat.',
'Profile'							=>	'Perfil',
'Logout'							=>	'Sortir',
'Logged in as'						=>	'Hola',
'Admin'								=>	'Administració',
'Last visit'						=>	'Última visita: %s',
'Topic searches'					=>	'Temes:',
'New posts header'					=>	'Nous',
'Active topics'						=>	'Actius',
'Unanswered topics'					=>	'Sense respondre',
'Posted topics'						=>	'Publicats per mi',
'Show new posts'					=>	'Mostrar missatges nous des de l\'última visita',
'Show active topics'				=>	'Mostrar temes amb missatges recents.',
'Show unanswered topics'			=>	'Mostrar temes sense respondre.',
'Show posted topics'				=>	'Mostrar temes publicats per tú.',
'Mark all as read'					=>	'Marcar tots els temes com a llegits',
'Mark forum read'					=>	'Marcar aquest fòrum com a llegit',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Peu de pàgina',
'Jump to'							=>	'Salta a',
'Go'								=>	' Vés-hi ', // Submit button in forum jump
'Moderate topic'					=>	'Moderar',
'Move topic'						=>	'Moure',
'Open topic'						=>	'Obrir',
'Close topic'						=>	'Tancar',
'Unstick topic'						=>	'Desancorar',
'Stick topic'						=>	'Ancorar',
'Moderate forum'					=>	'Moderar',
'Powered by'						=>	'Desenvolupat per %s',

// Debug information
'Debug table'						=>	'Depurar la informació',
'Querytime'							=>	'Generat en %1$s segons, %2$s consultes executades',
'Memory usage'						=>	'Memòria utilitzada: %1$s',
'Peak usage'						=>	'(Pic: %1$s)',
'Query times'						=>	'Temps (s)',
'Query'								=>	'Consulta',
'Total query time'					=>	'Temps total de consulta: %s',

// For extern.php RSS feed
'RSS description'					=>	'Els temes més recents a %s.',
'RSS description topic'				=>	'Els missatges més recents a %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS: Temes actius',
'Atom active topics feed'			=>	'Atom: Temes actius',
'RSS forum feed'					=>	'RSS: Fòrum',
'Atom forum feed'					=>	'Atom: Fòrum',
'RSS topic feed'					=>	'RSS: Tema',
'Atom topic feed'					=>	'Atom: Tema',

// Admin related stuff in the header
'New reports'						=>	'Tens nous informes de denúncia',
'Maintenance mode enabled'			=>	'El mode de manteniment està actiu!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
