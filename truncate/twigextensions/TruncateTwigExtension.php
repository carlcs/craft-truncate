<?php
namespace Craft;

class TruncateTwigExtension extends \Twig_Extension
{
	/**
	 * Returns the name of the extension.
	 *
	 * @return string The extension name
	 */
	public function getName()
	{
		return 'Truncate';
	}

	/**
	 * Returns a list of filters to add to the existing list.
	 *
	 * @return array An array of filters
	 */
	public function getFilters()
	{
		return array(
			new \Twig_SimpleFilter('truncate', array($this, 'truncateFilter')),
		);
	}

	/**
	 * Twig filter to cut off a string after limit is reached.
	 *
	 * @param string $value
	 * @param number $length
	 * @param boolean $preserve
         * @param string $separator
	 * @return string
	 */
        function truncateFilter($value, $length, $preserve = false, $separator = '...')
        {
                if (mb_strlen($value, 'utf8') > $length)
                {
                        if ($preserve)
                        {
                                if (false === ($breakpoint = mb_strpos($value, ' ', $length, 'utf8')))
                                {
                                        return $value;
                                }

                                $length = $breakpoint;
                        }

                        return rtrim(mb_substr($value, 0, $length, 'utf8')) . $separator;
                }

                return $value;
        }
}
