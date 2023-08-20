<?php

namespace Space48\BigcommerceApi\Commands;

use Crescat\SaloonSdkGenerator\CodeGenerator;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\Generator\GeneratedCode;
use Crescat\SaloonSdkGenerator\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Nette\PhpGenerator\PhpFile;
use Space48\BigcommerceApi\RequestGenerator;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'sdk:generate', description: 'Generates Saloon SDK based on OpenAPI sepc')]
class GenerateSdk extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $config = new Config(
            connectorName: 'Bigcommerce',
            namespace: 'Space48\BigcommerceApi',
            ignoredQueryParams: ['limit', 'page']
        );

        $generator = new CodeGenerator(
            $config,
            requestGenerator: new RequestGenerator($config)
        );

        $specFiles = $this->getSpecFiles($input->getArgument('specs'));

        foreach ($specFiles as $specFile) {
            $output->writeln('Generating SDK for ' . $specFile);
            $spec = Factory::parse('openapi', $specFile);
            $result = $generator->run($spec);

            $this->dumpGeneratedFiles($input, $output, $result);
        }

        $output->writeln('Complete');

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addOption('force', '-f', InputOption::VALUE_NONE, 'Allow files to be overriden');
        $this->addArgument('specs', InputArgument::REQUIRED, 'Path to BigCommerce API spec repo');
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

        $output->writeln("\nConnector:");
        if ($result->connectorClass) {
            $this->dumpToFile($input, $output, $result->connectorClass);
        }

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