<?php /* Template Name: Bus */
get_header(); ?>

<style>
/* Existing CSS styles */
.large-banner {
    position: relative;
    overflow: hidden;
}

.bg_img {
    width: 100%;
    height: auto;
}

.banner-info {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
}

.breadcrumbs {
    background: #f5f5f5;
    padding: 10px 0;
}

.bus {
    padding: 30px 0;
}

.bus_img {
    width: 100%;
    height: auto;
    margin-bottom: 20px;
}

.page-title {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.call-center {
    text-align: right;
}

.call-center .icon {
    display: inline-block;
    margin-right: 10px;
}

.buses .col-bus {
    margin-bottom: 30px;
}

.bus-row {
    display: flex;
    border: 1px solid #e1e1e1;
    padding: 20px;
    border-radius: 10px;
    background: #fff;
}

.bus-image {
    flex: 1;
    margin-right: 20px;
}

.car-details {
    flex: 2;
}

.seats-availability {
    flex: 1;
    text-align: center;
}

.seats-availability .button {
    display: block;
    margin-top: 20px;
    background: #0073e6;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    text-decoration: none;
    cursor: pointer;
}

.form-rent-bus-container {
    display: none;
    margin-top: 20px;
}

.bus-info-col {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
}

.container-form-bus {
    margin-top: 20px;
}

.homepage-info-text {
    text-align: center;
    margin-top: 40px;
}

/* New CSS styles */
.form-rent-bus-container.active {
    display: block;
}
</style>

<!-- Hero Section -->
<div class="relative bg-cover bg-center h-96" style="background-image: url('<?php $image = get_field('imagine_jos_bus'); if( $image ) { echo wp_get_attachment_image_url( $image, 'full' ); } ?>');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-6xl font-semibold"><?php _e( 'Inchiriere autocare' ) ?></h1>
            <p class="font-light text-3xl mt-5"><?php the_field( 'descriere_hero_bus' ); ?></p>
            <div class="flex justify-center mt-10">
                <a href="#buses" style="color: #FFFFFF" class="flex items-center px-4 py-2 font-medium text-white bg-blue-900 rounded-md hover:bg-blue-800">VEZI OFERTA</a>
            </div>
        </div>
    </div>
</div>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php get_template_part( 'layouts/breadcrumbs' ) ?>
            </div>
        </div>
    </div>
</div>

<div class="bus" id="buses">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <h1 class="page-title"><?php _e( 'Inchiriere autocare' ) ?></h1>
            </div>
            <div class="col-sm-5">
                <div class="call-center">
                    <span class="icon"><svg width="19" height="19" viewBox="0 0 19 19"><use xlink:href="#phone-icon"></use></svg></span>
                    <?php _e( 'Call center inchirieri' ) ?>
                    <a class="call" href="tel:<?php echo preg_replace( '/\s+/', '', get_field( 'telefon_call_center_autocare', 'option' ) ); ?>"><?php the_field( 'telefon_call_center_autocare', 'option' ) ?></a>
                    <a class="call" href="mailto:<?php echo get_field( 'email_rezervari_autocare', 'option' ); ?>"><?php the_field( 'email_rezervari_autocare', 'option' ) ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="buses">
        <div class="container">
            <?php
            $args = array(
                'post_type'      => 'bus',
                'posts_per_page' => - 1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) : ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="col-bus">
                        <div class="bus-row">
                            <div class="bus-image">
                                <a class="gallery-link first-picture" href="<?php the_field( 'bus_imagine' ) ?>">
                                    <img src="<?php the_field( 'bus_imagine' ) ?>" alt="" class="gallery-link-mg">
                                </a>
                                <?php
                                $images = get_field( 'gelerie_bus', get_the_ID() );
                                if ( $images ): ?>
                                    <?php foreach ( $images as $image ): ?>
                                        <a class="gallery-link" href="<?php echo $image['url']; ?>">
                                            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
                                        </a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="car-details">
                                <h2 class="title"><?php echo get_the_title() ?></h2>
                                <span class="options"><?php _e('Dotari interioare')?></span>
                                <ul class="options-list">
                                    <?php if ( have_rows( 'dotari_interioare' ) ):
                                        while ( have_rows( 'dotari_interioare' ) ) : the_row(); ?>
                                            <li><?php the_sub_field( 'dotare' ); ?></li>
                                        <?php endwhile; endif; ?>
                                </ul>
                            </div>
                            <div class="seats-availability">
                                <div class="seats">
                                    <span><strong><?php the_field( 'nr_locuri' ) ?></strong> <?php _e('locuri')?></span>
                                </div>
                                <div class="availability"><?php _e('Disponibilitate')?>: <?php the_field( 'disponibilitate' ) ?> <?php if( get_field('disponibilitate') == 1) {echo __('masina');}else{ echo __('masini');}?></div>
                                <a href="#" class="button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" data-bus="<?php echo 'bus-' . get_the_ID() ?>"><span class="close">Solicita oferta</span></a>
                            </div>
                        </div>
                        <div class="form-rent-bus-container" id="<?php echo 'bus-' . get_the_ID() ?>">
                            <div class="col-sm-12 col-md-4 bus-info-col">
                                <div class="bus-info">
                                    <div class="bus-info-title"><?php the_field( 'marca_bus' ) ?></div>
                                    <div class="bus-model"><?php _e('Model')?> : <?php the_field( 'model_bus' ) ?></div>
                                    <div class="availability">
                                        <?php _e('Disponibilitate')?>: <?php the_field( 'disponibilitate' ) ?> <?php if( get_field('disponibilitate') == 1) {echo __('masina');}else{ echo __('masini');}?>
                                    </div>
                                    <div class="seats">
                                        <span><?php _e('Numar locuri')?>: <?php the_field( 'nr_locuri' ) ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="container-form-bus">
                                <?php if(get_locale() == 'ro_RO'): ?>
                                    <?php echo do_shortcode( '[contact-form-7 id="1306" title="Formular autocare"]' ); ?>
                                <?php else: ?>
                                    <?php echo do_shortcode( '[contact-form-7 id="1628" title="Bus Rent Form"]' ); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif;
            wp_reset_postdata(); ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 homepage-info-text">
                <?php the_field( 'text_informativ_pagina_principala' ) ?>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var buttons = document.querySelectorAll('.seats-availability .button');
    buttons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var busId = button.getAttribute('data-bus');
            var formContainer = document.getElementById(busId);
            
            // Toggle class 'active' on form container
            formContainer.classList.toggle('active');
            
            // Update button text based on active state
            var buttonText = button.querySelector('.close');
            if (formContainer.classList.contains('active')) {
                buttonText.textContent = 'Inchide solicitarea';
            } else {
                buttonText.textContent = 'Solicita oferta';
            }
        });
    });
});
</script>

<?php get_footer(); ?>
