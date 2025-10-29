<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JustiSync</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
    <nav class="relative bg-gray-800 dark:bg-gray-800/50 dark:after:pointer-events-none dark:after:absolute dark:after:inset-x-0 dark:after:bottom-0 dark:after:h-px dark:after:bg-white/10">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex shrink-0 items-center">
                    <img src="{{asset('imagenes/logo.png')}}" alt="Your Company" class="h-10 w-auto" />
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 dark:bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                        <a href="#" aria-current="page" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white dark:bg-gray-950/50">Inicio</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Servicios</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">sobre nosotros</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contacto</a>
                    </div>
                </div>
        </div>
    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button type="button" class="relative rounded-full p-1 text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500 dark:hover:text-white">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">View notifications</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
            <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>

        <!-- Profile dropdown -->
        <el-dropdown class="relative ml-3">
          <button class="relative flex rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">Open user menu</span>
            <img src="{{asset('imagenes/user.png')}}" alt="" class="size-8 rounded-full bg-gray-800 outline -outline-offset-1 outline-white/10" />
          </button>

          <el-menu anchor="bottom end" popover class="w-48 origin-top-right rounded-md bg-white py-1 shadow-lg outline outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in dark:bg-gray-800 dark:shadow-none dark:-outline-offset-1 dark:outline-white/10">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden dark:text-gray-300 dark:focus:bg-white/5">Your profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden dark:text-gray-300 dark:focus:bg-white/5">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden dark:text-gray-300 dark:focus:bg-white/5">Sign out</a>
          </el-menu>
        </el-dropdown>
      </div>
    </div>
  </div>

  <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <!-- Current: "bg-gray-900 dark:bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
      <a href="#" aria-current="page" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white dark:bg-gray-950/50">inicio</a>
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">servicios</a>
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">sobre nosotros</a>
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">contacto</a>
    </div>
  </el-disclosure>
