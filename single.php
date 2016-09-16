<!doctype html>
<html <?php language_attributes(); ?> ⚡>
<head>
	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
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
  					<h2 id="post-<?php the_ID(); ?>">
  							<?php the_title(); ?><br />
  					</h2>
						<?php the_content('Read the rest of this entry &raquo;'); ?>
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
  	<?php get_template_part( 'footer' ); ?>
	</main>

  </body>
</html>
