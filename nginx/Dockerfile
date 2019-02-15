FROM nginx:latest

COPY ./api.conf /etc/nginx/sites-available/api.conf
COPY ./web.conf /etc/nginx/sites-available/web.conf

RUN ln -s /etc/nginx/sites-available/api.conf /etc/nginx/conf.d/api.conf
RUN ln -s /etc/nginx/sites-available/web.conf /etc/nginx/conf.d/web.conf

RUN mkdir -p /var/www/api
RUN mkdir -p /var/www/web

RUN chown -R $USER:nginx /var/www/api
RUN chown -R $USER:nginx /var/www/web

RUN chmod -R 775 /var/www

RUN apt-get update