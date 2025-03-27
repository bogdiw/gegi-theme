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

    #containerfooter {
      position: relative;
      width: 100%;
      height: 400px;
      z-index: 1;
    }

    #footer-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center 65%;
      z-index: -2;
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
      color: #000000;
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
      text-shadow: 1px 1px 2px white;
      color: #000000;
      display: flex;
      align-items: flex-start;
    }

    .footercol1, .footercol4 {
      flex-basis: 20%;
      padding-top: 20px;
    }

    .footercol2, .footercol3 {
      flex-basis: 30%;
    }

    .footercredits a {
      color: #FFFF00;
      text-shadow: 1px 1px 2px white;
    }

    .footercredits {
      position: relative;
      text-shadow: 1px 1px 2px white;
      margin-top: 20px;
    }

    @media (min-width: 914px) {
      .footercredits {
        top: 185px;
      }
    }

    @media (max-width: 913px) {
      .footer-overlay {
        display: none;
      }

      .grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: flex-start;
        padding: 0 10px;
        box-sizing: border-box;
      }

      .footercol1,
      .footercol2,
      .footercol3,
      .footercol4 {
        padding: 10px;
        width: calc(50% - 20px);
        box-sizing: border-box;
        margin: 10px 0;
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

      .footercredits {
        top: 0px;
      }
    }

    .footercol1 .textwidget,
    .footercol2 .textwidget,
    .footercol3 .textwidget,
    .footercol4 .textwidget {
      padding-top: 0;
      color: #000000;
      text-shadow: 1px 1px 2px white;
    }

    .footercredits {
      margin-top: 40px;
    }

    .footerclass p, .footerclass a {
      color: #000000;
      text-shadow: 1px 1px 2px white;
    }

  </style>
</head>
<body>

  <?php wp_footer(); ?>

  <footer id="containerfooter" class="footerclass" role="contentinfo">
    <!-- Imaginea de fundal -->
    <img src="https://gegi.ro/wp-content/uploads/2024/09/footer.jpg" id="footer-image" alt="Footer Background Image">
    
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
                <a href="tel:0236 820 031">Tel: 0236 820 031</a><br>
                <a href="mailto:autogara@gegi.ro">E-mail: autogara@gegi.ro</a>
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
      <div class="footercredits text-center">
        <p>&copy; 2024 Gegi Turism - Theme developed by <a href="https://linkedin.com/in/bogdan-gabriel-fratiman" target="_blank">Frățiman Bogdan-Gabriel</a></p>
      </div>
    </div>
  </footer>
	
	<!-- Start cookieyes banner -->
	<script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/1b08b72758d18f92b40cda83/script.js"></script>
	<!-- End cookieyes banner -->
	
</body>
</html>
