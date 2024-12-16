<?php

namespace App\Livewire\DashboardComponents\Contenido;

use App\Livewire\IconLucide\IconLucide;
use Livewire\Component;
use Livewire\Livewire;

class Contenido extends Component
{
    public function render()
    {
        $txtGren = 'rgb(75,203,61,0.96';
        $txtYellow = 'rgb(255,223,77,0.96)';

        $porQueElegirnos = [
            [
                'icono' => [
                    'width' => '24px',
                    'height' => '24px',
                    'color' => $txtGren,
                    'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLXRodW1icy11cCI+PHBhdGggZD0iTTcgMTB2MTIiLz48cGF0aCBkPSJNMTUgNS44OCAxNCAxMGg1LjgzYTIgMiAwIDAgMSAxLjkyIDIuNTZsLTIuMzMgOEEyIDIgMCAwIDEgMTcuNSAyMkg0YTIgMiAwIDAgMS0yLTJ2LThhMiAyIDAgMCAxIDItMmgyLjc2YTIgMiAwIDAgMCAxLjc5LTEuMTFMMTIgMmEzLjEzIDMuMTMgMCAwIDEgMyAzLjg4WiIvPjwvc3ZnPg==',
                ],
                'titulo' => 'Fácil de Integrar:',
                'description' => 'Documentación detallada y soporte técnico para que tu integración con WhatsApp sea rápida y sin errores.',
            ],
            [
                'icono' => [
                    'width' => '24px',
                    'height' => '24px',
                    'color' => $txtGren,
                    'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWNvbWJpbmUiPjxwYXRoIGQ9Ik0xMCAxOEg1YTMgMyAwIDAgMS0zLTN2LTEiLz48cGF0aCBkPSJNMTQgMmEyIDIgMCAwIDEgMiAydjRhMiAyIDAgMCAxLTIgMiIvPjxwYXRoIGQ9Ik0yMCAyYTIgMiAwIDAgMSAyIDJ2NGEyIDIgMCAwIDEtMiAyIi8+PHBhdGggZD0ibTcgMjEgMy0zLTMtMyIvPjxyZWN0IHg9IjE0IiB5PSIxNCIgd2lkdGg9IjgiIGhlaWdodD0iOCIgcng9IjIiLz48cmVjdCB4PSIyIiB5PSIyIiB3aWR0aD0iOCIgaGVpZ2h0PSI4IiByeD0iMiIvPjwvc3ZnPg==',
                ],
                'titulo' => 'Escalabilidad:',
                'description' => 'Nuestra API está diseñada para crecer contigo, desde pequeñas interacciones hasta grandes campañas de mensajería'
            ],
            [
                // icono: <BookHeart class=[`mr-2 $[txtGren]`] />,
                'icono' => [
                    'width' => '24px',
                    'height' => '24px',
                    'color' => $txtGren,
                    'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWJvb2staGVhcnQiPjxwYXRoIGQ9Ik0xNiA4LjJBMi4yMiAyLjIyIDAgMCAwIDEzLjggNmMtLjggMC0xLjQuMy0xLjguOS0uNC0uNi0xLS45LTEuOC0uOUEyLjIyIDIuMjIgMCAwIDAgOCA4LjJjMCAuNi4zIDEuMi43IDEuNkEyMjYuNjUyIDIyNi42NTIgMCAwIDAgMTIgMTNhNDA0IDQwNCAwIDAgMCAzLjMtMy4xIDIuNDEzIDIuNDEzIDAgMCAwIC43LTEuNyIvPjxwYXRoIGQ9Ik00IDE5LjV2LTE1QTIuNSAyLjUgMCAwIDEgNi41IDJIMTlhMSAxIDAgMCAxIDEgMXYxOGExIDEgMCAwIDEtMSAxSDYuNWExIDEgMCAwIDEgMC01SDIwIi8+PC9zdmc+',
                ],
                'titulo' => 'Sin Complicaciones:',
                'description' => 'No necesitas ser un experto en tecnología para comenzar.Nuestra plataforma es amigable, intuitiva y fácil de usar.'
            ],
            [
                // icono: <MonitorCog class=[`mr-2 $[txtGren]`] />,
                'icono' => [
                    'width' => '24px',
                    'height' => '24px',
                    'color' => $txtGren,
                    'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLW1vbml0b3ItY29nIj48cGF0aCBkPSJNMTIgMTd2NCIvPjxwYXRoIGQ9Im0xNS4yIDQuOS0uOS0uNCIvPjxwYXRoIGQ9Im0xNS4yIDcuMS0uOS40Ii8+PHBhdGggZD0ibTE2LjkgMy4yLS40LS45Ii8+PHBhdGggZD0ibTE2LjkgOC44LS40LjkiLz48cGF0aCBkPSJtMTkuNSAyLjMtLjQuOSIvPjxwYXRoIGQ9Im0xOS41IDkuNy0uNC0uOSIvPjxwYXRoIGQ9Im0yMS43IDQuNS0uOS40Ii8+PHBhdGggZD0ibTIxLjcgNy41LS45LS40Ii8+PHBhdGggZD0iTTIyIDEzdjJhMiAyIDAgMCAxLTIgMkg0YTIgMiAwIDAgMS0yLTJWNWEyIDIgMCAwIDEgMi0yaDciLz48cGF0aCBkPSJNOCAyMWg4Ii8+PGNpcmNsZSBjeD0iMTgiIGN5PSI2IiByPSIzIi8+PC9zdmc+',
                ],
                'titulo' => 'Automatización Total:',
                'description' => 'Automatiza mensajes, respuestas y flujos de conversación con facilidad. Compatible con múltiples sistemas y plataformas.'
            ],
            [
                // icono: <GitPullRequestArrow class=[`mr-2 $[txtGren]`] />,
                'icono' => [
                    'width' => '24px',
                    'height' => '24px',
                    'color' => $txtGren,
                    'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWdpdC1wdWxsLXJlcXVlc3QtYXJyb3ciPjxjaXJjbGUgY3g9IjUiIGN5PSI2IiByPSIzIi8+PHBhdGggZD0iTTUgOXYxMiIvPjxjaXJjbGUgY3g9IjE5IiBjeT0iMTgiIHI9IjMiLz48cGF0aCBkPSJtMTUgOS0zLTMgMy0zIi8+PHBhdGggZD0iTTEyIDZoNWEyIDIgMCAwIDEgMiAydjciLz48L3N2Zz4=',
                ],
                'titulo' => 'Flexibilidad:',
                'description' => 'Reduce la carga de trabajo de tus equipos de soporte y ventas, mejorando la eficiencia y reduciendo costos operativos.'
            ],
            [
                // icono: <CalendarClock class=[`mr-2 $[txtGren]`] />,
                'icono' => [
                    'width' => '24px',
                    'height' => '24px',
                    'color' => $txtGren,
                    'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWNhbGVuZGFyLWNsb2NrIj48cGF0aCBkPSJNMjEgNy41VjZhMiAyIDAgMCAwLTItMkg1YTIgMiAwIDAgMC0yIDJ2MTRhMiAyIDAgMCAwIDIgMmgzLjUiLz48cGF0aCBkPSJNMTYgMnY0Ii8+PHBhdGggZD0iTTggMnY0Ii8+PHBhdGggZD0iTTMgMTBoNSIvPjxwYXRoIGQ9Ik0xNy41IDE3LjUgMTYgMTYuM1YxNCIvPjxjaXJjbGUgY3g9IjE2IiBjeT0iMTYiIHI9IjYiLz48L3N2Zz4=',
                ],
                'titulo' => 'Futuro(Próximamente - Bot IA):',
                'description' => '¡Lo mejor está por venir! Estamos trabajando en una nueva función de inteligencia artificial que te permitirá crear bots aún más inteligentes, que aprenderán de cada interacción con los usuarios para ofrecer respuestas más precisas y personalizadas.Regístrate ahora para obtener acceso anticipado a esta funcionalidad cuando esté disponible'
            ],
        ];

        $beneficios = [
            [
                'icono' => [
                    'width' => '24px',
                    'height' => '24px',
                    'color' => $txtGren,
                    'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLXdvcmtmbG93Ij48cmVjdCB3aWR0aD0iOCIgaGVpZ2h0PSI4IiB4PSIzIiB5PSIzIiByeD0iMiIvPjxwYXRoIGQ9Ik03IDExdjRhMiAyIDAgMCAwIDIgMmg0Ii8+PHJlY3Qgd2lkdGg9IjgiIGhlaWdodD0iOCIgeD0iMTMiIHk9IjEzIiByeD0iMiIvPjwvc3ZnPg=='
                ],
                'titulo' => 'Conexión Rápida con WhatsApp',
                'texto' => 'Conecta tu cuenta de WhatsApp con nuestra API en minutos, y comienza a automatizar la comunicación con tus clientes sin complicaciones.'
            ],
            [
                'icono' => [
                    'width' => '24px',
                    'height' => '24px',
                    'color' => $txtGren,
                    'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWJvdCI+PHBhdGggZD0iTTEyIDhWNEg4Ii8+PHJlY3Qgd2lkdGg9IjE2IiBoZWlnaHQ9IjEyIiB4PSI0IiB5PSI4IiByeD0iMiIvPjxwYXRoIGQ9Ik0yIDE0aDIiLz48cGF0aCBkPSJNMjAgMTRoMiIvPjxwYXRoIGQ9Ik0xNSAxM3YyIi8+PHBhdGggZD0iTTkgMTN2MiIvPjwvc3ZnPg=='
                ],
                'titulo' => 'Bot para Atención al Cliente',
                'texto' => 'Crea un bot simple que responda automáticamente a preguntas frecuentes o configura un menú interactivo. ¡Ahorra tiempo y esfuerzo en atención al cliente!'
            ],
            [
                'icono' => [
                    'width' => '24px',
                    'height' => '24px',
                    'color' => $txtGren,
                    'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLXdvcmtmbG93Ij48cmVjdCB3aWR0aD0iOCIgaGVpZ2h0PSI4IiB4PSIzIiB5PSIzIiByeD0iMiIvPjxwYXRoIGQ9Ik03IDExdjRhMiAyIDAgMCAwIDIgMmg0Ii8+PHJlY3Qgd2lkdGg9IjgiIGhlaWdodD0iOCIgeD0iMTMiIHk9IjEzIiByeD0iMiIvPjwvc3ZnPg=='
                ],
                'titulo' => 'Potencial de Inteligencia Artificial',
                'texto' => 'Próximamente, podrás crear bots inteligentes que no solo responden preguntas predefinidas, sino que aprenden y mejoran con el tiempo, ofreciendo interacciones más naturales y personalizadas.'
            ]
        ];

        $dataEnterprice = [
            [
                'icono' => [
                    'width' => '24px',
                    'height' => '24px',
                    'color' => $txtGren,
                    'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLXdvcmtmbG93Ij48cmVjdCB3aWR0aD0iOCIgaGVpZ2h0PSI4IiB4PSIzIiB5PSIzIiByeD0iMiIvPjxwYXRoIGQ9Ik03IDExdjRhMiAyIDAgMCAwIDIgMmg0Ii8+PHJlY3Qgd2lkdGg9IjgiIGhlaWdodD0iOCIgeD0iMTMiIHk9IjEzIiByeD0iMiIvPjwvc3ZnPg==',
                ],
                'titulo' => 'Api Whatsapp Empresas',
                'descripcion' => '
                    <div class="d-flex flex-column justify-content-evenly align-items-center p-4">
                        <p class = "text-justify" style="text-align-last: center;">
                            1. Escanea nuestro QR para poder conectarnos conectarnos
                        </p> ' . Livewire::mount('IconLucide.Iconlucide', [
                                'width' => '24px',
                                'height' => '24px',
                                'color' => $txtGren,
                                'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLXFyLWNvZGUiPjxyZWN0IHdpZHRoPSI1IiBoZWlnaHQ9IjUiIHg9IjMiIHk9IjMiIHJ4PSIxIi8+PHJlY3Qgd2lkdGg9IjUiIGhlaWdodD0iNSIgeD0iMTYiIHk9IjMiIHJ4PSIxIi8+PHJlY3Qgd2lkdGg9IjUiIGhlaWdodD0iNSIgeD0iMyIgeT0iMTYiIHJ4PSIxIi8+PHBhdGggZD0iTTIxIDE2aC0zYTIgMiAwIDAgMC0yIDJ2MyIvPjxwYXRoIGQ9Ik0yMSAyMXYuMDEiLz48cGF0aCBkPSJNMTIgN3YzYTIgMiAwIDAgMS0yIDJINyIvPjxwYXRoIGQ9Ik0zIDEyaC4wMSIvPjxwYXRoIGQ9Ik0xMiAzaC4wMSIvPjxwYXRoIGQ9Ik0xMiAxNnYuMDEiLz48cGF0aCBkPSJNMTYgMTJoMSIvPjxwYXRoIGQ9Ik0yMSAxMnYuMDEiLz48cGF0aCBkPSJNMTIgMjF2LTEiLz48L3N2Zz4='
                            ]) . '
                        <p class = "text-justify" style="text-align-last: center;">
                            2. Revisa tu perfil donde tendrás un token unico para poder realizar tus peticiones
                        </p>
                        ' . Livewire::mount('IconLucide.Iconlucide', [
                                'width' => '24px',
                                'height' => '24px',
                                'color' => $txtGren,
                                'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLXFyLWNvZGUiPjxyZWN0IHdpZHRoPSI1IiBoZWlnaHQ9IjUiIHg9IjMiIHk9IjMiIHJ4PSIxIi8+PHJlY3Qgd2lkdGg9IjUiIGhlaWdodD0iNSIgeD0iMTYiIHk9IjMiIHJ4PSIxIi8+PHJlY3Qgd2lkdGg9IjUiIGhlaWdodD0iNSIgeD0iMyIgeT0iMTYiIHJ4PSIxIi8+PHBhdGggZD0iTTIxIDE2aC0zYTIgMiAwIDAgMC0yIDJ2MyIvPjxwYXRoIGQ9Ik0yMSAyMXYuMDEiLz48cGF0aCBkPSJNMTIgN3YzYTIgMiAwIDAgMS0yIDJINyIvPjxwYXRoIGQ9Ik0zIDEyaC4wMSIvPjxwYXRoIGQ9Ik0xMiAzaC4wMSIvPjxwYXRoIGQ9Ik0xMiAxNnYuMDEiLz48cGF0aCBkPSJNMTYgMTJoMSIvPjxwYXRoIGQ9Ik0yMSAxMnYuMDEiLz48cGF0aCBkPSJNMTIgMjF2LTEiLz48L3N2Zz4='
                            ]) . '
                        <p class = "text-justify" style="text-align-last: center;">
                            3. Revisa nuestra documentación y encontraras todos los pasos a seguir.
                        </p>
                        ' . Livewire::mount('IconLucide.Iconlucide', [
                                'width' => '24px',
                                'height' => '24px',
                                'color' => $txtGren,
                                'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWJvdC1tZXNzYWdlLXNxdWFyZSI+PHBhdGggZD0iTTEyIDZWMkg4Ii8+PHBhdGggZD0ibTggMTgtNCA0VjhhMiAyIDAgMCAxIDItMmgxMmEyIDIgMCAwIDEgMiAydjhhMiAyIDAgMCAxLTIgMloiLz48cGF0aCBkPSJNMiAxMmgyIi8+PHBhdGggZD0iTTkgMTF2MiIvPjxwYXRoIGQ9Ik0xNSAxMXYyIi8+PHBhdGggZD0iTTIwIDEyaDIiLz48L3N2Zz4='
                            ]) . '
                    </div>',
                'enlace' => ''
            ],
            [
                'icono' => [
                    'width' => '24px',
                    'height' => '24px',
                    'color' => $txtGren,
                    'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWJvdCI+PHBhdGggZD0iTTEyIDhWNEg4Ii8+PHJlY3Qgd2lkdGg9IjE2IiBoZWlnaHQ9IjEyIiB4PSI0IiB5PSI4IiByeD0iMiIvPjxwYXRoIGQ9Ik0yIDE0aDIiLz48cGF0aCBkPSJNMjAgMTRoMiIvPjxwYXRoIGQ9Ik0xNSAxM3YyIi8+PHBhdGggZD0iTTkgMTN2MiIvPjwvc3ZnPg==',
                ],
                'titulo' => 'Bot Estatico ',
                'descripcion' => '
                    <div class="d-flex flex-column justify-content-evenly align-items-center p-4">
                        <p class = "text-justify" style="text-align-last: center;">
                            1. Configura un menú interactivo.
                        </p>
                        ' . Livewire::mount('IconLucide.Iconlucide', [
                                'width' => '24px',
                                'height' => '24px',
                                'color' => $txtGren,
                                'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWxvZ3MiPjxwYXRoIGQ9Ik0xMyAxMmg4Ii8+PHBhdGggZD0iTTEzIDE4aDgiLz48cGF0aCBkPSJNMTMgNmg4Ii8+PHBhdGggZD0iTTMgMTJoMSIvPjxwYXRoIGQ9Ik0zIDE4aDEiLz48cGF0aCBkPSJNMyA2aDEiLz48cGF0aCBkPSJNOCAxMmgxIi8+PHBhdGggZD0iTTggMThoMSIvPjxwYXRoIGQ9Ik04IDZoMSIvPjwvc3ZnPg=='
                            ]) . '
                        <p class = "text-justify" style="text-align-last: center;">
                            2. Crea un bot simple que responda automáticamente a preguntas frecuentes.
                        </p>
                        ' . Livewire::mount('IconLucide.Iconlucide', [
                                'width' => '24px',
                                'height' => '24px',
                                'color' => $txtGren,
                                'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLW1lc3NhZ2Utc3F1YXJlLWNvZGUiPjxwYXRoIGQ9Ik0xMCA3LjUgOCAxMGwyIDIuNSIvPjxwYXRoIGQ9Im0xNCA3LjUgMiAyLjUtMiAyLjUiLz48cGF0aCBkPSJNMjEgMTVhMiAyIDAgMCAxLTIgMkg3bC00IDRWNWEyIDIgMCAwIDEgMi0yaDE0YTIgMiAwIDAgMSAyIDJ6Ii8+PC9zdmc+'
                            ]) . '
                        <p class = "text-justify" style="text-align-last: center;">
                            3. Revisa nuestra documentación y encontraras las rutas y todas las opciones para que puedas enviar y recibir mensajes
                        </p>
                        ' . Livewire::mount('IconLucide.Iconlucide', [
                                'width' => '24px',
                                'height' => '24px',
                                'color' => $txtGren,
                                'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWZpbGUtdGV4dCI+PHBhdGggZD0iTTE1IDJINmEyIDIgMCAwIDAtMiAydjE2YTIgMiAwIDAgMCAyIDJoMTJhMiAyIDAgMCAwIDItMlY3WiIvPjxwYXRoIGQ9Ik0xNCAydjRhMiAyIDAgMCAwIDIgMmg0Ii8+PHBhdGggZD0iTTEwIDlIOCIvPjxwYXRoIGQ9Ik0xNiAxM0g4Ii8+PHBhdGggZD0iTTE2IDE3SDgiLz48L3N2Zz4='
                            ]) . '
                    </div>',
                'enlace' => ''
            ],
            [
                'icono' => [
                    'width' => '24px',
                    'height' => '24px',
                    'color' => $txtGren,
                    'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWJvdC1tZXNzYWdlLXNxdWFyZSI+PHBhdGggZD0iTTEyIDZWMkg4Ii8+PHBhdGggZD0ibTggMTgtNCA0VjhhMiAyIDAgMCAxIDItMmgxMmEyIDIgMCAwIDEgMiAydjhhMiAyIDAgMCAxLTIgMloiLz48cGF0aCBkPSJNMiAxMmgyIi8+PHBhdGggZD0iTTkgMTF2MiIvPjxwYXRoIGQ9Ik0xNSAxMXYyIi8+PHBhdGggZD0iTTIwIDEyaDIiLz48L3N2Zz4=',
                ],
                'titulo' => 'Bot con IA',
                'descripcion' => '
                    <div class="d-flex flex-column justify-content-evenly align-items-center p-3">
                        <p class = "text-justify" style="text-align-last: center;">
                            Próximamente, podrás crear bots inteligentes que no solo responden preguntas predefinidas, sino que aprenden y mejoran con el tiempo.
                        </p>
                        <p class = "text-justify" style="text-align-last: center;"> ofreciendo interacciones más naturales y personalizadas.</p>
                        <br />' . Livewire::mount('IconLucide.Iconlucide', [
                                'width' => '24px',
                                'height' => '24px',
                                'color' => $txtGren,
                                'svg64' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLWZpbGUtdGV4dCI+PHBhdGggZD0iTTE1IDJINmEyIDIgMCAwIDAtMiAydjE2YTIgMiAwIDAgMCAyIDJoMTJhMiAyIDAgMCAwIDItMlY3WiIvPjxwYXRoIGQ9Ik0xNCAydjRhMiAyIDAgMCAwIDIgMmg0Ii8+PHBhdGggZD0iTTEwIDlIOCIvPjxwYXRoIGQ9Ik0xNiAxM0g4Ii8+PHBhdGggZD0iTTE2IDE3SDgiLz48L3N2Zz4='
                            ]) . '
                    </div>',
                'enlace' => ''
            ]
        ];


        return view('livewire.dashboard-components.contenido.contenido', compact('porQueElegirnos', 'dataEnterprice', 'beneficios', 'txtYellow', 'txtGren'));

    }
}
