---
title: Traitement de texte multicanal
description: Un plaidoyer pour Markdown, une syntaxe au format texte qui assure une compatibilité et une pérennité à vos documents.
image: /assets/img/2016/08/multichannel-text-processing.png
---

Comme je l'expliquais dans [la mouvance statique](/2016/03/08/les-gestionnaires-de-contenu-statique/), il est important de bien choisir le format de fichier dans lesquels nous allons stocker nos écrits. C'est souvent  la solution la plus simple qui est aussi la plus efficace : du texte brut mise en forme à l'aide d'une syntaxe elle aussi en texte brut. Markdown est de ce fait un format de fichier de plus en plus populaire car il assure une pérennité et une compatibilité à nos documents, tout en préservant une mise en forme au format texte. Markdown est le format par défaut des contenus dans la plupart des générateurs de site statique et il devrait devenir aussi le format par défaut dans lequel vous rédigez vos notes, vos rapports, vos articles de blog ou vos livres.
{: .lead }

Il existe de nombreux éditeurs de Markdown, j'utilise personnellement selon le contexte l'éditeur [Atom](https://atom.io/) et [quelques](https://github.com/zhuochun/md-writer) [plugins](https://github.com/lloeki/linter-markdownlint) ou [iA Writer](https://ia.net/writer) pour m'y aider.

Les concepteurs d'iA Writer ont rédigé un essai sur l'importance d'utiliser des formats texte comme Markdown. Markdown n'est pas le seul, il y en a d'autres comme reStructuredText, Textile ou Asciidoc mais la popularité de Markdown est grandissante depuis quelques années.

{% include figure.html url="/assets/img/2016/08/tendance-markdown.png" description="Tendance des recherches du terme Markdown dans Google" %}

Aussi ai-je pensé que la lecture instructive de cet essai, qui revient sur les enjeux et les problématiques auxquels nous sommes tous confrontés quand il s'agit de migrer des contenus textuels devrait vous intéresser.

J'espère que ce texte vous donnera envie de tester et d'adopter Markdown, de trouver les outils d'édition qui vous conviennent le mieux et surtout que vos écrits ne dépendront plus de formats qui les emprisonnent.

---

## Traduction de l'essai [Multichannel Text Processing](https://ia.net/know-how/multichannel-text-processing) paru chez [Information Architects](https://ia.net/).

**Du bon vieux temps des traitements de texte, le texte prenait vie entre MS Word et une imprimante. Aujourd'hui, le texte est écrit et édité sur différents appareils et applications, puis envoyé par mail, imprimé, copié, collé, annoté, publié, indexé dans des flux RSS, partagé et re-partagé à l'aide de tout un tas d'outils et de plateformes. Les formats de fichiers propriétaires rigides sont voués à l'échec dans ce nouvel environnement frénétique. Le texte brut s'en sort mieux, mais il n'offre pas les possibilités de mise en forme du texte enrichi. Markdown pourrait bien être notre remède miracle. Si seulement, il avait l'air un peu plus attractif !**.

### 1. Le texte enrichi

Le texte enrichi comme MS Word ou le format `.rtf` sont devenus populaires en faisant la promesse du WYSIWYG (What You See Is What You Get). Nous pouvons utiliser le gras, l'italique, différentes polices ou mises en forme et nous voyons immédiatement le résultat sur notre écran ! Lors de son apparition ce fut une véritable révolution comparé aux encombrants éditeurs qui affichaient des fenêtres de formatage de code ou à ceux qui ne proposaient pas de mise en forme du tout. Cependant, il y a quelques inconvénients.

{% include figure.html url="https://ia.net/wp-content/uploads/migration/plain-text-vs-rich-text-plain-text.png" description="Comparaison des deux formats de fichier" %}

Au format texte brut, le texte _est_ la source. Avec le texte enrichi, ce que nous voyons est une simulation. Ce que nous voyons peut nous plaire, mais sous la surface, notre traitement de texte génère en secret un texte encodé bien plus complexe. Vous pouvez visiter ce monde enfoui en créant un document Pages ou Word, tapez "Bonjour monde" et sauvegardez, puis changez l'extension de fichier en `.zip` et décompressez l'archive. Bienvenue en 1979 ![^2]

{% include figure.html url="https://ia.net/wp-content/uploads/migration/hello-world.png" description="Contenu d'un fichier Word" %}

Si vous êtes assez téméraires pour aller inspecter le contenu du dossier généré, vous allez peut-être commencer à vous demander si vous avez tapé "Bonjour monde" ou "Bonjour l'enfer" :

![fenêtres montrant du code source de fichiers texte au format XML](https://ia.net/wp-content/uploads/migration/hello-hell.png)

Les formats personnalisés sont plus lourds que les formats en texte brut. Le souci majeur de ces formats personnalisés est que la relation entre le code source et le texte — entre ce que nous voyons et ce que nous ne voyons pas — est fantasque. Voici ce que vous obtenez vraiment quand vous travaillez avec ces formats en 2016 :

**Des bugs et des problèmes d'ergonomie** Comment sortir d'une liste ou supprimer une indentation ? Comment supprimer un lien ? Comment supprimer cette mise en gras, cet espacement de ligne ou cette taille de titre ? Et comment diable placer deux images côte à côte ? Parfois on ne sait plus très bien si nous sommes face à une anomalie ou une erreur d'ergonomie du logiciel.

**Spaghettis de copier-coller** Le principal souci avec les formats personnalisés dans un environnement de publication multicanal est qu'ils empêchent le copier-coller. Nous copions un simple paragraphe à partir d'un fichier PDF et quand on le colle dans notre email, le texte en français se transforme en Western spaghetti italien dramatique avec tout un tas d'espaces et de retours à la ligne. Et cela ne concerne pas que le PDF. Avec le texte formaté nous ne savons jamais ce que nous obtiendrons lorsque nous allons coller notre texte.

**Compatibilité** Bien que le `.rtf` soit un format assez établi et que la plupart des traitements de texte lisent les `.docx`, des  applications diverses interpréteront ces formats différemment. Vous ne pouvez pas ajouter de texte au format RTF ou Docx de manière fiable dans votre CMS. Et n'imaginez même pas pouvoir aller et venir à votre aise d'un CMS à un document Word.

**Versions** Exporter se fait peut être *en un clic*, mais décliner votre texte en plusieurs versions complique votre processus de travail. Les retours ou les propositions de modification ne peuvent pas être incorporés facilement dans un fichier principal. Gérer ces versions devient rapidement un cauchemar.

**Accessibilité** Le format texte enrichi ne vous permet pas de toucher à la source de votre document. Peut-être que le texte est dans un dossier qui prétend être un fichier ou caché quelque part "à l'abri de l'utilisateur", enfoui dans les profondeurs de dossiers de code spaghetti ou chiffré dans le Fort Know d'une base de données secrète.

Bien entendu, en tant qu'homme d'affaires vous aimez les chaînes dorées des formats personnalisés. En tant que personne qui écrit du texte en 2016, en utilisant différents appareils, applications, plateformes et formats, vous ne les aimez pas du tout. Après tout, qui sait quel sera notre ressenti vis à vis des `.docx` dans 10 ans ? Et dans 30 ans ?

> Même si les logiciels de traitement de texte modernes peuvent faire des trucs super — comme ajouter des graphiques, des tableaux et des images, en appliquant des styles sophistiqués —  il y a une chose qu'ils ne savent pas faire : garantir que les mots que j'écris aujourd'hui seront encore lisibles dans dix ans. C'est une des raisons pour lesquelles je préfère travailler en texte brut : c'est éternel. Mes petits-enfants pourront lire un fichier texte que j'ai écrit aujourd'hui, longtemps après que quelqu'un se souvienne ce que diable est un fichier `.dotx` [^3]

Dans l'environnement de texte multicanal d'aujourd'hui le format de fichier texte enrichi crée plus de barrières qu'à l'époque où les choses étaient plus simples. Le fait de devoir installer une certaine version d'une application sur une certaine version d'un système d'exploitation pour ouvrir un fichier est une vaste fumisterie. Pour pouvoir être partagé entre différentes applications et plateformes, le texte lui-même doit être libéré des carcans d'une application, d'une plateforme ou d'un appareil.

## 2. Le texte brut

Le seul format de fichier qui fonctionne partout comme prévu, c'est pas de format du tout, en d'autres termes : du texte brut. Et c'est de tout ce dont nous avons besoin pour écrire nos premiers brouillons.

> Le texte brut désigne des mots séparés par des espaces, des phrases séparées par des points, des paragraphes séparés en général par une seul retour à la ligne. Si vous travaillez dans l'édition ou même dans l'édition en ligne, c'est souvent tout ce dont vous avez besoin.[^4]

Le texte brut est simple. Il vous aide à vous concentrer ce que vous voulez dire.

Le texte brut est gratuit. TextPad, TextEdit, Vim, votre téléphone cellulaire, l'application AOL Mail 1997 de votre oncle… pas besoin de sortir le porte-monnaie.

Le texte brut est léger.

Le texte brut s'écoule comme de l'eau. Mais contrairement à l'eau, il n'étanche pas toutes les soifs. Que ce soit pour l'impression, un article de blog, un PDF, un email ou même un fax, à un moment ou à un autre, le texte va devoir prendre forme sur un médium approprié pour être lu. Comme nos mots prennent forme à l'intérieur d'un medium, ils exigent une structure visuelle. Les documents d'entreprise ont besoin d'en-têtes, de pieds de page et de pages de couverture. Certains textes ne prennent vie que lorsque ils sont illustrés et enrichis avec des photos, des vidéos ou des tableaux. Nous voulons des liens quand nous écrivons en ligne. Nous avons besoin de notes de bas de page dans un livre blanc.

La transition du texte brut au texte formaté est généralement brusque et irréversible. Vous écrivez dans TextEdit ou Notepad, mais une fois que vous vous passez en RTF, docx ou HTML il n'y a plus de retour en arrière possible. Mais le texte veut naturellement et lentement se transformer à partir de simples mots en de la prose formatée . C'est là que Markdown entre en scène.

## 3. Markdown

Les langages de balisage, comme Markdown, MediaWiki ou LaTeX, vous permettent de structurer vos mots sans construire un royaume invisible sous le text brut. Hélas…

### 3.1 Markdown ça craint !

Vous avez peut être essayé d'écrire du Markdown ou de modifier une entrée dans Wikipédia et vous avez détesté ça, parce que vous vous demandiez "Mais pourquoi devrais-je apprendre une nouvelle 'syntaxe' pour formater du texte quand j'ai un outil qui fait ça en appuyant sur un bouton et qui me montre exactement ce que j'obtiendrais ?"[^5] Et vous avez raison :

* Baliser du texte peut vous éviter des problèmes de copier-coller mais le Markdown brut a toujours l'air compliqué,
* Bien que Markdown soit plus simple que le HTML, vous devez toujours vous souvenir de la syntaxe et rechercher à chaque fois comment ajouter un lien vous sort de votre flux,
* Balisage, Markdown, MultiMachin… ces formats ont leur propres problèmes de compatibilité.

Markdown n'est pas la solution parfaite pour tous les types de rédacteurs ou toutes les formes et les étapes d'écriture. Mais si vous tout faîtes vous-même, de la prise de notes à la publication, c'est la solution la plus efficace à ce jour. Si votre éditeur vous impose des outils de rédaction, Markdown est une option moins évidente. Mais encore une fois, la possibilité de pouvoir partager plus simplement qu'avec les formats de fichier traditionnels rend la collaboration considérablement plus fluide…

### 3.2 Un plaidoyer pour Markdown

Considérations esthétiques mises à part, Markdown est imbattable quand vous n'avez besoin que de **mise en gras** ou d'*italique*. Taper #, ## ou ### pour les différents niveaux de titre peut paraître un peu bizarre au début. Mais une fois appris, taper des dièses est plus simple et plus rapide que de retirer les mains de votre clavier, repérer le pointeur de la souris, sélectionner un morceau de texte et cliquer sur le menu déroulant WYSIWYG des styles pour choisir le bon niveau de titre. Et contrairement à ses satanés formats de styles, les dièses se comportent toujours comment ils le devraient.

Si vous connaissez ces trois choses, *, ** et #, vous en savez assez sur Markdown pour vous lancer. Et plus vous serez à l'aise avec Markdown, moins il y aura de friction dans votre procédé global d'écriture. Voyons ensemble quelques défis plus difficiles :

#### Les liens

Les liens Markdown peuvent complètement ruiner l'aspect de votre texte. C'est utile de voir les liens dans le texte et pouvoir se passer de clics droits et de fenêtres intrusives, mais si vous utilisez beaucoup trop de liens dans un texte, c'est affreux. Une manière de contourner le problème est d'utiliser le format des liens de références. Un autre pourrait être de masquer les liens dans l'éditeur, mais cela reviendrait à reproduire les problèmes du texte enrichi.

#### Le multimedia

Avoir plus de libertés avec les images dans le texte est cool. Si vous voulez un logiciel qui permet de parfaitement mettre en page les images, utilisez InDesign, ou faites-le dans votre CMS. N'essayez pas avec Word et n'allez pas croire que votre éditeur de Markdown fera tout aussi bien qu'il vous aide à trouver vos mots. Oui, vous pouvez utiliser Markdown dans InDesign.[^6]

#### Les tableaux

Les tableaux en texte brut ont mauvaise réputation. S'ils sont complexes, c'est vrai qu'ils ont l'air affreux. Mais pour quelques lignes et colonnes ils marchent bien : contrairement à Word, vous voyez exactement ce qui se passe. (Si vous faites des tableaux avancés Word est votre ennemi, utilisez toujours un tableur comme Excel ou Numbers). Ils sont pénibles à créer, mais avec un peu de magie…

<iframe src="https://player.vimeo.com/video/160875330" width="720" height="405" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>

#### Automatisation

Avec le format MultiMarkdown[^7] (une version améliorée de Markdown) vous pouvez créer des tables des matières automatiquement et à l'aide des variables de métadonnées vous pouvez même créer des modèles de lettres. Okay, ça a l'air hardcore. Et *c'est* hardcore. Mais vous devriez [essayer](http://vimeo.com/158324329). Vous n'avez pas besoin d'être un hacker ninja rockstar pour comprendre les bases. Et une fois que vous comprenez les bases, cela devient plus facile de [générer une table des matières en MultiMarkdown](https://vimeo.com/158311378) que dans MS Word.

#### Notes de bas de page

MultiMarkdown gère aussi les notes de bas de page. La syntaxe est un petit peu lourdingue comme pour les liens mais c'est aussi abscond dans les éditeurs de texte enrichi. Avec [un éditeur de Markdown qui propose un fonction aperçu](https://vimeo.com/158933545) vous pouvez apprendre la syntaxe tout en ~~écrivant~~ cliquant.

Plus vous maîtriserez Markdown, plus vous passerez rapidement et facilement du texte brut au texte formaté. C'est là où Markdown excelle : en comblant le fossé entre le texte brut et le texte enrichi, il vous permet de constamment modeler le texte — de la première note prise au hasard jusqu'à la publication multicanale.

#### Rendu en temps réel

Il existe différentes manières d'améliorer le rendu de Markdown, comme en en masquant certaines parties, mais si vous générez le rendu du Markdown dans le texte, WYSIWYG, vous réintroduisez tous les problèmes qui rendent les éditeurs de texte enrichi obsolètes et vous en ajoutez de nouveaux. Si vous essayez de faire tout ce que sait faire Word avec Markdown, vous allez créer un nouveau Word avec un langage qui n'est pas fait pour le WYSIWYG. C'est pour cette raison qu'iA Writer ne masque aucun caractère Markdown.

## 4. Un processus de publication moderne

Nous pouvons imaginer que les différentes étapes d'un procédé d'écriture comme étant composées de phases distinctes que nous pouvons contrôler et classer par ordre chronologique. En réalité, nous prenons des notes en amont de l'écriture et nous continuons d'assembler des matériaux jusqu'à la publication. L'édition commence avec le premier brouillon et — pas seulement dans les médias numériques — se poursuit bien après la publication.[^8]

Distinguer les étapes d'un procédé créatif est nécessaire mais les processus de travail agiles ne ressemblent pas à une cascade : ils se chevauchent, interagissent, s'influencent mutuellement et notre écriture et nos outils de publication devraient nous permettre d'aller et venir comme nous le souhaitons.[^9] L'écriture est espiègle par nature.

{% include figure.html url="https://ia.net/wp-content/uploads/migration/workflow-note-draft-edit-publish.png" description="" %}

Écrire en étant concentré ne veut pas dire écrire avec des œillères, cela signifie que votre attention est principalement dirigée sur un seul aspect du procédé global. Il peut être même utile d'aller et venir consciemment entre deux étapes voisines. Markdown vous permet de ne pas vous soucier de ces transitions.

## 4.1 Écrire et prévisualiser

Aller et venir entre les différentes étapes d'un procédé est nécessaire et rafraîchissant. Si vous aimez travaillez dans un éditeur WYSIWYG ou imprimer votre texte de temps en temps, ou regarder l'aperçu sur votre blog avant de publier, vous savez déjà que : un formatage défini nous aide à nous mettre à la place du lecteur du texte. Voir notre texte imprimé change la perception que nous avons de lui. Vous obtenez le même effet quand vous sortez du Markdown pour aller regarder l'aperçu du rendu de votre texte en HTML.

{% include figure.html url="https://ia.net/wp-content/uploads/migration/markdown-with-preview-plain-text.png" description="Écrire et prévisualiser" %}

L'effet n'est peut être pas aussi frappant que le passage de l'écran au papier, mais il laisse entrevoir la forme du texte à venir. Avec le sentiment de la façon dont un lecteur verra votre texte, vous pouvez revenir à votre texte avec des yeux neufs. C'est plus rapide car cela évite l'exercice chronophage de devoir retaper les corrections manuscrites.

Le passage conscient entre le texte brut et le texte formaté vous laisse imaginer comment le texte sera lu par une personne externe.

### 4.2 Modifier et publier

Le même changement de perspective se produit quand vous passez de la vue back-end de votre texte à la vue front-end — après avoir migré le contenu dans votre CMS.

Si vous écrivez déjà vos textes en Markdown, assurez vous que vos outils de publication vous permettent d'éditer le texte brut sans perdre toute la mise en forme. Vous n'avez pas besoin de passer à un CMS basé sur des fichiers Markdown. Si vous utilisez Wordpress, vous pouvez utiliser un plugin Markdown pour l'éditeur. Ça aide si les applications que vous utilisez permettent la publication sur différentes plateformes tout de go. C'est pour cela qu'[iA Writer](https://ia.net/writer) vous permet de publier directement sur Wordpress et Medium :

<iframe src="https://player.vimeo.com/video/164238502" width="720" height="405" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>

Publier directement depuis votre application d'écriture est cool. Mais l'important c'est de pouvoir copier-coller votre texte ici et là sans perdre votre  travail. À moins que vous ne soyez un génie du procédé de travail, vous aurez toujours besoin d'ajouter quelques touches finales dans Indesign, Wordpress ou Pages. À quoi bon utiliser un outil de publication qui ne vous laisse pas faire les choses qu'un traitement de texte ne sait pas faire ?

## Conclusion

Nous utilisons différents appareils pour prendre des notes, différentes applications pour créer des brouillons et faire des modifications, nous envoyons du texte à d'autres personnes et nous utilisons différentes plateformes pour mettre en forme et publier nos textes. Le procédé de production et la forme finale de notre texte sont plus difficiles à anticiper. Nous avons besoin de quelque chose de mieux que les formats de texte traditionnels, qui nous enferment dans un cadre format/application/plateforme/appareil défini, pour faire face à la réalité complexe d'aujourd'hui pour ce qui est de la mise en forme et de la publication.

De par son universalité et sa simplicité, le texte brut nous emmène plus loin que tout autre type de format. Et pourtant, les éditeurs de texte brut ne sont pas fait pour visualiser la structure du texte, optimiser des mises en page complexes, batailler avec des détails typographiques ou lier entre eux des corps de texte. Ils sont géniaux pour vous aider à trouver les bons mots, mais ont du mal lorsque le texte devient plus long. Un procédé d'écriture contemporain doit nous permettre d'aller et venir librement entre le text brut et le texte mis en forme, grâce à des processus de travail automatisés ou du copier-coller.

Pour le moment les langages de balisage légers comme Markdown sont les seuls à permettre cela. Markdown peut avoir l'air un peu brouillon et oui, tout un tas d'améliorations sont possibles et nécessaires. Malgré ces lacunes, il résout des problèmes méthodiques complexes, là où la séparation entre le texte brut et le texte mis en forme échoue. Cela nous permet de pouvoir utiliser notre texte et le fichier qui le contient partout, indépendamment de l'appareil, de la plateforme ou de l'application. Le moment où vous passez du texte à la mise en forme, du conditionnement au contenu, du corps de texte à la mise en page, doit être une phase où vous pouvez aller et venir à votre guise. Markdown rend cela possible.

Si vous vous voulez des mises en forme plus complexes comme les liens, les images, les notes de bas de page et une table des matières, utilisez l'interface ou les raccourcis clavier. Pour améliorer vos compétences en Markdown avec la syntaxe plus avancée, faites vous aider par un éditeur qui propose un aperçu en temps réel. Cela vous donne aussi un aperçu de la mise en forme très tôt et vous permet d'utiliser un balisage plus complexe car vous pouvez identifier rapidement n'importe quelle erreur.

L'automatisation entre un service en ligne, une application de prise de notes, un éditeur de texte et un environnement de publication est cool, mais pas essentiel. Ce qui est fondamental, c'est la capacité de pouvoir  copier-coller votre texte à loisir sans perdre de mise en forme ou d'information. Seul le format texte brut garantie cela. Configurez vos plateformes de publication pour interpréter le Markdown, de manière à pouvoir vous balader librement entre l'écriture, la modification et la publication. Il y a plusieurs manières et plusieurs applications pour y parvenir. Et c'est précisément l'idée. Le texte brut est léger et gratuit et doit le rester. Évitez les applications qui veulent vous enchaîner.

{% include figure.html url="https://ia.net/wp-content/uploads/migration/appleiigsandimagewriterii.png" description="" %}

---

[^1]: Le *texte brut pur* est un format de ficher texte sans aucun langage de balises. Le texte brut comprend tous les formats de fichiers qui sauvegardent le texte directement dans le fichier (`.txt`, `.md`, `.markdown`, etc). Par _texte enrichi_ nous désignons tous les formats de texte qui sauvegardent des informations de mise en forme dans une couche invisible de code source inaccessible (`.rtf`, `.docx`, `.pages`, etc). Le texte enrichi fait référence à l'apparence visuelle simple d'un texte mis en valeur typographiquement — indépendamment du format de fichier. *Markdown* désigne ici du Markdown en texte brut. Mélanger le Markdown avec un format de fichier fermé va à l'encontre de l'idée elle-même. Le créateur de Markdown [John Gruber](https://daringfireball.net/projects/markdown/) défini Markdown comme une "syntaxe de mise en forme en texte brut". Toutefois, dans les faits Markdown pourrait être écrit dans du `.docx` ou empaqueté et rendu dans n'importe quel autre format de fichier. Cela va poser toute sorte de problème, mais n'entrons pas dans ce débat.

[^2]: Pourquoi 1979? “Le 29 novembre 1979, le terme ‘Microsoft’ était prononcé pour la première fois par Bill Gates” (Source [Wikipedia, L'histoire de Microsoft](https://en.wikipedia.org/wiki/History_of_Microsoft)). Mais ce n'est pas tout : “c'est clairement une date de création bidon – ça devrait surprendre les spécialistes du support que les mécréants puissent modifier l'heure MAC des fichiers sur le système de fichier après qu'ils aient été crées avec des outils librement accessibles conçus pour cette tâche. La chose intéressante ici c'est que cette date est 1 jour avant la plus vieille date avec laquelle on peut faire une recherche dans l'interface de recherche graphique de Windows. Essayez de taper sur F3 ou allez dans Démarrer –> Rechercher — vous ne pouvez pas spécifier de date antérieure au 1/1/1980 lorsque vous effectuez des recherches… il vous faudrait à nouveau faire votre recherche depuis une commande shell pour trouver des fichiers crées à cette date.” (Tiré de [Techniques de dissimulation de mécréant: est-ce que le vrai explorer.exe pourrait se lever s'il vous plait ? Et la pertinence de 1979 lorsqu'on effectue des recherches…](https://blogs.technet.microsoft.com/robert_hensing/2005/01/10/miscreant-hiding-techniques-would-the-real-explorer-exe-please-stand-up-and-the-relevance-of-1979-when-doing-searches/))

[^3]: [Pourquoi le texte brut est ce qu'il y a de mieux](http://www.macworld.com/article/1161549/forget_fancy_formatting_why_plain_text_is_best.html) par David Sparks

[^4]: [Des mots, des mots, des mots](http://dooling.com/index.php/2012/12/20/plain-text-for-authors-writers/) par Richard Dooling

[^5]: [Tomber petit à petit amoureux de Markdown](http://prolost.com/blog/2012/7/16/gradually-falling-in-love-with-plain-text.html), par Stu Maschwitz

[^6]: En voici un parmi d'autres [markdownID: plugins d'import de Markdown pour InDesign](http://www.jongware.com/markdownid.html). Il y a des gens assez fous pour avoir trouvé un moyen de passer de Word à Indesign. [De Word à Markdown à InDesign : une composition entièrement automatisée](http://rhythmus.be/md2indd/).

[^7]: “MultiMarkdown est un sur-ensemble de la syntaxe Markdown, crée à l'origine par John Gruber. Il ajoute de multiples fonctionnalités à la syntaxe (tableaux, notes de bas de page et citations pour n'en citer que quelques unes) en plus des différents formats de sortie listés ci-dessus (Markdown ne génère que du HTML). De plus, il intégre une typographie ‘intelligente’ pour différentes langues (de vrais guillemets droits — et gauche — par exemple).” [MultiMarkdown par Fletcher Penney](http://fletcherpenney.net/multimarkdown/).

[^8]: Quand nous prenons des notes, nous avons des flashs sur le futur titre avant même de penser à ce que vous voulons dire. Nous repensons inévitablement ce que nous voulons dire quand nous le retranscrivons. Nous devons faire en général des recherches supplémentaires lors des modifications et parfois nous mettons mettons en page notre texte. La mise en page peut révéler des insuffisances invisibles dans le texte. Les limitations du medium vont nous obligé à couper, réécrire ou ajouter du texte pour s'adapter à la forme : cela a un effet sain sur le style d'écriture, puisque cela nous obligé à réfléchir à ce que nous voulons vraiment dire.

[^9]: Une des nombreuses erreurs que nous avons faites au cours de la construction de notre propre éditeur de Markdown a été de nous éprendre de l'idée qu'un processus d'écriture pouvait ou devait être séparé en plusieurs étapes et que ces étapes pouvaient être codées dans l'extension de fichier. Cette méthode fonctionne pour quelques auteurs très disciplinés mais les retours que nous avons eu sur cette configuration étaient clairs. iA Writer 3 est toujours compatible avec le précédent workflow, mais nous et la plupart de nos auteurs sont contents d'être passé à autre chose.
