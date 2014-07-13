<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kontakt extends CI_Controller {

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('kontakt');
        $this->load->view('templates/footer');
    }

}

/* End of file kontakt.php */
/* Location: ./application/controllers/kontakt.php */