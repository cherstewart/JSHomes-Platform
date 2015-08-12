#!/bin/bash
set -e

if [ -f .env ]; then
  # should start from a fresh state
  rm -rf ./docker-compose.yaml

  # create `docker-compose.yaml` based on template file
  cp ./docker-compose.yaml.tmpl ./docker-compose.yaml

  # replace the value with user's custom setting
  sed -e 's|__WORDPRESS_DB_PASSWORD__|yourguess|g'  -i"" ./docker-compose.yaml

  # Download latest wordpress
  # docker-compose build

  # Start `wordpress` and Connect to mysql database:
  # docker-compose up -d
else
  echo '########'
  echo ''
  echo '# Copy and paste the code below'
  echo 'cp .env.example .env'

  echo ''
  echo '# Open and edit .env with your own setting'
  echo 'vi .env'

  echo ''
  echo '########'
fi
