<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'EPD', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'pt_br',

// Number formatting
'lang_decimal_point'				=>	',',
'lang_thousands_sep'				=>	'.',

// Notices
'Bad request'						=>	'Pedido inválido. O link que você clicou está incorreto ou desatualizado.',
'No view'							=>	'Você não possui permissão para ver este fórum.',
'No permission'						=>	'Você não possui permissão para acessar esta página.',
'Bad referrer'						=>	'HTTP_REFERER ruim. Você foi encaminhado à esta página a partir de uma fonte não autorizada. Se o problema continuar, por favor, certifique-se que a \'URL Base\' está corretamente definida em Administração/Opções e que você está visitando o fórum através desse mesmo endereço. Mais informações sobre a verificação de encaminhamento podem ser encontradas na documentação do FluxBB.',
'No cookie'							=>	'Você parece ter autenticado corretamente, porém um cookie não pôde ser criado. Por favor, verifique suas configurações e se aplicável, ative cookies para este website.',
'Pun include extension'				=>	'Impossível processar inclusão do usuário %s do estilo %s. Arquivos "%s" não são permitidos',
'Pun include directory'				=>	'Impossível processar inclusão do usuário %s do estilo %s. Passagem de diretório não é permitida',
'Pun include error'					=>	'Impossível processar inclusão do usuário %s do estilo %s. Tal arquivo não existe nem na pasta do estilo e nem no diretório de inclusão do usuário.',

