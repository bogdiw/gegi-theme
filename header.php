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
    </style>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <body class="bg-gray-100">
        <nav class="fixed top-0 w-full bg-blue-700 shadow-md z-50" x-data="{ navbarOpen: false, dropdownOpen: false }"
             :class="{ 'navbar-open': navbarOpen }">
            <!-- Container -->
            <div class="container flex flex-wrap px-4 py-2 mx-auto lg:space-x-4">
                <!-- Brand -->
                <a href="<?php echo home_url(); ?>" style="color: #FFFFFF" class="inline-flex p-2 text-xl font-large font-bold tracking-wider text-white uppercase">Gegi Turism</a>
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
                    <a onclick="return gtag_report_conversion('tel:0745 380 000');" href="tel:0745380000"
                       class="phone-icon flex px-4 py-2 rounded-md font-medium text-white lg:hover:bg-blue-800">
                        <span class="icon flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                        </span>
                        <span class="phone-number lg:inline-block ml-2">0745 380 000</span>
                    </a>
                </div>
                <!-- Phone Button -->
                <!-- Menu -->
                <div class="menu-list w-full mt-2 lg:inline-flex lg:w-auto lg:mt-0" :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
                    <ul class="flex flex-col w-full space-y-2 lg:w-auto lg:flex-row lg:space-y-0 lg:space-x-2">
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_title('Acasa')); ?>" style="color: #FFFFFF" class="flex items-center px-4 py-2 font-medium text-white bg-blue-900 rounded-md hover:bg-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                                <span class="ml-2">ACASA</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_title('Curse')); ?>" style="color: #FFFFFF" class="flex px-4 py-2 font-medium text-white rounded-md hover:bg-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z" />
                                </svg>
                                <span class="ml-2">GRAFICE DE CIRCULATIE</span>
                            </a>
                        </li>
                        <!-- Dropdown -->
                        <li class="relative" x-data="{ dropdownOpen: false }">
                            <button href="#" class="servicii-button flex w-full px-4 py-2 font-medium text-white rounded-md outline-none focus:outline-none hover:bg-blue-800" @click="dropdownOpen = !dropdownOpen">
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
                                        <a href="<?php echo get_permalink(get_page_by_title('Autocare')); ?>" style="color: #000000" class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-100 hover:text-black">
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 120.96" class="size-6"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>bus</title>
                                                <path class="cls-1" d="M105.5,104.64H99.44v9.53A6.81,6.81,0,0,1,92.65,121h-4a6.82,6.82,0,0,1-6.79-6.79v-9.53H40.82v9.53A6.82,6.82,0,0,1,34,121H30a6.81,6.81,0,0,1-6.78-6.79v-9.53H18.1c-3.54-.06-5.24-2-5.5-5.29V21.52c-2,.2-2.95.66-3.43,1.68V45.45H4.87A4.88,4.88,0,0,1,0,40.58V27.44a4.89,4.89,0,0,1,4.73-4.87c.41-3.82,2.06-4.93,8-5.21Q14,7.36,26.36,2.57C44.09-.68,77.73-1,96.52,2.57c8.28,3.19,12.8,8.12,13.62,14.79,6,.3,7.61,1.42,8,5.21a4.89,4.89,0,0,1,4.73,4.87V40.58A4.88,4.88,0,0,1,118,45.45h-4.3V23.14c-.48-1-1.47-1.44-3.43-1.63V98.59c0,4.46-1.44,6-4.78,6ZM16.13,84.87l.28-6.69c.16-1.17.78-1.69,1.89-1.5A129.9,129.9,0,0,1,34.39,86.85c1.09.72.66,2.11-.78,1.85L18.48,87.6a2.74,2.74,0,0,1-2.35-2.73ZM52,93.45H71.3a.94.94,0,0,1,.94.94v3.24a.94.94,0,0,1-.94.94H52a.94.94,0,0,1-.94-.94V94.39a.94.94,0,0,1,.94-.94Zm50.35,0A2.51,2.51,0,1,1,99.82,96a2.51,2.51,0,0,1,2.5-2.51Zm-82.65,0A2.51,2.51,0,1,1,17.16,96a2.51,2.51,0,0,1,2.51-2.51Zm87.08-8.63-.28-6.69c-.16-1.17-.78-1.69-1.88-1.5a129.28,129.28,0,0,0-16.1,10.17c-1.09.72-.66,2.11.78,1.85l15.13-1.1a2.73,2.73,0,0,0,2.35-2.73ZM48.19,6.11h26.5a1.63,1.63,0,0,1,1.62,1.62V12a1.63,1.63,0,0,1-1.62,1.62H48.19A1.63,1.63,0,0,1,46.57,12V7.73a1.63,1.63,0,0,1,1.62-1.62ZM20.32,18.91H102.2a2,2,0,0,1,2,2V64.09c0,1.08-.89,1.69-2,2-28.09,8.53-53.8,8.18-81.88,0-1.11-.3-2-.9-2-2V20.89a2,2,0,0,1,2-2Z"/>
                                            </svg>
                                            <span class="ml-2">AUTOCARE</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" style="color: #000000" class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-100 hover:text-black">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 98.75" style="enable-background:new 0 0 122.88 98.75" xml:space="preserve" class="size-6"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g>
                                                <path class="st0" d="M76.71,23.6l15.76,15.97v7.51l-7.46,0v-5.65h-6.18v-6.18h-5.91l-1.71-5.57c-2.72,1.82-6.03,2.88-9.58,2.88 c-9.32,0-16.88-7.29-16.88-16.28C44.75,7.29,52.31,0,61.63,0c9.32,0,16.88,7.29,16.88,16.28C78.51,18.91,77.86,21.4,76.71,23.6 L76.71,23.6L76.71,23.6z M0,45.47h24.83v44.18H0V45.47L0,45.47z M29.83,85.94V49.02h16.61c7.04,1.26,14.08,5.08,21.12,9.51h12.9 c5.84,0.35,8.9,6.27,3.22,10.16c-4.53,3.32-10.49,3.13-16.61,2.58c-4.22-0.21-4.4,5.46,0,5.48c1.53,0.12,3.19-0.24,4.64-0.24 c7.63-0.01,13.92-1.47,17.77-7.5l1.93-4.51l19.19-9.51c9.6-3.16,16.42,6.88,9.35,13.87C106.06,78.96,91.81,87.28,77.23,94 c-10.59,6.44-21.18,6.22-31.76,0L29.83,85.94L29.83,85.94z M59.2,11.07c1.66,0,3.01,1.35,3.01,3.01c0,1.66-1.35,3.01-3.01,3.01 c-1.67,0-3.01-1.35-3.01-3.01C56.19,12.41,57.54,11.07,59.2,11.07L59.2,11.07z"/></g>
                                            </svg>
                                            <span class="ml-2">INCHIRIERI AUTO</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" style="color: #000000" class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-100 hover:text-black">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 94.46" style="enable-background:new 0 0 122.88 94.46" xml:space="preserve" class="size-6"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g>
                                                <path class="st0" d="M16.12,57.81c1.18-13.83,3.59-25.21,13.49-29.72c4.51,13.63,2.48,26.79-1.88,41.21 C13.95,71.23,1.47,75.67,1.47,84.48c6.65,1.81,11.38-0.71,15.35-5.96c8.88,7.71,14.54,10.06,23.47-0.45 c5.83,10.17,17.37,7.79,23.48,0.32c6.75,8.76,18.41,9.44,23.32-1.44c7.1,10.93,18.15,9.32,23.37,0.67 c3.32,4.15,5.05,6.84,10.66,7.27c-3.69-11.94-16.91-17.53-33.9-18.17c-2.58-8.69-3.73-16.65-1-24.89c6.11,2.78,7.59,9.8,8.32,18.34 l-0.01,0.01c2.4-5.92,3.88-11.32,0.51-17.43c3.21,0.34,6.24,2.25,9.45,5.19c-2.65-5.68-6.95-10-14.63-9.03 c4.28-2.87,9.35-2.38,14.24-1.24c-5.09-5.37-10.63-7.62-17.27-1.53c-0.23-3.7,1.3-6.91,3.33-9.99c-4.3,1.71-7.51,3.58-6.51,11.37 c-7.35-6.21-15.57-3.58-18.45,7.29c5.39-4.77,11.13-7.19,17.25-5.3c-10.7,4.01-13.57,10.19-9.06,18.6 c3.21-8.12,6.57-13.23,10.33-15.6c-2.05,5.17-3.82,10.9-1.77,24.15C75.35,66.8,68.3,67.6,61.11,69c-4.46-0.87-14.23-1.33-24.6-0.61 c3.33-21.5,0.47-30.78-2.86-39.17C39.76,33.06,45.2,41.34,50.4,54.5c7.31-13.62,2.66-23.64-14.69-30.14 c9.92-3.08,19.22,0.86,27.97,8.58c-4.67-17.63-18-21.88-29.91-11.82C35.39,8.5,30.19,5.47,23.22,2.69c3.28,5,5.76,10.2,5.39,16.19 C17.86,9.01,8.88,12.66,0.62,21.36c7.93-1.85,16.15-2.64,23.08,2.01C11.26,21.8,4.3,28.81,0,38.01c5.2-4.77,10.11-7.86,15.31-8.42 c-5.46,9.9-3.05,18.64,0.83,28.24L16.12,57.81L16.12,57.81z M65.51,21.46c-0.21,0.36-0.66,0.48-1.02,0.28 c-0.36-0.21-0.48-0.66-0.28-1.02l0.96-1.67c0.21-0.36,0.66-0.48,1.02-0.28c0.36,0.21,0.48,0.66,0.28,1.02L65.51,21.46L65.51,21.46 L65.51,21.46z M70.46,4.99c1.85,0,3.53,0.75,4.74,1.96c1.21,1.21,1.96,2.89,1.96,4.74c0,1.85-0.75,3.53-1.96,4.74 c-1.21,1.21-2.89,1.96-4.74,1.96c-1.85,0-3.53-0.75-4.74-1.96c-1.21-1.21-1.96-2.89-1.96-4.74c0-1.85,0.75-3.53,1.96-4.74 C66.94,5.74,68.61,4.99,70.46,4.99L70.46,4.99z M79.64,5.71C80,5.5,80.46,5.62,80.67,5.98C80.87,6.34,80.75,6.8,80.39,7l-1.67,0.96 c-0.36,0.21-0.82,0.09-1.02-0.27c-0.21-0.36-0.09-0.82,0.27-1.02L79.64,5.71L79.64,5.71z M81.41,11.1c0.41,0,0.75,0.34,0.75,0.75 c0,0.41-0.34,0.75-0.75,0.75h-1.92c-0.41,0-0.75-0.34-0.75-0.75c0-0.41,0.34-0.75,0.75-0.75H81.41L81.41,11.1z M64.48,2.52 c-0.21-0.36-0.09-0.82,0.27-1.02c0.36-0.21,0.82-0.09,1.02,0.27l0.96,1.67c0.21,0.36,0.09,0.82-0.27,1.02 c-0.36,0.21-0.82,0.09-1.02-0.27L64.48,2.52L64.48,2.52z M69.87,0.75C69.87,0.34,70.2,0,70.62,0c0.41,0,0.75,0.34,0.75,0.75v1.92 c0,0.41-0.34,0.75-0.75,0.75c-0.41,0-0.75-0.34-0.75-0.75V0.75L69.87,0.75z M75.42,1.92c0.21-0.36,0.66-0.48,1.02-0.28 c0.36,0.21,0.48,0.66,0.28,1.02l-0.96,1.67c-0.21,0.36-0.66,0.48-1.02,0.28c-0.36-0.21-0.48-0.66-0.28-1.02L75.42,1.92L75.42,1.92 L75.42,1.92z M80.24,16.65c0.36,0.21,0.48,0.66,0.28,1.02c-0.21,0.36-0.66,0.48-1.02,0.28l-1.67-0.96 c-0.36-0.21-0.48-0.66-0.28-1.02c0.21-0.36,0.66-0.48,1.02-0.28L80.24,16.65L80.24,16.65L80.24,16.65z M61.29,17.68 c-0.36,0.21-0.82,0.09-1.02-0.27c-0.21-0.36-0.09-0.82,0.27-1.02l1.67-0.96c0.36-0.21,0.82-0.09,1.02,0.27 c0.21,0.36,0.09,0.82-0.27,1.02L61.29,17.68L61.29,17.68z M59.52,12.29c-0.41,0-0.75-0.34-0.75-0.75c0-0.41,0.34-0.75,0.75-0.75 h1.92c0.41,0,0.75,0.34,0.75,0.75c0,0.41-0.34,0.75-0.75,0.75H59.52L59.52,12.29z M60.69,6.74c-0.36-0.21-0.48-0.66-0.28-1.02 c0.21-0.36,0.66-0.48,1.02-0.28l1.67,0.96c0.36,0.21,0.48,0.66,0.28,1.02c-0.21,0.36-0.66,0.48-1.02,0.28L60.69,6.74L60.69,6.74 L60.69,6.74z M76.45,20.87c0.21,0.36,0.09,0.82-0.27,1.02c-0.36,0.21-0.82,0.09-1.02-0.27l-0.96-1.67 c-0.21-0.36-0.09-0.82,0.27-1.02c0.36-0.21,0.82-0.09,1.02,0.27L76.45,20.87L76.45,20.87z M71.06,22.63c0,0.41-0.34,0.75-0.75,0.75 c-0.41,0-0.75-0.34-0.75-0.75v-1.92c0-0.41,0.34-0.75,0.75-0.75c0.41,0,0.75,0.34,0.75,0.75V22.63L71.06,22.63z M0.93,89.61 C2.43,89.95,4,90.1,5.56,90.06c2.17-0.06,4.31-0.48,6.17-1.25c2.18-0.9,4.19-2.35,5.04-4.6c0.78,2.16,2.92,3.74,5.01,4.6 c1.86,0.77,4.01,1.2,6.17,1.25c2.17,0.06,4.37-0.25,6.34-0.95c3.16-1.11,3.83-2.56,5.91-5.01h0c1.2,2.57,3.3,4.09,5.91,5.01 c1.97,0.69,4.17,1,6.34,0.95c2.17-0.06,4.31-0.48,6.17-1.25c2.09-0.86,4.23-2.45,5.01-4.6c0.85,2.25,2.88,3.7,5.04,4.6 c1.86,0.77,4.01,1.2,6.17,1.25c2.17,0.06,4.37-0.25,6.34-0.95c3.15-1.11,3.83-2.57,5.91-5.01c2.08,2.43,2.77,3.9,5.92,5.01 c1.97,0.69,4.17,1,6.34,0.95c2.17-0.06,4.31-0.48,6.17-1.25c2.17-0.9,4.19-2.34,5.04-4.6c0.78,2.15,2.92,3.73,5.01,4.6 c1.86,0.77,4.01,1.2,6.17,1.25c0.38,0.01,0.76,0.01,1.13,0v4.4c-3.12,0.08-6.28-0.45-9.02-1.58c-1.42-0.59-2.53-1.16-3.53-1.88 c-1.35,0.92-2.69,1.71-3.1,1.88c-4.78,1.98-10.85,2.11-15.72,0.39c-1.61-0.57-3.1-1.33-4.41-2.31c-1.31,0.98-2.81,1.74-4.41,2.31 c-4.88,1.72-10.95,1.58-15.73-0.39c-0.41-0.17-1.74-0.97-3.1-1.88c-1,0.72-2.11,1.3-3.53,1.88c-4.78,1.98-10.85,2.11-15.73,0.39 c-1.42-0.5-2.81-1.13-4.04-1.94c-1.64,0.8-3.53,1.5-4.77,1.94c-4.87,1.72-10.95,1.58-15.72-0.39c-1.42-0.59-2.53-1.16-3.53-1.88 c-1.35,0.92-2.69,1.71-3.1,1.88c-3.77,1.56-8.35,1.97-12.51,1.23V89.61L0.93,89.61z"/></g>
                                            </svg>
                                            <span class="ml-2">TURISM</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Dropdown -->
                        <li>
                            <a href="#" style="color: #FFFFFF" class="flex px-4 py-2 rounded-md font-medium text-white hover:bg-blue-800">
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
