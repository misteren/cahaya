<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
	<meta charset="utf-8" />

  	<link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/stylesheets/app.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
  	<link href="<?php echo get_stylesheet_directory_uri(); ?>/lib/stylesheets/style.css" media="screen, projector, print" rel="stylesheet" type="text/css" />

  	<?php wp_head(); ?>
</head>

<body <?php body_class($class); ?>>

	<div class="row header">
		<div class="small-6 columns">
			<div class="logo">OCWC Global 2013</div>
			<div class="sublogo1">Ljubljana, Slovenia</div>
			<div class="sublogo2">23 - 25 April 2014</div>
		</div>
		<div class="small-6 columns">
			<div class="tagline">Exploring the <br />way information is</br>shared</div>
		</div>
	</div>

	<div class="row">
		<div class="small-12 columns topnav">
			<ul>
				<li><a href="#">Home</a></li><li><a href="#">About</a></li><li><a href="#">Registration</a></li><li><a href="#">Program</a></li><li><a href="#">Announcements</a></li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="large-8 columns">
			<h3>The Grid</h3>

			<!-- Grid Example -->
			<div class="row">
				<div class="large-12 columns">
					<div class="panel">
						<p>This is a twelve column section in a row. Each of these includes a div.panel element so you can see where the columns are - it's not required at all for the grid.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-6 columns">
					<div class="panel">
						<p>Six columns</p>
					</div>
				</div>
				<div class="large-6 columns">
					<div class="panel">
						<p>Six columns</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-4 columns">
					<div class="panel">
						<p>Four columns</p>
					</div>
				</div>
				<div class="large-4 columns">
					<div class="panel">
						<p>Four columns</p>
					</div>
				</div>
				<div class="large-4 columns">
					<div class="panel">
						<p>Four columns</p>
					</div>
				</div>
			</div>

			<h3>Buttons</h3>

      <div class="row">
        <div class="large-6 columns">
          <p><a href="#" class="small button">Small Button</a></p>
          <p><a href="#" class="button">Medium Button</a></p>
          <p><a href="#" class="large button">Large Button</a></p>
        </div>
        <div class="large-6 columns">
          <p><a href="#" class="small alert button">Small Alert Button</a></p>
          <p><a href="#" class="success button">Medium Success Button</a></p>
          <p><a href="#" class="large secondary button">Large Secondary Button</a></p>
        </div>
      </div>
		</div>

		<div class="large-4 columns">
			<h4>Getting Started</h4>
			<p>We're stoked you want to try Foundation! To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>

			<h4>Other Resources</h4>
			<p>Once you've exhausted the fun in this document, you should check out:</p>
			<ul class="disc">
				<li><a href="http://foundation.zurb.com/docs">Foundation Documentation</a><br />Everything you need to know about using the framework.</li>
				<li><a href="http://github.com/zurb/foundation">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</li>
				<li><a href="http://twitter.com/foundationzurb">@foundationzurb</a><br />Ping us on Twitter if you have questions. If you build something with this we'd love to see it (and send you a totally boss sticker).</li>
			</ul>
		</div>
	</div>


</body>
</html>

