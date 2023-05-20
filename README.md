# Процессор строк

Делаем первую букву в строке большой

## Требования
 - PHP 7.4

## Установка
```bash
$ composer require ilyukdim/otus-composer-package
```

## Использование

```php
<?php
$pocessor = new StringProcessor();
echo $processor->getFirstSymbolUp("first symbol up");
```