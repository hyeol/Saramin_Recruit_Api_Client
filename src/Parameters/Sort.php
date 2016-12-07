<?php

namespace Saramin\RecruitApi\Parameters;

use Saramin\RecruitApi\Contracts\ParameterInterface;

class Sort implements ParameterInterface
{
    private $sort = '';
    private $sortArray = [
        'pd', // 게시일 역순(기본값)
        'pa', //게시일순
        'ud', //최근수정순
        'ua', //수정일 정순
        'da', //마감일 정순
        'dd', //마감일 역순
        'rc', //조회수 역순
        'ac', //지원자수 역순
        're', //답변수 역순
    ];

    /**
     * Sort constructor.
     *
     * @param string $sort
     */
    public function __construct($sort)
    {
        $this->sort = $sort;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'sort' => [
                'in:' . join(',', $this->sortArray)
            ]
        ];
    }

    /**
     * @return array
     */
    public function getQueryArray()
    {
        return ['sort' => $this->sort];
    }
}
