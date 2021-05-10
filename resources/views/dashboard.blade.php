@extends('layouts.app')

@section('content')
    @include('layouts.admin._header')
    @include('layouts.admin._bread', ['bread' => 'Tableau de bord'])

    <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="flex flex-wrap">
            <div class="w-full mb-12 xl:mb-0 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                    <div class="container px-5 py-6 mx-auto">
                        <div class="flex flex-col text-center w-full mb-12">
                            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">DECOMPTE</h1>
                            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Temps restant avant le prochain gain.</p>
                        </div>
                        <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <div class="flex flex-wrap -m-2">

                                <section class="text-gray-600 body-font">
                                    <div class="container px-5 py-12 mx-auto">
                                        {{-- <div class="md:flex md:flex-row flex flex-col w-full" id="countdown" data-time="{{ $carbon }}">
                        <div class="p-4 md:w-1/4 w-full">
                        <div style="width: 10rem;" class="h-full border-2 border-yellow-500 border-opacity-60 rounded-lg overflow-hidden">
                            <div style="width: 10rem;" class="h-full border-2 border-yellow-500 border-opacity-60 rounded-lg overflow-hidden">
                                <div class="p-8">
                                <h1 class="title-font text-center font-bold text-5xl text-gray-900 mb-3" id="days"></h1>
                                <h2 class="tracking-widest text-xs title-font text-center font-bold text-yellow-400 mb-1">Jours</h2>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="p-4 md:w-1/4">
                        <div style="width: 10rem;"  class="h-full border-2 border-yellow-500 border-opacity-60 rounded-lg overflow-hidden">
                            <div style="width: 10rem;" class="h-full border-2 border-yellow-500 border-opacity-60 rounded-lg overflow-hidden">
                                <div class="p-8">
                                <h1 class="title-font text-center font-bold text-5xl text-gray-900 mb-3" id="hours"></h1>
                                <h2 class="tracking-widest text-xs title-font text-center font-bold text-yellow-400 mb-1">Heures</h2>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="p-4 md:w-1/4">
                            <div style="width: 10rem;" class="h-full border-2 border-yellow-500 border-opacity-60 rounded-lg overflow-hidden">
                                <div class="p-8">
                                <h1 class="title-font text-center font-bold text-5xl text-gray-900 mb-3" id="minutes"></h1>
                                <h2 class="tracking-widest text-xs title-font text-center font-bold text-yellow-400 mb-1">Minutes</h2>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 md:w-1/4">
                        <div style="width: 10rem;" class="h-full border-2 border-yellow-500 border-opacity-60 rounded-lg overflow-hidden">
                            <div class="p-8">
                                <h1 class="title-font text-center font-bold text-5xl text-gray-900 mb-3" id="seconds"></h1>
                                <h2 class="tracking-widest text-xs title-font text-center font-bold text-yellow-400 mb-1">Secondes</h2>
                            </div>
                        </div>
                        </div>

                    </div> --}}

                                        <div class="relative md:pt-14 pb-32 pt-12">
                                            <div class="px-4 md:px-10 mx-auto w-full">
                                                <div>
                                                    <!-- Card stats -->
                                                    <div class="flex flex-wrap" id="countdown"
                                                        data-time="{{ $carbon }}">
                                                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                                            <div
                                                                class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                                                <div class="flex-auto p-4">
                                                                    <div class="flex flex-wrap">
                                                                        <div style="width: 100%;"
                                                                            class="h-full border-2 border-yellow-500 border-opacity-60 rounded-lg overflow-hidden">
                                                                            <div class="p-8">
                                                                                <h1 class="title-font text-center font-bold text-5xl text-gray-900 mb-3"
                                                                                    id="days"></h1>
                                                                                <h2
                                                                                    class="tracking-widest text-xs title-font text-center font-bold text-yellow-400 mb-1">
                                                                                    Jours</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                                            <div
                                                                class="relative flex flex-col min-w-0 break-words rounded mb-6 xl:mb-0 shadow-lg">
                                                                <div class="flex-auto p-4">
                                                                    <div class="flex flex-wrap">
                                                                        <div style="width: 100%;"
                                                                            class="h-full border-2 border-yellow-500 border-opacity-60 rounded-lg overflow-hidden">
                                                                            <div class="p-8">
                                                                                <h1 class="title-font text-center font-bold text-5xl text-gray-900 mb-3"
                                                                                    id="hours"></h1>
                                                                                <h2
                                                                                    class="tracking-widest text-xs title-font text-center font-bold text-yellow-400 mb-1">
                                                                                    Heures</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                                            <div
                                                                class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                                                <div class="flex-auto p-4">
                                                                    <div class="flex flex-wrap">
                                                                        <div style="width: 100%;"
                                                                            class="h-full border-2 border-yellow-500 border-opacity-60 rounded-lg overflow-hidden">
                                                                            <div class="p-8">
                                                                                <h1 class="title-font text-center font-bold text-5xl text-gray-900 mb-3"
                                                                                    id="minutes"></h1>
                                                                                <h2
                                                                                    class="tracking-widest text-xs title-font text-center font-bold text-yellow-400 mb-1">
                                                                                    Minutes</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                                            <div
                                                                class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                                                <div class="flex-auto p-4">
                                                                    <div class="flex flex-wrap">
                                                                        <div style="width: 100%;"
                                                                            class="h-full border-2 border-yellow-500 border-opacity-60 rounded-lg overflow-hidden">
                                                                            <div class="p-8">
                                                                                <h1 class="title-font text-center font-bold text-5xl text-gray-900 mb-3"
                                                                                    id="seconds"></h1>
                                                                                <h2
                                                                                    class="tracking-widest text-xs title-font text-center font-bold text-yellow-400 mb-1">
                                                                                    Secondes</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="container px-5 mx-auto">
                                    <div class="flex justify-center">
                                        <a href="#" id="withdrawal-btn" class="inline-flex items-center border-0 py-1 px-3 focus:outline-none bg-yellow-500 text-gray-900 hover:bg-yellow-200 rounded text-base mt-4 md:mt-0">Demande de retrait</a>
                                    </div>
                                </section>

                                <div class="bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center" id="overlay">
                                    <div class="bg-gray-200 max-w-lg py-1 px-2 rounded shadow-xl">
                                        <div class="mt-2 text-sm">
                                            <form method="POST" action="{{ route('withdrawal.store') }}">
                                                @csrf
                                                <div class="flex justify-between">
                                                    <h4 class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase">Formulaire de demande de retrait</h4>
                                                    <span id="close-modal" class="material-icons cursor-pointer">
                                                        disabled_by_default
                                                    </span>
                                                </div>
                                                <div class="flex flex-wrap">
                                                    <div class="w-full lg:w-6/12 px-4">
                                                        <div class="relative w-full mb-3">
                                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" htmlFor="grid-password" >
                                                                Paypal
                                                            </label>
                                                            <input name="paypal" type="text" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150" />
                                                        </div>
                                                    </div>
                                                    <div class="w-full lg:w-6/12 px-4">
                                                        <div class="relative w-full mb-3">
                                                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" htmlFor="grid-password">
                                                                Perfect Money
                                                            </label>
                                                            <input name="perfect_money" type="text" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="my-3 flex justify-end space-x-3">
                                                    <button type="submit" class="px-3 py-1 rounded bg-yellow-500">Envoyer</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const overlay = document.getElementById('overlay')
            const withdrawalBtn = document.getElementById('withdrawal-btn')
            const closeModal = document.getElementById('close-modal')

            const toggleModal = () => {
                overlay.classList.toggle('flex')
                overlay.classList.toggle('hidden')
            }

            console.log(closeModal)

            withdrawalBtn.addEventListener('click', () => {
                overlay.classList.toggle('hidden')
                overlay.classList.toggle('flex')
            })

            closeModal.addEventListener('click', () => {
                overlay.classList.remove('flex')
                overlay.classList.add('hidden')
            })
        })
        
        // window.addEventListener('DOMContentLoaded', () => {
          //   const overlay = document.getElementById('overlay')
            // const withdrawalBtn = document.getElementById('withdrawal-btn')
        //     const closeModal = document.getElementById('close-modal')

        //     const toggleModal = () => {
          //       overlay.classList.toggle('flex')
        //         overlay.classList.toggle('hidden')
        //     }

         //    console.log(closeModal)

          //   withdrawalBtn.addEventListener('click', () => {
          //       overlay.classList.toggle('hidden')
          //       overlay.classList.toggle('flex')
          //  })

          //   closeModal.addEventListener('click', () => {
          //       overlay.classList.remove('flex')
          //       overlay.classList.add('hidden')
          //   })
       //  })
        
        const MINUTES = 60
        const HOURS = 60 * MINUTES
        const DAYS = 24 * HOURS

        // const elements = {
        //     days: document.getElementById('#days'),
        //     hours: document.getElementById('#hours'),
        //     minutes: document.getElementById('#minutes'),
        //     seconds: document.getElementById('#seconds')
        }

        let $days = document.getElementById('#days')
        let $hours = document.getElementById('#hours')
        let $minutes = document.getElementById('#minutes')
        let $seconds = document.getElementById('#seconds')

        const $days = document.getElementById('#days')
        const $hours = document.getElementById('#hours')
        const $minutes = document.getElementById('#minutes')
        const $seconds = document.getElementById('#seconds')
        let previousDiff = {}

        const countdown = document.getElementById('countdown')
        const launchDate = Date.parse(countdown.dataset.time) / 1000
        // alert(countdown.dataset.time)

        function refreshCountdown() {
            const difference = launchDate - Date.now() / 1000

            if (difference <= 0) {
                // document.location.reload()
                return
            }
            
            const diff = {
                days: Math.floor(difference / DAYS),
                hours: Math.floor(difference % DAYS / HOURS),
                minutes: Math.floor(difference % HOURS / MINUTES),
                seconds: Math.floor(difference % MINUTES)
            }

            updateDom(diff)

            window.setTimeout(() => {
                window.requestAnimationFrame(refreshCountdown)
            }, 1000)
        }

        function updateDom(diff) {
            // Object.keys(diff).forEach(() => {
            //     if (previousDiff[key] != diff[key]) {
            //         elements[key].innerText = diff[key]
            //     }
            // })

            if (previousDiff.days != diff.days) {
                $days.innerText = diff.days
            }
            
            if (previousDiff.hours != diff.hours) {
                $hours.innerText = diff.hours
            }

            if (previousDiff.minutes != diff.minutes) {
                $minutes.innerText = diff.minutes
            }

            if (previousDiff.seconds != diff.seconds) {
                $seconds.innerText = diff.seconds
            }

            previousDiff = diff
        }

        refreshCountdown();
    </script>
@endsection
