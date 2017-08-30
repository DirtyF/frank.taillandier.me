---
title: Développer une culture de la sécurité psychologique
description: L'indicateur principal d'une équipe performante n'est pas le profil, l'ancienneté ou les niveaux de salaire. C'est la sécurité psychologique. Voici comme elle a été mise en place chez Intercom.
image: /assets/img/2017/08/psychological_safety_in_teams.jpg
source:
  title: Engineering a culture of psychological safety
  url: https://blog.intercom.com/psychological-safety/
  author: John Looney
---

Il existe des entreprises où l'humain est au centre des préoccupations et il s'avère que cela produit des équipes plus performantes. Certaines startups couronnées de succès ont bien compris l'intérêt de veiller sur leurs employés. Pas en mettant à leur disposition des sodas sucrés, un baby-foot ou une console de jeux, non, en prenant bien soin de créer un cadre de confiance, qui aide les salariés à donner le meilleur d'eux-mêmes. John Looney, ingénieur en chef chez Intercom donne ici quelques conseils pour bâtir une équipe dans laquelle il fait bon évoluer.
{: .lead }

{% include figure.html url="/assets/img/2017/08/psychological_safety_in_teams.jpg" description="illustration : [Clay Hickson](http://clayhickson.com/)" %}

Quand je travaillais pour Google en tant qu'ingénieur qualité, j'ai eu la chance de faire le tour du monde avec un groupe appelé "développement d'équipe". Notre mission était de concevoir et de donner des cours de _team-building_ aux équipes qui souhaitaient travailler ensemble, de façon plus efficace.

