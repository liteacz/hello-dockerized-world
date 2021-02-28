FROM liteacz/php:8.0-fpm


RUN echo "Installing required dependencies..." \
    # For local development, we will need composer installed
    # so we can pull Laravel's dependencies.
    && lit install composer \
    # PHP docker image comes in vary slim fashion.
    # For Laravel or any other application we'll need some
    # additional PHP extension.
    # Read more info about server requirements in Laravel documentation:
    # https://laravel.com/docs/8.x/deployment#server-requirements
    && lit preset laravel
