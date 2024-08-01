<nav class="bg-neutral-50 border border-neutral-10 sticky  top-0 z-50 w-full">
    <div class="max-w-screen-xl flex h-[100px] flex-wrap items-center justify-around mx-auto p-4">
        {{-- imagem --}}
        <a href="{{ route('index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('/assets/imagem/logo.png') }}" class="h-[60px]" alt="SPNSA Logo" />
        </a>
        {{-- fim imagem --}}

        {{-- mobile btn --}}
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-black rounded-lg md:hidden hover:bg-neutral-50  focus:outline-none focus:ring-2 focus:ring-main"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        {{-- Fim mobile btn  --}}
        <div class="hidden w-full md:block md:w-auto z-50" id="navbar-default">
            <ul
                class="font-medium flex flex-col w-full p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-neutral-50">

                <li>
                    <a href="{{ route('index') }}"
                        @if (Route::is('index')) class="block py-2 px-3 text-white bg-tertiary rounded md:bg-transparent md:text-tertiary md:p-0"
                    aria-current="page"
                @else
                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-800 md:p-0 " @endif>Home</a>
                </li>

                <li>
                    <a href="{{ route('about') }}"
                        @if (Route::is('about')) class="block py-2 px-3 text-white bg-tertiary rounded md:bg-transparent md:text-tertiary md:p-0 "
                        aria-current="page"
                    @else
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-800 md:p-0 " @endif>Quem
                        Somos</a>
                </li>

                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        @if (Route::is('daocao') || Route::is('notas') || Route::is('parceiro')) class="flex items-center justify-between w-full py-2 px-3 text-white bg-tertiary rounded md:bg-transparent md:text-tertiary md:p-0 " 
                    aria-current="page"
                @else
                    class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-800 md:p-0 md:w-auto" @endif>Como
                        Ajudar
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('daocao') }}"
                                    @if (Route::is('daocao')) class="block px-4 py-2 bg-main text-white"
                                aria-current="page"
                            @else
                                class="block px-4 py-2 hover:bg-main hover:text-white" @endif>Faça
                                    uma doação</a>
                            </li>
                            <li>
                                <a href="{{ route('notas') }}"
                                    @if (Route::is('notas')) class="block px-4 py-2 bg-main text-white"
                                aria-current="page"
                            @else
                                class="block px-4 py-2 hover:bg-main hover:text-white" @endif>Doe
                                    notas fiscais</a>
                            </li>
                            <li>
                                <a href="{{ route('parceiro') }}"
                                    @if (Route::is('parceiro')) class="block px-4 py-2 bg-main text-white"
                                aria-current="page"
                            @else
                                class="block px-4 py-2 hover:bg-main hover:text-white" @endif>Seja
                                    um parceiro</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ route('parceiros') }}"
                        @if (Route::is('parceiros')) class="block py-2 px-3 text-white bg-tertiary rounded md:bg-transparent md:text-tertiary md:p-0 "
                    aria-current="page"
                @else
                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-800 md:p-0 " @endif>
                        Parceiros</a>
                </li>

                <li>
                    <a href="{{ route('transparencia') }}"
                    @if (Route::is('transparencia')) class="block py-2 px-3 text-white bg-tertiary rounded md:bg-transparent md:text-tertiary md:p-0 "
                    aria-current="page"
                @else
                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-800 md:p-0 " @endif>Transparência</a>
                </li>

                <li>
                    <a href="{{route('agenda')}}"
                    @if (Route::is('agenda')) class="block py-2 px-3 text-white bg-tertiary rounded md:bg-transparent md:text-tertiary md:p-0 "
                    aria-current="page"
                @else
                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-800 md:p-0 " @endif>Agenda</a>
                </li>

                <li>
                    <a href="{{route('contato')}}"
                    @if (Route::is('contato')) class="block py-2 px-3 text-white bg-tertiary rounded md:bg-transparent md:text-tertiary md:p-0 "
                    aria-current="page"
                @else
                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-800 md:p-0 " @endif>Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
