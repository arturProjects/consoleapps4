<?php

namespace Divante\Integration\Parser;


class Supplier1 implements ParserInterface
{
    const TYPE = 'Supplier1';
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
        foreach($content->product as $product)
        {
            $products[] = [$product->id, $product->name, $product->desc];
        }
        return $products;
    }
}
