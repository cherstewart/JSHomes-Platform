# JSHomes Platform Documentation

JSHomes is a not-for-profit organization established in order to provide tech education resources to the homeless services community.

The JSHomes platform is a tech training courseware platform intended to support video, exercise, and collaboration-based training for students learning to code. This document is here to help people interested in contributing to the software platform that enables JSHomes to function.


## Getting Started

1. Clone the repository:

```bash
git clone git@github.com:jshomes/JSHomes-Platform.git jshomes-platform
cd jshomes-platform
```

2. Start a `vagrant` environment:

```bash
vagrant up
```

3. SSH into `vagrant` shell and `cd` into the **base** folder:

```bash
vagrant ssh
cd platform
```

4. Download latest wordpress:

```bash
docker-compose build
```

5. Kick start your `wordpress` and Connect to mysql database:

```bash
docker-compose up -d
```

6. View your `wordpress` in your favorate browser at `http://localhost:9888`:

```bash
open localhost:9888
```

7. Edit theme `JSHomes`:

- Make your theming changes at folder `platform/wp-content/themes/jshomes-platform-theme`
- Make your plugins changes at folder `platform/wp-content/plugins`
- Refresh your browser, and you should see the updates


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
```

Set your site vhost document root to /path/to/site/web/ (/path/to/site/current/web/ if using deploys)
