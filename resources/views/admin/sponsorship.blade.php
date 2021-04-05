@extends('layouts.app')

@section('content')
    @include('layouts.admin._header')
    @include('layouts.admin._bread', ['bread' => 'Parrainage'])

    <!-- <div class="px-4 md:px-10 mx-auto w-full -m-24"> -->
    <div class="flex flex-wrap">
        <div class="px-4 md:px-10 mx-auto w-full -m-24">
            <div class="flex flex-wrap mt-4">
                <div class="w-full mb-12 px-4">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                        <div class="rounded-t mb-0 px-4 py-3 border-0">
                            <div class="flex flex-wrap items-center">
                                <div class="relative w-full px-4 max-w-full flex-grow flex-1" >
                                    <h3 class="font-semibold text-lg text-gray-800">
                                        Liste des filleuls
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="block w-full overflow-x-auto">
                        <!-- Projects table -->
                        <table class="items-center w-full bg-transparent border-collapse" >
                            <thead>
                                <tr>
                                    <th class="px-6 align-middle border border-solid py-3 text-xl uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200" >
                                        Nom
                                    </th>
                                    <th class="px-6 align-middle border border-solid py-3 text-xl uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200">
                                        Email
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($sponsored_users as $user)
                                <tr>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                        <div class="flex">
                                            <span class="mr-2 text-xl">{{ $user->name }}</span>
                                        </div>
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                                        <div class="flex">
                                            <span class="mr-2 text-xl">{{ $user->email }}</span>
                                        </div>
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-right" >
                                        <a href="#" class="text-gray-600 block py-1 px-3" onclick="openDropdown(event,'table-light-1-dropdown')" >
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-light-1-dropdown" >
                                            <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                                >Action</a
                                            ><a  href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                                >Une autre action</a>
                                            <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                                            >Quelque chose</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
