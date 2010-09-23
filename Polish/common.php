<?php

// Language definitions for frequently used strings
// Polish (UTF-8 v1.4.2): kumiech [kumiech@gmail.com] (Polish FluxBB Support - fluxbb.orge.pl)
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'pl',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'Złe zapytanie. Podany link jest niepoprawny lub nieaktualny.',
'No view'							=>	'Nie posiadasz uprawnień do przeglądania tych for.',
'No permission'						=>	'Nie posiadasz uprawnień dostępu do tej strony.',
'Bad referrer'						=>	'Zły HTTP_REFERER. Próbowałeś uzyskać dostęp do tej strony z nieznanego źródła. Jeżeli problem będzie się powtarzał, sprawdź czy poprawnie wpisano adres w polu "Adres URL" w Administracja/Opcje. Więcej infomrmacji o systemie i problemach zawartych jest w dokumentacji FluxBB.',
'No cookie'							=>	'Wygląda na to, że zostałeś zalogowany poprawnie, jednak ciasteczka nie zostały zapisane. Sprzwdź ustawienia oraz włącz obsługę ciasteczek w swojej przeglądarce dla tej strony.',
'Pun include error'					=>	'Nie można przetworzyć %s z szablonu %s. Nie znaleziono pliku w %s.',

// Miscellaneous
'Announcement'						=>	'Ogłoszenie',
'Options'							=>	'Opcje',
'Submit'							=>	'Wyślij', // "Name" of submit buttons
'Ban message'						=>	'Twoje konto zostało zbanowane na tym forum.',
'Ban message 2'						=>	'Data wygaśnięcia bana: ',
'Ban message 3'						=>	'<br \>Administrator, bądź moderator, zostawił Tobie następującą wiadomość:',
'Ban message 4'						=>	'Wszelkie zapytania do Administratora proszę kierować na -',
'Never'								=>	'Nigdy',
'Today'								=>	'Dzisiaj',
'Yesterday'							=>	'Wczoraj',
'Info'								=>	'Informacja', // A common table header
'Go back'							=>	'Wstecz',
'Maintenance'						=>	'Konserwacja forum',
'Redirecting'						=>	'Przekierowywanie…',
'Click redirect'					=>	'Kliknij tutaj, jeśli nie chcesz dłużej czekać (albo jeśli Twoja przeglądarka nie obsługuje automatycznego przekierowywania).',
'on'								=>	'wł.', // As in "BBCode is on"
'off'								=>	'wył.',
'Invalid email'						=>	'Wprowadzony adres e-mail jest nieprawidłowy.',
'Required'							=>	'(Wymagane)',
'required field'					=>	'jest wymaganym polem do wypełnienia!', // For javascript form validation
'Last post'							=>	'Ostatni post',
'by'								=>	'przez', // As in last post by someuser
'New posts'							=>	'Nowe posty', // The link that leads to the first new post
'New posts info'					=>	'Przejdź do pierwszego nowego posta w tym wątku.', // The popup text for new posts links
'Username'							=>	'Nazwa użytkownika',
'Password'							=>	'Hasło',
'Email'								=>	'E-mail',
'Send email'						=>	'Wyślij e-mail',
'Moderated by'						=>	'Moderowane przez',
'Registered'						=>	'Data rejestracji',
'Subject'							=>	'Temat',
'Message'							=>	'Wiadomość',
'Topic'								=>	'Wątek',
'Forum'								=>	'Forum',
'Posts'								=>	'Posty',
'Replies'							=>	'Odpowiedzi',
'Pages'								=>	'Strony:',
'Page'								=>	'Strona %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'img tag'							=>	'Tag [img]:',
'Smilies'							=>	'Emoty:',
'and'								=>	'i',
'Image link'						=>	'obrazek', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'napisał/a:', // For [quote]'s
'Mailer'							=>	'Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Ważna informacja',
'Write message legend'				=>	'Wprowadź wiadomość i wyślij',
'Previous'							=>	'Poprzednia',
'Next'								=>	'Następna',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Ranga/Tytuł',
'Member'							=>	'Użytkownik', // Default title
'Moderator'							=>	'Moderator',
'Administrator'						=>	'Administrator',
'Banned'							=>	'Zbanowany',
'Guest'								=>	'Gość',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] - brakuje otwarcia tagu ([%1$s])',
'BBCode error invalid nesting'		=>	'Tag [%1$s] został otwarty za pomocą [%2$s], nie jest to dozwolone.',
'BBCode error invalid self-nesting'	=>	'Tag [%s] został otwarty wewnątrz siebie, nie jest to dozwolone.',
'BBCode error no closing tag'		=>	'[%1$s] - brakuje zamknięcia tagu ([/%1$s])',
'BBCode error empty attribute'		=>	'Brakuje odpowiedniego atrybutu dla tagu [%s] ',
'BBCode code problem'				=>	'Wystąpił problem z tagami [code]',
'BBCode list size error'			=>	'Twoja lista jest zbyt długa do przetworzenia, skróć ją!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Strona główna',
'User list'							=>	'Lista użytkowników',
'Rules'								=>	'Regulamin',
'Search'							=>	'Szukaj',
'Register'							=>	'Rejestracja',
'Login'								=>	'Logowanie',
'Not logged in'						=>	'Nie jesteś zalogowany na forum.',
'Profile'							=>	'Profil',
'Logout'							=>	'Wyloguj',
'Logged in as'						=>	'Zalogowany jako',
'Admin'								=>	'Administracja',
'Last visit'						=>	'Ostatnia wizyta: %s',
'Show new posts'					=>	'Pokaż nowe posty od ostatniej wizyty',
'Mark all as read'					=>	'Oznacz wszystkie wątki jako przeczytane',
'Mark forum read'					=>	'Oznacz to forum jako przeczytane',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Stopka',
'Search links'						=>	'Szukaj linków',
'Show recent posts'					=>	'Pokaż nowe posty',
'Show unanswered posts'				=>	'Pokaż posty bez odpowiedzi',
'Show your posts'					=>	'Pokaż moje posty',
'Show subscriptions'				=>	'Pokaż moje subskrybowane wątki',
'Jump to'							=>	'Skocz do',
'Go'								=>	' Idź ', // Submit button in forum jump
'Moderate topic'					=>	'Moderuj wątek',
'Move topic'						=>	'Przenieś wątek',
'Open topic'						=>	'Otwórz wątek',
'Close topic'						=>	'Zamknij wątek',
'Unstick topic'						=>	'Odklej wątek',
'Stick topic'						=>	'Przyklej wątek',
'Moderate forum'					=>	'Moderuj forum',
'Powered by'						=>	'Forum oparte na %s',

