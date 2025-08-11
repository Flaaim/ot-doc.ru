<?php

namespace App\Model;

use App\Model\Db\PDODocument;
use App\Model\Template\Template;
use SimpleXMLElement;

final class Sitemap
{
    protected PDODocument $model;
    protected Template $template;
    private string $path;
    private string $host;
    public function __construct(\PDO $pdo, Template $template, $config)
    {
        $this->model = new PDODocument($pdo);
        $this->template = $template;
        $this->path = $config['WWW'].'/sitemap';
        $this->host = $config['PATH'];
    }

    public function generate_sitemap(): void
    {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');
        foreach ($this->getDataForSitemap() as $item) {
            $fullUrl = $this->host.'/document/'.$this->template->id.'/'. $item['id'];
            $url = $xml->addChild('url');
            $url->addChild('loc', $fullUrl);
            $url->addChild('lastmod', date('Y-m-d'));
            $url->addChild('changefreq', 'monthly');
            $url->addChild('priority', '0.6');
        }
        $xml->asXML($this->path.'/'.$this->template->slug.'_sitemap.xml');
    }

    public function getDataForSitemap(): array|false
    {
        return $this->model->getDataForSitemap($this->template->slug);
    }
}