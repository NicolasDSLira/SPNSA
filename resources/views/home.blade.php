<x-layout>
    {{-- header --}}
    <div
        class="h-[calc(100dvh-110px)] w-full bg-hero bg-cover bg-center bg-no-repeat flex items-center justify-center lg:justify-start lg:px-20 px-4">
        <div
            class="text-neutral-900 lg:px-10 lg:py-20 px-4 py-10 rounded-xl shadow-md shadow-main lg:space-y-4 space-y-2 bg-neutral-50 w-full lg:w-fit">
            <h1 class="lg:text-5xl text-3xl drop-shadow-2xl antialiased	">Acolher para transformar.</h1>
            <h2 class="lg:text-3xl text-xl drop-shadow-2xl shadow-black	tracking-wider antialiased">Serviço Promocional
                Nossa
                Senhora Aparecida</h2>
        </div>
    </div>

    {{-- O que nos move --}}
    <div class=" bg-16 bg-bottom bg-gradient-to-b from-neutral-50 from-80% to-main to-80%  h-fit pb-10">
        <div
            class="bg-neutral-50 w-3/4 flex flex-col mx-auto justify-start items-center shadow-xl border-x-2 border-b-2 border-neutral-400 rounded-b-xl lg:px-10 px-6 py-10">
            <div class="lg:space-y-6 space-y-4 text-center">
                <h1 class="lg:text-4xl text-2xl text-center">O que nós move</h1>
                <hr class="bg-black border-none h-0.5 w-3/5 mx-auto" />
                <p class="antialiased lg:text-base text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                </p>
            </div>
            <div class="flex lg:gap-20 lg:flex-row gap-10 flex-col justify-center items-center my-10">
                <div class="flex flex-col justify-center items-center gap-6">
                    <img src="{{ asset('/assets/imagem/logo.png') }}" alt="">
                    <h1 class="text-tertiary text-2xl lg:text-3xl">Titulo</h1>
                    <p class="text-black text-sm lg:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-6">
                    <img src="{{ asset('/assets/imagem/logo.png') }}" alt="">
                    <h1 class="text-tertiary text-2xl lg:text-3xl">Titulo</h1>
                    <p class="text-black text-sm lg:text-base">Lorem ip sum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-6">
                    <img src="{{ asset('/assets/imagem/logo.png') }}" alt="">
                    <h1 class="text-tertiary text-2xl lg:text-3xl">Titulo</h1>
                    <p class="text-black text-sm lg:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Como ajudar --}}
    <div class="w-full bg-main space-y-10 py-10">
        <div class="mx-auto w-3/4 space-y-6">
            <h1 class="lg:text-4xl text-2xl text-center">Como ajudar</h1>
            <hr class="bg-tertiary border-none h-0.5 w-2/4 lg:w-1/4 mx-auto " />
            <p class="text-center lg:text-base text-sm font-bold">Toda ajuda é bem-vinda. Veja como você pode nos
                ajudar:</p>
        </div>
        <div class="flex flex-col justify-start gap-6 lg:gap-20 lg:flex-row px-10 py-8 mx-auto lg:px-20">
            <div
                class="lg:w-2/5 flex flex-col gap-5 justify-start items-center lg:bg-neutral-100 lg:px-10 lg:py-8 lg:rounded-xl lg:shadow-xl hover:cursor-pointer lg:hover:shadow-md lg:transition-all">
                <img src="{{ asset('/assets/icons/3.svg') }}" class="h-40" alt="" />
                <h1 class="text-xl">Seja um Parceiro</h1>
                <hr class="border-none h-0.5 w-2/4 bg-tertiary" />
                <p class="lg:text-base text-sm">Empresas podem nos ajudar e muito! Saiba como sua empresa pode iniciar
                    uma parceria de mão dupla.</p>
            </div>
            <div
                class="lg:w-2/5 flex flex-col gap-5 justify-start items-center lg:bg-neutral-100 lg:px-10 lg:py-8 lg:rounded-xl lg:shadow-xl hover:cursor-pointer lg:hover:shadow-md lg:transition-all">
                <img src="{{ asset('/assets/icons/1.svg') }}" class="h-40" alt="" />
                <h1 class="text-xl">Seja Voluntário</h1>
                <hr class="border-none h-0.5 w-2/4 bg-tertiary" />
                <p class="lg:text-base text-sm">Doe seu tempo! Seu carinho, seu serviço, seu conhecimento...tudo feito
                    com o coração tem inestimado valor.</p>
            </div>
            <div
                class="lg:w-2/5 flex flex-col gap-5 justify-start items-center lg:bg-neutral-100 lg:px-10 lg:py-8 lg:rounded-xl lg:shadow-xl hover:cursor-pointer lg:hover:shadow-md lg:transition-all">
                <img src="{{ asset('/assets/icons/2.svg') }}" class="h-40" alt="" />
                <h1 class="text-xl">Faça uma doação</h1>
                <hr class="border-none h-0.5 w-2/4 bg-tertiary" />
                <p class="lg:text-base text-sm">Faça uma doação única de acordo com sua possibilidade. Toda ajuda conta
                    muito!</p>
            </div>
        </div>
    </div>

    {{-- Fique por dentro --}}
    <div class="bg-secondary flex flex-col gap-10 lg:flex-row items-center py-10 lg:py-0 lg:pt-10 lg:px-20 px-10">
        <div class="flex flex-col justify-center items-center gap-10">
            <h1 class="text-tertiary text-4xl">Fique por dentro</h1>
            <img class="hidden lg:block" src="{{asset('/assets/icons/schedule.svg')}}" alt="">
        </div>
        <div class="lg:w-2/4 space-y-10">
            <p class="text-sm lg:text-base">Quer ficar por dentro de todas as atividades e eventos que temos organizado? Não perca mais nenhum detalhe! Acesse agora a nossa agenda e descubra como fazer parte das iniciativas que estão transformando vidas.</p>
            <a href="{{route('agenda')}}" type="button" class="block w-fit mx-auto rounded-xl text-sm lg:text-base text-white font-bold shadow-xl hover:shadow-md bg-tertiary px-10 py-6">Confira nossa agenda</a>
        </div>
    </div>

</x-layout>
