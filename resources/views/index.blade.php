<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Responsive</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">

      <!-- Logo -->
      <a href="/" class="flex items-center space-x-2 text-xl font-bold">
        <img src="/img/isologo.png" alt="Logo" class="w-auto h-10 md:h-12" />
        <span>Tienda Yi-cell</span>
      </a>

      <!-- Botón hamburguesa (solo visible en móviles) -->
      <button id="menu-toggle" class="md:hidden text-white focus:outline-none">
        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
      </button>

      <!-- Menú de navegación -->
      <ul id="menu" class="hidden md:flex md:space-x-4 absolute md:static top-16 left-0 w-full md:w-auto bg-gray-800 md:bg-transparent text-center md:text-left">
        <li class="p-3 md:p-0 hover:bg-gray-700 md:hover:bg-transparent"><a href="/service">Servicios</a></li>
        <li class="p-3 md:p-0 hover:bg-gray-700 md:hover:bg-transparent"><a href="/contact">Contacto</a></li>
        <li class="p-3 md:p-0"><a href="/login" class="md:bg-sky-500 md:hover:bg-sky-700 text-white px-4 py-2 rounded-3xl transition">Inicia sesión</a></li>
      </ul>

    </div>
  </nav>

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
