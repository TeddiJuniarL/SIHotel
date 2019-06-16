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
	//Awal Kelas Kamar
	 function KelasKamar(){
	 	return $this->db->query("select * from tbl_kelas_kamar order by id_kelas_kamar desc");
	 }


	 function DeleteKelasKamar($id) {
	 	return $this->db->query("delete from tbl_kelas_kamar where id_kelas_kamar='$id' ");
	 }

	 function EditKelasKamar($id) {
	 	return $this->db->query("select * from tbl_kelas_kamar where id_kelas_kamar='$id' ");
	 }

	 //Akhir Kelas Kamar

	  //Awal Kelas Kamar
	 function Kamar(){
	 	return $this->db->query("select a.*,b.* from tbl_kamar a join tbl_kelas_kamar b on a.kelas_kamar_id=b.id_kelas_kamar order by a.id_kamar desc");
	 }


	 function DeleteKamar($id) {
	 	return $this->db->query("delete from tbl_kamar where id_kamar='$id' ");
	 }

	 function EditKamar($id) {
	 	return $this->db->query("select * from tbl_kamar where id_kamar='$id' ");
	 }

	 function KamarId($id) {
	 	return $this->db->query("select a.*,b.* from tbl_kamar a join tbl_kelas_kamar b on a.kelas_kamar_id=b.id_kelas_kamar where a.id_kamar='$id'");
	 }

	 function KamarGambar ($id) {

	 	return $this->db->query("select * from tbl_kamar_gambar where kamar_id='$id' ");

	 }

	 function DeleteKamarGambar($id) {
	 	return $this->db->query("delete from tbl_kamar_gambar where id_kamar_gambar='$id' ");

	 }

	//Akhir Kelas Kamar

	 //Awal User Group
	 function UserGroup(){
	 	return $this->db->query("select * from tbl_user_group order by id_user_group desc");
	 }


	 function DeleteUserGroup($id) {
	 	return $this->db->query("delete from tbl_user_group where id_user_group='$id' ");
	 }

	 function EditUserGroup($id) {
	 	return $this->db->query("select * from tbl_user_group where id_user_group='$id' ");
	 }

	//Akhir User Group

	//Awal User
	 function User() {
	 	return $this->db->query("select a.*,b.* from tbl_user a
	 		join tbl_user_group b on a.user_group_id=b.id_user_group
	 		order by a.id_user desc");
	 }

	 function EditUser($id) {
	 	return $this->db->query("select * from tbl_user where id_user='$id' ");
	 }

	  function DeleteUser($id) {
	 	return $this->db->query("delete from tbl_user where id_user='$id' ");
	 }

	//Akhir User
	 function TentangKami() {
	 	return $this->db->query("select * from tbl_tentang_hotel");
	 }

	  function NewReservasiBaru() {

	 	return $this->db->query("select a.*,b.* from tbl_reservasi a 
	 	join tbl_kamar b on a.kamar_id=b.id_kamar 
	 	where a.status_reservasi='0' 
	 	order by a.id_reservasi desc");

	 }

	 function KamarKosong () {
	 	return $this->db->query("select a.*,b.* from tbl_kamar a 
	 		join tbl_kelas_kamar b on a.kelas_kamar_id=b.id_kelas_kamar 
	 		where status_kamar='0' 
	 		order by a.id_kamar,a.kelas_kamar_id desc");
	 }

	 function Reservasi() {

	 	return $this->db->query("select a.*,b.* from tbl_reservasi a 
	 	join tbl_kamar b on a.kamar_id=b.id_kamar order by a.id_reservasi desc");

	 }

	  function NewReservasi() {

	 	return $this->db->query("select a.*,b.* from tbl_reservasi a 
	 	join tbl_kamar b on a.kamar_id=b.id_kamar 
	 	where a.status_reservasi='0' or a.status_reservasi='1' or a.status_reservasi='2'
	 	order by a.id_reservasi desc");

	 }

	  function ReservasiId($id) {
	 	return $this->db->query("select a.*,b.*,TIMESTAMPDIFF(DAY, a.tgl_reservasi_masuk, a.tgl_reservasi_keluar) as waktu from tbl_reservasi a 
	 	join tbl_kamar b on a.kamar_id=b.id_kamar where id_reservasi='$id' ");

	 }

	  function Saran() {
	 	return $this->db->query("select * from tbl_saran order by id_saran desc");
	 }

	 	 //Awal Ganti Password
	 function GetUserId($id_user) {
	 	return $this->db->query("select * from tbl_user where id_user='$id_user'");
	 }

	 function UpdateUser($id_user,$password) {
	 	return $this->db->query("update tbl_user set password_user='$password' where id_user='$id_user' ");
	 }
	 //Akhir Ganti Password
}

 ?>