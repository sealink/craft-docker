FROM php:7.0-apache

ARG CRAFT_ARCHIVE_URL=https://download.craftcdn.com/craft/2.6/2.6.2984/Craft-2.6.2984.zip

ARG NODE_SOURCE_VERSION=node_6.x

ENV LANG C.UTF-8

WORKDIR /app

COPY config/php /usr/local/etc/php/conf.d

COPY config/craft.conf /etc/apache2/conf-enabled

COPY bin /container-scripts

RUN /container-scripts/setup.sh

COPY config/craft craft/config

COPY public public

CMD ["/container-scripts/start"]
