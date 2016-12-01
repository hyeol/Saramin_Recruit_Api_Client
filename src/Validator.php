<?php

namespace Saramin\RecruitApiClient;


use Saramin\RecruitApiClient\Contracts\ParameterInterface;
use Saramin\RecruitApiClient\Exceptions\SriValidationException;

class Validator
{
    /**
     * @param ParameterInterface $parameter
     * @throws SriValidationException
     */
    public function validate(ParameterInterface $parameter)
    {
        $data = $parameter->getQueryArray();
        $rules = $parameter->rules();

        foreach ($rules as $field => $rule) {
            foreach ($rule as $checker) {
                if (! method_exists($this, 'validate' . $checker)) {
                    throw new SriValidationException();
                } else if (! call_user_func([$this, 'validate' . $checker], $data[$field])) {
                    throw new SriValidationException();
                }
            }
        }
    }

    /**
     * @param $value
     * @return bool
     */
    public function validateInteger($value)
    {
        return is_numeric($value);
    }
}