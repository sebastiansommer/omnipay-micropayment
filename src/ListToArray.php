<?php
namespace Omnipay\Micropayment;

class ListToArray
{
    /**
     * @param string $list
     * @return array
     */
    public static function convert($list)
    {
        $array = [];

        $lines = explode("\n", $list);

        foreach ($lines as $line) {
            $property = explode('=', $line);

            $array[$property[0]] = $property[1];
        }

        return $array;
    }
}
