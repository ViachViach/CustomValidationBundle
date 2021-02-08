<?php

declare(strict_types=1);

namespace ViachViach\CustomValidationBundle\Service;

use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use ViachViach\CustomValidationBundle\Exception\ValidationException;

class ValidationService implements ValidationServiceInterface
{
    private ValidatorInterface $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    public function validate(object $value): void
    {
        $errorValidator = $this->validator->validate($value);
        $this->checkConstraintValidation($errorValidator);
    }

    /**
     * @throws ValidationException
     */
    private function checkConstraintValidation(ConstraintViolationListInterface $constraintViolationList): void
    {
        if ($constraintViolationList->count() !== 0) {
            throw new ValidationException($constraintViolationList);
        }
    }
}
