<?php

declare(strict_types=1);

namespace ViachViach\CustomValidationBundle\Enum;

final class PostgreSerialEnum
{
    public const MAX_BIG_SERIAL = 9_223_372_036_854_775_807;

    public const MAX_SERIAL = 2_147_483_647;

    public const MAX_SMALL_SERIAL = 32_767;
}
