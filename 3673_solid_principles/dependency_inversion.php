<?php

/**
* SOLID principles
* Dependency inversion principle
* EN: The Dependency inversion principle: "Depend upon abstractions, [not] concretions."
* CZ: programovat by se melo ne vuci konkretni implementaci, ale vuci abstrakci
* CZ: => vsechny zavislosti, ktere trida ma, maji byt interface
*
* info src https://en.wikipedia.org/wiki/Dependency_inversion_principle
* code src https://youtu.be/M5gmbkQQNQQ
*/

interface Filesystem
{
    public function store($file);
}

class AzureFilesystem implements Filesystem
{
    public function store($file) {
        echo 'AzureFilesystem: ' . $file . PHP_EOL;
    }
}

class AmazonFilesystem implements Filesystem
{
    public function store($file) {
        echo 'AmazonFilesystem: ' . $file . PHP_EOL;
    }
}

class SftpFilesystem implements Filesystem
{
    public function store($file) {
        echo 'SftpFilesystem: ' . $file . PHP_EOL;
    }
}

class Storage
{
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    public function store($file)
    {
        $this->filesystem->store($file);
    }
}

$azureStorage = new Storage(
    new AzureFilesystem
);
$azureStorage->store('file1');

$sftpStorage = new Storage(
    new SftpFilesystem
);
$sftpStorage->store('file2');
