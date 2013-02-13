<?php

// Language definitions for frequently used strings
$lang_common = array(

// Orientación del texto y codificación
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'es',

// Formato de números
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Noticias
'Bad request'						=>	'Solicitud incorrecta. El enlace que ha seguido es incorrecto o esta desactualizado.',
'No view'							=>	'Usted no tiene permiso para ver estos foros.',
'No permission'						=>	'Usted no tiene permiso para acceder a esta página.',
'Bad referrer'						=>	'HTTP_REFERER inadecuado. Usted se refirió a esta página desde una fuente no autorizada. Si el problema persiste por favor asegúrese de que \'Base URL\' está bien configurada en Admin / Opciones y que está visitando el foro navegando a esa URL. Más información sobre el cheque referentes pueden ser encontrados en la documentación FluxBB.',
'No cookie'							=>	'Usted parece haber entrado con éxito, sin embargo una cookie no se ha establecido. Por favor, compruebe su configuración y en su caso, habilite las cookies para este sitio web.',
'Pun include extension'  			=>	'No se puede procesar lo que el usuario ha incluido %s desde plantilla %s. "%s" archivos no están permitidos',
'Pun include directory'				=>	'No se puede procesar lo que el usuario ha incluido %s desde plantilla %s. Directorio transversal no está permitido',
'Pun include error'					=>	'No se puede procesar lo que el usuario ha incluido %s desde plantilla %s. No hay tal archivo ni en el directorio de plantillas de usuario ni en el directorio de inclusión',

// Miscelanea
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
'by'								=>	'por', // As in last post by some user
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
'url tag'							=>	'[url] etiqueta:',
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

// Titulo
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
'BBCode error tag not allowed'		=>	'No está permitido el uso de [%s] etiquetas',
'BBCode error tag url not allowed'	=>	'No está permitido publicar enlaces',
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
'Topic searches'					=>	'Temas:',
'New posts header'					=>	'Nuevo',
'Active topics'						=>	'Activo',
'Unanswered topics'					=>	'Sin respuesta',
'Posted topics'						=>	'Publicado',
'Show new posts'					=>	'Mostrar mensajes nuevos desde la última visita.',
'Show active topics'				=>	'Mostrar temas con mensajes recientes.',
'Show unanswered topics'			=>	'Mostrar temas sin respuestas.',
'Show posted topics'				=>	'Mostrar temas en los que haya publicado.',
'Mark all as read'					=>	'Marcar todos los temas como leidos',
'Mark forum read'					=>	'Marcar este foro como leido',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Pie de página',
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

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
