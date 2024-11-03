<?php 

namespace App\Repositories\Yell;

use App\Adapters\YellCustomerAdapter;
use App\Entities\Contracts\CustomerEntityInterface;
use App\Entities\Yell\YellCustomerEntity;
use App\Exceptions\CustomerApiException;
use App\Models\API\YellAPI;
use App\Repositories\Contracts\ERPCustomerInterface;
class YellCustomerRepository implements ERPCustomerInterface
{
    public function __construct(protected YellAPI $api, protected YellCustomerAdapter $adapter){}
    public function getCustomer(int $customerId): ?CustomerEntityInterface
    {
        $response = $this->api->get($customerId);

        // throw_if($response->failed(), new CustomerApiException('Falha na requisição', $response));

        // // return $this->adapter->map($response->object());
        return $this->adapter->map(json_decode($response));
    }
}