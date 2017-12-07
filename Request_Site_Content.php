<?php
/**
 * Auto generated from tanx-ssp.proto at 2017-08-17 15:52:34
 *
 * Tanx package
 */

namespace Tanx {
/**
 * Content message embedded in Site/Request message
 */
class Request_Site_Content extends \ProtobufMessage
{
    /* Field index constants */
    const TITLE = 1;
    const KEYWORDS = 2;
    const CATEGORY = 3;
    const DURATION = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::KEYWORDS => array(
            'name' => 'keywords',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CATEGORY => array(
            'name' => 'category',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DURATION => array(
            'name' => 'duration',
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
        $this->values[self::TITLE] = null;
        $this->values[self::KEYWORDS] = array();
        $this->values[self::CATEGORY] = array();
        $this->values[self::DURATION] = null;
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
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value)
    {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle()
    {
        $value = $this->get(self::TITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'keywords' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendKeywords($value)
    {
        return $this->append(self::KEYWORDS, $value);
    }

    /**
     * Clears 'keywords' list
     *
     * @return null
     */
    public function clearKeywords()
    {
        return $this->clear(self::KEYWORDS);
    }

    /**
     * Returns 'keywords' list
     *
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->get(self::KEYWORDS);
    }

    /**
     * Returns 'keywords' iterator
     *
     * @return \ArrayIterator
     */
    public function getKeywordsIterator()
    {
        return new \ArrayIterator($this->get(self::KEYWORDS));
    }

    /**
     * Returns element from 'keywords' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getKeywordsAt($offset)
    {
        return $this->get(self::KEYWORDS, $offset);
    }

    /**
     * Returns count of 'keywords' list
     *
     * @return int
     */
    public function getKeywordsCount()
    {
        return $this->count(self::KEYWORDS);
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

    /**
     * Sets value of 'duration' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDuration($value)
    {
        return $this->set(self::DURATION, $value);
    }

    /**
     * Returns value of 'duration' property
     *
     * @return integer
     */
    public function getDuration()
    {
        $value = $this->get(self::DURATION);
        return $value === null ? (integer)$value : $value;
    }
}
}