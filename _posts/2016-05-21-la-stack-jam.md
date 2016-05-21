---
layout: post
title: La stack JAM
description: La combinaison JavaScript, APIs et Markup (JAM) résume bien la plateforme technologique web moderne en plein essor.
image: /assets/img/2016/05/jamstack.png
comments: true
---

Dans la [mouvance statique](/2016/03/08/les-gestionnaires-de-contenu-statique/), l'idée sous-jacente n'était pas tant de se focaliser les outils qui permettent de génèrer une version statique, que d'expliquer qu'il y avait désormais tout un contexte technologique à prendre en compte et que de les processus de travail actuels découlent de cet écosystéme.

Lors de la dernière Smashing Conference à San Francisco, Mathias Biilmann
le fondateur de Netlify, un service de déploiement de sites injustement désignés comme *statiques* a présenté ce qui pour lui représente la nouvelle stack front-end, à savoir l'empilement de différentes technologies, qui permettent de bâtir des sites et des applications web entièrement côté client, en se reposant sur JavaScript et des APIs : la *JAM stack*.

<!-- excerpt -->

Je vous invite à aller  [regarder la vidéo de la conférence](https://vimeo.com/163522126) ou à défaut de [consulter les slides de la conférence](https://speakerdeck.com/biilmann/the-jam-stack) si vous voulez savoir exctement de quoi il en retourne.

Matthias en a profité pour mettre en ligne [JAMstack.org](http://jamstack.org/) qui se contente pour le moment de simplement présenter les concepts et la philosophie. Je vous livre ici une traduction du texte en français :

![JAMStack]({{page.image}})

**La pile JAM est une nouvelle manière de bâtir des sites et des applications web performants, sécurisés et simples à mettre à jour.**

JAM signifie *JavaScript, APIs and Markup*. C'est l'ensemble des technologies qui progresse le plus rapidement lorsqu'il s'agit de bâtir des sites et des applications web : plus de serveurs, hébergez tout votre partie cliente sur des CDNs et utilisez des APIs pour les parties dynamiques.

Lorsque la plateforme LAMP (Linux Apache MySQL PHP) a commencé à devenir proéminente à la fin des années 90, elle s'est développée suite à un ensemble de contraintes qui ne sont plus d'actualité. À l'époque les navigateurs étaient de simples lecteurs de documents et tout ce qui était dynamique, social ou interactif devait obligatoirement se passer côté serveur. La seule forme d'hébergement accessible était l'hébergement mutualisé. Les déploiements consistaient à envoyer des fichiers par FTP. Le versionnement était la plupart du temps absent des habitudes quotidiennes des développeurs web.

De nos jours les navigateurs sont les systèmes d'exploitation du web et sont capables de faire tourner des applications complexes entièrement côté client. Il sont capables de faire appel et d'interagir avec un nombre sans cesse croissant d'APIs et de services à travers différents domaines et infrastructures. Les CDNs (Content Delivery Network ou Réseau de diffusion de contenu) ne sont plus un luxe que seules les grandes entreprises peuvent se permettre, ils sont maintenant devenus courants afin de réduire la vitesse d'accès au serveur (le *Time to First Byte*) pour les sites et les applications de toutes tailles. Les modèles de déploiement ont évolué : les transferts manuels et fastidieux ont cédé la place à des processus automatisés déclenchés par des systèmes de gestion de version de plus en plus présents.

La pile JAM décrit ce nouvel état de fait. Au lieu d'envoyer par FTP du code serveur sur un serveur mutualisé, nous poussons avec Git et notre code est immédiatement assemblé et distribué sur des réseaux de CDNs un peu partout dans le monde. Au lieu de dépendre d'une base de donnée pour chaque requête que nous devons effectuer, nous utilisons des outils d'assemblage pour mettre en production des sites et des applications prêts à tourner directement dans le navigateur. Au lieu de mélanger ensemble la persistance, la génération du HTML, les transactions bancaires, l'authentification, etc. nous séparons ces problématiques et faisons appel à des APIs bien précises depuis le côté client.

La pile JAM utilise des langages de balisage comme HTML, CSS et Markdown pour formater et mettre en forme notre contenu, du JavaScript côté client pour rendre le tout interactif et engageant, des APIs pour ajouter de la persistence, de la synchronisation en temps réel, des interactions concrêtes, des commentaires, des paniers d'achat et ainsi de suite.

Les navigateurs sont le nouveau système d'exploitation. Les serveurs sont absorbés par les CDns et les APIs. Les sites sont ou dépourvus de base de données et générés en amont ou font appel à de services de bases de données hébergées  et servies directement depuis le navigateur. JavaScript est en charge de toute programmation dynamique pendant le cycle requête/réponse et tourne entièrement côte client.

Utilisez la JAM !
