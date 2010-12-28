<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'es',

// Number formatting
'lang_decimal_point'				=>	',',
'lang_thousands_sep'				=>	'.',

// Notices
'Bad request'						=>	'Solicitud incorrecta. El enlace que ha seguido es incorrecto o esta desactualizado.',
'No view'							=>	'Usted no tiene permiso para ver estos foros.',
'No permission'						=>	'Usted no tiene permiso para acceder a esta página.',
'Bad referrer'						=>	'HTTP_REFERER inadecuado. Usted se refirió a esta página desde una fuente no autorizada. Si el problema persiste por favor asegúrese de que \'Base URL\' está bien configurada en Admin / Opciones y que está visitando el foro navegando a esa URL. Más información sobre el cheque referentes pueden ser encontrados en la documentación FluxBB.',
'No cookie'							=>	'Usted parece haber entrado con éxito, sin embargo una cookie no se ha establecido. Por favor, compruebe su configuración y en su caso, habilite las cookies para este sitio web.',
'Pun include error'					=>	'No se puede procesar lo que el usuario ha incluido %s desde plantilla %s. No hay tal archivo ni en el directorio de plantillas de usuario ni en el directorio de inclusión.',

// Miscellaneous
'Announcement'						=>	'Anuncio',
'Options'							=>	'Opciones',
'Submit'							=>	'Enviar', // "Name" of submit buttons
'Ban message'						=>	'Estas expulsado de este foro.',
'Ban message 2'						=>	'La expulsión expira a finales de',
'Ban message 3'						=>	'El administrador o moderador que le expulsó le dejó el mensaje siguiente:',
'Ban message 4'						=>	'Por favor, dirija cualquier pregunta al administrador del foro en',
'Never'								=>	'Nunca',
'Today'								=>	'Hoy',
'Yesterday'							=>	'Ayer',
'Info'								=>	'Info', // A common table header
'Go back'							=>	'Volver',
'Maintenance'						=>	'Mantenimiento',
'Redirecting'						=>	'Redireccionando',
'Click redirect'					=>	'Haga clic aquí si no quieres esperar más tiempo (o si su navegador no continua automaticamente)',
'on'								=>	'on', // As in "BBCode is on"
'off'								=>	'off',
'Invalid email'						=>	'La dirección de correo electronico introducida no es valida.',
'Required'							=>	'(Requerido)',
'required field'					=>	'es un campo requerido en este formulario.', // For javascript form validation
'Last post'							=>	'Ultimo mensaje',
'by'								=>	'por', // As in last post by someuser
'New posts'							=>	'Nuevos mensajes', // The link that leads to the first new post
'New posts info'					=>	'Ir al primer nuevo mensaje en este tema.', // The popup text for new posts links
'Username'							=>	'Usuario',
'Password'							=>	'Contraseña',
'Email'								=>	'Correo electronico',
'Send email'						=>	'Enviar correo',
'Moderated by'						=>	'Moderado por',
'Registered'						=>	'Registrado',
'Subject'							=>	'Asunto',
'Message'							=>	'Mensaje',
'Topic'								=>	'Tema',
'Forum'								=>	'Foro',
'Posts'								=>	'Mensajes',
'Replies'							=>	'Respuestas',
'Pages'								=>	'Paginas:',
'Page'								=>	'Pagina %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'img tag'							=>	'[img] etiqueta:',
'Smilies'							=>	'Emoticonos:',
'and'								=>	'y',
'Image link'						=>	'imagen', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'escribió:', // For [quote]'s
'Mailer'							=>	'Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Información importante',
'Write message legend'				=>	'Escribe tu mensaje y envia',
'Previous'							=>	'Anterior',
'Next'								=>	'Siguiente',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Título',
'Member'							=>	'Miembro', // Default title
'Moderator'							=>	'Moderador',
'Administrator'						=>	'Administrador',
'Banned'							=>	'Expulsado',
'Guest'								=>	'Invitado',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] se encontro sin un juego [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] se abrio sin [%2$s], esto no esta permitido',
'BBCode error invalid self-nesting'	=>	'[%s] se abrio en su interior, esto no esta permitido',
'BBCode error no closing tag'		=>	'[%1$s] se encontró sin un juego [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] la etiqueta tiene una sección vacia atribuida',
'BBCode code problem'				=>	'Esto es un problema con tus [code] etiquetas',
'BBCode list size error'			=>	'La lista es demasiado larga para analizar, por favor, hagaló más pequeño!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Inicio',
'User list'							=>	'Usuarios',
'Rules'								=>	'Reglas',
'Search'							=>	'Buscar',
'Register'							=>	'Registrarse',
'Login'								=>	'Entrar',
'Not logged in'						=>	'No estas registrado.',
'Profile'							=>	'Perfil',
'Logout'							=>	'Salir',
'Logged in as'						=>	'Conectado como',
'Admin'								=>	'Administración',
'Last visit'						=>	'Ultima visita: %s',
'Show new posts'					=>	'Mostrar mensajes nuevos desde la última visita',
'Mark all as read'					=>	'Marcar todos los temas como leidos',
'Mark forum read'					=>	'Marcar este foro como leido',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Pie de página',
'Search links'						=>	'Buscar enlaces',
'Show recent posts'					=>	'Mostrar temas recientes',
'Show unanswered posts'				=>	'Mostrar temas sin respuesta',
'Show your posts'					=>	'Mostrar tus temas',
'Show subscriptions'				=>	'Mostrar tus temas suscritos',
'Jump to'							=>	'Saltar a',
'Go'								=>	' Ir ', // Submit button in forum jump
'Moderate topic'					=>	'Moderar tema',
'Move topic'						=>	'Mover tema',
'Open topic'						=>	'Abrir tema',
'Close topic'						=>	'Cerrar tema',
'Unstick topic'						=>	'Despegar tema',
'Stick topic'						=>	'Pegar tema',
'Moderate forum'					=>	'Moderar foro',
'Powered by'						=>	'Powered by %s',

