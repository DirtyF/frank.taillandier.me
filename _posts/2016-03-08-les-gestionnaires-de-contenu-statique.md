---
title: La mouvance statique
description: Un plaidoyer en faveur des gestionnaires de contenu statique
image: /assets/img/2016/03/jekyll-terminal.png
---

En quelques années, les gestionnaires de contenu statique, Jekyll en tête sont
devenus très populaires, de Google à Netflix en passant par Mailchimp, Mapbox ou
NodeJS, ils sont partout et sont devenus le choix de la raison pour les sites de
contenus à fort trafic. Leurs usages évoluent et de nouveaux services dédiés
viennent enrichir et faciliter l'expérience utilisateur des contributeurs et des
développeurs.
{: .lead }

Cette stack permet aux différents intervenants de se concentrer sur l'essentiel.
Les rédacteurs peuvent ainsi rédiger leurs articles au format Markdown, un
format texte très simple et très lisible, qui facilité la portabilité.

L’article que vous êtes en train de lire est écrit dans une [application de
bureau à l’interface minimale](https://ia.net/writer) spécialement conçue pour
offrir une bonne expérience de rédaction. Comme le dit Golden Krishna dans son
livre, [la meilleure interface c’est encore de ne pas en
avoir](http://www.nointerface.com/book/).

Performance, sécurité, décentralisation, portabilité, autant d'excellentes
raisons derrière l'adoption croissante de cette stack qui combine souvent
[JavaScript, des APis et du Markup](/2016/05/21/la-jamstack/).

Essayons de comprendre ce qui pourrait passer pour un retour en arrière aux yeux
de certains, alors qu’il faut simplement y voir une évolution logique d’un
processus de publication parfaitement adapté à notre manière asynchrone de
travailler et aux ressources technologiques actuelles.

## La fatigue du dynamique

La plupart des CMS datent de l'ère LAMP et ont vu le jour au début des années
2000, encore aujourd'hui les CMS dynamiques, Wordpress et Drupal en tête, font
tourner une bonne partie des sites web de la planète. Ces logiciels sont
alimentés en temps réel par des bases de données et demandent un certain niveau
de maintenance ne serait-ce que pour garantir la sécurité des contenus et
assurer de bonnes performances aux utilisateurs. L’interface d’administration
est hébergée avec le site web, cela implique que l’expérience du contributeur
est fonction des performances du site. Je ne souhaite à personne de ne plus
avoir accès à son interface d’administration en ligne, pour cause de fort
trafic.

Malheureusement la majorité de ces sites ne sont pas bien maintenus et sont donc
[vulnérables](http://codex.wordpress.org/FAQ_My_site_was_hacked) à de
potentielles attaques. Ils sont souvent inutilement lents car leur contenu n’est
pas mis à jour en permanence, mais à chaque clic, c’est une requête vers la base
de données qui est déclenchée pour servir le même contenu aux utilisateurs.

Les plus experts argumenteront qu’on peut toujours mettre en place des
stratégies de cache et de serveur proxy comme Varnish, mais une telle
architecture a un coût non négligeable. Et l’invalidation de cache est une des
choses les plus complexes en informatique. Si vous ne le saviez pas, [Martin
Fowler se chargera de vous le
rappeler](http://martinfowler.com/bliki/TwoHardThings.html) :

> There are only two hard things in Computer Science: cache invalidation and
> naming things — Phil Karlton

Ces problèmes sont déjà beaucoup plus simples à résoudre si on se contente de
servir du contenu dit *statique* - rassurez-vous on sait très bien faire du
dynamique côté client en JavaScript de nos jours.

Revenir à des choses simples et performantes, c'est la philosophie du
générateurs de site statique. Déployés sur des CDNs à moindre coût, ils sont
plus rapides, plus sécurisés et donc beaucoup moins onéreux. Les sites statiques
connaissent une popularité grandissante de par leur efficacité et la facilité
avec laquelle il est possible de nos jours de faire du déploiement continu, à
savoir plusieurs dizaines de mises en production par jour.

Ils sont fidèles en cela à la philosophie qui a toujours animé la communauté
open-source et qui anime aujourd’hui les startups et les organisation agiles.

> Release early, release often
> — Eric S. Raymond, la Cathédrale et le Bazaar, 1999.

Et si vous n’êtes pas capables de déployer sans crainte en permanence, vous avez
sûrement contracté une bonne [dette
technique]({% post_url 2014-11-06-intro-dette-technique %}).

## La simplicité du statique

Des blogueurs comme le webdesigner Dan Cederholm, fondateur de Dribbble,
[confessent](http://simplebits.com/2015/01/03/static.html) le plaisir de revenir à
de l’hypertexte. Fort logiquement [le blog de
Dribbble](https://dribbble.com/stories) est lui aussi géré en statique. Si des
webdesigners l'adoptent, c'est que la courbe d'apprentissage est très rapide
quand vous faites du développement web front-end. Vous ressentez ce plaisir de
reprendre la main sur vos contenus et de les organiser comme bon vous semble,
sans être contraints par les choix imposés par un CMS.

Pour la petite histoire, [Ben Balter](http://ben.balter.com/about/) était un
ancien contributeur Wordpress, quand il a découvert Jekyll. Il a eu une
révélation et s’est empressé de développer un outil de [migration de Wordpress à
Jekyll](https://github.com/benbalter/wordpress-to-jekyll-exporter). Ben
travaille aujourd’hui pour Github, où il est chargé de [sensibiliser les
gouvernements à l’open-source](https://government.github.com/) et c’est un des
principaux contributeurs à Jekyll et Github Pages. Il est vraiment tombé
amoureux de cette stack.

On recense à ce jour plus de [450 gestionnaires de contenu
statique](https://staticsitegenerators.net/), écrits dans différents langages et
différents formats pour concevoir les modèles de page, certains entièrement
basés sur JavaScript et les standards web. Il y en a bien un qui sera le bon
outil pour vous. Tout dépend de votre besoin, de votre stack actuelle et des
compétences de votre équipe.

Jekyll, écrit en Ruby par un cofondateur de GitHub, reste le plus populaire, car
il bénéficie d'une large communauté et d'un riche écosystème. Lorsqu'en 2008 Tom
Preston-Werner explique [comment bloguer comme un
hacker](http://tom.preston-werner.com/2008/11/17/blogging-like-a-hacker.html),
il pose les bases d'une architecture volontairement simple qui place le format
des contenus, le versionnement, le déploiement, la sécurité et la performance au
cœur de la philosophie de son logiciel.

Dans Jekyll[^1] ou [Middelman](https://middlemanapp.com/), c’est
[Liquid](https://docs.shopify.com/themes/liquid), un langage de templating conçu
par Shopify, qui permet d'insérer des données et de la logique dans les modèles
de pages. Sa
[syntaxe](https://github.com/Shopify/liquid/wiki/Liquid-for-Designers) composée
d'une douzaine de balises et d'une série de filtres très utiles pour manipuler
les données est très accessible aux designers web. Si vous préférez utiliser
Swig, Handlebars ou React, regardez plutôt du côté d'[Hexo](https://hexo.io),
d'[Assemble](http://assemble.io/), de [Metalsmith](http://www.metalsmith.io/) ou
de [Gatsby](https://github.com/gatsbyjs/gatsby).

Comme dans des frameworks comme Rails, Ember ou Meteor, les conventions priment
sur la configuration[^2]. Vous devrez souvent respecter quelques conventions,
comme stocker vos articles dans un dossier `_posts` ou vos données dans un
dossier `_data`.

Ce qui est chouette, c'est que vous pouvez apprendre à votre rythme et commencer
avec des fichiers HTML et CSS standards puis transformer vos fichiers HTML en
modèles, les séparer en composants réutilisables et en extraire petit à petit
les données.

Vous pouvez aussi créer facilement [vos propres structures de
données](https://www.smashingmagazine.com/2016/02/content-modeling-with-jekyll/)
et définir autant de [variables dont vous avez besoin via les entêtes Front
Matter au format
YAML](https://github.com/planetjekyll/quickrefs/blob/master/YAML.md).

Point important, à l'inverse des flat CMS comme [Kirby](https://getkirby.com/)
ou [Grav](https://getgrav.org/), il n'y a pas d'interface graphique fournie par
défaut, même si elles commencent à arriver via l'ajout de plugins ou en faisant
appel à des services dédiés[^headless-cms].

{% include_cached figure.html url="/assets/img/2016/03/cloudcannon-editor.png"
description="L'éditeur de contenu de Cloudcannon" %}

Fidèles à la philosophie UNIX, les générateurs se contentent de faire une seule
chose à la fois : transformer des contenus en site statique. C'est surement pour
cette raison qu'il y en a autant. Certains vont plus loin que d'autres en
intégrant notamment des commandes pour le déploiement. Comme dans les CMS
l'enrichissement en fonctionnalités se fait à l’aide d'extensions et autres
plugins.

{% include_cached figure.html url="/assets/img/2016/03/jekyll-terminal.png"
description="Jekyll en action dans le terminal" %}

Plus vous aurez de fichiers à générer, plus l'étape de *build* prendra du temps.
Il vous faudra donc faire en sorte de limiter ce temps au minimum si vous
souhaitez que vos mises en production ne prennent que quelques secondes. Si des
gestionnaires de contenu statiques plus récents comme [Hugo](http://gohugo.io/)
écrit en Go sont très performants, il sera parfois plus judicieux de [découper
vos contenus en plusieurs parties et de ne générer que le strict
nécessaire](https://www.smashingmagazine.com/2016/08/using-a-static-site-generator-at-scale-lessons-learned/).

Le gros avantage de cette stack c'est de pouvoir l'adapter à vos besoins et
comme avec des LEGO™ vous pouvez créer votre propre système de publication.

## Des contenus accessibles et réutilisables

> the problem with WYSIWYG is that we are giving content creators an antiquated
> metaphor from the desktop publishing era to communicate to them what it means to
> publish on the web — Karen Mc Grane

Il n'y a pas que les développeurs et les designers web qui trouvent cette
approche intéressante, Karen McGrane, la papesse de la stratégie de contenu,
explique qu'il est important que les [contenus puissent être stockés
indépendamment de tout système de
publication](//karenmcgrane.com/2014/10/15/content-in-a-zombie-apocalypse/) dans
des formats lisibles et débarrassés de toute présentation. De plus le fameux
WYSIWYG (What You See Is What You Get) est une fausse promesse de par la nature
imprévisible du web car vous ne pouvez pas savoir sur quel périphérique sera
affiché votre contenu : un ordinateur portable, un téléphone, une montre, une
télé, des lunettes connectées ?

Des formats textes comme
[Markdown](https://guides.github.com/features/mastering-markdown/), au balisage
minimal offrent à la fois une bonne expérience pour la rédaction et peuvent être
ensuite facilement transformés en HTML, mis en forme *via* CSS et enrichis *via*
JavaScript.

Le format Markdown est de plus en plus populaire chez les rédacteurs et [les
éditeurs](http://blogs.getty.edu/iris/an-editors-view-of-digital-publishing/) et
a été adopté comme format par défaut par des logiciels comme
[Ghost](https://blog.ghost.org/markdown/), un logiciel de blog écrit en NodeJS
qui se focalise lui aussi sur l’expérience de rédaction de contenu.

Beaucoup d'applications comme [MacDown](http://macdown.uranusjr.com/), [IA
Writer](https://ia.net/writer) ou [Ulysses](http://www.ulyssesapp.com/) sous
Mac, *insérez votre application open-source préférée ici* ou de services en
ligne permettent aujourd'hui d‘[éditer du Markdown](https://stackedit.io/editor)
de manière simple.

{% include_cached figure.html url="/assets/img/2016/03/macdown.png"
description="Aperçu de cet article dans MacDown" %}

Les contenus ne sont donc plus enfermés dans une base de données, ils sont
stockées dans des formats texte comme Markdown, YAML ou JSON. Il est dès lors
possible d’exposer vos contenus au format JSON et de proposer une [API
RESTful](https://codeplanet.io/principles-good-restful-api-design/) pour que vos
données puissent être réutilisées par d'autres sites.

En privilégiant ces formats, les gestionnaires de contenu statiques vous
garantissent l’accessibilité, la réutilisation et des migrations grandement
facilitées.

## Une adoption croissante

Si le besoin de départ était de simplement versionner et servir son blog sous
forme de contenu statique, les avantages mentionnés plus haut ont vite
intéressés les sites de contenu à fort trafic. Ainsi en 2011 Mailchimp annonçait
[la refonte de son site](https://blog.mailchimp.com/building-the-new-mailchimp/)
avec un gestionnaire de contenu statique.

En 2012, c'est [l'équipe de Barack Obama qui choisit
Jekyll](//kylerush.net/blog/meet-the-obama-campaigns-250-million-fundraising-platform/),
pour recueillir les dons pour le financement de sa campagne. Les objectifs sont
dépassés, le site est **60% plus rapide** et grâce à une démarche UX agile et au
déploiement continu, l'objectif de départ est dépassé, et c'est 250 millions de
dollars qui seront récoltés.

Un code source ouvert, des données accessibles à d'autres services, le geste est
fort de la part d'une administration publique.

En 2016, les leçons ont bien été apprises et on ne s'étonne plus de voir que le
site d'[Hillary Clinton](https://www.hillaryclinton.com/) soit servi en
statique. Il existe même un service dédié pour [publier les sites
gouvernementaux américains en statique](https://federalist.18f.gov/). Si la
France pouvait s’inspirer de cette démarche ouverte…

De son côté, le trio [GitHub Pages, Jekyll et
CDN](https://help.github.com/articles/using-jekyll-as-a-static-site-generator-with-github-pages/)
continue d'être très utilisé que ce soit par les administrations, des sociétés
privées ou des associations.

Afin de faciliter les contributions et ajouter une couche d’abstraction du
versionnement pour les rédacteurs, on peut utiliser le service
[prose.io](http://prose.io/#about), qui propose une interface graphique pour
éditer des fichiers Markdown reliée avec votre dépôt Github.

## Un workflow naturel

> Jekyll transitions smoothly between prototyping, content authoring, and
> deployment tasks — [Young Hahn](https://developmentseed.org/blog/2011/09/09/jekyll-github-pages/)

Le gestionnaire de contenu statique peut être utilisé dès la phase de
prototypage, les contenus peuvent être ajoutés au fur et à mesure et après avoir
itéré jusqu'à parvenir à un premier résultat assez satisfaisant, le déploiement
en production en devient anecdotique.

La documentation et le [styleguide](http://styleguides.io/) peuvent également
être générés lors de l’étape de *build*, ce qui assure qu'ils soient tout le
temps à jour. Grâce à Git, les développeurs, les designers et les rédacteurs
partagent un processus de travail commun.

> Unless it’s part of your build, your styleguide is just more documentation to
> maintain — [Phil Hawksworth](https://speakerdeck.com/philhawksworth/static-sites-go-all-hollywood?slide=56)

## Des services gratuits

Tous les jours les webdesigners et les développeurs front-end du monde entier
consultent des sites de documentation servis en statique :
[Bootstrap](http://getbootstrap.com/),
[Foundation](http://foundation.zurb.com/), [NodeJS](https://nodejs.org/en/) ou
[Google Web fundamentals](https://developers.google.com/web/fundamentals/) pour
n'en citer que quelques uns.

Beaucoup sont hébergés sur Github pour faciliter les contributions et à ce jour
le service [GitHub Pages héberge près d'un million de sites
statiques](https://github.com/blog/1992-eight-lessons-learned-hacking-on-github-pages-for-six-months),
qui sont tous stockés sur des CDN. Le service étant gratuit pour les projets
open-source, il serait dommage de s'en priver. C’est d’ailleurs ce que nous
avons fait pour le site de [Sud Web](http://sudweb.fr/2016/). D'autres services
similaires ont depuis vu le jour comme [Gitlab Pages](https://pages.gitlab.io/)
ou [Netlify](https://www.netlify.com/pricing), qui proposent des formules
gratuites pour les projets en open-source.

Cela ne vous coûte donc rien d'essayer !

## Un web de services

Les générateurs de site statique ne font qu'une chose et le font bien et si vous
avez besoin de fonctionnalités supplémentaires comme du paiement en ligne, vous
passez par des services tiers comme en dynamique. On s'éloigne du monolithique
pour se rapprocher de la philosophie des
[microservices](/2015/02/09/applications-monolithiques-contre-microservices/),
votre application interagit avec plusieurs services, chacun est interchangeable
et vous permet de choisir le plus adapté à vos besoins.

Comme [Github Pages](https://pages.github.com/) ou
[prose.io](http://prose.io/#about), de nouveaux services permettent de faciliter
le déploiement ou d'améliorer l'expérience utilisateur :

* [Cloudcannon](http://cloudcannon.com/) propose une interface graphique pour
  gérer Jekyll et ses contenus. Parmi ses clients, Netflix l'utilise pour
  présenter la [diversité d'appareils](https://devices.netflix.com) avec lesquels
  il est possible de consulter leurs contenus.

* [Contenful](https://www.contentful.com/) est un service de modélisation et
  d'édition de contenus et propose ensuite des APIs pouvoir les diffuser sur
  différentes plateformes. Vos contenus peuvent être récupérés de différents
  endroits et assemblés avant d'être importés dans Jekyll,
  [Middleman](https://middlemanapp.com/) ou [roots](http://roots.cx/) par exemple.

* [Netlify](https://www.netlify.com/) se propose d'optimiser la performance et
  l'hébergement de vos sites statiques sur leurs CDN et d'automatiser vos assets
  et le déploiement en y connectant directement votre dépôt Github ou Bitbucket.
  NodeJS est dispo par défaut, à vous les web apps performantes !

Ces différents services permettent de mettre en place des architectures
décentralisées comme l'a fait l'agence
[Carrot](http://carrot.is/coding/static_cms), éditrice du gestionnaire de
contenu roots :

![Exemple d'architecture de services pour servir du statique](http://netlify.scdn4.secure.raxcdn.com/cf89f31c56172ed6da0e895513d16fbb717b01a2/b3215/img/coding/contentful_netlify_workflow.svg)

Bien sur on peut se poser la question de la dépendance à des services, mais rien
ne vous empêche d’héberger ou de sauvegarder vos sites statiques sur vos propres
serveurs.

Tom Preston-Werner [expliquait](https://youtu.be/BMve1OCKj6M?t=39m55s) lors de
la première [JekyllConf](http://jekyllconf.com/), que **si certains sites
redeviennent statiques, c'est qu'ils auraient toujours du le rester**, mais que
nous ne disposions pas il y a dix ans de tous les outils actuels. Lorsque le
dynamique est arrivé c'est devenu la solution par défaut. Sauf que vous ne
pouvez pas servir du dynamique à des millions de personnes en même temps. Vous
vous heurtez à un moment à des problèmes d'échelle. Générer le même contenu pour
tous vos visiteurs est souvent préférable, c'est ce que fait Github la plupart
du temps. Les lignes entre le statique et le dynamique sont floues car ces
derniers peuvent aussi générer du statique, le mettre en cache et le servir sur
des CDNs.

Il existe en effet des extensions pour générer du statique à partir de Drupal ou
de Wordpress si vos contenus ne changent pas en permanence.  Si vous préférez y
aller en douceur, sachez que [le statique cohabite très bien avec le
dynamique](https://www.netlify.com/blog/2016/03/10/go-static-without-losing-your-server),
vous pouvez donc tirer le meilleur parti des deux mondes.

## Conclusion

Penser statique par défaut, n'est pas du tout une mode destinée à rester confidentielle parmi les hackers, c'est une réponse simple à des problématiques complexes. Gardez en tête que 78% des sites sous Wordpress souffrent de vulnérabilités et que quand une faille de sécurité impacte Drupal, des millions de sites sont concernés.

C’est donc une solution que vous devriez sérieusement considérer si vous souhaitez réduire vos coûts d'infrastructure sur des sites à fort trafic. **Sur des sites très fréquentés le coût peut être divisé par 15**.

Le statique est idéal pour des sites de contenus : présentation produit, documentation, blog ou application web ([progressive]({% post_url 2016-06-28-que-sont-les-progressive-web-apps %})) en JavaScript, en revanche il n'est pas adapté pour des sites où le contenu est majoritairement généré par les utilisateurs.

L'écosystème autour est en plein essor et va fort logiquement continuer de se développer. Une des priorité est maintenant de rendre ces outils encore plus accessibles aux rédacteurs. Github continue de soutenir le développement de Jekyll et développe actuellemnt [une interface utilisateur pour la rédaction et l’administration](https://github.com/jekyll/jekyll-admin) à l'instar de ce que propose différentes plateformes de *Content as a Service*.

Vous l'aurez compris, la mouvance statique ne fait que commencer et l'engouement devrait continuer de croître dans les années qui viennent.

J’espère surtout que cet article vous fera réfléchir à deux fois avant de partir les yeux fermés sur un bon vieux gros CMS dynamique pour votre prochain projet. Vous connaissez maintenant les nouveaux paradigmes qui laissent présager une [ère post-CMS](http://www.meetup.com/fr-FR/The-New-Dynamic/) comme certains l’appellent déjà.

Cet article a été rédigé suite à une [présentation](https://speakerdeck.com/dirtyf/keep-it-static-stupid) faite lors d'un apéroweb dont voici les slides.

<p><script async class="speakerdeck-embed" data-id="03e3e66c6d2845158240a3aa50f50b11" data-ratio="1.77777777777778" src="//speakerdeck.com/assets/embed.js"></script></p>

**[Ne passez pas à côté des choses simples](/2016/10/02/ne-passons-pas-a-cote-des-choses-simples/)**, c'est le message que vous avons voulu faire passer avec l'ami Bertrand Keller lors de [Paris Web 2016](https://www.paris-web.fr/2016/conferences/ne-passons-pas-a-cote-des-choses-simples.php).

<a href="https://jamstatic.fr">Jamstatic</a> regroupe quelques utilisateurs francophones de générateurs de site statique. Nous publions des liens d'<a href="https://twitter.com/jamstatic_fr">actualité autour des générateurs sur Twitter</a>. Nous échangeons et nous nous entraidons sur le <a href="https://jamstatic.herokuapp.com/">channel Slack</a>.

---

## Notes

[^1]: [Jeyll](http://jekyllrb.com/) est le gestionnaire de contenu statique le plus populaire, en partie car il est supporté nativement par [Github Pages](https://pages.github.com/).

[^2]: Quand les conventions priment, le développeur a moins de choix à faire, mais ne perd pas pour autant en flexibilité - source [Wikipedia](https://en.wikipedia.org/wiki/Convention_over_configuration).

[^headless-cms]: Quelques services d'édition de contenu en ligne :  [Cloudcannon](http://cloudcannon.com/) et  [Siteleaf](http://www.siteleaf.com/) pour Jekyll, [Forestry.io](https://forestry.io/) pour Jekyll et Hugo, ou [Bowtie](https://bowtie.io) pour n'importe quel générateur de site statique.
