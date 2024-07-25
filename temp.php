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

    .hero-section {
        position: relative;
        background-image: url('<?php echo get_template_directory_uri(); ?>/images/banner2.jpg');
        background-size: cover;
        background-position: center 80%;
        height: 24rem;
    }

    .hero-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.5);
    }

    .hero-content {
        position: absolute;
        inset: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
    }

    .hero-title {
        font-size: 3rem;
        font-weight: 600;
    }

    .hero-subtitle {
        font-size: 1.875rem;
        font-weight: 300;
        margin-top: 1.25rem;
    }

    .hero-button-container {
        display: flex;
        justify-content: center;
        margin-top: 2.5rem;
    }

    .hero-button {
        color: #FFFFFF;
        background-color: #1E3A8A;
        padding: 0.5rem 1rem;
        font-weight: 500;
        border-radius: 0.375rem;
        text-decoration: none;
        display: flex;
        align-items: center;
        transition: background-color 0.3s ease;
    }

    .hero-button:hover {
        background-color: #1E40AF;
    }

    /* Adjusted Services Section */
    .services-section {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
    }

    .services-grid .service-card {
        margin-bottom: 20px;
    }
</style>

<!-- Hero Section -->
<div class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div>
            <h1 class="hero-title">Online e mai simplu!</h1>
            <p class="hero-subtitle">Servicii de transport national.</p>
            <div class="hero-button-container">
                <a href="<?php echo get_permalink(get_page_by_title('Curse')); ?>" style="color: #FFFFFF" class="hero-button">CAUTA RUTE</a>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<section class="services-section">
    <!-- Services Grid -->
    <div class="services-grid">
        <!-- Service 1: Grafice de calatorie / Turism -->
        <div class="service-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/grafice.jpg" alt="Trasee si Grafice" class="w-full h-72 object-cover rounded-md">
            <div class="service-card-overlay">
                <h4 class="text-2xl font-bold mb-4">Grafice de calatorie / Turism</h4>
                <p class="text-base mb-6">
                    Informeaza-te cu ultimile modificari ale programelor si rutelor efectuate de masinile noastre. Vizualizeaza aceasta sectiune pentru a cunoaste oricare deviatie sau schimbare de rute.
                </p>
                <a href="<?php echo get_permalink(get_page_by_title('Curse')); ?>" style="color: #FFFFFF" class="afla-mai-multe">Afla mai multe</a>
            </div>
        </div>

        <!-- Service 2: Inchiriere Autocare -->
        <div class="service-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/inchiriere-autocar.jpg" alt="Inchiriere Autocare" class="w-full h-72 object-cover rounded-md">
            <div class="service-card-overlay">
                <h4 class="text-2xl font-bold mb-4">Inchiriere Autocare</h4>
                <p class="text-base mb-6">
                    Te ajutam sa iti creezi traseele tale personalizate. Suntem langa tine oriunde, oricand pentru siguranta totala. Foarte multe solutii si servicii te asteapta, completate bineinteles de confort.
                </p>
                <a href="https://www.transfero.ro/inchiriere-autocare/" style="color: #FFFFFF" class="afla-mai-multe">Afla mai multe</a>
            </div>
        </div>

        <!-- Service 3: Transfer Aeroport -->
        <div class="service-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/trs2.jpg" alt="Transfer Aeroport" class="w-full h-72 object-cover rounded-md">
            <div class="service-card-overlay">
                <h4 class="text-2xl font-bold mb-4">Transfer Aeroport</h4>
                <p class="text-base mb-6">
                    Conexiune rapida cu Aeroportul International Henri Coanda – Otopeni. Rezerva-ti locurile sau vizualizeaza tarifele.
                </p>
                <a href="http://transfero.ro" style="color: #FFFFFF" class="afla-mai-multe">Afla mai multe</a>
            </div>
        </div>

        <!-- Service 4: Inchirieri Auto -->
        <div class="service-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/rent2.jpg" alt="Inchirieri Auto" class="w-full h-72 object-cover rounded-md">
            <div class="service-card-overlay">
                <h4 class="text-2xl font-bold mb-4">Inchirieri Auto</h4>
                <p class="text-base mb-6">
                    Gegi este unul dintre principalii furnizori de servicii de inchirieri auto in Tecuci, Focsani si Barlad, oferind o gama larga de optiuni pentru clientii care au nevoie de un vehicul in diverse ocazii.
                </p>
                <a href="https://www.transfero.ro/rent-a-car-inchirieri-auto/" style="color: #FFFFFF" class="afla-mai-multe">Afla mai multe</a>
            </div>
        </div>

        <!-- Service 5: Locație Google Maps -->
        <div class="service-card">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2779.543555375312!2d27.430955730552878!3d45.840419774185534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b428549b2b8cd9%3A0xc61a90f26a75c4b9!2sAutogara%20GEGI!5e0!3m2!1sro!2sro!4v1721727454376!5m2!1sro!2sro" 
            width="100%" 
            height="200" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="service-card-overlay">
        <h4 class="text-2xl font-bold mb-4">Locatie</h4>
        <p class="text-base mb-6">
            Vizualizeaza locatia noastra pe Google Maps.
        </p>
        <a href="https://www.google.com/maps/place/Autogara+GEGI/@45.8404198,27.4309557,17z/data=!4m6!3m5!1s0x40b428549b2b8cd9:0xc61a90f26a75c4b9!8m2!3d45.8404236!4d27.4309539!16s%2Fg%2F1trrbps_?hl=ro&entry=ttu" 
           style="color: #FFFFFF" 
           class="afla-mai-multe">Afla mai multe</a>
    </div>
</div>


        <!-- Service 6: Cazare -->
        <div class="service-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/cazare.jpg" alt="Cazare" class="w-full h-72 object-cover rounded-md">
            <div class="service-card-overlay">
                <h4 class="text-2xl font-bold mb-4">Cazare</h4>
                <p class="text-base mb-6">
                    Descoperă opțiunile noastre de cazare confortabile și accesibile, adaptate nevoilor tale.
                </p>
                <a href="#" style="color: #FFFFFF" class="afla-mai-multe">Afla mai multe</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
