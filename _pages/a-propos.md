---
layout: page
title: À propos
description: "Consultant, product manager, speaker, vulgarisateur technique."
permalink: '/a-propos/'
seo:
  name: Frank Taillandier
  type: person
---

Bonjour, je suis actuellement _Product Manager_ chez [Forestry](https://forestry.io), un service de gestion de contenu pour les sites développés avec des générateurs comme Jekyll, Hugo, VuePress, Gatsby, Gridsome, Eleventy, Hexo, NextJS, etc.

Forestry est un CMS qui facilite l'édition de fichiers Markdown, JSON et YAML pour les profils non-techniques, et qui se synchronise avec un dépôt Git.

J'ai crée [JAMstatic](https://jamstatic.fr) afin de partager des articles en français sur la [JAMStack](https://jamstatic.fr/2019/02/07/c-est-quoi-la-jamstack/), un terme marketing, derrière lequel se cache une volonté de faire des sites web plus modernes et performants.

Je développe également des [sites statiques](https://jamstatic.fr) à mon compte.

Tout ça à distance depuis la charmante ville de Toulouse en France.

Depuis près de 20 ans, je suis de très près l'évolution du web, des technologies
ouvertes et de ses différents métiers.

- J'aime partager mon savoir et apprendre pour progresser au sein d'équipes multi-disciplinaires.
- J'aime travailler en bonne intelligence, me focaliser sur la valeur ajoutée.
- J'aime avant tout participer à la conception de services utiles.
- J'aime les sites simples, lisibles, rapides et accessibles, qui proposent du contenu ou un service de qualité.

Pour augmenter les chances de parvenir à de bons résultats je privilégie une
démarche centrée utilisateur, un apprentissage permanent en fonction des
retours, le droit à l'erreur et une amélioration continue.

J'ai commencé à développer des sites web en 1998, et depuis quelques années je suis revenu à mes premiers amours avec [Jekyll](https://jekyllrb.com), [Hugo](https://gohugo.io) et maintenant [Eleventy](https://11ty.io).

J'ai contribué à créer [Sud Web](https://sudweb.fr) avec [des gens formidables]({% post_url 2017-05-21-sept-ans-de-sud-web %}) afin de partager une vision éthique et humaine de nos métiers.

Vous pouvez me laisser un message via le formulaire ci-dessous ou [via
Twitter](https://twitter.com/{{ site.twitter.username }}).

<form class="contact" name="contact" netlify-honeypot="bot-field" action="/" netlify="">
  <div class="hidden">
  <label>Don’t fill this out: <input name="bot-field"></label>
</div>
  <div class="form-group">
  <label for="name">Nom :
<input class="form-control" type="text" name="name"></label>
</div>
  <div class="form-group">
  <label for="email">Email : <input class="form-control" type="email" name="email"></label>
</div>
  <div class="form-group">
  <label for="message">Message : <textarea class="form-control" name="message">

</textarea></label>
</div>
  <div class="form-group">
  <button class="btn" type="submit">Envoyer</button>
</div>
</form>

{% include sitemap.html %}

Pour être informé des prochains articles, abonnez vous au [flux RSS]({{
"/feed.xml" | relative_url }}).

<p class="copy">
  Site généré avec <a href="https://jekyllrb.com">Jekyll</a> et déployé sur
  <a href="https://netlify.com">Netlify</a> le {% include fr_date.html
  date=site.time %}
</p>
