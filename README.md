<pre>
                                                                      interfejs użytkownika
1.	Strona główna:
o	Przedstawia główną stronę projektu, zawierającą mapę łowisk oraz sekcję „Nadchodzące Turnieje”. Widać, że mapa wyświetla lokalizacje, a poniżej znajduje się lista nadchodzących turniejów.
2.	Strona turniejów:
o	Przedstawia stronę z listą nadchodzących turniejów. Widać szczegóły turnieju, takie jak data, miejsce oraz opłata wpisowa.
3.	Strona profilu użytkownika:
o	Pokazuje stronę powitalną dla zalogowanego użytkownika Kamila. Widać sekcję „Twoje Połowy” z listą złowionych ryb i możliwością dodania nowego połowu.
4.	Strona logowania:
o	Strona logowania z prostym formularzem, w którym użytkownicy wpisują swoje dane logowania: e-mail oraz hasło, aby uzyskać dostęp do swoich profili.
5.	Strona rejestracji:
o	Strona rejestracji nowego użytkownika z formularzem wymagającym podania imienia, nazwiska, e-maila i hasła.



                                                                         Baza danych
1. Tabela catches:
  •	Przechowuje informacje o połowach użytkowników.
  •	Kolumny:
    o	id (INTEGER, PRIMARY KEY AUTOINCREMENT): Unikalny identyfikator połowu.
    o	user_id (INTEGER): Identyfikator użytkownika, który dodał połów (odniesienie do tabeli users).
    o	species_id (INTEGER): Identyfikator gatunku ryby (odniesienie do tabeli fish_species).
    o	weight (REAL): Waga złowionej ryby.
    o	length (REAL): Długość złowionej ryby.
    o	location_id (INTEGER): Identyfikator miejsca połowu (odniesienie do tabeli locations).
    o	photo (TEXT): Ścieżka do zdjęcia połowu.

2. Tabela fish_species:
  •	Przechowuje informacje o gatunkach ryb.
  •	Kolumny:
    o	id (INTEGER, PRIMARY KEY AUTOINCREMENT): Unikalny identyfikator gatunku ryby.
    o	name (TEXT): Nazwa gatunku ryby.
    o	description (TEXT): Opis gatunku ryby.
    o	tips (TEXT): Porady dotyczące połowu danego gatunku ryby.

3. Tabela locations:
  •	Przechowuje informacje o łowiskach, czyli miejscach połowu.
  •	Kolumny:
    o	id (INTEGER, PRIMARY KEY AUTOINCREMENT): Unikalny identyfikator miejsca połowu.
    o	name (TEXT): Nazwa łowiska.
    o	description (TEXT): Opis łowiska.
    o	fish_species (TEXT): Gatunki ryb, które można złowić na tym łowisku.
    o	best_times (TEXT): Najlepsze pory na połów w danym miejscu.
4. Tabela sqlite_sequence:
  •	Specjalna tabela SQLite, używana do przechowywania informacji o wartościach autoincrement dla tabel w bazie danych.

5. Tabela tournaments:
  •	Przechowuje informacje o turniejach wędkarskich.
  •	Kolumny:
    o	id (INTEGER, PRIMARY KEY AUTOINCREMENT): Unikalny identyfikator turnieju.
    o	name (TEXT): Nazwa turnieju.
    o	date (TEXT): Data odbycia się turnieju.
    o	location (TEXT): Lokalizacja turnieju.
    o	entry_fee (REAL): Opłata wpisowa na turniej.
    o	rules (TEXT): Zasady obowiązujące na turnieju.

6. Tabela users:
  •	Przechowuje informacje o użytkownikach aplikacji.
  •	Kolumny:
    o	id (INTEGER, PRIMARY KEY AUTOINCREMENT): Unikalny identyfikator użytkownika.
    o	firstname (TEXT): Imię użytkownika.
    o	lastname (TEXT): Nazwisko użytkownika.
    o	email (TEXT, UNIQUE): Adres e-mail użytkownika, musi być unikalny.
    o	password (TEXT): Hasło użytkownika, przechowywane w formie zaszyfrowanej.

</pre>
   
