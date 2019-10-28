<?php
namespace Omnipay\Micropayment\Message\Response;

use Omnipay\Common\Message\AbstractResponse;

class PrepayResponse extends AbstractResponse
{
    /**
     * @return bool
     */
    public function isSuccessful(): bool
    {
        return isset($this->data['error']) && boolval($this->data['error']) === false && isset($this->data['sessionId']);
    }
}
