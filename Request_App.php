<?php
/**
 * Auto generated from tanx-ssp.proto at 2017-08-17 15:52:34
 *
 * Tanx package
 */

namespace Tanx {
/**
 * App message embedded in Request message
 */
class Request_App extends \ProtobufMessage
{
    /* Field index constants */
    const PACKAGE_NAME = 1;
    const APP_NAME = 2;
    const CATEGORY = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PACKAGE_NAME => array(
            'name' => 'package_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::APP_NAME => array(
            'name' => 'app_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CATEGORY => array(
            'name' => 'category',
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
        $this->values[self::PACKAGE_NAME] = null;
        $this->values[self::APP_NAME] = null;
        $this->values[self::CATEGORY] = array();
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
     * Sets value of 'package_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPackageName($value)
    {
        return $this->set(self::PACKAGE_NAME, $value);
    }

    /**
     * Returns value of 'package_name' property
     *
     * @return string
     */
    public function getPackageName()
    {
        $value = $this->get(self::PACKAGE_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'app_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAppName($value)
    {
        return $this->set(self::APP_NAME, $value);
    }

    /**
     * Returns value of 'app_name' property
     *
     * @return string
     */
    public function getAppName()
    {
        $value = $this->get(self::APP_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'category' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendCategory($value)
    {
        return $this->append(self::CATEGORY, $value);
    }

    /**
     * Clears 'category' list
     *
     * @return null
     */
    public function clearCategory()
    {
        return $this->clear(self::CATEGORY);
    }

    /**
     * Returns 'category' list
     *
     * @return string[]
     */
    public function getCategory()
    {
        return $this->get(self::CATEGORY);
    }

    /**
     * Returns 'category' iterator
     *
     * @return \ArrayIterator
     */
    public function getCategoryIterator()
    {
        return new \ArrayIterator($this->get(self::CATEGORY));
    }

    /**
     * Returns element from 'category' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getCategoryAt($offset)
    {
        return $this->get(self::CATEGORY, $offset);
    }

    /**
     * Returns count of 'category' list
     *
     * @return int
     */
    public function getCategoryCount()
    {
        return $this->count(self::CATEGORY);
    }
}
}