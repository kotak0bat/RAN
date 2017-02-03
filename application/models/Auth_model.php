<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {

	private $table = "UserInfo";
	private $_data = array();

	public function validate()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$pass2 = strtoupper(substr(md5($password),0,19));

		$this->db->where("UserName", $username);
		$query = $this->db->get($this->table);

		if ($query->num_rows()) 
		{
			// found row by username	
			$row = $query->row_array();

			// now check for the password
			
			if ($row['UserPass'] == $pass2)
			// if ($row['password'] == sha1($pass2)) 
				// $pass2 = strtoupper(substr(md5($password),0,19));
			{
				// we not need password to store in session
				$row['UserPass'];
				// unset($row['UserPass']);
				$this->_data = $row;
				return ERR_NONE;
			}

			// password not match
			return ('ERR_INVALID_PASSWORD');
		}
		else {
			// not found
			return ('ERR_INVALID_USERNAME');
		}
	}

	public function get_data()
	{
		return $this->_data;
	}
	

}