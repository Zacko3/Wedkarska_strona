<pre>
                                                     <strong>interfejs użytkownika</strong>
1.	Strona główna:
o	Przedstawia główną stronę projektu, zawierającą mapę łowisk oraz sekcję „Nadchodzące Turnieje”. Widać,
        że mapa wyświetla lokalizacje, a poniżej znajduje się lista nadchodzących turniejów.
</pre>
  ![view1](https://github.com/user-attachments/assets/a804f033-318f-4059-9694-b90b76e7996b)
<pre>
2.	Strona turniejów:
o	Przedstawia stronę z listą nadchodzących turniejów. Widać szczegóły turnieju, takie jak data, miejsce oraz opłata wpisowa.
</pre>
![view2](https://github.com/user-attachments/assets/398380ba-9874-4ec4-981c-b4b423b23dd5)

<pre>
3.	Strona profilu użytkownika:
o	Pokazuje stronę powitalną dla zalogowanego użytkownika Kamila. Widać sekcję „Twoje Połowy” z listą złowionych ryb i możliwością dodania nowego połowu.
</pre>
![view3](https://github.com/user-attachments/assets/62dcb35f-ce6a-4263-a2f9-ff56fadd572d)

<pre>
4.	Strona logowania:
o	Strona logowania z prostym formularzem, w którym użytkownicy wpisują swoje dane logowania: e-mail oraz hasło, aby uzyskać dostęp do swoich profili.
</pre>
![view4](https://github.com/user-attachments/assets/7069830f-6dfa-4085-aa74-59bc61476e3f)

<pre>
5.	Strona rejestracji:
o	Strona rejestracji nowego użytkownika z formularzem wymagającym podania imienia, nazwiska, e-maila i hasła.
</pre>
![view5](https://github.com/user-attachments/assets/7e50ae55-d5a0-4081-81b4-b03eb7b86dbc)


<pre>
                                                        <strong>Baza danych</strong>
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
