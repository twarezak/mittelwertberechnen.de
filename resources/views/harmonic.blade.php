@extends('app')

@section('title', 'Średnia harmoniczna - kalkulator średniej harmonicznej')
@section('description', 'Potrzebujesz obliczyć średnią harmoniczną? Kalkulator średniej harmonicznej to narzędzie online, które pozwala na łatwe i szybkie obliczenie tej średniej.')
@section('keywords', 'średnia harmoniczna, kalkulator średniej harmonicznej, średnia harmoniczna kalkulator')

@section('content')
    <p>
        Na tej stronie znajdziesz <strong>kalkulator średniej harmonicznej</strong>.
        Jest to narzędzie przeznaczone dla uczniów i studentów,
        którzy potrzebują szybkiego i łatwego sposobu na obliczenie średniej harmonicznej.
        Dzięki naszemu kalkulatorowi, obliczenie średniej harmonicznej staje się proste i szybkie,
        a Ty możesz skupić się na analizie i interpretacji wyniku.
    </p>

    @include('ads.ad-top')
    <div class="harmonic rounded p-5 bg-gradient-to-r from-zinc-100 via-gray-100 to-zinc-100 shadow-2xl">
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
            średnia harmoniczna wynosi:
            <div class="p-2 text-2xl font-bold result">3.27</div>
        </div>
    </div>

    @include('ads.ad-bottom')

    <h2>Kalkulator średniej harmonicznej</h2>
    <p>
        <strong>Kalkulator średniej harmonicznej</strong> to narzędzie przeznaczone dla uczniów i studentów (i nie tylko),
        którzy potrzebują szybko i łatwo obliczyć <strong>średnią harmoniczną</strong>.
        Kalkulator posiada pole tekstowe, do którego można wprowadzić liczby oddzielone średnikiem,
        po czym automatycznie zostanie podany wynik.
        Kalkulator pozwala również na wybór precyzji wyniku - ile miejsc po przecinku ma być wyświetlonych.
        Każda zmiana w polu tekstowym lub wybór precyzji powoduje automatyczne przeliczenie i wyświetlenie wyniku.
    </p>

    <h3>Czym jest średnia harmoniczna?</h3>
    <p>
        <strong>Średnia harmoniczna</strong> to jeden z rodzajów średniej, który jest używany w statystyce i matematyce.
        Polega ona na obliczeniu odwrotności każdej liczby z danego zbioru liczb, ich zsumowaniu
        i następnym podzieleniu przez liczbę elementów w zbiorze.
        Innymi słowy, średnia harmoniczna jest odwrotnością średniej odwrotności liczb z danego zbioru.
    </p>
    <h3>Jak oblicza się średnią harmoniczną?</h3>
    <p>
        Wzór na obliczanie średniej harmonicznej jest następujący:
    </p>
    <p>
        <code>H = n / (1/x<sub>1</sub> + 1/x<sub>2</sub> +...+ 1/x<sub>n</sub>)</code>
    </p>
    <p>
        gdzie:<br />
        <i>H</i> - oznacza średnią harmoniczną<br />
        <i>n</i> - oznacza liczbę elementów w zbiorze<br />
        <i>x<sub>1</sub>, x<sub>2</sub>, ..., x<sub>n</sub></i> - oznaczają poszczególne liczby z zbioru
    </p>
    <p>
        Należy pamiętaj, że średnia harmoniczna jest niedefiniowana,
        jeśli jakikolwiek element danego zbioru jest równy 0, ponieważ odwrotność 0 jest nieoznaczona.
        Dlatego zawsze upewnij się, że zestaw liczb, z którego obliczasz średnią harmoniczną, nie zawiera zer.
    </p>
    <h3>Przykłady zastosowania średniej harmonicznej</h3>
    <p>
        Średnia harmoniczna jest szczególnie przydatna, gdy zestaw liczb zawiera zarówno bardzo małe,
        jak i bardzo duże liczby. W takim przypadku średnia harmoniczna jest bardziej odporna na skrajnie duże
        lub małe wartości niż inne rodzaje średnich.
    </p>
    <p>
        Średnia harmoniczna jest również często stosowana w ekonomii,
        zwłaszcza przy porównywaniu efektywności produkcji różnych firm.
        Jest to pomocne, ponieważ pozwala na uzyskanie bardziej obiektywnego obrazu,
        biorąc pod uwagę różne poziomy produkcji i koszty.
    </p>
    <p>
        Innym przykładem zastosowania średniej harmonicznej jest w chemii,
        gdzie jest stosowana do wyrażania stężenia roztworu.
        W fizyce z kolei, jest stosowana do oznaczania przeciętnej prędkości ciała w ruchu jednostajnym.
    </p>
    <h3>Porównanie średniej harmonicznej z innymi rodzajami średnich</h3>
    <p>
        Warto pamiętać, że średnia harmoniczna jest mniej popularna niż inne rodzaje średnich,
        takie jak średnia arytmetyczna i średnia geometryczna i rzadziej jest stosowana w praktyce.
    </p>
    <p>
        W przeciwieństwie do średniej arytmetycznej i średniej geometrycznej,
        średnia harmoniczna jest szczególnie przydatna w sytuacjach, gdy zestaw liczb zawiera zarówno bardzo małe,
        jak i bardzo duże wartości. Jest to pomocne, ponieważ pozwala na uzyskanie bardziej obiektywnego obrazu,
        biorąc pod uwagę różne poziomy produkcji i koszty.
    </p>
    <p>
        Pamiętaj, że dobór odpowiedniego rodzaju średniej jest zależny od konkretnej sytuacji oraz od danych,
        które posiadasz.
        Przed obliczeniem średniej warto przemyśleć, która z nich będzie najlepsza do przedstawienia wyniku w danym kontekście.
    </p>
    <h3>Uwagi końcowe - pamiętaj o uwzględnieniu 0 w obliczeniach</h3>
    <p>
        Podsumowując, średnia harmoniczna jest jednym z rodzajów średnich,
        który jest stosowany w statystyce i matematyce.
        Polega ona na obliczeniu odwrotności każdej liczby z danego zbioru liczb i ich następnym podzieleniu przez liczbę elementów w zbiorze.
        Jest szczególnie przydatna w sytuacjach, gdy zestaw liczb zawiera zarówno bardzo małe,
        jak i bardzo duże wartości. Zastosowanie znajduje w ekonomii, chemii i fizyce,
        jednak zawsze trzeba pamiętać, aby nie uwzględnić wartości 0 w obliczeniach.
    </p>

@endsection
