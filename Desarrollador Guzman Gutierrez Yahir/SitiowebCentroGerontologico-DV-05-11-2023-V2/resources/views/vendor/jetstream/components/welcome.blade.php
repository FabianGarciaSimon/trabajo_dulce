<body class="antialiased bg-green-400">
    {{-- <body class="antialiased"> --}}

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