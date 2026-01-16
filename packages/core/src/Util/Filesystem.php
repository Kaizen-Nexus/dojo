<?php
namespace KaizenNexus\Core\Util;

class Filesystem
{
    public static function copyRecursive(string $src, string $dst): void
    {
        if (!is_dir($src)) {
            return;
        }

        if (!is_dir($dst)) {
            mkdir($dst, 0777, true);
        }

        foreach (scandir($src) as $file) {
            if ($file === '.' || $file === '..') {
                continue;
            }

            $from = $src . '/' . $file;
            $to   = $dst . '/' . $file;

            if (is_dir($from)) {
                self::copyRecursive($from, $to);
            } else {
                copy($from, $to);
            }
        }
    }
}
