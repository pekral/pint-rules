<?php

declare(strict_types = 1);

use Pekral\PintRules\Installer;
use Pekral\PintRules\InstallerFailure;
use Pekral\PintRules\InstallerPath;

test('run shows help when executed without arguments', function (): void {
    ob_start();
    $exitCode = Installer::run(['pint-rules']);
    $output = (string) ob_get_clean();

    expect($exitCode)->toBe(0);
    expect($output)->toContain('Usage:');
});

test('run returns error code for unknown command', function (): void {
    $exitCode = Installer::run(['pint-rules', 'unknown']);

    expect($exitCode)->toBe(1);
});

test('install creates pint.json when it does not exist', function (): void {
    $root = pintRulesCreateProjectRoot();
    $cwd = getcwd();
    $originalCwd = $cwd !== false ? $cwd : '';

    try {
        chdir($root);
        ob_start();
        $exitCode = Installer::run(['pint-rules', 'install']);
        $output = (string) ob_get_clean();

        $target = $root . '/pint.json';

        expect($exitCode)->toBe(0);
        expect(is_file($target))->toBeTrue();
        expect($output)->toContain('pint.json installed.');
        expect(json_decode((string) file_get_contents($target), true, 512, JSON_THROW_ON_ERROR))->toBeArray();
    } finally {
        if ($originalCwd !== '') {
            chdir($originalCwd);
        }

        pintRulesRemoveDirectory($root);
    }
});

test('install does not overwrite existing pint.json without force', function (): void {
    $root = pintRulesCreateProjectRoot();
    pintRulesWriteFile($root . '/pint.json', '{"preset":"custom"}');
    $cwd = getcwd();
    $originalCwd = $cwd !== false ? $cwd : '';

    try {
        chdir($root);
        ob_start();
        $exitCode = Installer::run(['pint-rules', 'install']);
        $output = (string) ob_get_clean();

        expect($exitCode)->toBe(0);
        expect($output)->toContain('already exists');
        expect(file_get_contents($root . '/pint.json'))->toBe('{"preset":"custom"}');
    } finally {
        if ($originalCwd !== '') {
            chdir($originalCwd);
        }

        pintRulesRemoveDirectory($root);
    }
});

test('install overwrites existing pint.json with force flag', function (): void {
    $root = pintRulesCreateProjectRoot();
    pintRulesWriteFile($root . '/pint.json', '{"preset":"old"}');
    $cwd = getcwd();
    $originalCwd = $cwd !== false ? $cwd : '';

    try {
        chdir($root);
        ob_start();
        $exitCode = Installer::run(['pint-rules', 'install', '--force']);
        ob_end_clean();

        $content = (string) file_get_contents($root . '/pint.json');
        $decoded = json_decode($content, true, 512, JSON_THROW_ON_ERROR);

        expect($exitCode)->toBe(0);
        expect($decoded)->toBeArray();
        expect($decoded['preset'] ?? null)->not->toBe('old');
    } finally {
        if ($originalCwd !== '') {
            chdir($originalCwd);
        }

        pintRulesRemoveDirectory($root);
    }
});

test('InstallerFailure missingSource creates exception with correct message', function (): void {
    $exception = InstallerFailure::missingSource('/nonexistent/path');

    expect($exception)->toBeInstanceOf(InstallerFailure::class);
    expect($exception->getMessage())->toBe('Source not found: /nonexistent/path');
});

test('InstallerFailure fileCopyFailed creates exception with correct message', function (): void {
    $exception = InstallerFailure::fileCopyFailed('/source/file', '/dest/file');

    expect($exception)->toBeInstanceOf(InstallerFailure::class);
    expect($exception->getMessage())->toBe('Unable to copy /source/file to /dest/file.');
});

test('InstallerFailure removalFailed creates exception with correct message', function (): void {
    $exception = InstallerFailure::removalFailed('/some/path');

    expect($exception)->toBeInstanceOf(InstallerFailure::class);
    expect($exception->getMessage())->toBe('Cannot remove: /some/path');
});

test('resolveProjectRoot returns directory with composer.json', function (): void {
    $root = pintRulesCreateProjectRoot();
    $cwd = getcwd();
    $originalCwd = $cwd !== false ? $cwd : '';

    try {
        chdir($root);
        $result = InstallerPath::resolveProjectRoot();
        $expected = realpath($root);

        expect($result)->toBe($expected !== false ? $expected : $root);
    } finally {
        if ($originalCwd !== '') {
            chdir($originalCwd);
        }

        pintRulesRemoveDirectory($root);
    }
});

test('resolveTargetPintJson returns correct path', function (): void {
    $result = InstallerPath::resolveTargetPintJson('/project/root');

    expect($result)->toBe('/project/root/pint.json');
});

test('resolveSourcePintJson returns path to package pint.json', function (): void {
    $result = InstallerPath::resolveSourcePintJson();

    expect($result)->toEndWith('pint.json');
    expect(is_file($result))->toBeTrue();
});
