<?php

namespace App\Model\Admin\Cron;

use App\Logger;

final class DeleteFiles
{
    protected array $db_filenames;
    protected string $directiory;
    protected array $dir_files;
    protected Logger $logger;
    public function __construct(array $db_filenames, string $parent_directory, string $slug)
    {
        $this->logger = new Logger();
        $this->db_filenames = $db_filenames;
        $this->directiory = $parent_directory.$slug;
        $this->dir_files = scandir($this->directiory);
        $this->dir_files = array_diff($this->dir_files, ['.', '..']);
    }
    public function get_dir_files(): array
    {
        return $this->dir_files;
    }

    public function get_orphaned_files(): array
    {
        return array_diff($this->dir_files, $this->db_filenames);
    }

    public function delete_orphaned_files(array $orphanedFiles): void
    {
        foreach ($orphanedFiles as $file) {
            $filePath = $this->directiory.'/'.$file;
            if (unlink($filePath)) {
                $this->logger->log_orphaned_files('Файл успешно удален', $file);
            } else {
                $this->logger->log_orphaned_files('Не удалось удалить файл', $file);
            }
        }
    }
}