</nav>
    </header>
    <!--carrousel-->
    <section class="relative w-full h-[480px] overflow-hidden" id="carousel">
    <div class="slides flex transition-transform duration-700 ease-in-out">

      <!-- Slide 1 -->
      <div class="min-w-full relative">
        <img src="{{asset('imagenes/asesoria.png')}}" alt="servicio 1" class="w-full h-[480px] object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end px-8 pb-10">
          <p class="text-sm text-pink-400 font-semibold">Servicios</p>
          <h2 class="text-3xl font-bold mb-2">Asesoría Legal Integral</h2>
          <p class="max-w-2xl text-gray-300">Brindamos acompañamiento y orientación jurídica en diversas áreas del derecho, garantizando soluciones personalizadas y seguras para particulares y empresas.</p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="min-w-full relative">
        <img src="{{asset('imagenes/derecho_civil.jpg')}}" alt="servicio 2" class="w-full h-[480px] object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end px-8 pb-10">
          <p class="text-sm text-pink-400 font-semibold">Servicios</p>
          <h2 class="text-3xl font-bold mb-2">Derecho Civil y Familiar</h2>
          <p class="max-w-2xl text-gray-300">Representación en procesos de divorcio, herencias, sucesiones, contratos civiles y reclamaciones patrimoniales, siempre priorizando la conciliación y el bienestar de las partes.</p>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="min-w-full relative">
        <img src="{{asset('imagenes/derecho_corporativo.jpg')}}" alt="servicio 3" class="w-full h-[480px] object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end px-8 pb-10">
          <p class="text-sm text-pink-400 font-semibold">Servicio</p>
          <h2 class="text-3xl font-bold mb-2">Derecho Corporativo y Empresarial</h2>
          <p class="max-w-2xl text-gray-300">Constitución de empresas, redacción de contratos comerciales, fusiones, adquisiciones y cumplimiento normativo para tu negocio.</p>
        </div>
      </div>
    </div>

    <!-- Controles -->
    <button id="prevBtn" class="absolute left-3 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 p-3 rounded-full">
      ❮
    </button>
    <button id="nextBtn" class="absolute right-3 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 p-3 rounded-full">
      ❯
    </button>

    <!-- Indicadores -->
    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
      <span class="dot w-3 h-3 bg-white/40 rounded-full cursor-pointer"></span>
      <span class="dot w-3 h-3 bg-white/40 rounded-full cursor-pointer"></span>
      <span class="dot w-3 h-3 bg-white/40 rounded-full cursor-pointer"></span>
    </div>
  </section>

    


    </section>
    <!--nuestro team-->
    <section class="bg-gray-900 text-gray-100 py-10">
  <div class="max-w-7xl mx-auto px-6">
    <!-- Título -->
    <h2 class="text-lg font-semibold mb-6 border-b border-gray-700 pb-2">Nuestro Equipo</h2>

    <!-- Carrusel horizontal -->
    <div class="flex space-x-6 overflow-x-auto scrollbar-hide pb-4">
      <!-- Tarjeta 1 -->
      <div class="flex-shrink-0 w-64 bg-gray-800 rounded-xl shadow-lg p-4 hover:bg-gray-700 transition-all duration-300">
        <img src="{{ asset('imagenes/perfil.png') }}" alt="Abogado 1" class="w-16 h-16 rounded-full object-cover mb-3">
        <p class="text-sm text-indigo-400 font-medium">Derecho Penal</p>
        <h3 class="text-base font-semibold mb-2">Carlos Ramírez</h3>
        <p class="text-gray-400 text-sm">Especialista en litigios complejos y defensa penal estratégica.</p>
      </div>

      <!-- Tarjeta 2 -->
      <div class="flex-shrink-0 w-64 bg-gray-800 rounded-xl shadow-lg p-4 hover:bg-gray-700 transition-all duration-300">
        <img src="{{ asset('imagenes/perfil.png') }}" alt="Abogada 2" class="w-16 h-16 rounded-full object-cover mb-3">
        <p class="text-sm text-indigo-400 font-medium">Derecho Laboral</p>
        <h3 class="text-base font-semibold mb-2">María López</h3>
        <p class="text-gray-400 text-sm">Experta en derecho laboral y resolución de conflictos sindicales.</p>
      </div>

      <!-- Tarjeta 3 -->
      <div class="flex-shrink-0 w-64 bg-gray-800 rounded-xl shadow-lg p-4 hover:bg-gray-700 transition-all duration-300">
        <img src="{{ asset('imagenes/perfil.png') }}" alt="Abogado 3" class="w-16 h-16 rounded-full object-cover mb-3">
        <p class="text-sm text-indigo-400 font-medium">Derecho Civil</p>
        <h3 class="text-base font-semibold mb-2">Lucía Fernández</h3>
        <p class="text-gray-400 text-sm">Amplia experiencia en derecho civil, contratos y responsabilidad civil.</p>
      </div>

      <!-- Tarjeta 4 -->
      <div class="flex-shrink-0 w-64 bg-gray-800 rounded-xl shadow-lg p-4 hover:bg-gray-700 transition-all duration-300">
        <img src="{{ asset('imagenes/perfil.png') }}" alt="Abogado 4" class="w-16 h-16 rounded-full object-cover mb-3">
        <p class="text-sm text-indigo-400 font-medium">Derecho Corporativo</p>
        <h3 class="text-base font-semibold mb-2">Andrés Gómez</h3>
        <p class="text-gray-400 text-sm">Asesor legal corporativo y estructuración de empresas multinacionales.</p>
      </div>
    </div>
  </div>
</section>


