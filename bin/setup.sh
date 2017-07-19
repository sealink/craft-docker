#!/bin/sh
set -e
cd "$(dirname "$0")"

apt-get update

setup/composer
setup/craft
setup/node
synchronised-migration/prepare

rm -R /var/lib/apt/lists/*
