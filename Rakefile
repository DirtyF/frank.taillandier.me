task :default => "site:preview"

namespace :site do
  desc "Generate and view the site locally"
  task :preview => :generate do
    require "launchy"
    require "jekyll"

    Thread.new do
      sleep 4
      puts "Opening in browser..."
      Launchy.open("http://localhost:4000")
    end

    # Generate the site in server mode.
    puts "Running Jekyll..."
    options = {
      "watch"       => true,
      "serving"     => true,
      "incremental" => true,
      "config"      => %w(_config.yml _config_local.yml)
    }
    Jekyll::Commands::Build.process(options)
    Jekyll::Commands::Serve.process(options)
  end

  desc "Generate the site"
  task :generate do
    require "jekyll"
    Jekyll::Commands::Build.process({
      "profile" => true
    })
  end
  task :build => :generate

  # Usage: bundle exec rake site:test
  desc "Test if generated website is valid (do not test external links)"
  task :test do
    sh "bundle exec htmlproofer ./_site --disable-external --empty-alt-ignore"
  end

  # Usage:
  # bundle exec rake site:publish
  desc "Publish to gh-pages"
  task :publish => [:generate, :test] do
    # Get the origin to which we are going to push the site.
    origin = `git config --get remote.origin.url`

    # Make a temporary directory for the build before production release.
    # This will be torn down once the task is complete.
    Dir.mktmpdir do |tmp|
      # Copy accross our compiled _site directory.
      cp_r "_site/.", tmp

      # Switch in to the tmp dir.
      Dir.chdir tmp

      # Prepare all the content in the repo for deployment.
      # Init the repo.
      system "git init"
      # Add and commit all the files.
      system "git add . && git commit -m 'Mise à jour le  #{Time.now.utc}'"

      # Add the origin remote for the parent repo to the tmp folder.
      system "git remote add origin #{origin}"

      # Push the files to the gh-pages branch, forcing an overwrite.
      system "git push origin master:refs/heads/gh-pages --force"
    end
    puts "Done."
  end
end
