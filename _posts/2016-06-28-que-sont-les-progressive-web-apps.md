---
layout: post
title: Que sont les Progressive Web Apps&nbsp;?
description: Grâce à un ensemble de spécifications standardisées, le Web mobile peut enfin rivaliser pour de bon avec le Web natif.
date: "2016-06-28 16:50:05 +0200"
comments: true
---

Le Web mobile essaie de combler depuis quelques années son retard en terme d'expérience utilisateur par rapport au natif. Face à l'utilisation majoritaire du mobile pour une grande partie de la population mondiale et aux probèmes de connectivité que nous connaissons tous, il était important d'apporter une réponse à ces problèmes, c'est désormais chose faire avec les _Progressive Web Apps_.

Récemment s'est tenu le [Progressive Web Apps Dev Summit](https://events.withgoogle.com/progressive-web-app-dev-summit/) qui a réuni du beau monde des principaux acteurs du web, Google en tête, les vidéos sont dispos, je vous invite à aller en regarder quelques unes pour en apprendre plus sur le sujet.

Le mois dernier est paru [une bonne introcution aux PWA sur le blog d'Ionic](http://blog.ionic.io/what-is-a-progressive-web-app/), un framework qui permet de développer des applications web mobile hybride.

Avec l'ami [Enguerran Colson](https://blog.ticabri.com/2016/06/28/le-web-progresse-grace-aux-progressive-web-apps/) nous vous proposons ci-dessous une traduction en français afin de vous inciter à vous intéresser de plus près à cet ensemble de technologies qui permettent au web mobile de rivaliser enfin pour de bon avec le natif.

<!-- excerpt -->

------

Vous avez du sûrement déjà entendre parler des _Progressive Web Apps_ ( applications Web progressives), elles représentent le futur de l’humanité. Elles vont amener la paix sur Terre, mettre un terme à la famine, sauver les arcs-en-ciel et les licornes, restaurer l’équilibre de la force et bien d’autres choses encore. Chemin faisant, elles pourraient même faire avancer le Web, ramener un peu de parité entre entre le Web et les applications natives et aider les développeurs mobile à atteindre plus d’utilisateurs en dehors du confinement des App Stores.

Ça a l’air bien beau tout ça… mais que sont exactement les _Progressive Web Apps_ ?

> Une Progressive Web App utilise les possibilités du web moderne pour délivrer une expérience utilisateur similaire à une application native. – [Progressive Web Apps](https://developers.google.com/web/progressive-web-apps)

Les applications natives d’un App Store font des trucs comme envoyer des notifications, travailler en mode déconnecté, ressemblent à tout point de vue à une application (telle qu’imaginée par Apple et Google), se chargent depuis l’écran d’accueil, etc. En comparaison, les applications mobiles Web auxquelles nous accèdons via un navigateur n’ont historiquement pas permis tout cela. Les _Progressive Web Apps_ corrigent cela grâce de nouvelles API Web, de nouveaux concepts d’architecture et de nouveaux _buzzwords_.

Pour être tout à fait clair, je parle des applications Web mobiles dans les _navigateurs_. Les applications hybrides comme Ionic et Cordova tournent sans restrictions dans un environnement natif avec toutes les fonctionnalités attendues de la part de n’importe quelle application. Mais prenez le contenu Web d’une application hybride et chargez-le dans un navigateur mobile et vous allez alors être contraint par les fonctionnalités du navigateur (pour des raisons de sécurité raisonnable et de standardisation d’API).

Les _Progressive Web Apps_ apportent les fonctionnalités attendues des applications natives à l’expérience de navigation Web dans un mobile en utilisant des technologies basées sur les standards et en tournant dans un conteneur sécurisé accessible à tous sur le Web.

En somme, les Progressive Web Apps décrivent toute une série de technologies, de concepts d’architecture et d’API Web qui travaillent de concert pour proposer une expérience similaire aux application natives sur le Web mobile.
Voyons ensemble quelques tenants de base des _Progressive Web Apps_.

## Les _Service Workers_

Les _Service Workers_ sont un outil à la fois incroyablement puissant et déroutant, qui se cache derrière une _Progressive Web App_. Il permet de passer en mode hors-ligne, d'envoyer des notifications, de mettre à jour les contenus en arrière-plan, de mettre en cache du ontenu et tout un tas d’autres trucs.

Dit de manière simple, un _Service Worker_ est un script qui tourne en arrière-plan, indépendemment de votre application et qui s’exécute en réponse à des événements comme des requêtes réseau, des notifications push, des changements de connectivité et bien d'autres choses.

J’ai déjà entendu parlé d'un _Service Worker_ comme d’un « proxy », et je pense que c’est une description plutôt fidèle. On peut écouter les événements comme un `fetch` qui se produisent à chaque fois qu’une requête réseau est émise. On peut prendre en considération cet événement avec un contrôle très fin : vérifier la présence des données en cache et les rendre directement ou permettre à la requête de poursuivre sa route jusqu’au serveur. Notre script agit alors comme un proxy, un _middleware_, pour une requête.

Le grand pouvoir et la flexibilité d’un _Service Worker_ peut le rendre très complexe et en général les développeurs vont vouloir utiliser des recettes prêtes à l’emploi pour des cas d’utilisation classique tel que le mode hors-ligne. [Mozilla dispose d'une très bonne documentation de référence](https://serviceworke.rs/) avec des recettes avec un _Service Worker_ qui démontre la myriade d’applications possibles avec des exemples de code. Par exemple [comment faire un mode hors-ligne simple](https://serviceworke.rs/offline-fallback_service-worker_doc.html) qui intercepte les événements `fetch` et retourne les données depuis le cache si la requête réseau a échoué. Google propose également [quelques bons exemples d’utilisation d’un Service Worker](https://github.com/GoogleChrome/samples/tree/gh-pages/service-worker).

Ce qu'il faut surtout retenir : un _Service Worker_ est simplement un fichier JavaScript comme un autre, tournant en tâche de fond et qui se déclenche via des événements et c’est à vous de décider ce qu’il faut coder pour prendre en charge le cache, les notifications push, la récupération des données serveur, etc. Puisque les développeurs finissent par utiliser les mêmes _recettes_ pour effectuer les tâches les plus communes (comme le support hors-ligne), nous allons vraissemblablement utliser du code existant pour nous simplifier la vie. Les _Service Workers_ sont [disponibles sur Android avec Chrome 50 et Firefox 46, mais pas sur iOS Safari et IE Mobile](http://caniuse.com/#feat=serviceworkers).

## App Shell

Le modèle App Shell (littéralement Coquille d’Application) est un principe simple de conception dans lequel l'application Web mobile charge initialement une coquille basique de l’interface utilisateur de l’application, avant de charger ensuite le contenu de l’application. App Shell n’est pas une API Web ou un framework mais plutôt une approche de conception que les développeurs peuvent adopter pour adhérer à ce qui est permis par les capacités de mise en cache d’un _Service Worker_. Vous pourriez trouver que c’est assez évident, que c'est une approche logique, rendue plus sérieuse par un _buzzword_.

Avec le modèle App Shell, nous faisons en sorte de bien conserver séparement la coquille de l’interface de notre application et son contenu puis nous les mettons en cache de manière séparée également. Idéalement notre App Shell est mise en cache pour être disponible très rapidement lorsque l’utilisateur reviendra sur notre Web App. Avoir la coquille et le contenu chargés séparemment donne théoriquement à l’utilisateur une impression  de performance et d’utilisabilité de l’application.

Et dans le cadre d’une application Ionic, nous pouvons charger l’agencement de l’application Ionic immédiatement (les onglets, la navigation, le menu, etc.), le mettre en cache via un _Service Worker_, et puis récupérer et mettre à jour le contenu avec du JavaScript après que l’App Shell se soit chargée.

Nous sommes en train d'ajouter un meilleur support des concepts PWA dans Ionic, vous pouvez vous attendre à voir apparaître une approche App Shell pour toutes les applications Ionic qui seront déployées en tant que Web App mobile, avec un _Service Worker_ prêt à l'emploi pour les recettes habituelles telles que la mise en cache, le support hors-ligne, le rafraichissement du contenu en arrière-plan.

## Installabilité et manifeste d’application

Historiquement les applications Web mobiles ne s'installaient pas comme une application sur l’écran d’accueil. Bien sûr un utilisateur pouvait ajouter un raccourci vers son site mobile sur son écran iOS ou Android (non y’a vraiment des gens qui font ça ?) et l’expérience n’était pas aussi concluante car l’application ne bénéficiait pas des fonctionnalités locales qu’on peut attendre des applications natives.

C’est en train de changer. Récemment Chrome et Firefox sur Android ont ajouté [le support de l'installation d’applications Web sur l’écran d’accueil](https://developers.google.com/web/updates/2014/11/Support-for-installable-web-apps-with-webapp-manifest-in-chrome-38-for-Android?hl=en) avec une bannière d’installation native, tout comme les bannières d’applications natives auxquelles nous sommes habitués. Pour dire au navigateur que notre site web mobile peut s’installer comme une application, nous écrivons un fichier [`manifest.json`](https://github.com/GoogleChrome/samples/blob/gh-pages/web-application-manifest/manifest.json) et nous créons un lien dans notre page web principale (voir le deuxième lien ci-dessus pour un exemple complet).

iOS ne propose pas encore cette fonctionnalité, simplement la possibilité de créer un raccourci sur l’écran d’accueil, donc l’expérience ne sera pas aussi fluide, mais nous pouvons espérer recevoir de bonnes nouvelles de la part d’Apple cette année 🍪.

## Conclusion

Les Progressive Web Apps sont à la fois de nouvelles API, des modèles de conception et du jargon marketing. Le Web mobile arrive à égalité avec les applications installables depuis un App Store grâce au fichier `manifest` pour les applications, le support de l’installation sur l’écran d’accueil, la possiblité de faire tourner des tâches de fond avec les _Services Workers_, d’améliorer le temps de chargement avec un App Shell et la croyance renouvelée que les développeurs Web peuvent aussi proposer une excellente expérience d’application mobile.

Chez Ionic, nous pensons que le web est le futur des applications. Il tourne partout, c’est la pile technologique la plus connue et il fait tourner un nombre croissant d’applications. Aujourd’hui les technologies Web sont utilisées par des millions d’applications dans les App Stores, mais jusqu’à présent le Web mobile avait proposé une expérience dégradée, obligeant les gens à se diriger vers des App Stores pour avoir la totale. Les Progressive Web Apps changent la donne.

Dans les prochains mois, nous allons livrer de nouvelles fonctionnalités pour les applications Ionic qui permettent aux développeurs de bénéficier du meilleur des deux mondes : un déploiement d’application cross-plateform pour iOS, Android et Windows, ainsi qu’un déploiement vers le Web mobile en tant que Progressive Web App avec le même code. Bientôt les développeurs Ionic pourront bénéficier à la fois de la distribution dans les App Stores ainsi que de l’accès instantané pour des milliards d’utilisateurs du Web mobile et des recherches Google. Fini les interstitiels des App Stores et la compilation séparée des applications natives et Web mobile. Restez à l’écoute ! 🤘
