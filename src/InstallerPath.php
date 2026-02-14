<?php

declare(strict_types = 1);

namespace Pekral\PintRules;

final class InstallerPath
{

    private const string PINT_JSON = 'pint.json';

    public static function resolveProjectRoot(): string
    {
        return self::findProjectRoot();
    }

    public static function resolveSourcePintJson(): string
    {
        $packageSource = self::getPackageDirectory() . '/' . self::PINT_JSON;

        if (is_file($packageSource)) {
            return $packageSource;
        }

        throw InstallerFailure::missingSource($packageSource);
    }

    public static function resolveTargetPintJson(string $root): string
    {
        return $root . '/' . self::PINT_JSON;
    }

    private static function getPackageDirectory(): string
    {
        return dirname(__DIR__);
    }

    private static function findProjectRoot(): string
    {
        $dir = getcwd();

        if ($dir === false) {
            return sys_get_temp_dir();
        }

        while ($dir !== '' && !self::isFilesystemRoot($dir) && !file_exists($dir . '/composer.json')) {
            $dir = dirname($dir);
        }

        return $dir;
    }

    private static function isFilesystemRoot(string $path): bool
    {
        if ($path === '' || $path === DIRECTORY_SEPARATOR) {
            return true;
        }

        return preg_match('/^[A-Za-z]:\\\\?$/', $path) === 1;
    }

}
