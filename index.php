<!DOCTYPE html>
<!--[if IE]><![endif]-->
<html lang="en" manifest="files.appcache">
<head>
	<title>Frank Taillandier - Web quality progressive enhancement</title>
	<meta charset="UTF-8" />
	<meta name="description" content="Quality Assurance, user experience and web standards" />
	<link rel="openid.server" href="http://idproxy.net/openid/server/" />
	<link rel="openid.delegate" href="http://franktaillandier.idproxy.net/" />
	<link rel="profile=" href="http://gmpg.org/xfn/11" />
	<meta name="microid" content="e27ca65579fd9435650c7207f1535843173e78a4" />
	<link type="text/plain" rel="author" href="/humans.txt" />
	<script src="/mint/?js" type="text/javascript"></script> 
	<link rel="stylesheet" href="css/all.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="css/blueprint/print-min.css" type="text/css" media="print" />
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" href="css/html5-min.css" type="text/css" media="print" />
	<![endif]-->
	<!--[if lt IE 8]>
		<link rel="stylesheet" href="css/blueprint/ie-min.css" type="text/css" media="screen, projection" />
	<![endif]-->
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
	<div id="main" class="container _showgrid">
	<div class="prepend-2 span-13">
	<header>
			<h1>Frank Taillandier</h1>
			<p>helps build a better web</p>
	</header>
	</div>
		<div class="prepend-2 span-13 colborder">
			<section id="content">
				<section id="about">
				<h2>About me</h2>
				<p itemscope itemtype="http://schema.org/Person" class="vcard"><img itemprop="image" class="rounded shadow rotate left" src="/img/frank_avatar.jpg" alt=""/>Hello, my name is <span itemprop="name" class="fn">Frank Taillandier</span>, i'm a <?php echo $annees; ?> year old french guy, living in <span class="addr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="addressLocality" class="locality"><a href="http://maps.google.fr/places/fr/midi-pyr%C3%A9n%C3%A9es/toulouse" title="Google Maps - Toulouse">Toulouse</a></span></span> in the south of France. I'm spending way too much time in front of my computer but I have a real passion for the web, and I strongly believe that when it comes to publishing and develop on the <abbr title="World Wide Web">WWW</abbr>, we should rely on <abbr title="World Wide Web Consortium">W3C</abbr> standards.</p>

			<p>That's why we decided to organize <a href="http://sudweb.fr">Sud Web</a> a annual web quality conference in the South of France, where the sun shines and the geeks burn. The aime is to share our experiences and head towards an enhancement of web quality.</p>

			<p>I'm also responsible for <a href="http://www.aperoweb.fr/category/Toulouse">Aperoweb Toulouse</a>, aka monthly meetings with web developers. Feel free to come and join us to share experiences.</p>

			<p>For those who wonder what I do for a living : I'm currently in charge of  <span itemprop="jobTitle">quality assurance and user experience</span> at <a href="http://www.ws-interactive.fr" hreflang="fr">WS Interactive</a>, a wonderful web agency.</p>

			<h3>Show respect for the web</h3>

			<p>I'm constantly following the evolution of some of the <a href="http://www.w3.org/">web standards</a> like <a href="http://www.w3.org/TR/html5/">HTML5</a>, <a href="http://www.w3.org/Style/CSS/current-work">CSS</a> and <a href="http://www.w3.org/DOM/#what">DOM</a>. These tools allows you to separate structure, style and behavior. They should be the essentials components of every well-formed website in order to ease maintenance and improve <abbr title="Search Engine Optimization">SEO</abbr>, performance and accessibility, <abbr title="id est" lang="la">i.e</abbr> ensuring your content is accessible to everyone, no matter what device or software they use.</p>
		<p>Why do maintain a website who will only link to better <a href="http://www.webstandards.org/" title="Web Standards Projet">websites</a> and <a href="http://www.alistapart.com/" title="ALA, for people who make websites">articles</a> on the standards topic ? They're plenty of good technical resources on the web. In France, the web standards community is very active, either by <a href="http://www.pompage.net/" lang="fr">translating best experts articles</a> or by <a href="http://openweb.eu.org/" lang="fr">promoting web standards and accessibility</a>.</p>
			</section>
		</section>
		</div>

		<div class="prepend-1 span-5 last">

		<aside id="sidebar">

		<h2>Meet me</h2>

		<p itemscope itemtype="http://schema.org/Event">
			<a itemprop="url" href="http://www.paris-web.fr/"><img itemprop="image" src="/img/paris-web-2012-on-y-va.jpg" alt="Paris-Web 2012, j’y vais ! (du 18 au 20 octobre)" width="190" height="190"></a> <time itemprop="startDate" datetime="2012-10-13T09:00">Thursday, October 18th 2012</time> in <span itemscope itemtype="http://schema.org/Event" itemprop="addressLocality">Paris</span>, <span itemprop="addressCountry">France</span>
		</p>

		<!-- <p itemscope itemtype="http://schema.org/Event"><a itemprop="url" href="http://sudweb.fr" title="Sud Web, faire savoir et savoir faire le 27 mai à Nîmes"><img itemprop="image" src="/img/logo-sudweb.png" alt="Sud Web, Faire savoir et savoir faire le web" width="190" height="130" /></a>	<time itemprop="startDate" datetime="2011-05-27T09:00">Friday, May 27th 2011</time> in <span itemscope itemtype="http://schema.org/Event" itemprop="addressLocality">Nîmes</span>, <span itemprop="addressCountry">France</span></p> -->

		<h2>Follow me</h2>

		<p><a href="http://twitter.com/DirtyF" class="twitter-follow-button" data-lang="fr">Follow @DirtyF</a></p>
		<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>

		<ul>
			<li><a href="http://dirtyf.github.com" title="Some code I share">GitHub</a></li>
			<li><a href="http://lanyrd.com/people/DirtyF/" title="The events I attend" rel="me">Lanyrd</a>
			<li><a href="http://www.linkedin.com/in/franktaillandier" title="My resume on LinkedIn" rel="me">LinkedIn</a></li>
			<li><a href="http://flickr.com/photos/dirtyf/" title="Pictures from me" rel="me">Flickr</a></li>
			<li><a href="http://www.last.fm/user/DirtyF/" title="Last.FM : music I listen to" rel="me">LastFM</a></li>
		</ul>

		<h2>Cool people</h2>
        <ul>
			<li><a href="http://openweb.eu.org/" title="OpenWeb, bien faire le web" hreflang="fr">OpenWeb</a></li>
            <li><a href="http://groups.diigo.com/group/web-performance">Performance Web Group</a></li>
            <li><a href="https://nicolas.perriault.net/" rel="friend met">Nicolas Perriault</a></li>
            <li><a href="https://larlet.fr/david/thoughts/" rel="acquaintance met">David Larlet</a></li>
            <li><a href="https://case.oncle-tom.net" hreflang="fr" title="La case de l'oncle Tom" rel="friend met">Thomas Parisot</a></li>
        </ul>

		<p>Automne : open-source and intuitive Content Management System.</p>
		<button><a href="http://launchpad.net/automne/4.1/4.1.3/+download/automne4-v4_2_1-install.tgz">Download Automne 4.2.1</a></button>
		<p class="small">Free download, All platforms, English, French (tgz, 14.5Mo)</p>

		<p><a href="http://www.w3.org/html/logo/"><img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-graphics-multimedia-semantics.png" width="229" height="64" alt="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, Multimedia, and Semantics" title="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, Multimedia, and Semantics"></a></p>
		<p><a rel="author me" href="/humans.txt"><img src="data:image/gif;base64,R0lGODdhWAAfAPZIAE5OTqysrFpaWvPz89zc3PKfe8TExGZmZnFxcaGhoefn57i4uImJiZWVlfW3nPrbzfjPvepnLfa/p/CTautvOfrZyvnXyPjKtvGeeehXGPOoh/3w6+6GWeleIfKgfP3u6P738/GbdvnTwvrd0Pa7ou6HWuxzPudREPKgffKif/Ori+18Sux3RO+IXLexrfbCqudTE+ttNuZNCvGZc++PZO6DVO1+TehaG+ppMPGdeOdPDe6CU/GXcP3v6u17Sfzn3uprM/rbzvvm3ehYGfnQv9DQ0OZLB////319fQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAWAAfAAAH/4BHgoOEhYaHiImKi4yNjo+QkZKTlJWWl5iZmpucnZ6foI8bIKGljBtCFSgcFDpGRh6msoMWOzg+gwWvu0Yjs6YfMK8UEIK6vEYOv6UXyMbIRhjLiwMEiQQDiQ/ORwUZBRAQ3hzTikVIiUhFiSDcKg+EDzGOA0XZR/UKhPXWh0X9gwgAPHIu3bpEHXgRclDgh6AaAQAAMDBIYhGJARJIFEAggACMgpBIBCCAokQkCz4CQJDN40aKFyUiAJBAkAIBKgEcNGRDoaAcKTqUMObiAIAAFQEQmEkyAQOSABpoBFAPwIEiC0geEXkygNEECkgayIqOYNkBAtYhQapOEQ+fD/8iSPAgwZiFiEgFSSQokeIAkEdm2vtXT/ARiTWPGACAhIDVdf8EFRRk4MACBCF3HnLgswAQI0MiRMBQ4AXepHwPJNW3VecRryNdS2R9EV0DmRQllxX0tF/bRCI6kxC0wsSFAhpO49tbG3VInVkRLChieK9kxoIWGD2qe9CAAwfy/kb0oXOIIxKMGKMRMXFEAHx3W299zjVa2fCvozu4WIBkzII4RYAA+iCRWyI37GLMCSzIoF43LfQXwG0YNadXfq01IBID1H3UQFgYXhQeYwZEdEA1R6RFkAAtoRMAA/cgooGC3fh0RA+tkbTAUzphd+EgUxnA1FoWzXcTYwmodAA4AQVVZtWBCAQwwG15IUKEA8ocUcEME3QZRCEKaBaJQJBEVs6ZaKap5ppstunmm3DGKeecdNb5SyAAOw==" alt="Humans.txt" title="Humans.txt we are people not machines"></a></p>
		</aside>
		</div>
		<hr />
		<div class="span-24">
		<footer>
			<p class="small">Handcrafted with the help of <a href="http://macromates.com/">TextMate</a>,  <a href="http://www.blueprintcss.org/">Blueprint</a> and <a href="http://www.apple.com/fr/macosx/">Mac OS X</a></p>
		</footer>
		</div>
	</div>
 </body>
</html>