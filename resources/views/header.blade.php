<?php
$menu = [
    'Kalkulator Średniej' => route('home_page'),
    'Kalkulatory średniej' => [
        'Średnia arytmetyczna' => route('arithmetic'),
        'Średnia ważona' => route('weight'),
        'Średnia geometryczna' => route('geometric'),
        'Średnia harmoniczna' => route('harmonic'),
        'Mediana' => route('median'),
        'Średnia kwadratowa' => route('square'),
    ],
    'Zadania' => route('tasks'),
    'Średnie w arkuszu Google Spreadsheet' => route('spreadsheet'),
    'Średnie w statystyce' => route('statistic'),
    'Średnie a outliery' => route('outliery'),
    'Odchylenie standardowe' => route('standard-deviation'),
];
?>
<nav class="bg-gradient-to-r from-blue-100 via-slate-200 to-blue-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mr-10 flex items-center h-14 md:h-24">
            <div class="md:hidden absolute right-2">
                <!-- Mobile menu button -->
                <button id="nav-toggle"
                        class="
                        mt-3 bg-cyan-700 inline-flex items-center justify-center p-2 mb-4 rounded-md text-slate-200
                        hover:bg-cyan-800 focus:outline-none focus:ring-cyan-900">
                    <svg id="hamburger" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg id="close" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div id="nav-content" class="flex flex-col top-14 space-y-2 absolute right-0 w-full hidden text-lg
            md:flex-row md:mt-0 md:space-y-0 md:relative md:block md:top-0 z-10
            bg-gradient-to-r from-blue-100 via-slate-200 to-blue-100
            md:bg-none
            ">
                @foreach ($menu as $name => $url)
                    @if (is_array($url))
                        <div class="group inline-block">
                            <button class="outline-none focus:outline-none flex items-center px-3">
                                <span class="pr-1 flex-1 text-gray-700">{{ $name }}</span>
                                <span>
                                  <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180 transition duration-150 ease-in-out mr-1"
                                       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                  </svg>
                                </span>
                            </button>
                            <ul class="md:bg-white
                            border rounded-sm transform md:scale-0 md:group-hover:scale-100 md:absolute transition duration-150 ease-in-out origin-top min-w-32 list-none ml-0">
                                @foreach($url as $name2 => $link)
                                    <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
                                        <a href="{{ $link }}" title="{{ $name2 }}" class="text-gray-700 hover:underline hover:decoration-gray-700 hover:decoration-2 inline-block px-3 py-3 mr-2 md:py-2 rounded-md
                                        {{ class_for_nav($link, url()->current()) }}
                                        ">
                                            {{ $name2 }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                            <a href="{{ $url }}" title="{{ $name }}" class="
                    text-gray-700
                    hover:underline hover:decoration-gray-700 hover:decoration-2
                    inline-block px-3 py-4 mr-2 md:py-2 rounded-md {{ class_for_nav($url, url()->current()) }}">
                                {{ $name }}
                            </a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</nav>
