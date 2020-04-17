# Hello Dockerized World

This is a simple showcase of our [php fpm](https://github.com/liteacz/php) and [nginx](https://github.com/liteacz/nginx) images playing together
in simple PHP application that can be run without any other dependencies besides [docker](https://www.docker.com/).

## Usage

0. Make sure you've got docker and [docker-compose](https://docs.docker.com/compose/) install.


        $ docker --version
        # You should get something similar to this
        Docker version 18.09.5, build e8ff056

        $ docker-compose --version
        # ...and this.
        docker-compose version 1.23.2, build 1110ad01

1. Pull the code


        $ git pull git@github.com:liteacz/hello-dockerized-world.git
        $ cd hello-dockerized-world

2. Spin up the containers


        $ docker-compose up -d
        # For the first run, this wil take a minute to download 
        # php and nginx images. Subsequent calls will be much faster
        # so do not worry.

3. That's it! Really... No need for PHP nor Nginx installed on your system. Now head to http://localhost:8000 and see the PHP web page yourself.