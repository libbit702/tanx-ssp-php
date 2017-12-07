<?php
/**
 * Auto generated from tanx-ssp.proto at 2017-08-17 15:52:34
 *
 * Tanx package
 */

namespace Tanx {
/**
 * NativeAd message embedded in Ad/Seat/Response message
 */
class Response_Seat_Ad_NativeAd extends \ProtobufMessage
{
    /* Field index constants */
    const ATTR = 1;
    const TEMPLATE_ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ATTR => array(
            'name' => 'attr',
            'repeated' => true,
            'type' => '\Tanx\Response_Seat_Ad_NativeAd_Attr'
        ),
        self::TEMPLATE_ID => array(
            'name' => 'template_id',
            'required' => false,
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
        $this->values[self::ATTR] = array();
        $this->values[self::TEMPLATE_ID] = null;
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
     * Appends value to 'attr' list
     *
     * @param \Tanx\Response_Seat_Ad_NativeAd_Attr $value Value to append
     *
     * @return null
     */
    public function appendAttr(\Tanx\Response_Seat_Ad_NativeAd_Attr $value)
    {
        return $this->append(self::ATTR, $value);
    }

    /**
     * Clears 'attr' list
     *
     * @return null
     */
    public function clearAttr()
    {
        return $this->clear(self::ATTR);
    }

    /**
     * Returns 'attr' list
     *
     * @return \Tanx\Response_Seat_Ad_NativeAd_Attr[]
     */
    public function getAttr()
    {
        return $this->get(self::ATTR);
    }

    /**
     * Returns 'attr' iterator
     *
     * @return \ArrayIterator
     */
    public function getAttrIterator()
    {
        return new \ArrayIterator($this->get(self::ATTR));
    }

    /**
     * Returns element from 'attr' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Tanx\Response_Seat_Ad_NativeAd_Attr
     */
    public function getAttrAt($offset)
    {
        return $this->get(self::ATTR, $offset);
    }

    /**
     * Returns count of 'attr' list
     *
     * @return int
     */
    public function getAttrCount()
    {
        return $this->count(self::ATTR);
    }

    /**
     * Sets value of 'template_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTemplateId($value)
    {
        return $this->set(self::TEMPLATE_ID, $value);
    }

    /**
     * Returns value of 'template_id' property
     *
     * @return integer
     */
    public function getTemplateId()
    {
        $value = $this->get(self::TEMPLATE_ID);
        return $value === null ? (integer)$value : $value;
    }
}
}