@extends('layouts.guest')

@section('content')
    <section style="background: url({{ asset('images/header-background.jpg') }});" class="text-gray-600 min-h-screen body-font md:pt-24 md:-ml-48">
        <div class="container px-5 mx-auto md:ml-48">
            <div class="flex flex-wrap -m-4">
                <div class="md:p-4 md:w-1/2">
                    <div class="h-full px-8 pt-16 md:pb-24 pb-10 rounded-lg overflow-hidden relative">
                        <h1 class="title-font text-5xl font-extrabold text-yellow-500 mb-3">Petrograte</h1>
                        <h1 class="title-font text-5xl font-extrabold text-gray-900 mb-3">investissement</h1>
                        <p class="leading-relaxed mb-3">
                            Petrograte est un groupe d'actionnaire qui investit dans les grandes raffineries en Arabie Saoudite, Qatar et au Koweït. Nous tradons également sur le marché pétrolier. L'investissement dans le domaine pétrolier est sans risque et constitue un gage pour votre futur.
                        </p>
                        <a href="{{ route('login') }}" class="inline-flex items-center border-0 py-3 px-6 focus:outline-none bg-yellow-500 text-gray-900 hover:bg-yellow-200 rounded-full text-base mt-4 md:mt-0">
                            Se connecter
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                              <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="hidden md:block md:p-4 md:w-1/2">
                    <div class="h-full px-8 pt-6 pb-24 rounded-lg overflow-hidden relative">
                        <img class="" src="{{ asset('images/pipi.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="text-4xl text-yellow-500 font-bold title-font mb-4">NOS SERVICES</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                    Services Nous offrons des prestations relatives au monde de la finance. Nous faisons une analyse rationnelle du marché, nous faisons des placements de fonds, et nous élaborons en fonction de divers paramètres des stratégies et plans d’action permettant de sécuriser vos biens.
                </p>
            </div>
            <div class=" text-center flex flex-wrap -m-4">
                <div class="p-4 md:w-1/3">
                    <div class="h-full flex flex-col items-center text-center">
                        <div class="w-1/3">
                            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-auto object-cover object-center mb-4" src="{{ asset('images/services-icon-1.svg') }}">
                        </div>
                        <div class="w-full pt-3">
                            <h2 class="title-font font-bold text-2xl text-gray-900">Analyse du marche</h2>
                            <p class="mb-4">
                                Petrograte est l’une des plateformes d’investissement ayant des analystes financiers très prisés pour leur finesse dans l’analyse et la réflexion. Nous sommes une équipe perspicace en analyse fondamentale et technique, et les résultats des 05 ans d’expériences dont nous faisons preuve sont fort évocateurs.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-4 md:w-1/3">
                    <div class="h-full flex flex-col items-center text-center">
                        <div class="w-1/3">
                            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-auto object-cover object-center mb-4" src="{{ asset('images/services-icon-2.svg') }}">
                        </div>
                        <div class="w-full pt-3">
                            <h2 class="title-font font-bold text-2xl text-gray-900">Placement fiable</h2>
                            <p class="mb-4">
                                PLACEMENT FIABLE Effectuez en toute confiance un placement de fonds qui vous attirera des gains incroyables. Nous tradons sur un modèle qui offre à votre investissement une sûreté et une sécurité des plus affichées.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-4 md:w-1/3">
                    <div class="h-full flex flex-col items-center text-center">
                        <div class="w-1/3">
                            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-auto object-cover object-center mb-4" src="{{ asset('images/services-icon-3.svg') }}">
                        </div>
                        <div class="w-full pt-3">
                            <h2 class="title-font font-bold text-2xl text-gray-900">Plan d'action</h2>
                            <p class="mb-4">
                                PLAN D’ACTION Nous élaborons suivant la compilation des divers chiffres et donnés financiers, les plans d’action devant aboutir à un investissement sur avec des rendements considérables.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container px-5 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="md:p-4 md:w-1/2 w-full">
                    <div class="h-96 px-8 md:pt-16 md:pb-24 pb-10 rounded-lg overflow-hidden relative">
                        <h1 class="title-font text-4xl font-extrabold text-yellow-500 mb-3">A PROPOS DE</h1>
                        <h1 class="title-font text-4xl font-extrabold text-yellow-500 mb-3">PETROGRATE</h1>
                        <p class="leading-relaxed mb-3">
                            Petrograte est une plateforme qui propose des services de trading et d’investissements financiers. La structure est constituée en 2006 et a déjà fait plusieurs millionnaires par le biais des investissements.
                        </p>
                    </div>
                </div>

                <div class="md:p-4 md:w-1/2 w-full hidden md:block">
                    <div class="h-96 px-8 md:pt-6 pt-2 md:pb-24 pb-10 rounded-lg overflow-hidden relative">
                        <img class="h-80" src="{{ asset('images/top1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container px-5 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/2">
                    <div class="h-96 px-8 md:pt-6 pt-2 md:pb-24 pb-10 rounded-lg overflow-hidden relative hidden md:block">
                        <img class="h-80" src="{{ asset('images/details-2-office-team-work.svg') }}" alt="">
                    </div>
                </div>

                <div class="p-4 md:w-1/2">
                    <div class="h-96 px-8 md:pt-6 pt-2 md:pb-24 pb-10 rounded-lg overflow-hidden relative">
                        <h1 class="title-font text-4xl font-extrabold text-yellow-500 mb-3">Notre équipe</h1>
                        <p class="leading-relaxed mb-3">
                            NOTRE EQUIPE Petrograte est constituée d’éminents traders, de comptables, et d’analystes financiers, tous formés dans des universités reconnus pour la qualité de leurs curricula et moulés dans la pratique financière et évoluant au rythme des changements les plus minimes qui soient.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 md:py-24 py-12 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="text-4xl font-bold title-font mb-2 text-yellow-500">Choisissez votre Pack</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">
                    Nous vous permettons de choisir l’une de ces sept strates d’investissement et de gains. Toutes sont rémunérées sur un pourcentage de 12%, perçus chaque fin de mois pendant 10 mois.
                </p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/3 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                        <h2 class="text-sm tracking-widest title-font mb-1 font-medium">PACK 1</h2>
                        <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                            <span class="text-lg ml-1 font-normal text-gray-500">$</span>
                            <span>25</span>
                        </h1>
                        <p class="leading-relaxed text-center text-base pt-6 pb-4">
                            Pack 25$ et attendez vous à obtenir un gain de 12% chaque dix (10) jours selon le model suivant: gain quotidien 0,3$ gain mensuel 9$
                        </p>
                        <a href="{{ route('paid.create', ['pack' => 1]) }}" class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">
                            Acheter
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                        <h2 class="text-sm tracking-widest title-font mb-1 font-medium">PACK 2</h2>
                        <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                            <span class="text-lg ml-1 font-normal text-gray-500">$</span>
                            <span>50</span>
                        </h1>
                        <p class="leading-relaxed text-center text-base pt-6 pb-4">
                            Pack 50$ et attendez vous à obtenir un gain de 12% chaque dix (10) jours selon le model suivant: gain quotidien 0,6$ gain mensuel 18$                        </p>
                        <a href="{{ route('paid.create', ['pack' => 2]) }}" class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">
                            Acheter
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-yellow-500 flex flex-col relative overflow-hidden">
                        <span class="bg-yellow-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">LARGE</span>
                        <h2 class="text-sm tracking-widest title-font mb-1 font-medium">PACK 3</h2>
                        <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                            <span class="text-lg ml-1 font-normal text-gray-500">$</span>
                            <span>100</span>
                        </h1>
                        <p class="leading-relaxed text-center text-base pt-6 pb-4">
                            Pack 100$ et attendez vous à obtenir un gain de 12% chaque dix (10) jours selon le model suivant: gain quotidien 1,2$ gain mensuel 36$                        
                        <a href="{{ route('paid.create', ['pack' => 3]) }}" class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">
                            Acheter
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container mx-auto py-6">
                <div class="flex justify-center">
                    <a href="{{ route('packs.index') }}" class="underline text-center text-base text-gray-500">Suivant</a>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font overflow-hidden">

        <div class="sliderAx h-auto">
            <div id="slider-1" class="">
                <div class="bg-cover bg-center  h-auto text-white py-8 object-fill">
                    <img class="w-screen" src="{{ asset('images/banniere.jpg') }}" alt="">
                </div> <!-- container -->
            </div>

            <div id="slider-2" class="">
                <div class="bg-cover bg-top  h-auto text-white py-8 object-fill" >
                    {{-- <p class="font-bold text-sm uppercase">Services</p>
                    <p class="text-3xl font-bold">Hello world</p>
                    <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                    <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a> --}}
                    <img class="w-screen" src="{{ asset('images/banniere2.jpg') }}" alt="">
                </div> <!-- container -->
            </div>
        </div>
        <div  class="flex justify-between w-12 mx-auto pb-2">
            <button id="sButton1" onclick="sliderButton1()" class="bg-yellow-400 rounded-full w-4 pb-2 " ></button>
            <button id="sButton2" onclick="sliderButton2() " class="bg-yellow-400 rounded-full w-4 p-2"></button>
        </div>

        {{-- <div class="">
            <img class="w-screen" src="{{ asset('images/banniere.jpg') }}" alt="">
        </div> --}}
    </section>

    <section id="request" class="text-gray-600 bg-gray-100 body-font relative">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div class="lg:w-2/3 md:w-1/2 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <div class="px-8 pt-16 pb-24 rounded-lg overflow-hidden relative">
                    <h1 class="title-font md:text-5xl text-3xl font-extrabold text-yellow-500 mb-3">REMPLISSEZ CE FORMULAIRE AFIN D'AVOIR DES ECLAIRCISSEMENTS</h1>
                    <p class="leading-relaxed mb-3">
                        Vous êtes intéressés par nos services mais vous souhaiterez comprendre certains de leurs aspects, vous avez des inquiétudes sur quelques points ou vous voulez tout juste passer à l’action ? Veuillez juste remplir ce formulaire et attendre patiemment le feed-back de nos experts, qui ne prendra pas 24 heures.
                    </p>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/ flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <form action="{{ route('understanding_request.store') }}" method="post">
                    @csrf
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-gray-600">Nom</label>
                        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-600">Intéressez par</label>
                        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    <button type="submit" class="text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">Envoyer</button>
                </form>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font relative">
        <div class="flex justify-center pt-24">
            <div class="container mx-auto w-4/5">
                <img src="{{ asset('images/table.jpg') }}" alt="">
            </div>
        </div>
    </section>

    <section id="contact" class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100939.98555098464!2d-122.507640204439!3d37.757814996609724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sro!4v1498231462606" allowfullscreen style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADRESSE</h2>
                        <p class="mt-1">22 Innovative Area, San Francisco, C 9404, US</p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                        <a href="mailto:info@petrograte-invest.com" class="text-yellow-500 leading-relaxed">info@petrograte-invest.com</a>
                        {{-- <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">TEL</h2>
                        <p class="leading-relaxed">000-000-0000</p> --}}
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Adresse</h2>
                    <p class="leading-relaxed mb-5 text-gray-600">N'hésitez pas à nous appeler ou à nous envoyer un message du formulaire de contact</p>
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-gray-600">Nom</label>
                        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    <button type="submit" class="text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">Envoyer</button>
                </form>
          </div>
        </div>
    </section>

    @include('layouts.partials._footer')
@endsection
