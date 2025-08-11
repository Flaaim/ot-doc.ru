<?php

namespace App\Model\Template;

use App\Logger;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Writer\HTML;

class PreviewDocument
{
    private string $document_path;
    private HTML $htmlWriter;
    private ?string $text;
    public function __construct(string $document_path)
    {
        try {
            $this->document_path = $document_path;
            $phpWord = IOFactory::load($document_path);
            $sections = $phpWord->getSections();
            $this->text = $this->getTextFromDocument($sections);
            $this->htmlWriter = new HTML($phpWord);
        }catch (\Exception $e){
            $logger = new Logger();
            $logger->log('Ошибка чтения документа', $e->getCode(), $e->getMessage(), $e->getLine());
        }

    }
    public function getText(): ?string
    {
        return $this->text ?? null;
    }
    private function getTextFromDocument(array $sections): string
    {
        $text = '';
        foreach ($sections as $section) {
            $elements = $section->getElements();
            foreach ($elements as $element) {
                if(method_exists($element, "getText")) {
                    $text .= $element->getText().'<br>';
                }
            }
        }
        return $text;
    }
}