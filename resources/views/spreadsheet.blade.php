@extends('app')

@section('title', 'Wie man Durchschnitte mit Google Tabellen berechnet')
@section('description', 'Erfahren Sie, wie Sie mühelos und schnell Durchschnitte mit Google Tabellen (Google Spreadsheet) berechnen können.')
@section('keywords', 'Tabellenkalkulation')

@section('content')
    <p>
        Die Berechnung verschiedener Durchschnitte mit Google Tabellen (Google Spreadsheet) ist einfach und bequem.
        In diesem Artikel erfahren Sie, wie Sie die beliebtesten Arten von Durchschnitten berechnen,
        wie das arithmetische Mittel, das gewichtete Mittel und das harmonische Mittel.
    </p>

    <h2>Arithmetisches Mittel</h2>
    <p>
        Um das arithmetische Mittel zu berechnen, tragen Sie die Daten in eine Spalte des Tabellenkalkulationsblatts ein,
        und geben Sie dann in einer anderen Zelle die Formel <code>=AVERAGE(Zelle1:Zelle2)</code> ein,
        wobei <code>Zelle1</code> und <code>Zelle2</code> die erste und die letzte Zelle mit Daten sind.
        Diese Formel berechnet automatisch das arithmetische Mittel für die gesamte Datenreihe.
    </p>

    <h3>Gewichtetes Mittel</h3>
    <p>
        Um das gewichtete Mittel zu berechnen, benötigen Sie zwei Spalten: eine für die Daten
        und eine für die Gewichte jedes Wertes. Tragen Sie die Daten und Gewichte in die entsprechenden Spalten ein,
        und geben Sie dann in einer anderen Zelle die Formel <code>=SUMPRODUCT(Zelle1:Zelle2, Zelle3:Zelle4)/SUM(Zelle3:Zelle4)</code> ein,
        wobei <code>Zelle1:Zelle2</code> die erste und letzte Zelle mit den Daten
        und <code>Zelle3:Zelle4</code> die erste und letzte Zelle mit den Gewichten sind.
        Diese Formel berechnet automatisch das gewichtete Mittel für die gesamte Datenreihe.
    </p>
    <p>
        In Google Tabellen ist auch die Funktion <strong>AVERAGE.WEIGHTED</strong> verfügbar,
        die speziell für die Berechnung des gewichteten Mittels vorgesehen ist. Es ist eine spezielle Version der Funktion <strong>AVERAGE</strong>,
        die die Gewichte für jeden Wert berücksichtigt und so das gewichtete Mittel berechnet.
    </p>
    <img src="{{ asset('img/google-tabellen.png') }}" alt="AVERAGE.WEIGHTED in Google Tabellen" class="mt-5 mx-auto">
    <p>
        Die Verwendung der Funktion <strong>AVERAGE.WEIGHTED</strong> ist transparenter
        und einfacher als die manuelle Berechnung des gewichteten Mittels mit den Funktionen
        <strong>SUMPRODUCT</strong> und <strong>SUM</strong>.
        Sie benötigt nur zwei Argumente: den Zellbereich mit den Daten und den Zellbereich mit den Gewichten.
    </p>
    <p>
        Um das gewichtete Mittel mit der Funktion <strong>AVERAGE.WEIGHTED</strong> zu berechnen, geben Sie die Formel
        <code>=AVERAGE.WEIGHTED(Zelle1:Zelle2, Zelle3:Zelle4)</code> ein, wobei
        <code>Zelle1:Zelle2</code> die erste und letzte Zelle mit den Daten
        und <code>Zelle3:Zelle4</code> die erste und letzte Zelle mit den Gewichten sind.
    </p>
    <p>
        Je nach persönlichen Vorlieben bieten sowohl die Funktionen <strong>SUMPRODUCT</strong> und <strong>SUM</strong>
        als auch <strong>AVERAGE.WEIGHTED</strong> Möglichkeiten zur Berechnung des gewichteten Mittels.
        Beide Methoden liefern das gleiche Ergebnis, aber die zweite ist transparenter und einfacher zu verwenden.
    </p>

    <h3>Harmonisches Mittel</h3>
    <p>
        Um das harmonische Mittel zu berechnen, tragen Sie die Daten in eine Spalte des Tabellenkalkulationsblatts ein,
        und geben Sie dann in einer anderen Zelle die Formel <code>=HARMEAN(Zelle1:Zelle2)</code> ein,
        wobei <code>Zelle1</code> und <code>Zelle2</code> die erste und letzte Zelle mit Daten sind.
        Diese Formel berechnet automatisch das harmonische Mittel für die gesamte Datenreihe.
    </p>
    <p>
        Beachten Sie, dass das harmonische Mittel nur positive Zahlen verwendet.
        Wenn die Daten negative Zahlen oder Null enthalten,
        kann das harmonische Mittel nicht berechnet werden und das Tabellenkalkulationsprogramm gibt einen Fehler aus.
    </p>

    <h3>Weitere Funktionen zur Berechnung von Durchschnitten</h3>
    <p>
        In Google Tabellen gibt es viele Funktionen, die die Berechnung verschiedener Arten von Durchschnitten ermöglichen.
        Neben den bereits genannten: arithmetisches Mittel (AVERAGE), gewichtetes Mittel (AVERAGE.WEIGHTED, SUMPRODUCT, SUM)
        und harmonisches Mittel (HARMEAN) gibt es auch andere Arten von Durchschnitten,
        die mit Tabellenkalkulationsfunktionen berechnet werden können:
    </p>
    <ul>
        <li>Median (MEDIAN) - das Mittelwert der Werte in der Mitte der Daten, nach ihrer Größe sortiert.</li>
        <li>Modus (MODE) - der am häufigsten vorkommende Wert in den Daten.</li>
        <li>Geometrisches Mittel (GEOMEAN) - die n-te Wurzel des Produkts der Datenwerte, wobei n die Anzahl der Daten ist.</li>
        <li>Quadratisches Mittel (AVERAGE^2) - die Wurzel aus dem Produkt der Datenwerte, multipliziert mit der Anzahl der Daten</li>
        <li>Gewichtetes quadratisches Mittel (WEIGHTEDAVG^2) - die Wurzel aus dem Produkt der Datenwerte, multipliziert mit der Anzahl der Daten und den Gewichten für jeden Wert</li>
    </ul>
    <p>
        Es ist zu beachten, dass einige dieser Funktionen Einschränkungen hinsichtlich der Art der Daten haben,
        die als Argumente übergeben werden können,
        z.B. können für die Median- und Modusfunktionen keine Datensätze mit kategorischen Daten übergeben werden,
        und für die Funktion des quadratischen Mittels müssen die Daten positive Zahlen sein.
    </p>

    <h4>Zusammenfassung</h4>
    <p>
        Zusammenfassend ist Google Tabellen ein sehr nützliches Werkzeug zur Berechnung verschiedener Durchschnitte,
        das die automatische Berechnung von arithmetischem, gewichtetem und harmonischem Mittel ermöglicht.
        Durch die Verwendung von Formeln ist der Prozess schnell und einfach und die Ergebnisse sind präzise.
    </p>

@endsection
