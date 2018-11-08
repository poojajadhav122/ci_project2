<?php

class Admin_model extends CI_Model{
	function add_user($data)
	{
		$result=$this->db->insert("users",$data);
		print_r($result);
		return $this->db->insert_id();
	}
	function user_activation_process($id)
	{
		$arr=array(
			"ustatus"=>1);
		$this->db->where("uid",$id);
		$this->db->update("users",$arr);
		return true;
	}

	function auth($email,$pass){
		echo $email;
		echo $pass;

		$ans = $this->db->select('upass')->get_where("users",array("uemail"=>$email))->result_array();
		echo "<pre>";
		print_r($ans);

		if(count($ans) > 0){
			$dbpass = $ans[0]['upass'];
			echo $dbpass;
			if($dbpass != $pass){
				return false;
			}
			else{
				return true;
			}
		}
		else{
			return false;
		}
	}

}
?>