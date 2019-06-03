<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Genbar_Model extends CI_model {

	public function getShow($id_karyawan)
	{
		$this->db->where('id_karyawan',$id_karyawan);
		$hasil=$this->db->get('karyawan');
		return $hasil;

	}


	public function getshow_query($id_karyawan)

	{
  	return $this->db->where('id_karyawan',$id_karyawan)->get('karyawan');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
