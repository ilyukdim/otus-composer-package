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
$processor = new Ilyukdim\OtusComposerPackage\StringProcessor();
echo $processor->getFirstSymbolUp("000 И это мой first symbol up");
```