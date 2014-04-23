<?php

use Former, Theme, Config;

class userController extends BaseController {


	/**
	 * Theme instance.
	 *
	 * @var \Teepluss\Theme\Theme
	 */
	protected $theme 	= 'user';


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

	public function setupTheme() {

		if ( ! is_null($this->theme))
		{
			$this->theme = Config::get('lavalite.user.theme');
		}
		
		if ( ! is_null($this->layout))
		{
			$this->layout = Config::get('lavalite.user.layout');
		}
		
		$this->theme = Theme::uses($this->theme)->layout($this->layout); 
		
		Former::framework('TwitterBootstrap3');
		Former::config('fetch_errors', true);
	}

}