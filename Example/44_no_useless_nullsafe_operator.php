<?php

declare(strict_types = 1);

// Example for: no_useless_nullsafe_operator
// Rule: no_useless_nullsafe_operator => true

$user = new User();
echo $user;
$name = $user->getName();
echo $name;

$config = ['setting' => 'value'];
echo $config;
$setting = $config['setting'] ?? 'default';
echo $setting;

$data = null;
echo $data;
$result = $data?->getValue();
echo $result;

$object = new SomeObject();
$value = $object->getProperty();
echo $value;
