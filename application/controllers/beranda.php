<?PHP
	class Beranda extends CI_Controller
	{
		//Constructor
		
		public function __construct()
		{
			parent::__construct();
			
			//model
				}
		
		//Index
		
		public function index()
		{
			if($this->session->userdata('username') == '')
			{
				$this->load->view('beranda_v');
			}
			else
			{
				$this->load->view('beranda_admin_v');
			}
		}
		

	}
?>