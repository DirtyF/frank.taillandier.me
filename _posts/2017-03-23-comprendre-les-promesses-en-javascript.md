---
title: Un guide illustré pour comprendre les promesses en JavaScript
description:
  "Un guide illustré par Mariko Kosoka pour comprendre les promesses
  en JavaScript."
image: /assets/img/2017/03/promise-burger-party.png
source:
  title: The promise of a Burger Party
  url: http://kosamari.com/notes/the-promise-of-a-burger-party
  author: Mariko Kosoka
---

Débarquées dans ES2015, les
[promesses](https://oncletom.io/node.js/chapter-02/index.html#primitive-promise)
sont une manière très élégante de gérer du code asynchrone en Javascript. Vous
allez pouvoir dire adieu aux fameuses [pyramides de
l'enfer](https://vimeo.com/49221062#t=154s). Pour ceux qui comme moi comprennent
mieux avec des dessins, ce petit guide illustré de [Mariko
Kosoka](http://kosamari.com/) est une parfaite excuse pour commencer à vous
familiariser avec cette API native.
{: .lead }

Cet article est une **introduction** alternative aux promesses en JavaScript. Ce
sont des croquis griffonés sur mon carnet de notes pendant la lecture de
différents articles sur les promesses. Si vous cherchez un didacticiel plus
poussé, reportez vous aux suggestions de lecture en bas de l'article. 👇
{: .message }

Il y a quelques semaines, je discutais de comment je pouvais implémenter une
fonctionnalité en JavaScript. Il fallait que ce soit de l'asynchrone pour
accéder à des données externes. J'ai dit "Bon, utilisons `fetch()`… pour que
dans le code… euh…" et le personne avec qui je parlais a dit "ça retourne une
promesse". Mon cerveau s'est arrêté et j'ai dit : "Honnêtement, je vois pas de
quoi tu parles…"

J'avais écrit du code basé sur des promesses à maintes reprises, mais d'une
manière ou d'une autre ça n'a pas fait tilt cette fois là. Je me suis rendu
compte qu'en fin de compte je ne **comprenais** pas vraiment les promesses.

<blockquote class="twitter-tweet" data-lang="en"> <p lang="en" dir="ltr">I can
not tell you how hard it is to explain this sentence - &quot;It returns a
Promise&quot;<br><br>but probably because I really don&#39;t understand
Promise.</p>&mdash; Mariko Kosaka (@kosamari) <a
href="https://twitter.com/kosamari/status/819972802220589056">January 13,
2017</a> </blockquote> <script async
src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

Si vous me suivez sur Twitter, vous savez que je suis une apprenante visuelle
qui [dessine des concepts de
programmation](https://twitter.com/kosamari/status/806941856777011200) à l'aide
de métaphores physiques. C'est de cette manière que j'arrive à m'extirper de ce
double degré d'abstraction (à savoir un langage de programmation et l'anglais
qui n'est pas ma langue maternelle). Donc forcément, il a fallu que je dessine
pour y voir plus clair avec tout ça une fois de plus.

## La promesse d'une fête du Burger

![La promesse d'une fête du burger]({{ page.image | absolute_url }})

Voici un bout de code auquel nous allons nous intéresser au cours de cette
histoire.

```js
    // opération asynchrone
    function cuireBurger (type) { ... }

    // opération normale
    function faireMilkshake (type) { ... }

    // fonction commander qui retourne une promesse
    function commander (type) {
      return new Promise(function(resolve, reject) {
        var burger = cuireBurger(type)
        burger.ready = function (err, burger) {
          if (err) {
            return reject(Error('Erreur en cuisine'))
          }
          return resolve(burger)
        }
      })
    }

    commmander('JacquesBurger')
      .then( burger => {
        const milkshake = faireMilkshake('vanille')
        return { burger: burger, shake: milkshake }
      })
      .then( foodItems => {
        console.log('C’EST LA FÊTE DU BURGER !', foodItems)
      })
      .catch( err => {
        console.log(err)
      })
```

## Organisons une fête du Burger

Bienvenue dans le square du parc la Promesse, qui abrite le cabanon du Burger.
Le cabanon du burger est très populaire mais il n'y a pas beaucoup de caisses
pour prendre les commandes, du coup l'attente est toujours longue. Toutefois
l'arrière-cuisine est bien équipée et peut prendre plusieurs commandes à la
fois.

Si vous allez à New-York au [Madison Square Park, le cabanon du Burger existe
vraiment](http://www.foodsmackdown.com/2011/08/shake-shack-new-york-madison-square-park/).
C'est *super bon*, mais l'attente est toujours très longue.
{: .message }

## Transformer une action en promesse

Afin de pouvoir prendre les commandes aussi vite que possible, le cabanon du
Burger utilise un système de sonnerie. Quand un client passe une commande en
caisse, la personne au comptoir vous tend un plateau sur lequel est posé un
bipeur en échange du paiement.

![promesse](/assets/img/2017/03/promise-burger-party-2.png)

Le plateau est une *promesse* de la part du cabanon du Burger, ils y déposeront
leur délicieux burger une fois qu'il sera prêt, le bipeur est un indicateur de
l'état de la commande. Quand le bipeur ne sonne pas, ça veut dire que la
commande est **en attente** - l'équipe en cuisine s'affaire à préparer votre
commande. Quand le bipeur passe au rouge et sonne, ça veut dire que la commande
est **traitée**.

Attardons nous plus précisément sur ce que veut dire **traitée**. Cela ne veut
pas dire "prête". Cela signifie que la commande a été traitée en cuisine et
qu'on prévient le client pour lui demander ce qu'il veut faire. Vous avez
surement envie (en tant que client) d'aller chercher votre commande au comptoir,
mais dans certains cas, il se peut que vous décidiez de partir car l'attente est
trop longue. Ça depend de vous.

Regardons ce que vous avons jusque ici dans le code. Quand vous appelez la
fonction `commander`, elle "retourne une promesse" (elle vous donne un plateau
avec un bipeur). Une valeur en retour (un burger) devrait arriver sur votre
plateau une fois que la promesse a été tenue et une fonction de callback est
appelée. On va en parler plus en détail dans la prochaine partie !

![code1](/assets/img/2017/03/promise-burger-party-3.png)

## Ajout des gestionnaires de promesse

On dirait que le bipeur sonne, allons au comptoir pour récupérer notre commande.
Il y a deux scénarios possibles à ce moment là.

![terminée](/assets/img/2017/03/promise-burger-party-4.png)

### 1. La commande est honorée

Youpi ! Votre burger est prêt, l'équipe en cuisine vous tend un burger
fraîchement préparé. La promesse d'un bon burger a été tenue !

### 2. La commande est rejetée

On dirait que la cuisine est à cours de steaks pour burger, la promesse d'un
burger a été rejetée. Demandez à vous faire rembourser !

Voici comment vous pourriez vous préparer à ces deux cas de figure dans le code.

![then et catch](/assets/img/2017/03/promise-burger-party-5.png)

`.then()` prend une autre fonction comme second argument qui peut être aussi
utilisée pour gérer les refus. Pour faire simple, j'utilise juste `.catch()`
pour le refus dans cet article. Si vous voulez en savoir davantage sur les
différentes possibilités, vous aurez peut être envie d'aller lire [cet
article](https://developers.google.com/web/fundamentals/getting-started/primers/promises#error_handling).
{: .message }

### Enchaîner les promesses

Imaginons que votre commande soit honorée, mais vous vous rendez compte que pour
faire pour une vraie fête du burger, il vous fait aussi un milkshake… vous vous
dirigez donc sur la file C (une file spéciale pour les boissons), [qui existe
vraiment au cabanon du
Burger](http://midtownlunch.com/2010/08/02/midtown-times-square-shake-shack-finally-add-a-c-line/)
afin de gérer au mieux la foule). Lorsque vous commandez un milkshake au
comptoir, la personne vous donne une autre plateau et un autre bipeur. Comme le
milkshake est super rapide à préparer, le caissier vous donne aussi le
milkshake. Pas la peine d'attendre que le bipeur sonne (il sonne déjà !).

![nouvelle promesse](/assets/img/2017/03/promise-burger-party-6.png)

Regardons comment ça fonctionne dans le code. Enchaîner une promesse est aussi
simple que d'ajouter un autre `.then()` dans votre code. `.then()` retourne
toujours une promesse. Rappelez vous juste que chaque `.then()` vous retourne un
plateau et un bipeur et qu'une vraie valeur de retour est passée en argument du
callback.

![enchaînement](/assets/img/2017/03/promise-burger-party-7.png)

Maintenant que vous avez un burger et un milkshake, la fête du Burger peut
commencer 🎉

## Encore plus de trucs pour faire la fête !

Il existe d'autres méthodes pour les promesses qui vous permettent de faire des
trucs cools.

`Promise.all()` crée une promesse qui prend en entrée un tableau de promesses
(les éléments du tableau). La promesse est tenue quand chacun des éléments (les
promesses) sont tenues. Imaginez que vous commandiez cinq burgers différents
pour votre groupe d'amis mais que vous souhaitiez optimiser les trajets au
comptoir une fois que les cinq commandes sont prêtes. `Promise.all()` est une
bonne solution dans ce cas.

`Promise.race()` ressemble à `Promise.all()`. Mais elle est tenue ou rejetée dès
que l'une d'entre elles est tenue ou rejetée. On peut l'utiliser pour tenter
d'attraper des trucs. Si vous êtes super affamé, vous pourriez commander un
burger, un cheeseburger et un hot dog d'un coup, pour ne prendre que la première
commande terminée qui sortirait de la cuisine. (Remarquez dans cette analogie
que si la cuisine est à cours de steaks et refuse la première commande de
burger, alors la totalité de la course des promesses sera refusée.)

Il y a bien plus de choses à savoir sur les promesses. Voici quelques
suggestions de lecture pour aller plus loin :

* [Premiers pas avec NodeJS](https://oncletom.io/node.js/chapter-02/),
  extrait du livre à paraître de Thomas Parisot
* [Promets moi que ça ne fera pas mal](https://github.com/stevekane/promise-it-wont-hurt)
  un didacticiel interactif en français
  (`npm install -g promise-it-wont-hurt && promise-it-wont-hurt -l fr`)
* [promise-cookbook](https://github.com/mattdesl/promise-cookbook/blob/master/README.md)
  en anglais
* [JavaScript Promises: an Introduction](https://developers.google.com/web/fundamentals/getting-started/primers/promises)
  en anglais
