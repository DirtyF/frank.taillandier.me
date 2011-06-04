<!DOCTYPE html> 
<!--[if IE]><![endif]-->
<html lang="en"> 
<head> 
	<title>Frank Taillandier - Web quality progressive enhancement</title>
	<meta charset="UTF-8" />
	<meta name="description" content="Quality Assurance, user experience and web standards" /> 
	<link rel="openid.server" href="http://idproxy.net/openid/server/" /> 
	<link rel="openid.delegate" href="http://franktaillandier.idproxy.net/" /> 
	<link rel="profile=" href="http://gmpg.org/xfn/11" />
	<meta name="microid" content="e27ca65579fd9435650c7207f1535843173e78a4" /> 
	<meta name="google-site-verification" content="nIjM9qWGKk8IO5Olcywr18k7X8swJjCzsiHJz6bCvjc" />  
	<link type="text/plain" rel="author" href="/humans.txt" />
	<script src="/mint/?js" type="text/javascript"></script> 
	<link rel="stylesheet" href="css/all.css" type="text/css" media="screen, projection" /> 
  	<link rel="stylesheet" href="css/blueprint/print-min.css" type="text/css" media="print" />
	<!--[if IE]>
    	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  		<link rel="stylesheet" href="css/html5-min.css" type="text/css" media="print" /> 
  	<![endif]--> 
  	<!--[if lt IE 8]>
    <link rel="stylesheet" href="css/blueprint/ie-min.css" type="text/css" media="screen, projection" />
  	<![endif]--> 
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
	<link rel="meta" type="application/rdf+xml" title="FOAF" href="foaf.rdf" /> 
