<?php
declare(strict_types=1);
namespace Omnipay\Micropayment\Message\Request;

use Omnipay\Micropayment\Message\Response\SessionGetResponse;

class SessionGetRequest extends AbstractRequest
{
    /**
     * @param string $sessionId
     */
    public function setSessionId(string $sessionId)
    {
        $this->setParameter('sessionId', $sessionId);
    }

    /**
     * @return string
     */
    public function getSessionId(): string
    {
        return $this->getParameter('sessionId');
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function getData(): array
    {
        return [
            'action' => 'sessionGet',
            'accessKey' => $this->getParameter('accessKey'),
            'testMode' => $this->getTestMode() === true ? 1 : 0,
            'sessionId' => $this->getSessionId(),
        ];
    }

    /**
     * @param array $data
     * @return SessionGetResponse
     */
    public function createResponse($data)
    {
        return new SessionGetResponse($this, $data);
    }
}
