<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class O_nas extends CI_Controller {

    public function index() {
        
        $data['title'] = 'O nas';
        $data['description'] = 'Historia a sucasnost farmy Nad dubom';
        
        $this->load->view('templates/header', $data);
        $this->load->view('o_nas');
        $this->load->view('templates/footer');
    }

}

/* End of file o_nas.php */
/* Location: ./application/controllers/o_nas.php */