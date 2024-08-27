```
Opis projektu: 
  Strona internetowa dla wędkarzy ma na celu dostarczenie użytkownikom platformy do dzielenia się informacjami o wędkowaniu, przeglądania miejsc połowów oraz śledzenia nadchodzących turniejów wędkarskich. Strona będzie      zawierać dane o łowiskach, rybach, sprzęcie wędkarskim oraz umożliwiać rejestrację użytkowników, śledzenie swoich połowów i zapis na turnieje.
  Technologie użyte w projekcie:
  •	SQL: Do zarządzania bazą danych, w tym użytkownikami, danymi o łowiskach, rybach oraz turniejach.
  •	HTML: Struktura strony internetowej, na której użytkownicy mogą przeglądać i korzystać z dostępnych funkcji.
  •	PHP: Logika aplikacji do przetwarzania danych, komunikacja z bazą danych SQL oraz obsługa formularzy.
  •	CSS: Stylizacja strony internetowej, aby była estetyczna i czytelna dla użytkowników.
Funkcjonalności
1.	Rejestracja i logowanie użytkowników:
  o	Użytkownicy mogą zarejestrować konto, podając swoje dane (imię, nazwisko, e-mail, hasło).
  o	Po rejestracji użytkownicy mogą się logować i uzyskać dostęp do swojego profilu, gdzie mogą przeglądać swoje połowy oraz zgłaszać się na nadchodzące turnieje.
2.	Mapa Łowisk:
  o	mapa, na której użytkownicy mogą przeglądać zlokalizowane łowiska.
3.	Informacje o rybach:
  o	Katalog różnych gatunków ryb z opisami, najlepszymi metodami połowów i poradami na temat używania odpowiedniego sprzętu.
  o	Użytkownicy mogą dodawać opisy i wyniki swoich złowionych ryb i zapisywać je w swoim profilu.
4.	Nadchodzące Turnieje:
  o	Sekcja, w której użytkownicy mogą przeglądać listę nadchodzących turniejów wędkarskich.
  o	Informacje o dacie, miejscu, opłacie wpisowej i zasadach uczestnictwa.
5.	Rejestracja połowów:
  o	Użytkownicy mogą rejestrować swoje połowy, dodając zdjęcia, gatunek złowionej ryby, wagę, długość oraz miejsce połowu.
  o	System automatycznie generuje statystyki użytkowników, takie jak największa złowiona ryba czy liczba złowionych ryb w danym roku.

Instalacja i Konfiguracja Projektu
1.	SQL - Baza danych:
  o	instalacja serwera baz danych (np. SQLite).
  o	Tworzenie bazy danych  wędkarstwo i tabele:
    	users (dane użytkowników)
    	locations (informacje o łowiskach)
    	fish_species (gatunki ryb)
    	catches (połowy użytkowników)
    	tournaments (nadchodzące turnieje)
![relacje_projekt](https://github.com/user-attachments/assets/f732a2c6-1732-4b32-be23-adb4c5d9e90d)
2.	HTML - Struktura strony:
  o	Strona główna z sekcjami: łowiska, ryby, nadchodzące turnieje, profil użytkownika
  o	Każda strona powinna być podzielona na główne elementy: nagłówek, treść, stopka.
3.	PHP - Logika aplikacji:
  o	Skrypt do obsługi rejestracji i logowania użytkowników z walidacją danych oraz zabezpieczeniami.
  o	Skrypty do obsługi formularzy dodawania łowisk, połowów oraz zgłaszania się na turnieje.
  o	Komunikacja z bazą danych SQL poprzez PDO, np. do pobierania listy turniejów.
4.	CSS - Stylizacja strony:
  o	Stworzenie responego design’u, który działa dobrze na różnych urządzeniach (telefony, tablety, komputery).
  o	stylizacja przycisków, formularzy, mapy łowisk oraz sekcji profilu użytkownika.
```
