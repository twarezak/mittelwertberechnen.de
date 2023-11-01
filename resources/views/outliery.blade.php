@extends('app')

@section('title', 'Średnie a outliery (wartości odstające)')
@section('description', 'Średnie a outliery - outliery, inaczej wartości odstające, to pojedyncze punkty danych, dowiedz się jak wpływają na średnią.')
@section('keywords', 'outliery, wartości odstające')

@section('content')
    <h2>Co to są outliery</h2>
    <p>
        Outliery, inaczej wartości odstające, to pojedyncze punkty danych,
        które znacznie różnią się od pozostałych punktów w zbiorze danych.
        Mogą to być zarówno wartości bardzo duże, jak i bardzo małe.
        Outliery mogą wynikać z błędów pomiarowych lub mogą być wartościami rzeczywistymi,
        ale nie reprezentującymi ogólnej tendencji w danych.
        W przypadku obliczania średniej, outliery mogą mieć istotny wpływ na wynik,
        ponieważ jedna lub kilka wartości odstających mogą znacznie zmienić wartość średnią.
        Dlatego ważne jest, aby zwracać uwagę na outliery podczas analizy danych i dokonywać odpowiednich korekt,
        jeśli są one przyczyną błędu w wyniku.
    </p>
    <h3>Jak outliery wpływają na średnią?</h3>
    <p>
        Outliery mogą mieć istotny wpływ na wynik średniej,
        ponieważ jedna lub kilka wartości odstających mogą znacznie zmienić wartość średnią.
    </p>
    <p>
        Na przykład, jeśli mamy dane z 10 wartościami, z których 9 jest bardzo zbliżonych,
        a jedna jest znacznie większa lub mniejsza, to średnia z tych danych będzie zbliżona do wartości odstającej,
        co nie odzwierciedla prawdziwej tendencji danych.
    </p>
    <p>
        W przypadku obliczania średniej arytmetycznej, każda wartość jest traktowana tak samo,
        a więc jedna wartość odstająca może zdominować wynik. Natomiast, mediana jest bardziej odporna na wpływ outlierów,
        ponieważ jest to wartość, która dzieli zbiór danych na połowę, i jest mniej podatna na wpływ pojedynczych wartości odstających.
    </p>
    <p>
        Podsumowując, outliery mogą mieć duży wpływ na wynik średniej, dlatego ważne jest,
        aby zwracać uwagę na te wartości i dokonywać odpowiednich korekt, jeśli są one przyczyną błędu w wyniku.
    </p>
    <h3>Metody eliminowania outlierów</h3>
    <p>
        Istnieje kilka sposobów na eliminowanie outlierów z danych, w zależności od kontekstu i celu analizy.
        Oto kilka przykładów:
    </p>
    <ol>
        <li>
            Usuwanie wartości odstających: prosty sposób na pozbycie się outlierów polega na usunięciu ich z danych.
            Jest to jednak metoda dość drastyczna i może prowadzić do utraty istotnych informacji.
        </li>
        <li>
            Zastąpienie wartości odstających: alternatywą dla usuwania outlierów jest ich zastąpienie innymi wartościami,
            np. średnią, mediana lub wartością graniczną.
        </li>
        <li>
            Transformacja danych: w niektórych przypadkach, outliery mogą być efektem skośności danych.
            Transformacje takie jak logarytmowanie lub pierwiastkowanie mogą pomóc w ich eliminacji.
        </li>
        <li>
            Użycie metod robustowych: metody takie jak mediana lub średnia ważona są bardziej odporne na outliery niż średnia arytmetyczna.
            Warto rozważyć te metody, jeśli w danych występują outliery.
        </li>
        <li>
            Analiza indywidualnie: w niektórych przypadkach, outliery mogą być istotne i nie powinny być usuwane.
            W takim przypadku ważne jest, aby analizować je indywidualnie i interpretować ich wpływ na wynik.
        </li>
    </ol>
    <p>
        Jak widzisz, wybór odpowiedniej metody eliminowania outlierów zależy od kontekstu i celu analizy,
        dlatego ważne jest, aby dobrze rozważyć wszystkie opcje przed podjęciem decyzji.
    </p>
    <h4>Przykłady zastosowania</h4>
    <p>
        Eliminacja outlierów może być ważna w wielu różnych sytuacjach i dziedzinach. Oto kilka przykładów zastosowania:
    </p>
    <ol>
        <li>
            Analiza finansowa: w analizie danych finansowych, outliery mogą być spowodowane błędami pomiarowymi
            lub nieprawidłowymi transakcjami. Eliminacja tych wartości odstających może pomóc w uzyskaniu bardziej rzetelnego obrazu sytuacji finansowej.
        </li>
        <li>
            Badania naukowe: w badaniach naukowych, outliery mogą być spowodowane błędami pomiarowymi
            lub nietypowymi wartościami rzeczywistymi. Eliminacja tych wartości odstających może pomóc w uzyskaniu bardziej precyzyjnych wyników badań.
        </li>
        <li>
            Analiza danych marketingowych: w analizie danych marketingowych, outliery mogą być spowodowane nietypowymi zachowaniami klientów.
            Eliminacja tych wartości odstających może pomóc w uzyskaniu bardziej reprezentatywnego obrazu zachowań klientów.
        </li>
        <li>
            Projektowanie procesów: w projektowaniu procesów, outliery mogą być spowodowane nietypowymi zdarzeniami lub błędami.
            Eliminacja tych wartości odstających może pomóc w uzyskaniu bardziej precyzyjnego modelu procesu.
        </li>
    </ol>
    <p>
        Jak widzisz, eliminacja outlierów może być ważna w wielu różnych sytuacjach i dziedzinach,
        ponieważ pozwala na uzyskanie bardziej rzetelnych i reprezentatywnych wyników.
    </p>
    <h5>Wnioski i zalecenia</h5>
    <p>
        Wnioski z analizy wpływu outlierów na średnią to przede wszystkim konieczność rozważenia ich wpływu na wynik.
        Outliery mogą mieć znaczący wpływ na wynik średniej, dlatego ważne jest,
        aby zwracać uwagę na te wartości i dokonywać odpowiednich korekt, jeśli są one przyczyną błędu w wyniku.
    </p>
    <ol>
        <li>
            Zweryfikuj czy dane nie zawierają błędów pomiarowych.
        </li>
        <li>
            Zwróć uwagę na wartości odstające, ponieważ mogą one mieć znaczący wpływ na wynik średniej.
        </li>
        <li>
            Zastanów się, czy wartości odstające są rzeczywiście wartościami odstającymi czy też są istotne dla analizy.
        </li>
        <li>
            Wybierz odpowiednią metodę eliminowania outlierów, w zależności od kontekstu i celu analizy.
        </li>
        <li>
            Użyj metod robustowych, takich jak mediana lub średnia ważona, które są bardziej odporne na outliery niż średnia arytmetyczna.
        </li>
        <li>
             Pamiętaj, że eliminacja outlierów nie jest rozwiązaniem na wszystko, a czasami wartości odstające mogą być istotne dla analizy.
        </li>
    </ol>
    <p>
        Warto pamiętać, że eliminacja outlierów nie jest jedynym rozwiązaniem i nie zawsze jest konieczna.
        Ważne jest, aby dokładnie przeanalizować dane i cel analizy, aby wybrać odpowiednią metodę eliminowania outlierów.
    </p>
@endsection
