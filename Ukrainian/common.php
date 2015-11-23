<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'		=>		'ltr',	// ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'		=>		'ua',	

// Number formatting
'lang_decimal_point'		=>		'.',	
'lang_thousands_sep'		=>		',',	

// Notices
'Bad request'		=>		'Неправильний запит. Посилання помилкове або застаріле.',	
'No view'		=>		'У Вас немає прав для перегляду цього форуму.',	
'No permission'		=>		'У Вас немає прав для перегляду цієї сторінки.',	
'Bad referrer'		=>		'Неправильний HTTP_REFERER. Ви перейшли на цю сторінку з неавторизованого джерела. Якщо проблема постійна, переконайтеся, що параметр \'Base URL\' правильно прописаний в Адмінка/Опції і що Ви зайшли на форум саме за таким URL. Додаткову інформацію Ви можете отримати з документації FluxBB.',	
'Bad csrf hash'		=>	'Невірний CSRF хеш. Ви перейшли на цю сторінку з несанкціонованого джерела.',
'No cookie'		=>		'Ви увійшли, але куки не були встановлені. Будь-ласка, перевірте Ваші налаштування і, якщо можливо, дозвольте куки для цього сайту.',	
'Pun include extension'		=>		'Неможливо підключити файл %s з шаблону %s. Файли "%s" неприпустимі',	
'Pun include directory'		=>		'Неможливо підключити файл %s з шаблону %s. Вхід у каталог заборонено',	
'Pun include error'		=>		'Неможливо підключити файл %s з шаблону %s. Немає такого файлу в %s.',	

// Miscellaneous
'Announcement'		=>		'Оголошення',	
'Options'		=>		'Параметри',	
'Submit'		=>		'Надіслати',	// "Name" of submit buttons
'Ban message'		=>		'Ви забанені.',	
'Ban message 2'		=>		'Бан закінчується',	
'Ban message 3'		=>		'Адмін чи модератор забанили Вас з таким формулюванням:',	
'Ban message 4'		=>		'Всі питання надсилайте адміністратору форуму за адресою',	
'Never'		=>		'Ніколи',	
'Today'		=>		'Сьогодні',	
'Yesterday'		=>		'Вчора',	
'Info'		=>		'Інформація',	// A common table header
'Go back'		=>		'Назад',	
'Maintenance'		=>		'Обслуговування',	
'Redirecting'		=>		'Перенаправлення',	
'Click redirect'		=>		'Клікніть тут, якщо Ви не бажаєте чекати (чи Ваш оглядач не підтримує перенаправлення).',	
'on'		=>		'увімк.',	// As in "BBCode is on"
'off'		=>		'вимк.',	
'Invalid email'		=>		'Ви ввели неправильний e-mail.',	
'Required'		=>		'(Обов\'язково)',	
'required field'		=>		'-- обов\\\'язкове поле в цій формі.',	// For javascript form validation
'Last post'		=>		'Останнє повідомлення',	
'by'		=>		'від',	// As in last post by some user
'New posts'		=>		'Нові&nbsp;повідомлення',	// The link that leads to the first new post
'New posts info'		=>		'Перейти до нового повідомлення в цій темі.',	// The popup text for new posts links
'Username'		=>		'Нікнейм',	
'Password'		=>		'Пароль',	
'Email'		=>		'E-mail',	
'Send email'		=>		'Надіслати e-mail',	
'Moderated by'		=>		'Модерує',	
'Registered'		=>		'Дата реєстрації',	
'Subject'		=>		'Заголовок теми',	
'Message'		=>		'Повідомлення',	
'Topic'		=>		'Тема',	
'Forum'		=>		'Розділ',	
'Posts'		=>		'Повідомлень',	
'Replies'		=>		'Відповідей',	
'Pages'		=>		'Сторінки',	
'Page'		=>		'Сторінка %s',	
'BBCode'		=>		'BBCode',	// You probably shouldn't change this
'url tag'		=>		'Теґи [url]',	
'img tag'		=>		'Теґи [img]',	
'Smilies'		=>		'Смайлики',	
'and'		=>		'і',	
'Image link'		=>		'картинка',	// This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'		=>		'пише:',	// For [quote]'s
'Mailer'		=>		'Поштовий робот %s',	// As in "MyForums Mailer" in the signature of outgoing emails
'Important information'		=>		'Важлива інформація',	
'Write message legend'		=>		'Введіть повідомлення і натисніть Надіслати',	
'Previous'		=>		'Назад',	
'Next'		=>		'Вперед',	
'Spacer'		=>		'&hellip;',	// Ellipsis for paginate

