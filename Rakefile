# frozen_string_literal: true

require "jekyll"
require "bundler/setup"
Bundler.require(:jekyll_plugins, :test)

begin
  Bundler.setup
rescue Bundler::BundlerError => e
  warn e.message
  warn "Lancez `bundle install` pour installer les gems manquantes"
  exit e.status_code
end

task default: "preview"

desc "Generate and view the site locally"
task :preview do
  require "launchy"

  browser_launched = false
  Jekyll::Hooks.register :site, :post_write do |_site|
    next if browser_launched
    browser_launched = true
    Jekyll.logger.info "Opening in browser…"
    Launchy.open("http://localhost:4000")
  end

  # Generate the site in server mode.
  puts "Generating the preview…."
  options = {
    "watch"       => true,
    "serving"     => true,
    "config"      => %w[_config.yml _config_local.yml]
  }
  Jekyll::Commands::Serve.start(options)
end

desc "Generate site"
task :generate do
  require "jekyll"
  Jekyll::Commands::Build.process("profile" => true)
end
task build: :generate

# Usage: bundle exec rake test
desc "Vérification des fichiers HTML"
task test: :build do
  HTMLProofer.check_directory(
    "./_site",
    empty_alt_ignore: true,
    disable_external: true,
    check_html: true,
    parallel: { in_processes: 3 }
  ).run
end
