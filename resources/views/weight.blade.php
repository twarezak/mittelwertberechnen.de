@extends('app')

@section('title', 'Gewichtetes Mittel - Online-Rechner für das gewichtete Mittel')
@section('description', 'Wenn Sie schnell und einfach einen gewichteten Notendurchschnitt aus unterschiedlich gewichteten Fächern berechnen möchten, ist unser Online-Rechner für gewichtete Mittelwerte ideal.')
@section('keywords', 'gewichteter durchschnitt, gewichtetes mittel')


@section('content')
    <p>
        <strong>Der Rechner für das gewichtete Mittel</strong> auf dieser Seite ist ein Werkzeug,
        das eine schnelle und genaue Berechnung des gewichteten Durchschnitts von Elementen mit unterschiedlichen
        Gewichtungen ermöglicht.
        Es kann in vielen Situationen nützlich sein, in denen Unterschiede zwischen den einzelnen Elementen
        berücksichtigt werden sollen.
    </p>

    @include('ads.ad-top')
    <div class="weight rounded p-5 bg-gradient-to-r from-zinc-100 via-gray-100 to-zinc-100 shadow-2xl">
        <label for="precision" class="text-xs block mb-5 text-right">Zahl nach dem Dezimalpunkt (Genauigkeit)
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
            <strong class="text-right">Werte (Ratings)</strong>
            <strong>Gewichte</strong>

            <label class="text-right"><input type="number" class="w-10/12 values" value="1"></label>
            <label><input type="number" class="w-10/12 weights" value="2">
            </label>

            <label class="text-right"><input type="number" class="w-10/12 values" value="3"></label>
            <label><input type="number" class="w-10/12 weights" value="4">
                <span
                    class="text-red-400 p-3 text-xl font-bold hover:cursor-pointer hover:text-red-600 remove absolute">x</span>
            </label>
        </div>
        <div class="grid grid-cols-1 gap-4 mt-5 md:w-8/12 lg:w-6/12 m-auto text-sm text-right pr-14
        text-blue-400 font-bold hover:cursor-pointer hover:text-blue-500 add">
            Zeile hinzufügen
        </div>
        <div class="p-5 text-center text-sm">
            Der gewichtete Durchschnitt ist:
            <div class="p-2 text-2xl font-bold result">2.33</div>
        </div>
    </div>
    @include('ads.ad-bottom')

    <h2>Rechner für das gewichtete Mittel</h2>
    <p>
        Unser <strong>Rechner für das gewichtete Mittel</strong> ist einfach zu bedienen und benutzerfreundlich.
        Geben Sie einfach die Werte und Gewichte der einzelnen Elemente ein, und der Rechner berechnet automatisch das
        gewichtete Mittel.
    </p>
    <p>
        Oberhalb müssen Sie die entsprechenden Werte (z.B. Noten) sowie deren Gewichte eingeben.
        Wenn es nicht genug Platz gibt, um diese Daten einzugeben, klicken Sie auf
        <span class="text-sm text-blue-400 font-bold">Zeile hinzufügen</span>, um eine weitere Zeile hinzuzufügen.
        Diese wird zwei Felder enthalten, in die Sie einen weiteren Wert (Note) und das Gewicht eintragen können.
    </p>
    <p>
        Neben jeder Zeile (außer der ersten) befindet sich das Symbol
        <span class="text-red-400 p-3 text-xl font-bold">x</span>. Ein Klick darauf wird die Zeile entfernen.
        Das Entfernen einer Zeile führt dazu, dass das Ergebnis neu berechnet wird.
    </p>
    <p>
        Nach jeder Dateneingabe wird das gewichtete Mittel neu berechnet und das Ergebnis angezeigt.
    </p>

    <h3>Was ist das gewichtete Mittel?</h3>
    <p>
        <strong>Das gewichtete Mittel</strong> ist ein statistischer Wert, der es ermöglicht,
        die unterschiedlichen Gewichtungen einzelner Komponenten bei der Berechnung eines Durchschnitts zu
        berücksichtigen.
        Dies ist besonders nützlich, wenn wir einen gemeinsamen Nenner für Elemente mit unterschiedlichen Werten oder
        Bedeutungen bestimmen möchten.
        Das gewichtete Mittel wird häufig in verschiedenen Arten von Rankings und bei der Bewertung von Leistungen, wie
        z.B. Schulleistungen oder Arbeitsleistungen, verwendet.
    </p>

    <h3>Wie berechnet man das gewichtete Mittel?</h3>
    <p>
        Um das gewichtete Mittel zu berechnen, verwendet man folgende Formel:
    </p>
    <code>(Wert1 * Gewicht1 + Wert2 * Gewicht2 + ... + WertN * GewichtN) / (Gewicht1 + Gewicht2 + ... + GewichtN)</code>
    <p>
        Wo:
    </p>
    <ul>
        <li>
            <i>Wert1, Wert2, ..., WertN</i> sind die einzelnen Komponenten, die in die Berechnung einbezogen werden
            sollen
        </li>
        <li>
            <i>Gewicht1, Gewicht2, ..., GewichtN</i> sind die entsprechenden Gewichte für die einzelnen Komponenten
        </li>
    </ul>

    Here is the translation of the provided HTML content into German:

    <h3>Beispiel für die Berechnung des gewichteten Mittels</h3>
    <p>
        Nehmen wir an, wir haben die folgenden Noten und Gewichtungen:
    </p>
    <ul>
        <li>Mathematik: Note 5, Gewicht 2</li>
        <li>Polnisch: Note 4, Gewicht 3</li>
        <li>Physik: Note 3, Gewicht 3</li>
        <li>Chemie: Note 4, Gewicht 2</li>
    </ul>
    <p>
        Um das gewichtete Mittel zu berechnen, setzen wir diese Daten in die Formel ein:
    </p>
    <code>(5 * 2 + 4 * 3 + 3 * 3 + 4 * 2) / (2 + 3 + 3 + 2) = (10 + 12 + 9 + 8) / 10 = 39/10 = 3,9</code>
    <p>
        In diesem Fall beträgt unser gewichtetes Mittel 3,9.
    </p>

    <h3>Anwendungen des gewichteten Mittels</h3>
    <p>
        Das gewichtete Mittel wird häufig in verschiedenen Arten von Rankings und bei der Bewertung von Leistungen
        verwendet,
        wie zum Beispiel bei schulischen Ergebnissen oder bei der Arbeit. Es kann unter anderem in folgenden Situationen
        genutzt werden:
    </p>
    <ul>
        <li>
            Berechnung des Notendurchschnitts auf dem Schulzeugnis oder dem Universitätsdiplom -
            in solchen Fällen kann das Gewicht einzelner Fächer von ihrer Schwierigkeit oder ihrer Bedeutung für den
            Studiengang abhängen;
        </li>
        <li>
            Bewertung der Mitarbeiterleistung in einem Unternehmen -
            das gewichtete Mittel ermöglicht es, die unterschiedlichen Gewichte einzelner Aufgaben oder Projekte zu
            berücksichtigen,
            wodurch ein gerechterer Vergleich der Arbeitsergebnisse einzelner Mitarbeiter erzielt werden kann;
        </li>
        <li>
            Bestimmung des Durchschnittspreises von Produkten oder Dienstleistungen -
            das gewichtete Mittel ermöglicht es, die unterschiedlichen Gewichte einzelner Produkte oder Dienstleistungen
            zu berücksichtigen,
            was besonders wichtig ist, wenn ihre Preise stark variieren;
        </li>
        <li>
            Bewertung der Effektivität von Online-Werbung -
            das gewichtete Mittel ermöglicht es, die unterschiedlichen Gewichte einzelner Werbekanäle oder Zielgruppen
            zu berücksichtigen,
            wodurch ein gerechterer Vergleich der Werbewirksamkeit möglich ist.
        </li>
    </ul>

    <h3>Anwendungen des gewichteten Mittels</h3>
    <p>
        Das gewichtete Mittel wird häufig in verschiedenen Arten von Rankings und bei der Bewertung von Leistungen
        verwendet,
        wie zum Beispiel bei schulischen Ergebnissen oder bei der Arbeit. Es kann unter anderem in folgenden Situationen
        genutzt werden:
    </p>
    <ul>
        <li>
            Berechnung des Notendurchschnitts auf dem Schulzeugnis oder dem Universitätsdiplom -
            in solchen Fällen kann das Gewicht einzelner Fächer von ihrer Schwierigkeit oder ihrer Bedeutung für den
            Studiengang abhängen;
        </li>
        <li>
            Bewertung der Mitarbeiterleistung in einem Unternehmen -
            das gewichtete Mittel ermöglicht es, die unterschiedlichen Gewichte einzelner Aufgaben oder Projekte zu
            berücksichtigen,
            wodurch ein gerechterer Vergleich der Arbeitsergebnisse einzelner Mitarbeiter erzielt werden kann;
        </li>
        <li>
            Bestimmung des Durchschnittspreises von Produkten oder Dienstleistungen -
            das gewichtete Mittel ermöglicht es, die unterschiedlichen Gewichte einzelner Produkte oder Dienstleistungen
            zu berücksichtigen,
            was besonders wichtig ist, wenn ihre Preise stark variieren;
        </li>
        <li>
            Bewertung der Effektivität von Online-Werbung -
            das gewichtete Mittel ermöglicht es, die unterschiedlichen Gewichte einzelner Werbekanäle oder Zielgruppen
            zu berücksichtigen,
            wodurch ein gerechterer Vergleich der Werbewirksamkeit möglich ist.
        </li>
    </ul>

    Here is the translation of the provided HTML content into German:

    <h4>Zusammenfassung</h4>
    <p>
        <strong>Das gewichtete Mittel</strong> ist ein statistischer Wert, der die Berechnung des Durchschnittswertes
        ermöglicht,
        wobei die unterschiedlichen Gewichte der einzelnen Komponenten berücksichtigt werden.
        Dies ist besonders nützlich, wenn wir einen gemeinsamen Nenner für Elemente mit unterschiedlichen Werten oder
        Bedeutungen bestimmen möchten.
        Das gewichtete Mittel wird häufig in verschiedenen Rankings und bei der Bewertung von Leistungen verwendet,
        wie zum Beispiel bei Schulleistungen oder im Beruf. Um das gewichtete Mittel zu berechnen, verwendet man eine
        einfache Formel,
        die die Gewichte der einzelnen Komponenten berücksichtigt. Dank des gewichteten Mittels können wir genauere
        und objektivere Ergebnisse erzielen, die die Unterschiede zwischen den einzelnen Elementen berücksichtigen.
    </p>
@endsection
