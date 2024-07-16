<?php
/* Template Name:  Pagina cursa (single) */
?>

<style>
    .cursa-section {
    padding: 40px 0;
    }

    .cursa-section .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    #breadcrumbs {
        margin-bottom: 20px;
        font-size: 14px;
    }

    #breadcrumbs a {
        color: #337ab7;
        text-decoration: none;
    }

    #breadcrumbs .breadcrumb_last {
        font-weight: bold;
    }

    .info {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .info .title {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .info .info-btn {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .info .info-cursa h2 {
        margin: 0;
        font-size: 18px;
    }

    .info .info-cursa div {
        margin-top: 10px;
    }

    .info .info-cursa strong {
        font-weight: bold;
    }

    .info .info-cursa span {
        color: #555;
    }

    .info .button {
        background-color: #337ab7;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .info .button:hover {
        background-color: #285e8e;
    }

    .desc {
        margin-top: 20px;
    }

    .curse_header {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    #curse.loading {
        text-align: center;
        padding: 20px;
        font-size: 16px;
    }

    .bilet {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #ddd;
        margin-bottom: 10px;
    }

    .ore-cursa span,
    .cursa span,
    .time-operator span,
    .pret span {
        display: block;
        margin: 5px 0;
    }

    .pret .price {
        font-size: 18px;
        color: #d9534f;
    }

    .pret .button-container .button {
        display: inline-block;
        padding: 5px 10px;
        font-size: 14px;
    }

    .cursa-bottom {
        background-color: #f1f1f1;
        padding: 40px 0;
        margin-top: 40px;
        position: relative;
    }

    .cursa-bottom .bg_img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.3;
    }

    .cursa-bottom .container {
        position: relative;
        z-index: 1;
    }

    .cursa-bottom .section-desc .title {
        font-size: 28px;
        margin-bottom: 20px;
    }

    .cursa-bottom .section-desc .desc {
        font-size: 16px;
        margin-bottom: 40px;
    }

    .cursa-bottom .servicii .inner-col {
        text-align: center;
        margin-bottom: 20px;
    }

    .cursa-bottom .servicii .inner-col .image {
        margin-bottom: 10px;
    }

    .cursa-bottom .servicii .inner-col .text {
        font-size: 14px;
        color: #555;
    }

    .cursa-bottom .button {
        background-color: #337ab7;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .cursa-bottom .button:hover {
        background-color: #285e8e;
    }
</style>
<?php get_header(); ?>
<div class="cursa-section">
    <div class="container">
        <div class="info">
            <h1 class="title"><?php _e('Transfer aeroport')?>&nbsp;<?php echo get_the_title()?></h1>
            <div class="info-btn">
                <div class="info-cursa">
                    <h2><?php _e('Plecare')?>: <?php echo get_field('statie_plecare')?> </h2>
                    <h2><?php _e('Sosire')?>: <?php echo get_field('statie_sosire')?></h2>
                    <div><strong><?php _e('Durata')?>:</strong> <span><?php the_field('durata_calatoriei')?></span></div>
                </div>

            </div>
            <div class="desc">
                <?php the_field('info_cursa')?>
            </div>

        </div>
    </div>
</div>


<div class="cursa-bottom">
    <?php $image = get_field('background_servicii_pag_curse','option'); if( $image ) { echo wp_get_attachment_image( $image, 'large','',array('class'=>'bg_img') ); } ?>
    <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-desc">
                        <div class="title"><?php the_field('titlu_servicii_pag_curse','option')?></div>
                        <div class="desc"><?php the_field('descriere_servicii_pag_curse','option')?></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center ">
                    <a href="<?php echo get_permalink(get_page_by_title('Curse')); ?>" class="button "><?php _e('CURSE')?></a>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>


