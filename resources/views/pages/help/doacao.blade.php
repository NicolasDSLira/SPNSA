<x-layout>
    <div
        class="w-full h-dvh bg-gradient-to-t to-secondary from-main flex flex-col lg:gap-10 gap-6 justify-center items-center px-10 lg:px-20">
        <h1 class="lg:text-4xl text-2xl">Faça sua doação</h1>
        <p class="text-center text-sm lg:text-base font-semibold">Você pode doar qualquer quantia fazendo um depósito ou transferência bancária em alguma das seguintes contas,
            apenas copiando o CNPJ abaixo:</p>
        <div class="flex gap-8 items-center">
            <p class="lg:text-2xl text-lg">CNPJ: 58.477.555/0001-09</p>
            <button data-copy-to-clipboard-target="58.477.555/0001-09" class="w-6 text-tertiary hover:text-blue-900 active:text-white transition" >
                <svg viewBox="0 0 39 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.75 42.7616C12.4896 42.7616 11.4106 42.2382 10.513 41.1914C9.61545 40.1447 9.16667 38.8863 9.16667 37.4164V5.3452C9.16667 3.87527 9.61545 2.61692 10.513 1.57015C11.4106 0.523384 12.4896 0 13.75 0H34.375C35.6354 0 36.7144 0.523384 37.612 1.57015C38.5096 2.61692 38.9583 3.87527 38.9583 5.3452V37.4164C38.9583 38.8863 38.5096 40.1447 37.612 41.1914C36.7144 42.2382 35.6354 42.7616 34.375 42.7616H13.75ZM13.75 37.4164H34.375V5.3452H13.75V37.4164ZM4.58333 53.452C3.32292 53.452 2.24392 52.9286 1.34635 51.8818C0.448785 50.835 0 49.5767 0 48.1068V10.6904H4.58333V48.1068H29.7917V53.452H4.58333Z"
                        fill="currentColor"></path>
                </svg>
            </button>
        </div>
        <div class="w-full flex lg:flex-row flex-col gap-10 ">
            <div class="lg:w-2/4 space-y-6">
                <img src="{{asset('/assets/imagem/bancos/bb.webp')}}" alt="Banco do Brasil" class="h-28 mx-auto">
                <div class="flex justify-evenly font-bold">
                    <p>Agência 7021-1</p>
                    <p>C/C 30.105-1</p>
                </div>
            </div>
            <div class="lg:w-2/4 space-y-6">
                <img src="{{asset('/assets/imagem/bancos/santander.webp')}}" alt="Santander" class="h-28 mx-auto">
                <div class="flex justify-evenly font-bold">
                    <p>Agência 2062-1</p>
                    <p>C/C 30.105-1</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copy() { 
            navigator.clipboard.writeText('58.477.555/0001-09')
         }
    </script>

</x-layout>
