<?php 

class User_model extends CI_Model {

public function __construct() {
				parent::__construct();
			}


public function register_member()
{
	$enc_pass = md5($this->input->post('password'));
	$registration = date('Y-m-d');
	

	$data = array(
			'username' => $this->input->post('username'),
			'password' => $enc_pass,
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'reg_date' => $registration,
		);

	$this->db->insert('user', $data);
	return TRUE;
	
}
public function isUsernameExist($username)
{
	$this->db->select('id');
	$this->db->where('username', $username);
	$query = $this->db->get('user');

	if($query->num_rows() > 0)
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}

}
public function check_username($username_check)
{
	$this->db->where('username', $username_check);

	$result = $this->db->get('user');

	if($result->num_rows == 1)
	{
		return FALSE;
	}
	else
	{
		return TRUE;
	}
}
public function login_user($username, $password)
{
	  $enc_pass = md5($password);
			  
			  
			  $this->db->where('username', $username);
			
			  $this->db->where('password', $enc_pass);
			  
			  $result = $this->db->get('user');
			  if($result->num_rows() === 1)
			  {
				  return $result->row(0)->id;
			  }
			  else
			  {
				  return FALSE;
			  }	
}

public function get_user($username)
{
	
	$this->db->where('username', $username);
	$query = $this->db->get('user');

	return $query->row();
}

public function addlog($data)
{
	$this->db->insert('daily_log',$data);

	return TRUE;
}

public function getlog()
{
	
	$query = $this->db->select('*')->from('daily_log')->get();
	return $query->result();
}

}

?>