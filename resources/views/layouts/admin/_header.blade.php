<!-- Header -->
<div style="background-color: rgb(209, 145, 8);" class="relative md:pt-32 pb-32 pt-12">
    <div class="px-4 md:px-10 mx-auto w-full">
      <div>
        <!-- Card stats -->
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                    <h5 class="text-gray-500 uppercase font-bold text-xs">
                      Balance
                    </h5>
                    <span class="font-semibold text-xl text-gray-800">
                      $ {{ $not_withdrawn_amount }}
                    </span>
                  </div>
                  <div class="relative w-auto pl-4 flex-initial">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500"
                    >
                      <i class="far fa-chart-bar"></i>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-gray-500 mt-4">
                  <span class="text-green-500 mr-2">
                    <i class="fas fa-arrow-up"></i> 2.5%
                  </span>
                  <span class="whitespace-no-wrap">
                    Vos gains totaux
                  </span>
                </p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div
                    class="relative w-full pr-4 max-w-full flex-grow flex-1"
                  >
                    <h5 class="text-gray-500 uppercase font-bold text-xs">
                      Gain
                    </h5>
                    <span class="font-semibold text-xl text-gray-800">
                      $ {{ $withdrawn_amount }}
                    </span>
                  </div>
                  <div class="relative w-auto pl-4 flex-initial">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500"
                    >
                      <i class="fas fa-chart-pie"></i>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-gray-500 mt-4">
                  <!-- <span class="text-red-500 mr-2">
                    <i class="fas fa-arrow-up"></i> 3.48%
                  </span> -->
                  <span class="whitespace-no-wrap">
                    Déjà retriré
                  </span>
                </p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div
                    class="relative w-full pr-4 max-w-full flex-grow flex-1"
                  >
                    <h5 class="text-gray-500 uppercase font-bold text-xs">
                      Filleuls
                    </h5>
                    <span class="font-semibold text-xl text-gray-800">
                        {{ $sponsored_users_count }}
                    </span>
                  </div>
                  <div class="relative w-auto pl-4 flex-initial">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500"
                    >
                      <i class="fas fa-users"></i>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-gray-500 mt-4">
                  <!-- <span class="text-orange-500 mr-2">
                    <i class="fas fa-arrow-down"></i> 1.10%
                  </span> -->
                  <span class="whitespace-no-wrap">
                    Vous avez parrainer
                  </span>
                </p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div
                    class="relative w-full pr-4 max-w-full flex-grow flex-1"
                  >
                    <h5 class="text-gray-500 uppercase font-bold text-xs">
                        @if ($paid_pack == null)
                            {{ _('Pack') }}
                        @else
                            {{ $paid_pack->packs()->first()->name }}
                        @endif
                    </h5>
                    <span class="font-semibold text-xl text-gray-800">
                        @if ($paid_pack == null)
                            <a href="{{ route('packs.index') }}" class="text-xs">Acheter maintenant</a>
                        @else
                            $ {{ $paid_pack->packs()->first()->value }}
                        @endif
                    </span>
                  </div>
                  <div class="relative w-auto pl-4 flex-initial">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500"
                    >
                      <i class="fas fa-percent"></i>
                    </div>
                  </div>
                </div>
                <p class="text-sm text-gray-500 mt-4">
                  <span class="text-green-500 mr-2">
                    <i class="fas fa-arrow-up"></i> 20%
                  </span>
                  <span class="whitespace-no-wrap">
                    Gain mensuel de 20%
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
