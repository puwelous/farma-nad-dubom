<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kontakt extends CI_Controller {

    public function index() {
        
        $data['title'] = 'Kontakt - Farma Nad dubom';
        $data['description'] = 'Kontaktne informacie farmy Nad dubom';
        
        $this->load->view('templates/header', $data);
        $this->load->view('kontakt');
        $this->load->view('templates/footer');
    }

}

/* End of file kontakt.php */
/* Location: ./application/controllers/kontakt.php */