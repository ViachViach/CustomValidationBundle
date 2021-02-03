<?php

declare(strict_types=1);

namespace CustomValidationBundl\Tests\Unit;

use CustomValidationBundle\Validator\IntegerIdConstraint;
use CustomValidationBundle\Validator\IntegerIdConstraintValidator;
use PHPStan\Testing\TestCase;
use Symfony\Component\Validator\Context\ExecutionContext;
use Symfony\Component\Validator\Violation\ConstraintViolationBuilder;

class IntegerIdValidateUnit extends TestCase
{
    private ExecutionContext $executionContextBuilderMock;

    public function testValidation(): void
    {
        $id = rand(1, PHP_INT_MAX);

        $integerConstraintValidator = new IntegerIdConstraintValidator();
        $integerConstraintValidator->initialize($this->executionContextBuilderMock);
        $integerConstraintValidator->validate($id, new IntegerIdConstraint());
    }

    protected function setUp(): void
    {
        $this->executionContextBuilderMock = $this->getMockBuilder(ExecutionContext::class)
            ->disableOriginalConstructor()
            ->getMock();

        $constraintViolationBuilderMock = $this->getMockBuilder(ConstraintViolationBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        $constraintViolationBuilderMock
            ->expects($this->once())
            ->method('setParameter')
            ->willReturn($constraintViolationBuilderMock);

        $constraintViolationBuilderMock
            ->expects($this->once())
            ->method('atPath')
            ->willReturn($constraintViolationBuilderMock);


        $constraintViolationBuilderMock
            ->expects($this->once())
            ->method('addViolation')
            ->willReturn(null);

        $this->executionContextBuilderMock->method('buildViolation')->willReturn($constraintViolationBuilderMock);
    }
}
