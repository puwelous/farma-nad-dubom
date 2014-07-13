<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Chov extends CI_Controller {

    public function daniel() {
        $this->load->view('templates/header');
        $this->load->view('chov/chov_daniel');
        $this->load->view('templates/footer');
    }

    public function muflon() {
        $this->load->view('templates/header');
        $this->load->view('chov/chov_muflon');
        $this->load->view('templates/footer');        
    }

    public function highland() {
        $this->load->view('templates/header');
        $this->load->view('chov/chov_highland');
        $this->load->view('templates/footer');        
    }

}

/* End of file chov.php */
/* Location: ./application/controllers/chov.php */