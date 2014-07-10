<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Foto extends CI_Controller {

	public function daniel()
	{
		$this->load->view('foto/foto_daniel');
	}
        
	public function muflon()
	{
		$this->load->view('foto/foto_muflon');
	}
        
	public function highland()
	{
		$this->load->view('foto/foto_highland');
	} 
        
	public function okolie()
	{
		$this->load->view('foto/foto_okolie');
	}        
}

/* End of file foto.php */
/* Location: ./application/controllers/foto.php */