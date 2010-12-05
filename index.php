<!DOCTYPE html>
<html lang="en">
<head>
	<title>Frank Taillandier : Quality management and Automne community manager @ WS Interactive</title>
	<meta charset="utf-8">	
	<meta name="description" content="Web standards and Automne CMS evangelist" />
	<link rel="openid.server" href="http://idproxy.net/openid/server/" />
	<link rel="openid.delegate" href="http://franktaillandier.idproxy.net/" />
	<meta name="microid" content="e27ca65579fd9435650c7207f1535843173e78a4" />
	<meta name="google-site-verification" content="nIjM9qWGKk8IO5Olcywr18k7X8swJjCzsiHJz6bCvjc" />
	<script src="/mint/?js" type="text/javascript"></script>
	<!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  	<link rel="stylesheet" href="css/html5.css" type="text/css" media="print"> 
  	<![endif]-->
  	<link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection">
  	<link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print"> 
  	<!--[if lt IE 8]>
    <link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection">
  	<![endif]-->
	<link rel="stylesheet" href="/css/master.css" type="text/css" media="screen">
	<link rel="icon" type="image/png" href="/favicon.png" />
	<link rel="meta" type="application/rdf+xml" title="FOAF" href="foaf.rdf" />
</head>

<body>
	<?php
	$naiss = mktime(0, 0, 0, 11, 25, 1972);
	$today = mktime();
	$secondes = ($today > $naiss)? $today - $naiss : $naiss - $today;
	$annees = date('Y', $secondes) - 1970;
	?>
	<div id="main" class="container">
	<div class="prepend-2 span-7">
	<header>
			<h1>Frank Taillandier</h1>
	</header>
	</div>
		<div class="prepend-2 span-13 colborder">
			<section id="content">
			
			<section id="about">
			<h2>About me</h2>

			<p class="vcard"><img class=" rotate left" src="/img/frank_avatar.jpg" alt=""/>Hello, my name is <span class="fn">Frank Taillandier</span>, i'm a <?php echo $annees; ?> years old french guy, living in <span class="addr"><span class="locality"><a href="http://maps.google.fr/places/fr/midi-pyr%C3%A9n%C3%A9es/toulouse" title="Google Maps - Toulouse">Toulouse</a></span></span> in the south of France. I'm spending too much time behind my computer but I have a real passion for the web, and I strongly believe that when it comes to publishing and develop on the <abbr title="World Wide Web">WWW</abbr>, we should rely on <abbr title="WorldWide Web consortium">W3C</abbr> standards.</p>
			<p>I'm currently in charge of qualityassurance and user experience at <a href="http://www.ws-interactive.fr" hreflang="fr">WS interactive</a>. I'm also a community manager for <a href="http://en.automne.ws">Automne</a> <abbr title="Content Management System">CMS</abbr>.</p>
			</section>
			
			<hr />
			
			<section><h2>Automne : advanced content management system</h2>
			<object width="500" height="320"><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id=11102699&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" /><embed src="http://vimeo.com/moogaloop.swf?clip_id=11102699&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=0&amp;color=&amp;fullscreen=1" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="500" height="320" /></object>
			<p><a hreflang="fr" href="http://vimeo.com/11102699">Develop with Automne (french version)</a> from <a href="http://vimeo.com/automne">Automne</a> on <a href="http://vimeo.com">Vimeo</a>.</p>
			<p><img class="top pull-1 right" alt="Automne, Web content management" src="http://demov4.automne.ws/automne_modules_files/pnews/public/r4_4_automne_thumbnail.png" width="100" /> <a href="http://www.automne.ws">Automne</a> is the <abbr title="Content Management System">CMS</abbr> we use to build our websites. It's open-source and <abbr title="Linux Apache MySQL PHP">LAMP</abbr> powered. Automne 4 is written in PHP5 an the interface heavily use the <a href="http://www.sencha.com">Sencha</a> library. As an open source software, <a href="https://launchpad.net/automne" title="Automne on Launchpad">Automne's source code</a> is hosted on Launchpad and use <a href="http://bazaar.canonical.com/en/">Bazaar</a>. Feel free to <a href="http://en.automne.ws/web/en/313-try-the-demo.php">try the demo</a></p>
			
			<h3>Features</h3>
			
			<ul>
				<li>powered by <a href="http://framework.zend.com/">Zend Framwork</a> ;</li>
				<li>AJAX user interface built with <a href="http://www.sencha.com/">Sencha</a> library ; </li>
				<li><abbr title="eXtensible Markup Language">XML</abbr> templating ;</li>
				<li>Application generator named <a href="http://man.automne.ws/web/Manual/329-the-polymod.php">Polymod</a> that allows you to develop current web applications without PHP coding. If you're a PHP developer, you can also develop your modules with <a href="http://www.automne.ws/api">Automne API</a> ;</li>
				<li>Groups and user rights management based on <abbr title="Role Base Access Control">RBAC</abbr> ;</li>
				<li> and a lot more like advanced validation workflow, multi-site management , <abbr title="Lightweight Directory Access Protocol">LDAP</abbr> connectivity, <abbr title="Hypertext Transfer Protocol Secured">HTTPS</abbr> and <abbr title="Single Sign On">SSO</abbr> support, etc.</li>
			</ul>
			
			<p><a href="http://sourceforge.net/projects/automne" title="Project on Sourceforge">Download Automne from sourceforge.net</a>. You need to have some skills in <abbr title="eXtensible HyperText Markup Language">XHTML</abbr> and <abbr title="Cascading Style Sheets">CSS</abbr> and PHP in order to build the templates. Free Automne templates will come soon.</p>
						
			<p>If you have questions, suggestions or wanna give some feedback, you can join us on <a href="http://www.automne.ws/forum/">the forum</a>, add your comments on Automne's blog or .</p></section>
			 
			<hr />
			
			<section>
			<h2>Paris Web</h2>
			
			<p>Every year I go to the best french web conference : <a href="http://www.paris-web.fr" hreflang="fr">Paris Web</a>.</p>
			
			<p>In 2009 <a href="http://www.viadeo.com/fr/profile/sebastien.pauchet" title="S&eacute;bastien Pauchet | Profile Viadeo">Sébastien Pauchet</a>, Automne CMS lead developer and I made a worshop on webapps's security.</p>
				
			<div id="__ss_2192415"><object width="425" height="355"><param name="movie" value="http://static.slidesharecdn.com/swf/ssplayer2.swf?doc=securitedesapplications-091011120426-phpapp02&amp;rel=0&amp;stripped_title=scurit-des-applications-web-2192415" /><param name="allowFullScreen" value="true"/><param name="allowScriptAccess" value="always"/><embed src="http://static.slidesharecdn.com/swf/ssplayer2.swf?doc=securitedesapplications-091011120426-phpapp02&amp;rel=0&amp;stripped_title=scurit-des-applications-web-2192415" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="355"></embed></object></div>
			</section>
			
			<h3><q>Please, don't hurt the web</q></h3>
			
			<p>I'm constantly following the evolution of some of the <a href="http://www.w3.org/">web standards</a> like <a href="http://www.w3.org/TR/html5/"><abbr title="HyperText Markup Language">HTML</abbr>5</a>, <a href="http://www.w3.org/Style/CSS/current-work"><abbr title="Cascading Style Sheets">CSS</abbr>3</a> and <a href="http://www.w3.org/DOM/#what"><abbr title="Document Object Model">DOM</abbr></a>. These tools allows you to separate structure, style and behavior. They should be the essentials components of every well-formed website in order to ease maintenance and improve <abbr title="Search Engine Optimization">SEO</abbr>, performance and accessibility, <abbr title="id est">i.e</abbr> ensuring your content is accessible to everyone, no matter what device or software they use.</p>
			
			<hr />

			<h2>Photography</h2>
			
			<p>I like to take pictures, even if I'm not a big traveler. I usually take street shots. Here are some of my pictures that people seem to appreciate the most on Flickr.</p>
			
			<div><object width="500" height="375"> <param name="flashvars" value="offsite=true&amp;lang=en-us&amp;page_show_url=%2Fphotos%2Fdirtyf%2Fsets%2F72157604061236129%2Fshow%2F&amp;page_show_back_url=%2Fphotos%2Fdirtyf%2Fsets%2F72157604061236129%2F&amp;set_id=72157604061236129&amp;jump_to="></param> <param name="movie" value="http://www.flickr.com/apps/slideshow/show.swf?v=71649"></param> <param name="allowFullScreen" value="true"></param><embed type="application/x-shockwave-flash" src="http://www.flickr.com/apps/slideshow/show.swf?v=71649" allowFullScreen="true" flashvars="offsite=true&amp;lang=en-us&amp;page_show_url=%2Fphotos%2Fdirtyf%2Fsets%2F72157604061236129%2Fshow%2F&amp;page_show_back_url=%2Fphotos%2Fdirtyf%2Fsets%2F72157604061236129%2F&amp;set_id=72157604061236129&amp;jump_to=" width="500" height="375"></embed></object></div>
			
			<hr />
			
			<h2>Continue elsewhere</h2>

			<p>Why do maintain a website who will only link to better <a href="http://www.webstandards.org/" title="Web Standards Projet">websites</a> and <a href="http://www.alistapart.com/" title="ALA, for people who make websites">articles</a> on the standards topic ? They're plenty of good technical resources on the web. Even here in France, the standards community is very active : either by <a href="http://www.pompage.net/" lang="fr" xml:lang="fr">translating best experts articles</a> or by <a href="http://openweb.eu.org/" lang="fr" xml:lang="fr">promoting web standards and accessibility</a>.</p>


			<h3>Uniform motion</h3>

			<p class="clearfix"><a href="http://uniformmotion.net/"><img class="top pull-1 left" src="/img/uniformmotion_thumbnail.jpg" width="80" height="81" alt="Uniform motion" /></a> <a href="http://uniformmotion.net/">Uniform Motion</a> is <a href="http://www.linkedin.com/pub/0/168/392" title="Andrew's LinkedIn Profile" rel="friend met">Andrew Richards</a>, my fellow english mate and talented graphic designer <a href="http://www.reuno.net" rel="friend met">Reuno</a>. I strongly invite you to listen and watch to their songs. Their second album <cite>Life</cite> is out now.</p>
			
			<object height="80" width="100%"><param name="movie" value="http://a1.soundcloud.com/player.swf?g=wi&url=http%3A//soundcloud.com/uniformmotion/words-run-on-ice-izo&player_type=waveform"></param><param name="wmode" value="transparent"></param><param name="allowscriptaccess" value="always"></param><embed allowscriptaccess="always" height="80" width="100%" src="http://a1.soundcloud.com/player.swf?g=wi&url=http%3A//soundcloud.com/uniformmotion/words-run-on-ice-izo&player_type=waveform" type="application/x-shockwave-flash" wmode="transparent"></embed></object>
			<span><a href="http://soundcloud.com/uniformmotion/words-run-on-ice-izo/">Words Run on Ice</a> by <a href="http://soundcloud.com/uniformmotion">UniformMotion</a></span>
			
			<!-- ><audio src="http://developer.mozilla.org/@api/deki/files/2926/=AudioTest_(1).ogg">  
			  Your browser does not support the <code>audio</code> element.  
			</audio> -->

		</section>
		</div>
		
		<div class="prepend-1 span-5 last">
		<aside id="sidebar">

		<p><a href="http://twitter.com/DirtyF" rel="me"><img src="/img/followmeontwitter.png" width="201" height="74" alt="Follow me on Twitter" /></a></p>

		<h3>Web profiles</h3>
			<ul>
				<li><a href="http://www.linkedin.com/in/franktaillandier" rel="me">LinkedIn</a></li>
				<li><a href="http://flickr.com/photos/dirtyf/" title="Photo Sharing" rel="me">Flickr</a></li>
				<li><a href="http://www.last.fm/user/DirtyF/" title="Music Network" rel="me">LastFM</a></li>
			</ul>
			
		<p><a href="http://www.automne.ws" hreflang="fr" title="Automne, opensource content management system"><img src="/img/automne.png" alt="Automne" width="201" /></a></p>
			
			<h3>Links</h3>
			<ul>
				<li><a href="http://www.alsacreations.com/" hreflang="fr">Alsacréations</a></li>
				<li><a href="http://prendreuncafe.com/blog/" title="Le blog de Nicolas Perriault" rel="friend met">Prendre un café</a></li>
				<li><a href="http://marcarea.com/weblog/" hreflang="fr">Marc Area</a></li>
				<li><a href="http://case.oncle-tom.net/" hreflang="fr" title="leblog de Thomas Parisot" rel="friend met">Oncle Tom</a></li>
				<li><a href="http://www.fivesimplesteps.co.uk" title="Five Simple Steps ~ A book by Mark Boulton">Five Simple Steps</a></li>	
				<li><a href="http://www.css3.info/">CSS3.info</a></li>
				<li><a href="http://html5doctor.com">&lt;HTML&gt;5 doctor</li>
			</ul>
			
		<p><a href="http://www.sudweb.fr" hreflang="fr" title="Sud Web, faire savoir et savoir faire le web"><img src="/img/sudweb-2011.png" width="190" /></a></p>
			
			<!-- Start of Flickr Badge
			<style type="text/css">
			#flickr_badge_source_txt {padding:0;}
			#flickr_badge_icon {display:block; margin:0; border: none;}
			#flickr_icon_td {padding:0 5px 0 0;}
			.flickr_badge_image {text-align:left;}
			.flickr_badge_image img {border: 1px solid rgb(221,221,221);}
			#flickr_www {display:block; padding:0 10px 0 10px; color:#3993ff;}
			#flickr_badge_uber_wrapper a:hover,
			#flickr_badge_uber_wrapper a:link,
			#flickr_badge_uber_wrapper a:active,
			#flickr_badge_uber_wrapper a:visited {text-decoration:none; background:inherit;color:#3993ff;}
			#flickr_badge_wrapper {border: none;}
			#flickr_badge_source {padding:0;}
			</style>
			<table id="flickr_badge_uber_wrapper" cellpadding="0" cellspacing="0"><tr><td><a href="http://www.flickr.com" id="flickr_www">www.<strong style="color:#3993ff">flick<span style="color:#ff1c92">r</span></strong>.com</a><table cellpadding="0" cellspacing="0" id="flickr_badge_wrapper">
			<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=10&amp;display=random&amp;size=s&amp;layout=v&amp;source=user_set&amp;user=87316663%40N00&amp;set=72157604061236129&amp;context=in%2Fset-72157604061236129%2F"></script>
			</table>
			</td></tr></table>
			End of Flickr Badge -->
			
		</aside>
		</div>
		<hr />
		<div class="span-24">
		<footer>
			<p><!-- <a href='http://feedwhip.com/feed/whip/?url=http%3A%2F%2Ffrank.taillandier.free.fr%2F&amp;name=DirtyF'>Subscribe</a> - -->Made with <a href="http://macromates.com/">TextMate</a> and <a href="http://www.blueprintcss.org/">Blueprint</a> on <a href="http://www.apple.com/fr/macosx/">Mac OS X</a></p>

			<p>Powered by <a href="http://microformats.org"><img src="/img/microformats.png" title="Download my hcard" alt="hcard" class="microformats" /></a>. <a href="http://html5.validator.nu/?doc=http%3A%2F%2Ffrank.taillandier.free.fr" title="valid HTML5"><abbr title="HyperText Markup Language">HTML5</abbr></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" title="valid CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a> by <a href="http://www.w3.org/" title="World Wide Web Consortium">W3C</a></p>
		</footer>
		</div>
	</div>
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-15560088-1");
	pageTracker._trackPageview();
	} catch(err) {}</script>
</body>
</html>
