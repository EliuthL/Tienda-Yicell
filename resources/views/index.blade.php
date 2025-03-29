@extends('layouts.layout')

@section("contend")
<main class="bg-white">
    <div class="container w-full max-w-screen-xl mx-auto px-4 py-6 lg:py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex flex-col justify-center">
                <h1 class="text-4xl font-semibold text-gray-800">Bienvenido a Yi-Cell</h1>
                <p class="mt-4 text-gray-600">Somos una tienda de tecnología y articulos electrónicos con tienda física ubicada en la ciudad de Quilalí-Nueva Segovia</p>
                <p class="mt-4 text-gray-600">Estamos ubicados frete a esquina Nort-Oeste de ferretería San José</p>
                <a href="/productos" class="mt-4 text-blue-600 hover:underline">Ver catálogo</a>
            </div>
            <div class="flex justify-center">
                <img src="/img/intro.png" class="w-full md:w-96" alt="Yi-Cell" />
            </div>
        </div>
    </div>
    
    <div class="bg-sky-700">
        <div class="w-full max-w-screen-xl mx-auto px-4 py-6 lg:py-8 ">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800 ">Productos</h2>
                    <p class="mt-2 text-gray-600 ">Ofrecemos una gran variedad de articulos electrónicos como celulares,
                        smartwach, radios, televisores y mucho mas. Mira nuestro catálogo en linea.</p>
                    <a href="/productos" class="mt-4 text-blue-600 hover:underline">Ir al catálogo</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800 ">Contactar vendedor</h2>
                    <p class="mt-2 text-gray-600">Puedes contactarte con nosotros y preguntar por reparaciones o cotizar articulos de tu interes</p>
                    <a href="/contacto" class="mt-4 text-blue-600 hover:underline">Contactar por WhatsApp</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800 ">Sobre nosotros</h2>
                    <p class="mt-2 text-gray-600 ">Somos una tienda de tecnología y articulos electrónicos
                        ubicado en la ciudad de Quilalí-Nueva Segovia.
                        Puedes visitar nuestra tienda frete a esquina Nort-Oeste de ferretería San José.
                    </p>
                    <a href="/nosotros" class="mt-4 text-blue-600 hover:underline">Ver más</a>
                </div>
            </div>
        </div>
    </div>
    
</main>
@endsection