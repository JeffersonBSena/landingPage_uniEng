<section id="servicos" class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-primary-600 font-semibold text-sm uppercase tracking-wider">Nossos Serviços</span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-2 mb-4">
                Soluções para cada necessidade
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Oferecemos uma gama completa de serviços em refrigeração e climatização para residências e empresas.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Instalação de Ar Condicionado --}}
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 group border border-gray-100 overflow-hidden">
                <img src="{{ asset('images/foto02.jpeg') }}" alt="Ar condicionado split instalado"
                     class="w-full aspect-video object-cover" loading="lazy">
                <div class="p-8">
                    <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-600 transition-colors">
                        <svg class="w-7 h-7 text-primary-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Instalação de Ar Condicionado</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Instalação profissional de splits, multi-splits e sistemas centrais de ar condicionado com garantia completa.
                    </p>
                </div>
            </div>

            {{-- Manutenção de Ar Condicionado --}}
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 group border border-gray-100 overflow-hidden">
                <img src="{{ asset('images/foto011.png') }}" alt="Técnicos realizando manutenção de ar condicionado"
                     class="w-full aspect-video object-cover" loading="lazy">
                <div class="p-8">
                    <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-600 transition-colors">
                        <svg class="w-7 h-7 text-primary-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Manutenção Preventiva e Corretiva</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Manutenção periódica para garantir o funcionamento ideal e prolongar a vida útil do seu equipamento.
                    </p>
                </div>
            </div>

            {{-- Limpeza e Higienização --}}
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 group border border-gray-100 overflow-hidden">
                <img src="{{ asset('images/foto013.png') }}" alt="Diagnóstico e medição de equipamento"
                     class="w-full aspect-video object-cover" loading="lazy">
                <div class="p-8">
                    <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-600 transition-colors">
                        <svg class="w-7 h-7 text-primary-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Limpeza e Higienização</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Higienização completa do sistema, eliminando fungos, bactérias e garantindo ar puro e saudável.
                    </p>
                </div>
            </div>

            {{-- Centrais de Ar Empresariais --}}
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 group border border-gray-100 overflow-hidden">
                <img src="{{ asset('images/foto014.png') }}" alt="Técnico em manutenção de central de ar empresarial"
                     class="w-full aspect-video object-cover" loading="lazy">
                <div class="p-8">
                    <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-600 transition-colors">
                        <svg class="w-7 h-7 text-primary-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Centrais de Ar Empresariais</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Projeto, instalação e manutenção de sistemas centrais de ar condicionado para escritórios, lojas e ambientes corporativos.
                    </p>
                </div>
            </div>

            {{-- Projeto de Climatização --}}
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 group border border-gray-100 overflow-hidden">
                <img src="{{ asset('images/foto015.png') }}" alt="Ar condicionado split instalado em ambiente"
                     class="w-full aspect-video object-cover" loading="lazy">
                <div class="p-8">
                    <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-600 transition-colors">
                        <svg class="w-7 h-7 text-primary-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Projeto de Climatização</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Dimensionamento e projeto técnico de climatização sob medida para empresas, garantindo eficiência energética e conforto.
                    </p>
                </div>
            </div>

            {{-- Contrato de Manutenção --}}
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 group border border-gray-100 overflow-hidden">
                <img src="{{ asset('images/foto04.png') }}" alt="Diagnóstico técnico com alicate amperímetro"
                     class="w-full aspect-video object-cover" loading="lazy">
                <div class="p-8">
                    <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-600 transition-colors">
                        <svg class="w-7 h-7 text-primary-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Contrato de Manutenção</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Planos de manutenção periódica para empresas, com visitas programadas, relatórios técnicos e atendimento prioritário.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
