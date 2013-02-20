<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'pt_PT',

// Number formatting
'lang_decimal_point'				=>	',',
'lang_thousands_sep'				=>	'.',

// Notices
'Bad request'						=>	'Pedido inv&#225;lido. O link que voc&#234; clicou est&#225; incorrecto ou desactualizado.',
'No view'							=>	'Voc&#234; n&#227;o possui permiss&#227;o para ver este f&#243;rum.',
'No permission'						=>	'Voc&#234; n&#227;o possui permiss&#227;o para aceder a esta p&#225;gina.',
'Bad referrer'						=>	'HTTP_REFERER mau. Voc&#234; foi encaminhado a esta p&#225;gina a partir de uma fonte n&#227;o autorizada. Se o problema continuar, por favor, certifique-se que a \'URL Base\' est&#225; correctamente definida em Administra&#231;&#227;o/Op&#231;&#245;es e que voc&#234; est&#225; a visitar o f&#243;rum atrav&#233;s desse mesmo endere&#231;o. Mais informa&#231;&#245;es sobre a verifica&#231;&#227;o de encaminhamento podem ser encontradas na documenta&#231;&#227;o do FluxBB.',
'No cookie'							=>	'Voc&#234; parece ter autenticado correctamente, por&#233;m um cookie n&#227;o p&#244;de ser criado. Por favor, verifique as suas configura&#231;&#245;es e se aplic&#225;vel, active os cookies para este website.',
'Pun include error'					=>	'Imposs&#237;vel processar inclus&#227;o do usu&#225;rio %s do estilo %s. Tal ficheiro n&#227;o existe nem na pasta de estilo e nem no direct&#243;rio de inclus&#227;o do usu&#225;rio.',

// Miscellaneous
'Announcement'						=>	'An&#250;ncio',
'Options'							=>	'Op&#231;&#245;es',
'Submit'							=>	'Enviar', // "Name" of submit buttons
'Ban message'						=>	'Voc&#234; foi banido deste f&#243;rum.',
'Ban message 2'						=>	'O banimento expira no final de',
'Ban message 3'						=>	'O administrador ou moderador que o baniu deixou a seguinte mensagem:',
'Ban message 4'						=>	'Por favor, dirija quaisquer quest&#245;es ao administrador do f&#243;rum em',
'Never'								=>	'Nunca',
'Today'								=>	'Hoje',
'Yesterday'							=>	'Ontem',
'Info'								=>	'Informa&#231;&#245;es', // A common table header
'Go back'							=>	'Voltar',
'Maintenance'						=>	'Manuten&#231;&#227;o',
'Redirecting'						=>	'Redireccionando',
'Click redirect'					=>	'Clique aqui se n&#227;o deseja esperar (ou se seu navegador n&#227;o o redireccionar automaticamente)',
'on'								=>	'Activado', // As in "BBCode is on"
'off'								=>	'Desactivado',
'Invalid email'						=>	'O endere&#231;o de e-mail digitado &#233; inv&#225;lido.',
'Required'							=>	'(Obrigat&#243;rio)',
'required field'					=>	'&#233; um campo obrigat&#243;rio neste formul&#225;rio.', // For javascript form validation
'Last post'							=>	'&#218;ltima mensagem',
'by'								=>	'por', // As in last post by someuser
'New posts'							=>	'Novas mensagens', // The link that leads to the first new post
'New posts info'					=>	'Ir &#224; primeira nova mensagem neste t&#243;pico.', // The popup text for new posts links
'Username'							=>	'Nome de usu&#225;rio',
'Password'							=>	'Senha',
'Email'								=>	'E-mail',
'Send email'						=>	'Enviar e-mail',
'Moderated by'						=>	'Moderado por',
'Registered'						=>	'Registado',
'Subject'							=>	'Assunto',
'Message'							=>	'Mensagem',
'Topic'								=>	'T&#243;pico',
'Forum'								=>	'F&#243;rum',
'Posts'								=>	'Mensagens',
'Replies'							=>	'Respostas',
'Pages'								=>	'P&#225;ginas:',
'Page'								=>	'P&#225;gina %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'img tag'							=>	'Tag [img]:',
'Smilies'							=>	'Emoticons:',
'and'								=>	'e',
'Image link'						=>	'imagem', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'escreveu:', // For [quote]'s
'Mailer'							=>	'Correio do %s', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Informa&#231;&#227;o importante',
'Write message legend'				=>	'Escreva a sua mensagem e envie',
'Previous'							=>	'Anterior',
'Next'								=>	'Seguinte',
'Spacer'							=>	'&#8230;', // Ellipsis for paginate

