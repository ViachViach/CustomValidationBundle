<?php

declare(strict_types=1);

namespace CustomValidationBundle\DTO;

class ValidationExceptionInfo
{
    private string $message;

    private string $name;

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return ValidationExceptionInfo
     */
    public function setMessage(string $message): ValidationExceptionInfo
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return ValidationExceptionInfo
     */
    public function setName(string $name): ValidationExceptionInfo
    {
        $this->name = $name;
        return $this;
    }
}
