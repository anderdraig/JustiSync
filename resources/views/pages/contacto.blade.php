<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contáctanos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{-- HERO --}}
<section class="w-full bg-gradient-to-br from-[#0d1b2a] to-[#1b263b] py-24 text-white text-center">
    <h1 class="text-5xl font-bold mb-4">Contáctanos</h1>
    <p class="max-w-2xl mx-auto text-lg opacity-90">
        Estamos aquí para ayudarte. Encuentra todos nuestros medios de comunicación y oficinas en Colombia.
    </p>
</section>

{{-- SECCIÓN DE CONTACTO --}}
<section class="w-full py-20 bg-gray-100">
    <div class="max-w-6xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">Medios de Comunicación</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Teléfono --}}
            <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Teléfono</h3>
                <p class="text-gray-600">+57 320 456 7890</p>
                <p class="text-gray-600">+57 601 555 1234</p>
            </div>

            {{-- Correo --}}
            <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Correo Electrónico</h3>
                <p class="text-gray-600">contacto@justisync.com</p>
                <p class="text-gray-600">soporte@justisync.com</p>
            </div>

            {{-- Horario --}}
            <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Horario de Atención</h3>
                <p class="text-gray-600">Lunes a Viernes</p>
                <p class="text-gray-600">8:00 AM – 6:00 PM</p>
            </div>

        </div>

        {{-- REDES SOCIALES --}}
        <div class="mt-16 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Síguenos en Nuestras Redes</h2>

            <div class="flex justify-center gap-6">
                <a href="#" class="text-[#1b263b] hover:text-blue-800 text-xl font-semibold">Facebook</a>
                <a href="#" class="text-[#1b263b] hover:text-blue-800 text-xl font-semibold">Instagram</a>
                <a href="#" class="text-[#1b263b] hover:text-blue-800 text-xl font-semibold">Twitter</a>
                <a href="#" class="text-[#1b263b] hover:text-blue-800 text-xl font-semibold">LinkedIn</a>
            </div>
        </div>

    </div>
</section>

{{-- OFICINAS --}}
<section class="w-full py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-gray-800 mb-12 text-center">Nuestras Oficinas</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            {{-- Bogotá --}}
            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-semibold text-gray-900 mb-2">Bogotá</h3>
                <p class="text-gray-600 mb-3">Calle 45 # 18 - 22 <br> Chapinero</p>
                <div class="w-full h-56 bg-gray-300 rounded-lg"></div>
            </div>

            {{-- Medellín --}}
            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-semibold text-gray-900 mb-2">Medellín</h3>
                <p class="text-gray-600 mb-3">Carrera 43A # 10 - 50 <br> El Poblado</p>
                <div class="w-full h-56 bg-gray-300 rounded-lg"></div>
            </div>

            {{-- Bucaramanga --}}
            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-semibold text-gray-900 mb-2">Bucaramanga</h3>
                <p class="text-gray-600 mb-3">Calle 36 # 27 - 55 <br> Cabecera</p>
                <div class="w-full h-56 bg-gray-300 rounded-lg"></div>
            </div>

            {{-- Cali --}}
            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-2xl font-semibold text-gray-900 mb-2">Cali</h3>
                <p class="text-gray-600 mb-3">Avenida 6N # 23 - 70 <br> Granada</p>
                <div class="w-full h-56 bg-gray-300 rounded-lg"></div>
            </div>

        </div>

    </div>
</section>
</body>
</html>