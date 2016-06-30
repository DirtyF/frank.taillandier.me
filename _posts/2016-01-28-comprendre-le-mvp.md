---
title: Comprendre le MVP (Produit Minimal Valable ) - et pourquoi je lui préfère un produit rapidement testable, utilisable et adorable
description: Décidez de ce que sera la première version de votre produit, à travers une série d'exemples.
image: http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-.jpg
category: agile
redirect_from: /2016/01/28/comprendre-le-mvp/
---

Si vous vous intéressez à l'agilité, vous êtes peut-être déjà tombé sur le fameux dessin d'Henrik Kniberg qui compare deux façons d'arriver à construire une voiture. En informatique les métaphores sont toujours un peu casse-gueule et mènent parfois à des incompréhensions. Du coup Henrik, coach agile connu pour son accompagnement des équipes de Spotify, de Lego et ses ouvrages de référence, s'est senti obligé de préciser la sémiologie de son dessin.

Grâce à des exemples concrets, son article devrait vous aider à mieux comprendre l'état d'esprit, qu'on retrouve dans le Lean Startup ou dans la démarche UX : tout repose sur une implication forte des utilisateurs dans la phase de conception afin de minimiser les risques dans un environnement de plus en plus concurrentiel, avec des exigences de plus en plus élevées.

On pourrait résumer cette philosophie par "Adaptez ou échouez".

<!-- excerpt -->

*Traduction de l'[article](http://blog.crisp.se/2016/01/25/henrikkniberg/making-sense-of-mvp) d'Henrik Kniberg*

Il y a quelques années, j’ai fait ce dessin et j’ai commencé à l’utiliser dans diverses présentations à propos du développement agile et lean.

![Pas comme ça… comme ça!](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-.jpg)

Depuis le dessin est devenu viral ! On le retrouve un peu partout, dans des articles, des présentations et même dans un livre (*[User Story Mapping](http://www.amazon.com/User-Story-Mapping-Discover-Product/dp/1491904909)* de Jeff Patton - excellent au passage). Beaucoup me disent que le dessin capture vraiment ce qui représente l’essence du développement itératif et incrémental, le lean startup, le MVP (Produit Minimum Valable) et son contraire. Toutefois beaucoup de personnes l’interprètent mal, ce qui est bien naturel quand vous montrez un dessin hors de son contexte d’origine. D’autres lui reprochent de trop simplifier les choses, ce qui est vrai. Cette image est une métaphore. Elle ne représente pas le véritable développement d’une voiture, elle parle du développement de produit en général en ayant recours à la voiture comme métaphore.

Bref, avec tout ce raffut, je me suis dit qu’il était temps d’expliquer le raisonnement qui se cache derrière.

## Premier exemple – Pas comme ça

La ligne du haut illustre une idée fausse très répandue à propos de développement itératif et incrémental de produit (communément appelé Agile).

![exemple d'étapes d'un développement incrémental ](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-1.jpg)

Beaucoup de projets échouent méchamment car ils cherchent à livrer façon *Big Bang* (on construit le truc jusqu’à ce ce soit terminé à 100% et on livre à la fin). J’ai perdu le compte du nombre de projets que j’ai vu échouer pour cette raison (nous verrons quelques exemples plus bas).

Maintenant, quand l’Agile est présenté comme une alternative, les gens rechignent à l’idée de livrer un produit inachevé - qui voudrait de la moitié d’une voiture ? Imaginez ceci :

« Hé Monsieur, voici notre première itération, un pneu avant. Qu’en pensez-vous ? »

![Première étape, le client n'est pas content du produit livré](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-2.jpg)

Le client réagit de la sorte : « Mais qu’est-ce que vous fichez à me livrer un pneu ? J’ai commandé une VOITURE ! Qu’est-ce que je suis supposé faire avec ça ?

(Au fait ici j’utile le terme *client* aussi comme un terme générique pour parler de gens comme les managers produit, les responsables produit ainsi que les premiers utilisateurs de votre produit.)

À chaque livraison, le produit se rapproche du produit fini, mais le client est toujours frustré car il ne peut pas vraiment utiliser le produit. C’est toujours une voiture partielle.

![Étapes 2 et 3, le client est toujours mécontent devant un produit pas encore utilisable](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-3.jpg)

Au final, lorsque le produit est terminé, le client vous dit « Merci, Enfin ! Pourquoi n’avez vous pas simplement livré ça directement en sautant toutes les autres livraisons inutiles ? »

![Étape 4 le client est content devant le produit fini](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-4.jpg)

Dans cet exemple il est content du produit final car c’est ce qu’il a commandé. Dans les faits, ce n’est pas vraiment vrai. Beaucoup de temps s’est écoulé sans véritable test utilisateur, donc le produit est probablement rongé par des défauts de conception, dus à des hypothèses incorrectes sur les besoins des utilisateurs. Donc cette tête de smiley à la fin est très idéaliste.

Quoi qu’il en soit, la première rangée représente l’*agile dévoyé*. Techniquement cela a beau être une livraison incrémentale et itérative, l’absence d’une véritable boucle de retours la rend très risquée - et tout sauf agile.

D’où le titre « Pas comme ça ».

## Deuxieme exemple – Comme ça !

Passons maintenant à la deuxième ligne.

![Exemple d'étapes d'un développement itératif ](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-5.jpg)

Ici nous adoptons une démarche très différente. Nous partons du même contexte - le client a commandé une voiture. Mais cette fois nous n’allons pas juste construire une voiture. Nous allons plutôt **nous focaliser sur le besoin sous-jacent que le client veut remplir**. Il s’avère que ce besoin sous-jacent est « j’ai besoin de pouvoir me rendre plus vite d’un point A à un point B » et la voiture n’est qu’une des solutions envisageables pour cela. Rappelez-vous, la voiture n’est qu’une métaphore, pensez à n’importe quelle situation de développement de produit sur mesure.

Donc l’équipe livre la plus petite chose à laquelle elle peut penser qui permettra au client de tester des choses et de faire des retours. Certains appeleront cela un MVP (Produit Minimum Valable) mais je préfère l’appeler Produit Rapidement Testable (nous reparlerons de tout ça plus bas).

![Première étape, le client n'est pas vraiment emballé](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-6.jpg)

Appelez cela comme vous voulez (certains appellent même leur première release la « version skateboard » du produit, à cause de ce dessin).

Il est peu probable que le client se contente de cela. Cela n’a rien à voir avec la voiture qu’il a commandée. Mais c’est OK ! Le truc c’est que **nous ne visons pas la satisfaction client à ce stade**. Nous pourrions rendre quelques uns des premiers utilisateurs heureux (ou faire souffrir des [pragmatistes](http://ericsink.com/Act_Your_Age.html)) mais **notre objectif principal à ce stade est juste d’apprendre**. Idéalement, l’équipe explique cela de façon très claire au client dès le début, pour pas qu’il ne soit trop déçu.

En revanche, contrairement au volant dans le premier scénario le skateboard est en l’occurence un produit utilisable qui aide le client à aller plus vite de A à B. Pas génial, mais toujours mieux que rien. Nous disons alors au client « Ne vous inquiétez pas le projet n’est pas fini, ce n’est que la première d’une série d’itérations. **Nous visons toujours la construction d’une voiture, mais en attendant merci d’essayer ceci et de nous faire  vos retours**. Pensez grand, mais livrez de petits incréments fonctionnels valables.

> Nous pourrions apprendre des choses vraiment surprenantes. Supposons que le client dise qu’il déteste le skateboard, nous lui demandons pourquoi et il répond : « Je déteste la couleur. »  Nous disons quelques chose comme : « euh… la couleur ? C’est tout ? ». Et le client répond « Ouais, faites le en bleu ! À part ça, c’est parfait ! ». Vous venez d’économiser **beaucoup** d’argent en ne construisant pas la voiture ! Peu probable, mais qui sait ?

La question clef c’est « **Quelle est la manière la plus rapide et la moins chère de pouvoir commencer à apprendre** ? » Pouvons nous livrer quelque chose encore plus vite qu’un skateboard ? ET pourquoi pas un ticket de bus ?

![Ticket de bus](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-7.jpg)

Est-ce que cela aidera à résoudre le problème de l’utilisateur ? Peut-être, peut-être pas, mais nous allons surement apprendre quelque chose en mettant cela entre les mains de vrais utilisateurs. Le [Lean Startup](http://theleanstartup.com/book) offre un excellent modèle qui propose de lister toutes vos hypothèses actuelles à propos des utilisateurs et ensuite de travailler systématiquement à les valider ou les invalider.

Vous n’avez pas besoin de faire tester le produit à tous les utilisateurs et vous n’avez pas besoin de contruire un produit pour tester quelque chose. **Tester un prototype ne serait-ce que sur un seul utilisateur vous apprendra toujours quelque chose**.

Bon OK, revenons à l’exemple du skateboard.

Après avoir joué avec dans le bureau, le client dit «  OK, c’est marrant et ça me fait aller plus vite à la machine à café. Mais c’est instable. Je tombe trop facilement. »

Donc à la prochaine itération, nous essayons de résoudre ce problème, ou au moins d’en apprendre plus là dessus.

![Deuxième étape, le client commencer à apprécier le produit](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-8.jpg)

Le client peut maintenant se balader dans les bureaux sans tomber !

Satisfait ? Pas vraiment, il aimerait quand même bien cette voiture. Mais en attendant il utilise ce produit et nous fait des retours. Ce dont il se plaint le plus c’est que c’est difficile de parcourir de plus longues distances, entre deux bâtiments, à cause des petites roues et de l’abscence de freins. Du coup, pour la prochaine version le produit se transforme en quelque chose qui ressemble à un vélo.

![Troisième étape, le client apprécie le produit](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-9.jpg)

Maintenant le client peut se déplacer à tout vitesse autour du campus. Youpi !

Nous avons appris des choses en cours de route : le client aime le contact de l’air frais sur son visage. Le client est sur un campus et se déplace surtout entre les bâtiments.

**Le vélo pourrait se révéler être un bien meilleur produit que la voiture envisagée à l’origine**. En fait, en testant ce produit nous pourrions apprendre que les chemins sont de toute façon trop étroits pour une voiture. Nous avons juste fait économiser au client beaucoup de temps et d’argent, et nous lui avons fourni un produit plus adapté en moins de temps !

> Maintenant vous pourriez penser «  Mais n’aurions nous pas dû déjà savoir cela à l’aide de données issues du contexte de l’utilisateur et de ces besoins ? ». Bonne remarque. Mais dans la plupart des scénarii de développement de produit que j’ai pu observer dans la vraie vie, **peu importe le nombre d’analyses préparatoires que vous faites, vous serez toujours surpris quand vous mettrez la première version de votre produit dans les mains de l’utilisateur**, et beaucoup de vos hypothèses se révèleront être à côté de la plaque.

Alors **oui, faites des recherches préparatoires, découvrez en autant que vous pouvez avant de commencer le développement, mais ne passez pas trop de temps dessus et ne vous fiez pas trop aux analyses** - commencez plutôt à prototyper et à publier, c’est là qu’a lieu le véritable apprentissage.

Bien, revenons en à notre histoire. Peut-être que le client en veut plus. Parfois il a besoin de se rendre dans une autre ville, et la balade à vélo est trop lente et fait suer. Nous ajouterons un moteur à la prochaine itération.

![Quatrième étape, le client aime bien son produit](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-10.jpg)

Ce modèle convient particulièrement bien au logiciel — le *soft*ware est souple par définition. Vous pouvez *transformer* le produit au fur et à mesure, contrairement au matériel où vous aurez essentiellement à reconstruire à chaque fois. Mais, même dans les projets matériels, il y a d’énormes bénéfices à livrer des prototypes pour observer et apprendre comment les clients utilisent votre produit. C’est simplement que les itérations tendent à être un peu plus longues (des mois plutôt que des semaines). Même de vraies entreprises automobiles comme Toyota et Tesla font beaucoup de prototypage (croquis, modèles 3D, [modèle à l’échelle en argile](http://www.toyota-global.com/showroom/toyota_design/voice_of_design/03.html), etc.) avant de développer un nouveau modèle de voiture.

Et maintenant ? Encore une fois, peut-être le client est-il satisfait de la moto. Nous pourrions mettre un terme au projet plus tôt que prévu. La plupart des produits fourmillent de trucs compliqués et de fonctionnalités que personne n’utilise. L’approche itérative est vraiment une manière de livrer moins, ou de **trouver la façon la plus simple et la moins couteuse de répondre au besoin du client**. Rapprochez vous de l'extraodinaire. C'est très Zen.

Ou, encore une fois, le client peut choisir de continuer, avec ou sans modifications des spécifications. Nous pourrions en fait  en arriver exactement à la même voiture que celle imaginée au départ. Toutefois, il est beaucoup plus probable que nous aurons récolté des points de vue déterminants en cours et que nous arriverons à quelque chose de légèrement différent. Comme cela :

![Cinquième étape, le client est emballé par son produit](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-11.jpg)

Le client est fou de joie ! Pourquoi ? Parce que nous avons appris en cours de route qu’il apprécie l’air frais sur son visage, donc nous avons fini avec une décapotable. Il a eu une voiture au final, mais une meilleure voiture que ce qui était prévu à l’origine.

Maintenant, prenons un peu de recul.

## C’est quoi votre skateboard ?

Le scénario du haut (livrer un pneu avant) est nul car nous continuons de livrer des trucs que le client ne peut pas du tout utiliser. Si vous savez ce que vous faites - votre produit ne comporte que peu de complexité et de risque, peut-être avez vous fait ce genre de choses des centaines de fois auparavant - alors continuez à juste faire du *Big Bang*. Construisez votre truc et livrez quand c’est terminé.

Maintenant, la majorité des efforts pour produire du logiciel que j’ai pu observer sont bien trop complexes et risqués pour cela et l’approche *Big Bang* mène trop souvent à d’énormes et coûteux échecs. Donc la question à se poser c’est : **C’est quoi votre skateboard** ?.

Dans le développement de produit, une des premières choses à faire (après décrire le problème que vous essayez de résoudre et pour qui) c’est d’identifier votre équivalent du skateboard.

Pensez au skateboard comme à **une métaphore comme la plus petite chose que vous pouvez mettre dans les mains des utilisateurs et obtenir de vrais retours**. Ou utilisez le « ticket de bus » si cette métaphore marche mieux.

Cela vous donnera la boucle de retour nécessaire et vous donnera à vous et à votre client plus de contrôle sur le projet — vous pouvez apprendre et faire des changements, plutôt que de suivre le plan et prier pour le meilleur.

Prenons quelques exemples issus de la vraie vie.

## Exemple 1 : le lecteur de musique Spotify

> « Avec plus de 75 millions d’utilisateurs, c’est difficile d’imaginer une époque sans Spotify. Mais elle a existé. Un temps où nous encombrions tous les allées de la FNAC pour acheter de nouveaux CDs. Une époque où nous sommes tous devenus des voleurs sur Napster. Une époque où iTunes nous obligeait à débourser 2 EUR par chanson. Et puis Spotify est arrivé. » — [Techcrunch](http://techcrunch.com/gallery/a-brief-history-of-spotify/)

[Spotify](http://www.spotify.com/) est un produit plutôt chouette maintenant. Mais ça n’a pas démarré ainsi. J’ai eu la chance d’être impliqué très tôt dans cette fantastique aventure (et je le suis toujours).

![Interface mobile des premières versions de Spotify](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-12.jpg)

En tant que startup en 2006, Spotify a été fondée sur quelques hypothèses clés : les gens sont contents de streamer (plutôt que de posséder) de la musique, les labels et les artistes veulent bien laisser les gens faire cela légalement, et du streaming stable et rapide est techniquement faisable. Souvenez-vous en 2006 lorsque streamer de la musique (avec Real Player par exemple) était une expérience assez horrible, et que la musique piratée était plutôt la norme. La partie technique du challenge était : « Est-il vraiment possible de construire un logiciel qui diffuse de la musique instantanément quand on appuie sur le bouton lecture ? Est-il possible de se débarasser de cette ennuyeuse barre de progression de « mise en tampon ? »

Commencer petit ne signifie pas que nous ne pouvez pas penser grand. Voici l’un des premiers croquis de ce qu’ils avaient en tête :

![Croquis basse-définition de la première interface de Spotify ](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-13.jpg)

Mais plutôt que de passer des années à construire le produit en intégralité et ensuite vérifier que les hypothèses sont valides, les développeurs se sont assis et ont monté un prototype technique, en y mettant la musique extraite qu’ils avaient sur leurs ordinateurs portables et ils ont commencé à expérimenter dans tous les sens pour trouver des façons de faire en sorte que la lecture soit stable et rapide. La métrique de référence était « Combien de millisecondes s’écoulent entre le moment où j’appuie sur le bouton lecture et lorsque j’entends la musique ? ». Cela devrait jouer presque instantanément et continuer de jouer de façon uniforme et sans aucun saut de lecture ! Une fois qu’il sont arrivés à quelque chose de décent, ils ont commencé à le tester eux-mêmes, et l’ont fait tester à leur famille et à leurs amis.

![Première version de l'interface de Spotify](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-14.jpg)

La version initiale ne pouvait pas être diffusée à une audience plus large, ce n’était pas du tout fini, il n’y avait aucune fonctionnalité si ce n’est la possibilité de jouer quelques chansons codées en dur, il n’y avait aucune autorisation légale ou de modèle économique. C’était leur skateboard.

Mais **ils ont mis sans avoir honte le skateboard dans les mains de vrais utilisateurs** - les amis et la famille - et ils ont rapidement eu les réponses dont ils avaient besoin. Oui c’était possible techniquement. Et oui les gens ont vraiment adoré le produit (ou plutôt ce que le produit pouvait devenir) ! **Les hypothèses ont été validées** ! Le prototype fonctionnel aida à convaincre les labels de musique et les investisseurs et le reste, et bien cela appartient désormais à l’histoire.

## Exemple 2 : Minecraft

![Écran d'accueil du jeu Minecraft](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-15.jpg)

[Minecraft](https://minecraft.net/) est l’un des jeux qui a rencontré le plus de succès dans l’histoire de développement des jeux, surtout si on prend en considération le coût de développement. Minecraft est aussi un des exemples les plus extrêmes de l’état d’esprit publier-tôt-publier-souvent. La première version diffusée publiquement a été faite seulement après [6 jours de développement](http://minecraft.gamepedia.com/Version_history) par [une seule personne](https://en.wikipedia.org/wiki/Markus_Persson) ! Vous ne pouviez pas faire grand chose avec la première version - c’était tout compte fait un paysage en 3D avec des blocs moches où l’on pouvait récolter des blocs et les placer ailleurs pour bâtir des structures rudimentaires.

![Capture d'écran de la première version de Minecraft](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-16.jpg)

C’était le skateboard.

Les utilisateurs furent tout de même très investis (c’est assez marrant que la communication entre le développeur et les utilisateurs ait eu lieu sur Twitter). Parmi les premiers utilisateurs, il y avait moi et mes quatre enfants. [Plus de cent versions](http://minecraft.gamepedia.com/Version_history) ont été diffusées la première année. Le développement de jeu consiste principalement à trouver ce qui procure du plaisir (certaines entreprises avec qui j’ai travaillé utilisent le terme « Définition de plaisir » à la place de « Définition de fini »), et le meilleur moyen d’y parvenir est d’avoir de vraies personnes qui jouent à ce jeu - et dans notre cas des milliers de personnes ont payé pour pouvoir essayer la première version en accès limité et ont donc eu une motivation personnelle pour aider à améliorer le jeu.

Petit à petit, une petite équipe de développement s’est formée autour du jeu (principalement deux gars en fait), et le jeu a connu un succès fulgurant partout dans le monde. Je pense que nulle part je n’ai croisé un enfant qui ne jouait pas à Minecraft. Et l’année dernière le jeu (enfin la [société](https://mojang.com/) qui s’est formée autour du jeu) a été vendu à Microsoft pour 2.5 milliards de dollars. C’est assez incroyable.

## Exemple 3: Un grand projet gouvernemental

Vers 2010 [la police suédoise](https://polisen.se/) a démarré une grande initiative pour permettre à la police de passer plus de temps sur le terrain et moins au poste - PUST (Soutien aux Enquêtes de Police en français). Un projet fascinant, j’ai été impliqué en tant que coach et j’ai écrit un livre sur ce que nous avons fait et ce que nous avons appris ([Lean from the Trenches](https://pragprog.com/book/hklean/lean-from-the-trenches)).

![Policiers avec un ordinateur portable sur le terrain](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-17.jpg)

L’idée était d’équiper les voitures d’ordinateurs portables et de logiciel sur mesure pour permettre à la police d’avoir accès aux systèmes dont ils ont besoin en temps réel, par exemple lorsqu’ils interrogent un suspect (c’était avant l’arrivée des tablettes).

Ils avaient essayé de mettre en place ce genre de système par le passé et avaient misérablement échoué, principalement à cause de la pensée *Big Bang*. Ils me confièrent que pour l’un de leurs précédents essais, il s’était écoulé sept ans entre le début et la diffusion de la première version. SEPT ANS ! Entre temps bien sur tout avait changé et le projet était une échec complet. Donc cette fois ils voulaient faire ça autrement.

Le projet de 60 personnes (connu plus tard sous le nom de « PUST Java ») a étonnamment bien fonctionné, surtout pour un important projet gouvernemental (il a été élu deuxième [projet de l’année](http://cio.event.idg.se/event/awards2011/) lors des CIO Awards). Une des principaux facteurs de réussite a été qu’**ils n’ont pas essayé de tout faire d’un seul coup**) ils ont découpé l’éléphant en deux dimensions :

- Par région. Nous n’avon pas besoin de diffuser à TOUTE la Suède d’un coup, nous pouvons commencer à diffuser à une une seule région.
- Par type de crime. Nous n’avons pas besoin de prendre en charge tous les types de crimes dès le début, nous pouvons commencer en ne prenant en charge qu’un ou deux types de crime.

![tableau de release du logiciel pour la police suédoise](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-18.jpg)

La première version, la 1.0, était leur skateboard.

C’était un petit système, qui ne prenait en charge que quelques types de crimes et qui a été testé sur le terrain par une poignée de policiers à Östergötland (une région de la Suède). Les autres types de crime devaient être gérés à l’ancienne - retourner au poste et remplir la paperasse. **Ils savaient qu’ils étaient des cobayes et que le produit était loin d’être terminé**. Mais ils étaient contents de le tester, parce qu’ils connaissait l’alternative. Ils avaient vu de quel genre de système merdique pouvait accoucher les process qui manquent de retours des premiers utilisateurs, et maintenant **ils avaient enfin la possibilité d’avoir leur mot à dire sur un système pendant sa conception** !.

Leurs retours furent durs et honnêtes. Beaucoup de nos hypothèses passèrent par la fenêtre et un des plus grands dilemmes était de savoir quoi faire des spécifications des études de cas élaborées avec soin qui s’avéraient de moins en moins utiles au fur et à mesure que les retours arrivaient (c’était une entité avec un passif d’organisation en cascade, habituée à faire beaucoup d’analyses en amont).

Bref, pour faire court, **les premiers retours étaient intégrés pour améliorer le produit** et petit à petit, comme les policiers d’Östergötland commençaient à apprécier le produit, nous avons pu ajouter d’autres types de crimes et déployer dans d’autres régions. Au moment où nous sommes arrivés à la grande diffusion (1.4), avec déploiement national et formation de 12000 policiers, nous n’étions pas si inquiets que ça. **Nous avions publiés tellement de version, fait tant de tests utilisateurs, que nous avons bien dormi la nuit de la diffusion nationale**.

Malheureusement la victoire fut de courte durée. Le projet suivant (PUST Siebel) l’a enterré et est revenu à une pensée en cascade, surement à cause des vieilles habitudes. Deux ans d’analyses et de tests sans aucune diffusion ni test utilisateur, suivi d’une publication à la « Big Bang » de la « prochaine génération » du produit aux 12000 policiers à la fois. Ce fut un désastre absolu, et après six mois d’hémorragie, ils ont mis un terme à tout cela. Le coût de développement s’est élevé à environ 20 millions d’euros, mais les études internes estiment que le coût pour la société Suédoise (car la police était handicapée par cet horrible système) était de l’ordre d’1 milliard !

Une façon pour le moins coûteuse d’apprendre !

## Exemple 4 : Lego

Je travaille en ce moment pour [Lego](http://www.lego.com/), et je suis bluffé par leur capacité à toujours sortir de grands succès, année après année, sans se planter. J’ai entendu beaucoup d’histoires intéressantes sur comment ils s’y prennent, et le point commun, c’est le prototypage et le test utilisateur au plus tôt ! Je vois souvent des groupes d’enfants dans les bureaux, et des designers collaborer avec des maternelles du coin, des écoles, des familles pour tester sur le terrain leurs dernières idées de produits.

Voici un exemple récent. Les [Nexo Knights](http://www.lego.com/fr-fr/nexoknights/) (sortis en janvier 2016) :

![Figurines des Lego Nexo Knights](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-19.jpg)

Lorsqu’ils ont commencé à explorer le concept, ils ont fait des prototypes papier et les ont montrés à de jeunes enfants. La première réaction des enfants fut « Hé, mais où sont les méchants ? Je vois pas qui est bon et qui est mauvais ! » Oups. Donc les designers ont continué à itérer et à tester  jusqu’à ce qu’ils trouvent un design qui marche pour les enfants. Je parie que même vous, vous ne devinez pas qui est bon et qui est méchant sur l’image précédente.

Je ne sais pas vraiment où est le skateboard dans cette histoire, mais vous avez compris l’idée - **récolter très tôt des retours de vrais utilisateurs**. Ne vous contentez pas de concevoir le produit et de le construire en intégralité. Imaginez s’ils avaient construit le produit basé sur leurs hypothèses de design d’origine, et avaient constaté le problème *après* avoir distribué des milliers de boîtes dans les magasins du monde entier !

Lego a également connu sa part d’échecs durement appris. Un exemple est [Lego Universe](https://en.wikipedia.org/wiki/Lego_Universe), un monde Lego en ligne massivement multijoueur. Ça a l’air marrant hein ? Le problème c’est qu’ils ont été trop ambitieux et ont fini par essayer de construire tout le truc à la perfection avant de le monter au monde entier.

![Capture d'écran du jeu Lego Universe](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-20.jpg)

Environ **250 personnes ont travaillé pendant 4 à 5 ans** (à cause d’un périmètre constamment en évolution causé par le perfectionnisme, et lors de la sortie du jeu, la réception a été… peu enthousiaste. Le jeu fini était beau mais pas aussi drôle que l’on aurait pu s’y attendre, en conséquence le produit fût arrêté au bout de deux ans.

**Il n’y avait pas de skateboard** !

Et pourquoi ça ? Parce que les skateboards ne sont pas géniaux (en tout cas pas si vous vous attendez à une voiture) et que la culture de Lego est avant tout de procurer des expériences géniales ! Si vous travailler au QG de Lego à Billand au Danemark, vous passerez devant cette énorme fresque murale tous les jours :

![Det Bedsten Er Ikke For Godt ](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-21.jpg)

Cela peut se traduire par « Seul le meilleur est assez bon ». Cela a été le principe directeur depuis la création de l’entreprise il y a plus de 80 ans et cela lui a permis d’être une des entreprises ayant rencontré le plus de succès dans le monde. Mais dans ce cas le principe a été mal appliqué. **La recherche de la perfection a retardé le feedback vital**, ce qui signifie des erreurs sur les hypothèses de ce que les utilisateurs aiment ou n’aiment pas. L’exact opposé de Minecraft.

Il est assez intéressant de noter que les équipes de Lego Universe utilisaient en fait Scrum et itéraient beaucoup - comme les gens de chez Minecraft. Mais les publications ne se firent qu’en interne. Donc il y a surement eu un skateboard, une bicyclette, et ainsi de suite, mais ces produits n’ont jamais atteint de vrais utilisateurs. Ce n’est pas comme ça que Scrum est prévu d’être utilisé.

Ce fut un échec coûteux, mais  Lego a appris grâce à lui, et ils sont constamment en train de s’améliorer sur les tests en amont et les retours utilisateurs.

## Améliorer le MVP

Et cela (on respire un grand coup…) m’amène à la thématique du MVP - le produit minimum valable.

L’idée sous-jacente est super, mais le terme en lui-même sème beaucoup de confusion et de peur. J’ai rencontré beaucoup de clients qui réagissent ainsi : « Pas moyen que je veuille publier un MVP - c’est la dernière des livraisons que j’aurais. » Bien trop souvent, les équipes livrent le soi-disant Produit Minimum Valable et puis se font vite embarquer dans le projet suivant, laissant le client avec un produit buggué et inachevé.

**Pour certains clients, MVP = MMP (Merde Minimum Publiable**).

![You will give me the Minimum Releasable Crap and I will move on to the next project!](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-22.jpg)

Je sais, je sais, cela est davantage dû à un mauvais management qu’au terme MVP, mais quand même… le terme prête à confusion. « Minimum » et « Valable » ne signifient pas la même chose pour tout le monde et cela cause des problèmes.

Donc voici une alternative.

Tout d’abord, remplaçons le mot « Minimum » par « Rapide ». L’idée principale derrière la publication d’un MVP est d’avoir rapidement des retours - en livrant un produit minimum plutôt qu’un produit complet, nous pouvons avoir des retours au plus tôt.

**Peu de clients veulent le « minimum » mais beaucoup veulent « rapidement »**. Donc c’est notre premier changement :

Minimal => Rapide

Ensuite supprimons le mot « Valable » car il est trop vague. **Ton « valable » est mon « horrible** ». Certaines personnes pensent que Valable veut dire «  quelque chose que je peux tester et qui peut générer des retours », d’autres pense que cela veut dire « quelque chose que le client peut vraiment utiliser ». Donc soyons plus explicites et découpons le en trois choses différentes :

![Aim for the clouds... but deliver in small steps ](http://blog.crisp.se/wp-content/uploads/2016/01/Making-sense-of-MVP-23.jpg)

Le **Produit Testable Rapidement** est le skateboard ou le ticket de bus, **la première version dont les clients pourront vraiment faire quelque chose**. Cela ne résoudra peut-être pas leur problème mais aura au moins le mérite de générer des retours. Nous disons très clairement que l’apprentissage est le but principal de cette version et que toute véritable valeur ajoutée pour le client sera un bonus.

Le **Produit Utilisable Rapidement** est peut-être la bicyclette. **La première version que les premiers utilisateurs vont aimer utiliser**. C’est loin d’être terminé et ce sera peut être pas très agréable. Mais cela met vos clients dans une meilleure position que précédemment.

Le **Produit Adorable Rapidement** est peut-être la moto. **La première version que les utilisateurs vont aimer, donc ils vont parler à leurs amis et qu’ils seront prêts à payer**. Il y a encore beaucoup de choses à améliorer et nous avons toujours la possibilité de finir avec une décapotable ou un avion, ou autre chose. Mais nous avons atteint le point où nous avons un produit  vraiment vendable.

> *J’ai considéré ajouté une étape de plus au début « **Le produit à impressions rapide** » qui est à la base le prototype papier ou son équivalent que vous allez utiliser pour recueillir les premières impressions des utilisateurs. Mais quatre étapes ça semble trop. Mais quoi qu’il en soit, c’est aussi une étape importante. Certains appeleraient un prototype papier un Produit Testable Rapidement, mais j’imagine que tout dépend de ce que vous appelez Testable. Jetez un coup d’œsil au [Guide MVP](https://www.crisp.se/mvpguide) pour en savoir plus - il est plein de super exemples concrets sur comment avoir rapidement des retours avec un minimum d’investissement*.

Bien sûr les gens peuvent toujours mal interpréter Rapidement Testable/ Utilisable / Adorable mais c’est au moins un peu plus explicite que le nébuleux Produit Valable Minimum.

## Les points à retenir

OK, il est temps de résumer. Je n’aurais jamais cru que ce serait si long, merci de m’avoir lu jusque ici ! Les points clefs à retenir :

- **Eviter les versions « Big Bang** » pour les développements produits complexes et innovants. Faites le de manière itérative et incrémentale. Vous le saviez déjà. Mais le faites-vous vraiment ?
- **Commencez par identifier votre skateboard** - le produit testable rapidement. Visez la lune, mais ravalez votre orgueil et commencez par livrer le skateboard.
- **Evitez le terme MVP**. Soyez plus explicite sur ce dont vous parlez véritablement. Rapidement testable/Utilisable/Adorable est juste un exemple, utilisez n’importe quels termes du moment qu’ils sont moins confus pour vos investisseurs.

Et rappelez vous - le dessin du skateboard et de la voiture est juste une métaphore, ne le prenez pas au pied de lettre :o)

PS: Voici une histoire marrante qui raconte comment mes enfants et moi avons utilisé ces principes pour [gagner une compétition de Robot Sumo](http://blog.crisp.se/2015/10/06/henrikkniberg/how-2-kids-and-adult-rookies-won-a-robot-sumo-competition) :o)

*Merci à Mary Poppendieck, Jeff Patton, Alistair Cockburn, Anders Haugeto, Sophia, mes collègue de chez Crisp, Spotify et Lego, and tous ceux qui m’ont fait plein de retours utiles*.
