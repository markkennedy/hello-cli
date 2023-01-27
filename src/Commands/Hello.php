<?php
namespace MKennedy\HelloCli\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class Hello extends Command
{
    protected static $defaultName = 'hello';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello, World!");
        return Command::SUCCESS;
    }
}