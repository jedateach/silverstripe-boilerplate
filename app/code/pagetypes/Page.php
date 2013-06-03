<?php

/**
 * @package {@packagename}
 * @subpackage pagetypes
 */
class Page extends SiteTree {
	
	private static $db = array(

	);

	private static $has_one = array(

	);
}

/**
 * @package {@packagename}
 * @subpackage controller
 */
class Page_Controller extends ContentController {
	
	private static $allowed_actions = array(

	);

	public function init() {
		parent::init();
	}
}