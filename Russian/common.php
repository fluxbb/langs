<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'ru',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'			=>	'Неверный запрос. Ссылка ошибочная или устарела.',
'No view'				=>	'У вас нет прав на просмотр этого форума.',
'No permission'			=>	'У вас нет прав на просмотр этой страницы.',
'Bad referrer'			=>	'Плохой HTTP_REFERER. Вы перешли на эту страницу из неавторизованного источника. Если проблема постоянная, убедитесь, что \'Base URL\' верно прописан в Admin/Options и что вы посещаете форум именно по такому URL. Дополнительную информацию вы можете получить из документации FluxBB.',
'No cookie'				=>	'Вы вошли, но куки не были установлены. Пожалуйста проверьте ваши настройки и, если возможно, разрешите куки для этого сайта.',
'Pun include error'		=>	'Невозможно подключить файл %s из шаблона %s. Нет такого файла в %s.',

// Miscellaneous
'Announcement'			=>	'Объявление',
'Options'				=>	'Параметры',
'Submit'				=>	'Отправить',	// "name" of submit buttons
'Ban message'			=>	'Вы забанены.',
'Ban message 2'			=>	'Бан заканчивается',
'Ban message 3'			=>	'Админ или модератор забанили вас с такой формулировкой:',
'Ban message 4'			=>	'Все вопросы отправляйте администратору форума по адресу',
'Never'					=>	'Никогда',
'Today'					=>	'Сегодня',
'Yesterday'				=>	'Вчера',
'Info'					=>	'Инфо',		// a common table header
'Go back'				=>	'Назад',
'Maintenance'			=>	'Обслуживание',
'Redirecting'			=>	'Перенаправление',
'Click redirect'		=>	'Кликните здесь если вы не желаете ждать (или ваш браузер не поддерживает перенаправление)',
'on'					=>	'вкл',		// as in "BBCode is on"
'off'					=>	'выкл',
'Invalid email'			=>	'Вы ввели неправильный e-mail.',
'Required'				=>	'(Обязательно)',
'required field'		=>	'необходимое поле в этой форме.',	// for javascript form validation
'Last post'				=>	'Последнее сообщение',
'by'					=>	'от',	// as in last post by someuser
'New posts'				=>	'Новые&nbsp;сообщения',	// the link that leads to the first new post (use &nbsp; for spaces)
'New posts info'		=>	'Перейти к новому сообщению в этой теме.',	// the popup text for new posts links
'Username'				=>	'Имя',
'Password'				=>	'Пароль',
'Email'					=>	'E-mail',
'Send email'			=>	'Отправить e-mail',
'Moderated by'			=>	'Модерируется',
'Registered'			=>	'Здесь с',
'Subject'				=>	'Заголовок темы',
'Message'				=>	'Сообщение',
'Topic'					=>	'Тема',
'Forum'					=>	'Доска',
'Posts'					=>	'Сообщений',
'Replies'				=>	'Ответов',
'Pages'					=>	'Страницы',
'Page'					=>	'Страница %s',
'BBCode'				=>	'BBCode',	// You probably shouldn't change this
'img tag'				=>	'[img] tag',
'Smilies'				=>	'Смайлики',
'and'					=>	'и',
'Image link'			=>	'картинка',	// This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'					=>	'пишет',	// For [quote]'s
'Mailer'				=>	'Отправитель',	// As in "MyForums Mailer" in the signature of outgoing e-mails
'Important information'	=>	'Важная информация',
'Write message legend'	=>	'Введите сообщение и нажмите Отправить',
'Previous'				=>	'Назад',
'Next'					=>	'Вперед',
'Spacer'				=>	'&hellip;', // Ellipsis for paginate

// Title
'Title'					=>	'Титул',
'Member'				=>	'Участник',	// Default title
'Moderator'				=>	'Модератор',
'Administrator'			=>	'Администратор',
'Banned'				=>	'Забанен',
'Guest'					=>	'Гость',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'Обнаружен [/%1$s] без соответствующего [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] открывается внутри [%2$s], это недопустимо',
'BBCode error invalid self-nesting'	=>	'[%s] открывается внутри такого же тега, это недопустимо',
'BBCode error no closing tag'		=>	'Обнаружен [%1$s] без соответствующего [/%1$s]',
'BBCode error empty attribute'		=>	'Тег [%s] с пустым атрибутом',
'BBCode code problem'				=>	'Проблемы с вашим тегом [code]',
'BBCode list size error'			=>	'Ваш список слишком велик, пожалуйста уменьшите его!',

