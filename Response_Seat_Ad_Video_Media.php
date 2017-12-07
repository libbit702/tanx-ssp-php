<?php
/**
 * Auto generated from tanx-ssp.proto at 2017-08-17 15:52:34
 *
 * Tanx package
 */

namespace Tanx {
/**
 * Media message embedded in Video/Ad/Seat/Response message
 */
class Response_Seat_Ad_Video_Media extends \ProtobufMessage
{
    /* Field index constants */
    const DELIVERY = 1;
    const TYPE = 2;
    const BITRATE = 3;
    const WIDTH = 4;
    const HEIGHT = 5;
    const URL = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DELIVERY => array(
            'name' => 'delivery',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BITRATE => array(
            'name' => 'bitrate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WIDTH => array(
            'name' => 'width',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HEIGHT => array(
            'name' => 'height',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::URL => array(
            'name' => 'url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::DELIVERY] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::BITRATE] = null;
        $this->values[self::WIDTH] = null;
        $this->values[self::HEIGHT] = null;
        $this->values[self::URL] = null;
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
     * Sets value of 'delivery' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDelivery($value)
    {
        return $this->set(self::DELIVERY, $value);
    }

    /**
     * Returns value of 'delivery' property
     *
     * @return integer
     */
    public function getDelivery()
    {
        $value = $this->get(self::DELIVERY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return string
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'bitrate' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBitrate($value)
    {
        return $this->set(self::BITRATE, $value);
    }

    /**
     * Returns value of 'bitrate' property
     *
     * @return integer
     */
    public function getBitrate()
    {
        $value = $this->get(self::BITRATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'width' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWidth($value)
    {
        return $this->set(self::WIDTH, $value);
    }

    /**
     * Returns value of 'width' property
     *
     * @return integer
     */
    public function getWidth()
    {
        $value = $this->get(self::WIDTH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'height' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHeight($value)
    {
        return $this->set(self::HEIGHT, $value);
    }

    /**
     * Returns value of 'height' property
     *
     * @return integer
     */
    public function getHeight()
    {
        $value = $this->get(self::HEIGHT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUrl($value)
    {
        return $this->set(self::URL, $value);
    }

    /**
     * Returns value of 'url' property
     *
     * @return string
     */
    public function getUrl()
    {
        $value = $this->get(self::URL);
        return $value === null ? (string)$value : $value;
    }
}
}