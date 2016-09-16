<!doctype html>
<html <?php language_attributes(); ?> ⚡>
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,minimal-ui">
  	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
  	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/touch-icon-iphone.png" />
  	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/touch-icon-ipad.png" />
  	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/touch-icon-iphone-retina.png" />
  	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/touch-icon-ipad-retina.png" />
    <?php get_template_part( 'style' ); ?>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
  </head>
  <body>
    <header role="banner" class="header">
       <a href="/" rel="home" class="logo">
         <strong><?php bloginfo('name'); ?></strong> / <?php bloginfo('description'); ?>
       </a>
       <nav class="nav" role="navigation">
         <ul class="nav-list">
           <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
         </ul>
      </nav>
    </header>

  	<main role="main" style="width: 760px;max-width: 100%;margin: auto;">
  	<?php if (have_posts()) : ?>
  	<?php while (have_posts()) : the_post(); ?>
  		<article>
  			<div class="home">
  					<h2 id="post-<?php the_ID(); ?>" style="margin:0px;">
  						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
  							<?php the_title(); ?><br />
  						</a>
  					</h2>
  	        <div class="summary">
      				<?php the_excerpt(); ?>
      				<div class="cta">
      					<a href="<?php the_permalink() ?>" style="color:#07C!important;text-decoration: underline;">
      						<strong>Read article</strong></a> / <span style="opacity:0.8"><?php the_time('F jS, Y') ?></span>
      				</div>
  	        </div>
  				</div>
  			</div>
				<?php endwhile; ?>

				<?php else : ?>
				<h2 class="txt--center">Nothing found</h2>
					<p class="txt--center">
						<?php _e("Sorry, but you are looking for something that isn't here."); ?><br />
						<a href="/">← Return home</a><br />

					</p>

				<?php endif; ?>
  				</div>
  			</div>
  		</article>
  	</main>
    <?php get_template_part( 'footer' ); ?>
  </body>
</html>
