## Getting Started

These are experimental docs, trying to get the platform up and running on Docker.

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
web:
    image: wordpress
    links:
     - mysql
    environment:
     - WORDPRESS_DB_PASSWORD=password
    ports:
     - "127.0.0.3:8080:80"
mysql:
    image: mysql:5.7
    environment:
     - MYSQL_ROOT_PASSWORD=password
     - MYSQL_DATABASE=wordpress
```

## Troubleshooting

Nuke it and try starting up fresh again:

```
docker-compose rm -v
```
