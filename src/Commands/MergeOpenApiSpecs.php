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
use Space48\Bigcommerce\SpecificationFileProvider;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'openapi:merge', description: 'Find and merge open API specs into single file')]
class MergeOpenApiSpecs extends Command
{

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $mergedSpecFile = (new SpecificationFileProvider())->merged($input->getArgument('specs'));

        $mergedFile = fopen('bigcommerce-openapi.yml', 'w');


        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addOption('force', '-f', InputOption::VALUE_NONE, 'Allow files to be overridden');
        $this->addArgument('specs', InputArgument::REQUIRED, 'Path to BigCommerce API spec repo');
    }
}
