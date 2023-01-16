<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('splide-4.1.3/dist/css/themes/splide-skyblue.min.css') }}" rel="stylesheet">
        <link href="{{ asset('splide-4.1.3/dist/css/splide-core.min.css') }}" rel="stylesheet">
        <link href="{{ asset('splide-4.1.3/dist/css/splide.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet">
        <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>SIAM NGANCHANG</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <style>
            body {


            font-family: 'Work Sans', sans-serif;
            font-weight: 900;
            }

            .ptext {
            font-size: 2.5vw;
            text-transform: uppercase;
            text-align: center;
            line-height: 1;
            
            font-family: 'Work Sans', sans-serif;
            font-weight: 900;
            }
            

            /***************************************/
            .tracking-in-expand-fwd-bottom{-webkit-animation:tracking-in-expand-fwd-bottom 1.2s cubic-bezier(.68,-.55,.265,1.55) both;animation:tracking-in-expand-fwd-bottom 1.2s cubic-bezier(.68,-.55,.265,1.55) both}
            @-webkit-keyframes tracking-in-expand-fwd-bottom{0%{letter-spacing:-.5em;-webkit-transform:translateZ(-700px) translateY(500px);transform:translateZ(-700px) translateY(500px);opacity:0}40%{opacity:.6}100%{-webkit-transform:translateZ(0) translateY(0);transform:translateZ(0) translateY(0);opacity:1}}@keyframes tracking-in-expand-fwd-bottom{0%{letter-spacing:-.5em;-webkit-transform:translateZ(-700px) translateY(500px);transform:translateZ(-700px) translateY(500px);opacity:0}40%{opacity:.6}100%{-webkit-transform:translateZ(0) translateY(0);transform:translateZ(0) translateY(0);opacity:1}}

           
            .tracking-in-contract-bck{-webkit-animation:tracking-in-contract-bck 1s cubic-bezier(.215,.61,.355,1.000) both;animation:tracking-in-contract-bck 1s cubic-bezier(.215,.61,.355,1.000) both}
            @-webkit-keyframes tracking-in-contract-bck{0%{letter-spacing:1em;-webkit-transform:translateZ(400px);transform:translateZ(400px);opacity:0}40%{opacity:.6}100%{-webkit-transform:translateZ(0);transform:translateZ(0);opacity:1}}@keyframes tracking-in-contract-bck{0%{letter-spacing:1em;-webkit-transform:translateZ(400px);transform:translateZ(400px);opacity:0}40%{opacity:.6}100%{-webkit-transform:translateZ(0);transform:translateZ(0);opacity:1}}



            /*//////////////////////////////////*/
  
           p.text-overflownew{
                display: -webkit-box;
                text-overflow: ellipsis;
                overflow: hidden;
                -webkit-box-orient: vertical;
                -webkit-line-clamp:2;
            }




            .thumbnails {
            display: flex;
            margin: 1rem auto 0;
            padding: 0;
            justify-content: center;
            }

            .boxWork{
                aspect-ratio: 0; 
                margin: center;

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
            .aspect-169 {
                width: 100%;
                height: 400px;
                margin:auto;
                padding: 0;
                aspect-ratio: 0; 
              
            }
            /* sm */
            @media (min-width: 768px) {
                .aspect-169 {
                    width: 100%;
                    height: 100%;
                }
            }
            /* md */
            @media (min-width: 992px) {
                .aspect-169 {
                    width: 100%;
                    height: 100%;
                }
            }
            /* lg */
            @media (min-width: 1200px) {
                .aspect-169 {
                    width: 100%;
                    height: 100%;
                    margin:auto;
                    padding: 0;
                    aspect-ratio: 0;
                    max-width: 400px;
                    max-height: 600px;
                    
                }
            }

                /* .aspect-169 {
                    margin:auto;
                    padding: 0;
                    aspect-ratio: 0; 
                    max-width: 400px;
                    max-height: 600px;
                    }
                
                @media(max-width: 450px)  {
                    .aspect-169 {
                    aspect-ratio: 1/1; 
                    max-width: 100%;
                    max-height: 100%;
                    width: 300px;
                    height: 80vh;
                    
                    }
                } */
                .aspect-1{
                    aspect-ratio: 4/3; 
                    margin: center;
                    max-width: 100%;
                    max-height: 100%;
                }



           
        </style>

    </head>
    <body class="bg-gray-50">

        <nav class="fixed z-30 w-full bg-gray-50">
            <div class="py-3 px-3 lg:px-5 lg:pl-3">
                <div class="flex justify-between items-center">
                    <div class="flex justify-start items-center">
                        <button id="toggleSidebar" aria-expanded="false" aria-controls="sidebar"
                            class="hidden p-2 mr-4 text-gray-600 rounded cursor-pointer lg:inline hover:text-gray-900 hover:bg-gray-100">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                            class="p-2 mr-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100">
                            <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <a href="#"
                            class="text-md font-semibold flex items-center lg:mr-1.5">
                            <img src="{{asset('images/icon/siam_icon.png')}}"
                                class="mr-2 h-8" alt="">
                            <span class="tracking-in-contract-bck hidden md:inline-block self-center text-xl  whitespace-nowrap" style="color: black">
                                <h5 class=" mb-4 text-xl font-extrabold text-red-600 dark:text-white md:text-xl lg:text-xl mt-3"><span
                                    class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600">SIAM
                                    NGANCHANG</span></h5></span>
                        </a>
                    
                    </div>
                    
                    <div class="flex items-center">
                        <button id="toggleSidebarMobileSearch" type="button"
                            class="p-2 text-gray-500 rounded-2xl lg:hidden hover:text-gray-900 hover:bg-gray-100">
                        </button>
                    
                        <div class="">
                            @if (Route::has('login'))
                            <ul class="grid grid-rows-4 grid-flow-col gap-2 ">
                                @auth
                                
                                <li>
                                    <a href="{{ route('dashboard') }}"
                                        class="flex items-center py-2.5 px-4 text-base font-normal text-dark-500 rounded-lg hover:bg-gray-200 group transition-all duration-200 bg-gray-50 shadow-none"
                                        sidebar-toggle-collapse="">
                                        <div
                                            class="bg-white shadow-lg shadow-gray-300  text-dark-700 w-8 h-8 p-2.5 mr-1 rounded-lg text-center grid place-items-center">
                                            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>shop </title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1716.000000, -439.000000)" fill="currentColor"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(0.000000, 148.000000)">
                                                                <path class="color-background"
                                                                    d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                                    opacity="0.598981585"></path>
                                                                <path class="color-background"
                                                                    d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <span class="ml-3 text-dark-500 text-sm font-light "
                                            sidebar-toggle-item="">Dashboard</span>
                                    </a>
                                </li>
                                @else
                                <li>
                                    <a href="{{ route('login') }}"
                                        class="flex items-center py-2.5 px-2 text-base font-normal text-dark-500 rounded-lg   shadow-gray-200  hover:bg-gray-200 group transition-all duration-200 bg-gray-50 shadow-none"
                                        sidebar-toggle-collapse="">
                                        <div
                                            class="bg-white shadow-lg shadow-gray-300  text-dark-700 w-8 h-8 p-2.5 mr-1 rounded-lg text-center grid place-items-center">
                                            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>shop </title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1716.000000, -439.000000)" fill="currentColor"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(0.000000, 148.000000)">
                                                                <path class="color-background"
                                                                    d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                                    opacity="0.598981585"></path>
                                                                <path class="color-background"
                                                                    d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <span class="ml-1 text-dark-500 text-sm font-light "
                                            sidebar-toggle-item="">Login</span>
                                    </a>
                                </li>
                                @if (Route::has('register'))
                                <li>
                                    <a href="{{route('register')}}"
                                        class="flex items-center py-2.5 px-2 text-base font-normal text-dark-500 rounded-lg   shadow-gray-200  hover:bg-gray-200 group transition-all duration-200 bg-gray-50 shadow-none"
                                        sidebar-toggle-collapse="">
                                        <div
                                            class=" shadow-lg  border bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800  shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 !text-white  text-dark-700 w-8 h-8 p-2.5 mr-1 rounded-lg text-center grid place-items-center">
                                            <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>document</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1870.000000, -591.000000)" fill="currentColor"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(154.000000, 300.000000)">
                                                                <path class="color-background"
                                                                    d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                    opacity="0.603585379"></path>
                                                                <path class="color-background"
                                                                    d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <span class="ml-1 text-dark-500 text-sm font-light "
                                            sidebar-toggle-item="">Sign up</span>
                                    </a>
                                </li>
                                
                                @endif
                        
                                @endauth
                            </ul>
                            @endif
                            
                        </div>
                        <!------------------------------->
                    </div>
                </div>
            </div>
        </nav>
        
        <div class="flex overflow-hidden bg-white pt-16">
            <!-------------------------------->
            @include('layouts.navbar-menu')
                <div class="hidden fixed inset-0 z-10 bg-gray-900 opacity-50" id="sidebarBackdrop"></div>
                <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64"  style="background-color: #f2f2f2">

                        {{ $slot }}
            
                    

                   
                </div>
                <!-------------------------------------->

                
            </div>


          



   
            <script src="https://unpkg.com/flowbite@1.5.4/dist/datepicker.js"></script>
            <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
            {{-- <script src="js/jquery.min.js"></script> --}}

            <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175462213-1"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-175462213-1');
            </script>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            
            <script src="{{ asset('splide-4.1.3/dist/js/splide.min.js') }}"></script>
            <script src="{{ asset('js/app.bundle.js') }}"></script>
            <script src="{{ asset('splide-4.1.3/dist/js/splide.min.js') }}"></script>
            @livewireScripts
        @yield('scripts')

        
    </body>
</html>
