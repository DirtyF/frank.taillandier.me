---
title: Ça fait quoi de gérer un projet open source ?
description: Quelques trucs et astuces pour apprendre à prendre soin de sa santé mentale quand on maintient un logiciel libre populaire.
image: https://nolanwlawson.files.wordpress.com/2017/03/out.png
---

_La grande majorité du Web d'aujourd'hui progresse grâce au travail d'auteurs de bibliothèques logicielles libres. Ce travail est souvent réalisé de manière bénévole pour des raisons idéalistes et ensuite allégrement utilisé par une majorité de gens qui vont se baser sur ses solutions pour faire tourner leurs projets. Ces solutions logicielles ne dépendent souvent que de peu de personnes, voire que d'une seule. On appelle ça [le bus factor](https://vimeo.com/album/3981563/video/187568897)._

_Nolan Lawson maintient un bon nombre de modules `npm` et a tenu à [partager son expérience de mainteneur de logiciel open source](https://nolanlawson.com/2017/03/05/what-it-feels-like-to-be-an-open-source-maintainer/). Pour participer également à mon modeste niveau à la maintenance de quelques [projets open source assez populaires](https://github.com/jekyll/jekyll/), je ne peux qu'abonder dans le sens de l'article de Nolan traduit ci-dessous en français. Maintenir un projet open source peut être à la fois source de frustration et en même temps c'est aussi une aventure humaine dans laquelle vous allez beaucoup progresser, ne serait-ce que pour apprendre à dire non et à gérer vos priorités._

------

Devant votre porte des centaines de personnes font la queue. Elles attendent patiemment que vous répondiez à leurs questions, à leurs réclamations, à leurs propositions d'améliorations ou à leurs demandes de fonctionnalités.

Vous aimeriez tous les aider, mais pour le moment vous remettez ça à plus tard.
Vous avez peut-être passé une mauvaise journée au boulot ou vous êtes juste fatigué ou vous aimeriez simplement pouvoir profiter de votre week-end avec votre famille et vos amis.

Mais si jamais vous allez consulter vos [notifications sur GitHub](https://github.com/notifications), cela vous rappelle en permanence le nombre de personnes qui attendent après vous.

{% include figure.html url="https://nolanwlawson.files.wordpress.com/2017/03/out.png?w=570" description="Capture d'écran montrant 403 notifications GitHub non lues" %}

Quand enfin vous parvenez à dégager un peu de temps libre, vous ouvrez la porte à la première personne. Ses intentions sont bonnes : elle a tenté d'utiliser votre projet mais se heurte à une problème confus avec l'API. La personne a pris le soin de coller le code dans un commentaire GitHub, mais elle a oublié ou elle ne sait pas comment faire pour le mettre en forme, du coup le code recopié ressemble à un gros pâté illisible.

Comme vous êtes serviable, vous éditez le commentaire de manière à formater convenablement le code. Mais ça fait toujours beaucoup de code à lire.

De plus, vous éprouvez quelques difficultés à comprendre la description du problème. Peut-être que l'anglais n'est pas la langue maternelle de cette personne ou peut-être souffre t-elle d'un handicap qui rend difficile pour elle le fait de communiquer par écrit. Vous ne savez pas très bien. D'une manière ou d'une autre, vous avez du mal à comprendre les quelques paragraphes de texte que la personne a envoyé.

Fatigué, vous jettez un œil à la centaine d'autres personnes qui font la queue derrière. Vous *pourriez* passer une demi-heure à essayer de comprendre le code de cette personne ou vous pourriez juste le parcourir rapidement et lui proposer de consulter des liens vers l'aide en ligne et la documentation, en espérant que ça puisse l'aider à résoudre ce problème. Allégrement, vous lui conseillez également d'aller tenter sa chance sur Stack Overflow ou sur le canal de dicussion Slack dédié.

La personne suivante fronce les sourcils. Elle vous a balancé des reproches comme quoi votre projet lui a fait perdre deux heures de sa vie car une certaine API ne fonctionne pas comme énoncé. Ce commentaire au vitriol provoque chez vous un malaise et des aigreurs d'estomac.

Vous décidez de ne pas perdre davantage de temps avec cette personne. Vous rappelez juste que "c'est un projet open source, maintenu par des bénévoles. Si vous rencontrez une anomalie, merci de soumettre un exemple de scénario reproductible ou une proposition de modification."

La personne d'après est tombée sur une erreur très courante, qu'il est facile de contourner. Vous savez que vous avez déjà fait face à cette erreur à plusieurs reprises, mais impossible de vous rappeler où la solution a été postée. Sur Stack Overflow ? Dans le Wiki ? La mailing list ? Après quelques minutes passées à rechercher sur le Web, vous copiez-collez un lien et vous fermez le ticket.

La personne qui suit est un contributeur régullier. Vous connaissez son nom pour l'avoir déjà croisée sur différents forums et projets parents de la communauté. Elle est tombée sur un problème plutôt ésotérique et a proposé une *pull request* pour le corriger. Malheuresement c'est un problème compliqué et par conséquence une prose de plusieurs paragraphes explique en détail le problème dans la PR.

Une fois de plus, vous lancez un regard en direction des centaines de personnes qui font encore la queue dehors. Vous savez que cette personne a travaillé dur pour proposer sa solution et c'est probablement une approche raisonnable. Les tests passent sur Travis, vous êtes donc tentés de simplement répondre "LGTM"[^1] et d'accepter la modification.

[^1]: NdT : _Looks Good To Me_, abréviation souvent employée sur GitHub pour signifier que tout a l'air OK.

Toutefois, vous vous êtes déjà fait avoir dans des situations semblables. Par la passé, vous avez accepté une modification sans l'évaluer à fond et au final cela vous a causé de nouveaux maux de tête car vous n'aviez pas anticipé certains problèmes. Peut-être que les tests passent mais que la performance s'en retrouve dix fois plus dégradée. Ou cela peut avoir introduit une fuite mémoire. Ou peut-être que cette modification sera déconcertante pour les nouveaux utilisateurs du projet car elle complexifie de manière excessive l'ensemble de l'API.

Si vous intégrez cette modification maintenant, vous allez peut-être vous retrouver avec plus de problèmes le lendemain, car vous avez impacté le travail de quelqu'un d'autre en voulant résoudre le problème de cette personne (un cas très limite). Vous mettez donc celà de côté pour le moment. Vous y reviendrez quand vous aurez plus de temps.

Le prochaine personne a trouvé un nouveau bug, mais vous savez que c'est en réalité un bug d'une dépendance du projet. La personne affirme que c'est un problème bloquant pour déployer son application. Vous savez que c'est un gros problème, un parmi tant d'autres et vous n'avez pas le temps de le corriger de suite.

Vous répondez que ça ressemble bien à un véritable problème, mais qu'il serait plus judicieux de le reporter sur le dépôt de l'autre projet. Vous fermez donc cette demande et la recopiez dans l'autre dépôt en suggérant dans quelle partie du code commencer à regarder pour résoudre le problème. Vous doutez qu'ils fassent de la sorte. Peu de gens le font.

La personne suivante demande simplement "Où en est t-on à ce propos ?". Vous n'êtes pas sur de comprendre à quoi elle fait référence, vous vous replongez donc dans le contexte. Cette personne a commenté dans un long fil de discussion à propos d'un vieux problème dans le projet. Beaucoup de personnes sont en désaccord quant à la solution à apporter au problème, du coup ça a généré beaucoup d'échanges.

Il y a plus de 20 commentaire sur ce problème en particulier et ça prendrait beaucoup de temps de tous les relire pour rafraîchir votre mémoire. Donc vous répondez juste : "Désolé, cette demande est ouverte depuis un moment maintenant mais personne ne l'a encore résolue. Nous essayons encore de comprendre l'étendu du problème, une pull request serait un bon début !".

La personne d'après c'est juste le bot de GreenKeeper. Il est sympa. Sauf que ce dépôt là ne possède pas vraiment de tests fiables et les tests échouent pour une raison qui semble fallacieuse, vous devez donc les relancer pour qu'ils passent. Vous relancez les tests en vous disant qu'il faudra que vous pensiez à y regarder de nouveau de plus près une fois que les test seront passés de nouveau sur Travis.

La personne suivante a ouvert une pull request, sur un dépôt qui est assez actif et donc un autre mainteneur a déjà répondu. Vous jetez un coup d'œil rapide à la discussion, vous faîtes confiance à l'autre mainteneur pour s'occuper de celle-ci. Vous la marquez comme lue et vous passez à la suivante.

La personne suivante se heurte ce qui apparait comme un comportement anormal et vous n'avez jamais rencontré ce cas de figure. Mais malheureusement elle ne fourni pas beaucoup de détails sur comment le problème est survenu. Avec quel navigateur ? Quelle version de Node ? Quelle version du projet ? Quel code a-t-elle utilisé pour générer cette anomie ? Vous lui demandez plus de renseignements et vous fermez cet onglet.

## Un flux constant

Au bout d'un moment, vous avez eu à faire à dix ou vingt personnes de la sorte. Il y en a toujours des centaines qui font la queue. Maintenant, vous commencez à fatiguer : chaque personne a soit une réclamation soit une question soit une demande d'amélioration.

Dans un sens, ces notifications GitHub ressemblent à un flux constant de négativité pour vos projets. Personne n'ouvre une issue ou une pull request lorsqu'ils sont satisfaits de votre travail. Les gens se manifestent seulement quand ils veulent pointer un manque. Même si vous minimisez le temps passé à lire ces notifications, cela peut être épuisant mentalement et émotionnellement.

Votre partenaire a remarqué que vous étiez toujours de mauvaise humeur à chaque fois que vous vous prêtez à ce rituel. Vous vous êtes peut-être emporté sans raison, simplement parce que vous étiez de mauvaise humeur. "Si faire de l'open source t'énerves à ce point, pourquoi en faire ?" demande-t-il. Vous ne savez pas quoi répondre.

Vous pourriez faire une pause, vous l'avez probablement bien mérité. Par le passé vous avez même pris congé de GitHub pendant une ou deux semaines, ne serait-ce que pour préserver votre santé mentale. Mais vous savez que c'est comme cela que vous vous êtes mis dans cette situation, avec désormais des centaines de personnes qui attendent sagement.

Si vous faisiez en sorte de lire régulièrement vos notifications GitHub, vous auriez plus probablement seulement 20 à 30 demandes par jour à traiter. Au lieu de cela, vous les avez laisser s'empiler, il y en a maintenant des centaines. Vous culpabilisez.

Par le passé, pour une raison ou pour une autre, vous avez *vraiment* laisser les demandes s'accumuler. Vous êtes peut-être tombé sur une demande restée sans réponse depuis des mois. En général, lorsque vous vous penchez de nouveau sur cette demande, la personne qui l'a ouverte ne répond jamais. Ou bien ils répondent en disant : "J'ai résolu le problème en arrêtant d'utiliser votre projet à la faveur d'un autre". Ça vous rend malade, mais vous comprenez leur frustration.

Avec l'expérience vous savez maintenant que la réponse la plus pragmatique à ces demandes périmées est souvent de dire : "Je ferme les vieilles issues. Merci de les rouvrir si c'est toujours un problème pour vous ou si vous pouvez fournir plus de détails". La plupart du temps il n'y a pas de réponse. Parfois il y en a, mais c'est juste un commentaire rageux sur le fait que vous les ayez fait attendre aussi longtemps.

À présent, vous faites donc en sorte de suivre de manière plus régulière vos notifications. Des centaines de personnes qui font la queue, c'est beaucoup trop. Vous aimeriez passer sous la barre de la centaine, voire de la douzaine, voire à la mythique [inbox
zero](https://twitter.com/eranhammer/status/616137191131996160). Vous continuez donc dans cette voie.

## Attirer de nouveaux contributeurs

Après avoir passé en revue pas mal de demandes de ce type, même si vous parvenez éventuellement à tout lire, vous vous retrouvez avec un grand nombre de bugs ouverts et de pull requests à traiter. Apposer des labels peut aider - par exemple vous pourriez marquer des issues avec "pas encore reproductible", "a un scénario de test" ou "parfait pour une première contribution". Celles marquées comme "parfaites pour commencer à contribuer" sont particulièrement utiles puisqu'elles attirent souvent de nouveaux contributeurs.

Cependant, vous avez remarqué que souvent seules les issues les plus simples attirent les nouveaux contributeyrs, celles où l'éffort à fournir pour documenter la demande et expliquer comment corriger le problème est plus important que si vous le faisiez vous même. Vous créez ce type de demandes, car vous savez que ça vaut le coup pour faire en sorte que de nouvelles personnes s'engagent dans l'open source et vous êtes fier de vous quand l'auteur de la pull request vous dit : "C'était ma première contribution à un projet open source.

Mais vous savez qu'il y a peu de chances qu'ils reviennent, souvent ces personnes ne deviennent pas pour autant des contributeurs réguliers ou des mainteneurs. Vous vous demandez si vous avez fait quelque chose de travers, ce que vous auriez pu faire de plus pour accueillier de nouveaux mainteneurs qui vous aident à alléger votre charge de travail.

Un de vos projet a presque atteint le stade de l'auto-suffisance. Vous n'y avez pas touché depuis des années mais il y a un groupe de mainteneurs qui répond à chaque issue et chaque PR, pour que vous n'ayez pas à le faire. Vous êtes infiniment reconnaissant envers ces mainteneurs. Mais vous ne savez pas vraiment comment celà se fait qu'il y ait autant de contributeurs sur ce projet, alors que d'autres dépendent encore entièrement de vous et de vous seul.

## Regarder devant soi

Vous hésitez à créer de nouveaux projets car vous savez qu'ils ne font faire qu'accroître votre travail de maintenance. C'est un vrai effet pervers : plus vous réussissez, plus vous êtes "punis" par le nombre de notifications GitHub.

Vous vous rappelez encore le frisson de la création, la joie d'écrire un nouveau projet en partant de zéro et de résoudre un problème qui ne l'avait pas encore été jusqu'ici. Mais maintenant vous relativisez cette joie en sachant que chaque nouveau projet sera du temps de pris au détriment de vos anciens projets. Vous vous demandez si ce n'est pas le moment de déclarer un de vos anciens dépôts comme déprécié ou de [le déclarer non maintenu](http://unmaintained.tech/).

Vous vous demandez combien de temps vous allez encore pouvoir tenir à ce rythme avant de faire un burn-out. Vous avez considéré le fait de faire de l'open source votre boulot, mais en discutant avec des personnes qui vivent de l'open source, vous savez que ça signifie en général d'être autorisé à travailler sur un projet open source *spécifique*. Cela ne vous avance pas à grand chose car vous avez des [douzaines de projets](https://www.npmjs.com/~nolanlawson) répartis dans différents domaines, qui demandent tous votre attention.

Ce que vous aimeriez par dessus tout, c'est avoir plus de projets qui ne demandent pas une attention constante. Vous avez essayé de suivre toutes les [bonnes pratiques](https://medium.freecodecamp.com/how-to-attract-new-contributors-to-your-open source-project-46f8b791d787) : vous avez un fichier `CONTRIBUTING.md`, un code de conduite, vous donnez les droits d'accès de manière enthousiaste à toute personne qui soumet une PR de qualité. C'est fastidieux à faire pour chaque projet, du coup vous n'êtes pas aussi efficace que ce que vous aimeriez.

Ça aussi ça vous fait culpabiliser car vous savez que l'open source est souvent perçu comme un club exclusivement réservé aux mâles blancs comme vous. Donc tout ça vous chagrine et vous craignez de ne pas contribuer suffisamment à aider à faire changer les choses.

Plus que tout, vous éprouvez de la culpabilité : la culpabilité de savoir que vous _auriez_ pu aider quelqu'un à résoudre ses problèmes, mais au lieu de celà vous avez laisser pourrir le problème pendant des mois avant de clore l'issue. Ou la culpabilité de savoir que quelqu'un a soumis sa _toute première_ pull request sur votre projet, mais vous n'avez pas pris le temps d'y répondre, et à cause de celà vous avez peut-être découragé à jamais cette personne de participer à un projet open source. Vous culpabilisez sur le travail que vous faites, sur celui que vous ne faites pas et sur le fait de ne pas recruter plus de gens à partager votre expérience nourrie par la culpabilité.

## Tout ça mis bout à bout

Tout ce que j'ai dis ci-dessus est basé sur mes propres expériences. Je ne prétend pas parler au nom de tous ceux qui font du logiciel open source, mais c'est comme ça que je le vis personnellement.

Ça fait pas mal de temps que je fais de l'open source (environ sept ans) et j'ai hésité à me plaindre de tout cela car je craignais que ce soit perçu comme un pleurnichement mélodramatique par des gens mieux placés que moi pour en parler. Après tout, ne suis-je pas le seul responsable de cette situation ? Je pourrais me déconnecter de GitHub quand j'en ai envie, je n'ai de comptes à rendre à personne.

Ne devrais-je pas être également reconnaisant ? Mon travail sur l'open source m'a aidé à me faire une place dans la communauté. Je suis invité pour aller parler à des conférences, j'ai des milliers de gens qui me suivent sur Twitter et qui accorde beaucoup d'importance à ce que je peux dire. Il est même fort probable que j'ai décroché mon travail chez Microsoft, du fait de mon expérience dans l'open source. Qui suis-je pour me plaindre ?

Et pourtant, je connais beaucoup de personnes qui se sont retrouvées dans les mêmes situation et qui ont fait un burn-out. Des gens qui relisaient et accepter les demandes de pull request avec enthousiasme, corrigeaient des problèmes, écrivaient des articles de blog à propos de leur projet, avant de disparaître sans laisser de trace. Pour quelques uns d'entre eux, je n'essaie même pas d'ouvrir des issues sur leur dépôt, car je sais qu'ils ne répondront pas. Je ne leur en veux pas mais je m'inquiète suffisamment pour parler de leur histoire.

J'ai déjà mis en place tout un tas de mesures pour me préserver. Je n'utilise plus l'interface de notification de GitHub - j'utilise des règles de filtrage dans mon client de messagerie, de manière à pouvoir classer mes notifications en fonction du projet (celles des projets qui ne sont plus maintenus sont ignorées) ou en fonction du type de demande (les mentions et les fils de discussion auxquels j'ai participé méritent en général une priorité plus élevée). Comme ce sont des emails, cela me permet aussi de travailler en mode déconnecté et de tout gérer au même endroit.

Souvent je vais recevoir des mails venus de je ne sais où qui me demandent de l'aide sur un projet que j'ai arrêté de maintenir depuis longtemps (je reçois toujours en moyenne un mail par mois au sujet de [celui ci](https://github.com/nolanlawson/catlog) par exemple), et je ne prend généralement pas la peine de répondre. J'ai aussi tendance à faire abstraction des commentaires sur mes billets de blog, des réponses aux questions sur Stack Overflow et aux questions postées sur les listes de diffusion. Je me désabonne ardamment du suivi des dépôts dont j'estime qu'ils sont suffisament bien maintenus.

Une des raisons pour laquelle cette situation est si frustrante est qu'il se trouve que le tri des demandes prend plus de temps que la _maintenance_ du projet en elle-même. En d'autres mots, j'ai souvent juste le temps de passer les issues en revue et de dire : "Désolé j'ai pas le temps de me pencher là dessus de suite". Rien que le fait de répondre peut rapidement prendre la majeur partie du temps, que j'ai choisi de consacrer à l'open source.


[Des modèles de demandes](https://github.com/blog/2111-issue-and-pull-request-templates),
[GreenKeeper](https://greenkeeper.io/),
[Travis](https://travis-ci.org/),
[travis\_retry](https://docs.travis-ci.com/user/common-build-problems/#travis_retry),
[Coveralls](http://coveralls.io/), [Sauce Labs](http://saucelabs.com/)…il y a tant de solutions techniques dédiées à la maintenance des projets open source, et je suis reconnaissant à chacune d'entre elles. Je n'arriverais pas à m'en sortir et à garder la tête froide, si ces outils automatisés n'existaient pas. Mais arrivé à un certain point, vous vous heurtez davantage à des problèmes _sociaux_ qu'à des problèmes techniques. C'est trop pour un seul homme. Je ne fais même pas partie du [top 100 des mainteneurs de paquets npm](https://gist.github.com/bcoe/dcc961b869bbf6685002) et je ressens déjà bien la pression, je n'ose imaginer ce que cette centaine de personnes doit ressentir.

J'ai déjà dis à ma comagine que si nous décidtions d'avoir des enfants, je quitterais probablement l'open source pour de bon. Je ne m'imagine même pas comment je pourrais dégager du temps pour à la fois m'occuper d'élever mes enfants et faire de l'open source. J'ai pressenti qu'en dernier recours ce serait la solutio à tous mes problèmes : l'option nucléaire. J'espère juste que ce sera quelque chose de positif, comme commencer à écrire un nouveau chapitre de ma vie, et non pas quelque chose de négatif, comme être brusquemment victime d'un syndrôme d'épuisement profesionnel.

## Pensées finales

Si vous m'avez lu jusqu'ici et que le fléau qui ronge les communautés open source vous intéress, vous aurez peut-être envie d'aller jeter un œil à [“Roads and
Bridges”](http://www.fordfoundation.org/library/reports-and-studies/roads-and-bridges-the-unseen-labor-behind-our-digital-infrastructure)
de [Nadia Eghbal](https://twitter.com/nayafia). C'est à coup l'analyse la plus claire et la plus poussée du problème.

Je suis également ouvert aux suggestion, mais gardez bien en rête que je rechigne à mélanger l'argent et le travail sur des projets open source (pour des raisons idéalistes peut-être stupides). Pourtant j'ai pu constaté que ça marche bien pour [d'autres projets](https://vuejs.org/support-vuejs/).

Notez que malgré toute la négativité exprimée plus haut, je considère toujours que l'open source est un apport positif à mon existence et que je ne regrette rien de tout cela. Mais j'espère que cela permet de partager ouvertement ce que cela peut faire de se retrouver victime de son propre succès et de se sentir accablé par tout le travail resté inachevé.

S'il y a bien une chose que j'ai apprise grâce à l'open source c'est : plus vous travaillez, plus on va vous demandez de fournir du travail. Il n'y a à ma connaissance pas de solution à ce problème.

[Article original](https://nolanlawson.com/2017/03/05/what-it-feels-like-to-be-an-open-source-maintainer/)
