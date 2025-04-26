<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tienda Yi-Cell')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <nav class="bg-white shadow">
            <div class="max-w-screen-xl mx-auto px-4 py-4 ">
                <div class="flex items-center justify-between ">
                    <a href="{{ url('/shop') }}" class="hidden items-center space-x-2 text-xl font-bold sm:flex">
                        <img src="/img/isologo.png" alt="Logo" class="w-auto h-10 md:h-12" />
                        <p class="whitespace-nowrap hidden md:flex">Yi-Cell</p>
                    </a>

                    <form class="w-full max-w-xl mx-auto px-4">
                        <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark">Buscar</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar" required />
                            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Buscar</button>
                        </div>
                    </form>


                    <ul class="hidden lg:flex space-x-4">
                        <li><a href="{{ url('/inicio') }}" class="text-gray-800 hover:text-blue-600 hover:underline">Inicio</a></li>
                        <li><a href="{{ url('/servicios') }}" class="text-gray-800 hover:text-blue-600 hover:underline">Servicios</a></li>
                        <li><a href="{{ url('/contacto') }}" class="text-gray-800 hover:text-blue-600 hover:underline">Contacto</a></li>
                        <li><a href="{{ url('/login') }}" class="text-gray-800 hover:text-blue-600 hover:underline">Iniciar sesión</a></li>
                    </ul>

                    <button class="lg:hidden text-gray-800 hover:text-blue-600 focus:outline-none" id="menu-toggle">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="lg:hidden" id="mobile-menu">
                <ul class="flex flex-col text-right space-y-2 px-4 py-2">
                    <li><a href="{{ url('/inicio') }}" class="text-gray-800 hover:text-blue-600 focus:underline">Inicio</a></li>
                    <li><a href="{{ url('/servicios') }}" class="text-gray-800 hover:text-blue-600 focus:underline">Servicios</a></li>
                    <li><a href="{{ url('/contacto') }}" class="text-gray-800 hover:text-blue-600 focus:underline">Contacto</a></li>
                </ul>
                <div class="flex flex-col text-right space-y-2 px-4 py-2">
                    <a href="{{ url('/login') }}" class="text-gray-800 hover:text-blue-600 focus:underline">Iniciar sesión</a>
                    <a href="{{ url('/register') }}" class="text-gray-800 hover:text-blue-600 focus:underline">Registrarse</a>
                </div>
            </div>
        </nav>
    </header>


    <main class="container mx-auto mt-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            @yield('content')
        </div>
    </main>


    <footer class="bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="/iniciox" class="flex items-center">
                        <img src="/img/isologo.png" class="h-10 me-3" alt="Yi-Cell Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Yi-Cell</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Productos</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">Catalogo en linea</a>
                            </li>
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">Contactar vendedor</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Síguenos</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">WhatsApp</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=61574889148767" target="_blank" class="hover:underline">Facebook</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Cuenta</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline ">Iniciar Sesión</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Registrarse</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-base text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="#" class="hover:underline">Tienda Yi-Cell™</a>. Todos los Derechos Reservados.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="https://www.facebook.com/profile.php?id=61574889148767" target="_blank" class="text-gray-300 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="#" fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" target="_blank" class="text-gray-300 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="#" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 0C5.373 0 0 5.373 0 12a11.96 11.96 0 0 0 1.655 6.058L0 24l6.304-1.632A11.96 11.96 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22a9.94 9.94 0 0 1-5.138-1.39l-.368-.219-3.752.97 1.002-3.673-.236-.384A9.954 9.954 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm4.02-7.404c-.277-.14-1.643-.81-1.898-.902-.254-.094-.44-.14-.625.14s-.718.902-.88 1.088c-.16.185-.325.21-.6.07-.275-.14-1.163-.43-2.213-1.37-.82-.73-1.375-1.64-1.535-1.915s-.017-.41.123-.55c.126-.125.275-.325.41-.49.14-.163.185-.28.275-.465s.045-.35-.022-.49c-.07-.14-.625-1.507-.855-2.06s-.46-.46-.63-.46h-.524c-.186 0-.49.07-.748.35-.258.28-.98.96-.98 2.34s1 2.705 1.14 2.885c.14.18 2.034 3.35 5.26 4.42.735.253 1.31.404 1.76.517.74.18 1.415.155 1.945.094.595-.066 1.64-.67 1.87-1.32.23-.65.23-1.2.16-1.32-.07-.12-.26-.18-.54-.32z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>


    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>


</body>

</html>