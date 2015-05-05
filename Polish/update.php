<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'Aktualizacja FluxBB',
'Update message'				=>	'Twoja instalacja FluxBB nie jest aktualna i musi zostać zaktualizowana, aby można było dalej korzystać z forum. Jeśli jesteś administratorem tego forum, wykonaj poniższe instrukcje, aby je zaktualizować.',
'Note'							=>	'Informacja:',
'Members message'				=>	'Proces aktualizacji dostępny jest jedynie dla Administratorów. Jeśli jesteś użytkownikiem, nie musisz się o nic martwić - forum powróci wkrótce!',
'Administrator only'			=>	'Krok ten dostępny jest jedynie dla Administratora!',
'Database password info'		=>	'W celu wykonania aktualizacji FluxBB, wpisz hasło bazy danych, gdzie zainstalowany jest FluxBB. Jeśli nie możesz przypomnieć sobie hasła do bazy, sprawdź je w pliku \'config.php\'.',
'Database password note'		=>	'Jeśli korzystasz z bazy danych SQLite (bez hasła bazy danych), w tym przypadku należy wpisać nazwę bazy danych. Nazwa ta musi dokładnie odpowiadać nazwie zapisanej w pliku konfiguracyjnym.',
'Database password'				=>	'Hasło bazy danych',
'Maintenance'					=>	'Tryb konserwacji',
'Maintenance message info'		=>	'Informacja wyświetlana dla użytkowników podczas procesu aktualizacji. Teskt ten nie będzie przetwarzany jak posty, zatem może zawierać kod HTML.',
'Maintenance message'		    =>	'Wiadomość',

'You are running error'			=>	'Na serwerze uruchomiony jest %1$s w wersji %2$s. FluxBB %3$s wymaga co najmniej %1$s %4$s, aby działać poprawnie. Musisz zaktualizować %1$s do nowszej wersji, aby kontynuować.',
'Version mismatch error'		=>	'Niezgodność wersji. Baza danych \'%s\' nie jest uruchomiona zgodnie ze schematem bazy FluxBB wpieranym przez ten skrypt aktualizacyjny.',
'Invalid file error'			=>	'Niepoprawna nazwa pliku bazy danych. Nazwa pliku bazy SQLite musi być dokładnie taka sama, jak zapisana w pliku \'%s\'',
'Invalid password error'		=>	'Niepoprawne hasło bazy danych. Hasło bazy danych musi być dokładnie takie samo, jak zapisane w pliku \'%s\'',
'No password error'				=>	'Hasło bazy danych nie jest wymagane',
'Script runs error'				=>	'Wydaje się, że skrypt aktualizacyjny został już uruchomiony. Jeśli nie, to ręcznie usuń plik \'%s\' i spróbuj ponownie',
'No update error'				=>	'Na forum zainstalowana jest aktualnie najnowsza dostępna wersja FluxBB',

