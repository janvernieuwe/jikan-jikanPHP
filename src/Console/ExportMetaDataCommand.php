<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Jikan\JikanPHP\Parser\MetadataParser;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

$console = new Application();

$console
    ->register('metadata:export')
    ->setDescription('Extract class metadata.')
    ->setCode(
        function (InputInterface $input, OutputInterface $output) {
            $io = new SymfonyStyle($input, $output);
            $finder = new \Symfony\Component\Finder\Finder();
            $finder->files()->in(__DIR__.'/../../model');
            $classmap = [];
            // Create a classmap and real class
            foreach ($finder as $file) {
                $rf = @new \Funkyproject\ReflectionFile($file->getRealPath());
                $classmap[$rf->getShortName()] = $rf->getName();
            }
            foreach ($classmap as $class => $fqcn) {
                $io->write(sprintf('Processing %s', $fqcn));
                $parser = new MetadataParser($fqcn, $classmap);
                $properties = $parser->getParsedProperties();
                $filename = str_replace('\\', '.', $fqcn).'.yml';
                $yaml = new \Symfony\Component\Yaml\Dumper();
                $contents = $yaml->dump($properties, 4, 0, 0);
                file_put_contents(__DIR__.'/../../metadata/'.$filename, $contents);
                $io->writeln(' OK');
            }
        }
    );

$console->setDefaultCommand('metadata:export');

$console->run();
