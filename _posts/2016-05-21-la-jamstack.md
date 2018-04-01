---
title: La JAMstack
description: >
  JavaScript, APIs et Markup (JAM) constituent une stack technologique web moderne
  et performante.
image: /assets/img/2016/05/a-new-stack.png
---

Dans la [mouvance statique](/2016/03/08/les-gestionnaires-de-contenu-statique/),
l'idée sous-jacente n'était pas tant de se focaliser les outils qui permettent
de générer une version statique, que d'expliquer qu'il y avait désormais tout un
contexte technologique à prendre en compte et que de les processus de travail
actuels découlent de cet écosystème. Lors de la dernière *Smashing Conference* à
San Francisco, [Mathias Biilmann](http://mathias-biilmann.net/) le fondateur de
Netlify, un service de déploiement de sites maladroitement appelés *statiques* a
présenté ce qui pour lui représente la *stack* front-end du moment, à savoir
l’association de différentes technologies qui permettent de bâtir des sites et
des applications web entièrement côté client en se reposant sur JavaScript, des
APIs et du Markup (Markdown, YAML, JSON), ce que Mathias appelle la *JAMStack*.
{: .lead }

Pour mieux comprendre le propos de Mathias, je vous invite à aller [regarder la
vidéo de la conférence](https://vimeo.com/163522126) ou à défaut de [consulter
les slides de la conférence](https://speakerdeck.com/biilmann/the-jam-stack) qui
décrit très bien comment nous en sommes arrivés à cet état de l'art, parce qu'en
fait c'est un peu ça que ça désigne.

<script async class="speakerdeck-embed"
data-id="12e277868f5941d1ae08ee37ed08fd5b" data-ratio="1.77777777777778"
src="//speakerdeck.com/assets/embed.js"></script>

On retiendra une séparation stricte des problématiques : génération du site,
hébergement, code client et code serveur. Les bonnes pratiques à respecter :
héberger sur un CDN pour la performance, des déploiements unitaires, une
invalidation instantanée du cache, un code source versionné dans git et des
process automatisés — bonnes pratiques qui restent valables même si vous
utilisez encore une bonne vieille base de données.

Afin de préciser son propos Mathias a mis en ligne
[JAMStack.org](http://jamstack.org/) qui présente rapidement les concepts et la
philosophie derrière cet acronyme un peu abscon.

Je relaie ici son message à l'aide d'une traduction en français car d'une part
ce texte permet d'avoir une bonne vision des architectures et des technologies
web modernes et de l'autre il permet de comprendre que tout cela va bien au delà
de la simple génération de la version *statique* d'un site.

{% cloudinary /assets/img/2016/05/jamstack-light-bg.png alt="JAMStack" %}

> **La JAMStack est une façon idéale de bâtir des sites et des applications web
> performants, sécurisés et simples à mettre à jour.**__
>
> JAM signifie *JavaScript, APIs and Markup*. C'est l'ensemble des technologies
> qui progresse le plus rapidement lorsqu'il s'agit de bâtir des sites et des
> applications web : plus de serveurs, hébergez tout votre partie cliente sur des
> CDNs et utilisez des APIs pour les parties dynamiques.
>
> Lorsque la plateforme LAMP (Linux Apache MySQL PHP) a commencé à devenir
> proéminente à la fin des années 90, elle s'est développée suite à un ensemble de
> contraintes qui ne sont plus d'actualité. À l'époque les navigateurs étaient de
> simples lecteurs de documents et tout ce qui était dynamique, social ou
> interactif devait obligatoirement se passer côté serveur. La seule forme
> d'hébergement accessible était l'hébergement mutualisé. Les déploiements
> consistaient à envoyer des fichiers par FTP. Le versionnement était la plupart
> du temps absent des habitudes quotidiennes des développeurs web.
>
> De nos jours les navigateurs sont les systèmes d'exploitation du web et sont
> capables de faire tourner des applications complexes entièrement côté client. Il
> sont capables de faire appel et d'interagir avec un nombre sans cesse croissant
> d'APIs et de services à travers différents domaines et infrastructures. Les CDNs
> (Content Delivery Network ou Réseau de diffusion de contenu) ne sont plus un
> luxe que seules les grandes entreprises peuvent se permettre, ils sont
> maintenant devenus courants afin de réduire la vitesse d'accès au serveur (le
> *Time to First Byte*) pour les sites et les applications de toutes tailles. Les
> modèles de déploiement ont évolué : les transferts manuels et fastidieux ont
> cédé la place à des processus automatisés déclenchés par des systèmes de gestion
> de version de plus en plus présents.
>
> La *JAMStack* décrit ce nouvel état de fait. Au lieu d'envoyer par FTP du code
> serveur sur un serveur mutualisé, nous poussons avec Git et notre code est
> immédiatement assemblé et distribué sur des réseaux de CDNs un peu partout dans
> le monde. Au lieu de dépendre d'une base de donnée pour chaque requête que nous
> devons effectuer, nous utilisons des outils d'assemblage pour mettre en
> production des sites et des applications prêts à tourner directement dans le
> navigateur. Au lieu de mélanger ensemble la persistance, la génération du HTML,
> les transactions bancaires, l'authentification, etc. nous séparons ces
> problématiques et faisons appel à des APIs bien précises depuis le côté client.
>
> La *JAMStack* utilise des langages de balisage comme HTML, CSS et Markdown pour
> formater et mettre en forme notre contenu, du JavaScript côté client pour rendre
> le tout interactif et engageant, des APIs pour ajouter de la persistence, de la
> synchronisation en temps réel, des interactions concrêtes, des commentaires, des
> paniers d'achat et ainsi de suite.
>
> Les navigateurs sont le nouveau système d'exploitation. Les serveurs sont
> absorbés par les CDNs et les APIs. Les sites sont ou dépourvus de base de
> données et générés en amont ou font appel à de services de bases de données
> hébergées et servies directement depuis le navigateur. JavaScript est en charge
> de toute la programmation dynamique pendant le cycle requête/réponse et tourne
> entièrement côte client.

Comme à chaque fois qu'il y a changement, les réactions sont mitigées sur cette
manière de bâtir des sites et c'est normal, elle ne saurait constituer *la*
solution pour tous les cas de figure, comme d'habitude c'est le contexte qui
prime. De plus l'opinion d'une personne directement impliquée dans cet
écosystème peut être à juste titre considérée comme biaisée mais il serait vain
de nier que cette *stack* est de plus en plus utilisée et ce pour de bonnes
raisons. Peu importe le nom qu'on lui donne, en publiant ce texte mon objectif
est avant tout de souligner que le dynamique est bien présent dans ce qui encore
trop souvent désigné par la seule appellation *statique*. Ces évolutions ont
beaucoup d'impacts, notamment sur les compétences à développer au sein les
équipes.

C'est une évolution et non une nouvelle mode, le résultat de l'évolution de tout
un écosystème dont JavaScript est plus que jamais la pierre angulaire. Ce n'est
pas un hasard si Hexo, Brunch, Metalsmith, Harp ou Assemble font partie des
[générateurs les plus populaires](https://www.staticgen.com/) et si ceux basés
sur la bibliothèque JavaScript [React](http://facebook.github.io/react/) comme
[Gatsby](https://www.staticgen.com/gatsby) ou
[Phenomic](https://www.staticgen.com/phenomic) connaissent une popularité
croissante.

Comme toute chose dans l'univers, le web est en perpétuelle évolution. La
sagesse et les arts martiaux nous enseignent qu'il est toujours plus fluide
d'accompagner un mouvement que de tenter de lui résister, alors laissez vous
simplement porter par la vague.

**Pour en savoir plus sur le sujet, je vous invite à aller lire les articles en
français publiés sur [jamstatic.fr](https://jamstatic.fr), le site francophone
qui relaie les informations autour de cette stack technologique.**
