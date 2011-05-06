<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title><?= $page_title ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- Mobile Specific Metas
  ================================================== -->
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />  
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="src/stylesheets/base.css">
	<link rel="stylesheet" href="src/stylesheets/skeleton.css">
	<link rel="stylesheet" href="src/stylesheets/layout.css">
	<link rel="stylesheet" href="documentation-assets/docs.css">
	<!--[if lt IE9]><link rel="stylesheet" href="css/ie.css"><![endif]-->
	
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

</head>
<body>


			
			<div class="container">	
				<div class="three columns sidebar">
					<nav>
						<h3 id="logo">Skeleton.gs</h3>
						<ul>
							<li><a href="#whatAndWhy">What & Why</a></li>
							<li><a href="#typography">Typography</a></li>
							<li><a href="#grid">Grid</a></li>
							<li><a href="#buttons">Buttons</a></li>
							<li><a href="#tabs">Tabs</a></li>
							<li><a href="#forms">Forms</a></li>
							<li><a href="#mediaQueries">Media Queries</a></li>
							<li><a href="#theFuture">The Future</a></li>
							<li class="download"><a href="#download">Download</a></li>
						</ul>
					</nav>
					&nbsp;
				</div>
				<div class="twelve columns content offset-by-one">
					<header>
						<h1>A Beautiful Boilerplate for Responsive, Mobile-Friendly Development</h1>
					</header>
					<hr class="large" />
					<div class="doc-section" id="whatAndWhy">
						<h3>What Is It?</h3>
						<p>Skeleton is a small collection of CSS & JS files that can help you rapidly develop sites that look beautiful at any size, be it a 17" laptop screen or an iPhone. Skeleton is built on three core pieces:</p>
						<div class="row clearfix">
							<div class="four columns alpha">
								<img src="documentation-assets/images/responsive.jpg" alt="responsive" width="220" height="113" />
							</div>
							<div class="eight columns omega">
								<h5>Responsive Grid Down To Mobile</h5>
								<p>Skeleton has a familiar, lightweight 960 grid as it's base, but elegantly scales down to downsized browser windows, tablets, mobile phones (in landscape and portrait). <strong>Go ahead, resize this page!</strong></p>
							</div>
						</div>
						<div class="row clearfix">
							<div class="four columns alpha">
								<img src="documentation-assets/images/fast.jpg" alt="responsive" width="220" height="113" />
							</div>
							<div class="eight columns omega">
								<h5>Fast to Start</h5>
								<p>Skeleton is a tool for rapid development. Get started fast with CSS best practices, a well-structured grid that makes mobile consideration easy, an organized file structure and super basic UI elements like lightly styled forms, buttons, tabs and more.</p>
							</div>
						</div>
						<div class="row clearfix">
							<div class="four columns alpha">
								<img src="documentation-assets/images/foundation.jpg" alt="responsive" width="220" height="113" />
							</div>
							<div class="eight columns omega">
								<h5>Style Agnostic</h5>
								<p>Skeleton is not a UI framework. It's a development kit that provides the most basic styles as a foundation, but is ready to adopt whatever your design or style is.</p>
							</div>
						</div>
					</div>
<!--
						<ul class="square">
							<li><strong>Responsive</strong>: Skeleton was designed to work beautifully across modern browsers at any size, but more important across all of your devices.</li>
							<li><strong>Style Agnostic</strong>: Very basic styles have been applied to make Skeleton awesome out of the box, but more importantly it's ready for <em>your </em>style.</li>
							<li><strong>Fast</strong>: alksdfj alkds;fj alksdfj</li>
						</ul>
-->
<!--
						<figure class="iphone">
							<img src="documentation-assets/images/iphone.jpg" alt="iphone" />
							<figcaption>Mobile</figcaption>
						</figure>
						<figure class="ipad">
							<img src="documentation-assets/images/ipad.jpg" alt="ipad"  />
							<figcaption>Tablet</figcaption>
						</figure>
						<figure class="laptop">
							<img src="documentation-assets/images/macbook.jpg" alt="macbook" />
							<figcaption>Laptop/Desktop</figcaption>
						</figure>
					</div>
-->
					<hr />
<!--
					<div class="doc-section" id="downloads">
						<h3>Downloads</h3>
						<p>Getting the ball rolling with Skeleton is dead simple. You can download the entire boilerplate zip, just the skeleton.gs grid system by itself, or the PSDs for designing on the skeleton grid.</p>
						<a class="button" href="">Download Full Zip</a>
						<a class="secondary button" href="">Only Grid CSS</a>
						<a class="secondary button" href="">Only Grid PSDs</a>
					</div>
					<hr />
