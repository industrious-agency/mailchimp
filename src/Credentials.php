<?php

namespace Industrious\MailChimp;

class Credentials
{
    /** @var string */
    protected $region;

    /** @var string */
    protected $key;

    /**
     * Construct a new mailchimp credentials data-object.
     *
     * @param string $region
     * @param string $key
     */
    public function __construct($region, $key)
    {
        $this->region = $region;
        $this->key = $key;
    }

    /**
     * Get the region.
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Get the api key.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
}
