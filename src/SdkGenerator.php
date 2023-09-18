<?php

namespace Space48\Bigcommerce;

use Crescat\SaloonSdkGenerator\CodeGenerator;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\Generator\GeneratedCode;
use Crescat\SaloonSdkGenerator\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Nette\PhpGenerator\PhpFile;

class SdkGenerator
{
    const NAMESPACE = 'Space48\Bigcommerce';

    /**
     * @param array $specFiles - array of paths to Open API specification files
     * @throws \Crescat\SaloonSdkGenerator\Exceptions\ParserNotRegisteredException
     */
    public function generate(array $specFiles, bool $overwriteFiles = false): void
    {
        $config = new Config(
            connectorName: 'Bigcommerce',
            namespace: static::NAMESPACE,
            ignoredQueryParams: ['limit', 'page']
        );

        $generator = new CodeGenerator($config);

        $connectorClass = null;
        foreach ($specFiles as $specFile) {
            $spec = Factory::parse('openapi', $specFile);
            $result = $generator->run($spec);

            if (is_null($connectorClass)) {
                $connectorClass = $result->connectorClass;
            } else {
                $connectorClass = $this->mergeConnectorClasses($connectorClass, $result->connectorClass);
            }

            $this->dumpGeneratedFiles($result);
        }

        $this->dumpToFile($connectorClass);

    }

    protected function mergeConnectorClasses(PhpFile $original, PhpFile $additional): PhpFile
    {
        return PhpFileMerger::merge($original, $additional);
    }

    protected function dumpGeneratedFiles(GeneratedCode $result, bool $overwrite = false): void
    {
        if ($result->resourceBaseClass) {
            $this->dumpToFile($result->resourceBaseClass);
        }

        foreach ($result->resourceClasses as $resourceClass) {
            $this->dumpToFile($resourceClass);
        }

        foreach ($result->requestClasses as $requestClass) {
            $this->dumpToFile($requestClass);
        }
    }

    protected function dumpToFile(PhpFile $file, bool $overwrite = false): bool|int
    {

        // TODO: Cleanup this, brittle and will break if you change the namespace
        $wip = sprintf(
            '%s/%s/%s.php',
            'generated',
            Arr::first($file->getNamespaces())->getName(),
            Arr::first($file->getClasses())->getName(),
        );

        $filePath = Str::of($wip)->replace('\\', '/')->replace('//', '/')->toString();

        if (!file_exists(dirname($filePath))) {
            mkdir(dirname($filePath), recursive: true);
        }

        if (file_exists($filePath) && !$overwrite) {
            return false;
        }

        return file_put_contents($filePath, (string) $file);
    }

}
