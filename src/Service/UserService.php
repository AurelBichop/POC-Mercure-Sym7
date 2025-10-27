<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\UserRepository;

readonly class UserService
{
    public function __construct(
        private UserRepository $userRepository
    ) {
    }

    /**
     * @return User[]
     */
    public function findAll(): array
    {
        return $this->userRepository->findBy([], ['username' => 'ASC']);
    }
}
