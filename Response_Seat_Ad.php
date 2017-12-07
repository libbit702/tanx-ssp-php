<?php
/**
 * Auto generated from tanx-ssp.proto at 2017-08-17 15:52:34
 *
 * Tanx package
 */

namespace Tanx {
/**
 * Ad message embedded in Seat/Response message
 */
class Response_Seat_Ad extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const ADCONTENT = 2;
    const CREATIVE_TYPE = 3;
    const CATEGORY = 4;
    const DESTINATION_URL = 5;
    const IMPRESSION_TRACKING_URL = 6;
    const CLICK_THROUGH_URL = 7;
    const CLICK_TRACKING_URL = 8;
    const VIDEO = 9;
    const NATIVE_AD = 10;
    const API = 11;
    const DEAL_ID = 12;
    const CAMPAIGN_DATE = 13;
    const CREATIVE_ID = 14;
    const AD_SOURCE = 15;
    const DEEPLINK_URL = 16;
    const DOWNLOAD_URL = 17;
    const PRICE = 18;
    const SETTLE_PRICE = 19;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ADCONTENT => array(
            'name' => 'adcontent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CREATIVE_TYPE => array(
            'name' => 'creative_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CATEGORY => array(
            'name' => 'category',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DESTINATION_URL => array(
            'name' => 'destination_url',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IMPRESSION_TRACKING_URL => array(
            'name' => 'impression_tracking_url',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CLICK_THROUGH_URL => array(
            'name' => 'click_through_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CLICK_TRACKING_URL => array(
            'name' => 'click_tracking_url',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VIDEO => array(
            'name' => 'video',
            'required' => false,
            'type' => '\Tanx\Response_Seat_Ad_Video'
        ),
        self::NATIVE_AD => array(
            'name' => 'native_ad',
            'required' => false,
            'type' => '\Tanx\Response_Seat_Ad_NativeAd'
        ),
        self::API => array(
            'name' => 'api',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEAL_ID => array(
            'name' => 'deal_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CAMPAIGN_DATE => array(
            'name' => 'campaign_date',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CREATIVE_ID => array(
            'name' => 'creative_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AD_SOURCE => array(
            'name' => 'ad_source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEEPLINK_URL => array(
            'name' => 'deeplink_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DOWNLOAD_URL => array(
            'name' => 'download_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PRICE => array(
            'name' => 'price',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SETTLE_PRICE => array(
            'name' => 'settle_price',
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
        $this->values[self::ID] = null;
        $this->values[self::ADCONTENT] = null;
        $this->values[self::CREATIVE_TYPE] = null;
        $this->values[self::CATEGORY] = array();
        $this->values[self::DESTINATION_URL] = array();
        $this->values[self::IMPRESSION_TRACKING_URL] = array();
        $this->values[self::CLICK_THROUGH_URL] = null;
        $this->values[self::CLICK_TRACKING_URL] = array();
        $this->values[self::VIDEO] = null;
        $this->values[self::NATIVE_AD] = null;
        $this->values[self::API] = array();
        $this->values[self::DEAL_ID] = null;
        $this->values[self::CAMPAIGN_DATE] = null;
        $this->values[self::CREATIVE_ID] = null;
        $this->values[self::AD_SOURCE] = null;
        $this->values[self::DEEPLINK_URL] = null;
        $this->values[self::DOWNLOAD_URL] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::SETTLE_PRICE] = null;
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
     * Sets value of 'adcontent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAdcontent($value)
    {
        return $this->set(self::ADCONTENT, $value);
    }

    /**
     * Returns value of 'adcontent' property
     *
     * @return string
     */
    public function getAdcontent()
    {
        $value = $this->get(self::ADCONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'creative_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCreativeType($value)
    {
        return $this->set(self::CREATIVE_TYPE, $value);
    }

    /**
     * Returns value of 'creative_type' property
     *
     * @return integer
     */
    public function getCreativeType()
    {
        $value = $this->get(self::CREATIVE_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'category' list
     *
     * @param integer $value Value to append
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
     * @return integer[]
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
     * @return integer
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
     * Appends value to 'destination_url' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendDestinationUrl($value)
    {
        return $this->append(self::DESTINATION_URL, $value);
    }

    /**
     * Clears 'destination_url' list
     *
     * @return null
     */
    public function clearDestinationUrl()
    {
        return $this->clear(self::DESTINATION_URL);
    }

    /**
     * Returns 'destination_url' list
     *
     * @return string[]
     */
    public function getDestinationUrl()
    {
        return $this->get(self::DESTINATION_URL);
    }

    /**
     * Returns 'destination_url' iterator
     *
     * @return \ArrayIterator
     */
    public function getDestinationUrlIterator()
    {
        return new \ArrayIterator($this->get(self::DESTINATION_URL));
    }

    /**
     * Returns element from 'destination_url' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getDestinationUrlAt($offset)
    {
        return $this->get(self::DESTINATION_URL, $offset);
    }

    /**
     * Returns count of 'destination_url' list
     *
     * @return int
     */
    public function getDestinationUrlCount()
    {
        return $this->count(self::DESTINATION_URL);
    }

    /**
     * Appends value to 'impression_tracking_url' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendImpressionTrackingUrl($value)
    {
        return $this->append(self::IMPRESSION_TRACKING_URL, $value);
    }

    /**
     * Clears 'impression_tracking_url' list
     *
     * @return null
     */
    public function clearImpressionTrackingUrl()
    {
        return $this->clear(self::IMPRESSION_TRACKING_URL);
    }

    /**
     * Returns 'impression_tracking_url' list
     *
     * @return string[]
     */
    public function getImpressionTrackingUrl()
    {
        return $this->get(self::IMPRESSION_TRACKING_URL);
    }

    /**
     * Returns 'impression_tracking_url' iterator
     *
     * @return \ArrayIterator
     */
    public function getImpressionTrackingUrlIterator()
    {
        return new \ArrayIterator($this->get(self::IMPRESSION_TRACKING_URL));
    }

    /**
     * Returns element from 'impression_tracking_url' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getImpressionTrackingUrlAt($offset)
    {
        return $this->get(self::IMPRESSION_TRACKING_URL, $offset);
    }

    /**
     * Returns count of 'impression_tracking_url' list
     *
     * @return int
     */
    public function getImpressionTrackingUrlCount()
    {
        return $this->count(self::IMPRESSION_TRACKING_URL);
    }

    /**
     * Sets value of 'click_through_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClickThroughUrl($value)
    {
        return $this->set(self::CLICK_THROUGH_URL, $value);
    }

    /**
     * Returns value of 'click_through_url' property
     *
     * @return string
     */
    public function getClickThroughUrl()
    {
        $value = $this->get(self::CLICK_THROUGH_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'click_tracking_url' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendClickTrackingUrl($value)
    {
        return $this->append(self::CLICK_TRACKING_URL, $value);
    }

    /**
     * Clears 'click_tracking_url' list
     *
     * @return null
     */
    public function clearClickTrackingUrl()
    {
        return $this->clear(self::CLICK_TRACKING_URL);
    }

    /**
     * Returns 'click_tracking_url' list
     *
     * @return string[]
     */
    public function getClickTrackingUrl()
    {
        return $this->get(self::CLICK_TRACKING_URL);
    }

    /**
     * Returns 'click_tracking_url' iterator
     *
     * @return \ArrayIterator
     */
    public function getClickTrackingUrlIterator()
    {
        return new \ArrayIterator($this->get(self::CLICK_TRACKING_URL));
    }

    /**
     * Returns element from 'click_tracking_url' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getClickTrackingUrlAt($offset)
    {
        return $this->get(self::CLICK_TRACKING_URL, $offset);
    }

    /**
     * Returns count of 'click_tracking_url' list
     *
     * @return int
     */
    public function getClickTrackingUrlCount()
    {
        return $this->count(self::CLICK_TRACKING_URL);
    }

    /**
     * Sets value of 'video' property
     *
     * @param \Tanx\Response_Seat_Ad_Video $value Property value
     *
     * @return null
     */
    public function setVideo(\Tanx\Response_Seat_Ad_Video $value=null)
    {
        return $this->set(self::VIDEO, $value);
    }

    /**
     * Returns value of 'video' property
     *
     * @return \Tanx\Response_Seat_Ad_Video
     */
    public function getVideo()
    {
        return $this->get(self::VIDEO);
    }

    /**
     * Sets value of 'native_ad' property
     *
     * @param \Tanx\Response_Seat_Ad_NativeAd $value Property value
     *
     * @return null
     */
    public function setNativeAd(\Tanx\Response_Seat_Ad_NativeAd $value=null)
    {
        return $this->set(self::NATIVE_AD, $value);
    }

    /**
     * Returns value of 'native_ad' property
     *
     * @return \Tanx\Response_Seat_Ad_NativeAd
     */
    public function getNativeAd()
    {
        return $this->get(self::NATIVE_AD);
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
     * Sets value of 'deal_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDealId($value)
    {
        return $this->set(self::DEAL_ID, $value);
    }

    /**
     * Returns value of 'deal_id' property
     *
     * @return string
     */
    public function getDealId()
    {
        $value = $this->get(self::DEAL_ID);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'creative_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCreativeId($value)
    {
        return $this->set(self::CREATIVE_ID, $value);
    }

    /**
     * Returns value of 'creative_id' property
     *
     * @return string
     */
    public function getCreativeId()
    {
        $value = $this->get(self::CREATIVE_ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ad_source' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAdSource($value)
    {
        return $this->set(self::AD_SOURCE, $value);
    }

    /**
     * Returns value of 'ad_source' property
     *
     * @return string
     */
    public function getAdSource()
    {
        $value = $this->get(self::AD_SOURCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'deeplink_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeeplinkUrl($value)
    {
        return $this->set(self::DEEPLINK_URL, $value);
    }

    /**
     * Returns value of 'deeplink_url' property
     *
     * @return string
     */
    public function getDeeplinkUrl()
    {
        $value = $this->get(self::DEEPLINK_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'download_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDownloadUrl($value)
    {
        return $this->set(self::DOWNLOAD_URL, $value);
    }

    /**
     * Returns value of 'download_url' property
     *
     * @return string
     */
    public function getDownloadUrl()
    {
        $value = $this->get(self::DOWNLOAD_URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'price' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPrice($value)
    {
        return $this->set(self::PRICE, $value);
    }

    /**
     * Returns value of 'price' property
     *
     * @return integer
     */
    public function getPrice()
    {
        $value = $this->get(self::PRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'settle_price' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSettlePrice($value)
    {
        return $this->set(self::SETTLE_PRICE, $value);
    }

    /**
     * Returns value of 'settle_price' property
     *
     * @return integer
     */
    public function getSettlePrice()
    {
        $value = $this->get(self::SETTLE_PRICE);
        return $value === null ? (integer)$value : $value;
    }
}
}