// Miscellaneous
'Announcement'						=>	'Anúncio',
'Options'							=>	'Opções',
'Submit'							=>	'Enviar', // "Name" of submit buttons
'Ban message'						=>	'Você foi banido deste fórum.',
'Ban message 2'						=>	'O banimento expira no final de',
'Ban message 3'						=>	'O administrador ou moderador que o baniu deixou a seguinte mensagem:',
'Ban message 4'						=>	'Por favor, dirija quaisquer questionamentos ao administrador do fórum em',
'Never'								=>	'Nunca',
'Today'								=>	'Hoje',
'Yesterday'							=>	'Ontem',
'Info'								=>	'Informações', // A common table header
'Go back'							=>	'Voltar',
'Maintenance'						=>	'Manutenção',
'Redirecting'						=>	'Redirecionando',
'Click redirect'					=>	'Clique aqui se não deseja esperar (ou se seu navegador não o redirecionar automaticamente)',
'on'								=>	'Ativado', // As in "BBCode is on"
'off'								=>	'Desativado',
'Invalid email'						=>	'O endereço de email digitado é inválido.',
'Required'							=>	'(Obrigatório)',
'required field'					=>	'é um campo obrigatório neste formuário.', // For javascript form validation
'Last post'							=>	'Última mensagem',
'by'								=>	'por', // As in last post by some user
'New posts'							=>	'Novas mensagens', // The link that leads to the first new post
'New posts info'					=>	'Ir à primeira nova mensagem neste tópico.', // The popup text for new posts links
'Username'							=>	'Nome de usuário',
'Password'							=>	'Senha',
'Email'								=>	'Email',
'Send email'						=>	'Enviar email',
'Moderated by'						=>	'Moderado por',
'Registered'						=>	'Registrado',
'Subject'							=>	'Assunto',
'Message'							=>	'Mensagem',
'Topic'								=>	'Tópico',
'Forum'								=>	'Fórum',
'Posts'								=>	'Mensagens',
'Replies'							=>	'Respostas',
'Pages'								=>	'Páginas:',
'Page'								=>	'Página %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>  'tag [url]:',
'img tag'							=>	'Tag [img]:',
'Smilies'							=>	'Emoticons:',
'and'								=>	'e',
'Image link'						=>	'imagem', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'escreveu:', // For [quote]'s
'Mailer'							=>	'Correio do %s', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Informação importante',
'Write message legend'				=>	'Escreva sua mensagem e a envie',
'Previous'							=>	'Anterior',
'Next'								=>	'Próxima',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Título',
'Member'							=>	'Membro', // Default title
'Moderator'							=>	'Moderador',
'Administrator'						=>	'Administrador',
'Banned'							=>	'Banido',
'Guest'								=>	'Visitante',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] foi encontrado sem a tag de abertura [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] foi aberto dentro de [%2$s], isto não é permitido',
'BBCode error invalid self-nesting'	=>	'[%s] foi aberto dentro de si mesmo, isto não é permitido',
'BBCode error no closing tag'		=>	'[%1$s] foi encontrado sem a tag de fechamento [/%1$s]',
'BBCode error empty attribute'		=>	'a tag [%s] está com uma seção de atributo em vazio',
'BBCode error tag not allowed'		=>	'Você não tem permissão para usar tags [%s]',
'BBCode error tag url not allowed'	=>	'Você não tem permissão para publicar links',
'BBCode code problem'				=>	'Há um problema com suas tags [code]',
'BBCode list size error'			=>	'Sua lista está muito longa para processar, por favor, torne-a menor!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Índice',
'User list'							=>	'Lista de usuários',
'Rules'								=>	'Regras',
'Search'							=>	'Pesquisa',
'Register'							=>	'Registro',
'Login'								=>	'Entrar',
'Not logged in'						=>	'Você não está autenticado.',
'Profile'							=>	'Perfil',
'Logout'							=>	'Sair',
'Logged in as'						=>	'Autenticado como',
'Admin'								=>	'Administração',
'Last visit'						=>	'Última visita: %s',
'Topic searches'					=>	'Tópicos:',
'New posts header'					=>	'Novos',
'Active topics'						=>	'Ativos',
'Unanswered topics'					=>	'Sem resposta',
'Posted topics'						=>	'Publicados',
'Show new posts'					=>	'Encontrar tópicos com novas mensagens desde sua última visita.',
'Show active topics'				=>	'Encontrar tópicos com mensagens recentes.',
'Show unanswered topics'			=>	'Encontrar tópicos sem respostas.',
'Show posted topics'				=>	'Encontrar tópicos nos quais você participou.',
'Mark all as read'					=>	'Marcar todos os tópicos como lidos',
'Mark forum read'					=>	'Marcar este fórum como lido',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Rodapé do site',
'Jump to'							=>	'Ir para',
'Go'								=>	' Ir ', // Submit button in forum jump
'Moderate topic'					=>	'Moderar tópico',
'All'								=>	'Todos',
'Move topic'						=>	'Mover tópico',
'Open topic'						=>	'Abrir tópico',
'Close topic'						=>	'Fechar tópico',
'Unstick topic'						=>	'Desfixar tópico',
'Stick topic'						=>	'Fixar tópico',
'Moderate forum'					=>	'Moderar fórum',
'Powered by'						=>	'Rodando com %s',

// Debug information
'Debug table'						=>	'Informações de depuração',
'Querytime'							=>	'Gerado em %1$s segundos, %2$s solicitações executadas',
'Memory usage'						=>	'Uso de memória: %1$s',
'Peak usage'						=>	'(Pico: %1$s)',
'Query times'						=>	'Tempo (s)',
'Query'								=>	'Solicitação',
'Total query time'					=>	'Tempo total de solicitação: %s',

// For extern.php RSS feed
'RSS description'					=>	'Os tópicos mais recentes em %s.',
'RSS description topic'				=>	'As mensagens mais recentes em %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'Feed RSS de tópicos ativos',
'Atom active topics feed'			=>	'Feed Atom de tópicos ativos',
'RSS forum feed'					=>	'Feed RSS do fórum',
'Atom forum feed'					=>	'Feed Atom do fórum',
'RSS topic feed'					=>	'Feed RSS do tópico',
'Atom topic feed'					=>	'Feed Atom do tópico',

// Admin related stuff in the header
'New reports'						=>	'Não há novos relatórios',
'Maintenance mode enabled'			=>	'O modo de manutenção está ativado!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
