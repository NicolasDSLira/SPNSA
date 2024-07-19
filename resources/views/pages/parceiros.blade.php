<x-layout>
    {{-- header --}}
    <div
        class="w-full h-[75dvh] bg-parrceiros bg-cover bg-no-repeat flex flex-col gap-6 items-center justify-center bg-center">
        <div class=" bg-neutral-50 lg:rounded-xl shadow-xl bg-opacity-80 px-20 py-10 space-y-4">
            <h1 class="lg:text-6xl text-4xl">Conheça nossos parceiros</h1>
        </div>
    </div>

    <div
        class="w-fit mx-auto bg-main px-40 py-20  ">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-20">
            <div class="px-10 lg:bg-white justify-center flex items-center rounded-lg">
                <img class="h-auto max-w-full min-w-40" src="{{ asset('/assets/imagem/parceiros/Logo_Futura.png') }}" alt="">
            </div>
            <div class="px-10 py-10 lg:bg-white justify-center flex items-center rounded-lg">
                <img class="h-auto max-w-full min-w-40" src="{{ asset('/assets/imagem/parceiros/logo_veran.png') }}" alt="">
            </div>
            <div class="px-10 lg:bg-white justify-center flex items-center rounded-lg">
                <img class="h-auto max-w-full min-w-40" src="{{ asset('/assets/imagem/parceiros/logo-abrinq.png') }}" alt="">
            </div>
            <div class="px-10 lg:bg-white justify-center flex items-center rounded-lg">
                <img class="h-auto max-w-full min-w-40" src="{{ asset('/assets/imagem/parceiros/logo-luvidarte.svg') }}" alt="">
            </div>
            <div class="px-10 lg:bg-white justify-center flex items-center rounded-lg">
                <img class="h-auto max-w-full min-w-40" src="{{ asset('/assets/imagem/parceiros/logo-marcelino.png') }}" alt="">
            </div>
            <div class="px-10 lg:bg-white justify-center flex items-center rounded-lg">
                <img class="h-auto max-w-full min-w-40 " src="{{ asset('/assets/imagem/parceiros/Logo-Padaria-Eli.jpg') }}" alt="">
            </div>
            <div class="px-10 lg:bg-white justify-center flex items-center rounded-lg">
                <img class="h-auto max-w-full min-w-40" src="{{ asset('/assets/imagem/parceiros/logo-rnc.webp') }}" alt="">
            </div>
        </div>
    </div>


</x-layout>
