<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model
{
	function login($email)
	{
		return $this->db->get_where('tb_admin', ['email' => $email]);
	}

	function update($data, $id)
	{
		return $this->db->update('users', $data, ['id' => $id]);
	}
}
	
	/* End of file AuthModel.php */
	/* Location: ./application/models/AuthModel.php */