'Intro 1'						=>	'Skrypt ten zaktualizuje bazę danych forum. Proces aktualizacji może zająć od kilku sekund do kilku godzin, w zależności od szybkości serwera i rozmiaru bazy danych. Przed kontynuowaniem nie zapomnij wykonać kopii bazy danych.',
'Intro 2'						=>	'Czy zapoznałeś się z instrukcjami aktualizacji zawartymi w dokumentacji? Jeśli nie, to je przeczytaj.',
'No charset conversion'			=>	'<strong>OSTRZEŻENIE!</strong> FluxBB wykrył, że środowisko PHP na serwerze nie wpsiera mechanizmu kodowania wymaganego do konwersji znaków do UTF-8 z zestawu znaków innego niż ISO-8859-1. Oznacza to, że jeśli aktualny zestaw znaków jest inny niż ISO-8859-1, FluxBB nie ma możliwości przekonwertowania bazy danych forum na UTF-8 i należy zrobić to ręcznie. Instrukcje ręcznej konwersji znaków można znaleźć w instrukcjach aktualizacji.',
'Enable conversion'				=>	'<strong>Włącz konwersję:</strong> Kiedy funkcja jest włączona, skrypt aktualizacyjny dokona konwersji wszystkich tekstów w bazie z aktualnego kodowania znaków na UTF-8, po wykonaniu zmian struktury w bazie danych. Konwersja ta jest wymagana jeśli aktualizacja wykonywana jest z FluxBB v1.2.',
'Current character set'			=>	'<strong>Aktualne zestaw znaków:</strong> Jeśli podstawowym językiem forum jest język angielski, można pozostawić domyślną wartość. W przeciwnym razie należy wprowadzić odpowiednie kodowanie znaków dla danego języka wykorzystywanego na forum. <em>Wybranie nieodpowiedniego kodowania może doprowadzić do uszkodzenia bazy danych, więc należy się wcześniej upewnić!</em> Informacja: Konwersja wymagana jest również dla starych baz danych z kodowaniem UTF-8.',
'Charset conversion'			=>	'Konwersja kodowania znaków',
'Enable conversion label'		=>	'<strong>Włącz konwersję</strong> (wykonanie konwersji kodowania znaków bazy danych).',
'Current character set label'	=>	'Aktualny zestaw znaków',
'Current character set info'	=>	'Dla języka angielskiego pozostaw domyślne kodowanie znaków, w przeciwnym razie wybierz kodowanie przeznaczone dla wybranego języka forum.',
'Start update'					=>	'Rozpocznij aktualizację',
'Error converting users'		=>	'Błąd konwertowania użytkowników',
'Error info 1'					=>	'Wystąpił błąd podczas konwertowania użytowników. Błąd ten mógł wystąpić podczas konwersji z FluxBB v1.2 jeśli wielu użytkowników zarejestrowanych jest z podobnymi nazwami, np. "bob" i "böb".',
'Error info 2'					=>	'Poniżej znajduje się lista użytkowników, którzy nie zostali poprawnie skonwertowani. Wybierz nowe nazwy dla każdego użytkownika z osobna. Użytownicy, którym zostały zmienione nazwy, zostaną automatycznie powiadomieni wiadomością e-mail. ',
'New username'					=>	'Nowa nazwa użytkownika',
'Required'						=>	'(Wymagane)',
'Correct errors'				=>	'Następujące błędy powinny zostać poprawione:',
'Rename users'					=>	'Zmiana nazw użytkowników',
'Successfully updated'			=>	'Twoje forum zostało pomyślnie zaktualizowane! Teraz możesz %s.',
'go to index'					=>	'przejść do strony głównej forum',

'Unable to lock error'			=>	'Błąd aktualizacji. Upewnij się, że PHP ma prawa zapisu do katalogu \'%s\' oraz nikt inny nie uruchomił już skryptu aktualizacyjnego.',

'Converting'					=>	'Konwertowanie %s …',
'Converting item'				=>	'Konwertowanie %1$s %2$s …',
'Preparsing item'				=>	'Przetwarzanie %1$s %2$s …',
'Rebuilding index item'			=>	'Przebudowywanie indeksu dla %1$s %2$s',

'ban'							=>	'bana',
'categories'					=>	'kategorii',
'censor words'					=>	'cenzurowanych słów',
'configuration'					=>	'konfiguracji',
'forums'						=>	'for',
'groups'						=>	'grup',
'post'							=>	'posta',
'report'						=>	'raportu',
'topic'							=>	'wątku',
'user'							=>	'użytownika',
'signature'						=>	'sygnatury',

'Username too short error'		=>	'Nazwa użytkownika musi składać się z co najmniej 2 znaków. Wybierz inną (dłuższą) nazwę użytkownika.',
'Username too long error'		=>	'Nazwa użytkownika nie może składać się z więcej niż 25 znaków. Wybierz inną (krótszą) nazwę użytkownika.',
'Username Guest reserved error'	=>	'Nazwa użytkownika Gość (Guest) jest zastrzeżona. Wybierz inną nazwę użytkownika.',
'Username IP format error'		=>	'Nazwa użytkownika nie może mieć postaci adresu IP. Wybierz inną nazwę użytkownika.',
'Username bad characters error'	=>	'Nazwa użytkownika nie może zawierać znaków \', ", [ i ] jednocześnie. Wybierz inną nazwę użytkownika.',
'Username BBCode error'			=>	'Nazwa użytkownika nie może zawierać tagów BBCode. Wybierz inną nazwę użytkownika.',
'Username duplicate error'		=>	'Wprowadzona nazwa użytkownika %s jest podobna do nazwy innego użytkownika. Nazwa musi się różnić co najmniej jednym znakiem alfanumerycznym (a-z lub 0-9). Wybierz inną nazwę.',

);
