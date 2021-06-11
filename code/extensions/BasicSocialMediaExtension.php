<?php

namespace PurpleSpider\BasicSocialMedia;

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;
use BurnBright\ExternalURLField\ExternalURLField;

class BasicSocialMediaExtension extends DataExtension
{
    private static $db = [
        'FacebookURL' => 'ExternalURL',
        'TwitterURL' => 'ExternalURL',
        'LinkedInURL' => 'ExternalURL',
        'InstagramURL' => 'ExternalURL',
        'YouTubeURL' => 'ExternalURL',
        'VimeoURL' => 'ExternalURL',
    ];

    public function updateCMSFields(FieldList $fields)
    {

        $fields->removeFieldFromTab("Root.Main","Tagline");

        $fields->addFieldToTab("Root.SocialMedia", ExternalURLField::create('FacebookURL', 'Facebook URL'));
        $fields->addFieldToTab("Root.SocialMedia", ExternalURLField::create('TwitterURL', 'Twitter URL'));
        $fields->addFieldToTab("Root.SocialMedia", ExternalURLField::create('LinkedInURL', 'LinkedIn URL'));
        $fields->addFieldToTab("Root.SocialMedia", ExternalURLField::create('InstagramURL', 'Instagram URL'));
        $fields->addFieldToTab("Root.SocialMedia", ExternalURLField::create('YouTubeURL', 'YouTube URL'));
        $fields->addFieldToTab("Root.SocialMedia", ExternalURLField::create('VimeoURL', 'Vimeo URL'));

        return $fields;
    }
}
