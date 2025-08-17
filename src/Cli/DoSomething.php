<?php

declare(strict_types=1);

namespace App\Cli;

//use Google\Service\Sheets\BatchGetValuesByDataFilterRequest;
//use Google\Service\Sheets\DataFilter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\FormatterHelper;

class DoSomething extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:do-something')
            ->setDescription('Not yet decided on the behavior')
            ->addArgument('name', InputArgument::REQUIRED, 'The name');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output):int
    {
        $name = $input->getArgument('name');
        
        $formatter = new FormatterHelper();

        $errors = ['Name: '.$name];
        
        $block = $formatter->formatBlock($errors, 'info');
        
        $output->writeln($block);


        return 0;
    }
}
