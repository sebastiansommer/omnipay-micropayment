<?php
declare(strict_types = 1);
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
        $customPlaceHolders = $data['customPlaceHolders'];

        unset($data['paymentDomain']);
        unset($data['payment']);
        unset($data['accessKey']);
        unset($data['customPlaceHolders']);

        $query = http_build_query($data);

        if (empty($customPlaceHolders) === false) {
            $query .= '&' . http_build_query($customPlaceHolders);
        }

        return UrlSealer::seal($url . '?' . $query, $accessKey);
    }
}
