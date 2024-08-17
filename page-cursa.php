<?php
/* Template Name: Pagina cursa (single) */
?>

<?php get_header(); ?>

<style>
    #course-info {
        font-family: Arial, sans-serif;
        margin: 20px;
        margin-top: 100px;
    }

    .departure-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .departure-header h1 {
        font-size: 24px;
        color: #333;
    }

    .departure-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .legend-container {
        margin-bottom: 20px;
        padding: 15px;
        background-color: #fff;
        border: 1px solid #d3d3d3;
        border-radius: 10px;
        text-align: center;
    }

    .legend-container h3 {
        font-size: 18px;
        margin-bottom: 10px;
        color: #333;
    }

    .legend-container p {
        font-size: 16px;
        color: #666;
    }

    .departure-columns {
        display: flex;
        justify-content: space-between;
        margin-top: 40px;
    }

    .departure-column {
        width: 45%;
    }

    .departure-column h2 {
        text-align: center;
        font-size: 20px;
        margin-bottom: 20px;
    }

    .departure-item {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        padding: 15px;
        background-color: #fff;
        border-radius: 10px;
        border: 1px solid #d3d3d3;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
    }

    .departure-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .departure-item img {
        width: 50px;
        margin-right: 20px;
    }

    .departure-time {
        font-size: 20px;
        font-weight: 700;
    }

    .departure-station {
        font-size: 16px;
        color: #666;
    }

    .search-button {
        display: block;
        width: 100%;
        max-width: 200px;
        margin: 20px auto;
        padding: 10px 20px;
        font-size: 16px;
        color: #fff;
        background-color: #007BFF;
        border: none;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;
        text-decoration: none;
    }

    @media (max-width: 1024px) {
        .departure-columns {
            flex-direction: column;
        }

        .departure-column {
            width: 100%;
        }
    }

    .cauta-rute {
        display: block;
        width: 80%;
        max-width: 150px;
        margin: 20px auto;
        padding: 8px 16px;
        font-size: 14px;
        color: #ffffff;
        background-color: #c50102;
        border: none;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease;
        white-space: nowrap;
    }

    .departure-header h1 {
        font-size: 36px;
        color: #333;
        font-weight: bold;
    }
</style>

<div id="course-info">
    <div class="departure-header">
        <h1><?php echo get_field('statie_1'); ?> &#x2194; <?php echo get_field('statie_2'); ?></h1>
    </div>
    <div class="departure-container">
    <div class="legend-container">
        <h3>Legenda:</h3>
        <p><strong>* NU circula Sambata, Duminica si in sarbatorile legale</strong></p>
        <p><strong>^ Circula doar in perioada cursurilor scolare</strong></p>
    </div>
        <div class="departure-columns">
            <div class="departure-column">
                <h2><strong>Plecari din <?php echo get_field('statie_1'); ?></strong></h2>
                <?php if (have_rows('ore_plecare_1')): ?>
                    <?php while (have_rows('ore_plecare_1')): the_row(); ?>
                        <div class="departure-item">
                            <div>
                                <div class="departure-time"><?php echo get_sub_field('ora_plecare_1'); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="departure-column">
                <h2><strong>Plecari din <?php echo get_field('statie_2'); ?></strong></h2>
                <?php if (have_rows('ore_plecare_2')): ?>
                    <?php while (have_rows('ore_plecare_2')): the_row(); ?>
                        <div class="departure-item">
                            <div>
                                <div class="departure-time"><?php echo get_sub_field('ora_plecare_2'); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <a href="<?php echo get_permalink(get_page_by_title('Grafice')); ?>" style="color: #FFFFFF" class="cauta-rute flex px-4 py-2 rounded-md font-medium text-white hover:bg-red-800">
            CAUTA RUTE
        </a>
    </div>
</div>

<?php get_footer(); ?>
