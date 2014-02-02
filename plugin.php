<?php

/**
 * Phile Custom Post Preview Plugin
 *
 * Use it, if you want to get rendered html-text,
 * breaked at some point (aka improved page.excerpt) for blog.
 * See README.md for more info
 * 
 * @author Christian Evans <Christian@bitthinker.com>
 * @version 1.0
 * @link https://github.com/Jecomire/phileCustomPostPreview
 * @license http://opensource.org/licenses/gpl-3.0.html
 */

class PhileCustomPostPreview extends \Phile\Plugin\AbstractPlugin implements \Phile\EventObserverInterface
{

	public function __construct() {
		\Phile\Event::registerEvent('after_parse_content', $this);
	}

	public function on($eventKey, $data = null)
	{
		if ($eventKey == 'after_parse_content')
		{

		}

	}

}
