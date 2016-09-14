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

   <style amp-custom>
   body {
    width: 100%;
    min-width: 980px;
    line-height: 1.6;
    background-color: #fff;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-size: 12px;
    font-size: 1.2em;
    color: #333;
    text-align: left;
    letter-spacing: 0.5px;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
   }
   h2 {
    font-size: 24px;
   }

   h1, h2, h3, h4, h5 {
        font-weight: 700;
        color: #262626;
        font-size: 34px;
        margin: 15px 0;
    }
    h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, .h1 a, .h2 a, .h3 a, .h4 a, .h5 a, .h6 a, a {
      text-decoration: none;
      color: #262626;
      transition: color .4s;
    }
    h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover {
    color: #adadad;
}
   .txt--center {
     text-align: center;
   }
   .nav-list li {
      list-style: none;
      display: inline-block;
      margin-left: 1em;
      padding-left: 5px;
    }
    .nav-list a {

    }
    .header {
        padding: 1em;
        text-transform: lowercase;
        text-align: center;
        text-align: left;
        z-index: 2;
        left: 0;
        max-width: 1000px!important;
        margin:auto;
        width: 80%;
    }
    .header a {
        text-decoration: none;
        color: black;
    }
    @media (min-width: 26em) {
    .nav {
        float: right;
    }
    .nav-list li {
        text-align: left;
        float: left;
    }
    .logo {
        float: left;
        margin-bottom: 0;
    }
    }
    .nav-list {
        margin: 0;
        padding: 0;
        text-align: center;
    }

    .nav-list li {
        list-style: none;
        display: inline-block;
        margin-left: 1em;
    }

    .logo {
        display: block;
        margin-bottom: 0.5em;
        text-align: center;
    }
    .subscribe {
      font-weight: bold;
    }
    @media screen and (min-width: 1200px){
    .home {
      margin-bottom: 120px;
    }}
    .home {
      margin-bottom: 60px;
    }
    .home {
        background: url("<?php if ( has_post_thumbnail() ) {
     // get the image URL only
        $thumb_id=get_post_thumbnail_id();
        $thumb_url=wp_get_attachment_image_src($thumb_id, 'full', true);
        echo $thumb_url[0];
    }

    else {

    }

    ?>");
     background-size: cover;
     background-repeat: no-repeat;
     background-position: left center;

    }
    </style>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
  </head>
  <body>
    <header role="banner" class="header">
       <a href="/" rel="home" class="logo"><amp-img class="img-circle" src="https://twitter.com/jessethanley/profile_image?size=original" height="35px" style="box-shadow: 0 -1px 1px #d9d9d9;border-radius:100%"></a>
       <nav class="nav" role="navigation">
         <ul class="nav-list">
            <li>  <a href="/" class="subscribe">Home</a></li>
         </ul>
      </nav>
    </header>
    <br><br>
  	<main role="main" style="width: 760px;max-width: 100%;margin: auto;">
  	<?php if (have_posts()) : ?>
  	<?php while (have_posts()) : the_post(); ?>
  		<article>
  			<div class="home">
  					<h2 id="post-<?php the_ID(); ?>">
  						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
  							<?php the_title(); ?><br />
  						</a>
  					</h2>
  	        <div class="summary">
      				<?php the_excerpt(); ?>
      				<div class="cta">
      					<a href="<?php the_permalink() ?>" class="btn-blue" title="Jump to read the article">
      						<strong>Read article / <?php the_time('F jS, Y') ?></strong>
      					</a>
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
  </body>
</html>