<!--ultimas noticias -->
<section class="max-w-6xl mx-auto px-4 py-10 text-gray-100">
  <h2 class="text-2xl font-bold mb-6 border-b border-gray-700 pb-2">Últimas Noticias Jurídicas</h2>

  <div class="space-y-8">
    <!-- Noticia 1 -->
    <article class="flex flex-col sm:flex-row gap-5 border-b border-gray-800 pb-6">
      <img src="{{ asset('imagenes/ley_proteccion_datos.jpg') }}" alt="Ley de Protección de Datos" class="w-full sm:w-60 h-40 object-cover rounded-lg shadow-md">
      <div class="flex flex-col justify-between">
        <div>
          <span class="text-sm text-indigo-400 font-semibold">Derecho Digital</span>
          <h3 class="text-xl font-semibold mt-1 hover:text-indigo-400 transition-colors">
            Nueva reforma sobre la protección de datos personales en Latinoamérica
          </h3>
          <p class="text-sm text-gray-400 mt-2">
            El congreso aprobó una actualización de la ley de protección de datos para adaptarse a los nuevos retos tecnológicos y al uso de inteligencia artificial...
          </p>
        </div>
        <div class="flex items-center text-sm text-gray-500 mt-3 space-x-3">
          <span>💬 0</span>
          <span>• hace 3 horas por Laura Gómez</span>
        </div>
      </div>
    </article>

    <!-- Noticia 2 -->
    <article class="flex flex-col sm:flex-row gap-5 border-b border-gray-800 pb-6">
      <img src="{{ asset('imagenes/reforma_laboral.jpg') }}" alt="Reforma laboral" class="w-full sm:w-60 h-40 object-cover rounded-lg shadow-md">
      <div class="flex flex-col justify-between">
        <div>
          <span class="text-sm text-green-400 font-semibold">Derecho Laboral</span>
          <h3 class="text-xl font-semibold mt-1 hover:text-green-400 transition-colors">
            Reforma laboral 2025: principales cambios en los contratos temporales
          </h3>
          <p class="text-sm text-gray-400 mt-2">
            La nueva legislación busca reducir la precarización laboral y fortalecer la estabilidad de los empleados en el sector público y privado...
          </p>
        </div>
        <div class="flex items-center text-sm text-gray-500 mt-3 space-x-3">
          <span>💬 0</span>
          <span>• hace 5 horas por Carlos Méndez</span>
        </div>
      </div>
    </article>

    <!-- Noticia 3 -->
    <article class="flex flex-col sm:flex-row gap-5 border-b border-gray-800 pb-6">
      <img src="{{ asset('imagenes/corte_justicia.jpeg') }}" alt="Sentencia Corte Suprema" class="w-full sm:w-60 h-40 object-cover rounded-lg shadow-md">
      <div class="flex flex-col justify-between">
        <div>
          <span class="text-sm text-red-400 font-semibold">Corte Suprema</span>
          <h3 class="text-xl font-semibold mt-1 hover:text-red-400 transition-colors">
            La Corte Suprema dicta nueva sentencia sobre derechos laborales de teletrabajadores
          </h3>
          <p class="text-sm text-gray-400 mt-2">
            Este fallo sienta un precedente importante sobre las condiciones de trabajo remoto y las responsabilidades de los empleadores...
          </p>
        </div>
        <div class="flex items-center text-sm text-gray-500 mt-3 space-x-3">
          <span>💬 0</span>
          <span>• hace 8 horas por Sofía Herrera</span>
        </div>
      </div>
    </article>

    <!-- Noticia 4 -->
    <article class="flex flex-col sm:flex-row gap-5">
      <img src="{{ asset('imagenes/delito_informatico.jpg') }}" alt="Justicia Penal" class="w-full sm:w-60 h-40 object-cover rounded-lg shadow-md">
      <div class="flex flex-col justify-between">
        <div>
          <span class="text-sm text-yellow-400 font-semibold">Derecho Penal</span>
          <h3 class="text-xl font-semibold mt-1 hover:text-yellow-400 transition-colors">
            Aumentan las penas por delitos informáticos en la nueva legislación penal
          </h3>
          <p class="text-sm text-gray-400 mt-2">
            El Ministerio de Justicia ha propuesto endurecer las sanciones contra los delitos cibernéticos para proteger a los ciudadanos en el entorno digital...
          </p>
        </div>
        <div class="flex items-center text-sm text-gray-500 mt-3 space-x-3">
          <span>💬 0</span>
          <span>• hace 10 horas por Andrés Ruiz</span>
        </div>
      </div>
    </article>
  </div>
