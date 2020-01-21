<?php
declare(strict_types=1);
namespace Omnipay\Micropayment;

use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Micropayment\Message\Request\PaymentWindowRequest;

class PaymentWindowGateway extends AbstractGateway
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Micropayment_PaymentWindow';
    }

    /**
     * @return array
     */
    public function getDefaultParameters(): array
    {
        return [
            'theme' => 'x2',
            'bgcolor' => 'ebebeb',
            'producttype' => 'product',
            'accessKey' => '',
            'testmode' => 0,
            'customPlaceHolders' => null
        ];
    }

    /**
     * @param string $accessKey
     */
    public function setAccessKey(string $accessKey): void
    {
        $this->setParameter('accessKey', $accessKey);
    }

    /**
     * @param array $parameters
     * @return AbstractRequest
     */
    public function purchase(array $parameters = []): AbstractRequest
    {
        return $this->createRequest(PaymentWindowRequest::class, $parameters);
    }
}
