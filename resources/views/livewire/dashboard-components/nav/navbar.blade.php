<div >
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="d-flex align-items-center ">
                    @livewire('PrincipalIcon', ['width' => '75px', 'height' => '75px', 'color' => 'rgb(75,203,61,0.96)'], key('Icon_nav_principal'))
                    <div class="ms-2 me-4">
                        WhatsApiBot
                    </div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <style>
                /* Estilos solo para pantallas de móviles y tabletas (max-width: 1024px) */
                @media (max-width: 900px) {

                    .navbar-collapse.collapse.show {
                        display: flex;
                        /* Establece el contenedor como un contenedor flex */
                        height: 82vh;
                        transition: 0.5s;
                        flex-direction: column;
                        /* Los elementos estarán en una columna */
                        justify-content: space-between;
                        /* Espaciado entre los elementos dentro del contenedor */
                        padding: 0;
                        /* Elimina el padding del contenedor */
                        margin: 0;
                        /* Elimina el margin del contenedor */
                    }

                    .navbar-collapse.collapse.show ul {
                        list-style: none;
                        /* Elimina los puntos de la lista */
                        padding: 0;
                        /* Elimina el padding de la lista */
                        margin: 0;
                        /* Elimina el margin de la lista */
                        width: 100%;
                        /* Asegura que la lista ocupe todo el ancho disponible */
                    }

                    .navbar-collapse.collapse.show ul li {
                        display: flex;
                        /* Cada <li> será un contenedor flex */
                        justify-content: center;
                        /* Centra el contenido dentro de cada <li> */
                        width: 100%;
                        /* Asegura que cada <li> ocupe todo el ancho disponible */
                        margin: 5px 0 5px 0;
                        /* Elimina el margin de cada <li> */
                        padding: 0;
                        /* Elimina el padding de cada <li> */
                    }

                    .navbar-collapse.collapse.show .nav_correction_style {
                        margin: 7px 0 25px 0;
                    }
                }
            </style>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="gominola_m">
                    <li class="nav-item" id="prb_0">
                        <a class="nav-link active" aria-current="page" href="#">Bot Whatsapp</a>
                    </li>
                    <li class="nav-item" id="prb_1">
                        <a class="nav-link active" aria-current="page" href="#">Api Whatsapp</a>
                    </li>
                    <li class="nav-item" id="prb_2">
                        <a class="nav-link active" aria-current="page" href="#">IA Whatsapp</a>
                    </li>
                </ul>

                <div class="nav_correction_style" role="search">
                    <livewire:welcome.navigation />
                </div>
            </div>
        </div>
    </nav>

    @vite(['resources/views/livewire/dashboard-components/nav/navbar.js'])
</div>
