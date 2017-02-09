.PHONY: test lint
test: vendor/bin/phpunit
	vendor/bin/phpunit --colors tests

lint:
	! find . -path ./vendor -prune -o -type f -name "*.php" -exec php -l {} \; | grep -v "No syntax errors"

install:
	composer install

build:
	composer install --no-dev
