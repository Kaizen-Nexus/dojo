<?php
namespace KaizenNexus\Core;
class Kernel
{
    private $argv;
    public function __construct($argv)
    {
        $this->argv = $argv;
    }
    public function run(): int
    {
        $app = new Application($this->argv);
        return $app->run();
    }
}