# Singularity
###### (Every piece of software needs a pretentious name.)

***

## About

Singularity is a basic docker nginx, mysql, php web dev stack, with a laravel 5.7 and vue.js ready to go. Not meant for production,
but for quick set up and prototyping.

## Setup

- create a copy of the .envExample file, using your own config called .env

```cp .envExample .env```

- create a copy of the buildtool/.envExample file

```cp buildtool/.envExample buildtool/.env```

- create a copy of the 2 nginx conf files as api.conf and web.conf wih your own urls

```cp nginx/apiExample.conf nginx/api.conf```

```cp nginx/webExample.conf nginx/web.conf```

- create a copy of the www/web/envExample.json file as env.json with your own urls

```cp www/web/envExample.json www/web/env.json```

- create a copy of the www/api/.env.example file, using your own config called .env

```cp www/api/.env.example www/api/.env```

- docker-compose up the project

```docker-compose up -d --build```

- use the composer container to composer install the laravel api

```docker exec -it composer bash```

```composer install```

```exit```

- enter the nginx container and change laravel's storage and bootstap/cache folders recursively to www-data

```docker exec -it nginx bash```

```cd /var/www/web```

```chown www-data:(your user) -R storage/```

```chown www-data:(your user) -R bootstrap/cache/```

- check the build tool has finished its start up process, you can exit these logs with ctrl c

```docker-compose logs -f buildtool```

- you can access your application through your web url and port 1234.
- or if you want your js to run faster, you can build it using the build tool (this can take a while).

```docker-compose exec buildtool npm run build```