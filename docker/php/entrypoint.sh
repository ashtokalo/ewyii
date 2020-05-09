#!/bin/bash
set -eu
set -x

if [ ! -v ENVIRONMENT ]; then
    export ENVIRONMENT="dev";
fi;

if [ "$ENVIRONMENT" == "dev" ] || [ "$ENVIRONMENT" == "prod" ]; then
    set -a;
    [ -e .env ] && source .env;
    set +a;
fi;

if [ "$ENVIRONMENT" == "dev" ]; then
    docker/wait-for-it.sh mysql:3306 -t 180
    composer install --prefer-dist --no-interaction
    php yii migrate/up --interactive=0
fi;

if [ ! -d runtime ]; then
    mkdir runtime;
fi;

if [ ! -d app/frontend/web/assets ]; then
    mkdir app/frontend/web/assets;
fi;

if [ ! -d app/backend/web/assets ]; then
    mkdir app/backend/web/assets;
fi;

chmod a+rwx -R app/frontend/web/assets;
chmod a+rwx -R app/backend/web/assets;
chmod a+rwx -R runtime;

set -x
exec "$@"
