<section id="sobre" class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            {{-- Images --}}
            <div class="relative">
                {{-- Foto principal --}}
                <img src="{{ asset('images/foto04.png') }}" alt="Técnico União Engenharia trabalhando em condensadora"
                     class="w-full aspect-[4/3] object-cover rounded-2xl shadow-lg" loading="lazy">
                {{-- Badge --}}
                <div class="absolute -bottom-6 -right-6 bg-primary-600 text-white rounded-2xl p-6 shadow-xl hidden sm:block">
                    <div class="text-4xl font-extrabold">10+</div>
                    <div class="text-sm font-medium text-primary-200">Anos de<br>Experiência</div>
                </div>
                {{-- Grid de thumbnails --}}
                <div class="grid grid-cols-4 gap-2 mt-4">
                    <img src="{{ asset('images/foto09.png') }}" alt="Self da equipe União Engenharia"
                         class="w-full aspect-square object-cover rounded-lg" loading="lazy">
                    <img src="{{ asset('images/foto06.png') }}" alt="Equipe em manutenção de ar condicionado"
                         class="w-full aspect-square object-cover rounded-lg" loading="lazy">
                    <img src="{{ asset('images/foto011.png') }}" alt="Medição com alicate amperímetro"
                         class="w-full aspect-square object-cover rounded-lg" loading="lazy">
                    <img src="{{ asset('images/foto010.png') }}" alt="Técnico em espaço comercial"
                         class="w-full aspect-square object-cover rounded-lg" loading="lazy">
                </div>
            </div>

            {{-- Text --}}
            <div>
                <span class="text-primary-600 font-semibold text-sm uppercase tracking-wider">Sobre Nós</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-6">
                    Excelência em refrigeração e climatização
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    A <strong class="text-gray-800">União Engenharia</strong> é especializada em soluções completas de
                    refrigeração e ar condicionado. Com uma equipe altamente qualificada, oferecemos serviços de
                    instalação, manutenção preventiva e corretiva para residências e empresas.
                </p>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    Nosso compromisso é garantir o conforto térmico e a conservação adequada dos seus produtos,
                    utilizando as melhores práticas do mercado e equipamentos de ponta.
                </p>

                <div class="grid grid-cols-2 gap-6">
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Equipe Certificada</h4>
                            <p class="text-sm text-gray-500">Profissionais treinados</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Garantia</h4>
                            <p class="text-sm text-gray-500">Em todos os serviços</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Atendimento Rápido</h4>
                            <p class="text-sm text-gray-500">Resposta ágil</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Melhor Custo-Benefício</h4>
                            <p class="text-sm text-gray-500">Preços competitivos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
