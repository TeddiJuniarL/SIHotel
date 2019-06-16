<?php 

class sistem extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('sistem_model');
	}

	public function index () {

			$data['tentang_kami'] = $this->sistem_model->TentangKami();
			$this->load->view('sistem/login',$data);

	}

	public function login() {
		$this->form_validation->set_rules('username_user','Username','required');
		$this->form_validation->set_rules('password_user','Password','required');

		if ($this->form_validation->run()==FALSE) {

		$data['tentang_kami'] = $this->sistem_model->TentangKami();
			$this->load->view('sistem/login',$data);

		}
		else {


			$username_user = $this->input->post('username_user');
			$password_user = md5($this->input->post('password_user'));

			$this->sistem_model->CekLogin($username_user,$password_user);

			}
		}

	public function logout() {
		$this->session->sess_destroy();
		redirect("sistem");
	} 
	
	public function home() {

		if($this->session->userdata("id_user")!=="") {

			$data['new_reservasi'] 	= $this->sistem_model->NewReservasiBaru();
			$data['kamar']			= $this->sistem_model->KamarKosong();
			$this->template_system->load('template_system','sistem/data/index',$data);
		}
		else{
			redirect('sistem');

		}
	}
	
	//Awal Kelas Kamar

	public function kelas_kamar() {

		if($this->session->userdata("id_user")!=="" ) {
			$data['kelas_kamar']	= $this->sistem_model->KelasKamar();
			$this->template_system->load('template_system','sistem/data/kelas_kamar/index',$data);
		}
		else{
			redirect('sistem');

		}
	} 

	public function kelas_kamar_tambah () {

		if($this->session->userdata("id_user")!=="" ) {
			
			$this->template_system->load('template_system','sistem/data/kelas_kamar/add');
		}
		else{
			redirect('sistem');

		}

	}

	public function kelas_kamar_simpan () {

		if($this->session->userdata("id_user")!=="" ) {

			$this->form_validation->set_rules('nama_kelas_kamar', 'Category Gallery', 'required');

			if ($this->form_validation->run() == FALSE)
			{
				$this->template_system->load('template_system','sistem/data/kelas_kamar/add');

			}
			else {

				$in['nama_kelas_kamar'] = $this->input->post('nama_kelas_kamar');
								
				$this->db->insert("tbl_kelas_kamar",$in);

				$this->session->set_flashdata('berhasil','ok');
				redirect("sistem/kelas_kamar");	
			}
			
			
		}
		else{
			redirect('sistem');

		}

	}

	public function kelas_kamar_delete() {

		if($this->session->userdata("id_user")!=="" ) {

			$id = $this->uri->segment(3);
			$this->sistem_model->DeleteKelasKamar($id);

			$this->session->set_flashdata('hapus','ok');
			redirect("sistem/kelas_kamar");

		}
		else{
			redirect('sistem');

		}

	}

	public function kelas_kamar_edit() {

		if($this->session->userdata("id_user")!=="" ) {

			$id = $this->uri->segment(3);

			$query = $this->sistem_model->EditKelasKamar($id);

			foreach ($query->result_array() as $value) {
				$data['id_kelas_kamar'] 	=  $value['id_kelas_kamar'];
				$data['nama_kelas_kamar'] =  $value['nama_kelas_kamar'];
				
			}

			$this->template_system->load('template_system','sistem/data/kelas_kamar/edit',$data);
		


		}
		else{
			redirect('sistem');

		}

	}


	public function kelas_kamar_update() {

		if($this->session->userdata("id_user")!=="" ) {

			$id['id_kelas_kamar'] 	=  $this->input->post("id_kelas_kamar");
			$up['nama_kelas_kamar'] 	=  $this->input->post("nama_kelas_kamar");

			$this->db->update("tbl_kelas_kamar",$up,$id);

			$this->session->set_flashdata('update','ok');
			redirect("sistem/kelas_kamar");

		}
		else{
			redirect('sistem');

		}

	}


	//Akhir Kelas Kamar

	//Awal kamar 
	public function kamar () {

		if($this->session->userdata("id_user")!=="" ) {

			$data['kamar'] =  $this->sistem_model->Kamar();

			$this->template_system->load('template_system','sistem/data/kamar/index',$data);

		}
		else{
			redirect('sistem');

		}

	}

	public function kamar_tambah() {

		if($this->session->userdata("id_user")!=="" ) {

			
			$data['kelas_kamar']	= $this->sistem_model->KelasKamar();
			$this->template_system->load('template_system','sistem/data/kamar/add',$data);

		}
		else{
			redirect('sistem');

		}

	}

	public function kamar_simpan() {

		if($this->session->userdata("id_user")!=="" ) {

			
			$this->form_validation->set_rules('kelas_kamar_id','Kelas Kamar','required');
			$this->form_validation->set_rules('nomer_kamar','Nomer Kamar','required');
			$this->form_validation->set_rules('harga_kamar','Harga Kamar','required');
			$this->form_validation->set_rules('fasilitas_kamar','Fasilitas Kamar','required');
			
		

			if ($this->form_validation->run()==FALSE) {

				
				$data['kelas_kamar']	= $this->sistem_model->KelasKamar();
				$this->template_system->load('template_system','sistem/data/kamar/add',$data);

			}
			else {

					$in['nomer_kamar'] 		= $this->input->post('nomer_kamar');
					$in['harga_kamar'] 		= $this->input->post('harga_kamar');
					$in['fasilitas_kamar'] 	= $this->input->post('fasilitas_kamar');
					$in['kelas_kamar_id'] 	= $this->input->post('kelas_kamar_id');
									
							
					$this->db->insert("tbl_kamar",$in);
							
					$this->session->set_flashdata('berhasil','OK');
					redirect("sistem/kamar");
							
			}

		}
		else{
			redirect('sistem');

		}

	}

	public function kamar_edit() {

		if($this->session->userdata("id_user")!=="" ) {

			$id = $this->uri->segment(3);

			$query =  $this->sistem_model->EditKamar($id);

			foreach ($query->result_array() as $value) {
				$data['id_kamar'] 			=  $value['id_kamar'];
				$data['nomer_kamar'] 		=  $value['nomer_kamar'];
				$data['harga_kamar'] 		=  $value['harga_kamar'];
				$data['fasilitas_kamar'] 	=  $value['fasilitas_kamar'];
				$data['kelas_kamar_id'] 	=  $value['kelas_kamar_id'];
				
			}

			$data['kelas_kamar']	= $this->sistem_model->KelasKamar();
			$this->template_system->load('template_system','sistem/data/kamar/edit',$data);

		}
		else{
			redirect('sistem');

		}

	}

	public function kamar_update() {

		if($this->session->userdata("id_user")!=="" ) {

			$id['id_kamar'] = $this->input->post("id_kamar");

		
			$in_data['nomer_kamar'] 	= $this->input->post('nomer_kamar');
			$in_data['harga_kamar'] 	= $this->input->post('harga_kamar');
			$in_data['fasilitas_kamar'] 	= $this->input->post('fasilitas_kamar');
			$in_data['kelas_kamar_id'] 	= $this->input->post('kelas_kamar_id');
						
			$this->db->update("tbl_kamar",$in_data,$id);
				
						
			$this->session->set_flashdata('update','OK');
			redirect("sistem/kamar");
						
					
		}
		else{
			redirect('sistem');

		}

	}

	public function kamar_delete() {

		if($this->session->userdata("id_user")!=="" ) {

			$id = $this->uri->segment(3);
			$this->sistem_model->DeleteKamar($id);

			$this->session->set_flashdata('hapus','ok');
			redirect("sistem/kamar");


		}
		else{
			redirect('sistem');

		}

	}

	public function kamar_gambar () {

		if($this->session->userdata("id_user")!=="" ) {

			$id = $this->uri->segment(3);

			$data['kamar_gambar'] = $this->sistem_model->KamarGambar($id);

			$query =  $this->sistem_model->KamarId($id);

			foreach ($query->result_array() as $value) {
				$data['id_kamar'] 			=  $value['id_kamar'];
				$data['nomer_kamar'] 		=  $value['nomer_kamar'];
				$data['harga_kamar'] 		=  $value['harga_kamar'];
				$data['fasilitas_kamar'] 	=  $value['fasilitas_kamar'];
				$data['kelas_kamar_id'] 	=  $value['kelas_kamar_id'];
				$data['nama_kelas_kamar'] 	=  $value['nama_kelas_kamar'];
				
			}

			$this->template_system->load('template_system','sistem/data/kamar_gambar/index',$data);


		}
		else{
			redirect('sistem');

		}

	}

	public function kamar_gambar_simpan () {

		if($this->session->userdata("id_user")!=="" ) {


					$config['upload_path'] = './images/kamar_gambar/';
					$config['allowed_types']= 'gif|jpg|png|jpeg';
					$config['encrypt_name']	= TRUE;
					$config['remove_spaces']	= TRUE;	
					$config['max_size']     = '3000';
					$config['max_width']  	= '*';
					$config['max_height']  	= '*';
					
			 
					$this->load->library('upload', $config);
	 				if ($this->upload->do_upload("userfile")) {
					
						$data	 	= $this->upload->data();
			 
						
						$source             = "./images/kamar_gambar/".$data['file_name'] ;
						
						chmod($source, 0777) ;
						
						
						$in['nama_kamar_gambar'] 	= $data['file_name'];
						$in['kamar_id'] 			= $this->input->post('kamar_id');
						
						
						
						$this->db->insert("tbl_kamar_gambar",$in);
						
						$this->session->set_flashdata('berhasil','OK');
						
						$id = $this->input->post('kamar_id');
						redirect('sistem/kamar_gambar/'.$id);

						
					}

					else 
					{
						$id = $this->input->post('kamar_id');

						$this->session->set_flashdata('gagal','OK');

						redirect('sistem/kamar_gambar/'.$id);
					}
		}
		else{
			redirect('sistem');

		}

	}

	public function kamar_gambar_delete () {

		if($this->session->userdata("id_user")!=="" ) {

			$id = $this->uri->segment(3);
			$id2 = $this->uri->segment(4);
			$this->sistem_model->DeleteKamarGambar($id);

			$this->session->set_flashdata('hapus','ok');
			redirect('sistem/kamar_gambar/'.$id2);


		}
		else{
			redirect('sistem');

		}

	}
	//Akhir Kamar
	}

 ?>