// Title
'Title'		=>		'Титул',	
'Member'		=>		'Учасник',	// Default title
'Moderator'		=>		'Модератор',	
'Administrator'		=>		'Адміністратор',	
'Banned'		=>		'Забанений',	
'Guest'		=>		'Гість',	

// Stuff for include/parser.php
'BBCode error no opening tag'		=>		'Виявлено [/%1$s] без відповідного [%1$s]',	
'BBCode error invalid nesting'		=>		'[%1$s] відкривається всередині [%2$s], це неприпустимо',	
'BBCode error invalid self-nesting'		=>		'[%s] відкривається всередині такого ж тега, це неприпустимо',	
'BBCode error no closing tag'		=>		'Виявлено [%1$s] без відповідного [/%1$s]',	
'BBCode error empty attribute'		=>		'Тег [%s] з порожнім атрибутом',	
'BBCode error tag not allowed'		=>		'Вам не дозволено використовувати теґ [%s]',	
'BBCode error tag url not allowed'		=>		'Вам не дозволено вставляти посилання',	
'BBCode list size error'		=>		'Ваш список завеликий, будь-ласка, зменшіть його!',	

// Stuff for the navigator (top of every page)
'Index'		=>		'Форум',	
'User list'		=>		'Користувачі',	
'Rules'		=>		'Правила',	
'Search'		=>		'Пошук',	
'Register'		=>		'Реєстрація',	
'Login'		=>		'Вхід',	
'Not logged in'		=>		'Ви не увійшли.',	
'Profile'		=>		'Профіль',	
'Logout'		=>		'Вихід',	
'Logged in as'		=>		'Увійшли як',	
'Admin'		=>		'Адмінка',	
'Last visit'		=>		'Останній візит: %s',	
'Topic searches'		=>		'Теми:',	
'New posts header'		=>		'Нові',	
'Active topics'		=>		'Активні',	
'Unanswered topics'		=>		'Без відповіді',	
'Posted topics'		=>		'З Вашою участю',	
'Show new posts'		=>		'Знайти теми з новими повідомленнями.',	
'Show active topics'		=>		'Знайти теми з нещодавніми повідомленнями.',	
'Show unanswered topics'		=>		'Знайти теми без відповідей.',	
'Show posted topics'		=>		'Знайти теми з Вашою участю.',	
'Mark all as read'		=>		'Позначити все як прочитане',	
'Mark forum read'		=>		'Позначити розділ як прочитаний',	
'Title separator'		=>		' / ',	

// Stuff for the page footer
'Board footer'		=>		'Підвал форуму',	
'Jump to'		=>		'Перейти',	
'Go'		=>		' Вперед',	// Submit button in forum jump
'Moderate topic'		=>		'Модерувати тему',	
'All'		=>		'Всі',	
'Move topic'		=>		'Перенести тему',	
'Open topic'		=>		'Відкрити тему',	
'Close topic'		=>		'Закрити тему',	
'Unstick topic'		=>		'Відкріпити тему',	
'Stick topic'		=>		'Закріпити тему',	
'Moderate forum'		=>		'Модерувати розділ',	
'Powered by'		=>		'Під керуванням %s',	

// Debug information
'Debug table'		=>		'Відлагоджувальна таблиця',	
'Querytime'		=>		'Згенеровано за %1$s сек, %2$s запитів виконано',	
'Memory usage'		=>		'Використано пам\'яті: %1$s',	
'Peak usage'		=>		'(Пік: %1$s)',	
'Query times'		=>		'Час (s)',	
'Query'		=>		'Запит',	
'Total query time'		=>		'Разом час виконання запитів: %s',	

// For extern.php RSS feed
'RSS description'		=>		'Найсвіжіші теми на %s.',	
'RSS description topic'		=>		'Найсвіжіші повідомлення в %s.',	
'RSS reply'		=>		'Re: ',	// The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'		=>		'RSS активних тем',	
'Atom active topics feed'		=>		'Atom активних тем',	
'RSS forum feed'		=>		'RSS розділу',	
'Atom forum feed'		=>		'Atom розділу',	
'RSS topic feed'		=>		'RSS теми',	
'Atom topic feed'		=>		'Atom теми',	

// Admin related stuff in the header
'New reports'		=>		'Є нові скарги',	
'Maintenance mode enabled'		=>		'Увімкнено режим обслуговування!',	

// Units for file sizes
'Size unit B'		=>		'%s байт',	
'Size unit KiB'		=>		'%s Кбайт',	
'Size unit MiB'		=>		'%s Мбайт',	
'Size unit GiB'		=>		'%s Гбайт',	
'Size unit TiB'		=>		'%s Тбайт',	
'Size unit PiB'		=>		'%s Пбайт',	
'Size unit EiB'		=>		'%s Ебайт',	

);
