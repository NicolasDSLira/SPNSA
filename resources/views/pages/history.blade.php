<x-layout>
    <main>
        <div class="w-full h-[85dvh] flex items-center justify-center bg-hero bg-cover bg-center">
            <h1
                class="lg:text-6xl text-3xl text-white bg-main bg-opacity-15 p-6 shadow-md shadow-black backdrop-opacity-60 rounded-full">
                Acolher para transformar</h1>
        </div>
        <article
            class="p-6 lg:p-10 bg-quadrados hyphens-manual space-y-4 bg-fit bg-origin-border bg-contain w-full min-h-dvh antialiased tracking-wide">
            <div class="my-4">
                <h1 class="text-4xl text-center">Nossa História</h1>
            </div>
            <div class="flex w-full justify-between">
                <div class="space-y-4 w-full bg-white bg-opacity-40 lg:py-4 lg:w-3/4 lg:px-10">

                    <p>O Serviço Promocional Nossa Senhora Aparecida, é uma entidade filantrópica, sem fins lucrativos,
                        fundada em 05 de março de 1989, reconhecida como utilidade Pública Federal, Estadual e
                        Municipal. Através da Congregação das Irmãs da Caridade de Ottawa um grupo de leigos da Pastoral
                        Social compromissados com a causa fazia visitas nos lares e fornecia alimentos às famílias. </p>

                    <p>Reavaliando a situação o grupo concluiu que as mães não precisavam apenas de alimentos e sim de
                        pessoas que ficassem com seus filhos para que pudessem trabalhar.  Assim iniciou a Creche
                        Comunitária das Pastorinhas com 10 crianças no Salão Paroquial da Igreja Nossa Senhora Aparecida
                        no ano de 1988 na cidade de Ferraz de Vasconcelos, o primeiro município à leste da Cidade de São
                        Paulo. </p>

                        <p> Os parceiros diversos da Sociedade Civil tiveram papel fundamental para o provimento do trabalho
                            existente e sua extensão, inclusive construindo as novas instalações.  Em 1999 no Jardim São
                            João foi inaugurada a sede da CEI Pastorinhas I em parceria com a Fundação do Brasil. Atualmente
                            atendemos no CEI Pastorinhas I um total de 216 crianças.</p>
                           
                </div>
                <div class=" w-1/4 lg:block hidden">
                    <img src="{{asset('/assets\imagem\galeria\centro-de-ensino-infantil-pastorinhas10.jpg')}}" class="h-full w-full" alt="">
                </div>
            </div>

            <div class="flex w-full justify-between">

                <div class=" w-1/4 lg:block hidden">
                    <img src="{{asset('/assets\imagem\galeria\centro-de-ensino-infantil-pastorinhas10.jpg')}}" class="h-full w-full" alt="">
                </div>

                
                <div class="space-y-4 w-full bg-white bg-opacity-40 lg:py-4 lg:w-3/4 lg:px-10">
                    
                    <p>Diante das desigualdades sociais e inexistência de políticas públicas, em 1995 foi realizada uma
                        consulta no Jardim Angelina perguntando para as mães as necessidades da Comunidade.  O resultado
                        foi a urgência de um trabalho que contemplasse as crianças no período inverso ao da Escola, para
                        que elas não ficassem na rua.</p>

                    <p>Assim nasceu o Centro de Juventude no Angelina com 15 Crianças e Adolescentes e em 1996 o Centro
                        de Juventude Santo Antonio, oferecendo atividades educativas nas áreas de: informática, música e
                        artesanato; as atividades eram desenvolvidas por voluntários da Comunidade que tinham como meta
                        buscar valores e formar cidadãos. </p>

                        <p> Em 2007 iniciou o Centro de Juventude Margarida e, atualmente atendemos 435 Crianças e
                            Adolescentes nos Centros de Juventudes, incluindo o Centro de Juventude São Luís Rei.</p>

                            <p>Para que o trabalho tivesse um desenvolvimento de qualidade foi necessário ampliar a busca de
                                parcerias, principalmente para qualificar e adequar às instalações físicas, isso se deu por
                                intermédio do Padre Paulus, que buscou recursos em sua terra natal Holanda. Posteriormente foram
                                celebradas parcerias com a Secretária Municipal de Promoção e Desenvolvimento Social e
                                Secretaria Municipal da Educação.</p>
                            <p>Em 2008 o Serviço Promocional Nossa Senhora Aparecida firmou parceria com a Fundação Abrinq,
                                ampliando o número de crianças e, desde então, começou a fazer parte da rede Nossas Crianças.
                            </p>
                </div>

            </div>
            <div class="flex w-full">
                <div class="space-y-4 w-full bg-white bg-opacity-70">
                    
                    
                </div>
                {{-- <div class="w-1/2"></div> --}}
            </div>
        </article>

        <section class="bg-main p-6  space-y-4 ">
            <h1 class="text-center lg:text-4xl text-2xl">galeria de fotos</h1>
            <div id="gallery" class="relative lg:w-2/4 w-full mx-auto" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden lg:rounded-lg md:h-96">

                    @foreach ($arquivos as $item)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="{{ $item }}"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
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
        </section>
    </main>
</x-layout>
