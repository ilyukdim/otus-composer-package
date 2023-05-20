<?php


namespace Ilyukdim\OtusComposerPackage;

class StringProcessor
{
    public static function getFirstSymbolUp(string $str): string
    {
        return UCfirst($str);
    }
}