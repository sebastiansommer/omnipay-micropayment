<?php
declare(strict_types = 1);
namespace Omnipay\Micropayment\Message\Request;

use Omnipay\Micropayment\Message\Response\CustomerContactDataResponse;

class CustomerContactDataRequest extends AbstractRequest
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
    public function getEmail(): ?string
    {
        return $this->getParameter('email');
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->setParameter('email', $email);
    }

    /**
     * @return mixed
     */
    public function getPhone(): ?string
    {
        return $this->getParameter('phone');
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->setParameter('phone', $phone);
    }

    /**
     * @return mixed
     */
    public function getMobile(): ?string
    {
        return $this->getParameter('mobile');
    }

    /**
     * @param string $mobile
     */
    public function setMobile(string $mobile): void
    {
        $this->setParameter('mobile', $mobile);
    }

    /**
     * @return mixed
     */
    public function getLanguage(): ?string
    {
        return $this->getParameter('language');
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language): void
    {
        $this->setParameter('language', $language);
    }

    /**
     * @return array
     */
    public function getData()
    {
        $this->validate('customerId');

        return [
            'action' => 'contactDataSet',
            'customerId' => $this->getCustomerId(),
            'accessKey' => $this->getParameter('accessKey'),
            'testMode' => $this->getTestMode() === true ? 1 : 0,
            'email' => $this->getEmail(),
            'phone' => $this->getPhone(),
            'mobile' => $this->getMobile(),
            'language' => $this->getLanguage()
        ];
    }

    /**
     * @param array $data
     * @return CustomerContactDataResponse
     */
    public function createResponse($data)
    {
        return new CustomerContactDataResponse($this, $data);
    }
}
