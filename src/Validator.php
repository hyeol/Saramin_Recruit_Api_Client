<?php

namespace Saramin\RecruitApi;

use Saramin\RecruitApi\Contracts\ParameterInterface;
use Saramin\RecruitApi\Exceptions\SriValidationException;

class Validator
{
    /**
     * @param ParameterInterface $parameter
     *
     * @throws SriValidationException
     */
    public function validate(ParameterInterface $parameter)
    {
        $data  = $parameter->getQueryArray();
        $rules = $parameter->rules();

        foreach ($rules as $field => $rule) {
            foreach ($rule as $checker) {
                $explodedChecker = explode(':', $checker);
                $checkingRule    = $explodedChecker[0];

                $params = null;
                if (count($explodedChecker) >= 2) {
                    $params = $explodedChecker[1];
                }

                $checkingRule = ucfirst($checkingRule);

                if (!method_exists($this, 'validate' . $checkingRule)) {
                    throw new SriValidationException();
                } elseif (!call_user_func_array([$this, 'validate' . $checkingRule], [$data[$field], $params])) {
                    throw new SriValidationException();
                }
            }
        }
    }

    /**
     * @param $value
     *
     * @return bool
     */
    public function validateNumeric($value)
    {
        return is_numeric($value);
    }

    /**
     * @param $value
     *
     * @return bool
     */
    public function validateString($value)
    {
        return is_string($value);
    }

    /**
     * @param $value
     * @param $parameter
     *
     * @return bool
     */
    public function validateIn($value, $parameter)
    {
        return in_array($value, explode(',', $parameter));
    }

    /**
     * @param $value
     * @param $parameter
     *
     * @return bool
     */
    public function validateMin($value, $parameter)
    {
        return $value >= $parameter;
    }

    /**
     * @param $value
     * @param $parameter
     *
     * @return bool
     */
    public function validateMax($value, $parameter)
    {
        return $value <= $parameter;
    }

    /**
     * @param $value
     * @param $parameter
     *
     * @return bool
     */
    public function validateDate($value, $parameter)
    {
        return true;
    }
}
