<?php

namespace App\Entities\Yell;

use App\Entities\Contracts\CustomerEntityInterface;

class YellCustomerEntity implements CustomerEntityInterface
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $lastName;
    /**
     * @var string
     */
    public $cpf;
    /**
     * @var string
     */
    public $cnpj;


    public function getName(): ?string
    {
        return $this->name;
    }
    public function getLastname(): ?string
    {
        return $this->lastName;
    }
    public function getCPF(): ?string
    {
        return $this->cpf;
    }
    public function getCNPJ(): ?string
    {
        return $this->cnpj;
    }

    public function isLegalEntity(): bool
    {
       return empty($this->getCNPJ());
    }
}