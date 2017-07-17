#!/bin/bash
set -e
cd "$(dirname "$0")"

apt-get update

setup/composer
setup/craft/main
setup/node

rm -R /var/lib/apt/lists/*
