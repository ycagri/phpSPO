<?php

/**
 * Updated By PHP Office365 Generator 2019-10-12T19:34:55+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\Directory\Provider;

use Office365\Runtime\ClientValueObject;

class LinkChange extends ClientValueObject
{
    /**
     * @var array
     */
    public $Added;
    /**
     * @var string
     */
    public $Name;
    /**
     * @var array
     */
    public $Removed;
}