-->
					<div class="doc-section clearfix" id="grid">
						<h3>The Grid</h3>
						<p>Skeleton's base grid is a variation of the 960 grid system. The syntax is simple and it's effective cross browser, but the awesome part is that it also has the flexibility to go mobile like a champ. <strong>Go ahead, resize the browser and watch as the layout reacts!</strong></p>
						<div class="example-grid">
							<div class="one column alpha">One</div>
							<div class="eleven columns omega">Eleven</div>
							<div class="two columns alpha">Two</div>
							<div class="ten columns omega">Ten</div>
							<div class="three columns alpha">Three</div>
							<div class="nine columns omega">Nine</div>
							<div class="four columns alpha">Four</div>
							<div class="eight columns omega">Eight</div>
							<div class="five columns alpha">Five</div>
							<div class="seven columns omega">Seven</div>
							<div class="six columns alpha">Six</div>
							<div class="six columns omega">Six</div>
							<div class="seven columns alpha">Seven</div>
							<div class="five columns omega">Five</div>
							<div class="eight columns alpha">Eight</div>
							<div class="four columns omega">Four</div>
							<div class="nine columns alpha">Nine</div>
							<div class="three columns omega">Three</div>
							<div class="ten columns alpha">Ten</div>
							<div class="two columns omega">Two</div>
							<div class="eleven columns alpha">Eleven</div>
							<div class="one column omega">One</div>
						</div>
						<div class="hidden-code">
							<a href="">Code Example</a>
							<script src="https://gist.github.com/959632.js?file=Skeleton%20Grid"></script>					
						</div>
					</div>
					<hr />
					<div class="doc-section clearfix" id="typography">
						<h3>Typography</h3>
						<p>The typography of Skeleton is designed to create a strong hierarchy with basic styles. The primary font is the classic Helvetica Neue, but the font stack can be easily changes with just a couple adjustments. Regular paragraphs are set at a 14px base with 21px line height.</p>
						<div class="seven columns alpha headings">
							<h1>Heading &lt;h1&gt;</h1>
							<h2>Heading &lt;h2&gt;</h2>
							<h3>Heading &lt;h3&gt;</h3>
							<h4>Heading &lt;h4&gt;</h4>
							<h5>Heading &lt;h5&gt;</h5>
							<h6>Heading &lt;h6&gt;</h6>
						</div>
						<div class="five columns omega">
							<blockquote>
								<p>This is a blockquote style example. It stands out, but is awesome</p>
								<cite>Dave Gamache, Skeleton Creator</cite>
							</blockquote>
						</div>
					</div>
					<hr />
					<div class="doc-section" id="buttons">
						<h3>Buttons</h3>
						<p>Button are intended for action and thus should have appropriate weight. The standard buttons are given that weight by being strong and dark, but they could just as easily be colorful.</p>
						<a href="#" class="button">Save Now</a>
						<a href="#" class="secondary button">Dismiss Changes</a>
						<div class="hidden-code">
							<a href="">Code Example</a>
							<!-- <script type="text/javascript" src="http://snipt.net/embed/c9ba7e6bef73adc206a1f2f156336b1f"></script> -->
						</div>
					</div>
					<hr />
					<div class="doc-section" id="tabs">
						<h3>Tabs</h3>
						<p>Some very simple tabs that have dead simple jQuery that hook them up to their corresponding content.</p>
						<ul class="tabs">
							<li><a class="active" href="#simple">Simple</a></li>
							<li><a href="#lightweight">Lightweight</a></li>
							<li><a href="#mobileFriendly">Mobile</a></li>
						</ul>
						<ul class="tabs-content">
							<li class="active" id="simpleTab">The tabs are clean and simple unordered-list markup and basic CSS.</li>
							<li id="lightweightTab">The tabs are cross-browser, but don't need a ton of hacky CSS or markup.</li>
							<li id="mobileFriendlyTab">The tabs work like a charm even on mobile devices.</li>
						</ul>
						<div class="hidden-code">
							<a href="">Code Example</a>
							<!-- <script type="text/javascript" src="http://snipt.net/embed/4b46e3f57681fb03107aee169cd7e252"></script> -->
						</div>
					</div>
					<hr />
					<div class="doc-section clearfix" id="forms">
						<h3>Forms</h3>
						<p>Forms can be one of the biggest pains for web developers, but just use these dead simple styles and you should be good to go. </p>
						<div class="four columns alpha">
							<form action="">
								<label for="regularInput">Regular Input</label>
								<input type="text" id="regularInput" />
								<label for="regularTextarea">Regular Textarea</label>
								<textarea id="regularTextarea"></textarea>
								<label for="selectList">Select List</label>
								<select id="selectList">
									<option value="Option 1">Option 1</option>
									<option value="Option 2">Option 2</option>
									<option value="Option 3">Option 3</option>
									<option value="Option 4">Option 4</option>
								</select>
								<fieldset>
									<label for="">Checkboxes</label>
									<label for="regularCheckbox">
										<input type="checkbox" id="regularCheckbox" value="checkbox 1" />
										<span>Regular Checkbox</span>
									</label>
									<label for="secondRegularCheckbox">
										<input type="checkbox" id="secondRegularCheckbox" value="checkbox 2" />
										<span>Regular Checkbox</span>
									</label>
								</fieldset>
								<fieldset>
									<label for="">Radio Buttons</label>
									<label for="regularRadio">
										<input type="radio" name="radios" id="regularRadio" value="radio 1" />
										<span>Regular Radio</span>
									</label>
									<label for="secondRegularRadio">
										<input type="radio" name="radios" id="secondRegularRadio" value="radio 2" />
										<span>Regular Radio</span>
									</label>
								</fieldset>
								
							<!-- 							<input type="text" id="placeholderInput" placeholder="Placeholder Input" /> -->
							</form>
						</div>
					</div>
					<hr />
					<div class="doc-section" id="mediaQueries">
						<h3>Media Queries</h3>
						<p>Skeleton uses a <strong>lot</strong> of media queries to serve the scalable grid, but also for the convenience of styling your site on different size screens. Skeleton's media queries are almost exclusively targeted at max and min widths rather than device sizes or orientations. The advantage of this is browsers and future mobile devices that don't map to exact set dimensions will still benefit from the styles. That being said, all of the queries were written to be optimal on Apple iOS devices. The built in media queries include:</p>
						<ul class="square">
							<li><strong>iPad Portrait</strong> or any other tablet device </li>
							<li><strong>iPhone</strong> or mobile styles in general for small screens</li>
							<li><strong>iPhone Landscape</strong> or other mobile devices with a large screen size (cascades over standard mobile styles)</li>
							<li><strong>Less than 960</strong> to style anything across browsers and devices that is smaller than the base grid</li>
						</ul>
					</div>
					<hr />
					<div class="doc-section" id="theFuture">
						<h3>The Future</h3>
						<p>As I write this, Skeleton is unreleased and I have just started using it in personal projects. In the future, I hope to build a small community around Skeleton - I want to get feedback, make it better and find the holes. </p>
						<p><strong>The ultimate goal is to build the best starting point for front-end development with an emphasis on simple, device-agnostic design.</strong> Help me get there - check out the project on Github or just email me (dhgamache [at] gmail.com) with questions/suggestions.</p>
					</div>
					<hr />
					<div class="doc-section" id="download">
						<h3>Download</h3>
						<p>The Skeleton download is a zip file (~50kb) containing all the CSS groundwork and JS goodies to get started on any web project. </p>
						<a href="files/" class="button">Download Skeleton 1.0</a>
						<p>The file structure for Skeleton is:</p>
						<ul class="square">
							<li><strong>index.html</strong>: The base html page that includes the necessary initial markup</li>
							<li>
								<strong>stylesheets</strong> <em>(folder)</em>
								<ul class="circle">
									<li><strong>base.css</strong>: Basic styles of Skeleton</li>
									<li><strong>skeleton.css</strong>: The glorious Skeleton grid</li>
									<li><strong>layout.css</strong>: Empty file made for your site specific styles</li>
									<li><strong>ie.css</strong>: Empty CSS file for IE specific needs</li>
								</ul>
							</li>
							<li>
								<strong>javascripts</strong> <em>(folder)</em>
								<ul class="circle">
									<li><strong>jquery-1.5.1.min.js</strong>: jQuery is served the Google CDN, but I've provided a local fallback</li>
									<li><strong>app.css</strong>: Contains code for activating tabs and should house all of your sites JS</li>
									<li><strong>Plugins</strong> <em>(folder)</em>: An empty directory for your jQuery plugins</li>
								</ul>
							</li>
							<li>
								<strong>images</strong> <em>(folder)</em>
							</li>
						</ul>
					</div>
				</div>
			</div><!-- container -->
			
			<div class="resize"></div>





		
		<!-- JS
		================================================== -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
		<script>window.jQuery || document.write("<script src='src/javascripts/jquery-1.5.1.min.js'>\x3C/script>")</script>
		<script src="src/javascripts/modernizr-1.7.min.js"></script>
		<script src="src/javascripts/app.js"></script>
		
		<script>
		
			$('.hidden-code').click(function(e) {
				e.preventDefault();
				$(this).children('.gist').slideToggle();
			})
			
			var originalText;
			$('.example-grid').children().hover(
				function() {
					originalText = $(this).text();
					$(this).html($(this).width()+'px');
				}, 
				function() {
					$(this).html(originalText);
				})
		</script>
	</body>
</html>