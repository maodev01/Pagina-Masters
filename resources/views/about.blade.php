@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Nuestra Historia</h1>
                <div class="w-24 h-1 bg-amber-500 mx-auto"></div>
            </div>

            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-10 md:p-16 flex flex-col justify-center">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">50 Años de Tradición Musical</h2>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Fundada en Bucaramanga, Santander, la orquesta <strong>Los Masters de Colombia</strong> ha sido
                            sinónimo de alegría y calidad musical por más de cinco décadas.
                        </p>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Nuestra pasión es la música tropical, la salsa, el merengue y el folclor colombiano. Hemos
                            acompañado a generaciones en sus momentos más especiales, desde bodas íntimas hasta grandes
                            festivales.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            Contamos con un equipo de músicos profesionales de primer nivel, comprometidos con la excelencia
                            y el entretenimiento.
                        </p>
                    </div>
                    <div class="bg-gray-200 h-96 md:h-auto relative">
                        <img src="{{ asset('images/foto-masters.jpg') }}" alt="Nuestra orquesta en concierto"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <div class="mt-20 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-10">¿Por qué elegirnos?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-xl shadow-md border-t-4 border-amber-500">
                        <h3 class="text-xl font-bold mb-4">Profesionalismo</h3>
                        <p class="text-gray-600">Puntualidad, presentación impecable y comportamiento ético en cada evento.
                        </p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-md border-t-4 border-amber-500">
                        <h3 class="text-xl font-bold mb-4">Calidad de Sonido</h3>
                        <p class="text-gray-600">Equipos de última tecnología para garantizar que la música se escuche
                            perfecta.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-md border-t-4 border-amber-500">
                        <h3 class="text-xl font-bold mb-4">Versatilidad</h3>
                        <p class="text-gray-600">Un repertorio que se adapta a todos los gustos y edades.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection