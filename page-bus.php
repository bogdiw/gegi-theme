<?php /* Template Name: Bus */
get_header(); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="magnific-popup.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="js/jquery.magnific-popup.js"></script>

<style>
.contact-info {
    text-align: center;
}

.contact-info a {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    max-width: 200px;
    text-align: center;
}

.rent {
    text-align: center;
}

</style>

<!-- Hero Section -->
<div class="relative bg-cover bg-center h-96" style="background-image: url('<?php $image = get_field('imagine_jos_bus'); if( $image ) { echo wp_get_attachment_image_url( $image, 'full' ); } ?>');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-4xl lg:text-6xl font-semibold"><?php _e( 'Autocare si microbuze premium.' ) ?></h1>
            <p class="font-light text-lg lg:text-3xl mt-5"><?php _e( 'Servicii de transport la standarde inalte de confort.' ) ?></p>
            <p class="font-light text-lg lg:text-3xl mt-5"><?php the_field( 'descriere_hero_bus' ); ?></p>
            <div class="flex justify-center mt-10">
                <a href="#buses" style="color: #FFFFFF" class="flex items-center px-4 py-2 font-medium text-white bg-blue-900 rounded-md hover:bg-blue-800">VEZI OFERTA</a>
            </div>
        </div>
    </div>
</div>

<div class="bus py-8">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-2/3" id="buses">
                <h1 class="text-4xl font-bold mb-8 rent">Inchiriere autocare</h1>
            </div>
            <div class="w-full lg:w-1/3">
                <div class="text-right contact-info">
                    <div class="mb-4 text-gray-800">Call center inchirieri:</div>
                    <a href="tel:+40742401000" class="text-blue-600 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 flex-shrink-0 mt-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                        <span class="inline-block align-middle">+4 0742 401 000</span>
                    </a>

                    <div class="mt-2">
                        <a href="mailto:rentabus@transfero.ro" class="text-blue-600">rentabus@transfero.ro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="buses container mx-auto py-8">
    <div class="grid grid-cols-1 gap-6">
        <?php
        $args = array(
            'post_type'      => 'bus',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post();
                $bus_id = get_the_ID();
                $first_image = get_field( 'bus_imagine' );
                $images = get_field( 'gelerie_bus', $bus_id );
        ?>
                <div class="shadow-md rounded p-6 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg bg-gray-100">
                    <div class="flex flex-wrap md:flex-nowrap">
                        <div class="w-full md:w-1/3 mb-4 md:mb-0">
                            <a href="<?php echo esc_url( $first_image ); ?>" class="block mb-4 popup-gallery-<?php echo $bus_id; ?>" title="<?php echo esc_attr( get_the_title() ); ?>">
                                <img src="<?php echo esc_url( $first_image ); ?>" alt="" class="w-full rounded-lg">
                            </a>
                        </div>
                        <div class="w-full md:w-2/3 text-center md:text-left md:pl-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h2 class="text-3xl font-bold mb-2"><?php echo get_the_title(); ?></h2>
                                </div>
                                <div class="text-right">
                                    <span class="block">
                                        <strong class="text-3xl"><?php the_field( 'nr_locuri' ); ?> <span class="text-xl"><?php _e('locuri')?></span></strong>
                                    </span>
                                    <div class="text-gray-600 mb-2"><?php _e('Disponibilitate')?>: <?php the_field( 'disponibilitate' ); ?> <?php echo (get_field('disponibilitate') == 1) ? __('masina') : __('masini'); ?></div>
                                </div>
                            </div>
                            <span class="text-gray-600 block mb-2 font-bold"><?php _e('Dotari interioare')?></span>
                            <div class="flex flex-wrap pl-4 mb-4">
                                <?php
                                if ( have_rows( 'dotari_interioare' ) ) :
                                    while ( have_rows( 'dotari_interioare' ) ) : the_row();
                                ?>
                                        <div class="w-full md:w-1/2 mb-2"><?php the_sub_field( 'dotare' ); ?></div>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                            <a href="#" class="button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full inline-block" data-bus="<?php echo 'bus-' . $bus_id; ?>"><span style="color: #FFFFFF" class="close">Solicita oferta</span></a>
                        </div>
                    </div>
                    <!-- Container pentru formularul de închiriere -->
                    <div class="form-rent-bus-container bg-gray-100 p-4 rounded-lg mb-4 hidden" id="<?php echo 'bus-' . $bus_id; ?>">
                        <div class="flex flex-wrap">
                            <div class="w-full">
                                <div class="container-form-bus bg-white p-4 rounded-lg mb-4">
                                    <?php echo do_shortcode( '[contact-form-7 id="1306" title="Formular autocare"]' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Magnific Popup pentru galerie imagini -->
                    <div class="hidden">
                        <?php foreach ( $images as $index => $image ) : ?>
                            <a href="<?php echo esc_url( $image['url'] ); ?>" class="popup-gallery-<?php echo $bus_id; ?>" title="<?php echo esc_attr( $image['alt'] ); ?>"></a>
                        <?php endforeach; ?>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>

<script>
jQuery(document).ready(function($) {
    // Initialize Magnific Popup for each bus gallery
    <?php
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post();
            $bus_id = get_the_ID();
    ?>
    $('.popup-gallery-<?php echo $bus_id; ?>').magnificPopup({
        type: 'image',
        gallery:{
            enabled:true
        }
    });
    <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>

    // Toggle form visibility
    $('.button').on('click', function(e) {
        e.preventDefault();
        var busId = $(this).data('bus');
        $('#' + busId).toggleClass('hidden');
        var buttonText = $(this).find('.close');
        if (buttonText.text() === 'Solicita oferta') {
            buttonText.text('Inchide solicitarea');
        } else {
            buttonText.text('Solicita oferta');
        }
    });
});

</script>

<?php get_footer(); ?>

