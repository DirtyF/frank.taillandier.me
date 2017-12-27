---
title: Pourquoi les développeurs web doivent se soucier de l'interactivité
description: >
  Définition de l'interactivité sur le web du point de vue de JavaScript et conseils pour éviter que les utilisateurs ne se retrouvent devant des interfaces qui ne répondent pas assez vite.
image: /assets/img/2017/12/
source:
  author: Philip Walton
  title: Why Web Developers Need to Care about Interactivity
  url: https://philipwalton.com/articles/why-web-developers-need-to-care-about-interactivity/
---

Difficile de se passer de JavaScript dans les interfaces modernes de nos sites web, mais ajouter du code JavaScript dans une page ne doit pas forcément signifier dégrader l'expérience de l'utilisateur : l'empêcher de naviguer rapidement entre les pages et effectuer les tâches qu'il souhaite réaliser sans qu'il ait à attendre que la page réagisse à ses actions.
[Philipp Walton](https://philipwalton.com) est ingénieur chez Google et a regroupé dans cet article tout ce que les développeurs web devraient savoir de la gestion de l'interactivité des interfaces sur le web. Cela devrait aider pas mal de développeurs JavaScript à rendre le web plus utilisable pour tous.
{: .lead }

Si vous avez déjà parcouru le web sur votre téléphone, vous avez forcément dû expérimenter un jour ou l'autre ce genre de situation :

* _Vous ouvrez une page web et vous cliquez quelque part mais rien ne se passe._
* _Vous cliquez à nouveau dessus — mais toujours rien._
* _Vous cliquez ailleurs — non plus, toujours rien._

C'est déjà une expérience assez frustrante en soi, mais souvent ça ne s'arrête pas là. Généralement voici ce qui se passe ensuite :

_Vous commencez à cliquer un peu partout pour vous assurer que **quelque chose** répond encore, que votre téléphone est bien en état de marche — et soudain une série d'actions s'exécutent en même temps, vous vous retrouvez sur une page complètement différente et vous n'avez aucune idée de la façon dont vous êtes arrivé là._

Si ça vous rappelle quelque chose, c'est que vous avez fait l'expérience de l'opposé de l'interactivité sur le web. Mais qu'entend-t-on exactement par "interactivité" ?

J'imagine que la majorité des personnes qui lisent cet article savent probablement ce que le *mot* "interactivité" signifie en règle générale. Le problème, c'est que depuis quelques années, ce mot a revêtu une nouvelle signification technique (comme par exemple dans la métrique qui mesure le temps qui s'écoule avec de pouvoir interagir avec la page ou [<abbr aria-label="Time To Interact">TTI</abbr>](https://www.dareboost.com/fr/glossary) en anglais) mais malheureusement les spécificités de cette signification sont rarement explicitées.

C'est pour cela que dans cet article, nous allons voir en détail ce que veut dire interactivité sur le web. Après tout c'est une des choses les plus importantes dont les développeurs devraient se soucier.

## Interactivité sur le web

Pour qu'une page soit interactive, elle doit pouvoir répondre rapidement à une action utilisateur. Que ce soit quand une personne clique sur un lien, tapote sur un composant d'interface personnalisé ou fasse simplement défiler du contenu, si la page peut répondre rapidement (d'une façon qui paraisse plus ou moins "instantanée" pour la personne) alors on peut dire que la page est interactive.

Je pense que généralement la plupart des développeurs comprennent ce principe. Mais je pense que la plupart ne comprennent **pas** toujours **les raisons** pour lesquelles une page n'est pas interactive, et c'est  là un problème bien plus grave.

Il y a essentiellement seulement deux raisons pour lesquelles une page ne serait pas en mesure de répondre rapidement à l'action d'un utilisateur (si l'on excepte les erreurs JS et les autres anomalies manifestes) :

1. La page n'a pas fini de charger le code JavaScript nécessaire pour contrôler son DOM.
2. Le processus principal du navigateur est occupé à faire autre chose.

La première raison est importante et a déjà été débattue par beaucoup de gens dans la communauté, je ne vois pas grand intérêt à là répéter  ici (cette [vidéo de 5 minutes](https://youtu.be/RAhYnK0v3rk) résume très bien la problématique si elle vous intéresse).

La deuxième raison est complexe et souvent négligée, et c'est principalement ce point que je vais développer ici.

### Quand le processus principal du navigateur est déjà occupé

Bien qu'on entende souvent les gens dire que les navigateurs savent faire tourner _plusieurs processus en parallèle_(ce qui est vrai jusqu'à un certain point), la réalité c'est qu'une grande partie des tâches d'un navigateur doit être lancée dans le même processus (souvent appelé "processus principal" ou "processus de l'interface graphique").

Sans trop nous plonger dans les rouages internes des navigateurs (tels que les [tâches](https://html.spec.whatwg.org/#queue-a-task), [les files d'attente de tâches](https://html.spec.whatwg.org/#task-queue), et [la boucle évènementielle](https://html.spec.whatwg.org/#event-loop)[^1]), l'important est de comprendre qu'il y a beaucoup de situations où le navigateur veut exécuter du code (comme déclencher un évènement en réponse à un clic de l'utilisateur), mais qu'il ne peut pas car il doit attendre la fin de l'exécution d'une autre fonction. On dit alors que le processus principal est "occupé" ou "bloqué".

Le meilleur moyen de le montrer c'est encore à l'aide d'une démo. Jetez un coup d'œil à ce bout de code qui exécute une boucle `while` en continu pendant 10 secondes.

```js
function blockMainThreadUntil(time) {
  while (performance.now() < time) {
    // Do nothing...
  }
}

blockMainThreadUntil(performance.now() + 10000);
```

Pendant l'exécution de de code, **aucun autre code ne peut être exécuté par le processus principal**. Cela signifie qu'un utilisateur ne peut pas :

* cliquer sur un lien,
* sélectionner un texte,
* cliquer dans une case à cocher,
* regarder un GIF animé,
* taper dans une balise `<input>` ou `<textarea>`.

Avant de vous faire une démo, je tiens à prendre un moment pour dire à quel point cette expérience est mauvaise. Quand le code précédent est en train de s'exécuter, il ne bloque pas seulement l'exécution d'un autre code JavaScript, il bloque **toutes** les tâches du processus principal et cela inclus les interactions dites natives dont on ne pense pas forcément qu'elles puissent être affectées par du code écrit par un développeur.

En fait, même des interactions comme le défilement (qui sont généralement gérées dans un processus distinct) peuvent parfois être affectées lorsque le processus principal est occupé (par exemple si un écouteur d'évènement comme `wheel`, `touchstart` ou `touchmove` a été ajouté à la page)[^2].

Pour voir un processus principal bloqué en action, cliquez sur le bouton ci-dessous (qui va ajouter un écouteur d'évènement `wheel` et `touchstart` et exécuter la boucle `while` précédemment vue), puis essayez de sélectionner du texte, de cliquer sur un lien ou de faire défiler la page. Vous remarquerez également que l'animation GIF est stoppée :

<div class="Demo">
  <p>
    <button class="btn" id="block-main-thread-demo">
      Bloquer le processus principal
    </button>
  </p>
  <table>
    <tr>
      <th>Element</th>
      <th>Exemple</th>
    </tr>
    <tr>
      <td><code>&lt;img&gt;</code></td>
      <td><img src="/assets/img/2017/12/animated-loading-spinner.gif"
    alt="Loading spinner"></td>
    </tr>
    <tr>
      <td><code>&lt;a&gt;</code></td>
      <td><a href="https://example.com">https://example.com</a></td>
    </tr>
    <tr>
      <td><code>&lt;input&gt;</code></td>
      <td>
        <label><input type="checkbox">Cochez moi</label>
        <input type="text" placeholder="Tapez ici" />
      </td>
    </tr>
  </table>
  <script>
  document.getElementById('block-main-thread-demo').onclick = function() {
    var noop = function() {};
    document.addEventListener('wheel', noop);
    document.addEventListener('touchstart', noop);
    // Programmer une nouvelle tâche pour être sur que les écouteurs d'évènement
    // sont ajoutés avant de bloquer le processus principal.
    setTimeout(function() {
      var time = performance.now();
      while (performance.now() < time + 10000) {
        // Ne rien faire...
      }
      document.removeEventListener('wheel', noop);
      document.removeEventListener('touchstart', noop);
    }, 0);
  };
  </script>
</div>

{: .message }
**Attention !** Vous pourriez vous retrouver soudainement sur une nouvelle page une fois le processus principal débloqué !

### Ce qui bloque le processus principal

Vous pourriez penser: _OK, mais mon code n'exécute pas une boucle `while` pendant 10 seconde; ai-je vraiment besoin de me préoccuper de cela ?_

Malheureusement le réponse est oui. Il est beaucoup plus simple pour des pages de bloquer le processus principal qu'on pourrait le penser. En réalité, le simple fait de charger du JavaScript va bloquer le processus principal pendant que le navigateur analyse et compile le code.[^3]

Mon collègue Addy Osmani a réalisé [une étude sur plus de 6000 sites web](https://medium.com/reloading/javascript-start-up-performance-69200f43b201) développés à l'aide de frameworks web populaires et a constaté qu'en moyenne ils bloquent le processus principal pendant 4,4 secondes rien qu'en parcourant et en compilant le code JavaScript. Ce sont 4,4 secondes pendant lesquelles les gens ne peuvent pas cliquer sur un lien ou sélectionner du texte !

En plus de l'analyse et de la compilation, exécuter du JavaScript bloque aussi le processus principal. Chaque fonction JavaScript exécutée dans votre page va bloquer le processus principal pendant un certain temps. Bien que les fonctions JavaScript aient tendance à être petites et à s'exécuter aussi rapidement, plus vous lancez de fonctions à la fois, plus vous aurez de chance qu'elles viennent s'ajouter à quelque chose qui sera remarqué par l'utilisateur.

C'est particulièrement vrai si vous utilisez un framework web ou une bibliothèque de DOM virtuel qui gère un nouveau rendu de composant après un changement d'état. Beaucoup de ces bibliothèques définissent des méthodes de cycle de vie d'un composant qui sont toutes lancées de manière synchrone à chaque fois qu'il y a un changement. Pour une application qui embarque beaucoup de composants, cela peut facilement représenter des milliers d'appels de fonction.

Un point important à bien comprendre ce que ce n'est pas nécessairement _la quantité de code_ que vous allez lancer qui compte, c'est _la manière_ dont vous le lancer.

Par exemple, si vous avez 1000 fonctions que prennent chacune 1ms à se lancer et que vous les lancez de manière séquentielle dans la même pile d'appel, elles vont bloquer le processus principal pendant 1 seconde. Mais si vous découpez l'exécution de ces fonctions en plusieurs tâches distinctes et asynchrones (ou que vous utilisez quand c'est possible [`requestIdleCallback`](https://developers.google.com/web/updates/2015/08/using-requestidlecallback)), cela prendra peut-être plus de temps mais ça ne bloquera pas le processus principal. Le navigateur sera capable d'interagir entre les appels et de répondre aux entrées utilisateur.

Cette stratégie est parfaitement employée dans les récents changements architecturaux de React (alias [fiber](https://code.facebook.com/posts/1716776591680069/react-16-a-look-inside-an-api-compatible-rewrite-of-our-frontend-ui-library/)). Pour citer le billet de publication du [billet annonçant la sortie de React 16](https://reactjs.org/blog/2017/09/26/react-v16.0.html#new-core-architecture):

> Peut-être que l'une des choses les plus passionnantes sur lesquelles nous travaillons est le **rendu asynchrone** — une stratégie pour programmer de manière coopérative le travail de rendu en laissant périodiquement l'exécution au navigateur. Résultat, grâce au rendu asynchrone, les applications sont plus réactives puisque React prend soin d'éviter de bloquer le processus principal.

Enfin, je m'en voudrais de ne pas mentionner ce qui est peut-être la plus grande cause de non-interactivité sur le web : les publicités et les widgets issus de tierces parties — qui exécutent souvent une quantité bien trop importante de code et accèdent fréquemment aux propriétés du document principal, affectant ainsi des tâches supplémentaires au processus principal.

On retrouve généralement ces publicités et ces widgets issus de tierces parties sur des sites de contenu plutôt que sur des sites "applicatifs", ce qui soulève un autre sujet important…

### Les sites applicatifs face aux sites de contenu

J'entends beaucoup de gens dire des choses comme : _je m'occupe d'un site de contenu, pas d'une application, donc je n'ai pas vraiment besoin de me soucier de l'interactivité._

Mais c'est faux ! Comme je l'ai déjà dit plus haut, quand vous bloquez le processus principal vous empêchez les utilisateurs de cliquer sur des liens ou de sélectionner du texte; et dans certains cas vous pouvez même les empêcher de faire défiler la page ! Ce sont des choses dont doivent se préoccuper les sites de contenu.

## Comment savoir si vous avez un problème d'interaction

Le problème délicat avec l'interactivité c'est qu'une même page peut très bien être interactive pour une personne (qui utilise un ordinateur de bureau rapide) mais pas du tout réactive pour une autre (qui utilise un téléphone d'entrée de gamme). En tant que développeurs, il est important de bien comprendre cela et de bien mesurer l'interactivité sur les appareils similaires à ceux utilisés par nos utilisateurs dans la vraie vie.

J'ai dit plus tôt que pour qu'une page soit interactive, elle doit pouvoir répondre rapidement à une action declenchée par un utilisateur. La plupart des définitions actuelles de l'interactivité définissent "rapidement" à l'aide de la recommandation du [modèle RAIL](https://developers.google.com/web/fundamentals/performance/rail) au sujet de la réactivité, qui la situe sous les 100ms.

J'ai aussi mentionné le fait que le première cause de non réactivité d'une interface ce sont les tâches qui bloquent le processus principal. Afin de vous assurer de répondre à une action utilisateur en moins de 100ms, il est crucial qu'aucune tâche ne tourne pendant plus de 50ms. Pour la bonne raison que si l'action se produit pendant une autre tâche et que l'écoute de l'action elle-même (de sa propre tâche) prend également du temps pour s'exécuter, alors ces deux tâches devront se terminer en moins de 100ms pour que l'interaction paraisse instantanée pour l'utilisateur.

Pour rendre-compte de tout cela, les outils et APIs qui mesurent l'interactivité considéreront qu'une page est interactive si elle ne fait tourner aucune tâche pendant plus de 50ms sur une période donnée.

Pour savoir si votre propre site est interactif, il y a généralement deux approches :

1. L'utilisation d'outils ou de simulateurs (soit de la mesure en laboratoire)
2. Récupérer les données auprès des vrais utilisateurs (désigné par l'appellation RUM, *real-user monitoring*, en anglais).

Et il existe également deux façons de penser à l'interactivité et à ses effets :

1. La probabilité qu'un utilisateur expérimente des pages non interactives ou qui ne répondent pas.
2. Le fait qu'un utilisateur réel expérimente vraiment une page non interactive ou qui ne répond pas alors qu'il essaie d'interagir avec.

Cela ressemble au problème philosophique de [l'arbre qui tombe dans la forêt](https://en.wikipedia.org/wiki/If_a_tree_falls_in_a_forest) : _Si une page web n'est pas interactive, mais que l'utilisateur n'en fait pas l'expérience, est-ce un problème ?_

Ma réponse à cette question est que ce qui compte vraiment au final c'est l'expérience véritablement vécue par les utilisateurs. Toutefois les mesures en laboratoire sont des outils précieux pour prévenir des mauvaises expériences utilisateurs en premier lieu.

En d'autres mots, nous devrions nous soucier de toute ce que nous venons de voir.

Comme outils de mesure, je recommande vivement des outils comme  [Lighthouse](https://developers.google.com/web/tools/lighthouse/) et [WebPageTest](https://www.webpagetest.org/), qui mesurent tous les deux le temps écoulé avant de pouvoir interagir avec la page (<abbr aria-label="Time To Interact">TTI</abbr>) et qui donnent également des informations supplémentaires sur l'interactivité. Par exemple WebPageTest affiche une bannière ["la page est interactive"](https://calendar.perfplanet.com/2017/time-to-interactive-measuring-more-of-the-user-experience/) en bas de la vue en cascade. C'est super pratique pour visualiser quand ces mauvaises expériences sont susceptibles de produire.

<figure>
  <a href="/assets/img/2017/12/interactivity-web-page-test-1400w.png">
    <img srcset="/assets/img/2017/12/interactivity-web-page-test-1400w.png,
      /assets/img/2017/12/interactivity-web-page-test.png 700w"
      src="/assets/img/2017/12/interactivity-web-page-test-1400w.png"
      alt="Rapport d'interactivité de WebPageTest">
  </a>
</figure>

Et Lighthouse vous attribue un score pour [l'estimation de la latence d'action](https://developers.google.com/web/tools/lighthouse/audits/estimated-input-latency):

<figure>
  <a href="/assets/img/2017/12/input-latency-lighthouse-1400w.png">
    <img srcset="
      /assets/img/2017/12/input-latency-lighthouse-1400w.png,
      /assets/img/2017/12/input-latency-lighthouse.png 700w"
      src="/assets/img/2017/12/input-latency-lighthouse.png"
      alt="Input latency in a Lighthouse performance report">
  </a>
</figure>

Attention, c'est une "estimation de la latence d'action" car c'est une simulation en laboratoire; aucun utilisateur n'est vraiment en train d'interagir avec la page, c'est simplement une mesure de probabilité.

Si vous voulez mesurer la _véritable_ latence d'action (faire une mesure réelle de l'utilisation), vous pouvez utiliser des outils d'analyse comme Google Analytics. Par exemple, si votre site a un bouton de menu actionnable, vous pourriez vouloir savoir toutes les fois où cela prend plus de 50ms pour que le code de l'écouteur d'évènement se lance (à partir du moment où l'utilisateur clique). Le code pour faire ça ressemble à quelque chose comme :

```js
const menuToggleBtn = document.querySelector('#menu-toggle');
menuToggleBtn.addEventListener('click', (event) => {
  // Mettez la logique de votre actionnement du menu ici…

  // Puis mesurez quand cela fini de s'exécuter.
  const latency = performance.now() - event.timeStamp;

  // Si ça prend plus de 50ms, notez le dans Google Analytics.
  if (latency > 50) {
    // En présupposant que requestIdleCallback(ou un shim) soit supporté.
    requestIdleCallback(() => {
      ga('send', 'event', {
        eventCategory: 'Métriques de PerformanceObserver'
        eventAction: 'input-latency',
        eventLabel: '#menu-toggle:click',
        eventValue: Math.round(latency),
        nonInteraction: true,
      });
    });
  }
});
```

Ce code tire parti du fait que la méthode `event.timeStamp` donne le temps écoulé jusqu'à ce que le système d'exploitation reçoive effectivement le clic tandis que `performance.now()`(appelé dans l'écoute d'un évènement) donne le temps d'exécution réel du code.

Bien qu'il soit possible d'ajouter ce genre de code à tous les boutons de votre site, je vous recommande de commencer par les composants les plus critiques de l'interface utilisateur, puis de continuer avec d'autres composants par la suite.

Vous pouvez aussi mesurer l'interactivité générale avec de vraies données utilisateurs grâce à la nouvelle [API Long Tasks](https://w3c.github.io/longtasks/), qui, en conjonction avec [PerformanceObserver](https://developer.mozilla.org/en-US/docs/Web/API/PerformanceObserver), peut vous indiquer toutes les fois où une tâche bloque le processus principal pendant plus de 50ms. Le code pour pister cela dans Google Analytics ressemble à ça :

```js
// Définition d'un callback qui envoie les données sur les tâches longues à Google Analytics.
function sendLongTaskDataToAnalytics(entryList) {
  // Présuppose que requestIdleCallback (ou un shim) soit disponible.
  requestIdleCallback(() => {
    for (const entry of entryList.getEntries()) {
      ga('send', 'event', {
        eventCategory: 'Métriques de performance',
        eventAction: 'longtask',
        eventValue: Math.round(entry.duration),
        eventLabel: JSON.stringify(entry.attribution),
      });
    }
  });
}

// Crée un objet PerformanceObserver et commence à surveiller les tâches longues.
new PerformanceObserver(sendLongTaskDataToAnalytics).observe({
  entryTypes: ['longtask'],
});
```

Ces données vous permettront d'avoir connaissance de toutes les fois où le processus principal n'est pas totalement interactif. Elles vous indiqueront également quelles sont les frames du document (via la propriété [attribution](https://w3c.github.io/longtasks/#sec-TaskAttributionTiming)) qui génèrent les tâches longues, ce qui sera particulièrement utile pour déterminer si des publicités ou des widgets issus de tierces parties contribuent à de mauvaises expériences sur votre site.

Si vous voulez savoir comment traquer les métriques relatives à l'expérience utilisateur dans votre code, j'en ai parlé en détail dans [cette présentation lors de Google I/O](https://developers.google.com/web/updates/2017/06/user-centric-performance-metrics). Et si vous recherchez des conseils pour traquer proprement les choses avec Google Analytics, vous pouvez vous référer à mon article [La configuration Google analytics que je mets en place sur tous les sites que je développe](https://philipwalton.com/articles/the-google-analytics-setup-i-use-on-every-site-i-build/).

## Pourquoi l'interactivité est-t-elle si importante ?

Récemment, un groupe de chercheurs chez Google qui travaillent avec [la coalition pour de meilleures pubs](https://www.betterads.org) ont conduit une expérience pour déterminer à quel point les différents types de publicité agacent les gens. Un type de publicité "agaçante" qu'ils ont testé bloquait le processus principal pendant 10 secondes dès que la publicité était visible.

Lorsque l'étude fut terminée et que les [résultats](https://www.betterads.org/research/) furent publiés, cette publicité bloquante pendant 10 secondes se trouvait être parmi les moins agaçantes.

Ne sachant pas pourquoi c'était le cas, quelques chercheurs ont demandé à certains participants pourquoi ils ne trouvaient pas cela agaçant qu'une publicité les empêche d'interagir avec la page.

La réponse qu'ils reçurent communément fut :

_Oh, je n'avais pas compris que c'était la publicité qui ralentissait la page. Je pensais que c'était la page elle-même vu que la plupart des pages web sont lentes sur les téléphones._

Quand j'ai appris ça, ça m'a plutôt attristé, mais cela souligne aussi à quel point le problème est immense. Puisque nous les développeurs, nous n'avons pas fait de l'interactivité une priorité, les gens en sont venus à s'attendre à ce que les choses soient lentes par défaut. C'est encore pire quand le coupable est un script de tierce partie et que c'est le site en lui même qui en est quand même tenu responsable.

Donc c'est à nous les développeurs de tenir les tierces parties pour responsables de leur mauvais comportement. C'est notre responsabilité puisque cela affecte l'expérience de nos clients et leur opinion sur notre plate-forme.

J'entends beaucoup de développeurs web dire des choses comme "Je veux que le Web gagne", mais la seule manière d'y parvenir c'est si nous faisons tous de l'expérience utilisateur notre priorité, surtout sur les appareils mobiles. Et la première étape est d'aller voir si nos sites n'ont pas un problème de ce côté-là.

## Et après ?

J'espère que vous comprenez mieux maintenant ce qu'est l'interactivité et pourquoi elle est si importante. Je vous encourage vivement maintenant à mesurer l'interactivité de vos propres sites sur de vrais appareils et avec des vrais utilisateurs. D'après mon expérience, les développeurs sont généralement surpris par ces résultats.

Enfin, si vous cherchez des manières pour améliorer vos métriques relatives à l'interactivité, [les recommandations d'Addy Osmani pour réduire le coût du lancement de JavaScript](https://medium.com/reloading/javascript-start-up-performance-69200f43b201#24ef) sont un bon endroit pour commencer. Je vais également dans le sens des [recommandations d'Alex Russel pour allouer un budget pour la performance](https://infrequently.org/2017/10/can-you-afford-it-real-world-web-performance-budgets/).

## Notes

[^1]: Jake Archibald explique très bien quelques uns de ces concepts dans son article <a href="https://jakearchibald.com/2015/tasks-microtasks-queues-and-schedules/">Tâches, micro-tâches, files d'attente et planifications</a>. Si vous n'aimez pas lire les spécifications, cela peut être une meilleure façon de vous y mettre.

[^2]: C'est en parti résolu par <a href="https://github.com/WICG/EventListenerOptions/blob/gh-pages/explainer.md">les écouteurs d'évènement passifs</a>, mais ceux-ci ne sont pas supportés par tous les navigateurs, et parfois un framework ou un script externe vont ajouter des écouteurs sans que vous en ayez forcément conscience.

[^3]: Dans certains cas le navigateur peut <a href="https://blog.chromium.org/2015/03/new-javascript-techniques-for-rapid.html">analyser un script dans un processus distinct</a>, mais puisque ce n'est pas le cas dans tous les navigateurs et vu que cela n'est pas toujours vrai, je considère toujours que l'analyse de script peut bloquer le processus principal.
