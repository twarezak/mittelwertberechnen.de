@extends('app')

@section('title', 'Über die Seite MittelwertBerechnen.de')
@section('description', 'Über die Seite MittelwertBerechnen.de – lesen Sie ein paar kurze Sätze über unsere Webseite.')
@section('keywords', '')

@section('content')
    <p>
        <a href="{{ route('home_page') }}" title="Mittelwert Berechnen">MittelwertBerechnen.de</a> ist eine Seite,
        die schnellen und einfachen Zugang zu Rechnern für die Berechnung verschiedener Arten von Durchschnitten bietet.
        Unsere Werkzeuge ermöglichen es, das arithmetische, geometrische, harmonische,
        gewichtete Mittel oder den Median aus den vom Benutzer angegebenen Zahlen zu berechnen.
        Die Nutzung unserer Rechner ist sehr einfach und vermeidet manuelles Rechnen und Fehler.
        Wenn Sie nach einer schnellen und präzisen Methode zur Berechnung von Durchschnitten suchen,
        ist MittelwertBerechnen.de die perfekte Lösung für Sie.
    </p>
    <p>
        Und wenn Sie Anmerkungen, Fragen haben oder uns einfach schreiben möchten,
        nutzen Sie das Formular auf der <a href="{{ route('contact') }}">Kontaktseite</a>.
    </p>
@endsection
