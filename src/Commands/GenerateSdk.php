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
use Space48\Bigcommerce\SdkGenerator;
use Space48\Bigcommerce\SpecificationFileProvider;
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

        $specFiles = new SpecificationFileProvider();
        $generator = new SdkGenerator();

        try {
            $generator->generate(
                $specFiles->list($input->getArgument('specs')),
                $input->getOption('force')
            );
        } catch (\Exception $e) {
            $output->writeln("Error: " . $e->getMessage());
        }

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addOption('force', '-f', InputOption::VALUE_NONE, 'Allow files to be overriden');
        $this->addArgument('specs', InputArgument::REQUIRED, 'Path to BigCommerce API spec repo');
    }
}
