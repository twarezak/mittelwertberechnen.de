@extends('app')

@section('title', 'O stronie KalkulatorSredniej.pl')
@section('description', 'O stronie KalkulatorSredniej.pl - przeczytaj kilka krótkich zdań na temat naszej strony.')
@section('keywords', 'o stronie')

@section('content')
    <p>
        <a href="{{ route('home_page') }}" title="Kalkulator Średniej">KalkulatorSredniej.pl</a> to strona,
        która zapewnia szybki i prosty dostęp do kalkulatorów do obliczania różnych rodzajów średnich.
        Nasze narzędzia pozwalają na obliczenie średniej arytmetycznej, geometrycznej, harmonicznej,
        ważonej lub mediany z podanych przez użytkownika liczb.
        Korzystanie z naszych kalkulatorów jest bardzo proste i pozwala uniknąć ręcznego liczenia oraz błędów.
        Jeśli szukasz szybkiego i precyzyjnego sposobu na obliczenie średnich,
        KalkulatorSredniej.pl jest idealnym rozwiązaniem dla Ciebie.
    </p>
    <p>
        A jeśli masz jakieś uwagi, pytania lub po prostu chcesz napisać do nas,
        skorzystaj z formularza na  <a href="{{ route('contact') }}">stronie kontaktowej</a>.
    </p>
@endsection
