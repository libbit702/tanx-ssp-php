<?php
/**
 * Auto generated from tanx-ssp.proto at 2017-08-17 15:52:34
 *
 * Tanx package
 */

namespace Tanx {
/**
 * Video message embedded in Ad/Seat/Response message
 */
class Response_Seat_Ad_Video extends \ProtobufMessage
{
    /* Field index constants */
    const MEDIA = 1;
    const DURATION = 2;
    const EVENT_START = 3;
    const EVENT_MID_POINT = 4;
    const EVENT_COMPLETE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MEDIA => array(
            'name' => 'media',
            'repeated' => true,
            'type' => '\Tanx\Response_Seat_Ad_Video_Media'
        ),
        self::DURATION => array(
            'name' => 'duration',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EVENT_START => array(
            'name' => 'event_start',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EVENT_MID_POINT => array(
            'name' => 'event_mid_point',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EVENT_COMPLETE => array(
            'name' => 'event_complete',
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
        $this->values[self::MEDIA] = array();
        $this->values[self::DURATION] = null;
        $this->values[self::EVENT_START] = array();
        $this->values[self::EVENT_MID_POINT] = array();
        $this->values[self::EVENT_COMPLETE] = array();
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
     * Appends value to 'media' list
     *
     * @param \Tanx\Response_Seat_Ad_Video_Media $value Value to append
     *
     * @return null
     */
    public function appendMedia(\Tanx\Response_Seat_Ad_Video_Media $value)
    {
        return $this->append(self::MEDIA, $value);
    }

    /**
     * Clears 'media' list
     *
     * @return null
     */
    public function clearMedia()
    {
        return $this->clear(self::MEDIA);
    }

    /**
     * Returns 'media' list
     *
     * @return \Tanx\Response_Seat_Ad_Video_Media[]
     */
    public function getMedia()
    {
        return $this->get(self::MEDIA);
    }

    /**
     * Returns 'media' iterator
     *
     * @return \ArrayIterator
     */
    public function getMediaIterator()
    {
        return new \ArrayIterator($this->get(self::MEDIA));
    }

    /**
     * Returns element from 'media' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Tanx\Response_Seat_Ad_Video_Media
     */
    public function getMediaAt($offset)
    {
        return $this->get(self::MEDIA, $offset);
    }

    /**
     * Returns count of 'media' list
     *
     * @return int
     */
    public function getMediaCount()
    {
        return $this->count(self::MEDIA);
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

    /**
     * Appends value to 'event_start' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendEventStart($value)
    {
        return $this->append(self::EVENT_START, $value);
    }

    /**
     * Clears 'event_start' list
     *
     * @return null
     */
    public function clearEventStart()
    {
        return $this->clear(self::EVENT_START);
    }

    /**
     * Returns 'event_start' list
     *
     * @return string[]
     */
    public function getEventStart()
    {
        return $this->get(self::EVENT_START);
    }

    /**
     * Returns 'event_start' iterator
     *
     * @return \ArrayIterator
     */
    public function getEventStartIterator()
    {
        return new \ArrayIterator($this->get(self::EVENT_START));
    }

    /**
     * Returns element from 'event_start' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getEventStartAt($offset)
    {
        return $this->get(self::EVENT_START, $offset);
    }

    /**
     * Returns count of 'event_start' list
     *
     * @return int
     */
    public function getEventStartCount()
    {
        return $this->count(self::EVENT_START);
    }

    /**
     * Appends value to 'event_mid_point' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendEventMidPoint($value)
    {
        return $this->append(self::EVENT_MID_POINT, $value);
    }

    /**
     * Clears 'event_mid_point' list
     *
     * @return null
     */
    public function clearEventMidPoint()
    {
        return $this->clear(self::EVENT_MID_POINT);
    }

    /**
     * Returns 'event_mid_point' list
     *
     * @return string[]
     */
    public function getEventMidPoint()
    {
        return $this->get(self::EVENT_MID_POINT);
    }

    /**
     * Returns 'event_mid_point' iterator
     *
     * @return \ArrayIterator
     */
    public function getEventMidPointIterator()
    {
        return new \ArrayIterator($this->get(self::EVENT_MID_POINT));
    }

    /**
     * Returns element from 'event_mid_point' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getEventMidPointAt($offset)
    {
        return $this->get(self::EVENT_MID_POINT, $offset);
    }

    /**
     * Returns count of 'event_mid_point' list
     *
     * @return int
     */
    public function getEventMidPointCount()
    {
        return $this->count(self::EVENT_MID_POINT);
    }

    /**
     * Appends value to 'event_complete' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendEventComplete($value)
    {
        return $this->append(self::EVENT_COMPLETE, $value);
    }

    /**
     * Clears 'event_complete' list
     *
     * @return null
     */
    public function clearEventComplete()
    {
        return $this->clear(self::EVENT_COMPLETE);
    }

    /**
     * Returns 'event_complete' list
     *
     * @return string[]
     */
    public function getEventComplete()
    {
        return $this->get(self::EVENT_COMPLETE);
    }

    /**
     * Returns 'event_complete' iterator
     *
     * @return \ArrayIterator
     */
    public function getEventCompleteIterator()
    {
        return new \ArrayIterator($this->get(self::EVENT_COMPLETE));
    }

    /**
     * Returns element from 'event_complete' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getEventCompleteAt($offset)
    {
        return $this->get(self::EVENT_COMPLETE, $offset);
    }

    /**
     * Returns count of 'event_complete' list
     *
     * @return int
     */
    public function getEventCompleteCount()
    {
        return $this->count(self::EVENT_COMPLETE);
    }
}
}