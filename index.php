<!doctype html>
<html lang="en" manifest="files.appcache" >
<head>
	<meta charset="utf-8">
	<title>Frank Taillandier - building a better web</title>
	<meta name="description" content="I help product owners and teams build useful quality web apps in an iterative way." />
	<link type="text/plain" rel="author" href="/humans.txt" />
	<link rel="stylesheet" href="css/master-min.css" />
	<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="meta" type="application/rdf+xml" title="FOAF" href="foaf.rdf" />

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-15560088-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>
<body>
	<?php
	$naiss = mktime(0, 0, 0, 11, 25, 1972);
	$today = mktime();
	$secondes = ($today > $naiss)? $today - $naiss : $naiss - $today;
	$annees = date('Y', $secondes) - 1970;
	?>
	<div class="container" id="main">
		<div class="row">
			<div class="span8">
				<header>
					<h1>Frank Taillandier</h1>
					<p>Web utopist</p>
				</header>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span8">
				<section id="content">
					<section id="about">
						<h2>About</h2>
						<img itemprop="image" class="img-rounded pull-left media-object" src="img/frank-taillandier.jpg" width="120" alt=""/>
						<p itemscope itemtype="http://schema.org/Person" class="vcard media">
							Hi, my name is
							<span itemprop="name" class="fn">Frank Taillandier</span>
							, I am a
							<?php echo $annees; ?>
							years old frenchie, living in
							<span class="addr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
								<span itemprop="addressLocality" class="locality">
									<a href="http://maps.google.fr/places/fr/midi-pyr%C3%A9n%C3%A9es/toulouse" title="Google Maps - Toulouse">Toulouse</a>
								</span>
							</span>
							in the south of France and I'm passionate about building useful services with the web standards.
						</p>

						<p>
							I am currently <span itemprop="jobTitle">Agile Facilitator</span> at <a href="http://www.occitech.fr" hreflang="fr">Occitech</a>, a human-friendly company, where we build modern web apps.
						</p>

						<p>
							Since 2010, I help organize
							<a href="http://sudweb.fr">Sud Web</a>
							a yearly web conference taking place in the south of France. Our aim is to share different experiences to head towards a better understanding of how the modern web works and how we should conceive and develop for more usable and interoperable web experience.
						</p>

						<p>
							I am also involved in local events like <a href="http://toulouse.aperoweb.fr">Aperoweb Toulouse</a>, to encourage meetings between web people, who can discuss and learn about their passion for web technologies.
						</p>

						
						<h3>Embrace the open web</h3>

						<p>
							I'm constantly following the evolution of some of the
							<a href="http://www.w3.org/">web standards</a>
							like
							<a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/">HTML5</a>,
							<a href="http://www.w3.org/Style/CSS/current-work">CSS</a>
							and
							<a href="http://www.w3.org/standards/webdesign/script">Javascript web APIS</a>
							. These tools (used to) allow you to separate structure, style and behavior. They are the essentials components of every well-formed website in order to ease maintenance and improve
							<abbr title="Search Engine Optimization">SEO</abbr>
							, performance and accessibility,
							<abbr title="id est" lang="la">i.e</abbr>
							ensuring your content is accessible to everyone, no matter what device or software they use.
						</p>
						<p>
							You will find plenty of good litterature on web design and development. Some favourites of mine include <a href="http://www.fivesimplesteps.com/products/the-practical-guide-digital-library">Five Simple Steps Pratical Guides</a>, <a href="http://rosenfeldmedia.com/books/">Rosenfeld Media Books</a>, and of course some of <a href="http://shop.oreilly.com/category/ebooks/web-development.do">O'Reilly ebooks</a>.
							I still recommend you check <a href="http://www.alistapart.com/" title="ALA, for people who make websites">A List Apart</a> from time to time.</p>
							
							<p>You can help the french community by <a href="http://www.pompage.net/" hreflang="fr">translating best experts articles</a> or <a href="http://letrainde13h37.fr/rejoignez-nous/" hreflang="fr">write one of your own</a>.</p>
						</section>
					</section>
				</div>
				<div class="span3">
					<aside lang="fr">
						<h2>Events</h2>

						<p><a href="http://toulouse.aperoweb.fr"><img src="img/aperoweb_tlse.png" alt="Aperoweb Toulouse" width="128" height="128" /></a></p>

						<p>
							<a itemprop="url" href="http://sudweb.fr" title="Sud Web, faire savoir et savoir faire le web">
								<img itemprop="image" src="img/sudweb.png" alt="Sud Web, Faire savoir et savoir faire le web" width="128" height="81" />
							</a>
						</p>


						<h2>Projects</h2>
						<ul>
							<li>
								<a href="http://www.pompage.net/" title="Pompage, le web design puisé à la source" hreflang="fr">Pompage</a>
							</li>
						</ul>

						<h2>Profiles</h2>

						<a href="https://twitter.com/DirtyF" class="twitter-follow-button" data-show-count="true" data-lang="fr">Suivre @DirtyF</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

						<ul>
							<li>
								<a href="http://dirtyf.github.com" rel="me">GitHub</a>
							</li>
							<li>
								<a href="http://lanyrd.com/people/DirtyF/" rel="me">Lanyrd</a>
							</li>
							<li>
								<a href="http://www.linkedin.com/in/franktaillandier" rel="me">LinkedIn</a>
							</li>
							<li>
								<a href="http://flickr.com/photos/dirtyf/" rel="me">Flickr</a>
							</li>
							<li>
								<a href="http://www.last.fm/user/DirtyF/" title="Last.FM : music I listen to" rel="me">LastFM</a>
							</li>
						</ul>

					</aside>
				</div>
			</div>
			<footer>
				<p>
					crafted with care with  
					<a href="http://www.sublimetext.com//">Sublime Text</a>
					,
					<a href="http://twitter.github.com/bootstrap/">Bootstrap</a>
					under 
					<a href="http://www.apple.com/fr/macosx/">Mac OS X</a>
				</p>
				<p>
					<a rel="author me" href="/humans.txt"><img src="data:image/gif;base64,R0lGODdhWAAfAPZIAE5OTqysrFpaWvPz89zc3PKfe8TExGZmZnFxcaGhoefn57i4uImJiZWVlfW3nPrbzfjPvepnLfa/p/CTautvOfrZyvnXyPjKtvGeeehXGPOoh/3w6+6GWeleIfKgfP3u6P738/GbdvnTwvrd0Pa7ou6HWuxzPudREPKgffKif/Ori+18Sux3RO+IXLexrfbCqudTE+ttNuZNCvGZc++PZO6DVO1+TehaG+ppMPGdeOdPDe6CU/GXcP3v6u17Sfzn3uprM/rbzvvm3ehYGfnQv9DQ0OZLB////319fQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAWAAfAAAH/4BHgoOEhYaHiImKi4yNjo+QkZKTlJWWl5iZmpucnZ6foI8bIKGljBtCFSgcFDpGRh6msoMWOzg+gwWvu0Yjs6YfMK8UEIK6vEYOv6UXyMbIRhjLiwMEiQQDiQ/ORwUZBRAQ3hzTikVIiUhFiSDcKg+EDzGOA0XZR/UKhPXWh0X9gwgAPHIu3bpEHXgRclDgh6AaAQAAMDBIYhGJARJIFEAggACMgpBIBCCAokQkCz4CQJDN40aKFyUiAJBAkAIBKgEcNGRDoaAcKTqUMObiAIAAFQEQmEkyAQOSABpoBFAPwIEiC0geEXkygNEECkgayIqOYNkBAtYhQapOEQ+fD/8iSPAgwZiFiEgFSSQokeIAkEdm2vtXT/ARiTWPGACAhIDVdf8EFRRk4MACBCF3HnLgswAQI0MiRMBQ4AXepHwPJNW3VecRryNdS2R9EV0DmRQllxX0tF/bRCI6kxC0wsSFAhpO49tbG3VInVkRLChieK9kxoIWGD2qe9CAAwfy/kb0oXOIIxKMGKMRMXFEAHx3W299zjVa2fCvozu4WIBkzII4RYAA+iCRWyI37GLMCSzIoF43LfQXwG0YNadXfq01IBID1H3UQFgYXhQeYwZEdEA1R6RFkAAtoRMAA/cgooGC3fh0RA+tkbTAUzphd+EgUxnA1FoWzXcTYwmodAA4AQVVZtWBCAQwwG15IUKEA8ocUcEME3QZRCEKaBaJQJBEVs6ZaKap5ppstunmm3DGKeecdNb5SyAAOw==" alt="Humans.txt" title="Humans.txt nous sommes des gens pas des machines"></a>
				</p>
				<p>
					<a href="http://www.w3.org/html/logo/">
						<img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-graphics-multimedia-semantics.png" width="229" height="64" alt="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, Multimedia, and Semantics" title="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, Multimedia, and Semantics"></a>
				</p>
				</footer>
			</div>
		</body>
		</html>