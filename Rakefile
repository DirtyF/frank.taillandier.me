# frozen_string_literal: true

require "jekyll"
require "bundler/setup"
require "rubocop/rake_task"
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
    "serving" => true,
    "watch" => true,
    "livereload_port" => 35_729,
    "incremental" => true,
    "lsi" => false,
    "config" => %w[_config.yml _config_local.yml]
  }
  Jekyll::Commands::Build.process(options)
  Jekyll::Commands::Serve.process(options)
end

desc "Generate site"
task :generate do
  require "jekyll"
  Jekyll::Commands::Build.process("profile" => true)
end
task build: :generate

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

desc "Run rubocop"
task :rubocop do
  RuboCop::RakeTask.new(:rubocop) do |t|
    t.options = ["-a", "-E", "-S", "-D"]
  end
end
