# JSHomes Platform Documentation

JSHomes is a not-for-profit organization established in order to provide tech education resources to the homeless services community.

The JSHomes platform is a tech training courseware platform intended to support video, exercise, and collaboration-based training for students learning to code. This document is here to help people interested in contributing to the software platform that enables JSHomes to function.


## Getting Started

Clone the repository:

```
git clone git@github.com:jshomes/JSHomes-Platform.git jshomes-platform
```

Copy the config `.env.example` file:

```
cd jshomes-platform
cp .env.example .env
```


Edit `.env` file to configure your app instance:

```
PF_BASE_URL=<base-url> # The URL it will be served from, i.e. `http://localhost`

PF_DB_NAME=<db-name>
PF_DB_USER=<db-user>
PF_DB_PASSWORD=<db-password>
PF_DB_HOST=localhost

PF_AUTH_KEY=<your-value>
PF_SECURE_AUTH_KEY=<your-value>
PF_LOGGED_IN_KEY=<your-value>
PF_NONCE_KEY=<your-nonce-value>
PF_AUTH_SALT=<your-auth-value>
PF_SECURE_AUTH_SALT=<your-value>
PF_LOGGED_IN_SALT=<your-value>
PF_NONCE_SALT=<your-value>
```

Set your site vhost document root to /path/to/site/web/ (/path/to/site/current/web/ if using deploys)

Access WP admin at http://example.com/wp/wp-admin
