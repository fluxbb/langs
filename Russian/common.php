<?php
// Language definitions for frequently used strings
$lang_common = array(
// Text orientation and encoding
    'lang_direction'                    => 'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
    'lang_identifier'                   => 'ru',

// Number formatting
    'lang_decimal_point'                => '.',
    'lang_thousands_sep'                => ',',

// Notices
    'Bad request'                       => 'Неверный запрос. Ссылка ошибочна или устарела.',
    'No view'                           => 'У вас нет прав на просмотр этого форума.',
    'No permission'                     => 'У вас нет прав на просмотр этой страницы.',
    'Bad referrer'                      => 'Плохой HTTP_REFERER. Вы перешли на эту страницу из неавторизованного источника. Если проблема постоянная, убедитесь, что \'Base URL\' верно прописан в Admin/Options и что вы посещаете форум именно по такому URL. Дополнительную информацию вы можете получить из документации по FluxBB.',
    'Bad csrf hash'                     => 'Неверный CSRF хэш. Вы перешли на эту страницу из несанкционированного источника.',
    'No cookie'                         => 'Вы вошли, но cookie не были установлены. Пожалуйста, проверьте ваши настройки и, если возможно, разрешите cookie для этого сайта.',
    'Pun include extension'             => 'Невозможно выполнить вставку %s из шаблона %s. "%s" такие файлы недопустимы',
    'Pun include directory'             => 'Невозможно выполнить вставку %s из шаблона %s. Просмотр папки запрещен',
    'Pun include error'                 => 'Невозможно выполнить вставку %s из шаблона %s. Такого файла нет ни в папке шаблонов, ни в пользовательской папке',

// Miscellaneous
    'Announcement'                      => 'Объявление',
    'Options'                           => 'Параметры',
    'Submit'                            => 'Отправить', // "name" of submit buttons
    'Ban message'                       => 'Вы забанены.',
    'Ban message 2'                     => 'Бан заканчивается',
    'Ban message 3'                     => 'Администратор или модератор забанил вас с такой формулировкой:',
    'Ban message 4'                     => 'Все вопросы отправляйте администратору форума по адресу',
    'Never'                             => 'Никогда',
    'Today'                             => 'Сегодня',
    'Yesterday'                         => 'Вчера',
    'Info'                              => 'Информация', // a common table header
    'Go back'                           => 'Назад',
    'Maintenance'                       => 'Обслуживание',
    'Redirecting'                       => 'Перенаправление',
    'Click redirect'                    => 'Кликните здесь, если вы не желаете ждать (или ваш браузер не поддерживает перенаправление)',
    'on'                                => 'вкл', // as in "BBCode is on"
    'off'                               => 'выкл',
    'Invalid email'                     => 'Вы ввели неправильный e-mail.',
    'Required'                          => '(Обязательно)',
    'required field'                    => 'необходимое поле в этой форме.', // for javascript form validation
    'Last post'                         => 'Последнее сообщение',
    'by'                                => 'от', // as in last post by someuser
    'New posts'                         => 'Новые&nbsp;сообщения', // the link that leads to the first new post (use &nbsp; for spaces)
    'New posts info'                    => 'Перейти к новому сообщению в этой теме.', // the popup text for new posts links
    'Username'                          => 'Имя',
    'Password'                          => 'Пароль',
    'Email'                             => 'E-mail',
    'Send email'                        => 'Отправить e-mail',
    'Moderated by'                      => 'Модерируется',
    'Registered'                        => 'Зарегистрирован',
    'Subject'                           => 'Заголовок темы',
    'Message'                           => 'Сообщение',
    'Topic'                             => 'Тема',
    'Forum'                             => 'Раздел',
    'Posts'                             => 'Сообщений',
    'Replies'                           => 'Ответов',
    'Pages'                             => 'Страницы',
    'Page'                              => 'Страница %s',
    'BBCode'                            => 'BBCode', // You probably shouldn't change this
    'url tag'                           => 'тег [url]:',
    'img tag'                           => 'тег [img]:',
    'Smilies'                           => 'Смайлики:',
    'and'                               => 'и',
    'Image link'                        => 'картинка', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
    'wrote'                             => 'пишет:', // For [quote]'s
    'Mailer'                            => 'Робот %s', // As in "MyForums Mailer" in the signature of outgoing e-mails
    'Important information'             => 'Важная информация',
    'Write message legend'              => 'Введите сообщение и нажмите «Отправить»',
    'Previous'                          => 'Назад',
    'Next'                              => 'Вперед',
    'Spacer'                            => '…', // Ellipsis for paginate

// Title
    'Title'                             => 'Звание',
    'Member'                            => 'Участник', // Default title
    'Moderator'                         => 'Модератор',
    'Administrator'                     => 'Администратор',
    'Banned'                            => 'Забанен',
    'Guest'                             => 'Гость',

// Stuff for include/parser.php
    'BBCode error no opening tag'       => 'Обнаружен [/%1$s] без соответствующего [%1$s]',
    'BBCode error invalid nesting'      => '[%1$s] открывается внутри [%2$s], это недопустимо',
    'BBCode error invalid self-nesting' => '[%s] открывается внутри такого же тега, это недопустимо',
    'BBCode error no closing tag'       => 'Обнаружен [%1$s] без соответствующего [/%1$s]',
    'BBCode error empty attribute'      => 'Тег [%s] с пустым атрибутом',
    'BBCode error tag not allowed'      => 'Вы не можете использовать теги [%s]',
    'BBCode error tag url not allowed'  => 'Вы не можете использовать ссылки',
    'BBCode list size error'            => 'Ваш список слишком велик. Пожалуйста, уменьшите его!',

// Stuff for the navigator (top of every page)
    'Index'                             => 'Главная',
    'User list'                         => 'Участники',
    'Rules'                             => 'Правила',
    'Search'                            => 'Поиск',
    'Register'                          => 'Регистрация',
    'Login'                             => 'Вход',
    'Not logged in'                     => 'Вы не вошли.',
    'Profile'                           => 'Профиль',
    'Logout'                            => 'Выход',
    'Logged in as'                      => 'Вы',
    'Admin'                             => 'Управление',
    'Last visit'                        => 'Последнее посещение: %s',
    'Topic searches'                    => 'Темы:',
    'New posts header'                  => 'Новые',
    'Active topics'                     => 'Активные',
    'Unanswered topics'                 => 'Без ответов',
    'Posted topics'                     => 'Ваши',
    'Show new posts'                    => 'Найти темы с новыми сообщениями с вашего последнего визита.',
    'Show active topics'                => 'Найти темы со свежими сообщениями.',
    'Show unanswered topics'            => 'Найти темы без ответов.',
    'Show posted topics'                => 'Найти темы, где вы оставляли сообщения.',
    'Mark all as read'                  => 'Пометить всё как прочтённое',
    'Mark forum read'                   => 'Пометить раздел как прочтённый',
    'Title separator'                   => ' / ',

// Stuff for the page footer
    'Board footer'                      => 'Подвал раздела',
    'Jump to'                           => 'Перейти',
    'Go'                                => ' Перейти ', // submit button in forum jump
    'Moderate topic'                    => 'Модерировать тему',
    'All'                               => 'Все',
    'Move topic'                        => 'Перенести тему',
    'Open topic'                        => 'Открыть тему',
    'Close topic'                       => 'Закрыть тему',
    'Unstick topic'                     => 'Открепить тему',
    'Stick topic'                       => 'Закрепить тему',
    'Moderate forum'                    => 'Модерировать раздел',
    'Powered by'                        => 'Работает на %s (перевод <a href="http://laravel.ru">Laravel.ru</a>)',

// Debug information
    'Debug table'                       => 'Отладочная информация',
    'Querytime'                         => 'Сгенерировано за %1$s сек, %2$s запросов выполнено',
    'Memory usage'                      => 'Использовано памяти: %1$s',
    'Peak usage'                        => '(Пик: %1$s)',
    'Query times'                       => 'Время (s)',
    'Query'                             => 'Запрос',
    'Total query time'                  => 'Итого время выполнения запросов: %s',

// For extern.php RSS feed
    'RSS description'                   => 'Самые свежие темы на %s.',
    'RSS description topic'             => 'Самые свежие сообщения в %s.',
    'RSS reply'                         => 'Re: ', // The topic subject will be appended to this string (to signify a reply)
    'RSS active topics feed'            => 'RSS-лента активных тем',
    'Atom active topics feed'           => 'Atom-лента активных тем',
    'RSS forum feed'                    => 'RSS-лента раздела',
    'Atom forum feed'                   => 'Atom-лента раздела',
    'RSS topic feed'                    => 'RSS-лента темы',
    'Atom topic feed'                   => 'Atom-лента темы',

// Admin related stuff in the header
    'New reports'                       => 'Есть новые обращения',
    'Maintenance mode enabled'          => 'Включен режим обслуживания!',

// Units for file sizes
    'Size unit B'                       => '%s байт',
    'Size unit KiB'                     => '%s Кб',
    'Size unit MiB'                     => '%s Мб',
    'Size unit GiB'                     => '%s Гб',
    'Size unit TiB'                     => '%s Тб',
    'Size unit PiB'                     => '%s Пб',
    'Size unit EiB'                     => '%s Эб'
);
