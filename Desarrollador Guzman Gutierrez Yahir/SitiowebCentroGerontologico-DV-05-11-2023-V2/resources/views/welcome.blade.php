<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        
        <!-- Tailwind CSS -->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="antialiased bg-green-100">
    {{-- <body class="antialiased"> --}}

        <div class="bg-green-800 border-b text-white border-green-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="flex-shrink-0 flex items-center">
                            <a href="{{ route('dashboard') }}">
                                <x-jet-application-mark class="block h-9 w-auto" />
                            </a>
                            @if (Route::has('login'))
                            <div class="bg-green-800 rounded-bl-3xl rounded-br-3xl sm:fixed sm:top-0 sm:right-0 p-3 text-right z-10">
                                @auth
                                <a href="{{ url('/dashboard') }}" class="mr-10 font-bold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Inicio</a>
                                @else
                                <div class="relative inline-block">
                                    <a href="#" class="font-bold hover:text-gray-900 dark:text-gray-600 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Ingresar como</a>
                                    <ul class="hidden absolute z-10 right-0 mt-2 bg-green-600 border border-green-600 w-40 text-right rounded shadow-lg">
                                        <li><a href="{{ route('login') }}" class="block p-2 hover:bg-green-500">Personal Administrativo</a></li>
                                        <li><a href="{{ route('login.adulto-mayor') }}" class="block p-2 hover:bg-green-500">Adulto Mayor</a></li>
                                    </ul>
                                </div>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-bold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrar</a>
                                @endif
                                @endauth
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Agregar un manejador de eventos al enlace "Ingresar como" para mostrar/ocultar las opciones
            document.querySelector('.relative').addEventListener('click', function (e) {
                e.stopPropagation();
                const dropdown = this.querySelector('ul');
                dropdown.classList.toggle('hidden');
            });
        
            // Agregar un manejador de eventos para cerrar el menú al hacer clic en cualquier otro lugar de la página
            document.addEventListener('click', function () {
                const dropdown = document.querySelector('.relative ul');
                if (dropdown && !dropdown.classList.contains('hidden')) {
                    dropdown.classList.add('hidden');
                }
            });
        </script>
        {{-- Aqui se cambia el logo --}}
        

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-green-200 dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            

            <div class="max-w-7xl mx-auto p-6 lg:p-8">

                <div class="mt-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

                        {{-- Mision del Centro Gerontológico --}}
                        <div href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-2 text-xl font-semibold text-gray-900 dark:text-white text-center">Misión</h2>
                                <p class="mt-4 text-gray-900 dark:text-gray-400 text-sm leading-relaxed text-justify">
                                    Nuestra misión es proveer servicios de salud de calidad que mejoran el bienestar de nuestros pacientes.
                                </p>
                            </div>
                        </div>

                        {{-- Vision del Centro Gerontológico --}}
                        <div href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-2 text-xl font-semibold text-gray-900 dark:text-white text-center">Visión</h2>
                                <p class="mt-4 text-gray-900 dark:text-gray-400 text-sm leading-relaxed text-justify">
                                    Nuestra visión es ser el centro de salud líder en la región, reconocido por su excelencia.
                                </p>
                            </div>
                        </div>
                        </div>
                    </div>

                {{-- Ubicación del Centro Gerontológico --}}
                <div class="mt-4"> 
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-3 lg:gap-8">
                        <div href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none ">
                            <div>
                                <h2 class="text-center text-xl font-semibold text-gray-900 dark:text-white">Ubicación</h2>
                                <p class="mt-4 text-gray-900 dark:text-gray-400 text-sm leading-relaxed">
                                    Estamos ubicados en Carretera México-Laredo s/n esq, con av. Insurgentes, 
                                    instalaciones del antiguo patrimonio, Ixmiquilpan, Hgo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="mt-4 text-center text-3xl font-bold text-gray-900 dark:text-white">Servicios</h2>

                <div class="mt-4 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                    <!--Card 1-->
                    <div class="rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{ asset('storage/img/atencion_medica.png') }}" alt="Atención Médica"/>
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Atención médica</div>
                            <p class="text-gray-700 text-base text-justify">
                                Contamos con un equipo de médicos y enfermeros altamente capacitados para brindar atención integral a los adultos mayores. 
                                Se realizan chequeos periódicos de salud, seguimiento de enfermedades crónicas, suministro de medicamentos y cualquier otro tratamiento 
                                que requiera el residente. Nuestro objetivo es mantener el bienestar físico de cada persona.
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Responsable: Ibeth Hernández</span>
                        </div>
                        </div>
                        <!--Card 2-->
                        <div class="rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{ asset('storage/img/fisioterapia.jpeg') }}" alt="Fisioterapia"/>
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Fisioterapia</div>
                            <p class="text-gray-700 text-base text-justify">
                                Ofrecemos servicios de fisioterapia y rehabilitación para mantener y mejorar la movilidad y calidad de vida de los residentes. 
                                Contamos con fisioterapeutas especializados en geriatría que realizan ejercicios y terapias personalizadas, 
                                acordes a las necesidades de cada adulto mayor. Buscamos que cada persona conserve su mayor grado de independencia posible.
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Responsable: Ismael Valencia</span>
                        </div>
                    </div>
                
                    <!--Card 3-->
                    <div class="rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{ asset('storage/img/psicologia.jpg') }}" alt="Psicología"/>
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Psicología</div>
                            <p class="text-gray-700 text-base text-justify">
                                Entendemos la importancia del bienestar mental y emocional en la tercera edad. 
                                Nuestro equipo de psicólogos brinda apoyo psicológico individual o grupal, 
                                para ayudar a los residentes a tener una vejez tranquila y feliz. Ofrecemos terapias y actividades para estimular 
                                las facultades cognitivas, prevenir la depresión y mejorar la autoestima.                            
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Responsable: Dulce María</span>
                        </div>
                    </div>
                </div>

                <h2 class="mt-4 text-center text-3xl font-bold text-gray-900 dark:text-white">Talleres</h2>

                <div class="mt-4 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                    <!--Card 1-->
                    <div class="rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{ asset('storage/img/cocina.jpg') }}" alt="Cocina"/>
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Cocina</div>
                            <p class="text-gray-700 text-base text-justify">
                                Este taller está pensado para que los residentes puedan explorar su creatividad culinaria y compartir recetas tradicionales. 
                                Bajo la guía de un experto, aprenderán técnicas básicas de cocina y repostería para preparar deliciosas recetas. 
                                La actividad promueve la motricidad, la paciencia y la socialización en un ambiente divertido.
                            </p>
                            
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Jueves</span>
                        </div>
                        </div>
                        <!--Card 2-->
                        <div class="rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{ asset('storage/img/papel-nono2.png') }}" alt="Papel nono"/>
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Papel nono</div>
                            <p class="text-gray-700 text-base text-justify">
                                Es un taller destinado a que los adultos mayores participen en la creación de figuras de papel. 
                                Durante estas clases, se les brinda la oportunidad de expresar su creatividad y habilidades artísticas a 
                                través de la elaboración de diversas figuras y formas de papel. Este taller fomenta la destreza manual, 
                                la concentración y la satisfacción personal al completar proyectos de papel, proporcionando a los adultos 
                                mayores una actividad enriquecedora y entretenida.                            
                            </p>
                            
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Lunes</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Miércoles</span>
                        </div>
                    </div>
                
                    <!--Card 3-->
                    <div class="rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="{{ asset('storage/img/danza.webp') }}" alt="Danza"/>
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Danza</div>
                            <p class="text-gray-700 text-base text-justify">
                                En este innovador taller los residentes aprenderán a crear originales figuras y elementos decorativos utilizando papel maché.
                                Guiados por un instructor, conocerán las técnicas para moldear y dar forma al papel, pintarlo y crear piezas artísticas de forma manual. 
                                La actividad promueve la motricidad fina, la paciencia, la imaginación y la satisfacción de concretar una obra.
                            </p>
                            
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Martes</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Viernes</span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
