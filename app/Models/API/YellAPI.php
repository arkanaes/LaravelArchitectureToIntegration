<?php 
namespace App\Models\API;

class YellAPI 
{
    public function get(int $customerId)
    {
        return <<<json
            {
            "id": "1",
            "name": "João",
            "lastname": "Silva",
            "cpf": "123.456.789-01"
            }
        json;
    }
}
