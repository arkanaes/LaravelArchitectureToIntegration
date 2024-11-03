<?php

namespace App\Adapters;

use apimatic\jsonmapper\JsonMapper;
use App\Entities\Yell\YellCustomerEntity;

class YellCustomerAdapter
{
    public function __construct(protected JsonMapper $mapper) {}

    public function map(object $jsonCustomer): YellCustomerEntity
    {
        return $this->mapper->map($jsonCustomer, new YellCustomerEntity);
    }
}
