# frozen_string_literal: true

source "https://rubygems.org"

git_source(:github) { |repo_name| "https://github.com/#{repo_name}" }

gem "gsl", install_if: -> { ENV["JEKYLL_ENV"] == "development" }
gem "jekyll"
gem "liquid-c"

group :jekyll_plugins do
  # "jekyll-paginate-v2"
  gem "classifier-reborn"
  gem "jekyll-cloudinary"
  gem "jekyll-compose"
  gem "jekyll-feed"
  gem "jekyll-github-metadata"
  gem "jekyll-include-cache"
  gem "jekyll-last-modified-at"
  gem "jekyll-mentions"
  gem "jekyll-microtypo"
  gem "jekyll-purgecss"
  gem "jekyll-pwa-plugin"
  gem "jekyll-redirect-from"
  gem "jekyll-sass-converter"
  gem "jekyll-seo-tag"
  gem "jekyll-sitemap"
  gem "jekyll-tidy"
  gem "jekyll-typogrify"
  gem "jekyll_reading_time", github: "DirtyF/jekyll_reading_time"
  gem "jemoji"
end

group :development do
  gem "dotenv"
  gem "launchy"
  gem "rake"
end

group :test do
  gem "html-proofer"
  gem "rubocop"
end
