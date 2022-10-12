<?php

namespace App\Repositories;

use App\Models\Trainer;


class TrainerRepository
{
    private $trainer;

    public function __construct()
    {
        $this->trainer = new Trainer();
    }

    public function create(array $payload): bool
    {
        Trainer::create($payload);

        return true;
    }


}
