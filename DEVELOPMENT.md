# How to develop
Before commit todos:

## Run tests

```shell
./vendor/bin/phpunit
```

with coverage
```shell
XDEBUG_MODE=coverage php ./vendor/bin/phpunit --coverage-html=./public/coverage
```

All tests should be passed!

## Run static code analyzer

```shell
./vendor/bin/phpstan analyse src tests
```
## Run code style fixer

```shell
./vendor/bin/php-cs-fixer check
```

and then 

```shell
./vendor/bin/php-cs-fixer fix
```