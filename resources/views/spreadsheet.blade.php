@extends('app')

@section('title', 'Jak obliczyć średnie za pomocą arkusza kalkulacyjnego Google')
@section('description', 'Dowiedz się, jak łatwo i szybko obliczyć średnie za pomocą arkusza kalkulacyjnego Google Spreadsheet.')
@section('keywords', 'spreadsheet')

@section('content')
    <p>
        Obliczanie różnych średnich za pomocą arkusza kalkulacyjnego Google Spreadsheet jest proste i wygodne.
        W tym artykule dowiesz się, jak obliczyć najpopularniejsze rodzaje średnich,
        takie jak średnia arytmetyczna, średnia ważona i średnia harmoniczna.
    </p>

    <h2>Średnia arytmetyczna</h2>
    <p>
        Aby obliczyć średnią arytmetyczną, wprowadź dane do jednej kolumny arkusza kalkulacyjnego,
        a następnie w innej komórce wpisz formułę <code>=AVERAGE(komórka1:komórka2)</code>,
        gdzie <code>komórka1</code> i <code>komórka2</code> to pierwsza i ostatnia komórka zawierająca dane.
        Formuła ta automatycznie obliczy średnią arytmetyczną dla całej serii danych.
    </p>
    <h3>Średnia ważona</h3>
    <p>
        Aby obliczyć średnią ważoną, potrzebujesz dwóch kolumn: jednej zawierającej dane,
        a drugiej zawierającej wagi dla każdego danego. Wprowadź dane i wagi do odpowiednich kolumn,
        a następnie w innej komórce wpisz formułę <code>=SUMPRODUCT(komórka1:komórka2, komórka3:komórka4)/SUM(komórka3:komórka4)</code>>,
        gdzie <code>komórka1:komórka2</code> to pierwsza i ostatnia komórka z danymi,
        a <code>komórka3:komórka4</code> to pierwsza i ostatnia komórka z wagami.
        Formuła ta automatycznie obliczy średnią ważoną dla całej serii danych.
    </p>
    <p>
        W Google Spreadsheet dostępna jest również funkcja <strong>AVERAGE.WEIGHTED</strong>
        i jest przeznaczona do obliczania średniej ważonej. Jest to specjalna wersja funkcji <strong>AVERAGE</strong>,
        która uwzględnia wagi dla każdego danego, co pozwala na obliczenie średniej ważonej.
    </p>
    <img src="{{ asset('img/arkusze-google.png') }}" alt="AVERAGE.WEIGHTED w Arkuszach Google" class="mt-5 mx-auto">
    <p>
        Użycie funkcji <strong>AVERAGE.WEIGHTED</strong> jest bardziej przejrzyste
        i proste niż ręczne obliczanie średniej ważonej za pomocą funkcji
        <strong>SUMPRODUCT</strong> i <strong>SUM</strong>.
        Wymaga ona tylko dwóch argumentów, pierwszym jest zakres komórek zawierających dane a drugi zakres zawierający wagi.
    </p>
    <p>
        Aby obliczyć średnią ważoną za pomocą funkcji <strong>AVERAGE.WEIGHTED</strong> wpisz formułę
        <code>=AVERAGE.WEIGHTED(komórka1:komórka2, komórka3:komórka4)</code>, gdzie
        <code>komórka1:komórka2</code> to pierwsza i ostatnia komórka z danymi,
        a <code>komórka3:komórka4</code> to pierwsza i ostatnia komórka z wagami.
    </p>
    <p>
        W zależności od indywidualnych preferencji, zarówno funkcja <strong>SUMPRODUCT</strong> i <strong>SUM</strong>
        jak i <strong>AVERAGE.WEIGHTED</strong> pozwalają na obliczanie średniej ważonej.
        Obie metody dają taki sam wynik, ale ta druga jest bardziej przejrzysta i łatwiejsza w użyciu.
    </p>

    <h3>Średnia harmoniczna</h3>
    <p>
        Aby obliczyć średnią harmoniczną, wprowadź dane do jednej kolumny arkusza kalkulacyjnego,
        a następnie w innej komórce wpisz formułę <code>=HARMEAN(komórka1:komórka2)</code>,
        gdzie <code>komórka1</code> i <code>komórka2</code> to pierwsza i ostatnia komórka zawierająca dane.
        Formuła ta automatycznie obliczy średnią harmoniczną dla całej serii danych.
    </p>
    <p>
        Pamiętaj, że w przypadku średniej harmonicznej, dane muszą być liczbami dodatnimi.
        Jeśli w danych znajdują się liczby ujemne lub zerowe,
        obliczenie średniej harmonicznej nie będzie możliwe i arkusz kalkulacyjny zwróci błąd.
    </p>

    <h3>Pozostałe funkcje do obliczania średnich</h3>
    <p>
        W arkuszu Google Spreadsheet istnieje wiele funkcji, które pozwalają na obliczanie różnych rodzajów średnich.
        Oprócz już wymienionych: średniej arytmetycznej (AVERAGE), średniej ważonej (AVERAGE.WEIGHTED, SUMPRODUCT, SUM)
        i średniej harmonicznej (HARMEAN) istnieją również inne rodzaje średnich,
        które można obliczyć za pomocą funkcji arkusza kalkulacyjnego:
    </p>
    <ul>
        <li>Mediana (MEDIAN) - średnia z wartości pośrodku danych, po uporządkowaniu ich według wielkości.</li>
        <li>Moda (MODE) - najczęściej występująca wartość w danych.</li>
        <li>Średnia geometryczna (GEOMEAN) - pierwiastek n-tego stopnia z iloczynu wartości danych, gdzie n to liczba danych.</li>
        <li>Średnia kwadratowa (AVERAGE^2) - pierwiastek z iloczynu wartości danych, pomnożony przez liczbę danych</li>
        <li>Średnia kwadratowa ważona (WEIGHTEDAVG^2) - pierwiastek z iloczynu wartości danych, pomnożony przez liczbę danych oraz wagami dla każdego danego</li>
    </ul>
    <p>
        Warto pamiętać, że niektóre z tych funkcji mają ograniczenia co do rodzaju danych,
        które można przekazać jako argumenty,
        np. w przypadku funkcji mediany i mody nie mogą być przekazywane zbiory z danymi kategorycznymi,
        a w przypadku funkcji średniej kwadratowej dane muszą być liczbami dodatnimi.
    </p>

    <h4>Podsumowanie</h4>
    <p>
        Podsumowując, arkusz kalkulacyjny Google Spreadsheet to bardzo przydatne narzędzie do obliczania różnych średnich,
        pozwalają na automatyczne obliczanie średniej arytmetycznej, ważonej oraz harmonicznej.
        Dzięki wykorzystaniu formuł proces jest szybki i łatwy, a wyniki są precyzyjne.
    </p>
@endsection
