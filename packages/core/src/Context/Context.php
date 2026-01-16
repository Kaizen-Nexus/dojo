<?php
namespace KaizenNexus\Core\Context;

use RuntimeException;

class Context
{
    private string $dataDir;

    public function __construct(string $dataDir)
    {
        $real = realpath($dataDir);
        if ($real === false || !is_dir($real)) {
            throw new RuntimeException("Invalid data dir: {$dataDir}");
        }

        $this->dataDir = rtrim($real, '/') . '/';
    }

    public function dataDir(): string
    {
        return $this->dataDir;
    }

    public function kaizenDir(): string
    {
        return $this->dataDir . 'kaizen-nexus/';
    }

    public function moduleDir(): string
    {
        return $this->dataDir . 'downloads/module/';
    }
}
