<?php
/**
 * Auto generated from tanx-ssp.proto at 2017-08-17 15:52:34
 *
 * Tanx package
 */

namespace Tanx {
/**
 * Deal message embedded in Impression/Request message
 */
class Request_Impression_Deal extends \ProtobufMessage
{
    /* Field index constants */
    const DEAL_ID = 1;
    const MIN_PRICE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DEAL_ID => array(
            'name' => 'deal_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MIN_PRICE => array(
            'name' => 'min_price',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::DEAL_ID] = null;
        $this->values[self::MIN_PRICE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'deal_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDealId($value)
    {
        return $this->set(self::DEAL_ID, $value);
    }

    /**
     * Returns value of 'deal_id' property
     *
     * @return string
     */
    public function getDealId()
    {
        $value = $this->get(self::DEAL_ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'min_price' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMinPrice($value)
    {
        return $this->set(self::MIN_PRICE, $value);
    }

    /**
     * Returns value of 'min_price' property
     *
     * @return integer
     */
    public function getMinPrice()
    {
        $value = $this->get(self::MIN_PRICE);
        return $value === null ? (integer)$value : $value;
    }
}
}