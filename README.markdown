# stripe-php-test

A simple test of importing
[stripe-php](https://github.com/stripe/stripe-php/) via
[Composer](http://getcomposer.org/).

```
~/dev/git-repos/stripe-php-test$ make
curl -s http://getcomposer.org/installer | php
#!/usr/bin/env php
All settings correct for using Composer
Downloading...

Composer successfully installed to:
/Users/marca/dev/git-repos/stripe-php-test/composer.phar
Use it: php composer.phar
php composer.phar install
Installing dependencies
  - Package stripe/stripe-php (dev-master)
    Cloning dbeecaa56f6f56cee173c582b3a47ed30f3c56e8

Writing lock file
Generating autoload files
phpunit
PHPUnit 3.6.10 by Sebastian Bergmann.

Configuration read from
/Users/marca/dev/git-repos/stripe-php-test/phpunit.xml.dist

.

Time: 0 seconds, Memory: 5.75Mb

OK (1 test, 1 assertion)
```
