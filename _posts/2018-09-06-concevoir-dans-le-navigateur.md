---
title: Concevoir dans le navigateur
description: "Comment faire travailler de façon efficace les développeurs et les designers sur des style guide constamment mis à jour ?"
image: https://res.cloudinary.com/jamstatic/image/fetch/c_limit,f_auto,q_auto,w_2000/https://frank.taillandier.me/assets/img/2018/seek-style-guide.png
source:
  url: https://medium.com/seek-blog/sketching-in-the-browser-33a7b7aa0526
  title: Sketching in the Browser
  author: Mark Dalgleish
---

Le retour d'expérience de Mark Dalgleish et son équipe sur la mise en place d'un
outillage qui facilite la collaboration des développeurs et des designers sur un
style guide, géré d'un côté en React et de l'autre avec Sketch. C'est déjà un
énorme progrès mais les outils utilisés par les designers ne permettent toujours
pas de travailler sur le medium cible.
{: .lead }

Demandez à n'importe quelle équipe qui travaille avec un _design system_ et vous comprendrez que les bénéfices sont nombreux — les designers et les développeurs sont plus productifs, les produits sont plus consistants, la communication est plus claire entre les disciplines.

Toutefois, la majorité des _design system_ souffrent toujours d'un gros problème. **Les designers et les développeurs continuent de travailler sur des médiums totalement différents**. Du coup sans effort permanent de synchronisation manuelle, notre code et nos éléments de design diffèrent de plus en plus les uns des autres.

Pour les boîtes qui bossent avec des _design systems_, il semblerait que notre industrie soit condamnée à travailler avec des outils de conception qui ne soient pas pensés pour le bon medium — incapables d'incorporer notre travail de développement dans la prochaine itération de design.

Fort heureusement, tout cela est sur le point de changer.

{% cloudinary /assets/img/2018/seek-style-guide.png caption="Page d'accueil de la charte de Seek" %}

## L'odyssée de notre design system

