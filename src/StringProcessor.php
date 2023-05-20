<?php


namespace Ilyukdim\OtusComposerPackage;

class StringProcessor
{
    public static function getFirstSymbolUp(string $str): string
    {
        return static::mb_ucfirst($str);
    }
    
    protected static function mb_ucfirst(string $str, string $encoding = 'UTF8'): string
    {
        $upFisrtStr = preg_replace_callback(
            "![a-zа-я]!u",
            static function ($matches) use ($encoding)
            {
                return mb_strtoupper($matches[0], $encoding);
            },
            $str,
            1
        );
        return $upFisrtStr;
    }
}