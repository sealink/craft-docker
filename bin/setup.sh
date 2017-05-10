#!/bin/sh
set -e
cd "$(dirname "$0")"
update-ca-certificates

apt-get update

setup/composer
setup/craft
setup/node

rm -R /var/lib/apt/lists/*
