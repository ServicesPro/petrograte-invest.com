@extends('layouts.guest')

@section('content')
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="text-4xl font-bold title-font mb-2 text-yellow-500">Choisissez votre Pack</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">
                    Nous vous permettons de choisir l’une de ces sept strates d’investissement et de gains. Toutes sont rémunérées sur un pourcentage de 12%, perçus chaque fin de mois pendant 10 mois.                </p>
            </div>
            <div class="flex flex-wrap justify-center -m-4">
                @foreach ($packs as $pack)
                    @if ($pack->value == "100")
                        <div class="p-4 md:w-1/3 w-full">
                            <div class="h-full p-6 rounded-lg border-2 border-yellow-500 flex flex-col relative overflow-hidden">
                                <span class="bg-yellow-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">LARGE</span>
                                <h2 class="text-sm tracking-widest title-font mb-1 font-medium uppercase">{{ $pack->name }}</h2>
                                <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                    <span class="text-lg ml-1 font-normal text-gray-500">$</span>
                                    <span>{{ $pack->value}}</span>
                                </h1>
                                <p class="leading-relaxed text-center text-base pt-6 pb-4">
                                    {{ $pack->description }}
                                </p>
                                <a href="{{ route('paid.create', ['pack'=>$pack]) }}" class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-yellow-500 rounded">
                                    Acheter
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="p-4 md:w-1/3 w-full">
                            <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                                <h2 class="text-sm tracking-widest title-font mb-1 font-medium uppercase">{{ $pack->name }}</h2>
                                <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                    <span class="text-lg ml-1 font-normal text-gray-500">$</span>
                                    <span>{{ $pack->value }}</span>
                                </h1>
                                <p class="leading-relaxed text-center text-base pt-6 pb-4">
                                    {{ $pack->description }}
                                </p>
                                <a href="{{ route('paid.create', ['pack'=>$pack]) }}" class="flex items-center mt-auto text-white bg-yellow-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">
                                    Acheter
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    @include('layouts.partials._footer')
@endsection
