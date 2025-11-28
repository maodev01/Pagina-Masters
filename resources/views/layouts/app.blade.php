<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@hasSection('title') @yield('title') | @endif Los Masters de Colombia</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center gap-3">
                        <img src="{{ asset('images/logo-1.png') }}" alt="Los Masters Logo"
                            style="width: 120px; height: 120px; object-fit: contain;">
                        <!--<span class="text-xl font-bold text-amber-600 tracking-wider hidden sm:block"></span>-->
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}"
                        class="text-gray-600 hover:text-amber-600 transition duration-300 font-medium {{ request()->routeIs('home') ? 'text-amber-600' : '' }}">Inicio</a>
                    <a href="{{ route('about') }}"
                        class="text-gray-600 hover:text-amber-600 transition duration-300 font-medium {{ request()->routeIs('about') ? 'text-amber-600' : '' }}">Nosotros</a>
                    <a href="{{ route('portfolio') }}"
                        class="text-gray-600 hover:text-amber-600 transition duration-300 font-medium {{ request()->routeIs('portfolio') ? 'text-amber-600' : '' }}">Portafolio</a>
                    <a href="{{ route('contact') }}"
                        class="bg-amber-600 text-white px-5 py-2 rounded-full hover:bg-amber-700 transition duration-300 shadow-lg transform hover:-translate-y-0.5">Contacto</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                        class="text-gray-600 hover:text-amber-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
            <a href="{{ route('home') }}"
                class="block py-3 px-4 text-gray-600 hover:bg-gray-50 hover:text-amber-600">Inicio</a>
            <a href="{{ route('about') }}"
                class="block py-3 px-4 text-gray-600 hover:bg-gray-50 hover:text-amber-600">Nosotros</a>
            <a href="{{ route('portfolio') }}"
                class="block py-3 px-4 text-gray-600 hover:bg-gray-50 hover:text-amber-600">Portafolio</a>
            <a href="{{ route('contact') }}" class="block py-3 px-4 text-amber-600 font-bold">Contacto</a>
        </div>
    </nav>

    <!-- Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 text-amber-500">Los Masters de Colombia</h3>
                    <p class="text-gray-400">Más de 50 años llevando la mejor música a tus eventos. Calidad, elegancia y
                        sabor en cada nota.</p>

                    <div class="mt-6 grid grid-cols-2 gap-6 w-fit">
                        <!-- Facebook -->
                        <a href="#" class="text-gray-400 hover:text-amber-500 transition">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <!-- Instagram -->
                        <a href="#" class="text-gray-400 hover:text-amber-500 transition">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772 4.902 4.902 0 011.772-1.153c.636-.247 1.363-.416 2.427-.465C9.673 2.013 10.027 2 12.315 2m0-2c-2.67 0-3.004.01-4.053.058-1.048.048-1.762.224-2.386.466-1.32.514-2.259 1.453-2.773 2.773-.242.624-.418 1.338-.466 2.386C2.01 6.67 2 7.004 2 9.685v.63c0 2.681.01 3.015.058 4.053.048 1.048.224 1.762.466 2.386.514 1.32 1.453 2.259 2.773 2.773.624.242 1.338.418 2.386.466 1.049.048 1.383.058 4.053.058h.63c2.681 0 3.015-.01 4.053-.058 1.048-.048 1.762-.224 2.386-.466 1.32-.514 2.259-1.453 2.773-2.773.242-.624.418-1.338.466-2.386.048-1.049.058-1.383.058-4.053v-.63c0-2.681-.01-3.015-.058-4.053-.048-1.048-.224-1.762-.466-2.386-.514-1.32-1.453-2.259-2.773-2.773-.624-.242-1.338-.418-2.386-.466C15.319 2.01 14.985 2 12.315 2z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M12.315 7.533a4.783 4.783 0 014.783 4.783 4.783 4.783 0 01-4.783 4.783 4.783 4.783 0 014.783-4.783zm0 2a2.783 2.783 0 00-2.783 2.783 2.783 2.783 0 002.783 2.783 2.783 2.783 0 00-2.783-2.783 2.783 2.783 0 00-2.783-2.783zM18.63 7.02a1.33 1.33 0 11-1.33-1.33 1.33 1.33 0 011.33 1.33z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <!-- TikTok -->
                        <a href="#" class="text-gray-400 hover:text-amber-500 transition">
                            <span class="sr-only">TikTok</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93v6.16c0 2.52-1.12 4.84-2.98 6.45a8.24 8.24 0 0 1-10.69.24c-2.77-2.23-3.19-6.5-1.11-9.18 1.53-1.97 4.13-2.84 6.53-2.33v4.22c-1.8-.56-3.83.48-4.38 2.27-.36 1.19.16 2.48 1.23 3.05 1.61.86 3.6.29 4.49-1.26.43-.74.65-1.59.61-2.44v-15.2z" />
                            </svg>
                        </a>
                        <!-- YouTube -->
                        <a href="#" class="text-gray-400 hover:text-amber-500 transition">
                            <span class="sr-only">YouTube</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.418-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418zM15.194 12 10 15V9l5.194 3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4 text-amber-500">Enlaces Rápidos</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition">Inicio</a>
                        </li>
                        <li><a href="{{ route('about') }}"
                                class="text-gray-400 hover:text-white transition">Nosotros</a></li>
                        <li><a href="{{ route('portfolio') }}"
                                class="text-gray-400 hover:text-white transition">Portafolio</a></li>
                        <li><a href="{{ route('contact') }}"
                                class="text-gray-400 hover:text-white transition">Contacto</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4 text-amber-500">Contacto</h3>
                    <p class="text-gray-400 flex items-center mb-2">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Bucaramanga, Santander
                    </p>
                    <p class="text-gray-400 flex items-center" style="margin-top: 1rem;">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        (+57) 313 437 8099
                    </p>

                    <p class="text-gray-400 flex items-center" style="margin-top: 1rem;">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        orquestalosmasters@gmail.com
                    </p>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-500 text-sm">
                &copy; {{ date('Y') }} Los Masters de Colombia. Todos los derechos reservados.
            </div>
        </div>
    </footer>

</body>

</html>