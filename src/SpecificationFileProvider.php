<?php

namespace Space48\Bigcommerce;

class SpecificationFileProvider
{

    /**
     * Recursively find all BC specification files
     * @return array of file paths
     */
    public function list(string $path): array
    {
        return $this->getSpecFiles($path);
    }

    /**
     * Recursively find all BC specification files and
     * merge them into a single spec file.
     *
     * @return string - path to merged file
     */
    public function merged(string $path): string
    {
        $specFiles = $this->getSpecFiles($path);

    }

    protected function getSpecFiles(string $path): array
    {
        $specPath = rtrim($path, '/')  . '/reference';

        return array_filter($this->getFilesRecursively($specPath), function ($file) {
            $ignoredFiles = ['.spectral.yaml', '.sf.yml'];
            foreach ($ignoredFiles as $ignoredFile) {
                if (str_ends_with($file, $ignoredFile)) return false;
            }
            return true;
        });
    }

    /**
     * @return string[]
     */
    protected function getFilesRecursively(string $path): array
    {
        $files = [];

        $filesAndFolders = scandir($path);
        foreach ($filesAndFolders as $fileOrFolder) {
            if (in_array($fileOrFolder, ['.', '..'])) continue;

            $absolutePath = "$path/$fileOrFolder";

            if (is_dir($absolutePath)) {
                $files = array_merge($files, $this->getFilesRecursively($absolutePath));
            } else {
                $files[] = $absolutePath;
            }
        }

        return $files;
    }
}
