<?php
namespace Omnipay\Micropayment\Message\Request;

use Omnipay\Common\Message\AbstractRequest;

class PrepayPurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate('project', 'amount', 'currency');

        return $this->getData();
    }

    public function sendData($data)
    {
    }

    public function createResponse($data)
    {
    }
}
