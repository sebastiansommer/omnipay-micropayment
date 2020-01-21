<?php
declare(strict_types = 1);
namespace Omnipay\Micropayment\Message\Response;

use Omnipay\Common\Message\AbstractResponse;

class CustomerAddressResponse extends AbstractResponse
{
    /**
     * @return bool
     */
    public function isSuccessful(): bool
    {
        return isset($this->data['error']) && boolval($this->data['error']) === false;
    }
}
