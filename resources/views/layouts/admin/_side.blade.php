<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div
        class="md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
    >
        <button
        class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
        type="button"
        onclick="toggleNavbar('example-collapse-sidebar')"
        >
        <i class="fas fa-bars"></i>
        </button>
        <a
        class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
        href="{{ url('/') }}"
        >
        Petrograte Invest
        </a>
        <ul class="md:hidden items-center flex flex-wrap list-none">
        <li class="inline-block relative">
            <a
            class="text-gray-600 block py-1 px-3"
            href="#pablo"
            onclick="openDropdown(event,'notification-dropdown')"
            ><i class="fas fa-bell"></i
            ></a>
            <div
            class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
            id="notification-dropdown"
            >
            <a
                href="#pablo"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                >Action</a
            ><a
                href="#pablo"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                >Une Autre ACtion</a
            ><a
                href="#pablo"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                >Quelque chose d'autre ici</a
            >
            <div class="h-0 my-2 border border-solid border-gray-200"></div>
            <a
                href="#pablo"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                >Lien</a
            >
            </div>
        </li>
        <li class="inline-block relative">
            <a
            class="text-gray-600 block"
            href="#pablo"
            onclick="openDropdown(event,'user-responsive-dropdown')"
            ><div class="items-center flex">
                <span
                class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full"
                ><img
                    alt="..."
                    class="w-full rounded-full align-middle border-none shadow-lg"
                    src="{{ asset('images/petrogate.pngr') }}"
                /></span></div
            ></a>
            <div
            class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
            id="user-responsive-dropdown"
            >
            <a
                href="#pablo"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                >Action</a
            ><a
                href="#pablo"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                >Une autre action</a
            ><a
                href="#pablo"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                >Quelque chose ici</a
            >
            <div class="h-0 my-2 border border-solid border-gray-200"></div>
            <a
                href="#pablo"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                >Lien</a
            >
            </div>
        </li>
        </ul>
        <div
        class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
        id="example-collapse-sidebar"
        >
        <div
            class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-gray-300"
        >
            <div class="flex flex-wrap">
            <div class="w-6/12">
                <a
                class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
                href="../index.php"
                >
                Petrograte Invest
                </a>
            </div>
            <div class="w-6/12 flex justify-end">
                <button
                type="button"
                class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                onclick="toggleNavbar('example-collapse-sidebar')"
                >
                <i class="fas fa-times"></i>
                </button>
            </div>
            </div>
        </div>
        <form class="mt-6 mb-4 md:hidden">
            <div class="mb-3 pt-0">
            <input
                type="text"
                placeholder="Rechercher"
                class="px-3 py-2 h-12 border border-solid border-gray-600 placeholder-gray-400 text-gray-700 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
            />
            </div>
        </form>
        <!-- Divider -->
        <hr class="my-4 md:min-w-full" />
        <!-- Navigation -->

        <ul class="md:flex-col md:min-w-full flex flex-col list-none">
            <li class="items-center">
            <a
                href="{{ url('/dashboard') }}"
                class="inline-flex items-center text-xs uppercase py-3 font-bold text-yellow-500 hover:text-yellow-600"
            >
                <i class="material-icons mr-2 text-sm hover:text-gray-400">
                grid_view
                </i>
                Tableau de bord
            </a>
            </li>

            <li class="items-center">
            <a
                href="{{ url('/profile') }}"
                class="inline-flex items-center text-xs uppercase py-3 font-bold text-gray-800 hover:text-gray-600"
            >
                <i class="material-icons mr-2 text-sm hover:text-gray-400">
                account_circle
                </i>
                Profile
            </a>
            </li>

            <li class="items-center">
            <a
                href="{{ url('/investment_report') }}"
                class="inline-flex items-center text-xs uppercase py-3 font-bold text-gray-800 hover:text-gray-600"
            >
            <i class="material-icons mr-2 text-sm hover:text-gray-400">
                summarize
            </i>
                Rapport d'investissement
            </a>
            </li>

            <li class="items-center">
            <a
                href="{{ url('/sponsorship') }}"
                class="inline-flex items-center text-xs uppercase py-3 font-bold text-gray-800 hover:text-gray-600"
            >
                <i class="material-icons mr-2 text-sm hover:text-gray-400">
                    supervisor_account
                </i>
                Parainnage
            </a>
            </li>

            <li class="items-center">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="inline-flex items-center text-xs uppercase py-3 font-bold text-gray-800 hover:text-gray-600" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <i class="material-icons mr-2 text-sm hover:text-gray-400">logout</i>
                        {{ __('Déconnexion') }}
                    </a>
                </form>
            </li>
        </ul>

        </div>
    </div>
</nav>
