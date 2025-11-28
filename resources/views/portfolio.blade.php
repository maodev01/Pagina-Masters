@extends('layouts.app')

@section('title', 'Portafolio')

@section('content')
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Nuestro Portafolio</h1>
                <p class="text-xl text-gray-500 max-w-2xl mx-auto">Conoce nuestros formatos y servicios para hacer de tu
                    evento un éxito total.</p>
                <div class="w-24 h-1 bg-amber-500 mx-auto mt-6"></div>
            </div>

            <!-- Pricing / Packages -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                <!-- Package 1 -->
                <div
                    class="bg-gray-50 rounded-2xl p-8 border border-gray-100 shadow-lg hover:shadow-xl transition duration-300 flex flex-col">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Masters Show</h3>
                    <div class="text-4xl font-bold text-amber-600 mb-6">Desde $1M <span
                            class="text-sm text-gray-500 font-normal">COP</span></div>
                    <ul class="space-y-4 mb-8 flex-grow">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Grupo musical reducido
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Sonido básico
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            2 tandas de 45 minutos
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="block text-center bg-white border-2 border-amber-600 text-amber-600 py-3 rounded-full font-bold hover:bg-amber-600 hover:text-white transition duration-300">
                        Consultar Disponibilidad
                    </a>
                </div>

                <!-- Package 2 -->
                <div
                    class="bg-white rounded-2xl p-8 border-2 border-amber-500 shadow-2xl relative transform md:-translate-y-4 flex flex-col">
                    <div
                        class="absolute top-0 right-0 bg-amber-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg uppercase tracking-wider">
                        Más Popular</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Los Masters de Colombia</h3>
                    <div class="text-4xl font-bold text-amber-600 mb-6">
                        A convenir
                        <div class="text-sm text-gray-500 font-normal mt-1">Desde $6M COP</div>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Orquesta completa (12+ músicos)
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Sonido profesional
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Show de luces
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Repertorio Personalizado
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="block text-center bg-amber-600 text-white py-3 rounded-full font-bold hover:bg-amber-700 transition duration-300 shadow-lg">
                        Cotizar Ahora
                    </a>
                </div>

                <!-- Package 3 -->
                <div
                    class="bg-gray-50 rounded-2xl p-8 border border-gray-100 shadow-lg hover:shadow-xl transition duration-300 flex flex-col">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Eventos Corporativos</h3>
                    <div class="text-4xl font-bold text-amber-600 mb-6">Personalizado</div>
                    <ul class="space-y-4 mb-8 flex-grow">
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Adaptado a la marca
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Protocolo y ceremonia
                        </li>
                        <li class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Música ambiental y bailable
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}"
                        class="block text-center bg-white border-2 border-amber-600 text-amber-600 py-3 rounded-full font-bold hover:bg-amber-600 hover:text-white transition duration-300">
                        Contactar Asesor
                    </a>
                </div>
            </div>

            <!-- Gallery Grid (Placeholders) -->
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">Galería de Eventos</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div
                    class="aspect-square bg-gray-200 rounded-lg overflow-hidden hover:opacity-90 transition cursor-pointer">
                    <img src="{{ asset('images/portfolio/1.jpg  ') }}" alt="Portfolio 1" class="w-full h-full object-cover">
                </div>
                <div
                    class="aspect-square bg-gray-300 rounded-lg overflow-hidden hover:opacity-90 transition cursor-pointer">
                    <img src="{{ asset('images/portfolio/2.jpg') }}" alt="Portfolio 2" class="w-full h-full object-cover">
                </div>
                <div
                    class="aspect-square bg-gray-200 rounded-lg overflow-hidden hover:opacity-90 transition cursor-pointer">
                    <img src="{{ asset('images/portfolio/3.jpg') }}" alt="Portfolio 3" class="w-full h-full object-cover">
                </div>
                <div
                    class="aspect-square bg-gray-300 rounded-lg overflow-hidden hover:opacity-90 transition cursor-pointer">
                    <img src="{{ asset('images/portfolio/4.jpg') }}" alt="Portfolio 4" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
@endsection