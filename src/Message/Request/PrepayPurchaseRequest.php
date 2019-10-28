<?php
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
     * @return array
     * @throws \Exception
     */
    public function getData(): array
    {
        $data = [
            'action' => 'sessionCreate',
            'accessKey' => $this->getParameter('accessKey'),
            'testMode' => $this->getTestMode() === true ? 1 : 0,
            'customerId' => $this->getCustomerId(),
            'amount' => $this->getAmount(),
            'project' => $this->getProject()
        ];

        return $data;
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
