<?php 

class sistem_model extends CI_Model {

	

	function CekLogin($username_user,$password_user) {

		

		
		$ceklogin = $this->db->query("select a.*,b.* from tbl_user a join tbl_user_group b on a.user_group_id=b.id_user_group where a.username_user='$username_user' and a.password_user='$password_user' ");

		
		if (count($ceklogin->result())>0) {

			foreach ($ceklogin->result() as $value) {
				
				$sess_data['id_user']  			= $value->id_user;
				$sess_data['nama_user']  		= $value->nama_user;
				$sess_data['email_user']  		= $value->email_user;
				$sess_data['telp_user']  		= $value->telp_user;
				$sess_data['username_user']  	= $value->username_user;
				$sess_data['password_user']  	= $value->password_user;
				$sess_data['user_group_id']  	= $value->user_group_id;
				$sess_data['nama_user_group']  	= $value->nama_user_group;
				

				$this->session->set_userdata($sess_data);

			}
			redirect("sistem/home");
		}
		else {
			$this->session->set_flashdata("error","Username atau Password Anda Salah!");
			redirect('sistem');
		}

	}

	 function TentangKami() {
	 	return $this->db->query("select * from tbl_tentang_hotel");
	 }
}

 ?>