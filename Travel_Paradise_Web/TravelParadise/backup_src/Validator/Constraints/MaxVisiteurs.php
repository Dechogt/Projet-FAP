<?php

namespace App\Validator\Constraints;

use Attribute;
use Symfony\Component\Validator\Constraint;

#[Attribute]
class MaxVisiteurs extends Constraint
{
    public $message = 'Une visite ne peut pas avoir plus de {{ limit }} visiteurs.';
    public $limit = 15;

    public function getTargets(): string|array
    {
        return self::CLASS_CONSTRAINT; 
    }
}