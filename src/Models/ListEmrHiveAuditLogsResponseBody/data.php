<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListEmrHiveAuditLogsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListEmrHiveAuditLogsResponseBody\data\pagedData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var pagedData[]
     */
    public $pagedData;

    /**
     * @example 5
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'pagedData'  => 'PagedData',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pagedData) {
            $res['PagedData'] = [];
            if (null !== $this->pagedData && \is_array($this->pagedData)) {
                $n = 0;
                foreach ($this->pagedData as $item) {
                    $res['PagedData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PagedData'])) {
            if (!empty($map['PagedData'])) {
                $model->pagedData = [];
                $n                = 0;
                foreach ($map['PagedData'] as $item) {
                    $model->pagedData[$n++] = null !== $item ? pagedData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
