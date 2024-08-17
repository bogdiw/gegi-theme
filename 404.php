<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gegi
 */

get_header();
?>

<style>
	h1 {
	font-family: 'Oswald', sans-serif;
	font-size: 3rem;
	line-height: 1.2;
	text-align: center;
	background: -webkit-linear-gradient(left, #4A90E2, #F5A623);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
	}
</style>

<div class="min-h-screen flex items-center justify-center text-center">
  <div class="relative z-10 flex flex-col items-center justify-center p-6 bg-white rounded-lg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/notfound.png" alt="404" class="w-32 h-32 mb-5"/>
    <h1 class="text-3xl md:text-4xl text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-rose-500 font-oswald mb-10">
      404 - Pagina cautata nu exista.
    </h1>
    <a class="text-base text-white px-8 py-2.5 transition-transform duration-500 bg-gradient-to-r from-indigo-500 to-rose-500 rounded-xl" style="color: #FFFFFF" href="<?php echo home_url(); ?>">
      Inapoi Acasa
    </a>
  </div>
</div>

<?php
get_footer();
?>
