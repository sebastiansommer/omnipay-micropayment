<?php
namespace Omnipay\Micropayment\Message\Request;

use Omnipay\Common\Message\AbstractRequest as CommonAbstractRequest;
use Omnipay\Common\Message\ResponseInterface;
use Omnipay\Micropayment\ListToArray;

abstract class AbstractRequest extends CommonAbstractRequest
{
    /**
     * @param string $accessKey
     * @return mixed
     */
    public function setAccessKey(string $accessKey)
    {
        return $this->setParameter('accessKey', $accessKey);
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return 'https://webservices.micropayment.de/public/prepay/public/v1.1/nvp/';
    }

    /**
     * @param array $data
     * @return ResponseInterface
     */
    public function sendData($data)
    {
        $query = http_build_query($data);

        $response = $this->httpClient->request(
            'GET',
            $this->getEndpoint() . '?' . $query
        );

        return $this->createResponse(ListToArray::convert($response->getBody()->getContents()));
    }

    abstract public function createResponse($payload);
}
