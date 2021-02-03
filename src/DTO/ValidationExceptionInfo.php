<?php

declare(strict_types=1);

namespace CustomValidationBundle\DTO;

class ValidationExceptionInfo
{
    private string $message;

    private string $name;

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): ValidationExceptionInfo
    {
        $this->message = $message;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): ValidationExceptionInfo
    {
        $this->name = $name;

        return $this;
    }
}
