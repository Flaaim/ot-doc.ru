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
            $this->text = $this->getTextFromDocument($phpWord);
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
    private function getTextFromDocument($phpWord): string
    {
        $writer = new HTML($phpWord);
        ob_start();
        $writer->save('php://output');
        $html = ob_get_clean();

        // Извлекаем только содержимое <body>
        if (preg_match('/<body>(.*?)<\/body>/is', $html, $matches)) {
            $body = $matches[1];
            // Опционально: можно удалить или заменить специфичные стили, 
            // но для внешнего вида лучше оставить их (PhpWord генерирует inline стили).
            return trim($body);
        }

        return '';
    }
}