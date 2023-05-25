# Kirby Starterkit

This Starterkit is an opinionated [Kirby](https://getkirby.com/) (v3.9) Starterkit. There is a development setup based on [Docker](https://www.docker.com/).

For more information on Docker basics you can find a very good guide in the [Kirby Cookbook](https://getkirby.com/docs/cookbook/setup/kirby-meets-docker#example-4-docker-compose).

The setup comes with [Xdebug](#xdebug) and [MailHog](#mailhog) but there is no image repository this setup is puplished to.

## Installation and setup with Docker

```bash
$ git clone git@github.com:fork/kirby-starterkit.git .
$ cd kirby-starterkit
$ docker compose up -d
$ docker compose exec -it php composer install
```

Visit the [admin panel](http://localhost/panel) and finalize the installation.

## Configure Timezone in Docker service

To configure the Timezone of the PHP service you can change the build args of the [compose file](./docker-compose.yml) before installation. e.g.:

```bash
TIME_ZONE: "Europe/Berlin"
```

## Folder Structure

The folder structure is following the ["Public folder setup"](https://getkirby.com/docs/guide/configuration#custom-folder-setup__public-folder-setup) instructions from the Kirby Guide.

## MailHog

There is a handy [MailHog](https://github.com/mailhog/MailHog) service running and configured in the [localhost configuration](./site/config/config.localhost.php).

## Xdebug

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

## License

This "Kirby Docker Starterkit" is licensed under the MIT License. Please see License File for more information. [Kirby](https://getkirby.com/) itself is [commercial software](https://getkirby.com/buy) and has its own [commercial license](https://getkirby.com/license).

---

<a href="https://www.fork.de" target="_blank"><img src="https://github.com/fork/kirby-starterkit/assets/55244/242acd9a-7936-414e-9c9e-984d4f690728" width="38" height="41" alt="Fork Logo" /></a><br />
Brought to you by [Fork Unstable Media GmbH](https://www.fork.de)
