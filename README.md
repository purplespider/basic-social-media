# Basic Social Media

## Introduction

Adds fields to Settings for entering common social media platform URLs:

* Facebook
* Twitter
* Instagram
* YouTube
* Vimeo

A template include then allows linked icons to be inserted on the site.

Note: The template include currently relies on Bootstrap and Font Awesome, but can be easily overridden to suit your site.

## Maintainer Contact
 * James Cocker (ssmodulesgithub@pswd.biz)
 
## Requirements
 * Silverstripe 4

## Installation

`composer require purplespider/basic-social-media`

Dev/Build

Add URLs via new "Social media" tab in site Settings.

Add template include: `<% include PurpleSpider\BasicSocialMedia\BasicSocialMedia %>`