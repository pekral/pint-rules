<?php

declare(strict_types = 1);

// Example for: ordered_attributes
// Rule: ordered_attributes => true

#[IsGranted('ROLE_ADMIN')]
#[Route('/api/users')]
class UserControllerExample
{

    #[IsGranted('ROLE_USER')]
    #[Route('/{id}', methods: ['GET'])]
    public function show(int $id): Response
    {
        echo "Showing user with ID: {$id}";
        // ...
    }

}

#[ApiResource]
#[Entity]
#[Table(name: 'users')]
class UserEntity
{

    // ...

}
