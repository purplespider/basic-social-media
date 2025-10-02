<?php

namespace PurpleSpider\BasicSocialMedia;

use SilverStripe\Core\Extension;
use SilverStripe\Forms\FieldList;
use Fromholdio\ExternalURLField\ExternalURLField;

class BasicSocialMediaExtension extends Extension
{
    private static array $db = [
        'FacebookURL' => 'ExternalURL',
        'TwitterURL' => 'ExternalURL',
        'LinkedInURL' => 'ExternalURL',
        'InstagramURL' => 'ExternalURL',
        'YouTubeURL' => 'ExternalURL',
        'VimeoURL' => 'ExternalURL',
    ];

    public function updateCMSFields(FieldList $fields): void
    {
        $fields->addFieldToTab("Root.SocialMedia", ExternalURLField::create('FacebookURL', 'Facebook URL'));
        $fields->addFieldToTab("Root.SocialMedia", ExternalURLField::create('TwitterURL', 'Twitter URL'));
        $fields->addFieldToTab("Root.SocialMedia", ExternalURLField::create('LinkedInURL', 'LinkedIn URL'));
        $fields->addFieldToTab("Root.SocialMedia", ExternalURLField::create('InstagramURL', 'Instagram URL'));
        $fields->addFieldToTab("Root.SocialMedia", ExternalURLField::create('YouTubeURL', 'YouTube URL'));
        $fields->addFieldToTab("Root.SocialMedia", ExternalURLField::create('VimeoURL', 'Vimeo URL'));

        return $fields;
    }
}
