<?php

namespace App\Controllers;

use App\Model\Sitemap;
use App\Model\SitemapCollection;
use App\Model\Template\TemplateRepository;

class SitemapController extends AbstractController
{
    public function generateSitemap(): void
    {
        $repository = new TemplateRepository($this->container['db']);
        $templates = $repository->getAll();
        foreach ($templates as $template) {
            SitemapCollection::add(new Sitemap($this->container['db'], $template, $this->container['config']['init']));
        }
        SitemapCollection::generateSitemap();
    }
}