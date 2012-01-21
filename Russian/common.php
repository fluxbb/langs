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
'Bad request'						=>	'Неверный запрос. Ссылка, по которой вы перешли, является неверной или просроченной.',
'No view'							=>	'У вас нет прав для просмотра форума.',
'No permission'						=>	'У вас нет прав для доступа к странице.',
'Bad referrer'						=>	'Неверный HTTP_REFERER. Вы перешли на страницу из несанкционированного источника. Если проблема повторяется, убедитесь, что «Основной URL-адрес» верно прописан на странице Администрирование/Опции, и вы обращаетесь к форуму по указанному в настройках адресу. Дополнительную информацию вы можете получить из документации к FluxBB.',
'No cookie'							=>	'Вы успешно вошли, но куки (cookie) не были установлены. Проверьте настройки своего браузера и, если есть возможность, включите куки для сайта.',
'Pun include error'					=>	'Невозможно подключить %s из шаблона %s. Ни в одной из папок с шаблонами нет запрашиваемого файла.',

// Miscellaneous
'Announcement'						=>	'Объявление',
'Options'							=>	'Опции',
'Submit'							=>	'Отправить', // "Name" of submit buttons
'Ban message'						=>	'Ваша учетная запись заблокирована.',
'Ban message 2'						=>	'Срок истечения блокировки',
'Ban message 3'						=>	'Причина блокирования:',
'Ban message 4'						=>	'Все возникшие вопросы направляйте администратору на почтовый адрес',
'Never'								=>	'Нет',
'Today'								=>	'Сегодня',
'Yesterday'							=>	'Вчера',
'Info'								=>	'Информация', // A common table header
'Go back'							=>	'Вернуться',
'Maintenance'						=>	'Обслуживание',
'Redirecting'						=>	'Перенаправление',
'Click redirect'					=>	'Кликните сюда, если не желаете больше ждать (или браузер не поддерживает автоматическое перенаправление)',
'on'								=>	'вкл.', // As in "BBCode is on"
'off'								=>	'выкл.',
'Invalid email'						=>	'Указанный почтовый адрес неверен.',
'Required'							=>	'(Обязательно)',
'required field'					=>	'обязательное поле формы.', // For javascript form validation
'Last post'							=>	'Последнее сообщение',
'by'								=>	'от', // As in last post by someuser
'New posts'							=>	'Новые', // The link that leads to the first new post
'New posts info'					=>	'Перейти к первому новому сообщению в теме.', // The popup text for new posts links
'Username'							=>	'Имя пользователя',
'Password'							=>	'Пароль',
'Email'								=>	'Email',
'Send email'						=>	'Отправить письмо',
'Moderated by'						=>	'Модераторы:',
'Registered'						=>	'Зарегистрирован',
'Subject'							=>	'Тема',
'Message'							=>	'Сообщение',
'Topic'								=>	'Тема',
'Forum'								=>	'Форум',
'Posts'								=>	'Сообщений',
'Replies'							=>	'Ответов',
'Pages'								=>	'Страницы:',
'Page'								=>	'Страница %s',
'BBCode'							=>	'BB-код:', // You probably shouldn't change this
'img tag'							=>	'[img] тег:',
'Smilies'							=>	'Смайлики:',
'and'								=>	'и',
'Image link'						=>	'image', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'написал ранее:', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Важная информация',
'Write message legend'				=>	'Напишите сообщение и отправьте',
'Previous'							=>	'Предыдущая',
'Next'								=>	'Следующая',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Звание/ранг',
'Member'							=>	'Участник', // Default title
'Moderator'							=>	'Модератор',
'Administrator'						=>	'Администратор',
'Banned'							=>	'Заблокированный',
'Guest'								=>	'Гость',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'Обнаружен парный тег [/%1$s] без соответствующего начального тега [%1$s]',
'BBCode error invalid nesting'		=>	'Тег [%1$s] открывается внутри [%2$s], это недопустимо',
'BBCode error invalid self-nesting'	=>	'Тег [%s] открыт внутри себе подобного, это недопустимо',
'BBCode error no closing tag'		=>	'Обнаружен парный тег [%1$s] без соответствующего закрывающего тега [/%1$s]',
'BBCode error empty attribute'		=>	'Обнаружен тег [%s] с пустым атрибутом',
'BBCode code problem'				=>	'Обнаружены проблемы с тегами [code]',
'BBCode list size error'			=>	'Созданный список слишком велик для обработки, сделайте его меньше!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Главная',
'User list'							=>	'Участники',
'Rules'								=>	'Правила',
'Search'							=>	'Поиск',
'Register'							=>	'Регистрация',
'Login'								=>	'Вход',
'Not logged in'						=>	'Вы не вошли.',
'Profile'							=>	'Профиль',
'Logout'							=>	'Выход',
'Logged in as'						=>	'Вошли как',
'Admin'								=>	'Управление',
'Last visit'						=>	'Последнее посещение: %s',
'Topic searches'					=>	'Темы:',
'New posts header'					=>	'Новые',
'Active topics'						=>	'Активные',
'Unanswered topics'					=>	'Без ответов',
'Posted topics'						=>	'Личные',
'Show new posts'					=>	'Найти обновленные темы с последнего визита.',
'Show active topics'				=>	'Найти активно обсуждаемые темы.',
'Show unanswered topics'			=>	'Найти темы без ответов.',
'Show posted topics'				=>	'Найти темы с вашим участием.',
'Mark all as read'					=>	'Отметить весь форум прочитанным',
'Mark forum read'					=>	'Отметить текущий форум прочитанным',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Board footer',
'Jump to'							=>	'Перейти в',
'Go'								=>	' Вперед ', // Submit button in forum jump
'Moderate topic'					=>	'Модерировать тему',
'Move topic'						=>	'Переместить тему',
'Open topic'						=>	'Открыть тему',
'Close topic'						=>	'Закрыть тему',
'Unstick topic'						=>	'Открепить тему',
'Stick topic'						=>	'Закрепить тему',
'Moderate forum'					=>	'Модерировать форум',
'Powered by'						=>	'Работает на %s.<br/> Перевод <a href="http://my.docs.ws/pages/FluxBB_RU_LNG" title="Русский языковой пакет для форума FluxBB">FluxBB RU</a>.',

// Debug information
'Debug table'						=>	'Отладочная информация',
'Querytime'							=>	'Сгенерировано за %1$s секунд, выполнено %2$s запросов',
'Memory usage'						=>	'Памяти используется: %1$s',
'Peak usage'						=>	'(Пик: %1$s)',
'Query times'						=>	'Time (s)',
'Query'								=>	'Query',
'Total query time'					=>	'Total query time: %s',

// For extern.php RSS feed
'RSS description'					=>	'Последние темы форума %s.',
'RSS description topic'				=>	'Последние сообщения из темы %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS лента активных тем',
'Atom active topics feed'			=>	'Atom лента активных тем',
'RSS forum feed'					=>	'RSS лента форума',
'Atom forum feed'					=>	'Atom лента форума',
'RSS topic feed'					=>	'RSS лента темы',
'Atom topic feed'					=>	'Atom лента темы',

// Admin related stuff in the header
'New reports'						=>	'Есть новые жалобы',
'Maintenance mode enabled'			=>	'Включен режим обслуживания!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