// Debug information
'Debug table'						=>	'Informacje debugowania',
'Querytime'							=>	'Wygenerowano w %1$s sekund, wykonano %2$s zapytań',
'Memory usage'						=>	'Pamięć użyta: %1$s',
'Peak usage'						=>	'(Maksimum: %1$s)',
'Query times'						=>	'Czas (sekundy)',
'Query'								=>	'Zapytanie',
'Total query time'					=>	'Całkowity czas: %s',

// Email related notifications
'New user notification'				=>	'Informacja - Nowy użytkownik',
'New user message'					=>	'Użytkownik \'%s\' zarejestrował się na forum %s',
'Banned email notification'			=>	'Informacja - Wykryto zbanowany adres e-mail',
'Banned email register message'		=>	'Użytkownik \'%s\' zarejestrował się za pomocą zbanowanego adresu e-amil: %s',
'Banned email change message'		=>	'Użytkownik \'%s\' zmienił swój adres e-mail na adres z listy zbanowanych: %s',
'Banned email post message'			=>	'Użytkownik \'%s\' napisał posta ze zbanowanym adresem e-mail: %s',
'Duplicate email notification'		=>	'Informacja - Wykryto zduplikowany adres e-mail',
'Duplicate email register message'	=>	'Użytkownik \'%s\' zarejestrował się za pomocą adresu e-mail, należącego również do: %s',
'Duplicate email change message'	=>	'Użytkownik \'%s\' zmienił swój adres e-mail na adres należący również do: %s',
'Report notification'				=>	'Raport(%d) - \'%s\'',
'Report message 1'					=>	'Użytkownik \'%s\' zaraportował następującą wiadomość: %s',
'Report message 2'					=>	'Powód: %s',

'User profile'						=>	'Profil użytkownika: %s',
'Post URL'							=>	'Adres do posta: %s',
'Email signature'					=>	'System mailingowy FluxBB'."\n".'(Wiadomość wysłana automatycznie, nie odpowiadaj na nią)',

// For extern.php RSS feed
'RSS description'					=>	'Najwięcej nowych wątków w %s.',
'RSS description topic'				=>	'Najwięcej nowych postów w %s.',
'RSS reply'							=>	'Odp: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS - aktywne wątki',
'Atom active topics feed'			=>	'Atom - aktywne wątki',
'RSS forum feed'					=>	'RSS - forum',
'Atom forum feed'					=>	'Atom - forum',
'RSS topic feed'					=>	'RSS - wątek',
'Atom topic feed'					=>	'Atom - wątek',

// Admin related stuff in the header
'New reports'						=>	'Masz nowe, nieprzeczytane raporty',
'Maintenance mode enabled'			=>	'Tryb konserwacji jest włączony!',

);