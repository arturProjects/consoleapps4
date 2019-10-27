<?php

/*
 * This file is part of the "Divante/Integration" package.
 *
 * (c) Divante Sp. z o. o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Divante\Integration\Supplier;

/**
 * Class Supplier1
 *
 * @package Divante\Integration\Supplier
 */
class Supplier3 extends SupplierAbstract
{
    const TYPE = 'supplier3';
    /**
     * {@inheritdoc}
     */
    public static function getName()
    {
        return self::TYPE;
    }

    /**
     * {@inheritdoc}
     */
    public static function getResponseType()
    {
        return self::TYPE;
    }

    /**
     * {@inheritdoc}
     */
    protected function parseResponse()
    {
        $content = $this->getResponse();
        return $this->parser->parse($content);


    }

    /**
     * Simulate get response method
     *
     * @return string
     */
    protected function getResponse()
    {
        $json = file_get_contents('web/'.$this::getResponseType().'.json');
        $table = json_decode($json, true);
        return $table;
    }
    
}
