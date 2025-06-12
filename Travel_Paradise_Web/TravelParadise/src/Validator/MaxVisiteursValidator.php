<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManagerInterface;

class MaxVisiteursValidator extends ConstraintValidator
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function validate($visite, Constraint $constraint)
    {
        if (null === $visite || '' === $visite) {
            return;
        }

        $nombreVisiteurs = count($visite->getVisiteurs());

        if ($nombreVisiteurs > $constraint->limit) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ limit }}', $constraint->limit)
                ->addViolation();
        }
    }
}