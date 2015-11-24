<?php

// Language definitions for frequently used strings
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
'Bad csrf hash'						=>	'Zły token CSRF. Próbowałeś uzyskać dostęp do tej strony z nieznanego źródła.',
'No cookie'							=>	'Wygląda na to, że zostałeś zalogowany poprawnie, jednak ciasteczka nie zostały zapisane. Sprzwdź ustawienia oraz włącz obsługę ciasteczek w swojej przeglądarce dla tej strony.',
'Pun include extension'				=>	'Nie można przetworzyć %s z szablonu %s. Pliki "%s" nie są dozwolone.',
'Pun include directory'   			=>	'Nie można przetworzyć %s z szablonu %s. Przeglądanie katalogu nie jest dozwolone.',
'Pun include error'					=>	'Nie można przetworzyć %s z szablonu %s. Nie znaleziono takiego pliku ani w katalogu /template, ani w katalogu /include.',

// Miscellaneous
'Announcement'						=>	'Ogłoszenie',
'Options'							=>	'Opcje',
'Submit'							=>	'Wyślij', // "Name" of submit buttons
'Ban message'						=>	'Twoje konto zostało zbanowane.',
'Ban message 2'						=>	'Data wygaśnięcia bana: ',
'Ban message 3'						=>	'<br />Administrator, bądź moderator, zostawił Tobie następującą wiadomość:',
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
'by'								=>	'przez', // As in last post by some user
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
'url tag'							=>	'Tag [url]:',
'img tag'							=>	'Tag [img]:',
'Smilies'							=>	'Emoty:',
'and'								=>	'i',
'Image link'						=>	'obrazek', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'napisał/a:', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Ważna informacja',
'Write message legend'				=>	'Wprowadź wiadomość i wyślij',
'Previous'							=>	'Poprzednia',
'Next'								=>	'Następna',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Tytuł',
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
'BBCode error tag not allowed'		=>	'Nie posiadasz uprawnień do używania tagów [%s].',
'BBCode error tag url not allowed'	=>	'Nie posiadasz uprawnień do dodawania linków w postach.',
'BBCode list size error'			=>	'Twoja lista jest zbyt długa do przetworzenia, skróć ją!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Forum',
'User list'							=>	'Użytkownicy',
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
'Topic searches'					=>	'Wątki:',
'New posts header'					=>	'Nowe',
'Active topics'						=>	'Aktywne',
'Unanswered topics'					=>	'Bez odpowiedzi',
'Posted topics'						=>	'Z odpowiedzią',
'Show new posts'					=>	'Pokaż nowe wątki od ostatniej wizyty',
'Show active topics'				=>	'Pokaż aktywne wątki',
'Show unanswered topics'			=>	'Pokaż wątki bez odpowiedzi',
'Show posted topics'				=>	'Pokaż wątki, w których odpowiadziałeś',
'Mark all as read'					=>	'Oznacz wszystkie wątki jako przeczytane',
'Mark forum read'					=>	'Oznacz to forum jako przeczytane',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Stopka',
'Jump to'							=>	'Skocz do',
'Go'								=>	' Idź ', // Submit button in forum jump
'Moderate topic'					=>	'Moderuj wątek',
'All'								=>  'Wszystkie posty',
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

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s kB',
'Size unit MiB'						=>	'%s MB',
'Size unit GiB'						=>	'%s GB',
'Size unit TiB'						=>	'%s TB',
'Size unit PiB'						=>	'%s PB',
'Size unit EiB'						=>	'%s EB',

);
