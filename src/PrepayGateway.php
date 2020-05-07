<?php
declare(strict_types = 1);
namespace Omnipay\Micropayment;

use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Micropayment\Message\Request\CustomerAddressRequest;
use Omnipay\Micropayment\Message\Request\CustomerContactDataRequest;
use Omnipay\Micropayment\Message\Request\CustomerCreateRequest;
use Omnipay\Micropayment\Message\Request\PrepayPurchaseRequest;

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
            'expireDays' => 21,
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
     * @return AbstractRequest
     */
    public function createCustomer(array $parameters = [])
    {
        return $this->createRequest(CustomerCreateRequest::class, $parameters);
    }

    /**
     * @param array $parameters
     * @return AbstractRequest
     */
    public function setCustomerContactData(array $parameters = [])
    {
        return $this->createRequest(CustomerContactDataRequest::class, $parameters);
    }

    /**
     * @param array $parameters
     * @return AbstractRequest
     */
    public function setCustomerAddress(array $parameters = [])
    {
        return $this->createRequest(CustomerAddressRequest::class, $parameters);
    }

    /**
     * @param array $parameters
     * @return AbstractRequest
     */
    public function purchase(array $parameters = [])
    {
        return $this->createRequest(PrepayPurchaseRequest::class, $parameters);
    }
}
