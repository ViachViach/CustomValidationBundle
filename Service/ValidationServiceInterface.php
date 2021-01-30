<?php

declare(strict_types=1);

namespace CustomValidationBundle\Service;

interface ValidationServiceInterface
{
    public function validate(object $value): void;
}
