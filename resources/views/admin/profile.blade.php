@extends('layouts.app')

@section('content')
    @include('layouts.admin._header')
    @include('layouts.admin._bread', ['bread' => 'Profil'])

    <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
            <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                        <h5 class="text-gray-500 uppercase font-bold text-xs">
                            Code de parrainage
                        </h5>
                        {{-- <span class="font-semibold text-xl text-gray-800">
                          @dump(Request::root())

                         </span> --}}
                        <!-- Small Input -->
                        <div class="relative flex w-full flex-wrap items-stretch mb-3">
                            <span class="z-10 h-full leading-snug font-normal text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-1">
                            <i class="fas fa-lock"></i>
                            </span>
                            <input type="text" placeholder="{{ Auth::user()->name }}" value="{{ Auth::user()->name }}" class="px-2 py-1 placeholder-gray-400 text-gray-700 relative bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap">
          <div class="w-full lg:w-8/12 px-4 mt-4">
            <div
              class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-200 border-0"
            >
              <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                  <h6 class="text-gray-800 text-xl font-bold">Mon compte</h6>
                  <button
                    class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                    type="button"
                  >
                    Modifier
                  </button>
                </div>
              </div>
              <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <form>
                  <h6
                    class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase"
                  >
                    Information utilisateur
                  </h6>
                  <div class="flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label
                          class="block uppercase text-gray-700 text-xs font-bold mb-2"
                          htmlFor="grid-password"
                        >
                          Nom utilisateur
                        </label>
                        <input
                          type="text"
                          class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                          value="{{ Auth::user()->name }}"
                        />
                      </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label
                          class="block uppercase text-gray-700 text-xs font-bold mb-2"
                          htmlFor="grid-password"
                        >
                          Adresse Email
                        </label>
                        <input
                          type="email"
                          class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                          value="{{ Auth::user()->email }}"
                        />
                      </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label
                          class="block uppercase text-gray-700 text-xs font-bold mb-2"
                          htmlFor="grid-password"
                        >
                          Prénom(s)
                        </label>
                        <input
                          type="text"
                          class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                          value="Doe"
                        />
                      </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label
                          class="block uppercase text-gray-700 text-xs font-bold mb-2"
                          htmlFor="grid-password"
                        >
                          Nom
                        </label>
                        <input
                          type="text"
                          class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                          value="Doe"
                        />
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-4/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16"
            >
              <div class="px-6">
                <div class="flex flex-wrap justify-center">
                  {{-- <div class="w-full px-4 flex justify-center">
                    <div class="relative">
                      <img
                        alt="..."
                        src="../../assets/img/team-2-800x800.jpg"
                        class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px"
                      />
                    </div>
                  </div> --}}
                  <div class="w-full px-4 text-center mt-8">
                    <div class="flex justify-center py-4 lg:pt-4 pt-8">
                      <div class="mr-4 p-3 text-center">
                        <span
                          class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                        >
                        {{ $sponsored_users_count }}
                        </span>
                        <span class="text-sm text-gray-500">Filleuls</span>
                      </div>
                      <div class="mr-4 p-3 text-center">
                        <span
                          class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                        >
                        $ {{ $withdrawn_amount }}
                        </span>
                        <span class="text-sm text-gray-500">Gain</span>
                      </div>
                      <div class="lg:mr-4 p-3 text-center">
                        <span
                          class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                        >
                          $ {{ $not_withdrawn_amount }}
                        </span>
                        <span class="text-sm text-gray-500">Balance</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center mt-12">
                  <h3
                    class="text-xl font-semibold leading-normal mb-2 text-gray-800"
                  >
                  {{ Auth::user()->name }}
                  </h3>
                  <div
                    class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase"
                  >
                    <i
                      class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"
                    ></i>
                    Lomé, Togo
                  </div>
                </div>
              </div>
            </div>
    </div>
        </div>
    </div>
@endsection
