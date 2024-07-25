<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    /* Stilizare pentru videoclipul din footer */
    #footer-video {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center 70%;
      z-index: -2;
    }

    #containerfooter {
      position: relative;
      width: 100%;
      z-index: 1;
    }

    .footer-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4);
      z-index: -1;
      display: none;
    }

    .footerclass {
      color: #ffffff;
      padding: 1rem;
      position: relative;
      z-index: 2;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .footercol1,
    .footercol2,
    .footercol3,
    .footercol4 {
      padding: 10px;
      flex: 1;
      text-shadow: 1px 1px 2px black;
    }

    .footercredits a {
      color: #FFFF00;
      text-shadow: 1px 1px 2px black;
    }

    /* Media Queries for Mobile Devices */
    @media (max-width: 913px) {
      .footer-overlay {
        display: block;
      }

      .grid {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .footercol1,
      .footercol2,
      .footercol3,
      .footercol4 {
        padding: 10px;
        width: 100%;
      }

      /* Schimbare ordine coloane pe ecranele mici */
      .footercol1 {
        order: 1;
      }
      
      .footercol2 {
        order: 2;
      }
      
      .footercol3 {
        order: 3;
      }
      
      .footercol4 {
        order: 4;
      }

      /* Specific pentru mutarea coloanei 4 sub coloana 1 */
      .footercol4 {
        order: 5;
      }

      .footercol1 {
        order: 1;
      }

      .footercol4 {
        order: 2;
      }

      .footercol2 {
        order: 3;
      }

      .footercol3 {
        order: 4;
      }
    }

    .footercol1 .textwidget,
    .footercol2 .textwidget,
    .footercol3 .textwidget,
    .footercol4 .textwidget {
      padding-top: 0;
    }

    .footercredits {
      margin-top: 120px;
      text-shadow: 1px 1px 2px black;
    }

    .footerclass p, .footerclass a {
      text-shadow: 1px 1px 2px black;
    }
  </style>
</head>
<body>

  <?php wp_footer(); ?>

  <footer id="containerfooter" class="footerclass" role="contentinfo">
    <!-- Videoclipul de fundal -->
    <video autoplay loop muted playsinline id="footer-video">
      <source src="<?php echo get_template_directory_uri(); ?>/images/bus.mov" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    
    <div class="footer-overlay"></div>
    
    <div class="container mx-auto py-6">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Column 1 -->
        <div class="footercol1">
          <div class="widget-first footer-widget">
            <aside class="widget widget_text">
              <div class="textwidget">
                RO 805300 Tecuci<br>
                Transilvaniei, 7<br>
                <a style="color: #FFFFFF" href="tel:+40752105000">Tel: +4 0752 105 000</a><br>
                <a style="color: #FFFFFF" href="mailto:transport@gegi.ro">E-mail: transport@gegi.ro</a>
              </div>
            </aside>
          </div>
        </div>

        <!-- Column 2 -->
        <div class="footercol2">
          <div class="widget-first footer-widget">
            <aside class="widget widget_text">
              <div class="textwidget">
                <!-- Additional content can be added here -->
              </div>
            </aside>
          </div>
        </div>

        <!-- Column 3 -->
        <div class="footercol3">
          <div class="widget-first footer-widget">
            <aside class="widget widget_text">
              <div class="textwidget">
                <!-- Additional content can be added here -->
              </div>
            </aside>
          </div>
        </div>

        <!-- Column 4 -->
        <div class="footercol4">
          <div class="widget-first footer-widget">
            <aside class="widget widget_text">
              <div class="textwidget">
                GEGI SRL<br>
                Cod fiscal RO6466990<br>
                Nr.Reg.Com. J17/2796/1994
              </div>
            </aside>
          </div>
        </div>

      </div>

      <!-- Footer Credits -->
      <div class="footercredits text-center mt-8">
        <p>&copy; 2024 Gegi Turism - Theme developed by <a href="https://linkedin.com/in/bogdan-gabriel-fratiman" target="_blank">Frățiman Bogdan-Gabriel</a></p>
      </div>
    </div>
  </footer>

</body>
</html>
