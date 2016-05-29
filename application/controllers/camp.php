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
		//$this->load->view('home/banner');
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
		//$this->load->view('home/banner');
		$this->load->view('register/content');
		$this->load->view('home/foot');
	}

	public function menuDetail()
	{
		$this->load->helper('url');

		$this->load->view('home/head');
		$this->load->view('home/header');
		//$this->load->view('home/banner');
		$this->load->view('detial/content');
		$this->load->view('home/foot');
	}

	public function menuPlace()
	{
		$this->load->helper('url');

		$this->load->view('home/head');
		$this->load->view('home/header');
		//$this->load->view('home/banner');
		$this->load->view('home/map');
		$this->load->view('home/foot');
	}
	public function menuDate()
	{
		$this->load->helper('url');

		$this->load->view('home/head');
		$this->load->view('home/header');
		//$this->load->view('home/banner');
		$this->load->view('date/content');
		$this->load->view('home/foot');
	}
	public function menuContact()
	{
		$this->load->helper('url');

		$this->load->view('home/head');
		$this->load->view('home/header');
		//$this->load->view('home/banner');
		$this->load->view('contact/content');
		$this->load->view('home/foot');
	}
	public function submit()
	{
		$this->load->helper('url');
		($_POST['username'] != "")?$username = $_POST['username']:$username = "";
		($_POST['password'] != "")?$password = $_POST['password']:$password = "";
		//$this->load->view('home/head');
		//$this->load->view('home/header');
		////$this->load->view('home/banner');
		$this->load->model('Model');

		$query=$this->Model->getAdmin($username,$password);
		foreach($query->result() as $row) {
			redirect('camp/admin', 'refresh');
		 }
		$query=$this->Model->getUser($username,$password);
		foreach($query->result() as $row) {
			$data['result'] =$this->Model->getUserdatial($row->accountID);
			redirect('camp/user/'.$row->accountID, 'refresh');
		 }

		redirect('camp/login', 'refresh');
		//$this->load->view('home/foot');
	}

	public function user($id)
	{	
		$this->load->helper('url');
		$this->load->model('Model');
		$query['data'] = $this->Model->getreUser($id);

		$this->load->view('home/head');
		$this->load->view('user/header');
		//$this->load->view('home/banner');
		$this->load->view('user/content',$query);
		$this->load->view('home/foot');
	}

	public function admin()
	{
		$this->load->helper('url');

		$this->load->model('Model');
		$query['data'] = $this->Model->getAccout();

		$this->load->view('home/head');
		$this->load->view('user/header');
		//$this->load->view('home/banner');
		$this->load->view('admin/content',$query);
		$this->load->view('home/foot');

	}
	public function submitAdmin()
	{
		$this->load->helper('url');

		$this->load->model('Model');
		$query['data'] = $this->Model->getAccout();

		$this->load->view('home/head');
		$this->load->view('home/header');
		//$this->load->view('home/banner');
		$this->load->view('admin/content',$query);
		$this->load->view('home/foot');

	}
	public function submitRegister()
	{
		$this->load->helper('url');
		$title = $_POST['title'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname']; 
		$address = $_POST['address'];
		$province = $_POST['province'];
		$postal = $_POST['postal'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$department = $_POST['department'];
		$food = $_POST['food'];
		$password = $_POST['password'];
		$artifect = 1;
		$join = $_POST['join'];
		(isset($_POST['tour1']))?$tour1 = $_POST['tour1']:$tour1 = 0;
		(isset($_POST['tour2']))?$tour2 = $_POST['tour2']:$tour2 = 0;
		(isset($_POST['tour3']))?$tour3 = $_POST['tour3']:$tour3 = 0;
		if($tour1==""&&$tour2==""&&$tour3==""){
			$tour1 = 0;
			$tour2 = 0;
			$tour3 = 0;
		}

		$sql = "INSERT INTO `account`(`accountID`, `title`, `firstname`, `lastname`, `address`, `province`, `postalcode`, `phoneno`, `email`, `department`, `food`, `password`, `artifact`, `join`, `tour1`, `tour2`, `tour3`) VALUES (null,'".$title."','".$firstname."','".$lastname."','".$address."','".$province."','".$postal."','".$phone."','".$email."','".$department."','".$food."','".$password."','".$artifect."','".$join."','".$tour1."','".$tour2."','".$tour3."')";

		$this->load->model('Model');
		//echo "บันทึกสำเร็จ";
		$this->Model->setAccout($sql);

		$query=$this->Model->getlastid();
		//foreach ($query->result() as $value) {
			redirect('camp/success/', 'refresh');
		//}
		//redirect('camp/user', 'refresh');
	}

	public function best()
	{
		$this->load->helper('url');

		$this->load->view('home/head');
		$this->load->view('home/header');
		//$this->load->view('home/banner');
		$this->load->view('best/content');
		$this->load->view('home/foot');

	}

	public function reArtifact($id)
	{
		$this->load->helper('url');

		$this->load->model('Model');

		$query=$this->Model->setReArtifact($id);
		redirect('camp/admin', 'refresh');
	}

	public function reUser($id)
	{

		$this->load->model('Model');
		$this->load->helper('url');
		$title = $_POST['title'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname']; 
		$address = $_POST['address'];
		$province = $_POST['province'];
		$postal = $_POST['postal'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$department = $_POST['department'];
		$food = $_POST['food'];
		$password = $_POST['password'];
		$artifect = 1;
		//$join = $_POST['join'];
		(isset($_POST['join']))?$join = $_POST['join']:$join = 1;
		(isset($_POST['tour1']))?$tour1 = $_POST['tour1']:$tour1 = 0;
		(isset($_POST['tour2']))?$tour2 = $_POST['tour2']:$tour2 = 0;
		(isset($_POST['tour3']))?$tour3 = $_POST['tour3']:$tour3 = 0;
		if($tour1==""&&$tour2==""&&$tour3==""){
			$tour1 = 0;
			$tour2 = 0;
			$tour3 = 0;
		}
		$sql = "UPDATE `account` SET `title`='".$title."',`firstname`='".$firstname."',`lastname`='".$lastname."',`address`='".$address."',`province`='".$province."',`postalcode`='".$postal."',`phoneno`='".$phone."',`email`='".$email."',`department`='".$department."',`food`='".$food."',`password`='".$password."',`join`='".$join."',`tour1`='".$tour1."',`tour2`='".$tour2."',`tour3`='".$tour3."' WHERE `accountID` = ".$id;
		$query=$this->Model->setReUser($sql);
		//echo $sql;
		redirect('camp/user/'.$id, 'refresh');
	}

	public function testMail(){
		$strTo = "pk.prateep@gmail.com";
		$strSubject = "Test Send Email";
		$strHeader = "From: webmaster@thaicreate.com";
		$strMessage = "My Body & My Description";
		$flgSend = mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //
		if($flgSend)
		{
			echo "Email Sending.";
		}
		else
		{
			echo "Email Can Not Send.";
		}
	}

	public function tourac()
	{
		$this->load->model('Model');
		$this->load->helper('url');

		$this->load->view('home/head');
		$this->load->view('home/header');
		//$this->load->view('home/banner');
		$this->load->view('tour/content');
		$this->load->view('home/foot');
	}

	public function location()
	{
		$this->load->helper('url');

		$this->load->view('home/head');
		$this->load->view('home/header');
		//$this->load->view('home/banner');
		$this->load->view('location/content');
		$this->load->view('home/foot');

	}

	public function search()
	{
		$this->load->helper('url');

			$sql = " where firstname = ''";
		if(empty($_POST['firstname'])&&empty($_POST['lastname'])&&empty($_POST['money'])){
			$sql = " where 1";
		}
		if(empty($_POST['firstname'])&&empty($_POST['lastname'])){
			$sql = " where 1";
		}
		$this->load->model('Model');
		if(!empty($_POST['firstname'])){
			$sql .= " or firstname like('%".$_POST['firstname']."%')";
		}
		if(!empty($_POST['lastname'])){
			$sql .= " or lastname like('%".$_POST['lastname']."%')";
		}

		if(empty($_POST['money'])){
			$sql .= "";
		}else{
			if($_POST['money'] == '1'){
				$sql .= " and artifact = 1";
			}elseif($_POST['money'] == '2'){
				$sql .= " and artifact = 0";
			}else{
				$sql .= " and (artifact = 1 or artifact = 0) ";
			}
		}
		(isset($_POST['firstname']))?$query['firstname']=$_POST['firstname']:$query['firstname']="";
		(isset($_POST['lastname']))?$query['lastname']=$_POST['lastname']:$query['lastname']="";
		(isset($_POST['money']))?$query['money']=$_POST['money']:$query['money']="";
		$sql .= " order by `firstname` asc;";
		//echo $sql;
		$query['data']=$this->Model->getSearch($sql);

		$this->load->view('home/head');
		$this->load->view('home/header');
		//$this->load->view('home/banner');
		$this->load->view('alluser/content',$query);
		$this->load->view('home/foot');

	}
	public function success(){
		$this->load->helper('url');

		$this->load->view('home/head');
		$this->load->view('home/header');
		//$this->load->view('home/banner');
		$this->load->view('success/content');
		$this->load->view('home/foot');

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */