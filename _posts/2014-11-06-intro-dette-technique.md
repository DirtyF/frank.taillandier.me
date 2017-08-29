---
title: Introduction à la notion de dette technique
description: "Mieux comprendre l'importance de l'impact des décisions techniques dans les projets informatiques"
image: https://d262ilb51hltx0.cloudfront.net/max/564/1*pQApZLe4wv9Rm0tLIvWqNw.jpeg
---

Comme beaucoup de métiers techniques, l’art du développement logiciel reste une énigme pour la majorité des équipes dirigeantes. Pourtant chaque jour elles imposent des choix aux équipes techniques sans véritablement pouvoir mesurer les conséquences de leurs décisions sur le long terme. C’est pour cela qu’il me paraissait essentiel de traduire en français l’excellent article de Maiz Lulkin paru sur Medium : [Technical Debt 101](https://medium.com/@joaomilho/festina-lente-e29070811b84 "Technical Debt 101 sur Medium"). En espérant que cela puisse aider à changer les mentalités et à ce que chacun puisse prendre ses responsabilités : les développeurs comme les décideurs.
{: .lead }

**Un document introductif à propos de la dette technique, du code, des réécritures complètes et de sagesse ancienne à destination des responsables non technique.**

> Il y a un temps pour tout, un temps pour toute chose sous les cieux
> – <cite>[L’écclesiaste, chapitre 3](http://www.chabad.org/library/bible_cdo/aid/16464/jewish/Chapter-3.htm)</cite>

## Le problèmes des analogies

En développement logiciel, les conséquences désastreuses du sacrifice de la qualité sont souvent incomprises par les responsables non technique. Ils la sous-estiment au détriment d’une productivité stable, d’un enthousiasme constant et au final de la stratégie globale de l’entreprise.

Comme les responsables non technique n’ont pas vraiment de première expérience en développement logiciel, pour leur faire comprendre ces conséquences, nous devons nous reposer sur des analogies. Et c’est ici que commencent nos problèmes.

Les analogies sont bien évidemment de très bons outils. Joseph Priestley leur a publiquement rendu hommage comme étant à la base de toutes les recherches scientifiques.

> L’analogie est notre meilleur guide pour tous les questionnements philosophiques. Toutes les découvertes, qui n’ont pas été faites par simple accident, ont été faites grâce à elle – <cite>Joseph Priestley</cite>

Quand les physiciens parlent de « rotation » des électrons ou d’« infra-rouge », ils emploient des analogies pour essayer de faire correspondre la vraie façon dont le monde fonctionne avec notre capacité limitée de représentation. Les électrons ne tournent pas littéralement sur eux-mêmes et infra-rouge n’est pas « un petit peu moins rouge ». Il est impossible de comprendre ce que _rotation_ signifie exactement, si ce n’est que c’est un comportement très particulier des électrons qui peut être utilisé pour prédire les interactions atomiques. Il est également impossible d’imaginer – au sens d’avoir une représentation mentale — d’autres couleurs, bien qu’il soit possible de concevoir, en faisant appel à la raison, l’existence de plus de couleurs que celles qui sont visibles.

Dans tous les cas, une analogie implique que les mots que nous utilisons pour décrire un phénomène sont sans équivoque. ([Thomas d’Aquin est d’une grande aide sur ce point](http://plato.stanford.edu/entries/analogy-medieval/)). Cela veut dire que le mot _rotation_ est utilisé avec deux sens différents, un dont nous connaissons le sens et un autre qui est nouveau et étranger. Ces deux sens, au mieux, peuvent être similaires de sorte qu’ils allument une « étincelle de compréhension », nous faisant comprendre, par cette familiarité, au moins une partie de la nature du phénomène. Au pire, ils peuvent fausser notre représentation du phénomène et nous détourner de notre soif de connaissance.

## L’analogie de la dette technique

Il est probable que la meilleure analogie créée pour expliquer les conséquences de ne pas faire les choses correctement en premier lieu est l’analogie avec la dette.

Une « dette » signifie que vous avez échangé l’acquisition de quelque chose aujourd’hui contre une charge financière à long terme. Cette charge, ce n’est pas seulement rembourser ce que vous devez : il y a un intérêt. Cela signifie que, même si vous payez votre dette à temps, vous paierez plus que ce que vous avez reçu, et que si vous ne le faites pas, votre dette continuera de croître, même si vous ne faites rien. Et si vous ignorez une dette suffisamment longtemps, elle deviendra impossible à payer et vous ferez « banqueroute ».

![Shylock and Jessica, by Maurycy Gottlieb](https://d262ilb51hltx0.cloudfront.net/max/601/1*J9T4nuKvco0U3K-fKphljg.jpeg)

Shylock and Jessica, by [Maurycy Gottlieb](http://en.wikipedia.org/wiki/Maurycy_Gottlieb)

Malgré les vielles rancœurs de la population contre le système de crédit, incarné par le personnage de Shylock de Shakespeare, le méchant usurier juif dans *Le Marchand de Venise*, la dette est une bonne chose. Comme nous l’apprend Niall Ferguson dans [The Ascent of Money](http://www.youtube.com/watch?v=4Xx_5PuLIzc), la possibilité de crédit est l’une des forces motrices des sociétés innovantes. Autrement dit, on peut acheter une machine pour commencer à produire quelque chose et puis payer pour la machine. Dans les sociétés où la confiance et les institutions économiques ne sont pas en place, une telle chose ne peut se produire, et la stagnation est la norme.

Donc, l’analogie est la suivante : chaque fois que vous n’écrivez pas un logiciel basé sur les meilleures pratiques possibles et compréhension du domaine métier, vous introduisez une _dette technique_. Cette dette ne cesse d’augmenter avec le temps, comme un intérêt, parce que celui qui doit changer quelque chose doit faire face à des concepts imparfaits que vous avez codifié la première fois. Si vous l’ignorez trop longtemps, vous pouvez vous retrouver en faillite technique, où les concepts codifiés ne reflètent plus du tout le domaine sur lequel vous travaillez.

## Ce que représente exactement la dette technique

Selon le créateur de l’analogie, Ward Cunningham, c’est quelque chose que vous contractez lorsque vous reportez des décisions de conception à plus tard, quand vous disposerez de davantage d’informations. Le concept de dette technique n’est utile que lorsqu’il est utilisé consciemment pour ​​chaque décision, et quand vous savez exactement comment et quand vous allez refactoriser les choses. Laissez-moi vous donner un exemple :

Vous commencez à écrire une application. Au début il n’y a pas besoin de rôles utilisateurs. Tout le monde peut tout faire. À un moment donné vous avez deux permissions différentes pour une action spécifique, comme par exemple un type d’utilisateur qui peut voir des rapports et les autres qui ne peuvent pas. L’équipe technique considère la possibilité de créer un système complet de permissions à part entière. Mais à ce stade, ça ressemble vraiment à quelque chose d’inutilement complexe. Une méthode dans la logique métier et une autre dans la couche de présentation feront le boulot.

Un peu plus tard, un autre cas de figure nécessite de différencier les utilisateurs, puis un autre et encore un autre. À ce stade, les développeurs réalisent que ça commence à être le foutoir et que la solution est de refactoriser le code pour avoir un système décent de gestion des permissions. Cette refactorisation de code prendra plus de temps que de simplement ajouter une nouvelle méthode, mais il va simplifier le code et permettra aux futures permissions d’être ajoutées avec une seule ligne de code ou même en insérant simplement une nouvelle entrée dans la base de données.

Le problème est qu’il y a _vraiment_ un besoin commercial d’avoir les permissions actuelles en production d’ici un à deux jours car cela permettrait à cinq clients potentiels de signer un contrat cette semaine plutôt que la semaine prochaine ou peut-être jamais s’il n’apprécient pas que la société n’ait pas répondu favorablement à leur seule demande.

C’est le moment où il faut décider si on contracte de la dette. Toutes les informations nécessaires à cette prise de décision sont connues. Au départ, ajouter une permission demandait 3 points de story. Maintenant ça en demande 4. Bientôt cela représentera 5, 6, [qui sait ?](http://ieeexplore.ieee.org/xpl/login.jsp?reload=true&tp=&arnumber=6579461&url=http%3A%2F%2Fieeexplore.ieee.org%2Fxpls%2Fabs_all.jsp%3Farnumber%3D6579461) La refactorisation complète demande maintenant un effort de 21. Donc la décision, aujourd’hui n’est pas entre 4 et 21 mais entre trois scénarios possibles :

*   4 maintenant (pour la permission), 22 plus tard (la refactorisation est désormais un peu plus compliquée) et quelque chose proche de 0 pour chaque nouvelle permission après ça, accompagné par un léger gain de la productivité générale. Dans ce scénario, l’entreprise a ajouté 5 clients à son portfolio et l’argent arrive tôt;
*   21 maintenant (pour la refactorisation), 0 plus tard (pour la permission); Dans ce scénario, l’entreprise n’as pas ajouté 5 clients à son portfolio de suite, et l’argent arrivera plus tard;
*   4 maintenant (pour la permission), aucune refactorisation du tout, et donc 5 pour les prochaines permissions, puis 6, puis 7… jusqu’à ce que la refactorisation soit suggérée, avec maintenant un coût avoisinant les 50; Dans ce scénario, l’argent est encaissé tôt, mais la prochaine fois cela demandera de faire un travail spécifique pour ajouter des clients et prendra beaucoup plus de temps.

Vu le temps total, c’est _toujours_ mieux de partir sur la meilleure conception possible. Tout comme c’est mieux pour une entreprise d’être en mesure de faire de nouveaux investissements sans avoir besoin d’aller à la banque. Et dans ce genre d’éventualités, partir sur le premier scénario _est_ le plus sage.
Une mise en garde cependant : même [ce type de compromis ne peut pas être fait en permanence](http://signalvnoise.com/archives2/getting_real_take_it_slow_if_you_need_it_fast.php).

Encore une fois, ce type de négociation n’est pas la norme. Beaucoup de managers ne comprennent pas précisément le concept de dette technique. Voici Steve McConnell, l’auteur de <cite>Code Complete</cite>, entre autres chefs-d’œuvre, dans une [entrevue](http://www.ontechnicaldebt.com/blog/steve-mcconnell-on-categorizing-managing-technical-debt/) avec le site internet _On Technical Debt_ :

> L’équipe de direction pense que nous pouvons augmenter la dette technique car elle n’en voit jamais les conséquences. Mais ces conséquences sont bien présentes… elles ne sont simplement jamais exprimées de manière à ce que cela attire l’attention de l’équipe dirigeante.

## Quand contracter de la dette

Une chose que j’entends souvent est que <q>le plus important pour les startups c’est le délai de mise sur le marché</q> et puisque vous n’avez pas encore <q>validé les hypothèses de votre business</q> (en bon français cela signifie que vous ne gagnez toujours pas d’argent avec) ce n’est pas grave de s’exposer à de la dette, vous la rembourserez éventuellement plus tard lorsque votre société aura du succès.

Ce raisonnement bien qu’attrayant ne raconte pas toute l’histoire. Le mantra créé par le fondateur de LinkedIn Reid Hoffmann <q>si vous n’êtes pas un minimum embarrassé par la première version de votre produit, c’est que vous vous êtes lancé trop tard.</q> est rapidement devenu une excuse pour adopter une approche « faisons _n’importe quoi_ ». Des milliers de startups se sont lancées et ont échoué précisément à cause du manque de qualité. Apparemment un minimum de qualité est donc nécessaire pour qu’un produit rencontre du succès, même un petit. Et ce minimum, vu [le mouvement massif de l’industrie dans le design et l’expérience utilisateur](https://medium.com/@jamieskella/the-bottom-line-value-of-design-fb3b938a5255), l’agile et la livraison continue ces dernières années, augmente chaque jour.

<iframe width="510" height="420" style="border: 1px solid #CCC; border-width: 1px; margin-bottom: 5px; max-width: 100%;" src="//www.slideshare.net/slideshow/embed_code/31984451" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" allowfullscreen="allowfullscreen"></iframe>

C’est précisément ce que renferme le concept de [Produit minimal adorable](http://www.slideshare.net/spookstudio/the-minimum-loveable-product-31984451) (contrairement au [MVP]({% post_url 2016-01-28-comprendre-le-mvp %})). L’idée est que pour obtenir quelque chose rapidement, et qui puisse être _aimé_, vous devriez préférer sacrifier le périmètre grâce à une priorisation sans pitié.

Dans tous les cas, on peut raisonnablement dire que _toutes_ les startups ont contracté un peu de dette technique qui sera remboursée en cas de succès. Certaines de ces startups ont conscience de ce compromis et ont un plan pour le gérer. Ces startups, si elles sont financées, investiront alors plutôt dans des cuisines plus chouettes et iront à un rythme bien plus rapide que leurs concurrents.

## Écrire du mauvais code, ce n’est pas de la dette technique

La principale incompréhension de cette analogie vient du fait que la dette technique serait ce qu’on obtient si on écrit du mauvais code. C’est _entièrement_ faux. La dette technique est une façon de décider des compromis à réaliser au sujet de la conception de manière explicite et gérable. Le genre de communication qui se produit lors d’une telle décision est celle présentée ci-dessus.

Maintenant imaginons une tout autre conversation :

**Manager. —** Quand est-ce que les nouvelles permissions seront terminées ?

**Développeur Junior. —** Mmmm, demain _j’espère_, en fin de journée.

**Manager. —** Nous en avons besoin aujourd’hui. Ne peux-tu pas trouver une manière « créative » de le faire ?

**Développeur Junior. —** Laissez-moi réfléchir…

**Manager. —** Nous avons 5 clients qui en ont vraiment besoin aujourd’hui. Sinon ils ne signeront probablement pas les contrats.

**Développeur Junior. —** Mais le…

**Manager. —** Écoute, il est très important que tu comprennes la valeur métier de cette fonctionnalité. C’est pas juste une nouvelle condition dans le code ? Ajoute la simplement ici et on _corrigera ça_ plus tard.

**Développeur Junior. —** D’accord.

**Manager. —** Donc on pourra déployer aujourd’hui ?

**Développeur Junior. —** Hum.

{% include figure.html url="https://d262ilb51hltx0.cloudfront.net/max/502/1*Bb-AlCIc5EC7-Hd-gsl1lg.jpeg" description="Demandons leur des estimations et considérerons les ensuite comme des délais" %}

Ceci n’est pas une négociation sur la dette technique. Les vraies négociations sur la dette technique ont lieu avec des managers et des développeurs plus expérimentés, qui comprennent tous les deux précisément les conséquences de leurs actions.

Mais de toute façon est-ce que cette société ne contracte pas de la dette ? La réponse est _non_. Et c’est c’est pour cela que l’analogie avec la dette commence à atteindre ses limites dans ce cas de figure. La demande du manager n’est pas de sacrifier à court terme en toute connaissance de cause la conception du code pour l’améliorer par la suite, c’est donner carte blanche au développeur inexpérimenté pour simplement écrire du _mauvais_ code.

Les problèmes avec cette approche sont énoncés de manière limpide par Chad Fowler dans cet article [Killing the Crunch Mode Antipattern](http://chadfowler.com/2014/01/22/the-crunch-mode-antipattern.html).D’après Fowler, voici _quelques-unes_ des conséquences de travailler en permanence avec des délais très courts et une piètre qualité :

*   Même les développeurs expérimentés tombent dans des pièges de débutants ;
*   Cela ôte la passion du développeur pour son métier, quelques fois de façon permanente, cela entraîne le départ des meilleurs développeurs ;
*   Cela supprime toute responsabilité, puisque l’urgence devient une – bonne ? – excuse pour faire des erreurs ;
*   Cela nuit à la confiance entre le management et l’équipe technique, parfois de façon permanente.

Voici l’auteur de l’analogie sur la dette, Ward Cunningham, qui clarifie qu’il n’a jamais pensé que la dette technique était le fait d’écrire du mauvais code.

<div class="video">
    <figure>
        <iframe width="640" height="480" src="//www.youtube.com/embed/pqeJFYwnkjE" frameborder="0" allowfullscreen></iframe>
    </figure>
</div>

Il est clair que les managers non technique ne sont pas à 100% inconscients des conséquences d’une mauvaise qualité. Ils savent que lorsque ils disent « c’est pas grave on livre quand même », ils font quelque chose qui _va_ avoir des conséquences. Certains d’entre eux pensent juste que les conséquences seront moindres ou n’apparaîtront pas de si tôt. D’autres prennent leurs désirs pour la réalité. D’autres ont même une meilleure compréhension, mais préfèrent dire que c’est un problème de l’équipe technique, puisque _leurs_ indicateurs sont bons. J’ai même déjà vu des chefs de projet – soyons honnêtes, de vrais débutants – argumenter que faire les choses bien représenterait un _investissement_, rendant notre analogie caduque.

<div class="video">
    <figure>
        <iframe width="640" height="480" src="//www.youtube.com/embed/p0O1VVqRSK0" frameborder="0" allowfullscreen></iframe>
    </figure>
</div>

À ce stade, on pourrait argumenter que c’est la responsabilité de l’équipe technique de faire comprendre au service commercial les conséquences de ce genre d’action. Et oui c’est _totalement_ le cas.

Les bases de ce type de professionnalisme dans le logiciel ont été récemment exposées par Bob Martin, dans le déjà classique [Clean Coder](http://www.amazon.com/The-Clean-Coder-Professional-Programmers/dp/0137081073).

Le problème est que, de constatation générale, le genre d’entreprise qui est plus à même d’avoir ce genre de mentalité et de négociation, n’est typiquement pas fondée par des ingénieurs où alors les équipes techniques sont soit jeunes ou considérées comme secondaires vis à vis des objectifs de l’entreprise. Ainsi, même s’ils savent comment les choses devraient être faites, leur voix sera trop faible pour être entendue.

Et étant donné leur manque d’expérience, s’ils essaient de changer quelque chose et qu’ils se plantent une fois, leur impulsion est stoppée nette. Ils vont commencer à croire – à juste titre – que l’indifférence envers la qualité fait partie de l’essence même de l’entreprise et soit ils partiront, soit ils accepteront la réalité comme elle est.

Donc, si notre première introduction avec la dette ne nous est plus utile, quelle serait une bonne analogie à l’écriture de mauvais code ?

## Quelques analogies avec le génie civil

Rio de Janeiro. 3 heures du matin, le 2 février 1998. Dans un quartier en plein expansion de l’ouest de la ville, Barra da Tijuca, un bâtiment appelé Palace II commence à s’effondrer. La fin de la construction de l’immeuble date d’il y a moins de 3 ans. 44 appartements ont été complètement détruits et 8 personnes ont péri.

{% include figure.html url="https://d262ilb51hltx0.cloudfront.net/max/600/1*YFNF1dkyFEEQ_yDYwb_hlg.jpeg" description="Implosion du Palace II" %}

Comme souvent au Brésil, en 2014, les constructeurs n’ont pas été correctement punis et les victimes n’ont pas été compensées de manière satisfaisante. Les résultats de l’enquête sont discutables.

Quoi qu’il en soit, en se basant sur les preuves de l’époque, beaucoup d’experts ont déclaré que le béton contenait trop d’eau et de sable de plage. Ils ont aussi souligné qu’il n’y avait pas d’ingénieur qui supervisait la construction et qu’il n’y avait pour ainsi dire aucun contrôle qualité.

L’analogie avec le bâtiment construit avec du sable semble couvrir la plupart des aspects de la création de mauvais logiciel : il n’y a littéralement aucun contrôle qualité, les managers en sont également conscients et font preuve de mauvaise foi, ignorent le problème ou sont absents – et ça ne les excuse pas.

Le problème c’est que le logiciel ne s’effondre pas d’un coup. La gravité n’existe pas dans le logiciel. Les grains de sable continuent de flotter dans l’air, bien qu’ils ne soient pas bien collés les uns aux autres pour créer un matériau solide. Et c’est un problème car cela rend les conséquences de l’utilisation de mauvaises pratiques moins visibles que dans le cas du Palace II. Vous pouvez toujours ajouter un peu plus de sable à votre bâtiment logiciel. Certains grains de sable tomberont, d’autres iront se loger dans des endroits inattendus et savoir où mettre le nouveau sable va devenir vraiment difficile, mais le bâtiment tient toujours.

> Le travail du développeur … n’est pas très éloigné de la pensée pure.
>
> Il construit son château dans l’air,  à partir de l’air, et crée grâce à un effort de son imagination.
>
> — Fred Brooks

Bref, je pense que cette analogie montre à quel point les résultats d’une mauvaise qualité peuvent être graves et que les managers devraient prendre plus de responsabilité à ce niveau.

Une autre analogie est ce qu’on appelle _puxadinho_ en portugais. Un _puxadinho_ est une extension d’une construction faite sans la supervision d’un expert, des matériaux de mauvaise qualité et la plus part du temps de façon illégale.

{% include figure.html url="https://d262ilb51hltx0.cloudfront.net/max/1024/1*E3zLS5dmK5t8wTNkSP4lCQ.jpeg" description="" %}

Le _puxadinho_ est le modèle de conception standard sur lequel se sont construits des « favelas » entières, les bidonvilles brésiliens.

Les _puxadinhos_ ne sont pas seulement restreints à la construction. Comme on peut le voir sur l’image, ils s’étendent à toute l’infrastructure de base comme la plomberie, l’énergie, les câbles téléphoniques, internet et la télé par cable.

{% include figure.html url="https://d262ilb51hltx0.cloudfront.net/max/620/1*_mjiqqiePvLN9Ehw5GRl7w.jpeg" description="" %}

Maintenant, prenons cette analogie et voyons jusqu’où nous pouvons la pousser. Un nouveau _puxadinho_, ainsi que toute son infrastructure inélégante est construit à chaque fois qu’un manager dit « on met en prod ». Ce n’est clairement pas qu’un compromis de conception. Cela pourrait endommager une construction précédente, voire la détruire. Cela pourrait s’emmêler dans les câbles et mettre le bidonville entier en feu. C’est tellement mal construit que le rebâtir de manière organisée est virtuellement impossible. Si vous prévoyez de faire d’un bidonville quelque chose d’organisé, il va falloir tracer des plans tous neufs.

Parce qu’après tout, est-ce que vous pouvez imaginer à quel point il serait difficile de trier tous ces câbles ?

## Le code ancien

La dette technique peut être remboursée par la refactorisation. Ça prend du temps mais c’est faisable. Mais quand le code est vraiment mauvais, la refactorisation est beaucoup, beaucoup plus difficile. C’est parce que pour refactoriser vous devez être sûr que vos changements ne vont rien casser. C’est un peu comme essayer d’organiser les câbles de l’image ci-dessus sans couper le téléphone ou l’électricité de la moindre habitation. C’est en partie du au fait que le mauvais code n’est quasiment jamais couvert de tests.

Imaginez que pendant que vous essayez de trier les câbles vous avez 1) une liste compréhensible des services que chaque personne possède — comme « M. Martin a le téléphone et le câble, Mme Michu a internet » et ainsi de suite — et 2) une alarme qui se déclenche à chaque fois qu’un service se connecte ou se déconnecte à tort.

<figure>
  <a href="http://www.amazon.com/Working-Effectively-Legacy-Michael-Feathers/dp/0131177052"><img src="https://d262ilb51hltx0.cloudfront.net/max/600/1*3W8HR8VYOaX3xz_VCVObPA.jpeg" alt=""/></a>
  <figcaption><small>Working effectivelly with legacy code</small></figcaption>
</figure>

C’est ce que vous apportent les tests au niveau du code.

Mais la réalité est bien différente. Quand vous commencez à trier les câbles, vous n’avez pas une telle liste ou une alarme à votre disposition. Vous serez simplement avertis que quelque chose s’est mal passé lorsque quelqu’un viendra se plaindre.

C’est pour cela que certains auteurs comme Michael Feathers ont [défini le code ancien comme du code non testé](http://www.informit.com/store/working-effectively-with-legacy-code-9780131177055?aid=15d186bd-1678-45e9-8ad3-fe53713e811b).

> Du code non testé c’est du mauvais code.
>
> Peu importe la façon dont il est écrit; peu importe s’il est beau, orienté objet ou bien encapsulé.
>
> Grâce aux tests, nous pouvons changer de manière rapide et vérifiable le comportement de notre code.
>
> Sans eux, nous ne savons pas vraiment si notre code s’améliore ou pas.

Vous vous dites peut-être « OK, tout ce que ça demande pour refactoriser du mauvais code, c’est d’ajouter des tests ». Le problème c’est que d’écrire des tests sur du mauvais code est aussi extrêmement difficile. C’est comme si vous tentiez de créer la liste et l’alarme simplement en contemplant l’enchevêtrement de câbles. Techniquement parlant on dira que le mauvais code est _étroitement couplé_ – les câbles sont trop interconnectés – et qu’il possède une _faible cohésion_ — on ne distingue pas visuellement les câbles téléphoniques de ceux pour la télévision.

Voici donc ce que vous devez retenir si vous devez réparer du code ancien : pour refactoriser, vous avez besoin de tests, pour tester, vous devez refactoriser.

## La réécriture complète

La réécriture complète c’est la solution lorsque les développeurs n’en peuvent plus du manque de qualité et qu’ils décident de défendre leurs convictions. Mais la plupart des réécritures complètes tournent à l’échec.

Le problème des réécritures complètes est qu’elles sont une réponse technique à un problème culturel. Le mauvais code n’a pas été seulement conçu parce que les développeurs ne savent pas correctement coder. Cela vient du genre de conversation et de la mentalité que nous avons illustré plus haut.

Quand les développeurs proposent une réécriture complète et que pour des raisons insensées les décideurs acceptent, tout est en place pour favoriser une nouvelle manière d’échouer. Le management commence à demander si toutes les fonctionnalités seront présentes dans la nouvelle version. Dynamisés par la perspective de faire les choses bien, et trop confiants, les développeurs répondent « oui ». Il s’avère qu’il est virtuellement impossible de lister toutes les fonctionnalités d’un code non testé, et peu de projets de réécriture prennent le temps suffisant et nécessaire afin de _tout_ documenter.

La deuxième chose que va demander la direction ce sont les délais. Estimer une réécriture complète est probablement l’une des choses les plus improbables que quelqu’un puisse tenter.

La troisième chose que la direction ne tolérera pas c’est que le développement des nouvelles fonctionnalités s’arrête. Il va donc falloir pour cela faire leur suivi et les ré-implémenter également. Et toutes les données pertinentes devront être migrées.

Quatrièmement, afin de convaincre la direction dans l’urgence, les développeurs vont promettre toutes sortes de choses, comme le fait que le refactoring rendra le système plus performant, plus robuste, même à grande échelle…

Cinquièmement, étant donné qu’une partie du problème vient de l’inexpérience des développeurs en terme même de développement, comment peuvent-ils garantir que maintenant ils sauront mieux faire ? Est-ce que de nouveaux développeurs expérimentés ou peut-être des consultants vont les aider ?

Sixièmement, en général, la planification n’est pas particulièrement le point fort du genre de projet qui nécessite une réécriture. Est-ce que la réécriture sera correctement planifiée ?

Toutes ces problématiques et beaucoup plus sont abordées dans la série d’articles [The Big Rewrite](http://chadfowler.com/2006/12/27/the-big-rewrite.html) de Chad Fowler.

Donc, la seule option réaliste devant du code _legacy_ est de _radicalement_ améliorer l’état du code _actuel_ de manière cyclique. Cela _doit_ être fait en introduisant des tests, même si c’est très dur et que cela prend du temps. L’application monolithique doit être découpée en petites pièces découplées. Et toutes les migrations de données et changements plus radicaux doivent être parfaitement planifiés et synchronisés.

Le temps que vous allez passer à rendre du code ancien compatible avec du développement continu, productif, avec lequel de bons développeurs vont vouloir travailler, qui peut délivrer de la valeur métier de manière prédictive et constante, sera _énorme_ (Je présuppose ici que vous ne pouvez simplement pas arrêter de développer ce produit). Cela exigera également un grand changement culturel.

Encore une fois, c’est simplement la conséquence naturelle d’un flot continu de décisions passées qui étaient mauvaises, inconscientes et non informées. La seule question qui demeure, c’est _quand_ prendrez-vous cette décision ?

> Oui, le traitement est lourd, mais le patient en a besoin pour vivre.
>
> Devrions nous arrêter le traitement ? — Denis Thatcher

## Le changement culturel

Comme toute œuvre littéraire conduit à de multiples interprétations, la leçon des fables d’Ésope, le Lièvre et la Tortue n’est pas un consensus. Mon propos ici c’est qu'il ne s’agit ni de rapidité ni de lenteur, mais d’_un trop plein d’orgueil_. Le lièvre agit avec un fol excès de confiance, se hâte au début puis ralenti jusqu’à laisser gagner la tortue.

La morale de l’histoire est qu’à un certain point, l’orgueil qui pousse à la négligence de la qualité va commencer à affecter la stratégie de votre entreprise, soit en vous ralentissant, soit en rendant votre entreprise sans intérêt pour les bons développeurs. Et comme [Elon Musk le disait](http://www.teslamotors.com/blog/all-our-patent-are-belong-you) lorsqu’il a annoncé l’ouverture du code source de tous les brevets de Tesla Motors :

> L’avance technologique est… définie… par la capacité d’une entreprise à attirer et à motiver les ingénieurs les plus talentueux au monde.

{% include figure.html url="https://d262ilb51hltx0.cloudfront.net/max/564/1*pQApZLe4wv9Rm0tLIvWqNw.jpeg" description="Le lièvre dans une coquille d’escargot un des nombreux symboles de Festina Lente" %}

Les concurrents _diminueront_ votre valeur, pendant que vous dormez.

L’historien Romain Suetonius, dans _De vita Caesarum_, nous dit qu’Auguste, le premier empereur de Rome, avait adopté le motto _Festina Lente_, littéralement, « plus vite, moins de précipitation ».

> Devenu un bon chef de file, bien entrainé, il n’en pensait pas moins de la précipitation et de l’imprudence, et, en conséquence, ses dictons préférés étaient : Hâte toi, lentement.
>
> On fait assez vite, ce qu’on fait bien.
