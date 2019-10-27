<?php
namespace Omnipay\Micropayment\Message\Request;

use Omnipay\Micropayment\Message\Response\CustomerResponse;

class CustomerRequest extends AbstractRequest
{
    public function getData()
    {
        $data = [
            'action' => 'customerCreate',
            'accessKey' => $this->getParameter('accessKey'),
            'testMode' => $this->getTestMode() === true ? 1 : 0
        ];

        return $data;
    }

    public function createResponse($data)
    {
        return new CustomerResponse($this, $data);
    }
}
