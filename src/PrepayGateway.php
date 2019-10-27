<?php
namespace Omnipay\Micropayment;

use Omnipay\Common\AbstractGateway;
use Omnipay\Micropayment\Message\Request\CustomerRequest;

class PrepayGateway extends AbstractGateway
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Micropayment_Prepay';
    }

    /**
     * @return array
     */
    public function getDefaultParameters()
    {
        return [
            'accessKey' => '',
            'testMode' => false
        ];
    }

    /**
     * @param string $accessKey
     */
    public function setAccessKey(string $accessKey)
    {
        $this->setParameter('accessKey', $accessKey);
    }

    /**
     * @param array $parameters
     */
    public function createCustomer(array $parameters = [])
    {
        return $this->createRequest(CustomerRequest::class, $parameters);
    }
}
