<?php
/**
 * Auto generated from tanx-ssp.proto at 2017-08-17 15:52:34
 *
 * Tanx package
 */

namespace Tanx {
/**
 * Device message embedded in Request message
 */
class Request_Device extends \ProtobufMessage
{
    /* Field index constants */
    const IP = 1;
    const USER_AGENT = 2;
    const IDFA = 3;
    const IMEI = 4;
    const IMEI_MD5 = 5;
    const MAC = 6;
    const MAC_MD5 = 7;
    const ANDROID_ID = 8;
    const DEVICE_TYPE = 9;
    const BRAND = 10;
    const MODEL = 11;
    const OS = 12;
    const OSV = 13;
    const NETWORK = 14;
    const OPERATOR = 15;
    const WIDTH = 16;
    const HEIGHT = 17;
    const PIXEL_RATIO = 18;
    const ORIENTATION = 19;
    const TIMEZONE_OFFSET = 20;
    const GEO = 21;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::IP => array(
            'name' => 'ip',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::USER_AGENT => array(
            'name' => 'user_agent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IDFA => array(
            'name' => 'idfa',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IMEI => array(
            'name' => 'imei',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IMEI_MD5 => array(
            'name' => 'imei_md5',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MAC => array(
            'name' => 'mac',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MAC_MD5 => array(
            'name' => 'mac_md5',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ANDROID_ID => array(
            'name' => 'android_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEVICE_TYPE => array(
            'name' => 'device_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BRAND => array(
            'name' => 'brand',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MODEL => array(
            'name' => 'model',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OS => array(
            'name' => 'os',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OSV => array(
            'name' => 'osv',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NETWORK => array(
            'default' => 1,
            'name' => 'network',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPERATOR => array(
            'name' => 'operator',
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
        self::PIXEL_RATIO => array(
            'default' => 1000,
            'name' => 'pixel_ratio',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ORIENTATION => array(
            'name' => 'orientation',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMEZONE_OFFSET => array(
            'default' => 480,
            'name' => 'timezone_offset',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GEO => array(
            'name' => 'geo',
            'required' => false,
            'type' => '\Tanx\Request_Device_Geo'
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
        $this->values[self::IP] = null;
        $this->values[self::USER_AGENT] = null;
        $this->values[self::IDFA] = null;
        $this->values[self::IMEI] = null;
        $this->values[self::IMEI_MD5] = null;
        $this->values[self::MAC] = null;
        $this->values[self::MAC_MD5] = null;
        $this->values[self::ANDROID_ID] = null;
        $this->values[self::DEVICE_TYPE] = null;
        $this->values[self::BRAND] = null;
        $this->values[self::MODEL] = null;
        $this->values[self::OS] = null;
        $this->values[self::OSV] = null;
        $this->values[self::NETWORK] = self::$fields[self::NETWORK]['default'];
        $this->values[self::OPERATOR] = null;
        $this->values[self::WIDTH] = null;
        $this->values[self::HEIGHT] = null;
        $this->values[self::PIXEL_RATIO] = self::$fields[self::PIXEL_RATIO]['default'];
        $this->values[self::ORIENTATION] = null;
        $this->values[self::TIMEZONE_OFFSET] = self::$fields[self::TIMEZONE_OFFSET]['default'];
        $this->values[self::GEO] = null;
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
     * Sets value of 'ip' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIp($value)
    {
        return $this->set(self::IP, $value);
    }

    /**
     * Returns value of 'ip' property
     *
     * @return string
     */
    public function getIp()
    {
        $value = $this->get(self::IP);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'user_agent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserAgent($value)
    {
        return $this->set(self::USER_AGENT, $value);
    }

    /**
     * Returns value of 'user_agent' property
     *
     * @return string
     */
    public function getUserAgent()
    {
        $value = $this->get(self::USER_AGENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'idfa' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIdfa($value)
    {
        return $this->set(self::IDFA, $value);
    }

    /**
     * Returns value of 'idfa' property
     *
     * @return string
     */
    public function getIdfa()
    {
        $value = $this->get(self::IDFA);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'imei' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImei($value)
    {
        return $this->set(self::IMEI, $value);
    }

    /**
     * Returns value of 'imei' property
     *
     * @return string
     */
    public function getImei()
    {
        $value = $this->get(self::IMEI);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'imei_md5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImeiMd5($value)
    {
        return $this->set(self::IMEI_MD5, $value);
    }

    /**
     * Returns value of 'imei_md5' property
     *
     * @return string
     */
    public function getImeiMd5()
    {
        $value = $this->get(self::IMEI_MD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'mac' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMac($value)
    {
        return $this->set(self::MAC, $value);
    }

    /**
     * Returns value of 'mac' property
     *
     * @return string
     */
    public function getMac()
    {
        $value = $this->get(self::MAC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'mac_md5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMacMd5($value)
    {
        return $this->set(self::MAC_MD5, $value);
    }

    /**
     * Returns value of 'mac_md5' property
     *
     * @return string
     */
    public function getMacMd5()
    {
        $value = $this->get(self::MAC_MD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'android_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAndroidId($value)
    {
        return $this->set(self::ANDROID_ID, $value);
    }

    /**
     * Returns value of 'android_id' property
     *
     * @return string
     */
    public function getAndroidId()
    {
        $value = $this->get(self::ANDROID_ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'device_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDeviceType($value)
    {
        return $this->set(self::DEVICE_TYPE, $value);
    }

    /**
     * Returns value of 'device_type' property
     *
     * @return integer
     */
    public function getDeviceType()
    {
        $value = $this->get(self::DEVICE_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'brand' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBrand($value)
    {
        return $this->set(self::BRAND, $value);
    }

    /**
     * Returns value of 'brand' property
     *
     * @return string
     */
    public function getBrand()
    {
        $value = $this->get(self::BRAND);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'model' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setModel($value)
    {
        return $this->set(self::MODEL, $value);
    }

    /**
     * Returns value of 'model' property
     *
     * @return string
     */
    public function getModel()
    {
        $value = $this->get(self::MODEL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'os' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOs($value)
    {
        return $this->set(self::OS, $value);
    }

    /**
     * Returns value of 'os' property
     *
     * @return string
     */
    public function getOs()
    {
        $value = $this->get(self::OS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'osv' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOsv($value)
    {
        return $this->set(self::OSV, $value);
    }

    /**
     * Returns value of 'osv' property
     *
     * @return string
     */
    public function getOsv()
    {
        $value = $this->get(self::OSV);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'network' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNetwork($value)
    {
        return $this->set(self::NETWORK, $value);
    }

    /**
     * Returns value of 'network' property
     *
     * @return integer
     */
    public function getNetwork()
    {
        $value = $this->get(self::NETWORK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'operator' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOperator($value)
    {
        return $this->set(self::OPERATOR, $value);
    }

    /**
     * Returns value of 'operator' property
     *
     * @return integer
     */
    public function getOperator()
    {
        $value = $this->get(self::OPERATOR);
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
     * Sets value of 'pixel_ratio' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPixelRatio($value)
    {
        return $this->set(self::PIXEL_RATIO, $value);
    }

    /**
     * Returns value of 'pixel_ratio' property
     *
     * @return integer
     */
    public function getPixelRatio()
    {
        $value = $this->get(self::PIXEL_RATIO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'orientation' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOrientation($value)
    {
        return $this->set(self::ORIENTATION, $value);
    }

    /**
     * Returns value of 'orientation' property
     *
     * @return integer
     */
    public function getOrientation()
    {
        $value = $this->get(self::ORIENTATION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'timezone_offset' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimezoneOffset($value)
    {
        return $this->set(self::TIMEZONE_OFFSET, $value);
    }

    /**
     * Returns value of 'timezone_offset' property
     *
     * @return integer
     */
    public function getTimezoneOffset()
    {
        $value = $this->get(self::TIMEZONE_OFFSET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'geo' property
     *
     * @param \Tanx\Request_Device_Geo $value Property value
     *
     * @return null
     */
    public function setGeo(\Tanx\Request_Device_Geo $value=null)
    {
        return $this->set(self::GEO, $value);
    }

    /**
     * Returns value of 'geo' property
     *
     * @return \Tanx\Request_Device_Geo
     */
    public function getGeo()
    {
        return $this->get(self::GEO);
    }
}
}