Nos découvertes furent publiées plus tard [sous le nom de Projet Aristote](https://rework.withgoogle.com/guides/understanding-team-effectiveness/steps/introduction/). Notre plus grand découverte c'était que l'indicateur principal d'une équipe qui réussit n'était pas la fonction, l'ancienneté ou les niveaux de salaire, mais **la sécurité psychologique**.

Pensez à une équipe avec qui vous travaillez en étroite collaboration. Avec quels points êtes vous d'accord parmi ces cinq affirmations ?

1. Si je tente ma chance et que j'échoue, cela sera retenu contre moi.
2. Notre équipe a un sens de la culture très développé qui rend difficile l'intégration de nouvelles personnes.
3. Mon équipe met du temps à aider les gens en difficulté.
4. L'utilisation de mes compétences et de mes talents uniques passe après les objectifs de l'équipe.
5. C'est pénible d'avoir des conversions honnêtes et ouvertes à propos des problèmes sensibles de l'équipe.

Les équipes qui obtiennent un score élevé à ce genre de questions peuvent être réputées "à risques" : risque d'innover, risque de résoudre un conflit, risque de reconnaître qu'elles ont besoin d'aide. Les équipes à risque peuvent livrer pendant de courtes périodes, du moment qu'elles sont focalisée sur les objectifs et ignorent les problèmes interpersonnels. Mais à la longue, les équipes à risques ne tiendront pas le coup ou seront bien moins performantes car les personnes ne pourront pas introduire du changement.

> les équipes à risques ne dureront pas ou seront bien moins performantes car les personnes ne pourront pas introduire du changement.

Mettons en évidence l'impact qu'une équipe à risques peut avoir sur les individus qui la compose, à travers le regard d'une nouvelle tête fraîchement diplômée qui a fini dans les meilleurs de sa classe.

Cette diplômée imaginaire, nous l'appellerons Karen, a lu un article à propos d'une optimisation qui pourrait réduire le verrouillage bas-niveau des bases de données distribuées et réalise que cela pourrait être appliqué au service pour lequel son équipe travaille. Elle décide de faire des tests, il en ressort un gain de 15% de CPU sur le cluster de test. Dans l'effervescence, elle décide de déployer en production. Comme c'était un changement du fichier de configuration d'une base de données, il n'a pas suivi le processus habituel de revue de code.

Malheureusement, cela a provoqué un verrouillage matériel de la base de données, causant une panne brève mais totale du site web. Heureusement ses collègues plus expérimentés ont vu le problème et ont pu annuler le changement en moins de 10 minutes. Comme ils sont professionnels, cet incident a été mentionné lors de la réunion "post-mortem" hebdomadaire.

### "Si je tente ma chance et que j'échoue, cela sera retenu contre moi."

Lors de la réunion, l'ingénieur en chef fait savoir à toute le monde que provoquer une indisponibilité  parce qu'on cherche à faire de petites optimisations était inacceptable. Karen a été décrite comme "irresponsable" devant toute l'équipe et l'équipe a proposé des manières d'éviter que cela ne se reproduise. L'ingénieur en chef a rapidement oublié cette histoire. Mais Karen n'a jamais oublié cet échange. Elle n'essaiera plus jamais d'innover sans une permission explicite.

### "Notre équipe a un sens de la culture très développé qui rend difficile l'intégration de nouvelles personnes"

L'impact sur Karen a en fait été amplifié car personne ne l'a soutenu. Personne n'a pointé du doigt que le manque de revues de code sur la configuration de la base de donnée a rendu tout cela possible. Personne n'a relevé la différence entre souligner un acte irresponsable et traiter quelqu'un d'"irresponsable". L'équipe était tellement fière de la fiabilité de son système, que défendre sa réputation était plus important qu'une personne nouvellement embauchée.

Karen a appris que son équipe et son manager ne la soutenait pas.

### "Mon équipe met du temps à aider les gens en difficulté"

Comme Karen était nouvelle en "production", elle n'avait pas vraiment été formée à la gestion d'incident, à l'importance de garder une production saine et encore moins au dépannage de systèmes distribués. Comme son équipe était constituée de gens possédant des dizaines d'années d'expérience, ils n'avaient jamais eu besoin de formation ou de documentation pour les nouveaux arrivants. Il n'y avait rien qui indiquait que c'était OK pour une jeune diplômée de passer du temps à acquérir ces compétences.

Karen a développé le [syndrome de l'imposteur](https://fr.wikipedia.org/wiki/Syndrome_de_l'imposteur). Elle n'a pas compris comment elle a réussi à être embauchée et se demande souvent pourquoi elle n'a pas encore été licenciée.

### "L'utilisation de mes compétences et de mes talents uniques passe après les objectifs de l'équipe."

Karen a étudié les algorithmes, les structures de données et l'informatique distribuée. Elle a compris que le système existant n'était pas optimal dans son ensemble et ne pourrait jamais tenir des pics de charge.

L'équipe avait toujours reproché aux clients le dépassement de leurs taux contractuels, ce qui revient à s'en prendre au météorologue pour la pluie qui tombe pendant un barbecue en Irlande.

Karen a proposé un nouveau design, basé sur la technologie qu'elle avait utilisé pendant son stage. Ses collègues étaient peu familiers avec cette nouvelle technologie et l'ont considéré comme trop risquée. Karen a laisser tomber sa proposition sans discuter. Elle voulait écrire du code et construire des systèmes, pas répondre à de vains arguments.

### "C'est pénible d'avoir des conversions honnêtes et ouvertes à propos des problèmes sensibles de l'équipe"

Lorsqu'une importante charge de trafic chez un client a provoqué une indisponibilité de plusieurs heures, le CEO a organisé une réunion avec l'équipe chargées des opérations. Beaucoup de détails furent passés en revue et Karen a expliqué que la conception actuelle ne pourrait jamais faire face à de tels pics, elle a mentionné sa conception. L'ingénieur en chef lui a rappelé que sa proposition de design avait déjà était refusée pendant une revue avec l'équipe technique et a promis au CEO qu'ils pouvaient améliorer le design existant.

Karen a discuté de la réunion avec un de ses collègues peu après. Elle a trouvé consternant que l'ingénieur en chef ne se rende pas compte que son système soit la cause première de tous leurs problèmes. Le collègue a haussé les épaules et a fait remarquer qu'ils avaient fourni un très bon service pendant les cinq dernières années écoulées, aussi il n'avait aucun interêt à discuter de conceptions alternatives avec le directeur.

Karen décida de rentrer tôt chez elle et de chercher un nouvel emploi. Lorsqu'elle est partie, elle n'a pas été regretté par l'entreprise. Après tout, elle était "insouciante, pleurnicheuse et avait un problème avec l'autorité". Ils n'ont jamais compris qu'elle avait une conception qui aurait pu sauver le produit de l'exode de clients qui a suivi les pannes répétées.

## Comment bâtir une sécurité psychologique dans votre équipe

Alors, qu'il y-a-t-il de si spécial dans l'ingénierie qui nous pousse à écarter tant d'ingénieurs prometteurs et qui permette à tant d'autres de ne pas arriver à donner le meilleur d'eux-mêmes ?

> Nous devons être capables de trouver un juste équilibre entre le respect pour notre culture avec une nécessaire ouverture au changement.

Nous savons qu'un sens aigu de la culture, une compréhension partagée et des valeurs communes font partie des clefs du succès. Nous devons donc être capable de trouver un juste équilibre entre ce respect pour notre culture avec une nécessaire ouverture au changement. Une équipe - à la base contente de travailler de la maison - doit changer sa façon de travailler si elle veut pouvoir engager des stagiaires. Une équipe - fière que ses ingénieurs soient mobilisés pour leur service - peut avoir besoin de se professionnaliser autour d'une équipe resserrée d'ingénieurs axés sur les opérations au fur et à mesure que le risque qu'une panne potentielle puisse impacter la production augmente.

Nous devons bien réfléchir à la façon dont nous mettons en balance le travail que les gens aiment faire avec celui que l'entreprise doit réaliser. Les bons managers sont proactifs quand il s'agit de déplacer un ingénieur qui n'est pas adapté à la charge de travail de son équipe. Les meilleurs managers augmentent le périmètre d'intervention de leur équipe pour mieux tirer parti de tous les ingénieurs à leur disposition, afin de s'assurer que leurs compétences et leurs talents sont appréciés à leur juste valeur. Les ingénieur à qui on confit un travail qu'ils n'ont pas les compétences pour réussir à mener à bien se sentiront conditionnés pour échouer.

## Le respect doit faire partie de la culture de votre équipe

C'est dur de se donner à 100% si vous dépensez votre énergie mentale à prétendre être quelqu'un que vous n'êtes pas. Nous devons faire en sorte que les gens puissent être eux-mêmes en nous assurant de prendre la parole lorsque nous sommes témoins d'un manque de respect. David Morrisson (chef des armées australiennes) a parfaitement capturé ce sentiment dans son message : “[the
standard you walk past is the standard you
accept](http://vividmethod.com/transcript-the-standard-you-walk-past-is-the-standard-you-accept/)”

{% include video.html url="https://www.youtube.com/embed/QaqpoeVgr8U" width="640" height="360" %}

Ne pas se préoccuper des sentiments et des expériences des personnes peut les amener à se renfermer sur elles-mêmes. Voici quelques exemples où je suis intervenu personnellement :

- Quelqu'un accueille une nouvelle chef de projet dans l'équipe, part du principe qu'elle n'a pas un profil technique et utilise un vocabulaire enfantin pour lui expliquer un service. Je fais remarquer que le nouveau chef de projet possède un doctorat en informatique. Il ne pensait pas à mal et fut mortifié que son introduction rigolote puisse être mal prise.
- Lors d'une conversation à propos des fonctions exercées précédemment, quelqu'un mentionne qu'il a travaillé pour une entreprise qui a par la suite échoué. Un collègue se moque de lui pour être "assez courageux" de le reconnaître. J'ai rappelé que se moquer des gens n'était pas professionnel et que ça n'avait pas sa place ici. Les personnes présentes ont compris qu'il y avait une ligne, qui n'était pas visible auparavant, à ne pas franchir.
- Un ingénieur calme et brillant est constamment interrompu par des personnes extraverties pendant les réunions. Je fais remarquer aux gens "bruyants" que nous nous privons qu'un point de vue important, en ne assurant pas que tout le monde puisse s'exprimer librement. Les personnes présentes en ont plus pris conscience.

Il est essentiel de réagir immédiatement à tout manque de respect, poliment et devant toutes les personnes qui ont entendu le manque de respect. Ça aurait été génial si quelqu'un avait rappelé au responsable de Karen, devant tout le groupe, que la panne n'était pas bien méchante, et que l'équipe devrait améliorer sa couverture de tests.

## Laisser la place à l'expérimentation

On parle de 20% du temps de travail dans certaines entreprises. Intercom a des semaines "tampon", intercalées entre [nos sprints de 6 semaines](https://blog.intercom.com/6-week-cycle-for-product-teams/).
Les gens en profitent souvent pour s'attaquer à un problème qui les tracassent, sans impacter les engagements externes pris par l'équipe.
Inciter tous les membres de l'équipe à penser hors du cadre et faire en sorte toute l'équipe puisse en même temps faire du hors-piste, c'est un message fort.

Faites bien attention à que ce temps dédié à l'innovation ne soit pas le seul pendant lequel les personnes puissent prendre des risques. Une entreprise dans l'industrie du transport considère que le "temps pour innover" c'est tous les mardis à 14h30.

Imaginez combien Karen aurait été reconnaissante si pendant la revue un ingénieur sénior lui avait proposer de travailler sur son design avec elle pour que ce soit mieux accepté par le reste de l'équipe. Améliorez les idées des personnes, plutôt que d'en douter.

## Indiquer clairement quand votre équipe se porte bien

J'aime la façon dont mon équipe écrit ses objectifs sur des Post-It pendant nos *standups* quotidiens et nos réunions d'objectifs hebdomadaires. Ces marques visibles de succès peuvent être célébrer lorsqu'elle passent dans la colonne "fini".

Mais nous pouvons aussi fêter les échecs retentissants. Il y a quelques années, lorsque je dirigeais une équipe chargé de la fiabilité de l'infrastructure, nous étions arrivés à la moitié d'un projet de 3 ans qui devait remplacer le vieux système de fichier de Google.

> Nous pouvons aussi fêter les échecs retentissants.

À cause de  l'accumulation de problèmes d'alimentations, de mauvais firmware, d'outillage pauvre, de logiciel non testé, d'un calendrier de déploiement audacieux et de deux pannes de courant, nous avons perdu une  cellule de stockage entière pendant plusieurs heures, et bien que tous les autres services aient eu du stockages dans les autres zones disponibles, l'équipe a passé trois longues journées et trois longues nuits à reconstruire cette zone. Une fois que ce fut fait, tout le monde - et moi le premier - était découragé. Démoralisé, défait. Un manager exceptionnel qui nous rendait visite dans le bureau a vu que j'étais abattu. Il a souligné que nous avions plus appris sur notre nouvelle unité de stockage pendant ces trois jours que pendant les trois derniers mois. Il a estimé qu'une célébration était de rigueur.

J'ai acheté du vin pétillant bon marché à la supérette du coin et avec un autre manager, nous avons occupé une grand salle de conférence pendant quelques heures. À chaque fois que quelqu'un notait quelque chose qu'il avait appris au tableau blanc, nous portions un toast. L'équipe qui a quitté cette pièce était totalement différente de celle qui y était rentré.

Je suis sûr que Karen aurait aimé qu'on la remercie pour avoir découvert les faiblesses de la couverture de code non testé de l'équipe et le manque de documentation à propos de leur amour du temps de disponibilité  par dessous tout.

## Rendez votre communication claire, vos attentes explicites

Plutôt que de crier sur une équipe d'ingénierie à chaque fois qu'il y a une panne, aidez les à développer des outils de mesure de qualification de panne, un suivi objectif du niveau de service et à mettre en place une vraie culture qui leur laisse de la latitude entre leur objectif et la réalité, pour les aider à choisir le travail qui aura le plus d'impact.

> Demandez un engagement spécifique, plutôt que de supposer que tout le monde s'accorde sur le degré d'urgence.

Lorsque vous évoquez les échecs, les gens doivent se sentir suffisamment en sécurité pour partager toutes les informations pertinentes, en comprenant bien qu'ils ne seront pas jugés sur la manière dont ils se sont plantés, mais sur comment leur gestion des échecs aura contribué à améliorer l'équipe, le produit et l'entreprise dans son ensemble. Les équipes avec des responsables des opérations doivent se réunir et discuter des pannes et de la gestion des échecs. Il est essentiel d'aborder tout cela comme des opportunités d'apprentissage amusantes, et non comme des persécutions obsessionnelles du coupable.

J'ai vu une équipe paralysée, qui essayait de décider s'il fallait livrer un gain efficace qui aurait augmenter la latence de l'utilisateur final de 20%. Une rapide discussion avec l'équipe produit a entrainé des mises à jour de l'objectif de niveau de service, qui détaillaient "l'impact estimé des différents niveaux de latence sur la retention des utilisateurs" et l'impact financier résultant sur l'entreprise. Tous les membres de l'équipe ont rapidement pu se rendre compte que la faible latence était bien plus importante que les coûts matériels, qui au lieu de cela étaient considérablement trop approvisionnés.

Si vous attendez quelque chose de quelqu'un, demandez un engagement spécifique - "Quand cela pourrait être fait ?", plutôt de croire que tout le monde s'accorde sur son urgence. La confiance peut-être entamée par des engagements manqués.

Karen aurait apprécié qu'un manager la prévienne à l'avance que l'équipe considérait que la fiabilité c'était sacré et lui demande de travailler sur des améliorations de cette fiabilité plutôt que sur des optimisations.

## Faites en sorte que votre équipe se sente en sécurité

Si vous avez envie de faire en sorte que votre équipe se sente psychologiquement plus en sécurité, voici quelques trucs que vous pouvez faire dès maintenant :

1. Faites un rapide sondage et partagez les résultats avec votre équipe.
2. Discutez ce que la "sécurité" représente pour votre équipe, est-ce que les personnes partagent quand elle ne se sentent pas "en sécurité" ?
3. Développez une culture du respect et d'une communication très claire, en commençant par vos actions.

Considérez la sécurité psychologique comme un indicateur clé du business, aussi important que les recettes, les coûts de vente ou le temps de disponibilité. Cela va se répercuter sur l'efficacité de votre équipe, la productivité, la rétention des employés et tout autre métrique business que vous chérissez.

[Article original en anglais sur le blog d'Intercom](https://blog.intercom.com/psychological-safety/)