// Debug information
'Debug table'						=>	'Depurar la información',
'Querytime'							=>	'Generado en %1$s segundos, %2$s consultas ejecutadas',
'Memory usage'						=>	'Memoria usada: %1$s',
'Peak usage'						=>	'(Pico: %1$s)',
'Query times'						=>	'Tiempo (s)',
'Query'								=>	'Consulta',
'Total query time'					=>	'Tiempo total de consulta: %s',

// Email related notifications
'New user notification'				=>	'Alerta - Nuevo registrado',
'New user message'					=>	'User \'%s\' registrado en el foro en %s',
'Banned email notification'			=>	'Alerta - Correo de expulsado detectado',
'Banned email register message'		=>	'Usuario \'%s\' registrado con correo de expulsado: %s',
'Banned email change message'		=>	'Usuario \'%s\' cambio a correo de expulsado: %s',
'Banned email post message'			=>	'Usuario \'%s\' publicó con correo de expulsado: %s',
'Duplicate email notification'		=>	'Alerta - Detectado correo duplicado',
'Duplicate email register message'	=>	'Usuario \'%s\' registrado con una dirección de correo electrónico que también pertenece a: %s',
'Duplicate email change message'	=>	'Usuario \'%s\' cambiado a una dirección de correo electrónico que también pertenece a: %s',
'Report notification'				=>	'Report(%d) - \'%s\'',
'Report message 1'					=>	'Usuario \'%s\' ha reportado el siguiente mensaje: %s',
'Report message 2'					=>	'Razón: %s',

'User profile'						=>	'Perfil de usuario: %s',
'Post URL'							=>	'Mensaje URL: %s',
'Email signature'					=>	'Foro Remitente'."\n".'(No responda a este mensaje)',

// For extern.php RSS feed
'RSS description'					=>	'Los temas mas recientes en %s.',
'RSS description topic'				=>	'Los mensajes mas recientes en %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS temas activos feed',
'Atom active topics feed'			=>	'Atom temas activos feed',
'RSS forum feed'					=>	'RSS foro feed',
'Atom forum feed'					=>	'Atom foro feed',
'RSS topic feed'					=>	'RSS tema feed',
'Atom topic feed'					=>	'Atom tema feed',

// Admin related stuff in the header
'New reports'						=>	'Tienes nuevos reportes',
'Maintenance mode enabled'			=>	'Modo mantenimiento esta activado!',

);
