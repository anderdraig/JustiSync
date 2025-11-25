<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuestro Equipo!</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#0d1629] text-white">

    <section class="py-20 px-6 max-w-6xl mx-auto">
        <h2 class="text-center text-4xl font-bold mb-4">Nuestro Equipo Legal</h2>
        <p class="text-center text-gray-300 max-w-2xl mx-auto mb-16">
            Conoce a los profesionales que están listos para ayudarte con tu caso.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            @foreach($abogados as $abogado)
                @include('components.abogado-card', ['abogado' => $abogado])
            @endforeach
        </div>
    </section>

</body>
</html>
