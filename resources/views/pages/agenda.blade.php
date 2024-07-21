<x-layout>
    <div class="w-full min-h-2/4 py-20 bg-main flex justify-center items-center content-center">
        <h1 class="lg:text-4xl text-2xl">Fique por dentro</h1>
    </div>
    <div class="flex lg:flex-row flex-col min-h-screen justify-center items-start py-10 px-10 gap-10">
        <section
            class="lg:w-3/4 w-full border-2 min-h-screen max-h-screen space-y-10  border-tertiary p-10 overscroll-contain overflow-y-scroll">

            @foreach ($dados as $item)
                <div class="border-2 border-s-8 border-tertiary p-4 space-y-8">
                    <h1 class="text-4xl">{{$item->TituloEvento}}</h1>
                    <div
                        class=" bg-secondary flex lg:flex-row flex-col py-4 gap-4 items-center text-center justify-center overflow-hidden">
                        <p class="lg:border-e-2 border-black px-2 lg:w-1/3"><b>Data:</b> {{ date('d/m/Y', strtotime($item->dataEvento))}} </p>
                        <p class="lg:border-e-2 border-black px-2 lg:w-1/3"><b>Horário:</b> {{ date('H:i ', strtotime($item->horaEvento))}}</p>
                        <p class="px-2 lg:w-3/4 "><b>Local:</b> {{$item->localEvento}}</p>
                    </div>
                    <p>{{$item->descrEvento}}</p>
                </div>
            @endforeach


        </section>
        <aside class="lg:w-1/4 border-2 border-main">
            <iframe class="w-auto lg:min-h-screen h-96" width="320" height="auto"
                src="https://www.instagram.com/servipromocional/embed/" frameborder="0"></iframe>

        </aside>
    </div>
</x-layout>
