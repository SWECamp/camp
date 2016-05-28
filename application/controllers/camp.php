<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class camp extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');

		$this->load->view('home/head');
		$this->load->view('home/header');
		$this->load->view('home/banner');
		$this->load->view('home/content');
		//$this->load->view('home/service');
		//$this->load->view('home/map');
		$this->load->view('home/foot');
	}

	public function test($in)
	{
		$this->load->model('Model');
		$data['outModel']=$this->Model->getTest();
		$data['in'] = $in;
		$this->load->view('index2',$data);
	}

	public function login()
	{
		$this->load->helper('url');

		$this->load->view('home/head');
		$this->load->view('home/header');
		$this->load->view('home/banner');
		$this->load->view('login/content');
		//$this->load->view('home/service');
		//$this->load->view('home/map');
		$this->load->view('home/foot');
	}

	public function register()
	{
		$this->load->helper('url');

		$this->load->view('home/head');
		$this->load->view('home/header');
		$this->load->view('home/banner');
		$this->load->view('register/content');
		$this->load->view('home/foot');
	}

	public function menuDetail()
	{
		$this->load->helper('url');

		$this->load->view('home/head');
		$this->load->view('home/header');
		$this->load->view('home/banner');
		$this->load->view('detial/content');
		$this->load->view('home/foot');
	}

	public function menuPlace()
	{
		$this->load->helper('url');

		$this->load->view('home/head');
		$this->load->view('home/header');
		$this->load->view('home/banner');
		$this->load->view('home/map');
		$this->load->view('home/foot');
	}
	public function menuDate()
	{
		$this->load->helper('url');

		$this->load->view('home/head');
		$this->load->view('home/header');
		$this->load->view('home/banner');
		$this->load->view('date/content');
		$this->load->view('home/foot');
	}
	public function menuContact()
	{
		$this->load->helper('url');

		$this->load->view('home/head');
		$this->load->view('home/header');
		$this->load->view('home/banner');
		$this->load->view('contact/content');
		$this->load->view('home/foot');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */