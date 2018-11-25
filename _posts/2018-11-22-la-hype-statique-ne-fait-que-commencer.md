---
title: La hype statique ne fait que commencer
date: 2018-11-20 16:33 +0100
description: Les architectures logicielles sont de plus en plus découplées et modulaires, et permettent de générer des applications web performantes à moindre coût.
image: https://res.cloudinary.com/jamstatic/image/upload/f_auto,q_auto/v1542901110/hype-statique.png
---

Le Web évolue sans cesse et depuis quelques années, on assiste à la convergence
de plusieurs tendances : le versionnement systématique des projets, la
génération de contenus en amont, le déploiement continu,  l'hébergement de
fichiers sur des réseaux de CDN performants, l'omniprésence de JavaScript côté
client grâce notamment à des frameworks qui proposent une approche par gestion
d'état de composants, de plus en plus d'APIs de services accessibles dans divers
domaines, le lancement de fonctions depuis le cloud, etc.
{: .lead }

Ce qu'on résume encore trop souvent à l'appellation "site statique" cache en
fait l'adoption d'un nouveau paradigme : le découplage du back et du front et le
passage d'architectures monolithiques à des architectures plus modulaires, plus
performantes, plus sécurisées et redimensionnables par défaut.

Aujourd'hui JavaScript est en train de remplacer HTML côté client (et aussi de
se faire une place côté serveur avec NodeJS). On est passé d'architectures
centralisées et monolithiques à des architectures décentralisées et modulaires.
Les coûts de développement sont moindres, même chose pour l'hébergement, qui est
même la plus part du temps devenu gratuit quand il se contente de servir des
fichiers statiques.

Tout cela permet de se recentrer sur le métier, sur sa valeur ajoutée, sa
spécificité et de ne pas avoir à maintenir de trop gros systèmes complexes qui
se dégradent avec le temps.

Si au début les générateurs généraient des sites entièrement statiques,
aujourd'hui devant la multiplication de services, la mise à disposition d'APIs
et l'omniprésence de composants JS côté client, on obtient des pages statiques
qui intègrent des composants dynamiques, le tout hébergé dans le cloud sur des
réseaux de CDN très performants situés au plus proche de l'utilisateur final. La
performance fait partie des facteurs différentiants et elle est devenue un atout
majeur pour les organisations qui ont compris qu'à l'ère du web mobile, si vous
n'êtes pas suffisamment rapides, la rétention est très faible.

Lors d'une conférence au Capitole du Libre, j'ai tenté d'expliquer en 45 minutes
comment tout cela était apparu petit à petit en proposant une chronologie rapide
et subjective des diverses évolutions qu'à connu le Web de 1991 à nos jours avec
un focus sur :

 - l'apparition de différents formats textes facilement lisibles par les humains
   et les machines pour représenter des contenus et des données : d'abord HTML
   puis plus tard YAML, JSON, Markdown, et maintenant JSX.

 - la mise à disposition de nombreux services spécialisés par des startups
   innovantes et la prolifération d'APIs permettant aux développeurs et aux
   machines d'interagir à distance avec ces services. l'évolution des requêtes HTTP
   avec REST et maintenant GraphQL qui permettent d'interagir avec les services
   web,

 - l'automatisation de la validation et de la publication de modifications,
   notamment grâce au versionnement avec Git et aux plate-formes de déploiement
   continu,

 - la démocratisation de l'accès au stockage dans le Cloud, grâce à une
   baisse des prix et une concurrence acharnée des différents acteurs (Amazon,
   Google, Microsoft, Cloudflare, etc.)


<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/44YQNMYeo_E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

Le logiciel libre a joué un rôle central dans la modernisation des manières de
travailler et aujourd'hui beaucoup d'outils cités même s'ils sont initiés par
des acteurs majeurs comme Facebook, Google, Microsoft ou Amazon sont développés
sous licence libre. Même chose pour les générateurs de site statique Jekyll,
Hugo, Gatsby et leurs poursuivants. Le modèle a fait ses preuves, l'open source
encourage la collaboration, l'innovation et l'excellence technique.

Dans le monde des services, on trouve davantage de modèle d'affaire freemium :
les projets modestes de petite taille avec peu d'intervenants ne paieront pas
grand chose voire rien du tout, tandis que les plus grosses structures et les
gros volumes devront financer le développement et la pérennité du service. Ainsi
on facilite l'adoption dans un premier temps des développeurs qui travaillent
sur des projets de taille modeste, en espérant que s'ils sont satisfaits du
service, ils l'utiliseront sur des projets plus importants au sein de leur
entreprise.

C'est donc accessible sur le papier à tout le monde, même si le passage aux
dernières technologies est toujours moins simples pour les petites structures,
qui ne dédient pas forcément du temps à ce qu'on a longtemps appelé de la
recherche et du développement. Ici il serait plus juste d'appeler ça de la
formation continue et de la veille technologique, afin de rester à jour dans son
domaine.

On voit bien qu'il y a une fracture entre d'un côté les structures capables
d'adopter rapidement ces nouvelles technologies et les structures pyramidales à
l'ancienne, parfois embourbées dans une bonne vieille dette technique, dont le
coeur de métier n'est pas forcément le numérique. Ces structures auraient
pourtant tout à gagner à minimiser justement les développements internes et à se
reposer sur des services, au moins en ce qui concerne leur présence sur le web.
Il faut au moins qu'elles sachent que le développement d'applications métiers
est en train de changer.

En ce sens ce dont la société Netlify fait la promotion sous le nom de JAMstack, à
savoir des architectures découplées et décentralisées, pourraient profiter aux
petites structures, qui n'auront quasi rien à débourser en maintenance et en
hébergement, tout en améliorant leur qualité de service, pour peu qu'elles
investissent un minimum dans une conception centrée utilisateur - la vraie, pas
celle qui se résume à adopter le même look and feel que le voisin.

Dans un paysage en constant mouvement, il est parfois difficile de s'y
retrouver, la multiplication des technologies, l'abondance de l'offre, la
diversité de niveaux d'expériences, la difficulté de se projeter ne serait-ce
qu'à moyen terme, autant de facteurs qui vont qu'on préfère souvent attendre une
adoption et une maturité suffisante avant de songer à franchir le pas.

Le fait que les entreprises innovantes soient les premières à adopter ces
technologies est logique, mais cela devrait mettre la puce à l'oreille des
développeurs web et de leurs clients, les choses bougent, et en 2018 avec tout
ce qui s'est passé depuis 5 ans, il serait peut-être temps de se dire qu'il n'y
a pas que WordPress, Joomla ou Drupal qui permettent de développer des sites web
et que vu les performances affichées, le jeu de la concurrence va rapidement
faire qu'il va falloir se mettre à niveau, si on tient à générer du trafic et
améliorer la rétention de sa cible.
