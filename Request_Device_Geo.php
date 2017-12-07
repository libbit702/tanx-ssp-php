<?php
/**
 * Auto generated from tanx-ssp.proto at 2017-08-17 15:52:34
 *
 * Tanx package
 */

namespace Tanx {
/**
 * Geo message embedded in Device/Request message
 */
class Request_Device_Geo extends \ProtobufMessage
{
    /* Field index constants */
    const LAT = 1;
    const LON = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LAT => array(
            'name' => 'lat',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_DOUBLE,
        ),
        self::LON => array(
            'name' => 'lon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_DOUBLE,
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
        $this->values[self::LAT] = null;
        $this->values[self::LON] = null;
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
     * Sets value of 'lat' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setLat($value)
    {
        return $this->set(self::LAT, $value);
    }

    /**
     * Returns value of 'lat' property
     *
     * @return double
     */
    public function getLat()
    {
        $value = $this->get(self::LAT);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'lon' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setLon($value)
    {
        return $this->set(self::LON, $value);
    }

    /**
     * Returns value of 'lon' property
     *
     * @return double
     */
    public function getLon()
    {
        $value = $this->get(self::LON);
        return $value === null ? (double)$value : $value;
    }
}
}