@extends('layouts.layout')

@section("contend")
<main class="">
    <div class="container w-full max-w-screen-xl mx-auto px-4 py-8 lg:pt-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex flex-col justify-center">
                <h1 class="text-3xl md:text-5xl font-medium text-white">Compra con seguridad y Garantía</h1>
                <p class="mt-8 text-white text-lg">Somos Yi-Cell una tienda de tecnología y articulos electrónicos con tienda física ubicada en la ciudad de Quilalí-Nueva Segovia</p>
                <p class="mt-4 text-white text-lg">Mira nuestro catalogo en linea totalmente gratis y descubre un mundo de accesorios y dispositivos móviles que <span class="font-bold">Yi-Cell</span> te ofrece.</p>
                <div clsass="">
                    <a href="https:www.jw.org" target="_blank" rel="noopener noreferrer">
                        <div class="">
                            <button type="button" class="my-5 text-s text-black bg-(--primary-color-btn) hover:bg-(--primary-color-btn-hover) focus:ring-4 focus:ring-blue-300 font-medium rounded-4xl px-10 py-5 me-2 mb-2 focus:outline-none md:mt-14">
                                Ver catálogo
                            </button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex justify-center">
                <img src="/img/intro.png" class="w-full" alt="Yi-Cell" />
            </div>
        </div>
    </div>

    <div class="bg-[var(--contrast)]">
       <div class=" w-full max-w-screen-xl mx-auto px-4 py-6 lg:py-8 ">
            <div id="" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-card img="/img/building.svg"
                    alt="tienda"
                    titulo="Tienda Física"
                    descripcion="Contamos con tienda física en la ciudad de Quilalí-Nueva Segovia."/>

                <x-card img="/img/shopping-bag.svg"
                    alt="bolsa"
                    titulo="Catálogo Digital"
                    descripcion="Puedes ver nuestro catálogo digital totalmente gratis."/>
                
                <x-card img="/img/portfolio.svg"
                    alt="tienda"
                    titulo="Garantía en Compras"
                    descripcion="Contamos con tienda física en la ciudad de Quilalí-Nueva Segovia"/>

            </div>

            <div class="">
                <p class="text-center text-4xl fon text-gray-800 mt-14">
                    Variedad en marcas
                </p>
                <div class="flex justify-center mt-8 gap-12 ">
                    <img src="/img/xiaomi_icon.svg" alt="marcas" class="w-10" />
                    <img src="/img/infinix_icon.svg" alt="marcas" class="w-20" />
                    <img src="/img/apple_icon.png" alt="marcas" class="w-10" />
                    <img src="/img/samsung_icon.svg" alt="marcas" class="w-20" />
                    <img src="/img/playstation_icon.svg" alt="marcas" class="w-10" />
                    <img src="/img/xbox_icon.png" alt="marcas" class="w-10" />
                    <img src="/img/blu_icon.png" alt="marcas" class="w-16" />
                </div>
            </div>
        </div">
        
        
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