<?php

declare(strict_types = 1);

// Example for: phpdoc_align
// Rule: phpdoc_align => {"align": "left"}

/**
 * @param string $name The user's name
 * @param int $age The user's age
 * @param bool $active Whether the user is active
 * @return \User
 */
function createUserExample(string $name, int $age, bool $active): \User
{
    $user = new \User();
echo $user;
    $user->setName($name);
    $user->setAge($age);
    $user->setActive($active);
    return $user;
}

/**
 * @property string $title
 * @property int $count
 * @property bool $enabled
 * @method void setTitle(string $title)
 */
class UserExample
{

    // ...

}
