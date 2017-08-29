---
title: "Ne passons pas à côté des choses simples"
description: "Générer des sites performants et sécurisés, c'est possible sans base de données et sans serveur."
image: /assets/img/presentations/ne-passons-pas-a-cote-des-choses-simples/galets.png
last-modified: 2016-12-09 12:56:27 +0200
---

Nous avons eu le plaisir avec Bertrand de pouvoir donner une conférence à [Paris Web 2016](http://www.paris-web.fr/2016/) sur la disparition progressive des serveurs au profit de services, d'APIs, de JavaScript côté client, de plateformes d'intégration continu et de générateurs de site pas forcément si statiques que ça. L'écosystème actuel permet aux développeurs front-end, aux _freelance_, de passer plus de temps sur la conception, l'UX, la performance et la qualité que sur de la maintenance. Dites adieu à vos serveurs et rejoignez [la mouvance statique]({% post_url 2016-03-08-les-gestionnaires-de-contenu-statique %}).
{: .lead }

Sous forme d'un dialogue et à partir d'un cas réel, nous avons essayé de rendre la présentation aussi interactive que possible, c'était un premier essai, nous ferons mieux la prochaine fois.

{% include video.html url="https://player.vimeo.com/video/194192874" width="640" height="360" %}

[Les slides de présentation](/presentations/ne-passons-pas-a-cote-des-choses-simples/) de la mini-conférence

## Transcript de la conférence

> Frank : Ben ouais, normalement je suis avec Bertrand, je sais pas où il est. Vous l'avez vu ? Ah !
>
> Bertrand : Excuse-moi, tu peux faire la conf tout seul s'il te plaît ?
>
> Frank : Ben non, on l'a préparé, on la fait à deux
>
> Bertrand : Je viens de recevoir un mail de mon client et là je peux pas… le serveur est tombé.
>
> Frank : Et il peut pas attendre quinze minutes ?
>
> Bertrand : Erreur MySQL, qu'est-ce que tu veux que je fasse ? Tu peux te débrouiller s'il te plait ?
>
> Frank : Euh ben…
>
> Bertrand : Je veux bien t'aider, mais je sais pas… qu'est-ce qu'on fait ?
>
> Frank : Non, on le fait, on le fait, on le fait.
>
> Bertrand: Ah…bon d'accord. Qu'est-ce que c'est ton premier slide ?
>
> Frank : Ouais.
>
> Bertrand : Donc t'avais déjà tout prévu en fait.
>
> (rires)
>
> Frank : Ouais, y'a un petit problème. Ça arrive à tout le monde, même aux meilleurs.
>
> Bertrand : Alors est-ce qu'il y a d'autres personnes à qui c'est arrivé ce genre d'erreur ?
>
> Là c'est en prod, mon client, putain…
>
> C'est quoi ça, c'est du WordPress ?
>
> Frank : Oui je crois, ce sont des gens spécialisés dans la performance mais ils utilisent encore un backend, du coup des fois ils sont dépendants du backend.
>
> Bertrand : Frank, t'as oublié de flouter la boîte.
>
> (rires)
>
> Bertrand : T'as des solutions à ça c'est ça ?
>
> Frank : Ben je sais pas, ça te prend du temps toi chaque semaine de répondre à ces appels là ?
>
> Bertrand : C'est pas chaque semaine, mais bon ça arrive, c'est vrai que bon c'est chiant. Franchement c'est pas mon métier moi, sys admin, les erreurs MySQL, les serveurs qui plantent.
>
> Frank : Toi t'es intégrateur, c'est ça ?
>
> Bertrand : Moi je préfèrerai que ça se passe pas quoi. Pour des petits projets comme j'aime hein.
>
> Frank : Et toutes les mises à jour c'est toi qui fait tout ça ?
>
> Bertrand : Non, j'ai des développeurs, mais des fois ils sont en vacances donc c'est un peu chiant quoi.
>
> Frank : Ils prennent des vacances les développeurs ? D'accord, OK.
>
> (rires)
>
> Frank : Et quand l'équipe de Drupal, elle te dit qu'il y a un patch de sécurité à appliquer dans les 7 heures sinon ton site il est hacké, tu fais quoi en fait ?
>
> Bertrand: Ben moi je sais pas en fait, je me lève, je regarde le site, s'il est pas hacké je me rendort
> (rires)
> Frank : Bon, vous avez compris, 70% des sites sous WordPress sont vulnérables, des millions de sites sous Drupal ont aussi ces problèmes là. Aujourd'hui on est en 2016, la stack LAMP c'était bien dans les années 2000, aujourd'hui le Web a changé, les navigateurs ont changé, JavaScript a évolué et on peut vraiment dans beaucoup de cas se passer de backend et ne plus dépendre de serveur, de requêtes etc. Il y a tout le mouvement Serverless, Christophe en parlait hier avec Amazon Lambda. On est plus obligé de travailler comme ça, pas pour tous les projets, mais une grande partie, j'ai discuté avec certaines personnes qui pensent que 80% des sites ne devraient pas dépendre d'une base de données. Donc aujourd'hui il y a vraiment d'autres solutions.
>
> Bertrand : Explique nous, _NoBackend_, c'est quoi le principe fondamental ?
>
> Frank : En _NoBackend_, tu n'as plus de base de données, donc tes données il faut que tu les aies en local sous forme de fichiers.
>
> Bertrand : Des fichiers ?
>
> Frank : Des fichiers YAML, JSON…
>
> Bertrand : Ça va on a perdu personne là ? Y'a pas Markdown, un truc comme ça ?
>
> Frank : Ça c'est pour les contenus texte ouais.
>
> Bertrand : OK, c'est bon ?
>
> Frank : Tout le monde connait ?
>
> Bertrand : Je sais pas ils ont pas l'air. Vous chercherez la doc.
>
> Frank : Donc voilà, c'est des formats très populaires maintenant.
> Et du coup si tu découples ton front de ton back, tu vas pouvoir héberger tes fichiers générés sur un CDN, ça va être rapide.
>
> Bertrand : CDN ?
>
> Frank : Du coup t'auras juste une connexion entre le navigateur et le CDN et on l'a vu tout à l'heure avec Bruce, si tu ajoutes (de quoi en faire) des [Progressive Web Apps]({% post_url 2016-06-28-que-sont-les-progressive-web-apps %}), t'as un site qui dépote, ça va super vite.
>
> Bertrand : OK, je vois, donc ce que t'es en train de me dire c'est qu'il y a une séparation entre le front et le back ? Mais c'est quoi l'intérêt finalement ?
>
> Frank : Ben l'intérêt c'est que c'est performant, si t'as un pic de visites comme ça avait l'air d'être le cas chez Dareboost la dernière fois, y'aura pas trop de soucis, c'est des réseaux de serveurs qui sont fait pour ça et puis c'est moins cher, car l'hébergement faut le payer, le maintenir, tout ça, donc là tu t'enlèves cette problématique.
>
> Bertrand : Ah oui tu m'intéresses là. Quand tu parles performance, moi j'essaie d'en faire un petit peu…  Je vais parler un peu de moi…
>
> C'est vrai qu'à la base je suis intégrateur, du coup je me suis mis aux générateurs de sites statiques pour faire des prototypes. J'étais comme quelqu'un qui débute, on a ses fichiers HTML d'un côté, ses fichiers CSS, on fait des gabarits, on les livre avec des -v1, -v3 etc.
>
> Les générateurs de site statique c'est pratique pour pouvoir générer des gabarits facilement, on peut mutualiser les gabarits et en utilisant du vrai contenu. Alors ça peut-être du faux contenu, mais en tout cas on utilise des vrais fichiers. Des vrais fichiers c'est comme on l'a dit du Markdown, des fichiers avec du contenu à peu près mis en forme, normalement très bien mis en forme et eventuellement des fichiers YAML. Donc ça permet quand on fait des gabarits d'avoir du vrai contenu et de les mettre, de développer ses sites et ses gabarits de façon à la présenter de façon cohérente. Et moi ça me permet de développer des modules CSS, enfin des modules, on devait pas en parler hein ? En tout cas de développer mes librairies, mes fichiers CSS et de progresser à ce niveau là, de ne plus être dans la maintenance de mes gabarits. Et puis j'ai progressé et j'ai fait pas mal de choses dessus.
>
> Frank : OK, du coup tu génères le site. Et tu génères de la doc un petit peu des choses comme ça ?
>
> Bertrand : Ben oui, c'est exactement ça oui, ça me permet de suivre toute la mouvance de la documentation. Je sais pas si vous avez vu aujourd'hui, les sites, les équipes, les entreprises centralisent leurs développements autour de la documentation. Il y a beaucoup de métiers de l'entreprise qui travaillent autour de la construction de la documentation. Ah oui t'as un exemple en plus.
>
> Frank : Oui, voilà, j'en ai pris un, y'en a plein, tout le monde fait ça aujourd'hui, en tout cas beaucoup de monde, donc là c'est Mailchimp qui a expliqué il y a pas longtemps comment ils avaient produit toute leur doc, tous leurs guides, ils en ont beaucoup en ligne. Et donc ça c'est généré, leur site aussi. Leur site front si on regarde bien c'est que des contenus, c'est de la présentation de produit, c'est une page de prix, c'est de la doc, c'est un bloc, donc c'est que du statique, y'a pas besoin de serveur pour ça.
>
> Bertrand : Ça ressemble à un proto quoi.
>
> Frank : Oui. Et après tu as l'appli qui est à part elle.
>
> Bertrand : Et c'est les seuls à faire ça ?
>
> Frank : Alors la question qu'on pourrait se poser, c'est que OK c'est bien joli, c'est des gens chez Mailchimp, ils ont des super équipes tout ça, mais bon ton client si je dois le mettre là dessus, il fait comment pour rajouter des contenus ?
>
> Bertrand : Bon tu commences à me faire chier avec tes questions, mais alors bon la contribution, effectivement, c'est un gros problème. On utilise parfois des systèmes de backend pour que le client il puisse éditer. Mais bon la contribution au final, quand on utilise des générateurs de site statique, bah on est pas trop limité. Moi par exemple y'a des maquettes, j'ai travaillé avec plusieurs métiers et au bout d'un moment ça c'est transformé en site et puis il fallait intégrer du contenu, ben on a dit au client d'aller modifier le contenu, ben directement sur le dépôt quoi.
>
> Frank : OK. Sinon ce que tu peux faire, c'est utiliser ce qu'on appelle un _headless_ CMS, c'est un CMS qui va pas être chargé de tout, il va juste être chargé de la partie gestion de contenus, tu vas pouvoir ensuite aller consommer ces contenus via une API et du coup pas de problème, tu peux générer ton site, le déposer et à chaque fois que tu vas avoir un contributeur qui va utiliser cet outil, ça va générer une nouvelle version du site, qui sera mise en production.
>
> Bertrand : D'accord, ça m'a l'air puissant ton truc.
>
> Frank : Quelques exemples, ContentFul, Prismic…
>
> Bertrand : Mais il est où le contenu, il est sur le dépôt ?
>
> Frank : Ah oui c'est vrai on l'a pas dit, merci.
>
> Bertrand : Je pense qu'ils ont rien suivi là.
>
> Frank : Y'a Christophe (Porteneuve) dans la salle, je pense que c'est évident pour tout le monde, tout le monde utilise Git aujourd'hui, enfin je sais pas… Tes contenus sont versionnés.
>
> Bertrand : Il faudrait qu'ils utilisent des générateurs de site statique aussi.
>
> Frank : Donc ce qu'on voit aujourd'hui, y'a des APIs, y'a de plus en plus de CMS en ligne qui existent, où vous allez vous brancher sur votre dépôt GitHub ou ce que vous voulez et vous allez avoir une interface… j'ai testé avec Nathalie (Rosenberg), il y a quelques jours, on a fait une revue de l'utilisabilité de tout ça, ça se prend en main en quelques minutes pour quelqu'un qui vient du CMS. Si vous comparez Drupal ou Jahia à ça, c'est beaucoup plus simple, il y a moins de boutons, vous avez juste les articles à éditer.
>
> Bertrand : C'est surtout qu'on édite que du Markdown, éventuellement quelques fichiers YAML, en fait la complexité des interfaces est très limitée quoi.
> On a un fichier Markdown, dans un fichier Markdown on peut ajouter des meta, donc on a peut-être quelques champs pour utiliser des meta, mais d'un site à un autre, c'est toujours la même chose et les interfaces sont très simples. Les rédacteurs s'y retrouvent du coup.
>
> Frank : Oui parce que pour eux, c'est un niveau au dessus, ils vont pas faire `git commit`, machin tout ça, donc c'est transparent, ils font sauvegarder, ça sauvegarde dans Git, tout ça c'est des APIs qui communiquent entre elles, ce qui importe pour l'utilisateur, c'est que pour lui ça ne change pas sa manière de contribuer.
>
> Bertrand : En gros, tout le monde travaille un petit peu sur le même dépôt quoi ?
>
> Frank : Oui, après t'as tes branches tout ça, tu peux faire ce que tu veux ouais. Ce qu'on voit, c'est que les APIs aujourd'hui vont permettre de connecter plein de services, elles sont partout. On peut faire plein de choses avec. Forcément des fois, par exemple pour les commentaires, Thibault disait hier que Disqus c'est peut-être pas la panacée…
>
> Bertrand : Oui, il faut réfléchir à la conception.
>
> Frank : Il faut inventer aussi des choses dans le monde open-source, il manque encore peut-être des services qui ne soient pas intéressés par nos données.
>
> Bertrand : Des dépôts de données qu'il faut peut-être créer et y brancher des APIs.
>
> Frank : Moi ce qui m'intéressait aujourd'hui c'est de casser l'image du site statique à l'époque de Daniel Glazman ou du W3C en 1995. C'est plus du tout la même chose, en fait vous avez compris, c'est vraiment un workflow de développement que tous les développeurs utilisent en fait aujourd'hui, mais aujourd'hui l'enjeu, c'est d'emmener toute l'équipe avec nous, que ce soit les designers, les contributeurs, pour que ce workflow, qui est éprouvé, qui est mature, qui est professionnel, qui a plein de qualités, à tous les niveaux, que ce soit au niveau de Git dès le début ou à la fin quand c'est servi en front, l'idée c'est d'adopter ce truc là quand c'est pertinent, parce qu'encore une fois il y a plein de sites (pour lesquels le statique n'est pertinent).
>
> Donc plutôt que d'appeler ça du statique, il y en a qui appelle ça la [JAMStack]({% post_url 2016-05-21-la-JAMStack %})… j'ai perdu ma slide, ah la voilà…
>
> Bertrand : Juste pour revenir sur la maturité, tu me disais que tu voulais faire référence à la conférence de Christophe (Porteneuve), qu'il y avait beaucoup de serveurs en node, que ça répondait vite et que c'est parce qu'il y a ça aussi qu'on a ce système d'APIs…
>
> Frank : Ouais, mais ce qui m'intérresse, c'est que plus que le générateur en lui même —  il y a en plein, il y en a des centaines — ce qu'il faut bien voir c'est tout l'écosystème complet, avec les navigateurs qui ont évolué, JavaScript côté client qui est hyper performant aujourd'hui, toutes les APIs à disposition et tout le côté garder la main sur ses contenus et pouvoir servir par exemple votre site web mais aussi vos applis mobiles ou autre chose. Tout cet écosystème là il est assez intéressant, je sais pas si Tim (Carry) est dans la salle - bonjour - Tim a fait [un petit cadeau à l'équipe de Paris-Web](https://pixelastic.github.io/parisweb/) et il a donc utilisé ces technos là, il a été parsé les sites des anciennes  éditions, il a tout récupéré dans du JSON et grâce à un générateur et une API, celle d'Algolia, qu est donc une API qui permet de rechercher sur le site, alors j'ai pas internet, on va pas pouvoir le voir, mais vous voyez juste que les résultats c'est en millisecondes, donc ça va c'est assez rapide, si vous avez joué avec déjà, vous avez vu que c'est extrêment performant et qu'avec la recherche pour le coup, vous avez vraiment quelque chose qui est dynamique côté client, y'a aucun serveur là-dedans, y'a rien du tout.
>
> Bertrand : Ce qu'il faut préciser aussi, c'est qu'il va chercher un JSON ou il crée un JSON, donc ce JSON soit il va le chercher de façon dynamique, soit éventuellement au moment du _build_s du site, il va aller le prendre et le poser sur son serveur, ce qui fait que là on va aller chercher un JSON en local et là c'est hyper rapide et on a que du statique dans le sens où le contenu bouge plus quoi.
>
> Frank : Voilà, donc j'ai été cherché la définition de simple dans le dictionnaire, dans le Larousse, pas dans le petit Robert, simple c'est pas facile, c'est pas la même chose, c'est des fois compliqué à mettre en place, c'est beaucoup d'habitudes à prendre et de changement et en fait ce qu'on voit ce sont des petits éléments organisés de manière assez claire, avec un périmètre, un scope qui est limité et du coup c'est bien parce que lorsque vous devez intervenir quelque part, vous n'avez plus tout l'ensemble qui est touché, vous avez juste une petite partie, alors sans parler de microservices, c'est un peu la même idée, c'est comme dans UNIX si vous voulez, quand vous commencez à utiliser `ls`, plus une autre commande, plus `grep`, plus `machin`, vous obtenez quelque chose de très puissant, c'est la même chose là, avec tout ce qu'on a vu là, ça fait un _workflow_ assez solide.
>
> Bertrand : _Workflow_, c'est un mot anglais, vous chercherez on a pas mis la définition.
>
> Frank : Donc retenez, si vous entendez site statique, essayez de vous enlever le côté statique de la tête, statique c'est juste qu'à chaque génération le site est le même pour tout le monde et que ça va pas bouger (jusqu'à la prochaine génération).
>
> Bertrand : Voilà c'est ça. Et t'as oublié de dire tout à l'heure, parce que moi je reviens à mon problème de base de données, c'est que si la base de données elle plante, ben le jour où je vais la remettre, si la base de données est plantée, faudra que je retrouve une sauvegarde, alors que là le contenu (il est versionné).
>
> Frank : Alors j'ai pas montré mais aujourd'hui, il y a des services comme [Netlify](https://www.netlify.com) et autres qui comme c'est branché avec des APIs de GitHub, si jamais il y a un problème à la génération, ça peut arriver je sais pas, t'as un petit bouton rollback, hop tu reviens à la version d'avant comme qui rigole quoi.
>
> Bertrand: Et ça pour les gens qui sont pas sysadmin, si c'est des sites que je peux faire, ben c'est hyper pratique, je m'enlève quand même une sacrée épine du pied quoi. Ce qui permet que je fasse cette conférence notamment.
>
> Frank : Donc soit vous avez des DevOps dans les équipes et c'est super car c'est des profils qui connaissent tout ça par cœur, qui vont pouvoir facilement relier tous ces services, soit aujourd'hui on voit que ça n'arrête pas de se batailler sur tous ces services là, qui vont être des services en front pour faire ça. Après niveau générateurs en eux-mêmes, il y en a plein comme j'ai dit, donc selon le milieu d'où vous venez, l'écosystème que vous connaissez, vous pouvez partir sur Ruby, Go, y'en a même en PHP, vous avez pas mal de choses en JS aussi, vous avez aussi des générateurs aujourd'hui qui utilisent JavaScript côté client comme Gatsby ou Phenomic, qui eux carrément vont embarquer des composants React, pour faire des éléments dynamiques dans la page, donc on est très loin du statique, on est sur quelque chose de très très dynamique.
>
> Bertrand : La logique c'est que la technologie qu'on va choisir sera liée au proto qu'on devra faire, parce qu'on va être très proche de la technologie…
>
> Frank : Donc là on a terminé, on pourrait croire qu'on a moins de possibilité mais en étant ingénieux, en allant chercher des données, on peut faire des chouettes trucs, on peut expérimenter plein de choses grâce à Git et puis surtout ce qui est intéressant, finalement ce qu'on manipule c'est du HTTP avec les APIs, on revient vraiment sur notre métier, pour le front c'est pas mal, ça permet de se concentrer uniquement sur le contenu et la partie front, sans plus s'embêter avec le backend, on a besoin quand même de développeurs back, ils peuvnt se transformer un petit peu en DevOps, ils peuvent faire pas mal de choses. Du coup moi je sais pas toi Bertrand, t'es un peu stressé quand ton client t'appelle mais sinon pour le reste t'as l'air (plutôt serein)…
>
> Bertrand : Ben disons qu'on a eu la motivation de faire cette conférence et de passer un petit peu une envie, c'était le but, bon on est pas trop joyeux là mais c'est vrai qu'on a beaucoup de plaisir à travailler et à travailler avec d'autres personnes car c'est facile de les faire rentrer dans les projets ou dans la contribution, alors bon on bidouille hein, c'est le web, mais bon on touche à la matière, on manipule la matière, on retrouve beaucoup de joie à faire des sites et à faire du web en fait finalement et à pas s'embêter avec de la maintenance de choses qui sont inutiles par rapport à ce qu'on fait, c'est à dire juste souvent et très souvent, juste publier du contenu simple, genre pages, articles etc.
>
> Frank: OK. Donc on a pas le temps pour les exemples, on pourra en parler après.
>
> Bertrand : On a pas le temps pour les exemples, on va prendre 5 minutes quand même…
>
> Staff : Non.
>
> Bertrand ; Bon qui veut des exemples ?
>
> (rires)
>
> Frank : Y'en a plein c'est pas grave.
>
> Bertrand : Juste par les exemples on voulait dire qu'i y avait beaucoup d'entreprises, enfin c'est difficile quand on vous montre un site de savoir s'il est généré par un générateur statique ou un site dynamique, parce que c'est les mêmes, on fait exactement la même chose, il y a les mêmes possibilités, ça reste du web et y'a énormément d'entreprises qui aujourd'hui y passent, par simplicité, par facilité, en tout cas par choix aussi de fonctionnement interne.
>
> Frank : Voilà.
>
> Staff : Merci à vous deux.
>
> (applaudissements)


{% include figure.html url="/assets/img/2016/09/frank-paris-web-2016.jpg" description="<a href=\"https://www.flickr.com/photos/franck-paul/30260452940/in/album-72157675684020515/\">Photo de Franck Paul</a>" %}

Il était difficile de couvrir en 15 minutes un sujet aussi vaste que les processus modernes de développement et de déploiement, ainsi que tout l'écosystème actuel à disposition pour servir des sites beaucoup plus performants et sécurisés.

Avec [Bertrand](http://bertrandkeller.info/), nous voulions surtout partager nos retours d'expérience et le plaisir retrouvé que nous avions à apprendre et à concevoir itérativement des sites de qualité où le contenu est roi. Donner envie aux développeurs front de reprendre la main sur leur code tout en proposant une expérience optimale aux utilisateurs.

C'était la mission impossible que nous nous étions fixés en proposant une [mini-conférence à Paris Web 2016](https://www.paris-web.fr/2016/conferences/ne-passons-pas-a-cote-des-choses-simples.php). La bonne blague. Donc pour ne pas rester sur la frustration de n'avoir pas pu traiter ce sujet plus en détail, voyant bien que @m4dz agitait frénétiquement le carton indiquant la fin du temps qui nous était imparti, je vous propose de revenir rapidement si vous le voulez bien sur les problèmes récurrents que nous pouvons rencontrer aujourd'hui en production et comment en utilisant des process adaptés, ils peuvent aisément être résolus.

Il arrive bien souvent qu'en cas de pic de trafic, un site web ne réponde plus car le serveur ne tient pas la charge à cause d'accès concurrents trop importants à la base de données. Il est également courant d'être exposé à des failles de sécurité quand on ne met pas à jour rapidement son logiciel de gestion de contenu par exemple. Dès que vous faites le choix d'utiliser une stack comme LAMP (Linux, Apache, MySQL, PHP), vous choisissez également de vous engager à assurer ou à déléguer la maintenance serveur à un prestataire.

Dans le même temps, cela fait déjà [au moins huit ans](https://www.paris-web.fr/2008/-samedi-15-novembre-technique-.html#hcalendar-Paris-Web_2008-15_novembre_2008-atelier-performance_client) que l'on sait que le temps de chargement d'un site web est un facteur crucial en terme d’utilisabilité, de retention et de taux de conversion. C'est encore plus vrai de nos jours maintenant que le mobile est devenu le périphérique d'accès principal à Internet. Ce n'est pas [Bruce Lawson](https://www.paris-web.fr/2016/conferences/www-world-wide-web-not-wealthy-westerners-web.php) qui me contredira.

Les sites qui se contentent d'afficher des contenus, que ce soit des articles de blog, des présentations de produit, des documentations en ligne peuvent depuis déjà une dizaine d'année utiliser des [générateurs de site statique](/2016/03/08/les-gestionnaires-de-contenu-statique/) et les faire héberger sur des CDN afin de limiter les temps de latence du réseau.

Avec ces générateurs, plutôt que d'être enfermées dans des bases de données, les données sont stockées sous forme de fichiers texte dans des formats lisibles et facilement éditables. [Markdown](http://daringfireball.net/projects/markdown/) est le format qu'on rencontre le plus souvent pour stocker les textes et pour des données structurées on fera appel à [JSON](http://json.org/json-fr.html) ou [YAML](http://www.yaml.org/spec/1.2/spec.html#Preview).

Les générateurs vont nous permettre de concevoir des modèles de pages pour y insérer nos contenus et nos données. Nous obtiendrons en sortie un site, composé de pages web au format HTML, de CSS et de JavaScript si besoin. Une fois notre site généré, il ne reste plus qu'à le déposer sur un serveur HTTP.

On revient à une communication simple entre un navigateur et un serveur HTTP, qui va pouvoir facilement mettre en cache les contenus, puisque ce sont les mêmes qui sont servis à tout le monde, ce qui entraîne automatiquement un gain de performance drastique. Si vous avez mis en place HTTPS c'est encore mieux - merci [Let's Encrypt](https://letsencrypt.org/) - vous pourrez y ajouter un *service worker* pour faire du *offline-first* et transformer votre site en [Progressive Wep App](/2016/06/28/que-sont-les-progressive-web-apps/). [Hubert Sablonnière](https://www.paris-web.fr/2016/conferences/progressive-web-apps-le-futur-du-web-arrive.php) vous en parlera bien mieux que moi, mais là il est parti au ski avec ses amis.

Dans ce scénario donc, la génération des pages est complètement distincte de l'hébergement. En séparant ces deux problématiques, on évite tous les problèmes mentionnés précédemment. Au final, nous obtenons un site web beaucoup plus performant, même en cas de fort trafic, d'autant plus facilement reproductible s'il est hébergé sur un réseau de publication de contenu (CDN). On évite par la même occasion des frais coûteux de maintenance et le risque d'intrusion ou celui de voir son site défiguré.

Ce mode de fonctionnement présente donc de sacrés avantages pour des frais minimes. C'est pour cette raison que des sociétés comme Mailchimp l'ont adopté[^1] depuis plusieurs années, que ce soit pour présenter leur offre, fournir de la documentation à leurs clients ou aux développeurs.

Si ce workflow de développement et de déploiement est optimal, qu'en est-il de celui des contributeurs, ceux qui doivent ajouter et mettre à jour les contenus ? Ils sont maintenant habitués à des interfaces utilisateurs de saisie, qui leur permettent d'exécuter ces tâches de manière intuitive.

Si les générateurs de site statique sont performants, c'est que ce sont pour la plupart des outils en ligne de commande, facilement exécutables dans n'importe quel environnement. Pour palier à ce manque, il existe néanmoins des solutions et elles sont logiquement de plus en plus nombreuses depuis quelques années, puisque la popularité de ce qu'on appelle désormais le *statique* est grandissante.

La première solution est de passer par un [Headless CMS](https://css-tricks.com/what-is-a-headless-cms/) chargé de s'occuper uniquement de la manipulation des contenus, mais pas de leur affichage côté client. Encore une fois on partage les responsabilités, chacun son rôle. Des services comme [Contenful](https://www.contentful.com) ou [Prismic](https://prismic.io/) fournissent aux développeurs des APIs qui permettent ensuite de récupérer vos contenus. Des _headless CMS_, on devrait en voir de plus en plus maintenant que les frameworks JS comme React s'occupent des vues côté front. Drupal a même publié un [manifeste](https://github.com/davidhwang/horseman#a-manifesto) où il est écrit qu'ils veulent rester le backend de prédilection de ces frameworks côté client, qui sont le futur du web.

La deuxième solution est de passer par un service en ligne qui se connectera à votre dépôt de code et vous servira d'interface d'édition de vos contenus. Il en existe plusieurs[^2], je ne vais pas tous les énumérer.

Ce qu'il est important de retenir, c'est que cela permet à des personnes qui n'ont aucune idée de ce qui se trame dessous, de pouvoir continuer à avoir une expérience utilisateur d'édition de contenus, similaire à celle qu'ils connaissent déjà dans des CMS comme Wordpress ou Drupal. Les interfaces sont même pour le moment plus simples à prendre en main, car elles proposent moins d'options, donc moins de charge cognitive.

Il n'y a pas que dans les entreprises de logiciels, où les rédacteurs sont bien accompagnés par les équipes de développeurs, que ce genre de workflow est mis en place.

[Certains éditeurs ont franchi le pas](http://blogs.getty.edu/iris/an-editors-view-of-digital-publishing/) avec succès, car l'expérience d'écriture avec Markdown, l'apport du versionnement pour les relectures et les corrections de manuscrits alliés à la possibilité de générer facilement différents formats de fichiers pour les livres électroniques en font un [workflow de travail](/2016/08/28/traitement-de-texte-multicanal/#4-un-processus-de-publication-moderne) idéal pour l'édition et la publication.

Ces processus de travail, les développeurs les connaissent de mieux en mieux, d'abord avec l'avènement de [Git](https://git-scm.com/book/fr/v2), créé il y a maintenant dix ans et la popularité grandissante de plates-formes de développement collaboratif comme GitHub, GitLab ou Bitbucket basées sur le versionnement de fichiers.

Parallèlement à ces évolutions, nous avons pu assisté également à la mise à disposition d'APIs, toujours plus nombreuses et plus riches. Elles facilitent la réutilisation de données, en les rendant accessibles via des requêtes HTTP. Il est aujourd'hui trivial de récupérer du JSON avec ES2015 comme nous l'avons vu le lendemain en atelier. Promis.

Afin d'illustrer tout cela, comme nous étions à Paris Web, j'ai choisi de présenter une preuve de concept ingénieuse, développée par [Tim Carry](http://www.pixelastic.com/), évangéliste chez Algolia, qui propose une API de recherche très performante pour vos documents. Tim a ensuite utilisé [Brunch](http://brunch.io/) pour générer ce qu'on appelle dans notre jargon une *single page app*, une page dont le côté dynamique est entièrement assuré par JavaScript dans le navigateur. C'est plutôt cool le développement web en 2016.

Tim a décidé de faire un cadeau à Paris Web en proposant un moteur de recherche qui permet d'accéder à touts les supports de conférences des éditions passées. Tim a donc commencé par récupérer les données des 11 éditions de Paris Web au format JSON pour pouvoir ensuite les indexer à l'aide d'Algolia. Ajoutez une pincée de JavaScript et quelques gouttes de CSS et vous obtenez une application web tout ce qu'il y a de plus dynamique et très performante. [Jugez-en par vous-même](https://pixelastic.github.io/parisweb/). C'est instantané ou presque, de l'ordre de la milliseconde.

Pas de backend, des données versionnées et stockées dans un format standard, une API de qualité, un générateur pour assembler le tout, on pousse tout ça gratuitement sur GitHub Pages et hop le tour est joué.

Afin de mieux décrire ce genre de procédé, Mathias Biilmann le fondateur de Netlify, une plateforme d'hébergement et de déploiement automatisé de sites *statiques* a proposé le terme de [JAMStack](http://jamstack.org/fr/) lors d'une *Smashing Conf* à San Francisco. JAM pour **JavaScript, APIs and Markup**. Cet acronyme liste une partie des ingrédients de la recette qui permettent de générer des sites performants et sécurisés. Peu importe le nom qu'on lui donne, l'important c'est le résultat, ça booste. Alors est-ce si compliqué que cela ?

Si l'on regarde la définition du mot **simple** dans le Larousse, on peut y lire :

> Simple : qui est constitué d'un **petit nombre d'éléments qui s'organisent de manière claire**, par opposition à complexe.

Cela décrit assez bien le processus de conception des applications web d'aujourd'hui. Chaque élément de la chaîne a une responsabilité et un périmètre bien défini et chacun fait ce qu'il a à faire. Nous sommes en opposition avec une application monolithique complexe, qui cumule toutes les responsabilités.

Vous avez donc compris que ces sites ne sont donc pas forcément si *statiques* que ça. Forcément, le web a beaucoup évolué depuis les premières page HTML que nous mettions en ligne avec un logiciel FTP, les navigateurs sont devenus très performants, [JavaScript est désormais partout](https://www.paris-web.fr/2016/conferences/nodejs-partout.php), comme se tue à le répéter Christophe Porteneuve depuis plusieurs années déjà. Le versionnement des projets facilite grandement la collaboration et l'automatisation des processus de déploiement. Nous avons pu le constater lors de [la présentation de David Sferuzza](https://www.paris-web.fr/2016/conferences/le-deploiement-manuel-non-merci-jessaie-darreter.php).

Même si on ne développe pas de *Single Page App* comme Tim, l'adoption d'un workflow similaire pour la génération de sites de contenus est une aubaine pour les développeurs et designers web. Ils ont la possibilité de se concentrer uniquement sur leur domaine de prédilection. C'est également un très bon terrain de jeu et d'expérimentation pour s'amuser à utiliser des APIs, récupérer des fichiers JSON, moduler des données comme bon nous semble à l'aide du sucre syntaxique qu'offre YAML et utiliser le langage de *templating* de son choix pour façonner son code à la manière d'un artisan.

Avoir le choix dans les outils, surtout quand ils sont aussi nombreux, c'est toujours un dilemme, mais en ce qui concerne les générateurs, le choix sera de toute façon influencé par votre expérience passée, l'écosystème que vous maîtrisez le mieux.

Ne vous inquiétez pas on trouve des générateurs dans tous les langages : en Ruby, en JS, en Go, en Python et même en PHP - [désolé Brice](https://twitter.com/briceatwork/status/781770722846703616). Vous avez aussi pas mal de choix au niveau du système de *templating*, le mieux est encore d'aller trouver votre bonheur sur [StaticGen](https://www.staticgen.com/).

Vous pouvez commencer par identifier un *content-driven* projet comme un blog ou un site produit ou institutionnel. Vous pouvez aussi décider d'utiliser des générateurs dès la phase de prototypage comme le fait [Bertrand](http://bertrandkeller.info/). Il est important de ne laisser personne à la traine, de prendre le temps de former les designer web à comprendre la logique puis à utiliser des interfaces graphiques pour Git comme [GitKraken](https://www.gitkraken.com/) — qui a eu la très bonne idée d'ajouter un bouton *annuler*. Un petit CTRL-Z et c'est reparti. Quand on a le droit à l'erreur, ça fait toujours moins peur.

Ce qui compte avant tout c'est de **retrouver du plaisir et de la sérénité**. Dans son livre *[La vérité sur ce qui nous motive](https://www.amazon.fr/vérité-sur-qui-nous-motive/dp/208137952X/)*, Daniel Pink décrypte les trois éléments clés de la motivation : **l'autonomie**, **l'envie de progresser** dans son domaine pour devenir bon, de maîtriser son art et enfin la finalité et **le sens de notre action**.

Ce workflow **simple**, n'est pas synonyme de *facile* et rassemble ces trois composantes. C'est surement pour cela qu'il est devenu celui de nombreux projets open-source, notamment de documentation ou de présentation de produit. Si le logiciel open-source montre toujours la voie, il ne faut pas très longtemps pour que les équipes les plus chevronnées emboitent le pas.

Les services innovation de l'État français utilisent par exemple ces outils sur des projets comme [https://beta.gouv.fr/](https://beta.gouv.fr/).

De plus en plus d'agences privilégient aussi ces process pour leurs clients, notamment pour des sites soumis à de forts trafics.

C'est par exemple le cas pour le site de campagne d'[Hillary Clinton](https://www.hillaryclinton.com/), le site de l'ICIJ à l'origine des [Panama Papers](https://panamapapers.icij.org/). En France, mis à part des blogs, je ne sais pas si beaucoup d'agences l'utilisent pour des projets aussi importants.

Quand Christophe Porteneuve m'a dit qu'il lançait [le nouveau site de sa société](http://beta.delicious-insights.com/), je n'ai pas été étonné qu'il ait utilisé [Middleman](https://middlemanapp.com/), un générateur de site statique en Ruby. Même chose pour [Cedexis](http://www.cedexis.com/), dont la performance est le cœur de métier et qui utilise aussi Middleman pour son site.

Certains générateurs comme Gatsby ou Phenomic utilisent nodeJS et React pour embarquer des composants dynamiques dans les pages, c'est une manière hybride de concilier les contenus statiques et le développment d'application web.

Il semblerait donc que ce soit pour le moment cantonné à quelques experts - j'adorerai qu'on me prouve le contraire - mais je ne doute pas que la France rattrape ses fameux cinq ans de retard très bientôt.

Les [exemples dans les slides de la conférence](/presentations/ne-passons-pas-a-cote-des-choses-simples/) mentionnent des sites très bien conçus comme celui de l'agence [Instrument](http://www.instrument.com/), qui a notamment été commissionnée pour la conception [https://design.google.com/](https://design.google.com/). Il me semble que c'est Nanoc qui a été utilisé sur ce projet.

Brad Frost est développeur front et utilise lui aussi [Jekyll](http://jekyllrb.com/) pour générer la documentation de son projet [PatternLab](http://patternlab.io/). Les intégrateurs, UX designers et autres développeurs front devraient donc s'intéresser selon moi de plus près à ces outils. Non seulement, car ils savent suffisamment s'effacer pour vous laisser travailler la matière première des technos web, mais parce qu'ils sont aujourd'hui la meilleure réponse à un web plus performant. Pourquoi veut-on aller si vite ? Ça c'est une autre question.

Enfin voilà, [le message que nous souhaitions faire passer avec Bertrand](http://bertrandkeller.info/2016/10/04/ne-passons-pas-cote-choses-simples), c'est que même si l'écosystème n'est peut-être pas encore aussi riche que celui des CMS dont la conception correspond à l'état du web de la fin des années 90, il y a surement des projets sur lesquels vous allez avant tout vouloir vous concentrer sur la stratégie éditoriale, l'expérience utilisateur et la performance. Cette _stack_, ce _workflow_, c'est la garantie de plus d'autonomie, de maîtrise et de sérénité de gagné. Je fais le pari que dans quelques années, ces solutions seront plus matures et plus répandues, ce n'est jamais gagné un pari vers le retour à la simplicité, mais a-t-on vraiment encore le choix ?

Si vous ne devez retenir qu'une chose de tout ça, c'est qu'en adoptant une démarche centrée utilisateur, vous pouvez vous faire plaisir, être créatif et faire de beaux projets. Sachez être pertinent le cas échéant : *Keep It Static Stupid*.

Pour les équipes, tout l'enjeu est de collaborer étroitement avec vos clients, vos collègues à l'appropriation collective du process que vous aurez mis en place, cela n'est pas forcément évident selon le contexte, ça demande de casser ces satanés silos, hérité du Fordisme. Vive les équipes multi-disciplinaires auto-organisées, ça marche dans les [Design Sprint chez les militaires](https://www.paris-web.fr/2016/conferences/quand-les-militaires-se-prennent-au-jeu-du-design-sprint.php), il n'y a pas de raison que ça ne marche pas pour votre équipe.

Je vous laisse méditer cette citation du penseur de la technique, [Jacques Ellul](https://fr.wikipedia.org/wiki/Jacques_Ellul)&nbsp; :

> La spécialisation doit-elle se payer par une parcellisation absurde où la connaissance se disloque en mille savoirs clos ?

Un grand merci à Bertrand Keller pour m'avoir incité à travailler sur cette conférence, la prise de parole en public est un exercice auquel je me prête peu, enfin sur scène, mais l'expérience s'est à priori révélée positive, si j'en crois les quelques retours que j'ai eu. On ne s'improvise pas acteur, ça a du se voir, mais nous avons essayé de proposer un format aussi vivant que possible.

Le fait qu'il y ait eu d'autres conférences sur l'importance de l'accès aux données, sur les nouvelles APIs qui permettent de mieux gérer le cache navigateur, le déploiement continu, des ateliers JS et Git, fait que notre sujet s'insérait vraiment bien au milieu du programme.

Je ne suis pas architecte logiciel, je ne prétend pas tout savoir sur ces sujets, simplement j'observe, j'expérimente et je tâche de comprendre comment améliorer nos façons de travailler.

J'aurais adoré pouvoir échanger avec des gens comme [Bastien Jaillot](https://twitter.com/bastnic) sur ce type de sujet avant de préparer cette intervention, j'espère que nous en aurons l'occasion. En tout cas si vous êtes architecte logiciel et que vous souhaite partager votre vision, lâchez-vous. Pour le moment, j'ai l'impression qu'on se dirige vers un meilleur découplage des responsabilités, mais sans pour autant non plus tout passer en microservices ou en architecture [serverless](http://martinfowler.com/bliki/Serverless.html).

Ce qui est bien avec le Web, c'est qu'on ne sait jamais trop comment ça va évoluer, c'est en perpétuel mouvement et le mouvement c'est la vie.

Un immense bravo à toute l'équipe de Paris Web qui accomplit un travail phénoménal chaque année, C'était un sans-faute pour moi niveau organisation, comme d'habitude.

Je profite de l'occasion pour vous donner rendez-vous à [Sud Web](https://sudweb.fr/) :sunny: en mai prochain, dont le site est bien entendu propulsé en *statique* :rocket:

---

[^1]: L'équipe de développeurs de Mailchimp a partagé son [retour d'expérience](http://devs.mailchimp.com/blog/how-we-built-the-mailchimp-content-style-guide/).

[^2]: Certains services comme [Siteleaf](https://www.siteleaf.com/) ou [CloudCannon](http://cloudcannon.com/) ne supportent que [Jekyll](http://jekyllrb.com/), [Forestry.io](https://forestry.io/) supporte aussi [Hugo](https://www.gohugo.io/), d'autres comme [DatoCMS](https://www.datocms.com/) sont plus agnostiques.