// Stuff for the navigator (top of every page)
'Index'					=>	'Форум',
'User list'				=>	'Пользователи',
'Rules'					=>  'Правила',
'Search'				=>  'Поиск',
'Register'				=>  'Регистрация',
'Login'					=>  'Вход',
'Not logged in'			=>  'Вы не вошли.',
'Profile'				=>	'Профиль',
'Logout'				=>	'Выход',
'Logged in as'			=>	'Вошли как',
'Admin'					=>	'Админка',
'Last visit'			=>	'Последний визит: %s',
'Show new posts'		=>	'Новые сообщения',
'Mark all as read'		=>	'Пометить всё как прочтённое',
'Mark forum read'		=>	'Пометить доску как прочтённую',
'Title separator'		=>	' / ',

// Stuff for the page footer
'Board footer'			=>	'Подвал доски',
'Search links'			=>	'Поисковые ссылки',
'Show recent posts'		=>	'Активные темы',
'Show unanswered posts'	=>	'Темы без ответов',
'Show your posts'		=>	'Показать ваши сообщения',
'Show subscriptions'	=>	'Показать темы из вашей подписки',
'Jump to'				=>	'Перейти',
'Go'					=>	' Иди ',		// submit button in forum jump
'Moderate topic'		=>	'Модерировать тему',
'Move topic'			=>  'Перенести тему',
'Open topic'			=>  'Открыть тему',
'Close topic'			=>  'Закрыть тему',
'Unstick topic'			=>  'Отклеить тему',
'Stick topic'			=>  'Приклеить тему',
'Moderate forum'		=>	'Модерировать доску',
'Powered by'			=>	'Под управлением %s',

// Debug information
'Debug table'			=>	'Отладочная информация',
'Querytime'				=>	'Сгенерировано за %1$s сек, %2$s запросов выполнено',
'Memory usage'			=>	'Использовано памяти: %1$s',
'Peak usage'			=>	'(Пик: %1$s)',
'Query times'			=>	'Время (s)',
'Query'					=>	'Запрос',
'Total query time'		=>	'Итого время выполнения запросов: %s',

// Email related notifications
'New user notification'				=>	'Оповещение - Новая регистрация',
'New user message'					=>	'Пользователь \'%s\' зарегистрировался на форуме в %s',
'Banned email notification'			=>	'Оповещение - Обнаружен забаненный e-mail',
'Banned email register message'		=>	'Пользователь \'%s\' зарегистрировался с забаненным e-mail: %s',
'Banned email change message'		=>	'Пользователь \'%s\' сменил e-mail на забаненный адрес: %s',
'Banned email post message'			=>	'Пользователь \'%s\' написал указав забаненный email: %s',
'Duplicate email notification'		=>	'Оповещение - Обнаружен повторяющийся e-mail',
'Duplicate email register message'	=>	'Пользователь \'%s\' зарегистрировался с e-mail, который также принадлежит: %s',
'Duplicate email change message'	=>	'Пользователь \'%s\' сменил e-mail на адрес, который уже принадлежит: %s',
'Report notification'				=>	'Сигнал(%d) - \'%s\'',
'Report message 1'					=>	'Пользователь \'%s\' оставил следующий сигнал: %s',
'Report message 2'					=>	'Причина: %s',

'User profile'						=>	'Профиль пользователя: %s',
'Post URL'							=>	'URL сообщения: %s',
'Email signature'					=>	'Почтовый робот'."\n".'(Не отвечайте на это сообщение)',

// For extern.php RSS feed
'RSS description'					=>	'Самые свежие темы на %s.',
'RSS description topic'				=>	'Самые свежие сообщения в %s.',
'RSS reply'							=>	'Re: ',	// The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS активных тем',
'Atom active topics feed'			=>	'Atom активных тем',
'RSS forum feed'					=>	'RSS доски',
'Atom forum feed'					=>	'Atom доски',
'RSS topic feed'					=>	'RSS тем',
'Atom topic feed'					=>	'Atom тем',

// Admin related stuff in the header
'New reports'						=>	'Есть новые сингалы',
'Maintenance mode enabled'			=>	'Включен режим обслуживания!',

);
