<div class="container">
    <style>
        @media (max-width: 768px) {

            /* En pantallas pequeñas, elimina el height */
            .card-body {
                height: auto !important;
            }

            .hauto {
                height: auto !important;
            }
        }
    </style>
    <div class="container">
        <div class="card border-0 bg-transparent">
            <div class="card-header text-center d-flex flex-column justify-content-center align-items-center"
                style="height: 80vh">
                {{-- <div> --}}
                <h1 class="display-1">Bienvenido a WhatsApiBot</h1>
                <p class="fs-4">¡Revoluciona tu Comunicación Empresarial con WhatsApp!</p>
                <p class="fs-5">Automatiza, Conecta y Mejora la Experiencia de tus Clientes con Nuestra API y
                    Herramientas de Bots Inteligentes.</p>
                {{-- </div> --}}
            </div>
            <div class="card-body d-flex flex-column justify-content-center align-items-center" style="height: 80vh">
                <div class="row g-4 align-items-start justify-content-center align-items-center">
                    <div class="col-md-6">
                        <h2 class="display-4" style="color: {{ $txtGren }}">Cómo Funciona</h2>
                        <p class="fs-5">
                            Al registrarte, tendrás acceso inmediato a nuestra documentación técnica y herramientas para
                            integrar WhatsApp en tu sistema.
                        </p>
                        <div class="text-center" style="font-size: 300px; color: {{ $txtGren }}">
                            <!-- Icono App -->
                            <i class="bi bi-whatsapp"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($dataEnterprice as $indexDE => $data)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <div class="card">
                                            <div class="card-header fs-4 d-flex justify-content-between flex-wrap">
                                                <div class="d-flex align-items-center">
                                                    @livewire(
                                                        'IconLucide.Iconlucide',
                                                        [
                                                            'width' => $data['icono']['width'],
                                                            'height' => $data['icono']['height'],
                                                            'color' => $data['icono']['color'],
                                                            'svg64' => $data['icono']['svg64'],
                                                        ],
                                                        key($indexDE . '-DE')
                                                    ) <div class="ms-1"> {{ $data['titulo'] }} </div>
                                                </div>
                                                <div>
                                                    <a class="btn rounded-5 btn-sm"
                                                        style="background: {{ $txtYellow }}; border: 1.5px solid black"
                                                        href="{{ $data['enlace'] }}">Conocer más
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p>{!! $data['descripcion'] !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <hr>
        <br>

        <div style="height: 80vh" class="d-flex flex-column justify-content-center align-items-center hauto">
            <div>
                <h1 style="background: {{ $txtYellow }}; color: black; border-radius: 8px 0 8px 0"
                    class="border border-3 border-black p-4 d-inline-block">
                    Bot Whatsapp
                </h1>
                <h2>
                    Crear tu primer Bot Simple
                </h2>
                <p>
                    ¡Construye un bot para responder automáticamente sin necesidad de programar!
                    Con nuestra herramienta fácil de usar, podrás crear un bot que responda automáticamente a las
                    preguntas más comunes de tus clientes.No necesitas saber programar para hacerlo.
                </p>

                <h2>
                    Beneficios
                </h2>
                <p>
                    Menú interactivo: Crea opciones personalizadas para que tus usuarios elijan las respuestas que
                    necesitan.
                    Respuestas prediseñadas: Define las respuestas automáticas a preguntas frecuentes.
                    Automatización de tareas repetitivas: Responde preguntas sin esfuerzo, ahorrando tiempo y recursos.
                </p>

                <h2>
                    ¿Cómo funciona ?
                </h2>
                <p>
                    Regístrate y accede a la herramienta de creación de bots.
                    Establece las preguntas y respuestas predefinidas.
                    Personaliza el flujo de conversación y prueba el bot.

                    <b>
                        ¡Crea tu bot en minutos y empieza a automatizar!
                        Hazlo ahora mismo y lleva la atención al cliente a otro nivel.
                    </b>
                </p>
            </div>
        </div>

        <hr>

        <div class="d-flex flex-column justify-content-center align-items-center hauto">
            <div>
                <h1 style="color: {{ $txtYellow }}">
                    Api Whatsapp
                </h1>
                <h2>API WhatsApp para Empresas</h2>
                <p>
                    Conecta tu WhatsApp y automatiza la comunicación empresarial con facilidad
                    Diseñada especialmente para empresas, nuestra API te permite integrar WhatsApp de manera sencilla y
                    eficiente en tus sistemas, aplicaciones o plataformas.
                </p>

                <h2>
                    ¿Por qué elegir nuestra API ?
                </h2>
                <p>
                    Integración rápida y sencilla: Accede a la documentación detallada para conectar tu sistema con
                    WhatsApp en minutos.
                    Automatización completa: Envío de mensajes automatizados, recepción de mensajes y respuestas en
                    tiempo real, todo gestionado a través de nuestra API.
                    Escalable para empresas: A medida que tu negocio crece, nuestra API puede escalar para manejar más
                    mensajes, contactos y automatizar más interacciones.
                </p>

                <h2>
                    ¿Qué podrás hacer con la API ?
                </h2>
                <p>
                    Enviar mensajes de texto: Utiliza nuestras rutas para enviar mensajes de texto a tus clientes,
                    contactos o grupos de WhatsApp.
                    Recibir mensajes: Configura un webhook para recibir mensajes entrantes de manera automática y
                    gestionarlos en tu plataforma.
                    Automatización de comunicaciones: Personaliza la automatización de tus respuestas y gestión de
                    clientes directamente desde tu sistema.
                </p>

                <h2>
                    ¿Cómo empezar ?
                </h2>
                <p>
                    Regístrate y obtén tu clave API: Una vez registrado, recibirás tu API Key para autenticarte y
                    comenzar a interactuar con nuestra plataforma. Consulta las rutas y parámetros: Accede a nuestra
                    documentación detallada con las rutas disponibles para enviar mensajes, gestionar contactos y más.
                </p>
                <p>
                    ¡Accede a nuestra documentación ahora y empieza a integrar WhatsApp en tu sistema!
                    Regístrate para obtener acceso inmediato y probar nuestra API por 5 dias gratis y podras encontrar
                    las rutas, parámetros y ejemplos de integración que te ayudaran en todo el proceso de integración.
                </p>
            </div>
        </div>

        <br>
        <hr>
        <br>

        <div style="height: 80vh" class="d-flex flex-column justify-content-center align-items-center hauto">
            <div>
                <h1 style="color: {{ $txtYellow }}">IA Whatsapp</h1>
                <h2>
                    Crea un Bot Inteligente con IA(Próximamente)
                </h2>
                <p>
                    ¡Prepárate para el futuro!
                    En breve, podrás crear bots que no solo responden con respuestas predefinidas, sino que aprenderán y
                    mejorarán sus respuestas gracias a la inteligencia artificial.Este bot utilizará datos que cargues
                    para
                    ofrecer respuestas más inteligentes, personalizadas y precisas.
                </p>

                <h2>
                    Beneficios
                </h2>
                <p>
                    Respuestas más naturales: Los bots con IA se adaptan a las conversaciones y mejoran con el tiempo.
                    Aprendizaje continuo: Cuanto más interactúen los usuarios, más precisas y relevantes serán las
                    respuestas.
                    Automatización avanzada: Perfecto para servicios complejos o atención al cliente personalizada.

                    Fácil integración con WhatsApp: Conecta y comienza a enviar mensajes rápidamente.
                    Automatización sin código: No se necesita saber programar para crear un bot efectivo.
                    Escalabilidad: Tenemos opciones para todos los tamaños de negocio.
                    <b>
                        Ahorro de tiempo y recursos: Automatiza tareas repetitivas, mejora la eficiencia y ofrece
                        soporte 24
                        / 7.
                    </b>
                </p>

                <h2>
                    ¿Cómo funciona ?
                </h2>
                <p>
                    Carga tus datos y configura el bot.
                    Deja que el bot use IA para ofrecer respuestas personalizadas.
                </p>
            </div>
        </div>

        <br>
        <hr>

        <div class="row g-4 mt-5">
            <div class="col-md-6">
                <div class="card border-0 bg-transparent">
                    <div class="card-header">
                        <h3 style="color: {{ $txtGren }}">Beneficios</h3>
                    </div>
                    <div class="card-body">
                        @foreach ($beneficios as $indexB => $beneficio)
                            <div>
                                <h5 class="d-flex align-items-center">
                                    @livewire(
                                        'IconLucide.Iconlucide',
                                        [
                                            'width' => $beneficio['icono']['width'],
                                            'height' => $beneficio['icono']['height'],
                                            'color' => $beneficio['icono']['color'],
                                            'svg64' => $beneficio['icono']['svg64'],
                                        ],
                                        key($indexB . '-B')
                                    )
                                    {{ $beneficio['titulo'] }}
                                </h5>
                                <p>
                                    {{ $beneficio['texto'] }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 bg-transparent">
                    <div class="card-header">
                        <h3 style="color: {{ $txtGren }}">¿Por qué elegirnos?</h3>
                    </div>
                    <div class="card-body">
                        @foreach ($porQueElegirnos as $indexPQE => $notification)
                            <div class="d-flex align-items-start mb-3">
                                {{-- @dd(!! $notification['icono'] !!) --}}
                                <span class="me-2" style="color: {{ $txtGren }}">
                                    @livewire(
                                        'IconLucide.Iconlucide',
                                        [
                                            'width' => $notification['icono']['width'],
                                            'height' => $notification['icono']['height'],
                                            'color' => $notification['icono']['color'],
                                            'svg64' => $notification['icono']['svg64'],
                                        ],
                                        key($indexPQE . '-PQE')
                                    )
                                </span>
                                <div>
                                    <h5>{{ $notification['titulo'] }}</h5>
                                    <p>{{ $notification['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <h3>¡Regístrate Ahora y Empieza a Conectar WhatsApp con tu Negocio!</h3>
            <p>Accede a tutoriales paso a paso y comienza a automatizar la comunicación hoy mismo. Conecta WhatsApp a tu
                sistema, crea un bot simple y aprovecha nuestras herramientas avanzadas.</p>
            <p><strong>¡Regístrate Ahora y Transforma la Forma en que Te Conectas con tus Clientes!</strong></p>
        </div>
    </div>
</div>
