@extends('app')

@section('title', 'Kontakt ze stroną KalkulatorSredniej.pl')
@section('description', 'Formularz kontaktowy ze stroną KalkulatorSredniej.pl - jeśli masz jakieś uwagi, zauważyłeś błąd lub potrzebujesz się z nami skontaktować, napisz.')
@section('keywords', 'kontakt')

@section('content')
    {!! RecaptchaV3::initJs() !!}
    <p>
        Jeśli masz jakieś uwagi, zauważyłeś błąd lub potrzebujesz się z nami skontaktować, skorzystaj z poniższego formularza.
    </p>
    @if(session('success'))
        <p class="text-green-500 text-xs font-bold italic">
            {{ session('success') }}
        </p>
    @endif

    <form method="POST" action="{{ route('sendMail') }}" class="w-full max-w-lg">
        @csrf

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                    Email
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-200' }} rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                       id="email" name="email"  type="email">
                @if ($errors->has('email'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('email') }}</p>
                @endif
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Imię (nazwisko)
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('name') ? 'border-red-500' : 'border-gray-200' }} rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       id="name" name="name" type="text" placeholder="Tomasz">
                @if ($errors->has('name'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('name') }}</p>
                @endif
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="comment">
                    Wiadomość
                </label>
                <textarea name="comment" class="no-resize appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('comment') ? 'border-red-500' : 'border-gray-200' }} rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="comment"></textarea>
                @if ($errors->has('comment'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('comment') }}</p>
                @endif
            </div>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3">
                {!! RecaptchaV3::field('sendMail') !!}
                @if ($errors->has('g-recaptcha-response'))
                    <p class="text-red-500 text-xs italic">Błąd Captcha</p>
                @endif
                <button class="bg-slate-500 shadow hover:bg-slate-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                    Wyślij
                </button>
            </div>
            <div class="md:w-2/3"></div>
        </div>
    </form>
@endsection
