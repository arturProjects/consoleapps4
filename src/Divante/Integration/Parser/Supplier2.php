<?php

namespace Divante\Integration\Parser;


class Supplier2 implements ParserInterface
{
    const TYPE = 'Supplier2';
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
        foreach($content->item as $product)
        {
            $products[] = [$product->key, $product->title, $product->description];
        }
        return $products;
    }
}
