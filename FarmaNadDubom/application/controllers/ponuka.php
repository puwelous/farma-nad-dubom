<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ponuka extends CI_Controller {

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('ponuka');
        $this->load->view('templates/footer');
    }

}

/* End of file ponuka.php */
/* Location: ./application/controllers/ponuka.php */