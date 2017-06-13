FROM php:7.0-apache

ARG CRAFT_ARCHIVE_URL=https://download.craftcdn.com/craft/2.6/2.6.2983/Craft-2.6.2983.zip

ARG NODE_SOURCE_VERSION=node_6.x

ENV LANG C.UTF-8

WORKDIR /app

COPY config/ZscalerRootCertificate-2048-SHA256.crt /usr/local/share/ca-certificates

COPY .bowerrc /root

COPY config/craft.conf /etc/apache2/conf-enabled

COPY bin /container-scripts

RUN /container-scripts/setup.sh

COPY config/craft craft/config

COPY public public

CMD ["/container-scripts/start"]
