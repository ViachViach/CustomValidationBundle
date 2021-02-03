<?php

declare(strict_types=1);

namespace CustomValidationBundle\Exception;

use Symfony\Component\Validator\ConstraintViolationListInterface;

class ValidationException extends AbstractValidationException
{
    public function __construct(ConstraintViolationListInterface $constraintViolationList)
    {
        parent::__construct($constraintViolationList);
    }
}
