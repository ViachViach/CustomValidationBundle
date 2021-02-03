<?php

declare(strict_types=1);

namespace CustomValidationBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class IntegerIdConstraintValidator extends ConstraintValidator
{
    /**
     * @inheritDoc
     */
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof IntegerIdConstraint) {
            throw new UnexpectedTypeException($constraint, IntegerIdConstraint::class);
        }

        if ($value === null || $value === '') {
            return;
        }

        $intVal = (int) $value;

        if ($intVal < $constraint->getMin() || $intVal >= $constraint->getMax()) {
            $this->context
                ->buildViolation($constraint->getMessage())
                ->setParameter('{{value}}', (string) $value)
                ->atPath('id')
                ->addViolation();
        }
    }
}
