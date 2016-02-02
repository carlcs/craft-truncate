<?php
namespace Craft;

class TruncatePlugin extends BasePlugin
{
    public function getName()
    {
        return 'Truncate';
    }

    public function getVersion()
    {
        return '1.0';
    }

    public function getDeveloper()
    {
        return 'carlcs';
    }

    public function getDeveloperUrl()
    {
        return 'https://github.com/carlcs/craft-truncate';
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.truncate.twigextensions.TruncateTwigExtension');
        return new TruncateTwigExtension();
    }
}
