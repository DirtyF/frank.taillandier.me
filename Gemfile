# frozen_string_literal: true

source "https://rubygems.org"

git_source(:github) { |repo_name| "https://github.com/#{repo_name}" }

# gem "gsl" not supported by Netlify
gem "jekyll", github: "jekyll/jekyll"
gem "liquid-c"

group :jekyll_plugins do
  # "jekyll-paginate-v2"
  gem "classifier-reborn"
  gem "jekyll-cloudinary"
  gem "jekyll-compose"
  gem "jekyll-feed", github: "jekyll/jekyll-feed", branch: "jekyll-cache"
  gem "jekyll-github-metadata", github: "jekyll/github-metadata", branch: "no-cache-drop"
  gem "jekyll-include-cache"
  gem "jekyll-last-modified-at"
  gem "jekyll-mentions"
  gem "jekyll-microtypo"
  gem "jekyll-pwa-plugin"
  gem "jekyll-redirect-from"
  gem "jekyll-sass-converter", github: "jekyll/jekyll-sass-converter", branch: "sassc"
  gem "jekyll-seo-tag", github: "jekyll/jekyll-seo-tag", branch: "jekyll-cache"
  gem "jekyll-sitemap"
  gem "jekyll-tidy"
  gem "jekyll-typogrify"
  gem "jekyll_reading_time", github: "RouteMap/jekyll_reading_time"
  gem "jemoji"
end

group :development do
  gem "launchy"
  gem "rake"
end

group :test do
  gem "html-proofer"
  gem "rubocop"
end
