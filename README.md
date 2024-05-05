
- https://www.udemy.com/course/php-unit-testing/learn/lecture/12181718#overview
- ./vendor/phpunit/phpunit/phpunit
-  alias phpunit="./vendor/phpunit/phpunit/phpunit" 
- phpunit tests/ExampleTest.php 

- Docs XML : https://docs.phpunit.de/en/11.1/configuration.html
- Docs Composer Autoload : https://getcomposer.org/doc/04-schema.md
 - composer require --dev phpunit/phpunit
 - create composer.json file
 - composer dump-autoload
 - phpunit --bootstrap="vendor/autoload.php"

- Docs stubs : https://docs.phpunit.de/en/11.1/test-doubles.html#test-stubs
- Mockery with composer : composer require mockery/mockery --dev

- TDD : https://pt.wikipedia.org/wiki/Test-driven_development
- 