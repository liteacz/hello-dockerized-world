# Hello Dockerized World 👋🐋🌍

## TL;DR

```bash
$ git clone git@github.com:liteacz/hello-dockerized-world.git

# Try one of the examples

# Simple PHP
$ cd hello-dockerized-world/examples/php

# or complex Laravel application
# cd hello-dockerized-world/examples/laravel

# or a Symfony project
# cd hello-dockerized-world/examples/symfony

# Start the project
$ docker-compose up -d

# Open up the page in your favorite browser
$ firefox localhost:8000
```

## About this project

This is a simple showcase of our [php fpm](https://github.com/liteacz/php) and [nginx](https://github.com/liteacz/nginx) images playing together
in a simple PHP application that can be run without any other dependencies besides [docker](https://www.docker.com/).

## Usage

0. Make sure you've got docker and [docker-compose](https://docs.docker.com/compose/) installed.


        $ docker --version
        # You should get something similar to this
        Docker version 18.09.5, build e8ff056

        $ docker-compose --version
        # ...and this.
        docker-compose version 1.23.2, build 1110ad01

1. Clone the code

    ```bash
    $ git clone git@github.com:liteacz/hello-dockerized-world.git
    # Chose one of the examples
    $ cd hello-dockerized-world/examples/php
    ```

2. Spin up the containers

    ```bash
    $ docker-compose up -d
    # For the first run, this wil take a minute to download 
    # php and nginx images. Subsequent calls will be much faster
    # so do not worry.
    ```

3. That's it! Really... No need for PHP nor Nginx installed on your system. Now head to http://localhost:8000 and see the PHP web page yourself.

4. Do not forget to stop the containers when you're done.

    ```bash
    $ docker-compose down
    Stopping hello-dockerized-world_nginx_1   ... done
    Stopping hello-dockerized-world_php-fpm_1 ... done
    Removing hello-dockerized-world_nginx_1   ... done
    Removing hello-dockerized-world_php-fpm_1 ... done
    Removing network hello-dockerized-world_default
    ```

## What's next

For more information on how to work with dockerized development environment
visit the [liteacz/php](https://github.com/liteacz/php) project.