---
layout: page
title: À propos
description: "Consultant web, relations développeurs, speaker, vulgarisation technique."
permalink: '/a-propos/'
seo:
  name: Frank Taillandier
  type: person
---

Depuis près de 20 ans, je suis de très près l'évolution du web, des technologies ouvertes et de ses métiers. J'aime partager mon savoir et contribuer à faire progresser les équipes.

J'aime avant tout participer à la conception de services utiles, dans le respect des standards et des bonnes pratiques. J'aime les sites simples, rapides, accessibles depuis n'importe quel périphérique, lisibles et surtout qui proposent du contenu ou un service de qualité.

Si vous aimez travailler en bonne intelligence, vous focaliser sur la valeur plutôt que les process, il y a de grandes chances qu'on s'entende bien.

Pour augmenter les chances de parvenir à de bons résultats je privilégie une démarche centrée utilisateur, un apprentissage permanent, le droit à l'erreur et une amélioration continue au sein d'équipes pluri-disciplinaires.

Je contribue modestement à [Jekyll](https://jekyllrb.com), le gestionnaire de contenus statiques, qui fait tourner ce blog. J'aime beaucoup [cette stack qui combine Markdown, YAML, JSON, JavaScript et des APIs externes]({% post_url 2016-05-21-la-JAMStack %}). Je vous invite à aller faire un tour sur [ JAMstatic](https://jamstatic.fr) si cela vous intéresse.

J'ai contribué à créer [Sud Web](https://sudweb.fr) avec des gens que [j'aime beaucoup]({% post_url 2017-05-21-sept-ans-de-sud-web %}). Nous avons réussi à partager une certaine vision de nos métiers à travers un cycle de conférences et d'ateliers autour des technologies Web et de ceux qui les utilisent au quotidien.

J'aime échanger et apprendre, c'est pourquoi j'organise les [Aperoweb toulousains](http://toulouse.aperoweb.fr) et participe régulièrement à des meetups locaux.

Vous pouvez me laisser un message via le formulaire ci-dessous ou [via Twitter](https://twitter.com/{{ site.twitter.username }}).

<form class="contact" name="contact" netlify-honeypot="bot-field" action="/" netlify>
  <div class="hidden">
    <label>Don’t fill this out: <input name="bot-field"></label>
  </div>
  <div class="form-group">
    <label for="name">Nom : <input class="form-control" type="text" name="name"></label>
  </div>
  <div class="form-group">
    <label for="email">Email : <input class="form-control" type="email" name="email"></label>
  </div>
  <div class="form-group">
    <label for="message">Message : <textarea class="form-control" name="message"></textarea></label>
  </div>
  <div class="form-group">
    <button class="btn" type="submit">Envoyer</button>
  </div>
</form>

{% include sitemap.html %}

<p>
  Pour être informé des prochains articles, abonnez vous au <a href="{{ "/feed.xml" | relative_url }}">flux RSS</a>.
</p>

<p class="copy">Site généré avec <a href="https://jekyllrb.com">Jekyll</a> hébergé gratuitement chez <a href="https://netlify.com">Netlify</a> · </p>