</head> 
 <body>
 <?php
 $naiss = mktime(0, 0, 0, 11, 25, 1972);
 $today = mktime();
 $secondes = ($today > $naiss)? $today - $naiss : $naiss - $today;
 $annees = date('Y', $secondes) - 1970;
 ?>
	<div id="main" class="container _showgrid"> 
	<div class="prepend-2 span-13"> 
	<header> 
			<h1>Frank Taillandier</h1> 
			<p>progressive enhancement of web quality</p>
	</header> 
	</div> 
		<div class="prepend-2 span-13 colborder"> 
			<section id="content"> 
			
			<section id="about"> 
			<h2>About me</h2> 
 
			<p class="vcard"><img class="rounded shadow rotate left" src="/img/frank_avatar.jpg" alt=""/>Hello, my name is <span class="fn">Frank Taillandier</span>, i'm a <?php echo $annees; ?> year old french guy, living in <span class="addr"><span class="locality"><a href="http://maps.google.fr/places/fr/midi-pyr%C3%A9n%C3%A9es/toulouse" title="Google Maps - Toulouse">Toulouse</a></span></span> in the south of France. I'm spending way too much time in front of my computer but I have a real passion for the web, and I strongly believe that when it comes to publishing and develop on the <abbr title="World Wide Web">WWW</abbr>, we should rely on <abbr title="World Wide Web Consortium">W3C</abbr> standards.</p> 
			<p class="">That's why we decided to organize <a href="http://sudweb.fr">Sud Web</a> a web quality conference in the South of France, where the sun shines and the geeks burn. We want to share our experiences and head towards an enhancement of web quality concerning development, methodology and security.</p>
			
			<p><a href="http://www.yann-madeleine.com/" rel="colleague friend met">Yann</a> and I also decided to organize <a href="http://www.aperoweb.fr/category/Toulouse">Aperoweb Toulouse</a>, aka monthly meetings with web developers.</p>
			
			<p>By the way, I'm currently in charge of quality assurance and user experience at <a href="http://www.ws-interactive.fr" hreflang="fr">WS interactive</a>.</p> 
						
			<h3><q>Please, don't hurt the web</q></h3> 
			
			<p>I'm constantly following the evolution of some of the <a href="http://www.w3.org/">web standards</a> like <a href="http://www.w3.org/TR/html5/">HTML5</a>, <a href="http://www.w3.org/Style/CSS/current-work">CSS3</a> and <a href="http://www.w3.org/DOM/#what">DOM</a>. These tools allows you to separate structure, style and behavior. They should be the essentials components of every well-formed website in order to ease maintenance and improve <abbr title="Search Engine Optimization">SEO</abbr>, performance and accessibility, <abbr title="id est" lang="la">i.e</abbr> ensuring your content is accessible to everyone, no matter what device or software they use.</p> 
			
			<h3>Photography</h3> 
			
			<p>I like to take pictures. I usually take street, candid shots and portraits. You can see <a href="http://flic.kr/dirtyf">some pictures</a> on my Flickr stream. I recently bought a <a href="http://www2.panasonic.com/consumer-electronics/shop/Cameras-Camcorders/Digital-Cameras/Lumix-Digital-Cameras/model.DMC-LX5K_11002_7000000000000005702">Panasonic LX5</a>, and I'm very happy about it.</p> 
			
			</section> 
						
		<!-- <section><h2>Automne : advanced content management system</h2> 
		
		<p><img class="top pull-1 right" alt="Automne, Web content management" src="http://demov4.automne.ws/automne_modules_files/pnews/public/r4_4_automne_thumbnail.png" width="100" /> <a href="http://www.automne.ws">Automne</a> is the CMS</abbr> we use to build our websites. It's open-source and LAMP</abbr> powered. Automne 4 is written in PHP5 an the interface heavily use the <a href="http://www.sencha.com/products/js/">extJS</a> library. As an open source software, <a href="https://launchpad.net/automne" title="Automne on Launchpad">Automne's source code</a> is hosted on Launchpad and use <a href="http://bazaar.canonical.com/en/">Bazaar</a>. Feel free to <a href="http://en.automne.ws/web/en/313-try-the-demo.php">try the demo</a></p> 
		
		<p>Here's the <a href="http://www.slideshare.net/DIrtyF/automne-cms-open-source-4727427" title="Automne, CMS open source">presentation</a> Sébastien and I gave at the Libre Software Meeting 2010.</p> 
		
		<h3>Features</h3> 
		
		<ul> 
			<li>powered by <a href="http://framework.zend.com/">Zend Framwork</a> ;</li> 
			<li>AJAX user interface built with <a href="http://www.sencha.com/products/js/">ExtJS</a> library ; </li> 
			<li>XML</abbr> templating ;</li> 
			<li>Application generator named <a href="http://man.automne.ws/web/Manual/329-the-polymod.php">Polymod</a> that allows you to develop current web applications without PHP coding. If you're a PHP developer, you can also develop your modules with <a href="http://www.automne.ws/api">Automne API</a> ;</li> 
			<li>Groups and user rights management based on RBAC</abbr> ;</li> 
			<li> and a lot more like advanced validation workflow, multi-site management , LDAP</abbr> connectivity, HTTPS</abbr> and SSO</abbr> support, etc.</li> 
		</ul> 
		
		<p><a href="http://sourceforge.net/projects/automne" title="Project on Sourceforge">Download Automne from sourceforge.net</a>. You need to have some skills in XHTML</abbr> and CSS</abbr> and PHP in order to build the templates. Free Automne templates will come soon.</p> 
					
		<p>If you have questions, suggestions or wanna give some feedback, you can join us on <a href="http://www.automne.ws/forum/">the forum</a>, add your comments on <a href="http://www.automne.ws/blog">Automne's blog</a>.</p></section> 
		</section>
		-->
							
		<hr /> 

		<h2>Standardistas</h2> 

		<p>Why do maintain a website who will only link to better <a href="http://www.webstandards.org/" title="Web Standards Projet">websites</a> and <a href="http://www.alistapart.com/" title="ALA, for people who make websites">articles</a> on the standards topic ? They're plenty of good technical resources on the web. In France, the web standards community is very active, either by <a href="http://www.pompage.net/" lang="fr">translating best experts articles</a> or by <a href="http://openweb.eu.org/" lang="fr">promoting web standards and accessibility</a>.</p> 
 			
		<h2>Uniform motion</h2> 

		<p class="clearfix"><a href="http://uniformmotion.net/"><img class="top pull-1 left" src="/img/uniformmotion_thumbnail.jpg" width="80" height="81" alt="Uniform motion" /></a> <a href="http://uniformmotion.net/">Uniform Motion</a> is <a href="http://www.linkedin.com/pub/0/168/392" title="Andrew's LinkedIn Profile" rel="friend met">Andrew Richards</a>, my fellow english mate and talented graphic designer <a href="http://www.reuno.net" rel="friend met">Reuno</a>. I strongly invite you to <a href="http://soundcloud.com/uniformmotion/sets/rootmusic-bandpage" title="Uniform motion on Soundcloud">listen</a> and watch to their songs. Their second album <cite>Life</cite> is out now.</p> 
						
		 <audio src="/media/uniform-motion-roll-over.mp3" controls preload="none">
		 	<a href="/media/uniform-motion-roll-over.mp3">Uniform Motion - Roll Over (MP3, 11M)</a>
		 </audio> 
 
		</section> 
		</div> 
		
		<div class="prepend-1 span-5 last"> 
		
		<aside id="sidebar"> 
			
		<p><a href="http://sudweb.fr" title="Sud Web, faire savoir et savoir faire le 27 mai à Nîmes"><img src="/img/logo-sudweb.png" alt="Sud Web, Faire savoir et savoir faire le web" width="190" height="130" /></a></p>	
		
		<h2>Automne</h2>
		<p>Open-source and intuitive Content Management System.</p>
		<button><a href="http://launchpad.net/automne/4.1/4.1.3/+download/automne4-v4_1_3-install.tgz">Download Automne 4.1.3</a></button>
		<p class="small">Free download, All platforms, English, French (tgz, 14.5Mo)</p>
		<h2>Elsewhere</h2> 
		<p><a href="http://twitter.com/DirtyF" rel="me"><img src="/img/followmeontwitter.png" width="201" height="74" alt="Follow me on Twitter" /></a></p> 
		<ul> 
			<li><a href="http://lanyrd.com/people/DirtyF/" rel="me">Lanyrd</a>
			<li><a href="http://www.linkedin.com/in/franktaillandier" rel="me">LinkedIn</a></li> 
			<li><a href="http://flickr.com/photos/dirtyf/" title="My Flickr profile" rel="me">Flickr</a></li> 
			<li><a href="http://www.last.fm/user/DirtyF/" title="My musical tastes on Last.fm" rel="me">LastFM</a></li> 
		</ul>
	
		<h2>Friends</h2> 
        <ul>
            <li><a href="http://groups.diigo.com/group/web-performance">Performance Web Group</a></li>
            <li><a href="http://blog.akei.com/" title="Le blog de Nicolas Perriault" rel="friend met">n1k0</a></li> 
            <li><a href="http://www.biologeek.com/journal/" rel="acquaintance met">Biologeek</a></li>
            <li><a href="http://case.oncle-tom.net/" hreflang="fr" title="leblog de Thomas Parisot" rel="friend met">Oncle Tom</a></li>
        </ul> 

		<p><a href="http://www.w3.org/html/logo/"><img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-graphics-multimedia-semantics.png" width="229" height="64" alt="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, Multimedia, and Semantics" title="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, Multimedia, and Semantics"></a></p>
		 <p><a rel="author me" href="/humans.txt"><img src="/img/humanstxt.gif" alt="Humans.txt" title="Humans.txt we are people not machines"></a></p>
		</aside> 
		</div> 
		<hr /> 
		<div class="span-24"> 
		<footer> 
			<p class="small"><!-- <a href='http://feedwhip.com/feed/whip/?url=http%3A%2F%2Ffrank.taillandier.free.fr%2F&amp;name=DirtyF'>Subscribe</a> - --> Handcrafted with the help of <a href="http://macromates.com/">TextMate</a>,  <a href="http://www.blueprintcss.org/">Blueprint</a> and <a href="http://www.apple.com/fr/macosx/">Mac OS X</a></p>
		</footer> 
		</div> 
	</div> 
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-15560088-1']);
	  _gaq.push(['_trackPageview']);
	  _gaq.push(['_trackPageLoadTime']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + 'frank.taillandier.free.fr/js/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script> 
 </body> 
</html> 
