<?php get_header(); ?>

<style>
    .service-card {
        position: relative;
        overflow: hidden;
        color: white;
        border-radius: 0.75rem;
    }

    .hero-section {
        position: relative;
        background-image: url('https://gegi.ro/wp-content/uploads/2024/09/hero.jpeg');
        background-size: cover;
        background-position: center 80%;
        height: 24rem;
        margin-bottom: 10px;
    }


    .service-card img {
        transition: transform 0.3s ease;
        border-radius: inherit;
    }
    
    .service-card iframe {
        border-radius: inherit;
        transition: transform 0.3s ease;
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

    .services-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .services-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        justify-content: space-between;
    }

    .services-grid .service-card {
        flex: 1 1 calc(33.333% - 40px);
    }

    @media (max-width: 1000px) {
        .services-grid .service-card {
            flex: 1 1 calc(50% - 40px);
        }
    }

    @media (max-width: 700px) {
        .services-grid .service-card {
            flex: 1 1 100%;
        }
    }

    .map-container {
        position: relative;
        border-radius: 0.75rem;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .map {
        width: 100%;
        height: 288px;
        border: 0;
        filter: brightness(80%) contrast(110%);
    }

    .map-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.1));
    }

    .usp-section {
        padding: 50px 20px;
        padding-bottom: 10px;
    }

    .usp-container {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        justify-content: space-around;
    }

    .usp-item {
        text-align: center;
        flex-basis: calc(25% - 30px);
    }

    .usp-icon-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }

    .usp-icon {
        width: 80px;
        height: 80px;
        object-fit: cover;
        display: block;
    }

    .usp-title {
        font-size: 1.125rem;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .usp-text {
        font-size: 0.875rem;
        margin-bottom: 20px;
        color: #666;
    }

    .usp-link {
        color: #1E3A8A;
        background-color: #c80404;
        padding: 0.5rem 1rem;
        font-weight: 500;
        border-radius: 0.375rem;
        text-decoration: none;
        display: inline-block;
    }

    .usp-link:hover {
        background-color: #991b1b;
    }

    @media (max-width: 768px) {
        .usp-item {
            flex-basis: calc(50% - 20px);
            margin-bottom: 20px;
        }
    }

    @media (max-width: 500px) {
        .usp-item {
            flex-basis: 100%;
            margin-bottom: 30px;
        }
    }
</style>

<!-- Hero Section -->
<div class="hero-section">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-6xl font-semibold">Servicii de transport.</h1>
            <div class="flex justify-center mt-10">
                <a href="<?php echo get_permalink(get_page_by_title('Grafice')); ?>" style="color: #FFFFFF" class="flex items-center px-4 py-2 font-medium text-white bg-blue-900 rounded-md hover:bg-blue-800">CAUTA RUTE</a>
            </div>
        </div>
    </div>
</div>

<!-- Shortcut -->
<section class="usp-section">
    <div class="usp-container" style="max-width: 1200px; margin: 0 auto; padding: 20px;">
        <div class="usp-item">
            <div class="usp-icon-container">
                <img src="https://www.transfero.ro/wp-content/uploads/2017/07/centura.svg" alt="Scaune confortabile" class="usp-icon">
            </div>
            <div class="usp-content">
                <h2 class="usp-title">Scaune confortabile</h2>
                <div class="usp-text">Scaune confortabile și spațiu generos pentru picioare</div>
                <a href="#" class="usp-link" style="color: #FFFFFF">Afla mai multe</a>
            </div>
        </div>

        <div class="usp-item">
            <div class="usp-icon-container">
                <img src="https://www.transfero.ro/wp-content/uploads/2017/08/wifi.svg" alt="Wi-Fi 4G" class="usp-icon">
            </div>
            <div class="usp-content">
                <h2 class="usp-title">Wi-Fi 4G</h2>
                <div class="usp-text">Navighează pe internet la viteza 4G. Prize USB disponibile</div>
                <a href="#" class="usp-link" style="color: #FFFFFF">Afla mai multe</a>
            </div>
        </div>

        <div class="usp-item">
            <div class="usp-icon-container">
                <img src="https://www.transfero.ro/wp-content/uploads/2017/07/bus.svg" alt="La timp" class="usp-icon">
            </div>
            <div class="usp-content">
                <h2 class="usp-title">La timp</h2>
                <div class="usp-text">Întotdeauna la timp la destinație</div>
                <a href="#" class="usp-link" style="color: #FFFFFF">Afla mai multe</a>
            </div>
        </div>

        <div class="usp-item">
            <div class="usp-icon-container">
                <img src="https://www.transfero.ro/wp-content/uploads/2017/07/bagaj.svg" alt="Spatiu bagaje" class="usp-icon">
            </div>
            <div class="usp-content">
                <h2 class="usp-title">Spațiu pentru bagaje</h2>
                <div class="usp-text">Autocarele noastre oferă suficient spațiu pentru bagaje</div>
                <a href="#" class="usp-link" style="color: #FFFFFF">Afla mai multe</a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="w-full px-6 py-10">
    <div class="services-container">
        <div class="services-grid">
            <!-- Service 1: Grafice Circulatie -->
            <div class="service-card">
                <img src="https://gegi.ro/wp-content/uploads/2024/09/grafics.jpeg" alt="Trasee si Grafice" class="w-full h-72 object-cover rounded-md">
                <div class="service-card-overlay">
                    <h4 class="text-2xl font-bold mb-4">Grafice Circulatie</h4>
                    <p class="text-base mb-6">
                        Informeaza-te in legatura cu programul curselor.
                    </p>
                    <a href="<?php echo get_permalink(get_page_by_title('Grafice')); ?>" style="color: #FFFFFF" class="afla-mai-multe">Afla mai multe</a>
                </div>
            </div>

            <!-- Service 2: Inchiriere Autocare -->
            <div class="service-card">
                <img src="https://gegi.ro/wp-content/uploads/2024/09/rent-autocar.jpeg" alt="Inchiriere Autocare" class="w-full h-72 object-cover rounded-md">
                <div class="service-card-overlay">
                    <h4 class="text-2xl font-bold mb-4">Inchiriere Autocare</h4>
                    <p class="text-base mb-6">
                        Oferim solutii de transport personalizate in functie de nevoile tale.
                    </p>
                    <a href="https://www.transfero.ro/inchiriere-autocare/" style="color: #FFFFFF" class="afla-mai-multe">Afla mai multe</a>
                </div>
            </div>

            <!-- Service 3: Transfer Aeroport -->
            <div class="service-card">
                <img src="https://gegi.ro/wp-content/uploads/2024/09/trs.jpeg" alt="Transfer Aeroport" class="w-full h-72 object-cover rounded-md">
                <div class="service-card-overlay">
                    <h4 class="text-2xl font-bold mb-4">Transfer Aeroport</h4>
                    <p class="text-base mb-6">
                        Conexiune rapida cu Aeroportul International Henri Coanda – Otopeni.
                    </p>
                    <a href="http://transfero.ro" style="color: #FFFFFF" class="afla-mai-multe">Afla mai multe</a>
                </div>
            </div>

            <!-- Service 4: Inchirieri Auto -->
            <div class="service-card">
                <img src="https://gegi.ro/wp-content/uploads/2024/09/rent-car.jpeg" alt="Inchirieri Auto" class="w-full h-72 object-cover rounded-md">
                <div class="service-card-overlay">
                    <h4 class="text-2xl font-bold mb-4">Inchirieri Auto</h4>
                    <p class="text-base mb-6">
                        Inchiriaza masina la orice ora din zi sau din noapte, la preturi avantajoase.
                    </p>
                    <a href="https://www.transfero.ro/rent-a-car-inchirieri-auto/" style="color: #FFFFFF" class="afla-mai-multe">Afla mai multe</a>
                </div>
            </div>

            <!-- Service 5: Locatie -->
            <div class="service-card map-container">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2779.543555375312!2d27.430955730552878!3d45.840419774185534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b428549b2b8cd9%3A0xc61a90f26a75c4b9!2sAutogara%20GEGI!5e0!3m2!1sro!2sro!4v1721727454376!5m2!1sro!2sro" 
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
                    <a href="https://www.google.com/maps/place/Autogara+GEGI/@45.8404198,27.4309557,17z/data=!4m6!3m5!1s0x40b428549b2b8cd9:0xc61a90f26a75c4b9!8m2!3d45.8404198!4d27.4309557!16s%2Fg%2F11b6v4f98x" style="color: #FFFFFF" class="afla-mai-multe">Afla mai multe</a>
                </div>
            </div>

            <!-- Service 6: Cazare -->
            <div class="service-card">
                <img src="https://gegi.ro/wp-content/uploads/2024/09/cazare.jpeg" alt="Cazare" class="w-full h-72 object-cover rounded-md">
                <div class="service-card-overlay">
                    <h4 class="text-2xl font-bold mb-4">Cazare</h4>
                    <p class="text-base mb-6">
                        Descopera optiunile noastre de cazare confortabile si accesibile, adaptate nevoilor tale.
                    </p>
                    <a href="https://www.facebook.com/hotelkristalltecuci/?locale=ro_RO" style="color: #FFFFFF" class="afla-mai-multe">Afla mai multe</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
