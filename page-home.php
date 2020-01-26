<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
      body{
        font-family: 'Inter'
      }

      .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6{
      	font-weight: 800;
      	padding: 0 0 20px 0;
      }
    </style>

    <title>This wordpress is much better!</title>
  </head>
  <body>
<div class="container">
	<hr>
	<p>This is Home page</p>
  <?php get_header();?>
	<hr>

	Page ID -> <?php the_ID();?> <br>
	Page Heading -> <?php the_title();?> <br> <br> <br>

	<div class="card" style="width: 900px">
		<div class="card-body">
	<?php
// TO SHOW THE PAGE CONTENTS
while (have_posts()): the_post();?> <!--Because the_content() works only inside a WP Loop -->
					<div class="entry-content-page">
					    <?php the_content();?> <!-- Page Content -->
					</div><!-- .entry-content-page -->

					<?php if (has_post_thumbnail()): ?>
					<a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>">
					<img class="w-100" src="<?php the_post_thumbnail_url();?>"/>
					</a>
					<?php endif;?>

    <?php
endwhile; //resetting the page loop
wp_reset_query(); //resetting the page query
?>
		</div>
	</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>