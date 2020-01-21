<?php
declare(strict_types = 1);
namespace Omnipay\Micropayment\Message\Request;

use Omnipay\Micropayment\Message\Response\CustomerAddressResponse;

class CustomerAddressRequest extends AbstractRequest
{
    /**
     * @return mixed
     */
    public function getCustomerId(): ?string
    {
        return $this->getParameter('customerId');
    }

    /**
     * @param string $customerId
     */
    public function setCustomerId(string $customerId): void
    {
        $this->setParameter('customerId', $customerId);
    }

    /**
     * @return mixed
     */
    public function getFirstName(): ?string
    {
        return $this->getParameter('firstName');
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->setParameter('firstName', $firstName);
    }

    /**
     * @return mixed
     */
    public function getSurName(): ?string
    {
        return $this->getParameter('surName');
    }

    /**
     * @param string $surName
     */
    public function setSurName(string $surName): void
    {
        $this->setParameter('surName', $surName);
    }

    /**
     * @return mixed
     */
    public function getAddress(): ?string
    {
        return $this->getParameter('address');
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->setParameter('address', $address);
    }

    /**
     * @return mixed
     */
    public function getStreet(): ?string
    {
        return $this->getParameter('street');
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street): void
    {
        $this->setParameter('street', $street);
    }

    /**
     * @return mixed
     */
    public function getZip(): ?string
    {
        return $this->getParameter('zip');
    }

    /**
     * @param string $zip
     */
    public function setZip(string $zip): void
    {
        $this->setParameter('zip', $zip);
    }

    /**
     * @return mixed
     */
    public function getCity(): ?string
    {
        return $this->getParameter('city');
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->setParameter('city', $city);
    }

    /**
     * @return mixed
     */
    public function getCountry(): ?string
    {
        return $this->getParameter('country');
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->setParameter('country', $country);
    }

    /**
     * @return array
     */
    public function getData()
    {
        $this->validate('customerId', 'firstName', 'surName');

        return [
            'action' => 'addressSet',
            'customerId' => $this->getCustomerId(),
            'accessKey' => $this->getParameter('accessKey'),
            'testMode' => $this->getTestMode() === true ? 1 : 0,
            'firstName' => $this->getFirstName(),
            'surName' => $this->getSurName(),
            'address' => $this->getAddress(),
            'street' => $this->getStreet(),
            'zip' => $this->getZip(),
            'city' => $this->getCity(),
            'country' => $this->getCountry()
        ];
    }

    /**
     * @param array $data
     * @return CustomerAddressResponse
     */
    public function createResponse($data)
    {
        return new CustomerAddressResponse($this, $data);
    }
}
