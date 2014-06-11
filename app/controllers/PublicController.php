<?php

use \Former, \Theme, \Config;

class PublicController extends BaseController {


	/**
	 * Theme instance.
	 *
	 * @var \Teepluss\Theme\Theme
	 */
	protected $theme;


	/**
	 * Layout instance.
	 *
	 * @var \Teepluss\Layout\Layout
	 */
	protected $layout 	= 'default';

	/**
	 * Model instance.
	 *
	 * @var \Menu\Model\Menu
	 */
	protected $model;

	public function setupTheme($theme = 'public') {

		$this->theme = Theme::uses($theme)->layout($this->layout); 
		
		Former::framework('TwitterBootstrap3');
		Former::config('fetch_errors', true);
	}

}