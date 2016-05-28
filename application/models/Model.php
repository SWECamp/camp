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
	public function getUserdatial($id)
	{
		$this->load->database();
		$sql = "SELECT * FROM `account` WHERE accountID=".$id.";";
		$q = $this->db->query($sql);
		return $q ;
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

	public function setReArtifact($id)
	{
		$this->load->database();
		$sql = "UPDATE `swecamp`.`account` SET `artifact` = '0' WHERE `account`.`accountID` = ".$id.";";
		
		$tt = $this->db->query($sql);
		//return $query->result(); เอาไปเฉพาะรีซอล
		//return $tt; //ไปทั้งก้อน
		//return $q;
	}

	public function getreUser($id)
	{
		$this->load->database();
		$sql = "SELECT * FROM `account` WHERE `accountID` = ".$id;
		
		$tt = $this->db->query($sql);
		//return $query->result(); เอาไปเฉพาะรีซอล
		return $tt; //ไปทั้งก้อน
		//return $q;
	}
	public function setReUser($s){
		$this->load->database();
		$this->db->query($s);
	}
	
}
