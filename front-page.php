<?php get_header(); ?>

<style>
    /* CSS Custom pentru serviciile de hover */
    .service-card {
        position: relative;
        overflow: hidden;
        color: white;
        border-radius: 0.75rem;
    }

    .service-card img {
        transition: transform 0.3s ease;
        border-radius: inherit;
    }

    .service-card-overlay {
        position: absolute;
        inset: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: rgba(0, 0, 0, 0);
        transition: background 0.3s ease;
        padding: 6px;
        border-radius: inherit;
        text-align: center;
    }

    .service-card-overlay h4,
    .service-card-overlay a {
        opacity: 1;
        transition: opacity 0.3s ease;
        text-shadow: 1px 1px 2px black;
    }

    .service-card-overlay p {
        display: none;
        transition: opacity 0.3s ease;
        text-align: center;
    }

    .service-card:hover img {
        transform: scale(1.05);
    }

    .service-card:hover .service-card-overlay {
        background: rgba(0, 0, 0, 0.7);
    }

    .service-card:hover .service-card-overlay p {
        display: block;
        opacity: 1;
    }

    .afla-mai-multe {
        color: #FFFFFF;
        background-color: #1E3A8A;
        padding: 0.5rem 1rem;
        font-weight: 500;
        border-radius: 0.375rem;
        text-decoration: none;
    }

    .afla-mai-multe:hover {
        background-color: #1E40AF;
    }
</style>

<!-- Hero Section -->
<div class="relative bg-cover bg-center h-96" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/banner.jpg');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-6xl font-semibold">Online e mai simplu!</h1>
            <p class="font-light text-3xl mt-5">Servicii de transport national.</p>
            <div class="flex justify-center mt-10">
                <a href="<?php echo get_permalink(get_page_by_title('Curse')); ?>" style="color: #FFFFFF" class="flex items-center px-4 py-2 font-medium text-white bg-blue-900 rounded-md hover:bg-blue-800">CAUTA RUTE</a>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<section class="w-full px-6 py-10">
    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Service 1: Grafice de calatorie / Turism -->
        <div class="relative mb-6 service-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/grafice.jpg" alt="Trasee si Grafice" class="w-full h-72 object-cover rounded-md">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-6 rounded-md service-card-overlay">
                <h4 class="text-2xl font-bold mb-4">Grafice de calatorie / Turism</h4>
                <p class="text-base mb-6">
                    Informeaza-te cu ultimile modificari ale programelor si rutelor efectuate de masinile noastre. Vizualizeaza aceasta sectiune pentru a cunoaste oricare deviatie sau schimbare de rute.
                </p>
                <a href="<?php echo get_permalink(get_page_by_title('Curse')); ?>" style="color: #FFFFFF" class="afla-mai-multe">Afla mai multe</a>
            </div>
        </div>

        <!-- Service 2: Inchiriere Autocare -->
        <div class="relative mb-6 service-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/inchiriere-autocar.jpg" alt="Inchiriere Autocare" class="w-full h-72 object-cover rounded-md">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-6 rounded-md service-card-overlay">
                <h4 class="text-2xl font-bold mb-4">Inchiriere Autocare</h4>
                <p class="text-base mb-6">
                    Te ajutam sa iti creezi traseele tale personalizate. Suntem langa tine oriunde, oricand pentru siguranta totala. Foarte multe solutii si servicii te asteapta, completate bineinteles de confort.
                </p>
                <a href="https://www.transfero.ro/inchiriere-autocare/" style="color: #FFFFFF" class="afla-mai-multe">Afla mai multe</a>
            </div>
        </div>

        <!-- Service 3: Transfer Aeroport -->
        <div class="relative mb-6 service-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/trs2.jpg" alt="Transfer Aeroport" class="w-full h-72 object-cover rounded-md">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-6 rounded-md service-card-overlay">
                <h4 class="text-2xl font-bold mb-4">Transfer Aeroport</h4>
                <p class="text-base mb-6">
                    Conexiune rapida cu Aeroportul International Henri Coanda – Otopeni. Rezerva-ti locurile sau vizualizeaza tarifele.
                </p>
                <a href="http://transfero.ro" style="color: #FFFFFF" class="afla-mai-multe">Afla mai multe</a>
            </div>
        </div>

        <!-- Service 4: Inchirieri Auto -->
        <div class="relative mb-6 service-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/rent2.jpg" alt="Inchirieri Auto" class="w-full h-72 object-cover rounded-md">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-6 rounded-md service-card-overlay">
                <h4 class="text-2xl font-bold mb-4">Inchirieri Auto</h4>
                <p class="text-base mb-6">
                    Gegi este unul dintre principalii furnizori de servicii de inchirieri auto in Tecuci, Focsani si Barlad, oferind o gama larga de optiuni pentru clientii care au nevoie de un vehicul in diverse ocazii.
                </p>
                <a href="https://www.transfero.ro/rent-a-car-inchirieri-auto/" style="color: #FFFFFF" class="afla-mai-multe">Afla mai multe</a>
            </div>
        </div>

        <!-- Service 5: Cazare -->
        <div class="relative mb-6 service-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/cazare.jpg" alt="Cazare" class="w-full h-72 object-cover rounded-md">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-6 rounded-md service-card-overlay">
                <h4 class="text-2xl font-bold mb-4">Cazare</h4>
                <p class="text-base mb-6">
                    ???
                </p>
                <a href="#" style="color: #FFFFFF" class="afla-mai-multe">Afla mai multe</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
