<section id="depoimentos" class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-primary-600 font-semibold text-sm uppercase tracking-wider">Depoimentos</span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-4">
                O que nossos clientes dizem
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                A satisfação dos nossos clientes é o nosso maior orgulho.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            {{-- Depoimento 1 --}}
            <div class="bg-gray-50 rounded-2xl p-8 relative">
                <div class="text-primary-200 mb-4">
                    <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H14.017zM0 21v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151C7.563 6.068 6 8.789 6 11h4v10H0z"/>
                    </svg>
                </div>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Excelente serviço! A equipe da União Engenharia instalou o ar condicionado do meu setor em tempo recorde
                    sem comprometer o desempenho das entregas da minha equipe. Recomendo fortemente.
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        M
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Jefferson Sena</h4>
                        <p class="text-sm text-gray-500">Veloso NET Telecom</p>
                    </div>
                </div>
                <div class="flex mt-4 text-yellow-400">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
            </div>

            {{-- Depoimento 2 --}}
            <div class="bg-gray-50 rounded-2xl p-8 relative">
                <div class="text-primary-200 mb-4">
                    <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H14.017zM0 21v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151C7.563 6.068 6 8.789 6 11h4v10H0z"/>
                    </svg>
                </div>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Contratei para manutenção da câmara fria do meu restaurante. Serviço rápido, eficiente e com
                    preço justo. A equipe é muito profissional e pontual.
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-accent-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        A
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Ana Rodrigues</h4>
                        <p class="text-sm text-gray-500">Proprietária de Restaurante</p>
                    </div>
                </div>
                <div class="flex mt-4 text-yellow-400">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
            </div>

            {{-- Depoimento 3 --}}
            <div class="bg-gray-50 rounded-2xl p-8 relative">
                <div class="text-primary-200 mb-4">
                    <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H14.017zM0 21v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151C7.563 6.068 6 8.789 6 11h4v10H0z"/>
                    </svg>
                </div>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Fizeram a higienização completa de todos os aparelhos de ar condicionado do nosso escritório.
                    Diferença incrível na qualidade do ar. Atendimento nota 10!
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        R
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900">Roberto Mendes</h4>
                        <p class="text-sm text-gray-500">Gerente Administrativo</p>
                    </div>
                </div>
                <div class="flex mt-4 text-yellow-400">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
