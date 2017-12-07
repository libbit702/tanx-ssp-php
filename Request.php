<?php
/**
 * Auto generated from tanx-ssp.proto at 2017-08-17 15:52:34
 *
 * Tanx package
 */

namespace Tanx {
/**
 * Request message
 */
class Request extends \ProtobufMessage
{
    /* Field index constants */
    const VERSION = 1;
    const ID = 2;
    const IMP = 3;
    const SITE = 4;
    const DEVICE = 5;
    const APP = 6;
    const USER = 7;
    const DETECTED_LANGUAGE = 8;
    const TRACE_KEY = 9;
    const HTTPS_REQUIRED = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::VERSION => array(
            'name' => 'version',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ID => array(
            'name' => 'id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IMP => array(
            'name' => 'imp',
            'repeated' => true,
            'type' => '\Tanx\Request_Impression'
        ),
        self::SITE => array(
            'name' => 'site',
            'required' => false,
            'type' => '\Tanx\Request_Site'
        ),
        self::DEVICE => array(
            'name' => 'device',
            'required' => false,
            'type' => '\Tanx\Request_Device'
        ),
        self::APP => array(
            'name' => 'app',
            'required' => false,
            'type' => '\Tanx\Request_App'
        ),
        self::USER => array(
            'name' => 'user',
            'required' => false,
            'type' => '\Tanx\Request_User'
        ),
        self::DETECTED_LANGUAGE => array(
            'name' => 'detected_language',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TRACE_KEY => array(
            'name' => 'trace_key',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::HTTPS_REQUIRED => array(
            'default' => false,
            'name' => 'https_required',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::VERSION] = null;
        $this->values[self::ID] = null;
        $this->values[self::IMP] = array();
        $this->values[self::SITE] = null;
        $this->values[self::DEVICE] = null;
        $this->values[self::APP] = null;
        $this->values[self::USER] = null;
        $this->values[self::DETECTED_LANGUAGE] = null;
        $this->values[self::TRACE_KEY] = null;
        $this->values[self::HTTPS_REQUIRED] = self::$fields[self::HTTPS_REQUIRED]['default'];
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
     * Sets value of 'version' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVersion($value)
    {
        return $this->set(self::VERSION, $value);
    }

    /**
     * Returns value of 'version' property
     *
     * @return integer
     */
    public function getVersion()
    {
        $value = $this->get(self::VERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'id' property
     *
     * @param string $value Property value
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
     * @return string
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'imp' list
     *
     * @param \Tanx\Request_Impression $value Value to append
     *
     * @return null
     */
    public function appendImp(\Tanx\Request_Impression $value)
    {
        return $this->append(self::IMP, $value);
    }

    /**
     * Clears 'imp' list
     *
     * @return null
     */
    public function clearImp()
    {
        return $this->clear(self::IMP);
    }

    /**
     * Returns 'imp' list
     *
     * @return \Tanx\Request_Impression[]
     */
    public function getImp()
    {
        return $this->get(self::IMP);
    }

    /**
     * Returns 'imp' iterator
     *
     * @return \ArrayIterator
     */
    public function getImpIterator()
    {
        return new \ArrayIterator($this->get(self::IMP));
    }

    /**
     * Returns element from 'imp' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Tanx\Request_Impression
     */
    public function getImpAt($offset)
    {
        return $this->get(self::IMP, $offset);
    }

    /**
     * Returns count of 'imp' list
     *
     * @return int
     */
    public function getImpCount()
    {
        return $this->count(self::IMP);
    }

    /**
     * Sets value of 'site' property
     *
     * @param \Tanx\Request_Site $value Property value
     *
     * @return null
     */
    public function setSite(\Tanx\Request_Site $value=null)
    {
        return $this->set(self::SITE, $value);
    }

    /**
     * Returns value of 'site' property
     *
     * @return \Tanx\Request_Site
     */
    public function getSite()
    {
        return $this->get(self::SITE);
    }

    /**
     * Sets value of 'device' property
     *
     * @param \Tanx\Request_Device $value Property value
     *
     * @return null
     */
    public function setDevice(\Tanx\Request_Device $value=null)
    {
        return $this->set(self::DEVICE, $value);
    }

    /**
     * Returns value of 'device' property
     *
     * @return \Tanx\Request_Device
     */
    public function getDevice()
    {
        return $this->get(self::DEVICE);
    }

    /**
     * Sets value of 'app' property
     *
     * @param \Tanx\Request_App $value Property value
     *
     * @return null
     */
    public function setApp(\Tanx\Request_App $value=null)
    {
        return $this->set(self::APP, $value);
    }

    /**
     * Returns value of 'app' property
     *
     * @return \Tanx\Request_App
     */
    public function getApp()
    {
        return $this->get(self::APP);
    }

    /**
     * Sets value of 'user' property
     *
     * @param \Tanx\Request_User $value Property value
     *
     * @return null
     */
    public function setUser(\Tanx\Request_User $value=null)
    {
        return $this->set(self::USER, $value);
    }

    /**
     * Returns value of 'user' property
     *
     * @return \Tanx\Request_User
     */
    public function getUser()
    {
        return $this->get(self::USER);
    }

    /**
     * Sets value of 'detected_language' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDetectedLanguage($value)
    {
        return $this->set(self::DETECTED_LANGUAGE, $value);
    }

    /**
     * Returns value of 'detected_language' property
     *
     * @return string
     */
    public function getDetectedLanguage()
    {
        $value = $this->get(self::DETECTED_LANGUAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'trace_key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTraceKey($value)
    {
        return $this->set(self::TRACE_KEY, $value);
    }

    /**
     * Returns value of 'trace_key' property
     *
     * @return string
     */
    public function getTraceKey()
    {
        $value = $this->get(self::TRACE_KEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'https_required' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setHttpsRequired($value)
    {
        return $this->set(self::HTTPS_REQUIRED, $value);
    }

    /**
     * Returns value of 'https_required' property
     *
     * @return boolean
     */
    public function getHttpsRequired()
    {
        $value = $this->get(self::HTTPS_REQUIRED);
        return $value === null ? (boolean)$value : $value;
    }
}
}