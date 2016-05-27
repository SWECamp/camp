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

		$this->load->view('index');
	}

	public function test($in)
	{
		$this->load->model('Model');
		$data['outModel']=$this->Model->getTest();
		$data['in'] = $in;
		$this->load->view('index2',$data);
	}

	public function test2()
	{
		$this->load->model('Model');
		$data['num'] = $_POST['num'];
		$this->load->view('index3',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */