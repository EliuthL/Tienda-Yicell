<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <main class="container flex items-center justify-center px-4 py-8">
        <div class="max-w-md bg-white shadow-lg rounded-lg p-6 w-full">
            <h2 class="text-2xl font-bold text-center mb-4">Iniciar sesión</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                    <input type="email" id="email" name="email" required class="mt-2 px-4 py-4 block w-full border border-black rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Escribe tu email">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <input type="password" id="password" name="password" required class="mt-2 px-4 py-4 block w-full border border-black rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Escribe tu contraseña">
                </div>
                <div class="mb-4 flex items-center">
                    <input type="checkbox" name="showpassword" id="show_password" class="w-6 h-6 mr-2">
                    <label>Mostrar contraseña</label>
                </div>
                <div class="mb-4 flex justify-end">
                    <button class="bg-blue-600 px-4 py-3 rounded-lg text-white">Ingresar</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>

