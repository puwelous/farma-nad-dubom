<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chov extends CI_Controller {

	public function daniel()
	{
		$this->load->view('chov/chov_daniel');
	}
        
	public function muflon()
	{
		$this->load->view('chov/chov_muflon');
	}
        
	public function highland()
	{
		$this->load->view('chov/chov_highland');
	}        
}

/* End of file chov.php */
/* Location: ./application/controllers/chov.php */