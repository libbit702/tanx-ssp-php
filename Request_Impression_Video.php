<?php
/**
 * Auto generated from tanx-ssp.proto at 2017-08-17 15:52:34
 *
 * Tanx package
 */

namespace Tanx {
/**
 * Video message embedded in Impression/Request message
 */
class Request_Impression_Video extends \ProtobufMessage
{
    /* Field index constants */
    const START_DELAY = 1;
    const SECTION_START_DELAY = 2;
    const MIN_DURATION = 3;
    const MAX_DURATION = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::START_DELAY => array(
            'name' => 'start_delay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SECTION_START_DELAY => array(
            'name' => 'section_start_delay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MIN_DURATION => array(
            'name' => 'min_duration',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAX_DURATION => array(
            'name' => 'max_duration',
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
        $this->values[self::START_DELAY] = null;
        $this->values[self::SECTION_START_DELAY] = null;
        $this->values[self::MIN_DURATION] = null;
        $this->values[self::MAX_DURATION] = null;
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
     * Sets value of 'start_delay' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStartDelay($value)
    {
        return $this->set(self::START_DELAY, $value);
    }

    /**
     * Returns value of 'start_delay' property
     *
     * @return integer
     */
    public function getStartDelay()
    {
        $value = $this->get(self::START_DELAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'section_start_delay' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSectionStartDelay($value)
    {
        return $this->set(self::SECTION_START_DELAY, $value);
    }

    /**
     * Returns value of 'section_start_delay' property
     *
     * @return integer
     */
    public function getSectionStartDelay()
    {
        $value = $this->get(self::SECTION_START_DELAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'min_duration' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMinDuration($value)
    {
        return $this->set(self::MIN_DURATION, $value);
    }

    /**
     * Returns value of 'min_duration' property
     *
     * @return integer
     */
    public function getMinDuration()
    {
        $value = $this->get(self::MIN_DURATION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'max_duration' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxDuration($value)
    {
        return $this->set(self::MAX_DURATION, $value);
    }

    /**
     * Returns value of 'max_duration' property
     *
     * @return integer
     */
    public function getMaxDuration()
    {
        $value = $this->get(self::MAX_DURATION);
        return $value === null ? (integer)$value : $value;
    }
}
}