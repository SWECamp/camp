<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	public function getAdmin($username,$password)
	{
		$this->load->database();
		$sql = "SELECT * FROM `admin` WHERE Username='".$username."' and Password='".$password."';";
		//echo $sql;
		$tt = $this->db->query($sql);
		//return $query->result(); เอาไปเฉพาะรีซอล
		return $tt; //ไปทั้งก้อน
		//return $q;
	}

	public function getUser($username,$password)
	{
		$this->load->database();
		$sql = "SELECT * FROM `account` WHERE email='".$username."' and password='".$password."';";
		
		$tt = $this->db->query($sql);
		//return $query->result(); เอาไปเฉพาะรีซอล
		return $tt; //ไปทั้งก้อน
		//return $q;
	}

	public function setAccout($s)
	{
		$this->load->database();
		$sql = $s;
		
		$tt = $this->db->query($sql);
		//return $query->result(); เอาไปเฉพาะรีซอล
		//return $tt; //ไปทั้งก้อน
		//return $q;
	}

	public function getAccout()
	{
		$this->load->database();
		$sql = "SELECT * FROM `account` WHERE `artifact` = 1";
		
		$tt = $this->db->query($sql);
		//return $query->result(); เอาไปเฉพาะรีซอล
		return $tt; //ไปทั้งก้อน
		//return $q;
	}
	
}
