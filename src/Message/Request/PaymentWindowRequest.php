<?php
declare(strict_types = 1);
namespace Omnipay\Micropayment\Message\Request;

use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Micropayment\Message\Response\PaymentWindowResponse;
use Omnipay\Micropayment\PaymentWindowRedirectUrlBuilder;

class PaymentWindowRequest extends AbstractRequest
{
    /**
     * @return string
     */
    public function getPaymentDomain(): ?string
    {
        return $this->getParameter('paymentDomain');
    }

    /**
     * @param string $paymentDomain
     */
    public function setPaymentDomain(string $paymentDomain)
    {
        $this->setParameter('paymentDomain', $paymentDomain);
    }

    /**
     * @return string
     */
    public function getPayment(): ?string
    {
        return $this->getParameter('payment');
    }

    /**
     * @param string $payment
     */
    public function setPayment(string $payment)
    {
        $this->setParameter('payment', $payment);
    }

    /**
     * @return string
     */
    public function getProject(): ?string
    {
        return $this->getParameter('project');
    }

    /**
     * @param string $project
     */
    public function setProject(string $project)
    {
        $this->setParameter('project', $project);
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->getParameter('title');
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->setParameter('title', $title);
    }

    /**
     * @param string $theme
     */
    public function setTheme(string $theme)
    {
        $this->setParameter('theme', $theme);
    }

    /**
     * @return string
     */
    public function getTheme(): string
    {
        return $this->getParameter('theme');
    }

    /**
     * @param string $accessKey
     */
    public function setAccessKey(string $accessKey)
    {
        $this->setParameter('accessKey', $accessKey);
    }

    /**
     * @return string
     */
    public function getAccessKey(): string
    {
        return $this->getParameter('accessKey');
    }

    /**
     * @param string $bgColor
     */
    public function setBgColor(string $bgColor)
    {
        $this->setParameter('bgColor', $bgColor);
    }

    /**
     * @return string
     */
    public function getBgColor(): string
    {
        return $this->getParameter('bgColor');
    }

    /**
     * @param string $productType
     */
    public function setProductType(string $productType)
    {
        $this->setParameter('productType', $productType);
    }

    /**
     * @return string
     */
    public function getProductType(): string
    {
        return $this->getParameter('productType');
    }

    /**
     * @param array $customPlaceHolders
     */
    public function setCustomPlaceHolders($customPlaceHolders)
    {
        $this->setParameter('customPlaceHolders', $customPlaceHolders);
    }

    /**
     * @return array
     */
    public function getCustomPlaceHolders(): ?array
    {
        return $this->getParameter('customPlaceHolders');
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function getData(): array
    {
        $this->validate('amount', 'paymentDomain', 'payment', 'project', 'title');

        /** @todo: validate payment domain / payment */

        return [
            'amount' => $this->getAmount(),
            'paymentDomain' => $this->getPaymentDomain(),
            'payment' => $this->getPayment(),
            'project' => $this->getProject(),
            'title' => $this->getTitle(),
            'theme' => $this->getTheme(),
            'bgcolor' => $this->getBgColor(),
            'producttype' => $this->getProductType(),
            'testmode' => $this->getTestMode() === true ? 1 : 0,
            'accessKey' => $this->getAccessKey(),
            'customPlaceHolders' => $this->getCustomPlaceHolders()
        ];
    }

    /**
     * @param mixed $data
     * @return PaymentWindowResponse
     */
    public function sendData($data): PaymentWindowResponse
    {
        $data['url'] = PaymentWindowRedirectUrlBuilder::build($data);

        return new PaymentWindowResponse($this, $data);
    }
}
