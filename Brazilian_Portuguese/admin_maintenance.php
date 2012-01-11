<?php

// Language definitions used in admin_maintenance.php
$lang_admin_maintenance = array(

'Maintenance head'				=>	'Manutenção do fórum',
'Rebuild index subhead'			=>	'Reconstruir índice de pesquisa',
'Rebuild index info'			=>	'Se você adicionou, editou ou removeu mensagens manualmente no banco de dados ou se está tendo problemas com pesquisas, você deve reconstruir o índice de pesquisa. Para melhor performance, você deve colocar o fórum em %s durante a reconstrução. <strong>Reconstruir o índice de pesquisa pode tomar muito tempo e irá aumentar a carga do servidor durante o processo de reconstrução!</strong>',
'Posts per cycle label'			=>	'Mensagens por ciclo',
'Posts per cycle help'			=>	'O número de mensagens processadas por vez. Ex. se você digitar 300, trezentas mensagens serão processadas e então a página será atualizada. Isto é necessário para evitar que o script exceda o tempo limite durante o processo de reconstrução.',
'Starting post label'			=>	'ID da mensagem inicial',
'Starting post help'			=>	'O ID da mensagem de onde será iniciada a reconstrução. O valor padrão é o primeiro ID disponível no banco de dados. Normalmente você não desejaria mudar isso.',
'Empty index label'				=>	'Esvaziar índice',
'Empty index help'				=>	'Selecione isto se deseja que o índice seja esvaziado antes da reconstrução (veja abaixo).',
'Rebuild completed info'		=>	'Uma vez que o processo for completado, você será redirecionado novamente para esta página. É altamente recomendado que você tenha JavaScript ativado em seu navegador durante a reconstrução (para o redirecionamento automático quando o ciclo for completado). Se você for forçado a abortar o processo de reconstrução, anote a ID da última mensagem processada e use tal ID+1 no "ID da mensagem inicial" quando/se quiser continuar ("Esvaziar índice" deve estar desativado).',
'Rebuild index'					=>	'Reconstruir índice',
'Rebuilding search index'		=>	'Reconstruindo índice de pesquisa',
'Rebuilding index info'			=>	'Reconstruindo índice. É uma boa hora para ir tomar um café :-)',
'Processing post'				=>	'Processando mensagem <strong>%s</strong> …',
'Click here'					=>	'Clique aqui',
'Javascript redirect failed'	=>	'Redirecionamento JavaScript falhou. %s para continuar …',
'Posts must be integer message'	=>	'Mensagens por ciclo deve ser um valor integral positivo.',
'Days must be integer message'	=>	'Dias a expurgar deve ser um valor integral positivo.',
'No old topics message'			=>	'Não existem tópicos de %s dias atrás. Por favor, reduza o valor de "Dias atrás" e tente novamente.',
'Posts pruned redirect'			=>	'Mensagens expurgadas. Redirecionando …',
'Prune head'					=>	'Expurgar',
'Prune subhead'					=>	'Expurgar mensagens antigas',
'Days old label'				=>	'Dias atrás',
'Days old help'					=>	'O número de dias "atrás" para que um tópico seja expurgado. Ex. se você digitar 30, todos os tópicos que não contenham uma mensagem em menos de 30 dias serão excluídos.',
'Prune sticky label'			=>	'Expurgar tópicos fixos',
'Prune sticky help'				=>	'Quando ativo, tópicos fixos também serão expurgados.',
'Prune from label'				=>	'Expurgar do fórum',
'All forums'					=>	'Todos os fóruns',
'Prune from help'				=>	'O fórum do qual você deseja expurgar mensagens.',
'Prune info'					=>	'Use esta função com cuidado. <strong>Mensagens expurgadas não podem ser recuperadas.</strong> Para melhor performance, você deve colocar o fórum em %s durante o processo.',
'Confirm prune subhead'			=>	'Confirmar expurgo de mensagens',
'Confirm prune info'			=>	'Tem certeza que deseja expurgar todos os tópicos mais antigos que %s dias de %s (%s tópicos).',
'Confirm prune warn'			=>	'AVISO! Expurgar mensagens as excluirá permanentemente.',


);
