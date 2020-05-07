<?php
declare(strict_types=1);
namespace Omnipay\Micropayment\Message\Response;

use DateTime;
use Omnipay\Common\Message\AbstractResponse;

class SessionGetResponse extends AbstractResponse
{
    /**
     * @return bool
     */
    public function isSuccessful(): bool
    {
        return isset($this->data['error']) && boolval($this->data['error']) === false;
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
     * @return string
     */
    public function getCustomerId(): string
    {
        if (isset($this->data['customerId'])) {
            return $this->data['customerId'];
        }
    }

    /**
     * @return string
     */
    public function getProject(): string
    {
        if (isset($this->data['project'])) {
            return $this->data['project'];
        }
    }

    /**
     * @return string
     */
    public function getProjectCampaign(): string
    {
        if (isset($this->data['projectCampaign'])) {
            return $this->data['projectCampaign'];
        }
    }

    /**
     * @return string
     */
    public function getAccount(): string
    {
        if (isset($this->data['account'])) {
            return $this->data['account'];
        }
    }

    /**
     * @return string
     */
    public function getWebmasterCampaign(): string
    {
        if (isset($this->data['webmasterCampaign'])) {
            return $this->data['webmasterCampaign'];
        }
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        if (isset($this->data['amount'])) {
            return (int)$this->data['amount'];
        }
    }

    /**
     * @return int
     */
    public function getOrderAmount(): int
    {
        if (isset($this->data['orderAmount'])) {
            return (int)$this->data['orderAmount'];
        }
    }

    /**
     * @return int
     */
    public function getPaidAmount(): int
    {
        if (isset($this->data['paidAmount'])) {
            return (int)$this->data['paidAmount'];
        }
    }

    /**
     * @return int
     */
    public function getOpenAmount(): int
    {
        if (isset($this->data['openAmount'])) {
            return (int)$this->data['openAmount'];
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
    public function getBankName(): string
    {
        if (isset($this->data['bankName'])) {
            return $this->data['bankName'];
        }
    }

    /**
     * @return string
     */
    public function getBankCountry(): string
    {
        if (isset($this->data['bankCountry'])) {
            return $this->data['bankCountry'];
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
     * @return DateTime
     */
    public function getExpireDate(): ?DateTime
    {
        if (isset($this->data['expireDate'])) {
            return new DateTime($this->data['expireDate']);
        }
    }

    /**
     * @return DateTime
     */
    public function getDueDate(): ?DateTime
    {
        if (isset($this->data['dueDate'])) {
            return new DateTime($this->data['dueDate']);
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
}
