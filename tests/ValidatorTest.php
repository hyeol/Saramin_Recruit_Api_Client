<?php

class ValidatorTest extends BaseTestCase
{
    /**
     * @var \Saramin\RecruitApi\Validator
     */
    private $validator;

    public function setUp()
    {
        parent::setUp();

        $this->validator = new \Saramin\RecruitApi\Validator();
    }

    /** @test */
    public function validateComplexRules()
    {
        $mock = $this->mockParameterInterface();
        $this->setRules($mock, [
            'field' => [
                'numeric',
                'min:10',
                'max:20',
            ],
        ]);
        $this->setData($mock, [
            'field' => 'asdf',
        ]);

        $this->validateWithExpectException($mock);

        $mock = $this->mockParameterInterface();
        $this->setRules($mock, [
            'field' => [
                'numeric',
                'min:10',
                'max:20',
            ],
        ]);
        $this->setData($mock, [
            'field' => '0',
        ]);

        $this->validateWithExpectException($mock);

        $mock = $this->mockParameterInterface();
        $this->setRules($mock, [
            'field' => [
                'numeric',
                'min:10',
                'max:20',
            ],
        ]);
        $this->setData($mock, [
            'field' => '30',
        ]);

        $this->validateWithExpectException($mock);

        $mock = $this->mockParameterInterface();
        $this->setRules($mock, [
            'field' => [
                'numeric',
                'min:10',
                'max:20',
            ],
        ]);
        $this->setData($mock, [
            'field' => '15',
        ]);

        $this->validate($mock);
    }

    /** @test */
    public function validateNumericValue()
    {
        $mock = $this->mockParameterInterface();
        $this->setRules($mock, [
            'field' => [
                'numeric',
            ],
        ]);
        $this->setData($mock, [
            'field' => 'asdf3',
        ]);

        $this->validateWithExpectException($mock);

        $mock = $this->mockParameterInterface();
        $this->setRules($mock, [
            'field' => [
                'numeric',
            ],
        ]);
        $this->setData($mock, [
            'field' => 0,
        ]);

        $this->validate($mock);
    }

    /** @test */
    public function validateEnumValue()
    {
        $mock = $this->mockParameterInterface();
        $this->setRules($mock, [
            'field' => [
                'in:a,b,c',
            ],
        ]);
        $this->setData($mock, [
            'field' => '1',
        ]);

        $this->validateWithExpectException($mock);

        $mock = $this->mockParameterInterface();
        $this->setRules($mock, [
            'field' => [
                'in:a,b,c',
            ],
        ]);
        $this->setData($mock, [
            'field' => 'a',
        ]);

        $this->validate($mock);
    }

    /** @test */
    public function validateMin()
    {
        $mock = $this->mockParameterInterface();
        $this->setRules($mock, [
            'field' => [
                'min:10',
            ],
        ]);
        $this->setData($mock, [
            'field' => 1,
        ]);

        $this->validateWithExpectException($mock);

        $mock = $this->mockParameterInterface();
        $this->setRules($mock, [
            'field' => [
                'min:10',
            ],
        ]);
        $this->setData($mock, [
            'field' => 10,
        ]);

        $this->validate($mock);
    }

    /** @test */
    public function validateMax()
    {
        $mock = $this->mockParameterInterface();
        $this->setRules($mock, [
            'field' => [
                'max:10',
            ],
        ]);
        $this->setData($mock, [
            'field' => 15,
        ]);

        $this->validateWithExpectException($mock);

        $mock = $this->mockParameterInterface();
        $this->setRules($mock, [
            'field' => [
                'max:10',
            ],
        ]);
        $this->setData($mock, [
            'field' => 1,
        ]);

        $this->validate($mock);
    }

    /**
     * @return \Mockery\MockInterface
     */
    private function mockParameterInterface()
    {
        $mock = Mockery::mock('Saramin\\RecruitApi\\Contracts\\ParameterInterface');

        return $mock;
    }

    /**
     * @param \Mockery\MockInterface $mock
     * @param $rules
     *
     * @return mixed
     */
    private function setRules($mock, $rules)
    {
        $mock->shouldReceive('rules')
            ->andReturn($rules);

        return $mock;
    }

    /**
     * @param \Mockery\MockInterface $mock
     * @param $data
     *
     * @return \Mockery\MockInterface
     */
    private function setData($mock, $data)
    {
        $mock->shouldReceive('getQueryArray')
            ->andReturn($data);

        return $mock;
    }

    /**
     * @param \Mockery\MockInterface $mock
     */
    private function validateWithExpectException($mock)
    {
        try {
            $this->validator->validate($mock);

            $this->assertTrue(false);
        } catch (\Exception $e) {
            if (!$e instanceof Saramin\RecruitApi\Exceptions\SriValidationException) {
                $this->assertTrue(false);
            }
        }

        $this->assertTrue(true);
    }

    /**
     * @param \Mockery\MockInterface $mock
     */
    private function validate($mock)
    {
        $this->validator->validate($mock);
    }
}
