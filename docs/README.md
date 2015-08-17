# JSHomes Platform Documentation

JSHomes is a not-for-profit organization established in order to provide tech education resources to the homeless services community.

The JSHomes platform is a tech training courseware platform intended to support video, exercise, and collaboration-based training for students learning to code. This document is here to help people interested in contributing to the software platform that enables JSHomes to function.


## Getting Started

1. Clone the repository:

```bash
git clone git@github.com:jshomes/JSHomes-Platform.git jshomes-platform
cd jshomes-platform
```

2. Setup and login environment:

```bash
# Start a `vagrant` environment
vagrant up

# SSH into `vagrant` shell
vagrant ssh
cd platform
```

3. Edit configuration file:

```bash
cp .env.example .env
vi .env

# Name of the database. defaults to "wordpress"
PF_DB_NAME=<db-name>

# Currently Not-in-use, defaults to "root". since it is always going to start with `root` user
PF_DB_USER=<db-user>

# specifies the password that will be set for the MySQL root superuser account
PF_DB_PASSWORD=<db-password>

# defaults to the IP and port of the linked mysql container
PF_DB_HOST=localhost
```

4. Start wordpress:

```bash
./start
```

5. View your `wordpress` in your favorate browser at `http://localhost:9888`:

```bash
open localhost:9888
```

6. Edit theme `JSHomes`:

- Make your theming changes at folder `platform/wp-content/themes/jshomes-platform-theme`
- Make your plugins changes at folder `platform/wp-content/plugins`
- Refresh your browser, and you should see the updates

Note: When you use **Wordpress** backend to install any *plugin*, the action cannot be done because
of permission issue. However, you could download any plugins from
[Wordpress Official Plugins download site](https://wordpress.org/plugins/) or other sites. Unzip the
plugin file, then drag and drop the folder into `platform/wp-content/plugins`, refresh your browser,
you should see plugin(s) in your **Wordpress** backend **plugins** section.
