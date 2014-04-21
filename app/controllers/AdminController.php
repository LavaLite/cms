<?php
use \Former;
use \Teepluss;
use \Lang;

class AdminController extends BaseController {


	/**
	 * Theme instance.
	 *
	 * @var \Teepluss\Theme\Theme
	 */
	protected $theme;


	/**
	 * Theme to be used.
	 *
	 * @var string
	 */
	protected $layout 	= 'default';

	/**
	 * Model instance.
	 *
	 * @var \Menu\Model\Menu
	 */
	protected $model;

	public function setupTheme($theme = 'admin') {

		$this->theme = Theme::uses($theme)->layout($this->layout); 
		
		Former::framework('TwitterBootstrap3');
		Former::config('fetch_errors', true);
	}

}