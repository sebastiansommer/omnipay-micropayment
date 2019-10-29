<?php
namespace Omnipay\Micropayment;

class PaymentWindowRedirectUrlBuilder
{
    /**
     * @param array $data
     * @return string
     */
    public static function build(array $data): string
    {
        $url = 'https://' . $data['paymentDomain'] . '.micropayment.ch/' . $data['payment'] . '/event/';

        $accessKey = $data['accessKey'];

        unset($data['paymentDomain']);
        unset($data['payment']);
        unset($data['accessKey']);

        $query = http_build_query($data);

        return UrlSealer::seal($url . '?' . $query, $accessKey);
    }
}
