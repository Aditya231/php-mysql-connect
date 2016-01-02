# php-mysql-connect

This is how you connect to a MySQL database and perform raw queries - *using plain PHP and best practices*.

## Requirements

PHP >= 5.4.0

## Techniques used

* PDO ([php.net/pdo](https://secure.php.net/pdo))

```php
echo extension_loaded('pdo');       // Check if PDO extension is loaded
echo extension_loaded('pdo_mysql'); // Check if MySQL driver is loaded
```

* Alternative syntax ([php.net/alternative-syntax](https://secure.php.net/alternative-syntax))
* Short tags (`<?=`)
* MVC pattern ([wikipedia.org](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller))
