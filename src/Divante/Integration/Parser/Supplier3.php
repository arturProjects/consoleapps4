<?php

namespace Divante\Integration\Parser;


class Supplier3 implements ParserInterface
{
    const TYPE = 'Supplier3';

    /**
     * Get parser type
     *
     * @return string
     */
    public static function getType()
    {
        return self::TYPE;
    }
    
    /**
     * Parse content to array
     *
     * @param $content
     *
     * @return array
     */
    public function parse($content)
    {
        $products = [];
        foreach($content['list'] as $product => $val)
        {
            $products[] = [$val['id'], $val['name'], 'description-----'];
        }
        return $products;
    }
}
