# frozen_string_literal: true

GITHUB = "https://github.com"
source "https://rubygems.org"

# gem "gsl" not supported by Netlify
gem "jekyll", git: "#{GITHUB}/jekyll/jekyll"
gem "liquid-c"

group :jekyll_plugins do
  # "jekyll-paginate-v2"
  gem "classifier-reborn"
  gem "jekyll-cloudinary"
  gem "jekyll-compose"
  gem "jekyll-feed", git: "#{GITHUB}/jekyll/jekyll-feed", branch: "jekyll-cache"
  gem "jekyll-github-metadata", git: "#{GITHUB}/jekyll/github-metadata"
  gem "jekyll-include-cache"
  gem "jekyll-last-modified-at"
  gem "jekyll-mentions"
  gem "jekyll-microtypo"
  gem "jekyll-pwa-plugin"
  gem "jekyll-redirect-from"
  gem "jekyll-sass-converter", git: "#{GITHUB}/jekyll/jekyll-sass-converter", branch: "sassc"
  gem "jekyll-seo-tag", git: "#{GITHUB}/jekyll/jekyll-seo-tag", branch: "jekyll-cache"
  gem "jekyll-sitemap"
  gem "jekyll-tidy"
  gem "jekyll-typogrify"
  gem "jekyll_reading_time", git: "#{GITHUB}/RouteMap/jekyll_reading_time"
  gem "jemoji"
end

group :development do
  gem "launchy"
  gem "rake"
end

group :test do
  gem "html-proofer"
end
