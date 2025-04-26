<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Tienda Yi-Cell')</title>
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
</head>
<body class="bg-sky-700 md:bg-gradient-to-r md:from-[#5533ff] md:to-[#1bd6f7a3] text-white">
  <!-- Navbar -->
  <div class="w-full max-w-screen-xl mx-auto">
    <nav class="p-4 ">
      <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-2 text-xl font-bold">
          <img src="/img/isologo.png" alt="Logo" class="w-auto h-10 md:h-12" />
          <span >Yi-Cell</span>
        </a>

        <!-- Botón hamburguesa (solo visible en móviles)-->
        <button id="menu-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-white  " aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
        </button>

        <!-- Menú de navegación -->
        <ul id="menu" class="hidden md:flex md:space-x-4 absolute md:static top-16 left-0 w-full md:w-auto md:bg-transparent bg-sky-700 text-center md:text-left ">
          <li class="p-3 md:p-0 font-semibold hover:underline"><a href="#servicios">Servicios</a></li>
          <li class="p-3 md:p-0 font-semibold hover:underline"><a href="/contact">Contactar</a></li>
          <li class="p-3 md:p-0 md:flex items-center hidden">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M12 0C5.373 0 0 5.373 0 12a11.96 11.96 0 0 0 1.655 6.058L0 24l6.304-1.632A11.96 11.96 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22a9.94 9.94 0 0 1-5.138-1.39l-.368-.219-3.752.97 1.002-3.673-.236-.384A9.954 9.954 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm4.02-7.404c-.277-.14-1.643-.81-1.898-.902-.254-.094-.44-.14-.625.14s-.718.902-.88 1.088c-.16.185-.325.21-.6.07-.275-.14-1.163-.43-2.213-1.37-.82-.73-1.375-1.64-1.535-1.915s-.017-.41.123-.55c.126-.125.275-.325.41-.49.14-.163.185-.28.275-.465s.045-.35-.022-.49c-.07-.14-.625-1.507-.855-2.06s-.46-.46-.63-.46h-.524c-.186 0-.49.07-.748.35-.258.28-.98.96-.98 2.34s1 2.705 1.14 2.885c.14.18 2.034 3.35 5.26 4.42.735.253 1.31.404 1.76.517.74.18 1.415.155 1.945.094.595-.066 1.64-.67 1.87-1.32.23-.65.23-1.2.16-1.32-.07-.12-.26-.18-.54-.32z" clip-rule="evenodd"/>
              </svg>
          </li>
          <li class="p-3 md:p-0 md:flex items-center hidden">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
              </svg>          
          </li>
          
        </ul>

      </div>
    </nav>
  </div>
  

  @yield('contend')
  

  

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
                      <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                  </svg>
                  <span class="sr-only">Facebook page</span>
                </a>
                <a href="#" target="_blank" class="text-gray-300 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-5 h-5" aria-hidden="true" xmlns="#" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 0C5.373 0 0 5.373 0 12a11.96 11.96 0 0 0 1.655 6.058L0 24l6.304-1.632A11.96 11.96 0 0 0 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22a9.94 9.94 0 0 1-5.138-1.39l-.368-.219-3.752.97 1.002-3.673-.236-.384A9.954 9.954 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm4.02-7.404c-.277-.14-1.643-.81-1.898-.902-.254-.094-.44-.14-.625.14s-.718.902-.88 1.088c-.16.185-.325.21-.6.07-.275-.14-1.163-.43-2.213-1.37-.82-.73-1.375-1.64-1.535-1.915s-.017-.41.123-.55c.126-.125.275-.325.41-.49.14-.163.185-.28.275-.465s.045-.35-.022-.49c-.07-.14-.625-1.507-.855-2.06s-.46-.46-.63-.46h-.524c-.186 0-.49.07-.748.35-.258.28-.98.96-.98 2.34s1 2.705 1.14 2.885c.14.18 2.034 3.35 5.26 4.42.735.253 1.31.404 1.76.517.74.18 1.415.155 1.945.094.595-.066 1.64-.67 1.87-1.32.23-.65.23-1.2.16-1.32-.07-.12-.26-.18-.54-.32z" clip-rule="evenodd"/>
                  </svg>
                  <span class="sr-only">WhatsApp</span>
                </a>
            </div>
        </div>
      </div>
  </footer>


  <!-- JavaScript para abrir/cerrar el menú -->
  <script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    menuToggle.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>

</body>
</html>