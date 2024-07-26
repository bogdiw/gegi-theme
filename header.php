<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="./src/output.css" rel="stylesheet">
    <?php wp_head(); ?>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
    /* Remove border from dropdown button */
    .servicii-button {
        border: none;
        outline: none;
        box-shadow: none;
    }
    [x-cloak] {
        display: none !important;
    }

    /* Styles for phone button */
    .phone-icon {
        color: #FFFFFF;
        text-decoration: none;
    }
    .phone-icon:hover {
        color: #FFFFFF;
        text-decoration: none;
    }
    @media (max-width: 888px) {                  
        .phone-number {
            display: none;
        }
        .phone-button {
            position: absolute;
            top: 0;
            right: 0;
            margin-top: 0.5rem;
            margin-right: 5rem;
        }
    }
    @media (min-width: 1024px) {
        .toggler-button {
            display: none;
        }
        .menu-list {
            display: flex !important;
        }
    }
    button:focus, 
    a:focus {
        outline: none;
    }
    .backg {
        background-color: #c50102;
    }
    </style>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <body class="bg-gray-100">
        <nav class="backg fixed top-0 w-full shadow-md z-50" x-data="{ navbarOpen: false, dropdownOpen: false }"
             :class="{ 'navbar-open': navbarOpen }">
            <!-- Container -->
            <div class="container flex flex-wrap px-4 py-2 mx-auto lg:space-x-4">
                <!-- Brand -->
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gegi-logo-white.png" alt="Gegi Turism" class="h-10">
                </a>
                <!-- Brand -->
                <!-- Toggler Button -->
                <button class="toggler-button inline-flex items-center justify-center w-10 h-10 ml-auto text-white border rounded-md outline-none focus:outline-none"
                        @click="navbarOpen = !navbarOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <!-- Toggler Button -->
                <!-- Phone Button -->
                <div class="phone-button lg:absolute top-0 right-0 mt-2 mr-4">
                    <a href="tel:0236820031" style="color: #FFFFFF"
                       class="phone-icon flex px-4 py-2 rounded-md font-medium text-white lg:hover:bg-red-800">
                        <span class="icon flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                        </span>
                        <span class="phone-number lg:inline-block ml-2">0236 820 031</span>
                    </a>
                </div>
                <!-- Phone Button -->
                <!-- Menu -->
                <div class="menu-list w-full mt-2 lg:inline-flex lg:w-auto lg:mt-0" :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
                    <ul class="flex flex-col w-full space-y-2 lg:w-auto lg:flex-row lg:space-y-0 lg:space-x-2">
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_title('Acasa')); ?>" style="color: #FFFFFF" class="flex items-center px-4 py-2 font-medium text-white bg-red-900 rounded-md hover:bg-red-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                                <span class="ml-2">ACASA</span>
                            </a>
                        </li>
                        <!-- Dropdown -->
                        <li class="relative" x-data="{ dropdownOpen: false }">
                            <button href="#" class="servicii-button flex w-full px-4 py-2 font-medium text-white rounded-md outline-none focus:outline-none hover:bg-red-800" @click="dropdownOpen = !dropdownOpen">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z" />
                                </svg>
                                <span class="ml-2">GRAFICE DE CIRCULATIE</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ml-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <!-- Dropdown Menu -->
                            <div x-cloak x-show="dropdownOpen" class="lg:absolute bg-white rounded-md p-2" x-transition @click.away="dropdownOpen = false">
                                <ul class="space-y-2 lg:w-48">
                                    <li>
                                        <a href="<?php echo get_permalink(get_page_by_title('Curse')); ?>" style="color: #000000" class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-100 hover:text-black">
                                        <svg fill="#000000" height="800px" width="800px" version="1.1" id="Filled_Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                            y="0px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" class="size-6">
                                        <g id="Location-Pin-Filled">
                                            <path d="M12,1c-4.97,0-9,4.03-9,9c0,6.75,9,13,9,13s9-6.25,9-13C21,5.03,16.97,1,12,1z M12,13c-1.66,0-3-1.34-3-3s1.34-3,3-3
                                                s3,1.34,3,3S13.66,13,12,13z"/>
                                        </g>
                                        </svg>
                                            <span class="ml-2">TECUCI</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_permalink(get_page_by_title('Curse')); ?>" style="color: #000000" class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-100 hover:text-black">
                                        <svg fill="#000000" height="800px" width="800px" version="1.1" id="Filled_Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                            y="0px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" class="size-6">
                                        <g id="Location-Pin-Filled">
                                            <path d="M12,1c-4.97,0-9,4.03-9,9c0,6.75,9,13,9,13s9-6.25,9-13C21,5.03,16.97,1,12,1z M12,13c-1.66,0-3-1.34-3-3s1.34-3,3-3
                                                s3,1.34,3,3S13.66,13,12,13z"/>
                                        </g>
                                        </svg>
                                            <span class="ml-2">BARLAD</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=""<?php echo get_permalink(get_page_by_title('Curse')); ?>" style="color: #000000" class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-100 hover:text-black">
                                        <svg fill="#000000" height="800px" width="800px" version="1.1" id="Filled_Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                            y="0px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" class="size-6">
                                        <g id="Location-Pin-Filled">
                                            <path d="M12,1c-4.97,0-9,4.03-9,9c0,6.75,9,13,9,13s9-6.25,9-13C21,5.03,16.97,1,12,1z M12,13c-1.66,0-3-1.34-3-3s1.34-3,3-3
                                                s3,1.34,3,3S13.66,13,12,13z"/>
                                        </g>
                                        </svg>
                                            <span class="ml-2">GALATI</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Dropdown -->

                        <!-- Dropdown -->
                        <li class="relative" x-data="{ dropdownOpen: false }">
                            <button href="#" class="servicii-button flex w-full px-4 py-2 font-medium text-white rounded-md outline-none focus:outline-none hover:bg-red-800" @click="dropdownOpen = !dropdownOpen">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                                </svg>
                                <span class="ml-2">SERVICII</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ml-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <!-- Dropdown Menu -->
                            <div x-cloak x-show="dropdownOpen" class="lg:absolute bg-white right-0 rounded-md p-2" x-transition @click.away="dropdownOpen = false">
                                <ul class="space-y-2 lg:w-48">
                                    <li>
                                        <a href="https://www.transfero.ro/inchiriere-autocare/" style="color: #000000" class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-100 hover:text-black">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 120.96" class="size-6"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>bus</title>
                                                <path class="cls-1" d="M105.5,104.64H99.44v9.53A6.81,6.81,0,0,1,92.65,121h-4a6.82,6.82,0,0,1-6.79-6.79v-9.53H40.82v9.53A6.82,6.82,0,0,1,34,121H30a6.81,6.81,0,0,1-6.78-6.79v-9.53H18.1c-3.54-.06-5.24-2-5.5-5.29V21.52c-2,.2-2.95.66-3.43,1.68V45.45H4.87A4.88,4.88,0,0,1,0,40.58V27.44a4.89,4.89,0,0,1,4.73-4.87c.41-3.82,2.06-4.93,8-5.21Q14,7.36,26.36,2.57C44.09-.68,77.73-1,96.52,2.57c8.28,3.19,12.8,8.12,13.62,14.79,6,.3,7.61,1.42,8,5.21a4.89,4.89,0,0,1,4.73,4.87V40.58A4.88,4.88,0,0,1,118,45.45h-4.3V23.14c-.48-1-1.47-1.44-3.43-1.63V98.59c0,4.46-1.44,6-4.78,6ZM16.13,84.87l.28-6.69c.16-1.17.78-1.69,1.89-1.5A129.9,129.9,0,0,1,34.39,86.85c1.09.72.66,2.11-.78,1.85L18.48,87.6a2.74,2.74,0,0,1-2.35-2.73ZM52,93.45H71.3a.94.94,0,0,1,.94.94v3.24a.94.94,0,0,1-.94.94H52a.94.94,0,0,1-.94-.94V94.39a.94.94,0,0,1,.94-.94Zm50.35,0A2.51,2.51,0,1,1,99.82,96a2.51,2.51,0,0,1,2.5-2.51Zm-82.65,0A2.51,2.51,0,1,1,17.16,96a2.51,2.51,0,0,1,2.51-2.51Zm87.08-8.63-.28-6.69c-.16-1.17-.78-1.69-1.88-1.5a129.28,129.28,0,0,0-16.1,10.17c-1.09.72-.66,2.11.78,1.85l15.13-1.1a2.73,2.73,0,0,0,2.35-2.73ZM48.19,6.11h26.5a1.63,1.63,0,0,1,1.62,1.62V12a1.63,1.63,0,0,1-1.62,1.62H48.19A1.63,1.63,0,0,1,46.57,12V7.73a1.63,1.63,0,0,1,1.62-1.62ZM20.32,18.91H102.2a2,2,0,0,1,2,2V64.09c0,1.08-.89,1.69-2,2-28.09,8.53-53.8,8.18-81.88,0-1.11-.3-2-.9-2-2V20.89a2,2,0,0,1,2-2Z"/>
                                            </svg>
                                            <span class="ml-2">AUTOCARE</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.transfero.ro/rent-a-car-inchirieri-auto/" style="color: #000000" class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-100 hover:text-black">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 98.75" style="enable-background:new 0 0 122.88 98.75" xml:space="preserve" class="size-6"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g>
                                                <path class="st0" d="M76.71,23.6l15.76,15.97v7.51l-7.46,0v-5.65h-6.18v-6.18h-5.91l-1.71-5.57c-2.72,1.82-6.03,2.88-9.58,2.88 c-9.32,0-16.88-7.29-16.88-16.28C44.75,7.29,52.31,0,61.63,0c9.32,0,16.88,7.29,16.88,16.28C78.51,18.91,77.86,21.4,76.71,23.6 L76.71,23.6L76.71,23.6z M0,45.47h24.83v44.18H0V45.47L0,45.47z M29.83,85.94V49.02h16.61c7.04,1.26,14.08,5.08,21.12,9.51h12.9 c5.84,0.35,8.9,6.27,3.22,10.16c-4.53,3.32-10.49,3.13-16.61,2.58c-4.22-0.21-4.4,5.46,0,5.48c1.53,0.12,3.19-0.24,4.64-0.24 c7.63-0.01,13.92-1.47,17.77-7.5l1.93-4.51l19.19-9.51c9.6-3.16,16.42,6.88,9.35,13.87C106.06,78.96,91.81,87.28,77.23,94 c-10.59,6.44-21.18,6.22-31.76,0L29.83,85.94L29.83,85.94z M59.2,11.07c1.66,0,3.01,1.35,3.01,3.01c0,1.66-1.35,3.01-3.01,3.01 c-1.67,0-3.01-1.35-3.01-3.01C56.19,12.41,57.54,11.07,59.2,11.07L59.2,11.07z"/></g>
                                            </svg>
                                            <span class="ml-2">INCHIRIERI AUTO</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/hotelkristalltecuci/?locale=ro_RO" style="color: #000000" class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-100 hover:text-black">
                                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" class="size-6"><path d="M2,14H24v8H22V19H2v3H0V2H2Zm3.5-2A2.5,2.5,0,1,0,3,9.5,2.5,2.5,0,0,0,5.5,12ZM21,6H12A3,3,0,0,0,9,9v3H24V9A3,3,0,0,0,21,6Z"/></svg>
                                            <span class="ml-2">CAZARE</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Dropdown -->
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_title('Contact')); ?>" style="color: #FFFFFF" class="flex px-4 py-2 rounded-md font-medium text-white hover:bg-red-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                </svg>
                                <span class="ml-2">CONTACT</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Menu -->
            </div>
            <!-- Container -->
        </nav><!-- #site-navigation -->
    </body>
</html>