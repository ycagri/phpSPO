<?php

/**
 * Updated By PHP Office365 Generator 2020-04-25T20:24:39+00:00 16.0.20008.12009
 */
namespace Office365\OutlookServices;

class Item extends OutlookEntity
{
    /**
     * Identifies the version of the outlook object. Every time the event is changed, ChangeKey changes as well.
     * This allows Exchange to apply changes to the correct version of the object.
     * @var string
     */
    public $ChangeKey;
    /**
     * @var array
     */
    public $Categories;
    /**
     * The date and time the message was created.
     * @var string|null
     */
    public $CreatedDateTime;
    /**
     * @var string|null
     */
    public $LastModifiedDateTime;

}