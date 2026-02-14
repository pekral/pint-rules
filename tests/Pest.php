<?php

declare(strict_types = 1);

function pintRulesCreateProjectRoot(): string
{
    $root = sys_get_temp_dir() . '/pint-rules-' . bin2hex(random_bytes(4));
    pintRulesEnsureDirectory($root);
    file_put_contents($root . '/composer.json', '{}');

    return $root;
}

function pintRulesEnsureDirectory(string $directory): void
{
    if (is_dir($directory)) {
        return;
    }

    mkdir($directory, 0777, true);
}

function pintRulesWriteFile(string $path, string $content): void
{
    $directory = dirname($path);
    pintRulesEnsureDirectory($directory);
    file_put_contents($path, $content);
}

function pintRulesRemoveDirectory(string $directory): void
{
    if (is_file($directory)) {
        unlink($directory);

        return;
    }

    if (!is_dir($directory)) {
        return;
    }

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($directory, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST,
    );

    foreach ($iterator as $fileInfo) {
        if (!$fileInfo instanceof SplFileInfo) {
            continue;
        }

        if ($fileInfo->isDir()) {
            rmdir($fileInfo->getPathname());

            continue;
        }

        unlink($fileInfo->getPathname());
    }

    rmdir($directory);
}
