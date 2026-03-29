<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            {{-- Logo --}}
            <a href="#" class="flex items-center space-x-2">
                {{-- Logo light (para fundo escuro - visível no topo) --}}
                <img src="{{ asset('images/18.svg') }}" alt="UE Logo" class="w-10 h-10 logo-light">
                {{-- Logo dark (para fundo claro - visível ao scrollar) --}}
                <img src="{{ asset('images/17.svg') }}" alt="UE Logo" class="w-10 h-10 logo-dark hidden">
                <span class="text-xl font-bold text-white navbar-brand">União Engenharia</span>
            </a>

            {{-- Desktop Menu --}}
            <div class="hidden lg:flex items-center space-x-8">
                <a href="#sobre" class="text-white/90 hover:text-white font-medium transition-colors navbar-link">Sobre</a>
                <a href="#servicos" class="text-white/90 hover:text-white font-medium transition-colors navbar-link">Serviços</a>
                <a href="#diferenciais" class="text-white/90 hover:text-white font-medium transition-colors navbar-link">Diferenciais</a>
                <a href="#depoimentos" class="text-white/90 hover:text-white font-medium transition-colors navbar-link">Depoimentos</a>
                <a href="#contato" class="text-white/90 hover:text-white font-medium transition-colors navbar-link">Contato</a>
                <a href="https://wa.me/5500000000000?text=Olá! Gostaria de solicitar um orçamento." target="_blank" rel="noopener"
                   class="bg-green-500 hover:bg-green-600 text-white px-5 py-2.5 rounded-lg font-semibold transition-colors">
                    Fale Conosco
                </a>
            </div>

            {{-- Mobile Menu Button --}}
            <button id="menu-toggle" class="lg:hidden text-white p-2" aria-label="Abrir menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden lg:hidden bg-white shadow-lg">
        <div class="px-4 py-4 space-y-3">
            <a href="#sobre" class="block text-gray-700 hover:text-primary-600 font-medium mobile-link">Sobre</a>
            <a href="#servicos" class="block text-gray-700 hover:text-primary-600 font-medium mobile-link">Serviços</a>
            <a href="#diferenciais" class="block text-gray-700 hover:text-primary-600 font-medium mobile-link">Diferenciais</a>
            <a href="#depoimentos" class="block text-gray-700 hover:text-primary-600 font-medium mobile-link">Depoimentos</a>
            <a href="#contato" class="block text-gray-700 hover:text-primary-600 font-medium mobile-link">Contato</a>
            <a href="https://wa.me/5500000000000?text=Olá! Gostaria de solicitar um orçamento." target="_blank" rel="noopener"
               class="block bg-green-500 hover:bg-green-600 text-white text-center px-5 py-2.5 rounded-lg font-semibold transition-colors">
                Fale Conosco
            </a>
        </div>
    </div>
</nav>
