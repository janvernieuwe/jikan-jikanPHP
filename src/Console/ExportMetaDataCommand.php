<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Jikan\JikanPHP\Parser\MetadataParser;
use Jikan\Model\Anime\Anime;
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
            $parser = new MetadataParser($io->ask('Class reference', Anime::class));
            $properties = $parser->getParsedProperties();

            $yaml = new \Symfony\Component\Yaml\Dumper();
            echo $yaml->dump($properties, 4, 0, 0);

            //dump($properties);
        }
    );

$console->setDefaultCommand('metadata:export');

$console->run();
