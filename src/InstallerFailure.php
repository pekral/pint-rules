<?php

declare(strict_types = 1);

namespace Pekral\PintRules;

use RuntimeException;

final class InstallerFailure extends RuntimeException
{

    public static function missingSource(string $path): self
    {
        return new self(sprintf('Source not found: %s', $path));
    }

    public static function fileCopyFailed(string $source, string $destination): self
    {
        return new self(sprintf('Unable to copy %s to %s.', $source, $destination));
    }

    public static function removalFailed(string $path): self
    {
        return new self(sprintf('Cannot remove: %s', $path));
    }

}
