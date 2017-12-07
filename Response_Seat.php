<?php
/**
 * Auto generated from tanx-ssp.proto at 2017-08-17 15:52:34
 *
 * Tanx package
 */

namespace Tanx {
/**
 * Seat message embedded in Response message
 */
class Response_Seat extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const AD = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AD => array(
            'name' => 'ad',
            'repeated' => true,
            'type' => '\Tanx\Response_Seat_Ad'
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
        $this->values[self::AD] = array();
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
     * Appends value to 'ad' list
     *
     * @param \Tanx\Response_Seat_Ad $value Value to append
     *
     * @return null
     */
    public function appendAd(\Tanx\Response_Seat_Ad $value)
    {
        return $this->append(self::AD, $value);
    }

    /**
     * Clears 'ad' list
     *
     * @return null
     */
    public function clearAd()
    {
        return $this->clear(self::AD);
    }

    /**
     * Returns 'ad' list
     *
     * @return \Tanx\Response_Seat_Ad[]
     */
    public function getAd()
    {
        return $this->get(self::AD);
    }

    /**
     * Returns 'ad' iterator
     *
     * @return \ArrayIterator
     */
    public function getAdIterator()
    {
        return new \ArrayIterator($this->get(self::AD));
    }

    /**
     * Returns element from 'ad' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Tanx\Response_Seat_Ad
     */
    public function getAdAt($offset)
    {
        return $this->get(self::AD, $offset);
    }

    /**
     * Returns count of 'ad' list
     *
     * @return int
     */
    public function getAdCount()
    {
        return $this->count(self::AD);
    }
}
}