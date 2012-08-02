<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		$this->username = ($this->ion_auth->logged_in()) ? $this->ion_auth->user() : '';
	}

	public function index()
	{

		/*
		 *set up title and keywords (if not the default in custom.php config file will be set)
		 */
		$this->title = "CI Template 2";
		
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		}

		$this->_render('pages/home');
	}

}