</section>

    <!--testimonios-->
    <section class="bg-gray-900 text-gray-100 py-12">
  <div class="max-w-5xl mx-auto text-center px-4">
    <h2 class="text-2xl font-bold tracking-wide mb-10 uppercase">Testimonios</h2>

    <div class="flex flex-col md:flex-row items-center justify-center gap-10">
      <!-- Imagen del testimonio -->
      <div class="flex-shrink-0">
        <img src="{{ asset('imagenes/testimonio.jpg') }}" alt="Cliente" class="w-40 h-40 md:w-48 md:h-48 object-contain">
      </div>

      <!-- Texto del testimonio -->
      <div class="max-w-md">
        <p class="text-gray-300 leading-relaxed text-sm md:text-base mb-6">
          “Lorem ipsum dolor sit amet consectetur adipiscing elit. Velit mauris sodales fringilla dui euismod ligula, 
          volutpat porttitor ultrices at dapibus consequat neque. Sociis libero viverra pulvinar dignissim curae urna auctor.”
        </p>
        <p class="font-semibold text-gray-200">Antonio Hernández</p>
      </div>
    </div>

    <!-- Indicadores circulares -->
    <div class="flex justify-center mt-10 space-x-3">
      <button class="w-4 h-4 rounded-full bg-gray-500 hover:bg-gray-300 transition-all"></button>
      <button class="w-4 h-4 rounded-full bg-gray-700 hover:bg-gray-300 transition-all"></button>
      <button class="w-4 h-4 rounded-full bg-gray-700 hover:bg-gray-300 transition-all"></button>
      <button class="w-4 h-4 rounded-full bg-gray-700 hover:bg-gray-300 transition-all"></button>
      <button class="w-4 h-4 rounded-full bg-gray-700 hover:bg-gray-300 transition-all"></button>
    </div>
  </div>
</section>

<!--unete a nuestro equipo-->
    <section class="bg-gray-900 text-gray-100 py-16">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
    <!-- Imagen / Icono -->
    <div class="flex justify-center">
      <img 
        src="{{ asset('imagenes/unete.png') }}" 
        alt="Equipo de abogados" 
        class="w-64 h-auto md:w-80"
      >
    </div>

    <!-- Formulario -->
    <div>
      <h2 class="text-2xl md:text-3xl font-bold mb-4">Únete a nuestro equipo</h2>
      <p class="text-gray-400 mb-6 text-sm md:text-base">
        Si eres un profesional del derecho capacitado, envíanos tu solicitud y únete a nuestro equipo.
      </p>

      <form action="{{ route('enviar.solicitud') }}" method="POST" class="space-y-4">
        @csrf
        <div>
          <input 
            type="text" 
            name="nombre" 
            placeholder="Nombre"
            class="w-full bg-gray-800 border border-gray-700 focus:border-indigo-500 rounded-md px-4 py-2 text-gray-100 placeholder-gray-500 focus:outline-none"
            required
          >
        </div>

        <div>
          <input 
            type="text" 
            name="apellido" 
            placeholder="Apellido"
            class="w-full bg-gray-800 border border-gray-700 focus:border-indigo-500 rounded-md px-4 py-2 text-gray-100 placeholder-gray-500 focus:outline-none"
            required
          >
        </div>

        <div>
          <input 
            type="email" 
            name="correo" 
            placeholder="Correo electrónico"
            class="w-full bg-gray-800 border border-gray-700 focus:border-indigo-500 rounded-md px-4 py-2 text-gray-100 placeholder-gray-500 focus:outline-none"
            required
          >
        </div>

        <div>
          <textarea 
            name="mensaje" 
            placeholder="Mensaje"
            rows="3"
            class="w-full bg-gray-800 border border-gray-700 focus:border-indigo-500 rounded-md px-4 py-2 text-gray-100 placeholder-gray-500 focus:outline-none resize-none"
            required
          ></textarea>
        </div>

        <button 
          type="submit"
          class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-md transition-all duration-300"
        >
          Enviar
        </button>
      </form>
    </div>
  </div>
