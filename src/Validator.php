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
                } else if (!call_user_func_array([$this, 'validate' . $checkingRule], [$data[$field], $params])) {
                    throw new SriValidationException();
                }
            }
        }
    }

    /**
     * @param $value
     * @param $parameter
     *
     * @return bool
     */
    private function validateRegex($value, $parameter)
    {
        return preg_match('/' . $parameter . '/', $value) == 1;
    }

    /**
     * @param $value
     *
     * @return bool
     */
    private function validateNumeric($value)
    {
        return is_numeric($value);
    }

    /**
     * @param $value
     *
     * @return bool
     */
    private function validateString($value)
    {
        return is_string($value);
    }

    /**
     * @param $value
     * @param $parameter
     *
     * @return bool
     */
    private function validateIn($value, $parameter)
    {
        return in_array($value, explode(',', $parameter));
    }

    /**
     * @param $value
     * @param $parameter
     *
     * @return bool
     */
    private function validateMin($value, $parameter)
    {
        return $value >= $parameter;
    }

    /**
     * @param $value
     * @param $parameter
     *
     * @return bool
     */
    private function validateMax($value, $parameter)
    {
        return $value <= $parameter;
    }

    /**
     * @param $value
     *
     * @return bool
     */
    private function validateDate($value)
    {
        return $this->isDateFormat($value, 'Y-m-d');
    }

    /**
     * @param $value
     *
     * @return bool
     */
    private function validateDateTime($value)
    {
        return $this->isDateFormat($value, 'Y-m-d H:i:s');
    }

    /**
     * @param $date
     * @param string $format
     * @return bool
     */
    private function isDateFormat($date, $format = 'Y-m-d H:i:s')
    {
        $d = \DateTime::createFromFormat($format, $date);

        return $d && $d->format($format) == $date;
    }
}