// Title
'Title'								=>	'T&#237;tulo',
'Member'							=>	'Membro', // Default title
'Moderator'							=>	'Moderador',
'Administrator'						=>	'Administrador',
'Banned'							=>	'Banido',
'Guest'								=>	'Visitante',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] foi encontrado sem a tag de abertura [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] foi aberto dentro de [%2$s], isto n&#227;o &#233; permitido',
'BBCode error invalid self-nesting'	=>	'[%s] foi aberto dentro de si mesmo, isto n&#227;o &#233; permitido',
'BBCode error no closing tag'		=>	'[%1$s] foi encontrado sem a tag de fecho [/%1$s]',
'BBCode error empty attribute'		=>	'a tag [%s] est&#225; com uma sec&#231;&#227;o de atributo em vazio',
'BBCode code problem'				=>	'H&#225; um problema com suas tags [code]',
'BBCode list size error'			=>	'A sua lista est&#225; muito longa para processar, por favor, torne-a menor!',

// Stuff for the navigator (top of every page)
'Index'								=>	'&#205;ndice',
'User list'							=>	'Lista de usu&#225;rios',
'Rules'								=>	'Regras',
'Search'							=>	'Pesquisa',
'Register'							=>	'Registo',
'Login'								=>	'Entrar',
'Not logged in'						=>	'Voc&#234; n&#227;o est&#225; autenticado.',
'Profile'							=>	'Perfil',
'Logout'							=>	'Sair',
'Logged in as'						=>	'Autenticado como',
'Admin'								=>	'Administra&#231;&#227;o',
'Last visit'						=>	'&#218;ltima visita: %s',
'Topic searches'					=>	'T&#243;picos:',
'New posts header'					=>	'Novos',
'Active topics'						=>	'Activos',
'Unanswered topics'					=>	'Sem resposta',
'Posted topics'						=>	'Publicados',
'Show new posts'					=>	'Encontrar t&#243;picos com novas mensagens desde sua &#250;ltima visita.',
'Show active topics'				=>	'Encontrar t&#243;picos com mensagens recentes.',
'Show unanswered topics'			=>	'Encontrar t&#243;picos sem respostas.',
'Show posted topics'				=>	'Encontrar t&#243;picos nos quais voc&#234; participou.',
'Mark all as read'					=>	'Marcar todos os t&#243;picos como lidos',
'Mark forum read'					=>	'Marcar este f&#243;rum como lido',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Rodap&#233; do site',
'Jump to'							=>	'Ir para',
'Go'								=>	' Ir ', // Submit button in forum jump
'Moderate topic'					=>	'Moderar t&#243;pico',
'Move topic'						=>	'Mover t&#243;pico',
'Open topic'						=>	'Abrir t&#243;pico',
'Close topic'						=>	'Fechar t&#243;pico',
'Unstick topic'						=>	'N&#227;o-fixar t&#243;pico',
'Stick topic'						=>	'Fixar t&#243;pico',
'Moderate forum'					=>	'Moderar f&#243;rum',
'Powered by'						=>	'Powered by %s',

// Debug information
'Debug table'						=>	'Informa&#231;&#245;es de depura&#231;&#227;o',
'Querytime'							=>	'Gerado em %1$s segundos, %2$s solicita&#231;&#245;es executadas',
'Memory usage'						=>	'Uso de mem&#243;ria: %1$s',
'Peak usage'						=>	'(Pico: %1$s)',
'Query times'						=>	'Tempo (s)',
'Query'								=>	'Solicita&#231;&#227;o',
'Total query time'					=>	'Tempo total de solicita&#231;&#227;o: %s',

// For extern.php RSS feed
'RSS description'					=>	'Os t&#243;picos mais recentes em %s.',
'RSS description topic'				=>	'As mensagens mais recentes em %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'Feed RSS de t&#243;picos activos',
'Atom active topics feed'			=>	'Feed Atom de t&#243;picos activos',
'RSS forum feed'					=>	'Feed RSS do f&#243;rum',
'Atom forum feed'					=>	'Feed Atom do f&#243;rum',
'RSS topic feed'					=>	'Feed RSS do t&#243;pico',
'Atom topic feed'					=>	'Feed Atom do t&#243;pico',

// Admin related stuff in the header
'New reports'						=>	'N&#227;o h&#225; novos relat&#243;rios',
'Maintenance mode enabled'			=>	'O modo de manuten&#231;&#227;o est&#225; activado!',

// Units for file sizes
'Size unit B'            =>  '%s B',
'Size unit KiB'            =>  '%s KiB',
'Size unit MiB'            =>  '%s MiB',
'Size unit GiB'            =>  '%s GiB',
'Size unit TiB'            =>  '%s TiB',
'Size unit PiB'            =>  '%s PiB',
'Size unit EiB'            =>  '%s EiB',

);
