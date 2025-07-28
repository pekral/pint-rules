<?php

declare(strict_types = 1);

// Example for: attribute_empty_parentheses
// Rule: attribute_empty_parentheses => true

#[IsGranted('ROLE_ADMIN')]
#[Route('/api/users')]
class UserController
{

    #[IsGranted('ROLE_USER')]
    #[Route('/{id}', methods: ['GET'])]
    public function show(int $id): Response
    {
        echo "Showing user with ID: {$id}";

        return new Response();
    }

}

#[Entity]
#[Table(name: 'users')]
class User
{

    #[Column(type: 'string')]
    private string $name;

}
