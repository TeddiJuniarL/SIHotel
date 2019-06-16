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
	
	}

 ?>