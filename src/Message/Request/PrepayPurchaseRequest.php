<?php
declare(strict_types=1);
namespace Omnipay\Micropayment\Message\Request;

use Omnipay\Micropayment\Message\Response\PrepayResponse;

class PrepayPurchaseRequest extends AbstractRequest
{
    /**
     * @param $customerId
     */
    public function setCustomerId(string $customerId)
    {
        $this->setParameter('customerId', $customerId);
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->getParameter('customerId');
    }

    /**
     * @param $project
     */
    public function setProject(string $project)
    {
        $this->setParameter('project', $project);
    }

    /**
     * @return string
     */
    public function getProject(): string
    {
        return $this->getParameter('project');
    }

    /**
     * @param $title
     */
    public function setTitle(string $title)
    {
        $this->setParameter('title', $title);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->getParameter('title');
    }

    /**
     * @param int $expireDays
     */
    public function setExpireDays(int $expireDays)
    {
        $this->setParameter('expireDays', $expireDays);
    }

    /**
     * @return int
     */
    public function getExpireDays(): int
    {
        return $this->getParameter('expireDays');
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function getData(): array
    {
        $this->validate('project');

        return [
            'action' => 'sessionCreate',
            'accessKey' => $this->getParameter('accessKey'),
            'testMode' => $this->getTestMode() === true ? 1 : 0,
            'customerId' => $this->getCustomerId(),
            'amount' => $this->getAmount(),
            'project' => $this->getProject(),
            'title' => $this->getTitle(),
            'expireDays' => $this->getExpireDays()
        ];
    }

    /**
     * @param array $data
     * @return PrepayResponse
     */
    public function createResponse($data)
    {
        return new PrepayResponse($this, $data);
    }
}
