<?php

namespace Space48\Bigcommerce\Commands;

use Crescat\SaloonSdkGenerator\CodeGenerator;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\Generator\GeneratedCode;
use Crescat\SaloonSdkGenerator\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'sdk:generate', description: 'Generates Saloon SDK based on OpenAPI sepc')]
class GenerateSdk extends Command
{
    const NAMESPACE = 'Space48\Bigcommerce';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $config = new Config(
            connectorName: 'Bigcommerce',
            namespace: static::NAMESPACE,
            ignoredQueryParams: ['limit', 'page']
        );

        $generator = new CodeGenerator($config);

        $specFiles = $this->getSpecFiles($input->getArgument('specs'));

        $connectorClass = null;
        foreach ($specFiles as $specFile) {
            $output->writeln('Generating SDK for ' . $specFile);
            $spec = Factory::parse('openapi', $specFile);
            $result = $generator->run($spec);

            if (is_null($connectorClass)) {
                $connectorClass = $result->connectorClass;
            } else {
                $connectorClass = $this->mergeConnectorClasses($connectorClass, $result->connectorClass);
            }

            $this->dumpGeneratedFiles($input, $output, $result);
        }

        $this->dumpToFile($input, $output, $connectorClass);

        $output->writeln('Complete');

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addOption('force', '-f', InputOption::VALUE_NONE, 'Allow files to be overriden');
        $this->addArgument('specs', InputArgument::REQUIRED, 'Path to BigCommerce API spec repo');
    }

    protected function mergeConnectorClasses(PhpFile $original, PhpFile $additional): PhpFile
    {

        foreach ($original->getNamespaces() as $origNamespace) {
            foreach ($additional->getNamespaces() as $additionalNamespace) {
                foreach ($additionalNamespace->getUses() as $use) {
                    $origNamespace->addUse($use);
                }

                /** @var ClassType $origClass */
                foreach ($origNamespace->getClasses() as $origClass) {
                    /** @var ClassType $additionalClass */
                    foreach ($additionalNamespace->getClasses() as $additionalClass) {
                        foreach ($additionalClass->getMethods() as $methodName => $methodBody) {
                            if (!$origClass->hasMethod($methodName)) {
                                $origClass->addMethod($methodName)
                                    ->setReturnType($methodBody->getReturnType())
                                    ->addBody($methodBody->getBody());
                            }
                        }
                    }
                }
            }
        }

        return $original;
    }

    protected function getSpecFiles(string $path): array
    {
        $specPath = rtrim($path, '/')  . '/reference';

        return array_filter($this->getFilesRecursively($specPath), function ($file) {
            $ignoredFiles = ['.spectral.yaml'];
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

    protected function dumpGeneratedFiles(InputInterface $input, OutputInterface $output, GeneratedCode $result): void
    {

        $output->writeln('Generated Files');

        $output->writeln("\nBase Resource:");
        if ($result->resourceBaseClass) {
            $this->dumpToFile($input, $output, $result->resourceBaseClass);
        }

        $output->writeln("\nResources:");
        foreach ($result->resourceClasses as $resourceClass) {
            $this->dumpToFile($input, $output, $resourceClass);
        }

        $output->writeln("\nRequests:");
        foreach ($result->requestClasses as $requestClass) {
            $this->dumpToFile($input, $output, $requestClass);
        }
    }

    protected function dumpToFile(InputInterface $input, OutputInterface $output, PhpFile $file): void
    {

        // TODO: Cleanup this, brittle and will break if you change the namespace
        $wip = sprintf(
            '%s/%s/%s.php',
            'generated',
            Arr::first($file->getNamespaces())->getName(),
            Arr::first($file->getClasses())->getName(),
        );

        $filePath = Str::of($wip)->replace('\\', '/')->replace('//', '/')->toString();

        if (! file_exists(dirname($filePath))) {
            mkdir(dirname($filePath), recursive: true);
        }

        if (file_exists($filePath) && ! $input->getOption('force')) {
            $output->writeln("- File already exists: $filePath");

            return;
        }

        $ok = file_put_contents($filePath, (string) $file);

        if ($ok === false) {
            $output->writeln("- Failed to write: $filePath");
        } else {
            $output->writeln("- Created: $filePath");
        }
    }

}