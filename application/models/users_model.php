<?php
class Users_model extends CI_Model  {
	function index()
	{
		//
	}

	function add_user($user)
	{
		$this->load->database();
		$this->db->trans_start();
		$this->db->insert('users', $user);
		$id = $this->db->insert_id();
		$this->db->trans_complete();
		$this->db->close();
		return $id-1;
	}
	// function get_user()
	// {
	// 	return 1;
	// }
	function username_check()
	{
		return 1;
	}
	function get_user()
	{
		return array(
			    // 'user_email' => 'demo@demo.com',
			    'username' => 'test_',
			    'password' => 'demo_',
			    // 'user_join_date' => time(),
				// 'user_group'	=> 1,
				'id'	=> 1
			);
	}

}