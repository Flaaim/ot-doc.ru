<?php

namespace App\Model\Template;

use App\Interface\Collection;

class DocumentCollection implements Collection
{
    protected static array $collection;

    public static function add(\App\Interface\Document $repository): void
    {
        self::$collection[] = $repository;
    }
    public static function getAll(): array
    {
        $array = [];
        foreach (self::$collection as $item) {
            $array[] = $item->getAllForDataTables();
        }
        return array_merge(...$array);
    }

    public static function getLasts(): array
    {
        $array = [];
        foreach (self::$collection as $item) {
            $array[] = $item->getLasts(3);
        }
        return array_merge(...$array);
    }

    public static function getCount(): int
    {
        $count = 0;
        foreach (self::$collection as $item) {
            $count += $item->getCount();
        }
        return $count;
    }
}