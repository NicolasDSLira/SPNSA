<x-layout>
    <div class="w-full space-y-10 py-10 px-10 bg-neutral-50 bg-quadrados bg-contain">
        <div class="mx-auto text-center space-y-3">
            <h1 class="text-3xl lg:text-4xl drop-shadow-lg shadow-main">Doe notas fiscais</h1>
            <h3 class="text-xl lg:text-2xl">E Rápidao e fácil</h3>
        </div>
        <div>
            <iframe class="mx-auto w-full lg:max-w-xl h-64 rounded-lg sm:h-96 shadow-xl"
                src="https://www.youtube.com/embed/RDKe9ODRt4E" title="Nota Fiscal Paulista - Doação Automática de Cupons"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="flex flex-col justify-start gap-6 lg:gap-20 lg:flex-row ">
            <div
                class="lg:w-2/5 w-full flex flex-col gap-5 border-4 rounded-2xl border-black px-10 py-10 justify-start items-center bg-neutral-100 lg:rounded-xl lg:shadow-xl hover:cursor-pointer lg:hover:shadow-md lg:transition-all">
                <img src="{{ asset('/assets/imagem/icons/smartphone_FILL0_wght400_GRAD0_opsz24.svg') }}" class="h-20"
                    alt="Phone" />
                <h1 class="text-xl">Doe pelo APP</h1>
                <ul class=" list-decimal lg:space-y-6 space-y-4 text-sm lg:text-base">
                    <li>Baixe o aplicativo da Nota Fiscal Paulista: GOOGLE PLAY ou APPLE STORE</li>
                    <li>Faça o login ou cadastre-se se ainda não for cadastrado clicando na opção "Registre sua conta"
                    </li>
                    <li>Clique em "Doação"</li>
                    <li>Capture o QR Code impresso ou escolha a opção "doação manual" para digitar os dados.</li>
                    <li>A seguir selecione a entidade.</li>
                    <li>Coloque o nosso CNPJ 58.477.555/0001-09.</li>
                    <li>Confira os dados e clique em "Doar".</li>
                </ul>
            </div>
            <div
                class="lg:w-2/5 w-full flex flex-col gap-5 border-4 rounded-2xl border-black px-10 py-10 justify-start items-center bg-neutral-100 lg:rounded-xl lg:shadow-xl hover:cursor-pointer lg:hover:shadow-md lg:transition-all">
                <img src="{{ asset('/assets/imagem/icons/desktop_windows_FILL0_wght400_GRAD0_opsz24.svg') }}"
                    class="h-20" alt="desktop" />
                <h1 class="text-xl">Doe pelo site</h1>
                <ul class=" list-decimal lg:space-y-6 space-y-4 text-sm lg:text-base">
                    <li>Entre no site da Receita Federal e cadastre-se ou se já é cadastrado, acesse sua conta.</li>
                    <li>Faça o login ou cadastre-se.</li>
                    <li>Clique em "Doação de Notas".</li>
                    <li>Depois em "Nova doação".</li>
                    <li>Preencha os dados da nota e na mesma tela insira o nosso CNPJ 58.477.555/0001-09.</li>
                    <li>Confirme a entidade.</li>
                    <li>Para finalizar clique no botão "Registrar doação".</li>
                </ul>
            </div>
            <div
                class="lg:w-2/5 w-full flex flex-col gap-5 border-4 rounded-2xl border-black px-10 py-10 justify-start items-center bg-neutral-100 lg:rounded-xl lg:shadow-xl hover:cursor-pointer lg:hover:shadow-md lg:transition-all">
                <img src="{{ asset('/assets/imagem/icons/calendar_clock_FILL0_wght400_GRAD0_opsz24.svg') }}"
                    class="h-20" alt="desktop" />
                <h1 class="text-xl">Doação automática</h1>
                <ul class=" list-decimal lg:space-y-6 space-y-4 text-sm lg:text-base">
                    <li>Entre no site da Receita Federal e cadastre-se ou se já é cadastrado, acesse sua conta.</li>
                    <li>Selecione a opção "Entidades".</li>
                    <li>Escolha o período de doação.</li>
                    <li>Coloque o nosso CNPJ 58.477.555/0001-09.</li>
                    <li>Confirme a entidade.</li>
                    <p>Seguindo esses poucos passos o repasse será automático pelo período escolhido. Basta informar seu CPF a cada compra e você estará ajudando a cuidar de nossas crianças e adolescentes.</p>
                </ul>
            </div>
        </div>

        <div class="lg:w-3/4 w-full mx-auto bg-main lg:py-10 py-6 px-10 lg:px-20 rounded-3xl text-center space-y-4 shadow-5 border-4 border-black">
            <h1 class="lg:text-2xl text-xl">E se eu for sorteado pela Nota Fiscal Paulista?</h1>
            <p>Os sorteios dos prêmios serão do doador, ou seja, se for sorteado o prêmio e todo seu.</p>
        </div>
    </div>
</x-layout>
