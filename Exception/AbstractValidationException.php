<?php

declare(strict_types=1);

namespace CustomValidationBundle\Exception;

use Exception;
use Symfony\Component\Validator\ConstraintViolationListInterface;

class AbstractValidationException extends Exception
{
    private ConstraintViolationListInterface $constraintViolationList;

    public function __construct(ConstraintViolationListInterface $constraintViolationList)
    {
        $this->constraintViolationList = $constraintViolationList;

        parent::__construct('Validation exception');
    }

    public function getValidationInfo()
    {
    }
}
