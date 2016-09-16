# Require jekyll to compile the site.
require 'jekyll'

# Github pages publishing.
namespace :site do

  # generate files locally before pushing it to the branch to publish.

  # Compile the Jekyll site using the config.
  # Usage:
  # bundle exec rake site:generate
  desc 'Generate website'
  task :generate do
    Jekyll::Site.new(Jekyll.configuration('source' => '.',
                                          'destination' => '_site',
                                          'config' => '_config.yml')).process
  end

  # Usage:
  # bundle exec rake site:publish
  desc 'Publish to gh-pages'
  task publish: [:generate] do
    # Get the origin to which we are going to push the site.
    origin = `git config --get remote.origin.url`

    # Make a temporary directory for the build before production release.
    # This will be torn down once the task is complete.
    Dir.mktmpdir do |tmp|
      # Copy accross our compiled _site directory.
      cp_r '_site/.', tmp

      # Switch in to the tmp dir.
      Dir.chdir tmp

      # Prepare all the content in the repo for deployment.
      # Init the repo.
      system 'git init'
      # Add and commit all the files.
      system "git add . && git commit -m 'Mise à jour le  #{Time.now.utc}'"

      # Add the origin remote for the parent repo to the tmp folder.
      system "git remote add origin #{origin}"

      # Push the files to the gh-pages branch, forcing an overwrite.
      system 'git push origin master:refs/heads/gh-pages --force'
    end

    puts 'Done.'
  end
end
