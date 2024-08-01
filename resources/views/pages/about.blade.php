<x-layout>
    {{-- header --}}
    <div
        class="w-full h-[calc(100dvh-110px)] bg-about bg-cover bg-no-repeat flex flex-col gap-6 items-center justify-center bg-center">
        <div class=" bg-neutral-50 lg:rounded-xl shadow-xl bg-opacity-80 px-20 py-10 space-y-4">
            <h1 class="lg:text-6xl text-4xl">Quem somos</h1>
            <h2>Conheça o Serviço Promocional Nossa Senhora Aparecida</h2>
        </div>
    </div>

    {{-- Nosso objetivo --}}
    <div class="flex flex-col lg:gap-10 lg:flex-row">
        <div
            class="bg-blue-700 w-full p-8 flex justify-center items-center rounded-b-full lg:rounded-bl-none lg:w-2/4 lg:rounded-r-full">
            <h1 class="text-2xl lg:text-6xl text-white">Nosso Objetivo</h1>
        </div>
        <div class="my-6 mx-8 lg:w-2/4">
            <p class="text-sm lg:text-base">Oferecer um espaço acolhedor, possibilitando o pleno desenvolvimento
                intelectual, esportivo, artístico e espiritual, proporcionando atividades de forma lúdica, ampliando e
                fortalecendo as oportunidades de aprendizado, convivência e socialização, contribuindo com sua formação
                como cidadãos comprometidos com ações transformadoras da realidade em gradativo crescimento futuro, e o
                processo de aprendizagem no período do contra turno escolar, possibilitando: Aprender a conhecer
                aprender a fazer, aprender a conviver e aprender a ser.</p>
        </div>
    </div>

    {{-- mvv --}}
    <div class="bg-secondary p-10 w-full space-y-6">
        <div class="flex flex-col justify-start gap-6 lg:gap-20 lg:flex-row px-10 py-8 mx-auto lg:px-20">
            <div
                class="lg:w-2/5 flex flex-col gap-5 justify-start items-center bg-neutral-100 px-8 py-6 lg:px-10 lg:py-8 rounded-xl shadow-xl">
                <img src="{{ asset('/assets/icons/4.svg') }}" class="h-40" alt="" />
                <h1 class="text-xl">Missão</h1>
                <p class="lg:text-base text-sm">Empresas podem nos ajudar e muito! Saiba como sua empresa pode iniciar
                    uma parceria de mão dupla.</p>
            </div>
            <div
                class="lg:w-2/5 flex flex-col gap-5 justify-start items-center bg-neutral-100 px-8 py-6 lg:px-10 lg:py-8 rounded-xl shadow-xl">
                <img src="{{ asset('/assets/icons/6.svg') }}" class="h-40" alt="" />
                <h1 class="text-xl">Valores</h1>
                <p class="lg:text-base text-sm">Doe seu tempo! Seu carinho, seu serviço, seu conhecimento...tudo feito
                    com o coração tem inestimado valor.</p>
            </div>
            <div
                class="lg:w-2/5 flex flex-col gap-5 justify-start items-center bg-neutral-100 px-8 py-6 lg:px-10 lg:py-8 rounded-xl shadow-xl">
                <img src="{{ asset('/assets/icons/5.svg') }}" class="h-40" alt="" />
                <h1 class="text-xl">Visão</h1>
                <p class="lg:text-base text-sm">Faça uma doação única de acordo com sua possibilidade. Toda ajuda conta
                    muito!</p>
            </div>
        </div>
        <div class="w-full mt-4">
            <a href="{{route('history')}}"
                class="block w-fit px-10 py-6 bg-tertiary text-white mx-auto rounded-xl shadow-5-strong hover:bg-red-800 transition">Conheça
                nossa História</a>
        </div>
    </div>

    {{-- Quem faz acontecer --}}
    <div class="bg-main">

        <div class="mx-auto pt-8">
            <h1 class="text-center text-2xl lg:text-4xl">Quem faz acontecer</h1>
        </div>


        <div id="controls-carousel" class="relative w-full " data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-52 flex items-center justify-center overflow-hidden rounded-lg md:h-[400px]">
                <!-- Items -->

                @foreach ($pessoas as $pessoa)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="flex mx-auto gap-4 lg:gap-10 lg:w-3/4 w-3/5 items-center h-full">
                            <div class="w-fit border-4 border-tertiary rounded-full">
                                <img src="{{ asset('/assets/imagem/membros/' . $pessoa->imagem . '.jpeg') }}"
                                    class="max-h-80 max-w-20 lg:max-w-60 rounded-full" alt="Pessoa">
                            </div>
                            <div class="w-full lg:space-y-4 space-y-2 text-center">
                                <h1 class="text-xl lg:text-4xl">{{ $pessoa->nome }}</h1>
                                <hr class="h-1 border-none lg:w-1/2 w-3/4  bg-tertiary mx-auto">
                                <p class="text-lg font-bold">{{ $pessoa->cargo }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>

    {{-- Beneficiados --}}
    <div class="w-4/5 bg-secondary mx-auto px-10 py-10 lg:space-y-10 space-y-6 shadow-5-strong">
        <div class="mx-auto text-center">
            <h1 class="lg:text-4xl text-2xl">Beneficiados</h1>
        </div>
        <ol class=" list-disc space-y-4 text-sm lg:space-y-6 lg:text-base">
            <li>
                Crianças e adolescentes de 06 meses a 17 anos:
            </li>
            <li>
                cujas famílias são beneficiárias de programas de transferência de renda
            </li>
            <li>
                De famílias com precário acesso a renda e a serviços públicos
            </li>
            <li>
                Encaminhadas pelos serviços da Proteção Social Especial
            </li>
            <li>
                Em situação de trabalho infantil- PETI
            </li>
            <li>
                Em situação de acolhimento ou que já retornaram ao convívio familiar após medidas protetivas de acolhimento.
            </li>
            <li>
                Egressos de medidas socioeducativas ou em cumprimento de medidas socioeducativas em meio aberto
            </li>
            <li>
                Com deficiência, com prioridade para os benefícios do BPC
            </li>
            <li>
                Em cumprimento ou egressos de medidas de proteção do ECA
            </li>
            <li>
                Vinculados a programas de combate à violência e ao abuso e à exploração sexual.
            </li>
            <li>
                Encaminhados pelos serviços de Proteção e Atendimento Especializado a Família e Indivíduos (PAEFI)
            </li>
        </ol>
    </div>
</x-layout>
