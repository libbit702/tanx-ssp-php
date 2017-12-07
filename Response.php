<?php
/**
 * Auto generated from tanx-ssp.proto at 2017-08-17 15:52:34
 *
 * Tanx package
 */

namespace Tanx {
/**
 * Response message
 */
class Response extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const STATUS = 2;
    const SEAT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STATUS => array(
            'default' => 0,
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SEAT => array(
            'name' => 'seat',
            'repeated' => true,
            'type' => '\Tanx\Response_Seat'
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
        $this->values[self::STATUS] = self::$fields[self::STATUS]['default'];
        $this->values[self::SEAT] = array();
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
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'seat' list
     *
     * @param \Tanx\Response_Seat $value Value to append
     *
     * @return null
     */
    public function appendSeat(\Tanx\Response_Seat $value)
    {
        return $this->append(self::SEAT, $value);
    }

    /**
     * Clears 'seat' list
     *
     * @return null
     */
    public function clearSeat()
    {
        return $this->clear(self::SEAT);
    }

    /**
     * Returns 'seat' list
     *
     * @return \Tanx\Response_Seat[]
     */
    public function getSeat()
    {
        return $this->get(self::SEAT);
    }

    /**
     * Returns 'seat' iterator
     *
     * @return \ArrayIterator
     */
    public function getSeatIterator()
    {
        return new \ArrayIterator($this->get(self::SEAT));
    }

    /**
     * Returns element from 'seat' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Tanx\Response_Seat
     */
    public function getSeatAt($offset)
    {
        return $this->get(self::SEAT, $offset);
    }

    /**
     * Returns count of 'seat' list
     *
     * @return int
     */
    public function getSeatCount()
    {
        return $this->count(self::SEAT);
    }
}
}