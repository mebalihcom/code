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
		$this->load->library('grocery_CRUD');
    }

    public function index(){
		$this->data['content'] = 'admin/dashboard';
        $this->load->view($this->template, $this->data);
    }

	##### Terminal Input
	public function _terminal_input($output = null,$content_name = null)
	{
		$output->content_name = $content_name;
		//$output->pengguna = $this->datauser;
		$this->load->view('admin/terminal_form.php',$output);
	}

	function ticket_cat(){
		$crud=new grocery_CRUD();
		$crud->set_table('ticket_category');
		$crud->columns('category_name','desc');
		$crud->display_as('category_name','Name');
		$crud->display_as('desc','Description');
		$crud->set_subject('Ticket Category');
		$crud->set_theme('datatables');
		$output = $crud->render();
		$this->_terminal_input($output,'Ticket Category');
	}

	function payment_cat(){
		$crud = new grocery_CRUD();
		$crud->set_table('payment_category');
		$crud->columns('payment_cat_name','desc');
		$crud->display_as('payment_cat_name','Category Name'); // bukan nama tabel
		$crud->display_as('desc','Description');
		$crud->set_subject('Payment Category'); 
		$crud->set_theme('datatables');
		$output=$crud->render();
		$this->_terminal_input($output,'Payment Category');
	}

	function data_bank(){
		$crud= new grocery_CRUD();
		$crud->set_table('bank');
		$crud->columns('bank_code','bank_name');
		$crud->display_as('bank_code', 'Bank Code');
		$crud->display_as('bank_name','Bank Name');
		$crud->set_subject('Data Bank');
		$crud->set_theme('datatables');
		$output=$crud->render();
		$this->_terminal_input($output,'Data Bank');
	}

	function contact_cat(){
		$crud= new grocery_CRUD();
		$crud->set_table('contact_cat');
		$crud->columns('category_name');
		$crud->display_as('category_name','Category Name');
		$crud->set_subject('Contact Category');
		$crud->set_theme('datatables');
		$output = $crud->render();
		$this->_terminal_input($output,'Contact Category');
	}

	function page_cat(){
		$crud= new grocery_CRUD();
		$crud->set_table('page_category');
		$crud->columns('page_cat_name','desc');
		$crud->display_as('kategori page','deskripsi');
		$crud->set_subject('Page Category');
		$crud->set_theme('datatables');
		$output = $crud->render();
		$this->_terminal_input($output,'Page Category');
	}

	function page_list(){
		$crud= new grocery_CRUD();
		$crud->set_table('page');
		$crud->columns('id_page_category','date','slug','id_users','title','body','status');
		$crud->display_as('tes','date','slug','id_users','title','body','status');
		$crud->set_relation('id_page_category','page_category','page_cat_name');
		$crud->set_subject('Page List');
		$crud->set_theme('datatables');
		$output = $crud->render();
		$this->_terminal_input($output,'Page Category');
	}
}
