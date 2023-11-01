@extends('app')

@section('title', 'Średnia kwadratowa - kalkulator średniej kwadratowej')
@section('description', 'Kalkulator średniej kwadratowej - szybko i łatwo oblicz średnią kwadratową swoich danych z naszym prostym i niezawodnym kalkulatorem.')
@section('keywords', 'średnia kwadratowa, kalkulator średniej kwadratowej')

@section('content')
    <p>
        <strong>Kalkulator średniej kwadratowej</strong>  to narzędzie, które pozwala na szybkie i łatwe
        obliczanie średniej kwadratowej dla Twoich danych.
        Obliczenie średniej kwadratowej nigdy nie było łatwiejsze, wystarczy wstawić swoje dane odpowiednie pole,
        aby otrzymać wynik.
    </p>

    @include('ads.ad-top')
    <div class="square rounded p-5 bg-gradient-to-r from-zinc-100 via-gray-100 to-zinc-100 shadow-2xl">
        <label for="precision" class="text-xs block mb-5 text-right">Liczba po przecinku (precyzja)
            <select class="w-12 h-8 p-2 text-xs" id="precision">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2" selected="">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select></label>
        <label>
            <textarea class="w-full">2; 4; 6</textarea>
        </label>
        <div class="p-5 text-center text-sm">
            średnia kwadratowa wynosi:
            <div class="p-2 text-2xl font-bold result">4.32</div>
        </div>
    </div>

    @include('ads.ad-bottom')

    <h2>Kalkulator średniej kwadratowej</h2>
    <p>
        Nasz <strong>kalkulator średniej kwadratowej</strong> to niezawodne narzędzie do obliczania średniej kwadratowej dla Twoich danych.
        Kalkulator posiada przejrzysty interfejs z polem tekstowym do wprowadzenia liczb, które należy oddzielić średnikiem.
        Możliwe jest także ustawienie dokładności wyniku - ilości miejsc po przecinku, zakres od 0 do 8,
        domyślnie 2 miejsca po przecinku. Wynik pojawia się automatycznie po wprowadzeniu liczb,
        co pozwala na szybkie i łatwe obliczanie średniej kwadratowej.
        Skorzystaj z naszego kalkulatora i ciesz się precyzyjnymi i szybkimi wynikami.
    </p>

    <h3>Co to jest średnia kwadratowa?</h3>
    <p>
        <strong>Średnia kwadratowa</strong>, jest to pierwiastek z sumy kwadratów wartości podzielonej przez liczbę wartości.
        Wzór na średnią kwadratową wygląda następująco:
    </p>
    <img src="{{ asset('img/srednia-kwadratowa-wzor.png') }}" alt="Średnia kwadratowa - wzór"
         class="mt-5 mx-auto">
    <p>
        gdzie <code>x<sub>1</sub>, x<sub>2</sub>, ...x<sub>n</sub></code>
        to poszczególne wartości z danego zbioru, a <code>n</code> to ich liczba.
    </p>

    <h3>Obliczanie średniej kwadratowej</h3>
    <p>
        Aby obliczyć średnią kwadratową, należy postępować według następujących kroków:
    </p>
    <ul>
        <li>
            Podstawiamy wartości do wzoru i podnosimy każdą wartość do kwadratu.
        </li>
        <li>
            Sumujemy te kwadraty.
        </li>
        <li>
            Dzielimy sumę przez liczbę wartości.
        </li>
        <li>
            Pierwiastkujemy otrzymaną wartość.
        </li>
        <li>
            Zastosowanie średniej kwadratowej
        </li>
    </ul>
    <h3>Zastosowanie średniej kwadratowej</h3>
    <p>
        Średnia kwadratowa jest często stosowana w statystyce, zwłaszcza w analizie danych.
        Może być również używana w różnych dziedzinach nauki, takich jak fizyka czy chemia.
        Jest to szczególnie przydatne w przypadku badania zmienności danych,
        ponieważ pozwala na określenie stopnia rozproszenia danych wokół średniej.
    </p>
    <p>
        Jednym z przykładów zastosowania średniej kwadratowej jest analiza wariancji w statystyce.
        Wariancja jest miarą zmienności danych, a średnia kwadratowa jest jej pierwiastkiem kwadratowym.
        Oznacza to, że wariancja jest miarą zmienności danych wyrażoną w jednostkach danych,
        a średnia kwadratowa jest tą samą miarą wyrażoną w jednostkach danych kwadratowych.
    </p>
    <p>
        Średnia kwadratowa jest również często używana w fizyce, zwłaszcza w termodynamice.
        W termodynamice, średnia kwadratowa prędkości molekuł jest używana do określenia temperatury cieczy lub gazu.
    </p>
    <p>
        W przypadku nauk ekonomicznych średnia kwadratowa jest używana do obliczania rentowności inwestycji.
        Rentowność inwestycji jest miarą, jak dobrze inwestycja przynosi zyski w porównaniu do ryzyka.
    </p>
    <h4>Podsumowanie</h4>
    <p>
        Podsumowując, <strong>średnia kwadratowa</strong> jest ważnym narzędziem matematycznym,
        które jest stosowane w wielu dziedzinach nauki i jest przydatne w analizie danych
        oraz określaniu stopnia rozproszenia danych wokół średniej.
        Dzięki zrozumieniu tego pojęcia i umiejętności jego obliczania,
        uczniowie i studenci będą mogli lepiej rozumieć i analizować dane,
        co przyda im się w przyszłości w różnych dziedzinach nauki i biznesu.
    </p>
@endsection
