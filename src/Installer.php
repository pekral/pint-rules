<?php

declare(strict_types = 1);

namespace Pekral\PintRules;

final class Installer
{

    /**
     * @param array<int, string> $argv
     */
    public static function run(array $argv): int
    {
        $command = $argv[1] ?? 'help';
        $force = in_array('--force', $argv, true);

        try {
            if ($command === 'help') {
                return self::showHelp();
            }

            if ($command !== 'install') {
                fwrite(STDERR, sprintf('Unknown command: %s%s', $command, PHP_EOL));

                return 1;
            }

            return self::install($force);
        } catch (InstallerFailure $exception) {
            fwrite(STDERR, $exception->getMessage() . PHP_EOL);

            return 1;
        }
    }

    private static function showHelp(): int
    {
        echo "Usage:\n";
        echo "  vendor/bin/pint-rules install [--force]\n\n";
        echo "Options:\n";
        echo "  --force  Overwrite existing pint.json in project root.\n";

        return 0;
    }

    private static function install(bool $force): int
    {
        $root = InstallerPath::resolveProjectRoot();
        $target = InstallerPath::resolveTargetPintJson($root);
        $source = InstallerPath::resolveSourcePintJson();

        if (self::isSameFile($source, $target)) {
            echo 'pint.json installed.' . PHP_EOL;

            return 0;
        }

        if (file_exists($target) && !$force) {
            echo 'pint.json already exists. Use --force to overwrite.' . PHP_EOL;

            return 0;
        }

        self::copyPintJson($source, $target);

        echo 'pint.json installed.' . PHP_EOL;

        return 0;
    }

    private static function isSameFile(string $source, string $target): bool
    {
        $sourceReal = realpath($source);
        $targetReal = realpath($target);

        if ($sourceReal === false || $targetReal === false) {
            return false;
        }

        return $sourceReal === $targetReal;
    }

    private static function copyPintJson(string $source, string $target): void
    {
        self::removeExistingTarget($target);

        if (!copy($source, $target)) {
            throw InstallerFailure::fileCopyFailed($source, $target);
        }
    }

    private static function removeExistingTarget(string $destination): void
    {
        if (!file_exists($destination)) {
            return;
        }

        if (is_dir($destination)) {
            throw InstallerFailure::removalFailed($destination);
        }

        set_error_handler(static fn (): bool => true);
        $deleted = unlink($destination);
        restore_error_handler();

        if ($deleted === false) {
            throw InstallerFailure::removalFailed($destination);
        }
    }

}
