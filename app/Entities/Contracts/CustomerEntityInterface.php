<?php

namespace App\Entities\Contracts;

interface CustomerEntityInterface
{
    public function getName(): ?string;
    public function getLastname(): ?string;
    public function getCPF(): ?string;
    public function getCNPJ(): ?string;
    public function isLegalEntity(): bool;
}
