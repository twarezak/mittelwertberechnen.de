<footer class="bg-gradient-to-r from-blue-100 via-slate-200 to-blue-100 pb-10">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
        <div class="lg:flex lg:space-x-6">
            <div class="w-full lg:w-2/5 -mx-6">
                <div class="px-6">
                    <div>
                        <a href="{{ route('home_page') }}" title="Mittelwert Berechnen"
                           class="text-xl font-bold text-gray-900">{{ $siteTitle }}</a>
                    </div>

                    <p class="mt-2 text-gray-800 max-w-md text-sm">
                        MittelwertBerechnen.de ist Ihre effiziente Lösung für die schnelle und präzise Berechnung von
                        Mittelwerten aller Art. Mit unseren einfach zu bedienenden und zuverlässigen Kalkulatoren
                        erkennen Sie schnell den allgemeinen Trend Ihrer Daten und sparen Zeit. Mit uns ist die
                        Berechnung von Mittelwerten kein Problem mehr!
                    </p>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 lg:flex-1">
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-2">
                    <div>
                        <strong class="text-xl font-bold text-gray-900">Informacje</strong>
                        <a href="{{ route('cookies') }}" title="Datenschutz" class="footer-link">Datenschutz</a>
                        <a href="{{ route('about') }}" class="footer-link" title="Über die Seite">Über die Seite</a>
                        <a href="{{ route('contact') }}" class="footer-link" title="Kontakt">Kontakt</a>
                    </div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 lg:flex-1">
                <div class="grid">
                    @include('servises')
                </div>
            </div>
        </div>
    </div>
    <p class="text-center text-sm text-gray-800">© {{ $siteName }} {{ now()->year }} - All rights reserved</p>
</footer>
