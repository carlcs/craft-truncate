<?php
namespace Craft;

class TruncatePlugin extends BasePlugin
{
	function getName()
	{
		return 'Truncate';
	}

	function getVersion()
	{
		return '1.0';
	}

	function getDeveloper()
	{
		return 'carlcs';
	}

	function getDeveloperUrl()
	{
		return 'https://github.com/carlcs/craft-truncate';
	}

	public function addTwigExtension()
	{
		Craft::import('plugins.truncate.twigextensions.TruncateTwigExtension');
		return new TruncateTwigExtension();
	}
}
