<?php
/**
 * Auto generated from tanx-ssp.proto at 2017-08-17 15:52:34
 *
 * Tanx package
 */

namespace Tanx {
/**
 * Impression message embedded in Request message
 */
class Request_Impression extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const PID = 2;
    const WIDTH = 3;
    const HEIGHT = 4;
    const POS = 5;
    const VIDEO = 6;
    const IS_FULLSCREEN = 7;
    const API = 8;
    const SLOT_NUM = 9;
    const DEAL = 10;
    const CAMPAIGN_DATE = 11;
    const NATIVE_TEMPLATE_ID = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PID => array(
            'name' => 'pid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        self::POS => array(
            'name' => 'pos',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VIDEO => array(
            'name' => 'video',
            'required' => false,
            'type' => '\Tanx\Request_Impression_Video'
        ),
        self::IS_FULLSCREEN => array(
            'default' => false,
            'name' => 'is_fullscreen',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::API => array(
            'name' => 'api',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SLOT_NUM => array(
            'default' => 1,
            'name' => 'slot_num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEAL => array(
            'name' => 'deal',
            'repeated' => true,
            'type' => '\Tanx\Request_Impression_Deal'
        ),
        self::CAMPAIGN_DATE => array(
            'name' => 'campaign_date',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NATIVE_TEMPLATE_ID => array(
            'name' => 'native_template_id',
            'repeated' => true,
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
        $this->values[self::ID] = null;
        $this->values[self::PID] = null;
        $this->values[self::WIDTH] = null;
        $this->values[self::HEIGHT] = null;
        $this->values[self::POS] = null;
        $this->values[self::VIDEO] = null;
        $this->values[self::IS_FULLSCREEN] = self::$fields[self::IS_FULLSCREEN]['default'];
        $this->values[self::API] = array();
        $this->values[self::SLOT_NUM] = self::$fields[self::SLOT_NUM]['default'];
        $this->values[self::DEAL] = array();
        $this->values[self::CAMPAIGN_DATE] = null;
        $this->values[self::NATIVE_TEMPLATE_ID] = array();
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
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'pid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPid($value)
    {
        return $this->set(self::PID, $value);
    }

    /**
     * Returns value of 'pid' property
     *
     * @return string
     */
    public function getPid()
    {
        $value = $this->get(self::PID);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'pos' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPos($value)
    {
        return $this->set(self::POS, $value);
    }

    /**
     * Returns value of 'pos' property
     *
     * @return integer
     */
    public function getPos()
    {
        $value = $this->get(self::POS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'video' property
     *
     * @param \Tanx\Request_Impression_Video $value Property value
     *
     * @return null
     */
    public function setVideo(\Tanx\Request_Impression_Video $value=null)
    {
        return $this->set(self::VIDEO, $value);
    }

    /**
     * Returns value of 'video' property
     *
     * @return \Tanx\Request_Impression_Video
     */
    public function getVideo()
    {
        return $this->get(self::VIDEO);
    }

    /**
     * Sets value of 'is_fullscreen' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsFullscreen($value)
    {
        return $this->set(self::IS_FULLSCREEN, $value);
    }

    /**
     * Returns value of 'is_fullscreen' property
     *
     * @return boolean
     */
    public function getIsFullscreen()
    {
        $value = $this->get(self::IS_FULLSCREEN);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Appends value to 'api' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendApi($value)
    {
        return $this->append(self::API, $value);
    }

    /**
     * Clears 'api' list
     *
     * @return null
     */
    public function clearApi()
    {
        return $this->clear(self::API);
    }

    /**
     * Returns 'api' list
     *
     * @return integer[]
     */
    public function getApi()
    {
        return $this->get(self::API);
    }

    /**
     * Returns 'api' iterator
     *
     * @return \ArrayIterator
     */
    public function getApiIterator()
    {
        return new \ArrayIterator($this->get(self::API));
    }

    /**
     * Returns element from 'api' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getApiAt($offset)
    {
        return $this->get(self::API, $offset);
    }

    /**
     * Returns count of 'api' list
     *
     * @return int
     */
    public function getApiCount()
    {
        return $this->count(self::API);
    }

    /**
     * Sets value of 'slot_num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSlotNum($value)
    {
        return $this->set(self::SLOT_NUM, $value);
    }

    /**
     * Returns value of 'slot_num' property
     *
     * @return integer
     */
    public function getSlotNum()
    {
        $value = $this->get(self::SLOT_NUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'deal' list
     *
     * @param \Tanx\Request_Impression_Deal $value Value to append
     *
     * @return null
     */
    public function appendDeal(\Tanx\Request_Impression_Deal $value)
    {
        return $this->append(self::DEAL, $value);
    }

    /**
     * Clears 'deal' list
     *
     * @return null
     */
    public function clearDeal()
    {
        return $this->clear(self::DEAL);
    }

    /**
     * Returns 'deal' list
     *
     * @return \Tanx\Request_Impression_Deal[]
     */
    public function getDeal()
    {
        return $this->get(self::DEAL);
    }

    /**
     * Returns 'deal' iterator
     *
     * @return \ArrayIterator
     */
    public function getDealIterator()
    {
        return new \ArrayIterator($this->get(self::DEAL));
    }

    /**
     * Returns element from 'deal' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Tanx\Request_Impression_Deal
     */
    public function getDealAt($offset)
    {
        return $this->get(self::DEAL, $offset);
    }

    /**
     * Returns count of 'deal' list
     *
     * @return int
     */
    public function getDealCount()
    {
        return $this->count(self::DEAL);
    }

    /**
     * Sets value of 'campaign_date' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCampaignDate($value)
    {
        return $this->set(self::CAMPAIGN_DATE, $value);
    }

    /**
     * Returns value of 'campaign_date' property
     *
     * @return string
     */
    public function getCampaignDate()
    {
        $value = $this->get(self::CAMPAIGN_DATE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'native_template_id' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendNativeTemplateId($value)
    {
        return $this->append(self::NATIVE_TEMPLATE_ID, $value);
    }

    /**
     * Clears 'native_template_id' list
     *
     * @return null
     */
    public function clearNativeTemplateId()
    {
        return $this->clear(self::NATIVE_TEMPLATE_ID);
    }

    /**
     * Returns 'native_template_id' list
     *
     * @return string[]
     */
    public function getNativeTemplateId()
    {
        return $this->get(self::NATIVE_TEMPLATE_ID);
    }

    /**
     * Returns 'native_template_id' iterator
     *
     * @return \ArrayIterator
     */
    public function getNativeTemplateIdIterator()
    {
        return new \ArrayIterator($this->get(self::NATIVE_TEMPLATE_ID));
    }

    /**
     * Returns element from 'native_template_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getNativeTemplateIdAt($offset)
    {
        return $this->get(self::NATIVE_TEMPLATE_ID, $offset);
    }

    /**
     * Returns count of 'native_template_id' list
     *
     * @return int
     */
    public function getNativeTemplateIdCount()
    {
        return $this->count(self::NATIVE_TEMPLATE_ID);
    }
}
}