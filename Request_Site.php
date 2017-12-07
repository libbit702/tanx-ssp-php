<?php
/**
 * Auto generated from tanx-ssp.proto at 2017-08-17 15:52:34
 *
 * Tanx package
 */

namespace Tanx {
/**
 * Site message embedded in Request message
 */
class Request_Site extends \ProtobufMessage
{
    /* Field index constants */
    const PAGE_URL = 1;
    const REFER_URL = 2;
    const CONTENT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PAGE_URL => array(
            'name' => 'page_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REFER_URL => array(
            'name' => 'refer_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => '\Tanx\Request_Site_Content'
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
        $this->values[self::PAGE_URL] = null;
        $this->values[self::REFER_URL] = null;
        $this->values[self::CONTENT] = null;
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
     * Sets value of 'page_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPageUrl($value)
    {
        return $this->set(self::PAGE_URL, $value);
    }

    /**
     * Returns value of 'page_url' property
     *
     * @return string
     */
    public function getPageUrl()
    {
        $value = $this->get(self::PAGE_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'refer_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReferUrl($value)
    {
        return $this->set(self::REFER_URL, $value);
    }

    /**
     * Returns value of 'refer_url' property
     *
     * @return string
     */
    public function getReferUrl()
    {
        $value = $this->get(self::REFER_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'content' property
     *
     * @param \Tanx\Request_Site_Content $value Property value
     *
     * @return null
     */
    public function setContent(\Tanx\Request_Site_Content $value=null)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return \Tanx\Request_Site_Content
     */
    public function getContent()
    {
        return $this->get(self::CONTENT);
    }
}
}