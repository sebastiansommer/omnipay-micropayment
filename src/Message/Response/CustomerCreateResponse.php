<?php
declare(strict_types = 1);
namespace Omnipay\Micropayment\Message\Response;

use Omnipay\Common\Message\AbstractResponse;

class CustomerCreateResponse extends AbstractResponse
{
    /**
     * @return bool
     */
    public function isSuccessful(): bool
    {
        return isset($this->data['error']) && boolval($this->data['error']) === false && isset($this->data['customerId']);
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        if (isset($this->data['customerId'])) {
            return $this->data['customerId'];
        }
    }
}
