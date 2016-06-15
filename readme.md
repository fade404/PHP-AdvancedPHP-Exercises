# PHP - Zaawansowane PHP - Ćwiczenia 

## Interfejsy, klasy abstrakcyjne i finalne

### Ćwiczenie 1
Stwórz abstrakcyjną klasę ```User``` posiadającą:
  1. Atrybuty: ```username``` i ```password``` (zastanów się jakie poziom dostępu powinny posiadać)
  2. Abstrakcyjną metodę: ```checkLogin``` przyjmującą jako argument hasło
  3. Abstrakcyjną metodę: ```setPassword```, przyjmującą jako argument hasło
  4. Publiczną finalną metodę: ```login``` przyjmującą jako argument ```username``` i ```password```, sprawdzającą hasło za pomocą metody ```checkLogin```

Następnie stwórz dwie klasy ```Client``` i ```Admin``` będące rozszerzeniami klasy ```User```, w których zaimplementujesz metody abstrakcyjne.

W klasie ```Admin``` hasło powinno mieć min. 10. Logowanie powinno wymagać aby użytkownik podał prawidłowe hasło i posiadał ustalony adres IP.
W klasie ```User``` hasło powinno mieć min. 8 znaków. Logowanie powinno wymagać prawidłowego hasła i po 3 nieudanych próbach logowania konto powinno być blokowane.

### Ćwiczenie 2 
Stwórz klasę ```UserSet``` która:
  1. Reprezentuje zbiór użytkowników klasy ```User```.
  2. Zaimplementuj dla tej klasy metodę: ```add``` przyjmującą jako argument obiekt klasy ```User```
  3. Zaimplementuj dla tej klasy interfejs ```Iterator```
  4. Zaimplementuj metodę ```checkLogin```, przyjmującą jako argument hasło, i zwracającą wszystkich użytkowników z mogących się zalogować danym hasłem (wykorzystaj pętlę foreach)
  
### Ćwiczenie dodatkowe
Zapisz poszczególne klasy w różnych plikach i wykorzystaj mechanizm autoload do ładowania tych klas.


Dodaj do ```UserSet```, funkcje przyjmującą jako argument tablicę dwu wymiarową array(‘username’ => ‘’, ‘pasword’ => ‘’ ) i ustawiającą hasła użytkownikom przekazanym w argumencie.

## Zaawansowane działanie na stringach
### Ćwiczenie 1
Napisz 3 funkcjie. Każda z nich powinna przyjmować adres email (napis w postaci `imię.nazwisko@firma.com.pl`) i zwracać:
  1. Imię i nazwisko wyciągnięte z maila,
  2. Nazwę firmy i nazwisko,
  3. Inicjały osoby posiadającej maila.
  
### Ćwiczenie 2
Napisz funkcję która powinna przyjmować adres email (napis w postaci `imię.nazwisko@firma.com.pl`) i zwracać tablicę z wszystkimi alisami odpowiedniono zaczynającymi
się od: `i.nazwisko@` lub `nazwisko@` i kończących się na: `@firma.pl` lub `@poczta.firma.pl`.

```
input -> jan.kowalski@coderslab.com.pl
output -> j.kowalski@coderslab.pl, j.kowalski@poczta.coderslab.pl, kowalski@coderslab.pl, kowalski@poczta.coderslab.pl
```


## Wyrażenia regularne
### Ćwiczenie 1
Napisz funkcje sprawdzającą czy hasło spełnia wszystkie wymagania:
  1. Ma między 10 a 15 znaków,
  2. Ma min. jedną małą literę jedną,
  3. Ma min. jedną wielką literę,
  4. Nie zawiera dwóch wielkich lub dwóch małych liter pod rząd.
  
Jeżeli nie spełnia któregoś z nich funkcja powinna zwrócić false.

Napisz formularz który będzie korzystał z podnej funkcji.

## Pliki w PHP
### Ćwiczenie 1
Stwórz formularz, który umożliwi upload pliku graficznego i zapisze ten plik w katalogu wybranym według algorytmu:
  1. Z nazwy pliku tworzymy hash md5,
  2. Na podstawie bieżącej daty wybiera podkatalog, jeżeli nie istnieje tworzy go,
  3. Na postawie 2 pierwszych znaków wybieramy podkatalog w tym podkatalogu, jeżeli nie istnieje tworzymy go,
  4. Na postawie 2 ostatnich znaków wybieramy podkatalog w tym podkatalogu, jeżeli nie istniej tworzymy go,
  5. Zapisujemy plik w ostatnim podkatalogu.

Stwórz skrypt który umożliwi wyświetlenie tego pliku.

### Ćwiczenie 2
Stwórz mechanizm czyszczenia plików w podkatalogach. Pliki starsze niż zadaną liczbę sekund powinny zostać usunięte.

## Wyjątki
### Ćwiczenie 1
Zmień ćwiczenie 1 z wyrażeń regularnych w taki sposób żeby w przypadku nie spełnienia odpowiedniego warunku funkcja rzucała odpowiedni wyjątek. Następnie popraw formularz w taki sposób żeby te wyjątki obsługiwał.

## Filrty
### Ćwiczenie 1
Zmień ćwiczenie 1 z wyrażeń regularnych w taki sposób żeby w korzystać z filtrów.

## Maile
### Ćwiczenie 1
Napisz stronę „kontakt”. Strona powinna posiadać formularz z polami: imię i nazwisko, adres email, treść wiadomości.
Wypełniony formularz powinien być przesyłany w postaci emaila na ustalony w kodzie adres.

Dodatkowo: 
Dodaj odpowiednie nagłówki do maila, tak aby odpowiedź była wysyłana na adres podany w formularzu (a nie adres serwera który ją wysłał).
Dodaj możliwość przesyłania pliku, który będzie wstawiany jako załącznik. Ogranicz wielkość pliku i typ (tylko obrazki i pliki pdf).

## XML
### Ćwiczenie 1
Napisz stronę pokazującą listę zajęć na uniwersytecie korzystając z danych: http://www.cs.washington.edu/research/xmldatasets/data/courses/reed.xml

### Ćwiczenie 2
Policz ile zajęć odbywa się na danym poziomie korzystając z danych: http://www.cs.washington.edu/research/xmldatasets/data/courses/uwm.xml

Wykorzystaj XMLReader.
