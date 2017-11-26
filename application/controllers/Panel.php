<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Panel extends CI_Controller {

		private $template = 'admin/template';
    public function __construct(){
      parent::__construct();
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->helper(array('url','language'));
			if (!$this->ion_auth->logged_in())
			{
				// redirect them to the login page
				redirect('auth/login', 'refresh');
			}
			elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
			{
				// redirect them to the home page because they must be an administrator to view this
				return show_error('You must be an administrator to view this page.');
			}
    }

    public function index(){
			$this->data['content'] = 'admin/dashboard';
        $this->load->view($this->template, $this->data);
    }
  }
