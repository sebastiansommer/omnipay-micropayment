<?php
declare(strict_types = 1);
namespace Omnipay\Micropayment\Message\Request;

use Omnipay\Micropayment\Message\Response\CustomerCreateResponse;

class CustomerCreateRequest extends AbstractRequest
{
    /**
     * @return array
     */
    public function getData()
    {
        return [
            'action' => 'customerCreate',
            'accessKey' => $this->getParameter('accessKey'),
            'testMode' => $this->getTestMode() === true ? 1 : 0
        ];
    }

    /**
     * @param array $data
     * @return CustomerCreateResponse
     */
    public function createResponse($data)
    {
        return new CustomerCreateResponse($this, $data);
    }
}
