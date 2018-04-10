# config valid for current version and patch releases of Capistrano
lock "~> 3.10.1"

set :application, "portmanteaumusic.com"
set :repo_url, "git@bitbucket.org:KerriLush/portmanteau.git"
set :user, "deploy"
set :keep_releases, 3
