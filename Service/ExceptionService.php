<?php

declare(strict_types=1);

namespace CustomValidationBundle\Service;

use CustomValidationBundle\Exception\ValidationException;
use Symfony\Component\Validator\ConstraintViolationListInterface;

class ExceptionService
{
    /**
     * @param ConstraintViolationListInterface $constraintViolationList
     * @throws ValidationException
     */
    public function checkConstraintValidation(ConstraintViolationListInterface $constraintViolationList): void
    {
        if ($constraintViolationList->count() !== 0) {
            throw new ValidationException($constraintViolationList);
        }
    }
}
