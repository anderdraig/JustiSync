<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Servicios</title>
</head>
<body>
    <section class="min-h-screen bg-[#13121A] text-white py-16 px-6">
    
        <div class="container mx-auto">
        
            <h1 class="text-4xl font-bold mb-12 text-center">
                Nuestros Servicios
            </h1>
        
            {{-- RECORRER CATEGORÍAS --}}
            @foreach($servicios as $categoria => $items)
        
                <h2 class="text-2xl font-semibold text-blue-400 mb-6">
                    {{ $categoria }}
                </h2>
            
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                
                    @foreach($items as $servicio)
                        <x-service-card
                            :titulo="$servicio->titulo"
                            :descripcion="$servicio->descripcion"
                        />
                    @endforeach
                
                </div>
            
            @endforeach
            
        </div>
    
    </section>
</body>
</html>