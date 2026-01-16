<?php
namespace KaizenNexus\Core;

use KaizenNexus\Core\Context\Context;
use KaizenNexus\Core\Command\InstallCommand;
use KaizenNexus\Core\Command\InitCommand;
use KaizenNexus\Core\Command\HelpCommand;

class Application
{
    private Context $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function run(array $argv): int
    {
        $command = $argv[1] ?? 'help';
        $command = trim(strtolower($command));
        echo 'CMD IS >>';
        echo  ($command == 'init');
        return match ($command) {
            'init'    => (new InitCommand($this->context))->execute(),
            'install' => (new InstallCommand($this->context, $argv))->execute(),
            default   => (new HelpCommand())->execute(),
        };
    }
}
