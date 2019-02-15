# Singularity
###### (Every piece of software needs a pretentious name.)

***

##About

Singularity is a basic docker emp web dev stack.

## Setup

- create a copy of the /.envExample file, using your own config called .env
- create a copy of the /buildTool/.envExample file, using your own config called .env
- create a copy of the /buildTool/.envExample file, using your own config called .env
- create a copy of the 2 nginx conf files as api.conf and web.conf wih your own urls.
- docker-compose up the project
- use the composer container to composer install the laravel api
- alternatively if you want you can delete the laravel files, and install freshly using the laravel new command inside
the composer container.
- enter the nginx container and change laravel's storage and bootstap/cache folders recursively to www-data
- wait for the buildtool container to finish its install
    (you can watch this using the log commands found in the docker compose section)
- if you're ready for production you can use the buildtool container to generate your js, otherwise,
you can access your application through your web url and port 1234.