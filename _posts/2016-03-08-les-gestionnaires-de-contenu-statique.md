---
layout: post
title: La mouvance statique
description: Un plaidoyer en faveur des gestionnaires de contenu statique
image: /assets/img/2016/03/jekyll-terminal.png
---

En quelques années, les gestionnaires de contenu statique, Jekyll en tête sont devenus très populaires, de Google à Netflix en passant par Mailchimp, Mapbox ou NodeJS, ils sont partout et sont devenus le choix de la raison pour les sites de contenus à fort traffic. Leurs usages évoluent et de nouveaux services dédiés viennent enrichir et faciliter l'expérience utilisateur des contributeurs et des développeurs.

L’article que vous êtes en train de lire est écrit dans une [application de bureau à l’interface minimale](https://ia.net/writer) spécialement conçue pour offrir une bonne expérience de rédaction. Comme le dit Golden Krishna dans son livre, [la meilleure interface c’est encore de ne pas en avoir](http://www.nointerface.com/book/).

Le fichier texte est ensuite transformé en page HTML par un gestionnaire de contenu statique. Et aujourd’hui je vais essayer de vous donner de bonnes raisons de vous y intéresser, voire d'en adopter un à votre tour.

<!-- excerpt -->

Essayons tout d’abord de comprendre ce qui pourrait passer pour un retour en arrière aux yeux de certains, alors qu’il faut simplement y voir une évolution logique d’un processus de publication parfaitement adapté à notre manière asynchrone de travailler et aux ressources technologiques actuelles.

## La fatigue du dynamique

Encore aujourd'hui les CMS dynamiques, Wordpress et Drupal en tête, font tourner la plupart des sites web de la planète. Ces logiciels sont alimentés en temps réel par des bases de données et demandent un certain niveau de maintenance ne serait-ce que pour garantir la sécurité des contenus et assurer de bonnes performances aux utilisateurs. Quand l’interface d’administration est hébergée avec le site web, cela implique que l’expérience du contributeur est fonction des performances du site. Je ne souhaite à personne de ne plus avoir accès à son interface d’administration en ligne, pour cause de fort trafic.

Malheureusement la majorité de ces sites ne sont pas bien maintenus et sont donc [vulnérables](http://codex.wordpress.org/FAQ_My_site_was_hacked) à de potentielles attaques. Ils sont souvent inutilement lents car leur contenu n’est pas mis à jour en permanence, mais à chaque clic, c’est une requête vers la base de données qui est déclenchée pour servir le même contenu aux utilisateurs.

Les plus experts argumenteront qu’on peut toujours mettre en place des stratégies de cache et de serveur proxy comme Varnish, mais une telle architecture a un coût non négligeable. Et l’invalidation de cache est une des choses les plus complexes en informatique. Si vous ne le saviez pas, [Martin Fowler se chargera de vous le rappeler](http://martinfowler.com/bliki/TwoHardThings.html) :

> There are only two hard things in Computer Science: cache invalidation and naming things — Phil Karlton

Ces problèmes sont déjà beaucoup plus simples à résoudre si on se contente de servir du contenu statique.

Revenir à des choses simples et performantes, c'est la philosophie du gestionnaire de contenu statique. Beaucoup plus rapides par défaut, plus sécurisés et donc moins onéreux. Ils connaissent une popularité grandissante de par leur éfficacité et la facilité avec laquelle il est possible de nos jours de faire du déploiement continu, à savoir plusieurs dizaines de mises en production par jour. Cette philosophie qui a toujours animé la communauté open-source anime aujourd’hui celle des startups et des organisation agiles.

> Release early, Release Often — Eric S. Raymond, la Cathédrale et le Bazaar, 1999.

Et si vous n’êtes pas capable dans le monde d’aujourd’hui de déployer souvent, vous avez des problèmes d’organisation voire de [dette technique](//boutique.letrainde13h37.fr/products/la-dette-technique-bastien-jaillot).

## La simplicité du statique

L'engouement pour le statique est tel que des blogueurs comme le webdesigner Dan Cederholm, fondateur de Dribbble, [confessent](http://simplebits.com/2015/01/03/static.html) le plaisir de revenir à de l’hypertexte. Fort logiquement [le blog de Dribbble](https://dribbble.com/stories) est lui aussi géré en statique.

Pour la petite histoire, [Ben Balter](http://ben.balter.com/about/) était un ancien contributeur Wordpress, quand il a découvert Jekyll. Il a eu une révélation et s’est empressé de développer un outil de [migration de Wordpress à Jekyll](https://github.com/benbalter/wordpress-to-jekyll-exporter). Ben travaille aujourd’hui pour Github, où il est chargé de [sensibiliser les gouvernements à l’open-source](https://government.github.com/) et c’est un des principaux contributeurs à Jekyll et Github Pages.

On recense à ce jour plus de [400 gestionnaires de contenu statique](https://staticsitegenerators.net/), écrits dans différents langages et différents formats pour concevoir les modèles de page, certains entièrement basés sur JavaScript et les standards web. Il y en a bien un qui vous plaira dans le lot. Jekyll reste le plus populaire, il bénéficie d'une large communauté et d'un riche écosystème.

Lorsqu'en 2008 Tom Preston-Werner, le cofondateur de Github, explique [comment bloguer comme un hacker](http://tom.preston-werner.com/2008/11/17/blogging-like-a-hacker.html), il pose les bases d'une architecture volontairement simple qui place le format des contenus, le versionnement, le déploiement, la sécurité et la performance au cœur de la philosophie de son logiciel.

Dans Jekyll[^1], c’est [Liquid](https://docs.shopify.com/themes/liquid), un langage conçu par Shopify, qui permet d'insérer des données et de la logique dans les modèles de pages. Sa [syntaxe](https://github.com/Shopify/liquid/wiki/Liquid-for-Designers) composée d'une douzaine de balises et d'une série de filtres très utiles pour manipuler les données est très accessible aux designers web.

Comme dans d'autres frameworks comme Rails, Ember ou Meteor, les conventions priment sur la configuration[^2]. Vous avez simplement à respecter quelques conventions, comme stocker vos articles dans un dossier `_posts` ou vos données dans un dossier `_data`.

Vous pouvez apprendre à votre rythme  commencer avec des fichiers HTML et CSS standards, puis transformer vos fichiers HTML en modèles, les séparer en composants réutilisables et en extraire petit à petit les données.

Vous pouvez aussi créer facilement [vos propres structures de données](https://www.smashingmagazine.com/2016/02/content-modeling-with-jekyll/) et définir autant de [variables dont vous avez besoin via les entêtes Front Matter au format YAML](https://github.com/planetjekyll/quickrefs/blob/master/YAML.md).

Il n’y a pas d'interface graphique, même si nous allons voir qu’elles commencent à arriver. L’idée est de rester focalisé sur le contenu. Une commande pour générer le site, une autre pour déployer et c’est reparti pour un tour.

{% include figure.html url="/assets/img/2016/03/jekyll-terminal.png" description="Jekyll en action dans le terminal" %}

Ce même principe a été repris dans la plupart des gestionnaires de contenu statiques plus récents comme [Hugo](http://gohugo.io/), écris en Go et impressionnant par ses performances.

Fidèle à la philosophie Unix, ces logiciels se contentent de transformer des contenus au format texte en site statique, l' enrichissement en fonctionnalités se feront à l’aide des extensions développées par la communauté.

##  Des contenus accessibles et réutilisables

> the problem with WYSIWYG is that we are giving content creators an antiquated metaphor from the desktop publishing era to communicate to them what it means to publish on the web — Karen Mc Grane

Il n'y a pas que les développeurs et les designers web qui trouvent cette approche intéressante, Karen McGrane, la papesse de la stratégie de contenu, explique qu'il est important que les [contenus puissent être stockés indépendamment de tout système de publication](//karenmcgrane.com/2014/10/15/content-in-a-zombie-apocalypse/) dans des formats lisibles et débarrassés de toute présentation. De plus le fameux WYSIWYG (What You See Is What You Get) est une fausse promesse de par la nature imprévisible du web car vous ne pouvez pas savoir sur quel périphérique sera affiché votre contenu : un ordinateur portable, un téléphone, une montre, une télé, des lunettes connectées ?

Des formats textes comme [Markdown](https://guides.github.com/features/mastering-markdown/), au balisage minimal offrent à la fois une bonne expérience pour la rédaction et peuvent être ensuite facilement transformés en HTML, mis en forme via CSS et enrichis via JavaScript.

Le format Markdown est de plus en plus populaire chez les rédacteurs et a été adopté comme format par défaut par des logiciels comme [Ghost](https://blog.ghost.org/markdown/), un logiciel de blog écrit en NodeJS qui focalise lui aussi sur l’expérience de rédaction de contenu.

Beaucoup d'applications comme [MacDown](http://macdown.uranusjr.com/), [IA Writer](https://ia.net/writer) ou [Ulysses](http://www.ulyssesapp.com/) sous Mac, *insérez votre application open-source préférée ici* ou de services en ligne permettent aujourd'hui d‘[éditer du Markdown](https://stackedit.io/editor) de manière simple.

{% include figure.html url="/assets/img/2016/03/macdown.png" description="Aperçu de cet article dans MacDown" %}

Les contenus ne sont donc plus enfermés dans une base de données, ils sont stockées dans des format texte comme Markdown, YAML ou JSON. Il est dès lors possible d’exposer vos contenus au format JSON et de proposer une [API RESTful](https://codeplanet.io/principles-good-restful-api-design/) pour que vos données puissent être réutilisées par d'autres sites.

En privilégiant ces formats, les gestionnaires de contenu statiques vous garantissent l’accessibilité, la réutilisation et des migrations grandement facilitées.

## Une adoption croissante

Si le besoin de départ était de simplement versionner et servir son blog sous forme de contenu statique, les avantages mentionnés plus haut ont vite intéressés les sites de contenu à fort trafic. Ainsi en 2011 Mailchimp annonçait [la refonte de son site](https://blog.mailchimp.com/building-the-new-mailchimp/) avec un gestionnaire de contenu statique.

En 2012, c'est [l'équipe de Barack Obama qui choisit Jekyll](//kylerush.net/blog/meet-the-obama-campaigns-250-million-fundraising-platform/), pour recueillir les dons pour le financement de sa campagne. Les objectifs sont dépassés, le site est **60% plus rapide** et grâce à une démarche UX agile et au déploiement continu, l'objectif de départ est dépassé, et c'est 250 millions de dollars qui seront récoltés.

Le trio [GitHub Pages, Jekyll et CDN](https://help.github.com/articles/using-jekyll-as-a-static-site-generator-with-github-pages/) fait des merveilles et le gouvernement américain renouvelle l'expérience en 2013 pour le site [Healthcare.gov](https://www.healthcare.gov/).
Un code source ouvert et accessible, des données accessibles à d'autres services, le geste est fort de la part d'une administration publique. Si la France pouvait s’inspirer de cette démarche ouverte…

Afin de faciliter les contributions, et ajouter une couche d’abstraction du versionnement pour les rédacteurs, l'équipe développe une version améliorée de [prose.io](http://prose.io/#about), un éditeur de Markdown qui s'interface avec votre dépôt Github.

## Un workflow naturel

> Jekyll transitions smoothly between prototyping, content authoring, and deployment tasks — [Young Hahn](https://developmentseed.org/blog/2011/09/09/jekyll-github-pages/)

En développant ces sites, l'équipe s'aperçoit que le gestionnaire de contenu statique peut-être utilisé dès la phase de prototypage. Les contenus peuvent être ajoutés en parallèle, et la mise en production en devient presque anecdotique.

La documentation et le [styleguide](http://styleguides.io/) peuvent également être générés lors de l’étape de *build*, ce qui assure qu'ils soient tout le temps à jour.

> Unless it’s part of your build, your styleguide is just more documentation to maintain — [Phil Hawksworth](https://speakerdeck.com/philhawksworth/static-sites-go-all-hollywood?slide=56)

Aujourd'hui quand vous êtes développeur, vous consultez en permanence des sites de documentation servis en statique : [Bootstrap](http://getbootstrap.com/), [Foundation](http://foundation.zurb.com/), [NodeJS](https://nodejs.org/en/) ou [Google Web fundamentals](https://developers.google.com/web/fundamentals/) pour n'en citer que quelques uns.

Beaucoup sont hébergés sur Github pour faciliter les contributions et à ce jour le service [GitHub Pages héberge près d'un million de sites statiques](https://github.com/blog/1992-eight-lessons-learned-hacking-on-github-pages-for-six-months), qui sont tous stockés sur des CDN. Le service étant gratuit pour les projet open-source, il serait bête de s'en priver. C’est d’ailleurs ce que nous avons fait pour le site de [Sud Web](http://sudweb.fr/2016/).

## Un web de services

Les gestionnaires de contenu statique ne font qu'une chose et le font bien et si vous avez besoin de fonctionnalités supplémentaires comme du paiement en ligne, vous passez par des services tiers comme en dynamique. On s'éloigne du monolithique pour se rapprocher de la philosophie des [microservices](https://fr.wikipedia.org/wiki/Microservices), votre application interagit avec plusieurs services, chacun est interchangeable et vous permet de choisir le plus adapté à vos besoins.

Comme Github [Pages](https://pages.github.com/) ou [prose.io](http://prose.io/#about), de nouveaux services permettent de faciliter le déploiement ou d'améliorer l'expérience utilisateur :

* [Cloudcannon](http://cloudcannon.com/) propose une interface graphique pour gérer Jekyll et ses contenus. Parmi ses clients, Netflix l'utilise pour présenter la [diversité d'appareils](https://devices.netflix.com) avec lesquels il est possible de consulter leurs contenus.

* [Contenful](https://www.contentful.com/) propose une API pour gérer et modeler ses contenus et uniquement les contenus pour ensuite pouvoir les diffuser sur différentes plateformes. Vos contenus peuvent être récupérés de différents endroits et assemblés avant d'être importés dans Jekyll, [Middleman](https://middlemanapp.com/) ou [roots](http://roots.cx/) par exemple.

* [Netlify](https://www.netlify.com/) se propose d'optimiser la performance et l'hébergement de vos sites statiques sur leurs CDN et d'automatiser le déploiement continu en y connectant directement votre dépôt Github ou Bitbucket. NodeJS est dispo par défaut, à vous les web apps performantes.

* [Eager.io](https://eager.io/) se propose de faciliter l'intégration [de services tiers](https://eager.io/apps) à votre site statique.

Ces différents services permettent de mettre en place des architectures décentralisées comme l'a fait l'agence [Carrot](http://carrot.is/coding/static_cms), éditrice du gestionnaire de contenu roots :

![Exemple d'architecture de services pour servir du statique](http://netlify.scdn4.secure.raxcdn.com/cf89f31c56172ed6da0e895513d16fbb717b01a2/b3215/img/coding/contentful_netlify_workflow.svg)

Bien sur on peut se poser la question de la dépendance à des services, mais rien ne vous empêche d’héberger ou de sauvegarder vos sites statiques sur vos propres serveurs.

Tom Preston-Werner [expliquait](https://youtu.be/BMve1OCKj6M?t=39m55s) lors de la première [JekyllConf](http://jekyllconf.com/), que **si certains sites redeviennent statiques, c'est qu'ils auraient toujours du le rester**, mais que nous ne disposions pas il y a dix ans de tous les outils actuels. Lorsque le dynamique est arrivé c'est devenu la solution par défaut. Sauf que vous ne pouvez pas servir du dynamique à des millions de personnes en même temps. Vous vous heurtez à un moment à des problèmes d'échelle. Générer le même contenu pour tous vos visiteurs est souvent préférable, c'est ce que fait Github la plupart du temps. Les lignes entre le statique et le dynamique sont floues car ces derniers peuvent aussi générer du statique, le mettre en cache et le servir sur des CDNs.

Il existe en effet des extensions pour générer du statique à partir de Drupal ou de Wordpress si vos contenus ne changent pas en permanence.  Si vous préférez y aller en douceur, sachez que [le statique cohabite très bien avec le dynamique](https://www.netlify.com/blog/2016/03/10/go-static-without-losing-your-server), vous pouvez donc tirer le meilleur parti des deux mondes.

## Conclusion

Penser statique par défaut, n'est pas du tout une mode destinée à rester confidentielle parmi les hackers, c'est une réponse simple à des problématiques complexes. Gardez en tête que 78% des sites sous Wordpress souffrent de vulnérabilités et que quand une faille de sécurité impacte Drupal, des millions de sites sont concernés.

C’est donc une solution qui vous devriez sérieusement considérée si vous souhaiter réduire vos coûts d'infrastructure. **Sur de très gros sites, le coût peut être divisé par 15**. Le statique est idéal pour des sites de contenus : présentation produit, documentation, blog ou webapp moderne en JavaScript. L'écosystème autour est en plein essor et va fort logiquement continuer de se développer.

Une des priorité est maintenant de rendre ces outils encore plus accessibles aux rédacteurs. Github continue de soutenir le développement de Jekyll et vient de lancer un appel afin de [proposer une interface utilisateur pour la rédaction et l’administration](https://github.com/github/mentorships/issues/107) à l'instar de ce que propose Cloudcannon. Parallèlement, il y a une vraie volonté de la part de la communauté d‘[augmenter le nombre de contributeurs au projet](https://jekyllrb.com/news/2016/03/10/making-it-easier-to-contribute-to-jekyll/) car il y a encore beaucoup à faire. Quand on voit les progrès réalisés depuis deux ans, c’est très encourageant pour la suite.

Grâce aux avancées de HTML5 et l'accès à des plateformes d'hébergement performantes, le statique a de beaux jours devant lui .

J’espère que cet article vous réfléchira à deux fois avant de partir les yeux fermés sur du dynamique pour votre prochain projet. Vous connaissez maintenant les nouveaux paradigmes qui laissent présager une [ère post-CMS](http://www.meetup.com/fr-FR/The-New-Dynamic/) comme certains l’appellent déjà.

Vous pouvez aussi [consulter la présentation associée](https://speakerdeck.com/dirtyf/keep-it-static-stupid) à cet article si vous tenez vraiment à voir des captures d’écran des sites mentionnés.

<script async class="speakerdeck-embed" data-id="03e3e66c6d2845158240a3aa50f50b11" data-ratio="1.77777777777778" src="//speakerdeck.com/assets/embed.js"></script>

<p class="message">Je profite de ce billet pour vous annoncer la création d'un groupe francophone des utilisateurs de Jekyll. Je vous invite à suivre <a href="https://twitter.com/jekyll_fr">jekyll_fr sur Twitter</a> où à venir partager vos retours d'expérience sur notre <a href="https://jekyll-fr.herokuapp.com/">channel Slack</a>.</p>

-------

## Notes

[^1]:[Jeyll](http://jekyllrb.com/) est le gestionnaire de contenu statique le plus populaire, en partie car il est supporté nativement par [Github Pages](https://pages.github.com/).
[^2]: Quand les conventions priment, le développeur a moins de choix à faire, mais ne perd pas pour autant en flexibilité - source [Wikipedia](https://en.wikipedia.org/wiki/Convention_over_configuration).