</section>
<!--footer-->
<footer class="bg-[#0B0B12] text-gray-300 py-10 border-t border-gray-800">
  <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center md:items-start gap-8">

    <!-- Nombre del bufete -->
    <div class="text-center md:text-left">
      <h2 class="text-3xl font-extrabold text-white leading-tight">
        <span class="text-white relative inline-block">
          JustiSync
        </span>
      </h2>
    </div>

    <!-- Redes sociales y dirección -->
    <div class="flex flex-col items-center md:items-end space-y-4">
      <!-- Íconos -->
      <div class="flex space-x-4">
        <a href="#" class="bg-white/10 hover:bg-blue-600 p-2 rounded-full transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M22.675 0h-21.35C.6 0 0 .6 0 1.325v21.351C0 23.4.6 24 1.325 24h11.5v-9.294H9.691V11.07h3.134V8.41c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.466.099 2.797.143v3.24l-1.92.001c-1.505 0-1.797.716-1.797 1.767v2.318h3.591l-.468 3.636h-3.123V24h6.117C23.4 24 24 23.4 24 22.676V1.325C24 .6 23.4 0 22.675 0z"/>
          </svg>
        </a>
        <a href="#" class="bg-white/10 hover:bg-blue-400 p-2 rounded-full transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M23.953 4.57a10 10 0 0 1-2.825.775 4.932 4.932 0 0 0 2.165-2.724 9.864 9.864 0 0 1-3.127 1.196 4.916 4.916 0 0 0-8.384 4.482C7.69 7.63 4.066 5.1 1.64 1.64a4.822 4.822 0 0 0-.666 2.475 4.916 4.916 0 0 0 2.188 4.096 4.903 4.903 0 0 1-2.228-.616v.06a4.923 4.923 0 0 0 3.946 4.827 4.996 4.996 0 0 1-2.224.085 4.936 4.936 0 0 0 4.604 3.417A9.868 9.868 0 0 1 0 19.54a13.905 13.905 0 0 0 7.548 2.212c9.055 0 14-7.496 14-13.986 0-.21-.006-.423-.017-.635A10.012 10.012 0 0 0 24 4.59z"/>
          </svg>
        </a>
        <a href="#" class="bg-white/10 hover:bg-blue-700 p-2 rounded-full transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.762 2.239 5 5 5h14c2.762 0 5-2.238 5-5v-14c0-2.761-2.238-5-5-5zm-11.75 20h-2.25v-9h2.25v9zm-1.125-10.271c-.722 0-1.312-.588-1.312-1.312s.59-1.312 1.312-1.312c.725 0 1.313.588 1.313 1.312s-.588 1.312-1.313 1.312zm13.875 10.271h-2.25v-4.604c0-1.099-.021-2.512-1.531-2.512-1.531 0-1.767 1.197-1.767 2.431v4.685h-2.25v-9h2.16v1.229h.03c.301-.571 1.034-1.172 2.129-1.172 2.275 0 2.694 1.498 2.694 3.444v5.499z"/>
          </svg>
        </a>
      </div>

      <!-- Dirección -->
      <div class="text-sm text-gray-400">
        <p>Calle ***** 123, Ciudad</p>
        <p>123-456-7890</p>
      </div>
    </div>
  </div>

  <!-- Línea divisoria -->
  <div class="border-t border-gray-800 mt-8 pt-4 text-center text-xs text-gray-500">
    © 2025. Todos los derechos reservados.
  </div>
</footer>





</body>
</html>