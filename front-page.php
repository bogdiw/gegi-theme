<?php get_header(); ?>

<!-- Hero Section -->
<div class="relative bg-cover bg-center h-96" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/prima-pagina-e1450789166952.png');">
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

<!-- Main Content Section -->
<div class="container mx-auto p-6" style="padding-top: 100px;">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">

        <!-- Inchiriere Autocare -->
        <div class="col-span-1">
            <a href="<?php echo get_permalink(get_page_by_title('Autocare')); ?>">
                <div class="shadow-md rounded p-6 text-center transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                    <div class="bg-blue-500 p-6 rounded mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/inchiriere-alb-150x150.png" alt="Inchiriere Autocare" class="w-24 h-24 mx-auto">
                    </div>
                    <h4 class="text-lg font-bold text-blue-500 mb-2">Inchiriere Autocare</h4>
                    <p class="bg-white p-4 rounded">Te ajutam sa iti creezi traseele tale personalizate. Suntem langa tine oriunde, oricand pentru siguranta totala. Foarte multe solutii si servicii te asteapta, completate bineinteles de confort.</p>
                </div>
            </a>
        </div>

        <!-- Rent-a-Car -->
        <div class="col-span-1">
            <a href="#">
                <div class="shadow-md rounded p-6 text-center transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                    <div class="bg-orange-500 p-6 rounded mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/white-car.png" alt="Alte Servicii" class="w-24 h-24 mx-auto">
                    </div>
                    <h4 class="text-lg font-bold text-orange-500 mb-2">Rent-a-Car</h4>
                    <p class="bg-white p-4 rounded">Gegi este unul dintre principalii furnizori de servicii de inchirieri auto in Tecuci, Focsani si Barlad, oferind o gama larga de optiuni pentru clientii care au nevoie de un vehicul in diverse ocazii.</p>
                </div>
            </a>
        </div>


        <!-- Transfer Aeroport -->
        <div class="col-span-1">
            <a href="http://transfero.ro">
                <div class="shadow-md rounded p-6 text-center transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                    <div class="bg-yellow-500 p-6 rounded mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/avion-alb-150x150.png" alt="Transfer Aeroport" class="w-24 h-24 mx-auto">
                    </div>
                    <h4 class="text-lg font-bold text-yellow-500 mb-2">Transfer Aeroport</h4>
                    <p class="bg-white p-4 rounded">Conexiune rapida cu Aeroportul International Henri Coanda – Otopeni. Rezerva-ti locurile sau vizualizeaza tarifele.</p>
                </div>
            </a>
        </div>

        <!-- Turism -->
        <div class="col-span-1">
            <a href="#">
                <div class="shadow-md rounded p-6 text-center transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                    <div class="bg-red-500 p-6 rounded mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/turn-alb.png" alt="Turism" class="w-24 h-24 mx-auto">
                    </div>
                    <h4 class="text-lg font-bold text-red-500 mb-2">Turism</h4>
                    <p class="bg-white p-4 rounded">Alaturi de partenerii nostri iti oferim cele mai frumoase vacante la cele mai avantajoase preturi.</p>
                </div>
            </a>
        </div>

        <!-- Trasee si Grafice -->
        <div class="col-span-1">
            <a href="<?php echo get_permalink(get_page_by_title('Curse')); ?>">
                <div class="shadow-md rounded p-6 text-center transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                    <div class="bg-green-500 p-6 rounded mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/curse-alb-150x150.png" alt="Trasee si Grafice" class="w-24 h-24 mx-auto">
                    </div>
                    <h4 class="text-lg font-bold text-green-500 mb-2">Trasee si Grafice</h4>
                    <p class="bg-white p-4 rounded">Informeaza-te cu ultimile modificari ale programelor si rutelor efectuate de masinile noastre. Vizualizeaza aceasta sectiune pentru a cunoaste oricare deviatie sau schimbare de rute.</p>
                </div>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
