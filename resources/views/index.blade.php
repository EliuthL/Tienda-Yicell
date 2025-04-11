@extends('layouts.layout')

@section("contend")
<main class="bg-white">
    <div class="container w-full max-w-screen-xl mx-auto px-4 py-8 lg:pt-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex flex-col justify-center">
                <h1 class="text-3xl md:text-6xl font-medium text-gray-800">Bienvenido a Yi-Cell</h1>
                <p class="mt-4 text-gray-600">Somos una tienda de tecnología y articulos electrónicos con tienda física ubicada en la ciudad de Quilalí-Nueva Segovia</p>
                <p class="mt-4 text-gray-600">Estamos ubicados frete a esquina Nort-Oeste de ferretería San José</p>
                <div clsass="">
                    <button type="button" class=" my-5 text-s text-white bg-(--primary-color-btn) hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-xl px-5 py-2.5 me-2 mb-2 focus:outline-none">Ver catálogo</button>
                </div>
            </div>
            <div class="flex justify-center">
                <img src="/img/intro.png" class="w-full md:w-96" alt="Yi-Cell" />
            </div>
        </div>
    </div>

    <div class="w-full max-w-screen-xl mx-auto px-4 py-6 lg:py-8 ">
        <div id="" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <x-card img="/img/building.svg"
                alt="tienda"
                titulo="Tienda Física"
                descripcion="Contamos con tienda física en la ciudad de Quilalí-Nueva Segovia"/>

            <x-card img="/img/shopping-bag.svg"
                alt="bolsa"
                titulo="Catálogo Digital"
                descripcion="Contamos con tienda física en la ciudad de Quilalí-Nueva Segovia"/>
            
            <x-card img="/img/portfolio.svg"
                alt="tienda"
                titulo="Garantía en Compras"
                descripcion="Contamos con tienda física en la ciudad de Quilalí-Nueva Segovia"/>

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