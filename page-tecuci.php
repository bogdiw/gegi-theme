<?php
/* Template Name: Tecuci */
?>
<?php get_header(); ?>

<style>
    .section-title .title-page {
        font-size: 48px;
        font-weight: bold;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .lista-curse {
        padding: 40px 0;
        display: flex;
        flex-wrap: wrap;
        gap: 0;
    }

    .lista-curse .col-cursa {
        width: 33.33%;
        padding: 0 10px;
        box-sizing: border-box;
        margin-bottom: 20px;
    }

    .lista-curse .col-cursa span {
        font-size: 18px;
        font-weight: 600;
        display: block;
        margin-bottom: 20px;
    }

    .item-cursa {
    margin: 15px 0;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    }

    .item-cursa a {
    color: #000;
    font-size: 16px;
    font-weight: 300;
    transition: all .3s ease-in-out;
    width: 100%;
    }

    .item-cursa a.btn:hover {
    background: #0e4a73;
    color: #fff;
    }

    .item-cursa a.btn {
        background: transparent;
        color: #0e4a73;
        border: 2px solid #0e4a73;
        height: auto;
        width: auto;
        padding: 8px 16px;
        border-radius: 5px;
        font-size: 12px;
        font-weight: bold;
        text-transform: uppercase;
        transition: all .3s ease-in-out;
        flex-shrink: 0;
        flex-grow: 0;
        margin-left: 5px;
    }

    .item-cursa a.btn:hover {
        background: #0e4a73;
        color: #fff;
    }

    @media (max-width: 1000px) {
        .lista-curse .col-cursa {
            width: 50%;
        }
    }

    @media (max-width: 700px) {
        .lista-curse .col-cursa {
            width: 100%;
            padding: 0;
            margin-bottom: 20px;
        }
    }

    .curse-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .lista-curse {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .col-cursa {
        padding: 0 15px;
    }

    button:focus, 
    a:focus {
        outline: none;
    }
</style>

<!-- Hero Section -->
<div class="relative h-96">
    <div class="bg-cover bg-center absolute inset-0" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/curse.jpg'); filter: brightness(1.3);"></div>
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-4xl lg:text-6xl font-semibold"><?php _e('De acasa la aeroport si retur.') ?></h1>
            <p class="font-light text-lg lg:text-3xl mt-5"><?php _e('Servicii de transport si transfer aeroport.') ?></p>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="curse-container">
    <div class="row">
    <div class="col-sm-12 text-center">
        <div class="section-title">
            <h1 class="title-page font-bold"><?php echo get_the_title() ?></h1>
            <a href="tel:+40752105000" class="subtitle">Telefon: +40 752 105 000</a>
        </div>
    </div>

    <div class="col-sm-12">
            <div class="lista-curse">
                <?php
                $args = array(
                    'post_type'      => 'page',
                    'posts_per_page' => -1,
                    'order'          => 'ASC',
                    'orderby'        => 'title',
                    'meta_query'     => array(
                        'relation' => 'OR',
                        array(
                            'key'     => 'statie_plecare',
                            'value'   => 'Tecuci',
                            'compare' => 'LIKE',
                        ),
                        array(
                            'key'     => 'statie_sosire',
                            'value'   => 'Tecuci',
                            'compare' => 'LIKE',
                        )
                    )
                );
                $parent = new WP_Query( $args );
                if ( $parent->have_posts() ) : ?>
                    <?php 
                    $first = '';
                    while ( $parent->have_posts() ) : $parent->the_post();
                        $currentletter = substr( get_the_title(), 0, 1 );
                        if ( $first != $currentletter ):
                            if ($first != '') echo '</div>'; // Close previous column div if not the first letter
                            $first = $currentletter; 
                            echo '<div class="col-cursa"><span>' . $first . '</span>';
                        endif;
                    ?>
                        <div class="item-cursa">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                            <a class="btn" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php _e('detalii')?></a>
                        </div>
                    <?php endwhile; ?>
                    </div> <!-- Close the last column div -->
                <?php endif;
                wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
