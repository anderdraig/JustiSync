<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Conócenos</title>
</head>
<body>
    {{-- Hero --}}
<section class="w-full bg-gradient-to-br from-[#0d1b2a] to-[#1b263b] py-24 text-white text-center">
    <h1 class="text-5xl font-bold mb-4">Sobre Nosotros</h1>
    <p class="max-w-2xl mx-auto text-lg opacity-90">
        La historia, propósito y visión de JustiSync: conectando personas con soluciones legales seguras y accesibles.
    </p>
</section>

{{-- Historia --}}
<section class="w-full py-20 bg-gray-100">
    <div class="max-w-6xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-gray-800 mb-6">Nuestra Historia</h2>

        <p class="text-gray-700 leading-relaxed mb-6">
            JustiSync nace con el propósito de modernizar la manera en que las personas acceden a servicios legales.
            En un mundo que avanza rápidamente, notamos que la industria jurídica seguía siendo compleja y poco accesible.
        </p>

        <p class="text-gray-700 leading-relaxed mb-6">
            Decidimos crear una plataforma que conectara a usuarios con abogados especializados de forma clara,
            ordenada y sin complicaciones. A través de tecnología moderna y una visión centrada en el usuario,
            transformamos una necesidad en una solución confiable.
        </p>

        <p class="text-gray-700 leading-relaxed">
            Hoy seguimos creciendo con un objetivo en mente: hacer que el acceso a servicios legales sea sencillo,
            transparente y profesional para todos.
        </p>
    </div>
</section>

{{-- Valores --}}
<section class="w-full py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-gray-800 mb-12 text-center">Nuestros Valores</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            {{-- Card --}}
            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Transparencia</h3>
                <p class="text-gray-600 leading-relaxed">
                    Procesos claros y honestos que permiten decisiones informadas y responsables.
                </p>
            </div>

            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Accesibilidad</h3>
                <p class="text-gray-600 leading-relaxed">
                    Servicios legales disponibles para cualquier persona, sin importar su experiencia.
                </p>
            </div>

            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Profesionalismo</h3>
                <p class="text-gray-600 leading-relaxed">
                    Ética, responsabilidad y compromiso en cada interacción con nuestros usuarios.
                </p>
            </div>

            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Innovación</h3>
                <p class="text-gray-600 leading-relaxed">
                    Utilizamos tecnología moderna para transformar y optimizar la experiencia legal.
                </p>
            </div>

        </div>
    </div>
</section>
</body>
</html>