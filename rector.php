<?php

return static function (Rector\Config\RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/vendor/pekral/rector-rules/rector.php');
    $rectorConfig->paths([__DIR__ . '/src', __DIR__ . '/tests', __DIR__ . '/bin']);
};