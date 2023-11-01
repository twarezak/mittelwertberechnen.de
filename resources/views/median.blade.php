@extends('app')

@section('title', 'Median - Rechner zur Berechnung des Medians')
@section('description', 'Nutzen Sie unseren Medianrechner, um schnell und einfach den Median Ihrer Daten zu berechnen. Geben Sie einfach Ihre Daten ein, um das Ergebnis zu erhalten.')
@section('keywords', 'Median, Medianrechner, Berechnung des Medians')

@section('content')
    <p>
        Der Median ist einer der grundlegenden statistischen Maße für die zentrale Tendenz von Daten.
        Unser <strong>Medianrechner</strong> ermöglicht eine schnelle und einfache Berechnung des Medians für jede
        Zahlengruppe.
        Sie müssen sich keine Gedanken mehr über die manuelle Berechnung des Medians machen, geben Sie einfach Ihre
        Daten ein und lesen Sie das Ergebnis ab.
    </p>

    @include('ads.ad-top')
    <div class="median rounded p-5 bg-gradient-to-r from-zinc-100 via-gray-100 to-zinc-100 shadow-2xl">
        <label>
            <textarea class="w-full">2; 4; 6</textarea>
        </label>
        <div class="p-5 text-center text-sm">
            Der Median ist:
            <div class="p-2 text-2xl font-bold result">4</div>
        </div>
    </div>

    @include('ads.ad-bottom')

    <h2>Medianrechner</h2>
    <p>
        Der <strong>Medianrechner</strong> auf dieser Seite ist ein einfach zu bedienendes Online-Tool,
        das ein schnelles und unkompliziertes Berechnen des Medians für eine beliebige Zahlenmenge ermöglicht.
        Um den Rechner zu benutzen, müssen Sie nur Ihre Daten in das Textfeld eingeben.
        Die Daten sollten als durch Semikolon getrennte Zahlen angegeben werden.<br/>
        Nach der Eingabe der Daten sortiert der Rechner diese automatisch und berechnet den Median für die eingegebene
        Menge.
    </p>

    <h3>Was ist der Median?</h3>
    <p>
        Der <strong>Median</strong> ist einer der grundlegenden statistischen Maße für die zentrale Tendenz von Daten.
        Er gibt den Punkt an, der eine Datendistribution in zwei gleiche Teile teilt.
        Anders ausgedrückt, der Median ist der Wert, der sich in der Mitte der Daten befindet, wenn diese sortiert sind.
        Im Gegensatz zum Mittelwert ist der Median nicht empfindlich gegenüber Ausreißern (sogenannten "Outliers").
    </p>
    <p>
        Definition des Medians: <i>
            Der Median ist ein Maß für die zentrale Tendenz von Daten, das den Wert angibt,
            der in der Mitte der Datenverteilung liegt. Wenn die Daten sortiert sind, ist der Median der Wert,
            der sich in der Mitte der Zahlenreihe befindet. Bei einer ungeraden Anzahl von Datenelementen ist der Median
            eines der Elemente.
            Bei einer geraden Anzahl von Elementen ist der Median der arithmetische Mittelwert der beiden mittleren
            Elemente.
        </i>
    </p>

    <h3>Berechnung des Medians</h3>
    <p>
        Um den Median zu berechnen, müssen die Daten zunächst sortiert werden. Sobald die Daten sortiert sind,
        kann der Median auf verschiedene Weisen berechnet werden:
    </p>
    <ul>
        <li>
            Wenn die Anzahl der Elemente ungerade ist, ist der Median einfach das mittlere Element.
        </li>
        <li>
            Wenn die Anzahl der Elemente gerade ist, ist der Median der arithmetische Mittelwert der beiden mittleren
            Elemente.
        </li>
    </ul>

    <h3>Verwendung des Medians</h3>
    <p>
        Der Median wird häufig in der Statistik verwendet, insbesondere dort,
        wo Daten eine schiefe Verteilung aufweisen oder Ausreißer enthalten.
        Der Median ist resistent gegen Ausreißer, was bedeutet, dass er besser geeignet ist, solche Daten zu beschreiben
        als der Durchschnitt.
    </p>
    <p>
        Der Median ist besonders nützlich, wenn die Daten eine schiefe Verteilung haben.
        Eine schiefe Verteilung bedeutet, dass die Daten auf einer Seite der Verteilung konzentriert sind, mit einem
        langen Schwanz auf der anderen Seite.
        In solchen Fällen wird der Durchschnitt durch die Werte im langen Schwanz überhöht,
        und der Median ist ein geeigneteres Maß für die zentrale Tendenz der Daten.
    </p>
    <p>
        Der Median wird häufig in verschiedenen Bereichen wie Ökonometrie, Finanzen, Naturwissenschaften,
        Marketing und Meinungsforschung verwendet.
        Er ist ein wichtiges Werkzeug, das ein besseres Verständnis der Daten und fundiertere Entscheidungsfindung
        ermöglicht.
    </p>

    <h4>Beispiel für die Berechnung des Medians</h4>
    <p>
        Nehmen wir an, wir haben die folgende Datensammlung: <code>[2, 4, 7, 8, 10, 12]</code>.
        Um den Median zu berechnen, müssen wir diese Daten zuerst sortieren: <code>[2, 4, 7, 8, 10, 12]</code>.
        Wie man sieht, ist die Anzahl der Elemente gerade, also ist der Median der Durchschnitt der beiden mittleren
        Elemente.
        In diesem Fall sind das die Zahlen 7 und 8, deren arithmetisches Mittel <code>(7+8)/2 = 7,5</code> ist.
    </p>
    <h5>Zusammenfassung</h5>
    <p>
        Kurz gesagt, der Median ist ein Maß für die zentrale Tendenz der Daten, fokussiert auf die Mitte,
        ist nicht empfindlich auf Ausreißerwerte, wird oft bei schiefen Verteilungen verwendet.
        Er wird berechnet, indem die Daten sortiert und entweder das mittlere Element ausgewählt oder der Durchschnitt
        der beiden mittleren Elemente genommen wird.
        Er ist nützlich in vielen Bereichen und hilft bei der besseren Entscheidungsfindung.
    </p>

@endsection
