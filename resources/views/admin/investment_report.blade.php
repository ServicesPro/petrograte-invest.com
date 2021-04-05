@extends('layouts.app')

@section('content')
    @include('layouts.admin._header')
    @include('layouts.admin._bread', ['bread' => 'Rapport d\'investissement'])

    <div class="px-4 md:px-10 mx-auto w-full -m-24">

        <div class="flex flex-wrap">
          <div class="w-full mb-12 xl:mb-0 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
            >
              <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                  <div
                    class="relative w-full px-4 max-w-full flex-grow flex-1"
                  >
                    <h3 class="font-semibold text-base text-gray-800">
                      Gain mensuels
                    </h3>
                  </div>
                </div>
              </div>
              <div class="block w-full overflow-x-auto">
                <!-- Projects table -->
                <table
                  class="items-center w-full bg-transparent border-collapse"
                >
                  <thead>
                    <tr>
                      <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                        Date
                      </th>
                      <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left" >
                        Gain
                      </th>
                    </tr>
                  </thead>
                    <tbody>
                        @foreach ($payoffs as $payoff)
                        <tr>
                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                                {{Carbon\Carbon::parse($payoff->created_at)->format('Y-m-d H:i:s')}}
                            </th>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                              $ {{ $payoff->amount }}
                            </td>
                          </tr>
                        @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
@endsection
