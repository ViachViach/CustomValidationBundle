<?php

declare(strict_types=1);

namespace CustomValidationBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class IntegerIdConstraint extends Constraint
{
    private int $min = 1;

    private int $max;

    /**
     * @param int $max
     */
    public function __construct(int $max = PHP_INT_MAX)
    {
        parent::__construct();
        $this->setMax($max);
    }

    public function getMessage(): string
    {
        return sprintf('Value {{value}} must be between %d and %d.', $this->min, $this->max);
    }

    public function validatedBy(): string
    {
        return IntegerIdConstraintValidator::class;
    }

    public function getMin(): int
    {
        return $this->min;
    }

    public function getMax(): int
    {
        return $this->max;
    }

    public function setMax(int $max): IntegerIdConstraint
    {
        $this->max = $max;

        return $this;
    }
}
