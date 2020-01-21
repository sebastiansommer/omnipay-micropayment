<?php
declare(strict_types = 1);
namespace Omnipay\Micropayment\Message\Response;

use Omnipay\Common\Message\AbstractResponse;

class PaymentWindowResponse extends AbstractResponse
{
    /**
     * @return string
     */
    public function getRedirectUrl(): string
    {
        return $this->data['url'];
    }

    /**
     * @return bool
     */
    public function isSuccessful(): bool
    {
        return isset($this->data['url']);
    }
}
