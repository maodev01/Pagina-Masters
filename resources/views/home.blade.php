@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-gray-900 h-[600px] flex items-center">
        <div class="absolute inset-0 overflow-hidden">
            <img src="{{ asset('images/masters-zapatoca.jpg') }}" alt="Orquesta Los Masters"
                class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 drop-shadow-lg animate-fade-in-up">
                <span class="text-amber-500">Los Masters</span> de Colombia
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-10 max-w-3xl mx-auto font-light leading-relaxed">
                Más de 50 años de tradición musical. La mejor orquesta para hacer de tu evento una experiencia inolvidable.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('contact') }}"
                    class="bg-amber-600 text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-amber-700 transition duration-300 shadow-xl transform hover:-translate-y-1">
                    Cotizar Evento
                </a>
                <a href="{{ route('portfolio') }}"
                    class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-white hover:text-gray-900 transition duration-300">
                    Ver Portafolio
                </a>
            </div>
        </div>
    </div>

    <!-- Intro Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Música con Clase y Estilo</h2>
                <div class="w-24 h-1 bg-amber-500 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Feature 1 -->
                <div
                    class="text-center p-8 rounded-xl bg-gray-50 hover:shadow-xl transition duration-300 border border-gray-100">
                    <div
                        class="w-16 h-16 bg-amber-100 text-amber-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Repertorio Variado</h3>
                    <p class="text-gray-600">Desde salsa clásica y merengue hasta los éxitos más recientes. Nos adaptamos al
                        gusto de tu público.</p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="text-center p-8 rounded-xl bg-gray-50 hover:shadow-xl transition duration-300 border border-gray-100">
                    <div
                        class="w-16 h-16 bg-amber-100 text-amber-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">50 Años de Experiencia</h3>
                    <p class="text-gray-600">Una trayectoria impecable en Bucaramanga y todo Santander. Garantía de
                        profesionalismo.</p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="text-center p-8 rounded-xl bg-gray-50 hover:shadow-xl transition duration-300 border border-gray-100">
                    <div
                        class="w-16 h-16 bg-amber-100 text-amber-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Show en Vivo</h3>
                    <p class="text-gray-600">Músicos profesionales, puesta en escena elegante y sonido de alta calidad para
                        tu evento.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-amber-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">¿Listo para celebrar?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">Contáctanos hoy mismo y asegura la mejor música para tu
                boda, fiesta empresarial o evento privado.</p>
            <a href="{{ route('contact') }}"
                class="bg-white text-amber-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition duration-300 shadow-lg">
                Solicitar Presupuesto
            </a>
        </div>
    </section>
@endsection