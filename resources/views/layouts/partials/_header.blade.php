{{-- <header class="text-gray-600 w-screen body-font">
    <div id="header" class="w-screen z-50 bg-transparent container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="{{ url('/') }}" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img src="{{ asset('images/petrogate.png') }}" alt="Petrograte Logo" class="h-16">
            <span class="ml-3 text-xl">Petrograte Invest</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="{{ url('/') }}" class="mr-5 hover:text-gray-900">Accueil</a>
            <a href="{{ Request::root() }}#services" class="mr-5 hover:text-gray-900">Services</a>
            <a href="{{ route('packs.index') }}" class="mr-5 hover:text-gray-900">Packs</a>
            <a href="{{ Request::root() }}#request" class="mr-5 hover:text-gray-900">Requêtes</a>
            <a href="{{ Request::root() }}#contact" class="mr-5 hover:text-gray-900">Contact</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="mr-5 inline-flex items-center border-0 py-1 px-3 focus:outline-none bg-blue-500 text-gray-900 hover:bg-yellow-200 rounded-full text-base mt-4 md:mt-0">Tableau de bord</a>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center border-0 py-1 px-3 focus:outline-none bg-yellow-500 text-gray-900 hover:bg-yellow-200 rounded text-base mt-4 md:mt-0">
                        Se connecter
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-5 inline-flex items-center border-0 py-1 px-3 focus:outline-none bg-blue-500 text-gray-900 hover:bg-yellow-200 rounded text-base mt-4 md:mt-0">
                            S'inscrire
                        </a>
                    @endif
                @endauth
            @endif
        </nav>
    </div>
</header> --}}

<nav class="flex flex-wrap items-center bg-white p-3">
    <a href="{{ url('/') }}" class="p-2 mr-4 flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <img src="{{ asset('images/petrogate.png') }}" alt="Petrograte Logo" class="h-16">
        <span class="ml-3 text-xl">Petrograte Invest</span>
    </a>

    <button class="text-gray-700 inline-flex p-3 hover:bg-green-900 rounded lg:hidden ml-auto nav-toggler" data-target="#navigation">
        <i class="material-icons h-16">menu</i>
    </button>

    <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto" id="navigation">
        <div class="lg:inline-flex lg:flex-row lg:ml-auto flex flex-col">
            <a href="{{ url('/') }}" class="lg:inline-flex lg:w-auto px-3 py-2 rounded hover:text-white hover:bg-gray-900">Accueil</a>
            <a href="{{ Request::root() }}#services" class="lg:inline-flex lg:w-auto px-3 py-2 rounded hover:text-white hover:bg-gray-900">Services</a>
            <a href="{{ route('packs.index') }}" class="lg:inline-flex lg:w-auto px-3 py-2 rounded hover:text-white hover:bg-gray-900">Packs</a>
            <a href="{{ Request::root() }}#request" class="lg:inline-flex lg:w-auto px-3 py-2 rounded hover:text-white hover:bg-gray-900">Requêtes</a>
            <a href="{{ Request::root() }}#contact" class="lg:inline-flex lg:w-auto px-3 py-2 rounded hover:text-white hover:bg-gray-900 md:mr-3">Contact</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="lg:inline-flex lg:w-auto px-3 py-2  border-0 focus:outline-none bg-blue-500 text-gray-900 hover:bg-yellow-200 rounded-full text-base mt-4 md:mt-0">Tableau de bord</a>
                @else
                    <a href="{{ route('login') }}" class="lg:inline-flex lg:w-auto px-3 py-2 border-0 focus:outline-none bg-yellow-500 text-gray-900 hover:bg-yellow-200 rounded text-base mt-4 md:mt-0">
                        Se connecter
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="md:ml-3 lg:inline-flex lg:w-auto px-3 py-2  border-0 focus:outline-none bg-blue-500 text-gray-900 hover:bg-yellow-200 rounded text-base mt-4 md:mt-0">
                            S'inscrire
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</nav>
