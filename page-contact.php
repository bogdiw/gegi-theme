<?php
/* Template Name: Contact */
?>
<?php get_header(); ?>
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto p-4 md:p-16 xl:p-20">
        <div class="lg:w-2/3 space-y-5 text-center mx-auto">
            <h1 class="text-gray-800 uppercase tracking-widest font-medium text-4xl">
                Date de contact
            </h1>
            <div class="h-0.5 bg-red-500 w-14 mx-auto"></div>
            <p class="text-gray-600 text-base leading-6">
                Pentru mai multe detalii despre serviciile Gegi sau eventuale reclamatii, folositi informatiile si formularul de mai jos:
            </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-16">
            <div>
                <address>
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">
                            GEGI SRL
                        </h2>
                        <p class="text-gray-500 text-sm leading-6">
                            Strada Transilvaniei nr.7
                            <br>
                            Autogara GEGI
                            <br>
                            Tecuci, Romania
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">
                            Informatii miscare
                        </h2>
                        <a href="tel:0236820031" class="text-gray-500 text-sm leading-6 hover:text-gray-800">
                            0236 820 031
                        </a>
                        <br>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">
                            Telefon Tecuci
                        </h2>
                        <a href="tel:+40752105000" class="text-gray-500 text-sm leading-6 hover:text-gray-800">
                            +40 752 105 000
                        </a>
                        <br>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">
                            Telefon Barlad
                        </h2>
                        <a href="tel:+40746958888" class="text-gray-500 text-sm leading-6 hover:text-gray-800">
                            +40 746 958 888
                        </a>
                        <br>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">
                            Telefon Galati
                        </h2>
                        <a href="tel:+40729288544" class="text-gray-500 text-sm leading-6 hover:text-gray-800">
                            +40 729 288 544
                        </a>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">
                            Email
                        </h2>
                        <a href="mailto:autogara@gegi.ro" class="text-gray-500 text-sm leading-6 hover:text-gray-800">
                            autogara@gegi.ro
                        </a>
                </address>
            </div>
            <div class="lg:col-span-2">
                <div class="contact-form bg-white p-8 rounded-lg shadow-lg">
                    <?php echo do_shortcode('[contact-form-7 id="b0252b1" title="Contact"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
