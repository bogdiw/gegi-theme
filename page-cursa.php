<?php
/* Template Name:  Pagina cursa (single) */
?>
<?php get_header(); ?>
<div class="cursa-section">
    <div class="container">
        <p id="breadcrumbs">
          <span xmlns:v="http://rdf.data-vocabulary.org/#">
            <span typeof="v:Breadcrumb">
              <a href="<?php $url= "";  if(get_locale()=='en_US'){ $url = '/en';}; echo site_url().$url?>" rel="v:url" property="v:title"><?php _e('Transfer Aeroport','yass')?></a> >
                <span rel="v:child" typeof="v:Breadcrumb"><a href="<?php $url= "/curse";  if(get_locale()=='en_US'){ $url = '/en/schedules';}; echo site_url().$url?>" rel="v:url" property="v:title"><?php _e('Curse','yass')?></a> >
                  <span class="breadcrumb_last"><?php echo get_the_title()?></span>
                </span>
              </span>
            </span>
        </p>
        <div class="info">
            <h1 class="title"><?php _e('Transfer aeroport','yass')?>&nbsp;<?php echo get_the_title()?></h1>
            <div class="info-btn">
                <div class="info-cursa">
                    <h2><?php _e('Plecare','yass')?>: <?php echo get_field('statie_plecare')?> </h2>
                    <h2><?php _e('Sosire','yass')?>: <?php echo get_field('statie_sosire')?></h2>
                    <div><strong><?php _e('Durata','yass')?>:</strong> <span><?php the_field('durata_calatoriei')?></span></div>
                </div>
                <?php if( ! get_field('statie_plecare_rezerva') && ! get_field('statie_sosire_rezerva')): ?>
                    <a href="<?php echo site_url()?>/cauta-bilete/?oras_plecare=<?php echo get_field('statie_plecare')['value']?>&oras_destinatie=<?php echo get_field('statie_sosire')['value']?>&adulti=1&copii=0" class="button button-blue">rezerva</a>
                <?php endif; ?>

            </div>
            <div class="desc">
                <?php the_field('info_cursa')?>
            </div>


        </div>
        <?php if( get_field('statie_plecare_rezerva') && get_field('statie_sosire_rezerva')): ?>

            <?php $depDate = (new DateTime('+1 day', new DateTimeZone('Europe/Bucharest')))->format('Y-m-d'); ?>
            <div class="curse_header">
                <span><?php _e('Curse','yass') ?>: </span>
                <span><?php echo $depDate ?></span>
            </div>
            <div id="curse" class="bilete loading">


                <script>
                    jQuery(document).ready(function($) {
                        var data = {
                            adulti: 1,
                            copii: 0,
                            dp: "<?php echo $depDate; ?>",
                            di: "",
                            dep: "<?php echo get_field('statie_plecare_rezerva'); ?>",
                            dest: "<?php echo get_field('statie_sosire_rezerva'); ?>",
                            action: "get_busses"
                        };
                        $.ajax("<?php echo admin_url( 'admin-ajax.php' ); ?>", {
                            data: data,
                            type: 'post',
                            dataType: 'json',
                            cache: false
                        }).done(function(data) {
                            // console.log(data.d);
                            var rows = '';
                            if(data){
                                var curse = data.d,
                                    countTrips = curse.length,
                                    price = {oneway: 0, roundtrip: 0, hasRoundPrice: false},
                                    rows = '';
                                for (var i = 0; i < countTrips; i++) {


                                    var duratacalatoriei = 'Durata Calatoriei:',
                                        rezervaBtn = 'Rezerva',
                                        twow = 'Tur-Retur';

                                    if ($('body').hasClass('en_US')) {
                                        duratacalatoriei = 'Travel time:';
                                        rezervaBtn = 'Book';
                                        twow = 'Round trip';

                                    }
                                    var nr_segment = curse[i]['segments'].length;
                                    console.log(nr_segment);
                                    var hasSegments = 'segments' in curse[i] && curse[i]['segments'] !== null && nr_segment > 1;
                                    var firstStation =  curse[i]['segments'][0]['departure']['station']['city'];
                                    var lastStation =   curse[i]['segments'][nr_segment-1]['arrival']['station']['city'];
                                    var cursaNume = '<span>' + firstStation + '</span><span>' + lastStation + '</span>';
									
									if(curse[i]['company']['name'] == "RBT Turistic Line" && firstStation == "Buzau") {
										
									}
									else {
                                    rows += '<div class="bilet">';
                                    rows += '<div class="ore-cursa"><span><i>' + curse[i]['oraplecare'] + '</i></span><span><i>' + curse[i]['orasosire'] + '</i></span></div>';
                                    if (hasSegments) {
                                        cursaNume = '<span>' + firstStation + '</span>';
                                        rows += '<div class="cursa"><span>' + firstStation + '</span>';
                                        var tripSegments = curse[i]['segments'];
                                        for (var tripSegmentIndex in tripSegments) {
                                            var arrivalCity = tripSegments[tripSegmentIndex]['arrival']['station']['city'];
                                            if (arrivalCity !== lastStation) {
                                                cursaNume += '<span>' + arrivalCity + '</span>';
                                                rows += '<span>' + arrivalCity + '</span>';
                                            }
                                        }
                                        cursaNume += '<span>' + lastStation + '</span>';
                                        rows += '<span>' + lastStation + '</span></div>';
                                    } else {
                                        rows += '<div class="cursa"><span>' + firstStation + '</span><span>' + lastStation + '</span></div>';
                                    }
                                    rows += '<div class="time-operator">';

                                    var typeOfTrip = 'Direct';
                                    if (hasSegments) {
                                        var connections = curse[i]['segments'].length - 1;
                                        var connectionWord = connections === 1 ? ' Conexiune' : ' Conexiuni';
                                        if ($('body').hasClass('en_US')) {
                                            connectionWord = connections === 1 ? ' Connection' : ' Connections';
                                        }
                                        typeOfTrip = connections + connectionWord;
                                    }
                                    rows += '<div class="time"><span>' + duratacalatoriei + '</span>' + curse[i]['durata'] + '<span class="conexiune">' + typeOfTrip + '</span>' + '</div>';
                                    rows += '</div>';
                                    rows += '<div class="pret">';
                                    rows += '<div class="operator"><span class="icon ' + curse[i]['company']['name'].toLowerCase() + ' ">' + curse[i]['company']['name'] + '</span></div>';
                                    rows += '<span class="price d-price">'+ parseFloat(curse[i]['tickets']['adulti']['oneway']['pret_ron'])+' lei</span>';
                                    rows += '<span class="button-container">';
                                    <?php
                                    $url ='/cauta-bilete';
                                    if(get_locale() =='en_US'){$url ='/search-tickets';}
                                    $detesearch = (new DateTime('+1 day', new DateTimeZone('Europe/Bucharest')))->format('d-m-Y'); ?>

                                    rows += '<label class="button"><a href="<?php echo site_url() . $url?>/?data_plecare=<?php echo $detesearch?>&oras_plecare=<?php  the_field('statie_plecare_rezerva')?>&oras_destinatie=<?php  the_field('statie_sosire_rezerva')?>&adulti=1&copii=0&d-trip='+curse[i]['id']+'">'+rezervaBtn+'</a></label>';
                                    rows += '</span>';
                                    rows += '</div>';
                                    rows += '</div>';
									}

                                }
                                if(rows){
                                    jQuery('#curse').removeClass('loading').html(rows);
                                }

                            }
                        });
                    });
                </script>
            </div>

        <?php endif; ?>
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
            <div class="row servicii circle" >
                <?php if( have_rows('servicii', 'option') ):
                    while ( have_rows('servicii','option') ) : the_row(); ?>

                        <div class="col-sm-6 col-md-3">
                            <div class="inner-col">
                                <div class="image"><?php $image = get_sub_field('image'); if( $image ) { echo wp_get_attachment_image( $image, 'full' ); } ?></div>
                                <div class="text"><?php the_sub_field('info')  ?></div>
                            </div>
                        </div>
                    <?php  endwhile; endif; ?>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center ">
                    <a href="<?php the_field('quick_link','option')?>" class="button "><?php _e('CURSE', 'yass')?></a>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>


