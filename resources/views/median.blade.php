@extends('app')

@section('title', 'Mediana - kalkulator do obliczania mediany')
@section('description', 'Skorzystaj z naszego kalkulatora mediany, aby szybko i łatwo obliczyć medianę danych. Po prostu wprowadź swoje dane aby otrzymać wynik.')
@section('keywords', 'mediana, kalkulator mediany, obliczanie mediany')

@section('content')
    <p>
        Mediana to jeden z podstawowych statystycznych mierników centralnego położenia danych.
        Nasz <strong>kalkulator mediany</strong> pozwala na szybkie i łatwe obliczenie mediany dla dowolnego zbioru liczb.
        Nie musisz już martwić się o ręczne obliczanie mediany, po prostu wprowadź swoje dane i odczytaj wynik.
    </p>

    @include('ads.ad-top')
    <div class="median rounded p-5 bg-gradient-to-r from-zinc-100 via-gray-100 to-zinc-100 shadow-2xl">
        <label>
            <textarea class="w-full">2; 4; 6</textarea>
        </label>
        <div class="p-5 text-center text-sm">
            mediana wynosi:
            <div class="p-2 text-2xl font-bold result">4</div>
        </div>
    </div>

    @include('ads.ad-bottom')

    <h2>Kalkulator mediany</h2>
    <p>
        <strong>Kalkulator mediany</strong> na tej stronie jest łatwym w obsłudze narzędziem online,
        które pozwala na szybkie i łatwe obliczenie mediany dla dowolnego zbioru liczb.
        Aby skorzystać z kalkulatora, wystarczy wprowadzić dane do pola tekstowego.
        Dane należy podać w formie liczb oddzielonych średnikiem.<br />
        Po wprowadzeniu danych kalkulator automatycznie posortuje dane i obliczy medianę dla wprowadzonego zbioru.
    </p>

    <h3>Co to jest mediana?</h3>
    <p>
        <strong>Mediana</strong> to jeden z podstawowych statystycznych mierników centralnego położenia danych.
        Oznacza położenie punktu, który dzieli rozkład danych na dwie równe części.
        Innymi słowy, mediana to ta wartość, która znajduje się w środku danych, jeśli te dane zostaną posortowane.
        W przeciwieństwie do średniej mediana nie jest wrażliwa na wartości odstające (tzw. "outliers").
    </p>
    <p>
        Definicja mediany: <i>
            mediana jest miarą centralnego położenia danych, która oznacza wartość,
            która znajduje się w środku rozkładu danych. Jeśli dane są posortowane, mediana jest wartością,
            która znajduje się pośrodku ciągu liczb. Jeśli liczba elementów w danych jest nieparzysta,
            mediana jest jednym z elementów. Natomiast, gdy liczba elementów jest parzysta,
            mediana jest średnią arytmetyczną dwóch środkowych elementów.
        </i>
    </p>
    <h3>Obliczanie mediany</h3>
    <p>
        Aby obliczyć medianę, należy w pierwszej kolejności posortować dane. Gdy dane są już posortowane,
        można obliczyć medianę na kilka sposobów:
    </p>
    <ul>
        <li>
            Jeśli liczba elementów jest nieparzysta, mediana to po prostu środkowy element.
        </li>
        <li>
            Jeśli liczba elementów jest parzysta, mediana to średnia arytmetyczna dwóch środkowych elementów.
        </li>
    </ul>

    <h3>Zastosowanie mediany</h3>
    <p>
        Mediana jest często używana w statystyce, szczególnie tam,
        gdzie dane mają rozkład skośny lub zawierają wartości odstające (outliers).
        Mediana jest odporna na wartości odstające, co oznacza, że jest bardziej odpowiednia do opisu takich danych niż średnia.
    </p>
    <p>
        Mediana jest szczególnie przydatna w przypadku, gdy dane posiadają rozkład skośny.
        Rozkład skośny oznacza, że dane są skoncentrowane na jednej stronie rozkładu, z długim ogonem na drugiej stronie.
        W takim przypadku średnia jest zawyżona przez wartości z długiego ogona,
        a mediana jest bardziej odpowiednim miernikiem centralnego położenia danych.
    </p>
    <p>
        Mediana jest często używana w różnych dziedzinach, takich jak ekonometria, finanse, nauki przyrodnicze,
        marketing i badania opinii publicznej.
        Jest to ważne narzędzie, które pozwala na lepsze zrozumienie danych i podejmowanie lepszych decyzji.
    </p>
    <h4>Przykład obliczania mediany</h4>
    <p>
        Załóżmy, że mamy następujący zbiór danych: <code>[2, 4, 7, 8, 10, 12]</code>.
        Aby obliczyć medianę, najpierw musimy posortować te dane: <code>[2, 4, 7, 8, 10, 12]</code>.
        Jak widać, liczba elementów jest parzysta, więc mediana to średnia arytmetyczna dwóch środkowych elementów.
        W tym przypadku są to liczby 7 i 8, których średnia arytmetyczna wynosi <code>(7+8)/2 = 7.5</code>.
    </p>
    <h5>Podsumowanie</h5>
    <p>
        W skrócie mediana to miernik centralnego położenia danych skoncentrowany na środku,
        nie jest wrażliwa na wartości odstające, jest często używana przy danych z rozkładu skośnego.
        Obliczana jest poprzez sortowanie danych i wybór środkowego elementu lub średniej arytmetycznej dwóch środkowych elementów.
        Jest przydatna w wielu dziedzinach i pomaga w podejmowaniu lepszych decyzji.
    </p>
@endsection
