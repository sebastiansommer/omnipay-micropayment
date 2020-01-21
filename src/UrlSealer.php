<?php
declare(strict_types = 1);
namespace Omnipay\Micropayment;

class UrlSealer
{
    /**
     * @see https://www.micropayment.ch/help/integration_web/?_r=mbr&_src=ctor#collapse--integration_web-sealing_programmatic-php
     * @param string $url
     * @param string $accessKey
     * @return string
     */
    public static function seal(string $url, string $accessKey): string
    {
        $matches = [];

        preg_match('/^(http(?:s?):\/\/[^?]*?\?)?\?*(.*?)(?:&?seal=([^&]*)(&?.*)?)?$/', $url, $matches);
        $matches = array_merge($matches, [1 => '', 2 => '', 3 => '', 4 => '']);

        return (string)$matches[1] . (string)$matches[2] . '&seal=' . md5(urldecode((string)$matches[2]) . (string)$accessKey) . (string)$matches[4];
    }
}