Chez [SEEK](https://www.seek.com.au), nous travaillons sur notre [living style guide](http://seek-oss.github.io/seek-style-guide) depuis plus d'un an maintenant, avec de plus en plus de composants [React](https://reactjs.org). Vous imaginez bien que cela nous a amené à revoir totalement notre manière de penser le design visuel.

Nous avions tout d'un coup une seule source de référence, dans le code, facile à installer, qui définit la manière dont notre marque est affichée sur des douzaines de projets différents.

Bien entendu, notre travail sur le _design system_ n'a pas commencé dans le navigateur. Nous avons passé beaucoup de temps en amont pour tenter de formaliser nos règles de conception dans un format plus statique — bien avant que notre _living style guide_ existe.

Ce qui a commencé sous la forme d'un fichier PDF statique, a ensuite évolué en un kit de démarrage
[Sketch](https://www.sketchapp.com). On pouvait facilement se baser sur les symboles standardisés, les couleurs et les styles typographiques pour démarrer tout nouveau travail de conception.

{% cloudinary
  /assets/img/2018/seek-style-guide-assets.png
  caption="Notre premier fichier de démarrage Sketch" %}

Nous avons par la suite testé [Craft](https://www.invisionapp.com/craft), un ensemble de plugins Sketch d'[InVision](https://www.invisionapp.com), le plus notable d'entre eux étant le [plugin de bibliothèque](https://support.invisionapp.com/hc/en-us/articles/208434046-Craft-Introduction-to-the-Library-plugin).

Cela nous a permis de partager les symboles Sketch à la fois entre les documents et les différentes **équipes**, mais aussi de bâtir une bibliothèque de symboles partagée avec l'ensemble de l'entreprise.

{% include figure.html src="/assets/img/2018/craft-library-plugin.gif" caption="Plugin de bibliothèque Craft"
%}

Nous nous sommes rapidement aperçu de la quantité de travail absurde demandée pour maintenir cette bibliothèque à jour, surtout quand les éléments existants et les nouveaux n'arrêtent pas d'évoluer dans l'ensemble de nos produits.

Les développeurs, souvent **en binôme** avec les designers, procédaient à des changements dans le code qui pouvaient avoir un impact spectaculaire sur le design visuel, mais notre bibliothèque statique elle restait intacte — sauf si quelqu'un se rappelait de la mettre à jour manuellement, ce qui était rarement le cas.

Et pendant ce temps les mêmes problèmes de consistance se posaient de l'autre côté de la barrière, avec des développeurs à qui une source unique de référence sur le design manquait pour leur code.

### De React à react-sketchapp

C'est à ce moment que nous avons commencé à travailler sur notre premier projet React — avec du rendu côté serveur, assemblé avec [webpack](https://webpack.js.org) et des [modules CSS](https://github.com/css-modules/css-modules) que nous avons aidé à co-créer en cours de route — pour finalement aboutir à la création de notre _living style guide_.

Le fait que React se focalise essentiellement sur les composants a rendu cette transition inévitable. Ce n'est pas étonnant si depuis sa publication, nous avons vu que c'était la même histoire pour d'innombrables entreprises un peu partout dans le monde.

Une fois que nous avons eu développé une collection assez importante de composants, les autres équipes qui travaillaient sur de nouveaux projets ont pu rapidement bénéficier de notre travail — mais comme notre _style guide_ était constitué de composants React et de fichiers [Less](http://lesscss.org), il n'était que peu d'utilité pour nos _designers_. Toutefois, ce problème ne nous a pas sauté immédiatement aux yeux. Cette déconnexion technique entre les designers et les développeurs ne date pas d'hier — comme elle a toujours existé dans notre secteur d'activité, nous nous sommes habitués à ne pas en tenir compte.

Ça c'était bien entendu avant qu'on découvre
[react-sketchapp](https://github.com/airbnb/react-sketchapp).

{% include figure.html src="/assets/img/2018/react-sketchapp.gif" caption="React-sketchapp" %}

> "Dans Sketch, nous utilisons des symboles et des surcharges, dans React des
> composants et des propriétés. Ces concepts sont si semblables qu'il serait bête
> de ne pas les unifier.
>
> [Jon Gold, Airbnb](https://airbnb.design/painting-with-code)

C'était trop beau pour être vrai. Du vrai code React, rendu directement dans Sketch. On dirait bien que les développeurs et les designers allaient enfin pouvoir s'appuyer sur un _design system_ comme unique source de référence.

En centralisant nos règles de conception dans le code, non seulement nous pouvions les diffuser sur nos applications en production mais nous étions également capable de répercuter notre travail dans les outils que nos designers utilisaient _déjà_. Au fur et à mesure que nos conventions de conception continuaient d'évoluer, nous étions capables de rester synchrone avec nos designers, sans avoir à intervenir manuellement dans Sketch.

Bien sûr, après avoir creusé un peu, nous avons découvert que
`react-sketchapp` imposait quelques contraintes :

1.  **Les composants doivent (évidemment) être développés avec React**. Heureusement
    pour nous nous utilisions déjà React, ce n'était donc pas un problème.
2.  **Les styles doivent être définis en JavaScript**. Dans notre cas, vu que notre
    _design system_ était développé avec des modules CSS, c'était déjà un premier obstacle. Même si nous sommes de grands fans de [CSS-in-JS](https://medium.com/seek-blog/a-unified-styling-language-d0c208de2660) nous n'allions pas corriger l'ensemble des styles de notre écosystème — du moins pas dans l'urgence.
3.  **Les composants doivent utiliser des primitives génériques** (View, Text,
    StyleSheet) plutôt que les primitives du navigateur, à l'aide par exemple de
    [**react-primitives**](https://github.com/lelandrichardson/react-primitives).
    En gros, `react-sketchapp` était plus proche de [React Native](https://facebook.github.io/react-native) que de pur React.
    Encore une fois, c'est une migration que nous aurions pu envisager, mais qui aurait demandé **beaucoup** de travail et quelques arrangements au passage..

Donc bien que `react-sketchapp` soit un project *extraordinaire*, que nous vous recommandons chaudement, ses pré-requis techniques faisaient que nous n'aurions pas pu l'utiliser à court ou moyen terme.

Même si vous avions décidé de migrer notre bibliothèque de composants, nous aurions eu besoin d'une autre solution entre temps.

---

### Versionner les fichiers de conception

Comme vous le savez peut-être déjà, il existe des outils qui vous permettent de versionner vos fichiers dans vos outils de conception —— mais c'est le monde à l'envers.

Nous avons besoin que nos outils de conception soient compatibles avec le contrôle de version, et non l'inverse. Nous avons besoin que les fichiers produits par les designers figurent aux côtés de ceux produits par l'ensemble de l'équipe — et non dans un silo réservé aux designers, hébergé dans un jardin privé.

Nous avons donc essayé de faire autrement.

Nous avons expérimenté l'enregistrement de fichiers Sketch dans le dépôt de notre _style guide_ à l'aide de [Kactus](https://kactus.io) et de quelques scripts
[Node](https://nodejs.org) maison.

{% cloudinary
  /assets/img/2018/kactus.png
  caption="Kactus, montrant les différences d'un fichier Sketch enregistré avec Git"
%}

Même si avons pu réalisé cette prouesse _technique_, nous étions déçus de nous
apercevoir que le flux de travail ne fonctionnait pas comme nous le souhaitions —
en tout cas, pour ce qui nous concerne. Le fait de devoir synchroniser deux
formats de fichiers radicalement différents s'est avéré fastidieux, sujet à des
erreurs, et difficile à passer en revue.

Garder le code et les fichiers Sketch dans un même emplacement a pu aider à
_clarifier_ le problème, mais ça n'aidait pas vraiment à le _résoudre_. Pire,
cela a provoqué de nouvelles frictions pour les contributeurs au _style guide_,
pour un gain minime. Les fichiers Sketch ont rapidement été laissés de côté.
Cette expérience fut pour nous un échec.

Mais au moment où nous commencions à perdre espoir de faire travailler ensemble
les développeurs et les designers sur un même projet
[html-sketchapp](https://github.com/brainly/html-sketchapp) a débarqué et a
changé *toute* la donne.

---

### L'emergence d'html-sketchapp

En définitive, nous n'étions pas les seuls à avoir des difficultés à intégrer
`react-sketchapp` dans notre stack technique existante.

> "Nous étions incapables de simplement passer outre ces limitations,
> nous avons donc créé html-sketchapp"
>
> [Konrad Dzwinel,
> Brainly](https://github.com/brainly/html-sketchapp/blob/master/README.md#why)

Ils ont pris une approche radicalement différente avec  [html-sketchapp](https://github.com/brainly/html-sketchapp).

{% cloudinary
  /assets/img/2018/html-sketchapp.png
%}

Comme son nom l'indique, `html-sketchapp` permet de générer des fichiers Sketch à partir de fichiers HTML normaux, mais contrairement à `react-sketchapp`, vous restez libre des choix techniques pour votre application.

Vous pourriez développer votre application avec [Preact](https://preactjs.com),
[Vue](https://vuejs.org), [Angular](https://angularjs.org),
[Backbone](http://backbonejs.org), [jQuery](https://jquery.com) — ou même [Ruby](https://www.ruby-lang.org/en/) ou [PHP](http://www.php.net).

Vous pouvez bien entendu utiliser React et cette fois vous pouvez gérer les styles comme bon vous semble, et utiliser les primitives qui font sens pour votre projet.

Le contrat était incroyablement limpide - du moment que vous pouvez générer du HTML, vous pouvez l'importer dans Sketch.

---

#### Génération des fichiers Sketch

À première vue, c'était trop beau pour être vrai, mais après avoir jeté un oeil sous le capot, nous nous sommes rendu compte que ce n'était pas si compliqué.

Pour comprendre le fonctionnement de `html-sketchapp`, il faut connaître le format de fichier de Sketch. Étonnamment, les fichiers Sketch sont juste des fichiers zippés.

{% cloudinary
  /assets/img/2018/sketch-files.png
%}

Une fois dézippés, on s'aperçoit que les fichiers Sketch sont principalement constitués de fichiers [JSON](https://en.wikipedia.org/wiki/JSON) qui peuvent être ouverts dans n'importe quel éditeur de texte.

{% cloudinary
  /assets/img/2018/json-source.png
%}

Si vous regardez attentivement le contenu de ces fichiers, vous verrez que c'est
un format relativement simple, constitué en grande partie d'une petite poignée
de classes imbriquées.

À bas-niveau, `html-sketchapp` permet de générer à l'aide d'un programme des instances de ces classes et de les convertir en JSON — mais ça ne s'arrête pas là.

La fonctionnalité la plus puissante dans `html-sketchapp` c'est
[`nodeToSketchLayers`](https://github.com/brainly/html-sketchapp/blob/master/html2asketch/nodeToSketchLayers.js), qui vous donne la possibilité de convertir un élément unique du navigateur en un tableau de calques Sketch. C'est là où toute la magie opère, puisque la fonction possède toute la logique pour extraire les styles du navigateur et les convertir en leurs équivalents dans Sketch.

C'est la classe
[`SymbolMaster`](https://github.com/brainly/html-sketchapp/blob/master/html2asketch/symbolMaster.js) qui lie vraiment le tout, elle permet de générer dynamiquement des symboles Sketch. Puisque les symboles sont la base de toute bibliothèque Sketch, cela nous a permis d'exposer un ensemble de composants à nos designers, à partir du code sous-jacent.

Malheureusement, certaines limitations dans le format actuel de Sketch liées à l'encodage des styles de texte font que les fichiers générés se sont pas _vraiment_ des fichiers Sketch valides — `html-sketchapp` les désigne comme des fichiers *à peu près Sketch* ou *asketch* pour faire court. Du coup il faut les importer manuellement avec le [plugin html-sketchapp pour Sketch](https://github.com/brainly/html-sketchapp/tree/master/asketch2sketch.sketchplugin). Ça va, c'est pas trop compliqué.

Assembler le tout peut paraître un peu perturbant au début, heureusement un [exemple de projet sur GitHub](https://github.com/brainly/html-sketchapp-style-guide) montre comment convertir un _style guide_ existant en document Sketch.

Dès que nous avons vu ça, nous nous sommes rapidement mis à le tester et il ne nous a pas fallu beaucoup de temps avant de pouvoir constater des résultats vraiment surprenants.

#### Test de html-sketchapp

Pour avoir un premier aperçu des possibilités, nous avons commencé par le faire pointer sur la page d'accueil de notre style guide.

<blockquote class="twitter-tweet" data-lang="fr"><p lang="en" dir="ltr">Taking html-sketchapp for a spin—really impressive!<br><br>Without having to touch our code, it rendered our style guide documentation home page pretty well—only struggling with the SVGs!<br><br>cc <a href="https://twitter.com/kdzwinel?ref_src=twsrc%5Etfw">@kdzwinel</a> <a href="https://t.co/OZ8NFI8X2v">pic.twitter.com/OZ8NFI8X2v</a></p>&mdash; Mark Dalgleish (@markdalgleish) <a href="https://twitter.com/markdalgleish/status/933526318250995712?ref_src=twsrc%5Etfw">23 novembre 2017</a></blockquote>

Nous avons ensuite générer nos premiers symboles à partir de notre composant *`Button`* et de ses différentes variantes de rendu.

<blockquote class="twitter-tweet" data-lang="fr"><p lang="en" dir="ltr">Wow—I&#39;m getting pretty far pretty quickly with html-sketchapp 😱 <a href="https://t.co/JdbzPHf3AO">pic.twitter.com/JdbzPHf3AO</a></p>&mdash; Mark Dalgleish (@markdalgleish) <a href="https://twitter.com/markdalgleish/status/933634632444080129?ref_src=twsrc%5Etfw">23 novembre 2017</a></blockquote>

Pour parvenir à cela, nous avons décidé d'ajouter un fichier JavaScript à l'intérieur de chaque dossier de composant (par exemple `Button.sketch.js`), qui indique les symboles que nous souhaitons exporter.

Chaque fichier exporte un objet qui définit les noms des symboles et les éléments React correspondants.

```js
import React from 'react';
import Button from './Button';

export const symbols = {
 'Button/Pink': <Button color="pink">Button</Button>,
 'Button/Blue': <Button color="blue">Button</Button>,
 'Button/Transparent': <Button color="transparent">Button</Button>,
};
```

Nous avons ensuite créer une route masquée spécifique pour le site de notre _style guide_ qui importe tous les fichiers de type `.sketch.js` et qui effectue le rendu des éléments React fournis à l'écran. De cette manière, nous avons pu simplifier le processus de conversion et exposer tous les contenus pour Sketch sur une seule et même page.

Chaque instance de symbole est encapsulée dans un élément `div` et son nom est défini dans un [attribut data](https://developer.mozilla.org/en-US/docs/Learn/HTML/Howto/Use_data_attributes), ce qui nous permet de sélectionner et de nommer facilement tous les symboles présents sur la page.

```html
<div data-sketch-symbol="Button/Pink">
  ...
</div>
```

Ce patron s'est montré tellement efficace, que nous l'avons ensuite appliqué de sorte à inclure aussi les styles typographiques et les couleurs du document.

<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">More progress with html-sketchapp! Text styles in Sketch, defined in code as React components 😱🎉 <br><br>This is incredible. <a href="https://t.co/1CC7GLIw0M">pic.twitter.com/1CC7GLIw0M</a></p>&mdash; Mark Dalgleish (@markdalgleish) <a href="https://twitter.com/markdalgleish/status/933862806608154624?ref_src=twsrc%5Etfw">November 24, 2017</a></blockquote>

<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Even more progress with html-sketchapp! Colours defined as Less variables, bulk imported into React components, exported to Sketch as document colours 😱🎉 <a href="https://t.co/A5qnbBU8af">pic.twitter.com/A5qnbBU8af</a></p>&mdash; Mark Dalgleish (@markdalgleish) <a href="https://twitter.com/markdalgleish/status/933919800685879297?ref_src=twsrc%5Etfw">November 24, 2017</a></blockquote>

Comme notre charte est responsive, nous avons ensuite du automatiser le redimensionnement du navigateur pour capturer les symboles dans différentes tailles d'écran.

<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">More amazing progress with html-sketchapp! Automatically rendering *every* symbol and text style for an array of named viewport sizes 😱🙌 <a href="https://t.co/ZbyvIUfbE7">pic.twitter.com/ZbyvIUfbE7</a></p>&mdash; Mark Dalgleish (@markdalgleish) <a href="https://twitter.com/markdalgleish/status/935282022439829504?ref_src=twsrc%5Etfw">November 27, 2017</a></blockquote>

Nous pouvions désormais ajouter, supprimer et renommer différentes tailles de _viewport_ depuis un seul endroit, et chaque symbole était ensuite régénéré pour prendre en compte ces nouvelles valeurs. Tout d'un coup, on aurait dit que nous venions de résoudre une des problématiques les plus fastidieuses liée à la maintenance d'une bibliothèque responsive Sketch.

Si tout se passait étonnamment pour le mieux, nous avons quand même du faire quelques adaptations spécifiques pour le support de Sketch — de la même manière que vous devez parfois supporter quelques implémentations erronées d'un navigateur — que nous avons pu rassembler dans [un seul fichier](https://github.com/seek-oss/seek-style-guide/blob/master/docs/src/components/SketchExports/fixSketchRendering/fixSketchRendering.js).

#### Du test à la production

Ce qui avait démarré comme une expérimentation à petite échelle s'est rapidement transformé quelque chose qui ressemblait à un mini-framework. À ce niveau, il ne restait plus grand chose à faire pour l'intégrer proprement à notre _style guide_, pour l'inclure dans notre processus standard de déploiement.

<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">It&#39;s happening! Just opened the PR that automatically converts our style guide components into a Sketch library with html-sketchapp! 😱🎉 <a href="https://t.co/764TMHz9Mz">https://t.co/764TMHz9Mz</a></p>&mdash; Mark Dalgleish (@markdalgleish) <a href="https://twitter.com/markdalgleish/status/936453114940362752?ref_src=twsrc%5Etfw">December 1, 2017</a></blockquote>

Cependant si vous regardez bien la [pull request](https://github.com/seek-oss/seek-style-guide/pull/394), vous verrez
qu'il nous a fallu ajouter pas mal de code et de dépendances pour relier le
tout, même si nous tentions d'effectuer une seule et unique tâche,
conceptuellement considérée comme simple à un plus haut niveau.

Pour générer notre bibliothèque Sketch, il nous fallait en passer par les étapes suivantes :

-   Compiler un script pour le navigateur avec webpack, qui contient `html-sketchapp` et la logique idoine pour pouvoir sélectionner et convertir les éléments.
-   Démarrer un serveur web statique sur un port disponible.
-   Lancer [Puppeteer](https://github.com/GoogleChrome/puppeteer) (une version
    [headless](https://en.wikipedia.org/wiki/Headless_browser) de [Chromium](https://www.chromium.org/Home)).
-   Naviguer jusqu'à la bonne URL.
-   Injecter le script compilé dans l'instance Puppeteer en train de tourner.
-   Redimensionner la fenêtre du navigateur plusieurs fois, et prendre des captures pour chaque taille d'écran voulue en appelant les fonctions définies dans notre script compilé.
-   Enregistrer les fichiers JSON générés sur le disque.
-   Éteindre le serveur web statique.
-   Éteindre le navigateur headless.

Il nous paraissait évident que tout cela pourrait être abstrait dans une seule commande — qui nous permette de simplement pointer une URL et de commencer à capturer les composants.

C'est donc ce que nous avons fait.

#### Voici donc `html-sketchapp-cli`

Moins d'un mois après avoir commencé à intégrer `html-sketchapp` dans notre style guide, nous avons ouvert le code source de
[`html-sketchapp-cli`](https://github.com/seek-oss/html-sketchapp-cli), un petit utilitaire en ligne de commande qui vous évite d'avoir à coder tout ça.

<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">💎🚀 Super excited to unveil html-sketchapp-cli 🎉<br><br>Quickly generate Sketch libraries from HTML documents—powered by html-sketchapp.<br><br>Add this:<br>&lt;div data-sketch-symbol=&quot;Button/Primary&quot;&gt;…&lt;/div&gt;<br><br>Run this:<br>$ html-sketchapp --file sketch.html --out-dir dist<a href="https://t.co/vFH256rLRK">https://t.co/vFH256rLRK</a></p>&mdash; Mark Dalgleish (@markdalgleish) <a href="https://twitter.com/markdalgleish/status/943183893703802881?ref_src=twsrc%5Etfw">December 19, 2017</a></blockquote>

Maintenant, nous pouvons parvenir au même résultat en déclarant une seule dépendance dans notre fichier de configuration :

```js
module.exports = {
  serve: 'docs/dist',
  url: '/sketch-exports',
  outDir: 'dist/asketch',
  viewports: {
    'Desktop': '1024x768',
    'Mobile Plus': '414x736',
    'Mobile': '320x568'
  }
};
```

La bonne surprise c'est qu'en utilisant
[html-sketchapp-cli](https://github.com/seek-oss/html-sketchapp-cli) dans notre style guide, nous avons pu supprimer *beaucoup* de code.

{% cloudinary
  /assets/img/2018/diff.png
%}

<blockquote class="twitter-tweet" data-conversation="none" data-lang="en"><p lang="en" dir="ltr">To get an idea of why I created html-sketchapp-cli, check out how much code it let me delete from our style guide: <a href="https://t.co/2AABh2T6T8">https://t.co/2AABh2T6T8</a></p>&mdash; Mark Dalgleish (@markdalgleish) <a href="https://twitter.com/markdalgleish/status/943223648898256896?ref_src=twsrc%5Etfw">December 19, 2017</a></blockquote>

---

#### Un processus de design continu

Tout cet outillage fait désormais partie de notre de recette standard de déploiement continu , et nous permet d'étendre la portée de notre code — au delà de la seule communauté des développeurs, il aide les designers dans leur travail quotidien.

À chaque génération réussie de notre _style guide_ — non seulement nous déployons automatiquement notre site sur [GitHub Pages](https://pages.github.com) (à l'aide de
[gh-pages](https://github.com/tschaub/gh-pages)) et nous publions la bibliothèque de composants sur [npm](https://www.npmjs.com) (à l'aide du paquet
[semantic-release](https://github.com/semantic-release/semantic-release)) — mais nous générons automatiquement les fichiers *asketch*, prêts à être importés et à être convertis dans notre bibliothèque Sketch officielle.

Cette librairie Sketch est ensuite distribuée via un disque partagé de notre équipe de designers, ce qui veut dire que nos designers ont en permanence une copie à jour de la bibliothèque, qui se synchronise en temps réel, même quand Sketch est ouvert.

Grâce au [support natif des bibliothèques dans Sketch](https://www.sketchapp.com/docs/libraries), les designers peuvent ouvrir le menu "Bibliothèque de Style Guide de SEEK" et commencer à sélectionner les composants, en sachant que les conventions de nommage et les styles visuels respectent les attentes des développeurs dans leurs équipes.

{% cloudinary
  /assets/img/2018/sketch-symbols.png
%}

Depuis cette adoption, nous avons commencé à voir des changements continus dans notre code se propager dans Sketch — même si parfois les personnes qui font ces changements n'ont même pas Sketch d'installé sur leur machine. Puisque notre _style guide_ est connecté à nos applications en production, il est constamment amélioré par tout un tas de personnes dans nos équipes, et nous pouvons maintenant être sûrs que tous ces changements mettent bien à jour notre bibliothèque Sketch.

Même si nous continuons de travailler sur différents formats et médias, nous mettons tout en oeuvre pour créer l'illusion de tous parler une même langue.

---

#### Et maintenant ?

Aussi génial puisse être ce développement pour nous, nous le considérons toujours comme une solution temporaire. Effectuer le rendu de contenus web dans Sketch s'avère incroyablement puissant, et c'est une nouvelle étape obligatoire de notre quête, mais notre industrie doit encore aller plus loin.

Les frontières entre nos différents médias sont peut-être un peu plus floues, mais les outils de design futurs devront supprimer cette frontière pour de bon. Pour que nous puissions vraiment libérer son potentiel, nous avons besoin d'outils de conception qui ne se contentent pas d'imiter le médium ciblé, nous avons besoin qu'ils soient bâtis avec.

Heureusement, il y a beaucoup de gens qui travaillent sur ce problème actuellement.
Des outils comme [Compositor](https://compositor.io),
[Interplay](https://interplay.io), [Alva](https://meetalva.io),
[Haiku](https://www.haiku.ai), [Webflow](https://webflow.com) et
[UXPin](https://www.uxpin.com/design-from-code) cherchent à faire tomber les murs techniques entre les outils de design et le code final, et d'autres outils du même genre continuent d'arriver.

Qui sait, nous pourrions même commencer à voir des outils de conception plus traditionnels adopter cette approche pour rester à la page, particulièrement quand les design systems font partie de la palette standard d'outils de conception moderne.

En attendant de nouveaux outils de conception qui embrassent véritablement l'époque actuelle des principes qui régissent les design systems, des projets comme
`react-sketchapp` and `html-sketchapp` font un travail incroyable pour nous préparer à cette façon de penser _dès à présent_.

Honnêtement, il n'y a jamais eu un meilleur moment pour s'y mettre.

<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
