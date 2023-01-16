<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <link rel="stylesheet" href="splide-4.1.3/dist/css/splide.min.css" />
        <link rel="stylesheet" href="splide-4.1.3/dist/css/splide-core.min.css" />
        <link rel="stylesheet" href="splide-4.1.3/dist/css/themes/splide-default.min.css" />
        <link rel="stylesheet" href="splide-4.1.3/dist/css/themes/splide-sea-green.min.css" />
        <link rel="stylesheet" href="splide-4.1.3/dist/css/themes/splide-skyblue.min.css" />
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->

        <style>
    
          
            .imgPreview img  {
                max-width: 150px;
                max-height: 125px;
            } 
            .imgPreviewShow img {
                max-width: 150px;
                max-height: 125px;
            }
            .imgPath {
                padding: 8px;
                max-width: 200px;
            }
            .boxWork{
                max-width: 200px;
                max-height: 150px;

            }
            .appX div {
            width: 140px;
            padding: 0;
            overflow: hidden;
            position: relative;
            display: inline-block;
      
            text-decoration: none;
            text-overflow: ellipsis;
            white-space: nowrap;
            }
            

                        .thumbnails {
            display: flex;
            margin: 1rem auto 0;
            padding: 0;
            justify-content: center;
            }


            .thumbnail {
            width: 70px;
            height: 70px;
            overflow: hidden;
            list-style: none;
            margin: 0 0.2rem;
            cursor: pointer;
            }


            .thumbnail img {
            width: 100%;
            height: auto;
            }
            .thumbnail {
            ...
            opacity: 0.3;
            }


            .thumbnail.is-active {
            opacity: 1;
            }.splide {
                    margin: 0 auto;
                }

                .thumbnails {
                    display: flex;
                    margin: 1rem auto 0;
                    padding: 0;
                    justify-content: center;
                }

                .thumbnail {
                    width: 70px;
                    height: 70px;
                    overflow: hidden;
                    list-style: none;
                    margin: 0 0.2rem;
                    cursor: pointer;
                    opacity: 0.3;
                }

                .thumbnail.is-active {
                    opacity: 1;
                }

                .thumbnail img {
                    width: 100%;
                    height: auto;
                }
           
        </style>
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    
        <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://unpkg.com/flowbite@1.5.4/dist/datepicker.js"></script>
        <script src="splide-4.1.3/dist/js/splide.min.js"></script>

        
        @stack('modals')
        @include('sweetalert::alert')
        @livewireScripts
        @yield('scripts')
    </body>
</html>
