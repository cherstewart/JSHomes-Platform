## Getting Started

These are experimental docs, trying to get the platform up and running on Docker.

### Docker learning resources

* [Docker tutorial videos](https://www.youtube.com/playlist?list=PLkA60AVN3hh_6cAz8TUGtkYbJSL2bdZ4h), specifically, [docker-compose](https://www.youtube.com/watch?v=gtoT0By8yh4&index=9&list=PLkA60AVN3hh_6cAz8TUGtkYbJSL2bdZ4h).
* [Docker images](http://blog.thoward37.me/articles/where-are-docker-images-stored/)
* [Clean up docker containers](http://odino.org/spring-cleaning-of-your-docker-containers/)


### Status

Basic docker-compose from the official image docs should work as a base:

* [official docker WordPress image ](https://registry.hub.docker.com/_/wordpress/) Example `docker-compose.yml`



### Docker

Our platform runs on containers -- lightweight virutal environments that don't need the overhead of emulating all the hardware of a virtual machine. Docker is a very popular container solution, and it has predefined WordPress and MySQL container images ready to go!

[Install docker](https://docs.docker.com/)

Run docker. On OSX you'll want to run Boot2Docker.


### Docker compose

This project uses Docker services for WordPress, MySQL, Mongo, and Redis. That's a lot to manage manually.

Docker compose lets you orchestrate multiple docker images using a simple `docker-compose.yml` config file.

[Install Docker Compose](https://docs.docker.com/compose/install/)


Create a directory for your project:

```
mkdir jshomes-platform && cd jshomes-platform
```

Create your `docker-compose.yml` file. If you're using [atom](https://atom.io/):

```
atom docker-compose.yml
```

Paste these contents and save:

```
wordpress:
  image: wordpress
  links:
    - db:mysql
  ports:
    - 8080:80

db:
  image: mariadb
  environment:
    MYSQL_ROOT_PASSWORD: <your-root-password>
```

## Troubleshooting

Nuke it and start again:

```
docker-compose rm -v
```


