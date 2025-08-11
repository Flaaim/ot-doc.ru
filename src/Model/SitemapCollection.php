<?php

namespace App\Model;

class SitemapCollection
{
    protected static array $collection;

    public static function add(Sitemap $sitemap): void
    {
        self::$collection[] = $sitemap;
    }

    public static function get(): array
    {
        return self::$collection;
    }

    public static function generateSitemap(): void
    {
        foreach (self::$collection as $item) {
            $item->generate_sitemap();
        }
    }
}