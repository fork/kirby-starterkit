# Kirby Starterkit

This project is a very basic but opinionated [Kirby](https://getkirby.com/) (v3.9) Starterkit using some established Kirby CMS Plugins. The folder structure is following the ["Public folder setup"](https://getkirby.com/docs/guide/configuration#custom-folder-setup__public-folder-setup) instructions from the Kirby Guide.<br>
Frontend is based on [Vite](https://vitejs.dev/), [tailwindcss](https://tailwindcss.com/) and [Alpine.js](https://alpinejs.dev/).

It comes with is a development setup based on [Docker](https://www.docker.com/) including [Xdebug](#xdebug) and [MailHog](#mailhog) as services, but you can choose to use your local environment instead.

![stage](https://github.com/fork/kirby-starterkit/assets/55244/cbb3ea0e-507f-473b-a5ca-368c407bd56f)

## Installation instructions

### Setup Kirby via Docker

```bash
$ git clone git@github.com:fork/kirby-starterkit.git .
$ docker compose up -d
$ docker compose exec -it php composer install
```

### Alternative setup Kirby via local environment

After installing the [essential requirements for Kirby](https://getkirby.com/docs/guide/quickstart) these instructions should be enough to get the project up and running on your local maschine.

```bash
$ git clone git@github.com:fork/kirby-starterkit.git .
$ composer install
$ php -S localhost:8000 -t public kirby/router.php
```

### Build Frontend

The frontend build gets ignored by Git so you will have to run it initially.
It is build directly to the Kirby public folder by the following command.

```bash
$ yarn install
$ yarn build
```

### Finalize Kirby Setup in the panel

Visit the admin panel at [http://localhost:8000/panel](http://localhost:8000/panel) and finalize the installation.

## Develop Frontend

You could also just start developing Frontend components by starting Vite.

```bash
$ yarn dev
```

## Additional features when using Docker

### Configure Timezone in Docker service

To configure the Timezone of the PHP service you can change the build args of the [compose file](./docker-compose.yml) before installation. e.g.:

```bash
TIME_ZONE: "Europe/Berlin"
```

### MailHog

There is a handy [MailHog](https://github.com/mailhog/MailHog) service running and configured in the [localhost configuration](./site/config/config.localhost.php). When starting the Docker setup, you can access Mailhog by navigating to http://localhost:8025/.

### Xdebug

The PHP Service is configured with Xdebug. You can change the needed [XDEBUG_MODE](https://xdebug.org/docs/all_settings#mode) via environment variable when starting the setup.

```bash
$ XDEBUG_MODE=debug docker compose up -d
```

If you are working with Visual Studio Code you could use the following launch.json configuration.

```bash
{
  "version": "0.2.0",
  "configurations": [
    {
      "name": "Listen for Xdebug",
      "type": "php",
      "request": "launch",
      "port": 9003,
      "pathMappings": {
        "/var/www/html/": "${workspaceFolder}"
      }
    }
  ]
}

```

For more information on Docker basics related to Kirby you can find a very good guide in the [Kirby Cookbook](https://getkirby.com/docs/cookbook/setup/kirby-meets-docker#example-4-docker-compose).

## Kirby Plugins used

-   [Kirby 3 Content Security Policy Header](https://github.com/bnomei/kirby3-security-headers)
-   [Kirby Staticache Plugin](https://github.com/getkirby/staticache)
-   [Retour for Kirby](https://github.com/distantnative/retour-for-kirby)
-   [Meta Knight – SEO for Kirby](https://github.com/diesdasdigital/kirby-meta-knight)
-   [Kirby Navigation Field](https://github.com/chrisbeluga/kirby-navigation)
-   [Kirby Vite Plugin](https://github.com/arnoson/kirby-vite)
-   [Kirby Fields Block](https://github.com/jongacnik/kirby-fields-block)
-   [Kirby 3 Extended Writer](https://github.com/coralic/kirby-extended-writer)

## License

This "Kirby Docker Starterkit" is licensed under the MIT License. Please see License File for more information. [Kirby](https://getkirby.com/) itself is [commercial software](https://getkirby.com/buy) and has its own [commercial license](https://getkirby.com/license).

---

<a href="https://www.fork.de" target="_blank"><img src="https://github.com/fork/kirby-starterkit/assets/55244/242acd9a-7936-414e-9c9e-984d4f690728" width="38" height="41" alt="Fork Logo" /></a><br />
Brought to you by [Fork Unstable Media GmbH](https://www.fork.de)
