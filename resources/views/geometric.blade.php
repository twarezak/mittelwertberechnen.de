@extends('app')

@section('title', 'Średnia geometryczna - kalkulator średniej geometrycznej')
@section('description', 'Kalkulator średniej geometrycznej - szybko i łatwo oblicz średnią z iloczynu liczb. Tne prosty kalkulator pozwoli ci szybko obliczyć średnią geometryczną.')
@section('keywords', 'średnia geometryczna, kalkulator średniej geometrycznej, średnia geometryczna kalkulator')

@section('content')
    <p>
        Czy potrzebujesz szybko obliczyć <strong>średnią geometryczną</strong>? Nasz kalkulator jest tu, aby Ci pomóc!
        Wprowadź swoje dane, a my obliczymy wynik za Ciebie. Nie musisz tracić czasu na ręczne obliczenia -
        <strong>kalkulator średniej geometrycznej</strong> jest prosty w użyciu i pozwoli Ci szybko uzyskać wynik,
        który jest precyzyjny do wybranej liczby miejsc po przecinku.
    </p>

    @include('ads.ad-top')
    <div class="geometric rounded p-5 bg-gradient-to-r from-zinc-100 via-gray-100 to-zinc-100 shadow-2xl">
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
            średnia geometryczna wynosi:
            <div class="p-2 text-2xl font-bold result">3.63</div>
        </div>
    </div>

    @include('ads.ad-bottom')

    <h2>Kalkulator średniej geometrycznej</h2>
    <p>
        <strong>Kalkulator średniej geometrycznej</strong> jest prosty w użyciu i pozwoli Ci szybko obliczyć
        średnią z iloczynu kilku liczb.
        Aby skorzystać z kalkulatora, wystarczy, że wprowadzisz swoje dane do pola tekstowego, oddzielając je średnikami.
        Możesz również wybrać, z jaką precyzją chcesz otrzymać wynik, określając liczbę miejsc po przecinku.
        Każda zmiana w polu tekstowym lub wybór precyzji powoduje automatyczne przeliczenie i wyświetlenie wyniku.
        Skorzystaj z naszego kalkulatora już dziś i szybko oblicz <strong>średnią geometryczną</strong>.
    </p>

    <h3>Co to jest średnia geometryczna?</h3>
    <p>
        <strong>Średnia geometryczna</strong> to matematyczny wskaźnik średniej, który jest stosowany,
        gdy chcemy obliczyć średnią arytmetyczną z mnożenia kilku liczb.
        W innych słowach średnia geometryczna jest to pierwiastek potęgi n z iloczynu n liczb.
        Jest to często stosowane w przypadku, gdy chcemy uzyskać średnią arytmetyczną dla danych,
        które są bardzo różne od siebie lub skorelowane liniowo. Może być również używana w wielu dziedzinach,
        takich jak finansach, statystyce, naukach przyrodniczych i technologii.
        Należy jednak pamiętać, że średnia geometryczna nie jest dobrze przystosowana do danych,
        które nie są skorelowane liniowo, oraz nie może być obliczona dla wartości ujemnych.
    </p>
    <p>
        <strong>definicja:</strong> średnia geometryczna dwóch lub więcej liczb
        <code>x<sub>1</sub>, x<sub>2</sub>, ..., x<sub>n</sub></code>
        jest równa pierwiastkowi n-tego stopnia z iloczynu tych liczb:<br/>
        <img src="{{ asset('img/srednia-geometryczna-wzor.png') }}" alt="Średnia geometryczna - wzór"
             class="mt-5 mx-auto">
    </p>
    <h3>Przykład</h3>
    <p>
        Aby obliczyć średnią geometryczną z kilku liczb, wystarczy je pomnożyć razem,
        a następnie znaleźć pierwiastek z otrzymanego iloczynu, który jest stopnia n.
    </p>
    <p>
        Na przykład, aby obliczyć średnią geometryczną z liczb 4, 9 i 16, należy wykonać następujące kroki:
    </p>
    <ul>
        <li>pomnóż razem wszystkie liczby: 4 * 9 * 16 = 576</li>
        <li>znajdź pierwiastek z iloczynu: √576 = 24</li>
    </ul>
    <p>
        W tym przypadku średnia geometryczna wynosi 24.
    </p>

    <h3>Zastosowanie średniej geometrycznej w różnych dziedzinach</h3>
    <p>
        Średnia geometryczna jest szeroko stosowana w wielu dziedzinach, takich jak finansach, statystyce,
        naukach przyrodniczych i technologii.
    </p>
    <p>
        Finanse: Średnia geometryczna jest często stosowana w finansach do obliczania stopy zwrotu z inwestycji.
        Na przykład, jeśli mamy dane dotyczące stopy zwrotu z 3 różnych inwestycji w ciągu ostatnich 3 lat,
        możemy obliczyć średnią geometryczną, aby otrzymać średnią roczną stopę zwrotu z tych inwestycji.
    </p>
    <p>
        Statystyka: Średnia geometryczna jest często stosowana w statystyce do obliczania średniej arytmetycznej dla
        danych,
        które są skorelowane liniowo. Na przykład, jeśli mamy dane dotyczące wzrostu ludności w różnych krajach,
        możemy obliczyć średnią geometryczną, aby otrzymać średni wzrost ludności dla tych krajów.
    </p>
    <p>
        Nauki przyrodnicze: Średnia geometryczna jest często stosowana w naukach przyrodniczych
        do obliczania średniej dla wielu wielkości fizycznych, takich jak stężenia substancji chemicznych lub masy
        ciała.
        Na przykład, jeśli mamy dane dotyczące stężenia różnych substancji chemicznych w różnych próbkach,
        możemy obliczyć średnią geometryczną, aby uzyskać średnie stężenie dla tych próbek.
    </p>
    <p>
        Technologia: Średnia geometryczna jest często stosowana w technologii do obliczania średniej dla wielu
        parametrów,
        takich jak moc urządzenia lub jasność ekranu. Na przykład, jeśli mamy dane dotyczące mocy różnych urządzeń,
        możemy obliczyć średnią geometryczną, aby uzyskać średnią moc dla tych urządzeń.
    </p>
    <p>
        Średnia geometryczna jest szeroko stosowana w wielu dziedzinach, takich jak finansach, statystyce,
        naukach przyrodniczych i technologii. Może być używana do obliczania średniej arytmetycznej dla danych,
        które są bardzo różne od siebie lub skorelowane liniowo. Jest to cenne narzędzie,
        które należy wziąć pod uwagę podczas analizy danych, chociaż należy pamiętać o jego ograniczeniach,
        takich jak wrażliwość na wartości ujemne i trudność obliczeniowa.
    </p>
    <h3>Wady i zalety stosowania średniej geometrycznej</h3>
    <p>
        Średnia geometryczna jest cennym narzędziem matematycznym, które jest stosowane w wielu dziedzinach.
        Ma jednak kilka ograniczeń, które należy wziąć pod uwagę podczas jej stosowania.
    </p>
    <p>
        Zalety:
    </p>
    <ul>
        <li>średnia geometryczna lepiej oddaje rzeczywisty rozkład danych niż średnia arytmetyczna, gdy dane są bardzo
            różne od siebie;
        </li>
        <li>średnia geometryczna jest odporna na odstające wartości (outlier'y), co oznacza, że jedna lub kilka
            odstających wartości nie znacząco wpłynie na ostateczny wynik;
        </li>
        <li>średnia geometryczna jest często stosowana w statystyce do obliczania średniej dla danych, które są
            skorelowane liniowo;
        </li>
    </ul>

    <p>
        Wady:
    </p>
    <ul>
        <li>Średnia geometryczna jest wrażliwa na wartości ujemne. W przeciwieństwie do średniej arytmetycznej, średnia
            geometryczna nie może być obliczona dla wartości ujemnych;
        </li>
        <li>Średnia geometryczna jest trudniejsza do obliczenia niż średnia arytmetyczna, ponieważ wymaga podniesienia
            wszystkich liczb do potęgi n i obliczenia pierwiastka n-tego stopnia;
        </li>
        <li>Średnia geometryczna nie jest dobrze przystosowana do danych, które nie są skorelowane liniowo. W takim
            przypadku lepszym wyborem byłaby średnia harmoniczna lub średnia kwadratowa;
        </li>
    </ul>
    <p>
        Średnia geometryczna jest cennym narzędziem matematycznym, które ma wiele zalet,
        takich jak lepsze oddawanie rzeczywistego rozkładu danych i odporność na odstające wartości.
        Jest również często stosowana w statystyce do obliczania średniej dla danych, które są skorelowane liniowo.
        Jednakże należy pamiętać o jej ograniczeniach, takich jak wrażliwość na wartości ujemne i trudność
        obliczeniowa.
        W przypadku danych, które nie są skorelowane liniowo, lepszym wyborem mogą być inne miary średniej,
        takie jak średnia harmoniczna lub średnia kwadratowa.
    </p>
@endsection
