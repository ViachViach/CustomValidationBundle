<?php

declare(strict_types=1);

namespace ViachViach\CustomValidationBundle\Exception;

use Exception;
use InvalidArgumentException;
use Symfony\Component\Validator\ConstraintViolationInterface;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use ViachViach\CustomValidationBundle\DTO\ValidationExceptionInfo;

class AbstractValidationException extends Exception
{
    private ConstraintViolationListInterface $constraintViolationList;

    public function __construct(ConstraintViolationListInterface $constraintViolationList)
    {
        $this->constraintViolationList = $constraintViolationList;

        parent::__construct('Validation exception');
    }

    /**
     * @return ValidationExceptionInfo[]
     */
    public function getValidationInfo(): array
    {
        $errors = [];

        foreach ($this->constraintViolationList as $error) {
            if (!$error instanceof ConstraintViolationInterface) {
                throw new InvalidArgumentException();
            }

            $info = new ValidationExceptionInfo();
            $info->setName($error->getPropertyPath());
            $info->setMessage($error->getMessage());

            $errors[] = $info;
        }

        return $errors;
    }
}
