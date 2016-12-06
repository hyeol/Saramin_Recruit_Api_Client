<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class Fields implements ParameterInterface
{
    private $fields = [];
    private $fieldArray = [
        'posting-date', // 날짜/시간 형식의 게시일시
        'expiration-date', // 날짜/시간 형식의 마감일시
        'keyword-code', // 업직종 키워드(상세분류) 코드
        'count', // 조회수/지원자수/댓글수
    ];

    /**
     * fields constructor.
     *
     * @param string $fields
     */
    public function __construct($fields)
    {
        $this->fields = $fields;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return ['fields' => ['in:'.implode(',', $this->fieldArray)]];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return ['fields' => implode(' ', $this->fields)];
    }
}
