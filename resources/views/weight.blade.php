@extends('app')

@section('title', 'Średnia ważona - kalkulator średniej ważonej online')
@section('description', 'Jeśli chcesz szybko i łatwo obliczyć średnią ocen z przedmiotów z różnymi wagami, to kalkulator średniej ważonej jest idealnym rozwiązaniem dla Ciebie.')
@section('keywords', 'kalkulator średniej ważonej, kalkulator sredniej wazonej, średnia ważona, srednia wazona, średnia ważona kalkulator, kalkulator średniej')

@section('content')
    <p>
        <strong>Kalkulator średniej ważonej</strong> na tej stronie to narzędzie,
        które pozwala na szybkie i dokładne obliczenie średniej wartości elementów o różnych wagach.
        Może być ono przydatne w wielu sytuacjach, w których chcemy uwzględnić różnice między poszczególnymi elementami.
    </p>
    @include('ads.ad-top')
    <div class="weight rounded p-5 bg-gradient-to-r from-zinc-100 via-gray-100 to-zinc-100 shadow-2xl">
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
        <div class="grid grid-cols-2 gap-4 mt-5 md:w-8/12 lg:w-6/12 m-auto inputs">
            <strong class="text-right">Wartości (oceny)</strong>
            <strong>Wagi</strong>

            <label class="text-right"><input type="number" class="w-10/12 values" value="1"></label>
            <label><input type="number" class="w-10/12 weights" value="2">
            </label>

            <label class="text-right"><input type="number" class="w-10/12 values" value="3"></label>
            <label><input type="number" class="w-10/12 weights" value="4">
                <span class="text-red-400 p-3 text-xl font-bold hover:cursor-pointer hover:text-red-600 remove absolute">x</span>
            </label>
        </div>
        <div class="grid grid-cols-1 gap-4 mt-5 md:w-8/12 lg:w-6/12 m-auto text-sm text-right pr-14
        text-blue-400 font-bold hover:cursor-pointer hover:text-blue-500 add">
            dodaj wiersz
        </div>
        <div class="p-5 text-center text-sm">
            średnia ważona wynosi:
            <div class="p-2 text-2xl font-bold result">2.33</div>
        </div>
    </div>
    @include('ads.ad-bottom')

    <h2>Kalkulator średniej ważonej</h2>
    <p>
        Nasz <strong>kalkulator średniej ważonej</strong> jest prosty w obsłudze i intuicyjny w użytkowaniu.
        Wystarczy wprowadzić wartości i wagi poszczególnych elementów, a kalkulator automatycznie obliczy średnią ważoną.
    </p>
    <p>
        Powyżej musisz wpisać odpowiednio poszczególne wartości (ocenę) oraz ich wagi.
        Jeśli brakuje miejsc do wpisania tych danych kliknij w
    <span class="text-sm text-blue-400 font-bold">dodaj wiersz</span>, aby dodać w kolejny wiersz.
        Będzie on zawierał dwa pola, w których będziesz mógł wpisać kolejną wartość (ocenę) oraz wagę.
    </p>
    <p>
        Przy każdym wierszu (poza pierwszym) znajduje się znak
        <span class="text-red-400 p-3 text-xl font-bold">x</span>. Jego kliknięcie spowoduje usunięcie wiersza.
        Usunięcie wiersza sprawi, że wynik zostanie przeliczony na nowo.
    </p>
    <p>
        Po każdym wpisaniu danych, następuje przeliczenie średniej ważonej i wyświetlenie wyniku.
    </p>

    <h3>Co to jest średnia ważona?</h3>
    <p>
        <strong>Średnia ważona</strong> to statystyczny wskaźnik,
        który umożliwia uwzględnienie różnych wag poszczególnych elementów składowych przy obliczaniu średniej.
        Jest to szczególnie przydatne, gdy chcemy określić jakiś wspólny mianownik dla elementów o różnych wartościach lub znaczeniach.
        Średnia ważona jest często stosowana w różnego rodzaju rankingach oraz przy ocenie osiągnięć, takich jak wyniki w nauce czy w pracy.
    </p>

    <h3>Jak obliczyć średnią ważoną?</h3>
    <p>
        Aby obliczyć średnią ważoną, należy posłużyć się następującym wzorem:
    </p>
    <code>(wartość1 * waga1 + wartość2 * waga2 + ... + wartośćN * wagaN) / (waga1 + waga2 + ... + wagaN)</code>
    <p>
        Gdzie:
    </p>
    <ul>
        <li>
            <i>wartość1, wartość2, ..., wartośćN</i> to poszczególne elementy składowe, których chcemy uwzględnić w obliczeniach
        </li>
        <li>
            <i>waga1, waga2, ..., wagaN</i> to odpowiednie wagi dla poszczególnych elementów
        </li>
    </ul>
    <h3>Przykład obliczenia średniej ważonej</h3>
    <p>
        Załóżmy, że mamy następujące oceny i wagi punktowe:
    </p>
    <ul>
        <li>matematyka: ocena 5, waga 2</li>
        <li>język polski: ocena 4, waga 3</li>
        <li>fizyka: ocena 3, waga 3</li>
        <li>chemia: ocena 4, waga 2</li>
    </ul>
    <p>
        Aby obliczyć średnią ważoną, należy wprowadzić te dane do wzoru:
    </p>
    <code>(5 * 2 + 4 * 3 + 3 * 3 + 4 * 2) / (2 + 3 + 3 + 2) = (10 + 12 + 9 + 8) / 10 = 39/10 = 3,9</code>
    <p>
        W takim przypadku nasza średnia ważona wynosi 3,9.
    </p>

    <h3>Zastosowania średniej ważonej</h3>
    <p>
        Średnia ważona jest często stosowana w różnego rodzaju rankingach oraz przy ocenie osiągnięć,
        takich jak wyniki w nauce czy w pracy. Możemy ją wykorzystać między innymi w następujących sytuacjach:
    </p>
    <ul>
        <li>
            obliczenie średniej ocen na świadectwie szkolnym lub dyplomie ukończenia uczelni -
            w takim przypadku waga poszczególnych przedmiotów może być uzależniona od ich trudności
            lub znaczenia dla danego kierunku studiów;
        </li>
        <li>
            ocena efektywności pracowników w firmie -
            średnia ważona pozwala uwzględnić różne wagi poszczególnych zadań lub projektów,
            dzięki czemu można uzyskać bardziej sprawiedliwe porównanie wyników pracy poszczególnych pracowników;
        </li>
        <li>
            określenie średniej ceny produktów lub usług -
            średnia ważona pozwala uwzględnić różne wagi poszczególnych produktów lub usług,
            co jest szczególnie istotne w przypadku, gdy ich ceny różnią się znacząco;
        </li>
        <li>
            ocena efektywności reklam w internecie -
            średnia ważona pozwala uwzględnić różne wagi poszczególnych kanałów reklamowych lub grup odbiorców,
            dzięki czemu można uzyskać bardziej sprawiedliwe porównanie skuteczności reklam.
        </li>
    </ul>
    <h4>Komu może się przydać kalkulator średniej ważonej?</h4>
    <p>
        Kalkulator średniej ważonej może być przydatny w różnych sytuacjach i dla różnych grup osób.
        Oto kilka przykładów:
    </p>
    <ol>
        <li>
            Studentom i uczniom: Kalkulator średniej ważonej może być przydatny w przypadku,
            gdy wagi przypisywane są do różnych ocen lub kategorii ocen.
            Na przykład, gdy oceny z testów mają większą wagę niż oceny z prac domowych,
            obliczenie średniej ważonej pozwoli uzyskać bardziej dokładne podsumowanie osiągnięć.
        </li>
        <li>
            Inwestorom i finansistom: Kalkulator średniej ważonej może być stosowany w analizie portfela inwestycyjnego.
            Jeśli różne aktywa mają różne wagi lub udziały,
            obliczenie średniej ważonej cen lub zwrotów pozwoli na dokładniejsze zrozumienie całkowitego wyniku inwestycji.
        </li>
        <li>
            Badaczom naukowym: W przypadku prowadzenia badań naukowych,
            kalkulator średniej ważonej może być używany do agregacji wyników z różnych eksperymentów,
            z uwzględnieniem wagi każdego eksperymentu.
            To pozwala na bardziej precyzyjne podsumowanie wyników i wydobycie istotnych trendów.
        </li>
        <li>
            Ekonomistom i statystykom: Kalkulator średniej ważonej jest również ważnym narzędziem w analizie ekonomicznej
            i statystycznej. Może być stosowany, gdy istnieją różne wagi dla różnych obserwacji lub grup obserwacji.
            Na przykład, przy obliczaniu średnich wskaźników gospodarczych lub inflacji,
            można przypisać większą wagę do określonych sektorów lub kategorii.
        </li>
        <li>
            Projektantom systemów oceny: Osoby projektujące systemy oceny w różnych dziedzinach,
            takich jak sport, sztuka czy konkursy,
            mogą skorzystać z kalkulatora średniej ważonej do ustalenia wag dla różnych kryteriów oceny.
            To umożliwia uwzględnienie różnej istotności poszczególnych kryteriów przy ostatecznym podsumowaniu wyników.
        </li>
    </ol>
    <p>
        To tylko kilka przykładów, w których kalkulator średniej ważonej może być przydatny.
        Ogólnie rzecz biorąc, jest on użyteczny wszędzie tam,
        gdzie istnieje potrzeba uwzględnienia różnych wag dla różnych elementów lub kategorii,
        w celu uzyskania bardziej trafnych i adekwatnych wyników.
    </p>

    <h4>Podsumowanie</h4>
    <p>
        <strong>Średnia ważona</strong> to statystyczny wskaźnik, który umożliwia obliczenie średniej wartości,
        uwzględniając różne wagi poszczególnych elementów składowych.
        Jest to szczególnie przydatne w przypadku,
        gdy chcemy określić jakiś wspólny mianownik dla elementów o różnych wartościach lub znaczeniach.
        Średnia ważona jest często stosowana w różnego rodzaju rankingach oraz przy ocenie osiągnięć,
        takich jak wyniki w nauce czy w pracy. Aby obliczyć średnią ważoną, należy posłużyć się prostym wzorem,
        który uwzględnia wagi poszczególnych elementów. Dzięki średniej ważonej możemy uzyskać bardziej precyzyjne
        i obiektywne wyniki, które uwzględniają różnice między poszczególnymi elementami.
    </p>
@endsection
