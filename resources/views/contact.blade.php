@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
<div class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Contáctanos</h1>
            <p class="text-xl text-gray-500 max-w-2xl mx-auto">Estamos listos para atenderte. Déjanos tus datos y te responderemos a la brevedad.</p>
            <div class="w-24 h-1 bg-amber-500 mx-auto mt-6"></div>
        </div>

        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="bg-amber-600 p-10 text-white flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-bold mb-6">Información de Contacto</h3>
                        <p class="mb-8 text-amber-100">Si prefieres llamarnos o escribirnos directamente:</p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 mr-4 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                <div>
                                    <h4 class="font-bold">Ubicación</h4>
                                    <p class="text-amber-100">Bucaramanga, Santander, Colombia</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <svg class="w-6 h-6 mr-4 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                <div>
                                    <h4 class="font-bold">Teléfono</h4>
                                    <p class="text-amber-100">(+57) 313 437 8099</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <svg class="w-6 h-6 mr-4 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <div>
                                    <h4 class="font-bold">Email</h4>
                                    <p class="text-amber-100">orquestalosmasters@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-10">
                        <!-- Social Icons could go here -->
                    </div>
                </div>
                
                <div class="p-10">
                    @if(session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                            <p class="font-bold">¡Enviado!</p>
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 font-bold mb-2">Nombre Completo</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-amber-500 focus:bg-white focus:outline-none transition duration-200" placeholder="Tu nombre" required>
                        </div>
                        
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-bold mb-2">Correo Electrónico</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-amber-500 focus:bg-white focus:outline-none transition duration-200" placeholder="tucorreo@ejemplo.com" required>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="phone" class="block text-gray-700 font-bold mb-2">Teléfono</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-amber-500 focus:bg-white focus:outline-none transition duration-200" placeholder="300..." required>
                            </div>
                            <div>
                                <label for="event_date" class="block text-gray-700 font-bold mb-2">Fecha del Evento</label>
                                <input type="date" id="event_date" name="event_date" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-amber-500 focus:bg-white focus:outline-none transition duration-200" required>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-bold mb-2">Mensaje / Detalles</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:border-amber-500 focus:bg-white focus:outline-none transition duration-200" placeholder="Cuéntanos sobre tu evento..." required></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-amber-600 text-white font-bold py-3 px-4 rounded-lg hover:bg-amber-700 transition duration-300 shadow-md">
                            Enviar Mensaje
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
