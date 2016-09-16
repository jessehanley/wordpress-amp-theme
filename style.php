<style amp-custom>
    body {
   	width: 100%;
   	line-height: 1.6;
   	background: #f5efe6 !important;
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
   			font-size: 26px;
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
   	.summary {
   		font-size: 15px;
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
   			max-width: 760px!important;
   			margin:auto;
   			width: 80%;
        font-size: 1rem;
   	    margin-bottom: 30px;
   	}
   	.header a {
   		color: black;
   		text-decoration: none;
   	}
   	.nav-list a {
   		color: #999;
   		margin: 0 0 0 0px;
   	}
    .nav-list ul {
          -webkit-padding-start: 0px;
    }
    .nav-list li {
          margin-left: 0em;
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
   		margin-bottom: 30px;
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
   	.home {
   		background: white;
   		border: 1px solid #AAA;
   		-moz-box-shadow: 0 3px 10px #CCC;
   		-webkit-box-shadow: 0 3px 10px #CCC;
   		box-shadow: 0 3px 10px #CCC;
   		padding: 20px;
   	}
    .home:hover {
      box-shadow: 0 0 11px rgba(33,33,33,0.5);
    }
.footer {
    opacity: 0.8;
    padding-bottom: 3rem;
    font-size: 80%;
}
   	</style>
