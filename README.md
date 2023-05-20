# Процессор строк

Делаем первую букву в строке большой

## Требования
 - PHP 5.4

## Установка
```bash
$ composer require ilyukdim/otus-composer-package
```

## Использование

```php
<?php
$processor = new Ilyukdim\OtusComposerPackage\StringProcessor();
echo $processor->getFirstSymbolUp("000 и это мой first symbol up");
```