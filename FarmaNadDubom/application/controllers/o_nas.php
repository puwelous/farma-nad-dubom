<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class O_nas extends CI_Controller {

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('o_nas');
        $this->load->view('templates/footer');
    }

}

/* End of file o_nas.php */
/* Location: ./application/controllers/o_nas.php */