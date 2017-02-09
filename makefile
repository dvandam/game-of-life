.PHONY: test lint install build

test: vendor/bin/phpunit
	vendor/bin/phpunit --colors \
		--log-junit 'reports/unitreport.xml' \
		--coverage-html 'reports/coverage' \
		--coverage-clover 'reports/coverage/coverage.xml' \
		tests

vendor/bin/phpunit: install

lint:
	! find . -path ./vendor -prune -o -type f -name "*.php" -exec php -l {} \; | grep -v "No syntax errors"

install:
	composer install

build:
	composer install --no-dev
