@extends('layouts.layout')

@section("contend")
<main class="">
    <div class="container max-w-screen-xl mx-auto px-4 py-8 lg:pt-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex flex-col justify-center">
                <h1 class="text-3xl md:text-5xl font-medium text-white">Compra con seguridad y Garantía</h1>
                <p class="mt-8 text-white text-lg">Somos <span class="font-bold">Yi-Cell</span> una tienda de tecnología y articulos electrónicos con tienda física ubicada en la ciudad de Quilalí-Nueva Segovia.</p>
                <p class="mt-4 text-white text-lg">Mira nuestro catalogo en linea totalmente gratis y descubre un mundo de accesorios y dispositivos móviles que <span class="font-bold">Yi-Cell</span> te ofrece.</p>
                <div clsass="">
                    <a href="https:www.jw.org" target="_blank" rel="noopener noreferrer">
                        <div class="">
                            <button type="button" class="my-5 text-s text-black bg-[#ffcd57] hover:bg-[] focus:ring-4 focus:ring-blue-300 font-medium rounded-4xl px-10 py-5 me-2 mb-2 focus:outline-none md:mt-14">
                                Ver catálogo
                            </button>
                        </div>
                    </a>
                </div>
            </div>
            <div class="items-center flex justify-center sr-only md:not-sr-only">
                <img src="/img/intro.png" class="w-full h-auto" alt="Yi-Cell" />
            </div>



        </div>
    </div>

    <div class="bg-[#F6F6F6]">
        <div class=" w-full max-w-screen-xl mx-auto px-4 py-6 lg:py-8">
            <div id="" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-card img="/img/building.svg"
                    alt="tienda"
                    titulo="Tienda Física"
                    descripcion="Contamos con tienda física en la ciudad de Quilalí-Nueva Segovia." />

                <x-card img="/img/shopping-bag.svg"
                    alt="bolsa"
                    titulo="Catálogo Digital"
                    descripcion="Puedes ver nuestro catálogo digital totalmente gratis.">
                    <a href="#" class="text-blue-600 hover:underline">Ver Catálogo&#8599;</a>
                </x-card>

                <x-card img="/img/portfolio.svg"
                    alt="tienda"
                    titulo="Garantía en Compras"
                    descripcion="Te brindamos garantía de tres meses y servicios postventa en tus compras.">
                </x-card>

            </div>

            <div>
                <p class="text-center text-4xl font-medium text-gray-800 mt-14">
                    Variedad en marcas
                </p>

                <div class="mt-8">
                    <div class="grid grid-cols-2 sm:grid-cols-4 md:flex md:justify-center md:gap-12 lg:gap-16 items-center">
                        <img src="/img/xiaomi_icon.svg" alt="Xiaomi" class="w-10 mx-auto pt-6 md:pt-0" />
                        <img src="/img/infinix_icon.svg" alt="Infinix" class="w-20 mx-auto pt-6 md:pt-0" />
                        <img src="/img/apple_icon.png" alt="Apple" class="w-10 mx-auto pt-6 md:pt-0" />
                        <img src="/img/samsung_icon.svg" alt="Samsung" class="w-20 mx-auto mt-6 md:pt-0" />
                        <img src="/img/playstation_icon.svg" alt="PlayStation" class="w-10 mx-auto mt-6 md:pt-0" />
                        <img src="/img/xbox_icon.png" alt="Xbox" class="w-10 mx-auto mt-6 md:pt-0" />
                        <img src="/img/blu_icon.png" alt="Blu" class="w-16 mx-auto mt-6 md:pt-0" />
                        <img src="/img/realmi_icon.svg" alt="Realmi" class="w-20 mx-auto mt-6 md:pt-0" />

                    </div>
                </div>
            </div>

            </div">


        </div>

        <section id="servicios">
            <div class="text-black">
                <div class="w-full max-w-screen-xl mx-auto px-4 py-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="flex flex-col justify-center">
                            <h1 class="text-3xl md:text-5xl font-semibold text-center md:text-left">Reparaciones y Servicios</h1>
                            <p class="mt-8 text-lg text-gray-700">
                                Contamos con un equipo de técnicos especializados en reparaciones de celulares, tablets y computadoras.
                            </p>
                            <p class="mt-4 text-lg text-gray-700">
                                Puedes contactarte con nosotros y preguntar por reparaciones o cotizar artículos de tu interés.
                            </p>
                            <p class="mt-4 text-lg text-gray-700">
                                Visítanos en nuestra tienda ubicada en la ciudad de Quilalí, Nueva Segovia.
                            </p>

                            <div class="flex flex-col md:flex-row gap-4 md:gap-6 mt-8">
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <button type="button" class="w-full md:w-auto text-sm text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-xl px-6 py-3 focus:outline-none transition duration-300">
                                        Contactar
                                    </button>
                                </a>
                                <a href="https://maps.app.goo.gl/sBh4sECYmuJZ2WLo9" target="_blank" rel="noopener noreferrer">
                                    <button type="button" class="w-full md:w-auto text-sm text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-xl px-6 py-3 focus:outline-none transition duration-300">
                                        Cómo llegar &#8599;
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="flex justify-center">
                            <img src="/img/local.jpeg" class="w-full max-w-md rounded-2xl shadow-lg" alt="Yi-Cell" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

</main>
@endsection