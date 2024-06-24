<?php

namespace Esteveli\SpainValidator\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class MobilePhone extends Constraint
{
    public string $message = 'validator.phone.mobile.not_valid';
}