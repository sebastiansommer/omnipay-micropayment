<?php
namespace Omnipay\Micropayment\Message\Response;

use Omnipay\Common\Message\AbstractResponse;

class PrepayResponse extends AbstractResponse
{
    /**
     * @return bool
     */
    public function isSuccessful(): bool
    {
        return isset($this->data['error']) && boolval($this->data['error']) === false && isset($this->data['sessionId']);
    }

    /**
     * @return string
     */
    public function getSessionId(): string
    {
        if (isset($this->data['sessionId'])) {
            return $this->data['sessionId'];
        }
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        if (isset($this->data['status'])) {
            return $this->data['status'];
        }
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        if (isset($this->data['amount'])) {
            return $this->data['amount'];
        }
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        if (isset($this->data['currency'])) {
            return $this->data['currency'];
        }
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        if (isset($this->data['title'])) {
            return $this->data['title'];
        }
    }

    /**
     * @return string
     */
    public function getPayToken(): string
    {
        if (isset($this->data['payToken'])) {
            return $this->data['payToken'];
        }
    }

    /**
     * @return string
     */
    public function getPayText(): string
    {
        if (isset($this->data['payText'])) {
            return $this->data['payText'];
        }
    }

    /**
     * @return string
     */
    public function getExpireDate(): string
    {
        if (isset($this->data['expireDate'])) {
            return $this->data['expireDate'];
        }
    }

    /**
     * @return string
     */
    public function getDueDate(): string
    {
        if (isset($this->data['dueDate'])) {
            return $this->data['dueDate'];
        }
    }

    /**
     * @return string
     */
    public function getBankName(): string
    {
        if (isset($this->data['bankName'])) {
            return $this->data['bankName'];
        }
    }

    /**
     * @return string
     */
    public function getBankCode(): string
    {
        if (isset($this->data['bankCode'])) {
            return $this->data['bankCode'];
        }
    }

    /**
     * @return string
     */
    public function getAccountNumber(): string
    {
        if (isset($this->data['accountNumber'])) {
            return $this->data['accountNumber'];
        }
    }

    /**
     * @return string
     */
    public function getAccountHolder(): string
    {
        if (isset($this->data['accountHolder'])) {
            return $this->data['accountHolder'];
        }
    }

    /**
     * @return string
     */
    public function getBic(): string
    {
        if (isset($this->data['bic'])) {
            return $this->data['bic'];
        }
    }

    /**
     * @return string
     */
    public function getIban(): string
    {
        if (isset($this->data['iban'])) {
            return $this->data['iban'];
        }
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        if (isset($this->data['ip'])) {
            return $this->data['ip'];
        }
    }

    /**
     * @return array
     */
    public function getFreeParams(): ?array
    {
        if (isset($this->data['freeParams'])) {
            return $this->data['freeParams'];
        }
    }
}
