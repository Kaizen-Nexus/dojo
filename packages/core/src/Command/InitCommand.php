<?
namespace KaizenNexus\Core\Command;

use KaizenNexus\Core\Util\Filesystem;
use KaizenNexus\Core\Command\CommandInterface;
use KaizenNexus\Core\Context\Context;

class InitCommand implements CommandInterface
{
    public function __construct(private Context $context) {}

    public function execute(): int
    {
        // $base = $this->context->kaizenDir();

        // foreach (['enums','consts','traits','survey_package','point_package'] as $dir) {
        //     @mkdir($base . $dir, 0777, true);
        // }
        $source = realpath(__DIR__ . "/../../../scalfold/");
        echo 'SOURCE**'.  $source;
        $destination = $this->context->kaizenDir();

        Filesystem::copyRecursive($source, $destination);

        echo "✔ Module  installed successfully\n";
        echo "→ {$destination}\n";

        echo "Kaizen initialized at {$destination}\n";
        return 0;
    }
}
