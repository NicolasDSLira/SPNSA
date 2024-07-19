<x-layout>
    <header
        class="w-full h-[50dvh] bg-figuras bg-contain bg-main bg-fixed flex flex-col gap-6 items-center justify-center bg-center">
        <div class=" bg-neutral-50 lg:rounded-xl shadow-xl bg-opacity-80 px-20 py-10 space-y-4">
            <h1 class="lg:text-6xl text-4xl">Conheça nossos parceiros</h1>
        </div>
    </header>

    <section class="lg:w-3/4 mx-auto bg-main py-20">
        <div class="text-center">
            <h1 class="text-4xl">Prestação de contas</h1>
        </div>
        <div class="lg:px-0 px-4">

            @foreach ($dados as $item)
                <div class="lg:w-4/5 w-full bg-white mx-auto my-10">
                    <div class="flex flex-col px-14 py-4 lg:gap-6 gap-4 text-base">
                        <div class="text-center">
                            <h1 class="lg:text-4xl text-xl">SERVIÇO PROMOCIONAL NOSSA SENHORA APARECIDA</h1>
                        </div>
                        
                        <div class="flex lg:flex-row flex-col gap-2 items-center justify-center lg:text-lg text-sm">
                            <p>CNPJ: {{ $item->cnpj}}</p>
                            <p>- {{ $item->unidade}}</p>
                        </div>

                        <div class="flex w-full justify-between lg:flex-row flex-col gap-4" >
                            <p><b>N°</b> {{$item->numero}}/{{$item->ano}}</p>
                            <p><b>Tipo:</b> {{$item->tipo}}</p>
                        </div>

                        <div class="flex w-full justify-between lg:flex-row flex-col gap-4">
                            <p><b>Processo Administrativo:</b> {{$item->processo}}/{{$item->ano}}</p>
                            <p><b>Unidade:</b> {{$item->unidade}}</p>
                        </div>

                        <div>
                            <p><b>Objeto:</b> {{$item->objeto}}</p>
                        </div>

                        <div class="flex w-full lg:flex-row flex-col justify-between gap-4">
                            <p><b>Valor Total:</b> R$ {{number_format($item->valor, 2, ',', '.')}}</p>
                            <p><b>Assinatura:</b> {{ date('d/m/Y', strtotime($item->assinatura))}}</p>
                        </div>

                        <div class="flex w-full lg:flex-row flex-col justify-between gap-4">
                            <p><b>Data Início:</b> {{ date('d/m/Y', strtotime($item->dataInicio))}}</p>
                            <p><b>Data Fim:</b> {{ date('d/m/Y', strtotime($item->dataFim))}}</p>
                        </div>

                        <div class="w-full text-tertiary font-black flex justify-between">
                            <a href="{{asset('storage/'.$item->termo)}}">Termo de Colaboração</a>
                            <a href="{{asset('storage/'.$item->Plano)}}">Plano de Trabalho</a>
                            <a href="{{asset('storage/'.$item->aditivo)}}">Termo Aditivo</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </section>
</x-layout>
