<?php
/* Template Name: Pagina cursa (single) */
?>

<?php get_header(); ?>

<style>
    #airport-info, .departure-times {
        position: relative;
    }

    .airport-display, .departure-times {
        text-align: center;
        margin-bottom: 20px;
    }

    #panneau {
        display: inline-block;
        margin: 20px;
        padding: 20px;
        border-radius: 2px;
        background: linear-gradient(rgb(69,69,69), rgb(32,32,32));
        box-shadow: 0 0 5px rgba(0,0,0,0.5);
    }

    #panneau p.station-title {
        font-size: 24px;
        font-weight: bold;
    }

    #panneau p {
        margin: 10px 0;
        font-size: 18px;
        color: #eee;
    }

    #panneau .letter p {
        margin: 0;
        height: 70px;
        width: 50px;
        color: #eee;
        text-align: center;
        text-transform: uppercase;
        font-size: 40px;
        line-height: 75px;
        background: linear-gradient(to bottom, #323232 0%, #3c3c3c 50%, #464646 51%, #4b4b4b 100%);
        box-shadow: 0 -1px 1px rgba(255,255,255,0.5);
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .departure-times {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
        background: linear-gradient(rgb(69,69,69), rgb(32,32,32));
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.5);
        margin-bottom: 60px;
    }

    .departure-times .column {
        width: 45%;
    }

    .departure-times .column h3 {
        font-size: 24px;
        margin-bottom: 10px;
        color: #eee;
    }

    .departure-times .column .letter {
        margin: 5px 2px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 75px;
        border: 3px solid rgba(0,0,0,0.8);
        border-radius: 5px;
        box-shadow: 0 1px 0 rgba(255,255,255,0.15);
        background: linear-gradient(rgb(69,69,69), rgb(32,32,32));
    }

    .departure-times .column .letter p {
        font-size: 40px;
        color: #eee;
        height: 70px;
        width: 50px;
        text-align: center;
        line-height: 75px;
        background: linear-gradient(to bottom, #323232 0%, #3c3c3c 50%, #464646 51%, #4b4b4b 100%);
        box-shadow: 0 -1px 1px rgba(255,255,255,0.5);
        color: #eee;
    }

    @media (max-width: 1024px) {
        .departure-times {
            flex-direction: column; 
        }

        .departure-times .column {
            width: 100%;
            margin-bottom: 20px;
        }

        #panneau {
            padding: 10px;
            margin: 10px auto;
            width: 80%;
        }

        #panneau p {
            font-size: 14px;
        }

        #panneau .letter {
            width: 30px;
            height: 45px;
            margin: 4px 1px;
        }

        #panneau .letter p {
            font-size: 18px;
            height: 45px;
            line-height: 45px;
        }

        .departure-times .column h3 {
            font-size: 18px;
        }

        .departure-times .column .letter {
            width: 30px;
            height: 45px;
            margin: 4px 1px;
        }

        .departure-times .column .letter p {
            font-size: 18px;
            height: 45px;
            line-height: 45px;
        }

        .cursa-bottom .section-desc .title {
            font-size: 20px;
        }

        .cursa-bottom .section-desc .desc {
            font-size: 14px;
        }

        .cursa-bottom .servicii .inner-col .text {
            font-size: 12px;
        }

        .cursa-bottom .button {
            padding: 8px 16px;
            font-size: 14px;
        }
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

    #airport-info {
        padding-top: 36px;
    }

    .letter {
        display: inline-block;
        width: 30px;
        height: 45px;
        margin: 4px 1px;
        text-align: center;
        line-height: 45px;
        font-size: 18px;
        background: linear-gradient(to bottom, #323232 0%, #3c3c3c 50%, #464646 51%, #4b4b4b 100%);
    }

    .letter.space {
        display: none;
    }

    .time-entry {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .departure-times {
        margin-top: 20px;
        background: linear-gradient(rgb(69,69,69), rgb(32,32,32));
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.5);
        margin-bottom: 60px;
    }
</style>

<div id="airport-info">
    <div class="departure-times">
        <?php
        $stations = [
            ['title' => 'Plecare din:', 'station' => get_field('statie_1'), 'times' => 'ore_plecare_1', 'time_field' => 'ora_plecare_1'],
            ['title' => 'Plecare din:', 'station' => get_field('statie_2'), 'times' => 'ore_plecare_2', 'time_field' => 'ora_plecare_2']
        ];
        
        foreach ($stations as $index => $station):
            $station_class = $index === 1 ? 'second-station' : 'first-station'; // Adăugați clase pentru fiecare stație
        ?>
        <div class="column <?php echo $station_class; ?>">
            <div id="panneau">
                <p class="station-title"><strong><?php echo $station['title']; ?></strong></p>
                <?php 
                $station_name = $station['station'];
                foreach (str_split($station_name) as $letter): ?>
                    <div class="letter station-name" <?php echo $letter === ' ' ? 'space' : ''; ?>">
                        <p style="color: #FFD700"><?php echo $letter; ?></p>
                    </div>
                <?php endforeach; ?>
            
                <?php if (have_rows($station['times'])): ?>
                    <?php while (have_rows($station['times'])): the_row(); ?>
                        <?php $time = get_sub_field($station['time_field']); ?>
                        <div class="time-entry">
                            <?php 
                            foreach (str_split($time) as $letter): ?>
                                <div class="letter <?php echo $letter === ' ' ? 'space' : ''; ?>">
                                    <p><?php echo $letter; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
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
                <a href="<?php echo get_permalink(get_page_by_title('Grafice')); ?>" class="button "><?php _e('GRAFICE')?></a>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const letters = document.querySelectorAll('#panneau .letter');
    const station1HasSpaces = document.querySelectorAll('.first-station #panneau .letter.space').length > 0;

    letters.forEach((letter, index) => {
        if (letter.textContent.trim() === '') {
            // Ascunde spațiul
            letter.style.display = 'none';

            // Căutăm elementul precedent pentru a crea un salt de linie
            const previousElement = letter.previousElementSibling;

            // Dacă elementul precedent există și nu este spațiu, adăugăm un salt de linie
            if (previousElement && previousElement.textContent.trim() !== '') {
                // Adăugăm un element de tip <br> după spațiu pentru a începe pe o linie nouă
                const br = document.createElement('br');
                letter.parentNode.insertBefore(br, letter.nextSibling);
            }
        }
    });

    // Dacă statia_1 conține spații, adăugăm un newline suplimentar dupa station_2
    if (station1HasSpaces) {
        const secondStation = document.querySelector('.second-station');
        const br = document.createElement('br');
        secondStation.parentNode.insertBefore(br, secondStation);
    }
});
</script>

<?php get_footer(); ?>