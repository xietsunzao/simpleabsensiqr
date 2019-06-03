<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GenBar extends CI_Controller {

			function __construct()
			{
					parent::__construct();
					if (!$this->ion_auth->logged_in()){
					redirect('auth');
				}
					$this->load->library('form_validation','ion_auth');
					 $this->load->helper('url');
					 $this->user = $this->ion_auth->user()->row();
			}
			public function index()

			{
				$user = $this->user;
				$data = array(
						'user' => $user,'users' 	=> $this->ion_auth->user()->row(),
				);
				$this->template->load('template','v_web',$data);
			}


		 public function showw()
			{
				$this->load->library('ciqrcode');
				$id=$this->input->post('id');
				$this->load->model('GenBar_model');
				$car = $this->GenBar_model->getShow_query($id);
				if($car->num_rows()>0){
					foreach($car->result() as $row){
						$shows = array('id_karyawan'=>$row->id_karyawan,
						                'nama_karyawan'=>$row->nama_karyawan,
													);
						$this->load->view('v_scan',$shows);
						}
					}else{

						$this->load->view('v_scan_kosong');
						}

			}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
