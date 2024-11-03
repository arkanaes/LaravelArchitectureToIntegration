<?php

namespace App\Repositories\Contracts;

use App\Entities\Contracts\CustomerEntityInterface;

interface ERPCustomerInterface
{
    public function getCustomer(int $customerId): ?CustomerEntityInterface;
}
