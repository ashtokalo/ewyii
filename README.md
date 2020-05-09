# Ewyii

The Yii 2.0 web application template used to rapidly start common web project with command line interface,
api, frontend and backend. Backend styled with [AdminLTE][1] theme and includes interfaces to manage users,
logs, errors and queues.

[![StyleCI](https://github.styleci.io/repos/262277262/shield?branch=master)](https://github.styleci.io/repos/262277262)
[![Total Downloads](https://img.shields.io/packagist/dt/ashtokalo/ewyii.svg)](https://packagist.org/packages/ashtokalo/ewyii)

## Installation

It's best to start with [Composer][2] and simple command like:

      composer create-project --prefer-dist --stability=dev ashtokalo/ewyii example

## Directory Structure

      app/          contains application source code
        api/        application interface
        backend/    backend interface
        cli/        command line interface
        config/     application configurations
        frontend/   frontend interface
      docker/       assets to run docker environment
      docs/         some documentation to run project
      runtime/      files generated at runtime
      tests/        a few tests to be used as examples
      vendor/       3rd-party packages

## Configuration

Use file `.env` or environment variables to pass sensitive data to application. See `.env.dist` for example.
All tiers has it's own configuration files to extend `config/common.php`, e.g. `app/config/frontend.php`.
It's regular Yii configuration files.

## Testing

TODO...

## Contributing

It's an [open source](LICENSE.md) project, so any contributions are welcome. You can
[report an issue][3] or contribute to the code using simple rules:

- **[PSR-2 Coding Standard][4]** - Check the code style with ``$ composer check-style`` and fix it with
``$ composer fix-style``.

- **Create feature branches** - Don't ask me to pull from your master branch.

- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.

- **Document any change in behaviour** - Make sure the `README.md` and any other relevant documentation
are kept up-to-date.

- **Send coherent history** - Make sure each individual commit in your pull request is meaningful. If you
had to make multiple intermediate commits while developing, please [squash them][5] before submitting.

- **Add tests!** - Usually your patch won't be accepted if it doesn't have tests.

[1]: <https://github.com/almasaeed2010/AdminLTE>
[2]: <http://getcomposer.org/>
[3]: <https://github.com/ashtokalo/ewyii/issues>
[4]: <https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md>
[5]: <http://www.git-scm.com/book/en/v2/Git-Tools-Rewriting-History#Changing-Multiple-Commit-Messages>
