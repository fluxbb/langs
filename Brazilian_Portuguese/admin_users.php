<?php

// Language definitions used in admin_users.php
$lang_admin_users = array(

'Non numeric message'		=>	'Você digitou um valor não-numérico em uma coluna que só aceita números.',
'Invalid date time message'	=>	'Você digitou uma data/hora inválida.',
'Not verified'				=>	'Não verificado',

// Actions: mass delete/ban etc.
'No users selected'			=>	'Nenhum usuário selecionado.',
'No move admins message'	=>	'Por razões de segurança, você não tem permissão de mover múltiplos administradores para outro grupo. Se desejar mover estes administradores, você pode fazê-lo em seus respectivos perfis de usuários.',
'No delete admins message'	=>	'Administradores não podem ser excluídos. Para poder excluir administradores, você deve primeiro movê-los para um grupo de usuários diferente.',
'No ban admins message'		=>	'Administradores não podem ser banidos. Para poder banir administradores, você deve primeiro movê-los para um grupo de usuários diferente.',
'No ban mods message'		=>	'Moderadores não podem ser banidos. Para poder banir moderadores, você deve primeiro movê-los para um grupo de usuários diferente.',
'Move users'				=>	'Alterar grupo de usuários',
'Move users subhead'		=>	'Selecionar novo grupo de usuários',
'New group label'			=>	'Novo grupo',
'New group help'			=>	'Selecione o grupo no qual os usuários selecionados serão movidos. Por razões de segurança, não é possível mover múltiplos usuários para o grupo administrador.',
'Invalid group message'		=>	'ID de grupo inválida.',
'Users move redirect'		=>	'Grupo de usuários alterado. Redirecionando …',
'Delete users'				=>	'Excluir usuários',
'Confirm delete legend'		=>	'Importante: leia antes de excluir usuários',
'Confirm delete info'		=>	'Por favor confirme que deseja excluir estes usuários.',
'Delete posts'				=>	'Excluir quaisquer mensagens e tópicos que estes usuários tenham feito.',
'Delete warning'			=>	'Aviso! Usuários e/ou mensagens excluídos não podem ser restaurados. Se você escolher não excluir as mensagens feitas por estes usuários, tais mensagens só poderão ser excluídas manualmente mais tarde.',
'Users delete redirect'		=>	'Usuários excluídos. Redirecionando …',
'Ban users'					=>	'Banir usuários',
'Message expiry subhead'	=>	'Mensagem de banimento e expiração',
'Ban message label'			=>	'Mensagem de banimento',
'Ban message help'			=>	'Uma mensagem que será exibida ao usuário banido quando visitar o fórum.',
'Expire date label'			=>	'Data de expiração',
'Expire date help'			=>	'A data em que este banimento deverá ser automaticamente removido (formato: aaaa-mm-dd). Deixe em branco para remover manualmente.',
'Ban IP label'				=>	'Banir endereços IP',
'Ban IP help'				=>	'Também bane os endereços IP dos usuários banidos para dificultar o registro de novas contas por usuários banidos.',
'Invalid date message'		=>	'Você digitou uma data de expiração inválida.',
'Invalid date reasons'		=>	'O formato correto é AAAA-MM-DD e a data deve ser de ao menos um dia a partir de hoje.',
'Users banned redirect'		=>	'Usuários banidos. Redirecionando …',

'User search head'			=>	'Pesquisa de usuário',
'User search subhead'		=>	'Digite o critério de pesquisa',
'User search info'			=>	'Pesquisar por usuários no banco de dados. Você pode digitar um ou mais termos para pesquisar. Curingas na forma de asteriscos (*) são aceitos.',
'Username label'			=>	'Nome de usuário',
'E-mail address label'		=>	'Endereço de email',
'Title label'				=>	'Título',
'Real name label'			=>	'Nome real',
'Website label'				=>	'Website',
'Jabber label'				=>	'Jabber',
'ICQ label'					=>	'ICQ',
'MSN label'					=>	'Conta Microsoft',
'AOL label'					=>	'AOL IM',
'Yahoo label'				=>	'Yahoo Messenger',
'Location label'			=>	'Localização',
'Signature label'			=>	'Assinatura',
'Admin note label'			=>	'Nota do administrador',
'Posts more than label'		=>	'Número de mensagens maior que',
'Posts less than label'		=>	'Número de mensagens menor que',
'Last post after label'		=>	'Última mensagem após',
'Date help'					=>	'(aaaa-mm-dd hh:mm:ss)',
'Last post before label'	=>	'Última mensagem antes de',
'Last visit after label'	=>	'Última visita é após',
'Last visit before label'	=>	'Última visita é antes de',
'Registered after label'	=>	'Registrado após',
'Registered before label'	=>	'Registrado antes de',
'Order by label'			=>	'Ordenar por',
'Order by username'			=>	'Nome de usuário',
'Order by e-mail'			=>	'Email',
'Order by posts'			=>	'Número de mensagens',
'Order by last post'		=>	'Última mensagem',
'Order by last visit'		=>	'Última visita',
'Order by registered'		=>	'Registrado',
'Ascending'					=>	'Ascendente',
'Descending'				=>	'Descendente',
'User group label'			=>	'Grupo de usuário',
'All groups'				=>	'Todos os grupos',
'Unverified users'			=>	'Usuários não confirmados',
'Submit search'				=>	'Enviar pesquisa',
'IP search head'			=>	'Pesquisa de IP',
'IP search subhead'			=>	'Digite o IP a ser pesquisado',
'IP address label'			=>	'Endereço IP',
'IP address help'			=>	'O endereço IP a ser pesquisado no banco de dados de mensagens.',
'Find IP address'			=>	'Encontrar endereço IP',

'Results head'				=>	'Resultados da Pesquisa',
'Results username head'		=>	'Nome de usuário',
'Results e-mail head'		=>	'Email',
'Results title head'		=>	'Título/Estado',
'Results posts head'		=>	'Mensagens',
'Results admin note head'	=>	'Nota do administrador',
'Results actions head'		=>	'Ações',
'Results IP address head'	=>	'Endereço IP',
'Results last used head'	=>	'Último uso',
'Results times found head'	=>	'Vezes encontrado',
'Results action head'		=>	'Ação',
'Results find more link'	=>	'Encontrar mais usuários com este IP',
'Results no posts found'	=>	'Atualmente não existem mensagens deste usuário no fórum.',
'Select'					=>	'Selecionar',
'Select all'				=>	'Selecionar todas',
'Unselect all'				=>	'Desselecionar todas',
'Ban'						=>	'Banir',
'Delete'					=>	'Excluir',
'Change group'				=>	'Alterar grupo',
'Bad IP message'			=>	'O endereço IP fornecido não está corretamente formatado.',
'Results view IP link'		=>	'Visualizar estatísticas de IP',
'Results show posts link'	=>	'Exibir mensagens',
'Results guest'				=>	'Visitante',
'Results no IP found'		=>	'O endereço IP fornecido não pode ser encontrado no banco de dados.',
'No match'					=>	'Nenhuma combinação'

);
