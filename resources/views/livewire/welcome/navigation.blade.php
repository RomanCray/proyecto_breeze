<nav class="-mx-3 flex flex-1 justify-end navbar-nav">
    <div class="d-flex">
        <style>
            .principal_color {
                color: rgb(75, 203, 61, 0.96);
                border-color: rgb(75, 203, 61, 0.96)
            }

            .principal_color:hover {
                color: white;
                border-color: white;
                background-color: rgb(75, 203, 61, 0.96)
            }
        </style>
        @auth
            <a href="{{ url('/dashboard') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white nav-link">
                Dashboard
            </a>
        @else
            <div>
                <a href="{{ route('login') }}"
                    class="btn btn-outline-success rounded-5 btn-sm d-flex align-items-center me-2 principal_color">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-user me-2">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                    </svg>
                    Inicia sesión
                </a>
            </div>

            @if (Route::has('register'))
                <div>
                    <a href="{{ route('register') }}" class="btn  rounded-5 btn-sm d-flex align-items-center"
                        style="background: rgb(255,223,77,0.96); border: 1.5px solid black">
                        Registrate
                    </a>
                </div>
            @endif
        @endauth
    </div>
    {{-- $txtGren = 'rgb(75,203,61,0.96';
        $txtYellow = 'rgb(255,223,77,0.96)'; --}}
</nav>
