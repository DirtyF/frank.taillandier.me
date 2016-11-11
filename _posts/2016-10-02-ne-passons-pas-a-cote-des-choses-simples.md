---
title: "Ne passons pas à côté des choses simples"
description: "Générer des sites performants et sécurisés, c'est possible sans base de données et sans serveur."
image: /assets/img/presentations/ne-passons-pas-a-cote-des-choses-simples/galets.png
---

Ce texte est destiné à servir de support pour les [slides de présentation](/presentations/ne-passons-pas-a-cote-des-choses-simples/) de la mini-conférence donnée à [Paris Web 2016](http://www.paris-web.fr/2016/).

{% include figure.html url="/assets/img/2016/09/frank-paris-web-2016.jpg" description="<a href=\"https://www.flickr.com/photos/franck-paul/30260452940/in/album-72157675684020515/\">Photo de Franck Paul</a>" %}

Il était difficile de couvrir en 15 minutes un sujet aussi vaste que les processus modernes de développement et de déploiement, ainsi que tout l'écosystème actuel à disposition pour servir des sites beaucoup plus performants et sécurisés.

Avec [Bertrand](http://bertrandkeller.info/), nous voulions surtout partager nos retours d'expérience et le plaisir retrouvé que nous avions à apprendre et à concevoir itérativement des sites de qualité où le contenu est roi. Donner envie aux développeurs front de reprendre la main sur leur code tout en proposant une expérience optimale aux utilisateurs.

C'était la mission impossible que nous nous étions fixés en proposant une [mini-conférence à Paris Web 2016](https://www.paris-web.fr/2016/conferences/ne-passons-pas-a-cote-des-choses-simples.php). La bonne blague. Donc pour ne pas rester sur la frustration de n'avoir pas pu traiter ce sujet plus en détail, voyant bien que @m4dz agitait frénétiquement le carton indiquant la fin du temps qui nous était imparti, je vous propose de revenir rapidement si vous le voulez bien sur les problèmes récurrents que nous pouvons rencontrer aujourd'hui en production et comment en utilisant des process adaptés, ils peuvent aisément être résolus.

<!-- excerpt -->

Il arrive bien souvent qu'en cas de pic de trafic, un site web ne réponde plus car le serveur ne tient pas la charge à cause d'accès concurrents trop importants à la base de données. Il est également courant d'être exposé à des failles de sécurité quand on ne met pas à jour rapidement son logiciel de gestion de contenu par exemple. Dès que vous faites le choix d'utiliser une stack comme LAMP (Linux, Apache, MySQL, PHP), vous choisissez également de vous engager à assurer ou à déléguer la maintenance serveur à un prestataire.

Dans le même temps, cela fait déjà [au moins huit ans](https://www.paris-web.fr/2008/-samedi-15-novembre-technique-.html#hcalendar-Paris-Web_2008-15_novembre_2008-atelier-performance_client) que l'on sait que le temps de chargement d'un site web est un facteur crucial en terme d’utilisabilité, de retention et de taux de conversion. C'est encore plus vrai de nos jours maintenant que le mobile est devenu le périphérique d'accès principal à Internet. Ce n'est pas [Bruce Lawson](https://www.paris-web.fr/2016/conferences/www-world-wide-web-not-wealthy-westerners-web.php) qui me contredira.

Les sites qui se contentent d'afficher des contenus, que ce soit des articles de blog, des présentations de produit, des documentations en ligne peuvent depuis déjà une dizaine d'année utiliser des [générateurs de site statique](/2016/03/08/les-gestionnaires-de-contenu-statique/) et les faire héberger sur des CDN afin de limiter les temps de latence du réseau.

Avec ces générateurs, plutôt que d'être enfermées dans des bases de données, les données sont stockées sous forme de fichiers texte dans des formats lisibles et facilement éditables. [Markdown](http://daringfireball.net/projects/markdown/) est le format qu'on rencontre le plus souvent pour stocker les textes et pour des données structurées on fera appel à [JSON](http://json.org/json-fr.html) ou [YAML](http://www.yaml.org/spec/1.2/spec.html#Preview).

Les générateurs vont nous permettre de concevoir des modèles de pages pour y insérer nos contenus et nos données. Nous obtiendrons en sortie un site, composé de pages web au format HTML, de CSS et de JavaScript si besoin. Une fois notre site généré, il ne reste plus qu'à le déposer sur un serveur HTTP.

On revient à une communication simple entre un navigateur et un serveur HTTP, qui va pouvoir facilement mettre en cache les contenus, puisque ce sont les mêmes qui sont servis à tout le monde, ce qui entraîne automatiquement un gain de performance drastique. Si vous avez mis en place HTTPS c'est encore mieux - merci [Let's Encrypt](https://letsencrypt.org/) - vous pourrez y ajouter un *service worker* pour faire du *offline-first* et transformer votre site en [Progressive Wep App](/2016/06/28/que-sont-les-progressive-web-apps/). [Hubert Sablonnière](https://www.paris-web.fr/2016/conferences/progressive-web-apps-le-futur-du-web-arrive.php) vous en parlera bien mieux que moi, mais là il est parti au ski avec ses amis.

Dans ce scénario donc, la génération des pages est complètement distincte de l'hébergement. En séparant ces deux problématiques, on évite tous les problèmes mentionnés précédemment. Au final, nous obtenons un site web beaucoup plus performant, même en cas de fort trafic, d'autant plus facilement reproductible s'il est hébergé sur un réseau de publication de contenu (CDN). On évite par la même occasion des frais coûteux de maintenance et le risque d'intrusion ou celui de voir son site défiguré.

Ce mode de fonctionnement présente donc de sacrés avantages pour des frais minimes. C'est pour cette raison que des sociétés comme Mailchimp l'ont adopté[^1] depuis plusieurs années, que ce soit pour présenter leur offre, fournir de la documentation à leurs clients ou aux développeurs.

Si ce workflow de développement et de déploiement est optimal, qu'en est-il de celui des contributeurs, ceux qui doivent ajouter et mettre à jour les contenus ? Ils sont maintenant habitués à des interfaces utilisateurs de saisie, qui leur permettent d'exécuter ces tâches de manière intuitive.

Si les générateurs de site statique sont performants, c'est que ce sont pour la plupart des outils en ligne de commande, facilement exécutables dans n'importe quel environnement. Pour palier à ce manque, il existe néanmoins des solutions et elles sont logiquement de plus en plus nombreuses depuis quelques années, puisque la popularité de ce qu'on appelle désormais le *statique* est grandissante.

La première solution est de passer par un [Headless CMS](https://css-tricks.com/what-is-a-headless-cms/) chargé de s'occuper uniquement de la manipulation des contenus, mais pas de leur affichage côté client. Encore une fois on partage les responsabilités, chacun son rôle. Des services comme [Contenful](https://www.contentful.com) ou [Prismic](https://prismic.io/) fournissent aux développeurs des APIs qui permettent ensuite de récupérer vos contenus. Des _headless CMS_, on devrait en voir de plus en plus maintenant que les frameworks JS comme React s'occupent des vues côté front. Drupal a même publié un [manifeste](https://github.com/davidhwang/horseman#a-manifesto) où il est écrit qu'ils veulent rester le backend de prédilection de ces frameworks côté client, qui sont le futur du web.

La deuxième solution est de passer par un service en ligne qui se connectera à votre dépôt de code et vous servira d'interface d'édition de vos contenus. Il en existe plusieurs[^2], je ne vais pas tous les énumérer.

Ce qu'il est important de retenir, c'est que cela permet à des personnes qui n'ont aucune idée de ce qui se trame dessous, de pouvoir continuer à avoir une expérience utilisateur d'édition de contenus, similaire à celle qu'ils connaissent déjà dans des CMS comme Wordpress ou Drupal. Les interfaces sont même pour le moment plus simples à prendre en main, car elles proposent moins d'options, donc moins de charge cognitive.

Il n'y a pas que dans les entreprises de logiciels, où les rédacteurs sont bien accompagnés par les équipes de développeurs, que ce genre de workflow est mis en place.

[Certains éditeurs ont franchi le pas](http://blogs.getty.edu/iris/an-editors-view-of-digital-publishing/) avec succès, car l'expérience d'écriture avec Markdown, l'apport du versionnement pour les relectures et les corrections de manuscrits alliés à la possibilité de générer facilement différents formats de fichiers pour les livres électroniques en font un [workflow de travail](/2016/08/28/traitement-de-texte-multicanal/#un-processus-de-publication-moderne) idéal pour l'édition et la publication.

Ces processus de travail, les développeurs les connaissent de mieux en mieux, d'abord avec l'avènement de [Git](https://git-scm.com/book/fr/v2), créé il y a maintenant dix ans et la popularité grandissante de plates-formes de développement collaboratif comme GitHub, GitLab ou Bitbucket basées sur le versionnement de fichiers.

Parallèlement à ces évolutions, nous avons pu assisté également à la mise à disposition d'APIs, toujours plus nombreuses et plus riches. Elles facilitent la réutilisation de données, en les rendant accessibles via des requêtes HTTP. Il est aujourd'hui trivial de récupérer du JSON avec ES2015 comme nous l'avons vu le lendemain en atelier. Promis.

Afin d'illustrer tout cela, comme nous étions à Paris Web, j'ai choisi de présenter une preuve de concept ingénieuse, développée par [Tim Carry](http://www.pixelastic.com/), évangéliste chez Algolia, qui propose une API de recherche très performante pour vos documents. Tim a ensuite utilisé [Brunch](http://brunch.io/) pour générer ce qu'on appelle dans notre jargon une *single page app*, une page dont le côté dynamique est entièrement assuré par JavaScript dans le navigateur. C'est plutôt cool le développement web en 2016.

Tim a décidé de faire un cadeau à Paris Web en proposant un moteur de recherche qui permet d'accéder à touts les supports de conférences des éditions passées. Tim a donc commencé par récupérer les données des 11 éditions de Paris Web au format JSON pour pouvoir ensuite les indexer à l'aide d'Algolia. Ajoutez une pincée de JavaScript et quelques gouttes de CSS, et vous obtenez une application web tout ce qu'il y a de plus dynamique et très performante. [Jugez-en par vous-même](https://pixelastic.github.io/parisweb/). C'est instantané ou presque, de l'ordre de la milliseconde.

Pas de backend, des données versionnées et stockées dans un format standard, une API de qualité, un générateur pour assembler le tout, on pousse tout ça gratuitement sur GitHub Pages et hop le tour est joué.

Afin de mieux décrire ce genre de procédé, Matthias Billman le fondateur de Netlify, une plateforme d'hébergement et de déploiement automatisé de sites *statiques* a proposé le terme de [JAMStack](http://jamstack.org/fr/) lors d'une *Smashing Conf* à San Francisco. JAM pour **JavaScript, APIs and Markup**. Cet acronyme liste une partie des ingrédients de la recette qui permettent de générer des sites performants et sécurisés. Peu importe le nom qu'on lui donne, l'important c'est le résultat, ça booste. Alors est-ce si compliqué que cela ?

Si l'on regarde la définition du mot **simple** dans le Larousse, on peut y lire :

> Simple : qui est constitué d'un **petit nombre d'éléments qui s'organisent de manière claire**, par opposition à complexe.

Cela décrit assez bien le processus de conception des applications web d'aujourd'hui. Chaque élément de la chaîne a une responsabilité et un périmètre bien défini et chacun fait ce qu'il a à faire. Nous sommes en opposition avec une application monolithique complexe, qui cumule toutes les responsabilités.

Vous avez donc compris que ces sites ne sont donc pas forcément si *statiques* que ça. Forcément, le web a beaucoup évolué depuis les premières page HTML que nous mettions en ligne avec un logiciel FTP, les navigateurs sont devenus très performants, [JavaScript est désormais partout](https://www.paris-web.fr/2016/conferences/nodejs-partout.php), comme se tue à le répéter Christophe Porteneuve depuis plusieurs années déjà. Le versionnement des projets facilite grandement la collaboration et l'automatisation des processus de déploiement. Nous avons pu le constater lors de [la présentation de David Sferuzza](https://www.paris-web.fr/2016/conferences/le-deploiement-manuel-non-merci-jessaie-darreter.php).

Même si on ne développe pas de *Single Page App* comme Tim, l'adoption d'un workflow similaire pour la génération de sites de contenus est une aubaine pour les développeurs et designers web. Ils ont la possibilité de se concentrer uniquement sur leur domaine de prédilection. C'est également un très bon terrain de jeu et d'expérimentation pour s'amuser à utiliser des APIs, récupérer des fichiers JSON, moduler des données comme bon nous semble à l'aide du sucre syntaxique qu'offre YAML et utiliser le langage de *templating* de son choix pour façonner son code à la manière d'un artisan.

Avoir le choix dans les outils, surtout quand ils sont aussi nombreux, c'est toujours un dilemme, mais en ce qui concerne les générateurs, le choix sera de toute façon influencé par votre expérience passée, l'écosystème que vous maîtrisez le mieux.

Ne vous inquiétez pas on trouve des générateurs dans tous les langages : en Ruby, en JS, en Go, en Python et même en PHP - [désolé Brice](https://twitter.com/briceatwork/status/781770722846703616). Vous avez aussi pas mal de choix au niveau du système de *templating*, le mieux est encore d'aller trouver votre bonheur sur [StaticGen](https://www.staticgen.com/).

Vous pouvez commencer par identifier un *content-driven* projet comme un blog ou un site produit ou institutionnel. Vous pouvez aussi décider d'utiliser des générateurs dès la phase de prototypage comme le fait [Bertrand](http://bertrandkeller.info/). Il est important de ne laisser personne à la traine, de prendre le temps de former les designer web à comprendre la logique puis à utiliser des interfaces graphiques pour Git comme [GitKraken](https://www.gitkraken.com/) — qui a eu la très bonne idée d'ajouter un bouton *annuler*. Un petit CTRL-Z et c'est reparti. Quand on a le droit à l'erreur, ça fait toujours moins peur.

Ce qui compte avant tout c'est de **retrouver du plaisir et de la sérénité**. Dans son livre *[La vérité sur ce qui nous motive](https://www.amazon.fr/vérité-sur-qui-nous-motive/dp/208137952X/)*, Daniel Pink décrypte les trois éléments clés de la motivation : **l'autonomie**, **l'envie de progresser** dans son domaine pour devenir bon, de maîtriser son art et enfin la finalité et **le sens de notre action**.

Ce workflow **simple**, n'est pas synonyme de *facile* et rassemble ces trois composantes. C'est surement pour cela qu'il est devenu celui de nombreux projets open-source, notamment de documentation ou de présentation de produit. Si le logiciel open-source montre toujours la voie, il ne faut pas très longtemps pour que les équipes les plus chevronnées emboitent le pas.

Les services innovation de l'État français utilisent par exemple ces outils sur des projets comme [https://beta.gouv.fr/](https://beta.gouv.fr/).

De plus en plus d'agences privilégient aussi ces process pour leurs clients, notamment pour des sites soumis à de forts trafics.

C'est par exemple le cas pour le site de campagne d'[Hillary Clinton](https://www.hillaryclinton.com/), le site de l'ICIJ à l'origine des [Panama Papers](https://panamapapers.icij.org/). En France, mis à part des blogs, je ne sais pas si beaucoup d'agences l'utilisent pour des projets aussi importants.

Quand Christophe Porteneuve m'a dit qu'il lançait [le nouveau site de sa société](http://beta.delicious-insights.com/), je n'ai pas été étonné qu'il ait utilisé [Middleman](https://middlemanapp.com/), un générateur de site statique en Ruby. Même chose pour [Cedexis](http://www.cedexis.com/), dont la performance est le cœur de métier et qui utilise aussi Middleman pour son site.

Certains générateurs comme Gatsby ou Phenomic utilisent nodeJS et React pour embarquer des composants dynamiques dans les pages, c'est une manière hybride de concilier les contenus statiques et le développment d'application web.

Il semblerait donc que ce soit pour le moment cantonné à quelques experts - j'adorerai qu'on me prouve le contraire - mais je ne doute pas que la France rattrape ses fameux cinq ans de retard très bientôt.

Les [exemples dans les slides de la conférence](/presentations/ne-passons-pas-a-cote-des-choses-simples/) mentionnent des sites très bien conçus comme celui de l'agence [Instrument](http://www.instrument.com/), qui a notamment été commissionnée pour la conception [https://design.google.com/](https://design.google.com/). Il me semble que c'est Nanoc qui a été utilisé sur ce projet.

Brad Frost est développeur front et utilise lui aussi [Jekyll](http://jekyllrb.com/) pour générer la documentation de son projet [PatternLab](http://patternlab.io/). Les intégrateurs, UX designers et autres développeurs front devraient donc s'intéresser selon moi de plus près à ces outils. Non seulement, car ils savent suffisamment s'effacer pour vous laisser travailler la matière première des technos web, mais parce qu'ils sont aujourd'hui la meilleure réponse à un web plus performant. Pourquoi veut-on aller si vite ? Ça c'est une autre question.

Enfin voilà, [le message que nous souhaitions faire passer avec Bertrand](http://bertrandkeller.info/2016/10/04/ne-passons-pas-cote-choses-simples), c'est que même si l'écosystème n'est peut-être pas encore aussi riche que celui des CMS dont la conception correspond à l'état du web de la fin des années 90, il y a surement des projets sur lesquels vous allez avant tout vouloir vous concentrer sur la stratégie éditoriale, l'expérience utilisateur et la performance. Cette _stack_, ce _workflow_, c'est la garantie de plus d'autonomie, de maîtrise et de sérénité de gagné. Je fais le pari que dans quelques années, ces solutions seront plus matures et plus répandues, ce n'est jamais gagné un pari vers le retour à la simplicité, mais a-t-on vraiment encore le choix ?

Si vous ne devez retenir qu'une chose de tout ça, c'est qu'en adoptant une démarche centrée utilisateur, vous pouvez vous faire plaisir, être créatif et faire de beaux projets. Sachez être pertinent le cas échéant : *Keep It Static Stupid*.

Pour les équipes, tout l'enjeu est de collaborer étroitement avec vos clients, vos collègues à l'appropriation collective du process que vous aurez mis en place, cela n'est pas forcément évident selon le contexte, ça demande de casser ces satanés silos, hérité du Fordisme. Vive les équipes multi-disciplinaires auto-organisées, ça marche dans les [Design Sprint chez les militaires](https://www.paris-web.fr/2016/conferences/quand-les-militaires-se-prennent-au-jeu-du-design-sprint.php), il n'y a pas de raison que ça ne marche pas pour votre équipe.

Je vous laisse méditer cette citation du penseur de la technique, [Jacques Ellul](https://fr.wikipedia.org/wiki/Jacques_Ellul)&nbsp; :

> La spécialisation doit-elle se payer par une parcellisation absurde où la connaissance se disloque en mille savoirs clos ?

Un grand merci à Bertrand Keller pour m'avoir incité à travailler sur cette conférence, la prise de parole en public est un exercice auquel je me prête peu, enfin sur scène, mais l'expérience s'est à priori révélée positive, si j'en crois les quelques retours que j'ai eu. On ne s'improvise pas acteur, ça a du se voir, mais nous avons essayé de proposer un format aussi vivant que possible.

Le fait qu'il y ait eu d'autres conférences sur l'importance de l'accès aux données, sur les nouvelles APIs qui permettent de mieux gérer le cache navigateur, le déploiement continu, des ateliers JS et Git, fait que notre sujet s'insérait vraiment bien au milieu du programme.

Je ne suis pas architecte logiciel, je ne prétend pas tout savoir sur ces sujets, simplement j'observe, j'expérimente et je tâche de comprendre comment améliorer nos façons de travailler.

J'aurais adoré pouvoir échanger avec des gens comme [Bastien Jaillot](https://twitter.com/bastnic) sur ce type de sujet avant de préparer cette intervention, j'espère que nous en aurons l'occasion. En tout cas si vous êtes architecte logiciel et que vous souhaite partager votre vision, lâchez-vous. Pour le moment, j'ai l'impression qu'on se dirige vers un meilleur découplage des responsabilités, mais sans pour autant non plus tout passer en microservices ou en architecture [serverless](http://martinfowler.com/bliki/Serverless.html).

Ce qui est bien avec le Web, c'est qu'on ne sait jamais trop comment ça va évoluer, c'est en perpétuel mouvement et le mouvement c'est la vie.

Un immense bravo à toute l'équipe de Paris Web qui accomplit un travail phénoménal chaque année, C'était un sans-faute pour moi niveau organisation, comme d'habitude.

Je profite de l'occasion pour vous donner rendez-vous à [Sud Web](https://sudweb.fr/) :sunny: en mai prochain, dont le site est bien entendu propulsé en *statique* :rocket:

---

[^1]: L'équipe de développeurs de Mailchimp a partagé son [retour d'expérience](http://devs.mailchimp.com/blog/how-we-built-the-mailchimp-content-style-guide/).

[^2]: Certains services comme [Siteleaf](https://www.siteleaf.com/) ou [CloudCannon](http://cloudcannon.com/) ne supportent que [Jekyll](http://jekyllrb.com/), [Forestry.io](https://forestry.io/) supporte aussi [Hugo](https://www.gohugo.io/), d'autres comme [DatoCMS](https://www.datocms.com/) sont plus agnostiques.
