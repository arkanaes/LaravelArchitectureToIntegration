<?php

namespace App\Services;

use App\Entities\Contracts\CustomerEntityInterface;
use App\Models\Customer;
use App\Repositories\Contracts\ERPCustomerInterface;

class CustomerServices
{
    public function __construct(protected ERPCustomerInterface $ERPCustomer) {}

    public function customerExistsInIntegration(CustomerEntityInterface $customerEntity): bool
    {
        $isLegalEntity = $customerEntity->isLegalEntity();

        $taxvat = $isLegalEntity ? $customerEntity->getCNPJ()
                                 : $customerEntity->getCPF();

        return Customer::where('taxvat', $taxvat)->exists();
    }

    public function getCustomerERP(int $customerId)
    {
       return $this->ERPCustomer->getCustomer($customerId);
    }
}
