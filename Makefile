test: vendor
	phpunit

vendor: composer.phar
	php composer.phar install

composer.phar:
	curl -s http://getcomposer.org/installer | php

clean:
	$(RM) -r composer.lock vendor composer.phar

.PHONY: test
