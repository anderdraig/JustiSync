<div class="flex gap-6 items-start">
    
    <!-- Imagen -->
    <img 
        src="{{ $abogado->imagen_perfil }}" 
        alt="{{ $abogado->nombre }}" 
        class="w-48 h-48 object-cover rounded-xl shadow-lg"
    >

    <!-- Info -->
    <div>
        <h3 class="text-xl font-semibold">{{ $abogado->nombre }}</h3>
        <p class="text-sm text-blue-300 font-medium mb-3">{{ $abogado->especialidad }}</p>

        <p class="text-gray-300 leading-relaxed">
            {{ $abogado->descripcion }}
        </p>

        <div class="mt-4">
            @if($abogado->estado_actual)
                <span class="text-green-400 text-sm font-semibold">Disponible</span>
            @else
                <span class="text-red-400 text-sm font-semibold">No disponible</span>
            @endif
        </div>
    </div>

</div>
